<?php 
    $validPassWord = 'ffmm';
    $userInput = '';
    while($userInput !== $validPassWord){
        $userInput = readline("Enter the password: ");
    }
    echo "Access Granted";
?>