<?php 
class Animal
{
    public function speak(){
        return "Animal Sound !";
    }
}

class Dog extends Animal{
    public function speak()
    {
        return "Woof!";
    }
}
class Cat extends Animal{
    public function speak()
    {
        return "Meow !";
    }
}
function makeSound(Animal $animal){
    return $animal->speak();
}

$dog = new Dog();
$cat = new Cat();

echo makeSound($dog);
echo PHP_EOL;
echo makeSound($cat);

?>