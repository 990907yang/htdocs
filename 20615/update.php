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
    <title>글수정</title>
</head>
<style>
    .header { border: 1px solid #ddd; width: 300px; height: 85px;  margin: 0 auto;}
    .content { border: 1px solid #ddd; width: 300px; height: 250px;  margin: 0 auto;}
    .content input { width: 270px; height: 200px; margin-left: 12px;}
    button { margin-left: 235px; }
</style>
<body>
   <?php
        foreach($result as $re){
    ?>
    <form action="update_p.php?idx=<?=$re['idx']?>" method="post">
        <div class="header">
            <span>제목</span><input type="text" name="title" value="<?=$re['title']?>"><br>
            <span>작성자</span><input type="text" name="writer" value="<?=$re['writer']?>">
        </div>
        <div class="content">
            <span>내용</span><input type="textarea" name="text" value="<?=$re['text']?>">
            <button type="submit">글쓰기</button>
        </div>
    </form>
    <?php
        }
    ?>
</body>
</html>