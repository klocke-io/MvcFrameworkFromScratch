<?php

spl_autoload_register(function ($class){
    //Get the parent directory
    $root = dirname(__DIR__);
    $path = $root .'\\'.$class . '.php';
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
    if(file_exists($path)){
        require_once $path;
    }
});
