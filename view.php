<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        //_POST 슈퍼전역변수
        print $_POST["onname"]."님 환영합니다.<br>";
        print "사용자의 이메일은".$_POST["email"]."입니다.";
        print "비밀번호는 ".$_POST["passw"]."입니다.";
        //textbox에서 엔터를 칠수있게 한다 == nl2br
        print nl2br($_POST["honbun"]);
    
    
    
        if(isset($_POST["hobby"])){
            $hobby = implode('와 ',$_POST["hobby"]);
            print "저의 취미는 ".$hobby."입니다";
        }else{
            print "저의 취미는 없습니다.";
        }
    ?>
</body>
</html>