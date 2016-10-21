<?php
    include "db.php";

    $sql = "insert into member set id='{$_POST['id']}', pw='{$_POST['pw']}', name='{$_POST['name']}', pnum='{$_POST['pnum']}'";

    $go = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원가입</title>
</head>
<body>
    <form action="list.php">
        <button type="submit">회원정보 관리</button>
    </form>
</body>
</html>