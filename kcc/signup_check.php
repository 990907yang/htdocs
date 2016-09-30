<?php
    include 'kccdb.php';
//    $sql = "INSERT INTO member ('name','year','month','day','id','password','ok','email','address') values ('{$_POST['name']}','{$_POST['year']}','{$_POST['month']}','{$_POST['day']}','{$_POST['id']}','{$_POST['password']}','{$_POST['ok']}','{$_POST['email']}','{$_POST['address']}')";

$pnum = $_POST["phone1"].$_POST["phone2"].$_POST["phone3"];
$address = $_POST["address1"].$_POST["address2"];

$sql = "insert into member set name='{$_POST["name"]}',year='{$_POST['year']}',month='{$_POST['month']}',day='{$_POST['day']}',id='{$_POST['id']}',password='{$_POST['password']}',pnum={$pnum},ok='{$_POST['ok']}',email='{$_POST['email']}',add_num='{$_POST['add_num']}',address={$address}";
    

    print $address;
    $go = $pdo->query($sql);
    echo "<form method='post' action='kcc_view.php'>"."출력하기";
    echo "<button>회원정보 확인</button>";
    echo "</form>";
?>