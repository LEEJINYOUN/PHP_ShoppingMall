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
    <section class="signUpContainer">
        <div class="loginTitle">회원가입</div>
        <form action="signUpProcess.php" class="loginForm" id="signUpForm" name="signUpForm" method="post"
            onsubmit="return signUpCheck()">
            <div class="loginInput">
                <input type="email" id="email" name="email" placeholder="이메일" />
                <input type="text" id="name" name="name" placeholder="이름" />
                <input type="password" id="pw" name="pw" placeholder="비밀번호" />
                <input type="submit" value="회원가입" />
            </div>
            <div class="signUp">
                회원인가요?
                <a href="login.php">로그인</a>
            </div>
        </form>
    </section>
    <script src="./js/main.js"></script>
</body>

</html>