-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-11-04 03:36
-- 서버 버전: 10.1.16-MariaDB
-- PHP 버전: 5.6.24

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
-- 테이블 구조 `bar`
--

CREATE TABLE `bar` (
  `idx` int(11) NOT NULL,
  `upload` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, '3232', 'ㅅㅂ', '2016-11-03 23:54:24', '2323', '23', ''),
(37, 'ㅁㄴㅇ', 'ㅁㄴㅇ', '2016-11-04 02:34:38', '', 'ㅁㄴㅇ', 'C:/xampp/htdocsfileupload\\upbad8982fb7e2d3dea84eb4ee08a357eJellyfish.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `bar`
--
ALTER TABLE `bar`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `bar`
--
ALTER TABLE `bar`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
