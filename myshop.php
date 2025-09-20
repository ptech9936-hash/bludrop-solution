<?php
session_start();
if (!isset($_SESSION['customer'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "myshop");

// Fetch all products
$result = $conn->query("SELECT * FROM products");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BlueDrop Plumbing Shop</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.card { border: 1px solid #ddd; transition: transform 0.2s; }
.card:hover { transform: scale(1.02); }
.btn-buy { margin-top: auto; }
.card-body { display: flex; flex-direction: column; }
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BlueDrop Plumbing</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCustomer" aria-controls="navbarCustomer" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCustomer">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="myshop.php">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="profile.php">My Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5 pt-5">
    <h2 class="mb-4">Our Plumbing Products</h2>
    <div class="row">
        <?php while($product = $result->fetch_assoc()): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100 p-3">
                <h5 class="card-title"><?= htmlspecialchars($product['name']) ?> (<?= htmlspecialchars($product['category']) ?>)</h5>
                <p class="card-text"><?= htmlspecialchars($product['description']) ?></p>
                <p class="fw-bold">Ksh <?= number_format($product['price'], 2) ?></p>
                <div class="mt-auto">
                    <a href="add_to_cart.php?id=<?= $product['id'] ?>" class="btn btn-success btn-buy w-100 mb-2">Add to Cart</a>
                    <a href="buy.php?id=<?= $product['id'] ?>" class="btn btn-primary btn-buy w-100">Buy Now</a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
