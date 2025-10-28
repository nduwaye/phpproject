<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>National ID Registration - Rwanda</title>
  <link rel="stylesheet" href="style2.css">

  <script>
    function simpleValidate() {
      const id = document.forms["idForm"]["national_id"].value.trim();
      const dob = document.forms["idForm"]["date_of_birth"].value;
      if (id.length !== 16 || isNaN(id)) {
        alert("ID number must be 16 digits!");
        return false;
      }
      const birth = new Date(dob);
      const today = new Date();
      const age = today.getFullYear() - birth.getFullYear();
      const m = today.getMonth() - birth.getMonth();
      if (m < 0 || (m === 0 && today.getDate() < birth.getDate())) {
        age--;
      }

      if (age < 18) {
        alert("You must be 18 years or older!");
        return false;
      }

      return true;
    }
  </script>
</head>
<body>
  <h1>Census of People with Identity Cards</h1>
  <form name="idForm" action="" method="POST" onsubmit="return simpleValidate()">
    <label>Fullname:</label>
    <input type="text" name="full_name" required><br>

    <label>ID:</label>
    <input type="text" name="national_id" required maxlength="16"><br>

    <label>Date of Birth:</label>
    <input type="date" name="date_of_birth" required><br>

    <label>District:</label>
    <input type="text" name="district" required><br>

    <button type="submit" name="register">Submit</button>
  </form>

  <?php
  if (isset($_POST['register'])) {
    $full_name = $_POST['full_name'];
    $national_id = $_POST['national_id'];
    $dob = $_POST['date_of_birth'];
    $district = $_POST['district'];

    $sql = "INSERT INTO citizens (full_name, national_id, date_of_birth, district)
            VALUES ('$full_name', '$national_id', '$dob', '$district')";

    if ($conn->query($sql) === TRUE) {
      echo "<p>Inserted data successfully!</p>";
    } else {
      echo "<p>Error: " . $conn->error . "</p>";
    }
  }

  session_start();
  if (!isset($_SESSION['role']) || $_SESSION['role'] != 'user') {
    header("Location: login.php");
    exit();
  }
  ?>
  <a href="logout.php">Logout</a>
</body>
</html>
