DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `course` (`id`, `title`)
VALUES
	(1,'Cooking for Fun'),
	(2,'Arduin and Automation'),
	(3,'Education for Life'),
	(4,'Modern PHP Definitive Guide');


DROP TABLE IF EXISTS `course_application`;

CREATE TABLE `course_application` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `application_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_course` (`id_course`,`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `course_application` (`id`, `id_user`, `id_course`, `application_date`)
VALUES
	(1,1,2,'2020-09-24 17:44:36'),
	(2,1,3,'2020-09-24 16:34:32'),
	(3,2,3,'2020-09-24 18:14:06');


DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `user` (`id`, `email`, `name`)
VALUES
	(1,'edward@foo.com','Edward'),
	(2,'john@foo.com','John'),
	(3,'Clair','cliar@foo.com'),
	(4,'Margareth','margot@foo.com');

