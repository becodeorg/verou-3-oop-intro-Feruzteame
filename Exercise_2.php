<?php
class Beverage {
    public $color;
    public $price;
    public $temp;

    function __construct($temp, $color, $price) {
        $this->color = $color;
        $this->temp = $temp;
        $this->price = $price;
    }
    function get_beverage() {
        return "This beverage is ". $this->temp ." and " .$this->color;
    }
    function get_price() {
        return "price : " .$this->price." €";
    }
}

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




