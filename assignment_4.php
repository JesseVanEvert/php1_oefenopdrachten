<?php
$money = 0.1;

for ($i = 0; $i < 20; $i++ ){
   $money += 7.5;
   $money *= 1.02;
}

echo $money;