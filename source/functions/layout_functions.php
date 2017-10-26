<?php
    // Function to print the website Banner:
    function printBanner(){
        echo '<div class="jumbotron text-center" style="border-radius: 0px; background-image: url(./images/layout/banner.png); background-position: center center; margin-bottom: 0px">
            <h1 style="color: white; font-family: Book Antiqua">Medivia Profile</h1>
        </div>';
    }

    // Function to print the website Guest Menu:
    function printGuestMenu($pageName){
        echo '<nav class="navbar navbar-inverse" style="border-radius: 0px">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand fa fa-home" style="font-size: 15pt" href="#"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">';
                        // Menu: NEWS:
                        if($pageName == "index" || $pageName == "news"){
                            echo '<li class="active"><a href="index.php">News<span class="sr-only">(current)</span></a></li>';
                        }else{
                            echo '<li><a href="index.php">News</a></li>';
                        }
                    echo '</ul>
                    <ul class="nav navbar-nav navbar-right">';
                        // Menu: Account:
                        if($pageName == "user_signup_page" || $pageName == "user_login_page"){
                            echo '<li class="dropdown active">';
                        }else{
                            echo '<li class="dropdown">';
                        }
                            echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user-circle-o" style="margin-right: 8px"></span>Account<span class="caret" style="margin-left: 8px"></span></a>
                            <ul class="dropdown-menu">';
                                if($pageName == "user_login_page"){
                                    echo '<li class="active"><a href="user_login_page.php"><span class="fa fa-sign-in" style="margin-right: 8px"></span>Login</a></li>';
                                }else{
                                    echo '<li><a href="user_login_page.php"><span class="fa fa-sign-in" style="margin-right: 8px"></span>Login</a></li>';
                                }
                                if($pageName == "user_signup_page"){
                                    echo '<li class="active"><a href="user_signup_page.php"><span class="fa fa-user-plus" style="margin-right: 8px"></span>Create Account</a></li>';
                                }else{
                                    echo '<li><a href="user_signup_page.php"><span class="fa fa-user-plus" style="margin-right: 8px"></span>Create Account</a></li>';
                                }
                            echo '</ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div> <!-- /container-fluid -->
        </nav> <!-- /navbar-inverse -->';
    }

    // Function to print the website Guest Menu:
    function printUserMenu($pageName){
        echo '<nav class="navbar navbar-inverse" style="border-radius: 0px">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand fa fa-home" style="font-size: 15pt" href="#"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">';
                        // Menu: NEWS:
                        if($pageName == "index" || $pageName == "news"){
                            echo '<li class="active"><a href="index.php">News<span class="sr-only">(current)</span></a></li>';
                        }else{
                            echo '<li><a href="index.php">News</a></li>';
                        }
                    echo '</ul>
                    <ul class="nav navbar-nav navbar-right">';
                        // Menu: User Account:
                        if($pageName == "user_profile_page" || $pageName == "user_edit_profile_page"){
                            echo '<li class="dropdown active">';
                        }else{
                            echo '<li class="dropdown">';
                        }
                            echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user-circle-o" style="margin-right: 8px"></span>' . $_SESSION["userUsername"] . '<span class="caret" style="margin-left: 8px"></span></a>
                            <ul class="dropdown-menu">';
                                if($pageName == "user_profile_page"){
                                    echo '<li class="active"><a href="user_profile_page.php"><span class="fa fa-user-circle-o" style="margin-right: 8px"></span>Profile</a></li>';
                                }else{
                                    echo '<li><a href="user_profile_page.php"><span class="fa fa-user-circle-o" style="margin-right: 8px"></span>Profile</a></li>';
                                }
                                if($pageName == "user_edit_profile_page"){
                                    echo '<li class="active"><a href="user_edit_profile_page.php"><span class="fa fa-pencil-square-o" style="margin-right: 8px"></span>Edit Profile</a></li>';
                                }else{
                                    echo '<li><a href="user_edit_profile_page.php"><span class="fa fa-pencil-square-o" style="margin-right: 8px"></span>Edit Profile</a></li>';
                                }
                                echo '<li role="separator" class="divider"></li>
                                <li><a href="functions/user_logout_functions.php"><span class="fa fa-sign-out" style="margin-right: 8px"></span>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div> <!-- /container-fluid -->
        </nav> <!-- /navbar-inverse -->';
    }

    function printFooter(){
        echo '<div class="footer navbar-fixed-bottom text-center" style="background-color: #ededed">
            <div style="margin: 5px">
                <span class="fa fa-github" style="margin-right: 8px; font-size: 12pt"></span><i>Designed and Developed by <b>Derlexy</b></i>
            </div>
        </div>';
    }
?>
