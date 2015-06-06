#
# ?????
# Time: 2015-04-14 02:52
# Type: 1.0
# author: ???
# --------------------------------------------------------


DROP TABLE IF EXISTS anchor;
CREATE TABLE anchor (
  anchorId int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  Channel int(11) NOT NULL,
  summary text NOT NULL,
  clickCount int(11) NOT NULL,
  image varchar(255) NOT NULL,
  anchor_content text NOT NULL,
  PRIMARY KEY (anchorId)
) ENGINE=MyISAM AUTO_INCREMENT=173 DEFAULT CHARSET=utf8;

INSERT INTO anchor VALUES('1','高娜','1','简介','12','/images/avatar/01/01.jpg','');
INSERT INTO anchor VALUES('2','谢剑','1','简介','10','/images/avatar/01/02.jpg','');
INSERT INTO anchor VALUES('3','马琳','1','简介','10','/images/avatar/01/03.jpg','');
INSERT INTO anchor VALUES('4','刘弘','1','简介','10','/images/avatar/01/04.jpg','');
INSERT INTO anchor VALUES('5','曹晨辰','1','简介','10','/images/avatar/01/05.jpg','');
INSERT INTO anchor VALUES('6','黄纬','1','简介','10','/images/avatar/01/06.jpg','');
INSERT INTO anchor VALUES('7','陈晓琳','1','简介','10','/images/avatar/01/07.jpg','');
INSERT INTO anchor VALUES('8','秦海菲','1','简介','751','/images/avatar/01/08.jpg','');
INSERT INTO anchor VALUES('9','靓靓','1','简介','10','/images/avatar/01/09.jpg','');
INSERT INTO anchor VALUES('10','尹铮铮','1','简介','10','/images/avatar/01/09.jpg','');
INSERT INTO anchor VALUES('11','吕囡囡','1','简介','10','/images/avatar/01/09.jpg','');
INSERT INTO anchor VALUES('12','李嘉','2','简介','756','/images/avatar/02/01.jpg','');
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
INSERT INTO anchor VALUES('24','林琳','3','简介','1000','/images/avatar/03/01.jpg','');
INSERT INTO anchor VALUES('25','林颐','3','简介','1006','/images/avatar/03/02.jpg','下面是主播详细页面');
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
INSERT INTO anchor VALUES('55','杨斌','6','简介','881','/images/avatar/06/01.jpg','');
INSERT INTO anchor VALUES('56','孔建文','6','简介','890','/images/avatar/06/02.jpg','');
INSERT INTO anchor VALUES('57','江伟麟','6','简介','10','/images/avatar/06/03.jpg','');
INSERT INTO anchor VALUES('58','何贤','6','简介','10','/images/avatar/06/04.jpg','');
INSERT INTO anchor VALUES('59','余泳欣','6','简介','10','/images/avatar/06/05.jpg','');
INSERT INTO anchor VALUES('60','邓伟浩','6','简介','10','/images/avatar/06/06.jpg','');
INSERT INTO anchor VALUES('61','黎佳','6','简介','10','/images/avatar/06/07.jpg','');
INSERT INTO anchor VALUES('62','木子','7','简介','791','/images/avatar/07/01.jpg','');
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

