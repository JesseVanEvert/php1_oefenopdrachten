<?php
$age = 1;
$age += 75;
$age -= 25;
$age *= 5;
$age /= 50;

if($age > 0 && $age <5){
    echo "below average";
}
if ($age > 5 && $age < 50){
    echo "average";
}
if ($age > 50){
    echo "Above average";
}
