// === /js/3d-hero.js ===
(function () {
  if (window._3dHeroInitialized) return;
  window._3dHeroInitialized = true;

  window.init3DHero = function init3DHero(options) {
    const {
      modelPath,
      cameraDistance = 3.2,   // closer 
      modelEnvIntensity = 3.5,
      spinSpeed = 8,          // steady degrees per second
      // NEW: interaction tuning
      scrollXRange = 1.6,     // total horizontal travel 
      mouseYRange = 1.0,      // total vertical travel 
      followDamp = 0.08       // smoothing 
    } = options || {};

    const canvas = document.getElementById("bg-canvas");
    if (!canvas) {
      console.warn("bg-canvas not found; aborting init3DHero.");
      return;
    }

    // Renderer
    const renderer = new THREE.WebGLRenderer({
      canvas,
      antialias: true,
      alpha: true,
      powerPreference: "high-performance"
    });
    renderer.outputEncoding = THREE.sRGBEncoding;
    renderer.toneMapping = THREE.ACESFilmicToneMapping;
    renderer.toneMappingExposure = 1.0;
    renderer.physicallyCorrectLights = true;
    renderer.dither = true;

    // Scene & camera
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(50, 1, 0.1, 100);
    camera.position.set(0, 0, cameraDistance);
    camera.up.set(0, 1, 0);

    // Lock camera to the horizon (fixed gaze)
    function lookToHorizon() {
      const target = new THREE.Vector3(0, 0, -1).add(camera.position);
      camera.lookAt(target);
    }
    lookToHorizon();

    // Lights
    const ambient = new THREE.AmbientLight(0xffffff, 2.0);
    const dir = new THREE.DirectionalLight(0xffffff, 2.5);
    dir.position.set(4, 8, 6);
    scene.add(ambient, dir);

    // Procedural Sky
    const sky = new THREE.Sky();
    sky.scale.setScalar(10000);
    scene.add(sky);

    const skyU = sky.material.uniforms;
    skyU["turbidity"].value = 8.0;
    skyU["rayleigh"].value = 2.0;
    skyU["mieCoefficient"].value = 0.005;
    skyU["mieDirectionalG"].value = 0.8;

    const sun = new THREE.Vector3();
    function setSun(elevationDeg, azimuthDeg) {
      const phi = THREE.MathUtils.degToRad(90 - elevationDeg);
      const theta = THREE.MathUtils.degToRad(azimuthDeg);
      sun.setFromSphericalCoords(1, phi, theta);
      skyU["sunPosition"].value.copy(sun);
    }

    let baseElevation = 10;
    let azimuth = 180;
    setSun(baseElevation, azimuth);

    // Environment from sky
    const pmremGen = new THREE.PMREMGenerator(renderer);
    pmremGen.compileEquirectangularShader();

    const envScene = new THREE.Scene();
    const envSky = new THREE.Sky();
    envSky.scale.setScalar(10000);
    envScene.add(envSky);

    const envU = envSky.material.uniforms;
    envU["turbidity"].value = skyU["turbidity"].value;
    envU["rayleigh"].value = skyU["rayleigh"].value;
    envU["mieCoefficient"].value = skyU["mieCoefficient"].value;
    envU["mieDirectionalG"].value = skyU["mieDirectionalG"].value;

    function setEnvSun(elev, azim) {
      const phi = THREE.MathUtils.degToRad(90 - elev);
      const theta = THREE.MathUtils.degToRad(azim);
      const v = new THREE.Vector3().setFromSphericalCoords(1, phi, theta);
      envU["sunPosition"].value.copy(v);
    }

    setEnvSun(baseElevation, azimuth);
    let envRT = pmremGen.fromScene(envScene);
    scene.environment = envRT.texture;
    scene.background = null;

    // Model pivot (for spin + motion)
    const pivot = new THREE.Object3D();
    scene.add(pivot);

    // Load model
    const gltfLoader = new THREE.GLTFLoader();
    gltfLoader.load(
      modelPath,
      function (gltf) {
        pivot.clear();
        const model = gltf.scene;

        // Center at origin
        const box = new THREE.Box3().setFromObject(model);
        const center = new THREE.Vector3();
        box.getCenter(center);
        model.position.sub(center);

        // Scale to fill ~x% of view height at current cameraDistance
        const size = box.getSize(new THREE.Vector3());
        const maxDim = Math.max(size.x, size.y, size.z);
        const targetScreenFill = 1.3;
        const fovRad = THREE.MathUtils.degToRad(camera.fov);
        const visibleH = 2 * Math.tan(fovRad / 2) * cameraDistance;
        const desiredH = visibleH * targetScreenFill;
        if (maxDim > 0) {
          const s = desiredH / maxDim;
          model.scale.multiplyScalar(s);
        }

        model.traverse(function (obj) {
          if (obj.isMesh && obj.material) {
            if ("envMapIntensity" in obj.material) obj.material.envMapIntensity = modelEnvIntensity;
            if ("metalness" in obj.material)       obj.material.metalness = 0.1;
            if ("roughness" in obj.material)       obj.material.roughness = 0.5;
            obj.material.needsUpdate = true;
          }
        });

        pivot.add(model);
      },
      undefined,
      function (err) {
        console.error("GLTF load error:", err);
      }
    );

    // Post-processing (FXAA)
    const composer = new THREE.EffectComposer(renderer);
    const renderPass = new THREE.RenderPass(scene, camera);
    composer.addPass(renderPass);
    const fxaaPass = new THREE.ShaderPass(THREE.FXAAShader);
    composer.addPass(fxaaPass);

    // Resize
    function resize() {
      const dpr = Math.min(window.devicePixelRatio || 1, 2);
      const rect = canvas.getBoundingClientRect();
      const cssW = Math.max(1, Math.floor(rect.width));
      const cssH = Math.max(1, Math.floor(rect.height));

      renderer.setPixelRatio(dpr);
      renderer.setSize(cssW, cssH, false);
      camera.aspect = cssW / cssH;
      camera.updateProjectionMatrix();

      composer.setSize(cssW, cssH);
      if (fxaaPass?.material?.uniforms?.resolution) {
        fxaaPass.material.uniforms.resolution.value.set(1 / (cssW * dpr), 1 / (cssH * dpr));
      }

      lookToHorizon();
    }
    window.addEventListener("resize", resize);
    window.addEventListener("orientationchange", resize);
    resize();

    // ===== NEW: Interaction state =====
    // Scroll → horizontal motion (start slightly right, go left on scroll down)
    let scrollProgress = 0;           // 0..1
    function updateScrollProgress() {
      const doc = document.documentElement;
      const maxScroll = Math.max(1, doc.scrollHeight - window.innerHeight);
      const y = Math.min(maxScroll, Math.max(0, window.scrollY || window.pageYOffset || 0));
      scrollProgress = y / maxScroll; // 0 (top) -> 1 (bottom)
    }
    window.addEventListener("scroll", updateScrollProgress, { passive: true });
    updateScrollProgress();

    // Mouse → vertical motion (mouse down => model up)
    let inputY = 0; // -1..1 (bottom = +1)
    window.addEventListener("mousemove", (e) => {
      const h = window.innerHeight || 1;
      inputY = ((e.clientY / h) - 0.5) * 2; // bottom → +1
    }, { passive: true });
    window.addEventListener("touchmove", (e) => {
      if (!e.touches || e.touches.length === 0) return;
      const h = window.innerHeight || 1;
      inputY = ((e.touches[0].clientY / h) - 0.5) * 2;
    }, { passive: true });

    // Targets and smoothed positions for the pivot
    let targetX = 0, currentX = 0;
    let targetY = 0, currentY = 0;

    // Start slightly to the RIGHT at top (progress=0), glide LEFT as you scroll
    // startX = +scrollXRange/2  → endX = -scrollXRange/2
    function computeTargets() {
      // Gentle easing so it feels "slow"
      const p = Math.pow(scrollProgress, 0.9);
      const startX = +scrollXRange * 0.5;
      const endX   = -scrollXRange * 0.5;
      targetX = THREE.MathUtils.lerp(startX, endX, p);

      // Mouse down (larger clientY) => inputY closer to +1 => positive Y => model goes UP
      targetY = THREE.MathUtils.clamp(inputY, -1, 1) * mouseYRange;
    }

    // Animation loop (spin + motion)
    let t = 0;
    const spinRadPerSec = THREE.MathUtils.degToRad(spinSpeed);
    let lastTime = performance.now();

    function animate(now) {
      requestAnimationFrame(animate);

      // Delta seconds
      const dt = Math.max(0, (now - lastTime) / 1000);
      lastTime = now;

      // Sky breathing
      t += 0.003;
      const elev = baseElevation + 1.5 * Math.sin(t);
      setSun(elev, azimuth);

      // Steady auto-spin
      pivot.rotation.y += spinRadPerSec * dt;

      // Update motion targets and smoothly follow
      computeTargets();
      currentX = THREE.MathUtils.lerp(currentX, targetX, followDamp);
      currentY = THREE.MathUtils.lerp(currentY, targetY, followDamp);
      pivot.position.set(currentX, currentY, 0);

      // Keep camera fixed & horizon-locked
      composer.render();
    }
    requestAnimationFrame(animate);

    // Cleanup
    window.addEventListener("beforeunload", () => {
      if (envRT) envRT.dispose();
      pmremGen.dispose();
      renderer.dispose();
    });
  };
})();
