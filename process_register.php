<?php
// 데이터베이스 설정
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "1234";
$dbName = "pet";

// 데이터베이스 연결
$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$con->set_charset('utf8mb4');

// 연결 오류 확인
if ($con->connect_error) {
    die("연결 실패: " . $con->connect_error);
}

// POST 메소드로 전송된 데이터를 받습니다.
$username = $_POST['username'] ?? '';
$password = isset($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : '';
$dog_breed = $_POST['dog_breed'] ?? '';
$dog_age = $_POST['dog_age'] ?? 0;
$dog_weight = $_POST['dog_weight'] ?? 0.0;
$neutered = isset($_POST['neutered']) && $_POST['neutered'] === 'yes' ? 1 : 0;
$region = $_POST['region'] ?? '';

// SQL 쿼리 준비
$sql = "INSERT INTO usertbl (username, password, dog_breed, dog_age, dog_weight, neutered, region) VALUES (?, ?, ?, ?, ?, ?, ?)";

// Prepared statement 준비
$stmt = $con->prepare($sql);
if (!$stmt) {
    die('prepare() failed: ' . htmlspecialchars($con->error));
}

// 변수 바인딩
if (!$stmt->bind_param("sssiids", $username, $password, $dog_breed, $dog_age, $dog_weight, $neutered, $region)) {
    die('bind_param() failed: ' . htmlspecialchars($stmt->error));
}

// 쿼리 실행
if ($stmt->execute()) {
    // 회원가입 성공 메시지 및 로그인 페이지로 가는 버튼
    echo "<p>회원가입 성공했습니다.</p>";
    echo "<a href='login.html'><button>로그인하러가기</button></a>";
} else {
    // 데이터 입력 실패 메시지 및 다시 시도하는 페이지로 가는 버튼
    echo "<p>데이터 입력 실패: " . $stmt->error . "</p>";
    echo "<p>다시 시도해주세요.</p>";
    echo "<a href='register.html'><button>다시 시도하기</button></a>";
}

// 연결 닫기
$stmt->close();
$con->close();
?>
