<?php
require("test.txt");

$fs = fopen("test.txt","r");
readfile("test.txt");
echo "<br>";

while ( $line = fgets($fs) ){
  echo $line . "<br>";
}



fclose($fs);