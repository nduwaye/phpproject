<?php
$con = mysqli_connect("localhost","root","","restrourant");
if(isset($_GET['cid'])){
    $n = $_GET['cid'];
    $del = mysqli_query($con,"DELETE FROM customer WHERE cid='$n'");
    if($del == true){
        echo "deleted well";
    }
    else{
        echo "not deleted";
    }
}
?>
