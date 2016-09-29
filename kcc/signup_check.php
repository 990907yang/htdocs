<?php
    include 'kccdb.php';
//    $sql = "INSERT INTO member ('name','year','month','day','id','password','ok','email','address') values ('{$_POST['name']}','{$_POST['year']}','{$_POST['month']}','{$_POST['day']}','{$_POST['id']}','{$_POST['password']}','{$_POST['ok']}','{$_POST['email']}','{$_POST['address']}')";
    $sql = "insert into member set name='{$_POST["name"]}',year='{$_POST['year']}',month='{$_POST['month']}',day='{$_POST['day']}',id='{$_POST['id']}',password='{$_POST['password']}',ok='{$_POST['ok']}',email='{$_POST['email']}',address='{$_POST['address']}'";
    
    $go = $pdo->query($sql);
?>