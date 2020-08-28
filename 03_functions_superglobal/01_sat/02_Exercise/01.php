<?php

//for given number via get parametar number check for prime number

include_once "../00_Config.php";
include_once "00_Functions.php";

$number = isset($_GET["number"]) ? $_GET["number"] : 17;

//function primeNumber is in 00_Functions.php file
echo primeNumber($number) ? "true" : "false",$b;


//not so good solution
$isPrime=true;
for($i=2;$i<$number;$i++){
    if($number%$i===0){
        $isPrime=false;
        break;
    }
}

echo $isPrime ? "true" : "false",$b;


//bad solution
$isPrime=true;
for($i=2;$i<$number;$i++){
    if($number%$i===0){
        $isPrime=false;
    }
}

echo $isPrime ? "true" : "false",$b;