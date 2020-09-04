<?php

$str = 'random string';
$arr = [1, 2, 3, 4, 5];

/**
 * Built-in functions
 *
 * - https://www.php.net/
 */
echo strlen($str);
echo strtoupper($str);
echo count($arr);

/**
 * Basic custom function
 *
 * - naming convention: camelCase, snake_case
 */
function doSomething() {
    echo time();
}

/**
 * Call function
 */
doSomething();

/**
 * Function with return values
 *
 * - type hints
 */
function getMeaningOfLife() {
    return 42;
//    return; // returns null
//    echo 'some string'; // this isn't executed
}

getMeaningOfLife(); // called but nothing is outputted
echo getMeaningOfLife(); // echo 42
$meaningOfLife = getMeaningOfLife(); // assigns 42 to variable
echo $meaningOfLife; // echo 42

/**
 * Function with parameters
 *
 * - argument vs parameter: "term parameter is used to identify the placeholders in the method signature,
 *   whereas the term arguments are the actual values that you pass in to the method"
 * - type hint
 */
function welcome($name) {
    echo "Hi, {$name}!";
}

welcome('Marko'); // echo Marko
welcome('Pero'); // echo Pero

/**
 * Function with return value and parameters
 */
function sum($a, $b) {
    return $a + $b;
}

echo sum(5, 10); // echo 15
echo sum(500, 600); // echo 1100

/** EXERCISE #1 */
