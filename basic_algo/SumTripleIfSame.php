<?php
// Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.
// Sample Input
// 1, 2
// 3, 2
// 2, 2
// Sample Output:
// 3
// 5
// 12

$num1= readline("Enter first number:");
$num2=readline("Enter second number:");

if($num1==$num2){
    $sum=($num1+$num2)*3;
    echo "The sum is: ".$sum;
}
else{
    $sum=$num1+$num2;
    echo "The sum is: ".$sum;
}

?>