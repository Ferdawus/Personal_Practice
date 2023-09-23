<?php 
    $userName = "M.Ferdawus Sk";

    $programmigs = [
        "Hello",
        "js",
        "PHP",
        "Java",
        "C++",
        "C"

    ];
    
    $result = array_map(fn($programmig) => "$programmig,$userName!",
    $programmigs);

    display($result);
    
    function display($data)
    {
        echo"<pre>";
        print_r($data);
        echo "</pre>";
    }

?>