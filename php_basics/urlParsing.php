<?php

$url = readline("Enter a URL: ");
$parsed_url= parse_url($url);
echo "Scheme: " . ($parsed_url['scheme'] ?? 'N/A') . "\n";
echo "Host: " . ($parsed_url['host']??'N/A')."\n";
echo "Path: ". ($parsed_url['path']??"N/A")."\n";
echo "Query: ". ($parsed_url['query']??"N/A")."\n";

?>