-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 06 月 02 日 22:39
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `xunquweb`
--
CREATE DATABASE IF NOT EXISTS `xunquweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `xunquweb`;

-- --------------------------------------------------------

--
-- 表的结构 `act`
--

DROP TABLE IF EXISTS `act`;
CREATE TABLE IF NOT EXISTS `act` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `u_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `j_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `s_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `extra` varchar(255) DEFAULT NULL,
  `t_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `act`
--

INSERT INTO `act` (`id`, `u_id`, `name`, `j_time`, `s_time`, `extra`, `t_id`) VALUES
(1, 1, 'running', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(2, 1, 'running2', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(3, 1, 'running23', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(4, 1, 'running234', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(5, 1, 'running2345', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(6, 1, 'running23456', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(7, 1, 'running234567', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(8, 1, 'running2345678', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(9, 1, 'running23456789', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(10, 1, 'running234567890', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(11, 1, 'wtf', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(12, 1, 'wtf1', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(13, 1, 'wtf12', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(14, 1, 'wtf123', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(15, 1, 'wtf1234', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(16, 1, 'wtf12345', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1);

-- --------------------------------------------------------

--
-- 表的结构 `act_man`
--

DROP TABLE IF EXISTS `act_man`;
CREATE TABLE IF NOT EXISTS `act_man` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `a_id` int(10) unsigned NOT NULL,
  `u_id` int(10) unsigned NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `msg`
--

DROP TABLE IF EXISTS `msg`;
CREATE TABLE IF NOT EXISTS `msg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_u_id` int(10) unsigned NOT NULL,
  `to_u_id` int(10) unsigned NOT NULL,
  `data` text NOT NULL,
  `rd` int(1) unsigned NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `from_act` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `msg`
--

INSERT INTO `msg` (`id`, `from_u_id`, `to_u_id`, `data`, `rd`, `time`, `from_act`) VALUES
(1, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(2, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(3, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(4, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(5, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(6, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(7, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(8, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(9, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(10, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(11, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(12, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(13, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(14, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(15, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(16, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(17, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(18, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(19, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0),
(20, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- 表的结构 `reg`
--

DROP TABLE IF EXISTS `reg`;
CREATE TABLE IF NOT EXISTS `reg` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `g_id` int(11) NOT NULL,
  `reg_text` text NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `type_para`
--

DROP TABLE IF EXISTS `type_para`;
CREATE TABLE IF NOT EXISTS `type_para` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `t_id` int(10) unsigned NOT NULL,
  `num` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `view` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `type_para`
--

INSERT INTO `type_para` (`id`, `t_id`, `num`, `name`, `tag`, `view`) VALUES
(1, 1, 1, 'time1', 'tag of time1', 1),
(2, 1, 2, 'time2', 'tag of time2', 1),
(3, 1, 3, 'addr1', 'tag of addr1', 2),
(4, 1, 4, 'addr2', 'tag of addr2', 2),
(5, 2, 1, '哈蔬菜', '?????????', 1),
(6, 2, 2, '??????', '???????????1??', 1);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `pwd` char(41) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `email`, `pwd`, `name`, `phone`) VALUES
(1, 'lg4.15@sjtu.edu.cn', '*E56A114692FE0DE073F9A1DD68A00EEB9703F3F1', '?', '15021127085'),
(2, '15592164758@163.com', '*84AAC12F54AB666ECFC2A83C676908C8BBC381B1', NULL, NULL),
(3, '15592164759@163.com', '*84AAC12F54AB666ECFC2A83C676908C8BBC381B1', NULL, NULL),
(4, '15592164769@163.com', '*84AAC12F54AB666ECFC2A83C676908C8BBC381B1', NULL, NULL),
(5, '15592164869@163.com', '*84AAC12F54AB666ECFC2A83C676908C8BBC381B1', NULL, NULL),
(37, 'lglglglg@lg.com', '*E9D057131C22A0D76B4AAD2C61655BDFA706E637', NULL, NULL),
(38, 'lglglglglglglglglgl@123.com', '*F01CE2206B8B90A823047C884552F8B13E691133', NULL, NULL),
(39, 'lg4.15@sjtu.edu.cm', '*0B0A8BA0BB47561FA5C1FE726FFDFFC56F3FF585', NULL, NULL),
(40, 'youxiang@126.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
