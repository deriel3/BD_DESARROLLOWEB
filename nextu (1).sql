-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2018 a las 05:10:08
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nextu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_id` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `start` date NOT NULL,
  `start_hour` time DEFAULT NULL,
  `end` date DEFAULT NULL,
  `end_hour` time DEFAULT NULL,
  `completo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id`, `usuario_id`, `title`, `start`, `start_hour`, `end`, `end_hour`, `completo`) VALUES
('18578', 'jose@gmail.com', 'evento', '2018-11-17', '00:00:00', '0000-00-00', '00:00:00', 1),
('54494', 'jose@gmail.com', 'asd', '2018-11-16', '00:00:00', '0000-00-00', '00:00:00', 1),
('92823', 'jose@gmail.com', 'evento2', '2018-11-17', '06:30:00', '2018-11-17', '18:00:00', 0),
('93192', 'jose@gmail.com', 'asd', '2018-11-25', '00:00:00', '0000-00-00', '00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`email`, `password`, `nombre`, `apellido`, `fecha_nacimiento`) VALUES
('daniel@gmail.com', '$2y$10$JtfWYWKDPHR4ChXAD80bYeDWklDhBcskaTQHiBm04HmTcPNCU3mT2', 'Daniel', 'Ruiz', '1996-12-01'),
('jose@gmail.com', '$2y$10$LeyCoQn6WTZB3fEZQGG/F.UcWj.kYMAjkQn.jBVXht97o2qA878Ua', 'Jose', 'Villa', '1994-12-01'),
('juan@gmail.com', '$2y$10$cuPLNPCNGkI2dcECHgA68uf4m0jTifUru/W5xbJp7W6vxuOsT1W.G', 'Juan', 'Salas', '1994-12-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`usuario_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
