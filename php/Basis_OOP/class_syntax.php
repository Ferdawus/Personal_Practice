<?php 
    class Person{

    }
    $obj = new Person();
    $className = get_class($obj);
    echo $className;
    echo PHP_EOL;
    $className2 = Person::class;
    echo $className2;
    echo PHP_EOL;
    var_dump($obj);

?>