-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2023 a las 03:35:48
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pasteles`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AgregarPastel` (IN `PastelID` INT, IN `Nombre` VARCHAR(50), IN `Precio` DECIMAL(10,2))   begin
insert into Pastel (PastelID, Nombre, Precio)
values (PastelID, Nombre, Precio);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AgregarPasteleros` (IN `Nombre` VARCHAR(50), IN `Apellido` VARCHAR(50), IN `Alias` VARCHAR(10), IN `Telefono` VARCHAR(10), IN `AñosTrabajados` INT)   begin
insert into Pastelero (Nombre, Apellido, Alias, Telefono, AñosTrabajados)
values (Nombre, Apellido, Alias, Telefono, AñosTrabajados);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ListarPastelerosCon3AñosDeExperiencia` ()   begin
select * from Pastelero where AñosTrabajados=3;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ListarPasteles` ()   begin
select * from Pastel;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ListarPastelesConIngredientesEnCantidadDoble` ()   begin
select * from PastelIngrediente where Cantidad =2;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ClienteID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ClienteID`, `Nombre`, `Direccion`, `Telefono`) VALUES
(1, 'Alberto', 'Calle Principal, Puebla', '231-100-2478'),
(2, 'Roberto', 'Calle de las Flores, Michoacán', '231-103-4732'),
(3, 'Ernesto', 'Calle Cerezos, Colima', '231-297-4201'),
(4, 'Heriberto', 'Callejón de Tavira, Monterrey', '231-962-9716'),
(5, 'Adolfo', 'Calle Ñandu, Veracruz', '231-371-2814'),
(6, 'Cliente6', 'Calle B, Municipio', '787-654-3210'),
(7, 'Cliente7', 'Calle C, Colonia', '037-654-3210'),
(8, 'Cliente8', 'Calle B, Ciudad', '621-654-3210'),
(9, 'Cliente9', 'Calle C, Colonia', '407-654-3210'),
(10, 'ClienteA', 'Calle B, Ciudad', '000-654-3210');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `clientes_pasteles`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `clientes_pasteles` (
`Clientela de Pastelería` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `fecha_pedido_de_cliente`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `fecha_pedido_de_cliente` (
`PedidoID` int(11)
,`Nombre` varchar(50)
,`Direccion` varchar(100)
,`FechaPedido` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `info_ingredientes`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `info_ingredientes` (
`IngredienteID` int(11)
,`Nombre` varchar(50)
,`Cantidad` int(11)
,`Descripcion` varchar(200)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingrediente`
--

CREATE TABLE `ingrediente` (
  `IngredienteID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ingrediente`
--

INSERT INTO `ingrediente` (`IngredienteID`, `Nombre`, `Descripcion`) VALUES
(1, 'Cacao', 'Cacao molido para darle sabor al merengue'),
(2, 'Galletas Marias', 'Galletas marca Gamesa para pastel de limón'),
(3, 'Galletas Oreo', 'Galletas tipo sandwich sabor chocolate con vainilla para pastel oreo'),
(1001, 'Harina', 'Polvo para que la masa del pastel no se pegue'),
(1002, 'Azúcar', 'Azúcar mascabada recomendada para el endulzamiento del pan'),
(1003, 'Leche', 'Marca Lala deslactosada, verificar caducidad'),
(1004, 'Crema', 'Media crema de caja lala'),
(1005, 'Fresas', 'Fruta para pastel de fresas'),
(1006, 'Cajeta', 'Dulce para decorar'),
(1007, 'Carnation', 'Leche evaporada'),
(1008, 'Pasas', 'Pasitas para decorar'),
(1009, 'Almendras', 'Almendras que sirven para endulzar'),
(1010, 'Cerezas', 'El toque final del pastel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pastel`
--

CREATE TABLE `pastel` (
  `PastelID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pastel`
--

INSERT INTO `pastel` (`PastelID`, `Nombre`, `Precio`) VALUES
(501, 'Pastel de Chocolate', '38.99'),
(502, 'Pastel de Fresa', '37.49'),
(503, 'Pastel de Almendra', '35.64'),
(504, 'Pastel de Coco', '55.50'),
(505, 'Pastel de Oreo', '48.39'),
(506, 'Pastel de Cajeta', '37.99'),
(507, 'Pastel de Tres Leches', '46.99'),
(508, 'Pastel de Gansito', '48.00'),
(509, 'Pastel de Limón', '25.53'),
(510, 'Pastel de Piñon', '22.12'),
(511, 'Pastel de Queso con Zarzamora', '22.83'),
(512, 'Pastel de Mora Azul', '73.13'),
(513, 'Pastel de Moka con Fresas decorativas', '53.43'),
(514, 'Pastel de Capuchino', '36.84'),
(515, 'Pastel de Panditas con Hersheys', '57.74'),
(516, 'Pastel de Frutas Estilo Bob Esponja', '74.24'),
(517, 'Pastel de Melocotón', '57.38'),
(518, 'Pastel de Sandía con Melón', '78.54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pastelero`
--

CREATE TABLE `pastelero` (
  `PasteleroID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Alias` varchar(10) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `AñosTrabajados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pastelero`
--

INSERT INTO `pastelero` (`PasteleroID`, `Nombre`, `Apellido`, `Alias`, `Telefono`, `AñosTrabajados`) VALUES
(1, 'Eduardo', 'González', 'El mono', '123-456-78', 3),
(2, 'Kevin', 'García', 'Capitán', '113-456-78', 7),
(3, 'Xiao', 'Gómez', 'Chimez', '133-456-78', 3),
(4, 'Lorenzo', 'Flores', 'Lenchillo', '223-456-78', 1),
(5, 'Aguardino', 'Pérez', 'Agujero', '323-456-78', 8),
(6, 'Fernando', 'Gutiérrez', 'El waffle', '423-456-78', 7),
(7, 'Casimiro', 'Castillo', 'El cascas', '523-456-78', 5),
(8, 'Panfilo', 'Badillo', 'Pantuflill', '623-456-78', 5),
(9, 'Alejandro', 'Romero', 'La reliqui', '723-456-78', 9),
(10, 'Giovanni', 'Jiménez', 'El pato', '823-456-78', 2),
(11, 'Jesús', 'Gómez', 'el chuy', '345-753-27', 7),
(12, 'Alejandro', 'Viveros', 'alex lion', '345-321-84', 3),
(13, 'Miguel', 'Díaz', 'Diguel', '256-275-47', 3),
(14, 'Dante', 'Ramírez', 'Dami', '256-468-74', 3);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `pasteles_con_terminacion_n`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `pasteles_con_terminacion_n` (
`nombre` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `pasteles_totales`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `pasteles_totales` (
`totalPastelitos` bigint(21)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pastelingrediente`
--

CREATE TABLE `pastelingrediente` (
  `PastelID` int(11) NOT NULL,
  `IngredienteID` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pastelingrediente`
--

INSERT INTO `pastelingrediente` (`PastelID`, `IngredienteID`, `Cantidad`) VALUES
(501, 1001, 3),
(501, 1002, 2),
(502, 1001, 2),
(502, 1002, 1),
(503, 1007, 2),
(503, 1009, 8),
(504, 1002, 3),
(504, 1007, 4),
(505, 1003, 2),
(505, 1004, 2),
(506, 1001, 2),
(506, 1006, 1),
(507, 1003, 3),
(507, 1007, 3),
(508, 1001, 2),
(508, 1003, 2),
(509, 1001, 2),
(509, 1004, 2),
(510, 1003, 3),
(510, 1009, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `PedidoID` int(11) NOT NULL,
  `ClienteID` int(11) DEFAULT NULL,
  `FechaPedido` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`PedidoID`, `ClienteID`, `FechaPedido`) VALUES
(101, 1, '2023-01-15'),
(102, 2, '2023-02-20'),
(103, 3, '2023-02-06'),
(104, 4, '2023-05-20'),
(105, 5, '2023-09-20'),
(106, 6, '2023-11-10'),
(107, 7, '2023-10-27'),
(108, 8, '2023-12-31'),
(109, 9, '2023-12-20'),
(110, 10, '2023-06-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidoespecial`
--

CREATE TABLE `pedidoespecial` (
  `PedidoEspecialID` int(11) NOT NULL,
  `DescripcionPastel` varchar(250) DEFAULT NULL,
  `SaborPastel` varchar(40) NOT NULL,
  `FechaYHoraPedido` datetime NOT NULL,
  `Cliente` int(11) DEFAULT NULL,
  `AliasPastelero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidoespecial`
--

INSERT INTO `pedidoespecial` (`PedidoEspecialID`, `DescripcionPastel`, `SaborPastel`, `FechaYHoraPedido`, `Cliente`, `AliasPastelero`) VALUES
(1, 'Pastel con trozos de fresa y adornos de flores a los extremos 15*29 con nombre Rosa Itzel y el número 16', 'Chocolate', '2023-08-20 12:30:00', 1, 3),
(2, 'Pastel de dos pisos decorado con hojuelas de cereal y adornos de estrella al centro 20*30 con nombre Mario y el número 4', 'Vainilla', '2023-10-17 03:40:00', 3, 1),
(3, 'Pastel con dibujo de angry birds del pajarito rojo con frase \"Felicidades Dania\" y el número 12 de colores azul y blanco', 'Oreo', '2023-01-09 11:15:30', 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursalespasteleria`
--

CREATE TABLE `sucursalespasteleria` (
  `SucursalID` int(11) NOT NULL,
  `NombrePastelero` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Direccion` varchar(150) NOT NULL,
  `NombreRecepcionista` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sucursalespasteleria`
--

INSERT INTO `sucursalespasteleria` (`SucursalID`, `NombrePastelero`, `Nombre`, `Direccion`, `NombreRecepcionista`) VALUES
(1, 1, 'La exquisita cereza', 'Calle Felipe Pescador #7, Teziutlán', 'Enrique'),
(2, 3, 'La exquisita cereza', 'Calle Nigromante #105, Teziutlán', 'Epiclides'),
(3, 5, 'El manjar azul', 'Barrio de Ahuateno S/N, Teziutlán', 'Eliasaf'),
(4, 6, 'La bola de vainilla', 'Entrada de Xoloco #708, Teziutlán', 'Elías'),
(5, 7, 'La exquisita cereza', 'Centro Número #305, Tlapacoyan', 'Eliud');

-- --------------------------------------------------------

--
-- Estructura para la vista `clientes_pasteles`
--
DROP TABLE IF EXISTS `clientes_pasteles`;

CREATE ALGORITHM=UNDEFINED DEFINER=`monfil`@`%` SQL SECURITY DEFINER VIEW `clientes_pasteles`  AS SELECT `cliente`.`Nombre` AS `Clientela de Pastelería` FROM `cliente``cliente`  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `fecha_pedido_de_cliente`
--
DROP TABLE IF EXISTS `fecha_pedido_de_cliente`;

CREATE ALGORITHM=UNDEFINED DEFINER=`monfil`@`%` SQL SECURITY DEFINER VIEW `fecha_pedido_de_cliente`  AS SELECT `p`.`PedidoID` AS `PedidoID`, `c`.`Nombre` AS `Nombre`, `c`.`Direccion` AS `Direccion`, `p`.`FechaPedido` AS `FechaPedido` FROM (`cliente` `c` join `pedido` `p` on(`p`.`ClienteID` = `c`.`ClienteID`))  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `info_ingredientes`
--
DROP TABLE IF EXISTS `info_ingredientes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`monfil`@`%` SQL SECURITY DEFINER VIEW `info_ingredientes`  AS SELECT `pi`.`IngredienteID` AS `IngredienteID`, `i`.`Nombre` AS `Nombre`, `pi`.`Cantidad` AS `Cantidad`, `i`.`Descripcion` AS `Descripcion` FROM (`pastelingrediente` `pi` join `ingrediente` `i` on(`i`.`IngredienteID` = `pi`.`IngredienteID`))  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `pasteles_con_terminacion_n`
--
DROP TABLE IF EXISTS `pasteles_con_terminacion_n`;

CREATE ALGORITHM=UNDEFINED DEFINER=`monfil`@`%` SQL SECURITY DEFINER VIEW `pasteles_con_terminacion_n`  AS SELECT `p`.`Nombre` AS `nombre` FROM `pastel` AS `p` WHERE `p`.`Nombre` like '%n''%n'  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `pasteles_totales`
--
DROP TABLE IF EXISTS `pasteles_totales`;

CREATE ALGORITHM=UNDEFINED DEFINER=`monfil`@`%` SQL SECURITY DEFINER VIEW `pasteles_totales`  AS SELECT count(0) AS `totalPastelitos` FROM `pastel``pastel`  ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ClienteID`);

--
-- Indices de la tabla `ingrediente`
--
ALTER TABLE `ingrediente`
  ADD PRIMARY KEY (`IngredienteID`);

--
-- Indices de la tabla `pastel`
--
ALTER TABLE `pastel`
  ADD PRIMARY KEY (`PastelID`);

--
-- Indices de la tabla `pastelero`
--
ALTER TABLE `pastelero`
  ADD PRIMARY KEY (`PasteleroID`);

--
-- Indices de la tabla `pastelingrediente`
--
ALTER TABLE `pastelingrediente`
  ADD PRIMARY KEY (`PastelID`,`IngredienteID`),
  ADD KEY `IngredienteID` (`IngredienteID`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`PedidoID`),
  ADD KEY `ClienteID` (`ClienteID`);

--
-- Indices de la tabla `pedidoespecial`
--
ALTER TABLE `pedidoespecial`
  ADD PRIMARY KEY (`PedidoEspecialID`),
  ADD KEY `Cliente` (`Cliente`),
  ADD KEY `AliasPastelero` (`AliasPastelero`);

--
-- Indices de la tabla `sucursalespasteleria`
--
ALTER TABLE `sucursalespasteleria`
  ADD PRIMARY KEY (`SucursalID`),
  ADD KEY `Nombre` (`NombrePastelero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pastelero`
--
ALTER TABLE `pastelero`
  MODIFY `PasteleroID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pedidoespecial`
--
ALTER TABLE `pedidoespecial`
  MODIFY `PedidoEspecialID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sucursalespasteleria`
--
ALTER TABLE `sucursalespasteleria`
  MODIFY `SucursalID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pastelingrediente`
--
ALTER TABLE `pastelingrediente`
  ADD CONSTRAINT `pastelingrediente_ibfk_1` FOREIGN KEY (`PastelID`) REFERENCES `pastel` (`PastelID`),
  ADD CONSTRAINT `pastelingrediente_ibfk_2` FOREIGN KEY (`IngredienteID`) REFERENCES `ingrediente` (`IngredienteID`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`ClienteID`) REFERENCES `cliente` (`ClienteID`);

--
-- Filtros para la tabla `pedidoespecial`
--
ALTER TABLE `pedidoespecial`
  ADD CONSTRAINT `pedidoespecial_ibfk_1` FOREIGN KEY (`Cliente`) REFERENCES `cliente` (`ClienteID`),
  ADD CONSTRAINT `pedidoespecial_ibfk_2` FOREIGN KEY (`AliasPastelero`) REFERENCES `pastelero` (`PasteleroID`);

--
-- Filtros para la tabla `sucursalespasteleria`
--
ALTER TABLE `sucursalespasteleria`
  ADD CONSTRAINT `Nombre` FOREIGN KEY (`NombrePastelero`) REFERENCES `pastelero` (`PasteleroID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
