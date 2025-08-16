// === /js/main.js ===
document.addEventListener("DOMContentLoaded", function () {
  if (typeof window.init3DHero !== "function") {
    console.warn("init3DHero not found");
    return;
  }
  window.init3DHero({
    modelPath: "../../assets/models/beauty_of_srilanka.glb",
    cameraDistance: 25,
    modelEnvIntensity: 3.5
    
  });
});
