<?php

namespace app\Kernel;

use app\Kernel\http\Request;
use app\Kernel\Router\Router;

class App
{
    public function run(): void
    {
        $router = new Router();
        $request = Request::createFromGlobals();

        $router->Dispatch($request->uri(), $request->method());

    }
}
