<?php
class Abc{
    public $a, $b;

    function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
    }
    function prt(){
        print $this->a."<br>";
        print $this->b."<br>";
    }
}
$obj1 = new Abc(1,2);
$obj1->prt();
?>