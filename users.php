<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "myshop");

// Fetch users
$user_result = $conn->query("SELECT * FROM users ORDER BY created_at DESC");

// Handle Add User submission
if (isset($_POST['add_user'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();
    header("Location: users.php?msg=User+added");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manage Users - BlueDrop Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { padding-top: 70px; }
.action-btn { margin-right: 5px; }
</style>
</head>
<body>

<!-- Fixed Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin.php">BlueDrop Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavUsers" aria-controls="navbarNavUsers" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavUsers">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="admin.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link active" href="users.php">Users</a></li>
        <li class="nav-item"><a class="nav-link" href="products.php" target="_blank">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container">

<?php if(isset($_GET['msg'])): ?>
<div class="alert alert-success mt-3"><?= htmlspecialchars($_GET['msg']) ?></div>
<?php endif; ?>

<h2>Users Management</h2>

<!-- Add User Form -->
<div class="card mb-4">
  <div class="card-header bg-primary text-white">Add New User</div>
  <div class="card-body">
    <form method="POST">
      <div class="row g-3">
        <div class="col-md-4">
          <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="col-md-4">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="col-md-4">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
      </div>
      <button type="submit" name="add_user" class="btn btn-success mt-3">Add User</button>
    </form>
  </div>
</div>

<!-- Users Table -->
<div class="card">
  <div class="card-header bg-primary text-white">All Users</div>
  <div class="card-body table-responsive">
    <table class="table table-bordered table-striped">
      <thead class="table-primary">
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Email</th>
          <th>Created At</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php while($user = $user_result->fetch_assoc()) { ?>
        <tr>
          <td><?= $user['id'] ?></td>
          <td><?= $user['username'] ?></td>
          <td><?= $user['email'] ?></td>
          <td><?= $user['created_at'] ?></td>
          <td>
            <a href="edit_user.php?id=<?= $user['id'] ?>" class="btn btn-warning btn-sm action-btn">Edit</a>
            <a href="delete_user.php?id=<?= $user['id'] ?>" class="btn btn-danger btn-sm action-btn">Delete</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
