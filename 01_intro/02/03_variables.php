<?php
//Variables are used to store information to be referenced and manipulated in a computer program.

$variable = 'content'; //string

echo $variable;

echo "Use $variable inside echo  #1<hr />";
echo "Use " . $variable . " inside echo #2<hr />";
// more on https://stackoverflow.com/questions/5605965/php-concatenate-or-directly-insert-variables-in-string


// working
echo "abc{$variable}def";

// doesn't work:
echo 'abc{$variable}def'; //abc{$varijabla}def
echo "abc$variabledef"; //Notice: Undefined variable: varijabladef


// variable data types
echo gettype($variable), "\n";
//http://php.net/manual/en/function.gettype.php

$variable = 2;

echo gettype($variable), "\n";

$variable = 2.1;

echo gettype($variable), "\n";

$variable = true;

echo gettype($variable), "\n";

$variable = [1, 2, 3]; //old way array()

echo gettype($variable), "\n";

$variable = new stdClass();

echo gettype($variable), "\n";

$variable = null;

echo gettype($variable), "\n";

$variable = xml_parser_create();

echo gettype($variable), "\n"; //https://www.php.net/manual/en/resource.php

// useful functions
$variable = [1, 2, 3];
var_dump($variable);
echo "<br />";
print_r($variable);
echo "<br />";

/*
    Additional reading materials:
    https://www.tutorialrepublic.com/php-tutorial/php-data-types.php
    http://www.hackingwithphp.com/2/2/2/interpreting-vs-compiling
    https://www.phpclasses.org/blog/post/117-PHP-compiler-performance.html
 */