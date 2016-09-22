<?php
    try{
        $pdo = new PDO('mysql:host=localhost; dbname=kcc; charset=utf8','root',"");
        print '성공이야 축하해!<br>';
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    }
    catch(PDOException $Exception){
        die('접속오류:'.$Exception->getMessage());
    }
?>