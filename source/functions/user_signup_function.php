<?php
    include "database_functions.php";
    session_start();
    $link = connectDatabase();
    $newUsername = $_POST["username"];
    echo $newUsername;
?>
