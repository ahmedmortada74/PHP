<?php

    $userName = $_POST['username'];
    $fileHandler = fopen('mortada/assest.txt', 'a');
    fwrite($fileHandler, "Full Name: ".$userName."\n");
    fclose($fileHandler);

?>