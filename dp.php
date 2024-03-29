<?php
$host = "localhost";
$user = "root";
$pass = "1234";
$dbname = "pet";

$con = mysqli_connect($host, $user, $pass, $dbname);
if (!$con) {
    die("MySQL 접속 실패: " . mysqli_connect_error());
}
echo "데이터베이스 연결 성공!";
// 다른 작업을 진행합니다...
// mysqli_close($con); // 사용이 끝나면 연결을 닫습니다.
?>
