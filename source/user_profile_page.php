<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Profile</title>

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
        <!-- Database and Session Conection -->
        <?php
            session_start();
            $link = connectDatabase();
        ?>
        <!-- Verify the SESSION Status -->
        <?php
            if(!(isset($_SESSION["userUID"]))){
                header("Location: user_login_page.php");
            }
        ?>
        <div class="container-fluid">
            <div class="row"> <!-- Page Header and Menu -->
                <?php
                    printBanner();
                    printUserMenu("user_profile_page");
                ?>
            </div>
            <div class="row"> <!-- Page Content -->
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading text-right" style="background: url(images/layout/profile_background.png) no-repeat center center; height: 150px;">
                            <img class="img-circle img-thumbnail" src="images/users_avatars/default.png" width="125px" height="125px" style="margin-top: 40px">
                        </div>
                        <div class="panel-heading"><b>Information</b></div>
                        <div class="panel-body">Panel Content</div>
                        <div class="panel-footer">Panel Footer</div>
                    </div>
                </div>
                <div class="col-sm-3">
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
        ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
