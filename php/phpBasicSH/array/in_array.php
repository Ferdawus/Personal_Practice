<?php 
    $fruits = ["apple", "banana", "cherry", "date", "elderberry"];

    $checkFruit = "banana";
    if (in_array($checkFruit, $fruits)) {
    echo "$checkFruit is in the array.";
    } else {
    echo "$checkFruit is not in the array.";
    }
    
    echo PHP_EOL;

?>