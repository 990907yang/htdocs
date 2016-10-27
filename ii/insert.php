<?php
    include "db.php";
    $sql = "insert into board set writer='{$_POST['writer']}',title='{$_POST['title']}',content='{$_POST['content']}'";
    $pdo->query($sql);
?>
<script>
    location.href="board.php";
</script>