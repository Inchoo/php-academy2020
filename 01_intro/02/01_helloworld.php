<?php 

echo 'Hello world';

echo 'Hello';
print ' world'; // No additional newline is appended

/*
comment
multiple lines

*/

echo 'Hello', ' world'; //echo can accept more than one parameter, unlike print

echo "1", '2', "\"3\"", "'4'", '"5"';

echo "\tFirst row\nSecond row"; //If the string is enclosed in double-quotes ("), PHP will interpret the following escape sequences for special characters:

echo <<<IPA
<h1 title="Main title">
  Inchoo PHP Academy
</h1>
IPA;
//https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc

//read: https://www.phptpoint.com/php-echo-print/
