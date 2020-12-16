<?php

namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action{

    public function index(){
        $this->render("index","baseLayout");
    }

    public function sobreNos(){
        $this->render("sobre_nos","baseLayout");
    }
}

?>