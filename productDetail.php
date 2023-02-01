<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css//productDetail.css" />
    <title>Document</title>
</head>

<body>
    <?php
    require('navbar.php');
    ?>
    <section class="detailContainer">
        <div class="detailImgBox">
            <img src="https://images.unsplash.com/photo-1444011283387-7b0f76371f12?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
                alt="profile image" class="detailImg" />
        </div>
        <div class="detailContents">
            <div class="detailTitle">프린트 코튼 셔츠</div>
            <div class="detailPrice">&#8361;50000</div>
            <div class="detailDescription">
                더글러스 코플랜드의 we all have secret messages hidden 프린트를 더한
                후드 코튼 셔츠
            </div>
            <div class="detailOption">
                옵션 :
                <select name="sizeSelect" id="sizeSelect">
                    <option value="s" selected>s</option>
                    <option value="m">m</option>
                    <option value="l">l</option>
                </select>
            </div>
            <div class="detailCart">
                <button class="cartToBtn">장바구니 담기</button>
            </div>
        </div>
    </section>
</body>

</html>