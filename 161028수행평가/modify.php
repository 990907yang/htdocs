<?php
    include "db.php";
    $sql = "update board set title='{$_POST['title']}',writer='{$_POST['writer']}',content='{$_POST['content']}' where idx='{$_GET['idx']}'";
    $go = $pdo->query($sql);
?>

<script>
    location.href="sub1.php";
</script>