<!-- $name = 'name';
$rollNo = 'roll_no';
$class = 'class';
$age = 'age';
$department = 'department'; -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
    <h1>Go to <a href="index.php">home</a>
</h1>
    <form action="index.php" method="post">
        <label for="name">name</label><br/>
        <input type="text" name="name" id="name" placeholder="Enter Your Name"><br/>
        <label for="roll_no">roll_no</label><br/>
        <input type="number" name="roll_no" id="roll_no" placeholder="Enter Your Roll no"><br/>
        <label for="class">class</label><br/>
        <input type="text" name="class" id="class" placeholder="Enter Your class"><br/>
        <label for="name">age</label><br/>
        <input type="number" name="age" id="age" placeholder="Enter Your age"><br/>
        <label for="name">department</label><br/>
        <input type="text" name="department" id="department" placeholder="Enter Your department"><br/><br/>
        <input type="submit" value="submit">
    </form>
</body>
</html>