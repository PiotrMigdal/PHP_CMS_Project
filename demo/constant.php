<?php
$x = 1321;
$x = 1112;

//Constant - you can't change the value of constant
define("NUMBER", 1000); //old syntax
const WORD = "Hello"; //new way to declare constant

echo $x . "<br>";
echo NUMBER . "<br>";
echo WORD . "<br>";

//Array constant
const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; // outputs "cat"


?>