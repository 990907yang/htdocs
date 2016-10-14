<?php
    include "db.php";
    $sql = "select * from member";
    $stmh=$pdo->prepare($sql);
    $stmh->execute();
    $result=$stmh->fetchAll();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원정보</title>
    <style>
        *{ margin: 0; padding: 0; box-sizing: border-box; }
        table, th, td { margin: auto; margin-top: 100px; border-spacing: 0; text-align: center; font-size: 15px; color: white; } 
        th {background-color: #c0392b; }
        tr { background-color: #e74c3c; }
        .btn { background-color: #c0392b; border: none; color: white;
    padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; transition: 1s; }
        .btn:hover { opacity: 0.4; transition: 0.5s; }
    </style>
</head>
<body>
  <table>
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
  <th></th>
  <?php
   foreach($result as $row){
       ?>
       <tr>
          <form action="del.php" method="post">
               <input name="idx" type="hidden" value="<?=$row['idx']?>">
               <td><input type="checkbox"></td>
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
               <td><button type="submit" class="btn">회원정보 삭제</button></td>
           </form>
       </tr>
        
    <?php
   }
      ?>
  </table>
</body>
</html>