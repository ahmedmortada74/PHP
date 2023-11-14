<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if ($_SESSION['username'] !== 'ali') {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    header("Location: data.php?name=$name&email=$email");
    exit();
}
?>
    <form action="data.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
      
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
       
        <input type="submit" value="Submit">
    </form>
</body>
</html> 
