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
    //Funcao para renderizar o layout do index
    public function index(){

        $this->render("index",false);

    }
    //Funcao para validar o login e criar as variaveis da sessao
    public function login($request){

        session_start();

        $usuario = new usuario(null, null,$request['emailUsuario'], md5($request['senhaUsuario']));
        $usuario->validarLogin();

    }
    //funcao para rendenrizar o layout de home
    public function home(){
        $this->render("home");
    }
    //funcao para cadastro de usuario
    public function cadastroUsuario($request){

        //Criando hash da senha
        $request['senhaCadastro'] = md5($request['senhaCadastro']);
      
        $usuario = new usuario(0,$request['nomeCadastro'], $request['emeilRecovery'], $request['senhaCadastro'], $request['endCadastro'], $request['cpfCadastro'], $request['empresaCadastro'], $request['nivelAcesso']);
        $usuario->cadastro();

    }
    //Funcao para logout
    public function logout(){
        session_start();

        $usuario = new usuario();
        $usuario->logout();
    }
}
