    <!-- Footer -->
    <footer class="site-footer text-white pt-5 pb-3">
  <div class="container">
    <div class="row g-4">
      <!-- Brand -->
      <div class="col-12 col-md-4">
        <h5 class="fw-bold mb-3">TULA REISEN</h5>
        <p class="small mb-0">Authentic, tailor-made Sri Lanka journeys for German-speaking travelers.</p>
      </div>

      <!-- Quick Links -->
      <div class="col-6 col-md-2">
        <h6 class="fw-bold mb-3">Explore</h6>
        <ul class="list-unstyled small">
          <li><a href="/Dinura_Project_001-German-Travelers/pages/home/" class="footer-link">Home</a></li>
          <li><a href="/Dinura_Project_001-German-Travelers/pages/about/" class="footer-link">About Us</a></li>
          <li><a href="/Dinura_Project_001-German-Travelers/pages/offers/" class="footer-link">Our Offers</a></li>
          <li><a href="/Dinura_Project_001-German-Travelers/pages/gallery/" class="footer-link">Gallery</a></li>
        </ul>
      </div>

      <!-- Support -->
      <div class="col-6 col-md-2">
        <h6 class="fw-bold mb-3">Support</h6>
        <ul class="list-unstyled small">
          <li><a href="/Dinura_Project_001-German-Travelers/pages/blog/" class="footer-link">Blog</a></li>
          <li><a href="/Dinura_Project_001-German-Travelers/pages/contact/" class="footer-link">Contact</a></li>
          <li><a href="https://wa.me/94700000000" class="footer-link">WhatsApp</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-12 col-md-4">
        <h6 class="fw-bold mb-3">Get in Touch</h6>
        <p class="small mb-1"><i class="bi bi-geo-alt me-2"></i>Colombo, Sri Lanka</p>
        <p class="small mb-1"><i class="bi bi-envelope me-2"></i>info@tulareisen.com</p>
        <p class="small"><i class="bi bi-telephone me-2"></i>+94 70 000 0000</p>
      </div>
    </div>

    <hr class="my-4 border-light">
    <div class="text-center small">
      &copy; <span id="year"></span> TULA REISEN · All rights reserved.
    </div>
  </div>
</footer>


    <!-- JS (left intact) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- Three.js core -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <!-- Loaders & helpers (global THREE.*) -->
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/RGBELoader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/pmrem/PMREMGenerator.js"></script>
    <!-- Post-processing -->
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/shaders/CopyShader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/postprocessing/EffectComposer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/postprocessing/RenderPass.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/postprocessing/ShaderPass.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/shaders/FXAAShader.js"></script>
    <!-- Procedural HDRI -->
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/objects/Sky.js"></script>

    <!-- Your app code -->
    <script src="../../js/3d-hero.js"></script>
    <script src="../../js/main.js"></script>

    <!-- Minimal page scripts -->
    <script>
      // Footer year
      document.getElementById('year').textContent = new Date().getFullYear();

      // WhatsApp popup toggle
      const fab = document.getElementById('wa-fab');
      const popup = document.getElementById('wa-popup');
      let waOpen = false;
      const toggleWA = () => {
        waOpen = !waOpen;
        popup.classList.toggle('show', waOpen);
      };
      fab.addEventListener('click', toggleWA);
      // Click away closes
      document.addEventListener('click', (e) => {
        if (waOpen && !popup.contains(e.target) && e.target !== fab) {
          toggleWA();
        }
      });
    </script>
  </body>
</html>
