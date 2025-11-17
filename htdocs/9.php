<?php
$conn = new mysqli("localhost", "root", "root", "php");

$sql = "SELECT * FROM board";
$result = $conn->query($sql);

echo "<table border='1'>";
echo "<tr><th>번호</th><th>작성자</th><th>제목</th><th>상세보기</th><th>삭제</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['number'] . "</td>";
    echo "<td>" . $row['author'] . "</td>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td><a href='10.php?a=" . $row['number'] . "'>보기</a></td>";
    echo "<td><a href='8.php?a=" . $row['number'] . "'>삭제</a></td>";
    echo "</tr>";
}
echo "</table>";

// 글쓰기 링크
echo '<p><a href="6.html">글쓰기</a></p>';
?>
