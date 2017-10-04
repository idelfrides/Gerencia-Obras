<?php
/**
 * Created by PhpStorm.
 * User: franciscomatias
 * Date: 03/10/17
 * Time: 22:41
 */

namespace App\Controllers;


use App\Models\usuario;
use SON\Controller\Action;
use SON\DI\Container;

class IndexController extends Action {

    public function index(){

        $this->render("index",false);

    }
    public function login($request){
        session_start();

        $usuario = new usuario(null, null,$request['emailUsuario'], md5($request['senhaUsuario']));
        $usuario->validarLogin();

    }
    public function home(){
        $this->render("home");
    }
    public function cadastroUsuario(){

    }
}