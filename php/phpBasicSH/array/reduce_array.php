<?php 
    declare(strict_types= 1);

    $numbers = [1,2,3,4,5,6];

    $sum = array_reduce($numbers,function ($carry,$item) :int{
        return $carry + $item;
    },0);
    echo "Sum : $sum\n";

    $product = array_reduce($numbers,function($carry,$item){
        return $carry * $item;
    },1);
    echo "Product: $product\n";

    $words = ["Hello", " ", "World", "!"];
    $concatenated = array_reduce($words,function($carry,$item) :string{ 
        return $carry . $item;
    },"");
    echo "Concatenated: $concatenated\n";

    $maxValue = array_reduce($numbers,function ($carry,$item) : int {
        return max($carry,$item);
    },PHP_INT_MIN);
    echo "Max Value: $maxValue\n";   
?>