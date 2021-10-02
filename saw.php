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
            <h1 class="heading-first">악마를 보았다.</h1>
            <div class="contents1"> 스릴러 / 액션
                <div class="service">
                    <div class="the spy_poster">
                        <img src="img/saw.jpg" height="430" width="400">
                    </div>

                    <div class="contents2">
                        <h2 class="heading-grade">관람객 평점 9.2</h2>

                        <h4>악마 같은 연쇄살인마 그리고… </h4>
                        <h4>그에게 약혼녀를 잃고 그 고통을 뼛속 깊이 되갚아 주려는 한 남자</h4>
                        <h4>그들의 광기 어린 대결이 시작된다</h4>

                        <div style="font-size:15px;">
                            <br>국정원 경호요원 ‘수현(이병헌)’은 약혼녀 주연이 잔인하게 살해당하자
                            <p>자신에게 가장 소중한 사람을 지켜내지 못했다는 자괴감과 분노로 가장 고통스러운 복수를 다짐한다.</p>
                            
                            
                            <br>수현은 연쇄살인마 ‘장경철(최민식)’이 범인임을 알아내고
                            <br>죽을 만큼의 고통만 가하고 놓아주기를 반복하며 처절한 응징을 시작한다.

                            
                        </div>

                        <div class="line">
                        </div>

                        <div style="font-size:15px;">
                            <br>18+ | 2시간 24분
                            <p>복수 | 흥미진진한 </p>
                        </div>

                        <div class="line">
                        </div>

                        <div style="font-size:15px;">
                            <br>감독 : 김지운
                            <p> 수상 : 백상예술대상 | 영화 대상, 브뤼셀국제판타스틱영화제 황금까마귀상</p> 
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
            <video src="trailer/saw.mp4" class="video-info" controls autoplay muted></video>
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
                       <img src="img/saw-cut.jpg" alt="" class="still-cut">
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/saw-cut02.jpg" alt="" class="still-cut">
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/saw-cut03.jpg" alt="" class="still-cut">
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
                        <img src="img/kim-j.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            감독 
                        </div>
                        <div class="movie-name">
                            김지운
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/byung-hun.png" alt="" class="poster-actor">
                        <div class="movie-genre">
                            수현 역 
                        </div>
                        <div class="movie-name">
                           이병헌
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/min-sik.png" alt="" class="poster-actor">
                        <div class="movie-genre">
                            경철 역 
                        </div>
                        <div class="movie-name">
                            최민식
                        </div>
                    </div>
                </div>
        
                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/gook-han.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            장반장 역 
                        </div>
                        <div class="movie-name">
                           전국환
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/ho-jin.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                           오과장 역 
                        </div>
                        <div class="movie-name">
                            천호진 
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/san-ha.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            주연 역
                        </div>
                        <div class="movie-name">
                            오산하
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
            $search='악마를보았다';

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