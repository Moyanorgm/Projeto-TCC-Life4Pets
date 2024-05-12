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
-- Table structure for table `tb_clinica`
--

DROP TABLE IF EXISTS `tb_clinica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_clinica` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nm_unidade` varchar(100) NOT NULL,
  `login_clinica` int NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `imagem` blob,
  `cep` varchar(10) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `nr_end` int DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_clinica_ibfk_1` (`login_clinica`),
  CONSTRAINT `tb_clinica_ibfk_1` FOREIGN KEY (`login_clinica`) REFERENCES `tb_login_clinica` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_clinica`
--

LOCK TABLES `tb_clinica` WRITE;
/*!40000 ALTER TABLE `tb_clinica` DISABLE KEYS */;
INSERT INTO `tb_clinica` VALUES (14,'Clínica Veterinária PetCare',84,'12345678901234',_binary 'clinica1.jpg','12345-678','SP','São Paulo','Centro','Av. Principal',123,NULL),(15,'Hospital Veterinário AnimalHealth',85,'98765432109876',_binary 'clinica2.jpg','54321-876','RJ','Rio de Janeiro','Copacabana','Rua Secundária',456,NULL);
/*!40000 ALTER TABLE `tb_clinica` ENABLE KEYS */;
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
