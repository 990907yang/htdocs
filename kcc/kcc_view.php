<?php
    include "kccdb.php";
    $rs = sql("select * from member order by idx desc");

    function sql($sql){
        global $pdo;
        return $pdo->query($sql);
    }

    function fetch($sql){
        return sql($sql)->fetch();
    }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원정보 출력</title>
    <style>
        * { margin: 0; padding: 0; }
        #wrap{background: #3498db; padding-bottom: 10px; border-bottom: 1px solid #ddd; color: #fff; }
        .pw_re{font-size: 0.7em; font-weight: bold; }
    </style>
</head>
<body>
    <?php
    
    foreach($rs as $row){
            echo "<div id=wrap>";
            echo "<h1>".$row['name']."님의 회원정보</h1><br>";
            echo "이름 : ".$row['name']."<br>";
            echo "생년월일 : ".$row['year'].".".$row['month'].".".$row['day']."<br>";
            echo "ID : ".$row['id']."<br>";
            echo "PW : ".$row['password']."<br>";
            echo "휴대폰 번호 : ".$row['pnum']."<br>";
            $ok=$row['ok']==1?"동의":"거부";
            echo "SNS 수신동의 여부 : ".$ok."</br>";
            echo "주소 : ".$row['address']."<br>";
            echo "우편번호 : ".$row['add_num']."<br>";
            echo "E-mail : ".$row['email']."</br>";
            echo "</div>";
    }
    ?>
</body>
</html>