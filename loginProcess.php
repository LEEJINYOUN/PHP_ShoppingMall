<?php
session_start();
require('conn.php');
$userEmail = mysqli_real_escape_string($connect, $_POST['email']);
$userPw = mysqli_real_escape_string($connect, $_POST['pw']);
$loginQuery = "SELECT * FROM `user` WHERE email='$userEmail' and pw='$userPw'";
$loginResult = $connect->query($loginQuery);
$loginRow = mysqli_fetch_array($loginResult);

if ($loginResult -> num_rows > 0){
    $_SESSION['email'] = $loginRow['email'];
    if(isset($_SESSION['email'])) {
        echo "<script>alert('환영합니다.');</script>";
        echo "<script>location.href='index.php';</script>";
    }
    else {
        echo "<script>alert('로그인 실패');</script>";
        echo "<script>location.href='login.php';</script>";
    }
}
else {
    echo "<script>alert('로그인 실패');</script>";
    echo "<script>location.href='login.php';</script>";
}
?>