<?php

use Staff as GlobalStaff;

class People{
    protected $name;
    protected $age;
    function printPeople(){
        print "Name : " . $this->name . "<br>";
        print "age : " . $this->age . "<br>";
    }
}
class Student extends People{
    private $studentID;
    
    function __construct($name, $age, $id){
        $this->name = $name;
        $this->age = $age;
        $this->studentID = $id;
    }
    function printPeople(){
        print "-Student- <br>";
        $this->printPeople();
        print "ID : " . $this->studentID."<br><br>";
    }
}
class professor extends People{
    private $officeNo;
    
    function __construct($name, $age, $no){
        $this->name = $name;
        $this->age = $age;
        $this->officeNo = $no;
    }
    function printProfessor(){
        print "-professor- <br>";
        $this->printPeople();
        print "ID : " . $this->officeNo."<br><br>";
    }
}
class Staff extends People{
    private $title;
    
    function __construct($name, $age, $title){
        $this->name = $name;
        $this->age = $age;
        $this->title = $title;
    }
    function printStaff(){
        print "-Staff- <br>";
        $this->printPeople();
        print "Title : " . $this->title."<br><br>";
    }
}
$obj1 = new Student("홍길동", "21", "2016000000");
$obj2 = new Professor("김길동", "35", "522호");
$obj3 = new Staff("박길동", "40", "글로벌비즈니스본부");
$obj1->printStudent();
$obj2->printProfessor();
$obj3->printStaff();
?>