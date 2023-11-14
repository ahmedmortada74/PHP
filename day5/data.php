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
$name = $_POST['name'];
$email = $_POST['email'];

echo "Name: $name<br>";
echo "Email: $email<br>";


echo "<a href='logout.php'>Logout</a>";
?>

</body>
</html>