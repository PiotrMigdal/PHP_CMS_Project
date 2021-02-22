<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>While</h1>
<?php
    $counter = 1;
    while($counter < 10) {
        echo $counter . " while<br>";
        //$counter = $counter + 1;
        //or
        //$counter++; //increase by 1
        //or
        $counter += 2; //increase by 2 or other number
    }
?>
    <h1>For</h1>
<?php
    for($counter = 0; $counter < 10; $counter++){
        echo $counter . " for<br>";
    }
?>
    <h1>Foreach</h1>
<?php
    $numbers = [23423, 2342, 534, 475, 5464, 1231];
    foreach($numbers as $number){
        echo $number . "<br>";
    }
?>
</body>
</html>