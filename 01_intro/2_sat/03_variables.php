<?php

$variable = "content"; //string

echo $variable;

$message = "
<hr />
Lorem ipsum text
mulriple lines
<hr />
";

echo $message;

$message = <<<IPA
<h1 title="Main title">
  Inchoo PHP Academy
</h1>
IPA;
echo $message;

echo "Use $variable inside echo  #1<hr />";
echo "Use " . $varijabla . " inside echo #2<hr />";
// more on https://stackoverflow.com/questions/5605965/php-concatenate-or-directly-insert-variables-in-string




// working
echo "abc{$variable}def"; 

// doesn't work:
echo 'abc{$variable}def'; //abc{$varijabla}def
echo "abc$variabledef"; //Notice: Undefined variable: varijabladef


// variable data types
echo gettype($variable), "<hr />";
//http://php.net/manual/en/function.gettype.php

$variable=2;

echo gettype($variable), "<hr />";

$variable=2.1;

echo gettype($variable), "<hr />";

$variable=true;

echo gettype($variable), "<hr />";

$variable=[]; //old way array()

echo gettype($variable), "<hr />";

$variable=new stdClass(); 

echo gettype($variable), "<hr />";

$variable=null; 

echo gettype($variable), "<hr />";

// usefull functions
$variable=2.1;
var_dump($variable);
echo  "<hr />";
print_r($variable);
echo  "<hr />";

// more on: https://www.tutorialrepublic.com/php-tutorial/php-data-types.php

const TEST = 5;

// PHP is interpreter

$variable=2; //integer
echo $variable, "<hr />";
$variable = "Osijek"; //string
echo $variable, "<hr />";

// more on: http://www.hackingwithphp.com/2/2/2/interpreting-vs-compiling

// nerds only :) https://www.phpclasses.org/blog/post/117-PHP-compiler-performance.html