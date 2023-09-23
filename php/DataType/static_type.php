<?php 
    declare(static_types = 1);
    function add(int $a, int $b):int{
        return $a + $b;
    }

    $result = add(5,6);
    echo $result;
    $result = add(3.15, 4.15);
    echo $result;


?>