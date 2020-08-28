<?php

//while works only with boolean

$stayInLoop=true;
$i=0;
while($stayInLoop){
    echo $i . "<br />";

    $stayInLoop=++$i<10;
}

echo "<hr />";
$i=10;
while($i<10){
    if($i===7){
        break;
    }
    if($i===2){
        continue;
    }
    echo $i++ . "<br />";

}


// more on http://php.net/manual/en/control-structures.while.php
