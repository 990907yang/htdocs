<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>글쓰기</title>
</head>
<style>
    .header { width: 300px; height: 85px;  margin: 0 auto;}
    .content { width: 400px; height: 250px;  margin: 0 auto;}
    .content input { width: 270px; height: 200px; margin-left: 12px;}
    .insert{ width: 400px; height: 50px; margin: 0 auto; }
    button { width: 70px; height: 25px; margin-left: 280px;}
    .w { margin: 0 auto; width: 400px; height: 420px; border: 1px solid #ddd; }
</style>
<body>
    <form action="insert.php" method="post" class="w" enctype="multipart/form-data">
        <div class="header">
            <span>제목</span><input type="text" name="title"><br>
            <span>작성자</span><input type="text" name="writer">
        </div>
        <div class="content">
            <span>내용</span><input type="textarea" name="text">
        </div>
        <div class="insert">
            <label for="insert">첨부파일</label>
            <input type="file" name="upload" class="insert">
        </div>
        <button type="submit">글쓰기</button>
    </form>
</body>
</html>