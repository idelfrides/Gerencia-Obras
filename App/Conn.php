<?php
/**
 * Created by PhpStorm.
 * User: franciscomatias
 * Date: 04/10/17
 * Time: 00:18
 */

namespace App;


class Conn{

    public static function getDb(){
        return new \PDO("mysql:host=localhost;dbname=gerenciaObras","root","");
    } 
    public static function getCon(){
        $con = mysqli_connect("localhost", "root", null, "gerenciaObras");
        mysqli_set_charset($con, 'utf-8');
        //verificar se houve erro de conexao
        if (mysqli_connect_errno()){
            echo 'Erro ao tentar se conectar com o Banco de Dados ß MYSQL'.mysqli_connect_error();
        }
        return $con;
    }
}