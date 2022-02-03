-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2022 a las 18:08:36
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sirncedb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestap3`
--

CREATE TABLE `encuestap3` (
  `id` int(4) NOT NULL,
  `fecha` date NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `edad` int(3) NOT NULL,
  `instruccion` varchar(50) NOT NULL,
  `residencia` varchar(50) NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `destino` varchar(50) NOT NULL,
  `agencia` varchar(5) NOT NULL,
  `redes` int(1) NOT NULL,
  `amigos` int(1) NOT NULL,
  `experiencias` int(1) NOT NULL,
  `ruta` varchar(10) NOT NULL,
  `actividades` varchar(50) NOT NULL,
  `viaje` varchar(20) NOT NULL,
  `num_personas` int(3) NOT NULL,
  `lugar_diferente` int(1) NOT NULL,
  `descansar` int(2) NOT NULL,
  `diversion` int(2) NOT NULL,
  `disfrutar` int(2) NOT NULL,
  `enrrequesimiento` int(2) NOT NULL,
  `vacaciones` int(2) NOT NULL,
  `negocio` int(2) NOT NULL,
  `acto_social` int(2) NOT NULL,
  `eleccion` varchar(50) NOT NULL,
  `tiempo` varchar(50) NOT NULL,
  `transporte` varchar(50) NOT NULL,
  `servicioTuristico` varchar(50) NOT NULL,
  `redSocial` varchar(50) NOT NULL,
  `dias` int(3) NOT NULL,
  `gastar` int(4) NOT NULL,
  `alojamiento` int(1) NOT NULL,
  `restauracion` int(1) NOT NULL,
  `ocio` int(1) NOT NULL,
  `experiencia` int(1) NOT NULL,
  `viaje_global` int(1) NOT NULL,
  `artesanias` int(1) NOT NULL,
  `atractivos` int(1) NOT NULL,
  `flora_fauna` int(1) NOT NULL,
  `actividades_culturales` int(1) NOT NULL,
  `calidad` int(1) NOT NULL,
  `recomendacion` int(1) NOT NULL,
  `volver_visitar` int(1) NOT NULL,
  `gasto_visita` int(5) NOT NULL,
  `remuneracion` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `encuestap3`
--

INSERT INTO `encuestap3` (`id`, `fecha`, `sexo`, `edad`, `instruccion`, `residencia`, `lugar`, `destino`, `agencia`, `redes`, `amigos`, `experiencias`, `ruta`, `actividades`, `viaje`, `num_personas`, `lugar_diferente`, `descansar`, `diversion`, `disfrutar`, `enrrequesimiento`, `vacaciones`, `negocio`, `acto_social`, `eleccion`, `tiempo`, `transporte`, `servicioTuristico`, `redSocial`, `dias`, `gastar`, `alojamiento`, `restauracion`, `ocio`, `experiencia`, `viaje_global`, `artesanias`, `atractivos`, `flora_fauna`, `actividades_culturales`, `calidad`, `recomendacion`, `volver_visitar`, `gasto_visita`, `remuneracion`) VALUES
(8, '2022-01-12', 'M', 18, 'ninguno', 'Machala', 'si', 'si', '3', 3, 3, 5, 'si', 'Relatos y leyendas anscestrales', 'en familia', 6, 4, 3, 4, 5, 2, 5, 5, 4, 'Atractivos turísticos naturales', 'Más de un mes', 'automóvil', 'alimentos y bebidas', 'twitter', 2, 34, 4, 5, 3, 5, 5, 5, 4, 5, 5, 5, 5, 5, 34, 345),
(11, '2022-01-04', 'M', 0, 'ninguno', 'awe', 'no', 'no', '3', 5, 5, 5, 'si', 'Observación de la belleza paisajística', 'en familia', 7, 5, 5, 5, 5, 5, 5, 5, 5, 'f.Clima', 'Más de un mes', 'ninguno', 'alojamiento', 'twitter', 4, 74, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 456, 7000),
(12, '2022-01-04', 'M', 60, 'ninguno', 'uK', 'no', 'no', '1', 5, 5, 5, 'si', 'Observación de la belleza paisajística', 'en familia', 7, 5, 5, 5, 5, 5, 5, 5, 5, 'f.Clima', 'Más de un mes', 'ninguno', 'alojamiento', 'twitter', 4, 74, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 456, 7000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichapatrimoniocultural`
--

CREATE TABLE `fichapatrimoniocultural` (
  `id_ficha_cultural` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nombre_patrimonio` varchar(200) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `caracteristicas` varchar(500) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `canton` varchar(50) NOT NULL,
  `parroquia` varchar(50) NOT NULL,
  `comunidad` varchar(100) NOT NULL,
  `tipoPatrimonioOficial` varchar(50) NOT NULL,
  `registro` varchar(50) NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fichapatrimoniocultural`
--

INSERT INTO `fichapatrimoniocultural` (`id_ficha_cultural`, `fecha`, `nombre_patrimonio`, `tipo`, `caracteristicas`, `provincia`, `canton`, `parroquia`, `comunidad`, `tipoPatrimonioOficial`, `registro`, `img`) VALUES
(50, '2022-01-07', 'Centro Histórico de Cuenca Actualizado ', 'Tangible', 'Su declaratoria se dio en 1999. La ciudad ilustra la implantación de la planificación urbana en el Renacimiento en Américas, también se destaca la fusión de diferentes sociedades y culturas de Latinoamérica.', 'Azuay', 'Cuenca', 'Sucre', 'Mestiza', 'Internacional', 'UNESCO', 0x6375656e63612e6a7067),
(62, '2022-01-06', 'Mirador del Panecillo', 'Tangible', 'Es el más importante mirador natural de la ciudad de Quito - Ecuador, Patrimonio Cultural de la Humanidad. Junto a la Virgen del Panecillo, podrás apreciar el Centro Histórico de Quito ¡No puedes dejar de visitar este lugar!', 'Quito', 'Quitumbe', 'San Cayetano ', 'Meztiza', 'Nacional', 'UNESCO', ''),
(67, '2022-01-20', 'Playa', 'Intangible', 'Zxcvbonm,s.+aaweaw', 'Sto. Domingo de los Tsachilas', 'sdfs', 'Pujilí', 'sdf', 'Nacional', 'INPC', 0x64697365c3b16f205369726e63655f64622e4a5047);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichapatrimonionatural`
--

CREATE TABLE `fichapatrimonionatural` (
  `id_ficha_natural` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `canton` varchar(100) NOT NULL,
  `parroquia` varchar(100) NOT NULL,
  `geografia` varchar(200) NOT NULL,
  `floraCaracteristica` varchar(1000) NOT NULL,
  `faunaCaracteristica` varchar(1000) NOT NULL,
  `actividades` varchar(1000) NOT NULL,
  `recomendaciones` varchar(1000) NOT NULL,
  `facilidades` varchar(1000) NOT NULL,
  `comollegar` varchar(1000) NOT NULL,
  `imagen` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fichapatrimonionatural`
--

INSERT INTO `fichapatrimonionatural` (`id_ficha_natural`, `fecha`, `nombre`, `descripcion`, `provincia`, `canton`, `parroquia`, `geografia`, `floraCaracteristica`, `faunaCaracteristica`, `actividades`, `recomendaciones`, `facilidades`, `comollegar`, `imagen`) VALUES
(14, '2022-01-19', 'Laguna Quilotoa', 'Tigua es una pequeña comunidad ubicada muy cerca de la laguna del Quilotoa, a una hora de la ciudad de Latacunga, capital de la provincia de Cotopaxi, en la vía Pujilí.', 'Pujilí', 'Cotopaxi', 'Pujilí', '0°51′40″S 78°53′50″O', 'Plantas ', 'Culebras y Osos ', 'Bañarse ', 'Caminar mucho ', 'carretera hasta el lugar ', 'caminar 100 metro a la derecha', 0x7175696c6f746f612e6a7067),
(15, '2022-01-30', 'Laguna Quilotoa3', 'Tigua es una pequeña comunidad ubicada muy cerca de la laguna del Quilotoa, a una hora de la ciudad de Latacunga, capital de la provincia de Cotopaxi, en la vía Pujilí.', 'Cotopaxi', 'Pujilí', 'PujilíParr', '0°51′40″S 78°53′50″O', 'Plantas ', 'Culebras y Osos ', 'natacion ', 'tener cuidado', 'Hoteles y hosteria', 'caminar 100 metro a la derecha', 0x7175696c6f746f612e6a7067),
(16, '2022-02-03', 'Volcan Cotopaxi ', 'El Cotopaxi se encuentra sobre la Cordillera Oriental (Real), a una distancia de 35 km al Noreste de Latacunga y de 45 km al Sureste de Quito. Su edificio forma un cono simétrico con pendientes de hasta 35° y un diámetro basal de ~20 km, mientras que el diámetro del cráter varía entre 800 m en sentido Norte-Sur y 650 m en sentido Este-Oeste. El Cotopaxi está rodeado por páramos que bordean los 3000 msnm y por otros volcanes como Sincholahua (4873 msnm), Quilindaña (4876 msnm) y Rumiñahui (4722 msnm).', 'Cotopaxi', 'Latacunga', 'none', '0,683º S; 78,436º W', 'carac flora', 'fauna Carac', 'Nada de nadar', 'Visitelo', 'caminando ', 'a pie o caminando ', 0x70686f746f31363432353637353332202833292e6a706567);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(5) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `clave`) VALUES
(30, 'hernan', 'admin'),
(50, 'jose', '456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuestap3`
--
ALTER TABLE `encuestap3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fichapatrimoniocultural`
--
ALTER TABLE `fichapatrimoniocultural`
  ADD PRIMARY KEY (`id_ficha_cultural`);

--
-- Indices de la tabla `fichapatrimonionatural`
--
ALTER TABLE `fichapatrimonionatural`
  ADD PRIMARY KEY (`id_ficha_natural`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuestap3`
--
ALTER TABLE `encuestap3`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `fichapatrimoniocultural`
--
ALTER TABLE `fichapatrimoniocultural`
  MODIFY `id_ficha_cultural` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `fichapatrimonionatural`
--
ALTER TABLE `fichapatrimonionatural`
  MODIFY `id_ficha_natural` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
