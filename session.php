<?php
        session_start(); //세션을 쓰겠다
        $count = 1;
        if(isset($_SESSION["count"])){
            $count=$_SESSION["count"];
            $count++;
        }
        $_SESSION["count"]=$count;
    ?>
    
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>yang</title>
</head>
<body>
    <?php
        if($count==1){
    ?>
    첫방문입니다.<br>
    <?php
    }else{
         ?>   
         조회수 : <?=$count?>
        <?php
        }
    ?>
</body>
</html>