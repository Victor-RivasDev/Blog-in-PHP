<?php

class Router
{
    protected $routes = [];


    public function __construct()
    {
        $this->loadRoutes('Web');
    }

    public function get($uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function put($uri, $action)
    {
        $this->routes['PUT'][$uri] = $action;
    }

    public function post($uri, $action)
    {
        $this->routes['POST'][$uri] = $action;
    }


    public function delete($uri, $action)
    {
        $this->routes['DELETE'][$uri] = $action;
    }



    public function run()
    {
       /*  echo 'Router running...'; */


        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD']; //GET, POST, DELETE

        $action = $this->routes[$method][$uri] ?? null;

      /*   echo '<pre>';
        var_dump($this->routes);
        die();
        //Aca verifico cuales son los posts y los gets que tengo en el array de rutas y si no existe la ruta que estoy buscando me tira un error 404
 */
        if (!$action) {
            exit('Route not found' . $method . ' ' . $uri);
        }

        [$controller, $method] = $action;
        (new $controller)->$method();
    }

    protected function loadRoutes(string $file)
    {
        $router = $this;
        $filepath = __DIR__ . '/../routes/' .$file . '.php';
        require $filepath;
    }
}