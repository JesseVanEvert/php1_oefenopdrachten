<?php
$age = $_POST["age"];

function determineAge($age){
    if($age >= 18){
        echo "you're an adult";
    }
    else{
        echo "you're a child";
    }
}

determineAge($age);