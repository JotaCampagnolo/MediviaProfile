<?php
    session_start();
    session_unset();
    $_SESSION["userLogout"] = 1;
    header("Location: ../user_login_page.php");
?>
