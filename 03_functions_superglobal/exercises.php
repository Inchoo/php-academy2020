<?php

/**
 * Exercise #1
 *
 * The function needs to take one integer argument and check if is an even or odd number.
 * If the number is even function needs to return the string 'even', otherwise it returns string 'odd'.
 * If the number is zero return string 'zero'.
 */
function isEvenOrOdd(int $number): string {
    if ($number === 0) {
        return 'zero';
    }
    return $number % 2 === 0 ? 'even' : 'odd'; // ternary operator
}

echo isEvenOrOdd(10); // echo even
echo isEvenOrOdd(13); // echo odd
echo isEvenOrOdd(0); // echo zero

/**
 * Exercise #2
 *
 * Create a cookie in the browser and try to read value.
 */

/**
 * Exercise #3
 *
 * Find where is session data stored on the server (hint: phpinfo())
 */
