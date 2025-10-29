<?php

//write a php script to get the last modified time of a file.
$filename= readline("Enter file name: ");
if(file_exists($filename)){
    $lastmodified_time= filemtime($filename);
    $formatted_time= date("F d Y H:i:s.", $lastmodified_time);
    echo "The file was last modified on: " . $formatted_time;
}

?>