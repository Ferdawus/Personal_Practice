<?php 
    $nestedArray = [[1,2],[3,4]];
    $flattenedArray = [];

    foreach($nestedArray as $innerArray){
        foreach ($innerArray as  $value) {
            $flattenedArray[] = $value;
        }
        
    }

    print_r($nestedArray);
    print_r($flattenedArray);

?>