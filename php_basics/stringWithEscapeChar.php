<?php

// 2. Display Strings with Escape Characters

// Write a PHP script to display the following strings.

// Sample String :
// 'Tomorrow I \'ll learn PHP global variables.'
// 'This is a bad command : del c:\\*.*'
// Expected Output :
// Tomorrow I 'll learn PHP global variables.
// This is a bad command : del c:\*.* 
    $var = readline("Enter a string with escape characters:");
    echo $var;
?>