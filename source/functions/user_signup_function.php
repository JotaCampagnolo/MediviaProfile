<?php
    // Includes:
    include "database_functions.php";
    // Starting Session:
    session_start();
    // Connecting to Database::
    $link = connectDatabase();
    //  Receiving from method POST:
    $newUsername = $_POST["username"];
    $newEmail = $_POST["email"];
    $newPassword = $_POST["password"];
    $newConfirmPassword = $_POST["confirmPassword"];
    // Username existence verification:
    $resultQuery = mysqli_query($link, "SELECT uid, username FROM users WHERE username = '$newUsername'");
    $foundRows = mysqli_num_rows($resultQuery);
    if($foundRows > 0){
        $_SESSION["duplicatedUsername"] = $newUsername;
        header("Location: ../user_signup_page.php");
        return;
    }
    // E-mail existence verification:
    $resultQuery = mysqli_query($link, "SELECT uid, email FROM users WHERE email = '$newEmail'");
    $foundRows = mysqli_num_rows($resultQuery);
    if($foundRows > 0){
        $_SESSION["duplicatedEmail"] = $newEmail;
        header("Location: ../user_signup_page.php");
        return;
    }
    // Passwords match verification:
    if($newPassword != $newConfirmPassword){
        $_SESSION["passwordNotMatch"] = 1;
        header("Location: ../user_signup_page.php");
        return;
    }
    // Database insertion:
    $insertion = mysqli_query($link, "INSERT INTO users (username, email, password) VALUES ('$newUsername', '$newEmail', '$newPassword')");
    $_SESSION["registrationSuccess"] = $newUsername;
    header("Location: ../user_login_page.php");
    return;
?>
