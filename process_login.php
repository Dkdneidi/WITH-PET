<?php
session_start();
require 'db_connect.php'; // 데이터베이스 연결 파일 포함

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT id, password FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
  if (password_verify($password, $user['password'])) {
    // 로그인 성공
    $_SESSION['loggedin'] = true;
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $username;
    
    header("Location: index.html"); // 홈페이지로 리디렉션
  } else {
    echo "잘못된 비밀번호입니다.";
  }
} else {
  echo "존재하지 않는 사용자입니다.";
}

$stmt->close();
$conn->close();
?>
