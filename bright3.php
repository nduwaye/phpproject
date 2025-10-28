<!DOCTYPE html>
<html lang="rw">
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <style>
    h1{
      color:blue;
      font-family:sans self;
    }
    h1:hover{
      color:green;
    }
 input, button {
  width: 90%;
  padding: 10px;
  margin: 8px 0;
  border: none;
  border-radius: 5px;
  font-size: 1em;
}
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(to right, #00b4db, #0083b0);
  margin: 0;
  padding: 0;
  color: #fff;
}


    </style>
</head>
<body>
    <h1>welcome to the website</h1>
    <form action="bright2.php" method="POST">
        <form action="update_form.php" method="POST">

      <label>cid:</label>
      <input type="text" name="cid"  required><br><br>

      <label>fname:</label>
      <input type="text" name="fname"  required><br><br>

      <label>lname:</label>
      <input type="text" name="lname"  required><br><br>

      <button type="submit" name="submit">save</button>
</body>
</html>