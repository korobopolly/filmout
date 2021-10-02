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
            <h1 class="heading-first">피아니스트  </h1>
            <div class="contents1"> 전쟁/드라마
                <div class="service">
                    <div>
                        <img src="img/pianist.jpg" class="poster-info">
                    </div>

                    <div class="contents2">
                        <h2 class="heading-grade">관람객 평점 9.3</h2>

                        <h4>영혼을 움직이는 선율! 전 세계를 울린 감동 실화극!</h4>

                        <div style="font-size:15px;">
                            <br><p>1939년 폴란드 바르샤바. 유명한 유대계 피아니스트 블라디슬로프 스필만은 한 인기 라디오 프로그램에서 쇼팽의 야상곡을</p>
                            <p>연주하다 폭격을 당한다. 이후 유태인인 스필만과 가족들은 게토에서 생활하지만, 결국 수용소로 향하는 기차에 몸을 싣게</p>
                            <p>된다. 가족들을 죽음으로 내보내고 간신히 목숨을 구한 스필만은 허기와 추위, 고독과 공포 속에서 마지막까지 생존을 지켜</p>
                            <p>나간다. 나치의 세력이 확장될 수록 자신을 도와주던 몇몇의 사람마저 떠나자 완전히 혼자가 되어 자신만의 은신처에서 끈질</p>
                            <p>기게 생존을 유지하는 스필만. 어둠과 추위로 가득한 폐건물 속에서 은신생활 중 스필만은 우연찮게 순찰을 돌던 독일 장교</p>
                            <p>에게 발각되고 지상에서의 마지막 연주가 될 지도 모르는 순간, 온 영혼을 손끝에 실어 연주를 시작하는데….</p>
                        </div>

                        <div class="line">
                        </div>

                        <div style="font-size:15px;">
                            <br><p> 12+ | 2시간 28분 </p>  
                            <p> 전쟁/드라마 </p> <!--추후 수정-->
                        </div>

                        <div class="line">
                        </div>

                        <div style="font-size:15px;">
                            <br><p>감독 : 로만 폴란스키</p> 
                            <p>수상 :  아카데미 시상식</p> 
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
            <video src="trailer/pianist.mp4" class = "video-info" controls autoplay muted></video>
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
                       <img src="img/pianist-cut.jpg" alt="" class="still-cut">
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/pianist-cut02.jpg" alt="" class="still-cut">
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/pianist-cut03.jpg" alt="" class="still-cut">
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
                        <img src="img/planski.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            감독 
                        </div>
                        <div class="movie-name">
                        로만 폴란스키
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/adrian.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                        블라디슬로 스필만 역
                        </div>
                        <div class="movie-name">
                        애드리언 브로디
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/tomascrechi.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                        윌름 호센펠드 장교 역
                        </div>
                        <div class="movie-name">
                        토마스 크레취만
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/emiliafox.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                        도로타 역
                        </div>
                        <div class="movie-name">
                        에밀리아 폭스
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/pinray.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                        아버지 역 
                        </div>
                        <div class="movie-name">
                        프랭크 핀레이
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/ripman.jpg" alt="" class= "poster-actor">
                        <div class="movie-genre">
                        어머니 역
                        </div>
                        <div class="movie-name">
                        모린 립맨
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
            $search='피아니스트';

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