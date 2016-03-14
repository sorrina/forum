<?php

foreach(glob("php/*.php") as $php_file){
    require_once $php_file;
}
