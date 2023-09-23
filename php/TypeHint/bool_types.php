<?php 
    function canVote(bool $isAdult) : string  
    {
        return $isAdult ? 'You can vote' : 'You can not vote';    
    }
    $status = canVote(true);// output: You can vote
    echo $status;
?>