-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generaci√≥n: 28-04-2019 a las 21:51:18
-- Versi√≥n del servidor: 10.1.37-MariaDB
-- Versi√≥n de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `ID` int(11) NOT NULL,
  `Especialidad` varchar(250) NOT NULL,
  `Doctor` varchar(30) NOT NULL,
  `Direccion` text NOT NULL,
  `Barrio` varchar(250) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `Partido` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_customer`
--

INSERT INTO `tbl_customer` (`ID`, `Especialidad`, `Doctor`, `Direccion`, `Barrio`, `Telefono`, `Partido`) VALUES
(1, 'ALERGIA', 'KOLODICKI, RUBEN', 'MITRE 3438', 'SAN MARTIN', '4724-2145/2198', 'SAN MARTIN'),
(2, 'ALERGIA', 'VANZETTI, OSVALDO', 'LAVALLE 2746', 'VILLA BALLESTER', '5263-7744', 'SAN MARTIN'),
(3, 'ALERGIA', 'NAJMIAS, CARLOS', 'CORDOBA 111', 'VILLA BALLESTER', '4768-9472', 'SAN MARTIN'),
(4, 'ANATOMIA PATOLOGICA', 'SOLERNOU, VERONICA', 'ALVEAR 2307', 'VILLA BALLESTER', '4887-3885', 'SAN MARTIN'),
(5, 'CARDIOLOGIA', 'AMOROSO, GABRIELA', 'BIARRITZ 3649', 'CHILAVERT', '4720-8557', 'SAN MARTIN'),
(6, 'CARDIOLOGIA', 'BALOG, ERNESTINA', 'LINCOLN 3199-1ro.D', 'SAN MARTIN', '4753-4665/4401-1242', 'SAN MARTIN'),
(7, 'CARDIOLOGIA', 'RODRIGUEZ, NORBERTO', 'MORENO 4047', 'SAN MARTIN', '4713-5533/4755-2494', 'SAN MARTIN'),
(8, 'CARDIOLOGIA', 'BUSTAMANTE, GRACIELA', 'SAABEDRA 2098', 'SAN MARTIN', '4755-7311', 'SAN MARTIN'),
(9, 'CARDIOLOGIA', 'NIEVES, ELSA', 'SAABEDRA 2098', 'SAN MARTIN', '4755-7311', 'SAN MARTIN'),
(10, 'CARDIOLOGIA', 'FERNANDEZ, DANIEL', 'MITRE 3438', 'SAN MARTIN', '4724-2145/2198', 'SAN MARTIN'),
(11, 'CARDIOLOGIA', 'PETRUCCELLI, ANDRIANA', 'LAVALLE', 'VILLA BALLESTER', '2063-7744', 'SAN MARTIN'),
(12, 'CARDIOLOGIA', 'LLOIS ,SUSANA', 'CORDOBA 111', 'VILLA BALLESTER', '4768-9472', 'SAN MARTIN'),
(13, 'CARDIOLOGIA', 'CARRERO, CELESTE', 'BOLIVIA 3618', 'VILLA BALLESTER', '4764-6114', 'SAN MARTIN'),
(14, 'AUDIOLOGIA', 'DE LELLIS, SILVANA', 'SARMIENTO 2091', 'SAN MARTIN', '4839-0390', 'SAN MARTIN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `cargo` varchar(1) NOT NULL,
  `socio` varchar(255) NOT NULL,
  `afiliado` varchar(255) NOT NULL,
  `dni` varchar(25) NOT NULL,
  `plan1` varchar(150) NOT NULL,
  `plan2` varchar(150) NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `clave`, `cargo`, `socio`, `afiliado`, `dni`, `plan1`, `plan2`, `foto`) VALUES
(1, 'antonio', 'edinarweb@gmail.com', '202cb962ac59075b964b07152d234b70', '1', '00003671-01', 'Antonio Bernabeu', '95588173', 'PLAN 200', 'PLAN  CON COSEGURO', '1556409804_1556405614_1556402625_tito1.jpg'),
(2, 'Lorena', 'lore@gmail.com', 'bb7946e7d85c81a9e69fee1cea4a087c', '2', '00003671-01', 'Martinez Sosa, Lorena', '96587456', 'PLAN 200', 'PLAN CON COSEGURO', '1556405614_1556402625_tito1.jpg'),
(3, 'antonio', 'anto@gmail.com', 'bb7946e7d85c81a9e69fee1cea4a087c', '2', '00003259-01', 'Mejias Bernabeu, Antonio', '95588173', 'PLAN MEDICARDIO', 'PLAN SIN COSEGURO', '1556412538_1556409804_1556405614_1556402625_tito1.jpg'),
(4, 'veronica', 'veri@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2', '00008457-01', 'Paola Bianco, Veronica', '29756011', 'PLAN MEDICARDIO', 'PLAN SIN COSEGURO', '1556412616_1556402625_tito1.jpg'),
(5, 'chuchi', 'chuchi@gmail.com', '3546ab441e56fa333f8b44b610d95691', '2', '0000682-01', 'Jacinto Reinaldo, Chuchi ', '95784585', 'PLAN 200', 'PLAN CON COSEGURO', 'imagen.jpg'),
(6, 'andrei', 'andrei@gmail.com', '3546ab441e56fa333f8b44b610d95691', '2', '00004609-01', 'Pereira Greco, Andrei', '94711135', 'PLAN 200', 'CON COSEGURO', 'imagen.jpg'),
(7, 'Juan', 'donjuan@gmail.com', '202cb962ac59075b964b07152d234b70', '2', '00003671-01', 'Fernandez Sosa, Juan', '961254875', 'PLAN 200', 'PLAN CON COSEGURO', '1556454174_1556405614_1556402625_tito1.jpg'),
(8, 'soledad', 'sol@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2', '00003671-01', 'Garcia Lorca, Soledad', '961254875', 'PLAN MEDICARDIO', 'PLAN SIN COSEGURO', '1556475236_1556475074_1556405614_1556402625_tito1.jpg'),
(9, 'Patricia', 'patri@gmail.com', '6786f3c62fbf9021694f6e51cc07fe3c', '2', '00003671-01', 'Bianco Paolo, Patricia', '961254875', 'PLAN 200', 'PLAN CON COSEGURO', '1556475179_1556405614_1556402625_tito1.jpg'),
(10, 'Andres', 'andres@gmail.com', 'bb7946e7d85c81a9e69fee1cea4a087c', '2', '00003671-01', 'Fernandez Sosa, Andres', '961254875', 'PLAN 200', 'PLAN CON COSEGURO', '1556475074_1556405614_1556402625_tito1.jpg');

--
-- √ˇndices para tablas volcadas
--

--
-- Indices de la tabla `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
