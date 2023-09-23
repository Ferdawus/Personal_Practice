<?php

use Animal as GlobalAnimal;

interface Animal
{
    public function speak();
}

class Dog implements Animal{
    public function speak()
    {
        return "Woof !";
    }
}
class Cat implements Animal{
    public function speak()
    {
        return "Meow !";
    }
}

function makeSound(GlobalAnimal $animal){
    return $animal->speak();
}

$dog = new Dog();
$cat = new Cat();

echo makeSound($dog);
echo PHP_EOL;
echo makeSound($cat);
?>