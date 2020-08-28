<?php declare(strict_type=1); //for function type

include_once "../00_Config.php";

/*
does not receive any parameters
does not return any value
*/
function doSomething(){
    //echo "As you said, I am doing something", $b; //$b is undefined!!!
    echo "As you said, I am doing something", $GLOBALS["b"];
}

//calling function
doSomething();

/*
function doSomething($b){
    echo "As you said, I am doing something", $b;
}
*/  //Fatal error: Cannot redeclare doSomething() 

/*
receive one parameter
does not return any value
*/
function doSomethingElse($b){
    echo "Now, I am doing something else by receiving a parameter", $b; 
}

doSomethingElse($b);

doSomethingElse("<hr />");

/*
does not receive any parameters
return boolean value
*/
function checkForValue(){
   return rand(0,10)>5 ? true : false;
}

if(checkForValue()){
    echo "Value check OK", $b;
}


/*
receive one parameter
return boolean value
*/
function checkForNumberValue($number){
    return $number> 5 ? true : false;
 }

if(checkForNumberValue(rand(0,10))){
    echo "Value check OK", $b;
}


//Optional parameters

function checkIfExists($number=2){
    return $number===2 ? true : rand(1,10)>5 ? false : true;
 }

 if(checkIfExists(1)){
    echo "Value check OK", $b;
}
if(checkIfExists()){
    echo "Value check OK", $b;
}



//Function type
//http://php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration
//declare(strict_types=1); on line 1
function mustReturnString(string $s) : string{
    return $s . " OK";
}

//echo mustReturnString(3); //error

echo mustReturnString("3"),$b; 



function add(int $a, int $b): int{
    return $a+$b;
}

echo add(1,2), $b;


// Coercive mode
function addAll(int ...$arr) : int{
    return array_sum($arr);
}

echo addAll(1,2), $b;
echo addAll(1,2,2,3,3,2,3,2,3,2), $b;



//function example
function doSomethingImportant($x){
    if ( strlen($x) == 11 ) {
		if ( is_numeric($x) ) {
			$a = 10;
			for ($i = 0; $i < 10; $i++) {
				$a = $a + intval(substr($x, $i, 1), 10);
				$a = $a % 10;
				if ( $a == 0 ) { $a = 10; }
				$a *= 2;
				$a = $a % 11;
			}
			$control = 11 - $a;
			if ( $control == 10 ) { $control = 0; }
			return $control == intval(substr($x, 10, 1), 10);
		} else {
			return false;
		}
	} else {
		return false;	
	}
}


//function example - same functionality - better readiness
function doSomethingImportantBetter(string $x): bool{
    if ( strlen($x) != 11 ) {
        return false; //short curcuiting
    }
    if ( !is_numeric($x) ) {
        return false; //short curcuiting
    }
    //there is 11 chars, all of them are digits, let's do math
    $a = 10;
    for ($i = 0; $i < 10; $i++) {
        $a = $a + intval(substr($x, $i, 1), 10);
        $a = $a % 10;
        if ( $a == 0 ) { $a = 10; }
        $a *= 2;
        $a = $a % 11;
    }
    $control = 11 - $a;
    if ( $control == 10 ) { 
        $control = 0; 
    }
    return $control == intval(substr($x, 10, 1), 10); 
}




//Functional Programming ...https://phptherightway.com/pages/Functional-Programming.html


//more reading:
//https://blog.teamtreehouse.com/5-new-features-php-7
//https://phpenthusiast.com/object-oriented-php-tutorials/type-hinting


