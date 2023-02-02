<?php
header('Content-Type: text/html; charset=utf-8');
$connect = mysqli_connect('localhost','root', '123456789');
mysqli_select_db($connect, 'php_shoppingmall');
$connect->set_charset('utf8');
?>