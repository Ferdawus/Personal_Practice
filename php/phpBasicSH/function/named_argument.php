<?php 
    function calculateTotalCost(float $price, int $quantity, float $discount) : float
    {
        $total = $price * $quantity;
        $total -= $discount;
        return $total;
    }
    echo calculateTotalCost(price:20,quantity:2,discount:1);

?>