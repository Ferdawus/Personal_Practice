<?php 
    $message = "never gonna give you up";
    // echo strlen($message);
    // echo PHP_EOL;
    // echo ucfirst($message);
    // echo PHP_EOL;
    // echo lcfirst($message);
    // echo ucwords($message);
    // echo PHP_EOL;

    // $message = "Never Gonna Give You UP";
    // echo strtolower($message);
    // echo PHP_EOL;
    // echo strtoupper($message);
    // echo PHP_EOL;
    // echo str_word_count($message);

    // $tags = "Javascript, PHP, Programming, Learnnig";
     
    // print_r(
    //     explode(", ",$tags)
    // );

    // $tags = ['Javascript','PHP','Programming','Learnnig'];
    // echo join(',',$tags);
    // echo PHP_EOL;
    // echo implode('|',$tags);

    // $num = 584797.8708;
    // echo number_format($num,2,'|','_');
     
    // echo file_get_contents('./demo.txt');
    // echo ('./demo.txt');
    echo unlink('./demo.txt');
    $file = './demo.txt';
    if(file_exists($file)){
        print "I know your screts";
    }else{
        print "File not found: $file";
    }

?>