<?php
/**
 * Created by PhpStorm.
 * User: franciscomatias
 * Date: 03/10/17
 * Time: 21:48
 */
namespace App;

use SON\Init\Bootstrap;

class Route extends Bootstrap {

    protected function initRoutes(){
        $routes['home'] = array('route'=>'/Gerencia-Obras/public/', 'controller'=>"indexController",'action'=>'index');
        $this->setRoutes($routes);
    }


}