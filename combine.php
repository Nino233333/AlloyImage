<?php
$files = scandir("js/module/");
$contents = file_get_contents("js/psLib.js");
foreach($files as $file){
    if(preg_match("/[^\.]+\.js$/",$file)){
        $contents .= file_get_contents("js/module/".$file);
    }
}
$wfile = fopen("js/combined/psLib_com.js","w+");
if(fwrite($wfile,$contents)){
    echo "OK";
}
