<?php
// Conditional statements
// IF - basic syntax

$i = 3;
// Loose equal operator - equality (value comparison)
if ($i == 3) {
    echo ' i equals 3 ';
}

// Strict equal operator - identity (both value and data type comparison - important)
if ($i === 3) {
    echo ' i equals 3 ';
}

// Note the data type of '3' in this comparison
if ($i === '3') {
    echo ' i equals 3 ';
}

// IF - full syntax
$i = 4;
if ($i === 3) {
    echo 'OK';
} else {
    echo 'NOT OK';
}

// Nesting IFs (ifception - if's within if's)
$i = 2;
//$i = 3;
//$i = 4;
if ($i > 0) {
    if ($i > 1) {
        echo 'Greater than 1';
    }

    // Use of logical operators
    if ($i < 10 && $i > 2) {
        echo 'Lesser than 10 AND greater than 1';
    }

    if ($i < 10 || $i > 4) {
        echo 'Lesser than 10 OR greater than 1';
    }
}

// Multiple IFs
$gender = 2;
if ($gender === 0) {
    echo 'Female';
} else if ($gender === 1) { // Do not use (note the space between else and if)
    echo 'Male';
} elseif ($gender === 2) { // According to the PSR-2 standard this is the correct way
    echo 'Other';
} else {
    echo 'Unknown';
}

$i = 3;

// Bad practice (use brackets - {})
if ($i === 3)
    echo '45 OK';
echo '46 OK';

// Inline if (ternary operators) - used for cleaner presentation
echo $i === 3 ? ' 51 OK ' : ' 51 NOT ';


// Alternative syntax for control structures
// more on http://php.net/manual/en/control-structures.alternative-syntax.php

?>

<?php if ($i === 3): ?>
<html>
    <body>
        <h1>Naslov</h1>
    </body>
</html>
<?php endif; ?>

<?php // This is shorthand operator (replaces echo to look cleaner, outputs the string) ?>
<?= 'test' ?>

//more on
//http://php.net/manual/en/control-structures.if.php
//http://php.net/manual/en/control-structures.else.php
//http://php.net/manual/en/control-structures.elseif.php
//https://www.php-fig.org/psr/psr-2/