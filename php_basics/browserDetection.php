<?php
$user_agent= $_SERVER['HTTP_USER_AGENT'];
if(strpos($user_agent,"Firefox")!== false){
    echo "You are using Firefox browser";
}
elseif(strpos($user_agent,"Chrome")!==false){
    echo "You are using Chrome Browser";
}
elseif(strpos($user_agent,"MSIE")!==false || strpos($user_agent,"Trident")!==false){
    echo "You are using Internet Explorer";
}
else{
    echo "Browser not detected";
}
?>