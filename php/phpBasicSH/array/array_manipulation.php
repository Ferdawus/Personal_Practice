<?php 
    // $herios = ["Wolverine","Suprman","Suprman","Betman","America","Abs","Betman","Betman"];
    // $herios = ["Wolverine","Suprman","Betman","America","Abs"];
    // $count = count($herios);
    // echo $count;
    
    //  sort($herios);
    //  print_r($herios);

    // echo array_search('America',$herios); 
    // echo PHP_EOL;
    // print_r($herios);

    // print_r(array_reverse($herios));

    // print_r(array_unique($herios));

    
    // $herios = [
    //     "marvel" => "avengers",
    //     "dc"     => "Justice League"
    // ];
    // print_r(array_values($herios));
    // print_r(array_keys($herios));

    // $herios = ["Wolverine","Suprman","Betman","America","Abs"];

    // print_r( array_slice($herios,1));

    // print array_shift($herios);
    // print_r($herios);


    // $todos =  ['Go To Home','Learn PHP','Take a sleep'];
    // array_unshift($todos,'Buy a new pen');
    // print_r($todos);

    // $herios = ["Wolverine","Suprman","Betman","America","Abs"];
    // array_pop($herios);  // Removes and returns "cherry"s
    // print_r($herios);

    // array_push($herios,"Bangladesh");
    // print_r($herios);


    $fruits = ["apple", "banana", "cherry"];
    // unset($fruits[1]); // Removes "banana"
    $lastFruit = array_pop($fruits); // Removes and returns "cherry"
    print $lastFruit;
    echo PHP_EOL;
    print_r($fruits);
    
?>