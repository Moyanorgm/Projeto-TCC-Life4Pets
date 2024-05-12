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
-- Table structure for table `tb_especie`
--

DROP TABLE IF EXISTS `tb_especie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_especie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ds_especie` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_especie`
--

LOCK TABLES `tb_especie` WRITE;
/*!40000 ALTER TABLE `tb_especie` DISABLE KEYS */;
INSERT INTO `tb_especie` VALUES (1,'Cachorro'),(2,'Gato'),(3,'Pássaro'),(4,'Coelho'),(5,'Hamster'),(6,'Peixe'),(7,'Tartaruga'),(8,'Porquinho-da-Índia'),(9,'Calopsita'),(10,'Canário'),(11,'Periquito'),(12,'Pomba'),(13,'Agapornis'),(14,'Gerbil'),(15,'Chinchila'),(16,'Iguana'),(17,'Galo'),(18,'Galinha'),(19,'Pato'),(20,'Cavalo'),(21,'Vaca'),(22,'Cavalo Marinho'),(23,'Ovelha'),(24,'Capivara'),(25,'Gambá'),(26,'Esquilo'),(27,'Mico'),(28,'Sabiá'),(29,'Mico-Leão-Dourado'),(30,'Tucano'),(31,'Anta'),(32,'Onça-Pintada'),(33,'Macaco-Prego'),(34,'Jabuti'),(35,'Jacaré'),(36,'Peixe-Boi'),(37,'Arara'),(38,'Tigre'),(39,'Lobo-Guará'),(40,'Pinguim'),(41,'Urubu'),(42,'Ornitorrinco'),(43,'Tamanduá-Bandeira'),(44,'Papagaio'),(45,'Cobra'),(46,'Lagarto'),(47,'Bicho-Preguiça'),(48,'Rato');
/*!40000 ALTER TABLE `tb_especie` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-14 12:41:54
