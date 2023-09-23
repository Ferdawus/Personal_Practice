<?php   
    // print "Hello World".PHP_EOL;
    // print "Hello World".PHP_EOL


    // $name = readline();
    // print $name.PHP_EOL;

    $names = [];
    while (true) {
        $input = readline("> ");
        $names[] = $input;
        if ($input == "0") {
            break;
        }
    }
    // var_dump($names);

    foreach ($names as $name) {
        print $name.PHP_EOL;
    }