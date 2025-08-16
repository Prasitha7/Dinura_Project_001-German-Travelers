// === /js/3d-hero.js ===
(function () {
  if (window._3dHeroInitialized) return;
  window._3dHeroInitialized = true;

  window.init3DHero = function init3DHero(options) {
    const {
      modelPath,
      cameraDistance = 5,
      modelEnvIntensity = 3.5
    } = options || {};

    // Use the fixed, full-page background canvas
    const canvas = document.getElementById("bg-canvas");
    if (!canvas) {
      console.warn("bg-canvas not found; aborting init3DHero.");
      return;
    }

    // Renderer
    const renderer = new THREE.WebGLRenderer({
      canvas: canvas,
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
    camera.lookAt(0, 0, 0);

    // Lights (keep simple; sky is not a light)
    const ambient = new THREE.AmbientLight(0xffffff, 2.0);
    const dir = new THREE.DirectionalLight(0xffffff, 2.5);
    dir.position.set(4, 8, 6);
    scene.add(ambient, dir);

    // --- Procedural Sky (background) ---
    // Huge dome that renders as the background inside this scene
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

    // Start with a gentle morning-ish sun
    let baseElevation = 10;   // degrees
    let azimuth = 180;        // south
    setSun(baseElevation, azimuth);

    // --- One-time environment bake from the sky (for PBR reflections) ---
    // Keeps metals from looking dull even without an HDRI.
    const pmremGen = new THREE.PMREMGenerator(renderer);
    pmremGen.compileEquirectangularShader();

    // Put a copy of the sky in a tiny "env scene" so we can bake a clean envMap
    const envScene = new THREE.Scene();
    const envSky = new THREE.Sky();
    envSky.scale.setScalar(10000);
    envScene.add(envSky);
    // sync uniforms
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
    scene.environment = envRT.texture; // <-- reflections come from the procedural sky
    // Keep transparent page background
    scene.background = null;

    // Model parent
    const pivot = new THREE.Object3D();
    scene.add(pivot);

    // Load GLTF/GLB
    const gltfLoader = new THREE.GLTFLoader();
    gltfLoader.load(
      modelPath,
      function (gltf) {
        pivot.clear();
        const model = gltf.scene;

        // Center the model at origin so it's directly in front of camera
        const box = new THREE.Box3().setFromObject(model);
        const center = new THREE.Vector3();
        box.getCenter(center);
        model.position.sub(center);

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
    }
    window.addEventListener("resize", resize);
    window.addEventListener("orientationchange", resize);
    resize();

    // Animate the sky a tiny bit (gentle breathing in elevation)
    let t = 0;
    function animate() {
      requestAnimationFrame(animate);

      t += 0.003; // slow
      const elev = baseElevation + 1.5 * Math.sin(t);
      setSun(elev, azimuth);       // visible background changes

      // NOTE: We keep reflections static for performance.
      // If you *really* want dynamic reflections, uncomment this block
      // to rebake every ~2 seconds (expensive on mobile):
      /*
      if (Math.floor(t * 0.5) % 4 === 0) {
        setEnvSun(elev, azimuth);
        if (envRT) envRT.dispose();
        envRT = pmremGen.fromScene(envScene);
        scene.environment = envRT.texture;
      }
      */

      composer.render();
    }
    animate();
  };
})();
