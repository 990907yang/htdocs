<?php
    include 'db.php';
    $sql = 'select * from board';
    $se = $pdo->prepare($sql);
    $se -> execute();
    $result = $se->fetchAll();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>yang</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>번호</th>
                <th>제목</th>
                <th>작성자</th>
            </tr>
        </thead>
        <?php
            foreach($result as $re){
        ?>
        <tr>
            <td><?=$re['idx']?></td>
            <td><a href="view.php?idx=<?=$re['idx']?>"><?=$re['title']?></a></td>
            <td><?=$re['writer']?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>