<?php
    // Includes:
    include "database_functions.php";
    // Starting Session:
    session_start();
    // Connecting to Database::
    $link = connectDatabase();
    //  Receiving from method POST:
    $username = $_POST["username"];
    $password = $_POST["password"];
    // Username and Password match verification:
    $resultQuery = mysqli_query($link, "SELECT uid, username, password FROM users WHERE username = '$username' and password = '$password'");
    $foundRows = mysqli_num_rows($resultQuery);
    if($foundRows == 0){
        $_SESSION["userPasswordNotMatch"] = 1;
        header("Location: ../user_login_page.php");
        return;
    }else{
        $userRow = mysqli_fetch_row($resultQuery);
        $_SESSION["userUID"] = $userRow[0];
        $_SESSION["userUsername"] = $userRow[1];
        header("Location: ../user_profile_page.php");
        return;
    }
?>
