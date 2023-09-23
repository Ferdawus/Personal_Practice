<?php 
    function processValue(?int $value): ?string
    {
        if ($value == null) {
            return null;
        }
        return "Prossed: $value";
    }

    $intValue = 42;
    $result   = processValue($intValue);
    echo $result;
    echo PHP_EOL;

    $nullValue = null;
    $result    = processValue($nullValue);
    echo var_dump($result) ;
    echo PHP_EOL;

?>