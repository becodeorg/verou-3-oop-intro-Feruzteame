<?php
require "Exercise_1.php";

// add Extend class
class Alcohol extends Beverage  {
    public  $Alcohol;

    function __construct($Alcohol) {
        $this->Alcohol = $Alcohol;
    }

    function get_alcohol(){
        return "Alcohol percentage : ". $this->Alcohol ."%" ;
    }
};

 //beer
$Beer = new Beverage("Cold", "Blond", 3.5);
echo $Beer->get_beverage();
echo "<br>";
echo $Beer->get_price();
echo "<br>";
// for alcohol
$Beer = new Alcohol(8.5);
echo $Beer->get_alcohol();




