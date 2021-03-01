<?php
$name = "someName";
$value = 100;
$expiration = time() + (60*60*24*7); //you set it in secont the time() shows all seconds from 1970 to now and we add a week to this
//set it to the browser
setcookie($name,$value,$expiration);

if(isset($_COOKIE['someName'])){
    print_r($_COOKIE);
    $someOne = $_COOKIE['someName'];
    echo $someOne;
} else {
    $someOne = "";
}

?>