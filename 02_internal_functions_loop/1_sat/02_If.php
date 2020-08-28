<?php
$i = 3;


//basic syntax

if ($i == 3) { //print out
    echo " i equals 3 ";
}

if ($i === 3) { //print out
    echo " i equals 3 ";
}
//other examples for comparison and logical operators were covered in the first lecture


//full syntax
if ($i === 3) {
    echo "OK";
} else {
    echo "NOT";
}

//nested if
if ($i > 0) {
    if ($i < 10) {
        echo "OK";
    }
}


// multiple if

$gender = 2;

if ($gender === 0) {
    echo "Female";
} else if ($gender === 1) { //do not use
    echo "Male";
} elseif ($gender === 2) { //According to the PSR-2 standard this is the correct way
    echo "Other";
} else {
    echo "Unknown";
}

$i = 3;

//bad practice
if ($i === 3)
    echo '45 OK';
echo '46 OK';

//ALLWAYS USE {}


// inline if
echo $i === 3 ? " 51 OK " : " 51 NOT ";


//Alternative syntax for control structures
// more on http://php.net/manual/en/control-structures.alternative-syntax.php
if ($i == 3):
    ?>
    <h1>Naslov
        <h1>
            <table>
                <thead>
                <tr>
                    <th>Naslov</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2</td>
                </tr>
                </tbody>
            </table>
<?php
endif;


//more on 
//http://php.net/manual/en/control-structures.if.php
//http://php.net/manual/en/control-structures.else.php
//http://php.net/manual/en/control-structures.elseif.php
//https://www.php-fig.org/psr/psr-2/