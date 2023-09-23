<?php
class Human
{
    public $name,$age;
    public function __construct($personName = null ,$personAge = 0)
    {
        $this->name = $personName;
        $this->age  = $personAge;
    }
    public function sayHi() 
    {
        $this->sayName();
    }
    public function sayName()
    {
        if ($this->age) {
            echo "My Name is {$this->name}, I am {$this->age} years old\n";
        }else{
            echo "My Name is {$this->name}, I do no know how old  I am\n";
        }
    }
}

$obj = new Human('Ferdawus',18);
$obj1 = new Human('Ferdawus');
$obj->sayHi();
$obj1->sayHi();
?>