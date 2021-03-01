<?php
//GET is an array
print_r($_GET);
//If you open now http://localhost/PHP_CMS_Project/demo/global_GET.php?id=11
//you get Array ( [id] => 11 )
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
    <?php
    $id=200;
    ?>
    <a href="global_GET.php?id=<?php echo $id; ?>">CLICK</a>
</body>
</html>