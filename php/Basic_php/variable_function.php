<?php 
    function sum (int|float ...$num): int | float{
        return array_sum($num);
    }
    
    $x = 'sum';
    if (is_callable($x)) {
        echo $x(3,5,6);
    }else{
        echo "not callable";
    }
?>