<?php


function primeNumbersInRange($from, $to){


    function primeNumber(int $number): bool{
        for($i=2;$i<$number;$i++){
            if($number%$i===0){
                return false;
            }
        }
        return true;
    }


    $numbers=[];

    $min = $from<=$to ? $from : $to;
    $max = $from>=$to ? $from : $to;

    for($i=$min;$i<=$max;$i++){
        if(primeNumber($i)){
            $numbers[]=$i;
        }
    }

    return $numbers;

}

//print_r(primeNumber(24)); //Fatal error:  Uncaught Error: Call to undefined function primeNumber()

echo "<pre>";



print_r(primeNumbersInRange(287,33));
echo "</pre>";
echo "<hr />";
