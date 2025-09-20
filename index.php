<?php
// index.php — Blueddrop Plumbing Solutions (Home)
// Tech stack: HTML, CSS, Bootstrap 5, JavaScript, PHP (for templating later)
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bluedrop Plumbing Solutions — Professional Plumbing Services</title>
  <meta name="description" content="Bluedrop Plumbing Solutions offers reliable residential and commercial plumbing, 24/7 emergency support, installations, and maintenance." />
  <meta name="keywords" content="plumbing, plumber, emergency plumbing, leak repair, installation, Kenya" />
  <link rel="icon" href="assets/images/12459.jpg" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/styles.css" />

  <style>
    /* Minimal page-specific tweaks; keep most styles in assets/css/styles.css */
    :root {
      --bd-primary:#0d6efd; /* Bootstrap primary as brand */
      --bd-accent:#0b5ed7;
      --bd-dark:#0b132b;
    }
    body { padding-top: 76px; } /* account for fixed navbar height */
    .brand-gradient {
      background: linear-gradient(135deg, var(--bd-primary), var(--bd-accent));
    }
    .hero {
      min-height: 68vh;
      color: #fff;
      display: grid;
      align-items: center;
      background-image: radial-gradient(ellipse at 15% 10%, rgba(255,255,255,.1), transparent 40%),
                        radial-gradient(ellipse at 80% 0%, rgba(255,255,255,.08), transparent 45%),
                        linear-gradient(135deg, #0d6efd, #0b5ed7);
    }
    .feature-icon { width: 48px; height: 48px; }
    .shadow-soft { box-shadow: 0 12px 28px rgba(13,110,253,.15); }
    .tick li { margin-bottom: .5rem; }
    .tick li::marker { content: "✔ "; color: var(--bd-primary); font-weight: 700; }
    .footer a { text-decoration: none; }
  </style>
</head>
<body>
  <!-- Fixed Header / Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top border-bottom border-primary" aria-label="Main navigation">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center gap-2" href="index.php" target="_blank">
        <img src="assets/images/BlueDrop.jpeg" alt="Bluedrop logo" width="45" height="45" />
        <span class="fw-bold">Bluedrop</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="bdNavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
          <li class="nav-item"><a class="nav-link" href="index.php" target="_blank">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php" target="_blank">About</a></li>
          <li class="nav-item"><a class="nav-link" href="services.php" target="_blank">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php" target="_blank">Contact</a></li>
          <li class="nav-item">
  <button class="btn btn-outline-light ms-lg-2" data-bs-toggle="modal" data-bs-target="#registerModal">
    Create Account
  </button>
</li>
<li class="nav-item">
  <button class="btn btn-primary ms-lg-2" data-bs-toggle="modal" data-bs-target="#loginModal">
    Login
  </button>
</li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
<header class="hero" style="background: url('assets/images/pipes.avif') center center/cover no-repeat; position: relative;">
  <!-- Optional overlay for better text readability -->
  <div style="position: absolute; top:0; left:0; width:100%; height:100%; background-color: rgba(0,0,0,0.5);"></div>

  <div class="container py-5" style="position: relative; z-index: 2;">
    <div class="row align-items-center g-4">
      <div class="col-lg-7 text-white">
        <h1 class="display-5 fw-bold">Reliable Plumbing for Homes & Businesses</h1>
        <p class="lead mt-3">
          From emergency leak repairs to full installations, Bluedrop Plumbing Solutions delivers fast, certified, and affordable services you can trust.
        </p>
        <div class="d-flex gap-3 mt-4">
          <a href="services.php" target="_blank" class="btn btn-light btn-lg fw-semibold">Explore Services</a>
          <a href="register.php" target="_blank" class="btn btn-outline-light btn-lg">Create Account</a>
        </div>
        <div class="mt-4 small">
          24/7 Emergency Hotline: <a class="link-light" href="tel:+254748772131">+254 748772131</a>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="card border-0 shadow-soft">
          <div class="card-body p-4">
            <h2 class="h5 mb-3">Request a Callback</h2>
            <form action="#" method="post" novalidate>
              <div class="mb-3">
                <label for="cbName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="cbName" name="name" placeholder="Full name" required>
              </div>
              <div class="mb-3">
                <label for="cbPhone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="cbPhone" name="phone" placeholder="07xx xxx xxx" required>
              </div>
              <div class="mb-3">
                <label for="cbService" class="form-label">Service Interested In</label>
                <select class="form-select" id="cbService" name="service">
                  <option selected disabled>Choose a service</option>
                  <option>Emergency Leak Repair</option>
                  <option>Drain Cleaning</option>
                  <option>Bathroom/Kitchen Installation</option>
                  <option>Water Tank & Pumps</option>
                  <option>Maintenance Plan</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary w-100">Request Call</button>
              <p class="text-muted small mt-2 mb-0">
                By submitting you agree to our <a href="terms.php" target="_blank">terms</a>.
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>


  <!-- Featured Services -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold">Our Core Services</h2>
        <p class="text-muted">Trusted plumbing solutions for every need.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
              <img class="feature-icon mb-3" src="assets/images/leak repair pipe.jpg" alt="Leak repair" />
              <h3 class="h6">Emergency Leak Repair</h3>
              <p class="text-muted small">Rapid response for burst pipes, leaking taps and water lines.</p>
              <a class="stretched-link" href="services.php#leaks" target="_blank" aria-label="Read more about Emergency Leak Repair"></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
              <img class="feature-icon mb-3" src="assets/images/drain.jpg" alt="Drain cleaning" />
              <h3 class="h6">Drain Cleaning</h3>
              <p class="text-muted small">Unclogging and preventive maintenance for smooth flow.</p>
              <a class="stretched-link" href="services.php#drain" target="_blank" aria-label="Read more about Drain Cleaning"></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
              <img class="feature-icon mb-3" src="assets/images/wrench.jpg" alt="Installations" />
              <h3 class="h6">Installations</h3>
              <p class="text-muted small">Professional bathroom, kitchen and appliance installations.</p>
              <a class="stretched-link" href="services.php#install" target="_blank" aria-label="Read more about Installations"></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
              <img class="feature-icon mb-3" src="assets/images/pump.jpg" alt="Water systems" />
              <h3 class="h6">Water Systems</h3>
              <p class="text-muted small">Tanks, pumps, filtration and pressure solutions.</p>
              <a class="stretched-link" href="services.php#water" target="_blank" aria-label="Read more about Water Systems"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <img src="assets/images/two-men-crouched-near-pipe-construction-site.jpg" alt="Bluedrop technicians at work" class="img-fluid rounded-4 shadow-sm">
        </div>
        <div class="col-lg-6">
          <h2 class="fw-bold mb-3">Why Choose Bluedrop</h2>
          <ul class="tick list-unstyled">
            <li>Certified & insured plumbers with 5+ years average experience</li>
            <li>Transparent pricing with free on-site assessment</li>
            <li>24/7 emergency response across Mombasa & environs</li>
            <li>Warranty on parts and workmanship</li>
            <li>Customer portal to track requests and invoices</li>
          </ul>
          <a href="about.php" target="_blank" class="btn btn-primary mt-2">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="fw-bold">What Clients Say</h2>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
              <p class="mb-1">“Arrived within 30 minutes and fixed our burst pipe professionally.”</p>
              <div class="small text-muted">— Aisha, Nyali</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
              <p class="mb-1">“Fair pricing and neat installation of our new kitchen sink.”</p>
              <div class="small text-muted">— Brian, Tudor</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
              <p class="mb-1">“Their maintenance plan saved us from constant clogs. Highly recommend!”</p>
              <div class="small text-muted">— Mercy, Bamburi</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="brand-gradient text-white py-5">
    <div class="container">
      <div class="row align-items-center g-3">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-2">Need help today?</h2>
          <p class="mb-0">Create an account to request, track and manage your plumbing jobs online.</p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="register.php" target="_blank" class="btn btn-light btn-lg">Get Started</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-dark text-white-50 py-4">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <h5 class="text-white">Bluedrop Plumbing</h5>
          <p class="small">Smart plumbing solutions for homes and businesses across the coast.  We ensure quality, reliability, and excellence in every drop.

</p>
        </div>
        <div class="col-md-6 col-lg-4">
          <h6 class="text-white">Contacts</h6>
          <ul class="list-unstyled small">
           <li>
      <a class="link-light" href="tel:+254748772131">
        <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png" alt="Phone" style="width:16px; height:16px; margin-right:5px;">
        +254 748772131
      </a>
    </li>


            <li>
  <a class="link-light" href="mailto:info@bluedrop.co.ke">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Gmail_Icon.png/800px-Gmail_Icon.png" alt="Email" style="width:16px; height:16px; margin-right:5px;">
    info@bluedrop.co.ke
  </a>
</li>
<li>
  <a class="link-light" href="https://wa.me/254748772131" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/800px-WhatsApp.svg.png" alt="WhatsApp" style="width:16px; height:16px; margin-right:5px;">
    WhatsApp
  </a>
</li>

<li>
  <a class="link-light" href="https://instagram.com/@malo_nephillip23" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/800px-Instagram_logo_2022.svg.png" alt="Instagram" style="width:16px; height:16px; margin-right:5px;">
    @malo_nephillip23
  </a>
</li>

     <li>
      <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="Location" style="width:16px; height:16px; margin-right:5px;">
      Mombasa, Kenya
    </li>
        </div>
        <div class="col-md-6 col-lg-4">
          <h6 class="text-white">Quick Links</h6>
          <ul class="list-unstyled small">
            <li><a class="link-light" href="services.php" target="_blank">All Services</a></li>
           <li><a class="link-light" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Customer Login</a></li>
<li><a class="link-light" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Create Account</a></li>

            <li><a class="link-light" href="privacy.php" target="_blank">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <div class="border-top border-secondary mt-3 pt-3 small d-flex justify-content-between">
        <span>© <?php echo date('Y'); ?> Bluedrop Plumbing Solutions</span>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- App JS -->
  <script>
    // Future: analytics, form validation, AJAX for callback form
    (function(){
      const form = document.querySelector('form');
      if(!form) return;
      form.addEventListener('submit', function(e){
        e.preventDefault();
        const name = document.getElementById('cbName').value.trim();
        const phone = document.getElementById('cbPhone').value.trim();
        if(!name || !phone){
          alert('Please fill in your name and phone.');
          return;
        }
        alert('Thank you, '+name+'. We will call you shortly.');
        form.reset();
      });
    })();
  </script>
</body>
<!-- ================= Register Modal ================= -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow-lg rounded-3">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Create Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <form action="register.php" method="POST">
          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="fullname" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required minlength="6">
          </div>
          <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" required minlength="6">
          </div>
          <button type="submit" class="btn btn-success w-100">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- ================= Login Modal ================= -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow-lg rounded-3">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <form action="login.php" method="POST">
          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>

</html>
