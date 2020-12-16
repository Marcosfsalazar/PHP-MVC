<?php

namespace app\Models;
use \PDO;

class Produto{
    protected $db;

    public function __construct(PDO $db){
        $this->db = $db;
    }

    public function getProdutos(){
        
    }
}

?>