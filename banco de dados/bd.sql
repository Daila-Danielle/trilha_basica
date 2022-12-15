/*
SQLyog Enterprise v12.13 (64 bit)
MySQL - 5.7.31-0ubuntu0.18.04.1-log : Database - treinamento_daila
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`treinamento_daila` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `treinamento_daila`;

/*Table structure for table `beneficiarios` */

DROP TABLE IF EXISTS `beneficiarios`;

CREATE TABLE `beneficiarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `documento` char(14) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` char(2) NOT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `situacao` enum('A','I') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `documento` (`documento`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `beneficiarios` */

insert  into `beneficiarios`(`id`,`nome`,`documento`,`logradouro`,`numero`,`bairro`,`cidade`,`uf`,`telefone`,`celular`,`situacao`) values (7,'alguem','9857','89','850','Itacolomi','Betim','RO','35967224','31982829363','A'),(8,'Daila','02362909670','rua jeova jire','850','Itacolomi','Betim','MG','35967224','31982829363','A'),(15,'fernando','123456','rua jeova jire','860','cruzeiro do sul','Betim','MG','35967224','31982829363','A'),(18,'Barbara ','123456789','rua agua branca','860','cruzeiro do sul','Betim','ES','35967224','31982829363','A'),(19,'leonardo','021558','rua jeova jire','860','cruzeiro do sul','Betim','BA','35967224','31982829363','A');

/*Table structure for table `produtoServico` */

DROP TABLE IF EXISTS `produtoServico`;

CREATE TABLE `produtoServico` (
  `idProduto` int(11) DEFAULT NULL,
  `idServico` int(11) DEFAULT NULL,
  KEY `idProduto` (`idProduto`),
  KEY `idServico` (`idServico`),
  CONSTRAINT `produtoServico_ibfk_1` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`id`),
  CONSTRAINT `produtoServico_ibfk_2` FOREIGN KEY (`idServico`) REFERENCES `servicos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `produtoServico` */

/*Table structure for table `produtoVeiculo` */

DROP TABLE IF EXISTS `produtoVeiculo`;

CREATE TABLE `produtoVeiculo` (
  `idProduto` int(11) DEFAULT NULL,
  `idVeiculo` int(11) DEFAULT NULL,
  `situacao` enum('A','I') NOT NULL,
  KEY `idProduto` (`idProduto`),
  KEY `idVeiculo` (`idVeiculo`),
  CONSTRAINT `produtoVeiculo_ibfk_1` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`id`),
  CONSTRAINT `produtoVeiculo_ibfk_2` FOREIGN KEY (`idVeiculo`) REFERENCES `veiculos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `produtoVeiculo` */

/*Table structure for table `produtos` */

DROP TABLE IF EXISTS `produtos`;

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `situacao` enum('A','I') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `produtos` */

/*Table structure for table `servicos` */

DROP TABLE IF EXISTS `servicos`;

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `situacao` enum('A','I') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `servicos` */

/*Table structure for table `veiculos` */

DROP TABLE IF EXISTS `veiculos`;

CREATE TABLE `veiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` char(7) DEFAULT NULL,
  `chassi` varchar(100) NOT NULL,
  `montadora` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `anoFabricacao` char(4) NOT NULL,
  `anoModelo` char(4) NOT NULL,
  `idBeneficiario` int(11) DEFAULT NULL,
  `situacao` enum('A','I') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `chassi` (`chassi`),
  UNIQUE KEY `placa` (`placa`),
  KEY `idBeneficiario` (`idBeneficiario`),
  CONSTRAINT `veiculos_ibfk_1` FOREIGN KEY (`idBeneficiario`) REFERENCES `beneficiarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `veiculos` */

insert  into `veiculos`(`id`,`placa`,`chassi`,`montadora`,`modelo`,`anoFabricacao`,`anoModelo`,`idBeneficiario`,`situacao`) values (1,'sdagfg','ahzfhb','hdshxdf','hftghuj','2001','2010',7,'A'),(21,'85967','85742','hdshxdf','hftghuj','2014','2015',8,'A'),(26,'84751','85741','tgszrgbrfhy','hftghuj','2014','2015',8,'A'),(27,'847plk','oiuhyt','','','','',NULL,'A');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
