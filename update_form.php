<?php
$con = mysqli_connect("localhost", "root", "", "restrourant");

if (isset($_GET['cid'])) {
    $n = $_GET['cid'];
    $del = mysqli_query($con, "SELECT * FROM customer WHERE cid='$n'");
    $data = mysqli_fetch_array($del);
}
?>

<form action="final_update.php" method="POST">
    <label>cid:</label>
    <input type="text" name="cid" value="<?php echo isset($data['cid']) ? $data['cid'] : ''; ?>" readonly required>

    <label>fname:</label>
    <input type="text" name="fname" value="<?php echo isset($data['fname']) ? $data['fname'] : ''; ?>" required>

    <label>lname:</label>
    <input type="text" name="lname" value="<?php echo isset($data['lname']) ? $data['lname'] : ''; ?>" required>

    <button type="submit" name="update">Update</button>
</form>
