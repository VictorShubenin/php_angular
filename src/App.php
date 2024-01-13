<?php

namespace app;

use app\http\Request;
use app\Router\Router;

class App
{
    public function run(): void
    {
        $router = new Router();
        $request = Request::createFromGlobals();

        $router->Dispatch($request->uri(), $request->method());

    }
}
