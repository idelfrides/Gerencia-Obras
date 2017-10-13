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
        $routes['cadastro'] = array('route'=>'/Gerencia-Obras/public/cadastro', 'controller'=>"indexController",'action'=>'cadastroUsuario');
        $routes['logout'] = array('route'=>'/Gerencia-Obras/public/logout', 'controller'=>"indexController",'action'=>'logout');
        $routes['cadastroCliente'] = array('route'=>'/Gerencia-Obras/public/home/cadastro/cliente', 'controller'=>"homeController",'action'=>'cadastroCliente');


        $this->setRoutes($routes);
    }


}