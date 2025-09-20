<?php
// about.php — Bluedrop Plumbing Solutions
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Bluedrop Plumbing Solutions</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="icon" href="assets/images/12459.jpg" type="image/png">
</head>
<body>
  <!-- Navbar (same as index.php) -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="assets/images/BlueDrop.jpeg" alt="Bluedrop Logo" width="45" height="45" class="me-2">
        <span>Bluedrop</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item"><a class="nav-link" href="index.php" target="_blank">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="about.php" target="_blank">About</a></li>
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

  <!-- Hero -->
  <section class="bg-light text-dark py-5 mt-5">
    <div class="container text-center">
      <h1 class="display-5 fw-bold">About Us</h1>
      <p class="lead">Professional plumbing solutions trusted by households and businesses across Kenya.</p>
    </div>
  </section>

 <section class="our-story-section py-5" style="background-color: #f5f9fc;">
  <div class="container">
    <h2 class="mb-4 text-center">Our Story</h2>
    <p class="lead text-center">
      Every home and business deserves plumbing they can trust. Bluedrop Plumbing Solutions began with a simple idea: to make high-quality, reliable plumbing accessible to everyone. What started as a small team with big dreams has grown into a full-fledged company known for excellence, integrity, and dedication.
    </p>
    <p>
      Our journey has been shaped by hands-on experience, countless challenges, and hundreds of successful projects—from fixing leaky faucets in cozy homes to managing complex plumbing systems for large commercial properties. Each project is a story of precision, teamwork, and the satisfaction of seeing a problem solved.
    </p>
    <p>
      But our story isn’t just about pipes and fixtures—it’s about people. We prioritize our clients’ peace of mind by combining innovative solutions, sustainable practices, and a personal touch in every service we offer. At Bluedrop Plumbing Solutions, we don’t just fix problems; we build trust, long-term relationships, and a reputation that stands the test of time.
    </p>
  </div>
</section>

  <!-- Certifications -->
<section class="bg-light py-5">
  <div class="container">
    <h2 class="mb-4 text-center">Our Certifications</h2>
    <p class="lead text-center mb-4">
      At Bluedrop Plumbing Solutions, we take pride in maintaining the highest industry standards. Our certifications reflect our commitment to quality, professionalism, and safety in every project we undertake.
    </p>
    <ul class="list-unstyled">
      <li class="mb-2">
        <strong>Licensed by National Construction Authority (NCA):</strong> Ensures all our plumbing works comply with national regulations, guaranteeing safety, legality, and industry best practices.
      </li>
      <li class="mb-2">
        <strong>Certified Water Systems Installer:</strong> Demonstrates our expertise in installing, maintaining, and repairing residential and commercial water systems with precision and efficiency.
      </li>
      <li class="mb-2">
        <strong>Member of Kenya Plumbers Association:</strong> Highlights our active engagement in professional networks, keeping us updated with the latest plumbing techniques, standards, and innovations.
      </li>
      <li class="mb-2">
        <strong>ISO 9001:2015 Quality Management:</strong> Reflects our dedication to consistently delivering high-quality services, focusing on continuous improvement and customer satisfaction.
      </li>
    </ul>
    <p class="mt-4 text-center">
      These certifications are more than titles—they are a testament to our unwavering commitment to excellence and the trust our clients place in us for every project.
    </p>
  </div>
</section>


  <!-- Team -->
  <section class="py-5">
    <div class="container">
      <h2 class="mb-4">Meet Our Team</h2>
      <div class="row">
        <div class="col-md-4 text-center">
          <img src="assets/images/john.avif" class="rounded-circle mb-3" alt="Team" width="200">
          <h5>John Mwangi</h5>
          <p class="text-muted">Lead Plumber</p>
        </div>
        <div class="col-md-4 text-center">
          <img src="assets/images/mary.avif" class="rounded-circle mb-3" alt="Team" width="200">
          <h5>Mary Atieno</h5>
          <p class="text-muted">Project Manager</p>
        </div>
        <div class="col-md-4 text-center">
          <img src="assets/images/ali hassan.avif" class="rounded-circle mb-3" alt="Team" width="200">
          <h5>Ali Hassan</h5>
          <p class="text-muted">Field Technician</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Coverage Area -->
  <section class="bg-light py-5">
    <div class="container">
      <h2 class="mb-4">Coverage Area</h2>
      <p>We proudly serve clients across Mombasa, Nairobi, Kisumu, and other major towns in Kenya.</p>
      <img src="assets/images/coverage map.avif" alt="Service Map" class="img-fluid rounded shadow">
    </div>
  </section>

    <!-- Call-to-Action Section -->
  <section class="bg-primary text-white text-center py-5">
    <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between">
      <div>
        <h3 class="fw-bold">Need help today?</h3>
        <p class="mb-0">Create an account to request, track and manage your plumbing jobs online.</p>
      </div>
      <a href="register.php" class="btn btn-light btn-lg mt-3 mt-lg-0">Get Started</a>
    </div>
  </section>
  <!-- Footer -->
  <footer class="footer bg-dark text-white-50 pt-5 pb-4">
    <div class="container">
      <div class="row g-4">
        <!-- Company Info -->
        <div class="col-md-6 col-lg-4">
          <h5 class="text-white mb-3">Bluedrop Plumbing</h5>
          <p class="small">
            Smart plumbing solutions for homes and businesses across the coast. 
            We ensure quality, reliability, and excellence in every drop.
          </p>
          <div>
            <a href="https://facebook.com" target="_blank" class="me-3 text-white-50">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="https://twitter.com" target="_blank" class="me-3 text-white-50">
              <i class="bi bi-twitter"></i>
            </a>
            <a href="https://instagram.com" target="_blank" class="text-white-50">
              <i class="bi bi-instagram"></i>
            </a>
          </div>
        </div>

        <!-- Contacts -->
        <div class="col-md-6 col-lg-4">
          <h6 class="text-white mb-3">Contacts</h6>
          <ul class="list-unstyled small">
            <li><i class="bi bi-telephone me-2"></i> 
              <a class="link-light" href="tel:+254748772131">+254 748 772 131</a>
            </li>
            <li><i class="bi bi-envelope me-2"></i> 
              <a class="link-light" href="mailto:info@bluedrop.co.ke">info@bluedrop.co.ke</a>
            </li>
            <li><i class="bi bi-geo-alt me-2"></i> Mombasa, Kenya</li>
          </ul>
        </div>

        <!-- Quick Links -->
        <div class="col-md-6 col-lg-4">
          <h6 class="text-white mb-3">Quick Links</h6>
          <ul class="list-unstyled small">
            <li><a class="link-light" href="services.php" target="_blank">All Services</a></li>
            <li><a class="link-light" href="about.php" target="_blank">About Us</a></li>
            <li><a class="link-light" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Customer Login</a></li>
<li><a class="link-light" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Create Account</a></li>

            <li><a class="link-light" href="privacy.php" target="_blank">Privacy Policy</a></li>
          </ul>
        </div>
      </div>

      <!-- Bottom Copyright -->
      <div class="border-top border-secondary mt-4 pt-3 small text-center">
        <span>© <?php echo date('Y'); ?> Bluedrop Plumbing Solutions. All rights reserved.</span>
      </div>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
