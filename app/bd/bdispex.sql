-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2017 a las 18:48:20
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdispex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE `eps` (
  `codigo_eps` varchar(20) NOT NULL,
  `razon_eps` varchar(200) NOT NULL,
  `direccion_eps` varchar(200) NOT NULL,
  `telefono_eps` varchar(255) NOT NULL,
  `regimen_eps` varchar(100) NOT NULL,
  `representante_eps` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`codigo_eps`, `razon_eps`, `direccion_eps`, `telefono_eps`, `regimen_eps`, `representante_eps`) VALUES
('EPS022', 'EPS CONVIDA', ' Cra 58 # 9 - 97 - BOGOTA', '7868564', 'SUBSIDIADO', 'JORGE EMILIO REY'),
('EPSS02', 'SALUD TOTAL S.A. E.P.S.\r\n', 'Cra 3  # 21 - 44 - MONTERIA', '7817317', 'SUBSIDIADO', 'MARVIN PEREZ'),
('EPSS03', 'CAFESALUD E.P.S. S.A.', 'Cra 19 # 114 - 92 - MONTERIA', '7920020', 'CONTRIBUTIVO', ' CARLOS ALBERTO CARDONA MEJÍA'),
('EPSS07', 'MEDICINA INTEGRAL E.P.S.', 'Cra 44 # 142 - MONTERIA', '3067435444', 'SUBSIDIADO', 'JUAN MANUEL SANTOS'),
('EPSS33', 'SALUDVIDA S.A .E.P.S', 'Cra 2 # 226 - MONTERIA', '7856432', 'SUBSIDIADO', 'YANISAL OYOLA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`codigo_eps`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
