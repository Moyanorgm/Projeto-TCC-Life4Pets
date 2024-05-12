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
-- Table structure for table `tb_horarios_funcionamento`
--

DROP TABLE IF EXISTS `tb_horarios_funcionamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_horarios_funcionamento` (
  `id` int NOT NULL AUTO_INCREMENT,
  `clinica_id` int NOT NULL,
  `dia_semana` varchar(25) DEFAULT NULL,
  `hora_abertura` time DEFAULT NULL,
  `hora_fechamento` time DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_horario_ibfk_1` (`clinica_id`),
  CONSTRAINT `tb_horarios_funcionamento` FOREIGN KEY (`clinica_id`) REFERENCES `tb_clinica` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_horarios_funcionamento`
--

LOCK TABLES `tb_horarios_funcionamento` WRITE;
/*!40000 ALTER TABLE `tb_horarios_funcionamento` DISABLE KEYS */;
INSERT INTO `tb_horarios_funcionamento` VALUES (1,14,'segunda','08:00:00','18:00:00',NULL),(2,14,'segunda','08:00:00','18:00:00',NULL),(3,14,'terca','00:00:00','00:00:00',NULL),(4,14,'quarta','00:00:00','00:00:00',NULL),(5,14,'quinta','00:00:00','00:00:00',NULL),(6,14,'sexta','00:00:00','00:00:00',NULL),(7,14,'sabado','00:00:00','00:00:00',NULL),(8,14,'domingo','00:00:00','00:00:00',NULL),(9,14,'segunda','08:00:00','18:00:00',NULL),(10,14,'terca','00:00:00','00:00:00',NULL),(11,14,'quarta','00:00:00','00:00:00',NULL),(12,14,'quinta','00:00:00','00:00:00',NULL),(13,14,'sexta','00:00:00','00:00:00',NULL),(14,14,'sabado','00:00:00','00:00:00',NULL),(15,14,'domingo','00:00:00','00:00:00',NULL),(16,14,'terca','08:00:00','18:00:00',NULL),(17,14,'quarta','08:00:00','18:00:00',NULL),(18,14,'quinta','08:00:00','18:00:00',NULL),(19,14,'sexta','08:00:00','18:00:00',NULL),(20,14,'sabado','08:00:00','17:00:00',NULL),(21,14,'domingo','08:00:00','12:00:00',NULL),(22,18,'segunda','08:00:00','18:00:00',NULL),(23,18,'terca','08:00:00','18:00:00',NULL),(24,18,'quarta','08:00:00','18:00:00',NULL),(25,18,'quinta','08:00:00','18:00:00',NULL),(26,18,'sexta','08:00:00','18:00:00',NULL),(27,18,'sabado','08:00:00','17:00:00',NULL),(28,18,'domingo','08:00:00','12:00:00',NULL),(29,19,'segunda','08:00:00','18:00:00',''),(30,19,'terca','08:00:00','18:00:00',''),(31,19,'quarta','08:00:00','18:00:00',''),(32,19,'quinta','08:00:00','18:00:00',''),(33,19,'sexta','08:00:00','18:00:00',''),(34,19,'sabado','08:00:00','13:00:00',''),(35,19,'domingo','00:00:00','00:00:00',''),(36,20,'segunda','08:00:00','18:00:00',''),(37,20,'terca','08:00:00','18:00:00',''),(38,20,'quarta','08:00:00','18:00:00',''),(39,20,'quinta','08:00:00','18:00:00',''),(40,20,'sexta','08:00:00','18:00:00',''),(41,20,'sabado','08:00:00','13:00:00',''),(42,20,'domingo','00:00:00','00:00:00',''),(43,21,'segunda','08:00:00','18:00:00',''),(44,21,'terca','08:00:00','18:00:00',''),(45,21,'quarta','08:00:00','18:00:00',''),(46,21,'quinta','08:00:00','18:00:00',''),(47,21,'sexta','08:00:00','18:00:00',''),(48,21,'sabado','08:00:00','13:00:00',''),(49,21,'domingo','00:00:00','00:00:00',''),(50,22,'segunda','08:00:00','18:00:00','fechado'),(51,22,'terca','08:00:00','18:00:00','fechado'),(52,22,'quarta','08:00:00','18:00:00','fechado'),(53,22,'quinta','08:00:00','18:00:00','fechado'),(54,22,'sexta','08:00:00','18:00:00','fechado'),(55,22,'sabado','08:00:00','12:00:00','fechado'),(56,22,'domingo','00:00:00','00:00:00','fechado'),(57,23,'segunda',NULL,NULL,'fechado'),(58,23,'terca',NULL,NULL,'fechado'),(59,23,'quarta',NULL,NULL,'fechado'),(60,23,'quinta',NULL,NULL,'fechado'),(61,23,'sexta',NULL,NULL,'fechado'),(62,23,'sabado',NULL,NULL,'fechado'),(63,23,'domingo',NULL,NULL,'fechado'),(64,24,'segunda',NULL,NULL,'fechado'),(65,24,'terca',NULL,NULL,'fechado'),(66,24,'quarta',NULL,NULL,'fechado'),(67,24,'quinta',NULL,NULL,'fechado'),(68,24,'sexta',NULL,NULL,'fechado'),(69,24,'sabado',NULL,NULL,'fechado'),(70,24,'domingo',NULL,NULL,'fechado'),(71,27,'segunda','08:25:00','23:52:00','aberto'),(72,27,'terca','23:52:00','23:28:00','aberto'),(73,27,'quarta','23:52:00','05:59:00','aberto'),(74,27,'quinta','08:52:00','23:52:00','aberto'),(75,27,'sexta','08:28:00','23:52:00','aberto'),(76,27,'sabado','08:59:00','23:52:00','aberto'),(77,27,'domingo',NULL,NULL,'fechado'),(78,28,'segunda','08:25:00','23:52:00','aberto'),(79,28,'terca','23:52:00','23:28:00','aberto'),(80,28,'quarta','23:52:00','05:59:00','aberto'),(81,28,'quinta','08:52:00','23:52:00','aberto'),(82,28,'sexta','08:28:00','23:52:00','aberto'),(83,28,'sabado','08:59:00','23:52:00','aberto'),(84,28,'domingo',NULL,NULL,'fechado');
/*!40000 ALTER TABLE `tb_horarios_funcionamento` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-06 18:21:03
