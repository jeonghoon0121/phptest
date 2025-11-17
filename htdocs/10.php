<?php
$conn = new mysqli("localhost", "root", "root", "php");

if ($conn->connect_error) {
    die("DB 연결 실패: " . $conn->connect_error);
}

if (!isset($_GET['a']) || !is_numeric($_GET['a'])) {
    die("잘못된 접근입니다.");
}
$number = (int)$_GET['a'];

$sql = "SELECT * FROM board WHERE number = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("SQL 준비 실패: " . $conn->error);
}
$stmt->bind_param("i", $number);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    echo "<h2>게시글 수정</h2>";
    echo "<form name='form1' action='11.php' method='post'>";
    echo "<input type='hidden' name='number' value='" . htmlspecialchars($row['number']) . "'>";
    echo "작성자: <input type='text' name='author' value='" . htmlspecialchars($row['author']) . "'><br>";
    echo "제목: <input type='text' name='title' value='" . htmlspecialchars($row['title']) . "'><br>";
    echo "내용: <input type='text' name='content' value='" . htmlspecialchars($row['content']) . "'><br>";
    echo "<input type='submit' value='수정하기'>";
    echo "</form>";
} else {
    echo "<p>해당 글을 찾을 수 없습니다.</p>";
}

echo '<p><a href="9.php">목록으로</a></p>';
?>
