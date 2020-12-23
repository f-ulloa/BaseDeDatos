-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: VentasCelularesBD
-- ------------------------------------------------------
-- Server version	8.0.22-0ubuntu0.20.04.3

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
-- Table structure for table `Bodegas`
--

DROP TABLE IF EXISTS `Bodegas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Bodegas` (
  `codigo_bodega` int NOT NULL,
  `codigo_producto` int NOT NULL,
  `cantidad` int DEFAULT NULL,
  PRIMARY KEY (`codigo_bodega`,`codigo_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Bodegas`
--

LOCK TABLES `Bodegas` WRITE;
/*!40000 ALTER TABLE `Bodegas` DISABLE KEYS */;
INSERT INTO `Bodegas` VALUES (301,200,26),(301,201,15),(302,200,10),(302,204,26),(303,202,31),(304,203,25),(304,204,26),(304,205,24),(305,206,22);
/*!40000 ALTER TABLE `Bodegas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Clientes`
--

DROP TABLE IF EXISTS `Clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Clientes` (
  `codigo_cliente` int NOT NULL,
  `nombre` varchar(10) DEFAULT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `telefono` varchar(16) DEFAULT NULL,
  `comuna` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`codigo_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Clientes`
--

LOCK TABLES `Clientes` WRITE;
/*!40000 ALTER TABLE `Clientes` DISABLE KEYS */;
INSERT INTO `Clientes` VALUES (1000,'Lopez','Pasaje los calculos 4165','+569 3330 1032','Pedro Aguirre Cerda'),(1001,'Landeros','Pasaje las algebras 9563','+569 3330 1033','Puente Alto'),(1002,'Rossel','Avenida Funcion 9875','+569 3330 1034','Vitacura'),(1003,'Giadach','Pasaje SQL 4682','+569 3330 1035','Providencia'),(1004,'Arratia','Avenida Lineal 1233','+569 3330 1036','San miguel'),(1005,'Canela','Calle Gau 7641','+569 3330 1037','Maipu'),(1006,'Alessio','Calle Mussolini 1943','+569 3330 1038','Colina');
/*!40000 ALTER TABLE `Clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Compras_Detalles`
--

DROP TABLE IF EXISTS `Compras_Detalles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Compras_Detalles` (
  `codigo_compra` int NOT NULL,
  `codigo_proveedor` int DEFAULT NULL,
  `codigo_producto` int DEFAULT NULL,
  `fecha_compra` date DEFAULT NULL,
  `cantidad` int DEFAULT NULL,
  `precioCompra_producto` int DEFAULT NULL,
  PRIMARY KEY (`codigo_compra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Compras_Detalles`
--

LOCK TABLES `Compras_Detalles` WRITE;
/*!40000 ALTER TABLE `Compras_Detalles` DISABLE KEYS */;
INSERT INTO `Compras_Detalles` VALUES (601,506,200,'2019-01-05',4,900),(602,505,201,'2019-01-05',6,100),(603,500,202,'2019-01-05',4,1100),(604,506,200,'2019-02-05',5,900),(605,505,201,'2019-02-05',10,100),(606,503,203,'2019-02-05',6,850),(607,500,204,'2019-02-05',6,1000),(608,502,205,'2019-02-05',4,400),(609,501,206,'2019-02-05',4,150);
/*!40000 ALTER TABLE `Compras_Detalles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Productos`
--

DROP TABLE IF EXISTS `Productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Productos` (
  `codigo_producto` int NOT NULL,
  `precio_venta` int DEFAULT NULL,
  `nombre` varchar(10) DEFAULT NULL,
  `garantia` date DEFAULT NULL,
  PRIMARY KEY (`codigo_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Productos`
--

LOCK TABLES `Productos` WRITE;
/*!40000 ALTER TABLE `Productos` DISABLE KEYS */;
INSERT INTO `Productos` VALUES (200,1100,'Yotaphone3','0001-06-01'),(201,120,'Aprise','0001-06-01'),(202,1500,'Galaxy s11','0001-06-01'),(203,1000,'Iphone x','0001-10-01'),(204,1400,'S9 +','0001-08-01'),(205,500,'Xiomi mi10','0001-06-01'),(206,170,'BlackBerry',NULL);
/*!40000 ALTER TABLE `Productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Proveedores`
--

DROP TABLE IF EXISTS `Proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Proveedores` (
  `codigo_proveedor` int NOT NULL,
  `nombre` varchar(10) DEFAULT NULL,
  `telefono` varchar(16) DEFAULT NULL,
  `mail` varchar(320) DEFAULT NULL,
  PRIMARY KEY (`codigo_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Proveedores`
--

LOCK TABLES `Proveedores` WRITE;
/*!40000 ALTER TABLE `Proveedores` DISABLE KEYS */;
INSERT INTO `Proveedores` VALUES (500,'Samsung','+569 2523 1413','mail1@gmail.com'),(501,'BlackBerry','+569 3330 1031','mail2@gmail.com'),(502,'Xiaomi','+569 0438 7355','mail3@gmail.com'),(503,'Apple','+569 2596 5139','mail4@gmail.com'),(504,'Nokia','+569 0782 7335','mail5@gmail.com'),(505,'Alcatel','+569 3452 9609','mail6@gmail.com'),(506,'YotaPhone','+569 7630 0751','mail7@gmail.com');
/*!40000 ALTER TABLE `Proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Vendedores`
--

DROP TABLE IF EXISTS `Vendedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Vendedores` (
  `codigo_vendedor` int NOT NULL,
  `nombre` varchar(10) DEFAULT NULL,
  `sueldo` int DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  PRIMARY KEY (`codigo_vendedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Vendedores`
--

LOCK TABLES `Vendedores` WRITE;
/*!40000 ALTER TABLE `Vendedores` DISABLE KEYS */;
INSERT INTO `Vendedores` VALUES (2000,'Max',300,'2014-12-08'),(2001,'Felipe',3000,'2014-12-09'),(2002,'Sebastian',250,'2014-12-10'),(2003,'Maria Jose',300,'2014-12-11'),(2004,'Diego',700,'2014-12-12'),(2005,'Luciano',650,'2014-12-17'),(2006,'Travis',500,'2014-12-18');
/*!40000 ALTER TABLE `Vendedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Ventas`
--

DROP TABLE IF EXISTS `Ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Ventas` (
  `codigo_venta` int NOT NULL,
  `codigo_cliente` int DEFAULT NULL,
  `codigo_vendedor` int DEFAULT NULL,
  `monto` int DEFAULT NULL,
  `fecha_venta` date DEFAULT NULL,
  PRIMARY KEY (`codigo_venta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ventas`
--

LOCK TABLES `Ventas` WRITE;
/*!40000 ALTER TABLE `Ventas` DISABLE KEYS */;
INSERT INTO `Ventas` VALUES (1,1000,2000,2200,'2019-01-01'),(2,1001,2001,960,'2019-01-15'),(3,1002,2002,1500,'2019-01-22'),(4,1003,2003,2000,'2019-02-09'),(5,1004,2004,18200,'2019-02-12'),(6,1005,2005,1000,'2019-02-05'),(7,1006,2006,510,'2019-02-27'),(8,1003,2006,5000,'2019-02-05');
/*!40000 ALTER TABLE `Ventas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Ventas_Detalles`
--

DROP TABLE IF EXISTS `Ventas_Detalles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Ventas_Detalles` (
  `codigo_venta` int NOT NULL,
  `cantidad` int DEFAULT NULL,
  `codigo_producto` int DEFAULT NULL,
  PRIMARY KEY (`codigo_venta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ventas_Detalles`
--

LOCK TABLES `Ventas_Detalles` WRITE;
/*!40000 ALTER TABLE `Ventas_Detalles` DISABLE KEYS */;
INSERT INTO `Ventas_Detalles` VALUES (1,2,200),(2,8,201),(3,1,202),(4,2,203),(5,13,201),(6,2,205),(7,3,206);
/*!40000 ALTER TABLE `Ventas_Detalles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-11  1:46:16
