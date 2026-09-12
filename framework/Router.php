<?php
namespace Framework;
use Framework\Middleware\Middleware;
class Router
{
    protected $routes = [];


    public function __construct()
    {
        $this->loadRoutes('Web');
    }

    public function get(string $uri, array $action, string |null $middleware = null)
    {
        $this->routes['GET'][$uri] = [
            'action' => $action,
            'middleware' => $middleware
        ];
    }

    public function put(string $uri, array $action, string |null $middleware = null)
    {
        $this->routes['PUT'][$uri] = [
            'action' => $action,
            'middleware' => $middleware
        ];
    }

    public function post(string $uri, array $action, string |null $middleware = null)
    {
        $this->routes['POST'][$uri] = [
            'action' => $action,
            'middleware' => $middleware
        ];
    }


    public function delete(string $uri, array $action, string |null $middleware = null)
    {
        $this->routes['DELETE'][$uri] = [
            'action' => $action,
            'middleware' => $middleware
        ];
    }



    public function run()
    {
       /*  echo 'Router running...'; */


        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD']; //GET, POST, DELETE
        $action = $this->routes[$method][$uri]['action'] ?? null;

      /*   echo '<pre>';
        var_dump($this->routes);
        die();
        //Aca verifico cuales son los posts y los gets que tengo en el array de rutas y si no existe la ruta que estoy buscando me tira un error 404
 */
        if (!$action) {
            exit('Route not found' . $method . ' ' . $uri);
        }
        $middleware = $this->routes[$method][$uri]['middleware'] ?? null;
        if ($middleware) {
            Middleware::run(new $middleware());
            //(new $middleware())();
/*                 $middlewareInstance = new $middleware();
                $middleware(); */
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