<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$x  = "outside "; //global
function scope(){
    global $x; //you need to add it within the function so you will change global function
    $x = "inside "; //local
}
echo $x;
scope();
echo $x;
?>
</body>
</html>