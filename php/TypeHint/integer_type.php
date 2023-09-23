<?php 
    function addIntegers($a, $b) : int {
        return $a + $b;
    }
    $result = addIntegers(5,10);  //Output : 15
    echo $result;
    //$result = addIntegers(5.5, 3);  // Will result in a TypeError
?>