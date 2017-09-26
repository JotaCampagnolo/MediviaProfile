<?php
function printBanner(){
    echo '<div class="jumbotron text-center" style="border-radius: 0px; background-image: url(images/layout/banner.png); background-position: center center; margin-bottom: 0px">
        <h1 style="color: white; font-family: Book Antiqua">Medivia Profile</h1>
    </div>';
}

function printMenu($pageName){
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
                                echo '<li class="active"><a href="user_signup_page.php"><span class="fa fa-plus" style="margin-right: 8px"></span>Create Account</a></li>';
                            }else{
                                echo '<li><a href="user_signup_page.php"><span class="fa fa-plus" style="margin-right: 8px"></span>Create Account</a></li>';
                            }
                        echo '</ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div> <!-- /container-fluid -->
    </nav> <!-- /navbar-inverse -->';
}
?>
