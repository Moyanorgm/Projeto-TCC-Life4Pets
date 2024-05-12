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
-- Table structure for table `tb_estado`
--

DROP TABLE IF EXISTS `tb_estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_estado` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nm_estado` varchar(50) NOT NULL,
  `Uf` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_estado`
--

LOCK TABLES `tb_estado` WRITE;
/*!40000 ALTER TABLE `tb_estado` DISABLE KEYS */;
INSERT INTO `tb_estado` VALUES (1,'Acre','AC'),(2,'Alagoas','AL'),(3,'Amapá','AP'),(4,'Amazonas','AM'),(5,'Bahia','BA'),(6,'Ceará','CE'),(7,'Distrito Federal','DF'),(8,'Espírito Santo','ES'),(9,'Goiás','GO'),(10,'Maranhão','MA'),(11,'Mato Grosso','MT'),(12,'Mato Grosso do Sul','MS'),(13,'Minas Gerais','MG'),(14,'Pará','PA'),(15,'Paraíba','PB'),(16,'Paraná','PR'),(17,'Pernambuco','PE'),(18,'Piauí','PI'),(19,'Rio de Janeiro','RJ'),(20,'Rio Grande do Norte','RN'),(21,'Rio Grande do Sul','RS'),(22,'Rondônia','RO'),(23,'Roraima','RR'),(24,'Santa Catarina','SC'),(25,'São Paulo','SP'),(26,'Sergipe','SE'),(27,'Tocantins','TO'),(28,'Acre','AC'),(29,'Alagoas','AL'),(30,'Amapá','AP'),(31,'Amazonas','AM'),(32,'Bahia','BA'),(33,'Ceará','CE'),(34,'Distrito Federal','DF'),(35,'Espírito Santo','ES'),(36,'Goiás','GO'),(37,'Maranhão','MA'),(38,'Mato Grosso','MT'),(39,'Mato Grosso do Sul','MS'),(40,'Minas Gerais','MG'),(41,'Pará','PA'),(42,'Paraíba','PB'),(43,'Paraná','PR'),(44,'Pernambuco','PE'),(45,'Piauí','PI'),(46,'Rio de Janeiro','RJ'),(47,'Rio Grande do Norte','RN'),(48,'Rio Grande do Sul','RS'),(49,'Rondônia','RO'),(50,'Roraima','RR'),(51,'Santa Catarina','SC'),(52,'São Paulo','SP'),(53,'Sergipe','SE'),(54,'Tocantins','TO');
/*!40000 ALTER TABLE `tb_estado` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-17 22:01:17
