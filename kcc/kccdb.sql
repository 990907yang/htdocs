-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-10-07 03:35
-- 서버 버전: 10.1.16-MariaDB
-- PHP 버전: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `kccdb`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `year` int(10) NOT NULL,
  `month` int(10) NOT NULL,
  `day` int(10) NOT NULL,
  `id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `pnum` varchar(50) NOT NULL,
  `ok` tinyint(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `add_num` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `name`, `year`, `month`, `day`, `id`, `password`, `pnum`, `ok`, `email`, `add_num`, `address`) VALUES
(2, 'asd', 1960, 1, 1, 'admin', '1234', '', 0, 'yyy@naver.com', '', ''),
(3, 'daa', 1960, 1, 2, 'asdf', 'aaaa', '010-1234-1234', 1, '1234@naver.com', '05257', '서울 강동구 고덕로 162 (명일동)너네집'),
(4, 'daa', 1960, 1, 2, 'asdf', '11111', '010-1234-1234', 1, '1234@naver.com', '05257', '서울 강동구 고덕로 162 (명일동)너네집'),
(5, 'daa', 1960, 1, 2, 'asdf', '11', '010-1234-1234', 1, '1234@naver.com', '05257', '서울 강동구 고덕로 162 (명일동)너네집'),
(6, 'daa', 1960, 1, 2, 'asdf', '13123', '010-1234-1234', 1, '1234@naver.com', '05257', '서울 강동구 고덕로 162 (명일동)너네집'),
(7, 'daa', 1960, 1, 2, 'asdf', '14124', '010-1234-1234', 1, '1234@naver.com', '05257', '서울 강동구 고덕로 162 (명일동)너네집'),
(8, 'ㅁㄴㅇ', 1960, 2, 2, 'ㅁ', 'ds', '010ㅇㄴㄴㅇ', 1, 'ㅁㄴㅇ', '07791', '서울 강서구 강서로 463 (마곡동, (주)좋은책신사고마곡제2사옥)ㅁㄹ'),
(9, 'daa', 1960, 1, 2, 'asdf', '5555', '010-5555-2555', 1, 'yam0907@naver.com', '14555', '경기 부천시 춘의동 156-15555'),
(10, 'daa', 1960, 1, 2, '11', '4144', '010-5555-2555', 1, 'yam0907@naver.com', '14555', '경기 부천시 춘의동 156-15555'),
(11, '2222', 1960, 1, 2, '22', '22', '0102222', 1, '22', '01182', '서울 강북구 솔매로22가길 5 (미아동)22'),
(12, '2222', 1960, 1, 2, '22', 'ddddddd', '0102222', 1, '22', '01182', '서울 강북구 솔매로22가길 5 (미아동)22'),
(13, 'ㅇㅇㅇ', 1962, 2, 4, 'ㅇㅇ', 'dd', '010-3333-3333', 1, 'hslee22@sen.go.kr', '42678', '대구 달서구 야외음악당로 35-1 (성당동, 대성교회)ㅇㅇㅇ'),
(14, 'daa', 1960, 3, 3, '4', '5', '010-1234-1234', 1, 'yam0907@naver.com', '25601', '강원 강릉시 내곡동 29799'),
(15, 'daa', 1960, 2, 3, 's', 's', '010-1234-1234', 1, 'yam0907@naver.com', '12400', '경기 가평군 북면 논남기길 187-36 (적목리)sssss'),
(16, 'daa', 1960, 1, 1, '8', '5', '010-1234-1234', 1, 'yam0907@naver.com', '25601', '강원 강릉시 범일로555번길 2 (내곡동)555'),
(17, 'assadf', 1960, 3, 2, 'aass', 'aaaassss', '010aaaaaaa', 1, 'asdf@naver.com', '44532', '울산 중구 만남의거리 14 (성남동, 성남 119 안전센터)asdf'),
(18, 'asdf', 1960, 1, 2, 'asas', 'asasas', '010asasassa', 1, 'sa@naver.com', '49071', '부산 영도구 나눔길 1 (영선동2가)sadf');

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
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
