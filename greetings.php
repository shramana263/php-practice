<?php

date_default_timezone_set('Asia/Kolkata');

$now = date('H');
$greeting='';

if ($now >= 5 && $now < 12) {
    $greeting = "Good Morning!";
    echo $greeting;
} elseif ($now >= 12 && $now < 17) {
    $greeting = "Good Afternoon!";
    echo $greeting;
} elseif ($now >= 17 && $now < 21) {
    $greeting = "Good Evening!";
    echo $greeting;
} else {
    $greeting = "Good Night!";
    echo $greeting;
}

?>