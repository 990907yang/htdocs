<?php
    include 'db.php';
    $sql = 'select * from board';
    $se = $pdo->prepare($sql);
    $se -> execute($sql);
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
        <tbody>
            <thead>
                <th>순번</th>
                <th>제목</th>
                <th>작성자</th>
            </thead>
            <tr>ㅁ</tr>
            <tr>ㄴ</tr>
            <tr>ㅇ</tr>
            <tr>ㄹ</tr>
        </tbody>
    </table>
</body>
</html>