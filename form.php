<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>텍스트 송신 테스트</title>
</head>
<body>
   <form name="form1" method="post" action="view.php">
       이름
       <input type="text" name="onname">
       <input type="submit" name="송신" value="입력">
       <br>
       이메일
       <input type="text" name="email">
       <input type="submit" name="송신" value="입력">
       <br>
       PW
       <input type="password" name="passw">
       <input type="submit" name="송신" value="입력">
       <br>
       <br>
       본문
       <textarea name="honbun" cols="30" rows="10"></textarea>
       <input type="submit" name="송신" value="입력">
       <br><br>
       나의 취미<br>
       <input type="checkbox" name="hobby[]" value="스포츠">
       스포츠<br>
       <input type="checkbox" name="hobby[]" value="영화감상">
       영화감상<br>
       <input type="checkbox" name="hobby[]" value="독서">
       독서<br>
       <input type="checkbox" name="hobby[]" value="게임">
       게임<br>
       <input type="submit" name="송신" value="입력">
   </form>
   <img src="/lsad.jpg" alt="라이언" title="라이언">
</body>
</html>