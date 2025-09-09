<?php
include 'backend/config/Database.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Access Ability Africa Limited - Empowering Every Learner</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Custom CSS -->
    <style>
      :root {
        --primary-green: #28a745;
        --secondary-blue: #007bff;
        --dark-black: #212529;
        --light-gray: #f8f9fa;
        --white: #ffffff;
        --muted: #6c757d;
      }

      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: var(--dark-black);
      }

      .bg-gradient-primary {
        background: linear-gradient(135deg, var(--primary-green), #20c997);
      }

      .bg-gradient-secondary {
        background: linear-gradient(135deg, var(--secondary-blue), #0056b3);
      }

      .text-primary {
        color: var(--primary-green) !important;
      }

      .text-secondary {
        color: var(--secondary-blue) !important;
      }

      .btn-primary {
        background-color: var(--primary-green);
        border-color: var(--primary-green);
      }

      .btn-primary:hover {
        background-color: #218838;
        border-color: #1e7e34;
      }

      .btn-secondary {
        background-color: var(--secondary-blue);
        border-color: var(--secondary-blue);
      }

      .btn-secondary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
      }

      .btn-outline-primary {
        color: var(--primary-green);
        border-color: var(--primary-green);
      }

      .btn-outline-primary:hover {
        background-color: var(--primary-green);
        border-color: var(--primary-green);
      }

      .navbar {
        background-color: rgba(255, 255, 255, 0.95) !important;
        backdrop-filter: blur(10px);
        border-bottom: 1px solid #dee2e6;
      }

      .navbar-brand {
        font-weight: bold;
        color: var(--dark-black) !important;
      }

      .nav-link {
        color: var(--dark-black) !important;
        font-weight: 500;
        transition: color 0.3s ease;
      }

      .nav-link:hover {
        color: var(--primary-green) !important;
      }

      .hero-section {
        background: linear-gradient(135deg, var(--white), var(--light-gray));
        min-height: 100vh;
        padding-top: 80px;
      }

      .hero-title {
        font-size: 3.5rem;
        font-weight: bold;
        line-height: 1.2;
      }

      .hero-gradient {
        background: linear-gradient(
          135deg,
          var(--primary-green),
          var(--secondary-blue)
        );
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }

      .card {
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
      }

      .card:hover {
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
      }

      .icon-box {
        width: 48px;
        height: 48px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
      }

      .stats-box {
        text-align: center;
        padding: 1rem;
      }

      .stats-number {
        font-size: 2rem;
        font-weight: bold;
        color: var(--primary-green);
      }

      .footer {
        background-color: var(--primary-green);
        color: white;
      }

      .footer a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
      }

      .footer a:hover {
        color: var(--secondary-blue);
      }

      .progress {
        height: 8px;
        border-radius: 4px;
      }

      .progress-bar {
        background-color: var(--primary-green);
      }

      .testimonial-card {
        background: linear-gradient(
          135deg,
          var(--primary-green),
          var(--secondary-blue)
        );
        color: white;
      }

      .contact-form {
        background-color: var(--light-gray);
      }

      .section-padding {
        padding: 5rem 0;
      }

      .mobile-menu {
        display: none;
      }

      @media (max-width: 768px) {
        .hero-title {
          font-size: 2.5rem;
        }

        .mobile-menu {
          display: block;
        }

        .desktop-menu {
          display: none;
        }
      }
    </style>
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <div class="d-flex align-items-center">
          <div class="icon-box  me-3">
            <img src="public/LOGO.jpg" alt="AAA Logo" style="width: 40px; height: 40px; object-fit: contain; border-radius: 8px; background: #fff; padding: 2px;" />
          </div>
          <div>
            <h1 class="navbar-brand mb-0">Access Ability Africa</h1>
            <p class="text-muted small mb-0">Limited</p>
          </div>
        </div>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#innovation">Innovation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#impact">Impact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#partners">Partners</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <button class="btn btn-secondary btn-sm ms-2">
                Get Involved
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center min-vh-100">
          <div class="col-lg-6">
            <h1 class="hero-title mb-4">
              Empowering Every Learner Through
              <span class="hero-gradient">Inclusive Technology</span>
            </h1>
            <p class="lead text-muted mb-4">
              Access Ability Africa Limited is transforming education for the
              800,000+ visually impaired learners in Malawi through our
              innovative AI-powered Blind Classroom system.
            </p>
            <div class="d-flex flex-column flex-sm-row gap-3 mb-5">
              <button class="btn btn-primary btn-lg">
                See Our Impact
                <i class="bi bi-arrow-right ms-2"></i>
              </button>
              <button class="btn btn-outline-primary btn-lg">
                <i class="bi bi-play me-2"></i>
                Watch Story
              </button>
              <!-- Watch Story Modal Trigger -->
              <button class="d-none" id="watchStoryModalBtn" data-bs-toggle="modal" data-bs-target="#watchStoryModal"></button>

              <!-- Watch Story Modal -->
              <div class="modal fade" id="watchStoryModal" tabindex="-1" aria-labelledby="watchStoryModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="watchStoryModalLabel">Our Story</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                      <div class="ratio ratio-16x9">
                        <iframe id="watchStoryVideo" src="https://www.youtube.com/embed/1y6smkh6c-0" title="Watch Story Video" allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<script>
  // Open modal when Watch Story button is clicked
  document.addEventListener('DOMContentLoaded', function() {
    const watchBtn = document.querySelector('.btn-outline-primary.btn-lg');
    const modalBtn = document.getElementById('watchStoryModalBtn');
    if (watchBtn && modalBtn) {
      watchBtn.addEventListener('click', function(e) {
        // Only trigger for "Watch Story" button
        if (watchBtn.textContent.includes('Watch Story')) {
          e.preventDefault();
          modalBtn.click();
        }
      });
    }
    // Pause video when modal closes
    const modal = document.getElementById('watchStoryModal');
    if (modal) {
      modal.addEventListener('hidden.bs.modal', function () {
        const iframe = document.getElementById('watchStoryVideo');
        if (iframe) {
          iframe.src = iframe.src;
        }
      });
    }
  });
</script>
            </div>

            <!-- Quick Stats -->
            <div class="row border-top pt-4">
              <div class="col-4">
                <div class="stats-box">
                  <div class="stats-number">90+</div>
                  <div class="text-muted small">Systems Deployed</div>
                </div>
              </div>
              <div class="col-4">
                <div class="stats-box">
                  <div class="stats-number text-secondary">14</div>
                  <div class="text-muted small">Schools Phase 1</div>
                </div>
              </div>
              <div class="col-4">
                <div class="stats-box">
                  <div class="stats-number text-primary">2,000+</div>
                  <div class="text-muted small">Learners Reached</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="position-relative">
              <img
                src="src/assets/hero-classroom.jpg"
                alt="Student using the Blind Classroom system"
                class="img-fluid rounded-3 shadow"
              />
              <div
                class="position-absolute bottom-0 start-0 bg-white p-4 rounded-3 shadow m-3"
              >
                <div class="d-flex align-items-center">
                  <div class="icon-box bg-gradient-primary me-3">
                    <span class="text-white fw-bold">✓</span>
                  </div>
                  <div>
                    <div class="fw-semibold">UN SDG Award Winner</div>
                    <div class="text-muted small">
                      Recognized for innovation
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding bg-light">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="display-4 fw-bold mb-4">Our Story & Mission</h2>
          <p class="lead text-muted">
            Founded on January 14, 2025, Access Ability Africa Limited is a
            Malawian-based inclusive EdTech and social enterprise dedicated to
            revolutionizing education for visually impaired learners.
          </p>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6">
            <div class="card mb-4">
              <div class="card-body">
                <div class="d-flex">
                  <div class="icon-box bg-gradient-primary me-3">
                    <i class="bi bi-geo-alt text-white"></i>
                  </div>
                  <div>
                    <h5 class="fw-semibold">Headquarters</h5>
                    <p class="text-muted mb-1">Lilongwe, Malawi</p>
                    <p class="text-muted small">Registration: COY-BWUM6YL</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card mb-4">
              <div class="card-body">
                <div class="d-flex">
                  <div class="icon-box bg-gradient-secondary me-3">
                    <i class="bi bi-calendar text-white"></i>
                  </div>
                  <div>
                    <h5 class="fw-semibold">Founded</h5>
                    <p class="text-muted mb-1">January 14, 2025</p>
                    <p class="text-muted small">Making impact from day one</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="d-flex">
                  <div class="icon-box bg-primary me-3">
                    <i class="bi bi-people text-white"></i>
                  </div>
                  <div>
                    <h5 class="fw-semibold">Our Vision</h5>
                    <p class="text-muted">
                      A world where every learner, regardless of ability, has
                      access to quality education and the tools to succeed.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <h3 class="fw-bold mb-4">Our Journey</h3>
            <div class="timeline">
              <div class="d-flex mb-4">
                <div class="icon-box bg-gradient-primary me-3">
                  <span class="text-white fw-bold small">2025</span>
                </div>
                <div class="flex-grow-1 pb-3 border-bottom">
                  <div class="fw-semibold">
                    Access Ability Africa Limited founded
                  </div>
                  <div class="text-muted small">January 14</div>
                </div>
              </div>
              <div class="d-flex mb-4">
                <div class="icon-box bg-gradient-primary me-3">
                  <span class="text-white fw-bold small">2025</span>
                </div>
                <div class="flex-grow-1 pb-3 border-bottom">
                  <div class="fw-semibold">Phase 1 deployment begins</div>
                  <div class="text-muted small">February</div>
                </div>
              </div>
              <div class="d-flex mb-4">
                <div class="icon-box bg-gradient-primary me-3">
                  <span class="text-white fw-bold small">2025</span>
                </div>
                <div class="flex-grow-1 pb-3 border-bottom">
                  <div class="fw-semibold">UN SDG Award recognition</div>
                  <div class="text-muted small">March</div>
                </div>
              </div>
              <div class="d-flex">
                <div class="icon-box bg-gradient-primary me-3">
                  <span class="text-white fw-bold small">2025</span>
                </div>
                <div class="flex-grow-1">
                  <div class="fw-semibold">Save the Children partnership</div>
                  <div class="text-muted small">April</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Leadership Team -->
        <div class="text-center">
          <h3 class="fw-bold mb-5">Leadership Team</h3>
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="card text-center">
                <div class="card-body">
                  <img
                    src="src/assets/ceo-profile.jpg"
                    alt="Staff Nyoni"
                    class="rounded-circle mb-3"
                    style="width: 96px; height: 96px; object-fit: cover"
                  />
                  <h5 class="fw-semibold">Staff Nyoni</h5>
                  <p class="text-primary fw-medium mb-2">
                    Chief Executive Officer & Founder
                  </p>
                  <p class="text-muted small">
                    Visionary leader committed to inclusive education and
                    technology innovation in Africa.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card text-center">
                <div class="card-body">
                  <div
                    class="bg-light rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                    style="width: 96px; height: 96px"
                  >
                    <i
                      class="bi bi-person text-muted"
                      style="font-size: 2rem"
                    ></i>
                  </div>
                  <h5 class="fw-semibold">Debra Khansia</h5>
                  <p class="text-primary fw-medium mb-2">Director</p>
                  <p class="text-muted small">
                    Expertise in educational policy and inclusive learning
                    strategies.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card text-center">
                <div class="card-body">
                  <div
                    class="bg-light rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                    style="width: 96px; height: 96px"
                  >
                    <i
                      class="bi bi-person text-muted"
                      style="font-size: 2rem"
                    ></i>
                  </div>
                  <h5 class="fw-semibold">Justin Saunders</h5>
                  <p class="text-primary fw-medium mb-2">Director</p>
                  <p class="text-muted small">
                    Technology innovation and sustainable development
                    specialist.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Innovation Section -->
    <section id="innovation" class="section-padding">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="display-4 fw-bold mb-4">The Blind Classroom Innovation</h2>
          <p class="lead text-muted">
            Our revolutionary AI-powered, audio-based learning system transforms
            how visually impaired students access and engage with the national
            curriculum.
          </p>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6">
            <div class="card border-start border-danger border-4">
              <div class="card-header bg-transparent">
                <h5 class="mb-0">
                  <i class="bi bi-bullseye text-danger me-2"></i>
                  The Challenge
                </h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-6 mb-3">
                    <div class="text-center p-3 bg-light rounded">
                      <div class="h3 fw-bold text-danger">800,000+</div>
                      <div class="small text-muted">
                        Visually Impaired in Malawi
                      </div>
                    </div>
                  </div>
                  <div class="col-6 mb-3">
                    <div class="text-center p-3 bg-light rounded">
                      <div class="h3 fw-bold text-danger">50,964</div>
                      <div class="small text-muted">Currently in School</div>
                    </div>
                  </div>
                  <div class="col-6 mb-3">
                    <div class="text-center p-3 bg-light rounded">
                      <div class="h3 fw-bold text-danger">90%</div>
                      <div class="small text-muted">
                        Lack Quality Learning Access
                      </div>
                    </div>
                  </div>
                  <div class="col-6 mb-3">
                    <div class="text-center p-3 bg-light rounded">
                      <div class="h3 fw-bold text-danger">2,000</div>
                      <div class="small text-muted">Systems Goal Phase 2</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card border-start border-primary border-4">
              <div class="card-header bg-transparent">
                <h5 class="mb-0">
                  <i class="bi bi-mortarboard text-primary me-2"></i>
                  Our Solution
                </h5>
              </div>
              <div class="card-body">
                <p class="text-muted mb-3">
                  The Blind Classroom system delivers national curriculum
                  content (Standards 1-8) through an AI-powered audio interface,
                  making quality education accessible to every visually impaired
                  learner.
                </p>
                <div class="d-flex align-items-center text-primary">
                  <i class="bi bi-volume-up me-2"></i>
                  <span class="fw-semibold"
                    >Audio-first learning experience</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6">
            <h3 class="fw-bold mb-4">Technology Components</h3>
            <div class="space-y-4">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex">
                    <div class="icon-box bg-gradient-primary me-3">
                      <i class="bi bi-cpu text-white"></i>
                    </div>
                    <div>
                      <h5 class="fw-semibold">AI-Powered Learning</h5>
                      <p class="text-muted small">
                        Advanced AI voice engine delivers curriculum content in
                        accessible audio formats aligned to Standards 1-8.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex">
                    <div class="icon-box bg-gradient-primary me-3">
                      <i class="bi bi-headphones text-white"></i>
                    </div>
                    <div>
                      <h5 class="fw-semibold">Audio-First Design</h5>
                      <p class="text-muted small">
                        High-quality headphones ensure clear, immersive learning
                        experiences for every student.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex">
                    <div class="icon-box bg-gradient-primary me-3">
                      <i class="bi bi-keyboard text-white"></i>
                    </div>
                    <div>
                      <h5 class="fw-semibold">Tactile Interface</h5>
                      <p class="text-muted small">
                        Specialized tactile keyboards enable students to
                        interact naturally with the learning system.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex">
                    <div class="icon-box bg-gradient-primary me-3">
                      <i class="bi bi-wifi text-white"></i>
                    </div>
                    <div>
                      <h5 class="fw-semibold">Starlink Integration</h5>
                      <p class="text-muted small">
                        Starlink connectivity ensures reliable access even in
                        remote, low-bandwidth environments.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-4">
              <img
                src="src/assets/blind-classroom-tech.jpg"
                alt="Blind Classroom technology setup"
                class="img-fluid rounded-3 shadow"
              />
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">Current Deployment Sites</h5>
              </div>
              <div class="card-body">
                <ul class="list-unstyled">
                  <li class="mb-2">
                    <i class="bi bi-circle-fill text-primary me-2"></i>
                    Chilanga School for the Blind
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-circle-fill text-primary me-2"></i>
                    St. Joseph Resource Centre
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-circle-fill text-primary me-2"></i>
                    Kasungu District Schools
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-circle-fill text-primary me-2"></i>
                    Dedza District Schools
                  </li>
                </ul>
                  <button class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#deploymentMapModal">
                    View Deployment Map
                  </button>
              </div>
        <!-- Deployment Map Modal -->
        <div class="modal fade" id="deploymentMapModal" tabindex="-1" aria-labelledby="deploymentMapModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="deploymentMapModalLabel">Deployment Sites & Locations</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Chilanga School for the Blind
                    <a href="https://maps.google.com/?q=Chilanga+School+for+the+Blind+Malawi" target="_blank" class="btn btn-sm btn-primary">Map</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    St. Joseph Resource Centre
                    <a href="https://maps.google.com/?q=St+Joseph+Resource+Centre+Malawi" target="_blank" class="btn btn-sm btn-primary">Map</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Kasungu District Schools
                    <a href="https://maps.google.com/?q=Kasungu+District+Schools+Malawi" target="_blank" class="btn btn-sm btn-primary">Map</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Dedza District Schools
                    <a href="https://maps.google.com/?q=Dedza+District+Schools+Malawi" target="_blank" class="btn btn-sm btn-primary">Map</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
            </div>
          </div>
        </div>

        <div class="bg-light rounded-3 p-5 text-center">
          <h3 class="fw-bold mb-4">Scaling Impact</h3>
          <div class="row max-w-2xl mx-auto">
            <div class="col-md-6">
              <div class="h2 fw-bold text-primary mb-2">Phase 1</div>
              <div class="text-muted">14 Schools</div>
              <div class="small text-muted">Currently deploying</div>
            </div>
            <div class="col-md-6">
              <div class="h2 fw-bold text-secondary mb-2">Phase 2</div>
              <div class="text-muted">400+ Schools</div>
              <div class="small text-muted">2,000 systems planned</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Impact Section -->
    <section id="impact" class="section-padding bg-light">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="display-4 fw-bold mb-4">Measuring Our Impact</h2>
          <p class="lead text-muted">
            Real-time progress toward our mission of making quality education
            accessible to every visually impaired learner in Malawi.
          </p>
        </div>

        <div class="row mb-5">
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div class="icon-box bg-gradient-primary">
                    <i class="bi bi-laptop text-white"></i>
                  </div>
                  <span class="h3 fw-bold" id="systemsDeployed">...</span>
                </div>
                <h5 class="fw-semibold">Systems Deployed</h5>
                <p class="text-muted small mb-2">200 target Phase 1</p>
                <div class="progress">
                  <div class="progress-bar" id="systemsDeployedBar" style="width: 0%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div class="icon-box bg-secondary">
                    <i class="bi bi-people text-white"></i>
                  </div>
                  <span class="h3 fw-bold" id="studentsReached">...</span>
                </div>
                <h5 class="fw-semibold">Students Reached</h5>
                <p class="text-muted small mb-2">10,000 target Phase 2</p>
                <div class="progress">
                  <div class="progress-bar" id="studentsReachedBar" style="width: 0%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div class="icon-box bg-primary">
                    <i class="bi bi-building text-white"></i>
                  </div>
                  <span class="h3 fw-bold" id="schoolsPhase1">...</span>
                </div>
                <h5 class="fw-semibold">Schools Phase 1</h5>
                <p class="text-muted small mb-2">400+ schools planned</p>
                <div class="progress">
                  <div class="progress-bar" id="schoolsPhase1Bar" style="width: 0%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div class="icon-box bg-gradient-secondary">
                    <i class="bi bi-globe text-white"></i>
                  </div>
                  <span class="h3 fw-bold" id="districtsActive">...</span>
                </div>
                <h5 class="fw-semibold">Districts Active</h5>
                <p class="text-muted small mb-2">14 districts total</p>
                <div class="progress">
                  <div class="progress-bar" id="districtsActiveBar" style="width: 0%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-5">
          <h3 class="fw-bold text-center mb-5">Awards & Recognition</h3>
          <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="card text-center">
                <div class="card-body">
                  <div class="icon-box bg-gradient-primary mx-auto mb-3">
                    <i class="bi bi-trophy text-white"></i>
                  </div>
                  <h5 class="fw-semibold">UN SDG Award</h5>
                  <p class="text-muted small mb-3">
                    Recognized for innovative contribution to Sustainable
                    Development Goals
                  </p>
                  <span class="badge bg-primary">2025</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="card text-center">
                <div class="card-body">
                  <div class="icon-box bg-gradient-primary mx-auto mb-3">
                    <i class="bi bi-lightning text-white"></i>
                  </div>
                  <h5 class="fw-semibold">Youth Game Changer Award</h5>
                  <p class="text-muted small mb-3">
                    National Youth Commission Malawi recognition for social
                    innovation
                  </p>
                  <span class="badge bg-primary">2025</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="card text-center">
                <div class="card-body">
                  <div class="icon-box bg-gradient-primary mx-auto mb-3">
                    <i class="bi bi-globe text-white"></i>
                  </div>
                  <h5 class="fw-semibold">BBC Africa Feature</h5>
                  <p class="text-muted small mb-3">
                    International media coverage highlighting our impact
                  </p>
                  <span class="badge bg-primary">2025</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="card text-center">
                <div class="card-body">
                  <div class="icon-box bg-gradient-primary mx-auto mb-3">
                    <i class="bi bi-graph-up text-white"></i>
                  </div>
                  <h5 class="fw-semibold">NCST Research Speaker</h5>
                  <p class="text-muted small mb-3">
                    Presenting at National Commission for Science & Technology
                    conference
                  </p>
                  <span class="badge bg-primary">2025</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-5">
          <h3 class="fw-bold text-center mb-5">Stories from the Field</h3>
          <div class="row" id="storiesRow">
            <!-- Stories will be loaded here by JavaScript -->
          </div>
          <script>
          // Fetch stories from backend and display in cards
          fetch('backend/api/stories.php')
            .then(response => response.json())
            .then(stories => {
              const row = document.getElementById('storiesRow');
              row.innerHTML = '';
              if (Array.isArray(stories) && stories.length > 0) {
                stories.forEach(story => {
                  row.innerHTML += `
                  <div class="col-md-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex">
                          <div class="icon-box bg-gradient-secondary me-3">
                            <i class="bi bi-heart text-white"></i>
                          </div>
                          <div>
                            <blockquote class="mb-3 fst-italic">${story.quote}</blockquote>
                            <div>
                              <div class="fw-semibold">${story.name}</div>
                              <div class="text-muted small">${story.role}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  `;
                });
              } else {
                row.innerHTML = '<div class="col-12 text-center text-muted">No stories available.</div>';
              }
            })
            .catch(() => {
              document.getElementById('storiesRow').innerHTML = '<div class="col-12 text-center text-danger">Failed to load stories.</div>';
            });
          </script>
        </div>

        <div class="bg-gradient-primary rounded-3 p-5 text-center text-white">
          <h3 class="fw-bold mb-4">Help Us Reach More Learners</h3>
          <p class="mb-5 opacity-75">
            Your support can help us deploy more Blind Classroom systems and
            transform the lives of thousands of visually impaired students
            across Malawi.
          </p>
          <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
              <div
                class="card bg-white bg-opacity-10 border-white border-opacity-20"
              >
                <div class="card-body text-center">
                  <div class="h3 fw-bold">$500</div>
                  <div class="opacity-75 small">Sponsors 1 System</div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div
                class="card bg-white bg-opacity-10 border-white border-opacity-20"
              >
                <div class="card-body text-center">
                  <div class="h3 fw-bold">$5,000</div>
                  <div class="opacity-75 small">Equips 1 Classroom</div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div
                class="card bg-white bg-opacity-10 border-white border-opacity-20"
              >
                <div class="card-body text-center">
                  <div class="h3 fw-bold">$50,000</div>
                  <div class="opacity-75 small">Transforms 1 School</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Partners Section -->
    <section id="partners" class="section-padding">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="display-4 fw-bold mb-4">Our Strategic Partners</h2>
          <p class="lead text-muted">
            Working together with leading organizations to scale inclusive
            education technology across Malawi and beyond.
          </p>
        </div>

        <div class="row mb-5">
          <div class="col-md-4 mb-4">
            <div class="card text-center">
              <div class="card-body">
                <div class="icon-box bg-primary mx-auto mb-3">
                  <i class="bi bi-people text-white"></i>
                </div>
                <h5 class="fw-semibold">Implementation Partners</h5>
                <p class="text-muted small mb-3">
                  Organizations directly involved in deploying and scaling our
                  solutions
                </p>
                <div class="h3 fw-bold">1</div>
                <div class="text-muted small">Active Partners</div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card text-center">
              <div class="card-body">
                <div class="icon-box bg-secondary mx-auto mb-3">
                  <i class="bi bi-people text-white"></i>
                </div>
                <h5 class="fw-semibold">Support Partners</h5>
                <p class="text-muted small mb-3">
                  Providing resources, funding, and strategic guidance
                </p>
                <div class="h3 fw-bold">1</div>
                <div class="text-muted small">Active Partners</div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card text-center">
              <div class="card-body">
                <div class="icon-box bg-primary mx-auto mb-3">
                  <i class="bi bi-people text-white"></i>
                </div>
                <h5 class="fw-semibold">Government Partners</h5>
                <p class="text-muted small mb-3">
                  National and local government agencies supporting our mission
                </p>
                <div class="h3 fw-bold">1</div>
                <div class="text-muted small">Active Partners</div>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-5">
          <h3 class="fw-bold text-center mb-5">Partner Profiles</h3>
          <div id="partnerProfiles"></div>
          <script>
          // Fetch partners from backend and display dynamically
          fetch('backend/api/partners.php')
            .then(response => response.json())
            .then(partners => {
              const container = document.getElementById('partnerProfiles');
              if (Array.isArray(partners) && partners.length > 0) {
                container.innerHTML = partners.map(partner => `
                  <div class="card mb-4">
                    <div class="card-header">
                      <div class="d-flex justify-content-between align-items-start">
                        <div class="d-flex align-items-center">
                          <div class="icon-box bg-gradient-${partner.color || 'primary'} me-3">
                            <i class="bi ${partner.icon || 'bi-people'} text-white"></i>
                          </div>
                          <div>
                            <h4 class="mb-1">${partner.name}</h4>
                            <p class="text-primary fw-medium mb-0">${partner.type}</p>
                          </div>
                        </div>
                        <button class="btn btn-outline-primary btn-sm" disabled>
                          <i class="bi bi-box-arrow-up-right me-1"></i>
                          Learn More
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <p class="text-muted mb-3">${partner.description || ''}</p>
                          <div>
                            <h6 class="fw-semibold">Programs:</h6>
                            ${partner.programs.map(p => `<span class='badge bg-light text-dark me-2'>${p}</span>`).join(' ')}
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="bg-light rounded p-3">
                            <h6 class="fw-semibold">Partnership Impact</h6>
                            <ul class="text-muted small mb-0">
                              ${partner.impact.map(i => `<li>${i}</li>`).join('')}
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                `).join('');
              } else {
                container.innerHTML = '<div class="text-center text-muted">No partner profiles available.</div>';
              }
            })
            .catch(() => {
              document.getElementById('partnerProfiles').innerHTML = '<div class="text-center text-danger">Failed to load partner profiles.</div>';
            });
          </script>
        </div>

        <div class="mb-5">
          <h3 class="fw-bold text-center mb-5">What Our Partners Say</h3>
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <blockquote class="mb-3 fst-italic">
                    "Access Ability Africa's innovative approach aligns
                    perfectly with our commitment to inclusive education and
                    digital transformation."
                  </blockquote>
                  <div class="border-top pt-3">
                    <div class="fw-semibold">Save the Children Malawi</div>
                    <div class="text-primary small">
                      Digital Inclusion Program
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <blockquote class="mb-3 fst-italic">
                    "The Blind Classroom represents the kind of innovation that
                    can truly transform lives and communities."
                  </blockquote>
                  <div class="border-top pt-3">
                    <div class="fw-semibold">NSCT Leadership</div>
                    <div class="text-primary small">
                      National Innovation Initiative
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-light rounded-3 p-5 text-center">
          <h3 class="fw-bold mb-4">Partner With Us</h3>
          <p class="text-muted mb-5">
            Join our mission to transform inclusive education in Malawi. Whether
            you're an NGO, government agency, corporation, or foundation, there
            are many ways to collaborate.
          </p>

          <div class="row mb-5">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body text-center">
                  <h5 class="fw-semibold">Implementation</h5>
                  <p class="text-muted small">Help deploy systems in schools</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body text-center">
                  <h5 class="fw-semibold">Funding</h5>
                  <p class="text-muted small">Support system development</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body text-center">
                  <h5 class="fw-semibold">Technology</h5>
                  <p class="text-muted small">Enhance platform capabilities</p>
                </div>
              </div>
            </div>
          </div>

          <button class="btn btn-primary btn-lg">
            Explore Partnership Opportunities
          </button>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding bg-light">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="display-4 fw-bold mb-4">Get Involved & Connect</h2>
          <p class="lead text-muted">
            Join our mission to transform inclusive education in Malawi. There
            are many ways to support, volunteer, collaborate, or simply stay
            connected with our work.
          </p>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <i class="bi bi-send text-primary me-2"></i>
                  Send Us a Message
                </h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label class="form-label">First Name</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter your first name"
                      />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Last Name</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter your last name"
                      />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input
                      type="email"
                      class="form-control"
                      placeholder="your.email@example.com"
                    />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">I'm Interested In</label>
                    <select class="form-select">
                      <option>Select your interest</option>
                      <option>Donating/Supporting</option>
                      <option>Volunteering</option>
                      <option>Partnership Opportunities</option>
                      <option>Media/Press Inquiries</option>
                      <option>General Information</option>
                    </select>
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Message</label>
                    <textarea
                      class="form-control"
                      rows="4"
                      placeholder="Tell us how you'd like to get involved or what you'd like to know..."
                    ></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg w-100">
                    Send Message
                    <i class="bi bi-send ms-2"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-5">
              <h3 class="fw-bold mb-4">Contact Information</h3>
              <div class="space-y-4">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="icon-box bg-gradient-primary me-3">
                        <i class="bi bi-geo-alt text-white"></i>
                      </div>
                      <div>
                        <h6 class="fw-semibold">Headquarters</h6>
                        <p class="text-muted small mb-1">Lilongwe, Malawi</p>
                        <p class="text-muted small">
                          Registration: COY-BWUM6YL
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="icon-box bg-gradient-primary me-3">
                        <i class="bi bi-envelope text-white"></i>
                      </div>
                      <div>
                        <h6 class="fw-semibold">Email</h6>
                        <p class="text-muted small mb-1">
                          info@accessabilityafrica.org
                        </p>
                        <p class="text-muted small">
                          partnerships@accessabilityafrica.org
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="icon-box bg-gradient-primary me-3">
                        <i class="bi bi-telephone text-white"></i>
                      </div>
                      <div>
                        <h6 class="fw-semibold">Phone</h6>
                        <p class="text-muted small mb-1">+265 991 076 803</p>
                        <p class="text-muted small">WhatsApp Available</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">Follow Our Journey</h5>
              </div>
              <div class="card-body">
                <div class="d-flex gap-2">
                  <a href="https://www.linkedin.com/company/access-ability-africa-limited/posts/?feedView=all"><button class="btn btn-outline-primary">LinkedIn</button></a>
                  <a href="https://www.facebook.com/profile.php?id=100075875652042"><button class="btn btn-outline-primary">Facebook</button></a>
                                    <a href="https://wa.me/265991076803" target="_blank" class="btn btn-outline-primary">WhatsApp</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-5">
          <h3 class="fw-bold text-center mb-5">Ways to Get Involved</h3>
          <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="card text-center">
                <div class="card-body">
                  <div class="icon-box bg-gradient-primary mx-auto mb-3">
                    <i class="bi bi-heart text-white"></i>
                  </div>
                  <h5 class="fw-semibold">Donate & Support</h5>
                  <p class="text-muted small mb-3">
                    Help us reach more learners with your financial contribution
                  </p>
                  <button class="btn btn-outline-primary btn-sm w-100">
                    Donate Now
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="card text-center">
                <div class="card-body">
                  <div class="icon-box bg-gradient-primary mx-auto mb-3">
                    <i class="bi bi-people text-white"></i>
                  </div>
                  <h5 class="fw-semibold">Volunteer</h5>
                  <p class="text-muted small mb-3">
                    Join our mission with your skills and time
                  </p>
                  <button class="btn btn-outline-primary btn-sm w-100">
                    Join Us
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="card text-center">
                <div class="card-body">
                  <div class="icon-box bg-gradient-primary mx-auto mb-3">
                    <i class="bi bi-briefcase text-white"></i>
                  </div>
                  <h5 class="fw-semibold">Partner</h5>
                  <p class="text-muted small mb-3">
                    Collaborate with us to scale our impact
                  </p>
                  <button class="btn btn-outline-primary btn-sm w-100">
                    Partner
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="card text-center">
                <div class="card-body">
                  <div class="icon-box bg-gradient-primary mx-auto mb-3">
                    <i class="bi bi-chat-square-text text-white"></i>
                  </div>
                  <h5 class="fw-semibold">Stay Updated</h5>
                  <p class="text-muted small mb-3">
                    Get the latest news and impact stories
                  </p>
                  <button class="btn btn-outline-primary btn-sm w-100">
                    Subscribe
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-gradient-primary rounded-3 p-5 text-center text-white">
          <h3 class="fw-bold mb-4">Stay Connected</h3>
          <p class="mb-5 opacity-75">
            Subscribe to our newsletter for the latest updates on our impact,
            student stories, and opportunities to get involved.
          </p>
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="input-group">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Enter your email"
                />
                <button class="btn btn-secondary">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Modals -->
    <!-- Get Involved Modal -->
    <div
      class="modal fade"
      id="getInvolvedModal"
      tabindex="-1"
      aria-labelledby="getInvolvedModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="getInvolvedModalLabel">Get Involved</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form id="getInvolvedForm">
              <div class="mb-3">
                <label for="gi-name" class="form-label">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="gi-name"
                  name="name"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="gi-email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="gi-email"
                  name="email"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="gi-message" class="form-label">Message</label>
                <textarea
                  class="form-control"
                  id="gi-message"
                  name="message"
                  rows="3"
                  required
                ></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100">
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Join Us Modal -->
    <div
      class="modal fade"
      id="joinUsModal"
      tabindex="-1"
      aria-labelledby="joinUsModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="joinUsModalLabel">
              Join Us (Volunteer)
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form id="joinUsForm">
              <div class="mb-3">
                <label for="ju-name" class="form-label">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="ju-name"
                  name="name"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="ju-email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="ju-email"
                  name="email"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="ju-skills" class="form-label"
                  >Skills/Interest</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="ju-skills"
                  name="skills"
                  required
                />
              </div>
              <button type="submit" class="btn btn-primary w-100">
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Donate Modal -->
    <div
      class="modal fade"
      id="donateModal"
      tabindex="-1"
      aria-labelledby="donateModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="donateModalLabel">Donate</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form id="donateForm">
              <div class="mb-3">
                <label for="donate-name" class="form-label">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="donate-name"
                  name="name"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="donate-email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="donate-email"
                  name="email"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="donate-amount" class="form-label"
                  >Amount (USD)</label
                >
                <input
                  type="number"
                  class="form-control"
                  id="donate-amount"
                  name="amount"
                  min="1"
                  required
                />
              </div>
              <button type="submit" class="btn btn-primary w-100">
                Donate
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Partner Modal -->
    <div
      class="modal fade"
      id="partnerModal"
      tabindex="-1"
      aria-labelledby="partnerModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="partnerModalLabel">Partner With Us</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form id="partnerForm">
              <div class="mb-3">
                <label for="partner-name" class="form-label"
                  >Organization Name</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="partner-name"
                  name="name"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="partner-email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="partner-email"
                  name="email"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="partner-message" class="form-label">Message</label>
                <textarea
                  class="form-control"
                  id="partner-message"
                  name="message"
                  rows="3"
                  required
                ></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100">
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Subscribe Modal -->
    <div
      class="modal fade"
      id="subscribeModal"
      tabindex="-1"
      aria-labelledby="subscribeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="subscribeModalLabel">
              Subscribe to Newsletter
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form id="subscribeForm">
              <div class="mb-3">
                <label for="subscribe-email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="subscribe-email"
                  name="email"
                  required
                />
              </div>
              <button type="submit" class="btn btn-primary w-100">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modals -->

    <!-- Footer -->
    <footer class="bg-primary text-white py-5">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6">
            <div class="d-flex align-items-center mb-4">
              <div class="icon-box bg-secondary me-3">
                <span class="fw-bold text-white">AA</span>
              </div>
              <div>
                <h3 class="fw-bold mb-1">Access Ability Africa Limited</h3>
                <p class="opacity-75 mb-0">Empowering Every Learner</p>
              </div>
            </div>
            <p class="opacity-75 mb-4">
              A Malawian EdTech social enterprise transforming education for
              visually impaired learners through innovative AI-powered
              solutions.
            </p>
            <div class="space-y-3">
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-geo-alt text-secondary me-2"></i>
                <span class="opacity-75">Lilongwe, Malawi</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-envelope text-secondary me-2"></i>
                <span class="opacity-75">info@accessabilityafrica.org</span>
              </div>
              <div class="d-flex align-items-center">
                <i class="bi bi-telephone text-secondary me-2"></i>
                <span class="opacity-75">+265 991 076 803</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <h5 class="fw-semibold mb-3">Quick Links</h5>
            <ul class="list-unstyled">
              <li class="mb-2">
                <a href="#about" class="text-decoration-none" style="color: #fff;">About Us</a>
              </li>
              <li class="mb-2">
                <a href="#innovation" class="text-decoration-none" style="color: #fff;">Innovation</a>
              </li>
              <li class="mb-2">
                <a href="#impact" class="text-decoration-none" style="color: #fff;">Impact</a>
              </li>
              <li class="mb-2">
                <a href="#partners" class="text-decoration-none" style="color: #fff;">Partners</a>
              </li>
              <li class="mb-2">
                <a href="#contact" class="text-decoration-none" style="color: #fff;">Contact</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3">
            <h5 class="fw-semibold mb-3">Get Involved</h5>
            <ul class="list-unstyled mb-4">
              <li class="mb-2">
                <a href="#donate" class="text-decoration-none" style="color: #fff;">Donate</a>
              </li>
              <li class="mb-2">
                <a href="#volunteer" class="text-decoration-none" style="color: #fff;">Volunteer</a>
              </li>
              <li class="mb-2">
                <a href="#partner" class="text-decoration-none" style="color: #fff;">Partner</a>
              </li>
              <li class="mb-2">
                <a href="#subscribe" class="text-decoration-none" style="color: #fff;">Subscribe</a>
              </li>
            </ul>
            <button class="btn btn-secondary btn-sm w-100 mb-3">
              Newsletter Signup
            </button>
            <div class="d-flex gap-2">
              <button class="btn btn-outline-light btn-sm" style="color: #fff; border-color: #fff;">LinkedIn</button>
              <button class="btn btn-outline-light btn-sm" style="color: #fff; border-color: #fff;">Twitter</button>
            </div>
          </div>
        </div>

        <hr class="opacity-25 mb-4" />

        <div class="row align-items-center">
          <div class="col-md-6">
            <p class="opacity-75 small mb-0">
              © 2025 Access Ability Africa Limited. All rights reserved.
            </p>
            <p class="opacity-75 small mb-0">
              Registration: COY-BWUM6YL | Lilongwe, Malawi
            </p>
          </div>
          <div class="col-md-6 text-md-end">
            <div class="d-flex align-items-center justify-content-md-end">
              <span class="opacity-75 small me-2">Made with</span>
              <i class="bi bi-heart text-secondary me-2"></i>
              <span class="opacity-75 small">for inclusive education</span>
            </div>
          </div>
        </div>

        <hr class="opacity-25 mt-4" />

        <div class="text-center">
          <div class="d-flex flex-wrap gap-4 justify-content-center small">
            <a href="#reports" class="text-decoration-none" style="color: #fff;">Impact Reports</a>
            <a href="#media" class="text-decoration-none" style="color: #fff;">Media Kit</a>
            <a href="#research" class="text-decoration-none" style="color: #fff;">Research</a>
            <a href="#accessibility" class="text-decoration-none" style="color: #fff;">Accessibility</a>
            <span class="opacity-50">|</span>
            <a href="#privacy" class="text-decoration-none" style="color: #fff;">Privacy Policy</a>
            <a href="#terms" class="text-decoration-none" style="color: #fff;">Terms of Service</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css"
    />

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
      // Smooth scrolling for navigation links
      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute("href"));
          if (target) {
            target.scrollIntoView({
              behavior: "smooth",
              block: "start",
            });
          }
        });
      });

      // Navbar background change on scroll
      window.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        if (window.scrollY > 50) {
          navbar.style.backgroundColor = "rgba(255, 255, 255, 0.98)";
        } else {
          navbar.style.backgroundColor = "rgba(255, 255, 255, 0.95)";
        }
      });

      // Helper to show modals
      function showModal(id) {
        var modal = new bootstrap.Modal(document.getElementById(id));
        modal.show();
      }
      // Button event listeners
      document
        .querySelectorAll(
          ".btn-secondary, .btn-outline-primary, .btn-outline-light, .btn-outline-primary.btn-sm, .btn-outline-primary.w-100, .btn-outline-primary.btn-lg, .btn-outline-primary.btn-sm.w-100"
        )
        .forEach((btn) => {
          btn.addEventListener("click", function (e) {
            const text = btn.textContent.trim().toLowerCase();
            if (text.includes("get involved")) showModal("getInvolvedModal");
            else if (text.includes("join us")) showModal("joinUsModal");
            else if (text.includes("donate")) showModal("donateModal");
            else if (text.includes("partner")) showModal("partnerModal");
            else if (text.includes("subscribe")) showModal("subscribeModal");
          });
        });
      // AJAX for Contact Form
      document.querySelector("form")?.addEventListener("submit", function (e) {
        if (this.closest("#contact")) {
          e.preventDefault();
          const data = {
            first_name: this.querySelector(
              '[placeholder="Enter your first name"]'
            ).value,
            last_name: this.querySelector(
              '[placeholder="Enter your last name"]'
            ).value,
            email: this.querySelector('[type="email"]').value,
            interest: this.querySelector("select")?.value,
            message: this.querySelector("textarea").value,
          };
          fetch("backend/api/contact.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(data),
          })
            .then((r) => r.json())
            .then((res) => {
              alert(res.success ? "Message sent!" : "Failed to send.");
              this.reset();
            });
        }
      });
      // AJAX for Newsletter
      document
        .getElementById("subscribeForm")
        ?.addEventListener("submit", function (e) {
          e.preventDefault();
          const email = this.querySelector('input[type="email"]').value;
          fetch("backend/api/newsletter.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ email }),
          })
            .then((r) => r.json())
            .then((res) => {
              alert(res.success ? "Subscribed!" : "Failed to subscribe.");
              this.reset();
            });
        });
      // AJAX for Get Involved, Join Us, Donate, Partner
      ["getInvolvedForm", "joinUsForm", "donateForm", "partnerForm"].forEach(
        (formId) => {
          document
            .getElementById(formId)
            ?.addEventListener("submit", function (e) {
              e.preventDefault();
              const formData = Object.fromEntries(new FormData(this).entries());
              // Choose endpoint based on form
              let endpoint = "backend/api/contact.php";
              if (formId === "donateForm") endpoint = "backend/api/donate.php";
              if (formId === "partnerForm")
                endpoint = "backend/api/partner.php";
              fetch(endpoint, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(formData),
              })
                .then((r) => r.json())
                .then((res) => {
                  alert(res.success ? "Submitted!" : "Failed to submit.");
                  this.reset();
                });
            });
        }
      );
      // News click handler (for encrypted URL)
      document.querySelectorAll(".news-link").forEach((link) => {
        link.addEventListener("click", function (e) {
          e.preventDefault();
          const encId = this.dataset.id;
          window.location.href = `news-detail.php?id=${encodeURIComponent(
            encId
          )}`;
        });
      });
      // Fetch stats from backend and update cards
  fetch('backend/api/dashboard_stats.php')
        .then(response => response.text())
        .then(text => {
          // Extract the first valid JSON object from the response
          const match = text.match(/\{[^}]+\}/);
          if (match) {
            const data = JSON.parse(match[0]);
            document.getElementById('systemsDeployed').textContent = data.systems_deployed;
            document.getElementById('studentsReached').textContent = data.students_reached;
            document.getElementById('schoolsPhase1').textContent = data.schools_phase1;
            document.getElementById('districtsActive').textContent = data.districts_active;
            document.getElementById('systemsDeployedBar').style.width = (data.systems_deployed / 200 * 100) + '%';
            document.getElementById('studentsReachedBar').style.width = (data.students_reached / 10000 * 100) + '%';
            document.getElementById('schoolsPhase1Bar').style.width = (data.schools_phase1 / 400 * 100) + '%';
            document.getElementById('districtsActiveBar').style.width = (data.districts_active / 14 * 100) + '%';
          } else {
            document.getElementById('systemsDeployed').textContent = 'N/A';
            document.getElementById('studentsReached').textContent = 'N/A';
            document.getElementById('schoolsPhase1').textContent = 'N/A';
            document.getElementById('districtsActive').textContent = 'N/A';
            document.getElementById('systemsDeployedBar').style.width = '0%';
            document.getElementById('studentsReachedBar').style.width = '0%';
            document.getElementById('schoolsPhase1Bar').style.width = '0%';
            document.getElementById('districtsActiveBar').style.width = '0%';
          }
        })
        .catch(() => {
          document.getElementById('systemsDeployed').textContent = 'N/A';
          document.getElementById('studentsReached').textContent = 'N/A';
          document.getElementById('schoolsPhase1').textContent = 'N/A';
          document.getElementById('districtsActive').textContent = 'N/A';
          document.getElementById('systemsDeployedBar').style.width = '0%';
          document.getElementById('studentsReachedBar').style.width = '0%';
          document.getElementById('schoolsPhase1Bar').style.width = '0%';
          document.getElementById('districtsActiveBar').style.width = '0%';
        });
    </script>
  </body>
</html>
