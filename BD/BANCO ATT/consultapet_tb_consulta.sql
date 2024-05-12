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
-- Table structure for table `tb_consulta`
--

DROP TABLE IF EXISTS `tb_consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_consulta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dt_consulta` datetime NOT NULL,
  `hr_consulta` time NOT NULL,
  `status` enum('agendada','cancelada','remarcada') NOT NULL,
  `ds_consulta` varchar(255) NOT NULL,
  `ds_medicacao` enum('Antibiótico','Anti-inflamatório','Antiparasitário','Antifúngico','Antiemético','Anticonvulsivante','Cardíaco','Suplemento Nutricional','Analgésico','Hormonal','Outro') DEFAULT NULL,
  `nm_medicacao` varchar(255) DEFAULT NULL,
  `tipo_exame` enum('Exame de Sangue','Exame de Urina','Exame de Fezes','Radiografia','Ultrassonografia','Ecocardiografia','Eletrocardiograma','Endoscopia','Biópsia','Cultura e Teste de Sensibilidade','Citologia','Biópsia por Agulha Fina','Ressonância Magnética','Tomografia Computadorizada','Artroscopia','Eletromiografia','Exame de Imagem Específico','Teste Genético','Teste de Função Hepática','Teste de Função Renal','Teste de Tireoide','Teste de Coagulação','Cultura de Fluidos Corporais','Teste de Alergia','Exame Oftalmológico','Teste de Função Cardíaca','Exame de Imagem Dental','Exame de Triagem','Teste de Desempenho','Exame Complementar','Outro') DEFAULT NULL,
  `cliente_id` int NOT NULL,
  `paciente_id` int NOT NULL,
  `clinica_id` int NOT NULL,
  `especialidade` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_consulta_ibfk_1` (`especialidade`),
  KEY `tb_consulta_ibfk_2` (`cliente_id`),
  KEY `tb_consulta_ibfk_3` (`paciente_id`),
  KEY `tb_consulta_ibfk_4` (`clinica_id`),
  CONSTRAINT `tb_consulta_ibfk_1` FOREIGN KEY (`especialidade`) REFERENCES `tb_especialidade` (`id`),
  CONSTRAINT `tb_consulta_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `tb_cliente` (`id`),
  CONSTRAINT `tb_consulta_ibfk_3` FOREIGN KEY (`paciente_id`) REFERENCES `tb_paciente` (`id`),
  CONSTRAINT `tb_consulta_ibfk_4` FOREIGN KEY (`clinica_id`) REFERENCES `tb_clinica` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_consulta`
--

LOCK TABLES `tb_consulta` WRITE;
/*!40000 ALTER TABLE `tb_consulta` DISABLE KEYS */;
INSERT INTO `tb_consulta` VALUES (81,'2024-04-20 00:00:00','09:00:00','agendada','Consulta de rotina',NULL,NULL,NULL,13,23,14,1),(82,'2024-04-21 00:00:00','10:00:00','agendada','Exame de sangue',NULL,NULL,'Exame de Sangue',14,24,15,10);
/*!40000 ALTER TABLE `tb_consulta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-26 16:54:50
