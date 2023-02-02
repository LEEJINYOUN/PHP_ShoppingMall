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
    ?>
    <section class="cartContainer">
        <div class="cartTitle">장바구니</div>
        <div class="cartContents">
            <div class="cartProducts">
                <div class="cartProduct">
                    <div class="cartProductLeft">
                        <img src="https://images.unsplash.com/photo-1444011283387-7b0f76371f12?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
                            alt="profile image" class="cartProductImg" />
                    </div>
                    <div class="cartProductRight">
                        <div class="cartProductContentBox">
                            <span class="cartProductTitle">스트레치 비스코스 드레스</span>
                            <span class="cartProductSize">m</span>
                            <span class="cartProductPrice">&#8361;150000</span>
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