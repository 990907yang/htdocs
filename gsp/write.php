<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>yang</title>
</head>
<style>
    .write { border: 1px solid #000; }
    .w { width: 500px; height: 20px; margin: 10px; }
    .ww { height: 300px; }
</style>
<body>
    <div class="wirte">
        <h1>글쓰기</h1>
        <form action="insert.php" method="post">
            <span>제목</span><input type="text" class="w" name="title" required><br>
            <span>작성자</span><input type="text" class="w" name="writer" required><br>
            <span>내용</span><input type="textarea" class="w ww" name="tex" required><br>
            <button type="submit">글쓰기</button>
        </form>
    </div>
</body>
</html>