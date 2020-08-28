<?php

function doSomething($a){
    if($a===0){
        throw new Exception("Number is zero"); //OOP syntaxt - next time :)
    }

    return 10/$a;
}

try {
    echo doSomething(0);
} catch (Exception $e) {
    echo $e->getMessage();
}


// rest of syntax in OOP
