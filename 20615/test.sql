-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-12-08 02:42
-- 서버 버전: 10.1.13-MariaDB
-- PHP 버전: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET latin1 NOT NULL,
  `writer` varchar(200) CHARACTER SET latin1 NOT NULL,
  `text` varchar(200) CHARACTER SET latin1 NOT NULL,
  `upload` varchar(200) CHARACTER SET latin1 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `count` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `title`, `writer`, `text`, `upload`, `date`, `count`) VALUES
(14, 'peng', 'asd', 'peng', '/20615/2197299df5227d465c6c19a060fcaa34Penguins.jpg', '2016-12-08 01:41:53', 1),
(16, '???', '???', '???', '/20615/0ecaa2a2a80dfca0031b596f23d42d2eKoala.jpg', '2016-12-08 01:41:53', 1),
(17, '???', '???', '???', '/20615/1d3d91160196e3effe4eaf5ffc34b421', '2016-12-08 01:41:53', 1),
(18, 'asdasd', 'asdasd', 'asdasd', '/20615/a3ed1255d1b589dfaba6396b5efc6c64', '2016-12-08 01:41:53', 1),
(19, 'koala', 'asd', 'ASd', '/20615/up/d20bdb0b0fb2f2a6bd6070b1b5bd9a51Koala.jpg', '2016-12-08 01:41:53', 1),
(20, 'asd', 'asd', 'asd', '/20615/up/c86398b04240f8cdcbfa0d18ca4c4907Koala.jpg', '2016-12-08 01:41:53', 1);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
