<?php

$var = readline("Enter the speed of the car (in km/h): ");
if($var<=60){
    echo "The car is at safe driving speed.";
}
elseif($var>60 && $var<100){
    echo "You're burning extra fuel";
}
else{
    echo "it's dangerous speed! Slow down!";
}
?>