<?php 
    $fileName = "/home/ferdawus/Documents/Personal_Practice/php/File/f1.txt";
    
    // echo getcwd();
    // $fp = fopen($fileName,'r');
    // $line = fgets($fp,5);
    // echo $line;
    // while ($line = fgets($fp)) {
    //     echo $line;
    // }
    // echo PHP_EOL;
    // rewind($fp);
    // fseek($fp,14);
    // fseek($fp,-1,SEEK_END);
    // while ($line = fgets($fp)) {
    //     echo $line."-";
    // }

    // fclose($fp);

    // $data = file($fileName);
    // print_r($data);
    // print_r($data[0]);
    if (is_readable($fileName)) {
        $data = file_get_contents($fileName);
        echo $data;
    }
  
    
?>