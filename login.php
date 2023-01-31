<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css//login.css" />
    <title>Document</title>
</head>

<body>
    <?php
    require('navbar.php');
    ?>
    <section class="loginContainer">
        <div class="loginTitle">로그인</div>
        <form action="#" class="loginForm">
            <div class="loginInput">
                <input type="email" placeholder="이메일" required />
                <input type="password" placeholder="비밀번호" required />
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