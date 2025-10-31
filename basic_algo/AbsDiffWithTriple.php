<?php
// Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference.
// Sample Input:
// 53
// 30
// 51
// Sample Output:
// 6
// 21
// 0
$num= readline("Enter a number: ");
if($num>51){
    $diff=($num-51)*3;
    echo "The absolute difference is: ".$diff;
}else{
    $diff= 51-$num;
    echo "The absolute difference is: ".$diff;
}


?>