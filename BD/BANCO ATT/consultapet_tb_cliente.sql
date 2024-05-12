-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: consultapet
-- ------------------------------------------------------
-- Server version	8.0.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nm_responsavel` varchar(100) NOT NULL,
  `documento_cpf` varchar(11) NOT NULL,
  `login_cliente` int DEFAULT NULL,
  `cep` int DEFAULT NULL,
  `estado` varchar(25) DEFAULT NULL,
  `cidade` varchar(25) DEFAULT NULL,
  `bairro` varchar(25) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `nr` varchar(25) DEFAULT NULL,
  `celular` varchar(20) NOT NULL,
  `foto` blob,
  PRIMARY KEY (`id`),
  KEY `tb_cliente_ibfk_2` (`login_cliente`),
  CONSTRAINT `tb_cliente_ibfk_2` FOREIGN KEY (`login_cliente`) REFERENCES `tb_login_cliente` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cliente`
--

LOCK TABLES `tb_cliente` WRITE;
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
INSERT INTO `tb_cliente` VALUES (13,'diorante','46633018860',70,11250000,'ererer','ererer','ererer','erer','123123','13981466344',NULL),(14,'d','45544345565',83,1123456,'sdsd','dsdsd','sdsds','sdsds','2323','13423344322',NULL),(15,'dio','45577686678',87,11250495,'1212','1212','1212','121','121','132344455433',NULL),(16,'diorante','45544345542',88,1133456,'sdsd','dsdsd','sdsds','sdsds','2323','13423344322',NULL);
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-26 16:54:52