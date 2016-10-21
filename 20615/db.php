<?php
    try{
        $pdo = new PDO("mysql:host=127.0.0.1; dbname=test1; charset=utf8;","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        print "연결성공";
    }catch(PDOException $Exception){
        die("연결실패".$Exception->getMessage());
    }
?>