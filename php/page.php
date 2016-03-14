<?php

function page_load($name = null, $template = "main"){
    if($name === null){
        $name = "home";
    }
    $path = "pages/$name.php";
    $content = "";
    $success = false;
    if(file_exists($path)){
        ob_start();
        include($path);
        $content = ob_get_contents();
        ob_end_clean();
        $success = true;
    }
    include("templates/$template.php");
    return $success;
}
