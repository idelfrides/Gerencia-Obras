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
        $routes['inicio'] = array('route'=>'/Gerencia-Obras/public/', 'controller'=>"indexController",'action'=>'index');
        $routes['login'] = array('route'=>'/Gerencia-Obras/public/login', 'controller'=>"indexController",'action'=>'login');
        $routes['home'] = array('route'=>'/Gerencia-Obras/public/home', 'controller'=>"indexController",'action'=>'home');
        $routes['cadastroUsuario'] = array('route'=>'/Gerencia-Obras/public/cadastroUsuario', 'controller'=>"indexController",'action'=>'cadastroUsario');

        $this->setRoutes($routes);
    }


}