#
# 数据库备份
# Time: 2015-02-17 07:23
# Type: 1.0
# author: 罗家辉
# --------------------------------------------------------


DROP TABLE IF EXISTS tbl_admin;
CREATE TABLE tbl_admin (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  checked int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS tbl_event;
CREATE TABLE tbl_event (
  id int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  img varchar(255) COLLATE utf8_bin DEFAULT NULL,
  intro text COLLATE utf8_bin,
  happenTime int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO tbl_admin VALUES('1','admin','21232f297a57a5a743894a0e4a801fc3','1');


