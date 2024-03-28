<?php
require 'db_connect.php'; // 데이터베이스 연결 파일 포함

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // 비밀번호 해싱

$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
  echo "회원가입 성공! <a href='login.html'>로그인 페이지로 이동</a>";
} else {
  echo "오류: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
