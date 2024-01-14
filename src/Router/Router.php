<?php

namespace app\Router;

class Router
{
    public function __construct()
    {
        $this->InitRoutes();
    }

    private array $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function Dispatch(string $uri, $method): void
    {

        $route = $this->findRoute($uri, $method);

        if (is_array($route->getAction())) {
            [$controller,$action] = $route->getAction();

            $controller = new $controller();

            call_user_func([$controller, $action]);
        } else {
            $route->getAction()();
        }

    }

    private function routeIsNull($route)
    {
        if (! $route) {
            echo '404';

            return;
        }
    }

    private function findRoute(string $uri, string $method): Route|false
    {

        if (! isset($this->routes[$method][$uri])) {
            return false;
        }

        return $this->routes[$method][$uri];

    }

    private function InitRoutes()
    {
        $routes = $this->GetRoutes();

        foreach ($routes as $route) {

            $this->routes[$route->getMethod()][$route->getUri()] = $route;
        }
    }

    /**
     *@return Route[]
     */
    private function GetRoutes(): array
    {
        return require_once APP_PATH.'/src/config/routes.php';
    }
}
