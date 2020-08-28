<?php

// basics https://www.cs.utah.edu/~germain/PPS/Topics/functions.html


//usefull ones


if(isset($i)){
    echo $i;
}

$city = 'Osijek';

echo strlen($city) . PHP_EOL;

$city = '   Osijek     ';
echo strlen($city) . PHP_EOL;

$city = trim($city);
echo strlen($city) . PHP_EOL;

$city = 'Osijek is the best city';
echo strpos($city, 'city');
if (strpos($city, 'city') !== false) {
    echo 'Contains city' . PHP_EOL;
}

$i = 5;
if (is_int($i)) {
    echo 'Is int' . PHP_EOL;
}


$array = [1, 2];
if (is_array($array)) {
    echo count($array) . PHP_EOL;
}

$text = '<h1>Content</h1>' . PHP_EOL;
echo $text;

echo htmlspecialchars($text);

file_put_contents('test-file.txt', 'Wrote to file!!!', FILE_APPEND);
$textFromFile = file_get_contents('test-file.txt');
echo $textFromFile;

$array = [];
if (empty($array)) {
    echo 'Empty' . PHP_EOL;
}

//Returns FALSE if var exists and has a non-empty, non-zero value. Otherwise returns TRUE.
//
//The following values are considered to be empty:
//
//"" (an empty string)
//0 (0 as an integer)
//0.0 (0 as a float)
//"0" (0 as a string)
//NULL
//FALSE
//array() (an empty array)


echo password_hash('batman123', PASSWORD_DEFAULT);


$i=new DateTime();

header('Content-Type: application/json');
echo json_encode($i);

// more on http://php.net/manual/en/indexes.functions.php*/
