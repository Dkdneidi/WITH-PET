<?php
 $con=mysqli_connect("localhost", "root", "1234", "pet") or die("MySQL 접속 실패");


// POST 메소드로 전송된 데이터를 받습니다.
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // 비밀번호를 해시 처리
$dog_breed = isset($_POST['dog_breed']) ? $_POST['dog_breed'] : '';
$dog_age = isset($_POST['dog_age']) ? $_POST['dog_age'] : '';
$dog_weight = isset($_POST['dog_weight']) ? $_POST['dog_weight'] : '';

$neutered = isset($_POST['neutered']) ? 1 : 0; // 중성화 수술 여부를 체크
$region = $_POST['region'];

// 데이터베이스에 새로운 회원 정보를 삽입하는 SQL 쿼리를 작성합니다.
$sql = "INSERT INTO userTBL (username, password, dog_breed, dog_age, dog_weight, neutered, region)
 VALUES (?, ?, ?, ?, ?, ?, ?)";

// SQL 쿼리를 안전하게 실행하기 위해 prepared statement를 사용합니다.
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "sssiiis", $username, $password, $dog_breed, $dog_age, $dog_weight, $neutered, $region);

// 쿼리를 실행하고 결과를 확인합니다.
$ret = mysqli_stmt_execute($stmt);

echo "<h1> 신규 회원 입력 결과 </h1>";
if($ret) {
    echo "데이터가 성공적으로 입력됨.";
}
else {
    echo "데이터 입력 실패"."<br>";
    echo "실패 원인: ".mysqli_error($con);
}

// 데이터베이스 연결을 닫습니다.
mysqli_stmt_close($stmt);
mysqli_close($con);

echo "<br> <a href='LOGIN.html'> <--초기 화면</a> ";
?>
