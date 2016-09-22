<?php
    try{
        $pdo = new PDO('mysql:host=localhost; dbname=kcc; charset=utf8','root',"");
        print '연결성공<br>';
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    }
    catch(PDOException $Exception){
        die('연결실패:'.$Exception->getMessage());
    }
?>