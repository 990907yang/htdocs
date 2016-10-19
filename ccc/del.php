<?php
    include "db.php";
    //echo $_GET["ch"];
    $sql = "delete from member where idx='{$_GET['ch']}'";
    $pdo->query($sql);
?>
<script>
    location.href="list.php";
    //history.go(-1);
</script>