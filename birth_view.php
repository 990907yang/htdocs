<?php
    $year = $_POST["year"];
    if($_POST["0"] != $year){
        print "당신의 생일은 ".$year."년 입니다.";
    }else{
        print "년도를 선택해주세요.";
    }
?>