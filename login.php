<?php
$con = mysqli_connect("localhost", "root", "", "parking-db");
if (!$con) {
    die("Connection failed!");
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $vehicle = $_POST['vehicle'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $parking = $_POST['parking'];
    $sql = "INSERT INTO parkingtb (name, vehicle, province, district, parking)
            VALUES ('$name', '$vehicle', '$province', '$district', '$parking')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('✅ Data saved successfully!');</script>";
    } else {
        echo "<script>alert('❌ Error while saving data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <h1>Login</h1>
  <form method="POST">
    <label>Username:</label>
    <input type="text" name="username" required><br>
    <label>Password:</label>
    <input type="password" name="password" required><br>
    <button type="submit" name="login">Login</button>
  </form>
  <p>Don't have an account? <a href="register_user.php">Register</a></p>
</body>
</html>
