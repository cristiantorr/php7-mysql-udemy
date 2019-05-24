-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-06-2017 a las 21:46:19
-- Versión del servidor: 5.5.49-log
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arbolpalabras`
--

CREATE TABLE IF NOT EXISTS `arbolpalabras` (
  `id` int(11) NOT NULL,
  `frase` varchar(200) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `arbolpalabras`
--

INSERT INTO `arbolpalabras` (`id`, `frase`) VALUES
(2, 'JuÃ¡rez naciÃ³ en Guelatao, Oaxaca'),
(3, 'JuÃ¡rez estudiÃ³ leyes con los Jesuitas'),
(4, 'JuÃ¡rez participÃ³ en la revoluciÃ³n de Ayutla'),
(5, 'JuÃ¡rez participÃ³ en ConstituciÃ³n de 1857'),
(6, 'JuÃ¡rez fue gobernador de Oaxaca'),
(7, 'JuÃ¡rez fue presidente de MÃ©xico'),
(8, 'JuÃ¡rez combatiÃ³ a los Franceses'),
(9, 'JuÃ¡rez implantÃ³ las leyes de Reforma'),
(10, 'JuÃ¡rez muriÃ³ de angina de pecho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `burbujas`
--

CREATE TABLE IF NOT EXISTS `burbujas` (
  `id` int(11) NOT NULL,
  `pais` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `expectativa` int(11) NOT NULL,
  `fertilidad` int(11) NOT NULL,
  `region` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `poblacion` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `burbujas`
--

INSERT INTO `burbujas` (`id`, `pais`, `expectativa`, `fertilidad`, `region`, `poblacion`) VALUES
(1, 'CAN', 81, 2, 'America', 33739900),
(2, 'ALE', 80, 1, 'Europa', 81902307),
(3, 'DNK', 79, 2, 'Europa', 5523095),
(4, 'EGY', 73, 3, 'Oriente Medio', 79716203),
(5, 'GBR', 80, 2, 'Europa', 61801570),
(6, 'IRN', 72, 2, 'Oriente Medio', 73137148),
(7, 'IRQ', 68, 5, 'Oriente Medio', 31090763),
(8, 'ISR', 82, 3, 'Oriente Medio', 7485600),
(9, 'RUS', 69, 2, 'Europa', 141850000),
(10, 'USA', 78, 2, 'America', 307007000),
(11, 'MX', 77, 2, 'America', 127000000),
(12, 'ARG', 76, 2, 'America', 43000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `medida` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `calendar`
--

INSERT INTO `calendar` (`id`, `fecha`, `medida`) VALUES
(1, '2017-06-01', 235),
(2, '2017-06-02', 179),
(3, '2017-06-03', 136),
(4, '2017-06-04', 122),
(5, '2017-06-05', 111),
(6, '2017-06-06', 119),
(7, '2017-06-07', 125),
(8, '2017-06-08', 132),
(9, '2017-06-09', 122),
(10, '2017-06-10', 119),
(11, '2017-06-11', 140),
(12, '2017-06-12', 135),
(13, '2017-06-13', 120),
(14, '2017-06-14', 111),
(15, '2017-06-15', 110),
(16, '2017-06-16', 109),
(17, '2017-06-17', 121),
(18, '2017-06-18', 119);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candlestick`
--

CREATE TABLE IF NOT EXISTS `candlestick` (
  `id` int(11) NOT NULL,
  `dia` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `minimo` int(11) NOT NULL,
  `apertura` int(11) NOT NULL,
  `cierre` int(11) NOT NULL,
  `maximo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `candlestick`
--

INSERT INTO `candlestick` (`id`, `dia`, `minimo`, `apertura`, `cierre`, `maximo`) VALUES
(1, 'Lun', 20, 28, 38, 45),
(2, 'Mar', 31, 38, 55, 66),
(3, 'Mie', 50, 55, 77, 80),
(4, 'Jue', 77, 77, 66, 50),
(5, 'Vie', 68, 66, 22, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correlacion`
--

CREATE TABLE IF NOT EXISTS `correlacion` (
  `id` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `peso` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `correlacion`
--

INSERT INTO `correlacion` (`id`, `edad`, `peso`) VALUES
(1, 8, 12),
(2, 4, 6),
(3, 11, 14),
(4, 4, 5),
(5, 3, 4),
(6, 6, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escalonadas`
--

CREATE TABLE IF NOT EXISTS `escalonadas` (
  `id` int(11) NOT NULL,
  `pelicula` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `usa_today` float NOT NULL,
  `ny_post` float NOT NULL,
  `w_post` float NOT NULL,
  `reforma` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `escalonadas`
--

INSERT INTO `escalonadas` (`id`, `pelicula`, `usa_today`, `ny_post`, `w_post`, `reforma`) VALUES
(1, 'Cars 3', 2.5, 2.5, 2, 2),
(2, 'La momia', 2, 1, 2.5, 2.5),
(3, 'Bay Watch', 1, 1.5, 1, 1),
(4, 'Rapido y furioso', 2, 1.5, 1, 1.5),
(5, 'La tortuga roja', 3, 3.5, 3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `cali` int(11) NOT NULL,
  `genero` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `escuela` int(11) NOT NULL,
  `materia` int(11) NOT NULL,
  `salon` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombres`, `apellidos`, `fecha`, `cali`, `genero`, `escuela`, `materia`, `salon`) VALUES
(1, 'Adrian Jesus', 'Aceves Pastor', '1998-12-02', 5, 'M', 1, 2, 3),
(2, 'Adriana', 'Acevedo Hernandez', '1996-10-04', 7, 'F', 2, 1, 2),
(3, 'Alejandro', 'Aceves Lopez de Nava', '1999-09-06', 9, 'M', 3, 2, 1),
(4, 'Alejandro', 'Acosta Garcia', '1995-08-08', 8, 'M', 1, 3, 2),
(5, 'Alicia', 'Acosta Baeza', '1991-07-10', 5, 'F', 2, 1, 3),
(6, 'Alicia Maria', 'Acosta Garcia', '1980-06-12', 9, 'F', 3, 2, 1),
(7, 'Ana Lilia', 'Acuna Gallareta', '1978-05-11', 10, 'F', 1, 3, 2),
(8, 'Arturo', 'Adame Gomez', '1984-04-09', 9, 'M', 2, 1, 3),
(9, 'Benjamin', 'Aguado Medina', '1998-04-07', 7, 'M', 3, 2, 1),
(10, 'Blanca Araceli', 'Aguario Albarran', '1995-03-06', 9, 'M', 1, 3, 2),
(11, 'Carmen Julieta', 'Aguilar Tellez', '1993-02-06', 8, 'F', 2, 1, 3),
(12, 'Diana', 'Aguilar Casillas', '1991-03-05', 6, 'F', 3, 2, 1),
(13, 'Edgar', 'Aguilar Flores', '1989-04-03', 8, 'M', 1, 3, 2),
(14, 'Edmundo Rafael', 'Aguilar Galvan', '1970-06-02', 10, 'M', 2, 1, 3),
(15, 'Elvira', 'Aguilar De Llano', '1989-07-04', 9, 'F', 3, 2, 1),
(16, 'Erika', 'Aguilar Castro', '1988-09-07', 7, 'F', 1, 3, 2),
(17, 'Fernanda', 'Aguilar Ramirez', '1978-07-09', 9, 'F', 2, 1, 3),
(18, 'Francisco Alejandro', 'Escobar Diaz', '1999-11-01', 8, 'M', 3, 2, 1),
(19, 'Gabriel', 'Acevedo Hernandez', '1997-12-03', 6, 'M', 1, 3, 2),
(20, 'Hector', 'Aceves Pulido', '1993-11-05', 8, 'M', 2, 1, 3),
(21, 'Irais', 'Aceves Alvarado', '1994-09-07', 10, 'F', 3, 2, 1),
(22, 'Jose Luis', 'Acosta Gonzalez', '1992-08-09', 8, 'M', 1, 3, 2),
(23, 'Jose Maria', 'Acosta Moctezuma', '1990-07-11', 7, 'M', 2, 1, 3),
(24, 'Josefina', 'Acosta Aguirre', '1981-06-12', 9, 'F', 3, 2, 1),
(25, 'Juan Jesus', 'Adame Garcia', '1979-05-10', 7, 'M', 1, 3, 2),
(26, 'Julio Cesar', 'Adams Huitron', '1978-04-08', 6, 'M', 2, 1, 3),
(27, 'Laura Patricia', 'Aguado ', '1996-05-05', 8, 'F', 3, 2, 1),
(28, 'Monica', 'Aguayo Labastida', '1994-03-07', 10, 'F', 1, 3, 2),
(29, 'Monica', 'Aguilar Ochoa', '1992-02-07', 6, 'F', 2, 1, 3),
(30, 'Nora Karina', 'Aguilar Ramirez', '1989-03-04', 7, 'F', 3, 2, 1),
(31, 'Pavel Alfonso', 'Aguilar Rendon', '1979-05-02', 9, 'M', 1, 3, 2),
(32, 'Roberto Carlos', 'Aguilar Gomez Tagle', '1988-05-03', 8, 'M', 2, 1, 3),
(33, 'Tania Gabriela', 'Aguilar Pedrero', '1977-08-06', 6, 'F', 3, 2, 1),
(34, 'Victoria Eugenia', 'Aguilar Sanchez', '1989-07-08', 8, 'F', 1, 3, 2),
(35, 'Virginia', 'Aguilar Flores', '1998-11-10', 10, 'F', 2, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gantt`
--

CREATE TABLE IF NOT EXISTS `gantt` (
  `id` int(11) NOT NULL,
  `tarea` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `recursos` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `inicio` date NOT NULL,
  `final` date NOT NULL,
  `duracion` int(11) NOT NULL,
  `avance` int(11) NOT NULL,
  `dependencias` varchar(100) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `gantt`
--

INSERT INTO `gantt` (`id`, `tarea`, `recursos`, `inicio`, `final`, `duracion`, `avance`, `dependencias`) VALUES
(1, 'Recopilar bibliografia y fuentes', 'Libros e Internet', '2017-06-01', '2017-06-05', 0, 100, ''),
(2, 'Resumenes de los documentos', 'Libros e Internet', '0000-00-00', '2017-06-09', 3, 20, '1'),
(3, 'Crear bibliogarfia', 'Libros e Internet', '0000-00-00', '2017-06-11', 2, 30, '2'),
(4, 'Crear un indice tematico', 'Resumenes', '0000-00-00', '2017-06-15', 3, 20, '3'),
(5, 'Marco historico y teorico', 'Resumenes', '0000-00-00', '2017-06-21', 3, 0, '2,4'),
(6, 'Creacion de ejercicios', 'Resumenes', '0000-00-00', '2017-06-23', 2, 0, '5'),
(7, 'Primer borrador', 'Resumenes', '0000-00-00', '2017-06-30', 5, 0, '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `geochart`
--

CREATE TABLE IF NOT EXISTS `geochart` (
  `id` int(11) NOT NULL,
  `pais` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `poblacion` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `geochart`
--

INSERT INTO `geochart` (`id`, `pais`, `poblacion`) VALUES
(1, 'Brasil', 202450649),
(2, 'Colombia', 50364000),
(3, 'Argentina', 43890368),
(4, 'Peru', 31151643),
(5, 'Venezuela', 31028337),
(6, 'Chile', 18261884),
(7, 'Ecuador', 16298217),
(8, 'Bolivia', 10888000),
(9, 'Paraguay', 6460000),
(10, 'Uruguay', 3372000),
(11, 'Guyana', 761000),
(12, 'Surinam', 524000),
(13, 'Guyana Francesa', 187000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `graficajson`
--

CREATE TABLE IF NOT EXISTS `graficajson` (
  `id` int(11) NOT NULL,
  `tipo` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `indice` int(11) NOT NULL,
  `prop` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `valor` varchar(200) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `graficajson`
--

INSERT INTO `graficajson` (`id`, `tipo`, `indice`, `prop`, `valor`) VALUES
(1, 'col', 1, 'id', 'navegador'),
(2, 'col', 1, 'label', 'navegador'),
(3, 'col', 1, 'type', 'string'),
(4, 'col', 2, 'id', 'porcien'),
(5, 'col', 2, 'label', 'porcien'),
(6, 'col', 2, 'type', 'number'),
(7, 'row', 3, 'v', 'Chrome'),
(8, 'row', 3, 'v', '50'),
(9, 'row', 4, 'v', 'Firefox'),
(10, 'row', 4, 'v', '27'),
(11, 'row', 5, 'v', 'Internet Explorer'),
(12, 'row', 5, 'v', '13'),
(13, 'row', 6, 'v', 'Safari'),
(14, 'row', 6, 'v', '5'),
(15, 'row', 7, 'v', 'Opera'),
(16, 'row', 7, 'v', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico`
--

CREATE TABLE IF NOT EXISTS `historico` (
  `id` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `navegador` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `porcien` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `historico`
--

INSERT INTO `historico` (`id`, `anio`, `mes`, `navegador`, `porcien`) VALUES
(1, 2017, 4, 'Chrome', 76),
(2, 2017, 4, 'IE-Edge', 5),
(3, 2017, 4, 'Firefox', 14),
(4, 2017, 4, 'Safari', 4),
(5, 2017, 4, 'Opera', 1),
(6, 2016, 4, 'Chrome', 71),
(7, 2016, 4, 'IE-Edge', 6),
(8, 2016, 4, 'Firefox', 17),
(9, 2016, 4, 'Safari', 3),
(10, 2016, 4, 'Opera', 1),
(11, 2015, 4, 'Chrome', 64),
(12, 2015, 4, 'IE-Edge', 8),
(13, 2015, 4, 'Firefox', 22),
(14, 2015, 4, 'Safari', 4),
(15, 2015, 4, 'Opera', 2),
(16, 2014, 4, 'Chrome', 58),
(17, 2014, 4, 'IE-Edge', 9),
(18, 2014, 4, 'Firefox', 25),
(19, 2014, 4, 'Safari', 4),
(20, 2014, 4, 'Opera', 2),
(21, 2013, 4, 'Chrome', 53),
(22, 2013, 4, 'IE-Edge', 13),
(23, 2013, 4, 'Firefox', 28),
(24, 2013, 4, 'Safari', 4),
(25, 2013, 4, 'Opera', 2),
(26, 2012, 4, 'Chrome', 38),
(27, 2012, 4, 'IE-Edge', 18),
(28, 2012, 4, 'Firefox', 36),
(29, 2012, 4, 'Safari', 5),
(30, 2012, 4, 'Opera', 2),
(31, 2011, 4, 'Chrome', 26),
(32, 2011, 4, 'IE-Edge', 24),
(33, 2011, 4, 'Firefox', 43),
(34, 2011, 4, 'Safari', 4),
(35, 2011, 4, 'Opera', 3),
(36, 2010, 4, 'Chrome', 14),
(37, 2010, 4, 'IE-Edge', 33),
(38, 2010, 4, 'Firefox', 46),
(40, 2010, 4, 'Safari', 4),
(41, 2010, 4, 'Opera', 2),
(42, 2009, 4, 'Chrome', 5),
(43, 2009, 4, 'IE-Edge', 42),
(44, 2009, 4, 'Firefox', 47),
(45, 2009, 4, 'Safari', 3),
(46, 2009, 4, 'Opera', 2),
(47, 2008, 4, 'Chrome', 3),
(48, 2008, 4, 'IE-Edge', 49),
(49, 2008, 4, 'Firefox', 43),
(50, 2008, 4, 'Safari', 3),
(51, 2008, 4, 'Opera', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historicotabular`
--

CREATE TABLE IF NOT EXISTS `historicotabular` (
  `id` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `Chrome` int(11) NOT NULL,
  `IE-Edge` int(11) NOT NULL,
  `Firefox` int(11) NOT NULL,
  `Safari` int(11) NOT NULL,
  `Opera` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `historicotabular`
--

INSERT INTO `historicotabular` (`id`, `anio`, `Chrome`, `IE-Edge`, `Firefox`, `Safari`, `Opera`) VALUES
(1, 2017, 76, 5, 14, 4, 1),
(2, 2016, 70, 6, 18, 4, 1),
(3, 2015, 64, 8, 22, 4, 2),
(4, 2014, 58, 9, 25, 4, 2),
(5, 2013, 53, 13, 28, 4, 2),
(6, 2012, 38, 18, 36, 5, 2),
(7, 2011, 26, 24, 43, 4, 3),
(8, 2010, 14, 33, 46, 4, 2),
(9, 2009, 5, 42, 47, 3, 2),
(10, 2008, 3, 49, 43, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historicotabularanotaciones`
--

CREATE TABLE IF NOT EXISTS `historicotabularanotaciones` (
  `id` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `Chrome` int(11) NOT NULL,
  `anotacion` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `texto` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `IE-Edge` int(11) NOT NULL,
  `Firefox` int(11) NOT NULL,
  `Safari` int(11) NOT NULL,
  `Opera` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `historicotabularanotaciones`
--

INSERT INTO `historicotabularanotaciones` (`id`, `anio`, `Chrome`, `anotacion`, `texto`, `IE-Edge`, `Firefox`, `Safari`, `Opera`) VALUES
(1, 2017, 76, NULL, NULL, 5, 14, 4, 1),
(2, 2016, 70, NULL, NULL, 6, 18, 4, 1),
(3, 2015, 64, NULL, NULL, 8, 22, 4, 2),
(4, 2014, 58, NULL, NULL, 9, 25, 4, 2),
(5, 2013, 53, 'B', 'Chrome pasa del 50% del mercado', 13, 28, 4, 2),
(6, 2012, 38, 'A', 'Consolidacion de HTML5', 18, 36, 5, 2),
(7, 2011, 26, NULL, NULL, 24, 43, 4, 3),
(8, 2010, 14, NULL, NULL, 33, 46, 4, 2),
(9, 2009, 5, NULL, NULL, 42, 47, 3, 2),
(10, 2008, 3, NULL, NULL, 49, 43, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historicotabularcertezaenfasis`
--

CREATE TABLE IF NOT EXISTS `historicotabularcertezaenfasis` (
  `id` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `Chrome` int(11) NOT NULL,
  `certeza` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `IE-Edge` int(11) NOT NULL,
  `enfasis` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `Firefox` int(11) NOT NULL,
  `Safari` int(11) NOT NULL,
  `Opera` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `historicotabularcertezaenfasis`
--

INSERT INTO `historicotabularcertezaenfasis` (`id`, `anio`, `Chrome`, `certeza`, `IE-Edge`, `enfasis`, `Firefox`, `Safari`, `Opera`) VALUES
(1, 2017, 76, 'true', 5, 'false', 14, 4, 1),
(2, 2016, 70, 'true', 6, 'true', 18, 4, 1),
(3, 2015, 64, 'true', 8, 'true', 22, 4, 2),
(4, 2014, 58, 'true', 9, 'false', 25, 4, 2),
(5, 2013, 53, 'true', 13, 'false', 28, 4, 2),
(6, 2012, 38, 'true', 18, 'false', 36, 5, 2),
(7, 2011, 26, 'false', 24, 'false', 43, 4, 3),
(8, 2010, 14, 'true', 33, 'true', 46, 4, 2),
(9, 2009, 5, 'true', 42, 'false', 47, 3, 2),
(10, 2008, 3, 'true', 49, 'false', 43, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historicotabularintervalos`
--

CREATE TABLE IF NOT EXISTS `historicotabularintervalos` (
  `id` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `Chrome` int(11) NOT NULL,
  `intervalo1` int(10) DEFAULT NULL,
  `intervalo2` int(11) DEFAULT NULL,
  `IE-Edge` int(11) NOT NULL,
  `Firefox` int(11) NOT NULL,
  `Safari` int(11) NOT NULL,
  `Opera` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `historicotabularintervalos`
--

INSERT INTO `historicotabularintervalos` (`id`, `anio`, `Chrome`, `intervalo1`, `intervalo2`, `IE-Edge`, `Firefox`, `Safari`, `Opera`) VALUES
(1, 2017, 76, NULL, NULL, 5, 14, 4, 1),
(2, 2016, 70, NULL, NULL, 6, 18, 4, 1),
(3, 2015, 64, NULL, NULL, 8, 22, 4, 2),
(4, 2014, 58, NULL, NULL, 9, 25, 4, 2),
(5, 2013, 53, 48, 57, 13, 28, 4, 2),
(6, 2012, 38, 32, 42, 18, 36, 5, 2),
(7, 2011, 26, 20, 28, 24, 43, 4, 3),
(8, 2010, 14, NULL, NULL, 33, 46, 4, 2),
(9, 2009, 5, NULL, NULL, 42, 47, 3, 2),
(10, 2008, 3, NULL, NULL, 49, 43, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historicotabulartooltip`
--

CREATE TABLE IF NOT EXISTS `historicotabulartooltip` (
  `id` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `Chrome` int(11) NOT NULL,
  `tooltip1` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `IE-Edge` int(11) NOT NULL,
  `Firefox` int(11) NOT NULL,
  `Safari` int(11) NOT NULL,
  `Opera` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `historicotabulartooltip`
--

INSERT INTO `historicotabulartooltip` (`id`, `anio`, `Chrome`, `tooltip1`, `IE-Edge`, `Firefox`, `Safari`, `Opera`) VALUES
(1, 2017, 76, 'Mas de la tercera parte', 5, 14, 4, 1),
(2, 2016, 70, 'Llega al', 6, 18, 4, 1),
(3, 2015, 64, 'Aplastante', 8, 22, 4, 2),
(4, 2014, 58, 'Desaparece IE', 9, 25, 4, 2),
(5, 2013, 53, 'Consolidacion del HTML5', 13, 28, 4, 2),
(6, 2012, 38, 'Primer lugar con ', 18, 36, 5, 2),
(7, 2011, 26, 'Segundo lugar', 24, 43, 4, 3),
(8, 2010, 14, 'Ocupa el tercer lugar con', 33, 46, 4, 2),
(9, 2009, 5, 'Nada impresionanrte', 42, 47, 3, 2),
(10, 2008, 3, 'Inicia Chrome con un modesto', 49, 43, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historicotabulartooltiphtml`
--

CREATE TABLE IF NOT EXISTS `historicotabulartooltiphtml` (
  `id` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `Chrome` int(11) NOT NULL,
  `tooltip1` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `IE-Edge` int(11) NOT NULL,
  `Firefox` int(11) NOT NULL,
  `Safari` int(11) NOT NULL,
  `Opera` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `historicotabulartooltiphtml`
--

INSERT INTO `historicotabulartooltiphtml` (`id`, `anio`, `Chrome`, `tooltip1`, `IE-Edge`, `Firefox`, `Safari`, `Opera`) VALUES
(1, 2017, 76, '<img src=imagenes/navegadores07.jpg width=500><br><h1>Mas de la tercera parte:</h1>', 5, 14, 4, 1),
(2, 2016, 70, '<img src=imagenes/navegadores06.jpg width=500><br><h1>Llega al</h1>', 6, 18, 4, 1),
(3, 2015, 64, '<img src=imagenes/navegadores05.jpg width=500><br><h1>Aplastante</h1>', 8, 22, 4, 2),
(4, 2014, 58, '<img src=imagenes/navegadores01.jpg width=500><br><h1>Desaparece IE</h1>', 9, 25, 4, 2),
(5, 2013, 53, '<img src=imagenes/navegadores01.jpg width=500><br><h1>Consolidacion del HTML5</h1>', 13, 28, 4, 2),
(6, 2012, 38, '<img src=imagenes/navegadores01.jpg width=500><br><h1>Primer lugar con </h1>', 18, 36, 5, 2),
(7, 2011, 26, '<img src=imagenes/navegadores04.jpg width=500><br><h1>Segundo lugar</h1>', 24, 43, 4, 3),
(8, 2010, 14, '<img src=imagenes/navegadores03.jpg width=500><br><h1>Ocupa el tercer lugar con</h1>', 33, 46, 4, 2),
(9, 2009, 5, '<img src=imagenes/navegadores02.png width=500><br><h1>Nada impresionanrte</h1>', 42, 47, 3, 2),
(10, 2008, 3, '<img src=imagenes/navegadores01.jpg width=500><br><h1>Inicia Chrome con un modesto</h1>', 49, 43, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicadores`
--

CREATE TABLE IF NOT EXISTS `indicadores` (
  `id` int(11) NOT NULL,
  `azucar` int(11) NOT NULL,
  `colesterol` int(11) NOT NULL,
  `trigliceridos` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `indicadores`
--

INSERT INTO `indicadores` (`id`, `azucar`, `colesterol`, `trigliceridos`) VALUES
(1, 137, 235, 120);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mapas`
--

CREATE TABLE IF NOT EXISTS `mapas` (
  `id` int(11) NOT NULL,
  `pais` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `poblacion` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mapas`
--

INSERT INTO `mapas` (`id`, `pais`, `poblacion`) VALUES
(1, 'China', 'China: 1,363,800,000'),
(2, 'India', 'India: 1,242,620,000'),
(3, 'US', 'US: 317,842,000'),
(4, 'Indonesia', 'Indonesia: 247,424,598'),
(5, 'Brazil', 'Brasil: 201,032,714'),
(6, 'Pakistan', 'Pakistan: 186,134,000'),
(7, 'Nigeria', 'Nigeria: 173,615,000'),
(8, 'Bangladesh', 'Bangladesh: 152,518,015'),
(9, 'Russia', 'Rusia: 146,019,512'),
(10, 'Japan', 'Japon: 127,120,000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `idMaterias` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `activo` char(1) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `navegadores`
--

CREATE TABLE IF NOT EXISTS `navegadores` (
  `id` int(11) NOT NULL,
  `navegador` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `porcien` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `navegadores`
--

INSERT INTO `navegadores` (`id`, `navegador`, `porcien`) VALUES
(1, 'Chrome', 51),
(2, 'Firefox', 16),
(3, 'Internet Explorer', 13),
(4, 'Safari', 15),
(5, 'Otros', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `navegadoresestilos`
--

CREATE TABLE IF NOT EXISTS `navegadoresestilos` (
  `id` int(11) NOT NULL,
  `navegador` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `porcien` int(11) NOT NULL,
  `estilo` varchar(150) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `navegadoresestilos`
--

INSERT INTO `navegadoresestilos` (`id`, `navegador`, `porcien`, `estilo`) VALUES
(1, 'Chrome', 51, 'color: orange'),
(2, 'Firefox', 16, 'color: #76A7FA'),
(3, 'Internet Explorer', 13, 'color: red'),
(4, 'Safari', 15, 'color: green'),
(5, 'Otros', 5, 'color: yellow');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organigrama`
--

CREATE TABLE IF NOT EXISTS `organigrama` (
  `id` int(11) NOT NULL,
  `valor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `formato` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dependencia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tooltip` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `organigrama`
--

INSERT INTO `organigrama` (`id`, `valor`, `formato`, `dependencia`, `tooltip`) VALUES
(1, 'direccion', 'Direcci&oacute;n<div style="color:red; font-style:italic">Lic. Gonz&aacute;lez</div>', '', 'Lic. Jorge Gonzalez'),
(2, 'mercadotecnia', 'Mercadotecnia<div style="color:blue; font-style:italic">Lic. Lopez</div>', 'direccion', 'Lic. Martha Rico'),
(3, 'finanzas', 'Finanzas<div style="color:blue; font-style:italic">Lic. Estrada</div>', 'direccion', 'Lic. Ricardo Estrada'),
(4, 'rrhh', 'Recursos Humanos<div style="color:blue; font-style:italic">Lic. Alvarado</div>', 'direccion', 'Lic. Michell Alvarado'),
(5, 'produccion', 'Producci&oacute;n<div style="color:blue; font-style:italic">Lic. Hern&aacute;ndez</div>', 'direccion', 'Ing. Eduardo Hernandez'),
(6, 'ventas', 'Ventas<div style="color:red; font-style:italic">(vacante)</div>', 'mercadotecnia', '(vacante)'),
(7, 'publicidad', 'Publicidad<div style="color:red; font-style:italic">D.G. Culqui</div>', 'mercadotecnia', 'D.G. Clara Culqui'),
(8, 'capacitacion', 'Capacitaci&oacute;n<div style="color:red; font-style:italic">Mta. Arce</div>', 'rrhh', 'Mta. Laura Arce'),
(9, 'compras', 'Compras<div style="color:red; font-style:italic">Ing. S&aacute;nchez</div>', 'produccion', 'Ing. Jose Sanchez'),
(10, 'fabrica', 'F&aacute;brica<div style="color:green; font-style:italic">Ing. Salbuchi</div>', 'produccion', 'Ing. Antonio Salbuchi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tendencias`
--

CREATE TABLE IF NOT EXISTS `tendencias` (
  `id` int(11) NOT NULL,
  `tipo` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `variable1` int(11) NOT NULL,
  `variable2` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tendencias`
--

INSERT INTO `tendencias` (`id`, `tipo`, `variable1`, `variable2`) VALUES
(1, 'linear', 8, 37),
(2, 'linear', 4, 19),
(3, 'linear', 11, 52),
(4, 'linear', 4, 22),
(5, 'linear', 3, 16),
(6, 'linear', 7, 33),
(7, 'linear', 14, 72),
(8, 'exponential', 0, 1),
(9, 'exponential', 1, 33),
(10, 'exponential', 2, 269),
(11, 'exponential', 3, 2013),
(12, 'polynomial', 8, 12),
(13, 'polynomial', 4, 6),
(14, 'polynomial', 11, 14),
(15, 'polynomial', 4, 5),
(16, 'polynomial', 3, 4),
(17, 'polynomial', 7, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `timeline`
--

CREATE TABLE IF NOT EXISTS `timeline` (
  `id` int(11) NOT NULL,
  `presidente` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `inicio` date NOT NULL,
  `fin` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `timeline`
--

INSERT INTO `timeline` (`id`, `presidente`, `inicio`, `fin`) VALUES
(1, 'Francisco I. Madero', '1911-11-06', '1913-02-19'),
(2, 'Victoriano Huerta', '1913-02-19', '1914-07-15'),
(3, 'Fco. S. Carbajal', '1914-07-15', '1914-08-13'),
(4, 'Eulalio Gtz. Ortiz', '1914-11-01', '1915-01-15'),
(5, 'Roque Gzl. Garza', '1915-01-01', '1915-07-10'),
(6, 'Fco. Lagos Chazaro', '1915-07-10', '1915-10-15'),
(7, 'Venustino Carranza', '1917-05-01', '1920-05-21'),
(8, 'Adolfo de la Huerta', '1920-07-01', '1920-11-30'),
(9, 'Alvaro Obregon', '1920-12-01', '1924-11-30'),
(10, 'Plutarco Elias Calles', '1924-12-01', '1928-11-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombres` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `claveAcceso` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `nivel` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombres`, `apellidos`, `usuario`, `claveAcceso`, `nivel`) VALUES
(2, 'Pablo', 'Marmol', 'pablo@piedradura.com', 'cuchicuchi', 'Administrador'),
(3, 'Pedro', 'Picapiedra', 'pedro@piedradura.com', '54321', 'Operador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arbolpalabras`
--
ALTER TABLE `arbolpalabras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `burbujas`
--
ALTER TABLE `burbujas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `candlestick`
--
ALTER TABLE `candlestick`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `correlacion`
--
ALTER TABLE `correlacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `escalonadas`
--
ALTER TABLE `escalonadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gantt`
--
ALTER TABLE `gantt`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `geochart`
--
ALTER TABLE `geochart`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `graficajson`
--
ALTER TABLE `graficajson`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historicotabular`
--
ALTER TABLE `historicotabular`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historicotabularanotaciones`
--
ALTER TABLE `historicotabularanotaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historicotabularcertezaenfasis`
--
ALTER TABLE `historicotabularcertezaenfasis`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historicotabularintervalos`
--
ALTER TABLE `historicotabularintervalos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historicotabulartooltip`
--
ALTER TABLE `historicotabulartooltip`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historicotabulartooltiphtml`
--
ALTER TABLE `historicotabulartooltiphtml`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mapas`
--
ALTER TABLE `mapas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`idMaterias`);

--
-- Indices de la tabla `navegadores`
--
ALTER TABLE `navegadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `navegadoresestilos`
--
ALTER TABLE `navegadoresestilos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organigrama`
--
ALTER TABLE `organigrama`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tendencias`
--
ALTER TABLE `tendencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

-- AUTO_INCREMENT de la tabla `arbolpalabras`
--
ALTER TABLE `arbolpalabras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `burbujas`
--
ALTER TABLE `burbujas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `candlestick`
--
ALTER TABLE `candlestick`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `correlacion`
--
ALTER TABLE `correlacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `escalonadas`
--
ALTER TABLE `escalonadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `gantt`
--
ALTER TABLE `gantt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `geochart`
--
ALTER TABLE `geochart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `graficajson`
--
ALTER TABLE `graficajson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `historico`
--
ALTER TABLE `historico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `historicotabular`
--
ALTER TABLE `historicotabular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `historicotabularanotaciones`
--
ALTER TABLE `historicotabularanotaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `historicotabularcertezaenfasis`
--
ALTER TABLE `historicotabularcertezaenfasis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `historicotabularintervalos`
--
ALTER TABLE `historicotabularintervalos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `historicotabulartooltip`
--
ALTER TABLE `historicotabulartooltip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `historicotabulartooltiphtml`
--
ALTER TABLE `historicotabulartooltiphtml`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `mapas`
--
ALTER TABLE `mapas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `idMaterias` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `navegadores`
--
ALTER TABLE `navegadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `navegadoresestilos`
--
ALTER TABLE `navegadoresestilos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `organigrama`
--
ALTER TABLE `organigrama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tendencias`
--
ALTER TABLE `tendencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
