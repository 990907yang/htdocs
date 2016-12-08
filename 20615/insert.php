<?php
    include "db.php";
    $file = $_FILES['upload']['name'];
    $file_dir = $_SERVER['DOCUMENT_ROOT'].'\\20615\\\\up\\';
    $time = md5(microtime());
    $img_dir = "/20615/up/".$time.$file;
    $file_path = $file_dir.$time.$file;

    if($_FILES['upload']['size']<1000000){
    move_uploaded_file($_FILES['upload']['tmp_name'],$file_path);
        echo "<script>location.href='index.php';</script>";
    }else{
        echo "<script>alert('첨부파일 오류');location.href='index.php';</script>"; 
    }
    $sql = "insert into board set title='{$_POST['title']}',writer='{$_POST['writer']}',text='{$_POST['text']}',upload='{$img_dir}'";
    $go = $pdo->query($sql);
?>