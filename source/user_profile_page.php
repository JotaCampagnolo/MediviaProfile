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
                            <img class="img-circle img-thumbnail" src="images/users_avatars/derlexy.png" width="125px" height="125px" style="margin-top: 40px">
                        </div>
                        <div class="panel-heading">
                            <span class="fa fa-user-circle-o" style="margin-right: 8px"></span><b>Profile</b>
                        </div>
                        <div class="panel-body">
                            <h4 style="margin: 0px"><small><span class="fa fa-user-circle-o" style="margin-right: 4px; font-size: 10pt; color: #a2a2a2"></span>Username</small></h4>
                            <h4 style="font-family: Book Antiqua; font-size: 18pt; margin: 0px">Derlexy</h4>
                            <hr style="margin: 12px 0px 12px 0px">
                            <h4 style="margin: 0px"><small><span class="fa fa-at" style="margin-right: 4px; font-size: 10pt; color: #a2a2a2"></span>Email</small></h4>
                            <h4 style="font-family: Book Antiqua; font-size: 16pt; margin: 0px"><i>jota.campagnolo@gmail.com</i></h4>
                            <hr style="margin: 12px 0px 12px 0px">
                            <h4 style="margin: 0px"><small><span class="fa fa-globe" style="margin-right: 4px; font-size: 10pt; color: #a2a2a2"></span>Location</small></h4>
                            <h4 style="font-family: Book Antiqua; font-size: 18pt; margin: 0px">Brazil</h4>
                            <img class="img" src="images/flags/brazil.png" style="margin-top: 10px">
                            <hr style="margin: 12px 0px 12px 0px">
                            <h4 style="margin: 0px"><small><span class="fa fa-street-view" style="margin-right: 4px; font-size: 10pt; color: #a2a2a2"></span>Main World</small></h4>
                            <h4 style="font-family: Book Antiqua; font-size: 18pt; margin: 0px">Spectrum</h4>
                            <hr style="margin: 12px 0px 12px 0px">
                            <h4 style="margin: 0px"><small><span class="fa fa-star" style="margin-right: 4px; font-size: 10pt; color: #a2a2a2"></span>Favorite Vocation</small></h4>
                            <h4 style="font-family: Book Antiqua; font-size: 18pt; margin: 0px">Royal Paladin</h4>
                            <hr style="margin: 12px 0px 12px 0px">
                            <h4 style="margin: 0px"><small><span class="fa fa-commenting-o" style="margin-right: 4px; font-size: 10pt; color: #a2a2a2"></span>Comment</small></h4>
                            <blockquote style="margin: 10px 0px 0px 0px">
                                <h4 style="font-family: Book Antiqua; font-size: 16pt; margin: 0px"><i>Hello guys. Im a neutral and RPG player.</i></h4>
                                <footer>Derlexy</footer>
                            </blockquote>
                        </div>
                        <div class="panel-footer text-right">
                            <button type="button" class="btn btn-primary" href"#" style="margin: 5px"><span class="fa fa-pencil" style="margin-right: 6px"></span>Edit Profile</button>
                            <button type="button" class="btn btn-danger" href"functions/user_logout_functions.php" style="margin: 5px"><span class="fa fa-sign-out" style="margin-right: 6px"></span>Logout</button>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="fa fa-users" style="margin-right: 8px"></span><b>Characters</b>
                        </div>
                        <div class="panel-body">
                            Panel Content
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
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
