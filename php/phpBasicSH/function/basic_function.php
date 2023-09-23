<?php
    declare( strict_types=1 ); 
    function shout(string $msg = "Hey Everyone", int $times= 5) :string
    {
        return str_repeat("$msg \n",$times);
    }
    $vr = shout("Hi,Ferdawus",6);
    print $vr;
?>