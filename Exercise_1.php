<?php
class Beverage {
    public $color;
    public $price;
    public $temp;

    function __construct ( $color, $price,$temp="cold") {
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

$Beverage = new Beverage( "black", 2);
echo $Beverage->get_beverage();
echo "<br>";
echo $Beverage->get_price();
echo "<br>";
