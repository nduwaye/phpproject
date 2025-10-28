<?php 
$con = mysqli_connect("localhost","root","","project-db");
if($con){
    echo "connected successfully";
} else {
    echo "can not connect";
}

if (isset($_POST['submit'])) {
    $Names  = $_POST['Names'];
    $Age  = $_POST['Age']; 

    $i = mysqli_query($con,"INSERT INTO students(Names,Age) VALUES('$Names','$Age')");
    if($i) {
        echo "<script>alert('INSERT DATA IN DATABASE');
        history.back();
        </script>";
    } else {
        echo "unable to insert";
    }
}
?>