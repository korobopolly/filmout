<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <?php
        $host = 'localhost';
		$user = 'shqkd1492';
		$pw = '1234';
		$dbName = 'sungkyul';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

        $data_title=$_POST['title'];
        $data_title=addslashes($data_title);
        $data_data_bad=$_POST['data'];
        $data_data_bad=addslashes($data_data_bad);

        $sql="insert into data(
            data_title,
            data_data_bad
        )";

        $sql=$sql."values(
            '$data_title',
            '$data_data_bad'
        )";

        if($mysqli->query($sql)){
            echo '<script>alert("success inserting")</script>';
        }else{
            echo '<script>alert("fail to insert sql")</script>';
        }

        mysqli_close($mysqli);
    ?>

    <script>
        location.href="data_input_bad.html";
    </script>
</html>