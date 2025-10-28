<?php

//Write a PHP script to display source code of a webpage (e.g. "http://www.example.com/").
$url = readline("Enter a URL: ");
$source_code = file_get_contents($url);

if($source_code!==false){
     $escaped_html = htmlspecialchars($source_code);

    // Output the escaped HTML within <pre> tags for formatting
    echo "<pre>";
    echo $escaped_html;
    echo "</pre>";
}
else{
    echo "Could not retrieve the webpage source code.";
}

?>