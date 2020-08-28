<?php

// maybe this after if/switch better, along with usefull functions

//Two variables are defined right away: $argv and $argc
print_r($argv); //array always has the minimum length of 1. $argv[0] is file name
print_r($argc);
echo PHP_EOL;
//This two variables can also be accessed as $_SERVER['argv'] and $_SERVER['argc']


file_put_contents('test-file.txt', 'Wrote to file!!!', FILE_APPEND); // stavit ovo kod console argv
$textFromFile = file_get_contents('test-file.txt');
echo $textFromFile;


// objasnit cronjob, touch

// prilagodit ovo više zadaći ako ce bit ova:
// homework: create cron job that executes a script every 5 minutes and writes something to the file.
// example datetime. this file needs to be accessible on web