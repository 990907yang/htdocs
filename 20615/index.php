<?php
    include "db.php";
    $sql = "select * from board";
    $se = $pdo->prepare($sql);
    $se->execute();
    $result = $se->fetchAll();
?>
<style>
    a { text-decoration: none; color: #000; }
    a:hover { text-decoration: underline;}
    a:active { color: #000; }
    a:visite { color: #000; }
    .table { border: 1px solid #ddd;}
    th {width: 100px; height: 50px; border: 1px solid #ddd;}
    td { border: 1px solid #ddd;}
</style>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>번호</th>
                <th>제목</th>
                <th>작성자</th>
                <th>날짜</th>
                <th>조회수</th>
            </tr>
        </thead>
        <?php
            foreach($result as $re){
        ?>
        <tr>
            <td><?=$re['idx']?></td>
            <td><a class="title" href="view.php?idx=<?=$re['idx']?>"><?=$re['title']?></a></td>
            <td><?=$re['writer']?></td>
            <td><?=$re['date']?></td>
            <td><?=$re['count']?></td>
        </tr>
        <?php
            }
        ?>
    </table>
    <a href="write.php" class="button">글쓰기</a>
</body>
</html>