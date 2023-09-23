<?php 
class Human{
    public $name;
    public function sayHi($name)
    {
        $this->name = $name;
        $this->sayName();
    }
    public function sayName()
    {
        echo "My name is {$this->name}";
    }
}
$obj = new Human();
$obj->sayHi('Ferdawus');

?>