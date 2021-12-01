-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 20:15:12
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbmuebleria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id` int(100) NOT NULL,
  `nombre_articulo` varchar(60) NOT NULL,
  `precio` int(40) NOT NULL,
  `proveedor` varchar(60) NOT NULL,
  `existencias` int(100) NOT NULL,
  `fech_adquisicion` date NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `nombre_articulo`, `precio`, `proveedor`, `existencias`, `fech_adquisicion`, `descripcion`) VALUES
(1, 'Silla', 100, 'Carpintería popelle', 10, '0000-00-00', 'Es una silla en la cual puedes sentarte'),
(2, 'Silla', 100, 'Carpintería popelle', 10, '2021-11-19', 'Es una silla en la cual puedes sentarte'),
(4, 'Súper Meza ', 300, 'Carpintería Los Santos', 100, '2004-09-10', 'Una mesa para ser genial'),
(6, 'Peinador', 500, 'Carpintería popelle', 300, '2020-05-04', 'Es un peinador para el cuarto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(100) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido_paterno` varchar(60) NOT NULL,
  `apellido_materno` varchar(60) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `sueldo` int(100) NOT NULL,
  `fech_nacimiento` date NOT NULL,
  `correo_electronico` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `genero`, `sueldo`, `fech_nacimiento`, `correo_electronico`) VALUES
(1, 'Edwin', 'Martinez ', 'Mendoza', 'Hombre', 0, '2021-11-25', '0'),
(2, 'Edwin', 'Martinez ', 'Mendoza', 'Hombre', 200, '2021-11-25', 'Mauricio@hotmail.com'),
(4, 'Maria', 'Moreno', 'De la Cruz', 'Mujer', 100, '2014-06-02', 'Maria@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(60) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(40) NOT NULL,
  `fech_registro` date NOT NULL,
  `correo_electronico` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `fecha_nacimiento`, `genero`, `fech_registro`, `correo_electronico`) VALUES
(1, 'Pepe ', 'The', 'Frog', '2021-11-09', 'Hombre', '2021-11-30', 'pepsi@gmail.com'),
(2, 'Pepe ', 'The', 'Frog', '2021-11-03', 'Hombre', '2021-11-04', 'pepsi@gmail.com'),
(4, 'Edwin', 'Martinez', 'Mendoza', '2004-03-07', 'Masculino', '2021-11-29', 'edwin@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `num_venta` int(100) NOT NULL,
  `precio` int(60) NOT NULL,
  `fecha_venta` date NOT NULL,
  `producto_vendido` varchar(100) NOT NULL,
  `promocion` varchar(100) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `vendedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`num_venta`, `precio`, `fecha_venta`, `producto_vendido`, `promocion`, `cliente`, `vendedor`) VALUES
(1, 0, '2021-11-23', 'Silla  Tactica', 'Sin promoción', 'Arturo', 'Manuel'),
(2, 0, '2021-11-04', 'Silla  Tactica', 'Sin promoción', 'Arturo', 'Manuel'),
(3, 300, '2021-11-28', 'Silla  Tactica', 'Sin promoción', 'Arturo', 'Manuel'),
(6, 200, '2021-11-30', 'Mesa voladora', '50% descuento', 'Pepe the frog', 'Emmanuel');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`num_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `num_venta` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
