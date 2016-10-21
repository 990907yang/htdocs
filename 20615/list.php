<?php
    include "db.php";
    $sql = "select * from member";
    $se = $pdo->prepare($sql);
    $se->execute();
    $result = $se->fetchAll();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원정보</title>
</head>
<body>
    <table>
        <th>아이디</th>
        <th>비번</th>
        <th>이름</th>
        <th>폰넘버</th>
        <?php
            foreach($result as $row){
        ?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['pw']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['pnum']?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>