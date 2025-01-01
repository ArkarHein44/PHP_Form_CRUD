<?php

use App\Controllers\StudentController;

function notFound(){
    echo "404 Not Found";
}

$routes = [
    "/index" => [StudentController::class, "index"],
    "/create" => [StudentController::class, "create"],
    "/show" => [StudentController::class, "show"],
    "/store" => [StudentController::class, "store"],
    "/edit" => [StudentController::class, "edit"],
    "/update" => [StudentController::class, "update"],
    "/destroy" => [StudentController::class, "destroy"]
];

$route = $_SERVER["PATH_INFO"];

if(array_key_exists($route, $routes)){
    $controller = $routes[$route][0];
    $method = $routes[$route][1];
}else{
    notFound();
    die();
}

$home = new $controller();
$home->$method();


?>