<?php 
    class Product{
        public $name = "shoap";

    }

    $shoapObject = new Product();
    print $shoapObject->name;
    echo PHP_EOL;
    $shoapObject->name = "toothPaste";
    print $shoapObject->name;
?>