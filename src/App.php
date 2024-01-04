<?php

namespace app;

use app\Router\Router;

class App
{
    public function run(): void
    {
        $router = new Router();

        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        $router->Dispatch($uri, $method);

    }
}
