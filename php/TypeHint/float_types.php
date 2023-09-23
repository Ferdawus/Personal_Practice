<?php 
    function calculatePrice(float $basePrice, float $taxRate): float 
    {
        return $basePrice * (1 + $taxRate);
    }
    $totalPrice = calculatePrice(100.0, 0.08);  // Output: 108.0
    // $totalPrice = calculatePrice("hi", "0.08");  // Will result in a TypeError
    echo $totalPrice
    

    
?>