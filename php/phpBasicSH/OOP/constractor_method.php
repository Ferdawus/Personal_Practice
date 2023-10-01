<?php 
    class Product{
        
        /**
         * Class constructor.
         */
        public function __construct($name,$price =100)
        {
            $this->name  = $name;
            $this->price = $price;
        }

        public function priceAsCurrency($divisor = 1,$currencySymbol = "$")
        {
            $priceAsCurrency = $this->price / $divisor;
            return $currencySymbol . $priceAsCurrency;
        }

    }

    $obj1 = new Product('soap',price:200);
    print $obj1->name."\n";
    print $obj1->price."\n";