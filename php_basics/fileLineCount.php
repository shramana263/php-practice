<?php

//write a php script to get the count of lines in a file.

$filename= readline("Enter file name: ");
if(file_exists($filename)){
    $lines= file($filename);
    $count= count($lines);
    echo "The file has " . $count . " lines.";
}
else{
    echo "File does not exist.";
}

?>