<?php 
    function sum(...$n)
    {
        return array_sum($n);
    }

    print sum(2,4,10,15);
    echo PHP_EOL;
?>