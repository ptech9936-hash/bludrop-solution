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

<!-- Contact Page -->
<section class="contact py-5">
  <div class="container">
    <div class="row g-5">
      
      <!-- Contact Information -->
      <div class="col-lg-5"><br><br>
        <h2 class="mb-4">Get in Touch</h2>
        <p class="mb-4">
          Have a question, need support, or want to book our services?  
          Reach out and our team will respond promptly.
        </p>
        <ul class="list-unstyled">
          <li class="mb-3"><i class="bi bi-geo-alt-fill text-primary me-2"></i> Mombasa, Kenya</li>
          <li class="mb-3"><i class="bi bi-telephone-fill text-primary me-2"></i> 
            <a href="tel:+254748772131" class="text-dark text-decoration-none">+254 748772131</a>
          </li>
          <li class="mb-3"><i class="bi bi-envelope-fill text-primary me-2"></i> 
            <a href="mailto:info@bluedrop.co.ke" class="text-dark text-decoration-none">info@bluedrop.co.ke</a>
          </li>
        </ul>
        <div class="mt-4">
          <h6 class="fw-bold">Working Hours</h6>
          <p class="mb-0">Mon - Sat: 8:00 AM - 6:00 PM</p>
          <p>Sunday: Closed</p>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-7">
        <div class="card shadow rounded-3 border-0">
          <div class="card-body p-4">
            <h4 class="mb-4">Send Us a Message</h4>
            <form action="send_message.php" method="POST">
              <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea name="message" rows="5" class="form-control" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary px-4">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Map -->
    <div class="row mt-5">
      <div class="col-12">
        <h4 class="mb-3">Our Location</h4>
        <div class="ratio ratio-16x9">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.745219127!2d39.668206!3d-4.043477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182a2d68f2b1c3f5%3A0x9f4c22f049b3c937!2sMombasa!5e0!3m2!1sen!2ske!4v1697890912345" 
            style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
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