<?php 
    // $firstName = "Ferdawus";
    // $lastName  = "SK";
    // // template literals;
    //print "My Name is {$firstName} {$lastName}"; 
    //print $firstName[-1];
    // $firstName[0] = "f";
    // print $firstName;

//     $text = <<<TEXT
//         This is a heredoc string.
//         It can span multiple lines.
        
//         TEXT;

// echo nl2br($text);

    $text = <<<HEREDOC
    "This is a heredoc string."
    It can span multiple lines. 
    
    HEREDOC;
    print $text;
    $multilineString = <<<EOT
    This is a multiline string.
    It preserves line breaks and formatting.
    EOT;
echo $multilineString;

?>