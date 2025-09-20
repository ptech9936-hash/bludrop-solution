<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "myshop");

// Fetch products
$product_result = $conn->query("SELECT * FROM products ORDER BY created_at DESC");

// Handle Add Product
if (isset($_POST['add_product'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, "uploads/".$image);

    $stmt = $conn->prepare("INSERT INTO products (name, price, description, image) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sdss", $name, $price, $description, $image);
    $stmt->execute();
    header("Location: products.php?msg=Product+added");
    exit();
}

// Handle Edit Product
if (isset($_POST['edit_product'])) {
    $id = intval($_POST['id']);
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if($_FILES['image']['name']){
        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name, "uploads/".$image);
        $stmt = $conn->prepare("UPDATE products SET name=?, price=?, description=?, image=? WHERE id=?");
        $stmt->bind_param("sdssi", $name, $price, $description, $image, $id);
    } else {
        $stmt = $conn->prepare("UPDATE products SET name=?, price=?, description=? WHERE id=?");
        $stmt->bind_param("sdsi", $name, $price, $description, $id);
    }
    $stmt->execute();
    header("Location: products.php?msg=Product+updated");
    exit();
}

// Handle Delete Product
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $product = $conn->query("SELECT image FROM products WHERE id=$id")->fetch_assoc();
    if($product['image'] && file_exists("uploads/".$product['image'])){
        unlink("uploads/".$product['image']);
    }
    $stmt = $conn->prepare("DELETE FROM products WHERE id=?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    header("Location: products.php?msg=Product+deleted");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Products - BlueDrop Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { padding-top: 70px; }
.card-img { width: 80px; height: auto; }
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin.php">BlueDrop Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavProducts" aria-controls="navbarNavProducts" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavProducts">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="admin.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link active" href="products.php">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="users.php" target="_blank">Users</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">

<?php if(isset($_GET['msg'])): ?>
<div class="alert alert-success"><?= htmlspecialchars($_GET['msg']) ?></div>
<?php endif; ?>

<h2>Products Management</h2>

<!-- Add Product Form -->
<div class="card mb-4">
  <div class="card-header bg-primary text-white">Add New Product</div>
  <div class="card-body">
    <form method="POST" enctype="multipart/form-data" class="row g-3">
      <div class="col-md-3"><input type="text" name="name" class="form-control" placeholder="Name" required></div>
      <div class="col-md-2"><input type="number" step="0.01" name="price" class="form-control" placeholder="Price" required></div>
      <div class="col-md-4"><input type="text" name="description" class="form-control" placeholder="Description" required></div>
      <div class="col-md-3"><input type="file" name="image" class="form-control" required></div>
      <div class="col-12"><button type="submit" name="add_product" class="btn btn-success mt-2">Add Product</bu_
