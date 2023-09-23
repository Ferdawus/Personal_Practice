<?php 
    $years = [2002,2003,2004,2005];
    $incrementYears = function($year)
    {
        return $year += 10;
    };
    $updateYears = array_map($incrementYears,$years);
    print_r($updateYears);
    echo PHP_EOL;
    // argument pass in anonymous function 

    $chat = function($msg){
        echo $msg;
    };
    $chat("Hello World");
?>