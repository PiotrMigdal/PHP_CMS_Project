<?php
$number = 16;

switch($number){
    case 33:
    echo "It is 33";
    break; //break stops executing once found the value
    case 34:
    echo "It is 34";
    break;
    case 35:
    echo "It is 35";
    break;
    case 36:
    echo "It is 36";
    break;

    //Default value if cant find it
    default:
    echo "Could not find the number";
    break;
}