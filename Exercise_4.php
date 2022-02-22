<?php
class account {
    protected $name;
    protected $email;
    protected $pwd;

    function __construct ( $name, $email,$pwd) {
        $this->name = $name;
        $this->email = $email;
        $this->pwd = $pwd;
    }
    protected function get_price() {
        return " Our pwd is : ".$this->pwd;
    }
    public function get_beverage() {
        return "Name : ". $this->name. "<br>" ;
    }

}

$account = new account( "Becode", "becode@be", "abc");
echo $account->get_beverage();
echo "<br>";



// extends
class address extends account {
    protected $place;
    protected $postCode;

    function __construct ($place, $postCode){
        $this->place = $place;
        $this->postCode = $postCode;
    }

    protected function get_place(){
        return "Our Campus : ". $this->place;
    }
    public function get_postCode(){
        return "Our Campus : ". $this->postCode;
    }
}

$place = new address("Gent", 9000);
echo $place->get_postCode();