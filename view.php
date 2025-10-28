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
  <title>Registered Citizens</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <nav class="navbar">
    <a href="admin_dashboard.php">Dashboard</a>
    <a href="view.php">View Citizens</a>
    <a href="logout.php">Logout</a>
  </nav>

  <div class="container">
    <h1>List of Registered Citizens</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>National ID</th>
        <th>Date of Birth</th>
        <th>District</th>
        <th>Registered At</th>
      </tr>

      <?php
      $result = $conn->query("SELECT * FROM citizens ORDER BY created_at DESC");
      while ($row = $result->fetch_assoc()) {
        echo "<tr>
          <td>{$row['id']}</td>
          <td>{$row['full_name']}</td>
          <td>{$row['national_id']}</td>
          <td>{$row['date_of_birth']}</td>
          <td>{$row['district']}</td>
          <td>{$row['created_at']}</td>
        </tr>";
      }
      ?>
    </table>
  </div>
</body>
</html>
