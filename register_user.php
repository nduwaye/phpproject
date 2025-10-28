<?php
include 'config.php';
$msg = '';
if (isset($_POST['register'])) {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  // basic check
  if ($username === '' || $password === '') {
    $msg = "Please provide username and password.";
  } else {
    $check = $conn->prepare("SELECT id FROM users WHERE username=? LIMIT 1");
    $check->bind_param("s", $username);
    $check->execute();
    $r = $check->get_result();
    if ($r && $r->num_rows > 0) {
      $msg = "Username already exists.";
    } else {
      // store password as plain for now to keep compatibility with login code
      $ins = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, 'user')");
      $ins->bind_param("ss", $username, $password);
      if ($ins->execute()) {
        header("Location: login.php");
        exit();
      } else {
        $msg = "Error: " . $ins->error;
      }
      $ins->close();
    }
    $check->close();
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <div class="container">
    <h2>Register</h2>
    <?php if ($msg) echo "<div class='alert'>$msg</div>"; ?>
    <form method="POST" action="">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" name="register">Register</button>
    </form>
    <p><a href="login.php">Back to Login</a></p>
  </div>
</body>
</html>
