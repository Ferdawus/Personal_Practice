<?php 
    class Product{
        public $name = "soap";
        public $price = 100;

        public function priceAsCurrency($currencySymbol = "$")
        {
            $priceAsCurrency = $this->price / 100;
            return $currencySymbol . $priceAsCurrency;
        }

    }

    $obj1 = new Product();
    print $obj1->priceAsCurrency('&');