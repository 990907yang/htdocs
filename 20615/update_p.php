<?php
    include "db.php";
    $sql = "update board set title = '{$_POST['title']}',writer = '{$_POST['writer']}',text = '{$_POST['text']}' where idx='{$_GET{'idx'}}'";
    $go = $pdo->query($sql);
?>
<script>
    location.href = "index.php";
</script>