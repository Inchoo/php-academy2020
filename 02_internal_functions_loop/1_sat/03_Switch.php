<?php

$grade = 5;

switch ($grade) {
    case 1:
        echo 'Nedovoljan';
        break;
    case 2:
        echo "Dovoljan";
        break;
    case 3:
        echo "Dobar";
        break;
    case 4:
        echo 'Vrlo dobar';
        break;
    case 5:
        echo 'Izvrstan';
        break;
    default:
        echo 'Bez ocjene';
}

// if $i=0, all executed
// Use break;
switch ($i) {
    case 0:
        echo "i equals 0";
    case 1:
        echo "i equals 1";
    case 2:
        echo "i equals 2";
}

// To use 1 output for multiple results:
switch ($i) {
    case 0:
    case 1:
    case 2:
        echo "i is less than 3 but not negative";
        break;
    case 3:
        echo "i is 3";
}

//more on http://php.net/manual/en/control-structures.switch.php

// good reading: https://softwareengineering.stackexchange.com/questions/162574/why-do-we-have-to-use-break-in-switch