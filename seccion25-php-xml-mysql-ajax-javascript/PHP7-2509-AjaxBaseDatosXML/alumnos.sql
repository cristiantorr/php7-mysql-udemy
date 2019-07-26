-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3308
-- Generation Time: Jun 16, 2018 at 09:20 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escuela`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(11) NOT NULL,
  `nombres` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `fechaNacimiento` varchar(12) COLLATE latin1_spanish_ci NOT NULL,
  `promedio` int(11) NOT NULL,
  `genero` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `escuela` int(11) NOT NULL,
  `materia` int(11) NOT NULL,
  `salon` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombres`, `apellidos`, `fechaNacimiento`, `promedio`, `genero`, `escuela`, `materia`, `salon`) VALUES
(1, 'Adrian Jesus', 'Escobar Diaz', '01/11/99', 4, 'M', 1, 2, 3),
(2, 'Adriana', 'Aguilar Tellez', '02/12/98', 5, 'F', 2, 1, 2),
(3, 'Alejandro', 'Aguilar Sanchez', '03/12/97', 6, 'M', 3, 2, 1),
(4, 'Alejandro', 'Aguilar Rendon', '04/10/96', 7, 'F', 1, 3, 2),
(5, 'Alicia', 'Aguilar Ramirez', '05/11/93', 8, 'M', 2, 1, 3),
(6, 'Alicia Maria', 'Aguilar Ramirez', '06/09/99', 9, 'F', 3, 2, 1),
(7, 'Ana Lilia', 'Aguilar Pedrero', '07/09/94', 10, 'M', 1, 3, 2),
(8, 'Arturo', 'Aguilar Ochoa', '08/08/95', 4, 'F', 2, 1, 3),
(9, 'Benjamin', 'Aguilar Gomez Tagle', '09/08/92', 5, 'M', 3, 2, 1),
(10, 'Blanca Araceli', 'Aguilar Galvan', '10/07/91', 6, 'F', 1, 3, 2),
(11, 'Carmen Julieta', 'Aguilar Flores', '11/07/90', 7, 'M', 2, 1, 3),
(12, 'Diana', 'Aguilar Flores', '12/06/80', 8, 'F', 3, 2, 1),
(13, 'Edgar', 'Aguilar De Llano', '12/06/81', 9, 'M', 1, 3, 2),
(14, 'Edmundo Rafael', 'Aguilar Castro', '11/05/78', 10, 'F', 2, 1, 3),
(15, 'Elvira', 'Aguilar Casillas', '10/05/79', 4, 'M', 3, 2, 1),
(16, 'Erika', 'Aguayo Labastida', '09/04/84', 5, 'F', 1, 3, 2),
(17, 'Fernanda', 'Aguario Albarran', '08/04/78', 6, 'M', 2, 1, 3),
(18, 'Francisco Alejandro', 'Aguado Medina', '07/04/98', 7, 'F', 3, 2, 1),
(19, 'Gabriel', 'Aguado ', '05/05/96', 8, 'M', 1, 3, 2),
(20, 'Hector', 'Adams Huitron', '06/03/95', 9, 'F', 2, 1, 3),
(21, 'Irais', 'Adame Gomez', '07/03/94', 10, 'M', 3, 2, 1),
(22, 'Jose Luis', 'Adame Garcia', '06/02/93', 4, 'F', 1, 3, 2),
(23, 'Jose Maria', 'Acuna Gallareta', '07/02/92', 5, 'M', 2, 1, 3),
(24, 'Josefina', 'Acosta Moctezuma', '05/03/91', 6, 'F', 3, 2, 1),
(25, 'Juan Jesus', 'Acosta Gonzalez', '04/03/89', 7, 'M', 1, 3, 2),
(26, 'Julio Cesar', 'Acosta Garcia', '03/04/89', 8, 'F', 2, 1, 3),
(27, 'Laura Patricia', 'Acosta Garcia', '02/05/79', 9, 'M', 3, 2, 1),
(28, 'Monica', 'Acosta Baeza', '02/06/70', 10, 'F', 1, 3, 2),
(29, 'Monica', 'Acosta Aguirre', '03/05/88', 4, 'M', 2, 1, 3),
(30, 'Nora Karina', 'Aceves Pulido', '04/07/89', 5, 'F', 3, 2, 1),
(31, 'Pavel Alfonso', 'Aceves Pastor', '06/08/77', 6, 'M', 1, 3, 2),
(32, 'Roberto Carlos', 'Aceves Lopez de Nava', '07/09/88', 7, 'F', 2, 1, 3),
(33, 'Tania Gabriela', 'Aceves Alvarado', '08/07/89', 8, 'M', 3, 2, 1),
(34, 'Victoria Eugenia', 'Acevedo Hernandez', '09/07/78', 9, 'F', 1, 3, 2),
(35, 'Virginia', 'Acevedo Hernandez', '10/11/98', 10, 'M', 2, 1, 3),
(36, 'Adrian Jesus', 'Escobar Diaz', '01/11/99', 4, 'M', 1, 2, 3),
(37, 'Adriana', 'Aguilar Tellez', '02/12/98', 5, 'F', 2, 1, 2),
(38, 'Alejandro', 'Aguilar Sanchez', '03/12/97', 6, 'M', 3, 2, 1),
(39, 'Alejandro', 'Aguilar Rendon', '04/10/96', 7, 'F', 1, 3, 2),
(40, 'Alicia', 'Aguilar Ramirez', '05/11/93', 8, 'M', 2, 1, 3),
(41, 'Alicia Maria', 'Aguilar Ramirez', '06/09/99', 9, 'F', 3, 2, 1),
(42, 'Ana Lilia', 'Aguilar Pedrero', '07/09/94', 10, 'M', 1, 3, 2),
(43, 'Arturo', 'Aguilar Ochoa', '08/08/95', 4, 'F', 2, 1, 3),
(44, 'Benjamin', 'Aguilar Gomez Tagle', '09/08/92', 5, 'M', 3, 2, 1),
(45, 'Blanca Araceli', 'Aguilar Galvan', '10/07/91', 6, 'F', 1, 3, 2),
(46, 'Carmen Julieta', 'Aguilar Flores', '11/07/90', 7, 'M', 2, 1, 3),
(47, 'Diana', 'Aguilar Flores', '12/06/80', 8, 'F', 3, 2, 1),
(48, 'Edgar', 'Aguilar De Llano', '12/06/81', 9, 'M', 1, 3, 2),
(49, 'Edmundo Rafael', 'Aguilar Castro', '11/05/78', 10, 'F', 2, 1, 3),
(50, 'Elvira', 'Aguilar Casillas', '10/05/79', 4, 'M', 3, 2, 1),
(51, 'Erika', 'Aguayo Labastida', '09/04/84', 5, 'F', 1, 3, 2),
(52, 'Fernanda', 'Aguario Albarran', '08/04/78', 6, 'M', 2, 1, 3),
(53, 'Francisco Alejandro', 'Aguado Medina', '07/04/98', 7, 'F', 3, 2, 1),
(54, 'Gabriel', 'Aguado ', '05/05/96', 8, 'M', 1, 3, 2),
(55, 'Hector', 'Adams Huitron', '06/03/95', 9, 'F', 2, 1, 3),
(56, 'Irais', 'Adame Gomez', '07/03/94', 10, 'M', 3, 2, 1),
(57, 'Jose Luis', 'Adame Garcia', '06/02/93', 4, 'F', 1, 3, 2),
(58, 'Jose Maria', 'Acuna Gallareta', '07/02/92', 5, 'M', 2, 1, 3),
(59, 'Josefina', 'Acosta Moctezuma', '05/03/91', 6, 'F', 3, 2, 1),
(60, 'Juan Jesus', 'Acosta Gonzalez', '04/03/89', 7, 'M', 1, 3, 2),
(61, 'Julio Cesar', 'Acosta Garcia', '03/04/89', 8, 'F', 2, 1, 3),
(62, 'Laura Patricia', 'Acosta Garcia', '02/05/79', 9, 'M', 3, 2, 1),
(63, 'Monica', 'Acosta Baeza', '02/06/70', 10, 'F', 1, 3, 2),
(64, 'Monica', 'Acosta Aguirre', '03/05/88', 4, 'M', 2, 1, 3),
(65, 'Nora Karina', 'Aceves Pulido', '04/07/89', 5, 'F', 3, 2, 1),
(66, 'Pavel Alfonso', 'Aceves Pastor', '06/08/77', 6, 'M', 1, 3, 2),
(67, 'Roberto Carlos', 'Aceves Lopez de Nava', '07/09/88', 7, 'F', 2, 1, 3),
(68, 'Tania Gabriela', 'Aceves Alvarado', '08/07/89', 8, 'M', 3, 2, 1),
(69, 'Victoria Eugenia', 'Acevedo Hernandez', '09/07/78', 9, 'F', 1, 3, 2),
(70, 'Virginia', 'Acevedo Hernandez', '10/11/98', 10, 'M', 2, 1, 3),
(71, 'Adrian Jesus', 'Escobar Diaz', '01/11/99', 4, 'M', 1, 2, 3),
(72, 'Adriana', 'Aguilar Tellez', '02/12/98', 5, 'F', 2, 1, 2),
(73, 'Alejandro', 'Aguilar Sanchez', '03/12/97', 6, 'M', 3, 2, 1),
(74, 'Alejandro', 'Aguilar Rendon', '04/10/96', 7, 'F', 1, 3, 2),
(75, 'Alicia', 'Aguilar Ramirez', '05/11/93', 8, 'M', 2, 1, 3),
(76, 'Alicia Maria', 'Aguilar Ramirez', '06/09/99', 9, 'F', 3, 2, 1),
(77, 'Ana Lilia', 'Aguilar Pedrero', '07/09/94', 10, 'M', 1, 3, 2),
(78, 'Arturo', 'Aguilar Ochoa', '08/08/95', 4, 'F', 2, 1, 3),
(79, 'Benjamin', 'Aguilar Gomez Tagle', '09/08/92', 5, 'M', 3, 2, 1),
(80, 'Blanca Araceli', 'Aguilar Galvan', '10/07/91', 6, 'F', 1, 3, 2),
(81, 'Carmen Julieta', 'Aguilar Flores', '11/07/90', 7, 'M', 2, 1, 3),
(82, 'Diana', 'Aguilar Flores', '12/06/80', 8, 'F', 3, 2, 1),
(83, 'Edgar', 'Aguilar De Llano', '12/06/81', 9, 'M', 1, 3, 2),
(84, 'Edmundo Rafael', 'Aguilar Castro', '11/05/78', 10, 'F', 2, 1, 3),
(85, 'Elvira', 'Aguilar Casillas', '10/05/79', 4, 'M', 3, 2, 1),
(86, 'Erika', 'Aguayo Labastida', '09/04/84', 5, 'F', 1, 3, 2),
(87, 'Fernanda', 'Aguario Albarran', '08/04/78', 6, 'M', 2, 1, 3),
(88, 'Francisco Alejandro', 'Aguado Medina', '07/04/98', 7, 'F', 3, 2, 1),
(89, 'Gabriel', 'Aguado ', '05/05/96', 8, 'M', 1, 3, 2),
(90, 'Hector', 'Adams Huitron', '06/03/95', 9, 'F', 2, 1, 3),
(91, 'Irais', 'Adame Gomez', '07/03/94', 10, 'M', 3, 2, 1),
(92, 'Jose Luis', 'Adame Garcia', '06/02/93', 4, 'F', 1, 3, 2),
(93, 'Jose Maria', 'Acuna Gallareta', '07/02/92', 5, 'M', 2, 1, 3),
(94, 'Josefina', 'Acosta Moctezuma', '05/03/91', 6, 'F', 3, 2, 1),
(95, 'Juan Jesus', 'Acosta Gonzalez', '04/03/89', 7, 'M', 1, 3, 2),
(96, 'Julio Cesar', 'Acosta Garcia', '03/04/89', 8, 'F', 2, 1, 3),
(97, 'Laura Patricia', 'Acosta Garcia', '02/05/79', 9, 'M', 3, 2, 1),
(98, 'Monica', 'Acosta Baeza', '02/06/70', 10, 'F', 1, 3, 2),
(99, 'Monica', 'Acosta Aguirre', '03/05/88', 4, 'M', 2, 1, 3),
(100, 'Nora Karina', 'Aceves Pulido', '04/07/89', 5, 'F', 3, 2, 1),
(101, 'Pavel Alfonso', 'Aceves Pastor', '06/08/77', 6, 'M', 1, 3, 2),
(102, 'Roberto Carlos', 'Aceves Lopez de Nava', '07/09/88', 7, 'F', 2, 1, 3),
(103, 'Tania Gabriela', 'Aceves Alvarado', '08/07/89', 8, 'M', 3, 2, 1),
(104, 'Victoria Eugenia', 'Acevedo Hernandez', '09/07/78', 9, 'F', 1, 3, 2),
(105, 'Virginia', 'Acevedo Hernandez', '10/11/98', 10, 'M', 2, 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=106;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
