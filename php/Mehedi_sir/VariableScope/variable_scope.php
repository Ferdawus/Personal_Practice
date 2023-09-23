<?php 
    declare(strict_types=1);

    // $number = 12;
    // print $number;
    // echo PHP_EOL;

    // include"./variable_scope1.php";
    // print $number;

    echo PHP_EOL;
    // $number = 12;
    // function increment(int $number):int
    // {
    //     return ++$number;
    // }
    // $result = increment($number);
    // echo $result;
    //  function increment():int
    // {
    //     global $number;
    //     return ++$number;
    // }
    // $result = increment($number);
    // echo $result;

    $n1 = 10;
    $n2 = 20;

    function sum()
    {
        print $GLOBALS['n1'] + $GLOBALS['n2'];
    }

    sum();

?>