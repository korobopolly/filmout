<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        
        <link rel="stylesheet" href="css/style.css?ver4">
        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <script src="https://kit.fontawesome.com/cc6a12588a.js" crossorigin="anonymous"></script>
        <!--메인 아이콘-->

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
                <li><a href="star.php">평점별</a></li>
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

        <!--상단 배너-->
        <div class="banner-center">
            <a href="http://www.11st.co.kr/plan/front/exhibitions/2033030/detail"><img src="img/banner.jpg" class="banner"></a>
        </div>

        <!-- 영화 장르 및 이름 -->
        <div class="trailer">
            <video src="trailer/007.mp4" class="movie-size" controls autoplay muted></video>
        </div>

        <!--스크롤-->
        <div class="scrollbody">
            <div class="menu">
                <div class="menu--wrapper">
                    <div class="menu--item">
                    <figure><img src="img/007.jpg" alt="" /></figure>
                    </div>

                    <div class="menu--item">
                    <figure><img src="img/voice.jpg" alt="" /></figure>
                    </div>

                    <div class="menu--item">
                    <figure><img src="img/venom.jpg" alt="" /></figure>
                    </div>

                    <div class="menu--item">
                    <figure><img src="img/cruella.jpg" alt="" /></figure>
                    </div>

                    <div class="menu--item">
                    <figure><img src="img/conjuring.jpg" alt="" /></figure>
                    </div>

                    <div class="menu--item">
                    <figure><img src="img/fast.jpg" alt="" /></figure>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- partial -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js'></script><script  src="./scrollscript.js"></script>

        <h2 class="heading-secondary">
            HOT
        </h2>
        <section class="section-top3">
            <div class="row">
                <div class="col-1-of-3">
                    <div class="poster">
                        <a href="007.php"><img src="img/007.jpg" alt="" class="poster-small"></a>
                        <div class="movie-genre">
                            액션 / 블록버스터
                        </div>
                        <div class="movie-name">
                            007 노타임 투 다이
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <a href="voice.php"><img src="img/voice.jpg" alt="" class="poster-small"></a>
                        <div class="movie-genre">
                            범죄 / 액션
                        </div>
                        <div class="movie-name">
                            보이스
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <a href="venom.php"><img src="img/venom.jpg" alt="" class="poster-small"></a>
                        <div class="movie-genre">
                            액션 / SF / 스릴러
                        </div>
                        <div class="movie-name">
                            베놈 2 : 렛 데어 비 카니지
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="line-second">
        </div>

        <h2 class="heading-secondary">
        독립 영화
        </h2>

        <section class="section-top3">
            <div class="row">
                <div class="col-1-of-3">
                    <div class="poster">
                        <a href="fly.php">
                            <img src="img/fly.jpg" alt="" class="poster-small">
                        </a>

                        <div class="movie-genre">
                        독립영화 / 드라마
                        </div>
                        <div class="movie-name">
                        똥파리
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <a href="lastchild.php">
                            <img src="img/lastchild.jpg" alt="" class="poster-small">
                        </a>

                        <div class="movie-genre">
                        독립영화/ 드라마  
                        </div>
                        <div class="movie-name">
                        살아남은 아이
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <a href="sound.php">
                            <img src="img/sound.jpg" alt="" class="poster-small">
                        </a>

                        <div class="movie-genre">
                        독립영화 / 다큐 / 감동적인
                        </div>
                        <div class="movie-name">
                        워낭소리
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-top3">
            <div class="row">
                <div class="col-1-of-3">
                    <div class="poster">
                        <a href="river.php">
                            <img src="img/river.jpg" alt="" class="poster-small">
                        </a>

                        <div class="movie-genre">
                        독립영화 / 다큐 / 감동적인
                        </div>
                        <div class="movie-name">
                        님아, 그 강을 건너지 마오
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <a href="tonze.php">
                            <img src="img/tonze.jpg" alt="" class="poster-small">
                        </a>

                        <div class="movie-genre">
                        독립영화 / 다큐
                        </div>
                        <div class="movie-name">
                        울지마 톤즈
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <a href="jiseul.php">
                            <img src="img/jisel.jpg" alt="" class="poster-small">
                        </a>
                        
                        <div class="movie-genre">
                        독립영화 / 드라마 / 실화 바탕
                        </div>
                        <div class="movie-name">
                        지슬 - 끝나지 않은 세월2
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <footer>
        <div class="foot-text">About FilmOut &nbsp;&nbsp;&nbsp; <a href="mailto: ms.nununana@gmail.com" title="광고 문의" class="foot-text-link">광고</a> &nbsp;&nbsp;&nbsp; <a href="https://docs.google.com/forms/d/1gH2ionU23lAPUTwCv0WHIBtoH3fgnrrdyfh9KZ42Klg/edit" title="문의 / 피드백" class="foot-text-link">문의 / 피드백</a></div>
    </footer>
</html>