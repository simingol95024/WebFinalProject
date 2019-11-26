#
# TABLE STRUCTURE FOR: account
#

DROP TABLE IF EXISTS `account`;

CREATE TABLE `account` (
  `acc_id` int(10) NOT NULL AUTO_INCREMENT,
  `acc_name` varchar(50) NOT NULL,
  `acc_lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `acc_email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin_id` int(10) NOT NULL,
  PRIMARY KEY (`acc_id`),
  KEY `acc_id` (`acc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: admin
#

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`a_id`),
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`a_id`, `username`, `password`) VALUES (1, 'simingol', 'simin95025');


#
# TABLE STRUCTURE FOR: class
#

DROP TABLE IF EXISTS `class`;

CREATE TABLE `class` (
  `class_id` int(10) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(50) NOT NULL,
  `c_id` int(10) NOT NULL,
  PRIMARY KEY (`class_id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `class_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `course` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

INSERT INTO `class` (`class_id`, `class_name`, `c_id`) VALUES (30, 'Q1_B', 16);
INSERT INTO `class` (`class_id`, `class_name`, `c_id`) VALUES (39, 'Q7', 13);
INSERT INTO `class` (`class_id`, `class_name`, `c_id`) VALUES (41, 'siminjan', 13);
INSERT INTO `class` (`class_id`, `class_name`, `c_id`) VALUES (42, 'Word', 15);


#
# TABLE STRUCTURE FOR: class_student_subject
#

DROP TABLE IF EXISTS `class_student_subject`;

CREATE TABLE `class_student_subject` (
  `class_id` int(10) NOT NULL,
  `s_id` int(10) NOT NULL,
  `sub_id` int(10) NOT NULL,
  KEY `class_id` (`class_id`),
  KEY `s_id` (`s_id`),
  KEY `sub_id` (`sub_id`),
  CONSTRAINT `class_student_subject_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`),
  CONSTRAINT `class_student_subject_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`),
  CONSTRAINT `class_student_subject_ibfk_3` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: comment
#

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: course
#

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `c_id` int(10) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `course_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `course` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO `course` (`c_id`, `c_name`) VALUES (13, 'English1212');
INSERT INTO `course` (`c_id`, `c_name`) VALUES (15, 'Computer');
INSERT INTO `course` (`c_id`, `c_name`) VALUES (16, 'Online Course');


#
# TABLE STRUCTURE FOR: student
#

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `s_id` int(10) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(50) NOT NULL,
  `s_fathername` varchar(50) NOT NULL,
  `s_lastname` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `ssn` int(10) NOT NULL,
  `time` time NOT NULL,
  `startdate` date NOT NULL,
  `finishdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO `student` (`s_id`, `s_name`, `s_fathername`, `s_lastname`, `phone`, `photo`, `email`, `birthday`, `ssn`, `time`, `startdate`, `finishdate`, `gender`, `location`) VALUES (8, 'simin', 'wer', '44444', 1234567, 'Capture.PNG', 'simingol.cs97@gmail.com', '2019-10-30', 1234567890, '00:10:00', '2019-10-03', '2019-10-01', 'male', 'asdfghjklasdfghjk');
INSERT INTO `student` (`s_id`, `s_name`, `s_fathername`, `s_lastname`, `phone`, `photo`, `email`, `birthday`, `ssn`, `time`, `startdate`, `finishdate`, `gender`, `location`) VALUES (9, 'simin', 'Abdol Ghani', 'ahmadi', 1234567, 'pro.png', 'simingol.cs97@gmail.com', '2019-11-05', 5, '01:08:00', '2019-11-12', '2019-11-12', 'on', 'asdfghjklasdfghjksdfghjk');
INSERT INTO `student` (`s_id`, `s_name`, `s_fathername`, `s_lastname`, `phone`, `photo`, `email`, `birthday`, `ssn`, `time`, `startdate`, `finishdate`, `gender`, `location`) VALUES (11, 'simin', 'wer', 'lksdfja', 1234567, 'pro2.png', 'simingol.cs97@gmail.com', '2019-11-20', 123456789, '00:34:00', '2019-11-28', '2019-11-26', 'on', 'asdfghjklasdfghjk');


#
# TABLE STRUCTURE FOR: student_class
#

DROP TABLE IF EXISTS `student_class`;

CREATE TABLE `student_class` (
  `s_id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  KEY `s_id` (`s_id`),
  KEY `class_id` (`class_id`),
  CONSTRAINT `student_class_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`),
  CONSTRAINT `student_class_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: subject
#

DROP TABLE IF EXISTS `subject`;

CREATE TABLE `subject` (
  `sub_id` int(10) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(50) NOT NULL,
  `midterm` int(10) NOT NULL,
  `final_exam` int(10) NOT NULL,
  `presentage` int(10) NOT NULL,
  `class_activity` int(10) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `subject` (`sub_id`, `sub_name`, `midterm`, `final_exam`, `presentage`, `class_activity`) VALUES (2, 'simin', 12, 21, 12, 1212);
INSERT INTO `subject` (`sub_id`, `sub_name`, `midterm`, `final_exam`, `presentage`, `class_activity`) VALUES (3, 'simin', 12, 21, 12, 1212);
INSERT INTO `subject` (`sub_id`, `sub_name`, `midterm`, `final_exam`, `presentage`, `class_activity`) VALUES (4, 's', 12, 21, 12, 1212);
INSERT INTO `subject` (`sub_id`, `sub_name`, `midterm`, `final_exam`, `presentage`, `class_activity`) VALUES (5, 'Microsoft word', 20, 60, 10, 10);
INSERT INTO `subject` (`sub_id`, `sub_name`, `midterm`, `final_exam`, `presentage`, `class_activity`) VALUES (6, 'Microsoft power point', 20, 60, 10, 10);


#
# TABLE STRUCTURE FOR: teacher
#

DROP TABLE IF EXISTS `teacher`;

CREATE TABLE `teacher` (
  `t_id` int(10) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(50) NOT NULL,
  `t_lastname` varchar(50) NOT NULL,
  `t_email` varchar(50) NOT NULL,
  `t_phone` int(10) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `acc_id` int(50) NOT NULL,
  PRIMARY KEY (`t_id`),
  KEY `acc_id` (`acc_id`),
  KEY `manager_id` (`manager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO `teacher` (`t_id`, `t_name`, `t_lastname`, `t_email`, `t_phone`, `manager_id`, `acc_id`) VALUES (5, 'simin', 'ahmadi', 'simingol.cs97@gmail.com', 23456789, 0, 0);
INSERT INTO `teacher` (`t_id`, `t_name`, `t_lastname`, `t_email`, `t_phone`, `manager_id`, `acc_id`) VALUES (6, 'simin', '', '', 0, 0, 0);
INSERT INTO `teacher` (`t_id`, `t_name`, `t_lastname`, `t_email`, `t_phone`, `manager_id`, `acc_id`) VALUES (7, 'simin', '', '', 0, 0, 0);
INSERT INTO `teacher` (`t_id`, `t_name`, `t_lastname`, `t_email`, `t_phone`, `manager_id`, `acc_id`) VALUES (8, '', '', '', 0, 0, 0);
INSERT INTO `teacher` (`t_id`, `t_name`, `t_lastname`, `t_email`, `t_phone`, `manager_id`, `acc_id`) VALUES (9, 'simin', 'lksdfja', 'simingol.cs97@gmail.com', 0, 0, 0);
INSERT INTO `teacher` (`t_id`, `t_name`, `t_lastname`, `t_email`, `t_phone`, `manager_id`, `acc_id`) VALUES (10, 'simin', 'lksdfja', 'simingol.cs97@gmail.com', 1234567, 0, 0);
INSERT INTO `teacher` (`t_id`, `t_name`, `t_lastname`, `t_email`, `t_phone`, `manager_id`, `acc_id`) VALUES (11, 'simin', 'lksdfja', 'simingol.cs97@gmail.com', 0, 0, 0);
INSERT INTO `teacher` (`t_id`, `t_name`, `t_lastname`, `t_email`, `t_phone`, `manager_id`, `acc_id`) VALUES (12, 'xxx', 'lksdfja', 'simingol.cs97@gmail.com', 1234567, 0, 0);
INSERT INTO `teacher` (`t_id`, `t_name`, `t_lastname`, `t_email`, `t_phone`, `manager_id`, `acc_id`) VALUES (13, 'simin', 'lksdfja', 'simingol.cs97@gmail.com', 1234567, 0, 0);
INSERT INTO `teacher` (`t_id`, `t_name`, `t_lastname`, `t_email`, `t_phone`, `manager_id`, `acc_id`) VALUES (14, 'simin', 'lksdfja', 'simingol.cs97@gmail.com', 1234567, 0, 0);


#
# TABLE STRUCTURE FOR: teacher_student
#

DROP TABLE IF EXISTS `teacher_student`;

CREATE TABLE `teacher_student` (
  `t_id` int(10) NOT NULL,
  `s_id` int(10) NOT NULL,
  KEY `t_id` (`t_id`),
  KEY `s_id` (`s_id`),
  CONSTRAINT `teacher_student_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `teacher` (`t_id`),
  CONSTRAINT `teacher_student_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

