<?php

    $host="mysql:dbname=login;host=localhost";
    $user="root";
    $password="HeLlo1324";
   

    try {
        $pdo=new PDO($host,$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
        //echo "Conectado..";
    } catch (PDOException $e) {
       echo "Conexion Mala :( ".$e->getMessage();
    }
    
    
?>