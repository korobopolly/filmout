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
                            <a href="quiet.php"><img src="img/quiet.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                호러
                            </div>
                            <div class="movie-name">
                                콰이어트 플레이스 2
                            </div>
                        </div>
                    </div>


                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="lucky.php"><img src="img/lucky.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                코미디
                            </div>
                            <div class="movie-name">
                                럭키
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
                           <a href="tenet.php"><img src="img/tenet.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                SF / 액션
                            </div>
                            <div class="movie-name">
                                테넷
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
                           <a href="starting.php"><img src="img/starting.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                코미디
                            </div>
                            <div class="movie-name">
                                탐정 더 비기닝
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-top3">
                <div class="row">
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="contect.php"><img src="img/contect.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                SF
                            </div>
                            <div class="movie-name">
                                컨택트
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
                            <a href="martian.php"><img src="img/martian.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                SF
                            </div>
                            <div class="movie-name">
                                마션
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-top3">
                <div class="row">
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
                            <a href="opphan.php"><img src="img/opphan.jpeg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                스릴러 / 공포
                            </div>
                            <div class="movie-name">
                                오펀 : 천사의 비밀
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-top3">
                <div class="row">
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

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="getout.php"><img src="img/getout.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                스릴러
                            </div>
                            <div class="movie-name">
                                겟아웃
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
                            <a href="knives.php"><img src="img/knives.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                스릴러 / 미스터리
                            </div>
                            <div class="movie-name">
                                나이브스아웃
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-top3">
                <div class="row">
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="conjuring.php"><img src="img/conjuring.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                호러
                            </div>
                            <div class="movie-name">
                                컨저링3 : 악마가 시켰다
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
                           <a href="oldman.php"><img src="img/oldman.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                스릴러 / 범죄
                            </div>
                            <div class="movie-name">
                                노인을 위한 나라는 없다
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-top3">
                <div class="row">
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

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="inception.php"><img src="img/inception.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                SF / 액션
                            </div>
                            <div class="movie-name">
                                인셉션
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
                            <a href="terminal.php"><img src="img/terminal.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                드라마
                            </div>
                            <div class="movie-name">
                                터미널
                            </div>
                        </div>
                    </div>

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
                </div>
            </section>

            <section class="section-top3">
                <div class="row">
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
                            <a href="bucket.php"><img src="img/bucket.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                드라마
                            </div>
                            <div class="movie-name">
                                버킷리스트
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-top3">
                <div class="row">
                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="bad.php"><img src="img/bad.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                코미디
                            </div>
                            <div class="movie-name">
                                나쁜 이웃들
                            </div>
                        </div>
                    </div>  

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="walter.php"><img src="img/walter.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                드라마
                            </div>
                            <div class="movie-name">
                                월터의 상상은 현실이 된다
                            </div>
                        </div>
                    </div>

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
                </div>
            </section>

            <section class="section-top3">
                <div class="row">
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

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="intern.php"><img src="img/intern.png" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                드라마
                            </div>
                            <div class="movie-name">
                                인턴
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
                            <a href="pi.php"><img src="img/pi.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                드라마
                            </div>
                            <div class="movie-name">
                                라이브 오브 파이
                            </div>   
                        </div>
                    </div>

                    <div class="col-1-of-3">
                        <div class="poster">
                            <a href="life.php"><img src="img/life.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                SF
                            </div>
                            <div class="movie-name">
                                라이프
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
                            <a href="devil.php"><img src="img/devil.jpg" alt="" class="poster-small"></a>
                            <div class="movie-genre">
                                드라마
                            </div>
                            <div class="movie-name">
                                악마는 프라다를 입는다
                            </div>
                        </div>
                    </div>                 
                </div>
            </section>
        </div>
    </body>
    <footer>
        <div class="foot-text">About FilmOut &nbsp;&nbsp;&nbsp; <a href="mailto: ms.nununana@gmail.com" title="광고 문의" class="foot-text-link">광고</a> &nbsp;&nbsp;&nbsp; <a href="https://docs.google.com/forms/d/1gH2ionU23lAPUTwCv0WHIBtoH3fgnrrdyfh9KZ42Klg/edit" title="문의 / 피드백" class="foot-text-link">문의 / 피드백</a></div>
    </footer>
</html>