<?php
    include "db.php";

    //파일업로드
    $file = $_FILES['upload']['name'];
    //print_r ($file);
    //print_r ($_SERVER);
    $file_dir = $_SERVER['DOCUMENT_ROOT'].'\\fileupload\\\\up\\';
    //print ($file_dir);
    $time = md5(microtime());
    $file_path = $file_dir.$time.$file;
    //print ('file_path');
    if($_FILES['upload']['size']<1000000){
    move_uploaded_file($_FILES['upload']['tmp_name'],$file_path);
        echo "<script>location.href='sub1.php';</script>";
    }else{
        echo "<script>alert('첨부파일 용량초과');location.href='sub1.php';</script>";
    }
    $sql = "insert into board set title='{$_POST['title']}',writer='{$_POST['writer']}',content='{$_POST['content']}',upload='{$file_path}'";
    $go = $pdo->query($sql);
?>