<?php 
    $n = [2,4,6,10];
    print_r($n);

    $new_array = array_map(function($e){
        return  $e * 2;
    },$n);
    print_r($new_array);
?>