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

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css?ver2">
        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
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

        
        <div class="main_text1">
            <h1 class="heading-first">007 노타임 투 다이</h1>
            <div class="contents1"> 액션 / 블록버스터
                <div class="service">
                    <div>
                        <img src="img/007.jpg" class="poster-info">
                    </div>

                    <div class="contents2">
                        <h2 class="heading-grade">관람객 평점 7.6</h2>

                        <h4>가장 강력한 운명의 적과 마주하게 된 제임스 본드의 마지막 미션이 시작된다!</h4>

                        <div style="font-size:15px;">
                            <br>MI6를 떠나 자메이카에서 평온한 시간을 보내던 본드.
                            <p>CIA 소속의 친구 펠릭스가 도움을 요청하면서 그의 평화도 깨져버린다.</p>
                            <p>납치된 과학자를 구출하는 미션은 예상보다 훨씬 위험해지고,</p>
                            <p>새로운 기술로 무장한 정체를 알 수 없는 빌런의 추적을 받게 되는데…</p>
                        </div>

                        <div class="line">
                        </div>

                        <div style="font-size:15px;">
                            <br>12+ | 2시간 43분
                            <p>블록버스터 | 시리즈 </p>
                        </div>

                        <div class="line">
                        </div>

                        <div style="font-size:15px;">
                            <br>감독 : 캐리 조지 후쿠나가
                            <p>제작 : 바바라 브로콜리, 마이클 G.윌슨</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="line-second">
        </div>

        <div class="font-info">
            예고편
        </div>

        <div class="trailer-detail">
            <video src="trailer/007.mp4" class = "video-info" controls autoplay muted></video>
        </div>

        <div class="line-second">
        </div>

        <div class="font-info">
            스틸컷
        </div>

        <section class="section-top3">
            <div class="row">
                <div class="col-1-of-3">
                    <div class="poster">
                       <img src="img/007-cut.jpg" alt="" class="still-cut">
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/007-cut02.jpg" alt="" class="still-cut">
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/007-cut03.jpg" alt="" class="still-cut">
                    </div>
                </div>
            </div>
        </section>

        <div class="line-second">
        </div>

        <div class="font-info">
            출연진
        </div>

        <section class="section-top3">
            <div class="row">
                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/hukunaga.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            감독 
                        </div>
                        <div class="movie-name">
                            캐리 조지 후쿠나가 
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/daniel.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            제임스 본드 역
                        </div>
                        <div class="movie-name">
                            다니엘 크레이그
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/rami.jpeg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            사핀 역 
                        </div>
                        <div class="movie-name">
                            라미 말렉
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/lynch.jfif" alt="" class="poster-actor">
                        <div class="movie-genre">
                            노미 역 
                        </div>
                        <div class="movie-name">
                            라샤나 린치
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/lea.jfif" alt="" class="poster-actor">
                        <div class="movie-genre">
                            스완 역
                        </div>
                        <div class="movie-name">
                            레아 세두
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/whishaw.jpg" alt="" class= "poster-actor">
                        <div class="movie-genre">
                            Q 역
                        </div>
                        <div class="movie-name">
                            벤 위쇼
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!--리뷰 시작-->
        <div class="line-second">
        </div>

        <div class="font-info">
            리뷰
        </div>

        <div class="good_bad_button">
            <div class="review-write-center">
                <input type="button" value="좋아요" class="review-write" onclick="showPopup();"/>
                <input type="button" value="별로예요" class="review-write" onclick="showPopupBad();"/>
            </div>

            <script language="javascript">
                function showPopup() { window.open("data_input.html","리뷰 쓰기","width=470,height=250,toolbars=no,menubar=no,resizable=no, scrollbars=no");}
                function showPopupBad() { window.open("data_input_bad.html","리뷰 쓰기","width=470,height=250,toolbars=no,menubar=no,resizable=no, scrollbars=no");}
            </script>
        </div>

        <?php
            $search='007노타임투다이';

            $con=mysqli_connect("localhost","shqkd1492","1234","sungkyul");
            $sql="SELECT * FROM data where data_title like '%$search%'";
            $result=mysqli_query($con,$sql);

            if($search !=''){
                while($row=mysqli_fetch_assoc($result)){
                    $data_title=$row['data_title'];
                    $data_data=$row['data_data'];
                    $data_data_bad=$row['data_data_bad'];
                    
                    if($data_data != ''){
                        echo
                        "<section class='section-review'>
                            <div class='row'>
                                <div class='col-1-of-2'> 
                                    <div class='data'>
                                        <div class='data-title'>$data_title</div>
                                        <div class='data-data'>$data_data</div><br>
                                    </div>
                                </div>

                                <div class='section-review'>
                                    <div class='data'>
                                        <img src='img/good.png' alt='' class='handsize'>
                                    </div>
                                </div>
                            </div>
                        </section>";
                    }

                    if($data_data_bad != ''){
                        echo
                        "<section class='section-top3'>
                            <div class='row'>
                                <div class='col-1-of-2'> 
                                    <div class='data'>
                                        <img src='img/bad.png' alt='' class='handsize'>
                                    </div>
                                </div>

                                <div class='col-1-of-2'>
                                    <div class='data'>
                                        <div class='data-title'>$data_title</div>
                                        <div class='data-data'>$data_data_bad</div><br>
                                    </div>
                                </div>
                            </div>
                        </section>";
                    }
                }
            }
        ?>
        
    </body> 
    <footer>
        <div class="foot-text">About FilmOut &nbsp;&nbsp;&nbsp; <a href="mailto: ms.nununana@gmail.com" title="광고 문의" class="foot-text-link">광고</a> &nbsp;&nbsp;&nbsp; <a href="https://docs.google.com/forms/d/1gH2ionU23lAPUTwCv0WHIBtoH3fgnrrdyfh9KZ42Klg/edit" title="문의 / 피드백" class="foot-text-link">문의 / 피드백</a></div>
    </footer>
 </html>      