-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Sep 12, 2015 at 11:09 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `xunquweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `act`
--

CREATE TABLE `act` (
`a_id` int(10) unsigned NOT NULL,
  `u_id` int(10) unsigned NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `deadline` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `start_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `extra` varchar(255) NOT NULL DEFAULT ' ',
  `a_college` varchar(50) NOT NULL,
  `place` varchar(255) NOT NULL,
  `max_num` bigint(20) NOT NULL,
  `join_num` bigint(20) NOT NULL DEFAULT '0',
  `t_id` int(10) NOT NULL DEFAULT '0',
  `a_state` varchar(20) NOT NULL DEFAULT '求队友',
  `browse` bigint(40) NOT NULL DEFAULT '0',
  `a_like` bigint(40) NOT NULL DEFAULT '0',
  `share` bigint(20) NOT NULL DEFAULT '0',
  `a_check` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `act`
--

INSERT INTO `act` (`a_id`, `u_id`, `a_name`, `deadline`, `create_time`, `start_time`, `end_time`, `extra`, `a_college`, `place`, `max_num`, `join_num`, `t_id`, `a_state`, `browse`, `a_like`, `share`, `a_check`) VALUES
(1, 1, 'running', '2015-05-04 12:00:00', '2015-09-11 05:35:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 1, '已结束', 11, 0, 0, 0),
(2, 1, 'running2', '2015-05-04 12:00:00', '2015-08-26 11:16:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 1, '已结束', 21, 0, 0, 0),
(3, 1, 'running23', '2015-05-04 12:00:00', '2015-08-21 09:10:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 1, '已结束', 20, 0, 0, 0),
(4, 1, 'running234', '2015-05-04 12:00:00', '2015-08-21 09:10:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 1, '已结束', 20, 0, 0, 0),
(5, 1, 'running2345', '2015-05-04 12:00:00', '2015-09-11 04:13:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 1, '已结束', 30, 0, 0, 0),
(6, 1, 'running23456', '2015-05-04 12:00:00', '2015-08-21 09:10:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 1, '已结束', 20, 0, 0, 0),
(7, 1, 'running234567', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 2, '已结束', 20, 0, 0, 0),
(8, 1, 'running2345678', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 2, '已结束', 20, 0, 0, 0),
(9, 1, 'running23456789', '2015-05-04 12:00:00', '2015-08-10 02:49:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 3, '已结束', 20, 0, 0, 0),
(10, 1, 'running234567890', '2015-05-04 12:00:00', '2015-09-11 06:28:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 20, 0, 0, 0),
(11, 1, 'wtf', '2015-05-04 12:00:00', '2015-08-21 09:10:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 1, '已结束', 20, 0, 0, 0),
(12, 1, 'wtf1', '2015-05-04 12:00:00', '2015-08-21 09:10:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 1, '已结束', 20, 0, 0, 0),
(13, 1, 'wtf12', '2015-05-04 12:00:00', '2015-09-11 06:28:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 5, '已结束', 20, 0, 0, 0),
(14, 1, 'wtf123', '2015-05-04 12:00:00', '2015-08-21 09:10:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 1, '已结束', 20, 0, 0, 0),
(15, 1, 'wtf1234', '2015-05-04 12:00:00', '2015-08-21 09:10:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 1, '已结束', 20, 0, 0, 0),
(16, 1, 'wtf12345', '2015-05-04 12:00:00', '2015-09-04 13:29:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 1, '已结束', 63, 0, 0, 0),
(17, 2, 'study', '0000-00-00 00:00:00', '2015-09-11 06:28:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 20, 0, 0, 0),
(18, 2, 'studyy', '0000-00-00 00:00:00', '2015-09-11 06:28:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 20, 0, 0, 0),
(19, 2, 'studyyy', '0000-00-00 00:00:00', '2015-09-11 06:28:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 20, 0, 0, 0),
(20, 2, 'studyyyy', '0000-00-00 00:00:00', '2015-09-11 06:28:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 20, 0, 0, 0),
(21, 2, 'studyyyyy', '0000-00-00 00:00:00', '2015-09-11 06:28:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 20, 0, 0, 0),
(22, 2, 'studyyyyyy', '0000-00-00 00:00:00', '2015-09-11 06:28:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 20, 0, 0, 0),
(23, 2, 'studys', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 20, 0, 0, 0),
(24, 2, 'studyss', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 20, 0, 0, 0),
(25, 2, 'studysss', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 20, 0, 0, 0),
(26, 2, 'studyssss', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 20, 0, 0, 0),
(27, 2, 'studysssss', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 21, 0, 0, 0),
(28, 2, 'studyssssss', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 21, 0, 0, 0),
(29, 2, 'study1', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 16, 0, 0, 0),
(30, 2, 'study11', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 462, 0, 0, 0),
(31, 2, 'study111', '0000-00-00 00:00:00', '2015-08-10 03:57:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 33549, 0, 0, 0),
(32, 2, 'study1111', '0000-00-00 00:00:00', '2015-08-10 04:27:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'everyone is ok', '', '', 0, 0, 7, '已结束', 20, 0, 0, 0),
(33, 2, '找妹子3去哪里了？', '2015-08-18 16:00:00', '2015-09-11 06:28:43', '2015-08-26 16:00:00', '2015-08-30 16:00:00', 'everyone is ok', '上海交大', '怎么又是清昊家', 1621, 84, 2, '已结束', 21886, 1, 4562, 0),
(34, 2, '找妹子4', '2015-08-03 16:00:00', '2015-08-26 09:57:22', '2015-08-05 16:00:00', '2015-08-12 16:00:00', 'everyone is ok', '上海交大', '还是清昊家', 30, 8, 3, '已结束', 28, 3, 1, 0),
(35, 2, '找妹子2', '2015-08-01 16:00:00', '2015-09-04 17:51:55', '2015-08-03 16:00:00', '2015-08-16 16:00:00', 'everyone is ok', '上海交大', '又是清昊家', 100, 40, 4, '已结束', 122, 2, 10, 0),
(36, 2, '找妹子', '2015-08-05 16:00:00', '2015-09-03 06:44:06', '2015-08-12 16:00:00', '2015-08-23 16:00:00', 'everyone is ok', '上海交大', '清昊家', 100, 20, 4, '已结束', 150, 4, 15, 0),
(37, 11, 'frewgwrege', '2015-08-13 00:00:00', '2015-08-31 05:29:09', '2015-08-13 00:00:00', '2015-08-13 09:00:00', '', 'erwgerwgewrgerw', 'gerwgwegwe', 20, 0, 0, '已结束', 0, 0, 0, 0),
(38, 11, 'frewgwrege', '2015-08-13 00:00:00', '2015-08-31 05:29:09', '2015-08-13 00:00:00', '2015-08-13 09:00:00', '', 'erwgerwgewrgerw', 'gerwgwegwe', 20, 0, 0, '已结束', 0, 0, 0, 0),
(39, 11, 'frewgwrege', '2015-08-13 00:00:00', '2015-08-31 05:29:09', '2015-08-13 00:00:00', '2015-08-13 09:00:00', '', 'erwgerwgewrgerw', 'gerwgwegwe', 20, 0, 0, '已结束', 0, 0, 0, 0),
(40, 11, 'freergerg', '2015-08-13 00:00:00', '2015-08-31 05:29:08', '2015-08-13 00:00:00', '2015-08-13 09:00:00', '', 'sdfgdfgdsg', 'dgfgsdgdsg', 20, 0, 0, '已结束', 0, 0, 0, 0),
(41, 11, 'freergerg', '2015-08-13 00:00:00', '2015-08-31 05:29:08', '2015-08-13 00:00:00', '2015-08-13 09:00:00', 'csbbvsdybvsdbvsdbvubdsubvsudbsybvy', 'sdfgdfgdsg', 'dgfgsdgdsg', 20, 0, 0, '已结束', 0, 0, 0, 0),
(42, 11, 'csffvrgerges', '2015-08-13 00:00:00', '2015-09-04 14:26:19', '2015-08-13 00:00:00', '2015-08-13 09:00:00', '                    \r\n                vnreguverbwugbuewrgbuergeriheurgurehuehreir', 'gerggerhrthrt', 'hrthrthrthrthrehre', 25, 0, 0, '已结束', 9, 0, 0, 0),
(43, 11, 'gregergerg', '2015-08-13 00:00:00', '2015-09-11 04:06:28', '2015-08-13 00:00:00', '2015-08-13 09:00:00', 'grewwwwwwwwwwwwwwwwwwwwwwwwwww', 'ergergererg', 'ergergerger', 200, 1, 0, '已结束', 34, 0, 0, 0),
(44, 11, '234', '0000-00-00 00:00:00', '2015-09-09 13:52:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '哈哈哈哈                    \r\n                ', '交通大学', '阳曲路', 40, 0, 0, '已结束', 3, 0, 0, 0),
(45, 11, '你好呀', '0000-00-00 00:00:00', '2015-09-09 15:24:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '哈哈哈         \r\n                ', '交通大学', '阳曲路', 30, 0, 4, '已结束', 0, 0, 0, 0),
(46, 11, 'test', '0000-00-00 00:00:00', '2015-09-09 15:24:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '你逗我呢。。。。             \r\n                ', '华东师范大学', '大活', 25, 0, 1, '已结束', 0, 0, 0, 0),
(47, 11, 'test', '0000-00-00 00:00:00', '2015-09-09 15:24:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '你逗我呢。。。。             \r\n                ', '华东师范大学', '哈哈哈', 25, 0, 1, '已结束', 0, 0, 0, 0),
(48, 11, '哈哈哈', '0000-00-00 00:00:00', '2015-09-09 15:24:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '          哈哈哈          \r\n                ', '华东师范大学', '阳曲路', 12, 0, 1, '已结束', 0, 0, 0, 0),
(49, 11, '哈哈哈', '0000-00-00 00:00:00', '2015-09-09 15:24:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '          哈哈哈          \r\n                ', '华东师范大学', '阳曲路', 12, 0, 1, '已结束', 0, 0, 0, 0),
(50, 11, '哈哈哈', '0000-00-00 00:00:00', '2015-09-11 06:10:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '你好你好\r\n                ', '交通大学', '阳曲路', 123, 0, 3, '已结束', 3, 0, 0, 0),
(51, 11, 'wfnuser', '1970-01-01 00:00:10', '2015-09-11 03:46:45', '1970-01-01 00:00:10', '1970-01-01 00:00:11', '                    \r\n                哈哈哈哈', '交通大学', '阳曲路', 25, 0, 1, '已结束', 2, 0, 0, 0),
(52, 11, 'wfnuser', '2015-09-10 01:31:00', '2015-09-12 13:37:21', '2015-10-10 01:31:00', '2015-09-11 01:31:00', '                    \r\n                哈哈哈哈', '交通大学', '阳曲路', 25, 0, 1, '酝酿中', 4, 0, 0, 0),
(53, 11, 'wfnuser', '2015-09-10 01:31:00', '2015-09-12 13:37:21', '2015-10-10 01:31:00', '2015-09-11 01:31:00', '                    \r\n                哈哈哈哈', '交通大学', '阳曲路', 25, 0, 1, '酝酿中', 36, 0, 0, 0),
(54, 11, '你不行啊', '2015-09-12 11:41:00', '2015-09-11 16:17:28', '2015-09-14 11:41:00', '2015-09-19 11:41:00', '                    \r\n               你不行你需变短发风景 ', '交通大学', '阳曲路', 20, 1, 6, '求队友', 25, 0, 0, 0),
(55, 11, 'fgfjf', '2015-09-12 02:00:00', '2015-09-12 10:56:52', '2015-09-14 02:00:00', '2015-09-16 02:00:00', '    2132131                \r\n                ', 'jiagfhgj', 'dhdhfdd', 12, 0, 4, '求队友', 7, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `act_likes`
--

CREATE TABLE `act_likes` (
`al_id` bigint(20) NOT NULL,
  `u_id` bigint(20) NOT NULL,
  `a_id` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `act_likes`
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
(12, 11, 2),
(13, 11, 16),
(14, 11, 16),
(15, 11, 16),
(16, 11, 16),
(17, 11, 16),
(18, 11, 43),
(19, 11, 42),
(20, 11, 42),
(21, 11, 35),
(22, 11, 35),
(23, 11, 44),
(24, 11, 44),
(25, 11, 53),
(26, 11, 5),
(27, 11, 54),
(28, 11, 54),
(29, 11, 55);

-- --------------------------------------------------------

--
-- Table structure for table `act_man`
--

CREATE TABLE `act_man` (
`am_id` int(10) unsigned NOT NULL,
  `a_id` int(10) unsigned NOT NULL,
  `u_id` int(10) unsigned NOT NULL,
  `am_jointime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `am_signup` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `am_state` int(1) NOT NULL,
  `am_name` varchar(20) NOT NULL,
  `am_phone` varchar(20) NOT NULL,
  `am_sex` varchar(20) DEFAULT NULL,
  `am_email` varchar(255) DEFAULT NULL,
  `am_college` varchar(40) NOT NULL,
  `am_entryy` year(4) DEFAULT NULL,
  `am_extra` varchar(255) NOT NULL,
  `am_qq` varchar(11) DEFAULT NULL,
  `am_wx` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `act_man`
--

INSERT INTO `act_man` (`am_id`, `a_id`, `u_id`, `am_jointime`, `am_signup`, `am_state`, `am_name`, `am_phone`, `am_sex`, `am_email`, `am_college`, `am_entryy`, `am_extra`, `am_qq`, `am_wx`) VALUES
(1, 36, 11, '2015-08-05 08:06:04', '2015-08-31 02:24:49', 0, '', '', '', '', '', 0000, '', '0', NULL),
(2, 36, 10, '2015-08-05 08:06:15', '2015-08-31 02:24:49', 0, '', '', '', '', '', 0000, '', '0', NULL),
(3, 36, 9, '2015-08-05 08:06:20', '2015-08-31 02:24:49', 0, '', '', '', '', '', 0000, '', '0', NULL),
(4, 36, 8, '2015-08-05 08:06:25', '2015-08-31 02:24:49', 0, '', '', '', '', '', 0000, '', '0', NULL),
(5, 35, 11, '2015-08-05 08:06:30', '2015-08-31 02:24:49', 0, '', '', '', '', '', 0000, '', '0', NULL),
(6, 35, 9, '2015-08-05 08:06:35', '2015-08-31 02:24:49', 0, '', '', '', '', '', 0000, '', '0', NULL),
(7, 35, 7, '2015-08-05 08:06:40', '2015-08-31 02:24:49', 0, '', '', '', '', '', 0000, '', '0', NULL),
(8, 34, 11, '2015-08-05 08:06:47', '2015-08-31 02:24:49', 0, '', '', '', '', '', 0000, '', '0', NULL),
(9, 34, 6, '2015-08-05 08:06:55', '2015-08-31 02:24:49', 0, '', '', '', '', '', 0000, '', '0', NULL),
(10, 33, 11, '2015-08-05 08:07:00', '2015-08-31 02:24:49', 0, '', '', '', '', '', 0000, '', '0', NULL),
(11, 33, 10, '2015-08-05 08:07:08', '2015-08-31 02:24:49', 0, '', '', '', '', '', 0000, '', '0', NULL),
(12, 36, 7, '2015-08-05 08:08:01', '2015-08-31 02:24:49', 0, '', '', '', '', '', 0000, '', '0', NULL),
(13, 2, 11, '2015-08-26 11:16:45', '2015-08-31 02:24:49', 0, 'conan', '11111111111', NULL, NULL, 'dwefweffw', NULL, '                    fffafafwefweffffffffffew\r\n                ', NULL, NULL),
(14, 4, 11, '2015-08-31 02:26:22', '2015-08-31 02:26:22', 0, 'greger', 'gergregerg', NULL, NULL, 'gdgfsds', NULL, 'gdgrgrehtrhtrsdhsr', NULL, NULL),
(15, 50, 11, '2015-09-09 15:06:43', '2015-09-09 15:06:43', 0, '黄清昊', '18616907530', NULL, NULL, '交通大学', NULL, '                哈哈哈    \r\n                ', NULL, NULL),
(16, 53, 11, '2015-09-10 15:45:16', '2015-09-10 15:45:16', 0, '黄清昊', '18616907530', NULL, NULL, '交通大学', NULL, '                    \r\n        你不行你绪病        ', NULL, NULL),
(17, 43, 11, '2015-09-11 03:47:23', '2015-09-11 03:47:23', 0, '黄清昊', '18616907530', NULL, NULL, '交通大学', NULL, '                    \r\n         我是一个好学生       ', NULL, NULL),
(18, 54, 11, '2015-09-11 12:55:18', '2015-09-11 12:55:18', 0, '你好呀', '18616907530', NULL, NULL, '交通大学', NULL, '太弱了吧也           \r\n                ', NULL, NULL),
(19, 55, 11, '2015-09-11 12:55:18', '2015-09-12 10:22:56', 0, '你好呀', '18616907530', NULL, NULL, '交通大学', NULL, 'hahahah                ', NULL, NULL);

--
-- Triggers `act_man`
--
DELIMITER //
CREATE TRIGGER `trigger_actman` BEFORE INSERT ON `act_man`
 FOR EACH ROW SET NEW.am_signup = CURRENT_TIMESTAMP
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
`f_id` bigint(11) NOT NULL,
  `follower_id` bigint(11) NOT NULL,
  `followed_id` bigint(11) NOT NULL,
  `f_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`f_id`, `follower_id`, `followed_id`, `f_time`) VALUES
(3, 11, 8, '2015-08-13 04:52:06'),
(5, 11, 10, '2015-08-31 04:52:06'),
(6, 11, 7, '2015-08-31 04:52:06'),
(8, 11, 1, '2015-08-03 04:52:06'),
(9, 11, 2, '2015-08-22 04:39:06'),
(10, 11, 9, '2015-08-06 04:52:06'),
(14, 11, 15, '2015-08-31 04:52:06'),
(15, 1, 3, '2015-08-31 04:52:06'),
(16, 5, 11, '2015-08-31 04:52:06'),
(24, 11, 3, '2015-09-11 08:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
`m_id` int(10) unsigned NOT NULL,
  `from_u_id` int(10) unsigned NOT NULL,
  `to_u_id` int(10) NOT NULL,
  `m_content` mediumtext NOT NULL,
  `unrd` int(1) unsigned NOT NULL DEFAULT '0',
  `m_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `s_id` int(1) NOT NULL,
  `a_id` bigint(20) NOT NULL DEFAULT '0',
  `rp_id` bigint(40) NOT NULL,
  `floor` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`m_id`, `from_u_id`, `to_u_id`, `m_content`, `unrd`, `m_time`, `s_id`, `a_id`, `rp_id`, `floor`) VALUES
(1, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, 2, 11, 'hello', 0, '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, 11, 40, 'hello', 0, '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 6, 11, 'hello', 0, '0000-00-00 00:00:00', 0, 0, 0, 0),
(5, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0, 0, 0, 0),
(6, 11, 40, 'hello15', 0, '0000-00-00 00:00:00', 0, 0, 0, 0),
(7, 3, 11, 'hello', 0, '0000-00-00 00:00:00', 0, 0, 0, 0),
(8, 11, 40, 'hello13', 0, '0000-00-00 00:00:00', 0, 0, 0, 0),
(9, 2, 40, 'hello', 0, '0000-00-00 00:00:00', 0, 0, 0, 0),
(10, 2, 11, 'hello', 0, '0000-00-00 00:00:00', 0, 0, 0, 0),
(11, 11, 40, 'hello10', 0, '0000-00-00 00:00:00', 1, 0, 0, 0),
(12, 11, 40, 'hello9', 0, '0000-00-00 00:00:00', 1, 0, 0, 0),
(13, 2, 11, 'hello', 0, '0000-00-00 00:00:00', 1, 0, 0, 0),
(14, 9, -1, 'hello7', 0, '2015-08-07 16:00:00', 2, 34, 0, 0),
(15, 10, 11, 'hello6', 0, '2015-08-15 16:00:00', 2, 35, 0, 0),
(16, 10, 11, 'hello5', 0, '2015-08-11 16:00:00', 2, 35, 0, 0),
(17, 10, -1, 'hello4', 0, '2015-08-06 16:00:00', 2, 36, 0, 0),
(18, 11, -1, 'hello3', 0, '2015-08-10 16:00:00', 2, 36, 0, 0),
(19, 11, 2, 'hello2', 0, '2015-08-04 16:00:00', 2, 36, 0, 0),
(20, 11, 3, 'hello1', 0, '2015-08-13 16:00:00', 2, 36, 0, 0),
(21, 5, 11, 'gverasgvaeg', 0, '2015-08-13 06:58:38', 1, 0, 0, 0),
(22, 11, 10, '12345648156218', 0, '2015-08-17 09:11:02', 1, 0, 0, 0),
(23, 11, -2, 'hi', 0, '2015-08-20 02:20:15', 3, 0, 0, 0),
(24, 10, -2, 'hi', 0, '2015-08-20 02:19:13', 3, 0, 0, 0),
(25, 13, 11, 'hihi', 0, '2015-08-20 02:22:01', 3, 0, 23, 1),
(26, 14, 11, 'hihi', 0, '2015-08-20 02:22:37', 3, 0, 23, 1),
(27, 14, 13, 'hihihi', 0, '2015-08-20 02:23:40', 3, 0, 25, 2),
(28, 13, 14, 'hihihi', 0, '2015-08-20 11:16:36', 3, 0, 26, 2),
(29, 16, -2, 'nicai1', 0, '2015-08-11 13:48:00', 3, 0, 0, 0),
(30, 15, 16, '我！也！想！去！签证办理失败的我孤单的玩着平板。。。', 0, '2015-08-11 13:51:00', 3, 0, 29, 1),
(31, 16, 15, '旅游签证还能失败？', 0, '2015-08-12 01:25:00', 3, 0, 30, 2),
(32, 15, 16, '没！错！旅游签证！没成功！', 0, '2015-08-12 04:11:00', 3, 0, 30, 2),
(33, 15, 16, '我也求明信片！最好是赫斯提雅的！花花大人！', 0, '2015-08-11 13:52:00', 3, 0, 29, 1),
(34, 16, 15, '已经不在东京了！', 0, '2015-08-12 01:19:00', 3, 0, 33, 2),
(35, 15, 16, 'nooooooooooooooomo', 0, '2015-08-12 04:12:00', 3, 0, 33, 2),
(36, 1, -2, '111111111111111111', 0, '2015-08-21 07:10:50', 3, 0, 0, 0),
(37, 2, -2, '2222222222222222222222', 0, '2015-08-21 07:12:23', 3, 0, 0, 0),
(38, 3, -2, '333333333333333333333333', 0, '2015-08-21 07:12:26', 3, 0, 0, 0),
(39, 4, -2, '444444444444444444444', 0, '2015-08-21 07:12:28', 3, 0, 0, 0),
(40, 5, -2, '55555555555555555555555555', 0, '2015-08-21 07:13:23', 3, 0, 0, 0),
(41, 6, -2, '6666666666666666666666', 0, '2015-08-21 07:14:23', 3, 0, 0, 0),
(42, 7, -2, '7777777777777777777777', 0, '2015-08-21 07:15:25', 3, 0, 0, 0),
(43, 8, -2, '888888888888888888888888', 0, '2015-08-21 07:18:23', 3, 0, 0, 0),
(44, 9, -2, '99999999999999999999999999999', 0, '2015-08-21 07:22:23', 3, 0, 0, 0),
(45, 10, -2, '101010101010101010', 0, '2015-08-21 07:24:59', 3, 0, 0, 0),
(46, 11, -2, '111111111111111', 0, '2015-08-21 07:26:16', 3, 0, 0, 0),
(47, 12, -2, '12121212121212', 0, '2015-08-21 07:26:17', 3, 0, 0, 0),
(48, 13, -2, '1313131313131313', 0, '2015-08-21 07:27:15', 3, 0, 0, 0),
(49, 14, -2, '14141414141414', 0, '2015-08-21 07:28:15', 3, 0, 0, 0),
(50, 15, -2, '1515151515151515', 0, '2015-08-21 07:36:15', 3, 0, 0, 0),
(51, 16, -2, '16161616161616161', 0, '2015-08-21 07:37:15', 3, 0, 0, 0),
(52, 11, -2, 'nicai', 0, '2015-08-21 07:38:42', 3, 0, 0, 0),
(53, 11, -2, 'nicainicai', 0, '2015-08-21 08:27:21', 3, 0, 0, 0),
(54, 11, -2, 'nicainicainicai', 0, '2015-08-21 08:28:21', 3, 0, 0, 0),
(55, 11, -2, 'nicainicainicainicai', 0, '2015-08-21 08:37:21', 3, 0, 0, 0),
(56, 11, -2, 'nicainicainicainicainicai', 0, '2015-08-21 08:57:22', 3, 0, 0, 0),
(57, 11, -2, 'nicainicainicainicainicainicai', 0, '2015-08-21 10:27:22', 3, 0, 0, 0),
(58, 11, -2, 'hahaha', 0, '2015-09-10 13:19:55', 3, 0, 0, 0),
(59, 11, -2, '123', 0, '2015-09-10 15:32:49', 3, 0, 0, 0),
(60, 11, -2, 'hahah123123', 0, '2015-09-10 15:34:46', 3, 0, 0, 0),
(61, 11, -2, 'wqerqreqwrewq', 0, '2015-09-10 15:36:39', 3, 0, 0, 0),
(63, 2, 18, '欢迎注册，寻找身边的乐趣从这里开始！', 0, '2015-09-11 10:30:28', 0, 0, 0, 0),
(64, 11, -2, '呵呵阿达', 0, '2015-09-11 12:13:06', 3, 0, 0, 0),
(65, 11, 8, '哈哈哈哈 终于成功了', 1, '2015-09-11 12:15:10', 1, 0, 0, 0),
(66, 11, 8, '再来一条', 1, '2015-09-11 12:16:06', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
`reg_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `g_id` int(11) NOT NULL,
  `reg_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
`sn_id` bigint(40) NOT NULL,
  `u_id` bigint(40) NOT NULL,
  `sn_content` varchar(255) NOT NULL,
  `sn_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`sn_id`, `u_id`, `sn_content`, `sn_time`) VALUES
(1, 11, 'aaaaaaaaaaaaaaaa', '2015-08-31 02:46:47'),
(2, 11, 'bbbbbbbbbbbbbbbb', '2015-08-31 02:46:53'),
(3, 11, 'cccccccccccccccccccc', '2015-08-31 02:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `source`
--

CREATE TABLE `source` (
  `s_id` int(1) NOT NULL,
  `s_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `source`
--

INSERT INTO `source` (`s_id`, `s_name`) VALUES
(0, '系统消息'),
(1, '用户私信'),
(2, '活动评论'),
(3, '广场消息');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
`id` int(10) unsigned NOT NULL,
  `t_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `t_name`) VALUES
(0, '吃喝玩乐'),
(1, '我会更棒'),
(2, '健身减肥'),
(3, '来约奇葩'),
(4, '请求支援'),
(5, '人在途中'),
(6, '影音书画'),
(7, '约谈约聊'),
(9, '新生戳这');

-- --------------------------------------------------------

--
-- Table structure for table `type_para`
--

CREATE TABLE `type_para` (
`id` int(10) unsigned NOT NULL,
  `t_id` int(10) unsigned NOT NULL,
  `num` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_para`
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
`id` bigint(11) NOT NULL,
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
  `entryy` year(4) NOT NULL DEFAULT '0000',
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
  `browse_num` bigint(20) DEFAULT '0',
  `latest_m_id` bigint(40) NOT NULL,
  `constellation` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `phone`, `pwd`, `name`, `nname`, `sex`, `birth`, `home`, `college`, `academy`, `major`, `entryy`, `qq`, `wx`, `rr`, `fb`, `tw`, `estate`, `hobby`, `tag`, `sign`, `pvg`, `rating`, `follow_num`, `browse_num`, `latest_m_id`, `constellation`) VALUES
(-2, '0', '0', '0', '广场主体', '-2', '', '0000-00-00', '', '', '', '', 0000, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 5, NULL, NULL, NULL, 0, ''),
(-1, '0', '0', '0', '活动评论', '-1', '', '0000-00-00', '', '', '', '', 0000, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 5, NULL, NULL, NULL, 0, ''),
(1, '', '', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'admin1', 'admin1', '', '0000-00-00', '', '', '', '', 0000, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 1, 0, 0, 0, 0, ''),
(2, '', '', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'admin2', 'admin2', '', '0000-00-00', '', '', '', '', 0000, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 2, 0, 1, 2, 0, ''),
(3, '', '', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'admin3', 'admin3', '', '0000-00-00', '', '', '', '', 0000, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 3, 0, 3, 19, 0, ''),
(4, '', '', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'admin4', 'admin4', '', '0000-00-00', '', '', '', '', 0000, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 4, 0, 0, 3, 0, ''),
(5, 'youxiang@126.com', '13615468546', '000000', 'guestguestguest', 'guestguestguest', '', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', 0000, NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5, 0, 0, 10, 0, ''),
(6, 'youxian@126.com', '13615468545', '000000', 'guestguestgues', 'guestguestgues', 'female', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', 0000, NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5, 0, 0, 3, 0, ''),
(7, 'youxia@126.com', '13615468544', '000000', 'guestguestgue', 'guestguestgue', 'male', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', 0000, NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5, 0, 0, 0, 0, ''),
(8, 'youxi@126.com', '13615468542', '000000', 'guestguestg', 'guestguestg', 'female', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', 0000, NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5, 0, 1, 275255, 0, ''),
(9, 'youx@126.com', '13615468541', '000000', 'guestguest', 'guestguest', 'female', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', 0000, NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5, 16, 1, 57, 0, ''),
(10, 'you@126.com', '13615468540', '000000', 'guestgues', 'guestgues', 'male', '2010-09-16', '湖南长沙', '上海交通大学', '电院', '信安', 0000, NULL, NULL, NULL, NULL, NULL, '你猜呀', '继续猜啊', '', '低调', 5, 12, 3, 28, 0, ''),
(11, 'caozhechao@126.com', '18616907530', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', '', 'wfnuser', '女', '0000-00-00', '上海市', '交通大学', '', '电院信安', 2015, NULL, NULL, NULL, NULL, NULL, '单身', '学习读书', '', '给清昊找妹子5', 5, 14, 1, 5, 66, '巨蟹座'),
(12, '123456@qq.com', '', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', '', '你才没有名字', '', '0000-00-00', '', '', '', '', 0000, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 5, NULL, 0, NULL, 0, ''),
(13, '13@126.com', '11111111111', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', '131313', '131313', '', '0000-00-00', '', '', '', '', 0000, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 5, NULL, 0, NULL, 57, ''),
(14, '14@126.com', '11111111111', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', '141414', '141414', '', '0000-00-00', '', '', '', '', 0000, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 5, NULL, 0, NULL, 0, ''),
(15, 'shangyuan@126.com', '11111111111', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', '尚缘', '尚缘', 'male', '0000-00-00', '', '', '', '', 0000, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 5, NULL, 1, NULL, 0, ''),
(16, 'keaizhuyi@126.com', '11111111111', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', '可爱主义', '可爱主义', 'male', '0000-00-00', '', '', '', '', 0000, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 5, NULL, 0, NULL, 0, ''),
(17, 'wfnuser@foxmail.com', '', '*E56A114692FE0DE073F9A1DD68A00EEB9703F3F1', '', '', '', '0000-00-00', '', '', '', '', 0000, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 5, NULL, NULL, 0, 0, ''),
(18, 'wfnuser@126.com', '', '*E56A114692FE0DE073F9A1DD68A00EEB9703F3F1', '', '', '', '0000-00-00', '', '', '', '', 0000, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 5, NULL, NULL, 0, 0, ''),
(19, 'wfnuser@163.com', '', '*E56A114692FE0DE073F9A1DD68A00EEB9703F3F1', '', '', '', '0000-00-00', '', '', '', '', 0000, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 5, NULL, NULL, 0, 0, ''),
(20, 'wfnuser@gmail.com', '', '*E56A114692FE0DE073F9A1DD68A00EEB9703F3F1', '', '', '', '0000-00-00', '', '', '', '', 0000, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 5, NULL, NULL, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_state`
--

CREATE TABLE `user_state` (
`us_id` bigint(40) NOT NULL,
  `u_id` bigint(40) NOT NULL,
  `us_content` varchar(255) NOT NULL,
  `us_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_state`
--

INSERT INTO `user_state` (`us_id`, `u_id`, `us_content`, `us_time`) VALUES
(1, 11, 'haokaixinhaokaixin', '2015-08-31 02:49:58'),
(2, 11, 'haishihaokaixinhaokaixin', '2015-08-31 02:50:16'),
(3, 11, 'zailaiyici', '2015-08-31 02:50:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `act`
--
ALTER TABLE `act`
 ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `act_likes`
--
ALTER TABLE `act_likes`
 ADD PRIMARY KEY (`al_id`);

--
-- Indexes for table `act_man`
--
ALTER TABLE `act_man`
 ADD PRIMARY KEY (`am_id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
 ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
 ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
 ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
 ADD PRIMARY KEY (`sn_id`);

--
-- Indexes for table `source`
--
ALTER TABLE `source`
 ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_para`
--
ALTER TABLE `type_para`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_state`
--
ALTER TABLE `user_state`
 ADD PRIMARY KEY (`us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `act`
--
ALTER TABLE `act`
MODIFY `a_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `act_likes`
--
ALTER TABLE `act_likes`
MODIFY `al_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `act_man`
--
ALTER TABLE `act_man`
MODIFY `am_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
MODIFY `f_id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
MODIFY `m_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
MODIFY `sn_id` bigint(40) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `type_para`
--
ALTER TABLE `type_para`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user_state`
--
ALTER TABLE `user_state`
MODIFY `us_id` bigint(40) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;