<?php

// Assign an anonymous function to a variable
$toOut = function($name) {
    return ( "Hello $name!" );
  };

echo $toOut("IPA");

echo "<hr />";

$myFunctions = [
 
    function() {
      echo "First";
    },
   
    function() {
      echo "Second";
    },
   
    function() {
      echo "Third";
    }
];

echo $myFunctions[rand(0,count($myFunctions)-1)]();

echo "<hr />";


$names = ["Marko", "Pero", "Đuro" ];
echo "<pre>";
var_dump ( array_map( function( $name ) {
    return "Hello $name !";
  }, $names ) );
echo "</pre>";
  echo "<hr />";

  $numbers=[2,2,1,4,2,6,7,1,2,8];
  sort($numbers);


  echo "<pre>";
print_r ( $numbers);
echo "</pre>";
  echo "<hr />";

  $people = [
    [ "name" => "Marko", "age" => 22 ],
    [ "name" => "Pero", "age" => 21 ],
    [ "name" => "Đuro", "age" => 28 ]
];

usort( $people, function( $x, $y ) {
    return ( $x["age"] < $y["age"] ) ? -1 : 1;
  } );

  echo "<pre>";
  print_r ( $people);
echo "</pre>";
  echo "<hr />";



  //next time in OOP
$collator = new Collator('hr-HR'); //must enable/install php intl extension

$collator->asort($people);

echo "<pre>";
print_r ( $people);
echo "</pre>";
echo "<hr />";

  //read more on https://www.elated.com/articles/php-anonymous-functions/