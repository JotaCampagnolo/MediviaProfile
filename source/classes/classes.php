<?php
    // Includes:
    include "../functions/database_functions.php";
    // Classes:
        // Country:
        class Country{
            // Attributes:
            var $uid;
            var $name;
            var $flagImage;
            // Constructors:
            function __construct($uid){
                $this->uid = $uid;
                $link = connectDatabase();
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
            var $name;
            var $manaGain;
            var $hpGain;
            var $capGain;
            var $manaRegen;
            var $hpRegen;
            // Constructors:
            function __construct($uid){
                $this->uid = $uid;
                $link = connectDatabase();
                $resultQuery = mysqli_query($link, "SELECT * FROM vocations WHERE uid = '$uid'");
                $row = mysqli_fetch_array($resultQuery);
                $this->name = $row[1];
                $this->manaGain = $row[2];
                $this->hpGain = $row[3];
                $this->capGain = $row[4];
                $this->manaRegen = $row[5];
                $this->hpRegen = $row[6];
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
            function __construct($uid){
                $this->uid = $uid;
                $link = connectDatabase();
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

            // Constructors:

            // Methods:
        }        
    // Tests:
    $c1 = new Country(112);
    $c1->printClass();
    $w1 = new World(3);
    $w1->printClass();
    $v1 = new Vocation(6);
    $v1->printClass();
?>
