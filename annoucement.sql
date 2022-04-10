-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2022-04-10 14:36:57
-- 伺服器版本： 5.7.31
-- PHP 版本： 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `annoucement`
--

DROP TABLE IF EXISTS `annoucement`;
CREATE TABLE IF NOT EXISTS `annoucement` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `annoucement`
--

INSERT INTO `annoucement` (`id`, `title`, `text`) VALUES
(2, 'ssssssssdd', 'sssddddddddddddddd'),
(3, '', 'aaaaaaaaaa'),
(4, 'æ¸¬è©¦æ¸¬è©¦æ¸¬è©¦', 'æ¸¬è©¦æ¸¬è©¦æ¸¬è©¦æ¸¬è©¦æ¸¬è©¦æ¸¬è©¦æ¸¬è©¦æ¸¬è©¦æ¸¬è©¦æ¸¬è©¦æ¸¬è©¦'),
(5, 'æˆ‘æ˜¯', 'æˆ‘æ˜¯'),
(8, 'eee', 'e'),
(9, 'eee', 'ee'),
(10, 'eee', 'e'),
(11, 'ss', 'sss'),
(12, 'xxxxxxxxxxxx', 'x'),
(13, 'x', 'xs'),
(14, 'aaa', 'aa'),
(15, 'a', 'aaa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
