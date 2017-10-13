<?php
/**
 * Created by PhpStorm.
 * User: franciscomatias
 * Date: 04/10/17
 * Time: 23:12
 */

namespace App\Controllers;


use SON\Controller\Action;
use SON\DI\Container;
class HomeController extends Action{

    /*
     *
     * Controlar o Home
     *
     */
    public function cadastroCliente(){
        $this->render("cadastroCliente");
    }
    public function formCliente($request){
         $request['nomeCliente'] = $nomeCliente;
         $request['endCliente'] = $endCliente;
         $request['empresaCliente'] = $empresaCliente;
         $request['cpfCliente'] = $cpfCliente;
         $request['emailCliente'] = $emailCliente;
         $request['telefoneCliente'] = $telefoneCliente;
    }
}