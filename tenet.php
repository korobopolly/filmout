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
            <h1 class="heading-first">테넷</h1>
            <div class="contents1"> SF / 액션
                <div class="service">
                    <div class="the spy_poster">
                        <img src="img/tenet.jpg" height="430" width="400">
                    </div>

                    <div class="contents2">
                        <h2 class="heading-grade">관람객 평점 8.3</h2>

                        <h4>당신에게 줄 건 한 단어 `테넷` </h4>
                        <h4>이해하지 말고 느껴라! </h4>

                        <div style="font-size:15px;">
                            <br>시간의 흐름을 뒤집는 인버전을 통해 현재와 미래를 오가며 세상을 파괴하려는
                            <p>토르(케네스 브래너)를 막기 위해 투입된 작전의 주도자(존 데이비드 워싱턴). </p>
                            
                            <br>버전에 대한 정보를 가진 닐(로버트 패틴슨)과 미술품 감정사이자 
                            <br>사토르에 대한 복수심이 가득한 그의 아내 캣(엘리자베스 데비키)과 협력해

                            <p>미래의 공격에 맞서 제3차 세계대전을 막아야 한다!</p>
                        </div>

                        <div class="line">
                        </div>

                        <div style="font-size:15px;">
                            <br>12+ | 2시간 30분
                            <p>과학적인 | 흥미진진한 </p>
                        </div>

                        <div class="line">
                        </div>

                        <div style="font-size:15px;">
                            <br>감독 : 크리스토퍼 놀란
                            <p>제작 : 크리스토퍼 놀란, 앰마 토마스</p> 
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
            <video src="trailer/tenet.mp4" class="video-info" controls autoplay muted></video>
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
                       <img src="img/tenet-cut.jpg" alt="" class="still-cut">
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/tenet-cut02.webp" alt="" class="still-cut">
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="poster">
                        <img src="img/tenet-cut03.jpg" alt="" class="still-cut">
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
                        <img src="img/stone.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            닐 역 
                        </div>
                        <div class="movie-name">
                           로버트 패티슨 
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/david-w.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            주도자 역 
                        </div>
                        <div class="movie-name">
                            존 데이비드 워싱턴
                        </div>
                    </div>
                </div>
        
                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/deviki.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            캣 역 
                        </div>
                        <div class="movie-name">
                           엘리자베스 데비키
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/dimple.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            프리야 역 
                        </div>
                        <div class="movie-name">
                            딤플 카파디아 
                        </div>
                    </div>
                </div>

                <div class="col-1-of-6">
                    <div class="poster">
                        <img src="img/kanes.jpg" alt="" class="poster-actor">
                        <div class="movie-genre">
                            사토르 역
                        </div>
                        <div class="movie-name">
                            케네스 브래너
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
            $search='테넷';

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