<?php
$letters = "aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ1234567890";
$password = "";

for($i = 0; $i < 8; $i++){
   $password .= substr($letters, rand(1, mb_strlen($letters)), 1);
}

echo $password;