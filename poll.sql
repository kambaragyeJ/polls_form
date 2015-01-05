CREATE TABLE `poll` (
  `id` int(3) NOT NULL auto_increment,
  `name` varchar(255),
  `email` varchar(255),
  `browser` varchar(200) default NULL,
  `reason` varchar(255),
  `date` datetime default CURRENT_TIMESTAMP,
 
  PRIMARY KEY  (`id`)
);

-- 
-- Dumping fake data for table `poll`
-- 

INSERT INTO `poll` VALUES (1, 'Tom','tom@mobi.ac.za','firefox','fast','2014-11-11 17:16:30');
INSERT INTO `poll` VALUES (2, 'William','williamK@gmail.com','internetexplorer','Excellent','2014-11-11 16:16:10');
INSERT INTO `poll` VALUES (3, 'Tolo','tolo@yahoo.com','chrome','Its used by the majority of the people','2014-11-11 15:16:00');
INSERT INTO `poll` VALUES (4, 'Jane','jane@gmail.com','safari','Its secure','2014-11-11 16:16:40');
INSERT INTO `poll` VALUES (5, 'Betty','2855881@myuwc.ac.za','safari','fast','2014-11-10 13:16:00');
INSERT INTO `poll` VALUES (6, 'Kingsley','kingsley@myuwc.ac.za','opera','fast','2014-11-11 16:16:00');
INSERT INTO `poll` VALUES (7, 'Ruth','ruth@hotmail.com','fire fox','fast','2014-11-11 12:16:20');
INSERT INTO `poll` VALUES (8, 'jackson','jkambaragye@gmail.com','chrome','fast','2014-11-11 11:16:50');

