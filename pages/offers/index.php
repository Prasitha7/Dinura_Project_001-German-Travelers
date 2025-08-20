<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tailor-Made Travel Packages in Sri Lanka | TULA REISEN</title>
    <meta name="description" content="Discover our customizable Sri Lanka tours. TULA REISEN offers unique travel experiences for German-speaking guests, from beaches to tea country.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../../styles.css" rel="stylesheet">
    <link href="../home/styles.css" rel="stylesheet">
    <style>
      .hero-offers {
        background: linear-gradient(135deg, rgba(13, 110, 253, 0.8), rgba(0, 58, 134, 0.8));
        min-height: 60vh;
        display: flex;
        align-items: center;
      }
      .experience-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 15px;
        transition: all 0.3s ease;
      }
      .experience-card:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-5px);
      }
      .sample-itinerary {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 15px;
        border-left: 4px solid var(--tula-accent, #0d6efd);
      }
    </style>
  </head>
  <body>
    <!-- Background -->
    <canvas id="bg-canvas" aria-hidden="true"></canvas>

    <!-- Nav Bar -->
    <?php include "../../includes/navbar.php" ?>

    <!-- Hero Section -->
    <section class="hero-offers text-white">
      <div class="container text-center">
        <h1 class="display-4 fw-bold mb-4">Custom Sri Lanka Tours, Designed Just for You</h1>
        <p class="lead mb-4">We don't believe in one-size-fits-all holidays. Every traveler is different — that's why we create custom itineraries based on your travel style, interests, and pace.</p>
      </div>
    </section>

    <!-- Types of Experiences -->
    <section class="container py-5">
      <div class="text-center mb-5">
        <h2 class="section-title" style="color: #FFD700;">Types of Experiences We Offer</h2>
        <p style="color: #FFD700;">Choose your adventure or let us combine multiple experiences for you</p>
      </div>

      <div class="row g-4">
        <!-- Nature & Wildlife -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="experience-card h-100 p-4">
            <div class="text-center mb-3">
              <i class="bi bi-tree text-success" style="font-size: 3rem;"></i>
            </div>
            <h5 class="fw-bold mb-3 text-white">Nature & Wildlife</h5>
            <p class="mb-3 text-white">National parks, elephants, and jungle stays</p>
            <a class="button-51" href="https://wa.me/94700000000?text=I%27m%20interested%20in%20Nature%20%26%20Wildlife%20experiences%20in%20Sri%20Lanka.">
              <span>Plan This Experience</span>
            </a>
          </div>
        </div>

        <!-- Cultural Journeys -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="experience-card h-100 p-4">
            <div class="text-center mb-3">
              <i class="bi bi-building text-warning" style="font-size: 3rem;"></i>
            </div>
            <h5 class="fw-bold mb-3 text-white">Cultural Journeys</h5>
            <p class="mb-3 text-white">Temples, traditions, local crafts</p>
            <a class="button-51" href="https://wa.me/94700000000?text=Tell%20me%20about%20Cultural%20Journey%20experiences%20in%20Sri%20Lanka.">
              <span>Plan This Experience</span>
            </a>
          </div>
        </div>

        <!-- Beach Escapes -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="experience-card h-100 p-4">
            <div class="text-center mb-3">
              <i class="bi bi-water text-info" style="font-size: 3rem;"></i>
            </div>
            <h5 class="fw-bold mb-3 text-white">Beach Escapes</h5>
            <p class="mb-3 text-white">South coast beauty, surfing, relaxation</p>
            <a class="button-51" href="https://wa.me/94700000000?text=I%20want%20a%20beach%20escape%20experience%20in%20Sri%20Lanka.">
              <span>Plan This Experience</span>
            </a>
          </div>
        </div>

        <!-- Tea Country Trails -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="experience-card h-100 p-4">
            <div class="text-center mb-3">
              <i class="bi bi-cup-hot text-danger" style="font-size: 3rem;"></i>
            </div>
            <h5 class="fw-bold mb-3 text-white">Tea Country Trails</h5>
            <p class="mb-3 text-white">Train rides, mountain views, cool breezes</p>
            <a class="button-51" href="https://wa.me/94700000000?text=I%27m%20interested%20in%20Tea%20Country%20Trail%20experiences.">
              <span>Plan This Experience</span>
            </a>
          </div>
        </div>

        <!-- Family-Friendly Adventures -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="experience-card h-100 p-4">
            <div class="text-center mb-3">
              <i class="bi bi-people text-primary" style="font-size: 3rem;"></i>
            </div>
            <h5 class="fw-bold mb-3 text-white">Family-Friendly Adventures</h5>
            <p class="mb-3 text-white">Fun for all ages with comfort and safety</p>
            <a class="button-51" href="https://wa.me/94700000000?text=We%20need%20a%20family-friendly%20itinerary%20for%20Sri%20Lanka.">
              <span>Plan This Experience</span>
            </a>
          </div>
        </div>

        <!-- Honeymoons & Romantic Travel -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="experience-card h-100 p-4">
            <div class="text-center mb-3">
              <i class="bi bi-heart text-danger" style="font-size: 3rem;"></i>
            </div>
            <h5 class="fw-bold mb-3 text-white">Honeymoons & Romantic Travel</h5>
            <p class="mb-3 text-white">Intimate moments and special memories</p>
            <a class="button-51" href="https://wa.me/94700000000?text=We%20want%20a%20romantic%20honeymoon%20experience%20in%20Sri%20Lanka.">
              <span>Plan This Experience</span>
            </a>
          </div>
        </div>

        <!-- Wellness Retreats -->
        <div class="col-12 col-md-6 col-lg-4 mx-auto">
          <div class="experience-card h-100 p-4">
            <div class="text-center mb-3">
              <i class="bi bi-heart-pulse text-success" style="font-size: 3rem;"></i>
            </div>
            <h5 class="fw-bold mb-3 text-white">Wellness Retreats</h5>
            <p class="mb-3 text-white">Rejuvenate your mind, body, and soul</p>
            <a class="button-51" href="https://wa.me/94700000000?text=I%27m%20interested%20in%20wellness%20retreat%20experiences%20in%20Sri%20Lanka.">
              <span>Plan This Experience</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Sample Itinerary -->
    <section class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="sample-itinerary p-4">
            <h6 class="text-uppercase mb-3 text-white">Sample Itinerary</h6>
            <div class="row g-3 mb-4">
              <div class="col-12 col-md-6 col-lg-3">
                <strong class="text-white">Day 1</strong><br>
                <small class="text-white">Arrival & welcome dinner</small>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <strong class="text-white">Day 2–4</strong><br>
                <small class="text-white">Kandy & cultural triangle</small>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <strong class="text-white">Day 5–7</strong><br>
                <small class="text-white">Ella, tea plantations & scenic train</small>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <strong class="text-white">Day 8–10</strong><br>
                <small class="text-white">South coast beach & village experience</small>
              </div>
            </div>
            <div class="text-center">
              <a class="button-52" role="button" href="https://wa.me/94700000000?text=I%27d%20like%20to%20customize%20this%20sample%20itinerary.">
                Customize This Itinerary
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-band text-center text-white py-5">
      <div class="container">
        <h3 class="mb-3">Let us plan your perfect trip — Get in touch for a free consultation</h3>
        <a class="button-52" role="button" href="https://wa.me/94700000000?text=I%27d%20like%20a%20free%20consultation%20for%20my%20Sri%20Lanka%20trip.">Get Free Consultation</a>
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