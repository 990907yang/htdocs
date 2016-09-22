<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>yang</title>
</head>
<body>
    <form name="birthday" action="birth_view.php" method="post">
        <select name="year">
              <option value="" selected>연도를 선택하세요.</option>
               <?php
                    for($i = 1917; $i<=2016; $i++){
                        print "<option value=".$i.">".$i."</option>";
                    }
                ?>
        </select>
        <input type="submit" value="전송">
    </form>
</body>
</html>