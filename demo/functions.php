<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
<h1>Single function</h1>
<?php
function say_something(){
    echo "Php is simillar to javascript<br>";
}
say_something();
?>
<h1>Passing parameters</h1>
<?php
function greetings($message){
    echo $message;
}
greetings("Have a good live<br>");
?>
<h1>Return values</h1>
<?php
function addNumbers($num1, $num2){
    $sum = $num1 + $num2;
    return $sum;
}
$result = addNumbers(31,234);
echo $result;
?>
</body>
</html>