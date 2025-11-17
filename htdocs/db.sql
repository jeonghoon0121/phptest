-- --------------------------------------------------------
-- 호스트:                          127.0.0.1
-- 서버 버전:                        8.4.6 - MySQL Community Server - GPL
-- 서버 OS:                        Win64
-- HeidiSQL 버전:                  12.13.0.7147
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- php 데이터베이스 구조 내보내기
CREATE DATABASE IF NOT EXISTS `php` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `php`;

-- 테이블 php.board 구조 내보내기
CREATE TABLE IF NOT EXISTS `board` (
  `number` int NOT NULL AUTO_INCREMENT,
  `author` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- 테이블 데이터 php.board:~0 rows (대략적) 내보내기
INSERT INTO `board` (`number`, `author`, `title`, `content`) VALUES
	(1, '홍길동', '날씨', '춥다'),
	(2, '강호동', '점심', '쌀국수'),
	(3, '유재석', '무한도전', '메인MC'),
	(4, '유재석', '무한도전', '메인MC'),
	(5, '유재석', '무한도전', '메인MC'),
	(6, '유재석', '무한도전', '메인MC'),
	(7, '유재석', '무한도전', '메인MC'),
	(8, '', '', ''),
	(9, 'test', '', ''),
	(10, 'c', '', ''),
	(11, '유재석', '무한도전', '메인MC'),
	(12, '1', '2', '3'),
	(13, '유재석', '무한도전', '메인MC'),
	(14, '유재석', '무한도전', '메인MC');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
