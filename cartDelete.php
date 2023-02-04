<?php
require('conn.php');
$deleteIdx = $_GET['idx'];
$deleteQuery = "DELETE FROM `cart` WHERE idx = '$deleteIdx'";
$deleteResult = $connect->query($deleteQuery);
?>

<script>
alert('<?php echo '상품이 삭제되었습니다..'?>');
location.replace('<?php echo 'cart.php' ?>');
</script>