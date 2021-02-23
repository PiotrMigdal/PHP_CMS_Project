<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $names = ["Edwin","Piotr","Maria"];
    $minimum = 5;
    //Data validation
    if(strlen($username) < $minimum){
        echo "Username has to be longer than " . $minimum;
    }

    if(in_array($username,$names)){
        echo "This username is used already";
    } else {
        echo "You can log in";
    }


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
    <form action="form.php" method="post">
    <input type="text" name="username" placeholder="Enter username"><br>
    <input type="password" name="password" placeholder="Enter password"><br>
    <input type="submit" name="submit">
    </form>
</body>
</html>