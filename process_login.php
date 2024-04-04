<?php
session_start();
require 'db_connect.php'; // 데이터베이스 연결 설정 파일

$username = $_POST['username'];
$password = $_POST['password'];

// 데이터베이스 쿼리 준비
$sql = "SELECT id, password FROM usertbl WHERE username = :username";
$stmt = $pdo->prepare($sql);

// 변수 바인딩
$stmt->bindValue(':username', $username);

// 쿼리 실행
$stmt->execute();

// 결과 가져오기
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    // 로그인 성공
    $_SESSION['loggedin'] = true;
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $username;

    header("Location: index.php");
    exit;
} else {
    // 로그인 실패
    $_SESSION['error'] = "로그인 실패!";
    header("Location: login_fail.php"); // 로그인 페이지로 리디렉션
    exit;
}
?>
