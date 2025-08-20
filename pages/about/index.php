<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authentic Sri Lanka Travel | TULA REISEN</title>
    <meta name="description" content="Learn about the passionate team at TULA REISEN and our mission to offer meaningful travel experiences in Sri Lanka for German-speaking guests.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../../styles.css" rel="stylesheet">
    <link href="../home/styles.css" rel="stylesheet">
    <style>
      .values-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 15px;
        transition: all 0.3s ease;
      }
      .values-card:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-5px);
      }
      .hero-about {
        background: linear-gradient(135deg, rgba(13, 110, 253, 0.8), rgba(0, 58, 134, 0.8));
        min-height: 60vh;
        display: flex;
        align-items: center;
      }
    </style>
  </head>
  <body>
    <!-- Background -->
    <canvas id="bg-canvas" aria-hidden="true"></canvas>

    <!-- Nav Bar -->
    <?php include "../../includes/navbar.php" ?>

    <!-- Hero Section -->
    <section class="hero-about text-white">
      <div class="container text-center">
        <h1 class="display-4 fw-bold mb-4">A Passion for Sri Lanka, A Mission for Authentic Travel</h1>
        <p class="lead mb-4">TULA REISEN was born from a love for Sri Lanka's vibrant culture, rich nature, and heartfelt hospitality.</p>
      </div>
    </section>

    <!-- Main Content -->
    <section class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="text-center mb-5">
            <p class="lead text-white">
              We are a small, dedicated team with deep local connections and a strong understanding of what German-speaking travelers seek.
            </p>
            <p class="fs-5 text-white">
              We don't sell travel — we curate experiences. From remote villages and ancient temples to quiet beaches and local food discoveries, we open the door to a Sri Lanka most never see.
            </p>
          </div>
        </div>
      </div>

      <!-- Our Values -->
      <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
          <h2 class="section-title text-center mb-5 text-white">Our Values</h2>
          <div class="row g-4">
            <div class="col-md-6 col-lg-3">
              <div class="values-card h-100 p-4 text-center">
                <div class="icon-wrap mx-auto mb-3">
                  <i class="bi bi-gem text-primary" style="font-size: 2rem;"></i>
                </div>
                <h5 class="fw-bold mb-3 text-white">Authenticity</h5>
                <p class="mb-0 text-white">Over mass tourism</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="values-card h-100 p-4 text-center">
                <div class="icon-wrap mx-auto mb-3">
                  <i class="bi bi-recycle text-success" style="font-size: 2rem;"></i>
                </div>
                <h5 class="fw-bold mb-3 text-white">Sustainability</h5>
                <p class="mb-0 text-white">In every journey</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="values-card h-100 p-4 text-center">
                <div class="icon-wrap mx-auto mb-3">
                  <i class="bi bi-people text-warning" style="font-size: 2rem;"></i>
                </div>
                <h5 class="fw-bold mb-3 text-white">Connection</h5>
                <p class="mb-0 text-white">With people and places</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="values-card h-100 p-4 text-center">
                <div class="icon-wrap mx-auto mb-3">
                  <i class="bi bi-heart text-danger" style="font-size: 2rem;"></i>
                </div>
                <h5 class="fw-bold mb-3 text-white">Comfort & Care</h5>
                <p class="mb-0 text-white">Always</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CTA Section -->
      <div class="text-center">
        <h3 class="mb-4 text-white">Ready to Experience Authentic Sri Lanka?</h3>
        <a class="button-51" role="button" href="https://wa.me/94700000000?text=Hi%2C%20I%20want%20to%20learn%20more%20about%20TULA%20REISEN%20and%20plan%20a%20trip.">
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