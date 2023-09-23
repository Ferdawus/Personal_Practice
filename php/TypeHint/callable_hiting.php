<?php 
    function performAction(callable $cellback)
    {
        $result = $cellback();
        return $result;
    }

    //Using Regular Function
    function myFunction()
    {
        return "Hello,callable !";
    }
    $result1 = performAction('myFunction');
    echo $result1; 
    echo PHP_EOL;

    //Using a Closure
    $closure = function(){
        return "Hello, Hello Closure";
    };
    $result2 = performAction($closure);
    echo $result2;
    echo PHP_EOL;
?>