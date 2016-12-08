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
    <title>글</title>
</head>
<body>
   <?php
        foreach($result as $re){
    ?>
    <div class="header">
        <sapn>제목 : </sapn><?=$re['title']?>
        <sapn>작성자 : </sapn><?=$re['writer']?>
    </div>
    <br>
    <div class="content">
        내용 : <?=$re['text']?>
    </div>
    <div class="img">
        <img src="<?=$re['upload']?>" alt="이미지">
    </div>
    <?php
        }
    ?>
    <a href="index.php">목록</a>
    <a href="update.php?idx=<?=$re['idx']?>">수정</a>
    <a href="del.php?idx=<?=$re['idx']?>">삭제</a>
</body>
</html>