<?php

/**
 * Description of Init
 *
 * @author jerem
 * 
 */

namespace App;

class Init {

    //put your code here

    private $routes;

    public function __construct() {


        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function initRoutes() {

        $arrayRoutes = array('home' => '/', 'controller' => 'index', 'action' => 'index');
        $arrayRoutes = array('home' => '/empresa', 'controller' => 'index', 'action' => 'empresa');
        $this->setRoutes($arrayRoutes);
    }

    public function run($url) {

        array_walk($this->routes, function($route) use($url) {            
            #o erro sempre aparece aqui!!
            if ($url  == $route['route']) {
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class;
                $controller->$route['action'];
            }  
        });
    }

    public function setRoutes(array $routes) {

        $this->routes = $routes;
    }

    public function getUrl() {

        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

}
