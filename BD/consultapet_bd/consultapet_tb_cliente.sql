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
  `login_id` int DEFAULT NULL,
  `cep` int DEFAULT NULL,
  `estado_id` int DEFAULT NULL,
  `cidade_id` int DEFAULT NULL,
  `bairro_id` int DEFAULT NULL,
  `end_id` int DEFAULT NULL,
  `celular` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_cliente_ibfk_2` (`login_id`),
  KEY `tb_cliente_ibfk_3` (`estado_id`),
  KEY `tb_cliente_ibfk_4` (`cidade_id`),
  KEY `tb_cliente_ibfk_5` (`bairro_id`),
  KEY `tb_cliente_ibfk_6` (`end_id`),
  CONSTRAINT `tb_cliente_ibfk_2` FOREIGN KEY (`login_id`) REFERENCES `tb_login` (`id`),
  CONSTRAINT `tb_cliente_ibfk_3` FOREIGN KEY (`estado_id`) REFERENCES `tb_estado` (`id`),
  CONSTRAINT `tb_cliente_ibfk_4` FOREIGN KEY (`cidade_id`) REFERENCES `tb_cidade` (`id`),
  CONSTRAINT `tb_cliente_ibfk_5` FOREIGN KEY (`bairro_id`) REFERENCES `tb_bairro` (`id`),
  CONSTRAINT `tb_cliente_ibfk_6` FOREIGN KEY (`end_id`) REFERENCES `tb_end` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cliente`
--

LOCK TABLES `tb_cliente` WRITE;
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
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

-- Dump completed on 2024-04-17 22:22:09
