<?php
require('conn.php');
$userEmail = mysqli_real_escape_string($connect, $_POST['email']);
$userName = mysqli_real_escape_string($connect, $_POST['name']);
$userPw = mysqli_real_escape_string($connect, $_POST['pw']);
$joinDate = date('Y-m-d H:i:s');
$joinDateNow = date('Y-m-d H:i:s', strtotime($joinDate."+9 hours"));

$joinQuery = "SELECT * FROM `user` WHERE email='$userEmail'";
$joinResult = mysqli_query($connect, $joinQuery);

$insertTotalQuery = "INSERT INTO `totalprice` (`idx`, `email`, `totalPrice`) VALUES (NULL, '$userEmail', '0')";
$insertTotalResult = mysqli_query($connect, $insertTotalQuery);

if($joinResult->num_rows > 0) {
    $joinRow = mysqli_fetch_assoc($joinResult);
    $userEmail = $joinRow['email'];
    echo "<script>alert('존재하는 이메일입니다');</script>";
    echo "<script>location.href='signUp.php';</script>";
}
else {
    $joinInsertQuery = "INSERT INTO `user`(`idx`, `email`, `name`, `pw`, `date`) VALUES (NULL,'$userEmail','$userName','$userPw','$joinDateNow')";
    $joinInsertResult = $connect->query($joinInsertQuery);
    $userEmail = mysqli_insert_id($connect);
    
    echo "<script>alert('가입을 축하합니다.');</script>";
    echo "<script>location.href='login.php';</script>";
}
?>