<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css//navbar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Document</title>
</head>

<body>
    <?php
    if( (!isset($_SESSION['email']))){  ?>
    <nav class="navbarContainer">
        <input type="checkbox" id="navCheck" />
        <label for="navCheck" class="navCheckBtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="navLogo">JoaMall</label>
        <ul>
            <li><a href="index.php">홈</a></li>
            <li><a href="login.php">로그인</a></li>
        </ul>
    </nav>
    <?php } else { ?>
    <nav class="navbarContainer">
        <input type="checkbox" id="navCheck" />
        <label for="navCheck" class="navCheckBtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="navLogo">JoaMall</label>
        <ul>
            <li><a href="index.php">홈</a></li>
            <li><a href="cart.php">장바구니</a></li>
            <li><a href="newProduct.php">상품등록</a></li>
            <li><a href="myPage.php">마이페이지</a></li>
            <li><a href="logoutProcess.php">로그아웃</a></li>
        </ul>
    </nav>
    <?php } ?>
</body>

</html>