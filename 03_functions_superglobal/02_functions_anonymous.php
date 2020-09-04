<?php

/**
 * Anonymous functions
 */
$func = function () {
    echo 'this is an anonymous function';
};

$func(); // call anonymous function from the variable

$customSort = function ($a, $b) {
    return $a <=> $b; // spaceship operator (-1, 0, 1)
};

$numbers = [12, 5, 3, 6, 11, 18];
usort($numbers, $customSort); // sort array with custom function
var_dump($numbers);
