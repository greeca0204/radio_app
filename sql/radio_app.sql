-- phpMyAdmin SQL Dump
-- version 4.0.2-rc1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 04 月 12 日 21:21
-- 服务器版本: 5.1.63-log
-- PHP 版本: 5.2.17p1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `radio_app`
--
CREATE DATABASE IF NOT EXISTS `radio_app` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `radio_app`;

-- --------------------------------------------------------

--
-- 表的结构 `anchor`
--

CREATE TABLE IF NOT EXISTS `anchor` (
  `anchorId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `Channel` int(11) NOT NULL,
  `summary` text NOT NULL,
  `clickCount` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `anchor_content` text NOT NULL,
  PRIMARY KEY (`anchorId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=173 ;

--
-- 转存表中的数据 `anchor`
--

INSERT INTO `anchor` (`anchorId`, `name`, `Channel`, `summary`, `clickCount`, `image`, `anchor_content`) VALUES
(1, '高娜', 1, '简介', 12, '/images/avatar/01/01.jpg', ''),
(2, '谢剑', 1, '简介', 10, '/images/avatar/01/02.jpg', ''),
(3, '马琳', 1, '简介', 10, '/images/avatar/01/03.jpg', ''),
(4, '刘弘', 1, '简介', 10, '/images/avatar/01/04.jpg', ''),
(5, '曹晨辰', 1, '简介', 10, '/images/avatar/01/05.jpg', ''),
(6, '黄纬', 1, '简介', 10, '/images/avatar/01/06.jpg', ''),
(7, '陈晓琳', 1, '简介', 10, '/images/avatar/01/07.jpg', ''),
(8, '秦海菲', 1, '简介', 751, '/images/avatar/01/08.jpg', ''),
(9, '靓靓', 1, '简介', 10, '/images/avatar/01/09.jpg', ''),
(10, '尹铮铮', 1, '简介', 10, '/images/avatar/01/09.jpg', ''),
(11, '吕囡囡', 1, '简介', 10, '/images/avatar/01/09.jpg', ''),
(12, '李嘉', 2, '简介', 756, '/images/avatar/02/01.jpg', ''),
(13, '刘颖', 2, '简介', 10, '/images/avatar/02/02.jpg', ''),
(14, '薛琦', 2, '简介', 10, '/images/avatar/02/03.jpg', ''),
(15, '郑达', 2, '简介', 10, '/images/avatar/02/04.jpg', ''),
(16, '张淼钧', 2, '简介', 10, '/images/avatar/02/05.jpg', ''),
(17, '陈琳', 2, '简介', 10, '/images/avatar/02/06.jpg', ''),
(18, '吴宇帆', 2, '简介', 10, '/images/avatar/02/07.jpg', ''),
(19, '悟空', 2, '简介', 10, '/images/avatar/02/08.jpg', ''),
(20, '胡丹', 2, '简介', 10, '/images/avatar/02/09.jpg', ''),
(21, '郑慧敏', 2, '简介', 10, '/images/avatar/02/10.jpg', ''),
(22, '鲁力', 2, '简介', 10, '/images/avatar/02/11.jpg', ''),
(23, '黄缨', 2, '简介', 10, '/images/avatar/02/12.jpg', ''),
(24, '林琳', 3, '简介', 1000, '/images/avatar/03/01.jpg', ''),
(25, '林颐', 3, '简介', 1005, '/images/avatar/03/02.jpg', '下面是主播详细页面'),
(26, '莫澳欣', 3, '简介', 10, '/images/avatar/03/03.jpg', ''),
(27, '林荣骏', 3, '简介', 10, '/images/avatar/03/04.jpg', ''),
(28, '卞亮', 3, '简介', 10, '/images/avatar/03/05.jpg', ''),
(29, '唐文婷', 3, '简介', 10, '/images/avatar/03/06.jpg', ''),
(30, '梁子宁', 3, '简介', 10, '/images/avatar/03/07.jpg', ''),
(31, '多乐斯', 3, '简介', 10, '/images/avatar/03/08.jpg', ''),
(32, '张宇航', 3, '简介', 10, '/images/avatar/03/09.jpg', ''),
(33, '孙潇毅', 3, '简介', 10, '/images/avatar/03/10.jpg', ''),
(34, '潘多拉', 3, '简介', 10, '/images/avatar/03/11.jpg', ''),
(35, '梁宇翀', 3, '简介', 10, '/images/avatar/03/12.jpg', ''),
(36, '彭伟', 4, '简介', 768, '/images/avatar/04/01.jpg', ''),
(37, '章毅', 4, '简介', 10, '/images/avatar/04/02.jpg', ''),
(38, '小白', 4, '简介', 10, '/images/avatar/04/03.jpg', ''),
(39, 'King', 4, '简介', 10, '/images/avatar/04/04.jpg', ''),
(40, '卢弢儿', 4, '简介', 10, '/images/avatar/04/05.jpg', ''),
(41, '祁蔚莹', 4, '简介', 10, '/images/avatar/04/06.jpg', ''),
(42, '杨健', 4, '简介', 10, '/images/avatar/04/07.jpg', ''),
(43, '余秀云', 5, '简介', 10, '/images/avatar/05/01.jpg', ''),
(44, '吕玉兰', 5, '简介', 10, '/images/avatar/05/02.jpg', ''),
(45, '邓灵霄', 5, '简介', 10, '/images/avatar/05/03.jpg', ''),
(46, '陈宇', 5, '简介', 10, '/images/avatar/05/04.jpg', ''),
(47, '健青', 5, '简介', 10, '/images/avatar/05/05.jpg', ''),
(48, '郭权', 5, '简介', 10, '/images/avatar/05/06.jpg', ''),
(49, '陈品潮（KK）', 5, '简介', 10, '/images/avatar/05/07.jpg', ''),
(50, '白云', 5, '简介', 10, '/images/avatar/05/08.jpg', ''),
(51, '卓晶', 5, '简介', 10, '/images/avatar/05/09.jpg', ''),
(52, '林欣', 5, '简介', 10, '/images/avatar/05/10.jpg', ''),
(53, '林伟栋', 5, '简介', 10, '/images/avatar/05/11.jpg', ''),
(54, '伟斌', 5, '简介', 720, '/images/avatar/05/12.jpg', ''),
(55, '杨斌', 6, '简介', 881, '/images/avatar/06/01.jpg', ''),
(56, '孔建文', 6, '简介', 890, '/images/avatar/06/02.jpg', ''),
(57, '江伟麟', 6, '简介', 10, '/images/avatar/06/03.jpg', ''),
(58, '何贤', 6, '简介', 10, '/images/avatar/06/04.jpg', ''),
(59, '余泳欣', 6, '简介', 10, '/images/avatar/06/05.jpg', ''),
(60, '邓伟浩', 6, '简介', 10, '/images/avatar/06/06.jpg', ''),
(61, '黎佳', 6, '简介', 10, '/images/avatar/06/07.jpg', ''),
(62, '木子', 7, '简介', 791, '/images/avatar/07/01.jpg', ''),
(63, '周咏', 7, '简介', 10, '/images/avatar/07/02.jpg', ''),
(64, '梦田', 7, '简介', 10, '/images/avatar/07/03.jpg', ''),
(65, 'CC', 7, '简介', 10, '/images/avatar/07/04.jpg', ''),
(66, '马奔', 7, '简介', 10, '/images/avatar/07/05.jpg', ''),
(67, '王枬', 7, '简介', 10, '/images/avatar/07/06.jpg', ''),
(68, '任锴', 7, '简介', 10, '/images/avatar/07/07.jpg', ''),
(69, '黄进', 8, '简介', 770, '/images/avatar/08/01.jpg', ''),
(70, '吴有毅', 8, '简介', 10, '/images/avatar/08/02.jpg', ''),
(71, '蔡奕荼', 8, '简介', 10, '/images/avatar/08/03.jpg', ''),
(72, '何毅', 8, '简介', 10, '/images/avatar/08/04.jpg', ''),
(73, '古文智', 8, '简介', 10, '/images/avatar/08/05.jpg', ''),
(74, '闫寒', 9, '简介', 10, '/images/avatar/09/01.jpg', ''),
(75, '小嵩', 9, '简介', 10, '/images/avatar/09/02.jpg', ''),
(76, '任离', 9, '简介', 10, '/images/avatar/09/03.jpg', ''),
(77, '张森', 9, '简介', 10, '/images/avatar/09/04.jpg', ''),
(78, '邢鹿', 9, '简介', 10, '/images/avatar/09/05.jpg', ''),
(79, '星辰', 9, '简介', 10, '/images/avatar/09/06.jpg', ''),
(80, '王佳', 9, '简介', 10, '/images/avatar/09/07.jpg', ''),
(81, '苏晨', 9, '简介', 10, '/images/avatar/09/08.jpg', ''),
(82, '薇子', 9, '简介', 10, '/images/avatar/09/09.jpg', ''),
(83, '刘凯', 9, '简介', 10, '/images/avatar/09/10.jpg', ''),
(84, '屈哲', 9, '简介', 10, '/images/avatar/09/11.jpg', ''),
(85, '紫希', 9, '简介', 10, '/images/avatar/09/12.jpg', ''),
(86, '廖靖峰', 10, '简介', 10, '/images/avatar/10/01.jpg', '');

-- --------------------------------------------------------

--
-- 表的结构 `channel`
--

CREATE TABLE IF NOT EXISTS `channel` (
  `channelId` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `summary` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `clickCount` int(11) NOT NULL,
  `isVideo` int(11) NOT NULL,
  PRIMARY KEY (`channelId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `channel`
--

INSERT INTO `channel` (`channelId`, `image`, `name`, `summary`, `url`, `clickCount`, `isVideo`) VALUES
(1, '/images/img001.jpg', '新闻广播', '广东人民广播电视台', 'http://ctt.tttv.tv:8000/fm914', 14, 0),
(2, '/images/img002.jpg', '珠江经济台', '广东人民广播电视台', 'http://ctt.tttv.tv:8000/fm974', 16, 0),
(3, '/images/img003.jpg', '音乐之声', '广东人民广播电视台', 'http://ctt.tttv.tv:8000/fm993', 3, 0),
(4, '/images/img004.jpg', '城市之声', '广东人民广播电视台', 'http://ctt.tttv.tv:8000/fm1036', 1, 0),
(5, '/images/img005.jpg', '南方生活广播', '广东人民广播电视台', 'http://ctt.tttv.tv:8000/fm936', 1, 0),
(6, '/images/img006.jpg', '交通之声', '广东人民广播电视台', 'http://ctt.tttv.tv:8000/fm1052', 1, 0),
(7, '/images/img007.jpg', '文体广播', '广东人民广播电视台', 'http://ctt.tttv.tv:8000/fm1077', 1, 0),
(8, '/images/img008.jpg', '股市广播', '广东人民广播电视台', 'http://ctt.tttv.tv:8000/fm953', 1, 0),
(9, '/images/img009.jpg', '南粤之声', '广东人民广播电视台', 'http://ctt.tttv.tv:8000/fm1057', 1, 0),
(10, '/images/img0010.jpg', '珠江网络视频', '广东人民广播电视台', 'http://112.125.19.40:1935/live/va/playlist.m3u8', 3, 1);

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsId` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `content` varchar(255) NOT NULL,
  `isComment` int(11) NOT NULL,
  `clickCount` int(11) NOT NULL,
  `isDeploy` int(11) NOT NULL,
  `deployTime` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `news_content` text NOT NULL,
  PRIMARY KEY (`newsId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`newsId`, `title`, `image`, `summary`, `content`, `isComment`, `clickCount`, `isDeploy`, `deployTime`, `create_time`, `url`, `news_content`) VALUES
(1, '习近平下令中国海军舰艇编队也门撤侨', '/temporary/images/001.jpg', '2015年3月29日，中国海军第十九批护航编队临沂舰从也门亚丁港撤离了124人，其中有2名中国公司聘用的外籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。', '2015年3月29日，中国海军第十九批护航编队临沂舰从也门亚丁港撤离了124人，其中有2名中国公司聘用的外籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。', 1, 102, 1, 1427725998, 1427725998, '', '梁阳介绍，针对也门局势急剧恶化，海军要求正在亚丁湾海域执行护航任务的第十九批护航编队，做好赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。'),
(2, '习下令中国海军舰艇编队也门撤侨', '/temporary/images/002.jpg', '丁港撤离了124人，其中有2名中国公司聘用的外籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。', '2015年3月29日，中国海军第丁港撤离了124人，其中有2名中国公司聘用的外籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。', 1, 101, 1, 1427725998, 1427725998, '', '梁阳介绍，针对也门丁湾海域执26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。'),
(3, '习近舰艇编队也门撤侨', '/temporary/images/003.jpg', '了124人，其中有2名中国公司聘用的外籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。', '2名中国公司聘用的外籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。', 1, 101, 1, 1427725998, 1427725998, '', '梁阳介绍，针对也航编队，做好赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。'),
(4, '习近平下令中国海军舰艇编队也门撤侨', '/temporary/images/004.jpg', '2015十九批护航编队临沂舰从也门家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。', '2015年3月29日，中过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。', 1, 104, 1, 1427725998, 1427725998, '', '梁阳介绍，针对也门局势急剧恶化，海军要求正在赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。'),
(5, '舰艇编队也门撤侨', '/temporary/images/005.jpg', '家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。', '2015年3月29日位于非洲东部的吉布提共和国吉布提港。', 1, 101, 1, 1427725998, 1427725998, '', '梁阳介绍，针对也门局势急剧恶化，海军要求正在亚丁湾海域执行护撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。'),
(6, '国海军第十', '/temporary/images/006.jpg', '2015年3月29日，中国海军第十九批护航编名中国公司聘用的外籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。', '2015年3月29日，中国舰从也门亚丁港撤离了124人，其中有2名中国公司聘用的外籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。', 1, 101, 1, 1427725998, 1427725998, '', '梁阳介绍，针对也门局势急剧批护航编队，做好赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。'),
(7, '习近平下令中国海军舰艇编队也门撤侨', '/temporary/images/007.jpg', '2015年3中国海军第十九批了124人，其中有2名中国公司聘用的外籍专家，经过近8小时，抵达的吉布提共和国吉布提港。', '2015日，中国舰从也门亚丁港撤离了124人，其中有2名中国公司位于非洲东部的吉布提共和国吉布提港。', 1, 103, 1, 1427725998, 1427725998, '', '梁阳介绍，针对也门局势急剧恶化，海军要求正在亚丁湾海域执行护航任务离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。'),
(8, '习国海军舰艇编队也门撤侨', '/temporary/images/008.jpg', '过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。', '2015年于非洲东部的吉布提共和国吉布提港。', 1, 101, 1, 1427725998, 1427725998, '', '梁阳介绍，做好赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。'),
(9, '有2名中国公司聘用的外籍专', '/temporary/images/009.jpg', '2，抵达位于非洲东部的吉布提共和国吉布提港。', '2015年3月29日，中国海军第十九批护航编队临沂舰从也门亚丁港撤离籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。', 1, 102, 1, 1427725998, 1427725998, '', '梁阳介绍，针对也门要求正在亚丁湾海域执行护航任务的第十九批护航编队，做好赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。'),
(10, '舰从也门亚丁港', '/temporary/images/0010.jpg', '2015年3月29日，124人，其中有2名中国公司聘用的外籍专家，经过近8小国吉布提港。', '2015年3月29日，中国海军第十九批护航编队临沂舰从也门亚丁港撤离了124，抵达位于非洲东部的吉布提共和国吉布提港。', 1, 100, 1, 1427725998, 1427725998, '', '梁阳介绍，针对也门局势急剧恶化，海军要求正在亚丁湾海域执航编队，做好赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。'),
(11, '回归甘苦回归东奔西走', '/temporary/images/0011.jpg', '2015年3月29日，124人，其中有2名中国公司聘用的外籍专家，经过近8小国吉布提港。', '2015年3月29日，中国海军第十九批护航编队临沂舰从也门亚丁港撤离了124，抵达位于非洲东部的吉布提共和国吉布提港。', 1, 110, 1, 1427725998, 1427725998, '', '梁阳介绍，针对也门局势急剧恶化，海军要求正在亚丁湾海域执航编队，做好赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。'),
(12, '你好中国，湍只', '/temporary/images/0012.jpg', '2015年3月29日，124人，其中有2名中国公司聘用的外籍专家，经过近8小国吉布提港。', '2015年3月29日，中国海军第十九批护航编队临沂舰从也门亚丁港撤离了124，抵达位于非洲东部的吉布提共和国吉布提港。', 1, 134, 1, 1427725998, 1427725998, '', '梁阳介绍，针对也门局势急剧恶化，海军要求正在亚丁湾海域执航编队，做好赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。');

-- --------------------------------------------------------

--
-- 表的结构 `programhistory`
--

CREATE TABLE IF NOT EXISTS `programhistory` (
  `programId` int(11) NOT NULL AUTO_INCREMENT,
  `Channel` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL,
  `date_time` int(11) NOT NULL,
  `clickCount` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `is_Temporary` int(11) NOT NULL,
  `summary` text NOT NULL,
  PRIMARY KEY (`programId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- 转存表中的数据 `programhistory`
--

INSERT INTO `programhistory` (`programId`, `Channel`, `name`, `url`, `date_time`, `clickCount`, `create_time`, `is_Temporary`, `summary`) VALUES
(1, 1, '广东广播新闻', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427212800, 27, 1427258205, 0, '节目简介'),
(2, 1, '早听天下', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427212800, 13, 1427258205, 0, '节目简介'),
(3, 1, '民声热线', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427212800, 10, 1427258205, 0, '节目简介'),
(4, 1, '微博大视野', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427212800, 12, 1427258205, 0, '节目简介'),
(5, 1, '侃侃三人行', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427212800, 11, 1427258205, 0, '节目简介'),
(6, 1, '直播广东', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427212800, 10, 1427258205, 0, '节目简介'),
(7, 1, '星空夜话', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427212800, 10, 1427258205, 0, '节目简介'),
(8, 1, '广东广播新闻', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427126400, 10, 1427258205, 0, '节目简介'),
(9, 1, '早听天下', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427126400, 10, 1427258205, 0, '节目简介'),
(10, 1, '民声热线', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427126400, 10, 1427258205, 0, '节目简介'),
(11, 1, '微博大视野', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427126400, 10, 1427258205, 0, '节目简介'),
(12, 1, '侃侃三人行', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427126400, 10, 1427258205, 0, '节目简介'),
(13, 1, '直播广东', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427126400, 10, 1427258205, 0, '节目简介'),
(14, 1, '星空夜话', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427126400, 10, 1427258205, 0, '节目简介'),
(15, 1, '广东广播新闻', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427040000, 10, 1427258205, 0, '节目简介'),
(16, 1, '早听天下', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427040000, 10, 1427258205, 0, '节目简介'),
(17, 1, '民声热线', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427040000, 10, 1427258205, 0, '节目简介'),
(18, 1, '微博大视野', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427040000, 10, 1427258205, 0, '节目简介'),
(19, 1, '侃侃三人行', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427040000, 10, 1427258205, 0, '节目简介'),
(20, 1, '直播广东', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427040000, 10, 1427258205, 0, '节目简介'),
(21, 1, '星空夜话', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3', 1427040000, 10, 1427258205, 0, '节目简介'),
(22, 2, '中央台新闻和报纸摘要', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3', 1427212800, 19, 1427258205, 0, '节目简介'),
(23, 2, '晨光粤韵', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3', 1427212800, 11, 1427258205, 0, '节目简介'),
(24, 2, '珠江第一线', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3', 1427212800, 12, 1427258205, 0, '节目简介'),
(25, 2, '经济在线', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3', 1427212800, 11, 1427258205, 0, '节目简介'),
(26, 2, '车乐汇', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3', 1427212800, 10, 1427258205, 0, '节目简介'),
(27, 2, '以案说法', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3', 1427212800, 10, 1427258205, 0, '节目简介'),
(28, 2, '为食掌门人', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3', 1427212800, 10, 1427258205, 0, '节目简介'),
(29, 2, '小说连播', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3', 1427212800, 10, 1427258205, 0, '节目简介'),
(30, 2, '黄缨热线', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3', 1427212800, 10, 1427258205, 0, '节目简介'),
(31, 2, '974微点唱', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3', 1427212800, 10, 1427258205, 0, '节目简介'),
(32, 2, '都市关键词', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3', 1427212800, 10, 1427258205, 0, '节目简介'),
(33, 2, '珠江评论', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3', 1427212800, 10, 1427258205, 0, '节目简介'),
(34, 2, '都市新闻眼', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3', 1427212800, 10, 1427258205, 0, '节目简介'),
(35, 2, '以案说法', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3', 1427212800, 10, 1427258205, 0, '节目简介'),
(36, 2, '体坛360度', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3', 1427212800, 10, 1427258205, 0, '节目简介'),
(37, 2, '超越流行', 'http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3', 1427212800, 10, 1427258205, 0, '节目简介'),
(38, 10, '热点观察室2014-11-11', 'http://www.rgd.com.cn/images/2013rgd/sp/qt/2014/12/10/1.mp4', 1427212800, 103, 1427258205, 0, '热点观察室2014-11-11');

-- --------------------------------------------------------

--
-- 表的结构 `programitemlist`
--

CREATE TABLE IF NOT EXISTS `programitemlist` (
  `programItemId` int(11) NOT NULL AUTO_INCREMENT,
  `Channel` int(11) NOT NULL,
  `anchorNames` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `beginTime` int(11) NOT NULL,
  `endTime` int(11) NOT NULL,
  `currdate` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `isTemporary` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`programItemId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `programitemlist`
--

INSERT INTO `programitemlist` (`programItemId`, `Channel`, `anchorNames`, `name`, `beginTime`, `endTime`, `currdate`, `create_time`, `isTemporary`) VALUES
(1, 1, '主持人名称', '广东广播新闻', 1427238000, 1427243400, 1427212800, 1427212800, 0),
(2, 1, '主持人名称', '早听天下', 1427243400, 1427252400, 1427212800, 1427212800, 0),
(3, 1, '主持人名称', '民声热线', 1427252400, 1427263200, 1427212800, 1427212800, 0),
(4, 1, '主持人名称', '微博大视野', 1427263200, 1427274000, 1427212800, 1427212800, 0),
(5, 1, '主持人名称', '侃侃三人行', 1427274000, 1427279400, 1427212800, 1427212800, 0),
(6, 1, '主持人名称', '直播广东', 1427279400, 1427288400, 1427212800, 1427212800, 0),
(7, 1, '主持人名称', '幸福时光', 1427288400, 1427292000, 1427212800, 1427212800, 0),
(8, 1, '主持人名称', '星空夜话', 1427292000, 1427299200, 1427212800, 1427212800, 0),
(9, 1, '主持人名称', '广东广播新闻', 1427583600, 1427589000, 1427558400, 1427558400, 0),
(10, 1, '主持人名称', '早听天下', 1427589000, 1427598000, 1427558400, 1427558400, 0),
(11, 1, '主持人名称', '民声热线', 1427598000, 1427608800, 1427558400, 1427558400, 0),
(12, 1, '主持人名称', '微博大视野', 1427608800, 1427619600, 1427558400, 1427558400, 0),
(13, 1, '主持人名称', '侃侃三人行', 1427619600, 1427625000, 1427558400, 1427558400, 0),
(14, 1, '主持人名称', '直播广东', 1427625000, 1427634000, 1427558400, 1427558400, 0),
(15, 1, '主持人名称', '幸福时光', 1427634000, 1427637600, 1427558400, 1427558400, 0),
(16, 1, '主持人名称', '星空夜话', 1427637600, 1427644800, 1427558400, 1427558400, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `checked` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `checked`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
