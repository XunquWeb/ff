-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 08 月 17 日 16:54
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
  `a_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `u_id` int(10) unsigned NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `deadline` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `start_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `extra` varchar(255) NOT NULL DEFAULT ' ',
  `place` varchar(255) NOT NULL,
  `max_num` bigint(20) NOT NULL,
  `join_num` bigint(20) NOT NULL,
  `t_id` int(10) NOT NULL,
  `a_state` varchar(20) NOT NULL,
  `browse` bigint(40) NOT NULL,
  `a_like` bigint(40) NOT NULL DEFAULT '0',
  `share` bigint(20) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `act`
--

INSERT INTO `act` (`a_id`, `u_id`, `a_name`, `deadline`, `create_time`, `start_time`, `end_time`, `extra`, `place`, `max_num`, `join_num`, `t_id`, `a_state`, `browse`, `a_like`, `share`) VALUES
(1, 1, 'running', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 1, '进行中', 11, 0, 0),
(2, 1, 'running2', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 1, '进行中', 20, 0, 0),
(3, 1, 'running23', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 1, '进行中', 20, 0, 0),
(4, 1, 'running234', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 1, '进行中', 20, 0, 0),
(5, 1, 'running2345', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 1, '报名中', 20, 0, 0),
(6, 1, 'running23456', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 1, '报名中', 20, 0, 0),
(7, 1, 'running234567', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 2, '已结束', 20, 0, 0),
(8, 1, 'running2345678', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 2, '已结束', 20, 0, 0),
(9, 1, 'running23456789', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 3, '已结束', 20, 0, 0),
(10, 1, 'running234567890', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '进行中', 20, 0, 0),
(11, 1, 'wtf', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 1, '进行中', 20, 0, 0),
(12, 1, 'wtf1', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 1, '进行中', 20, 0, 0),
(13, 1, 'wtf12', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 5, '进行中', 20, 0, 0),
(14, 1, 'wtf123', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 1, '进行中', 20, 0, 0),
(15, 1, 'wtf1234', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 1, '进行中', 20, 0, 0),
(16, 1, 'wtf12345', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 1, '进行中', 20, 0, 0),
(17, 2, 'study', '0000-00-00 00:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '进行中', 20, 0, 0),
(18, 2, 'studyy', '0000-00-00 00:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '进行中', 20, 0, 0),
(19, 2, 'studyyy', '0000-00-00 00:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '进行中', 20, 0, 0),
(20, 2, 'studyyyy', '0000-00-00 00:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '进行中', 20, 0, 0),
(21, 2, 'studyyyyy', '0000-00-00 00:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '进行中', 20, 0, 0),
(22, 2, 'studyyyyyy', '0000-00-00 00:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '进行中', 20, 0, 0),
(23, 2, 'studys', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '已结束', 20, 0, 0),
(24, 2, 'studyss', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '已结束', 20, 0, 0),
(25, 2, 'studysss', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '已结束', 20, 0, 0),
(26, 2, 'studyssss', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '已结束', 20, 0, 0),
(27, 2, 'studysssss', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '已结束', 21, 0, 0),
(28, 2, 'studyssssss', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '已结束', 21, 0, 0),
(29, 2, 'study1', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '已结束', 16, 0, 0),
(30, 2, 'study11', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '已结束', 462, 0, 0),
(31, 2, 'study111', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '已结束', 33549, 0, 0),
(32, 2, 'study1111', '0000-00-00 00:00:00', '2015-08-10 04:27:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', 0, 0, 7, '已结束', 20, 0, 0),
(33, 2, '找妹子3去哪里了？', '2015-08-18 16:00:00', '2015-08-10 03:59:17', '2015-08-26 16:00:00', '2015-08-30 16:00:00', 'everyone is ok', '怎么又是清昊家', 1621, 84, 2, '报名中', 21883, 1, 4562),
(34, 2, '找妹子4', '2015-08-03 16:00:00', '2015-08-17 08:51:49', '2015-08-05 16:00:00', '2015-08-12 16:00:00', 'everyone is ok', '还是清昊家', 30, 8, 3, '进行中', 28, 3, 1),
(35, 2, '找妹子2', '2015-08-01 16:00:00', '2015-08-10 10:16:59', '2015-08-03 16:00:00', '2015-08-16 16:00:00', 'everyone is ok', '又是清昊家', 100, 40, 4, '进行中', 118, 2, 10),
(36, 2, '找妹子', '2015-08-05 16:00:00', '2015-08-17 08:49:49', '2015-08-12 16:00:00', '2015-08-23 16:00:00', 'everyone is ok', '清昊家', 100, 20, 4, '待进行', 138, 4, 15);

-- --------------------------------------------------------

--
-- 表的结构 `act_likes`
--

CREATE TABLE IF NOT EXISTS `act_likes` (
  `al_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `u_id` bigint(20) NOT NULL,
  `a_id` bigint(20) NOT NULL,
  PRIMARY KEY (`al_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `act_likes`
--

INSERT INTO `act_likes` (`al_id`, `u_id`, `a_id`) VALUES
(1, 11, 36),
(2, 11, 35),
(3, 11, 34),
(4, 11, 33),
(5, 10, 36),
(6, 9, 36),
(7, 8, 36),
(8, 9, 35),
(9, 6, 34),
(10, 5, 34),
(11, 11, 1),
(12, 11, 2);

-- --------------------------------------------------------

--
-- 表的结构 `act_man`
--

CREATE TABLE IF NOT EXISTS `act_man` (
  `am_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `a_id` int(10) unsigned NOT NULL,
  `u_id` int(10) unsigned NOT NULL,
  `am_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`am_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `act_man`
--

INSERT INTO `act_man` (`am_id`, `a_id`, `u_id`, `am_time`) VALUES
(1, 36, 11, '2015-08-05 08:06:04'),
(2, 36, 10, '2015-08-05 08:06:15'),
(3, 36, 9, '2015-08-05 08:06:20'),
(4, 36, 8, '2015-08-05 08:06:25'),
(5, 35, 11, '2015-08-05 08:06:30'),
(6, 35, 9, '2015-08-05 08:06:35'),
(7, 35, 7, '2015-08-05 08:06:40'),
(8, 34, 11, '2015-08-05 08:06:47'),
(9, 34, 6, '2015-08-05 08:06:55'),
(10, 33, 11, '2015-08-05 08:07:00'),
(11, 33, 10, '2015-08-05 08:07:08'),
(12, 36, 7, '2015-08-05 08:08:01');

-- --------------------------------------------------------

--
-- 表的结构 `follow`
--

CREATE TABLE IF NOT EXISTS `follow` (
  `f_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `follower_id` bigint(11) NOT NULL,
  `followed_id` bigint(11) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `follow`
--

INSERT INTO `follow` (`f_id`, `follower_id`, `followed_id`) VALUES
(1, 11, 4),
(2, 11, 6),
(3, 11, 7),
(4, 11, 5),
(5, 11, 7),
(6, 11, 7),
(7, 11, 5),
(8, 11, 0),
(9, 11, 0),
(10, 11, 0),
(11, 11, 0),
(12, 11, 0),
(13, 11, 0),
(14, 11, 0),
(15, 11, 1),
(16, 11, 3);

-- --------------------------------------------------------

--
-- 表的结构 `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `m_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_u_id` int(10) unsigned NOT NULL,
  `to_u_id` int(10) NOT NULL,
  `m_content` text NOT NULL,
  `unrd` int(1) unsigned NOT NULL DEFAULT '0',
  `m_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `s_id` int(1) NOT NULL,
  `a_id` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `msg`
--

INSERT INTO `msg` (`m_id`, `from_u_id`, `to_u_id`, `m_content`, `unrd`, `m_time`, `s_id`, `a_id`) VALUES
(1, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0, 0),
(2, 2, 11, 'hello', 1, '0000-00-00 00:00:00', 0, 0),
(3, 11, 40, 'hello', 0, '0000-00-00 00:00:00', 0, 0),
(4, 6, 11, 'hello', 1, '0000-00-00 00:00:00', 0, 0),
(5, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0, 0),
(6, 11, 40, 'hello15', 0, '0000-00-00 00:00:00', 0, 0),
(7, 3, 11, 'hello', 0, '0000-00-00 00:00:00', 0, 0),
(8, 11, 40, 'hello13', 0, '0000-00-00 00:00:00', 0, 0),
(9, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0, 0),
(10, 2, 11, 'hello', 0, '0000-00-00 00:00:00', 0, 0),
(11, 11, 40, 'hello10', 1, '0000-00-00 00:00:00', 1, 0),
(12, 11, 40, 'hello9', 1, '0000-00-00 00:00:00', 1, 0),
(13, 2, 11, 'hello', 1, '0000-00-00 00:00:00', 1, 0),
(14, 9, -1, 'hello7', 0, '2015-08-07 16:00:00', 2, 34),
(15, 10, 11, 'hello6', 1, '2015-08-15 16:00:00', 2, 35),
(16, 10, 11, 'hello5', 1, '2015-08-11 16:00:00', 2, 35),
(17, 10, -1, 'hello4', 0, '2015-08-06 16:00:00', 2, 36),
(18, 11, -1, 'hello3', 1, '2015-08-10 16:00:00', 2, 36),
(19, 11, 2, 'hello2', 0, '2015-08-04 16:00:00', 2, 36),
(20, 11, 3, 'hello1', 1, '2015-08-13 16:00:00', 2, 36),
(21, 5, 11, 'gverasgvaeg', 1, '2015-08-13 06:58:38', 3, 0);

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
-- 表的结构 `source`
--

CREATE TABLE IF NOT EXISTS `source` (
  `s_id` int(1) NOT NULL,
  `s_name` varchar(40) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `source`
--

INSERT INTO `source` (`s_id`, `s_name`) VALUES
(0, '系统消息'),
(1, '用户私信'),
(2, '活动评论'),
(3, '广场消息');

-- --------------------------------------------------------

--
-- 表的结构 `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `t_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `type`
--

INSERT INTO `type` (`id`, `t_name`) VALUES
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
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pwd` char(41) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nname` varchar(255) NOT NULL,
  `sex` varchar(10) NOT NULL,
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
  `rating` bigint(10) DEFAULT NULL,
  `follow_num` bigint(20) DEFAULT NULL,
  `browse_num` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `email`, `phone`, `pwd`, `name`, `nname`, `sex`, `birth`, `home`, `college`, `academy`, `major`, `entryy`, `qq`, `wx`, `rr`, `fb`, `tw`, `estate`, `hobby`, `tag`, `sign`, `pvg`, `rating`, `follow_num`, `browse_num`) VALUES
(-1, '0', '0', '0', '活动评论', '-1', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 5, NULL, NULL, NULL),
(1, '', '', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'admin1', 'admin1', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, 0, 0, 0),
(2, '', '', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'admin2', 'admin2', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, 0, 0, 0),
(3, '', '', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'admin3', 'admin3', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 3, 0, 0, 0),
(4, '', '', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'admin4', 'admin4', '', '0000-00-00', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, '', '', '', '', 4, 0, 0, 0),
(5, 'youxiang@126.com', '13615468546', '000000', 'guestguestguest', 'guestguestguest', '', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', '2015-07-13', NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5, 0, 0, 0),
(6, 'youxian@126.com', '13615468545', '000000', 'guestguestgues', 'guestguestgues', 'female', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', '2015-07-13', NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5, 0, 0, 0),
(7, 'youxia@126.com', '13615468544', '000000', 'guestguestgue', 'guestguestgue', 'male', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', '2015-07-13', NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5, 0, 0, 0),
(8, 'youxi@126.com', '13615468542', '000000', 'guestguestg', 'guestguestg', 'female', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', '2015-07-13', NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5, 0, 43324, 275252),
(9, 'youx@126.com', '13615468541', '000000', 'guestguest', 'guestguest', 'female', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', '2015-07-13', NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5, 16, 7, 56),
(10, 'you@126.com', '13615468540', '000000', 'guestgues', 'guestgues', 'male', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', '2015-07-13', NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5, 12, 3, 28),
(11, 'caozhechao@126.com', '', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', '', '土拨鼠1313', 'male', '0000-00-00', '上海闸北', 'sjtu', '', '电院信安', '0000-00-00', NULL, NULL, NULL, NULL, NULL, 'singledog', '。', '', '给清昊找妹子5', 5, 14, 15, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
