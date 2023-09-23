<?php 
    $number1 = 100;
    $number2 = 30;

    $sum       = $number1 + $number2;
    $diff      = $number1 - $number2;
    $product   = $number1 * $number2;
    $quotient  = $number1  / $number2;
    $remainder =  $number1 % $number2;

    $total = array(
        1 => $sum,
        2 => $diff,
        3 => $product,
        4 => $quotient,
        5 => $remainder
    );

    print_r($total);
     
?>