<?php

//use culconnect\Config;
require_once('router.php');
// We'll first create a router instance and then register our
// static routes with the router. Next, we'll try to parse the
//request url and match it against routes in the collection.
$router = new Router;
// Add the static routes
$id =  $_SERVER["REQUEST_METHOD"];

$router->add([
  '/' => 'index.html',
    '/index' => 'index.html',
    '/signup' => 'signup.html',
]);


$request = $_SERVER['REQUEST_URI'];
//echo $request;
if (strlen($request) > 1) {
  $request = rtrim($request, '/');
  //  echo $request;
}

$view = $router->match($request);

require $view;
?>
