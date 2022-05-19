<?php
        $conn = mysqli_connect("localhost","example_user","a123456789","e1board");

        if(!$conn)
        {
            echo 'db에 연결하지 못했다.'.mysqli_connect_error();
        }
        else {
            //echo 'db에 연결함';
        }
        //msg_board에서 글 조회하기
        $view_num = $_GET['number'];

        $sql = "SELECT * FROM msg_board WHERE number = $view_num";
        $result = mysqli_query($conn,$sql);
        
        
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
</head>
<body>
    <h1>게시판</h1>
    <h2> 내용 </h2>
    <?php
        if($row = mysqli_fetch_array($result)){
    ?>
    <h3>글번호: <?=$row['number'] ?> 글쓴이: <?=$row['name'] ?></h3>
            <div>
                <?=$row['message'] ?>
            </div>
    <?php    }    ?>
    <p><a href = "index.php"> 메인화면으로 돌아가기 </a></p>
    
</body>
</html>
