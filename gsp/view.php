<?php
    include "db.php";
    $sql = "select * from board where idx = '{$_GET['idx']}'";
    $se = $pdo->prepare($sql);
    $se->execute();
    $result = $se->fetchAll();
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>글</title>
</head>
<body>
   <?php
        foreach($result as $re){
    ?>
    <div class="title"><span>제목 : <?=$re['title']?></span></div>
    <div class="writer"><span>글쓴이 : <?=$re['writer']?></span></div>
    <div class="tex"><span>내용 :<?=$re['content']?></span></div>
    <?php
        }
    ?>
    <a href="gsp.php">목록</a>
    <a href="update.php">수정</a>
    <a href="del.php">삭제</a>
</body>
</html>