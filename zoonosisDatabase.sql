SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

DROP DATABASE `zoonosis`;
CREATE DATABASE `zoonosis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `zoonosis`;

DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(45) NOT NULL DEFAULT 'DEF_NAME',
  `APELLIDO` varchar(45) NOT NULL DEFAULT 'DEF_LNAME',
  `USUARIO` varchar(45) NOT NULL DEFAULT 'DEFAULTUSER',
  `CONTRASENA` varchar(45) NOT NULL DEFAULT 'DEFAULTPASS',
  `ROL` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `persona` (`ID`, `NOMBRE`, `APELLIDO`, `USUARIO`, `CONTRASENA`, `ROL`) VALUES
(1, 'felipe', 'castano', 'pipex', 'pass', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
