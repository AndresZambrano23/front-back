<?php

    function Conexion(){
        $servidor= "mysql:dbname=restaurante;host=localhost";
        $usuario= "root";
        $password= "";
    
        try{
            $pdo = new PDO($servidor,$usuario,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
            //echo "Conexion Exitosa";
        }catch(PDOException $e){
            echo "Error al ingresar a la base de datos".$e->getMessage();
        }
    
        return $pdo;
    }

