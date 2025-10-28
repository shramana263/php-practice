<?php

$email= readline("Enter the email id:");
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "The email id is valid";
}
else{
    echo "The email id is not valid";
}
?>