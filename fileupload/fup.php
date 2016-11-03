<?php
    $file = $_FILES['upload']['name'];
    print_r ($file);
    //print_r ($_SERVER);
    $file_dir = $_SERVER['DOCUMENT_ROOT'].'\\fileupload\\\\up\\';
    //print ($file_dir);
    $time = md5(microtime());
    $file_path = $file_dir.$time.$file;

    //print ('file_path');
    
    if($_FILES['upload']['size']<100000){
        move_uploaded_file($_FILES['upload']['tmp_name'],$file_path);
        echo "<script>location.href='file_up.php';</script>";
    }else{
        echo "<script>alert('용량초과');</script>";
    }
?>