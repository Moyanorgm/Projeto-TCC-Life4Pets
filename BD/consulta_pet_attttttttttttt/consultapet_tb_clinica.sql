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
  `imagem` varchar(255) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `nr_end` int DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `emergencia` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_clinica_ibfk_1` (`login_clinica`),
  CONSTRAINT `tb_clinica_ibfk_1` FOREIGN KEY (`login_clinica`) REFERENCES `tb_login_clinica` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_clinica`
--

LOCK TABLES `tb_clinica` WRITE;
/*!40000 ALTER TABLE `tb_clinica` DISABLE KEYS */;
INSERT INTO `tb_clinica` VALUES (14,'Clínica Veterinária PetCare',84,'12345678901234','clinica1.jpg','12345-678','SP','São Paulo','Centro','Av. Principal',123,NULL,'24 Horas'),(15,'Hospital Veterinário AnimalHealth',85,'98765432109876','clinica2.jpg','54321-876','RJ','Rio de Janeiro','Copacabana','Rua Secundária',456,NULL,NULL),(18,'diorante111',110,'11111',NULL,'22470354','ererer','ererer','dddds','erer',123123,'11111',NULL),(19,'clinica',113,'121212',NULL,'11260495','SP','Bertioga','Indaiá','Avenida Elza Ramos',123,'121212',NULL),(20,'clinica',114,'121212',NULL,'11260495','SP','Bertioga','Indaiá','Avenida Elza Ramos',123,'121212',NULL),(21,'clinica',115,'121212',NULL,'11260495','SP','Bertioga','Indaiá','Avenida Elza Ramos',123,'121212',NULL),(22,'sdsd',116,'21212',NULL,'11260495','SP','Bertioga','Indaiá','Avenida Elza Ramos',121,'121313',NULL),(23,'sdsd',117,'21212',NULL,'11260495','SP','Bertioga','Indaiá','Avenida Elza Ramos',121,'121313',NULL),(24,'dsdsd',118,'21212',NULL,'11260495','SP','Bertioga','Indaiá','Avenida Elza Ramos',125,'1212',NULL),(25,'dsdsd',119,'21212',NULL,'11260495','SP','Bertioga','Indaiá','Avenida Elza Ramos',125,'1212',NULL),(26,'sdsds',120,'sdsdsds',NULL,'11260495','SP','Bertioga','Indaiá','Avenida Elza Ramos',323,'dsdsdsd',NULL),(27,'adsasd',121,'232323',NULL,'11260495','SP','Bertioga','Indaiá','Avenida Elza Ramos',55,'23244',NULL),(28,'adsasd',122,'232323',NULL,'11260495','SP','Bertioga','Indaiá','Avenida Elza Ramos',55,'23244',NULL),(29,'diorante123',123,'12121212',NULL,'11260495','SP','Bertioga','Indaiá','Avenida Elza Ramos',546,'12121212',NULL),(30,'diorante111',124,'122222222','','11260495','SP','Bertioga','Indaiá','Avenida Elza Ramos',123123,'2223232',NULL),(31,'diorante',125,'45343234543','../assets/img/clinica/eu_1.jpeg','11260495','SP','Bertioga','Indaiá','Avenida Elza Ramos',887,'2345343',NULL),(32,'ddddd',126,'1212121212','','11260495','SP','Bertioga','Indaiá','Avenida Elza Ramos',128,'1212121',NULL),(33,'dsdsds',127,'121343353','','11260495','SP','Bertioga','Indaiá','Avenida Elza Ramos',675,'131232323',NULL);
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

-- Dump completed on 2024-05-10  1:50:50
