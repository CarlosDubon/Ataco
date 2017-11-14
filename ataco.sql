-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2017 a las 00:27:25
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(1, 'Carlos', 'carlosminero@gmail.com', 'Muy buena pagina', '2017-11-11 04:25:33', 1),
(2, 'Gerardo', 'gerardo@gmail.com', 'Sos pupu', '2017-11-12 02:52:02', 1),
(3, 'Ejemlplo', 'ejemplo@gmail.com', 'Mensaje generico', '2017-11-12 14:50:43', 1);

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
  `Estructura` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`idMunicipio`, `Nombre`, `Descripcion`, `Ubicacion`, `Como_Llegar`, `Historia`, `Alcalde`, `Población`, `Orografia`, `ViasComunicacion`, `DViasComunicacion`, `Estructura`) VALUES
(1, 'Concepcion de Ataco', 'Concepción de Ataco es un pueblo de origen precolombino. sus fascinantes paisajes, su valor cultural y sus calles empedradas fueron suficientes para nombrarla parte de la Ruta de las Flores. En nombre del pueblo es de origen nahuatl significa “Lugar de elevados manantiales“, un nombre muy acertado para una población asentada entre montañas a una altura de 1,275 metros snm, lo que permite gozar de un clima muy fresco en estos tiempos calurosos.\r\n|\r\nAtaco es conocido por ser un pueblo muy pintoresco ya que muchos de los muros han sido decorados con murales alusivos a la cultura salvadoreña.', 'Concepción de Ataco esta localizada en el departamento de Ahuachapán, a 1275 m SNM, en una meseta de la sierra Apaneca-Ilamatepec. Es parte de la Ruta de las Flores. A esta podemos llegar por la CA 8 desde Sonsonate, 105 km, o desde Ahuachapán.\r\n\r\nFue fundada por tribus nahuas. Concepción de Ataco tiene lugares de atracción turística como, la piscina de Atzumpa, las cascadas de Los Apantes, Salinas, miradores, además de telares de cintura. Según algunos lingüistas, Ataco quiere decir \"Lugar de Elevados Manantiales\". El historiador Tomás Fidias Jiménez nació en esta ciudad. Sus fiestas patronales son celebradas del 11 al 15 de diciembre en honor a la Virgen de Concepción.\r\n\r\nEn este poblado todavía podemos ver algunas de sus calles empedradas, un legado de la colonia. Su principal medio de ingreso es el café, otros rubros son el textil y las artesanías.', 'Si procede de San Salvador deberá tomar la Carretera Panamericana (CA-8) en dirección a Santa Ana- Sonsonate. En el punto conocido como “El Poliedro” del municipio de Lourdes deberá tomar el desvío hacia Sonsonate que está a la derecha.\r\nA lo largo del camino encontrará la señalización que le indica cómo llegar a cada destino de la Ruta de las Flores. El recorrido en vehículo lleva una hora con 30 minutos aproximadamente.\r\nSi va en autobús, hay varias opciones. Desde la terminal de Occidente en San Salvador, puede tomar la 205 especial a $1.30 USD (1 hora y 15 minutos aproximadamente), la 205 normal a $0.75 USD (1 hora y 45 minutos aproximadamente). También podrá abordar la ruta 249 con destino Sonsonate-Ahuachapán.', 'Esta población es de origen precolombino y fue fundada por indios yaquis o pipiles en el corazón de la sierra de Apaneca con posterioridad al undécimo siglo de la Era Vulgar. En idioma náhuat este toponímico significa \"lugar de elevados manantiales\", ya que proviene de at, agua, manantial; aeu, elevado, alto; y co, sufijo locativo.| En 1550 tenía unos 800 habitantes. El oidor don Diego García de Palacio, en carta de relación al Rey Felipe II, de 8 de marzo de 1576, dice que en lo alto de la sierra de Apaneca está el pueblo de Ataco \"del mismo temple y fertilidad (que los otros de la sierra), y muy abundante de toda montería y caza, por los muchos y buenos montes que para ella tienen. Tuve noticias que había en él venados, de la forma que son los que en la India de Portugal crían la piedra bezar e hice matar algunos en que se hallaron algunas piedras, que probadas en enfermedades pestilentes hacen el mismo efecto que las que se traen de la dicha India. ', 'Óscar Oliverio Gómez', ' 12,786', 'Los rasgos orográficos más notables del municipio son los cerros: El Batellon, La empalizada, el tonconal, el cipres, el tamagaz, el arco y trompa de tunco; Las Lomas, el temblador, el triangulo, la Oscurana, La Cruz, El Esfuerzo, El Pito, El Rosario, El Bosque, La Mira, El Manzanillo, El Rotulo, San Felipe, El Ojo de Agua, El Escobal, Shucutitán, El Estoraque, Calle La Peña y Tierra Colorada', 'La villa de Concepción de taco se comunica a través de la carretera (CA-8) con la ciudad de Ahuachapán, al Norte, y la villa de Apaneca a Sur Este del municipio. Por carretera sin pavimentar, transitable todo el año, desviandose de la (CA-8) cerca de las fincas Germania y El Rosario, se comunica al Sur de la vila, con los pueblos de Jujutla y Guaymango. Caminos vecinales enlazan cantones y caserios con la cabecera municipal', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, temporibus, cum vero architecto voluptatum vel nemo. Iure eius id, dolor blanditiis! Porro eligendi iste deserunt recusandae dolorum error velit fugiat. ipsum dolor sit amet, consectetur adipisicing elit. Quos cum perferendis tenetur doloremque laudantium distinctio omnis aspernatur necessitatibus deleniti, placeat similique, iure labore unde laboriosam. Provident labore libero amet expedita. ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum sint adipisci obcaecati cum voluptas illum, dolorem itaque, accusamus repellendus quam suscipit libero eius porro amet dignissimos aliquam molestias ipsum!', 'Esta población es de origen precolombino, y fue fundada por indios yaquis o pipiles en el corazón de la Sierra Apaneca, con posterioridad al undécimo siglo de Era Vulgal. Según el arzobispo don Pedro Cortes y Larraz, Ataco permanecía en 1770 a la parroquia de Ahuachapán y su población estaba representada por 303 familias con 784 personas indígenas que hablaban el idioma nahuat, pero que hablaban y entendían también el castellano. En Ataco, agrega monseñor, había una escuela donde se enseñaba a los indizuelos, además de la doctrina cristiana, a leer y escribir. Durante toda la colonia, Ataco perteneció a la unidad administrativa llamada provincia de los Izalcos o Alcaldía mayor de Sonsonate. A partir del 12 de junio de 1824, fue municipio del primitivo y gran departamento de Sonsonate. Por decreto Ejecutivo de 26 de febrero de 1869, entro a formar parte del distrito y departamento de Ahuachapán. Durante la administración del Presidente de la Republica doctor Manuel Enrique Araujo y por Decreto Legislativo de 11 de mayo de 1911, ratificado por otro de 11 de abril de 1913, se otorgó el título de villa al pueblo de concepción de ataco. ');

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
(6, 'El batellón', 'Está situado 5.4 kms al SW de la villa de Concepción de Ataco. Elevación 1230m SNM. ', 1),
(7, 'La empalizada', 'Está situado 1.6 kms al N de la villa de Concepción de Ataco. Elevación 1385m SNM ', 1),
(8, 'El tronconal ', 'Está situado 2 kms al SE de la villa de Concepción de Ataco. Elevación 1285 SNM \r\n\r\n', 1),
(9, 'El cipres ', 'Está situado 2.6 kms al S de la villa de Concepción de Ataco. Elevación 1398m SNM ', 1),
(10, 'El tamagas ', 'Está situado 5.5 kms al SW de la villa de Concepción de Ataco. Elevación 1091m SNM ', 1),
(11, 'El arco', 'Está situado 5.1 kms al S de la villa de Concepción de Ataco. Sirve de punto limítrofe con el municipio de jujutla. Elevación 1180m SNM', 1);

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
(1, 'Aguas Termales Santa Teresa\r\n', 'Santa Teresa es una de las mayores atracciones de Ataco para sus visitantes. Sus aguas y sus senderos conducen al Ausol Santa Teresa, en un recorrido donde podrás apreciar toda la naturaleza viva de su flora y fauna, además de sus ricas y deliciosas aguas.\r\n\r\nDe igual forma, podrás ver todos los cafetales y los campos donde se produce el mejor café de altura en El Salvador.\r\n\r\nSanta Teresa te ofrece también la oportunidad de practicar el alpinismo con guías capacitados y alquiler de equipo por si no pudiste llevar tus implementos. Todas estas atracciones se combinan con el sabor de sus exquisitas aguas para convertir a Santa Teresa en la primera parada que deberás hacer en Ataco.', 1),
(2, 'Miradores Divina Providencia y Cielito Lindo', 'Al ser un pueblo ubicado a buena altura sobre el nivel del mar, Ataco ofrece los miradores Divina Providencia y Cielito Lindo, ubicados en la carretera que conduce a este municipio.\r\n\r\nEn ellos podrás hacer una parada especial para dejarte impactar por la belleza del paisaje y lo imponente de las montañas que rodean a toda la Ruta de las Flores.\r\n\r\nTambién podrás encontrar cafeterías y restaurantes para disfrutar de postres nacionales e internacionales, así como del delicioso café de altura de Ahuachapán.', 1),
(3, 'La Esquina de Ataco', 'Pero si de comida se trata, el Restaurante La Esquina de Ataco es el lugar indicado para visitar. Sus platillos típicos y comidas internacionales, además de su variedad de bebidas y postres, son un atractivo para el paladar y una buena forma de recargar baterías para continuar con tu viaje.\r\n\r\nLa Esquina de Ataco se ubica justo en el parque central, por detrás de la Alcaldía Munipal de Ataco.\r\n\r\nSe divide en tres salones grandes donde puedes encontrar mesas bajo techo, mesas estilo lounge y un espacio al aire libre para disfrutar del fresco clima ahuachapaneco.\r\n\r\nCada fin de semana, La Esquina de Ataco ofrece espectáculos en vivo, bailes y fiestas para que disfrutes en compañía de tus amigos.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Usuario`, `Password`) VALUES
(1, 'Ataco', 'Ataco');

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
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
