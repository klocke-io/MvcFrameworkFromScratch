<?php

require "../Core/Router.php";

//ToDo Git Init!!

$Router = new \Core\Router();
$Router->addRout('Index', ['controller' => 'Index', 'action' => 'indexAction']);
$Router->addRout('Post', ['controller' => 'Post', 'action' => 'indexAction']);

$url = $_SERVER['QUERY_STRING'];
var_dump($url);
if($Router->match($url)){
    var_dump($Router->getParams());
    var_dump($Router->getRoutes());
} else {
    echo "Route not found";
}
