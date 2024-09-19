<?php
//PHP is object oriented language, although most function is not object oriented
//class defines how object behave, do not contain data
class Student {
//public modifier defines function to be accessible from outside the object
    public $first_name;
//private modifier encapsulates function for internal use
    private $last_name;
//constructor is the special method executed when an object is created
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
    public function say_name() {
        echo "Full name is " . $this->first_name . " " . $this->last_name . "\n";
    }
}
//object is instance of class, contains data
//member is variable belongs to an object
//method is function belongs to an object, and have access to its members
$ali = new Student("Ali", "Sons");
$ali->say_name();

//Inheritance allows written code to be reused and extended
class MathStudent extends Student {
//added new method, has access to same member defined in parent class (first_name)
    function sum_numbers($first_number, $second_number) {
        $sum = $first_number + $second_number;
        echo $this->first_name . " say " . $first_number . "+" . $second_number . "=" . $sum;
    }
}
$lee = new MathStudent("Lee", "Beng");
$lee->say_name();
$lee->sum_numbers(1,2);
?>