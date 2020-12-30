<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
<h1>GO to <a href="form.php">Form Page</a></h1>
</body>
</html>

<?php
$hostName = 'Localhost';
$userName = 'root';
$password = '';
$dbName = 'jashim';

$mysqli = new mysqli($hostName, $userName, $password, $dbName);
// Data tables 
if(isset($_POST['name'])){
    $name = $_POST['name'];
}
if(isset($_POST['roll_no'])){
    $roll_no = $_POST['roll_no'];
}
if(isset($_POST['class'])){
    $class = $_POST['class'];
}
if(isset($_POST['age'])){
    $age = $_POST['age'];
}
if(isset($_POST['department'])){
    $department = $_POST['department'];



$db_data = "insert into students (name, roll_no, class, age, department) VALUES ('$name',$roll_no,'$class',$age,'$department')";


mysqli_query($mysqli,$db_data);

}

?>
