<?php
session_start();
require('conn.php');
$userEmail = mysqli_real_escape_string($connect, $_POST['email']);
$userPw = mysqli_real_escape_string($connect, $_POST['pw']);

if (($userEmail == '') || ($userPw == '')){
    echo "<script>alert('이메일 또는 비밀번호를 입력해주세요.');history.back();</script>";
}

$loginQuery = "SELECT * FROM `user` WHERE email='$userEmail' and pw='$userPw'";
$loginResult = $connect->query($loginQuery);
$loginRow  = mysqli_num_rows($loginResult);

if ($loginRow == 1){
    $_SESSION['email'] = $userEmail;
        echo "<script>alert('환영합니다');</script>";    
        echo "<script>location.href='index.php';</script>";

} else {
    echo "<script>alert('이메일 또는 비밀번호가 일치하지 않습니다.');history.back();</script>";
}

mysqli_free_result($loginResult);
mysqli_close($connect);
?>