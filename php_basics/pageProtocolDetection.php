<?php

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on'){
    echo "The page is running on https protocol";
}
else{
    echo "the page is running on http protocol";
}
?>