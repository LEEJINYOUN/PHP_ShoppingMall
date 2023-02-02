<?php 
session_start();
$logoutSession = session_destroy();
if($logoutSession){
    echo "<script>location.href='login.php';</script>";
}
?>