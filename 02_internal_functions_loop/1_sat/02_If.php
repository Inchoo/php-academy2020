<?php
// NOTE: Comment out parts you don't need.
// Conditional statements - when we need to execute part of the code based on given condition
// IF - basic syntax

// Everything in given conditions is broken down to true or false, you can use var_dump to test
var_dump(true);
var_dump(false);

// !true
if (true) {
    echo 'true';
}

// !false
if (false) {
    echo 'false';
}

if (3) {
    echo 'true';
}

// typecasting
var_dump((bool)3);

if (0) {
    echo 'true!!!';
}
var_dump((bool)0);


$i = 3;
// Loose equal operator - equality (value comparison)
// IF (variable $i equals 3) {execute this}
if ($i == 3) {
    echo ' i equals 3 ';
}

var_dump($i == 3);

// Strict equal operator - identity (both value and data type comparison - important)
// IF (variable $i is identical to 3) {execute this}
if ($i === 3) {
    echo ' i equals 3 ';
}

// Note the data type of '3' in this comparison
if ($i === '3') {
    echo ' i equals 3 ';
}

var_dump($i === '3');

// We can compare strings too
$letter = 'abc';
if ($letter == 'abc') {
    echo ' Match! ';
}

// IF - full syntax
$i = 4;
// IF (variable $i is identical to 3) {execute this}
if ($i === 3) {
    echo 'OK';
} else {
    // ELSE (in all other cases) {execute this}
    echo 'NOT OK';
}

// Nesting IFs (if's within if's)
$i = 2;
//$i = 3;
//$i = 4;

// First level
if ($i > 0) {
    // Second level
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

// Inline if (ternary operators) - used for cleaner presentation on one line
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

<?php
// Task:
$number = 13.2;
// If $number: (is integer and greater than 5 and lesser than 20) OR (is string and greater than 8 and lesser than 18)
// output "1"
// If $number (is string)
// output "2"
// If $number (is NOT string)
// output "3"
// If $number (is greater than 5 and lesser than 20)
// output "4"
// If nothing above
// output "5"

echo "\n\n";

if ((is_int($number) && $number > 5 && $number < 20)
|| (is_string($number) && $number > 8 && $number < 18)
) {
    echo '1';
} elseif (is_string($number)) {
    echo '2';
} elseif (!is_string($number)) {
    echo '3';
} elseif ($number > 5 && $number < 20) {
    echo '4';
} else {
    echo '5';
}

// Why others are not outputted?

// Additional documentation:
//http://php.net/manual/en/control-structures.if.php
//http://php.net/manual/en/control-structures.else.php
//http://php.net/manual/en/control-structures.elseif.php
//https://www.php-fig.org/psr/psr-2/