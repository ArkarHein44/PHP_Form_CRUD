<?php
require_once "./vendor/autoload.php";

use App\Controllers\StudentController;


class TestController 
{
    public function index(){
        echo "index from TestController";
    }
}

function notFound(){
    echo "404 Not Found";
}
// dd($_SERVER['PATH_INFO']);
// echo "<pre>".print_r($_SERVER, true)."</pre>";+

$routes = [
    "/index" => [StudentController::class, "index"],
    "/create" => [StudentController::class, "create"],
    "/show" => [StudentController::class, "show"],
    '/test' => [TestController::class, "index"]
];


$route = $_SERVER['PATH_INFO'];

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