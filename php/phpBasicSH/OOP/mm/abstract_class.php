<?php 
    abstract class Vahicle{
        abstract public function getBaseFare():int;
        abstract public function getPerKiloFare():int;
        public function getTotal(int $kilo):int{
           return $this->getBaseFare() + $kilo *  $this->getPerKiloFare();
        }
    }
    
    class Car extends Vahicle{
    
        public function getBaseFare():int{
            return 50;
        }
        public function getPerKiloFare():int{
            return 30;
        }
        
    }
    class Bike extends Vahicle{
    
        public function getBaseFare():int{
            return 40;
        }
        public function getPerKiloFare():int{
            return 20;
        }
    }
    class CNG extends Vahicle{
    
        public function getBaseFare():int{
            return 60;
        }
        public function getPerKiloFare():int{
            return 10;
        }
    }
    
    $car = new Car();
    $total = $car->getTotal(kilo:5);
    var_dump($total);
?>