<?php
include('bright1.php');

if (isset($_POST['update'])) {
    $cid   = $_POST['cid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $up = mysqli_query($con, "UPDATE customer SET fname='$fname', lname='$lname' WHERE cid='$cid'");

   if($up==true){
    echo "Record successfully";
   }
   else{
    echo "not record successfully";
   }
}
?>
