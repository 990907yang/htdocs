<?php
    include "db.php";
    $sql = "insert into board set 
    title='{$_POST['title']}',
    writer='{$_POST['writer']}',
    tex='{$_POST['tex']}'";
    $go = $pdo->query($sql);
?>