<?php
header("Content-Type: text/html; charset=UTF-8");

$a = isset($_GET["a"]) ? trim($_GET["a"]) : "";
$b = isset($_GET["b"]) ? trim($_GET["b"]) : "";

// 디버깅용 출력
echo "입력된 ID: '$a'<br>";
echo "입력된 PW: '$b'<br>";

if ($a == "a" && $b == "1234") {
    echo "로그인성공";
} else {
    echo "로그인 실패";
}
?>
