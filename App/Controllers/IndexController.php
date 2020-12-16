<?php

namespace App\Controllers;

class IndexController{

    private $view;

    public function __construct(){
        $this->view = new \stdClass();
    }

    public function index(){
        $this->render("index");
    }

    public function sobreNos(){
        $this->render("sobre_nos");
    }

    public function render($view){
        $class = get_class();
        $class = str_replace('App\\Controllers\\','',$class);
        $class = strtolower(str_replace('Controller','',$class));
        require_once("/var/www/html/miniframework/App/Views/".$class."/".$view.".phtml");
    }
}

?>