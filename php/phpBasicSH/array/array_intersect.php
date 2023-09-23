<?php 
    $array1 = [1, 2, 3, 4, 5];
    $array2 = [3, 4, 5, 6, 7];
    $array3 = [5, 6, 7, 8, 9];
    $commonElemnts = array_intersect($array1,$array2,$array3);
    print_r($commonElemnts);    


?>