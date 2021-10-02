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
        <link rel="stylesheet" href="css/style.css?ver1">
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
            <h1 class="heading-first">똥파리</h1>
            <div class="contents1">독립영화 / 드라마 / 청소년관람불가
                <div class="service">
                    <div>
                        <img src="img/fly.jpg" class="poster-info">
                    </div>

                    <div class="contents2">
                        <h2 class="heading-grade">관람객 평점 9.1</h2>

                        <h4>2009년 한국영화 중 국제영화제 최다 초청, 최다 수상의 화제작!</h4>

                        <div style="font-size:15px;">
                            <br><p>동료든 적이든 가리지 않고 욕하고 때리며 자기 내키는 대로 살아 온 용역 깡패 상훈.</p>
                            <p>세상 무서울 것 없는 상훈이지만, 그에게도 마음 속에 쉽게 떨쳐내지 못할 깊은 상처가 있다. </p>
                            <p> 바로 ‘가족’이라는 이름이 남긴 슬픔이다.</p>
                            
                            <br><p>그러던 어느 날, 우연히 길에서 여고생 연희와 시비가 붙은 상훈. </p>
                            <p>그렇게 조금은 평화로운 일상을 보내던 어느 날,</p>
                            <p>아버지가 15년 만에 출소하면서 상훈은 격한 감정에 휩싸이는데….</p>
                        </div>

                        <div class="line">
                        </div>

                        <div style="font-size:15px;">
                            <br><p>18+ | 2시간 10분</p>
                            <p>감동적인 | 청춘 </p>
                        </div>

                        <div class="line">
                        </div>

                        <div style="font-size:15px;">
                            <br><p>감독 : 양익준</p>
                            <p> 수상 : 맥스무비 최고의 영화상</p> 
                        </div>
                </div>
            </div>
        </div>

        <div class="line-second">
        </div>

        <div class="font-info">
            상영관
        </div>

        <div class="trailer-detail">
            <video src="trailer/fly.mp4" class = "video-info" controls autoplay muted></video>
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
                       <img src="img/fly-cut.jpg" alt="" class="still-cut">
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/fly-cut02.jpg" alt="" class="still-cut">
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/fly-cut03.jpg" alt="" class="still-cut">
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
                        <img src="img/ik-jun.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            감독 
                        </div>
                        <div class="movie-name">
                            양익준
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/ik-jun.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            상훈 역 
                        </div>
                        <div class="movie-name">
                            양익준
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/flower-rain.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            연희
                        </div>
                        <div class="movie-name">
                            김꽃비
                        </div>
                    </div>
                </div>
        
                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/lee-hwan.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            영재 역 
                        </div>
                        <div class="movie-name">
                            이환
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/man-sik.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            만식 역 
                        </div>
                        <div class="movie-name">
                            정만식 
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/seung-hoon.jpg" alt="" class= "poster-actor">
                        <div class="movie-genre">
                            환규 역
                        </div>
                        <div class="movie-name">
                            윤승훈
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
            $search='똥파리';

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
        <div class="foot-text">About FilmOut &nbsp;&nbsp;&nbsp; <a href="mailto: ms.nununana@gmail.com" title="광고 문의" class="foot-text-link">광고</a> &nbsp;&nbsp;&nbsp; <a href="mailto: ms.nununana@gmail.com" title="문의 / 피드백" class="foot-text-link">문의 / 피드백</a></div>
    </footer>
 </html>      