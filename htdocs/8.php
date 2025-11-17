<?php
$conn=new mysqli("localhost","root","root","php");

$a=$_GET['a'];
$sql="
DELETE FROM board WHERE NUMBER='$a';
";

$conn->query($sql);
header("Location: 9.php");
exit;
?>