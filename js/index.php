<?php
    function countALetter($sentance) : int {
        //length count 
        $length = 0;
        while (isset($sentance[$length])) {
            $length++;
        }
        // return $length; 

        //count sentence
        $count = 0;
        for ($i=0; $i < $length; $i++) { 
            if($sentance[$i] == "a" || $sentance[$i] == "A")
            {
                $count++;
            }
        }
        return $count;
    }
    $result = countALetter("Banladesh is my homeland");
    echo $result;
    // $contLength = countLetter('ferdawus');
?>





