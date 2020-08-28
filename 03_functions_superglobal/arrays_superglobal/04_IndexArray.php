<?php

$arr = array(2,3,4,5,5); //old syntax
$arr = ["2",3,4,5,5];
//first element
echo $arr[0], PHP_EOL;


//last element
echo $arr[4], $b;
echo $arr[count($arr)-1], PHP_EOL; //count numbers of array and substract by 1 because it's starts with 0
print_r($arr);

//add element into array
$arr[]="Osijek";
echo $arr[count($arr)-1], PHP_EOL;
print_r($arr);
