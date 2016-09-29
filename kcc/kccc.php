<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원가입</title>
    <style>
        * { margin: 0; padding: 0; }
        body { background: #3498db; }
        .form { margin: 0 auto; margin-top: 160px; width: 500px; height: 600px; border: 1px solid #ddd; }
        .w { width: 50px;  height: 20px;}
        .m { margin: 15px 0  3px 0px; }
    </style>
</head>
<body>
    <form method="post" action="signup_check.php" class="form">
        <span>이름</span> <input name="name" type="text" class="m"><br>
        <span>생년월일</span> <select name="year" class="year m">
                    <option value="" selected>연도를 선택</option>
                    <?php
                        for($i=1960; $i<=2016; $i++){
                            print "<option value=".$i.">".$i."</option>";
                        }
                    ?>
                </select>년
                <select name="month" class="month m">
                    <option value="" selected>월을 선택</option>
                    <?php
                        for($i=1; $i<=12; $i++){
                            print "<option value=".$i.">".$i."</option>";
                        }
                    ?>
                </select>월
                <select name="day" class="day m">
                    <option value="" selected>일을 선택</option>
                    <?php
                    for($i=1; $i<=31; $i++){
                        print "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                </select>일<br>
        <span>아이디</span> <input name="id" type="text"  class="m"><br>
        <span>비밀번호</span> <input name="password" type="password"  class="m"><br>
<!--
        <span>휴대폰 번호</span> <select name="phone1" class="w">
                       <option value="010">010</option>
                       <option value="011">011</option>
                       <option value="016">016</option>
                       <option value="017">017</option>
                       <option value="018">018</option>
                       <option value="019">019</option>
                    </select> - <input name="phone2" type="text" class="w"> - <input name="phone3" type="text" class="w"><br>
-->
        <span>SMS 수신여부</span> <input type="radio" name="ok" value="yes" checked>예
                    <input type="radio" name="ok" value="no">아니오<br>
        <span>E-MAIL</span> <input type="text" name="email"  class="m"><br>
        <span>자택주소</span> <input type="text" name="address" style="width:300px;" class="m"><br>
        
        
        <input type="submit" value="회원가입" style="margin-left:200px; margin-top:30px;">
    </form>
</body>
</html>