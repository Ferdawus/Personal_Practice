<?php 

  declare(strict_types=1); 

$name = "M. Ferdawus";

function calcAge(int $birthYear, string $name)
{
    $currentYear = date("Y"); // Get the current year
    $age = $currentYear - $birthYear;
    echo "Hey {$name}, you are {$age} years old";
}

calcAge("1999", $name);
calcAge(1999, $name);
    
?>