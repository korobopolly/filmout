<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
    <body>

        <?php

            $con = mysqli_connect("localhost","shqkd1492","1234","sungkyul");
            $sql = "select * from member01";
            $result = mysqli_query($con, $sql);
            
            while($row = mysqli_fetch_assoc($result)) {

                $member_email = $row['member_email'];
                $member_password = $row['member_password'];
                $member_password_confirm = $row['member_password_confirm'];
                $member_name = $row['member_name'];
                $member_phone = $row['member_phone'];

                echo $member_email."<br>";
                echo $member_password."<br>";
                echo $member_password_confirm."<br>";
                echo $member_name."<br>";
                echo $member_phone."<br>";
                echo "======================================"."<br>";
            } 
                
        ?>

    </body>
    <footer>
        <div class="foot-text">About FilmOut &nbsp;&nbsp;&nbsp; <a href="mailto: ms.nununana@gmail.com" title="광고 문의" class="foot-text-link">광고</a> &nbsp;&nbsp;&nbsp; <a href="https://docs.google.com/forms/d/1gH2ionU23lAPUTwCv0WHIBtoH3fgnrrdyfh9KZ42Klg/edit" title="문의 / 피드백" class="foot-text-link">문의 / 피드백</a></div>
    </footer>
</html>