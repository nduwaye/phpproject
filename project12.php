<?php
$con = mysqli_connect("localhost", "root", "", "parking-db");
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $vehicle = isset($_POST['vehicle']) ? $_POST['vehicle'] : '';
    $province = isset($_POST['province']) ? $_POST['province'] : '';
    $district = isset($_POST['district']) ? $_POST['district'] : '';
    $parking = isset($_POST['parking']) ? $_POST['parking'] : '';
    if ($name !== '' && $vehicle !== '' && $province !== '' && $district !== '' && $parking !== '') {
        $insert = mysqli_query($con, "INSERT INTO parkingtb (name, vehicle, province, district, parking)
                                     VALUES ('$name', '$vehicle', '$province', '$district', '$parking')");
        if ($insert) {
            echo "<script>alert('✅ Data inserted successfully!');</script>";
        } else {
            echo "<script>alert('❌ Failed to insert data!');</script>";
        }
    } else {
        echo "<script>alert('⚠️ Please fill in all fields before submitting.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="rw">
<head>
  <meta charset="UTF-8">
  <title>Parking Registration</title>
  <link rel="stylesheet" href="project.css">
</head>
<body>
  <div class="container">
    <h2>Register & Go to Parking</h2>

    <form id="registerForm" action="" method="POST">
      <label>Name:</label>
      <input type="text" id="name" name="name" required><br>

      <label>Vehicle Type:</label>
      <select id="vehicle" name="vehicle" required>
        <option value="">-- Select Vehicle --</option>
        <option value="Moto">Moto</option>
        <option value="Car">Car</option>
      </select><br>

      <label>Province:</label>
      <select id="province" name="province" required>
        <option value="">-- Select Province --</option>
        <option value="Kigali">Kigali</option>
        <option value="Northern">Northern</option>
        <option value="Southern">Southern</option>
        <option value="Eastern">Eastern</option>
        <option value="Western">Western</option>
      </select>

      <label>District:</label>
      <select id="district" name="district" required>
        <option value="">-- Select District --</option>
      </select>

      <label>Hari Parking?</label>
      <select id="parking" name="parking" required>
        <option value="">-- Hitamo --</option>
        <option value="Yego">Yego</option>
        <option value="Oya">Oya</option>
      </select>

      <button type="submit" name="submit">Submit</button>
    </form>
  </div>

  <script src="project.js?v=<?php echo time(); ?>"></script>
</body>
</html>
