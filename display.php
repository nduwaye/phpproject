<?php
$con = mysqli_connect("localhost","root","","restrourant");


$bright = mysqli_query($con,"SELECT * FROM customer");

while($gun = mysqli_fetch_array($bright)){
    echo $gun['cid'];
    echo $gun['fname'];
    echo $gun['lname'];
    ?>
    <a href="delete.php?cid=<?php echo $gun['cid']; ?>">delete</a>
    <br><br>
    <?php
}
?>
