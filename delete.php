<?php
$con = mysqli_connect("localhost","root","","katss");

if(isset($_GET['Names'])){
    $n = $_GET['Names'];
    $del = mysqli_query($con,"DELETE FROM students WHERE Names='$n'");
    if($del == true){
        echo "deleted well";
    }
    else{
        echo "not deleted";
    }
}
?>
