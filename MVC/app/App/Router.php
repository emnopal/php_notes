<?php

namespace Badhabit\Mvc\App;

class Router
{

    /*
    -   Saat kita membuat Router, kita perlu memberi tahu Router
        tentang pasangan antara PATH_INFO dan Controller yang akan dieksekusi
    -   Selain itu, kita juga bisa memberi tahu HTTP Method mana yang
        dibolehkan untuk mengakses PATH_INFO tersebut
     */

    private static array $routes = [];

    // Add mapping url
    public static function add(string $method, string $path, string $controller, string $function, array $middleware = []): void {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
            'middleware' => $middleware
        ];
    }

    // Run the router
    public static function run(): void {
        // Default path
        $path = '/';

        // if PATH_INFO not empty
        isset($_SERVER['PATH_INFO']) ? $path = $_SERVER['PATH_INFO'] : $path = '/';
        $method = $_SERVER['REQUEST_METHOD'];

        // Loop routes
        foreach (self::$routes as $route) {
            // Regex patter
            $pattern = '#^' . $route['path'] . '$#';
            // Check if route match
            if (preg_match($pattern, $path,$variables) && $method == $route['method']) {
                $controller = new $route['controller'];
                $function = $route['function'];

                // call middleware
                foreach ($route['middleware'] as $middleware) {
                    $middlewares = new $middleware;
                    $middlewares->before();
                }

                array_shift($variables);
                call_user_func_array([$controller, $function], $variables);
                return;
            }
        }

        // If error, show 404
        http_response_code(404);
        echo "Controller not found";
    }

}