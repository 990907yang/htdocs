<?php
    include "db.php";
    $a = $_POST['ch'];
    foreach($a as $b){
        //print_r ($b);
        $sql = "delete from member where idx='{$b}'";
        $pdo->query($sql);
    }
?>
<script>
    location.href="list.php";
    //history.go(-1);
</script>