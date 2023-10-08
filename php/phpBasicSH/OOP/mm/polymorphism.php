<?php 
    abstract class Vahicle{
        abstract public function getBaseFare():int;
        abstract public function getPerKiloFare():int;
        public function getTotal(int $kilo):int{
           return $this->getBaseFare() + $kilo *  $this->getPerKiloFare();
        }
    }
    
    interface HourlyRentable{
        public function getHourlyRate():int;
    }
    interface DailyRentable{
        public function getDailyRate():int;
    }
    class Car extends Vahicle implements HourlyRentable, DailyRentable{
    
        public function getBaseFare():int{
            return 50;
        }
        public function getPerKiloFare():int{
            return 30;
        }
        public function getHourlyRate(): int
        {
            return 10;
        }
        public function getDailyRate():int{
            return 100;
        }
        public function getTotal($kilo):int{
            return 1;
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
    
    class Invoice{
        public function getInvoice(Vahicle  $vahicle){
            var_dump($vahicle->getTotal(kilo:5));
        }
    }
    $car = new Car();
    // $total = $car->getTotal(kilo:5);
    // var_dump($total);
    
    // (new Invoice())->getInvoice($car);
    (new Invoice())->getInvoice(new Bike());
    
?>