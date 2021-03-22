<?php
$amount = 10;

function calculateVAT($amount){
    return $amount *= 1.21;
}

echo calculateVAT($amount);