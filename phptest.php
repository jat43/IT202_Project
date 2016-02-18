#!/usr/bin/php

<?php

echo "begin script ".$argv[0].PHP_EOL;

class Student
{
  private $name;
  private $address;
  private $gpa;
  private $year;
  
  public $major;
  
  public function __construct($name)
  {
    $this->name = $name;
  }
  
  public function printName()
  {
    echo "name: ".$this->name.PHP_EOL;
  }
  
  public function setGPA($gpa)
  {
    $this->gpa = $gpa;
  }
  
  public function printGPA()
  {
    echo "GPA: ".$this->gpa.PHP_EOL;
  }
  
  public function printMajor()
  {
    echo "Major: ".$this->major.PHP_EOL;
  }
}


$myStudent = new Student("Josh");
$myStudent->setGPA(2.3);
$myStudent->printName();
$myStudent->printGPA();
$myStudent->major = "IT bruh";
$myStudent->printMajor();

/*
$var = "some value\n";
$number = 2131234;
$realnumber = 123123.132123;
$arr = array();
$arr[] = 5;
$arr[] = "words";
$arr[] = 654321.21;
$arr[] = Array("food", "pizza", "crackers", "foodpizzacrackers", Array("hey", Array("pizza", "frenchfrye")));

print_r($arr);
print_r($var);

*/

echo "end script ".$argv[0].PHP_EOL;
?>
