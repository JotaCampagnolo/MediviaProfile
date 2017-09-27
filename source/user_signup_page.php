<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Sign Up</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

        <!-- Includes -->
        <?php
            include "functions/layout_functions.php";
            include "functions/database_functions.php";
        ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Database Conection -->
        <?php
            $link = connectDatabase();
        ?>
        <div class="container-fluid">
            <div class="row"> <!-- Page Header and Menu -->
                <?php
                    printBanner();
                    printMenu("user_signup_page");
                ?>
            </div>
            <div class="row"> <!-- Page Content -->
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <div class="text-center">
                        <span class="fa fa-user-plus" style="font-size: 60pt; margin-bottom: 10px"></span>
                        <h1 style="font-family: Book Antiqua; font-size: 26pt; margin-top: -5px; margin-bottom: 25px">Registering an Account</h1>
                    </div>
                    <form action="functions/user_signup_function.php" method="post">
                        <div class="form-group">
                            <span class="fa fa-user-circle-o" style="margin-right: 4px"></span><label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" aria-describedby="usernameField" maxlength="20" required placeholder="Enter your Username">
                            <i><small id="usernameField" class="form-text text-muted">Choose your Username properly. It must have at least 8 caracters.</small></i>
                        </div>
                        <div class="form-group">
                            <span class="fa fa-at" style="margin-right: 4px"></span><label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailField" maxlength="50" required placeholder="Enter your E-mail">
                            <i><small id="emailField" class="form-text text-muted">Make sure you type your e-mail correctly. It must have a maximum of 50 caracters.</small></i>
                        </div>
                        <div class="form-group">
                            <span class="fa fa-unlock-alt" style="margin-right: 4px"></span><label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" aria-describedby="passwordField" maxlength="20" required placeholder="**********">
                            <i><small id="passwordField" class="form-text text-muted">Make sure to not share your password with nobody. We recommend you not to use your game password.</small></i>
                        </div>
                        <div class="form-group">
                            <span class="fa fa-unlock-alt" style="margin-right: 4px"></span><label for="confirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" aria-describedby="confirmPasswordField" maxlength="20" required placeholder="**********">
                            <i><small id="confirmPasswordField" class="form-text text-muted">Please, repeat your password to continue.</small></i>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success" style="margin: 5px"><span class="fa fa-check" style="margin-right: 8px"></span>Submit Registration</button>
                            <button type="reset" class="btn btn-warning" style="margin: 5px"><span class="fa fa-trash" style="margin-right: 8px"></span>Clear Registration</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4">
                </div>
            </div>
            <div class="row" style="margin-bottom: 30px"> <!-- Page pre-Footer -->
            </div>
            <?php
                printFooter();
            ?>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
