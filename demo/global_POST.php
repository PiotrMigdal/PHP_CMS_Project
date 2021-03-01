<?php

//POST is a string too
print_r($_POST);
if(isset($_POST['name'])){
    echo $_POST['name'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="global_POST.php" method="POST">
    <input type="text" name="name">
    <input type="submit">
    </form>
</body>
</html>