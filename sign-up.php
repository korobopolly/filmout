<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <script src="https://kit.fontawesome.com/cc6a12588a.js" crossorigin="anonymous"></script>
        <title>Film out</title>
    </head>

    <body>
        <nav class="navbar">
            <a href="index.php">
                <div class="navbar__logo">
                    <i class="fas fa-film"></i>
                    Film out
                </div>
            </a> 

            <ul class="navbar__menu">
                <li><a href="genre.php">장르별</a></li>
                <li><a href="independent.php">독립영화관</a></li>
                <li><a href="data_management.php">영화 후기</a></li>
            </ul>    

            <div class="navbar__login">
                <?php if(!isset($_SESSION['id'])){
                    echo '<a href="log-in.php">로그인</a>';
                } else {
                    echo '<div class="helloUser"><a href="index.php">'.$_SESSION['id'].'님 환영합니다.</a></div>';
                    echo '<div class="outAndUpdate"><a href="log-out.php">로그아웃</a></div>';
                }
                ?>  
            </div>
        </nav>
        <!-- 상단 메뉴 종료 -->

        <div class="loginbox">
            <h2 class="heading-secondary--center">회원가입</h2>
            <div class="loginbox__out">
                <form action="write.php" method="post" class="center-form">
                    <div class="loginbox__out__left">
                        이메일
                    </div>
                    <div>
                        <input type="text" name="email" id="email" class="underline"
                        placeholder="영문 소문자/숫자, 4~16자"/>
                    </div><br><br>

                    <div class="loginbox__out__left">
                        비밀번호
                    </div>
                    <div>
                        <input type="text" name="password" id="password" class="underline"
                        placeholder="영문/숫자 중 2가지 이상 조합, 4~16자"/>
                    </div><br><br>
                    
                    <div class="loginbox__out__left">
                        비밀번호 확인
                    </div>
                    <div>
                        <input type="text" name="password_confirm" id="password_confirm" class="underline"/>
                    </div><br><br>

                    <div class="loginbox__out__left">
                        이름
                    </div>
                    <div>
                        <input type="text" name="name" id="name" class="underline"/>
                    </div><br><br>

                    <div class="loginbox__out__left">
                        휴대전화
                    </div>
                    <div>
                        <input type="text" name="phone" id="phone" class="underline" value="010-"/>
                    </div><br><br><br>
                    
                    <button type="submit" class="center-button">제출</button>
                </form>
            </div>
        </div>

    </body>
    <footer>
        <div class="foot-text">About FilmOut &nbsp;&nbsp;&nbsp; <a href="mailto: ms.nununana@gmail.com" title="광고 문의" class="foot-text-link">광고</a> &nbsp;&nbsp;&nbsp; <a href="mailto: ms.nununana@gmail.com" title="문의 / 피드백" class="foot-text-link">문의 / 피드백</a></div>
    </footer>
</html>