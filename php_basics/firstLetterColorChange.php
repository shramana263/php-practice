<?php
//php script to change the color of the forst letter of every word in a string
function colroOfFirstLetter($input, $color){
    $pattern= '/\\b(\\w)/u';
        $replacement = '<span style="color:' . htmlspecialchars($color) . ';">$1</span>';
    $resultString= preg_replace($pattern,$replacement,$input);

    return $resultString;
}
$input = readline("Enter a string: ");
$color= readline("Enter color: ");
echo colroOfFirstLetter($input, $color);
?>