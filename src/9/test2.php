<?php

class Student {
    private $studentID;
    private $studentName;

    public function printStudent() {
        print "ID : " . $this->studentID . "<br>";
        print "Name : " . $this->studentName . "<br><br>";
    }
    public function setStudentID($id){
        $this->studentID = $id;
    }
    public function setStudentName($name){
        $this->studentName = $name;
    }
    public function getStudentID(){
        return $this->studentID;
    }
    public function getStudentName(){
        return $this->studentName;
    }
}

$object = new Student;
$object->setstudentID("1234");
$object->setstudentName("Alice");
$object->printStudent();
print $object->getstudentID() . "<br>";
print $object->getstudentName() . "<br>";
?>