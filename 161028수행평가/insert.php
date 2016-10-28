<?php
    include "db.php";
    $sql = "insert into board set title='{$_POST['title']}',writer='{$_POST['writer']}',content='{$_POST['content']}'";
    $go = $pdo->query($sql);
?>
<script>
    location.href="sub1.php";
</script>