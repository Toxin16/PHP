<?php

class Student {
    public $studentID;
    public $studentName;

    public function printstud($id, $name) {
        print "ID : " . $id . "<br>";
        print "Name : " . $name . "<br><br>";
    }
}

$object = new Student;
$object->studentID = "1234";
$object->studentName = "Alice";
$object->printstud($object->studentID, $object->studentName);

$object1 = new Student;
$object1->studentID = "5678";
$object1->studentName = "Kim";
$object1->printstud($object1->studentID, $object1->studentName);