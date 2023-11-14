<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_POST['username'] == 'ali' && $_POST['password'] == '123456') {
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header("Location: form.php");
} else {
    echo "Invalid username or password. Please try again.";
}
?>
</body>
</html>