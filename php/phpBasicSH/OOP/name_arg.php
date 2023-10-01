<?php 
    class Product{
        public $name = "soap";
        public $price = 100;

        public function priceAsCurrency($divisor = 1,$currencySymbol = "$")
        {
            $priceAsCurrency = $this->price / $divisor;
            return $currencySymbol . $priceAsCurrency;
        }

    }

    $obj1 = new Product();
    print $obj1->priceAsCurrency(currencySymbol:'&',divisor:20);  