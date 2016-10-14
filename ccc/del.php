<?php
    include "db.php";
    $sql = "delete from member where idx='{$_POST['idx']}'";
    $pdo->query($sql);
?>
<script>
    //location.href="list.php";
    history.go(-1);
</script>