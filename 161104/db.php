<?php
    try{
    $pdo = new pdo('mysql:host=127.0.0.1; dbname=test1104; charset=utf8;','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    }catch(PDOException $Exception){
        die('연결실패'.$Exception->getMessage());
    }
?>