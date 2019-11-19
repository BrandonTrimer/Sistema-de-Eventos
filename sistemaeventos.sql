-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2019 a las 23:08:08
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemaeventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `IdAdministrador` int(3) NOT NULL,
  `NombreAdministrador` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ContraseñaAdministrador` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `NacionalidadAdministrador` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CorreoAdministrador` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `TelefonoAdministrador` int(13) NOT NULL,
  `CiAdministrador` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `IdCliente` int(3) NOT NULL,
  `NombreCliente` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ApellidoCliente` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `CorreoCliente` int(45) NOT NULL,
  `TelefonoCliente` int(13) NOT NULL,
  `CarnetCliente` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `IdEvento` int(5) NOT NULL,
  `NombreEvento` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `FechaEvento` datetime NOT NULL,
  `Administrador_IdAdministrador` int(3) NOT NULL,
  `CantidadPersonasEvento` int(4) NOT NULL,
  `LimitePersonasEvento` int(4) NOT NULL,
  `DescripcionEvento` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ImagenEvento` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento_cliente`
--

CREATE TABLE `evento_cliente` (
  `Evento_IdEvento` int(3) NOT NULL,
  `Cliente_IdCliente` int(3) NOT NULL,
  `EstadoEventoCliente` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supervisor`
--

CREATE TABLE `supervisor` (
  `IdSupervisor` int(3) NOT NULL,
  `NombreSupervisor` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ApellidoSupervisor` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `CiSupervisor` int(7) NOT NULL,
  `TelefonoSupervisor` int(13) NOT NULL,
  `Administrador_IdAdministrador` int(3) NOT NULL,
  `CorreoSupervisor` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`IdAdministrador`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IdCliente`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`IdEvento`),
  ADD KEY `Administrador_IdAdministrador` (`Administrador_IdAdministrador`);

--
-- Indices de la tabla `evento_cliente`
--
ALTER TABLE `evento_cliente`
  ADD KEY `Cliente_IdCliente` (`Cliente_IdCliente`),
  ADD KEY `Evento_IdEvento` (`Evento_IdEvento`);

--
-- Indices de la tabla `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`IdSupervisor`),
  ADD KEY `Administrador_IdAdministrador` (`Administrador_IdAdministrador`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`Administrador_IdAdministrador`) REFERENCES `administrador` (`IdAdministrador`);

--
-- Filtros para la tabla `evento_cliente`
--
ALTER TABLE `evento_cliente`
  ADD CONSTRAINT `evento_cliente_ibfk_1` FOREIGN KEY (`Cliente_IdCliente`) REFERENCES `cliente` (`IdCliente`),
  ADD CONSTRAINT `evento_cliente_ibfk_2` FOREIGN KEY (`Evento_IdEvento`) REFERENCES `evento` (`IdEvento`);

--
-- Filtros para la tabla `supervisor`
--
ALTER TABLE `supervisor`
  ADD CONSTRAINT `supervisor_ibfk_1` FOREIGN KEY (`Administrador_IdAdministrador`) REFERENCES `administrador` (`IdAdministrador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
