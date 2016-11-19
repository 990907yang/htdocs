-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-11-19 19:42
-- 서버 버전: 10.1.9-MariaDB
-- PHP 버전: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `db`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(11) NOT NULL,
  `writer` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `count` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `upload` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `writer`, `title`, `date`, `count`, `content`, `upload`) VALUES
(58, '혜리2', '혜리', '2016-11-19 18:40:39', '', '혜리혜리', '/fileupload/up/50552dbd81cca402d25947c63abe4090aa.jpg'),
(59, '혜리', '혜리', '2016-11-19 18:41:19', '', '혜리', '/fileupload/up/4470a4bb6cae3a5c3cea25a5dd2077d9aa.jpg'),
(60, '혜리', '혜리', '2016-11-19 18:41:27', '', '혜리', '/fileupload/up/3c33ada6929a700c275793b19e6d22acaa.jpg'),
(61, '혜리', '혜리', '2016-11-19 18:41:35', '', '혜리', '/fileupload/up/ff6c7c6ae110e2476f39c85357fa2d00aa.jpg'),
(62, '혜리', '혜리', '2016-11-19 18:41:43', '', '혜리', '/fileupload/up/a2393d2b2b30de26d3b26cd24c338053aa.jpg');

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `name`, `id`, `password`, `email`) VALUES
(1, '양경식', 'admin', '1234', 'yam0907@naver.com'),
(2, '양경식', 'admin', '1234', 'yam0907@naver.com'),
(3, 'asd', 'admin', '', 'asd'),
(4, 'asd', 'admin', '', 'asd'),
(5, 'asd', 'admin', '', 'asd'),
(6, 'asd', 'admin', '1234', 'asd'),
(7, 'as', 'admin', '1234', 'as'),
(8, 'as', 'admin', '1234', 'asd'),
(9, 'as', 'admin', '1234', 'as'),
(10, 'asd', 'admin', '1234', 'asd@naver.com'),
(11, 'asd', 'admin', '123456', 'asd@naver.com');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
