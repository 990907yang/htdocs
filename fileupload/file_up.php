<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>파일업로드</title>
</head>
<body>
    <form action="fup.php" method="post" enctype="multipart/form-data">
        <label for="fileup">첨부파일</label>
        <input type="file" name="upload" id="fileup">
        <button type="submit">올리기</button>
    </form>
</body>
</html>