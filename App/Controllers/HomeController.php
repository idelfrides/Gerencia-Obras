<?php
/**
 * Created by PhpStorm.
 * User: franciscomatias
 * Date: 04/10/17
 * Time: 23:12
 */

namespace App\Controllers;


use App\Models\Cliente;
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
        $nomeCliente = $request['nomeCliente'];
        $endCliente = $request['endCliente'];
        $empresaCliente = $request['empresaCliente'];
        $cpfCliente = $request['cpfCliente'];
        $emailCliente = $request['emailCliente'];
        $telefoneCliente = $request['telefoneCliente'];

        $cliente  = new Cliente($nomeCliente, $endCliente, $empresaCliente, $cpfCliente, $emailCliente, $telefoneCliente);
        $cliente->cadastroCliente();


    }
}