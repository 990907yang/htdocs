<?php
    include 'db.php';
    $sql = "select * from board where idx = {$_GET['idx']}";
    $se = $pdo->prepare($sql);
    $se->execute();
    $result = $se->fetchAll();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>보기</title>
</head>
<body>
    <?php
        foreach($result as $ro){
    ?>
        <div class="title"><?=$ro['title']?></div>
        <div class="name"><?=$ro['name']?></div>
        <a href="del.php?idx=<?=$ro['idx']?>">삭제</a>
        <a href="update.php?idx=<?=$ro['idx']?>">수정</a>
    <?php
        }
    ?>
</body>
</html>