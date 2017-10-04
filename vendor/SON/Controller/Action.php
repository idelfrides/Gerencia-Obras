<?php
/**
 * Created by PhpStorm.
 * User: franciscomatias
 * Date: 03/10/17
 * Time: 23:58
 */

namespace SON\Controller;


abstract class Action{

    protected $views;
    private $action;

    public function __construct(){

        $this->views = new \stdClass();

    }
    protected function render($action, $layout = true){
        $this->action = $action;
        if ($layout == true and file_exists("../App/Views/layout.phtml")){
                include_once "../App/Views/layout.phtml";
        }else{
            $this->content();
        }
    }
    protected function content(){

        $current = get_class($this);
        $singleClasName = strtolower((str_replace("Controller", "", str_replace("App\\Controllers\\","", $current))));
        include_once "../App/Views/".$singleClasName."/".$this->action.".phtml";
    }
}
