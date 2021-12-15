-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- ホスト: mysql152.phy.lolipop.lan
-- 生成日時: 2021 年 11 月 30 日 09:53
-- サーバのバージョン: 5.6.23-log
-- PHP のバージョン: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `LAA1291595-system`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `Marklist`
--

CREATE TABLE IF NOT EXISTS `Marklist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `telephone` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- テーブルのデータのダンプ `Marklist`
--

INSERT INTO `Marklist` (`id`, `name`, `longitude`, `latitude`, `telephone`) VALUES
(1, 'マルショク駅南店', 33.5824, 130.424, 924743582),
(2, 'マックスバリュエクスプレス博多消防署通り店', 33.5838, 130.418, 924020515),
(3, 'サニー駅南店', 33.5824, 130.427, 924745733),
(4, 'マミーズ　美野島店', 33.5803, 130.418, 92),
(5, 'レガネットキュートテラソ店', 33.5872, 130.424, 922921949),
(6, 'ミスターマックスSelect美野島店', 33.5795, 130.42, 924512010);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
