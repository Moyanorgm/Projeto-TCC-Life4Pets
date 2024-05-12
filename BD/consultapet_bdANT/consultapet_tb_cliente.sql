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
  `paciente_id` int DEFAULT NULL,
  `estado_id` int DEFAULT NULL,
  `cidade_id` int DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_cliente_ibfk_1` (`paciente_id`),
  KEY `tb_cliente_ibfk_3` (`estado_id`),
  KEY `tb_cliente_ibfk_4` (`cidade_id`),
  CONSTRAINT `tb_cliente_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `tb_paciente` (`id`),
  CONSTRAINT `tb_cliente_ibfk_3` FOREIGN KEY (`estado_id`) REFERENCES `tb_estado` (`id`),
  CONSTRAINT `tb_cliente_ibfk_4` FOREIGN KEY (`cidade_id`) REFERENCES `tb_cidade` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cliente`
--

LOCK TABLES `tb_cliente` WRITE;
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
INSERT INTO `tb_cliente` VALUES (1,'João Silva','93818886202',1,1,1,'joao@example.com','551122334455','senha123'),(2,'Maria Oliveira','41779976500',2,2,2,'maria@example.com','551233445566','senha456'),(3,'Carlos Santos','68727356434',3,3,3,'carlos@example.com','551122334499','senha789'),(4,'Ana Souza','74828527516',4,4,4,'ana@example.com','551188887777','senhaabc'),(5,'Pedro Pereira','34327886220',5,5,5,'pedro@example.com','5511999912345','senhaXYZ'),(6,'Mariana Costa','33382356155',6,6,6,'mariana@example.com','5511666777888','senha1234'),(7,'Fernanda Rodrigues','39142342538',7,7,7,'fernanda@example.com','551122334466','senha5678'),(8,'Ricardo Almeida','66175340345',8,8,8,'ricardo@example.com','551188889999','senhaabcd'),(9,'Patrícia Gonçalves','34756276806',9,9,9,'patricia@example.com','551122334422','senha9999'),(10,'Gabriel Lima','22745414690',10,10,10,'gabriel@example.com','551155556666','senha1122'),(12,'diorante','0',1,1,1,'marciavitoria45280@gmail.com','13981466344','1234');
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

-- Dump completed on 2024-04-14 12:41:54
