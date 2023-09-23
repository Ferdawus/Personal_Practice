<?php 
    function processArray(array $data){
        $sum     = array_sum($data);
        $avarage = count($data) > 0 ? $sum / count($data) : 0; 
        return [
            'sum'     => $sum,
            'avarage' => $avarage
        ];
    }
    $numbers = [5,5,10,40];
    $result  = processArray($numbers);
    echo "Sum: {$result['sum']}\n";
    echo "Average:{$result['avarage']}\n";
?>