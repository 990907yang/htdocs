<?php
    include "db.php";
    $sql = "select * from board";
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
    <table>
        <th>번호</th>
        <th>제목</th>
        <th>이름</th>
       <?php
            foreach($result as $ro){
        ?>
            <tr>
                    <td><?=$ro['idx']?></td>
                    <td><a href="view.php?idx=<?=$ro['idx']?>"><?=$ro['title']?></a></td>
                    <td><?=$ro['name']?></td>
            </tr>
        <?php   
            }
        ?>
    </table>
</body>
</html>