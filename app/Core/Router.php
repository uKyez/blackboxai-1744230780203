<?php
namespace App\Core;

class Router
{
    protected $routes = [];
    protected $currentRoute;

    public function __construct()
    {
        $this->loadRoutes();
    }

    protected function loadRoutes()
    {
        $this->routes = [
            'GET' => [
                'login' => [
                    'controller' => 'AuthController',
                    'action' => 'login'
                ],
                'register' => [
                    'controller' => 'AuthController',
                    'action' => 'register'
                ]
            ],
            'POST' => [
                'login' => [
                    'controller' => 'AuthController',
                    'action' => 'handleLogin'
                ],
                'register' => [
                    'controller' => 'AuthController',
                    'action' => 'handleRegister'
                ]
            ],
            'PUT' => [],
            'DELETE' => []
        ];
    }

    public function dispatch()
    {
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        $method = $_SERVER['REQUEST_METHOD'];
        
        error_log("Current routes: " . print_r($this->routes, true));
        error_log("Looking for: $method $uri");

        if (isset($this->routes[$method][$uri])) {
            $this->currentRoute = $this->routes[$method][$uri];
            $this->callAction();
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }

    protected function callAction()
    {
        $controller = $this->currentRoute['controller'];
        $action = $this->currentRoute['action'];
        $controllerClass = "App\\Controllers\\{$controller}";

        if (class_exists($controllerClass) && method_exists($controllerClass, $action)) {
            $controllerInstance = new $controllerClass();
            $controllerInstance->$action();
        } else {
            throw new \Exception("Controller or action not found");
        }
    }

    public function addRoute($method, $uri, $controller, $action)
    {
        $this->routes[$method][$uri] = [
            'controller' => $controller,
            'action' => $action
        ];
    }
}
