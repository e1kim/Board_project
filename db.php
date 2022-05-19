<?php
$conn = mysqli_connect("localhost","example_user","a123456789","e1board");

if(!$conn)
{
    echo 'db에 연결하지 못했다.'.mysqli_connect_error();
}
else {
    echo 'db에 연결함';
}
?>
