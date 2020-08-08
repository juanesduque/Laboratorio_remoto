create database graficos;
 use graficos;

DROP TABLE IF EXISTS `ventas`;

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL AUTO_INCREMENT,
  `fechaVenta` date DEFAULT NULL,
  `montoVenta` float DEFAULT NULL,
  PRIMARY KEY (`id_venta`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;


INSERT INTO `ventas` VALUES (1,'2017-05-05',10000),
       (2,'2017-07-09',12000),
       (3,'2017-09-20',20000),
       (4,'2018-01-01',50000),
       (5,'2018-01-25',8000),
       (6,'2018-02-14',10000),
       (7,'2018-05-12',11000),
       (8,'2018-06-23',9000),
       (9,'2018-09-14',12000),
       (10,'2018-10-02',18000),
       (11,'2018-12-25',13000),
       (12,'2019-01-07',10000),
       (13,'2019-02-11',11000),
       (14,'2019-03-22',15000),
       (15,'2019-04-05',20000),
       (16,'2019-04-30',17000),
       (17,'2019-05-08',19000),
       (18,'2019-05-29',10000),
       (19,'2019-06-25',11000),
       (20,'2019-07-25',18000);