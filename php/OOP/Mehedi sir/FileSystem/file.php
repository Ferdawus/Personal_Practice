<?php 
    // mkdir('demo_dir/sub_dir/another_dir',0755, recursive:true);
    // rmdir('demo_dir/sub_dir/another_dir');
    // rmdir('demo_dir/sub_dir');
    // rmdir('demo_dir');
    // $folder = scandir('demo_dir',SCANDIR_SORT_DESCENDING);
    // var_dump($folder);

    $file_name = "note.txt";
    $file_text = "Hello Ferdawus";

    file_put_contents($file_name,$file_text,FILE_APPEND);

    $file_get = file_get_contents('note.txt');
    print_r($file_get);
?>