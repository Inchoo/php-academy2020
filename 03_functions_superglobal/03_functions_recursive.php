<?php

/**
 * Recursive functions
 */
function countBackwards(int $number) {
    echo $number, '<br>';

    if ($number > 0) {
        $number--;
        countBackwards($number);
    }
}

countBackwards(10);
