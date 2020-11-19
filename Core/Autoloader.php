<?php

echo "Autoloader loaded" . PHP_EOL;
spl_autoload_register(function ($class){
    $path = "..\\" . $class . '.php';
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
    echo "Core:" . PHP_EOL;
    var_dump($path);
    if(file_exists($path)){
        require_once $path;
    }
});

spl_autoload_register(function ($class){
    $path = '..\\' . $class . '.php';
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
    echo "App:" . PHP_EOL;
    var_dump($path);
    if(file_exists($path)){
        require_once $path;
    }
});

