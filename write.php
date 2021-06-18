<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
<!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />-->
	<?php

		$host = 'localhost';
		$user = 'shqkd1492';
		$pw = '1234';
		$dbName = 'sungkyul';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$member_email = $_POST['email'];
		$member_password = $_POST['password'];
		$member_password_confirm = $_POST['password_confirm'];
		$member_name = $_POST['name'];
		$member_phone = $_POST['phone'];

		$sql = "insert into member01 (
				member_email,
				member_password,
				member_password_confirm,
				member_name,
				member_phone
		)";
		
		$sql = $sql. "values (
				'$member_email',
				'$member_password',
				'$member_password_confirm',
				'$member_name',
				'$member_phone'
		)";
		
		if ($member_email=='') {
            echo "<script>alert('아이디를 입력해 주세요.');history.back();</script>";
            exit;
        }elseif($member_password==''){
			echo "<script>alert('비밀번호를 입력해 주세요.');history.back();</script>";
            exit;
		}elseif($member_password_confirm==''){
			echo "<script>alert('비밀번호 확인을 입력해 주세요.');history.back();</script>";
            exit;
		}elseif($member_password_confirm != $member_password){
			echo "<script>alert('비밀번호가 일치하지않습니다.');history.back();</script>";
			exit;
		}elseif($member_name==''){
			echo "<script>alert('이름을 입력해 주세요.');history.back();</script>";
            exit;
		}elseif($member_phone=='010-'){
			echo "<script>alert('전화번호를 입력해 주세요.');history.back();</script>";
            exit;
		}elseif($mysqli->query($sql)){ 
		echo '<script>alert("success inserting")</script>'; 
		}else{ 
		echo '<script>alert("fail to insert sql")</script>';
		}

		mysqli_close($mysqli);
	
	?>

	<script>
		location.href = "log-in.php";
	</script>

</html>