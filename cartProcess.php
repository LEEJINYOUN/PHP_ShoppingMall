<?php
session_start();
require('conn.php');
$idx = mysqli_real_escape_string($connect, $_POST['idx']);
$query = "SELECT * FROM `product` WHERE idx = $idx";
$result = $connect->query($query);
$rows = mysqli_fetch_assoc($result);

$email = $_SESSION['email'];
$itemImg = base64_encode($rows['itemImg']);
$itemName = $rows['itemName'];
$itemSize = mysqli_real_escape_string($connect, $_POST['sizeSelect']);
$itemPrice = $rows['itemPrice'];
$itemCount = mysqli_real_escape_string($connect, $_POST['itemCount']);
$total = $itemPrice * $itemCount;
$URL = 'index.php';

$insertQuery = "INSERT INTO
                    `cart`
                    (`idx`, `itemIdx`, `email`, `itemImg`, `itemName`, `itemSize`, `itemPrice`, `itemCount`)
                    VALUES (NULL, '{$idx}', '{$email}', '{$itemImg}', '{$itemName}', '{$itemSize}', '{$itemPrice}', '{$itemCount}')";
$totalPrice = "UPDATE `totalprice` SET `totalprice` = totalprice + $total WHERE `email`='$email'";
$connect->query($totalPrice);
$insertResult = mysqli_query($connect, $insertQuery);

if ($insertResult) { ?>
<script>
alert('<?php echo '장바구니 추가 완료'?>');
location.replace('<?php echo $URL ?>');
</script>
<?php 
}
else {
    echo '실패';
}
mysqli_close($connect);
?>