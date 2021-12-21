-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-12-21 15:52:15
-- 服务器版本： 10.4.22-MariaDB
-- PHP 版本： 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `systeminformation`
--

-- --------------------------------------------------------

--
-- 表的结构 `admins`
--

CREATE TABLE `admins` (
  `adminName` char(20) NOT NULL,
  `password` char(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admins`
--

INSERT INTO `admins` (`adminName`, `password`, `name`) VALUES
('20191003027', '12', '小番茄夫斯基');

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE `course` (
  `course_name` varchar(20) DEFAULT NULL,
  `course_id` varchar(20) NOT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `year` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `course`
--

INSERT INTO `course` (`course_name`, `course_id`, `semester`, `year`) VALUES
('数据结构', '001', 'Spring', '2019'),
('组网技术', '003', 'Fall', '2019'),
('数据挖掘', '005', 'Fall', '2022');

-- --------------------------------------------------------

--
-- 表的结构 `section`
--

CREATE TABLE `section` (
  `s_id` varchar(20) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `section`
--

INSERT INTO `section` (`s_id`, `course_id`, `score`) VALUES
('201909101', '001', 98),
('201909103', '001', 92),
('201909104', '003', 96),
('201909105', '004', 96),
('201909106', '005', 80),
('201909107', '006', 69);

-- --------------------------------------------------------

--
-- 表的结构 `social_practice`
--

CREATE TABLE `social_practice` (
  `practice_id` varchar(20) NOT NULL,
  `practice_experience` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `place` varchar(20) DEFAULT NULL,
  `pracetice_time` varchar(20) DEFAULT NULL,
  `instructor` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `social_practice`
--

INSERT INTO `social_practice` (`practice_id`, `practice_experience`, `date`, `place`, `pracetice_time`, `instructor`) VALUES
('001', '三下乡123', '暑假', '清远市123', '50', '卢思浩123'),
('002', '关爱老人每周行活动', '每两周', '天河区敬老院', '30', 'Baby'),
('003', '寒宣', '寒假', '学生高中', '30', 'Stark'),
('004', '省长杯', ' 4月', '广外', '30', 'Baby'),
('005', '亚运会', '暑假', '学生高中', '30', 'Stark'),
('006', '广交会', '暑假', '广州琶洲', '303', 'Baby');

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE `student` (
  `s_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `class_name` varchar(20) DEFAULT NULL,
  `date_birth` varchar(20) DEFAULT NULL,
  `data_enrollment` varchar(20) DEFAULT NULL,
  `native_place` varchar(20) DEFAULT NULL,
  `nationality` varchar(20) DEFAULT NULL,
  `home_address` varchar(20) DEFAULT NULL,
  `users_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`s_id`, `name`, `gender`, `class_name`, `date_birth`, `data_enrollment`, `native_place`, `nationality`, `home_address`, `users_name`) VALUES
('201909101', '杨丽纯', '女', '会计1903班', '2000.09.09', '2019.09.07', '广东省深圳市', '汉族', '广东省深圳市南山区大河街道', 'Anna'),
('201909103', '蔡健雅', '女', '法学1902班', '2000.03.02', '2019.09.07', '黑龙江省齐齐哈尔市', '满族', '黑龙江省齐齐哈尔市龙沙区雨亭街道', 'Ygrittee'),
('201909104', '张震岳', '男', '软件工程1904班', '2001.11.08', '2019.09.07', '湖南省长沙市', '汉族', '广东省深圳市龙华区沙河街道', 'ZZ'),
('201909105', '巴拉巴拉', '女', '会计1905班', '2000.03.13', '2019.09.07', '新疆省乌鲁木齐市', '维吾尔族', '广州省广州市番禺区', 'REb'),
('20191003030', '邬坤源', '男', '软工1904', '2000.7.16', '2019.9.1', '广东省揭阳市普宁市', '汉', '广东省佛山市顺德区大得街区123', 'admin');

-- --------------------------------------------------------

--
-- 替换视图以便查看 `student_course`
-- （参见下面的实际视图）
--
CREATE TABLE `student_course` (
`s_id` varchar(20)
,`course_id` varchar(20)
,`course_name` varchar(20)
,`semester` varchar(20)
,`year` decimal(4,0)
,`score` int(11)
);

-- --------------------------------------------------------

--
-- 替换视图以便查看 `student_practice`
-- （参见下面的实际视图）
--
CREATE TABLE `student_practice` (
`s_id` varchar(20)
,`practice_id` varchar(20)
,`practice_experience` varchar(20)
,`date` varchar(20)
,`place` varchar(20)
,`pracetice_time` varchar(20)
,`instructor` varchar(20)
);

-- --------------------------------------------------------

--
-- 表的结构 `student_social_practice`
--

CREATE TABLE `student_social_practice` (
  `s_id` varchar(20) NOT NULL,
  `practice_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student_social_practice`
--

INSERT INTO `student_social_practice` (`s_id`, `practice_id`) VALUES
('201909101', '001'),
('201909102', '001'),
('201909104', '002'),
('201909103', '003'),
('201909105', '005'),
('201909106', '006'),
('201909107', '007');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `userName` char(20) NOT NULL,
  `password` char(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`userName`, `password`, `name`) VALUES
('18316722271', '12', '邬坤源'),
('201909101', '12', '杨丽丽'),
('20191003027', '123', '邬坤源'),
('20191003155', '123', 'sanen');

-- --------------------------------------------------------

--
-- 视图结构 `student_course`
--
DROP TABLE IF EXISTS `student_course`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_course`  AS SELECT `student`.`s_id` AS `s_id`, `course`.`course_id` AS `course_id`, `course`.`course_name` AS `course_name`, `course`.`semester` AS `semester`, `course`.`year` AS `year`, `section`.`score` AS `score` FROM ((`student` join `course`) join `section` on(`student`.`s_id` = `section`.`s_id` and `course`.`course_id` = `section`.`course_id`)) ;

-- --------------------------------------------------------

--
-- 视图结构 `student_practice`
--
DROP TABLE IF EXISTS `student_practice`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_practice`  AS SELECT `student`.`s_id` AS `s_id`, `social_practice`.`practice_id` AS `practice_id`, `social_practice`.`practice_experience` AS `practice_experience`, `social_practice`.`date` AS `date`, `social_practice`.`place` AS `place`, `social_practice`.`pracetice_time` AS `pracetice_time`, `social_practice`.`instructor` AS `instructor` FROM ((`student` join `social_practice`) join `student_social_practice` on(`student`.`s_id` = `student_social_practice`.`s_id` and `social_practice`.`practice_id` = `student_social_practice`.`practice_id`)) ;

--
-- 转储表的索引
--

--
-- 表的索引 `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminName`),
  ADD UNIQUE KEY `adminName` (`adminName`);

--
-- 表的索引 `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- 表的索引 `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`s_id`,`course_id`);

--
-- 表的索引 `social_practice`
--
ALTER TABLE `social_practice`
  ADD PRIMARY KEY (`practice_id`);

--
-- 表的索引 `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- 表的索引 `student_social_practice`
--
ALTER TABLE `student_social_practice`
  ADD PRIMARY KEY (`practice_id`,`s_id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userName`),
  ADD UNIQUE KEY `userName` (`userName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
