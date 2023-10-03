<?php 
    class Vahicle
    {
        public function start()
        {
            
        }
        public function stop()
        {
        
        }
    }
    
    // Obsject is a -> object
    class Car extends Vahicle{
    
    }
    Class Bike extends Vahicle
    {
    
    }
    
// ====================================================================================================================
    class User{
        public $role;
        
        public function login(){
        }
    }
    class Employee extends User{
        public string $name;
        public string $address;
        public string $dob;
        
        public function getAge()
        {
         return 40;
        }
    }
    $employee = new Employee();
    $employee->role;
?>