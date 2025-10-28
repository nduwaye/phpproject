<?php 
$con = mysqli_connect("localhost","root","","project-db");
if($con){
} else {
    die("can not connect");
}

if (isset($_POST['submit'])) {
    $newpassword  = $_POST['newpassword'];
    $confirmpassword  = $_POST['confirmpassword'];
    $username = $_POST['username']; 

    if ($newpassword !== $confirmpassword) {
        echo "<script>alert('Passwords do not match!'); history.back();</script>";
        exit;
    }

    // Update password ya user
    $sql = "UPDATE registration SET password='$newpassword' WHERE username='$username'";
    $i = mysqli_query($con, $sql);

    if($i && mysqli_affected_rows($con) > 0) {
        echo "<script>alert('Password updated successfully!'); 
        window.location.href='connection.php';</script>";
    } else {
        echo "<script>alert('Unable to update password. Check your username.'); history.back();</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="rw">
<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="project.css">
</head>
<body>
  <div class="container">
    <h2>Forgot Password</h2>
    <form method="POST" action="">
      <label>Username:</label>
      <input type="text" name="username" required>

      <label>New Password:</label>
      <input type="password" name="newpassword" required>

      <label>Confirm Password:</label>
      <input type="password" name="confirmpassword" required>

      <button type="submit" name="submit">Save</button>
    </form>
    <a href="connection.php">Back to Login</a>
  </div>
</body>
</html>
