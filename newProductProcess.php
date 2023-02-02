<?php
require('conn.php');


$newFile = addslashes(file_get_contents($_FILES["newFile"]["tmp_name"]));

$newName = mysqli_real_escape_string($connect, $_POST['newName']);
$newPrice = mysqli_real_escape_string($connect, $_POST['newPrice']);
$newCategory = mysqli_real_escape_string($connect, $_POST['newCategory']);
$newDescription = mysqli_real_escape_string($connect, $_POST['newDescription']);
$newOption = mysqli_real_escape_string($connect, $_POST['newOption']);
$newDate = date('Y-m-d H:i:s');
$newDateNow = date('Y-m-d H:i:s', strtotime($newDate."+9 hours"));
$URL = 'index.php';

$newQuery = "INSERT INTO 
                    `product`
                    (`idx`, `itemImg`, `itemName`, `itemPrice`, `itemCategory`, `itemDescription`, `itemOption`, `itemDate`) 
                    VALUES (NULL, '{$newFile}', '{$newName}', '{$newPrice}', '{$newCategory}', '{$newDescription}', '{$newOption}', '{$newDateNow}')";
$newResult = mysqli_query($connect, $newQuery);

if ($newResult) { ?>
<script>
alert('<?php echo '상품 등록 완료'?>');
location.replace('<?php echo $URL ?>');
</script>
<?php
    } else {
        echo '상품 등록 실패';
    }
    mysqli_close($connect);
?>