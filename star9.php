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
                9.0 이상
            </h2>
            <section class="section-top3">
                <div class="row">
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="ready.php"><img src="img/ready.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                SF
                            </div>
                            <div class="movie-name">
                                레디 플레이 원
                            </div>   
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="matrix.php"><img src="img/matrix.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                SF / 액션
                            </div>
                            <div class="movie-name">
                                매트릭스
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="poster">
                        <a href="pianist.php"><img src="img/pianist.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                드라마
                            </div>
                            <div class="movie-name">
                                피아니스트
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
                            <a href="taxi.php"><img src="img/taxi.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                드라마
                            </div>
                            <div class="movie-name">
                                택시 운전사
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="avatar.php"><img src="img/avatar.jpeg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                SF
                            </div>
                            <div class="movie-name">
                                아바타
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