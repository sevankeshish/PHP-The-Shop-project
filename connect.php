<?php
$server="localhost";
$user="root";
$pass="";
$dbname="marketdb";

$dsn="mysql:host=$server;dbname";
    try{
    $connect=new PDO($dsn,$user,$pass);
    $connect->exec("SET character_set_connection = 'utf8'");
    $connect->exec("SET NAMES 'UTR8'");
    } catch (Exception $error) {

        echo "unable to connect".$error->getMessage();
    }
    
    ?>

