/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.5.2-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: chapulin
-- ------------------------------------------------------
-- Server version	11.5.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES
(1,'electrodomestico');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `cedula` int(9) NOT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `direccion` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES
(1,'joiber',31911228,'247013239','Zona Nueva'),
(2,'perez',31911228,'247013239','Zona Nueva'),
(3,'joiber',31911228,'42470132','zona nueva'),
(4,'alexis',31911228,'42470132','zona nueva'),
(5,'perez',31911228,'42470132','zona nueva'),
(6,'osorio',31911228,'424701323','zona nueva'),
(17,'Juan Perez',123456789,'987654321','Calle Falsa 123, Ciudad A'),
(18,'Maria Lopez',234567890,'912345678','Avenida Central 456, Ciudad B'),
(19,'Carlos Gómez',345678901,'981122334','Carrera 9 #12-34, Ciudad C'),
(20,'Ana Martínez',456789012,'909123456','Calle 8 #10-22, Ciudad D'),
(21,'Luis Rodriguez',567890123,'983344556','Boulevard 7, Ciudad E'),
(22,'Carmen Sánchez',678901234,'911223344','Calle Mayor 11, Ciudad F'),
(23,'Josefina Castro',789012345,'922334455','Calle del Sol 21, Ciudad G'),
(24,'Pedro Morales',890123456,'933445566','Avenida de la Paz 10, Ciudad H'),
(25,'Sofia Vargas',901234567,'944556677','Calle Luna 45, Ciudad I'),
(26,'Andrés Mendoza',12345678,'955667788','Plaza de la Libertad 30, Ciudad J'),
(27,'osorio',31911228,'04125055655','zona nueva'),
(28,'joiber',28734190,'04147561055','union'),
(29,'irianny',33371997,'04147005964','el pinar');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntas`
--

DROP TABLE IF EXISTS `preguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntas`
--

LOCK TABLES `preguntas` WRITE;
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) NOT NULL,
  `iva` tinyint(1) NOT NULL,
  `proveedor_id` int(11) DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria` (`categoria_id`),
  KEY `fk_proveedor` (`proveedor_id`),
  CONSTRAINT `fk_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`categoria_id`),
  CONSTRAINT `fk_proveedor` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES
(1,1,'Ctelevisor clx 32\'',1,101,150.00),
(2,1,'laptop',1,101,500.00),
(3,1,'telefono',0,103,250.00),
(4,1,'cornetas',1,119,20.00),
(5,1,'shampo',1,101,4.00);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(100) NOT NULL,
  `rif` varchar(20) NOT NULL,
  `correo_electronico` varchar(70) NOT NULL,
  `telefono_principal` varchar(11) DEFAULT NULL,
  `direccion` varchar(80) NOT NULL,
  `contacto_secundario` varchar(50) NOT NULL,
  `telefono_secundario` varchar(11) DEFAULT NULL,
  `cargo_secundario` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
INSERT INTO `proveedores` VALUES
(101,'Tech Innovators C.A.','J-29485172-0','contacto@techinnovators.com','2121234567','Av. Principal, Caracas','Carlos Pérez','2127654321','Gerente de Proyectos'),
(102,'Servicios Globales S.A.','J-84537291-1','info@serviciosglobales.com','4141239876','Calle 23, Valencia','Ana Rodríguez','4249876543','Jefe de Operaciones'),
(103,'Comercializadora El Éxito C.A.','J-37459283-2','ventas@comercialelxito.com','4166543210','Av. Bolívar, Maracaibo','Luis Martínez','4123219876','Encargado de Logística'),
(104,'Constructora Andes S.R.L.','J-19384756-3','contacto@andessrl.com','4269876543','Calle Los Pinos, Mérida','María González','4247654321','Supervisora de Proyectos'),
(105,'Alimentos de Calidad C.A.','J-27845691-4','contacto@alimentoscalidad.com','2126785432','Zona Industrial, Valencia','Pedro Jiménez','2128765432','Coordinador de Producción'),
(106,'Energías Renovables S.A.','J-91827364-5','info@energiasrenovables.com','2124567890','Av. Las Mercedes, Caracas','Juan Méndez','4246543210','Ingeniero de Proyectos'),
(107,'Soluciones Médicas C.A.','J-37485629-6','contacto@solucionesmedicas.com','4163210987','Av. Libertador, Caracas','Paola Herrera','4129876543','Asistente Técnica'),
(108,'Transporte Rápido S.R.L.','J-91827364-7','ventas@transporterapido.com','4268765432','Calle Principal, Barquisimeto','José Rojas','4165432109','Jefe de Operaciones'),
(109,'Tecnología Digital S.A.','J-83746591-8','soporte@tecdigital.com','2121236789','Calle 12, Maracay','Elena Torres','4143216543','Directora Técnica'),
(110,'Mantenimiento Integral C.A.','J-65748392-9','servicios@mantenimiento.com','4149876543','Av. Urdaneta, Caracas','Andrés Rivas','4243210987','Coordinador de Servicios'),
(111,'Distribuidora La Central C.A.','J-28475639-0','contacto@distrilacentral.com','2126543210','Calle Bolívar, Puerto Ordaz','Sofía Morales','2123219876','Gerente Comercial'),
(112,'Productos Naturales S.A.','J-37582649-1','ventas@productosnaturales.com','4163219876','Av. Ppal, Maracaibo','Manuel Fernández','4166543210','Jefe de Producción'),
(113,'Ingeniería Moderna C.A.','J-94728164-2','info@ingenieriamoderna.com','4243210987','Calle Los Álamos, Valencia','Diana Ruiz','4128765432','Gerente de Ingeniería'),
(114,'Seguridad Total S.R.L.','J-83947561-3','contacto@seguridadtotal.com','4169876543','Av. El Bosque, Caracas','Raúl Peña','4267654321','Coordinador de Seguridad'),
(115,'Diseños Creativos C.A.','J-19384765-4','info@discreativos.com','4126543210','Calle Arismendi, Barinas','Laura Suárez','4168765432','Directora de Arte'),
(116,'Consultoría Global S.A.','J-27384956-5','consultoria@consultoriaglobal.com','2128765432','Av. Libertador, Mérida','Gabriel Orozco','4147654321','Consultor Senior'),
(117,'Fabrica Industrial C.A.','J-38475629-6','contacto@fabricaindustrial.com','4265432109','Calle 45, Valencia','Verónica López','4248765432','Supervisora de Producción'),
(118,'Comercializadora Oriente C.A.','J-84756293-7','ventas@comercialoriente.com','2127654321','Av. Miranda, Puerto La Cruz','Roberto Medina','2126543210','Jefe de Ventas'),
(119,'Telecomunicaciones Avanzadas S.A.','J-19384762-8','soporte@telecomavanzadas.com','4246543210','Calle 20, Maracay','Claudia Navarro','4165432109','Directora de Proyectos'),
(120,'Consultores Empresariales S.R.L.','J-92748156-9','info@consultoresemp.com','4267654321','Av. Principal, Barquisimeto','Fernando Salazar','4129876543','Consultor Financiero');
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seguridad`
--

DROP TABLE IF EXISTS `seguridad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seguridad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seguridad`
--

LOCK TABLES `seguridad` WRITE;
/*!40000 ALTER TABLE `seguridad` DISABLE KEYS */;
INSERT INTO `seguridad` VALUES
(1,'jr','jr12345','joiber','joiberperez20@gmail.com');
/*!40000 ALTER TABLE `seguridad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_preguntas`
--

DROP TABLE IF EXISTS `usuario_preguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario_preguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `preguntas_id` int(11) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `preguntas_id` (`preguntas_id`),
  CONSTRAINT `usuario_preguntas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `seguridad` (`id`) ON DELETE CASCADE,
  CONSTRAINT `usuario_preguntas_ibfk_2` FOREIGN KEY (`preguntas_id`) REFERENCES `preguntas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_preguntas`
--

LOCK TABLES `usuario_preguntas` WRITE;
/*!40000 ALTER TABLE `usuario_preguntas` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario_preguntas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2024-10-30  9:20:04
