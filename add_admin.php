<?php
session_start();
include 'config.php';
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
  header("Location: login.php");
  exit();
}

if (isset($_POST['add_admin'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $role = 'admin';

  $check = $conn->query("SELECT * FROM users WHERE username='$username'");
  if ($check->num_rows > 0) {
    echo "<script>alert('Admin already exists!');</script>";
  } else {
    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Admin added successfully!');</script>";
    } else {
      echo "Error: " . $conn->error;
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Admin</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <h2>Add New Admin</h2>
  <form method="POST" action="">
    <label>Username:</label>
    <input type="text" name="username" required><br>

    <label>Password:</label>
    <input type="password" name="password" required><br>

    <button type="submit" name="add_admin">Add Admin</button>
  </form>
  <a href="admin_dashboard.php">Back to Dashboard</a>
</body>
</html>
