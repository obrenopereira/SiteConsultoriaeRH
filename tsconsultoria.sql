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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,NULL,'Superior'),(2,NULL,'Engenharia'),(3,NULL,'Sênior'),(4,NULL,'TESTE 1'),(5,NULL,'TESTE 2');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (1,'TS Consultoria Empresarial','teste@gmail.com',NULL,NULL);
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255)  NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Pedro Rago','pedrorago101@gmail.com',NULL,'$2y$10$gy2aUrdiS0bYOyENpAgyR.rEe/Lqu6aus9trQFshtOeCDwwOXJQr6','XE0O7rFfuz33NBRz2tXcOPYyr2EzxTyx2RMgFhOsGVyiIMp1fVlzNqlPGBgy','2022-05-30 20:06:13','2022-05-30 20:06:13');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
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
  `status` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vagas`
--

LOCK TABLES `vagas` WRITE;
/*!40000 ALTER TABLE `vagas` DISABLE KEYS */;
INSERT INTO `vagas` VALUES (1,'Auxiliar de diretoria1','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(2,'Auxiliar de diretoria2','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(3,'Auxiliar de diretoria3','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(4,'Auxiliar de diretoria4','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(5,'Auxiliar de diretoria5','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(6,'Auxiliar de diretoria6','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(7,'Auxiliar de diretoria7','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(8,'Auxiliar de diretoria8','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(9,'Auxiliar de diretoria9','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(10,'Auxiliar de diretoria10','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(11,'Auxiliar de diretoria11','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(12,'Auxiliar de diretoria12','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(13,'Auxiliar de diretoria13','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(14,'Auxiliar de diretoria14','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(15,'Auxiliar de diretoria15','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(16,'Auxiliar de diretoria16','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(17,'Auxiliar de diretoria17','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(18,'Auxiliar de diretoria18','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(19,'Auxiliar de diretoria19','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(20,'Auxiliar de diretoria20','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(21,'Auxiliar de diretoria21','1,2,3',1,'Santo Ângelo, RS','teste@gmail.com','1145,00','Efetivo CLT','Testeeeeeeeee','11/05/2022','Buscamos alguém que vai nos auxiliar na importante tarefa de dar suporte a nossa diretoria Atividades : - Agendar e organizar reuniões - Redigir atas de reuniões da diretoria - Preparar material para reuniões e eventos - Organizar a agenda de compromissos',1),(22,'Comunicação3','[\"2\",\"3\"]',1,'Recife -PE','pedro@gmail.com','1.500','CLT','<div>Teste</div>','2022/06/01','ee',1),(23,'Comunicação3','[\"1\",\"2\"]',1,'Recife -PE','pedrorago@gmail.com','1.500','EFETIVO CTL','<div>EEEEEE</div>','2022/06/01','EEEEE',1),(24,'Comunicação3','[\"2\",\"3\"]',1,'Recife -PE','PEDRORAGO@gmail.com','1.500','Efetivo CLT','<div>eeeeeeeeeeeeeeee</div>','2022/06/01','eeeeeee',1),(26,'Comunicação3','[\"1\"]',1,'eeee','pedro@gailc.com','1500','Eee','<div>eee</div>','2022/06/01','ee',1),(27,'Comunicação3','[\"2\",\"3\"]',1,'REcife -pe','pedro@gmail.com','1.500','CLT','<div>epepepep</div>','2022/06/01','Teste',1),(28,'Comunicação3','[\"2\",\"3\"]',1,'REcife -pe','pedro@gmail.com','1.502','CLT','<div>epepepep</div>','2022/06/01','Teste',1),(29,'Comunicação3','[\"2\",\"3\",\"4\"]',1,'REcife -pe','pedro@gmail.com','1.502','CLT','<div>epepepep</div>','2022/06/01','Teste',1),(30,'Comunicação3','[\"2\",\"3\",\"4\"]',1,'REcife -pe','pedro@gmail.com','1.502','CLT','<div>epepepep</div>','2022/06/01','Teste',1),(35,'Comunicação2','[\"2\",\"3\",\"4\"]',1,'REcife -pe','pedro@gmail.com','1.502','CLT','<div>epepepep</div>','2022/06/01','Teste',1);
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

-- Dump completed on 2022-06-01 18:30:52
