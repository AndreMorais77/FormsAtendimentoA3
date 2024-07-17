CREATE DATABASE  IF NOT EXISTS `gestaoatendimentos` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `gestaoatendimentos`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: gestaoatendimentos
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `atendimento`
--

DROP TABLE IF EXISTS `atendimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `atendimento` (
  `idAtendimento` int(11) NOT NULL AUTO_INCREMENT,
  `idFormaAtendimento` int(11) NOT NULL,
  `idPerguntaPublico` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `dataCadastro` datetime NOT NULL,
  `ativo` enum('S','N') NOT NULL DEFAULT 'S',
  `respostaAtendimento` text DEFAULT NULL,
  PRIMARY KEY (`idAtendimento`,`idFormaAtendimento`,`idPerguntaPublico`,`idUsuario`),
  KEY `fk_atendimento_formaatendimento1_idx` (`idFormaAtendimento`),
  KEY `fk_atendimento_perguntapublico1_idx` (`idPerguntaPublico`),
  KEY `fk_atendimento_usuario1_idx` (`idUsuario`),
  CONSTRAINT `fk_atendimento_formaatendimento1` FOREIGN KEY (`idFormaAtendimento`) REFERENCES `formaatendimento` (`idFormaAtendimento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_atendimento_perguntapublico1` FOREIGN KEY (`idPerguntaPublico`) REFERENCES `perguntapublico` (`idPerguntaPublico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_atendimento_usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=224 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atendimento`
--

LOCK TABLES `atendimento` WRITE;
/*!40000 ALTER TABLE `atendimento` DISABLE KEYS */;
INSERT INTO `atendimento` VALUES (203,6,1,8,'0000-00-00 00:00:00','S','2'),(204,6,1,8,'0000-00-00 00:00:00','S','1'),(205,6,1,8,'0000-00-00 00:00:00','S','2'),(206,6,1,8,'0000-00-00 00:00:00','S','1'),(207,6,1,8,'0000-00-00 00:00:00','S','2'),(208,6,1,8,'0000-00-00 00:00:00','S','2'),(209,6,1,8,'0000-00-00 00:00:00','S','2'),(210,6,1,8,'0000-00-00 00:00:00','S','2'),(211,6,1,8,'0000-00-00 00:00:00','S','1'),(212,6,2,8,'0000-00-00 00:00:00','S','alisson'),(213,6,1,8,'0000-00-00 00:00:00','S','Vida, Centro humanistico'),(214,6,1,8,'0000-00-00 00:00:00','S','1'),(215,6,2,8,'0000-00-00 00:00:00','S','1111111111111'),(216,6,1,8,'0000-00-00 00:00:00','S','Outra'),(217,6,1,8,'0000-00-00 00:00:00','S','1'),(218,6,1,8,'0000-00-00 00:00:00','S','1'),(219,6,2,8,'0000-00-00 00:00:00','S','3251651'),(220,6,1,8,'0000-00-00 00:00:00','S','Vida, Centro humanistico'),(221,6,1,8,'0000-00-00 00:00:00','S','1'),(222,6,2,8,'0000-00-00 00:00:00','S','fffff'),(223,6,1,8,'0000-00-00 00:00:00','S','Orientações sobre empreendedorismo');
/*!40000 ALTER TABLE `atendimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formaatendimento`
--

DROP TABLE IF EXISTS `formaatendimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `formaatendimento` (
  `idFormaAtendimento` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `nomeAtendimento` varchar(255) NOT NULL,
  `dataCadastro` datetime NOT NULL,
  `ativo` enum('S','N') NOT NULL DEFAULT 'S',
  PRIMARY KEY (`idFormaAtendimento`,`idUsuario`),
  KEY `fk_tipoatendimento_usuario1_idx` (`idUsuario`),
  CONSTRAINT `fk_tipoatendimento_usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formaatendimento`
--

LOCK TABLES `formaatendimento` WRITE;
/*!40000 ALTER TABLE `formaatendimento` DISABLE KEYS */;
INSERT INTO `formaatendimento` VALUES (6,8,'Presencial','0000-00-00 00:00:00','S'),(13,8,'Whatsapp','0000-00-00 00:00:00','S'),(14,8,'Ligação telefonica','0000-00-00 00:00:00','S'),(15,8,'E-mail','0000-00-00 00:00:00','S'),(16,8,'Redes Sociais','0000-00-00 00:00:00','S'),(17,8,'Teams','0000-00-00 00:00:00','S'),(18,8,'Outros','0000-00-00 00:00:00','S');
/*!40000 ALTER TABLE `formaatendimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfil` (
  `idPerfil` int(11) NOT NULL AUTO_INCREMENT,
  `nomePerfil` varchar(255) NOT NULL,
  `dataCadastro` datetime DEFAULT NULL,
  `ativo` enum('S','N') NOT NULL DEFAULT 'S',
  PRIMARY KEY (`idPerfil`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'alisson','0000-00-00 00:00:00','S'),(2,'samira',NULL,'S'),(3,'',NULL,'S'),(4,'aaaa',NULL,'S'),(5,'asdas',NULL,'S'),(6,'asdasgg',NULL,'S'),(7,'111',NULL,'S');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfilsessao`
--

DROP TABLE IF EXISTS `perfilsessao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfilsessao` (
  `idPerfil` int(11) NOT NULL,
  `idSessao` int(11) NOT NULL,
  PRIMARY KEY (`idPerfil`,`idSessao`),
  KEY `fk_perfil_has_sessao_sessao1_idx` (`idSessao`),
  KEY `fk_perfil_has_sessao_perfil1_idx` (`idPerfil`),
  CONSTRAINT `fk_perfil_has_sessao_perfil1` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`idPerfil`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_perfil_has_sessao_sessao1` FOREIGN KEY (`idSessao`) REFERENCES `sessao` (`idSessao`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfilsessao`
--

LOCK TABLES `perfilsessao` WRITE;
/*!40000 ALTER TABLE `perfilsessao` DISABLE KEYS */;
/*!40000 ALTER TABLE `perfilsessao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perguntapublico`
--

DROP TABLE IF EXISTS `perguntapublico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perguntapublico` (
  `idPerguntaPublico` int(11) NOT NULL AUTO_INCREMENT,
  `idPublico` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `descricaoPergunta` text NOT NULL,
  `dataCadastro` datetime NOT NULL,
  `ativo` enum('S','N') NOT NULL DEFAULT 'S',
  PRIMARY KEY (`idPerguntaPublico`,`idPublico`,`idUsuario`),
  KEY `fk_perguntapublico_publico1_idx` (`idPublico`),
  KEY `fk_perguntapublico_usuario1_idx` (`idUsuario`),
  CONSTRAINT `fk_perguntapublico_publico1` FOREIGN KEY (`idPublico`) REFERENCES `publico` (`idPublico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_perguntapublico_usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perguntapublico`
--

LOCK TABLES `perguntapublico` WRITE;
/*!40000 ALTER TABLE `perguntapublico` DISABLE KEYS */;
INSERT INTO `perguntapublico` VALUES (1,1,8,'Nome do trabalhador','0000-00-00 00:00:00','S'),(2,1,8,'CPF do trabalhador','0000-00-00 00:00:00','S'),(3,1,8,'Telefone de contato do trabalhador','0000-00-00 00:00:00','S'),(4,2,8,'Nome do empregador','0000-00-00 00:00:00','S'),(5,2,8,'CNPJ do empregador  ','0000-00-00 00:00:00','S'),(6,2,8,'Telefone para contato','0000-00-00 00:00:00','S');
/*!40000 ALTER TABLE `perguntapublico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publico`
--

DROP TABLE IF EXISTS `publico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publico` (
  `idPublico` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `nomePublico` varchar(255) NOT NULL,
  `dataCadastro` datetime NOT NULL,
  `ativo` enum('S','N') NOT NULL DEFAULT 'S',
  PRIMARY KEY (`idPublico`,`idUsuario`),
  KEY `fk_publico_usuario1_idx` (`idUsuario`),
  CONSTRAINT `fk_publico_usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publico`
--

LOCK TABLES `publico` WRITE;
/*!40000 ALTER TABLE `publico` DISABLE KEYS */;
INSERT INTO `publico` VALUES (1,8,'Trabalhador','0000-00-00 00:00:00','S'),(2,8,'Empregador','0000-00-00 00:00:00','S'),(3,8,'Outras agencias','0000-00-00 00:00:00','S'),(8,8,'ADS','0000-00-00 00:00:00','S'),(9,8,'Setores da FGTAS','0000-00-00 00:00:00','S'),(10,8,'interessado de informações sobre o mercado de trabalho','0000-00-00 00:00:00','S'),(11,8,'Outra','0000-00-00 00:00:00','S');
/*!40000 ALTER TABLE `publico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessao`
--

DROP TABLE IF EXISTS `sessao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessao` (
  `idSessao` int(11) NOT NULL AUTO_INCREMENT,
  `nomeSessao` varchar(255) NOT NULL,
  `dataCadsatro` datetime DEFAULT NULL,
  PRIMARY KEY (`idSessao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessao`
--

LOCK TABLES `sessao` WRITE;
/*!40000 ALTER TABLE `sessao` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipoatendimento`
--

DROP TABLE IF EXISTS `tipoatendimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipoatendimento` (
  `idtipoatendimento` int(11) NOT NULL AUTO_INCREMENT,
  `tipoatendimento` varchar(45) NOT NULL,
  PRIMARY KEY (`idtipoatendimento`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipoatendimento`
--

LOCK TABLES `tipoatendimento` WRITE;
/*!40000 ALTER TABLE `tipoatendimento` DISABLE KEYS */;
INSERT INTO `tipoatendimento` VALUES (1,'Carteira de trabalho, SL, Vagas'),(2,'Programa gaucho do Artesanato'),(3,'Vida, Centro humanistico'),(4,'Orientações sobre empreendedorismo'),(5,'Informações sobre mercado de trabalho'),(6,'Outra');
/*!40000 ALTER TABLE `tipoatendimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'aaa','$2y$10$P2WdL2dY3/z/3RSL2Yxk7eeBiymNh9hazYuLbhyD3VXjjuRFzknsC'),(2,'flavio','$2y$10$by1mAVkeBJkQeaJU58FmQedUN1O/hbkgEicFEs5BedWnzQzJKI1cu'),(3,'fff','$2y$10$n7aPQfYjq91NHSyfiBuVFu7NYBxvGJQu3F7WGENUHyI3t4kNYhaDO'),(4,'sss','$2y$10$Rr62TKwm7bm7oP2.WTE0JebPFHl0I88bMZcHlCEX9sCNlk6hMS2nO');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsuario` varchar(255) NOT NULL,
  `emailUsuario` varchar(255) NOT NULL,
  `loginUsuario` varchar(255) NOT NULL,
  `senhaUsuario` varchar(255) NOT NULL,
  `dataCadastro` datetime DEFAULT NULL,
  `telefoneCelular` varchar(45) DEFAULT NULL,
  `ativo` enum('S','N') NOT NULL DEFAULT 'S',
  `idPerfil` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`,`idPerfil`),
  KEY `fk_usuario_perfil1_idx` (`idPerfil`),
  CONSTRAINT `fk_usuario_perfil1` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`idPerfil`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (8,'alisson','asdasd','asdas','asdas','0000-00-00 00:00:00','asdasd','S',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-16 23:18:58
