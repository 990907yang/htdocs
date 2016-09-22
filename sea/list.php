<?php
    include 'kccdb.php';                //완전한 검색어가 아닌 것을 쳐도 나올때 like를 쓴다 완전히 일치한걸 찾을때는 =
    $search ='%'.$_POST["search"].'%';      //밑에것들을 쓰기 위해서 %라는 키워드를 넣어줌.
    $sql = "select * from member where last_name LIKE :last_name or first_name LIKE :first_name";
    $stmh = $pdo->prepare($sql);        //보안강화

    $stmh->bindvalue(':last_name',$search,PDO::PARAM_STR);
    $stmh->bindvalue(':first_name',$search,PDO::PARAM_STR);

    $stmh->execute();

    $count = $stmh->rowcount();        //해당되는 줄의 갯수를 알려줌?
    print $count."건입니다.";
?>