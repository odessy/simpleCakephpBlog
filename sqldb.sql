use blogdb;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(10),
  `created` datetime,
  `modified` datetime,
  `lastlogin` datetime,
  `first_name` varchar(100),
  `last_name` varchar(100),
  `middle_name` varchar(100),
  `email` varchar(200),
  `password` varchar(255),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
)ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  `title` varchar (200),
  `body` text,
   PRIMARY KEY (`id`)
)ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;