<?php
session_start();
include 'db.php'; // 데이터베이스 연결 설정 포함

$username = $_POST['username'];
$password = $_POST['password'];

try {
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // 세션에 사용자 정보 저장
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        // 로그인 성공, 홈페이지로 리디렉션
        header("Location: index.php");
    } else {
        echo '로그인 실패: 아이디 또는 비밀번호가 틀렸습니다.';
    }
} catch (PDOException $e) {
    echo "로그인 실패: " . $e->getMessage();
}
?>
