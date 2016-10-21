<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원가입</title>
</head>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<body>
    <form action="signup_check.php" class="form" method="post">
        <span>아이디</span><input type="text" name="id" class="input" id="id">
        <span>비밀번호</span><input type="password" name="pw" class="input">
        <span>이름</span><input type="text" name="name" class="input" id>
        <span>전화번호</span><input type="text" name="pnum" class="input">
        <button type="submit">회원가입</button>
    </form>
</body>
<script>
    var re_id = /^[a-z0-9_-]{3,16}$/;
    var form = $(".form"),uid=$("#id");
    
    form.submit(function(){
        if(re_id.test(uid.val()) != true){
            alert("[ID입력 오류] 다시 입력.");
            uid.focus();
            return false;
        }
    })
</script>
</html>