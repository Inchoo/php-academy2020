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

//more on http://php.net/manual/en/control-structures.switch.php

// good reading: https://softwareengineering.stackexchange.com/questions/162574/why-do-we-have-to-use-break-in-switch