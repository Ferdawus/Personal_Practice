<?php 
    $fruits = ["apple", "banana", "cherry", "date", "elderberry"];

    $searchedFruit = "apple";
    if (array_search($searchedFruit, $fruits)) {
        echo "$searchedFruit is in the array.";
    } else {
        echo "$searchedFruit is not in the array.";
    }


    
?>