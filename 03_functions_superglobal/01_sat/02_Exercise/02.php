<?php

//for given range print all prime numbers

include_once "../00_Config.php";
include_once "00_Functions.php";

$from = isset($_GET["from"]) ? $_GET["from"] : 17;
$to = isset($_GET["to"]) ? $_GET["to"] : 245;

$min = $from<=$to ? $from : $to;
$max = $from>=$to ? $from : $to;

//function primeNumber is in 00_Functions.php file
for($i=$min; $i<=$max;$i++){
    if(primeNumber($i)){
        echo $i, $b;
    }
}


