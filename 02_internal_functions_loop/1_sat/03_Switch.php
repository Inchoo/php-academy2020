<?php
// Conditional statements - when we need to execute part of the code based on given condition
// SWITCH - basic syntax

// We use switch when we would have a lot of if/elseif statements or when it seems more convenient
$grade = 6;
//$grade = 5;

switch ($grade) {
    case 1:
        echo 'Nedovoljan';
        break;
    case 2:
        echo 'Dovoljan';
        break;
    case 3:
        echo 'Dobar';
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

// if $i=0, all executed, after first one passes, without break all others will pass
// Use break;
//$i = 0;
$i = 1;
//$i = 2;
switch ($i) {
    case 0:
        echo 'i equals 0';
    case 1:
        echo 'i equals 1';
    case 2:
        echo 'i equals 2';
}

// To use 1 output for multiple results:
$i = 0;
switch ($i) {
    case 0:
    case 1:
    case 2:
        echo 'i is less than 3 but not negative';
        break;
    case 3:
    case 4:
        echo 'i is 3 or 4';
    default:
        echo 'i is something else';
}

// Task:
// Use date function date(w) or date(l) to output remaining days of the week including today and weekend days, separated by comma.
// Note: var_dump(date('w')); // numeric representation of today
// Note: var_dump(date('l')); // string representation of today

$day = date('l');
switch ($day) {
    case 'Monday':
        echo 'Monday,';
    case 'Tuesday':
        echo 'Tuesday,';
    case 'Wednesday':
        echo 'Wednesday,';
    case 'Thursday':
        echo 'Thursday,';
    case 'Friday':
        echo 'Friday,';
    case 'Saturday':
        echo 'Saturday,';
    case 'Sunday':
        echo 'Sunday';
}

// Additional documentation:
// http://php.net/manual/en/control-structures.switch.php
// https://softwareengineering.stackexchange.com/questions/162574/why-do-we-have-to-use-break-in-switch