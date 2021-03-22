<?php

function calculateTax($amount, $tax){
    return $amount *= ($tax / 100 + 1);
}

echo calculateTax(10, 21);