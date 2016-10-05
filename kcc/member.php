<?php
    include_once("kccdb.php");

    $result = $pdo->query("select * from member where id='{$_POST['id']}' ")->fetch();

   echo isset($result[0]) ? "중복된 아이디입니다." : "사용하셔도 좋은 아이디입니다."; 

?>