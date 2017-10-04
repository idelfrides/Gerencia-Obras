<?php
/**
 * Created by PhpStorm.
 * User: franciscomatias
 * Date: 04/10/17
 * Time: 00:45
 */

namespace SON\DI;


use App\Conn;

class Container{

    public static function getModel($model){

        $class = "\\App\\Models\\".ucfirst($model);
        return new $class(Conn::getDb());

    }

    public static function pageNotFound(){
        if (file_exists("../App/Views/404.phtml")){
            require_once "../App/Views/404.phtml";
        }else{
            echo'Erro 404 page not found';
        }
    }

}