CREATE TABLE `students` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `maths` int(11) DEFAULT NULL,
  `tech` int(11) DEFAULT NULL,
  `physics` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;