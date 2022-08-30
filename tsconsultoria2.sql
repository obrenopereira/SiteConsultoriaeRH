-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: tsconsultoria
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `area` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area`
--

LOCK TABLES `area` WRITE;
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` VALUES (1,'Engenharia'),(2,'Programação'),(4,'Marketing'),(5,'Teste');
/*!40000 ALTER TABLE `area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `candidaturas`
--

DROP TABLE IF EXISTS `candidaturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `candidaturas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `id_vaga` int DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `escolaridade` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `curriculo` text,
  `descricao` longtext,
  `data_candidatura` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidaturas`
--

LOCK TABLES `candidaturas` WRITE;
/*!40000 ALTER TABLE `candidaturas` DISABLE KEYS */;
INSERT INTO `candidaturas` VALUES (40,'PEDRO RAGO DA SILVA',1,'pedrorago101@gmail.com','Ens. Médio','Abreu e Lima',NULL,'Teste','09/06/2022 22:43:07'),(41,'PEDRO RAGO DA SILVA',1,'pedrorago101@gmail.com','Ens. Médio','Abreu e Lima',NULL,'Teste','09/06/2022 22:44:48'),(42,'PEDRO RAGO DA SILVA',1,'pedrorago101@gmail.com','Ens. Médio','Abreu e Lima',NULL,'Teste','09/06/2022 22:45:01'),(43,'PEDRO RAGO DA SILVA',20,'pedrorago101@gmail.com','Ens. Técnico','Abreu e Lima',NULL,'ee','09/06/2022 22:46:36'),(44,'PEDRO RAGO DA SILVA',20,'pedrorago101@gmail.com','Ens. Técnico','Abreu e Lima',NULL,'ee','09/06/2022 22:46:50');
/*!40000 ALTER TABLE `candidaturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_categoria` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,NULL,'Superior'),(2,NULL,'Engenharia'),(3,NULL,'Sênior'),(6,NULL,'Teste 1'),(7,NULL,'Teste 2');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configuracoes`
--

DROP TABLE IF EXISTS `configuracoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `configuracoes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email_contato` varchar(255) DEFAULT NULL,
  `email_candidaturas` varchar(255) DEFAULT NULL,
  `telefone_contato` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `logotipo_1` text,
  `logotipo_2` text,
  `cor_primaria` varchar(255) DEFAULT NULL,
  `cor_secundaria` varchar(255) DEFAULT NULL,
  `auxiliar_primaria_1` varchar(255) DEFAULT NULL,
  `auxiliar_primaria_2` varchar(255) DEFAULT NULL,
  `auxiliar_secundaria_1` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuracoes`
--

LOCK TABLES `configuracoes` WRITE;
/*!40000 ALTER TABLE `configuracoes` DISABLE KEYS */;
INSERT INTO `configuracoes` VALUES (1,'teste@gmail.com','teste2@gmail.com','1199305445','Rua Gervasio Pires - 34','FACEBOOK','LINKEDIN','YOUTUBE','INSTAGRAM','TSConsultoria - Logotipo 1.png','TSConsultoria - Logotipo 2.png','#003554','#ff5d29','#caf0f8','#ecf9fd','#ff9f81');
/*!40000 ALTER TABLE `configuracoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `logotipo` text,
  `thumbnail` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (1,'TS Consultoria Empresarial','teste@gmail.com','logotipo-1.png','thumbnail-1.png'),(2,'Teste 1','pedrorago101@gmail.com',NULL,NULL),(3,'Teste 1','pedrorago101@gmail.com',NULL,NULL),(4,'Teste 1','pedrorago101@gmail.com',NULL,NULL),(5,'Teste 1','pedrorago101@gmail.com',NULL,NULL),(6,'Teste 1','pedrorago101@gmail.com',NULL,NULL),(7,'Pedro 1','pedrorago101@gmail.com',NULL,NULL),(8,'Pedro 1','pedrorago101@gmail.com',NULL,NULL),(9,'Pedro 1','pedrorago101@gmail.com',NULL,NULL),(10,'Pedro 1','pedrorago101@gmail.com',NULL,NULL),(11,'Pedro 1','pedrorago101@gmail.com',NULL,NULL),(12,'Pedro 1','pedrorago101@gmail.com','logotipo-12.png','logotipo-12.png'),(13,'Teste aqui','pedroraul101@gmail.com','logotipo-13.jpg','logotipo-13.png'),(14,'Teste auqi 2','pedrorago101@gmail.com','logotipo-14.png',NULL),(15,'Teste auqi 2','pedrorago101@gmail.com','logotipo-15.png','logotipo-15.png'),(16,'Teste aqqui 2','pedrorago101@gmail.com','logotipo-16.png','logotipo-16.png');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `escolaridade`
--

DROP TABLE IF EXISTS `escolaridade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `escolaridade` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `escolaridade`
--

LOCK TABLES `escolaridade` WRITE;
/*!40000 ALTER TABLE `escolaridade` DISABLE KEYS */;
INSERT INTO `escolaridade` VALUES (1,'Ens. Fundamental'),(2,'Ens. Médio'),(3,'Ens. Técnico'),(4,'Ens. Superior');
/*!40000 ALTER TABLE `escolaridade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `experiencia`
--

DROP TABLE IF EXISTS `experiencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `experiencia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experiencia`
--

LOCK TABLES `experiencia` WRITE;
/*!40000 ALTER TABLE `experiencia` DISABLE KEYS */;
INSERT INTO `experiencia` VALUES (1,'Estágio'),(2,'Júnior'),(3,'Pleno'),(4,'Sênior');
/*!40000 ALTER TABLE `experiencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeria`
--

DROP TABLE IF EXISTS `galeria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galeria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `imagem` text,
  `alt_seo` varchar(255) DEFAULT NULL,
  `title_seo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeria`
--

LOCK TABLES `galeria` WRITE;
/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
INSERT INTO `galeria` VALUES (22,'Banner principal','Homepage','galeria-22.jpg','Você com os resultados que sempre planejou!','Você com os resultados que sempre planejou!'),(23,'Banner principal','Serviços','galeria-23.jpg','Banner princpal - TS Consultoria','Você com os resultados que sempre planejou!');
/*!40000 ALTER TABLE `galeria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;
--
-- Table structure for table `vagas`
--

DROP TABLE IF EXISTS `vagas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vagas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `id_categorias` text,
  `id_empresa` int DEFAULT NULL,
  `localizacao` varchar(255) DEFAULT NULL,
  `contato` varchar(255) DEFAULT NULL,
  `remuneracao` varchar(255) DEFAULT NULL,
  `contrato` varchar(255) DEFAULT NULL,
  `descricao` longtext,
  `data_publicacao` text,
  `breve_descricao` text,
  `id_area` int DEFAULT NULL,
  `id_experiencia` int DEFAULT NULL,
  `id_escolaridade` int DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `uf` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vagas`
--

LOCK TABLES `vagas` WRITE;
/*!40000 ALTER TABLE `vagas` DISABLE KEYS */;
INSERT INTO `vagas` VALUES (7,'Auxiliar de diretoria7','[\"3\",\"2\",\"1\"]',1,'Santo Ângelo, RS','teste@gmail.com','1500','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',NULL,NULL,NULL,'Brasiléia','AC','Aberta'),(8,'Auxiliar de diretoria8','[\"3\",\"2\",\"1\"]',1,'Santo Ângelo, RS','teste@gmail.com','1500','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',NULL,NULL,NULL,'Ferreira Gomes','AP','Aberta'),(10,'Auxiliar de diretoria10','[\"3\",\"2\",\"1\"]',1,'Santo Ângelo, RS','teste@gmail.com','1500','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',NULL,NULL,NULL,'Bonfim','RR','Aberta'),(11,'Auxiliar de diretoria11','[\"3\",\"2\",\"1\"]',1,'Santo Ângelo, RS','teste@gmail.com','','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',NULL,NULL,NULL,'Areia Branca','SE','Aberta'),(12,'Auxiliar de diretoria12','[\"3\",\"2\",\"1\"]',1,'Santo Ângelo, RS','teste@gmail.com','','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',NULL,NULL,NULL,'Almino Afonso','RN','Aberta'),(13,'Auxiliar de diretoria13','[\"3\",\"2\",\"1\"]',1,'Santo Ângelo, RS','teste@gmail.com','','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',NULL,NULL,NULL,'Aragominas','TO','Aberta'),(14,'Auxiliar de diretoria14','[\"3\",\"2\",\"1\"]',14,'Santo Ângelo, RS','teste@gmail.com','','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',NULL,NULL,NULL,'Cantá','RR','Aberta'),(15,'Auxiliar de diretoria15','[\"3\",\"2\",\"1\"]',1,'Santo Ângelo, RS','teste@gmail.com','1000','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',5,2,2,'Alvorada','TO','Aberta'),(16,'Auxiliar de diretoria16','[\"3\",\"2\",\"1\"]',1,'Santo Ângelo, RS','teste@gmail.com','','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',2,1,1,'Arapiraca','AL','Aberta'),(17,'Auxiliar de diretoria17','[\"3\",\"2\",\"1\"]',1,'Santo Ângelo, RS','teste@gmail.com','1500','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',NULL,NULL,NULL,'Afonso Bezerra','RN','Aberta'),(18,'Auxiliar de diretoria18','[\"3\",\"2\",\"1\"]',1,'Santo Ângelo, RS','teste@gmail.com','200','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',4,1,1,'Brasiléia','AC','Aberta'),(19,'Auxiliar de diretoria19','[\"3\",\"2\",\"1\"]',1,'Santo Ângelo, RS','teste@gmail.com','1.500','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1,1,1,'Itaubal','AP','Preenchida'),(20,'Auxiliar de diretoria20','[\"3\",\"2\",\"1\"]',1,'Santo Ângelo, RS','teste@gmail.com','1500','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1,1,1,'Santos','SP','Aberta'),(21,'Rascunho','[\"3\",\"2\",\"1\"]',1,'Santo Ângelo, RS','teste@gmail.com','1.500','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',2,1,1,'Santos','SP','Rascunho');
/*!40000 ALTER TABLE `vagas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-10  3:30:31
