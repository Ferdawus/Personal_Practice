<?php 
    $numbers = [1,2,4,5,7];
    $envenNumbers = array_filter($numbers,function($n){
        return $n % 2 == 0;
    }); 
    print_r($numbers);   
    print_r($envenNumbers);

?>