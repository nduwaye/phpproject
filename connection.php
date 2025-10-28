<?php 
// Step 1: Connect to Database
$con = mysqli_connect("localhost","root","","registration");
if (isset($_POST['submit'])) {
    // Get values from form
    $username  = trim($_POST['username']);
    $password  = trim($_POST['password']); 

 $i = mysqli_query($con,"INSERT INTO logintb(username,password) VALUES('$username','$password')");

    if($i) {
          echo "<script>
            alert('✅ Data inserted successfully!');
            window.location.href = 'project12.php';
        </script>";
    } else {
        echo "<script>alert('❌unable to insert')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="rw">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="project.css">
</head>
<body>
  
  <div class="container">
    <h2>Login</h2>

    <form id="loginForm" action="connection.php" method="POST">
      <label>Username:</label>
      <input type="text" id="username" name="username" required>

      <label>Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit" name="submit">LOGIN</button>
    </form>

    <p><a href="forgotpassword.php">Forgot Password?</a></p>
    <div id="message"></div>
<script src="project.js?v=<?php echo filemtime('project.js'); ?>"></script>
  </div>
</body>
</html>

