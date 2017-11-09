-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2017 a las 23:34:58
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ataco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canton`
--

CREATE TABLE `canton` (
  `idCanton` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Descripcion` text,
  `idMunicipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `canton`
--

INSERT INTO `canton` (`idCanton`, `Nombre`, `Descripcion`, `idMunicipio`) VALUES
(0, 'El Arco', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hidrografia`
--

CREATE TABLE `hidrografia` (
  `idHidrografia` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Descripcion` text NOT NULL,
  `idMunicipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_canton`
--

CREATE TABLE `img_canton` (
  `idImg_Canton` int(11) NOT NULL,
  `ruta` int(11) NOT NULL,
  `idCanton` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_hidrografia`
--

CREATE TABLE `img_hidrografia` (
  `idImg_hidrografia` int(11) NOT NULL,
  `ruta` int(11) NOT NULL,
  `idHidrografia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_municipio`
--

CREATE TABLE `img_municipio` (
  `idImg_Municipio` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `idMunicipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `img_municipio`
--

INSERT INTO `img_municipio` (`idImg_Municipio`, `ruta`, `idMunicipio`) VALUES
(1, '/Ataco/img/Concepcion_ataco.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_orografia`
--

CREATE TABLE `img_orografia` (
  `idImg_orografia` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `idOrografia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_turismo`
--

CREATE TABLE `img_turismo` (
  `idImg_turismo` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `idTurismo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `idMunicipio` int(11) NOT NULL,
  `Nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Descripcion` text NOT NULL,
  `Como_Llegar` text CHARACTER SET latin1 NOT NULL,
  `Historia` text CHARACTER SET latin1 NOT NULL,
  `Alcalde` text CHARACTER SET latin1 NOT NULL,
  `Población` varchar(20) CHARACTER SET latin1 NOT NULL,
  `ViasComunicacion` text CHARACTER SET latin1 NOT NULL,
  `DViasComunicacion` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`idMunicipio`, `Nombre`, `Descripcion`, `Como_Llegar`, `Historia`, `Alcalde`, `Población`, `ViasComunicacion`, `DViasComunicacion`) VALUES
(1, 'Concepcion de Ataco', 'Concepción de Ataco es un pueblo de origen precolombino. sus fascinantes paisajes, su valor cultural y sus calles empedradas fueron suficientes para nombrarla parte de la Ruta de las Flores. En nombre del pueblo es de origen nahuatl significa “Lugar de elevados manantiales“, un nombre muy acertado para una población asentada entre montañas a una altura de 1,275 metros snm, lo que permite gozar de un clima muy fresco en estos tiempos calurosos.\r\n|\r\nAtaco es conocido por ser un pueblo muy pintoresco ya que muchos de los muros han sido decorados con murales alusivos a la cultura salvadoreña.', 'Si procede de San Salvador deberá tomar la Carretera Panamericana (CA-8) en dirección a Santa Ana- Sonsonate. En el punto conocido como “El Poliedro” del municipio de Lourdes deberá tomar el desvío hacia Sonsonate que está a la derecha.\r\nA lo largo del camino encontrará la señalización que le indica cómo llegar a cada destino de la Ruta de las Flores. El recorrido en vehículo lleva una hora con 30 minutos aproximadamente.\r\nSi va en autobús, hay varias opciones. Desde la terminal de Occidente en San Salvador, puede tomar la 205 especial a $1.30 USD (1 hora y 15 minutos aproximadamente), la 205 normal a $0.75 USD (1 hora y 45 minutos aproximadamente). También podrá abordar la ruta 249 con destino Sonsonate-Ahuachapán.', 'Esta población es de origen precolombino y fue fundada por indios yaquis o pipiles en el corazón de la sierra de Apaneca con posterioridad al undécimo siglo de la Era Vulgar. En idioma náhuat este toponímico significa "lugar de elevados manantiales", ya que proviene de at, agua, manantial; aeu, elevado, alto; y co, sufijo locativo.| En 1550 tenía unos 800 habitantes. El oidor don Diego García de Palacio, en carta de relación al Rey Felipe II, de 8 de marzo de 1576, dice que en lo alto de la sierra de Apaneca está el pueblo de Ataco "del mismo temple y fertilidad (que los otros de la sierra), y muy abundante de toda montería y caza, por los muchos y buenos montes que para ella tienen. Tuve noticias que había en él venados, de la forma que son los que en la India de Portugal crían la piedra bezar e hice matar algunos en que se hallaron algunas piedras, que probadas en enfermedades pestilentes hacen el mismo efecto que las que se traen de la dicha India. ', 'Óscar Oliverio Gómez', ' 12,786', 'PENE', 'NEPE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orografia`
--

CREATE TABLE `orografia` (
  `idOrografia` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Descripcion` text NOT NULL,
  `idMunicipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turismo`
--

CREATE TABLE `turismo` (
  `idTurismo` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Descripcion` text NOT NULL,
  `idMunicipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canton`
--
ALTER TABLE `canton`
  ADD PRIMARY KEY (`idCanton`),
  ADD KEY `fk_canton` (`idMunicipio`);

--
-- Indices de la tabla `hidrografia`
--
ALTER TABLE `hidrografia`
  ADD PRIMARY KEY (`idHidrografia`),
  ADD KEY `fk_hidro` (`idMunicipio`);

--
-- Indices de la tabla `img_canton`
--
ALTER TABLE `img_canton`
  ADD PRIMARY KEY (`idImg_Canton`),
  ADD KEY `fk_img_idCanton` (`idCanton`);

--
-- Indices de la tabla `img_hidrografia`
--
ALTER TABLE `img_hidrografia`
  ADD PRIMARY KEY (`idImg_hidrografia`),
  ADD KEY `fk_img_hidro` (`idHidrografia`);

--
-- Indices de la tabla `img_municipio`
--
ALTER TABLE `img_municipio`
  ADD PRIMARY KEY (`idImg_Municipio`),
  ADD KEY `fk_imgMunicipio` (`idMunicipio`);

--
-- Indices de la tabla `img_orografia`
--
ALTER TABLE `img_orografia`
  ADD PRIMARY KEY (`idImg_orografia`),
  ADD KEY `fk_img_orografia` (`idOrografia`);

--
-- Indices de la tabla `img_turismo`
--
ALTER TABLE `img_turismo`
  ADD PRIMARY KEY (`idImg_turismo`),
  ADD KEY `fk_img_turismo` (`idTurismo`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`idMunicipio`);

--
-- Indices de la tabla `orografia`
--
ALTER TABLE `orografia`
  ADD PRIMARY KEY (`idOrografia`),
  ADD KEY `fk_orografia` (`idMunicipio`);

--
-- Indices de la tabla `turismo`
--
ALTER TABLE `turismo`
  ADD PRIMARY KEY (`idTurismo`),
  ADD KEY `fk_turismo` (`idMunicipio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hidrografia`
--
ALTER TABLE `hidrografia`
  MODIFY `idHidrografia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `img_canton`
--
ALTER TABLE `img_canton`
  MODIFY `idImg_Canton` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `img_hidrografia`
--
ALTER TABLE `img_hidrografia`
  MODIFY `idImg_hidrografia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `img_municipio`
--
ALTER TABLE `img_municipio`
  MODIFY `idImg_Municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `img_orografia`
--
ALTER TABLE `img_orografia`
  MODIFY `idImg_orografia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `img_turismo`
--
ALTER TABLE `img_turismo`
  MODIFY `idImg_turismo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `idMunicipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `orografia`
--
ALTER TABLE `orografia`
  MODIFY `idOrografia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `turismo`
--
ALTER TABLE `turismo`
  MODIFY `idTurismo` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `canton`
--
ALTER TABLE `canton`
  ADD CONSTRAINT `fk_canton` FOREIGN KEY (`idMunicipio`) REFERENCES `municipio` (`idMunicipio`);

--
-- Filtros para la tabla `hidrografia`
--
ALTER TABLE `hidrografia`
  ADD CONSTRAINT `fk_hidro` FOREIGN KEY (`idMunicipio`) REFERENCES `municipio` (`idMunicipio`);

--
-- Filtros para la tabla `img_canton`
--
ALTER TABLE `img_canton`
  ADD CONSTRAINT `fk_img_idCanton` FOREIGN KEY (`idCanton`) REFERENCES `canton` (`idCanton`);

--
-- Filtros para la tabla `img_hidrografia`
--
ALTER TABLE `img_hidrografia`
  ADD CONSTRAINT `fk_img_hidro` FOREIGN KEY (`idHidrografia`) REFERENCES `hidrografia` (`idHidrografia`);

--
-- Filtros para la tabla `img_municipio`
--
ALTER TABLE `img_municipio`
  ADD CONSTRAINT `fk_imgMunicipio` FOREIGN KEY (`idMunicipio`) REFERENCES `municipio` (`idMunicipio`);

--
-- Filtros para la tabla `img_orografia`
--
ALTER TABLE `img_orografia`
  ADD CONSTRAINT `fk_img_orografia` FOREIGN KEY (`idOrografia`) REFERENCES `orografia` (`idOrografia`);

--
-- Filtros para la tabla `img_turismo`
--
ALTER TABLE `img_turismo`
  ADD CONSTRAINT `fk_img_turismo` FOREIGN KEY (`idTurismo`) REFERENCES `turismo` (`idTurismo`);

--
-- Filtros para la tabla `orografia`
--
ALTER TABLE `orografia`
  ADD CONSTRAINT `fk_orografia` FOREIGN KEY (`idMunicipio`) REFERENCES `municipio` (`idMunicipio`);

--
-- Filtros para la tabla `turismo`
--
ALTER TABLE `turismo`
  ADD CONSTRAINT `fk_turismo` FOREIGN KEY (`idMunicipio`) REFERENCES `municipio` (`idMunicipio`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
