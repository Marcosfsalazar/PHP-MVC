<?php

namespace App;

class Connection{

    private $USER = "root";
    private $PASS = "665544";
    private $DBNAME = "Produtos";

    public function getDb(){
        try{

            $conn = new PDO(
                'mysql:host=localhost;dbname='.$DBNAME.';charset=utf8',
                $USER,
                $PASS
            );

            return $conn;

        } catch(PDOException $e){
            echo 'Erro:'.$e;
        }
    }
}

?>