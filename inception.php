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
            <h1 class="heading-first">인셉션</h1>
            <div class="contents1"> SF / 액션
                <div class="service">
                    <div>
                        <img src="img/inception.jpg" class="poster-info">
                    </div>

                    <div class="contents2">
                        <h2 class="heading-grade">관람객 평점 8.7</h2>

                        <h4>꿈 VS 현실</h4>

                        <div style="font-size:15px;">
                            <br>타인의 꿈에 들어가 생각을 훔치는 특수 보안요원 코브.
                            <p>그를 이용해 라이벌 기업의 정보를 빼내고자 하는 사이토는 </p>
                            <p>코브에게 생각을 훔치는 것이 아닌, 생각을 심는 ‘인셉션’ 작전을 제안한다.</p>
                            <p>성공 조건으로 국제적인 수배자가 되어있는 코브의 신분을 바꿔주겠다는</p>
                            <p>거부할 수 없는 제안을 하고, 사랑하는 아이들에게 돌아가기 위해 그 제안을 받아들인다.</p>
                            <p>예기치 못한 사건들과 마주하게 되는데…</p>
                        </div>

                        <div class="line">
                        </div>

                        <div style="font-size:15px;">
                            <br>12+ | 2시간 27분    
                            <p>액션 | 긴장감있는 </p>
                        </div>

                        <div class="line">
                        </div>

                        <div style="font-size:15px;">
                            <br>감독 : 크리스토퍼 놀란    
                            <p>제작 : 크리스토퍼 놀란, 엠마 토마스</p> 
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
            <video src="trailer/inception.mp4" class = "video-info" controls autoplay muted></video>
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
                       <img src="img/inception-cut.jpg" alt="" class="still-cut">
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/inception-cut02.jpg" alt="" class="still-cut">
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/inception-cut03.jpg" alt="" class="still-cut">
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
                        <img src="img/cristoper.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            감독 
                        </div>
                        <div class="movie-name">
                            크리스토퍼 놀란
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/leonardo.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            돔 코브 역
                        </div>
                        <div class="movie-name">
                            레오나르도 디카프리오
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/joseph.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            아서 역
                        </div>
                        <div class="movie-name">
                            조셉 고든 레빗
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/mario.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            맬 역
                        </div>
                        <div class="movie-name">
                            마리오 꼬띠아르
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/hardy.jpg" alt="" class= "poster-actor">
                        <div class="movie-genre">
                            임스 역 
                        </div>
                        <div class="movie-name">
                            톰 하디
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/page.jpg" alt="" class= "poster-actor">
                        <div class="movie-genre">
                            아리아드네 역
                        </div>
                        <div class="movie-name">
                            엘리엇 페이지
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
            $search='인셉션';

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