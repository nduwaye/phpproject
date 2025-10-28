<?php 
session_start();
include 'config.php';
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <nav class="navbar">
    <a href="admin_dashboard.php">Dashboard</a>
    <a href="view.php">View Citizens</a>
    <a href="add_admin.php">Add Admin</a>
    <a href="logout.php">Logout</a>
  </nav>

  <div class="container">
    <h1>Welcome Admin: <?php echo $_SESSION['username']; ?></h1>
    <p>You can manage registered citizens and other admins here.</p>
  </div>
</body>
</html>
