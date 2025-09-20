<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "myshop");

// Fetch requests
$result = $conn->query("SELECT * FROM requests ORDER BY created_at DESC");
// Count Contacted requests
$total_contacted = $conn->query("SELECT COUNT(*) as count FROM requests WHERE status='Contacted'")->fetch_assoc()['count'];

// Count Pending requests
$total_pending = $conn->query("SELECT COUNT(*) as count FROM requests WHERE status='Pending'")->fetch_assoc()['count'];

// Count total requests
$total_requests = $conn->query("SELECT COUNT(*) as count FROM requests")->fetch_assoc()['count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard - BlueDrop Plumbing Solutions</title>
<link rel="icon" href="assets/images/12459.jpg" />
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { padding-top: 70px; } /* space for fixed header */
.action-btn { margin-right: 5px; }
</style>
</head>
<body>

<!-- Fixed Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BlueDrop Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="admin.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="products.php" target="_blank">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="users.php" target="_blank">Users</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="row mb-4">
    <div class="col-md-3 mb-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Total Requests</h5>
                <p class="card-text fs-4"><?= $total_requests ?></p>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Contacted</h5>
                <p class="card-text fs-4 text-success"><?= $total_contacted ?></p>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Pending</h5>
                <p class="card-text fs-4 text-warning"><?= $total_pending ?></p>
            </div>
        </div>
    </div>
</div>


  <div class="card">
    <div class="card-header bg-primary text-white">
      Call Back Requests
    </div>
    <div class="card-body table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-primary">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Service</th>
            <th>Status</th>
            <th>Requested On</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = $result->fetch_assoc()) { ?>
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['service'] ?></td>
            <td><?= $row['status'] ?></td>
            <td><?= $row['created_at'] ?></td>
            <td>
              <a href="update_status.php?id=<?= $row['id'] ?>&status=Contacted" class="btn btn-success btn-sm action-btn">Contacted</a>
              <a href="update_status.php?id=<?= $row['id'] ?>&status=Pending" class="btn btn-warning btn-sm action-btn">Pending</a>
              <a href="delete_request.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm action-btn">Delete</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Your toggle script (optional if needed for custom menus) -->
<script>
function toggleMenu() {
    document.getElementById('nav-links').classList.toggle('show');
}
</script>

</body>
</html>
