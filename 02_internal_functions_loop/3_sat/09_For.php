<?php


for($i=0;$i<10;$i++){
    echo $i, "<br/>";
}



echo "Osijek<br/>";

for($i=0;$i<100;$i++){
    if($i===5){
        break; //chortcuircuiting
    }
    if($i!=3){
       continue;  //chortcuircuiting
        break; //shortcuircuiting
    }

    echo $i. " Osijek<br/>";
   
}

echo "Osijek<br/>";

//nested loops

for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        echo $i+$j, " ";
    }   
    echo "<br />";
}

//break outer loop http://php.net/manual/en/control-structures.break.php
outer:
for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
       if($j===2){
           break 2;
       }
       echo $i+$j, " ";
    }   
    echo "<br />";
}