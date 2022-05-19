<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>
<body>
<?php
$conn = mysqli_connect("localhost","example_user","a123456789","e1board");

if(!$conn)
{
    echo 'db에 연결하지 못했다.'.mysqli_connect_error();
}
else {
    echo 'db에 연결함';
}
$user_name = $_POST['name'];
$user_msg = $_POST['message'];

$sql = "INSERT INTO msg_board (name, message) VALUES ('$user_name','$$user_msg')";
//잘 저장되었는지 확인하기
$result = mysqli_query($conn,$sql);

if($result == false){
    echo 'not save';
    error_log(mylsqli_error($conn));
}else{
    echo 'save success';
}

mysqli_close($conn);
print "<hr/><a href = 'index.php'> 메인화면으로 돌아가기 </a>";




?>
</body>
</html>

