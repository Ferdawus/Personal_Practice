<?php 
    function sum(...$n)
    {
        return array_sum($n);
    }
    $fn = 'sum';
    
    if (is_callable($fn)) {
       echo "This Fucntion is Callable";
    }else{
        echo "Not Callable";
    }
    echo PHP_EOL;
    echo $fn(30,40,30);

?>