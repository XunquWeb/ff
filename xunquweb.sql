-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 07 月 14 日 22:15
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

CREATE TABLE IF NOT EXISTS `act` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `u_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `j_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `s_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `extra` varchar(255) NOT NULL DEFAULT ' ',
  `t_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

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
(7, 1, 'running234567', '2015-05-04 12:00:00', '2015-06-04 15:25:58', 'everyone is ok', 2),
(8, 1, 'running2345678', '2015-05-04 12:00:00', '2015-06-04 15:25:30', 'everyone is ok', 2),
(9, 1, 'running23456789', '2015-05-04 12:00:00', '2015-06-04 15:25:35', 'everyone is ok', 3),
(10, 1, 'running234567890', '2015-05-04 12:00:00', '2015-06-04 15:25:40', 'everyone is ok', 7),
(11, 1, 'wtf', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(12, 1, 'wtf1', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(13, 1, 'wtf12', '2015-05-04 12:00:00', '2015-06-04 15:25:47', 'everyone is ok', 5),
(14, 1, 'wtf123', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(15, 1, 'wtf1234', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(16, 1, 'wtf12345', '2015-05-04 12:00:00', '2015-05-05 02:00:00', 'everyone is ok', 1),
(17, 2, 'study', '0000-00-00 00:00:00', '2015-06-04 15:22:06', '', 7),
(18, 2, 'studyy', '0000-00-00 00:00:00', '2015-06-04 15:22:40', '', 7),
(19, 2, 'studyyy', '0000-00-00 00:00:00', '2015-06-04 15:22:40', '', 7),
(20, 2, 'studyyyy', '0000-00-00 00:00:00', '2015-06-04 15:22:40', '', 7),
(21, 2, 'studyyyyy', '0000-00-00 00:00:00', '2015-06-04 15:22:41', '', 7),
(22, 2, 'studyyyyyy', '0000-00-00 00:00:00', '2015-06-04 15:22:41', '', 7),
(23, 2, 'studys', '0000-00-00 00:00:00', '2015-06-04 15:22:41', '', 7),
(24, 2, 'studyss', '0000-00-00 00:00:00', '2015-06-04 15:22:41', '', 7),
(25, 2, 'studysss', '0000-00-00 00:00:00', '2015-06-04 15:23:38', '', 7),
(26, 2, 'studyssss', '0000-00-00 00:00:00', '2015-06-04 15:23:38', '', 7),
(27, 2, 'studysssss', '0000-00-00 00:00:00', '2015-06-04 15:23:38', '', 7),
(28, 2, 'studyssssss', '0000-00-00 00:00:00', '2015-06-04 15:23:38', '', 7),
(29, 2, 'study1', '0000-00-00 00:00:00', '2015-06-04 15:23:38', '', 7),
(30, 2, 'study11', '0000-00-00 00:00:00', '2015-06-04 15:23:38', '', 7),
(31, 2, 'study111', '0000-00-00 00:00:00', '2015-06-04 15:23:38', '', 7),
(32, 2, 'study1111', '0000-00-00 00:00:00', '2015-06-04 15:23:38', '', 7),
(33, 2, 'lalala', '0000-00-00 00:00:00', '2015-06-04 15:24:46', '', 2),
(34, 2, 'bobobo', '0000-00-00 00:00:00', '2015-06-04 15:24:46', '', 3),
(35, 2, 'labola', '0000-00-00 00:00:00', '2015-06-04 15:24:46', '', 4),
(36, 2, 'labobo', '0000-00-00 00:00:00', '2015-06-04 15:24:46', '', 4);

-- --------------------------------------------------------

--
-- 表的结构 `act_man`
--

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

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(0, '全部活动'),
(1, '跑步'),
(2, '拼车'),
(3, '旅行'),
(4, '公益'),
(5, '运动'),
(6, '组队'),
(7, '学习');

-- --------------------------------------------------------

--
-- 表的结构 `type_para`
--

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

CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pwd` char(41) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nname` varchar(255) NOT NULL,
  `birth` date NOT NULL DEFAULT '0000-00-00',
  `home` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `academy` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `entryy` date NOT NULL DEFAULT '0000-00-00',
  `qq` varchar(11) DEFAULT NULL,
  `wx` varchar(40) DEFAULT NULL,
  `rr` varchar(40) DEFAULT NULL,
  `fb` varchar(40) DEFAULT NULL,
  `tw` varchar(40) DEFAULT NULL,
  `estate` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `sign` varchar(255) NOT NULL,
  `pvg` int(1) NOT NULL DEFAULT '5',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `email`, `phone`, `pwd`, `name`, `nname`, `birth`, `home`, `college`, `academy`, `major`, `entryy`, `qq`, `wx`, `rr`, `fb`, `tw`, `estate`, `hobby`, `tag`, `sign`, `pvg`) VALUES
(1, '', '', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'admin1', 'admin1', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1),
(2, '', '', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'admin2', 'admin2', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2),
(3, '', '', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'admin3', 'admin3', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 3),
(4, '', '', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'admin4', 'admin4', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 4),
(5, 'youxiang@126.com', '13615468546', '000000', 'guestguestguest', 'guestguestguest', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', '2015-07-13', NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5),
(6, 'youxian@126.com', '13615468545', '000000', 'guestguestgues', 'guestguestgues', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', '2015-07-13', NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5),
(7, 'youxia@126.com', '13615468544', '000000', 'guestguestgue', 'guestguestgue', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', '2015-07-13', NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5),
(8, 'youxi@126.com', '13615468542', '000000', 'guestguestg', 'guestguestg', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', '2015-07-13', NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5),
(9, 'youx@126.com', '13615468541', '000000', 'guestguest', 'guestguest', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', '2015-07-13', NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5),
(10, 'you@126.com', '13615468540', '000000', 'guestgues', 'guestgues', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', '2015-07-13', NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
