<?php
    try{
        $pdo = new PDO('mysql:host=127.0.0.1; dbname="ddd; charset=utf8;','root','');
        $pdo->set(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->set(PDO::ATTR_EMULATE_PREPARES,false);
        print "연결성공";
    }
    catch(PDOException $Exception){
        die("연결실패".$Exception->getMessage())
    }
?>
<?php
    try{
        $pdo = new PDO('mysql:host=127.0.0.1;')
    }
?>