<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sri Lanka Photo Gallery | TULA REISEN Travel Moments</title>
    <meta name="description" content="Get inspired by stunning travel photos from TULA REISEN's Sri Lanka journeys. Authentic moments, breathtaking landscapes, and local life.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../../styles.css" rel="stylesheet">
    <link href="../home/styles.css" rel="stylesheet">
    <style>
      .hero-gallery {
        background: linear-gradient(135deg, rgba(13, 110, 253, 0.8), rgba(0, 58, 134, 0.8));
        min-height: 60vh;
        display: flex;
        align-items: center;
      }
             .gallery-category {
         background: rgba(255, 255, 255, 0.1);
         backdrop-filter: blur(10px);
         border: 1px solid rgba(255, 255, 255, 0.2);
         border-radius: 15px;
         overflow: hidden;
         transition: all 0.3s ease;
         min-height: 350px;
         display: flex;
         flex-direction: column;
       }
       .gallery-category .position-relative {
         height: 200px;
         overflow: hidden;
       }
       .gallery-category .p-3 {
         flex: 1;
         display: flex;
         flex-direction: column;
         justify-content: center;
       }
      .gallery-category:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.15);
      }
      .gallery-img {
        aspect-ratio: 4 / 3;
        object-fit: cover;
        transition: transform 0.3s ease;
      }
      .gallery-img:hover {
        transform: scale(1.05);
      }
      .category-badge {
        position: absolute;
        top: 1rem;
        left: 1rem;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
      }
    </style>
  </head>
  <body>
    <!-- Background -->
    <canvas id="bg-canvas" aria-hidden="true"></canvas>

    <!-- Nav Bar -->
    <?php include "../../includes/navbar.php" ?>

    <!-- Hero Section -->
    <section class="hero-gallery text-white">
      <div class="container text-center">
        <h1 class="display-4 fw-bold mb-4">A Glimpse Into the Beauty of Sri Lanka</h1>
        <p class="lead mb-4">Browse through moments captured along our journeys — the smiles, the sunsets, the sacred sites, and the soul of this incredible island. Each photo tells a story of connection and discovery.</p>
      </div>
    </section>

    <!-- Gallery Categories -->
    <section class="container py-5">
      <div class="text-center mb-5">
        <h2 class="section-title" style="color: #FFD700;">Gallery Categories</h2>
        <p style="color: #FFD700;">Explore different aspects of Sri Lankan beauty</p>
      </div>

      <div class="row g-4 mb-5">
        <!-- Nature & Landscapes -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="gallery-category h-100">
            <div class="position-relative">
              <img class="gallery-img w-100" src="../../assets/images/1.jpg" alt="Nature & Landscapes">
              <div class="category-badge">Nature & Landscapes</div>
            </div>
            <div class="p-3">
              <h5 class="fw-bold mb-2 text-white">Nature & Landscapes</h5>
              <p class="mb-0 small text-white">Breathtaking vistas, lush forests, and untouched wilderness</p>
            </div>
          </div>
        </div>

        <!-- People & Culture -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="gallery-category h-100">
            <div class="position-relative">
              <img class="gallery-img w-100" src="../../assets/images/2.jpg" alt="People & Culture">
              <div class="category-badge">People & Culture</div>
            </div>
            <div class="p-3">
              <h5 class="fw-bold mb-2 text-white">People & Culture</h5>
              <p class="mb-0 small text-white">Warm smiles, traditional ceremonies, and authentic encounters</p>
            </div>
          </div>
        </div>

        <!-- Food & Markets -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="gallery-category h-100">
            <div class="position-relative">
              <img class="gallery-img w-100" src="../../assets/images/3.jpg" alt="Food & Markets">
              <div class="category-badge">Food & Markets</div>
            </div>
            <div class="p-3">
              <h5 class="fw-bold mb-2 text-white">Food & Markets</h5>
              <p class="mb-0 small text-white">Spices, fresh produce, and culinary adventures</p>
            </div>
          </div>
        </div>

        <!-- Our Travelers' Moments -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="gallery-category h-100">
            <div class="position-relative">
              <img class="gallery-img w-100" src="../../assets/images/4.png" alt="Our Travelers' Moments">
              <div class="category-badge">Travelers' Moments</div>
            </div>
            <div class="p-3">
              <h5 class="fw-bold mb-2 text-white">Our Travelers' Moments</h5>
              <p class="mb-0 small text-white">Happy guests creating unforgettable memories</p>
            </div>
          </div>
        </div>

        <!-- Hidden Gems -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="gallery-category h-100">
            <div class="position-relative">
              <img class="gallery-img w-100" src="../../assets/images/5.jpg" alt="Hidden Gems">
              <div class="category-badge">Hidden Gems</div>
            </div>
            <div class="p-3">
              <h5 class="fw-bold mb-2 text-white">Hidden Gems</h5>
              <p class="mb-0 small text-white">Secret spots and off-the-beaten-path discoveries</p>
            </div>
          </div>
        </div>

        <!-- Temple & Heritage -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="gallery-category h-100">
            <div class="position-relative">
              <img class="gallery-img w-100" src="../../assets/images/6.jpg" alt="Temples & Heritage">
              <div class="category-badge">Temples & Heritage</div>
            </div>
            <div class="p-3">
              <h5 class="fw-bold mb-2 text-white">Temples & Heritage</h5>
              <p class="mb-0 small text-white">Ancient architecture and spiritual sanctuaries</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Additional Gallery Grid -->
      <div class="text-center mb-4">
        <h3 class="section-title" style="color: #FFD700;">Recent Moments</h3>
        <p style="color: #FFD700;">Latest captures from our Sri Lanka adventures</p>
      </div>

      <div class="row g-3">
        <div class="col-6 col-md-4 col-lg-3">
          <div class="position-relative overflow-hidden rounded-3">
            <img class="gallery-img w-100 shadow-sm" src="../../assets/images/pexels-freestockpro-321571.jpg" alt="Sri Lankan Beach">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <div class="position-relative overflow-hidden rounded-3">
            <img class="gallery-img w-100 shadow-sm" src="../../assets/images/pexels-alexazabache-3250362.jpg" alt="Mountain Landscape">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <div class="position-relative overflow-hidden rounded-3">
            <img class="gallery-img w-100 shadow-sm" src="../../assets/images/pexels-jalitha-hewage-1324742-2547175.jpg" alt="Local Culture">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <div class="position-relative overflow-hidden rounded-3">
            <img class="gallery-img w-100 shadow-sm" src="../../assets/images/pexels-tomas-malik-793526-1998439.jpg" alt="Travel Moment">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <div class="position-relative overflow-hidden rounded-3">
            <img class="gallery-img w-100 shadow-sm" src="../../assets/images/pexels-kavindra-yasas-175608-3073033.jpg" alt="Hidden Gem">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <div class="position-relative overflow-hidden rounded-3">
            <img class="gallery-img w-100 shadow-sm" src="../../assets/images/pexels-genine-alyssa-pedreno-andrada-1263127-2403209.jpg" alt="Temple Architecture">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <div class="position-relative overflow-hidden rounded-3">
            <img class="gallery-img w-100 shadow-sm" src="../../assets/images/pexels-freestockpro-321524.jpg" alt="Local Market">
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
          <div class="position-relative overflow-hidden rounded-3">
            <img class="gallery-img w-100 shadow-sm" src="../../assets/images/90894_Tourism-accounts-for-a-large-part-of-Sri-Lankas-economy.jpg" alt="Coastal Beauty">
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="text-center py-5">
      <div class="container">
        <h3 class="mb-4 text-white">Want to create your own memories in Sri Lanka?</h3>
        <a class="button-51" role="button" href="https://wa.me/94700000000?text=I%27d%20like%20to%20create%20my%20own%20Sri%20Lanka%20memories%20with%20TULA%20REISEN.">
          <span>Start Your Journey</span>
        </a>
      </div>
    </section>

    <!-- Floating WhatsApp popup -->
    <button id="wa-fab" class="wa-fab" aria-label="Open WhatsApp chat">
      <i class="bi bi-whatsapp"></i>
    </button>
    <div id="wa-popup" class="wa-popup card shadow-lg">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <i class="bi bi-whatsapp fs-4 me-2"></i>
          <strong>Chat with TULA REISEN</strong>
        </div>
        <p class="small mb-3">Any doubts? Give us a ring anytime — or message us on WhatsApp.</p>
        <a class="button-51 d-inline-block" role="button" target="_blank"
           href="https://wa.me/94700000000?text=Hi%2C%20I%27d%20like%20to%20plan%20a%20custom%20trip%20to%20Sri%20Lanka."><span>Open WhatsApp</span></a>
      </div>
    </div>

<?php include "../../includes/footer.php" ?> 