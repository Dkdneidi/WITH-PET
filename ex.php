<?php



// 데이터베이스 연결 설정
$hostname = "localhost";
$username = "root";
$password = "1234";
$database = "withpet";

// MySQLi 객체를 생성하고 데이터베이스에 연결
$conn = new mysqli($hostname, $username, $password, $database);
$conn->set_charset("utf8");
$conn->set_charset("utf8mb4");

// 연결 에러 확인
if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

// 데이터베이스에서 데이터를 선택하는 쿼리 생성
$sql = "SELECT * FROM wpdata";

// 쿼리 실행
$result = $conn->query($sql);

// 쿼리 실행이 성공했는지 확인
if ($result) {
    // 결과의 행 수가 0보다 큰지 확인
    if ($result->num_rows > 0) {
        // HTML 테이블 생성
        echo "<table border='1'>";
        echo "<tr><th>시설명</th><th>카테고리1</th><th>카테고리2</th><th>카테고리3</th>...</tr>";
        
        // 결과를 한 행씩 가져와서 테이블에 출력
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['시설명']) . "</td>";
            echo "<td>" . htmlspecialchars($row['카테고리1']) . "</td>";
            echo "<td>" . htmlspecialchars($row['카테고리2']) . "</td>";
            echo "<td>" . htmlspecialchars($row['카테고리3']) . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "<p>검색 결과가 없습니다.</p>";
    }
} else {
    // 쿼리 실행 실패 시 오류 메시지 출력
    echo "오류: " . $conn->error;
}

// 데이터베이스 연결 종료
$conn->close();
?>
