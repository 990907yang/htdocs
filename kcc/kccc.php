<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>yang</title>
</head>
<body>
    <form name="member" method="post" action="kcc_view.php">
        이름 <input name="name" type="text"><br>
        생년월일 <select name="year" class="year">
                    <option value="" selected>연도를 선택</option>
                    <?php
                        for($i=1960; $i<=2016; $i++){
                            print "<option value=".$i.">".$i."</option>";
                        }
                    ?>
                </select>년
                <select name="mot" class="mot">
                        <option value="" selected>월을 선택</option>
                        <?php
                            for($i=1; $i<=12; $i++){
                                print "<option value=".$i.">".$i."</option>";
                            }
                        ?>
                </select>월
                <select name="day" class="day">
                    <option value="" selected>일을 선택</option>
                    <?php
                    for($i=1; $i<=31; $i++){
                        print "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                </select>일<br>
        아이디 <input name="id" type="text"><br>
        비밀번호 <input name="password" type="password"><br>
        SMS 수신여부 <input type="radio" name="yes" value="yes">예
                    <input type="radio" name="no" value="no">아니오<br>
        E-MAIL <input type="text" name="email"><br>
        자택주소 <input type="text" name="address" style="width:300px;"><br>
        <input type="submit" name="전송" value="전송" style="margin:100px">
    </form>
</body>
</html>