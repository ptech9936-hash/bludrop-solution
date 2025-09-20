  <?php
// Services.php — Bluedrop Plumbing Solutions
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services | Bluedrop Plumbing Solutions</title>
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

<!-- Services Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5"><br><br>
      <h2 class="fw-bold">Our Plumbing Services</h2>
      <p class="text-muted">Professional, reliable, and affordable plumbing solutions for residential, commercial, and industrial clients.</p>
    </div>
    
    <div class="row g-4">
      <!-- Service 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="assets/images/plumbing repairs.avif" class="card-img-top" alt="Plumbing Repairs">
          <div class="card-body">
            <h5 class="card-title">General Plumbing Repairs</h5>
            <p class="card-text small text-muted">
              From leaky faucets to broken pipes, our expert team ensures fast and lasting plumbing repairs.
            </p>
            <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="assets/images/showers.avif" class="card-img-top" alt="Plumbing Installations">
          <div class="card-body">
            <h5 class="card-title">Installations & Upgrades</h5>
            <p class="card-text small text-muted">
              We install sinks, showers, water heaters, and modern plumbing systems with precision.
            </p>
            <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="assets/images/drainage.avif" class="card-img-top" alt="Drain Cleaning">
          <div class="card-body">
            <h5 class="card-title">Drainage & Sewer Solutions</h5>
            <p class="card-text small text-muted">
              Unclogging, cleaning, and maintaining drainage systems for smooth water flow and hygiene.
            </p>
            <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Service 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="assets/images/water systems.avif" class="card-img-top" alt="Water Supply Systems">
          <div class="card-body">
            <h5 class="card-title">Water Supply Systems</h5>
            <p class="card-text small text-muted">
              Reliable water supply installation and maintenance for homes, offices, and industries.
            </p>
            <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Service 5 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="assets/images/contract.avif" class="card-img-top" alt="Maintenance Plans">
          <div class="card-body">
            <h5 class="card-title">Maintenance Contracts</h5>
            <p class="card-text small text-muted">
              We offer affordable service contracts to keep your plumbing systems running smoothly year-round.
            </p>
            <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Service 6 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="assets/images/emmergence.avif" class="card-img-top" alt="Emergency Services">
          <div class="card-body">
            <h5 class="card-title">24/7 Emergency Plumbing</h5>
            <p class="card-text small text-muted">
              Round-the-clock emergency plumbing services to handle urgent leaks, floods, and breakdowns.
            </p>
            <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
          </div>
        </div>
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
