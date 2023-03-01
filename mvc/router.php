<?php

declare(strict_types=1);

namespace App;

class Router
{
    public array $routes;

    public function register(string $requestMethod, string $route, callable|array $action): self
    {
        $this->routes[$requestMethod][$route] = $action;

        return $this;
    }

    public function get(string $route, callable|array $action): self
    {
        return $this->register('get', $route, $action);
    }
    public function post(string $route, callable|array $action): self
    {
        return $this->register('post', $route, $action);
    }

    public function routes(): array
    {
        return $this->routes;
    }

    # [REQUEST_URI] = /contact?foo=bar
    # [REQUEST_URI] = /user?id=1
    public function resolve($requestUri, string $requestMethod)
    {
        $route = explode('?', $requestUri)[0]; // /contact lub /user
        $action = $this->routes[$requestMethod][$route] ?? null;

        if (!$action) {
            //throw new JakisException();
        }

        //bez tego metody w kontrolerach muszą być statyczne
        if (is_callable($action)) {
            return call_user_func($action);
        }
        if (is_array($action)) {
            [$class, $method] = $action;

            if (class_exists($class)) {
                $class = new $class();

                if (method_exists($class, $method)) {
                    return call_user_func_array([$class, $method], []);
                }
            }
        }
        //throw new JakisException();
    }
}