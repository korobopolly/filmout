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
            <h1 class="heading-first">롱 샷  </h1>
            <div class="contents1"> 코미디/로맨스/멜로
                <div class="service">
                    <div>
                        <img src="img/longshot.jpg" class="poster-info">
                    </div>

                    <div class="contents2">
                        <h2 class="heading-grade">관람객 평점 7.3</h2>

                        <h4>어리다고 놀리지 말아요! 첫사랑 베이비시터 누나 ♥</h4>

                        <div style="font-size:15px;">
                            <br><p>전직 기자 지금은 백수인 ‘프레드 플라스키’(세스 로건)는 20년 만에 첫사랑 베이비시터 ‘샬롯 필드’(샤를리즈 테론)와 재회한다.</p>
                            
                            <br><p>그런데 그녀가!?</p>
                            <p>미 최연소 국무 장관이자 세계에서 가장 영향력 있는 여성 중 한 명인 ‘샬롯’이 바로 베이비시터 그녀라는 것은 믿기지 않지만 실화이다.</p>

                            <br><p>인생에 공통점이라고는 1도 없는 두 사람.</p>
                            <p>대선 후보로 출마를 준비 중인 ‘샬롯’은 모두의 예상을 깨고 자신의 선거 캠페인 연설문 작가로 ‘프레드’를 고용한다. 어디로</p>
                            <p>튈지 모르는 ‘프레드’ 때문에 선거 캠페인은 연일 비상인 가운데, 뜻밖에 그의 스파크는 ‘샬롯’과의 로맨스로 튀어 버리는데...</p>

                            <br><p>사고 치는데 천부적인 재능이 있는 남자,</p>
                            <p>머리부터 발끝까지 완벽한 여자</p>
                        </div>

                        <div class="line">
                        </div>

                        <div style="font-size:15px;">
                            <br><p> 15+ | 2시간 5분 </p>  
                            <p> 		코미디/로맨스/멜로</p> <!--추후 수정-->
                        </div>

                        <div class="line">
                        </div>

                        <div style="font-size:15px;">
                            <br><p>감독 : 조나단 레빈</p> 
                            <p>수상 :  없음</p> 
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
            <video src="trailer/longshot.mp4" class = "video-info" controls autoplay muted></video>
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
                       <img src="img/longshot-cut.jpg" alt="" class="still-cut">
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/longshot-cut02.jpg" alt="" class="still-cut">
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/longshot-cut03.jpg" alt="" class="still-cut">
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
                        <img src="img/levine.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            감독 
                        </div>
                        <div class="movie-name">
                        조나단 레빈
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/rogun.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                        프레드 플라스키 역
                        </div>
                        <div class="movie-name">
                        세스 로건
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/teron.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                        샬럿 필드 역
                        </div>
                        <div class="movie-name">
                        샤를리즈 테론
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/rapael.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                        매기 밀리킨 역
                        </div>
                        <div class="movie-name">
                        준 다이안 라파엘
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
            $search='롱샷';

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