<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Edit Profile</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

        <!-- Includes -->
        <?php
            include "functions/layout_functions.php";
            include "functions/database_functions.php";
            include "classes/classes.php";
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
            if(!isset($_SESSION["userUID"])){
                header("Location: user_login_page.php");
            }
            else{
                $user = new User($link, $_SESSION["userUID"]);
            }
        ?>
        <div class="container-fluid">
            <div class="row"> <!-- Page Header and Menu -->
                <?php
                    printBanner();
                    printUserMenu("user_edit_profile_page");
                ?>
            </div>
            <div class="row"> <!-- Page Content -->
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <div class="text-center">
                        <span class="fa fa-pencil-square-o" style="font-size: 60pt; margin-bottom: 10px"></span>
                        <h1 style="font-family: Book Antiqua; font-size: 26pt; margin-top: -5px; margin-bottom: 25px">Editing Your Profile</h1>
                    </div>
                    <?php
                    // Duplicated Username error:
                    if(isset($_SESSION["duplicatedUsername"])){
                        echo '<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Username Error:</strong> The username <i>' . $_SESSION["duplicatedUsername"] . '</i> was already taken!
                        </div>';
                    }
                    // Duplicated E-mail error:
                    if(isset($_SESSION["duplicatedEmail"])){
                        echo '<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>E-mail Error:</strong> The email <i>' . $_SESSION["duplicatedEmail"] . '</i> was already in use!
                        </div>';
                    }
                    // Password not match warning:
                    if(isset($_SESSION["passwordNotMatch"])){
                        echo '<div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>E-mail Error:</strong> The password confirmation do not match!
                        </div>';
                    }
                    ?>
                    <form action="functions/user_signup_functions.php" method="post">
                        <div class="form-group">
                            <span class="fa fa-user-circle-o" style="margin-right: 4px"></span><label for="username">Username</label>
                            <?php
                                echo '<input type="text" class="form-control" name="username" id="username" aria-describedby="usernameField" maxlength="20" minlength="3" disabled placeholder="' . $user->username . '"/>';
                            ?>
                            <i><small id="usernameField" class="form-text text-muted">You cant change your username.</small></i>
                        </div>
                        <div class="form-group">
                            <span class="fa fa-at" style="margin-right: 4px"></span><label for="email">E-mail</label>
                            <?php
                                echo '<input type="email" class="form-control" name="email" id="email" aria-describedby="emailField" maxlength="50" minlength="10" required value="' . $user->email . '">'
                            ?>
                            <i><small id="emailField" class="form-text text-muted">Make sure you type your new e-mail correctly. It must have a maximum of 50 caracters.</small></i>
                        </div>
                        <div class="form-group">
                            <span class="fa fa-unlock-alt" style="margin-right: 4px"></span><label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" aria-describedby="passwordField" maxlength="20" minlength="6" disabled placeholder="**********">
                            <i><small id="passwordField" class="form-text text-muted">You can't change your password here.</small></i>
                        </div>
                        <div class="form-group">
                            <span class="fa fa-commenting-o" style="margin-right: 4px"></span><label for="comment">Comment</label>
                            <?php
                                if($user->comment){
                                    echo '<textarea type="text" class="form-control" name="comment" id="comment" aria-describedby="commentField" maxlength="150" rows="3" style="resize:none">' . $user->comment . '</textarea>';
                                }
                                else{
                                    echo '<textarea type="text" class="form-control" name="comment" id="comment" aria-describedby="commentField" maxlength="150" rows="3" style="resize:none" placeholder="Type your comment here."></textarea>';
                                }
                            ?>
                            <i><small id="commentField" class="form-text text-muted">If you havent anything to say, just leave this field empty.</small></i><br>
                            <span class="fa fa-commenting-o" style="margin: 10px 4px 10px 0px"></span><label for="comment">Comment Owner</label>
                            <?php
                                if($user->comment_owner){
                                    echo '<input type="text" class="form-control" name="comment_owner" id="comment_owner" aria-describedby="comment_ownerField" maxlength="40" minlength="3" value="' . $user->comment_owner . '">';
                                }
                                else{
                                    echo '<input type="text" class="form-control" name="comment_owner" id="comment_owner" aria-describedby="comment_ownerField" maxlength="40" minlength="3" placeholder="Comment Author">';
                                }
                            ?>
                            <i><small id="commentField" class="form-text text-muted">Use this field to quote your comment owner.</small></i>
                        </div>
                        <div class="form-group">
                            <span class="fa fa-globe" style="margin-right: 4px"></span><label for="location">Location</label>
                            <select class="form-control selectpicker show-tick" data-live-search="true" data-size="10">
                                <?php
                                    $resultQuery = mysqli_query($link, "SELECT * FROM countries");
                                    while ($row = mysqli_fetch_array($resultQuery)){
                                        if($row[0] == $user->country->uid){
                                            echo '<option selected data-content="<img class=\'img\' src=\'images/flags/' . $row[2] . '.png\' value=\'' . $row[0] . '\' selected style=\'margin: 2px 5px 3px 0px; width: 20px; image-rendering: optimizeSpeed; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: -webkit-optimize-contrast; image-rendering: pixelated; image-rendering: optimize-contrast; -ms-interpolation-mode: nearest-neighbor\'>' . $row[1] . '">' . $row[1] . '</option>';
                                        }
                                        else{
                                            echo '<option data-content="<img class=\'img\' src=\'images/flags/' . $row[2] . '.png\' value=\'' . $row[0] . '\' style=\'margin: 2px 5px 3px 0px; width: 20px; image-rendering: optimizeSpeed; image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: -webkit-optimize-contrast; image-rendering: pixelated; image-rendering: optimize-contrast; -ms-interpolation-mode: nearest-neighbor\'>' . $row[1] . '">' . $row[1] . '</option>';
                                        }
                                    }
                                ?>
                            </select>
                            <i><small id="locationField" class="form-text text-muted">Select your real life location.</small></i>
                        </div>
                        <div class="form-group">
                            <span class="fa fa-street-view" style="margin-right: 4px"></span><label for="world">Main World</label>
                            <select class="form-control selectpicker show-tick" data-live-search="true" data-size="8">
                                <optgroup label="Not Defined">
                                    <?php
                                        $resultQuery = mysqli_query($link, "SELECT * FROM worlds WHERE location = 'Not Defined'");
                                        while ($row = mysqli_fetch_array($resultQuery)){
                                            if($row[0] == $user->world->uid){
                                                echo '<option selected>' . $row[1] . '</option>';
                                            }
                                            else{
                                                echo '<option>' . $row[1] . '</option>';
                                            }
                                        }
                                    ?>
                                </optgroup>
                                <optgroup label="Europe">
                                    <?php
                                        $resultQuery = mysqli_query($link, "SELECT * FROM worlds WHERE location = 'Europe'");
                                        while ($row = mysqli_fetch_array($resultQuery)){
                                            if($row[0] == $user->world->uid){
                                                echo '<option selected data-subtext="' . $row[3] . 'x ~ ' . $row[4] . 'x ~ ' . $row[5] . 'x ~ ' . $row[7] . 'x ~ ' . $row[8] . 'x">' . $row[1] . '</option>';
                                            }
                                            else{
                                                echo '<option data-subtext="' . $row[3] . 'x ~ ' . $row[4] . 'x ~ ' . $row[5] . 'x ~ ' . $row[7] . 'x ~ ' . $row[8] . 'x">' . $row[1] . '</option>';
                                            }
                                        }
                                    ?>
                                </optgroup>
                                <optgroup label="North America">
                                    <?php
                                        $resultQuery = mysqli_query($link, "SELECT * FROM worlds WHERE location = 'North America'");
                                        while ($row = mysqli_fetch_array($resultQuery)){
                                            if($row[0] == $user->world->uid){
                                                echo '<option selected data-subtext="' . $row[3] . 'x ~ ' . $row[4] . 'x ~ ' . $row[5] . 'x ~ ' . $row[7] . 'x ~ ' . $row[8] . 'x">' . $row[1] . '</option>';
                                            }
                                            else{
                                                echo '<option data-subtext="' . $row[3] . 'x ~ ' . $row[4] . 'x ~ ' . $row[5] . 'x ~ ' . $row[7] . 'x ~ ' . $row[8] . 'x">' . $row[1] . '</option>';
                                            }
                                        }
                                    ?>
                                </optgroup>
                            </select>
                            <i><small id="vocationField" class="form-text text-muted">Select your main world. (Exp ~ Skills ~ Mana ~ Magic ~ Loot).</small></i>
                        </div>
                        <div class="form-group">
                            <span class="fa fa-star" style="margin-right: 4px"></span><label for="vocation">Favorite Vocation</label>
                            <select class="form-control selectpicker show-tick" data-live-search="true" data-size="10">
                                <optgroup label="No Vocation">
                                    <?php
                                        $resultQuery = mysqli_query($link, "SELECT uid, class, name FROM vocations WHERE class = 'No Vocation'");
                                        while ($row = mysqli_fetch_array($resultQuery)){
                                            if($row[0] == $user->vocation->uid){
                                                echo '<option selected>' . $row[2] . '</option>';
                                            }
                                            else{
                                                echo '<option>' . $row[2] . '</option>';
                                            }
                                        }
                                    ?>
                                </optgroup>
                                <optgroup label="Not Promoted">
                                    <?php
                                        $resultQuery = mysqli_query($link, "SELECT uid, class, name FROM vocations WHERE class = 'Not Promoted'");
                                        while ($row = mysqli_fetch_array($resultQuery)){
                                            if($row[0] == $user->vocation->uid){
                                                echo '<option selected>' . $row[2] . '</option>';
                                            }
                                            else{
                                                echo '<option>' . $row[2] . '</option>';
                                            }
                                        }
                                    ?>
                                </optgroup>
                                <optgroup label="Promoted">
                                    <?php
                                        $resultQuery = mysqli_query($link, "SELECT uid, class, name FROM vocations WHERE class = 'Promoted'");
                                        while ($row = mysqli_fetch_array($resultQuery)){
                                            if($row[0] == $user->vocation->uid){
                                                echo '<option selected>' . $row[2] . '</option>';
                                            }
                                            else{
                                                echo '<option>' . $row[2] . '</option>';
                                            }
                                        }
                                    ?>
                                </optgroup>
                            </select>
                            <i><small id="vocationField" class="form-text text-muted">Select your favorite vocation.</small></i>
                        </div>
                        <div class="form-group">
                            <span class="fa fa-picture-o" style="margin-right: 4px"></span><label for="avatar_image">Avatar Image</label>
                            <input type="text" class="form-control" name="avatar_image" id="avatar_image" aria-describedby="avatar_imageField" maxlength="20" minlength="3" disabled placeholder="Upload your Image">
                            <i><small id="avatar_imageField" class="form-text text-muted">Upload your avatar image.</small></i>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success" style="margin: 5px"><span class="fa fa-check" style="margin-right: 8px"></span>Confirm Changes</button>
                            <a class="btn btn-warning" href="user_edit_profile_page.php" type="button" style="margin: 5px">
                                <span class="fa fa-trash" style="margin-right: 6px"></span>Reset Fields
                            </a>
                            <a class="btn btn-danger" href="user_profile_page.php" type="button" style="margin: 5px">
                                <span class="fa fa-close" style="margin-right: 6px"></span>Cancel Editing
                            </a>
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
            unset($_SESSION["duplicatedUsername"]);
            unset($_SESSION["duplicatedEmail"]);
            unset($_SESSION["passwordNotMatch"]);
        ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Latest compiled bootstrap-select and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
        <!-- Latest compiled bootstrap-select and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    </body>
</html>
