#
# 数据库备份
# Time: 2015-04-26 07:34
# Type: 1.0
# author: 罗家辉
# --------------------------------------------------------


DROP TABLE IF EXISTS anchor;
CREATE TABLE anchor (
  anchorId int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  Channel int(11) NOT NULL,
  summary text,
  clickCount int(11) DEFAULT NULL,
  image varchar(255) DEFAULT NULL,
  anchor_content text,
  PRIMARY KEY (anchorId)
) ENGINE=MyISAM AUTO_INCREMENT=174 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS channel;
CREATE TABLE channel (
  channelId int(11) NOT NULL AUTO_INCREMENT,
  image varchar(255) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  summary text,
  url varchar(255) DEFAULT NULL,
  clickCount int(11) DEFAULT NULL,
  isVideo int(11) NOT NULL,
  PRIMARY KEY (channelId)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS news;
CREATE TABLE news (
  newsId int(11) NOT NULL AUTO_INCREMENT,
  title varchar(50) NOT NULL,
  image varchar(255) DEFAULT NULL,
  summary text,
  content varchar(255) DEFAULT NULL,
  isComment int(11) NOT NULL,
  clickCount int(11) DEFAULT NULL,
  isDeploy int(11) NOT NULL,
  deployTime int(11) NOT NULL,
  create_time int(11) NOT NULL,
  url varchar(100) DEFAULT NULL,
  news_content text,
  PRIMARY KEY (newsId)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS programhistory;
CREATE TABLE programhistory (
  programId int(11) NOT NULL AUTO_INCREMENT,
  Channel int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  url varchar(255) DEFAULT NULL,
  date_time int(11) NOT NULL,
  clickCount int(11) DEFAULT NULL,
  create_time int(11) NOT NULL,
  is_Temporary int(11) NOT NULL,
  summary text,
  PRIMARY KEY (programId)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS programitemlist;
CREATE TABLE programitemlist (
  programItemId int(11) NOT NULL AUTO_INCREMENT,
  Channel int(11) NOT NULL,
  anchorNames varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  beginTime int(11) NOT NULL,
  endTime int(11) NOT NULL,
  currdate int(11) NOT NULL,
  create_time int(11) NOT NULL,
  isTemporary int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (programItemId)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS tbl_admin;
CREATE TABLE tbl_admin (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  checked int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO anchor VALUES('1','高娜','1','简介','16','/images/avatar/01/01.jpg','');
INSERT INTO anchor VALUES('2','谢剑','1','简介','10','/images/avatar/01/02.jpg','');
INSERT INTO anchor VALUES('3','马琳','1','简介','11','/images/avatar/01/03.jpg','');
INSERT INTO anchor VALUES('4','刘弘','1','简介','11','/images/avatar/01/04.jpg','');
INSERT INTO anchor VALUES('5','曹晨辰','1','简介','10','/images/avatar/01/05.jpg','');
INSERT INTO anchor VALUES('6','黄纬','1','简介','10','/images/avatar/01/06.jpg','');
INSERT INTO anchor VALUES('7','陈晓琳','1','简介','10','/images/avatar/01/07.jpg','');
INSERT INTO anchor VALUES('8','秦海菲','1','简介','751','/images/avatar/01/08.jpg','');
INSERT INTO anchor VALUES('9','靓靓','1','简介','10','/images/avatar/01/09.jpg','');
INSERT INTO anchor VALUES('10','尹铮铮','1','简介','10','/images/avatar/01/09.jpg','');
INSERT INTO anchor VALUES('11','吕囡囡','1','简介','10','/images/avatar/01/09.jpg','');
INSERT INTO anchor VALUES('12','李嘉','2','简介','757','/images/avatar/02/01.jpg','');
INSERT INTO anchor VALUES('13','刘颖','2','简介','10','/images/avatar/02/02.jpg','');
INSERT INTO anchor VALUES('14','薛琦','2','简介','10','/images/avatar/02/03.jpg','');
INSERT INTO anchor VALUES('15','郑达','2','简介','11','/images/avatar/02/04.jpg','');
INSERT INTO anchor VALUES('16','张淼钧','2','简介','10','/images/avatar/02/05.jpg','');
INSERT INTO anchor VALUES('17','陈琳','2','简介','10','/images/avatar/02/06.jpg','');
INSERT INTO anchor VALUES('18','吴宇帆','2','简介','10','/images/avatar/02/07.jpg','');
INSERT INTO anchor VALUES('19','悟空','2','简介','10','/images/avatar/02/08.jpg','');
INSERT INTO anchor VALUES('20','胡丹','2','简介','10','/images/avatar/02/09.jpg','');
INSERT INTO anchor VALUES('21','郑慧敏','2','简介','10','/images/avatar/02/10.jpg','');
INSERT INTO anchor VALUES('22','鲁力','2','简介','10','/images/avatar/02/11.jpg','');
INSERT INTO anchor VALUES('23','黄缨','2','简介','10','/images/avatar/02/12.jpg','');
INSERT INTO anchor VALUES('24','林琳','3','简介','1002','/images/avatar/03/01.jpg','');
INSERT INTO anchor VALUES('25','林颐','3','简介','1009','/images/avatar/03/02.jpg','下面是主播详细页面');
INSERT INTO anchor VALUES('26','莫澳欣','3','简介','10','/images/avatar/03/03.jpg','');
INSERT INTO anchor VALUES('27','林荣骏','3','简介','10','/images/avatar/03/04.jpg','');
INSERT INTO anchor VALUES('28','卞亮','3','简介','10','/images/avatar/03/05.jpg','');
INSERT INTO anchor VALUES('29','唐文婷','3','简介','10','/images/avatar/03/06.jpg','');
INSERT INTO anchor VALUES('30','梁子宁','3','简介','10','/images/avatar/03/07.jpg','');
INSERT INTO anchor VALUES('31','多乐斯','3','简介','10','/images/avatar/03/08.jpg','');
INSERT INTO anchor VALUES('32','张宇航','3','简介','10','/images/avatar/03/09.jpg','');
INSERT INTO anchor VALUES('33','孙潇毅','3','简介','10','/images/avatar/03/10.jpg','');
INSERT INTO anchor VALUES('34','潘多拉','3','简介','10','/images/avatar/03/11.jpg','');
INSERT INTO anchor VALUES('35','梁宇翀','3','简介','10','/images/avatar/03/12.jpg','');
INSERT INTO anchor VALUES('36','彭伟','4','简介','768','/images/avatar/04/01.jpg','');
INSERT INTO anchor VALUES('37','章毅','4','简介','10','/images/avatar/04/02.jpg','');
INSERT INTO anchor VALUES('38','小白','4','简介','10','/images/avatar/04/03.jpg','');
INSERT INTO anchor VALUES('39','King','4','简介','10','/images/avatar/04/04.jpg','');
INSERT INTO anchor VALUES('40','卢弢儿','4','简介','10','/images/avatar/04/05.jpg','');
INSERT INTO anchor VALUES('41','祁蔚莹','4','简介','10','/images/avatar/04/06.jpg','');
INSERT INTO anchor VALUES('42','杨健','4','简介','10','/images/avatar/04/07.jpg','');
INSERT INTO anchor VALUES('43','余秀云','5','简介','11','/images/avatar/05/01.jpg','');
INSERT INTO anchor VALUES('44','吕玉兰','5','简介','10','/images/avatar/05/02.jpg','');
INSERT INTO anchor VALUES('45','邓灵霄','5','简介','10','/images/avatar/05/03.jpg','');
INSERT INTO anchor VALUES('46','陈宇','5','简介','10','/images/avatar/05/04.jpg','');
INSERT INTO anchor VALUES('47','健青','5','简介','10','/images/avatar/05/05.jpg','');
INSERT INTO anchor VALUES('48','郭权','5','简介','10','/images/avatar/05/06.jpg','');
INSERT INTO anchor VALUES('49','陈品潮（KK）','5','简介','10','/images/avatar/05/07.jpg','');
INSERT INTO anchor VALUES('50','白云','5','简介','10','/images/avatar/05/08.jpg','');
INSERT INTO anchor VALUES('51','卓晶','5','简介','10','/images/avatar/05/09.jpg','');
INSERT INTO anchor VALUES('52','林欣','5','简介','10','/images/avatar/05/10.jpg','');
INSERT INTO anchor VALUES('53','林伟栋','5','简介','10','/images/avatar/05/11.jpg','');
INSERT INTO anchor VALUES('54','伟斌','5','简介','720','/images/avatar/05/12.jpg','');
INSERT INTO anchor VALUES('55','杨斌','6','简介','883','/images/avatar/06/01.jpg','');
INSERT INTO anchor VALUES('56','孔建文','6','简介','893','/images/avatar/06/02.jpg','');
INSERT INTO anchor VALUES('57','江伟麟','6','简介','10','/images/avatar/06/03.jpg','');
INSERT INTO anchor VALUES('58','何贤','6','简介','10','/images/avatar/06/04.jpg','');
INSERT INTO anchor VALUES('59','余泳欣','6','简介','10','/images/avatar/06/05.jpg','');
INSERT INTO anchor VALUES('60','邓伟浩','6','简介','10','/images/avatar/06/06.jpg','');
INSERT INTO anchor VALUES('61','黎佳','6','简介','10','/images/avatar/06/07.jpg','');
INSERT INTO anchor VALUES('62','木子','7','简介','793','/images/avatar/07/01.jpg','');
INSERT INTO anchor VALUES('63','周咏','7','简介','10','/images/avatar/07/02.jpg','');
INSERT INTO anchor VALUES('64','梦田','7','简介','10','/images/avatar/07/03.jpg','');
INSERT INTO anchor VALUES('65','CC','7','简介','10','/images/avatar/07/04.jpg','');
INSERT INTO anchor VALUES('66','马奔','7','简介','10','/images/avatar/07/05.jpg','');
INSERT INTO anchor VALUES('67','王枬','7','简介','10','/images/avatar/07/06.jpg','');
INSERT INTO anchor VALUES('68','任锴','7','简介','10','/images/avatar/07/07.jpg','');
INSERT INTO anchor VALUES('69','黄进','8','简介','770','/images/avatar/08/01.jpg','');
INSERT INTO anchor VALUES('70','吴有毅','8','简介','10','/images/avatar/08/02.jpg','');
INSERT INTO anchor VALUES('71','蔡奕荼','8','简介','10','/images/avatar/08/03.jpg','');
INSERT INTO anchor VALUES('72','何毅','8','简介','10','/images/avatar/08/04.jpg','');
INSERT INTO anchor VALUES('73','古文智','8','简介','10','/images/avatar/08/05.jpg','');
INSERT INTO anchor VALUES('74','闫寒','9','简介','10','/images/avatar/09/01.jpg','');
INSERT INTO anchor VALUES('75','小嵩','9','简介','10','/images/avatar/09/02.jpg','');
INSERT INTO anchor VALUES('76','任离','9','简介','10','/images/avatar/09/03.jpg','');
INSERT INTO anchor VALUES('77','张森','9','简介','10','/images/avatar/09/04.jpg','');
INSERT INTO anchor VALUES('78','邢鹿','9','简介','10','/images/avatar/09/05.jpg','');
INSERT INTO anchor VALUES('79','星辰','9','简介','10','/images/avatar/09/06.jpg','');
INSERT INTO anchor VALUES('80','王佳','9','简介','10','/images/avatar/09/07.jpg','');
INSERT INTO anchor VALUES('81','苏晨','9','简介','10','/images/avatar/09/08.jpg','');
INSERT INTO anchor VALUES('82','薇子','9','简介','10','/images/avatar/09/09.jpg','');
INSERT INTO anchor VALUES('83','刘凯','9','简介','10','/images/avatar/09/10.jpg','');
INSERT INTO anchor VALUES('84','屈哲','9','简介','10','/images/avatar/09/11.jpg','');
INSERT INTO anchor VALUES('85','紫希','9','简介','10','/images/avatar/09/12.jpg','');
INSERT INTO anchor VALUES('86','廖靖峰','10','简介','10','/images/avatar/10/01.jpg','');

INSERT INTO channel VALUES('1','/images/img001.jpg','新闻广播','广东人民广播电视台','http://ctt.tttv.tv:8000/fm914','14','0');
INSERT INTO channel VALUES('2','/images/img002.jpg','珠江经济台','广东人民广播电视台','http://ctt.tttv.tv:8000/fm974','16','0');
INSERT INTO channel VALUES('3','/images/img003.jpg','音乐之声','广东人民广播电视台','http://ctt.tttv.tv:8000/fm993','3','0');
INSERT INTO channel VALUES('4','/images/img004.jpg','城市之声','广东人民广播电视台','http://ctt.tttv.tv:8000/fm1036','1','0');
INSERT INTO channel VALUES('5','/images/img005.jpg','南方生活广播','广东人民广播电视台','http://ctt.tttv.tv:8000/fm936','1','0');
INSERT INTO channel VALUES('6','/images/img006.jpg','交通之声','广东人民广播电视台','http://ctt.tttv.tv:8000/fm1052','1','0');
INSERT INTO channel VALUES('7','/images/img007.jpg','文体广播','广东人民广播电视台','http://ctt.tttv.tv:8000/fm1077','1','0');
INSERT INTO channel VALUES('8','/images/img008.jpg','股市广播','广东人民广播电视台','http://ctt.tttv.tv:8000/fm953','1','0');
INSERT INTO channel VALUES('9','/images/img009.jpg','南粤之声','广东人民广播电视台','http://ctt.tttv.tv:8000/fm1057','1','0');
INSERT INTO channel VALUES('10','/images/img0010.jpg','珠江网络视频','广东人民广播电视台','http://112.125.19.40:1935/live/va/playlist.m3u8','4','1');

INSERT INTO news VALUES('1','习近平下令中国海军舰艇编队也门撤侨','/temporary/images/001.jpg','2015年3月29日，中国海军第十九批护航编队临沂舰从也门亚丁港撤离了124人，其中有2名中国公司聘用的外籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。','2015年3月29日，中国海军第十九批护航编队临沂舰从也门亚丁港撤离了124人，其中有2名中国公司聘用的外籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。','1','102','1','1427725998','1427725998','','梁阳介绍，针对也门局势急剧恶化，海军要求正在亚丁湾海域执行护航任务的第十九批护航编队，做好赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。');
INSERT INTO news VALUES('2','习下令中国海军舰艇编队也门撤侨','/temporary/images/002.jpg','丁港撤离了124人，其中有2名中国公司聘用的外籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。','2015年3月29日，中国海军第丁港撤离了124人，其中有2名中国公司聘用的外籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。','1','101','1','1427725998','1427725998','','梁阳介绍，针对也门丁湾海域执26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。');
INSERT INTO news VALUES('3','习近舰艇编队也门撤侨','/temporary/images/003.jpg','了124人，其中有2名中国公司聘用的外籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。','2名中国公司聘用的外籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。','1','102','1','1427725998','1427725998','','梁阳介绍，针对也航编队，做好赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。');
INSERT INTO news VALUES('4','习近平下令中国海军舰艇编队也门撤侨','/temporary/images/004.jpg','2015十九批护航编队临沂舰从也门家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。','2015年3月29日，中过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。','1','105','1','1427725998','1427725998','','梁阳介绍，针对也门局势急剧恶化，海军要求正在赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。');
INSERT INTO news VALUES('5','舰艇编队也门撤侨','/temporary/images/005.jpg','家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。','2015年3月29日位于非洲东部的吉布提共和国吉布提港。','1','102','1','1427725998','1427725998','','梁阳介绍，针对也门局势急剧恶化，海军要求正在亚丁湾海域执行护撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。');
INSERT INTO news VALUES('6','国海军第十','/temporary/images/006.jpg','2015年3月29日，中国海军第十九批护航编名中国公司聘用的外籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。','2015年3月29日，中国舰从也门亚丁港撤离了124人，其中有2名中国公司聘用的外籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。','1','101','1','1427725998','1427725998','','梁阳介绍，针对也门局势急剧批护航编队，做好赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。');
INSERT INTO news VALUES('7','习近平下令中国海军舰艇编队也门撤侨','/temporary/images/007.jpg','2015年3中国海军第十九批了124人，其中有2名中国公司聘用的外籍专家，经过近8小时，抵达的吉布提共和国吉布提港。','2015日，中国舰从也门亚丁港撤离了124人，其中有2名中国公司位于非洲东部的吉布提共和国吉布提港。','1','104','1','1427725998','1427725998','','梁阳介绍，针对也门局势急剧恶化，海军要求正在亚丁湾海域执行护航任务离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。');
INSERT INTO news VALUES('8','习国海军舰艇编队也门撤侨','/temporary/images/008.jpg','过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。','2015年于非洲东部的吉布提共和国吉布提港。','1','103','1','1427725998','1427725998','','梁阳介绍，做好赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。');
INSERT INTO news VALUES('9','有2名中国公司聘用的外籍专','/temporary/images/009.jpg','2，抵达位于非洲东部的吉布提共和国吉布提港。','2015年3月29日，中国海军第十九批护航编队临沂舰从也门亚丁港撤离籍专家，经过近8小时，抵达位于非洲东部的吉布提共和国吉布提港。','1','103','1','1427725998','1427725998','','梁阳介绍，针对也门要求正在亚丁湾海域执行护航任务的第十九批护航编队，做好赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。');
INSERT INTO news VALUES('10','舰从也门亚丁港','/temporary/images/0010.jpg','2015年3月29日，124人，其中有2名中国公司聘用的外籍专家，经过近8小国吉布提港。','2015年3月29日，中国海军第十九批护航编队临沂舰从也门亚丁港撤离了124，抵达位于非洲东部的吉布提共和国吉布提港。','1','102','1','1427725998','1427725998','','梁阳介绍，针对也门局势急剧恶化，海军要求正在亚丁湾海域执航编队，做好赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。');
INSERT INTO news VALUES('11','回归甘苦回归东奔西走','upload/20150414/20150414160650_43444.jpg','2015年3月29日，124人，其中有2名中国公司聘用的外籍专家，经过近8小国吉布提港。','2015年3月29日，中国海军第十九批护航编队临沂舰从也门亚丁港撤离了124，抵达位于非洲东部的吉布提共和国吉布提港。','1','114','1','1427644800','1427644800','','梁阳介绍，针对也门局势急剧恶化，海军要求正在亚丁湾海域执航编队，做好赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。');
INSERT INTO news VALUES('12','你好中国，湍只','/temporary/images/0012.jpg','2015年3月29日，124人，其中有2名中国公司聘用的外籍专家，经过近8小国吉布提港。','2015年3月29日，中国海军第十九批护航编队临沂舰从也门亚丁港撤离了124，抵达位于非洲东部的吉布提共和国吉布提港。','1','140','1','1427644800','1427644800','','<p>\r\n	梁阳介绍，针对也门局势急剧恶化，海军要求正在亚丁湾海域执航编队，做好赴也门执行撤离中国公民任务相关准备工作。3月26日深夜，接到上级命令后，海军立即组织临沂舰、潍坊舰、微山湖舰向也门亚丁港海域机动。同时，编队连夜部署各舰迅速由护航状态转入撤离任务准备状态，完善舰艇靠泊、人员核准登舰、舰艇安全警戒、生活保障、卫生防疫等方案，在最短时间内完成了一切准备，并顺利完成了首批撤离任务。\r\n</p>\r\n<p>\r\n	<img src=\"/radio_app/kindeditor/attached/image/20150415/20150415105411_12301.jpg\" alt=\"\" />\r\n</p>');
INSERT INTO news VALUES('14','测试新闻','upload/20150414/20150414184539_62925.jpg','测试新闻测试新闻测试新闻测试新闻','测试新闻测试新闻','1','7','1','1428940800','1428940800','','<span style=\"white-space:nowrap;\">测试新闻</span><span style=\"white-space:nowrap;\">测试新闻</span><span style=\"white-space:nowrap;\">测试新闻</span><span style=\"white-space:nowrap;\">测试新闻</span><span style=\"white-space:nowrap;\">测试新闻</span><span style=\"white-space:nowrap;\">测试新闻</span><span style=\"white-space:nowrap;\">测试新闻</span><span style=\"white-space:nowrap;\">测试新闻</span><span style=\"white-space:nowrap;\">测试新闻</span>');

INSERT INTO programhistory VALUES('1','1','广东广播新闻','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427212800','27','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('2','1','早听天下','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427212800','14','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('3','1','民声热线','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427212800','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('4','1','微博大视野','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427212800','12','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('5','1','侃侃三人行','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427212800','11','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('6','1','直播广东','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427212800','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('7','1','星空夜话','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427212800','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('8','1','广东广播新闻','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427126400','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('9','1','早听天下','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427126400','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('10','1','民声热线','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427126400','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('11','1','微博大视野','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427126400','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('12','1','侃侃三人行','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427126400','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('13','1','直播广东','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427126400','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('14','1','星空夜话','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427126400','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('15','1','广东广播新闻','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427040000','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('16','1','早听天下','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427040000','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('17','1','民声热线','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427040000','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('18','1','微博大视野','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427040000','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('19','1','侃侃三人行','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427040000','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('20','1','直播广东','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427040000','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('21','1','星空夜话','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1427040000','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('22','2','中央台新闻和报纸摘要','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3','1427212800','19','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('23','2','晨光粤韵','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3','1427212800','11','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('24','2','珠江第一线','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3','1427212800','12','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('25','2','经济在线','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3','1427212800','11','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('26','2','车乐汇','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3','1427212800','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('27','2','以案说法','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3','1427212800','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('28','2','为食掌门人','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3','1427212800','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('29','2','小说连播','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3','1427212800','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('30','2','黄缨热线','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3','1427212800','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('31','2','974微点唱','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3','1427212800','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('32','2','都市关键词','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3','1427212800','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('33','2','珠江评论','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3','1427212800','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('34','2','都市新闻眼','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3','1427212800','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('35','2','以案说法','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3','1427212800','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('36','2','体坛360度','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3','1427212800','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('37','2','超越流行','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/6/201503/201503300630_zhong_yang_tai_xin_wen_he_bao_zhi_zhai_yao.mp3','1427212800','10','1427258205','0','节目简介');
INSERT INTO programhistory VALUES('38','10','热点观察室2014-11-11','http://www.rgd.com.cn/images/2013rgd/sp/qt/2014/12/10/1.mp4','1427212800','104','1427258205','0','热点观察室2014-11-11');
INSERT INTO programhistory VALUES('42','1','广东广播23期','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1429718400','2','0','0','');
INSERT INTO programhistory VALUES('40','0','广东广播新闻','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1357316580','27','1357316580','0','节目简介');
INSERT INTO programhistory VALUES('41','1','早听天下','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1357316580','14','1357316580','0','节目简介');
INSERT INTO programhistory VALUES('43','1','广东广播24期','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1429804800','2','1429849654','0','wer');
INSERT INTO programhistory VALUES('44','1','广东广播22期','http://mj.rgd.com.cn/sites/rgd.com.cn/files/playback_reviews/5/201503/201503300700_yan_dong_yan_bo_xin_wen.mp3','1429632000','1','0','0','');

INSERT INTO programitemlist VALUES('1','0','主持人名称','广东广播新闻','1357316580','1357316580','1357316580','0','0');
INSERT INTO programitemlist VALUES('2','1','主持人名称','早听天下','1357316580','1357316580','1357316580','0','0');
INSERT INTO programitemlist VALUES('3','1','主播名称','广东广播新闻','1429840800','1429848000','1429804800','0','1');
INSERT INTO programitemlist VALUES('4','1','主播名称','中午时分','1429848000','1429855200','1429804800','0','1');
INSERT INTO programitemlist VALUES('5','1','主播名称','下行说事','1429855200','1429862400','1429804800','0','1');

INSERT INTO tbl_admin VALUES('1','admin','21232f297a57a5a743894a0e4a801fc3','1');

