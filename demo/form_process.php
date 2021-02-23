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