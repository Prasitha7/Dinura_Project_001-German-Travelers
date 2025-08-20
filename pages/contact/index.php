<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact TULA REISEN | Plan Your Sri Lanka Adventure</title>
    <meta name="description" content="Have questions or ready to plan your Sri Lanka trip? Contact TULA REISEN for personalized travel planning in English or German.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../../styles.css" rel="stylesheet">
    <link href="../home/styles.css" rel="stylesheet">
    <style>
      .hero-contact {
        background: linear-gradient(135deg, rgba(13, 110, 253, 0.8), rgba(0, 58, 134, 0.8));
        min-height: 60vh;
        display: flex;
        align-items: center;
      }
      .contact-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 15px;
      }
      .form-control, .form-select {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #000;
      }
      .form-control:focus, .form-select:focus {
        background: rgba(255, 255, 255, 0.15);
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
        color: #000;
      }
      .form-control::placeholder {
        color: rgba(0, 0, 0, 0.6);
      }
      .contact-info-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 15px;
        transition: all 0.3s ease;
      }
      .contact-info-card:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-5px);
      }
    </style>
  </head>
  <body>
    <!-- Background -->
    <canvas id="bg-canvas" aria-hidden="true"></canvas>

    <!-- Nav Bar -->
    <?php include "../../includes/navbar.php" ?>

    <!-- Hero Section -->
    <section class="hero-contact text-white">
      <div class="container text-center">
        <h1 class="display-4 fw-bold mb-4">We'd Love to Hear From You</h1>
        <p class="lead mb-4">Ready to start planning or just have a question? Reach out to us — we speak German and are happy to help. We'll respond personally and quickly.</p>
      </div>
    </section>

    <!-- Contact Form & Info -->
    <section class="container py-5">
      <div class="row g-5">
        <!-- Contact Form -->
        <div class="col-lg-8">
          <div class="contact-card p-4">
            <h3 class="mb-4">Send Us a Message</h3>
            <form action="#" method="POST">
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="name" class="form-label">Name *</label>
                  <input type="text" class="form-control" id="name" name="name" required placeholder="Your full name">
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label">Email *</label>
                  <input type="email" class="form-control" id="email" name="email" required placeholder="your.email@example.com">
                </div>
                <div class="col-md-6">
                  <label for="travel_dates" class="form-label">Travel Dates (Optional)</label>
                  <input type="text" class="form-control" id="travel_dates" name="travel_dates" placeholder="e.g., March 2024 or Flexible">
                </div>
                <div class="col-md-6">
                  <label for="trip_type" class="form-label">Type of Trip / Interests</label>
                  <select class="form-select" id="trip_type" name="trip_type">
                    <option value="">Select your interest</option>
                    <option value="nature_wildlife">Nature & Wildlife</option>
                    <option value="cultural">Cultural Journeys</option>
                    <option value="beach">Beach Escapes</option>
                    <option value="tea_country">Tea Country Trails</option>
                    <option value="family">Family-Friendly Adventures</option>
                    <option value="honeymoon">Honeymoons & Romantic Travel</option>
                    <option value="wellness">Wellness Retreats</option>
                    <option value="custom">Custom / Mixed Experiences</option>
                  </select>
                </div>
                <div class="col-12">
                  <label for="message" class="form-label">Message *</label>
                  <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Tell us about your dream Sri Lanka trip or any questions you have..."></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="button-51">
                    <span>Send Message</span>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Contact Information -->
        <div class="col-lg-4">
          <div class="contact-info-card p-4 mb-4">
            <h4 class="mb-4">Direct Contact Info</h4>
            <div class="d-flex align-items-center mb-3">
              <i class="bi bi-envelope-fill text-primary fs-4 me-3"></i>
              <div>
                <strong>Email</strong><br>
                <a href="mailto:info@tulareisen.com" class="text-decoration-none">info@tulareisen.com</a>
              </div>
            </div>
            <div class="d-flex align-items-center mb-3">
              <i class="bi bi-telephone-fill text-success fs-4 me-3"></i>
              <div>
                <strong>Phone</strong><br>
                <a href="tel:+94700000000" class="text-decoration-none">+94 70 000 0000</a>
              </div>
            </div>
            <div class="d-flex align-items-center mb-3">
              <i class="bi bi-whatsapp text-success fs-4 me-3"></i>
              <div>
                <strong>WhatsApp</strong><br>
                <a href="https://wa.me/94700000000" class="text-decoration-none">Start Chat</a>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <i class="bi bi-geo-alt-fill text-danger fs-4 me-3"></i>
              <div>
                <strong>Location</strong><br>
                Colombo, Sri Lanka
              </div>
            </div>
          </div>

          <div class="contact-info-card p-4">
            <h5 class="mb-3">Languages We Speak</h5>
            <div class="d-flex flex-wrap gap-2">
              <span class="badge bg-primary">German</span>
              <span class="badge bg-secondary">English</span>
              <span class="badge bg-info">Sinhala</span>
            </div>
            <hr>
            <h6 class="mb-2">Response Time</h6>
            <p class="mb-0 small">We typically respond within 2-4 hours during business hours (Sri Lanka time).</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Quick Contact Options -->
    <section class="container py-5">
      <div class="text-center mb-4">
        <h3 class="section-title" style="color: #FFD700;">Prefer to Chat?</h3>
        <p style="color: #FFD700;">Choose your preferred way to get in touch</p>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-md-4">
          <div class="contact-info-card p-4 text-center h-100">
            <i class="bi bi-whatsapp text-success" style="font-size: 3rem;"></i>
            <h5 class="mt-3 mb-3">WhatsApp Chat</h5>
            <p class="mb-3">Quick questions? Start a chat now!</p>
            <a class="button-51" href="https://wa.me/94700000000?text=Hi%2C%20I%20have%20questions%20about%20Sri%20Lanka%20travel.">
              <span>Start Chat</span>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-info-card p-4 text-center h-100">
            <i class="bi bi-telephone text-primary" style="font-size: 3rem;"></i>
            <h5 class="mt-3 mb-3">Phone Call</h5>
            <p class="mb-3">Speak directly with our team</p>
            <a class="button-51" href="tel:+94700000000">
              <span>Call Now</span>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-info-card p-4 text-center h-100">
            <i class="bi bi-envelope text-warning" style="font-size: 3rem;"></i>
            <h5 class="mt-3 mb-3">Email Us</h5>
            <p class="mb-3">Detailed questions? Send an email</p>
            <a class="button-51" href="mailto:info@tulareisen.com">
              <span>Send Email</span>
            </a>
          </div>
        </div>
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