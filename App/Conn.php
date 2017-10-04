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
    
}