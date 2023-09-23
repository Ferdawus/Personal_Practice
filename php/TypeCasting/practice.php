<?php 
    $useAge = "35";
    $minimumAge = 18;
    
    if ((int) $useAge > $minimumAge) {
        echo "Vote Accected";
    }else{
        "Sorry, you're too young to vote.";
    }
    echo PHP_EOL;

    // $name = "Ferdawus";
    // $phn  = "0";
    // $phn  = "";
    // $phn  = 0.0;
    // $phn  = null;

    // var_dump((bool)$name);
    // var_dump((bool)$phn );


    // $cart = "200 tesla cars";
    // var_dump((int)$cart);

    $isAdmin = false;
    // $isAdmin = true;
    var_dump((int)$isAdmin);

?>