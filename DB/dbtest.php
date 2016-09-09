<?php
    //mysql함수
    /*$con = mysql_connect("localhost","root","") or die("접속X"); //접속정보
    print "접속하니까 좋냐 ㅎ";
    mysql_select_db("php");                 //이렇게는 안쓴다!!
    mysql_close($con);*/


    //mysqli 함수
    /* $mysqli = new mysqli("localhost","root","","php");
    if($mysqli -> connect_error){
        die("접속하지마~");
    }
        print "동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세 무궁화 삼천리 화려강산 대한사람 대한으로 길이 보전하세.";
        $mysqli -> close();*/

    //PDO

    $pdo = new PDO("mysql:host=localhost; dbname=php; charset=utf8","root","");
    print "성공이다!";
    $pdo=null;
?>