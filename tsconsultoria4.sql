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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidaturas`
--

LOCK TABLES `candidaturas` WRITE;
/*!40000 ALTER TABLE `candidaturas` DISABLE KEYS */;
INSERT INTO `candidaturas` VALUES (40,'PEDRO RAGO DA SILVA',1,'pedrorago101@gmail.com','Ens. Médio','Abreu e Lima',NULL,'Teste','09/06/2022 22:43:07'),(41,'PEDRO RAGO DA SILVA',1,'pedrorago101@gmail.com','Ens. Médio','Abreu e Lima',NULL,'Teste','09/06/2022 22:44:48'),(42,'PEDRO RAGO DA SILVA',1,'pedrorago101@gmail.com','Ens. Médio','Abreu e Lima',NULL,'Teste','09/06/2022 22:45:01'),(43,'PEDRO RAGO DA SILVA',20,'pedrorago101@gmail.com','Ens. Técnico','Abreu e Lima',NULL,'ee','09/06/2022 22:46:36'),(44,'PEDRO RAGO DA SILVA',20,'pedrorago101@gmail.com','Ens. Técnico','Abreu e Lima',NULL,'ee','09/06/2022 22:46:50'),(45,'Teste 1',20,'pedrorago101@gmail.com','Ens. Fundamental','Abreu e Lima',NULL,'Teste','10/06/2022 17:43:58');
/*!40000 ALTER TABLE `candidaturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cases`
--

DROP TABLE IF EXISTS `cases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cases` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `imagem` text,
  `titulo_destaque` varchar(255) DEFAULT NULL,
  `texto_destaque` varchar(255) DEFAULT NULL,
  `titulo_introducao` varchar(255) DEFAULT NULL,
  `texto_introducao` text,
  `banner_tela_inteira` text,
  `fase_1_legenda` varchar(255) DEFAULT NULL,
  `fase_1_titulo` varchar(255) DEFAULT NULL,
  `fase_1_texto` text,
  `fase_2_legenda` varchar(255) DEFAULT NULL,
  `fase_2_titulo` varchar(255) DEFAULT NULL,
  `fase_2_texto` text,
  `fase_2_imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cases`
--

LOCK TABLES `cases` WRITE;
/*!40000 ALTER TABLE `cases` DISABLE KEYS */;
/*!40000 ALTER TABLE `cases` ENABLE KEYS */;
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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `imagem` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (3,'Alpha','cliente-3.png'),(4,'Agência Cime','cliente-4.png'),(5,'Tromink','cliente-5.png'),(6,'Metal Tec','cliente-6.png'),(7,'PCE','cliente-7.png'),(8,'GVT','cliente-8.png'),(9,'Viatec','cliente-9.png');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
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
  `whatsapp_geral` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `logotipo_1` text,
  `logotipo_2` text,
  `cor_primaria` varchar(255) DEFAULT NULL,
  `cor_secundaria` varchar(255) DEFAULT NULL,
  `auxiliar_primaria_1` varchar(255) DEFAULT NULL,
  `auxiliar_primaria_2` varchar(255) DEFAULT NULL,
  `auxiliar_secundaria_1` varchar(255) DEFAULT NULL,
  `whatsapp_especialista` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuracoes`
--

LOCK TABLES `configuracoes` WRITE;
/*!40000 ALTER TABLE `configuracoes` DISABLE KEYS */;
INSERT INTO `configuracoes` VALUES (1,'contato@tsconsultoria.com.br','contato@tsconsultoria.com.br','55 98455 2255','R.Konrad Adenauer, 501 - Centro, Panembi - RS','https://www.facebook.com/tsconsultoriaempresarial','https://www.linkedin.com/in/ts-consultoria-empresarial-738468179/','https://api.whatsapp.com/send?phone=5555984694083','https://www.instagram.com/tsconsultoria.empresarial/','TSConsultoria - Logotipo 1.png','TSConsultoria - Logotipo 2.png','#003e51','#ffc225','#fff4d1','#eaecee','#fff4d1','https://api.whatsapp.com/send?phone=5555996879915');
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
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeria`
--

LOCK TABLES `galeria` WRITE;
/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
INSERT INTO `galeria` VALUES (22,'Banner principal','Homepage','galeria-22.jpg','Você com os resultados que sempre planejou!','Você com os resultados que sempre planejou!'),(24,'Banner Secundário','Homepage','galeria-24.jpg','Banner Secundário - TS Consultoria','Banner Secundário - TS Consultoria'),(26,'Banner Único','Serviços','galeria-26.jpg','Banner unico','Banner unico'),(27,'Banner principal','A Empresa','galeria-27.jpg','Banner principal','Banner principal'),(28,'Banner Secundário','A Empresa','galeria-28.jpg','Banner Secundário','Banner Secundário'),(29,'Banner principal','Cases','galeria-29.jpg','Banner principal','Banner principal'),(30,'Banner principal','Vagas','galeria-30.jpg','Banner principal','Banner principal');
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skills` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_case` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` VALUES (16,9,'Tese'),(18,9,'Lorem ipsum'),(19,9,'Lorem ipsum'),(20,9,'Lorem ipsum'),(21,9,'Lorem ipsum'),(22,9,'Lorem ipsum'),(23,9,'Lorem ipsum'),(24,9,'Lorem ipsum');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
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

-- Dump completed on 2022-06-25 15:12:05
