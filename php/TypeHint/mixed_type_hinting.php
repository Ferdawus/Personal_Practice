<?php 
    function concatenateValues(mixed ...$values): string {
        $result = '';
    
        foreach ($values as $value) {
            if (is_string($value) || is_numeric($value)) {
                $result .= $value . ' ';
            }
        }
    
        return trim($result);
    }
    
    $stringValue = "Hello";
    $intValue = 42;
    $floatValue = 3.14;
    $arrayValue = [1, 2, 3];
    
    echo concatenateValues($stringValue, $intValue, $floatValue); // Output: Hello 42 3.14
    echo concatenateValues($stringValue, $arrayValue);             // Output: Hello 1 2 3
    

?>