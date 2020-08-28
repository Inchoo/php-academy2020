<?php

// details on http://php.net/manual/fa/language.operators.php

//most used one


// Arithmetic Operators
/*
-$a	Negation	Opposite of $a.
$a + $b	Addition	Sum of $a and $b.
$a - $b	Subtraction	Difference of $a and $b.
$a * $b	Multiplication	Product of $a and $b.
$a / $b	Division	Quotient of $a and $b.
$a % $b	Modulus	Remainder of $a divided by $b.
from http://php.net/manual/fa/language.operators.assignment.php
*/

$i=4;$j=5; //integer

$k=$i/$j; //0.8 double
//echo gettype($i), $k;


// assignment

$i=3;

$i+=3; //6

$j=2;
$i-=$j; //4

/*
$a += $b     $a = $a + $b    Addition
$a -= $b     $a = $a - $b     Subtraction
$a *= $b     $a = $a * $b     Multiplication
$a /= $b     $a = $a / $b    Division
$a %= $b     $a = $a % $b    Modulus
from http://php.net/manual/fa/language.operators.assignment.php */

//echo $i%2; //0 - modulo je ostatak nakon cjelobrojnog djeljenja

// Comparison Operators

$broj="3";
//echo $broj==3; //true (1)

//echo $broj===3; //false (empty out)

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
from http://php.net/manual/fa/language.operators.comparison.php
*/

// Execution Operators
// backticks mac HR: alt + greater/less key, WIN and Linux: alt gr + 7, general: Alt + 0180,
$output = `ls -al`;
echo "<pre>",$output,"</pre>";

//Incrementing/Decrementing Operators

$i=2;
$j=1;
$i++; echo '$i=',$i, ",", '$j=',$j, "<br />";
$j = $j+ ++$i; echo '$i=',$i, ",", '$j=', $j, "<br />";
$i-=$j; echo '$i=',$i, ",", '$j=', $j, "<br />";
$i = $i++; echo '$i=',$i, ",", '$j=', $j, "<br />";
echo $j-- + ++$i; 

/*
++$a	Pre-increment	Increments $a by one, then returns $a.
$a++	Post-increment	Returns $a, then increments $a by one.
--$a	Pre-decrement	Decrements $a by one, then returns $a.
$a--	Post-decrement	Returns $a, then decrements $a by one.
from http://php.net/manual/fa/language.operators.increment.php
*/

function load(){
    echo "loading...";
    return false;
}


function read(){
    echo "reading...";
    return false;
}

if(load() && read()){ //read function will NOT execute
    echo "done";
}

/*
Logical Operators
Example	Name	Result
$a and $b	And	TRUE if both $a and $b are TRUE.
$a or $b	Or	TRUE if either $a or $b is TRUE.
$a xor $b	Xor	TRUE if either $a or $b is TRUE, but not both.
! $a	Not	TRUE if $a is not TRUE.
$a && $b	And	TRUE if both $a and $b are TRUE.
$a || $b	Or	TRUE if either $a or $b is TRUE.
more on http://php.net/manual/fa/language.operators.logical.php
*/



// String Operators

$city = "Osijek";
$city = $city . " is best city ";
$city .= "in Croatia!";
echo $city;

// more on http://php.net/manual/fa/language.operators.string.php



//Array Operators

$a1=[1];
$a2 = array(1,2);
$a3 = $a1 + $a2; //1,2
var_dump($a3);

/*
$a + $b	Union	Union of $a and $b.
$a == $b	Equality	TRUE if $a and $b have the same key/value pairs.
$a === $b	Identity	TRUE if $a and $b have the same key/value pairs in the same order and of the same types.
$a != $b	Inequality	TRUE if $a is not equal to $b.
$a <> $b	Inequality	TRUE if $a is not equal to $b.
$a !== $b	Non-identity	TRUE if $a is not identical to $b.
more on http://php.net/manual/fa/language.operators.array.php
*/


//Type Operators
class Ipa
{
}

class Ferit
{
}
$a = new Ipa();

var_dump($a instanceof Ipa);
var_dump($a instanceof Ferit);


// more on http://php.net/manual/fa/language.operators.type.php