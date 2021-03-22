<?php
function calculateTax($amount, $tax = 21){
    return $amount *= ($tax / 100 + 1);
}

echo calculateTax(10);