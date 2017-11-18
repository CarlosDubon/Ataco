-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2017 a las 23:01:05
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ataco_en`
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
(1, 'El Arco', NULL, 1),
(2, 'El Limo', NULL, 1),
(3, 'El Molino', NULL, 1),
(4, 'El Naranjito', NULL, 1),
(5, 'El Tronconal', NULL, 1),
(6, 'La Ceiba', NULL, 1),
(7, 'La Joya de Los Apantes', NULL, 1),
(8, 'Los Tablones', NULL, 1),
(9, 'San José', NULL, 1),
(10, 'Shucutitán', NULL, 1),
(11, 'Texusin Chirizo', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caserio`
--

CREATE TABLE `caserio` (
  `idCaserio` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `IdCanton` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `caserio`
--

INSERT INTO `caserio` (`idCaserio`, `Nombre`, `IdCanton`) VALUES
(1, 'El Arco', 1),
(2, 'La Peña', 1),
(3, 'El Limo', 2),
(4, 'El Tarro', 2),
(5, 'El Molino', 3),
(6, 'El Naranjito', 4),
(7, 'El Tronconal', 5),
(8, 'La Ceiba', 6),
(9, 'Las Lajas', 6),
(10, 'El Espino', 6),
(11, 'Admunga', 6),
(12, 'La Joya de Los Apantes', 7),
(13, 'El Ciprés', 7),
(14, 'San Cayetano', 7),
(15, 'Chichigazapa', 7),
(16, 'Santa Berta', 7),
(17, 'Los Tablones', 8),
(18, 'El Carmen', 8),
(19, 'San José', 9),
(20, 'Shucutitán', 10),
(21, 'La Gloria', 10),
(22, 'Texusin', 11),
(23, 'El Chirizo', 11),
(24, 'Melinche Abajo', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idComentario` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Correo` varchar(150) NOT NULL,
  `Comentario` text NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idMunicipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idComentario`, `Nombre`, `Correo`, `Comentario`, `Fecha`, `idMunicipio`) VALUES
(6, 'Ataco', 'Admin@Ataco.gob.sv', '<strong>Te vacile</strong>', '2017-11-17 00:27:50', 1);

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

--
-- Volcado de datos para la tabla `hidrografia`
--

INSERT INTO `hidrografia` (`idHidrografia`, `Nombre`, `Descripcion`, `idMunicipio`) VALUES
(1, 'GUAMO ', 'It is born 4.6 km southwest of the town of Concepción de Ataco, it is of great importance for the municipality, since it serves as a natural boundary, in the western part with the municipality of Tacuba. Its confluence with El Muerto creek, give rise to the Nejapa river. Length 7 km.', 1),
(2, 'MATALA OR LOS BOSQUES ', 'It is born 3.6 km southwest of the town of Concepción de Ataco, near the canton and hamlet El Naranjito. It runs from north to south until it meets the El Tamagás ravine and thus gives rise to the river El Rosario. Length 3.7 km.', 1),
(3, 'ASINO ', 'It is formed by the confluence of the streams El Decuaje and Atzumpa, 1.4 km southeast of the village of concepción de ataco; It runs from south to north until it leaves the municipality. Length 5 km.', 1),
(4, 'COPINULA ', 'It is born to 2.8 km to the south of the town of Conception of Ataco, in the skirts of the hill \"El Ciprés\", it flows with course of north to the south. Length 2.7 km.', 1),
(5, 'LOS APANTES OR LOS AMATES', 'It is born 4.8 km south of the town of Concepción de Ataco. It serves as the natural limit with the municipality of Jujutla, from the confluence with the La Soledad creek, to its mouth in the Copinula river, in an approximate stretch of 3.2 km. Length 4.2 km.', 1);

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
  `ruta` varchar(100) NOT NULL,
  `idHidrografia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `img_hidrografia`
--

INSERT INTO `img_hidrografia` (`idImg_hidrografia`, `ruta`, `idHidrografia`) VALUES
(1, '/Ataco/img/RIOS/RIOLOSAPANES.png', 5),
(2, '/Ataco/img/RIOS/RIOASINO.png', 3),
(3, '/Ataco/img/RIOS/RIOCOPINULA.png', 4),
(4, '/Ataco/img/RIOS/RIOGUAMO.png', 1),
(5, '/Ataco/img/RIOS/COPUINA.png', 2);

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
(1, '/Ataco/img/Concepcion_ataco.jpg', 1),
(2, '/Ataco/img/Img8.jpg', 1);

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

--
-- Volcado de datos para la tabla `img_turismo`
--

INSERT INTO `img_turismo` (`idImg_turismo`, `ruta`, `idTurismo`) VALUES
(1, '/Ataco/img/SantaTeresa1.jpg', 1),
(2, '/Ataco/img/SantaTeresa2.jpg', 1),
(3, '/Ataco/img/SantaTeresa3.jpg', 1),
(5, '/Ataco/img/Mirador1.jpg', 2),
(6, '/Ataco/img/Mirador2.jpg', 2),
(7, '/Ataco/img/Mirador3.jpg', 2),
(8, '/Ataco/img/Img9.jpg', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `idMunicipio` int(11) NOT NULL,
  `Nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Descripcion` text NOT NULL,
  `Ubicacion` text NOT NULL,
  `Como_Llegar` text CHARACTER SET latin1 NOT NULL,
  `Historia` text CHARACTER SET latin1 NOT NULL,
  `Alcalde` text CHARACTER SET latin1 NOT NULL,
  `Población` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Orografia` text NOT NULL,
  `ViasComunicacion` text CHARACTER SET latin1 NOT NULL,
  `DViasComunicacion` text CHARACTER SET latin1 NOT NULL,
  `Estructura` text NOT NULL,
  `Hidrografia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`idMunicipio`, `Nombre`, `Descripcion`, `Ubicacion`, `Como_Llegar`, `Historia`, `Alcalde`, `Población`, `Orografia`, `ViasComunicacion`, `DViasComunicacion`, `Estructura`, `Hidrografia`) VALUES
(1, 'Concepcion de Ataco', 'Concepcion de Ataco is a town of pre-Columbian origin. its fascinating landscapes, its cultural value and its cobbled streets were enough to name it part of the Ruta de las Flores. In the name of the town is of Nahuatl origin means \"Place of high springs\", a very successful name for a population settled between mountains at a height of 1,275 meters asl, which allows to enjoy a very cool climate in these hot times.\r\n|\r\nAtaco is known for being a very picturesque town since many of the walls have been decorated with murals alluding to Salvadoran culture.', 'Concepción de Ataco is located in the department of Ahuachapán, at 1275 m SNM, on a plateau in the Apaneca-Ilamatepec mountain range. It is part of the Ruta de las Flores. This can be reached by CA 8 from Sonsonate, 105 km, or from Ahuachapán.\r\n\r\nIt was founded by Nahua tribes. Concepción de Ataco has places of tourist attraction such as the Atzumpa pool, Los Apantes waterfalls, Salinas, viewpoints, as well as waist looms. According to some linguists, Ataco means \"Place of High Springs\". The historian Tomás Fidias Jiménez was born in this city. Its festivities are celebrated from December 11 to 15 in honor of the Virgin of Concepción.\r\n\r\nIn this town we can still see some of its cobblestone streets, a legacy of the colony. Its main means of income is coffee, other items are textiles and handicrafts.', 'If you come from San Salvador you must take the Pan-American Highway (CA-8) in the direction of Santa Ana-Sonsonate. At the point known as \"El Poliedro\" in the municipality of Lourdes, take the detour to Sonsonate on the right.\r\nAlong the way you will find the signage that tells you how to get to each destination of the Ruta de las Flores. The vehicle journey takes one hour with approximately 30 minutes.\r\nIf you go by bus, there are several options. From the West terminal in San Salvador, you can take the 205 special to $ 1.30 USD (1 hour and 15 minutes approximately), the normal 205 to $ 0.75 USD (1 hour and 45 minutes approximately). You can also take route 249 to Sonsonate-Ahuachapán.', 'This population is of pre-Columbian origin and was founded by Yaqui or Pipil Indians in the heart of the Apaneca mountain range after the eleventh century of the Vulgar Era. In náhuat this toponymic means \"place of high springs\", since it comes from at, water, spring; aeu, high, high; and co, locative suffix. In 1550 it had about 800 inhabitants. The oidor don Diego García de Palacio, in a letter of relation to King Felipe II, of March 8, 1576, says that on the high plateau of Apaneca is the town of Ataco \"of the same temper and fertility (that the others of the mountain), and very abundant of all hunting and hunting, for the many good mountains that they have for her.I had news that there were deer in it, in the way that they are those that in India of Portugal raise the stone to bezar and I made to kill some in which some stones were found, which, proven in pestilential diseases, have the same effect as those that are brought from said India.', 'Óscar Oliverio Gómez', ' 12,786', 'The most notable orographic features of the municipality are the hills: El Batellon, La empalizada, el tonconal, el cipres, el tamagaz, el arco y trompa de tunco; Las Lomas, el temblador, el triangulo, la Oscurana, La Cruz, El Esfuerzo, El Pito, El Rosario, El Bosque, La Mira, El Manzanillo, El Rotulo, San Felipe, El Ojo de Agua, El Escobal, Shucutitán, El Estoraque, Calle La Peña y Tierra Colorada', '\r\n782/5000\r\nOn the way from the city of Sonsonate to Ahuachapán, there is a series of towns with a lot of cultural tradition, natural beauties and a pleasant climate that the Sierra Apaneca - Ilamatepec offers. A winding route, full of coffee plantations between hills that includes 5 villages: Nahuizalco, Salcoatitán, Juayúa, Apaneca and Concepción de Ataco.\r\n\r\nThe town of Concepción de Taco is connected by road (CA-8) with the city of Ahuachapán, to the north, and the town of Apaneca to the south east of the municipality. By unpaved road, passable all the year, deviating from the (CA-8) near the farms Germania and El Rosario, it is communicated to the South of the town, with the towns of Jujutla and Guaymango. Neighborhood roads link cantons and hamlets with the municipal seat', 'Ataco is one of the few places in El Salvador where you can see some of its streets are paved (cobbled) which is considered a legacy of the colony.', 'This population is of pre-Columbian origin, and was founded by Yaqui Indians or Pipiles in the heart of the Sierra Apaneca, after the eleventh century of the Vulgal Era. According to Archbishop Pedro Cortes y Larraz, Ataco remained in 1770 to the parish of Ahuachapán and its population was represented by 303 families with 784 indigenous people who spoke the Nahuat language, but who also spoke and understood Spanish. In Ataco, adds Monsignor, there was a school where the Indizuelos were taught, in addition to Christian doctrine, to read and write. Throughout the colony, Ataco belonged to the administrative unit called the province of the Izalcos or Mayor of Sonsonate. | As of June 12, 1824, it was a municipality of the primitive and large department of Sonsonate. By executive decree of February 26, 1869, it became part of the district and department of Ahuachapán. During the administration of the President of the Republic Dr. Manuel Enrique Araujo and by Legislative Decree of May 11, 1911, ratified by another of April 11, 1913, the village title was granted to the people of conception of attack.', 'Its fluvial system is formed by the rivers: Guamo, El Limo o Tiapan, Matala o Los Bosques, El Naranjo, Asino, Cauta, Copinula, El Rosario, Zapua, Los Apantes o Los Amates, El Regadío, Sunzacuapa, Tepetayo y de Chacala, y las quebradas: El Muerto, Las Lajas, El Tarro, El Tanque, El Molino, Sisiniapa, El Descuaje, Atzumpa, El Tamagás, La Pena o El Pacayal, La Joya de Los Apantes, La Soledad o de Torrento, Buena Vista, El Jutal y de Quezalapa.');

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

--
-- Volcado de datos para la tabla `orografia`
--

INSERT INTO `orografia` (`idOrografia`, `Nombre`, `Descripcion`, `idMunicipio`) VALUES
(6, 'El batellón', 'It is located 5.4 km SW of the town of Concepción de Ataco. Elevation 1230m SNM.', 1),
(7, 'La empalizada', 'It is located 1.6 km to the N of the town of Concepción de Ataco. Elevation 1385m SNM', 1),
(8, 'El tronconal ', 'It is located 2 km to the SE of the town of Concepción de Ataco. Elevation 1285 SNM\r\n', 1),
(9, 'El cipres ', 'It is located 2.6 km to the S of the town of Concepción de Ataco. Elevation 1398m SNM', 1),
(10, 'El tamagas ', 'It is located 5.5 km SW of the town of Concepción de Ataco. Elevation 1091m SNM', 1),
(11, 'El arco', 'It is located 5.1 km to the S of the town of Concepción de Ataco. It serves as a boundary point with the municipality of jujutla. Elevation 1180m SNM', 1);

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
-- Volcado de datos para la tabla `turismo`
--

INSERT INTO `turismo` (`idTurismo`, `Nombre`, `Descripcion`, `idMunicipio`) VALUES
(1, 'Thermal Springs Santa Teresa', 'Santa Teresa is one of Ataco\'s biggest attractions for its visitors. Its waters and paths lead to Ausol Santa Teresa, in a tour where you can appreciate all the living nature of its flora and fauna, as well as its rich and delicious waters.\r\n\r\nIn the same way, you will be able to see all the coffee plantations and the fields where the best high altitude coffee is produced in El Salvador.\r\n\r\nSanta Teresa also offers you the opportunity to practice mountaineering with trained guides and equipment rental in case you could not bring your equipment. All these attractions are combined with the taste of its exquisite waters to turn Santa Teresa into the first stop you must make in Ataco.', 1),
(2, 'Viewpoints Divina Providencia and Cielito Lindo', 'Being a town located at a good height above sea level, Ataco offers the viewpoints Divina Providencia and Cielito Lindo, located on the road that leads to this municipality.\r\n\r\nIn them you can make a special stop to let yourself be struck by the beauty of the landscape and the imposing nature of the mountains that surround the entire Ruta de las Flores.\r\n\r\nYou can also find cafes and restaurants to enjoy national and international desserts, as well as delicious high altitude coffee from Ahuachapán.', 1),
(3, 'The Ataco Corner', 'But if it\'s about food, La Esquina de Ataco Restaurant is the right place to visit. Their typical dishes and international meals, in addition to their variety of drinks and desserts, are an attraction for the palate and a good way to recharge batteries to continue with your trip.\r\n\r\nThe Ataco Corner is located right in the central park, behind the Municipal Munipal de Ataco.\r\n\r\nIt is divided into three large rooms where you can find indoor tables, lounge tables and an outdoor space to enjoy the cool Ahuachapaneco climate.\r\n\r\nEvery weekend, La Esquina de Ataco offers live shows, dances and parties for you to enjoy in the company of your friends.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Usuario`, `Password`, `Mail`) VALUES
(1, 'Ataco', 'Ataco', 'Admin@Ataco.gob.sv');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canton`
--
ALTER TABLE `canton`
  ADD PRIMARY KEY (`idCanton`),
  ADD KEY `fk_canton` (`idMunicipio`),
  ADD KEY `idCanton` (`idCanton`);

--
-- Indices de la tabla `caserio`
--
ALTER TABLE `caserio`
  ADD PRIMARY KEY (`idCaserio`),
  ADD KEY `FK_CASerio` (`IdCanton`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `fk_comentario` (`idMunicipio`);

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
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caserio`
--
ALTER TABLE `caserio`
  MODIFY `idCaserio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `hidrografia`
--
ALTER TABLE `hidrografia`
  MODIFY `idHidrografia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `img_canton`
--
ALTER TABLE `img_canton`
  MODIFY `idImg_Canton` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_hidrografia`
--
ALTER TABLE `img_hidrografia`
  MODIFY `idImg_hidrografia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `img_municipio`
--
ALTER TABLE `img_municipio`
  MODIFY `idImg_Municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `img_orografia`
--
ALTER TABLE `img_orografia`
  MODIFY `idImg_orografia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_turismo`
--
ALTER TABLE `img_turismo`
  MODIFY `idImg_turismo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `idMunicipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `orografia`
--
ALTER TABLE `orografia`
  MODIFY `idOrografia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `turismo`
--
ALTER TABLE `turismo`
  MODIFY `idTurismo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `canton`
--
ALTER TABLE `canton`
  ADD CONSTRAINT `fk_canton` FOREIGN KEY (`idMunicipio`) REFERENCES `municipio` (`idMunicipio`);

--
-- Filtros para la tabla `caserio`
--
ALTER TABLE `caserio`
  ADD CONSTRAINT `FK_CASerio` FOREIGN KEY (`IdCanton`) REFERENCES `canton` (`idCanton`);

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `fk_comentario` FOREIGN KEY (`idMunicipio`) REFERENCES `municipio` (`idMunicipio`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
