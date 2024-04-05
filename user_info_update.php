<?php
session_start();
require 'db_connect.php'; // 데이터베이스 연결 설정 파일

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 폼 제출 데이터 받기
    // 폼 제출 데이터 받기
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $dog_name = $_POST['dog_name']; // 이 부분이 누락되어 있었습니다.
    $password = $_POST['password'];
    $dog_breed = $_POST['dog_breed'];
    $neutered = $_POST['neutered'];
    $region = $_POST['region'];

    

    // 비밀번호 해싱
    $newPasswordHashed = password_hash($password, PASSWORD_DEFAULT);

    // 현재 로그인한 사용자의 원래 비밀번호를 데이터베이스에서 가져옵니다.
    $stmt = $pdo->prepare("SELECT password FROM usertbl WHERE id = :id");
    $stmt->bindValue(':id', $_SESSION['user_id']);
    $stmt->execute();
    $user = $stmt->fetch();

    // 비밀번호 검증
    if ($user && password_verify($password, $user['password'])) {
        // 'neutered' 값을 정수로 변환
        $neutered_value = ($neutered === 'yes') ? 1 : 0;

        // 비밀번호와 다른 정보 업데이트
        $sql = "UPDATE usertbl SET password = :password, dog_name = :dog_name, dog_breed = :dog_breed, neutered = :neutered, region = :region WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':password', $newPasswordHashed); // 수정된 부분: 새 비밀번호 해싱
        $stmt->bindValue(':dog_name', $dog_name);
        $stmt->bindValue(':dog_breed', $dog_breed);
        $stmt->bindValue(':neutered', $neutered_value, PDO::PARAM_INT);
        $stmt->bindValue(':region', $region);
        $stmt->bindValue(':id', $_SESSION['user_id']);
        $stmt->execute();

    $_SESSION['dog_name'] = $dog_name; // 회원 정보 업데이트 후 강아지 이름을 세션에 저장
    
    $_SESSION['username'] = $username;
    $_SESSION['dog_breed'] = $dog_breed; // 강아지 종
    $_SESSION['neutered'] = $neutered; // 중성화 여부
    $_SESSION['region'] = $region; // 



        // 정보 업데이트 성공 후 메시지 설정
        $_SESSION['update_success'] = "회원 정보가 성공적으로 업데이트되었습니다.";
        header('Location: index.php');
        exit;
    } else {
        // 비밀번호가 틀렸을 경우 에러 메시지 설정
        $_SESSION['error_message'] = "비밀번호가 틀렸습니다.";
        header('Location: user_info_edit.php'); // 정보 수정 페이지로 다시 리디렉션
        exit;
    }
} else {
    // POST 메소드가 아닌 경우 처리하지 않음
    header('Location: user_info_edit.php');
    exit;
}
?>
