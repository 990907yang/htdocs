<?php
    include "db.php";
    $sql = "update board set title='{$_POST['title']}', name='{$_POST['name']}' where idx='{$_GET['idx']}'";
    $go = $pdo->query($sql);
?>
<script>
    location.href='list.php';
</script>