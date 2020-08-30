<?php

// details on https://php.net/manual/en/language.operators.php

// Arithmetic Operators
/*
-$a	Negation	Opposite of $a.
$a + $b	Addition	Sum of $a and $b.
$a - $b	Subtraction	Difference of $a and $b.
$a * $b	Multiplication	Product of $a and $b.
$a / $b	Division	Quotient of $a and $b.
$a % $b	Modulus	Remainder of $a divided by $b.
from https://php.net/manual/en/language.operators.arithmetic.php
*/

$i = 4;
$j = 5;

$k = $i / $j; //0.8 double
echo gettype($k), $k;


// Assignment Operators
/*
$a += $b     $a = $a + $b    Addition
$a -= $b     $a = $a - $b     Subtraction
$a *= $b     $a = $a * $b     Multiplication
$a /= $b     $a = $a / $b    Division
$a %= $b     $a = $a % $b    Modulus
from https://php.net/manual/fa/language.operators.assignment.php
*/

$i = 3;

$i += 3; //6

$j = 2;
$i -= $j; //4

echo $i;

echo $i%2; //0 - modulo je ostatak nakon cjelobrojnog dijeljenja

// Comparison Operators
/*
$a == $b	Equal	TRUE if $a is equal to $b.
$a === $b	Identical	TRUE if $a is equal to $b, and they are of the same type. (introduced in PHP 4)
$a != $b	Not equal	TRUE if $a is not equal to $b.
$a <> $b	Not equal	TRUE if $a is not equal to $b.
$a !== $b	Not identical	TRUE if $a is not equal to $b, or they are not of the same type. (introduced in PHP 4)
$a < $b	Less than	TRUE if $a is strictly less than $b.
$a > $b	Greater than	TRUE if $a is strictly greater than $b.
$a <= $b	Less than or equal to	TRUE if $a is less than or equal to $b.
$a >= $b	Greater than or equal to	TRUE if $a is greater than or equal to $b.
from https://php.net/manual/en/language.operators.comparison.php
*/

$num = '3';
echo $num == 3; //true

echo $num === 3; //false

// Execution Operators
// backticks mac HR: alt + greater/less key, WIN and Linux: alt gr + 7, general: Alt + 0180,
$output = `ls -al`;
echo "<pre>", $output, "</pre>";

//Incrementing/Decrementing Operators
/*
++$a	Pre-increment	Increments $a by one, then returns $a.
$a++	Post-increment	Returns $a, then increments $a by one.
--$a	Pre-decrement	Decrements $a by one, then returns $a.
$a--	Post-decrement	Returns $a, then decrements $a by one.
from https://php.net/manual/en/language.operators.increment.php
*/

$i = 2;
$j = 1;
$i++;
echo '$i=', $i, " ", '$j=', $j, "\n"; //3, 1
$j = $j + ++$i;
echo '$i=', $i, " ", '$j=', $j, "\n"; //4, 5
$i -= $j;
echo '$i=', $i, " ", '$j=', $j, "\n"; //-1, 5
$i = $i++;
echo '$i=', $i, " ", '$j=', $j, "\n"; //-1, 5
echo $j-- + ++$i; //5


/*
Logical Operators
Example	Name	Result
$a and $b	And	TRUE if both $a and $b are TRUE.
$a or $b	Or	TRUE if either $a or $b is TRUE.
$a xor $b	Xor	TRUE if either $a or $b is TRUE, but not both.
! $a	Not	TRUE if $a is not TRUE.
$a && $b	And	TRUE if both $a and $b are TRUE.
$a || $b	Or	TRUE if either $a or $b is TRUE.
more on https://php.net/manual/en/language.operators.logical.php
*/

if ($j === 4 && $i === 0) {
    //echo "Both are true";
}

if ($j === 4 || $i === 4) {
   // echo "One of them is true";
}

if (!$i) {
    echo "0 is considered false";
}



// String Operators

$city = "Osijek";
$city = $city . " is best city ";
$city .= "in Croatia!";
echo $city;

// more on https://php.net/manual/en/language.operators.string.php


//Array Operators

$a1 = [1];
$a2 = array(1, 2);
$a3 = $a1 + $a2; //1,2
var_dump($a3);

/*
$a + $b	Union	Union of $a and $b.
$a == $b	Equality	TRUE if $a and $b have the same key/value pairs.
$a === $b	Identity	TRUE if $a and $b have the same key/value pairs in the same order and of the same types.
$a != $b	Inequality	TRUE if $a is not equal to $b.
$a <> $b	Inequality	TRUE if $a is not equal to $b.
$a !== $b	Non-identity	TRUE if $a is not identical to $b.
more on https://php.net/manual/en/language.operators.array.php
*/


//Type Operators
/*
 instanceof is used to determine whether a PHP variable is an instantiated object of a certain class:
more on https://www.php.net/manual/en/language.operators.type.php
 */
class Ipa
{
}

class Efos
{
}

$a = new Ipa();

var_dump($a instanceof Ipa);
var_dump($a instanceof Efos);
