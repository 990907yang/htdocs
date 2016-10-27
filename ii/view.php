<?php
    include "db.php";
    $sql = "select * from board where idx='{$_GET['idx']}'";
    $se = $pdo->prepare($sql);
    $se->execute();
    $result = $se->fetchAll();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>게시글</title>
</head>
<body>
   <?php
        foreach($result as $ro){
    ?>
        <div class="title"><?=$ro['title']?></div>
        <div class="content"><?=$ro['content']?></div>
    <?php
    }
    ?>
    <a href="del.php?idx=<?=$ro['idx']?>">삭제</a>
</body>
</html>
