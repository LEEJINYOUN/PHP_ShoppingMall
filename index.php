<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/index.css" />
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    require('navbar.php');
    require('conn.php');
    $query = "SELECT * FROM `product`";
    $result = $connect->query($query);
    $orderQuery = "SELECT * FROM `product` ORDER BY idx DESC";
    $orderResult = $connect->query($orderQuery);

    ?>
    <section class="indexContainer">
        <div class="orderLine">
            <button name="newProduct">신상</button>
            <button>상품명</button>
            <button>낮은가격</button>
            <button>높은가격</button>
        </div>
        <div class="products">
            <div class="wrapper-grid">
                <?php while($row = mysqli_fetch_array($orderResult)){ ?>
                <a href="productDetail.php?idx=<?php echo $row['idx']?>" class="itemContainer">
                    <div class="listTop">
                        <?php 
                        echo '<img src="data:image;base64,'.base64_encode($row['itemImg']).'" alt="image" class="productImg" >';
                        ?>
                    </div>
                    <div class="listBottom">
                        <span class="productName">
                            <?= $row['itemName']?></span>
                        <span class="productPrice">&#8361;<?= $row['itemPrice']?></span>
                    </div>
                </a>
                <?php } ?>
            </div>
        </div>
    </section>
</body>

</html>