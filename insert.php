<?php include('connection.php');//call connection file
$i=mysqli_query($con,"INSERT INTO students(Names,Age)values('john',12)");
if($i==true) 
    {
    echo "insertedwell";
} 
else{
    echo"enable to insert";
}
?>