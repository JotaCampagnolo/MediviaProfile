<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Login</title>

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
            session_start();
            $link = connectDatabase();
        ?>
        <div class="container-fluid">
            <div class="row"> <!-- Page Header and Menu -->
                <?php
                    printBanner();
                    printMenu("user_login_page");
                ?>
            </div>
            <div class="row"> <!-- Page Content -->
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <div class="text-center">
                        <span class="fa fa-sign-in" style="font-size: 60pt; margin-bottom: 10px"></span>
                        <h1 style="font-family: Book Antiqua; font-size: 26pt; margin-top: -5px; margin-bottom: 25px">Login to Account</h1>
                    </div>
                    <?php
                        // Registration success message:
                        if(isset($_SESSION["registrationSuccess"])){
                            echo '<div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Congratulations:</strong> <i>' . $_SESSION["registrationSuccess"] . '</i> account has been sucessful created!
                            </div>';
                        }
                    ?>
                    <form method="post" action="user_login_function.php">
                        <div class="form-group">
                            <span class="fa fa-user-circle-o" style="margin-right: 4px"></span><label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" aria-describedby="usernameField" maxlength="20" required placeholder="Enter your Username">
                            <i><small id="usernameField" class="form-text text-muted">Enter your previously registered username.</small></i>
                        </div>
                        <div class="form-group">
                            <span class="fa fa-unlock-alt" style="margin-right: 4px"></span><label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" aria-describedby="passwordField" maxlength="20" required placeholder="**********">
                            <i><small id="passwordField" class="form-text text-muted">Make sure to not share your password with nobody.</small></i>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success" style="margin: 5px"><span class="fa fa-sign-in" style="margin-right: 8px"></span>Login Account</button>
                            <button type="reset" class="btn btn-warning" style="margin: 5px"><span class="fa fa-trash" style="margin-right: 8px"></span>Clear Fields</button>
                        </div>
                        <div class="text-center">
                            <a href="user_signup_page.php">Register an Account</a>
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
        <?php
            // Destroying SESSION variables:
            unset($_SESSION["registrationSuccess"]);
        ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
