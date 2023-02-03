<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css//cart.css" />
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    require('navbar.php');
    require('conn.php');
    $email = $_SESSION['email'];
    $mainQuery = 'SELECT * FROM `cart` WHERE `email` ="'.$email.'"';
    $mainResult = $connect->query($mainQuery);
    ?>
    <section class="cartContainer">
        <div class="cartTitle">장바구니</div>
        <div class="cartContents">
            <div class="cartProducts">
                <?php while($row = mysqli_fetch_array($mainResult)){ ?>
                <div class="cartProduct">
                    <div class="cartProductLeft">
                        <?php
                        echo '<img src="data:image;base64,'.$row['itemImg'].'" alt="image" class="cartProductImg">';
                        ?>
                    </div>
                    <div class="cartProductRight">
                        <div class="cartProductContentBox">
                            <span class="cartProductTitle"><?= $row['itemName']?></span>
                            <span class="cartProductSize"><?= $row['itemSize']?></span>
                            <span class="cartProductPrice">&#8361;<?= $row['itemPrice']?></span>
                        </div>
                        <div class="cartProductCountBox">
                            <div class="cartProductCount">
                                <input type="number" value="1" min="1" max="5" />
                            </div>
                            <div class="cartProductDelete">
                                <i class="fa-solid fa-trash"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <?php } ?>
            </div>
            <div class="cartPrices">
                <div class="priceBox">
                    <span class="priceBoxText">상품 총액</span>
                    <span class="priceBoxPrice">&#8361;50000</span>
                </div>
                <span class="pricePlus">+</span>
                <div class="priceBox">
                    <span class="priceBoxText">배송비</span>
                    <span class="priceBoxPrice">&#8361;3000</span>
                </div>
                <span class="priceEquals">=</span>
                <div class="priceBox">
                    <span class="priceBoxText">총 가격</span>
                    <span class="priceBoxPrice">&#8361;203000</span>
                </div>
            </div>
            <div class="cartButton">
                <button class="cartBtn">주문하기</button>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/e3d83117d8.js" crossorigin="anonymous"></script>
</body>

</html>