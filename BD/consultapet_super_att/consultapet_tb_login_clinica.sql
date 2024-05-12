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
-- Table structure for table `tb_login_clinica`
--

DROP TABLE IF EXISTS `tb_login_clinica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_login_clinica` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_login_clinica`
--

LOCK TABLES `tb_login_clinica` WRITE;
/*!40000 ALTER TABLE `tb_login_clinica` DISABLE KEYS */;
INSERT INTO `tb_login_clinica` VALUES (84,'petcare','petcare@email.com','1234'),(85,'animal','animal@email.com','123'),(100,'ddd','m@gmail.com','1234'),(101,'ddd','m@gmail.com','1234'),(102,'ddd','m@gmail.com','1234'),(103,'ddd','m@gmail.com','1234'),(104,'ddd','m@gmail.com','1234'),(105,'ddd','m@gmail.com','1234'),(106,'ddd','m@gmail.com','1234'),(107,'ddd','m@gmail.com','1234'),(108,'ddd','m@gmail.com','1234'),(109,'dfdfddd','marciavitoria45280@gmail.com',''),(110,'dfdfddd','marciavitoria45280@gmail.com',''),(111,'','',''),(112,'','',''),(113,'clini','clinica@cli','123'),(114,'clini','clinica@cli','123'),(115,'clini','clinica@cli','123'),(116,'dse','dsdsd@dd','123'),(117,'dse','dsdsd@dd','123'),(118,'dddee','dsdsd@sdsd','123'),(119,'dddee','dsdsd@sdsd','123'),(120,'dsdsd','dsdsdsd@eew','1234'),(121,'dddgg','asda@gg','123'),(122,'dddgg','asda@gg','123'),(123,'dioclini','280@gmail.com','$2y$10$EZO8Odk6eF.nIJT0Sok5aut8msWYN0shP3q76csT1djcshfSf6bcS'),(124,'clinidio','marciav@gmail.com','123'),(125,'4434343','ma0@gmail.com','123'),(126,'clinicaddd','dddd@dsdsd','123'),(127,'dddd','sdsd@sdsdsd','123'),(129,'dddd','sdsd@sdsdsd','root'),(130,'dddd','sdsd@sdsdsd','root'),(131,'dddd','sdsd@sdsdsd','root'),(132,'dddd','sdsd@sdsdsd','root'),(133,'dddd','sdsd@sdsdsd','root'),(134,'dddd','sdsd@sdsdsd','root'),(135,'dddd','sdsd@sdsdsd','root'),(136,'dddd','sdsd@sdsdsd','root'),(137,'dddd','sdsd@sdsdsd','root'),(138,'dddd','sdsd@sdsdsd','root'),(139,'dddd','sdsd@sdsdsd','root');
/*!40000 ALTER TABLE `tb_login_clinica` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-12  9:37:58
