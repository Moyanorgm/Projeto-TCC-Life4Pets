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
-- Table structure for table `tb_paciente`
--

DROP TABLE IF EXISTS `tb_paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_paciente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nm_animal` varchar(100) NOT NULL,
  `idade` int NOT NULL,
  `peso` int NOT NULL,
  `cor` varchar(20) NOT NULL,
  `especie_id` int NOT NULL,
  `raca_id` int NOT NULL,
  `sexo` enum('Macho','Femea') DEFAULT NULL,
  `castrado` enum('Sim','Não') DEFAULT NULL,
  `cliente_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_paciente_ibfk_1` (`raca_id`),
  KEY `tb_paciente_ibfk_2` (`especie_id`),
  KEY `tb_paciente_ibfk_3` (`cliente_id`),
  CONSTRAINT `tb_paciente_ibfk_1` FOREIGN KEY (`raca_id`) REFERENCES `tb_racas` (`id`),
  CONSTRAINT `tb_paciente_ibfk_2` FOREIGN KEY (`especie_id`) REFERENCES `tb_especie` (`id`),
  CONSTRAINT `tb_paciente_ibfk_3` FOREIGN KEY (`cliente_id`) REFERENCES `tb_cliente` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_paciente`
--

LOCK TABLES `tb_paciente` WRITE;
/*!40000 ALTER TABLE `tb_paciente` DISABLE KEYS */;
INSERT INTO `tb_paciente` VALUES (1,'Rex',5,11,'Marrom',1,2,'Macho','Sim',1),(2,'Luna',3,7,'Branco',2,2,'Femea','Sim',1),(3,'Thor',2,9,'Preto',3,2,'Macho','Não',2),(4,'Mel',4,6,'Amarelo',4,2,'Femea','Não',2),(5,'Bolinha',1,4,'Cinza',1,4,'Macho','Sim',3),(6,'Bela',6,9,'Laranja',1,3,'Femea','Não',4),(7,'Bob',8,13,'Malhado',5,1,'Macho','Sim',5),(8,'Lola',7,11,'Tigrado',5,3,'Femea','Não',6),(9,'Simba',2,6,'Rajado',5,4,'Macho','Sim',7),(10,'Nina',5,8,'Creme',5,5,'Femea','Não',8);
/*!40000 ALTER TABLE `tb_paciente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-14 12:41:55
