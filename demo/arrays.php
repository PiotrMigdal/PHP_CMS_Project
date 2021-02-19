<?php

$numberList = array(1,2,3,4,5,'<h1>6</h1>');
// or
$numberList = [1,2,3,4,5,'<h1>6</h1>'];
echo $numberList[2];
print_r($numberList);

//Constant Array
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];