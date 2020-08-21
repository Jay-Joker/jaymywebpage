<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100&display=swap" rel="stylesheet">
    <title>Jay shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ca9ee9bd9d.js"
            crossorigin="anonymous">
    </script>
    <link rel= "stylesheet"  href="../style.css">
</head>
<body>
 <?php include 'menu.php' ?>
<div style="width: 1200px; margin-top: 100px;">
    <div style="height:1px; color: black;">
    </div>
    <form action="board.php" method="get">
        <div>
            <input type="text" placeholder="검색어를 입력해주세요." name="search">
            <input type="submit" value="검색">
        </div>
    </form>
</div>
<table class="table">
    <thead>
    <tr>
        <th>no</th>
        <th>제목</th>
        <th>작성자</th>
        <th>날짜</th>
        <th>조회수</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>첫 게시글 입니다.</td>
        <td>송재원</td>
        <td>2020.08.11</td>
        <td>4</td>
    </tr>
    </tbody>
</table>


</body>
</html>