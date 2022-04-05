-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-01-2021 a las 22:45:19
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_veterinaria`
--

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `SP_INSERT_MASC`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_INSERT_MASC` (IN `nom` VARCHAR(50), IN `edad` INT, IN `fn` DATE, IN `sex` CHAR(3), IN `esp` VARCHAR(50), IN `rz` VARCHAR(50), IN `cl` VARCHAR(50), IN `est` CHAR(3), IN `vc` CHAR(3), IN `fot` VARCHAR(100), IN `obs` VARCHAR(100))  NO SQL
BEGIN
INSERT INTO tbl_mascotas(masc_nombre, masc_edad, masc_fechaN, masc_sexo, masc_especie, masc_raza, masc_color, masc_esterilizado, masc_vacunas, masc_foto,masc_observacion) VALUES (nom,edad,fn,sex,esp,rz,cl,est,vc,fot,obs);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_citas`
--

DROP TABLE IF EXISTS `tbl_citas`;
CREATE TABLE IF NOT EXISTS `tbl_citas` (
  `cita_id` int(11) NOT NULL AUTO_INCREMENT,
  `due_id` int(11) NOT NULL,
  `cita_fecha` date NOT NULL,
  `cita_hora` time NOT NULL,
  PRIMARY KEY (`cita_id`),
  UNIQUE KEY `cita_fecha` (`cita_fecha`,`cita_hora`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_citas`
--

INSERT INTO `tbl_citas` (`cita_id`, `due_id`, `cita_fecha`, `cita_hora`) VALUES
(1, 1, '2021-01-15', '10:12:16'),
(2, 2, '2021-01-15', '10:16:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dueno`
--

DROP TABLE IF EXISTS `tbl_dueno`;
CREATE TABLE IF NOT EXISTS `tbl_dueno` (
  `due_id` int(11) NOT NULL AUTO_INCREMENT,
  `masc_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  PRIMARY KEY (`due_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_dueno`
--

INSERT INTO `tbl_dueno` (`due_id`, `masc_id`, `pro_id`) VALUES
(1, 1, 9),
(2, 2, 9),
(3, 2, 11),
(4, 3, 16),
(5, 4, 16),
(6, 5, 17),
(7, 45, 6),
(8, 50, 7),
(9, 7, 9),
(16, 3, 9),
(17, 3, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_identidad`
--

DROP TABLE IF EXISTS `tbl_identidad`;
CREATE TABLE IF NOT EXISTS `tbl_identidad` (
  `iden_id` int(11) NOT NULL AUTO_INCREMENT,
  `iden_nombre` varchar(20) NOT NULL,
  `iden_estado` int(11) NOT NULL,
  PRIMARY KEY (`iden_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_identidad`
--

INSERT INTO `tbl_identidad` (`iden_id`, `iden_nombre`, `iden_estado`) VALUES
(1, 'CEDULA', 1),
(2, 'RUC', 1),
(3, 'PASAPORTE', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mascota`
--

DROP TABLE IF EXISTS `tbl_mascota`;
CREATE TABLE IF NOT EXISTS `tbl_mascota` (
  `masc_id` int(11) NOT NULL AUTO_INCREMENT,
  `masc_nombre` varchar(30) NOT NULL,
  `masc_edad` int(11) NOT NULL,
  `masc_fechaN` date NOT NULL,
  `masc_sexo` char(3) NOT NULL,
  `masc_especie` varchar(30) NOT NULL,
  `masc_raza` varchar(30) NOT NULL,
  `masc_color` varchar(30) NOT NULL,
  `masc_esterilizado` int(11) NOT NULL,
  `masc_vacunas` int(11) NOT NULL,
  `masc_observacion` varchar(100) NOT NULL,
  PRIMARY KEY (`masc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_mascota`
--

INSERT INTO `tbl_mascota` (`masc_id`, `masc_nombre`, `masc_edad`, `masc_fechaN`, `masc_sexo`, `masc_especie`, `masc_raza`, `masc_color`, `masc_esterilizado`, `masc_vacunas`, `masc_observacion`) VALUES
(1, 'Leo', 5, '2015-10-13', 'M', 'Canino', 'Mestizo', 'Negro', 1, 1, 'niniguna'),
(2, 'Kyra', 3, '2017-08-08', 'H', 'Canina', 'Husky', 'Blanca', 0, 1, 'ninguna'),
(3, 'Max', 3, '2017-07-15', 'M', 'Felino', 'Mestiza', 'Blanco y Gris', 1, 1, 'ninguna'),
(4, 'Lina', 1, '2019-02-11', 'H', 'Canino', 'Pastor', 'Marron', 0, 1, 'niniguna'),
(7, 'Max', 5, '2020-12-12', 'M', 'esp', 'rz', 'cl', 1, 0, 'nd'),
(8, 'ssss', 3, '2020-12-12', 'M', 'ggg', 'ddd', 'ddd', 1, 1, 'dddd'),
(9, 'dddd', 3, '2020-12-12', 'M', 'ddd', 'ddd', 'ddd', 1, 1, 'dddd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mascotas`
--

DROP TABLE IF EXISTS `tbl_mascotas`;
CREATE TABLE IF NOT EXISTS `tbl_mascotas` (
  `masc_id` int(11) NOT NULL AUTO_INCREMENT,
  `masc_nombre` varchar(50) NOT NULL,
  `masc_edad` int(11) NOT NULL,
  `masc_fechaN` date NOT NULL,
  `masc_sexo` char(3) NOT NULL,
  `masc_especie` varchar(50) NOT NULL,
  `masc_raza` varchar(50) NOT NULL,
  `masc_color` varchar(50) NOT NULL,
  `masc_esterilizado` char(3) NOT NULL,
  `masc_vacunas` char(3) NOT NULL,
  `masc_foto` varchar(100) NOT NULL,
  `masc_observacion` varchar(100) NOT NULL,
  PRIMARY KEY (`masc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_mascotas`
--

INSERT INTO `tbl_mascotas` (`masc_id`, `masc_nombre`, `masc_edad`, `masc_fechaN`, `masc_sexo`, `masc_especie`, `masc_raza`, `masc_color`, `masc_esterilizado`, `masc_vacunas`, `masc_foto`, `masc_observacion`) VALUES
(1, 'Leo', 5, '2015-02-12', 'M', 'Canino', 'Mestizo', 'marron y blanco', 'Si', 'No', 'ar.jpg', 'ninguna'),
(2, 'Linda', 6, '2014-12-12', 'H', 'Canino', 'Dalmata', 'Blanco y negro', 'No', 'Si', 'LINDA.jpg', 'ninguna'),
(3, 'Mishu', 3, '2017-01-07', 'H', 'Felina', 'mestizo', 'negro', 'Si', 'No', 'cajagato.jpg', 'ninguno'),
(4, 'Kira', 2, '2018-05-25', 'H', 'canino', 'Husky', 'blanco', 'Si', 'No', 'dogi.jpg', 'operar'),
(5, 'Shiro', 0, '2021-01-07', 'M', 'canino', 'husky', 'gris', 'Si', 'Si', 'huskyshyar.jpg', 'niniguna'),
(6, 'Aan', 0, '2021-01-08', 'M', 'canino', 'mestizo', 'blanco y negro', 'Si', 'Si', 'LEO.jpg', 'ninguno'),
(7, 'cccc', 0, '2021-01-01', 'M', 'canino', 'dalmata', 'blanco y negro', 'No', 'Si', 'LINDA.jpg', 'ninguno'),
(10, 'Lina', 3, '2021-01-08', 'M', 'felino', 'mestizo', 'marron', '0', 'Si', 'cajagato.jpg', 'niniguna'),
(20, 'bendd', 2, '2021-01-08', 'M', 'canino', 'mestizo', 'h', 'Si', 'Si', 'LEO.jpg', 'hhh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_propietario`
--

DROP TABLE IF EXISTS `tbl_propietario`;
CREATE TABLE IF NOT EXISTS `tbl_propietario` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `iden_id` int(11) NOT NULL,
  `pro_cedula` varchar(13) NOT NULL,
  `pro_nombres` varchar(40) NOT NULL,
  `pro_apellidos` varchar(50) NOT NULL,
  `pro_correo` varchar(40) NOT NULL,
  `pro_direccion` varchar(50) NOT NULL,
  `pro_telefonoF` varchar(10) NOT NULL,
  `pro_celular` varchar(10) NOT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `iden_id` (`iden_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_propietario`
--

INSERT INTO `tbl_propietario` (`pro_id`, `iden_id`, `pro_cedula`, `pro_nombres`, `pro_apellidos`, `pro_correo`, `pro_direccion`, `pro_telefonoF`, `pro_celular`) VALUES
(9, 1, '0401838925', 'Byron', 'Ramirez', 'bmramirez@hotmail.com', 'San Marcos', '065885', '099999'),
(11, 2, '1000105236', 'Carlos', 'Irua', 'caryn@yahoo.es', 'Mojanda', '----', '0999999'),
(16, 1, '1755568856', 'Patricia', 'Jimenez', 'paty@gmail.com', 'Laguna 1', '266658', '09875552'),
(17, 1, '1005896220', 'Esteban', 'Erazo', 'edi@gmail.com', 'Ceibos', '06254698', '0999858'),
(39, 1, '9999', 'fero', 'dd', 'ddd@ff.com', 'dddec', '6666', '0999'),
(45, 1, '0544446', 'Mariana', 'Andrade', 'mary@gmail.com', 'manta', '02856666', '09885566'),
(50, 1, '10000522', 'Carlitos', 'Herrera', 'carl@gmai.com', 'Miami', '06666', '09999'),
(52, 1, '1005826923', 'Hector', 'Enriquez', 'hector@gmail.com', 'ceibos', '0999561', '025566');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rolruta`
--

DROP TABLE IF EXISTS `tbl_rolruta`;
CREATE TABLE IF NOT EXISTS `tbl_rolruta` (
  `rolR_id` int(10) NOT NULL AUTO_INCREMENT,
  `tipu_id` int(11) NOT NULL,
  `ruta_id` int(10) NOT NULL,
  PRIMARY KEY (`rolR_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_rolruta`
--

INSERT INTO `tbl_rolruta` (`rolR_id`, `tipu_id`, `ruta_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 2, 1),
(9, 2, 2),
(10, 2, 3),
(11, 2, 4),
(12, 1, 8),
(14, 2, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rolusuario`
--

DROP TABLE IF EXISTS `tbl_rolusuario`;
CREATE TABLE IF NOT EXISTS `tbl_rolusuario` (
  `rolU_id` int(10) NOT NULL AUTO_INCREMENT,
  `tipu_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  PRIMARY KEY (`rolU_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_rolusuario`
--

INSERT INTO `tbl_rolusuario` (`rolU_id`, `tipu_id`, `usu_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ruta`
--

DROP TABLE IF EXISTS `tbl_ruta`;
CREATE TABLE IF NOT EXISTS `tbl_ruta` (
  `ruta_id` int(10) NOT NULL AUTO_INCREMENT,
  `ruta_nom` varchar(50) NOT NULL,
  `ruta_ruta` varchar(50) NOT NULL,
  PRIMARY KEY (`ruta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_ruta`
--

INSERT INTO `tbl_ruta` (`ruta_id`, `ruta_nom`, `ruta_ruta`) VALUES
(1, 'Registrar Propietario', '/index.php/datos_vt=datereview-54j'),
(2, 'Registrar Mascota', '/index.php/datePet_masc=datereview-68pt'),
(3, 'Mascota-propietario', '/index.php/registrosPet_and_pers=datereview-782ik'),
(4, 'General', '/index.php/Registro_db=fgrt96-ik'),
(5, 'Datos Propietario', '/index.php/datePro_mascs=datereview-59kj'),
(6, 'Datos Mascota', '/index.php/mascota_prop=datereview-57j'),
(7, 'Historial Mascota', '/index.php/historyPet_masc=datereview-96pt'),
(8, 'Citas Agenda', '/index.php/citasmaxc_masc=datereview-96pt'),
(10, 'Agenda Citas', '/index.php/Agentsmaxc_masc=datereview-96pt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_usuario`
--

DROP TABLE IF EXISTS `tbl_tipo_usuario`;
CREATE TABLE IF NOT EXISTS `tbl_tipo_usuario` (
  `tipu_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipu_nom` varchar(30) NOT NULL,
  PRIMARY KEY (`tipu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_tipo_usuario`
--

INSERT INTO `tbl_tipo_usuario` (`tipu_id`, `tipu_nom`) VALUES
(1, 'Veterinario'),
(2, 'Asistente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nombre` varchar(30) NOT NULL,
  `usu_apellido` varchar(30) NOT NULL,
  `usu_email` varchar(50) NOT NULL,
  `usu_nick` varchar(30) NOT NULL,
  `usu_password` varchar(20) NOT NULL,
  `usu_estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_id`, `usu_nombre`, `usu_apellido`, `usu_email`, `usu_nick`, `usu_password`, `usu_estado`) VALUES
(1, 'Byron', 'Ramirez', 'bmramirez@gmail.com', 'bmramirez', '123456', 1),
(2, 'Paul', 'Dominguez', 'pool@yahoo.com', 'pool2', '12345', 1),
(3, 'Patricia', 'Jimenez', 'paty@gmail.com', 'paty', '24680', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_vacunas`
--

DROP TABLE IF EXISTS `tbl_vacunas`;
CREATE TABLE IF NOT EXISTS `tbl_vacunas` (
  `vac_id` int(11) NOT NULL AUTO_INCREMENT,
  `masc_id` int(11) NOT NULL,
  `vac_fecha` date NOT NULL,
  `vac_descripcion` varchar(100) NOT NULL,
  `vac_fechaProxima` date NOT NULL,
  PRIMARY KEY (`vac_id`),
  KEY `masc_id` (`masc_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_propietario`
--
ALTER TABLE `tbl_propietario`
  ADD CONSTRAINT `tbl_propietario_ibfk_1` FOREIGN KEY (`iden_id`) REFERENCES `tbl_identidad` (`iden_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_vacunas`
--
ALTER TABLE `tbl_vacunas`
  ADD CONSTRAINT `tbl_vacunas_ibfk_1` FOREIGN KEY (`masc_id`) REFERENCES `tbl_mascota` (`masc_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
