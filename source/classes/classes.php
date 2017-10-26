<?php
    // Classes:
        // Country:
        class Country{
            // Attributes:
            var $uid;
            var $name;
            var $flagImage;
            // Constructors:
            function __construct($link, $uid){
                $this->uid = $uid;
                $resultQuery = mysqli_query($link, "SELECT * FROM countries WHERE uid = '$uid'");
                $row = mysqli_fetch_array($resultQuery);
                $this->name = $row[1];
                $this->flagImage = $row[2] . ".png";
                return;
            }
            // Methods:
            function printClass(){
                echo "UID: " . $this->uid . '<br>';
                echo "Name: " . $this->name . '<br>';
                echo "Flag Image: " . $this->flagImage . '<br><br>';
                return;
            }
        }
        // Vocation
        class Vocation{
            // Attributes:
            var $uid;
            var $class;
            var $name;
            var $manaGain;
            var $hpGain;
            var $capGain;
            var $manaRegen;
            var $hpRegen;
            // Constructors:
            function __construct($link, $uid){
                $this->uid = $uid;
                $resultQuery = mysqli_query($link, "SELECT * FROM vocations WHERE uid = '$uid'");
                $row = mysqli_fetch_array($resultQuery);
                $this->class = $row[1];
                $this->name = $row[2];
                $this->manaGain = $row[3];
                $this->hpGain = $row[4];
                $this->capGain = $row[5];
                $this->manaRegen = $row[6];
                $this->hpRegen = $row[7];
                return;
            }
            // Methods:
            function printClass(){
                echo "UID: " . $this->uid . '<br>';
                echo "Name: " . $this->name . '<br>';
                echo "Mana Gain: " . $this->manaGain . '<br>';
                echo "HP Gain: " . $this->hpGain . '<br>';
                echo "Cap Gain: " . $this->capGain . '<br>';
                echo "Mana Regen: " . $this->manaRegen . '<br>';
                echo "HP Regen: " . $this->hpRegen . '<br><br>';
                return;
            }
        }
        // World:
        class World{
            // Attributes:
            var $uid;
            var $name;
            var $location;
            var $expRate;
            var $skillsRate;
            var $manaRate;
            var $hpRate;
            var $magicRate;
            var $lootRate;
            // Constructors:
            function __construct($link, $uid){
                $this->uid = $uid;
                $resultQuery = mysqli_query($link, "SELECT * FROM worlds WHERE uid = '$uid'");
                $row = mysqli_fetch_array($resultQuery);
                $this->name = $row[1];
                $this->location = $row[2];
                $this->expRate = $row[3];
                $this->skillsRate = $row[4];
                $this->manaRate = $row[5];
                $this->hpRate = $row[6];
                $this->magicRate = $row[7];
                $this->lootRate = $row[8];
                return;
            }
            // Methods:
            function printClass(){
                echo "UID: " . $this->uid . '<br>';
                echo "Name: " . $this->name . '<br>';
                echo "Location: " . $this->location . '<br>';
                echo "Exp Rate: " . $this->expRate . '<br>';
                echo "Skills Rate: " . $this->skillsRate . '<br>';
                echo "Mana Rate: " . $this->manaRate . '<br>';
                echo "HP Rate: " . $this->hpRate . '<br>';
                echo "Magic Rate: " . $this->magicRate . '<br>';
                echo "Loot Rate: " . $this->lootRate . '<br><br>';
                return;
            }
        }
        // User:
        class User{
            // Attributes:
            var $uid;
            var $username;
            var $email;
            var $password;
            var $comment;
            var $comment_owner;
            var $avatar_image;
            var $vocation;
            var $world;
            var $country;
            // Constructors:
            function __construct($link, $uid){
                $this->uid = $uid;
                $resultQuery = mysqli_query($link, "SELECT * FROM users WHERE uid = '$uid'");
                $row = mysqli_fetch_array($resultQuery);
                $this->username = $row[1];
                $this->email = $row[2];
                $this->password = $row[3];
                $this->comment = $row[4];
                $this->comment_owner = $row[5];
                $this->avatar_image = $row[6] . ".png";
                $this->vocation = new Vocation($link, $row[7]);
                $this->world = new World($link, $row[8]);
                $this->country = new Country($link, $row[9]);
                return;
            }
            // Methods:
            function printClass(){
                echo "UID: " . $this->uid . '<br>';
                echo "Username: " . $this->username . '<br>';
                echo "Email: " . $this->email . '<br>';
                echo "Password: " . $this->password . '<br>';
                echo "Comment: " . $this->comment . '<br>';
                echo "Comment Owner: " . $this->comment_owner . '<br>';
                echo "Avatar Image: " . $this->avatar_image . '<br>';
                echo "Vocation: " . $this->vocation->name . '<br>';
                echo "World: " . $this->world->name . '<br>';
                echo "Country: " . $this->country->name . '<br><br>';
                return;
            }
        }
?>
