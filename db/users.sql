CREATE TABLE `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_status` tinyint(4) DEFAULT '1',
  `u_name` varchar(50) DEFAULT NULL,
  `u_password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

insert into users values ('1', '1', 'alec', NULL);