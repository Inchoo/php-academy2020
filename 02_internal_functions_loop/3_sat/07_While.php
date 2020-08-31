<?php
// WHILE LOOP
// We use it when we want to execute sometime multiple time based on conditions.
// Expression in while loop is checked at the start of each iteration, and if it passes code inside is execute.
// We can change the expression inside the loop and with this manipulate when loop will stop.

$stayInLoop=true;
$i=0;
while ($stayInLoop) { // try with false and true
    echo $i . '<br />';

    $stayInLoop = ++$i<10;
}

echo '<hr />';

$i=1;
while ($i<10){
    if($i===7){
        break;
    }

     // Infinite loop (without ++ inside)
    if($i===2){
        $i++;
        continue;
    }
    echo $i++ . '<br />';
}

// more on http://php.net/manual/en/control-structures.while.php
