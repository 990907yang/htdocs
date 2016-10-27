<?php
    include "db.php";
    $sql = "delete from board where idx='{$_GET['idx']}'";
    $pdo->query($sql);
?>
<script>
    location.href="board.php";
</script>