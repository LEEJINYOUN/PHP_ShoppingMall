<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/productDetail.css" />
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    require('navbar.php');
    require('conn.php');
    $idx = $_GET['idx'];
    $email = $_SESSION['email'];
    $query = "SELECT * FROM `product` WHERE `idx`= $idx";
    $result = $connect->query($query);
    $rows = mysqli_fetch_assoc($result);
    ?>
    <section class="detailContainer">
        <div class="detailImgBox">
            <?php
            echo '<img src="data:image;base64,'.base64_encode($rows['itemImg']).'" alt="image" class="detailImg">';
            ?>
        </div>
        <form action="cartProcess.php" class="detailContents" method="post">
            <div class="detailTitle"><?php echo $rows['itemName']?></div>
            <div class="detailPrice">&#8361;<?php echo $rows['itemPrice']?></div>
            <div class="detailDescription">
                <?php echo $rows['itemDescription']?>
            </div>
            <div class="detailOption">
                옵션 :
                <select name="sizeSelect" id="sizeSelect">
                    <?php
                    $optionItem = $rows['itemOption'];
                    $arrOption = explode(',', $optionItem);
                    $i = 0;
                    while ($i < count($arrOption)){ ?>
                    <option value="<?php echo trim($arrOption[$i]) ?>"><?php echo trim($arrOption[$i])?></option>
                    <?php
                    $i++;
                    } ?>
                </select>
            </div>
            <div class="detailCount">
                개수 :
                <input type="number" value="1" min="1" max="5" name="itemCount" id="itemCount" />
            </div>
            <input type="hidden" value="<?php echo $rows['idx']?>" name="idx" readonly>
            <?php
                if((isset($_SESSION['email']))) { ?>
            <div class="detailCart">
                <input type="submit" class="cartToBtn" value="장바구니 담기">
            </div>
            <?php } ?>
        </form>
    </section>
    <script src="./js/main.js"></script>
</body>

</html>