<?php
$con = mysqli_connect("localhost","root","","restrourant");
if (isset($_POST['submit'])) {
    $fname  = $_POST['fname']; 
   $lname  = $_POST['lname']; 
 $i = mysqli_query($con,"INSERT INTO customer(cid,fname,lname) VALUES('$cid','$fname','$lname')");

    if($i==true) {
        echo "<script>alert('INSERTED DATA SUCESSFULLY');
        history.back();
        </script>";
    } else {
        echo "<script>alert('unable to insert')</script>";
    }
}

?>

  
