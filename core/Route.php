<?php

namespace App\Core;

class Route 
{
    protected $routes =[
        'GET' => [],
        'POST' => [],
    ];

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }
    
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public static function load($file)
    {
        $router = new static;
       
        require $file;

        return $router;   
    }

    public function direct($uri, $requestType)
    {
        // die(var_dump($uri, $requestType));

        if( array_key_exists($uri, $this->routes[$requestType])){
            // return $this->routes[$requestType][$uri];

            // PagesController@home
            // die($this->routes[$requestType][$uri]);
            
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        throw new Exception('No route defined for this URI');
    }

    protected function callAction($controller, $action)
    {
        // die(var_dump($controller,$action));

        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;
        
        if(!method_exists($controller, $action)){
            throw new Exception (
                '{$controller} is not respond to the {$action} action.'
            );
        }
        return $controller->$action();
    }
}