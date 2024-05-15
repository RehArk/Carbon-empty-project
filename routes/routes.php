<?php

use App\controller\TestController;
use Rehark\Carbon\component\controller\DefaultController;
use Rehark\Carbon\http\method\HTTPMethods;
use Rehark\Carbon\http\router\route\DefinitionRoute;
use Rehark\Carbon\http\router\uri\DefinitionUri;

$this->addRoute(new DefinitionRoute(
    new DefinitionUri('/'), 
    HTTPMethods::GET,
    DefaultController::class,
    'serverStatus'
));

$this->addRoute(new DefinitionRoute(
    new DefinitionUri('/test'), 
    HTTPMethods::GET,
    TestController::class,
    'test'
));

$this->addRoute(new DefinitionRoute(
    new DefinitionUri('/test2'), 
    HTTPMethods::GET,
    TestController::class,
    'test2'
));

$this->addRoute(new DefinitionRoute(
    new DefinitionUri('/test3'), 
    HTTPMethods::GET,
    TestController::class,
    'test3'
));