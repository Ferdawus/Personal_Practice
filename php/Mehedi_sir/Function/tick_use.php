<?php 
    function sayHello()
    {
        print "Hello";
    }
    register_tick_function('sayHello');
    declare(ticks=2);
    echo PHP_EOL;

    $i = 0;
    while ($i <= 10) {
        print "Bangladesh";
        echo PHP_EOL;
        $i++;
    }

?>