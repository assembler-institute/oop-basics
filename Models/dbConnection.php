<?php



//Concection to DataBase
function connectionDB(){
    try{
        $connection = "mysql:host=" . dbHost . ";" . "dbname=" . dbName . ";" . "charset=" . dbCharset. ";";

        $pdo= new PDO($connection, dbUser, dbPassword);

        return $pdo;

    }catch (PDOException $e){
        $errorMs = $e;
        require_once (VIEWS. "/error.php");
    }
};




?>