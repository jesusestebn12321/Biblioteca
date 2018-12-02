-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.2.3-MariaDB-log - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para biblioteca
CREATE DATABASE IF NOT EXISTS `biblioteca` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `biblioteca`;

-- Volcando estructura para tabla biblioteca.books
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla biblioteca.books: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` (`id`, `code`, `autor`, `title`, `status`) VALUES
	(1, 'asdasd', 'asdasdasd', 'asdasdasd', 1),
	(8, '23123', 'asdasd', 'asdasd', 1),
	(12, '32423', 'asdasd', 'asdasdasd', 1),
	(18, '1312323432', 'asdasdasd', 'asdasd', 1),
	(29, '23123123123123123', 'asdasd', 'asd', 1),
	(32, '2', 'asd', 'asdasd', 1),
	(37, '3234234', 'asd', 'asd', 1),
	(38, '45', 'asdasd', 'asdasd', 1),
	(40, '36', 'asdasd', 'asdasd', 1),
	(42, '57782752', 'dsa', 'Fuente De Poder De Servidor', 1),
	(45, '866', 'dsa', 'asdasd', 1),
	(56, '7', 'asd', 'asdasdasd', 1),
	(57, '785', 'asdasdasd', 'asdasd', 1),
	(60, '1111111', 'dsa', 'asdasdaa', 0),
	(63, '13123', 'asss', 'ass', 0),
	(64, '13123111', 'asdasd', 'asdasd', 1),
	(65, '123123123', 'asdasd', 'asdasdddddddddd', 0),
	(70, '12343', 'asdasdasd', 'asdasdasdasd', 0);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;

-- Volcando estructura para tabla biblioteca.estudents
CREATE TABLE IF NOT EXISTS `estudents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dni` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dni` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla biblioteca.estudents: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `estudents` DISABLE KEYS */;
INSERT INTO `estudents` (`id`, `dni`, `name`, `lastname`, `phone`, `email`) VALUES
	(5, 324234234, 'Jesus Esteban', 'villalta gonzalez', '12312312', 'admin@gmail.com'),
	(14, 252371182, 'Jesus Esteban', 'villalta gonzalez', '0', 'admin@gmail.com'),
	(34, 25252512, 'Jesus Esteban', 'villalta gonzalez', '0', 'admin@gmail.com');
/*!40000 ALTER TABLE `estudents` ENABLE KEYS */;

-- Volcando estructura para tabla biblioteca.retiro_entrega
CREATE TABLE IF NOT EXISTS `retiro_entrega` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) unsigned DEFAULT NULL,
  `estudent_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `book_id` (`book_id`),
  KEY `estudent_id` (`estudent_id`),
  CONSTRAINT `books_book_id_foreing` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `estudents_estudent_id_foreing` FOREIGN KEY (`estudent_id`) REFERENCES `estudents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla biblioteca.retiro_entrega: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `retiro_entrega` DISABLE KEYS */;
/*!40000 ALTER TABLE `retiro_entrega` ENABLE KEYS */;

-- Volcando estructura para tabla biblioteca.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla biblioteca.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `user`, `password`, `name`, `lastname`) VALUES
	(1, 'root', '123', 'root', 'admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
