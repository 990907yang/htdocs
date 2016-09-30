<?php
    include "kccdb.php";
    $insert = "select * from member order by idx desc";
    $go = $pdo -> query($insert);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원정보 출력</title>
    <style>
        #wrap{background: #3498db; margin-bottom: 20px; color: #fff;}
        .pw_re{font-size: 0.7em; font-weight: bold}
    </style>
</head>
<body>
    <?php
    
    while($row = $go->fetch()){  
            
            echo "<div id=wrap>";
            echo "<h1>".$row['name']."님의 회원정보</h1><br>";
            echo "이름 ".$row['name']."<br>";
            echo "생년월일 ".$row['year'].".".$row['month'].".".$row['day']."<br>";
            echo "ID : ".$row['id']."<br>";
            echo "PW : ".$row['password']."<br>";
            echo "휴대폰 번호 : ".$row['pnum']."<br>";
            echo "SNS 수신동의 여부 ".$row['ok']."</br>";
            echo "주소 ".$row['address']."<br>";
            echo "우편번호".$row['add_num']."<br>";
            echo "e-mail : ".$row['email']."</br>";
            echo "우편번호".$row['add_num']."<br>";
            echo "주소".$row['address1']."<br>";
            echo "상세주소".$row['address2']."<br>";
//            if($row['pw'] == $row['pw_Re']){
//                echo "<span class='pw_re'>	
//                    &#40; 비밀번호 확인 완료&#41;</span>";
//            } else if($row['pw'] != $row['pw_Re']) {
//                echo "<span class='pw_re'>&#40; 비밀번호 확인이 안됨&#41;</span>";
//            }
//            echo "전화번호 : ".$row['number_1']."-".$row['number_2']."-".$row['number_3']."<br>";
//            echo "핸드폰번호 : ".$row['phonNum_1']."-".$row['phonNum_2']."-".$row['phonNum_3']."</br>";
            
//            echo "자택 우편번호 ".$row['home_post']."-".$row['home_post2']."<br>";
            
//            echo "DM발송처 : ".$row['stay']."<br>";
//            echo "직장명 ".$row['work_name']."<br>";
//            echo "직종 ".$row['work_kinds']."<br>";
//            echo "직위 ".$row['work_spot']."<br>";
//            echo "직장 우편번호 ".$row['work_post1']."-".$row['work_post2']."<br>";
//            echo "직장주소 ".$row['work_address1']." ".$row['work_address2']."<br>";
//            echo "직장전화번호 ".$row['work_number1']."-".$row['work_number2']."-".$row['work_number3']."<br>";
//            echo "팩스번호 ".$row['fax_number1']."-".$row['fax_number2']."-".$row['fax_number3']."<br>";
//            echo "결혼여부 : ".$row['wed']."<br>";
//            echo "결혼기념일 ".$row['wed_year'].".".$row['wed_month'].".".$row['wed_day']."<br>";
            echo "</div>";
    }
    ?>
</body>
</html>