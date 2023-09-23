<?php 
    function greet(string $name) : string {
        return "Hello, {$name}";
    }
    $result = greet("M.Ferdawus Sk");
    echo $result;
    // $result = greet(['Alice']);  // Will result in a TypeError

?>