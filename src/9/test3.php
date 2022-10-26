<?php
class Fruit{
    private $_name;
    private $_price;
    private $_color;
    function __construct($name, $price, $color){
        $this->_name = $name;
        $this->_price = $price;
        $this->_color = $color;
    }
    public function printFruit(){
        print "Fruit Name : $this->_name <br>";
        print "Fruit Price : $this->_price <br>";
        print "Fruit Color : $this->_color <br><br>";
    }
}
$apple = new Fruit("apple",5000,"Red");
$banana = new Fruit("banana", 4000, "Yellow");
$cherry = new Fruit("cherry", 3000, "Pink");
$pear = new Fruit("pear", 6000, "Yellow");

$apple->printFruit();
$banana->printFruit();
$cherry->printFruit();
$pear->printFruit();