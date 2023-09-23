
<?php 
// In PHP,  static types refer to type declarations that are used to specify the expected data types of function parameters and return values. These type declarations help improve code quality and catch type-related errors at compile-time or during development.  


function add(int $a, int $b):int {
    return $a + $b;
}
$result = add(5,6);
echo $result;
echo PHP_EOL;

function divide(float $numerator, float $denominator):float
{
    if ($numerator == 0.0) {
        throw new Exception("Disition by zero");
    }
    return $numerator / $denominator;
}
$result = divide(0.4,0.4);
echo $result;
echo PHP_EOL;

?>