<?php 
    function greet($name, $customGreeting){
        echo "Hello,{$name}";
        $customGreeting();
    }

    greet("Ferdasus",function(){
        $time = date('h:i');
        echo " Have a great day! its {$time}";
    });
?>