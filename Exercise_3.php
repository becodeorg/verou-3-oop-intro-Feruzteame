<?php
class Becode {
    private $name;
    private $email;
    private $pwd;

    function __construct ( $name, $email,$pwd) {
        $this->name = $name;
        $this->email = $email;
        $this->pwd = $pwd;
    }
    private function get_price() {
        return " Our pwd is : ".$this->pwd;
    }
    public function get_beverage() {
        return "Name : ". $this->name. "<br>" ;
    }

}

$Becode = new Becode( "Becode", "becode@be", "abc");
echo $Becode->get_beverage();
echo "<br>";



// extends
class campus extends Becode {
    private $place;

    function __construct($place){
        $this->place = $place;
    }

    public function get_place(){
        return "Our Campus : ". $this->place;
    }
}

$place = new campus("Gent");
echo $place->get_place();