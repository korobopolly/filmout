<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        
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
            개봉작
        </h2>

        <ul class="movie-category">
            <a href="release.php" class="movie-category--main">전체 영화</a>
            <a href="opening.php" class="movie-category--sub">상영 예정작</a>
        </ul> 

        <section class="section-top3">
            <div class="row">
                <div class="col-1-of-3">
                    <div class="poster">
                        <a href="thespy.html">
                            <img src="img/the spy.png" alt="" class="poster-small">
                        </a>

                        <div class="movie-genre">
                            스릴러 / 드라마
                        </div>
                        <div class="movie-name">
                            더 스파이
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <a href="rain.html">
                            <img src="img/rain.jpg" alt="" class="poster-small">
                        </a>

                        <div class="movie-genre">
                            드라마 / 멜로 / 로맨스
                        </div>
                        <div class="movie-name">
                            비와 당신의 이야기
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <a href="die.html">
                            <img src="img/die.jfif" alt="" class="poster-small">
                        </a>

                        <div class="movie-genre">
                            범죄 / 스릴러
                        </div>
                        <div class="movie-name">
                            내가 죽기를 바라는 자들
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-top3">
            <div class="row">
                <div class="col-1-of-3">
                    <div class="poster">
                        <a href="minari.html">
                            <img src="img/minari.jpg" alt="" class="poster-small">
                        </a>

                        <div class="movie-genre">
                            드라마
                        </div>
                        <div class="movie-name">
                            미나리
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <a href="tomorrow.html">
                            <img src="img/tomorrow.jpg" alt="" class="poster-small">
                        </a>

                        <div class="movie-genre">
                            미스터리 / 스릴러
                        </div>
                        <div class="movie-name">
                            내일의 기억
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <a href="nomadland.html">
                            <img src="img/land.jfif" alt="" class="poster-small">
                        </a>
                        
                        <div class="movie-genre">
                            드라마
                        </div>
                        <div class="movie-name">
                            노매드랜드
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