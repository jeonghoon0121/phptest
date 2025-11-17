<?php
// 데이터베이스 연결
$conn = new mysqli("localhost", "root", "root", "php");

// 연결 오류 확인
if ($conn->connect_error) {
    die("DB 연결 실패: " . $conn->connect_error);
}

// POST로 받은 데이터 확인
if (!isset($_POST['number']) || !is_numeric($_POST['number'])) {
    die("잘못된 접근입니다.");
}

$number = (int)$_POST['number'];
$author = $_POST['author'];
$title = $_POST['title'];
$content = $_POST['content'];

// 수정 쿼리 실행
$sql = "UPDATE board SET author = ?, title = ?, content = ? WHERE number = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("SQL 준비 실패: " . $conn->error);
}
$stmt->bind_param("sssi", $author, $title, $content, $number);
$stmt->execute();

// 수정 후 목록 페이지로 이동
header("Location: 9.php");
exit;
?>
