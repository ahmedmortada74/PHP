<?php
 $Firstname = $_POST['Firstname'];
echo $Firstname;
echo"<br>";
 $Lastname = $_POST['Lastname'];
echo $Lastname;
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $correctUsername = "ahmed";
    $correctPassword = "112233";
    if ($username == $correctUsername || $password == $correctPassword) {
        echo "Welcome";
    } else {
        echo "Erorr. Please try again.";
    }
}
?>
