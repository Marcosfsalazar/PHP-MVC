<?php

namespace App;
use \PDO;

class Connection{


    public static function getDb(){
        include("/var/www/html/config.php");
        try{

            $conn = new PDO(
                "mysql:host=localhost:3306;dbname=Produtos;charset=utf8",
                $dbUser,
                $dbPass
            );

            return $conn;

        } catch(\PDOException $e){
            
        }
    }
}

?>