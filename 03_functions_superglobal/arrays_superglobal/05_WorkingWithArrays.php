<?php

$t="id";
$arr=[];

$arr[] = [
    $t=>1,
    "name"=>"IPA",
    "users"=>
        []
];

$arr[0]["users"][]=["firstname"=>"John", "lastname"=>"Doe"];

$arr["active"]=true;

echo "<pre>";
print_r($arr);
echo "</pre>";

//print out Doe
echo $arr[0]["users"][0]["lastname"];

//read more:http://php.net/manual/en/ref.array.php