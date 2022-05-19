<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
</head>
<body>
    <h1>게시판</h1>
    <h2> list </h2>
    <ul>
    <?php
        $conn = mysqli_connect("localhost","example_user","a123456789","e1board");

        if(!$conn)
        {
            echo 'db에 연결하지 못했다.'.mysqli_connect_error();
        }
        else {
            echo 'db에 연결함';
        }
        //msg_board에서 글 조회하기
        $sql = "SELECT * FROM msg_board";
        $result = mysqli_query($conn,$sql);
        $list = '';
         while($row = mysqli_fetch_array($result)){
                $list = $list."<li>{$row['number']} : <a href = \"view.php?number={$row['number']}\">name={$row['name']}</a></li>";
         }  
         echo $list;
         
    ?>
        <h3>게시판 목록</h3>
        <table>
            <thead>
                <tr>
                    <th>number</th>
                    <th>이름</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($board as $msg_board) : ?>
                    <tr>
                        <td><?=$msg_board['number']?></td>
                        <td><?=$msg_board['name']?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        
    
    </ul>
    <hr>
        <p><a href = "write.php"> write </a></p>
    <h2> search</h2>
    <form action = "search_result.php" method = "post">
        <h3> 검색할 키워드를 입력하세요. </h3>
        <p>
            <label for = "search"> 키워드: </label>
            <input type = "text" id = "search" name = "skey">

        </p>
        <input type = "submit" value = "검색"> 

    </form>
    <hr>
    <h2> delete</h2>
    <form action = "delete.php" method = "post">
        <h3> 삭제할 게시판 번호를 입력하세요. </h3>
        <p>
            <label for = "msgdel"> 번호: </label>
            <input type = "text" id = "msgdel" name = "delnum">

        </p>
        <input type = "submit" value = "삭제"> 

    </form>
</body>
</html>
