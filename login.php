<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/login.css" />
    <title>Document</title>
</head>

<body>
    <?php
    require('navbar.php');
    ?>
    <section class="loginContainer">
        <div class="loginTitle">로그인</div>
        <form action="loginProcess.php" class="loginForm" method="post">
            <div class="loginInput">
                <input type="email" name="email" placeholder="이메일" />
                <input type="password" name="pw" placeholder="비밀번호" />
                <input type="submit" value="로그인" />
            </div>
            <div class="signUp">
                회원이 아닌가요?
                <a href="signUp.php">회원가입</a>
            </div>
        </form>
    </section>
</body>

</html>