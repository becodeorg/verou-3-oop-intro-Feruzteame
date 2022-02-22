<?php
class beverage {
    public $color;
    public $price;
    public $temp ;

    function __construct($temp, $color, $price) {
        $this->color = $color;
        $this->temp = $temp;
        $this->price = $price;
    }
    function get_beverage() {
        print_r("This beverage is ". $this->temp ." and " .$this->color) ;

    }
    function get_price() {
        print_r("price :" .$this->price) ;
    }
}

$beverage = new beverage("cold", "black", 2);
echo $beverage->get_beverage();
echo "<br>";
echo $beverage->get_price();
