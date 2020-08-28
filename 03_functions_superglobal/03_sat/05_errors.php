<?php

//error_reporting(E_ALL);
//error_reporting(E_WARNING);
//error_reporting(E_ERROR);
error_reporting(0);
echo $t; //Notice
include "joe.php";//Warning
//$x=3 //Parse error
require "joe.php";//Fatal error


// more on http://php.net/manual/en/errorfunc.constants.php