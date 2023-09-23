<?php 
    function processValue(int|string $value):int | string{
        if (is_numeric($value)) {
            return $value * 2;
        }
        return strtoupper($value);
    }
    $intValue = 20;
    $result   = processValue($intValue);
    echo $result;
    echo PHP_EOL;
    $stringValue = "hi, ferdawus";
    $result   = processValue($stringValue);
    echo $result;
    echo PHP_EOL;
?>