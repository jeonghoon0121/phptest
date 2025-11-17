<?php

$conn = new mysqli("localhost", "root", "root", "php");
$a =$_POST['a'];

$sql="
CREATE TABLE IF NOT EXISTS $a (
  `number` int NOT NULL AUTO_INCREMENT,
  `author` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
";

$conn->query($sql);




?>