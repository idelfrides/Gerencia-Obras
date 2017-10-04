<?php
/**
 * Created by PhpStorm.
 * User: franciscomatias
 * Date: 03/10/17
 * Time: 22:41
 */

namespace App\Controllers;


use SON\Controller\Action;
use SON\DI\Container;

class IndexController extends Action {

    public function index(){
        /*
        $usuario = Container::getModel("usuario");

        $this->views->usuario = $usuario->fetchAll();
        */
        $this->render("index",false);

    }
    public function login(){

        var_dump($request->post());

    }


}