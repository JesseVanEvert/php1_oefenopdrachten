<?php
$money = 0.1;
$years = 20;

while($years != 0){
    $money += 7.5;
    $money *= 1.02;
    $years--;
}

echo $money;
