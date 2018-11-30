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
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla biblioteca.books: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` (`id`, `code`, `autor`, `title`, `status`) VALUES
	(1, 'asdasd', 'asdasdasd', 'asdasdasd', 0),
	(8, '23123', 'asdasd', 'asdasd', 0),
	(12, '32423', 'asdasd', 'asdasdasd', 0),
	(18, '1312323432', 'asdasdasd', 'asdasd', 0),
	(29, '23123123123123123', 'asdasd', 'asd', 0),
	(32, '2', 'asd', 'asdasd', 0),
	(37, '3234234', 'asd', 'asd', 0),
	(38, '45', 'asdasd', 'asdasd', 0),
	(40, '36', 'asdasd', 'asdasd', 0),
	(42, '57782752', 'dsa', 'Fuente De Poder De Servidor', 0),
	(45, '866', 'dsa', 'asdasd', 0),
	(46, '666', 'CAn', 'Ser', 1),
	(56, '7', 'asd', 'asdasdasd', 0),
	(57, '785', 'asdasdasd', 'asdasd', 0),
	(58, '10010101', 'asdasdasd', 'asdasd', 0);
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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla biblioteca.estudents: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `estudents` DISABLE KEYS */;
INSERT INTO `estudents` (`id`, `dni`, `name`, `lastname`, `phone`, `email`) VALUES
	(3, 123123, 'asdasd', 'villalta gonzalez', '24524', 'jesusgonzalez12321@outlook.es'),
	(5, 324234234, 'Jesus Esteban', 'villalta gonzalez', '12312312', 'admin@gmail.com'),
	(14, 252371182, 'Jesus Esteban', 'villalta gonzalez', '0', 'admin@gmail.com'),
	(16, 2552512, 'Jesus Esteban', 'villalta gonzalez', '0', 'admin@gmail.com'),
	(20, 2222, 'asdasd', 'villalta gonzalez', '0', 'admin@gmail.com'),
	(34, 25252512, 'Jesus Esteban', 'villalta gonzalez', '0', 'admin@gmail.com'),
	(48, 32, 'asdasd', 'villalta jjjjjj', '111', 'admin@gmail.com');
/*!40000 ALTER TABLE `estudents` ENABLE KEYS */;

-- Volcando estructura para tabla biblioteca.retiro_entrega
CREATE TABLE IF NOT EXISTS `retiro_entrega` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` int(11) unsigned DEFAULT NULL,
  `book_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dni` (`dni`),
  KEY `book_id` (`book_id`),
  CONSTRAINT `books_book_id_foreing` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla biblioteca.retiro_entrega: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `retiro_entrega` DISABLE KEYS */;
INSERT INTO `retiro_entrega` (`id`, `dni`, `book_id`) VALUES
	(9, 234234234, 40),
	(10, 252525, 32),
	(11, 122222222, 45),
	(12, 2222222, 45);
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
