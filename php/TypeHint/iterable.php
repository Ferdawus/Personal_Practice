<?php 
    function processIterable(iterable $data)
    {
        $result = [];
        foreach($data as $item){
            $result[] = $item * 2;
        }
        return $result;
    }
    $numbers = [1,2,3,4,10];
    $result = processIterable($numbers);
    foreach ($result as  $value) {
        echo $value . "\n";
    }

?>