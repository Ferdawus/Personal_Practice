<?php 
    class Product{
        public $name = "soap";
        public $price;

        public function priceAsCurrency()
        {
            $priceAsCurrency = $this->price /100;
            return $priceAsCurrency;
        }

    }

    $obj1 = new Product();
    $obj2 = new Product();
    var_dump($obj1);
    $obj1->price = 500;
    $priceAsCurrency1 = $obj1->priceAsCurrency(); 
    var_dump($priceAsCurrency1);
    $obj2->price = 850;
    $priceAsCurrency2 = $obj2->priceAsCurrency();
    var_dump($priceAsCurrency2);

?>