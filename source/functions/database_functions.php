<?php
// Function to connect to Database:
function connectDatabase(){
    $host = "localhost";
    $user = "root";
    $pass = "7698740";
    $database = "mediviaprofile";
    $link = mysqli_connect($host, $user, $pass, $database);
    if (!$link) {
            echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
    }
    return $link;
}

// Estrutura de Dados para Usuários:
class User($userUID){
    public $uid;
    public $username;
    public $email;
    public $password;
    public $comment;
    public $comment_owner;
    public $avatar_image;
    public $vocation_uid;
    public $world_uid;
    public $country_uid;

    public function getVocation(){

    }
    public function getWorld(){

    }
    public function getCountry(){

    }
}

function getUser($userUID){

}
?>
