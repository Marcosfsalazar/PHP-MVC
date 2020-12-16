<?php

namespace MF\Controller;

abstract class Action{

    protected $view;

    public function __construct(){
        $this->view = new \stdClass();
    }

    protected function render($view){
        $class = get_class($this);
        $class = str_replace('App\\Controllers\\','',$class);
        $class = strtolower(str_replace('Controller','',$class));
        require_once("../App/Views/".$class."/".$view.".phtml");
    }

}

?>