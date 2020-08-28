<?php
include_once "../00_Config.php";
// sum all numbers from 1 to 100

$sum=0;
for($i=1;$i<=100;$i++){
    $sum+=$i;
}
echo $sum, $b;

//with recursion

function add(int $i): int{
    if($i===0){
        return 0;
    }
    return $i + add($i-1);
}

echo add(100), $b;

echo "<hr />";



//list all files in given directory
function scanAllDir($dir) {
    $result = [];
    foreach(scandir($dir) as $filename) {
      if ($filename[0] === '.'){
        continue;
      } 

      $filePath = $dir . '/' . $filename;
      if (is_dir($filePath)) {
        foreach (scanAllDir($filePath) as $childFilename) {
          $result[] = $filename . '/' . $childFilename;
        }
        continue;
      }

        $result[] = $filename;
      
    }
    return $result;
  }

// @todo prepraviti direktorij
  foreach(scanAllDir("/Users/tjakopec/Downloads") as $file){
      echo $file, $b;
  }


echo "<hr />";



