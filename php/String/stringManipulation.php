<?php
    $string = "I Love Bangladesh";

    //  Get Sting length
    $length = strlen($string); 
    echo $length;
    echo PHP_EOL;

    // Convert To Uppercase
    $uppercase = strtoupper($string);
    echo $uppercase;
    echo PHP_EOL;

    // Convert To lowercase
    $lowercase  = strtolower($string);
    echo $lowercase;
    echo PHP_EOL;

    // Relace Text 

    $replace = str_replace('I','Hate','india',$string);
    echo $replace;
    echo PHP_EOL;





?>