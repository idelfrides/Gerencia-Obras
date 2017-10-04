<?php
/**
 * Created by PhpStorm.
 * User: franciscomatias
 * Date: 03/10/17
 * Time: 23:08
 */

namespace SON\Init;


use SON\DI\Container;

abstract class Bootstrap{

    private $routes;

    public function __construct(){
        $this->initRoutes();
        $this->run($this->getUrl());
    }
    abstract  protected function initRoutes();
    protected function run($url){
        $found = false;
        foreach($this->routes as $route){

            if ($url == $route['route']){
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
                $found = true;
                break;
            }

        }
        if ($found === false){
            Container::pageNotFound();
        }


    }
    protected function setRoutes(array $routes){
        $this->routes = $routes;
    }
    protected function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

}