<?php

//Two variables are defined right away: $argv and $argc
print_r($argv); //array always has the minimum length of 1. $argv[0] is file name
print_r($argc);
echo PHP_EOL;
//This two variables can also be accessed as $_SERVER['argv'] and $_SERVER['argc']
//homework: create cron job that executes a script every 5 minutes and writes something to the file.