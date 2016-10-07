-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-10-07 04:17
-- 서버 버전: 10.1.16-MariaDB
-- PHP 버전: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `cccdb`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `kr_name` varchar(100) NOT NULL,
  `en_name` varchar(100) NOT NULL,
  `birth` date NOT NULL,
  `id` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `pw_ch` varchar(100) NOT NULL,
  `hnum` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `sms_ch` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `addnum` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `dm_add` int(100) NOT NULL,
  `Employer` varchar(100) NOT NULL,
  `occupations` varchar(100) NOT NULL,
  `spot` varchar(100) NOT NULL,
  `work_addnum` varchar(100) NOT NULL,
  `work_address` varchar(200) NOT NULL,
  `work_address2` varchar(200) NOT NULL,
  `work_hnum` varchar(100) NOT NULL,
  `work_pnum` varchar(100) NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `wedding_anniversary` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
