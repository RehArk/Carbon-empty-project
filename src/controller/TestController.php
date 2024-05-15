<?php

namespace App\controller;

use Rehark\Carbon\component\controller\AbstractController;
use Rehark\Carbon\http\response\FileResponse;
use Rehark\Carbon\http\response\JsonResponse;
use Rehark\Carbon\http\response\Response;

class TestController extends AbstractController {
    
    public function test() {
        return new Response(200, 'All ok !');
    }

    public function test2() {
        return new JsonResponse(200, ["data" => ["data-1", "data-2"]]);
    }

    public function test3() {
        return new FileResponse(ROOT . '/' . 'src/controller/TestController.php');
    }

}