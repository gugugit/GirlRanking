-- ??
CREATE DATABASE beauty DEFAULT CHARSET utf8 COLLATE utf8_general_ci;

-- ??
CREATE TABLE IF NOT EXISTS `stu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `beauti` varchar(255) DEFAULT NULL,
  `score` int(20) NOT NULL DEFAULT '1400',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=78 ;

-- ????
INSERT INTO `stu` (`id`, `stu`, `img`, `beauti`, `score`) VALUES
(1, 'Mary', '', 'src', 1400),
(2, 'Nancy', '', 'src', 1400),
(3, 'Kacy', '', 'src', 1400),
(4, 'Judegli', '', 'src', 1400);


 
insert into stugirl(stu,beauti) values('海儿','imgsrc/7.jpg');
insert into stugirl(stu,beauti) values('海女','imgsrc/8.jpg');
insert into stugirl(stu,beauti) values('含娇','imgsrc/9.jpg');
insert into stugirl(stu,beauti) values('含景','imgsrc/10.jpg');
insert into stugirl(stu,beauti) values('含文','imgsrc/11.jpg');
insert into stugirl(stu,beauti) values('含香','imgsrc/12.png');
insert into stugirl(stu,beauti) values('晗玥','imgsrc/13.jpg');
insert into stugirl(stu,beauti) values('涵涵','imgsrc/14.jpg');
insert into stugirl(stu,beauti) values('和悌','imgsrc/15.jpg');
insert into stugirl(stu,beauti) values('浩岚','imgsrc/16.jpg');
insert into stugirl(stu,beauti) values('弘懿','imgsrc/17.jpg');
insert into stugirl(stu,beauti) values('慧颖','imgsrc/18.jpg');
insert into stugirl(stu,beauti) values('虹英','imgsrc/19.jpg');
insert into stugirl(stu,beauti) values('慧英','imgsrc/20.jpg');
insert into stugirl(stu,beauti) values('莎莉','imgsrc/21.jpg');
insert into stugirl(stu,beauti) values('淑雅','imgsrc/22.jpg');
insert into stugirl(stu,beauti) values('姝艳','imgsrc/23.jpg');
insert into stugirl(stu,beauti) values('淑惠','imgsrc/24.jpg');
insert into stugirl(stu,beauti) values('顺美','imgsrc/25.jpg');
insert into stugirl(stu,beauti) values('思宸','imgsrc/26.jpg');
insert into stugirl(stu,beauti) values('思美','imgsrc/27.jpg');
insert into stugirl(stu,beauti) values('舒兰','imgsrc/28.jpg');
insert into stugirl(stu,beauti) values('丝琪','imgsrc/29.jpg');
insert into stugirl(stu,beauti) values('丝雨','imgsrc/30.jpg');
insert into stugirl(stu,beauti) values('韶敏','imgsrc/31.jpg');
insert into stugirl(stu,beauti) values('沈靖','imgsrc/32.jpg');





















