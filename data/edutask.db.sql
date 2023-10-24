-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.43 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para esetn3_tasks_db
CREATE DATABASE IF NOT EXISTS `esetn3_tasks_db` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci */;
USE `esetn3_tasks_db`;

-- Volcando estructura para tabla esetn3_tasks_db.profesor
CREATE TABLE IF NOT EXISTS `profesor` (
  `id` int(11) NOT NULL,
  `apeynom` varchar(250) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `activo` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla esetn3_tasks_db.profesor: ~0 rows (aproximadamente)
DELETE FROM `profesor`;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
INSERT INTO `profesor` (`id`, `apeynom`, `activo`) VALUES
	(1, 'Nicolas', 1);
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;

-- Volcando estructura para tabla esetn3_tasks_db.tarea
CREATE TABLE IF NOT EXISTS `tarea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` char(50) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `detalle` varchar(1024) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `fechaEntrega` date DEFAULT NULL,
  `tema_id` int(11) DEFAULT '0',
  `profesor_id` int(11) NOT NULL DEFAULT '0',
  `fechaUltimoCambio` date NOT NULL DEFAULT '0000-00-00',
  `usuario_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`profesor_id`),
  KEY `id` (`id`),
  CONSTRAINT `FK_tarea_profesor` FOREIGN KEY (`profesor_id`) REFERENCES `profesor` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla esetn3_tasks_db.tarea: ~0 rows (aproximadamente)
DELETE FROM `tarea`;
/*!40000 ALTER TABLE `tarea` DISABLE KEYS */;
INSERT INTO `tarea` (`id`, `titulo`, `detalle`, `fechaEntrega`, `tema_id`, `profesor_id`, `fechaUltimoCambio`, `usuario_id`) VALUES
	(1, 'Tarea 1', 'Detale tarea 1', '2023-08-29', 0, 1, '0000-00-00', 0);
/*!40000 ALTER TABLE `tarea` ENABLE KEYS */;

-- Volcando estructura para tabla esetn3_tasks_db.tema
CREATE TABLE IF NOT EXISTS `tema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla esetn3_tasks_db.tema: ~0 rows (aproximadamente)
DELETE FROM `tema`;
/*!40000 ALTER TABLE `tema` DISABLE KEYS */;
INSERT INTO `tema` (`id`, `descripcion`) VALUES
	(1, 'Tema 1');
/*!40000 ALTER TABLE `tema` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
