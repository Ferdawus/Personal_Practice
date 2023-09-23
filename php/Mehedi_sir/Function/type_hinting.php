<?php 
    declare(strict_types = 1);

    // function sum(int|float $n1, int $n2) :int|float
    // {
    //     return $n1 + $n2;
    // }
    // print sum(n1 : 1.5, n2:6);
    // echo PHP_EOL;

    function div(float $n1, float $n2):float
    {
        return $n1 / $n2;
    }
    print div(n1:20,n2:5);
?>