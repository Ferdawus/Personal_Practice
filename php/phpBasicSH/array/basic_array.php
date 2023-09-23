<?php
    // first option
    // $fruits = array('apple','banana','cherray');
    // print_r($fruits);

    // second option
    // $numbrs = [1,2,3,5];
    // print_r($numbrs);

    //associative array

    // $person =
    // [
    //     "fname" => "Ferdawus",
    //     "lname" => "SK",
    //     "age"   =>24,
    // ];

    // print_r($person);
    // echo gettype($person);

    // multidimentional array
    // $persons =
    // [
    //     "fname"   => "Ferdawus",
    //     "lname"   => "SK",
    //     "age"     =>24,
    //     "friends" => [
    //         "fname"      => "Nasir",
    //         "lname"      => "Kazi",
    //         "age"        => 24,
    //         "profession" => "student"
    //     ]
    // ];

    // print_r($persons['friends']['age']);

        $numbers = 
        [
            1,20,9,50,
            'float'   =>[1.3,2.5,3.5],
            'boolean' => [true,false]
        ];
        print_r($numbers['boolean']);
?>