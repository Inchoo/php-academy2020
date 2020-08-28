<?php
// Built in php functions (extras)
// Function takes some number of arguments and based on them does or outputs something (preferably expected) in return.

// Date manipulation
echo date('m/d/Y');

// String length
$city = 'Osijek';
echo PHP_EOL . strlen($city) . PHP_EOL;

$city = '   Osijek     ';
echo strlen($city) . PHP_EOL;

// Remove whitespaces
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
