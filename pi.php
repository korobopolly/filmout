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
            <h1 class="heading-first">라이프 오브 파이 </h1>
            <div class="contents1"> 어드벤처/드라마
                <div class="service">
                    <div>
                        <img src="img/pi.jpg" class="poster-info">
                    </div>

                    <div class="contents2">
                        <h2 class="heading-grade">관람객 평점 8.3</h2>

                        <h4>“지금부터 엄청난 이야기를 들려 드리죠.
                        <br>아마 믿기 힘들지도 모르겠지만.”</h4>

                        <div style="font-size:15px;">
                            <br><p>인도에서 동물원을 운영하던 ‘파이’의 가족은 동물들을 싣고 이민을 떠나는 도중 거센 폭풍우를 만나고 배는 침몰한다. 혼자</p>
                            <p>살아남은 파이는 가까스로 구명보트에 올라 타지만 다친 얼룩말과 굶주린 하이에나, 그리고 오랑우탄과 함께 표류하게 된다.</p>
                            <p>하지만 모두를 놀라게 만든 진짜 주인공은 바로 보트 아래에 몸을 숨기고 있던 벵골 호랑이 ‘리처드 파커’! 배고픔에 허덕이는</p>
                            <p>동물들은 서로를 공격하고 결국 파이와 리처드 파커만이 배에 남게 되는데…</p>
                        </div>

                        <div class="line">
                        </div>

                        <div style="font-size:15px;">
                            <br><p> 12+ | 2시간 6분 </p>  
                            <p> 어드벤처/드라마</p> <!--추후 수정-->
                        </div>

                        <div class="line">
                        </div>

                        <div style="font-size:15px;">
                            <br><p>감독 : 이안</p> 
                            <p>수상 :  MTV 영화 & TV상</p> 
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
            <video src="trailer/pi.mp4" class = "video-info" controls autoplay muted></video>
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
                       <img src="img/pi-cut.jpg" alt="" class="still-cut">
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/pi-cut02.jpg" alt="" class="still-cut">
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/pi-cut03.jpg" alt="" class="still-cut">
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
                        <img src="img/ian.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            감독 
                        </div>
                        <div class="movie-name">
                        이안
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/sharema.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                        파이 파텔 역
                        </div>
                        <div class="movie-name">
                        수라즈 샤르마
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/irepan.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                        파이 파텔 역
                        </div>
                        <div class="movie-name">
                        이르판 칸
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/spol.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                        작가 역
                        </div>
                        <div class="movie-name">
                        라프 스폴
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
            $search='라이프오브파이';

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