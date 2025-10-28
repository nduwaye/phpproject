<?php
$con = mysqli_connect("localhost","root","","restrourant");


$bright = mysqli_query($con,"SELECT * FROM customer");

while($gun = mysqli_fetch_array($bright)){
    echo $gun['cid'];
    echo $gun['fname'];
    echo $gun['lname'];
    ?>
    <a href="remove.php?cid=<?php echo $gun['cid']; ?>">delete</a>
    <a href="update_form.php?cid=<?php echo $gun['cid']; ?>">update</a>
    <br><br>
    <?php
}
?>
