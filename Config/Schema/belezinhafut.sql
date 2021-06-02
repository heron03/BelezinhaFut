# Host: localhost  (Version 5.5.5-10.1.21-MariaDB)
# Date: 2021-06-02 20:54:38
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "jogadors"
#

CREATE TABLE `jogadors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `clube` varchar(255) DEFAULT NULL,
  `posicao` varchar(20) DEFAULT NULL,
  `pais` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "jogadors"
#

INSERT INTO `jogadors` VALUES (1,'Ribamar','Botafogo','Atacante','Brasil'),(3,'Pablo','SÃ£o Paulo','Lateral','Brasil'),(5,'JÃ´','Corinthians','Atacante','Brasil'),(6,'Meci Careca','Barcelona','Atacante',''),(7,'Greg','Ponte Preta','Meio Campo','Estados Unidos ');
