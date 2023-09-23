<?php 
    class Product 
    {
        public $name = "soap";
        public $price = 30;
    }

    $obj = new Product();
    print $obj->name . "\n";
    // change the name
    $obj->name = "Deterjan";
    print $obj->name . "\n";

    $obj2 = new Product();
    print $obj2->price . "\n";

    $obj2->price = 50;
    print $obj2->price;


?>