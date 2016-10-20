<?php
    include "db.php";
    $sql = "select * from member";  //member 테이블 선택
    $se = $pdo->prepare($sql);  //
    $se -> execute();
    $result = $se->fetchAll();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원정보</title>
    <style>
        *{ margin: 0; padding: 0; box-sizing: border-box; }
        table, th, td { margin: auto; margin-top: 100px; padding: 15px; border-spacing: 0; text-align: center; font-size: 15px; color: white; }
        th {background-color: #c0392b; }
        tr { background-color: #e74c3c; }
        .btn { background-color: #c0392b; border: none; color: white;
    padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; transition: 1s; }
        .btn:hover { opacity: 0.4; transition: 0.5s; }
    </style>
    <script src="../kcc/jquery.js"></script>
</head>
<body>
 <form action="del.php" method="post">
  <table> 
  <th><input type="checkbox" class="chall"></th>
  <th>번호</th>
  <th>이름</th>
  <th>생년</th>
  <th>월</th>
  <th>일</th>
  <th>아이디</th>
  <th>비밀번호</th>
  <th>전화번호</th>
  <th>sns동의</th>
  <th>이메일</th>
  <th>우편번호</th>
  <th>주소</th>
  <?php
   foreach($result as $row){
       ?>
       <tr>
           <td><input class="cbox" type="checkbox" value="<?=$row['idx']?>" name='ch[]'></td>
           <input type="hidden">
           <td><?=$row['idx']?></td>
           <td><?=$row['name']?></td>
           <td><?=$row['year']."년"?></td>
           <td><?=$row['month']." 월 "?></td>
           <td><?=$row['day']." 일"?></td>
           <td><?=$row['id']?></td>
           <td><?=$row['password']?></td>
           <td><?=$row['pnum']?></td>
           <td><?=$row['ok']?></td>
           <td><?=$row['email']?></td>
           <td><?=$row['add_num']?></td>
           <td><?=$row['address']?></td>
       </tr>
    <?php
   }
      ?>
       <button type="submit" class="btn">회원정보 삭제</button>
       <a href="update.php" class="btn">회원정보 수정</a>
  </table>
</form>  
</body>
<script>
//    $("chall"),click(function(){
//        $(".cbox").each(function(){
//            if(this.checked){
//                $(this).attr("checked",true);
//            }else{
//                $(this).attr("checked",false);
//            }
//        })
//    });
    $(".chall").click(function(){
        if(this.checked){
            $(".cbox").each(function(){
                this.checked = true;
                //$(this).attr("checked",true);
                //$(this).prop("checked",true);
            });
        }else {
            $(".cbox").each(function(){
                this.checked = false;
                //$(this).attr("checked",false);
                //$(this).prop("checked",false);
        });
        }
    });
</script>
</html>