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
        <link href="https://spoqa.github.io/spoqa-han-sans/css/SpoqaHanSansNeo.css" rel="stylesheet" type="text/css"/>
        
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

        <form action="" class="dropdown-filter">
            <h1 class="heading-first-class"> 장르별</h1>
            <div class="dropdown">  
                <button type="button" class="dropdown-toggle">
                    평점을 선택해주세요
                </button>
    
                <ul class="dropdown-menu">
                    <div class="dropdown-item" onclick="location.href='star9.php'" style="cursor:pointer;">
                        <button type="button" value="1" class="dropdown-option" >
                            9.0 이상
                        </button>
                    </div>
                    <div class="dropdown-item" onclick="location.href='star8.php'" style="cursor:pointer;">
                        <button type="button" value="2" class="dropdown-option" >
                            8.0 이상
                        </button>
                    </div>
                    <div class="dropdown-item" onclick="location.href='star7.php'" style="cursor:pointer;">
                        <button type="button" value="3" class="dropdown-option">
                            7.0 이상
                        </button>
                    </div>
                    <div class="dropdown-item" onclick="location.href='star6.php'" style="cursor:pointer;">
                        <button type="button" value="4" class="dropdown-option">
                            6.0 이상
                        </button>
                    </div>
                    <div class="dropdown-item" onclick="location.href='star5.php'" style="cursor:pointer;">
                        <button type="button" value="5" class="dropdown-option">
                            5.0 이상
                        </button>
                    </div>
                </ul>
            </div> 
        </form>

        <script src="./yours.js"></script>

        <div class="uptown">

            <h2 class="heading-secondary--genre">
                7.0 이상
            </h2>
            <section class="section-top3">
                <div class="row">
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="hangover.php"><img src="img/hangover.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                코미디
                            </div>
                            <div class="movie-name">
                                행오버
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="dark.php"><img src="img/dark.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                스릴러
                            </div>
                            <div class="movie-name">
                                맨 인더 다크
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="purge.php"><img src="img/purge.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                범죄
                            </div>
                            <div class="movie-name">
                                더 퍼지
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-top3">
                <div class="row">
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="us.php"><img src="img/us.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                스릴러
                            </div>
                            <div class="movie-name">
                                어스
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="happy.php"><img src="img/happy.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                호러 / 스릴러
                            </div>
                            <div class="movie-name">
                                해피 데스데이
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="perpect.php"><img src="img/perpect.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                코미디 
                            </div>
                            <div class="movie-name">
                                퍼펙트맨
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-top3">
                <div class="row">
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="joker.php"><img src="img/joker.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                스릴러
                            </div>
                            <div class="movie-name">
                                조커
                            </div>   
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="spy.php"><img src="img/spy.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                코미디
                            </div>
                            <div class="movie-name">
                                스파이
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="wolf.php"><img src="img/wolf.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                범죄 / 드라마
                            </div>
                            <div class="movie-name">
                                더 울프 오브 월 스트리트
                            </div>   
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-top3">
                <div class="row">
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="descent.php"><img src="img/descent.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                호러
                            </div>
                            <div class="movie-name">
                                디센트
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="poster">
                           <a href="starting.php"><img src="img/starting.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                코미디
                            </div>
                            <div class="movie-name">
                                탐정 더 비기닝
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="limit.php"><img src="img/limit.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                코미디 / 액션
                            </div>
                            <div class="movie-name">
                                극한직업
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-top3">
                <div class="row">
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="longshot.php"><img src="img/longshot.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                코미디
                            </div>
                            <div class="movie-name">
                                롱샷
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="theend.php"><img src="img/the end.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                코미디
                            </div>
                            <div class="movie-name">
                                디스 이즈 더 앤드
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="voyagers.php"><img src="img/voyagers.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                SF
                            </div>
                            <div class="movie-name">
                                보이저스
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-top3">
                <div class="row">
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="nun.php"><img src="img/nun.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                호러
                            </div>
                            <div class="movie-name">
                                더 넌
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="minari.php"><img src="img/minari.jpg" alt="" class="poster-small"></a>
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
                            <a href="it.php"><img src="img/it.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                호러
                            </div>
                            <div class="movie-name">
                                그것
                            </div>   
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
    <footer>
        <div class="foot-text">About FilmOut &nbsp;&nbsp;&nbsp; <a href="mailto: ms.nununana@gmail.com" title="광고 문의" class="foot-text-link">광고</a> &nbsp;&nbsp;&nbsp; <a href="mailto: ms.nununana@gmail.com" title="문의 / 피드백" class="foot-text-link">문의 / 피드백</a></div>
    </footer>
</html>