<?php
// FOR LOOP
// Used when we know how much times script will execute.
// Expression 1 ($i = 0) is executed and used
// Expression 2 ($i < 10) is checked on each iteration (if it is true or false), if ok loop is executed, if not it is stopped
// Expression 3 ($i++) is executed at the end of the loop (used to control the loop)


for($i=0; $i<10; $i++){ // try with $i--, why infinite loop here?
    echo $i, '<br/>';
}

for ($i=0; $i<100; $i++){
    if ($i===5){
        break; // ending the loop sooner
    }
    if ($i!=3){
       continue;  // skipping
    }

    echo $i. "$i Osijek<br/>";
   
}

// Nested loops (loop inside a loop)

for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
//        if($j===2){
//            break; // Breaks current loop level
//            break 2; // Breaks two levels of loops
//        }
        echo "OUTPUTING \$j :" . $j . '<br/>';
    }
    echo "\nOUTPUTING \$i :" . $i;
}

//break outer loop http://php.net/manual/en/control-structures.break.php

// Task: Create a script using for loop that displays 1-2-3-4-5-6-7-8-9-10 on one line.