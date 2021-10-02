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
                        <img src="img/spiral.jpeg" alt="" class="poster-small">
                        <div class="movie-genre">
                            스릴러 / 흥미진진한
                        </div>
                        <div class="movie-name">
                            스파이럴
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/becoming.jfif" alt="" class="poster-small">
                        <div class="movie-genre">
                            드라마        
                        </div>
                        <div class="movie-name">
                            버커밍 아스트리드
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/supernova.jpg" alt="" class="poster-small">
                        <div class="movie-genre">
                            드라마 / 멜로 / 로맨스
                        </div>
                        <div class="movie-name">
                            슈퍼노바
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-top3">
            <div class="row">
                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/son.jfif" alt="" class="poster-small">
                        <div class="movie-genre">
                            드라마 / 스릴러 / 복수극
                        </div>
                        <div class="movie-name">
                            아들의 이름으로
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/you.jpg" alt="" class="poster-small">
                        <div class="movie-genre">
                            드라마 / 감동적인 
                        </div>
                        <div class="movie-name">
                            내겐 너무 소중한 너
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/keepers.png" alt="" class="poster-small">
                        <div class="movie-genre">
                            드라마 / 범죄 / 미스터리
                        </div>
                        <div class="movie-name">
                            키퍼스
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-top3">
            <div class="row">
                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/money.jpg" alt="" class="poster-small">
                        <div class="movie-genre">
                            범죄 / 액션 / 드라마
                        </div>
                        <div class="movie-name">
                            범털2 : 쩐의 전쟁
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/fast.jpg" alt="" class="poster-small">
                        <div class="movie-genre">
                            액션 / 흥미진진한 / 통쾌한 
                        </div>
                        <div class="movie-name">
                            분노의 질주 : 더 얼티메이트
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/v.jpg" alt="" class="poster-small">
                        <div class="movie-genre">
                            SF / 모험 / 스릴러
                        </div>
                        <div class="movie-name">
                            보이저스
                        </div>
                    </div>
                </div>
            </div>
        </section>    
    </body>
    <footer>
        <div class="foot-text">About FilmOut &nbsp;&nbsp;&nbsp; <a href="mailto: ms.nununana@gmail.com" title="광고 문의" class="foot-text-link">광고</a> &nbsp;&nbsp;&nbsp; <a href="mailto: ms.nununana@gmail.com" title="문의 / 피드백" class="foot-text-link">문의 / 피드백</a></div>
    </footer>
</html>