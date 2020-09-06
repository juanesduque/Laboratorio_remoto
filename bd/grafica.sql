create database graficos;
 use graficos;

DROP TABLE IF EXISTS `tabla`;

CREATE TABLE `tabla` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frecuencia` float DEFAULT NULL,
  `amplitud` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `tabla` VALUES (1,100,0),
       (2,200,0.1),
       (3,300,0.2),
       (4,400,0.3),
       (5,500,0.4),
       (6,600,0.5),
       (7,700,0.4),
       (8,800,0.3),
       (9,900,0.2),
       (10,1000,0.1),
       (11,1100,0),
       (12,1200,0.1),
       (13,1300,0.2),
       (14,1400,0.3),
       (15,1500,0.4),
       (16,1600,0.5),
       (17,1700,0.4),
       (18,1800,0.3),
       (19,1900,0.2),
       (20,2000,0.1);