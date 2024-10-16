-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: arcadia
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `animal`
--

DROP TABLE IF EXISTS `animal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `animal` (
  `animal_id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) NOT NULL,
  `etat` varchar(50) NOT NULL,
  `type_habitat` varchar(11) NOT NULL,
  PRIMARY KEY (`animal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animal`
--

LOCK TABLES `animal` WRITE;
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
INSERT INTO `animal` VALUES (7,'lion','ok','savane'),(8,'girafe','ok','savane'),(11,'Zebre','ok','savane'),(12,'singe','ok','foret'),(13,'tortue','ok','marais'),(14,'lynx','ok','foret'),(16,'sanglier','ok','foret'),(17,'cerf','ok','foret'),(18,'loutre','','marais'),(19,'flamant rose','','marais');
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `animal_habitat`
--

DROP TABLE IF EXISTS `animal_habitat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `animal_habitat` (
  `animal_id` int(11) NOT NULL,
  `habitat_id` int(11) NOT NULL,
  PRIMARY KEY (`animal_id`),
  UNIQUE KEY `animal_id` (`animal_id`),
  KEY `habitat_id` (`habitat_id`),
  CONSTRAINT `animal_habitat_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`animal_id`),
  CONSTRAINT `animal_habitat_ibfk_2` FOREIGN KEY (`habitat_id`) REFERENCES `habitat` (`habitat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animal_habitat`
--

LOCK TABLES `animal_habitat` WRITE;
/*!40000 ALTER TABLE `animal_habitat` DISABLE KEYS */;
INSERT INTO `animal_habitat` VALUES (7,1),(8,1),(11,1),(13,2),(19,2),(12,3),(14,3),(16,3);
/*!40000 ALTER TABLE `animal_habitat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `avis`
--

DROP TABLE IF EXISTS `avis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avis` (
  `avis_id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `commentaire` varchar(50) NOT NULL,
  `isVisible` tinyint(1) NOT NULL,
  PRIMARY KEY (`avis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avis`
--

LOCK TABLES `avis` WRITE;
/*!40000 ALTER TABLE `avis` DISABLE KEYS */;
INSERT INTO `avis` VALUES (1,'Anthony','bien',0),(2,'paul','oui',0),(3,'ren├®','oui',0),(10,'paul','oui',0),(11,'paul','oui',0),(12,'paul','oui',0),(13,'paul','oui',0),(14,'paul','oui',0),(15,'paul','oui',0),(16,'paul','oui',0),(17,'paul','oui',0),(18,'paul','oui',0);
/*!40000 ALTER TABLE `avis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `habitat`
--

DROP TABLE IF EXISTS `habitat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `habitat` (
  `habitat_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` varchar(120) NOT NULL,
  `commentaire_habitat` varchar(50) NOT NULL,
  PRIMARY KEY (`habitat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `habitat`
--

LOCK TABLES `habitat` WRITE;
/*!40000 ALTER TABLE `habitat` DISABLE KEYS */;
INSERT INTO `habitat` VALUES (1,'savane','La savane est une vaste plaine tropicale, parsem├®e dÔÇÖarbres et dÔÇÖherbes hautes, riche en biodiversit├®','ok'),(2,'marais','Les marais sont des zones humides riches en biodiversit├®, essentielles pour la r├®gulation des ├®cosyst├¿mes ',''),(3,'foret','Une for├¬t est une vaste ├®tendue de terrain couverte dÔÇÖarbres, essentielle pour la biodiversit├® et lÔÇÖ├®cosyst├¿me','');
/*!40000 ALTER TABLE `habitat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_data` blob NOT NULL,
  `habitat_id` int(11) NOT NULL,
  PRIMARY KEY (`image_id`),
  KEY `habitat_id` (`habitat_id`),
  CONSTRAINT `image_ibfk_1` FOREIGN KEY (`habitat_id`) REFERENCES `habitat` (`habitat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (2,'0',1);
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `race`
--

DROP TABLE IF EXISTS `race`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `race` (
  `race_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `animal_id` int(11) NOT NULL,
  PRIMARY KEY (`race_id`),
  KEY `animal_id` (`animal_id`),
  CONSTRAINT `race_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`animal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `race`
--

LOCK TABLES `race` WRITE;
/*!40000 ALTER TABLE `race` DISABLE KEYS */;
INSERT INTO `race` VALUES (1,'Lion d\'Asie, Panthera leo persica',7),(2,'Tamarin empereur (Saguinus imperator)',12),(3,'Tortue ├®toil├®e (Geochelone elegans)',13),(4,'Hynobiidae : Salamandres asiatiques,',14),(5,'Girafe masa├» (Giraffa tippelskirchi)',8),(6,'Z├¿bre des plaines (Equus quagga)',11),(7,'Cerf sika (Cervus nippon) : Originaire dÔÇÖAsie de l',17),(8,'Lynx du Canada (Lynx canadensis)',14),(9,'  Phacoch├¿re commun (Phacochoerus africanus',16),(10,'Loutre g├®ante (Pteronura brasiliensis',18),(11,'Flamant des Cara├»bes (Phoenicopterus ruber',19);
/*!40000 ALTER TABLE `race` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rapport_veterinaire`
--

DROP TABLE IF EXISTS `rapport_veterinaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rapport_veterinaire` (
  `rapport_veterinaire_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `detail` varchar(50) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `repas` varchar(20) NOT NULL,
  `gram` int(20) NOT NULL,
  PRIMARY KEY (`rapport_veterinaire_id`),
  KEY `animal_id` (`animal_id`),
  CONSTRAINT `rapport_veterinaire_ibfk_2` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`animal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rapport_veterinaire`
--

LOCK TABLES `rapport_veterinaire` WRITE;
/*!40000 ALTER TABLE `rapport_veterinaire` DISABLE KEYS */;
/*!40000 ALTER TABLE `rapport_veterinaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_utilisateur` varchar(20) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'administrateur'),(2,'veterinaire'),(3,'employ├®');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_utilisateur`
--

DROP TABLE IF EXISTS `role_utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_utilisateur` (
  `role_id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  KEY `Username` (`Username`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `role_utilisateur_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `utilisateur` (`username`),
  CONSTRAINT `role_utilisateur_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_utilisateur`
--

LOCK TABLES `role_utilisateur` WRITE;
/*!40000 ALTER TABLE `role_utilisateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_utilisateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateur` (
  `username` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES ('alain','$2y$10$DpcbVa0vRmNdXn1Owf7lh.dboiwWPXOz/q6v9pZThJU/fjuLNyiIq','elvis','presle',2),('aline','$2y$10$OEA.YCui/lMa.rSozT4wlOMwMRp34lATOZJaH9sDJ19L4Aq4Q61dW','remi','nicole',3),('paul','$2y$10$JCqm06q6nicsfXri5ir9U.sufjIuWuWlJNgQE3A7Vb480fuEmjkf2','ren├®','pilon',1),('paulin','merci','romi','pierre',0);
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-09 18:21:20
