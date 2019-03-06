<?php
require __DIR__ . "/../vendor/autoload.php";
use \Core\Request;

$request = Request::createFromGlobals();

var_dump($request);

die();