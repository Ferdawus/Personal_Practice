<?php 
    $lengths = [10,15,20,25];
    
    $areas  = array_map( 
        fn($length) =>  $length * $length,
        $lengths
    );

    print_r($areas);

?>