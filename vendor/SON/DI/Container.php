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

}