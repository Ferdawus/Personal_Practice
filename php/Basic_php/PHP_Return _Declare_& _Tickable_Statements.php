<?php 
    // return
    // function sum($x,$y)
    // {
    //     $z = $x + $y;
    //     return $z;
    // }
    
    // echo sum(20,40);
    
    
    // ticks 
    // function onTick(){
    //     echo "Tick \n";
    //     echo PHP_EOL;
    // }
    
    // register_tick_function('onTick');
    // declare(ticks=1);
    // $i = 0;
    // $length = 10;
    // while ($i < $length) {
    //     echo $i++;
    //     echo PHP_EOL;
    // }
    
    //decler
    declare(strict_types=1);
    function sum(int $x, int $y) :int
    {
        $z = $x + $y;
        return $z;
    }
    
    echo sum('20',40);
    
?>