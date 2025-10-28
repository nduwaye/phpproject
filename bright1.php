<?php
$con = mysqli_connect("localhost","root","","restrourant");
if($con==true){
    echo "connected successfull";
}
else{
    echo "can not connected";
}
?>