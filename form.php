<!DOCTYPE html>
<html>
<head>
    
<title> ADDING STUDENTS </title>
    <style>
 input{
    border-radius:5px;
    border-color:blue;
 }
 fieldset{
    width: 20%;
    height: 20%;
    border-radius:12px;
    border-color:yellow;
    justify-contect:center;
  width: 300px;             
    padding: 20px;
    text-align: center;       
    border: 2px solid #333;
    border-radius: 10px;
    background: white;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);

 }
 h2{
color:blue;
 }
h2:hover{
    color:cyan;
}

body {
    display: flex;
    justify-content: center;  
    align-items: center;      
    height: 100%;         
    margin: 0;
    background: #f0f0f0;
}
</style> 
</head>
<body>
    <fieldset>
    <h2> ENTER STUDENTS NAME & AGE</h2>
    <form action="connection.php" method="POST">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

    <label>Age:</label>
        <input type="text" name="age"required><br><br>

        <input type="submit"  name="submit" value="save">
    </form>
    </fieldset>
</body>
</html>
