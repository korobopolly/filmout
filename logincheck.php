<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>

    <?php
        session_start();

        $host = 'localhost';
        $user = 'shqkd1492';
        $pw = '1234';
        $dbName = 'sungkyul';
        $mysqli = new mysqli($host, $user, $pw, $dbName);

        $id = $_POST['email'];
        $pw = $_POST['password'];

        $query = "select * from member01 where member_email='$id' and member_password='$pw'";

        $result = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_array($result);


        if ( ($id=='') || ($pw=='') ) {
            echo "<script>alert('아이디 또는 패스워드를 입력하여 주세요.');history.back();</script>";
            exit;
        }
        elseif($id==$row['member_email'] && $pw==$row['member_password']){ 

            $_SESSION['id']=$row['member_email'];
            $_SESSION['pw']=$row['member_password'];

            echo"<script>alert('로그인 성공');</script>";
            echo "<script>location.href='index.php';</script>";            
        }
        else{
            //echo"<script>alert('로그인 실패');</script>";
            echo "<script>window.alert('invalid username or password');</script>"; // 잘못된 아이디 또는 비빌번호 입니다
            echo "<script>location.href='log-in.php';</script>";
        }
    ?>

</html>
