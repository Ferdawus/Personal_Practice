<?php 
    $numbers = [1,2,5,7];

    $squareNumbrs = array_map(function($n){
        return $n * $n;
    },$numbers);
    print_r($numbers);
    print_r($squareNumbrs);

?>