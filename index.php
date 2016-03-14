<?php

session_start();

// Automatisches Laden der PHP-Dateien aus dem Verzeichnis php/
require_once __DIR__.'/autoload.php';

if(!page_load(@$_GET["page"])){
    echo "ERROR 404";
}
