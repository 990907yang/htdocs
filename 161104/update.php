<?php
    include "db.php";
    $sql = "select * from board where idx={$_GET['idx']}";
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
                <form action="up.php?idx=<?=$ro['idx']?>" method="post">
                    <span>제목</span><input name="title" type="text" value="<?=$ro['title']?>">
                    <span>작성자</span><input name="name" type="text" value="<?=$ro['name']?>">
                    <button type="submit">수정완료</button>
                </form>
            <?php
                }
            ?>
</body>
</html>