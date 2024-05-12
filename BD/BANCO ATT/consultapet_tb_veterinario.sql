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
-- Table structure for table `tb_veterinario`
--

DROP TABLE IF EXISTS `tb_veterinario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_veterinario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img_vet` varchar(100) NOT NULL,
  `idade_vet` int DEFAULT NULL,
  `ds_vet` varchar(100) DEFAULT NULL,
  `nm_vet` varchar(255) NOT NULL,
  `crmv` varchar(100) NOT NULL,
  `especialidade` int NOT NULL,
  `clinica_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_veterinario_ibfk_1` (`especialidade`),
  KEY `fk_veterinario_id` (`clinica_id`),
  CONSTRAINT `fk_veterinario_id` FOREIGN KEY (`clinica_id`) REFERENCES `tb_clinica` (`id`),
  CONSTRAINT `tb_veterinario` FOREIGN KEY (`especialidade`) REFERENCES `tb_especialidade` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_veterinario`
--

LOCK TABLES `tb_veterinario` WRITE;
/*!40000 ALTER TABLE `tb_veterinario` DISABLE KEYS */;
INSERT INTO `tb_veterinario` VALUES (3,'vet1.jpg',35,'Especializado em cirurgia de pequenos animais','Dr. José Silva','1234',2,14),(4,'vet2.jpg',40,'Especializada em cuidados dermatológicos','Dra. Ana Oliveira','5678',4,15);
/*!40000 ALTER TABLE `tb_veterinario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-26 16:54:51
