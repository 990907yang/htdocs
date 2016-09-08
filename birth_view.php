<?php
    $year = $_POST["year"];
    if(isset($year)){
        print "당신의 생일은 ".$year."년 입니다.";
    }else{
        print "년도를 선택해주세요.";
    }
?>