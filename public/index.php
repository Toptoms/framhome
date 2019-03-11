<?php
require __DIR__ . "/../vendor/autoload.php";
use \Core\Request;
use \Core\Router\Router;
use \Core\Router\Route;
$request = Request::createFromGlobals();
$router = new Router($request);
$router
    ->addRoute(new Route("index", "/index", [], \App\Controller\UsersController::class, "index"))
    ->addRoute(new Route("logout", "/logout", [], \App\Controller\UsersController::class, "logout"))
//    ->addRoute(new Route("testsFoo", "/tests/foo", [], \App\Controller\TestsController::class, "foo"))
//    ->addRoute(new Route("testsRedirection", "/tests/redirection/:param", ["param" => "[\w]+"], \App\Controller\TestsController::class, "redirection"))
//    ->addRoute(new Route("testsBar", "/tests/bar/:param", ["param" => "[\w]+"], \App\Controller\TestsController::class, "bar"))
    ->addRoute(new Route("login", "/login", [], \App\Controller\UsersController::class, "login"));

try {
    $route = $router->getRouteByRequest();
    $route->call($request, $router);
} catch (\Exception $e) {
    echo $e->getMessage();
}

/**
require __DIR__ . "/../vendor/autoload.php";
use \Core\Request;

$request = Request::createFromGlobals();

var_dump($request);

die();**/