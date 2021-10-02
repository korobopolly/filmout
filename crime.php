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
                    장르를 선택해주세요
                </button>

                <ul class="dropdown-menu">
                    <div class="dropdown-item" onclick="location.href='comedy.php'" style="cursor:pointer;">
                        <button type="button" value="1" class="dropdown-option" >
                            코미디
                        </button>
                        </div>
                    <div class="dropdown-item" onclick="location.href='sf.php'" style="cursor:pointer;">
                        <button type="button" value="2" class="dropdown-option" >
                            SF
                        </button>
                    </div>
                    <div class="dropdown-item" onclick="location.href='drama.php'" style="cursor:pointer;">
                        <button type="button" value="3" class="dropdown-option">
                            드라마
                        </button>
                    </div>
                    <div class="dropdown-item" onclick="location.href='thriller.php'" style="cursor:pointer;">
                        <button type="button" value="4" class="dropdown-option">
                            스릴러
                        </button>
                    </div>
                    <div class="dropdown-item" onclick="location.href='crime.php'" style="cursor:pointer;">
                        <button type="button" value="5" class="dropdown-option">
                            범죄
                        </button>
                    </div>
                    <div class="dropdown-item" onclick="location.href='horror.php'" style="cursor:pointer;">
                        <button type="button" value="6" class="dropdown-option">
                            호러
                        </button>
                    </div>
                </ul>
            </div> 
        </form>

        <script src="./yours.js"></script>
    
        <div class="uptown">
    
            <h2 class="heading-secondary--genre">
                범죄
            </h2>
            <section class="section-top3">
                <div class="row">
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="cruella.php"><img src="img/cruella.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                범죄
                            </div>
                            <div class="movie-name">
                                크루엘라
                            </div>
                        </div>
                    </div>
        
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="newworld.php"><img src="img/newworld.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                범죄
                            </div>
                            <div class="movie-name">
                                신세계
                            </div>
                        </div>
                    </div>
        
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="crimecity.php"><img src="img/crimecity.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                범죄 / 액션
                            </div>
                            <div class="movie-name">
                                범죄도시
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-top3">
                <div class="row">
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
        
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="war.php"><img src="img/war.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                범죄
                            </div>
                            <div class="movie-name">
                                범죄와의 전쟁
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
        
            <section class="section-top3">
                <div class="row">
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="saw.php"><img src="img/saw.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                스릴러
                            </div>
                            <div class="movie-name">
                                악마를 보았다
                            </div>
                        </div>
                    </div>
        
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="prison.php"><img src="img/prison.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                범죄
                            </div>
                            <div class="movie-name">
                                프리즌
                            </div>
                        </div>
                    </div>
        
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="now.php"><img src="img/now.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                범죄
                            </div>
                            <div class="movie-name">
                                나우 유 씨미 : 마술 사기단
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