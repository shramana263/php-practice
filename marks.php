<?php

$marks = readline("Enter your marks (0-100): ");

if($marks>=60 && $marks<=100){
    echo "First Division";
}
elseif($marks>=45 && $marks<60){
    echo "Second Division";

}
elseif($marks>=40 && $marks<45){
    echo "Passed without first or second division";
}
else{
    echo "Failed";
}

?>