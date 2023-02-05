<?php
require('conn.php');
$deleteIdx = $_GET['idx'];
$deleteEmail = $_GET['email'];
$deletePrice = $_GET['price'];
$deleteCount = $_GET['count'];
$deleteTotal = $deletePrice * $deleteCount;

$deleteQuery = "DELETE FROM `cart` WHERE idx = '$deleteIdx'";
$totalPrice = "UPDATE `totalprice` SET `totalprice` = totalprice - $deleteTotal WHERE `email`='$deleteEmail'";
$connect->query($totalPrice);
$deleteResult = $connect->query($deleteQuery);

if ($deleteResult) { ?>
<script>
alert('<?php echo '상품이 삭제되었습니다..'?>');
location.replace('<?php echo 'cart.php' ?>');
</script>
<?php 
     }
     else {
         echo '실패';
     }
     mysqli_close($connect);
?>