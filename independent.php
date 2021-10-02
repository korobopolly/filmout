<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css?ver2">
        
        <script src="https://kit.fontawesome.com/cc6a12588a.js" crossorigin="anonymous"></script>
        <script src="main.js" def></script>
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
        
        <h2 class="heading-secondary">
        독립 영화관
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
                        독립영화 / 드라마  
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