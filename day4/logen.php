<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // session_start();
    // if(empty($_SESSION['username'])) {
        ?>
    <h3>Login</h3>
    <form action="./data.php" method="post">
        <input type="text" name="username" id="">
        <input type="password" name="password" id="">
        <input type="submit" value="submit">
    </form>
    <?php
    //  } else {
    //     echo "Already Logged In";
    // } 
    ?>
</body>
</html>