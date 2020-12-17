<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action{

    public function index(){

        $conn = Connection::getDb();

        $produto = new Produto($conn);
        
        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;

        $this->render("index","baseLayout");
    }

    public function sobreNos(){

        $conn = Connection::getDb();

        $info = new Info($conn);
        
        $infos = $info->getInfo();

        $this->view->dados = $infos;

        $this->render("sobre_nos","baseLayout");
    }
}

?>