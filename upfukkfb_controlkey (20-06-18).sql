-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2018 a las 15:57:12
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `upfukkfb_controlkey`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencias`
--

CREATE TABLE `agencias` (
  `id_agencia` int(11) NOT NULL,
  `nombre_agencia` varchar(250) NOT NULL,
  `encargado` varchar(150) NOT NULL,
  `telefono_age` varchar(12) NOT NULL,
  `direccion` text NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agencias`
--

INSERT INTO `agencias` (`id_agencia`, `nombre_agencia`, `encargado`, `telefono_age`, `direccion`, `id_cliente`) VALUES
(1, 'Ayacuho', 'Sr. Simon Vargas', '763-47835', 'Ayacucho', 8),
(2, 'Ag. Mutualista', 'Juan de Dios', '3158306', 'Mutualista', 8),
(3, 'Ag Norte', 'Sr. Alfredo Moreno\r\n', '315-8574', 'AV. Cristo Redentetor Nº 4210 entre  4º Y 5º anillo	\r\n', 8),
(4, 'Plaza Hipermercados Norte\r\n', 'Encargado de Agencia', '', 'AV. CRISTO REDENTOR ESQ. 4° ANILLO 	\r\n', 8),
(5, 'Ag. Bolivar', 'Ximena Rodríguez\r\n', '76095331', 'Calle Bolívar Nº 55 Esq. 24 de Septiembre\r\n', 8),
(6, 'Ag.Equipetrol', 'Encargado de Agencia', '315 8306 ', ' Equipetrol Cuadra 8\r\n', 8),
(7, 'Av.Uruguay\r\n', 'Sra. Aracely Yabeta Encinas\r\n', '315 8306 ', 'Av. Uruguay\r\n', 8),
(8, 'Ag 21 de Mayo', 'Sr. Guillermo Ureña\r\n', '315-9478', ' Calle 21 de Mayo Nº 652 \r\n', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `id_almacen` int(11) NOT NULL,
  `nombre_almacen` varchar(80) DEFAULT NULL,
  `direccion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`id_almacen`, `nombre_almacen`, `direccion`) VALUES
(1, 'SANTA CRUZ', 'BARASEA 414'),
(2, 'LA PAZ', 'ACHUMANI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen_clientes`
--

CREATE TABLE `almacen_clientes` (
  `id_alcli` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_almacen` int(11) NOT NULL,
  `stock` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `almacen_clientes`
--

INSERT INTO `almacen_clientes` (`id_alcli`, `id_cliente`, `id_producto`, `id_almacen`, `stock`) VALUES
(1, 8, 17, 1, 0),
(2, 8, 15, 1, 0),
(3, 8, 14, 1, 33),
(4, 8, 13, 2, 0),
(5, 8, 13, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen_pedido_prov`
--

CREATE TABLE `almacen_pedido_prov` (
  `id_almacen` int(11) NOT NULL,
  `id_pedido_prov` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `almacen_pedido_prov`
--

INSERT INTO `almacen_pedido_prov` (`id_almacen`, `id_pedido_prov`) VALUES
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'PAPEL TERMICO'),
(2, 'PINES'),
(3, 'TARJETAS PVC'),
(4, 'TARJETAS DE COORDENADAS\r\n'),
(5, 'PAPEL AUTOCOPIATIVO'),
(6, 'MUEBLES '),
(7, 'CINTAS EPSON');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `tipo_cliente_id` int(11) NOT NULL,
  `nombre_cli` varchar(100) DEFAULT NULL,
  `tipo_documento_id` int(11) NOT NULL,
  `numero` int(10) NOT NULL,
  `contacto` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono_cli` varchar(10) DEFAULT NULL,
  `direccion_cli` text,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `tipo_cliente_id`, `nombre_cli`, `tipo_documento_id`, `numero`, `contacto`, `correo`, `telefono_cli`, `direccion_cli`, `estado`) VALUES
(3, 3, 'Banco Económico', 3, 1015403021, 'Richard Velasco Cuellar ', 'rvaques@gmail.com', '53270078', 'Ingavi, Santa Cruz de la Sierra, Bolivia\r\n', 1),
(4, 3, 'Banco Mercantil Santa Cruz S.A', 3, 1020557029, '', '', '', '', 1),
(5, 3, 'Banco Sol', 3, 1020271020, 'anderes', 'dalenag@gmail.com', '232', 'dfaf', 1),
(6, 3, 'Banco Los Andes', 3, 1020271020, 'Arturo Salazar', 'dalenag@gmail.com', '3 3518423', 'dfa', 1),
(7, 3, 'Banco Nacional de Bolivia S.A.', 3, 1016253021, 'Wilder', 'dalenag@gmail.com', '12334', 'dfa', 1),
(8, 3, 'Banco Fassil S.A.', 3, 1028423022, 'Aracely Yabeta Encinas', 'ayabeta@fassil.com.bo', '3158306', 'Av. Uruguay Nº 380 I\r\n', 1),
(9, 3, 'Banco Solidario', 3, 0, '', '', '', '', 1),
(10, 3, 'Burger King', 3, 0, '', '', NULL, NULL, 1),
(11, 3, 'Cooperativa Jerusalén', 3, 0, '', '', NULL, NULL, 1),
(12, 3, 'Cooperativa La Trinidad', 3, 0, '', '', NULL, NULL, 1),
(13, 3, 'Cooperativa Samaritano', 3, 0, '', '', NULL, NULL, 1),
(15, 3, 'Banco Ecofuturo', 3, 1020271020, 'Arturo Salazar', 'arturo@gmail.com', '3 3518423', 'Avenida Piraí, Santa Cruz de la Sierra', 1),
(18, 3, 'Cooperativa Jesús Nazareno', 3, 0, '', '', '12345678', 'Calle La Paz', 1),
(19, 3, 'Cooperativa Fatima', 3, 0, '', '', '3537000', '<h2 style=\"box-sizing: border-box; font-family: &quot;Arial Narrow&quot;, sans-serif; line-height: 1.1; color: rgb(112, 0, 0); margin-top: 36px; margin-bottom: 10px; font-size: 17px; position: relative;\">\r\n	<a class=\"point current\" data-latitud=\"-17.798260\" data-longitud=\"-63.191203\" href=\"http://fatima.coop/contactenos/agencias\" style=\"box-sizing: border-box; background-color: rgb(245, 195, 89); color: rgb(112, 0, 0); text-decoration-line: none; padding: 10px 0px 10px 15px; display: inline-block; width: 390px; transition: all 0.3s ease; font-size: 14px;\"><span style=\"box-sizing: border-box; margin-top: 5px;\">Calle Obispo Pe&ntilde;a No. 63 Zona el Pari</span></a></h2>\r\n', 1),
(20, 3, 'Banco Union S.A', 3, 1028415020, '', '', '12345678', '<p>\r\n	Calle Irala</p>\r\n', 1),
(21, 3, 'Richard  Leaños', 3, 2147483647, '', '', '3261423', NULL, 1),
(22, 3, 'FREDDY BLACUTT VILLEGAS', 3, 0, '', '', NULL, '<p>\r\n	Oruro</p>\r\n', 1),
(23, 1, 'IVERSUB SRL', 3, 0, 'Yuliet Begerano', '', '3453999', 'Av/4to Anillo N° S/n Edificio: Centro Comercial Ventura Mall Oficina: Pc-14 Zona: Norte', 1),
(24, 2, 'Dacker', 3, 1921220013, 'Hugo Rodriguez', '', NULL, NULL, 1),
(26, 3, 'Banco Prodem S.A.', 3, 1029837028, '', '', '', '', 1),
(27, 3, 'Banco Fortaleza S.A.', 3, 1020371022, 'Fortaleza S.A.', 'dalenag@gmail.com', '3 3518423', 'fafd', 1),
(28, 1, 'Banco Ecofuturo', 1, 10157272, 'Arturo Salazar', 'arturo@gmail.com', '3 3518423', 'DAFFA', NULL),
(49, 3, 'Banco do Brasil', 3, 10157272, 'Richard Velasco Cuellar ', 'richard@dobrasil.com.bo', '3 3518423', 'calle la paz', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id_conf` int(11) NOT NULL,
  `parametro` varchar(50) NOT NULL,
  `valor` varchar(15) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id_conf`, `parametro`, `valor`, `descripcion`) VALUES
(3, 'pedido_inicial', '00000053', '<p>\r\n	Valor inicial del Pedido 2018</p>\r\n'),
(4, 'alerta_correos', '2', '<p>\r\n	Muestra una Alerta del sistema al encargado <strong>(Valor)</strong> en dias antes de una accion.</p>\r\n'),
(5, 'pago_aduana_peru', '7', '<p>\r\n	Rango de Dias para pagar facturas de la aduana.&nbsp;</p>\r\n'),
(6, 'pago_aduana_bol', '7', '<p>\r\n	Tiempo de pago tramitador aduanero</p>\r\n'),
(7, 'transp_nac', '14', '<p>\r\n	tiempo de pago de facturas transporte nacional(Bolivian Express)</p>\r\n'),
(8, 'transp_peru', '7', '<p>\r\n	Parametro de transporte Peru&nbsp;</p>\r\n<p>\r\n	Valor: dias para pagar su factura</p>\r\n'),
(9, 'no_propuesta', '00000012', 'Numero consecutivo de propuestas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_propuesta`
--

CREATE TABLE `detalle_propuesta` (
  `id_deta_pro` int(11) NOT NULL,
  `id_propuesta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `precio` varchar(11) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `importe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_propuesta`
--

INSERT INTO `detalle_propuesta` (`id_deta_pro`, `id_propuesta`, `id_producto`, `precio`, `cantidad`, `importe`) VALUES
(1, 1, 13, '15', 2000, '30000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `venta_id` int(11) DEFAULT NULL,
  `precio` varchar(45) DEFAULT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `importe` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`id`, `producto_id`, `venta_id`, `precio`, `cantidad`, `importe`) VALUES
(1, 17, 1, '810.144', '185', '149876.64'),
(2, 17, 2, '0', '121', '0'),
(3, 17, 3, '0', '19', '0'),
(4, 17, 4, '0', '2', '0'),
(5, 17, 5, '0', '1', '0'),
(6, 17, 6, '810.144', '100', '81014.4'),
(7, 17, 7, '0', '116', '0'),
(8, 17, 8, '0', '14', '0'),
(9, 17, 9, '0', '2', '0'),
(10, 17, 10, '0', '4', '0'),
(11, 17, 11, '0', '6', '0'),
(12, 17, 12, '810.144', '130', '105318.72'),
(13, 17, 13, '0', '121', '0'),
(14, 17, 14, '0', '9', '0'),
(15, 15, 15, '139.20', '118', '16425.60'),
(16, 14, 15, '107.88', '157', '16937.16'),
(17, 15, 16, '0', '8', '0'),
(18, 14, 16, '0', '21', '0'),
(19, 15, 17, '0', '42', '0'),
(20, 14, 17, '0', '51', '0'),
(21, 15, 18, '0', '15', '0'),
(22, 14, 18, '0', '20', '0'),
(23, 15, 19, '0', '26', '0'),
(24, 15, 20, '0', '3', '0'),
(25, 15, 21, '0', '24', '0'),
(26, 22, 22, '0.60', '3000', '1800.00'),
(27, 13, 23, '15', '200', '3000.00'),
(28, 13, 24, '0', '100', '0'),
(29, 13, 25, '0', '100', '0'),
(30, 14, 26, '0', '10', '0'),
(31, 13, 27, '15', '10', '150.00'),
(32, 13, 28, '0', '5', '0'),
(33, 14, 29, '0', '12', '0'),
(34, 14, 30, '0', '10', '0'),
(35, 13, 31, '15', '100', '1500.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distribucion_guia`
--

CREATE TABLE `distribucion_guia` (
  `id_dis_guia` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `contacto` varchar(255) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `distribucion_guia`
--

INSERT INTO `distribucion_guia` (`id_dis_guia`, `id`, `contacto`, `telefono`, `direccion`) VALUES
(21, 26, 'Juan de Dios', '3158306', 'Mutualista'),
(22, 28, 'Juan de Dios', '3158306', 'Mutualista'),
(23, 29, 'Sr. Simon Vargas', '763-47835', 'Ayacucho'),
(24, 30, 'Sr. Simon Vargas', '763-47835', 'Ayacucho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada_productos`
--

CREATE TABLE `entrada_productos` (
  `id_entrada` int(11) NOT NULL,
  `id_almacen` int(11) NOT NULL,
  `fecha_entrada` date NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entrada_productos`
--

INSERT INTO `entrada_productos` (`id_entrada`, `id_almacen`, `fecha_entrada`, `id_producto`, `cantidad`) VALUES
(1, 1, '2018-01-15', 17, 185),
(2, 1, '2018-02-09', 15, 118),
(3, 1, '2018-02-09', 14, 157),
(4, 1, '2018-03-13', 17, 100),
(5, 1, '2018-05-21', 17, 130),
(6, 1, '2018-06-05', 13, 1000),
(7, 2, '2018-06-05', 13, 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `merca_aduanabol`
--

CREATE TABLE `merca_aduanabol` (
  `id_mercaduanabol` int(11) NOT NULL,
  `id_paquete` int(11) NOT NULL,
  `fecha_pago` date NOT NULL,
  `observacion_aduanaBol` text NOT NULL,
  `estado_pago` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `merca_aduanabol`
--

INSERT INTO `merca_aduanabol` (`id_mercaduanabol`, `id_paquete`, `fecha_pago`, `observacion_aduanaBol`, `estado_pago`) VALUES
(1, 3, '0000-00-00', '', '0'),
(2, 1, '0000-00-00', '', '0'),
(3, 2, '0000-00-00', '', '0'),
(4, 5, '0000-00-00', '', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `merca_aduanaperu`
--

CREATE TABLE `merca_aduanaperu` (
  `id_mercperu` int(11) NOT NULL,
  `id_paquete` int(11) NOT NULL,
  `id_transporte_ext` int(11) NOT NULL,
  `fecha_pago` date NOT NULL,
  `observacion_aduanaP` text NOT NULL,
  `estado_pagoperu` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `merca_aduanaperu`
--

INSERT INTO `merca_aduanaperu` (`id_mercperu`, `id_paquete`, `id_transporte_ext`, `fecha_pago`, `observacion_aduanaP`, `estado_pagoperu`) VALUES
(1, 3, 1, '0000-00-00', '', '0'),
(2, 1, 1, '0000-00-00', '', '0'),
(3, 2, 1, '0000-00-00', '', '0'),
(4, 5, 2, '0000-00-00', '', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `merca_transpoext`
--

CREATE TABLE `merca_transpoext` (
  `id_mercatrans` int(11) NOT NULL,
  `id_paquete` int(11) NOT NULL,
  `id_transporte_ext` int(11) NOT NULL,
  `no_facturaText` varchar(200) NOT NULL,
  `monto_transpoext` int(11) NOT NULL,
  `fact_respaldo` text NOT NULL,
  `fecha_pago` date NOT NULL,
  `observacion` text NOT NULL,
  `estado_pago` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `merca_transpoext`
--

INSERT INTO `merca_transpoext` (`id_mercatrans`, `id_paquete`, `id_transporte_ext`, `no_facturaText`, `monto_transpoext`, `fact_respaldo`, `fecha_pago`, `observacion`, `estado_pago`) VALUES
(1, 3, 1, '0001-002787', 850, 'cdfe6-factura-enotria30-04-18.pdf', '2018-05-09', 'ssss', '1'),
(2, 1, 1, 'fat-transpo2', 150, 'd59f8-014-contrato-transporte-universal-enotria-victor-calla.pdf', '2018-05-05', 'dfdfaa', '1'),
(3, 2, 1, 'tranaporte23', 60, 'd023b-014-contrato-transporte-universal-enotria-victor-calla.pdf', '0000-00-00', '', ''),
(4, 5, 2, 'uversa-145', 350, '2ef7e-pago-de-dominio-viarural.png', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `merca_trans_bol`
--

CREATE TABLE `merca_trans_bol` (
  `id_mercatransbol` int(11) NOT NULL,
  `id_paquete` int(11) NOT NULL,
  `fecha_pago` date NOT NULL,
  `observacion` text NOT NULL,
  `estado_pago` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `merca_trans_bol`
--

INSERT INTO `merca_trans_bol` (`id_mercatransbol`, `id_paquete`, `fecha_pago`, `observacion`, `estado_pago`) VALUES
(1, 1, '2018-05-08', 'SIIII ', '1'),
(2, 2, '0000-00-00', '', '0'),
(3, 3, '0000-00-00', '', '0'),
(4, 5, '0000-00-00', '', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movi_al_cli`
--

CREATE TABLE `movi_al_cli` (
  `idmov_alcli` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idventa` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_almacen` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `cantidad_entrada` varchar(200) NOT NULL,
  `cantidad_salida` varchar(200) NOT NULL,
  `saldo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movi_al_cli`
--

INSERT INTO `movi_al_cli` (`idmov_alcli`, `fecha`, `idventa`, `id_producto`, `id_almacen`, `id_cliente`, `cantidad_entrada`, `cantidad_salida`, `saldo`) VALUES
(1, '2018-01-15', 0, 17, 1, 8, '185', '', '185'),
(2, '2018-01-16', 2, 17, 1, 8, '', '121', '64'),
(3, '2018-02-16', 3, 17, 1, 8, '', '19', '45'),
(4, '2018-03-05', 4, 17, 1, 8, '', '2', '43'),
(5, '2018-03-05', 5, 17, 1, 8, '', '1', '42'),
(6, '2018-03-13', 0, 17, 1, 8, '100', '', '142'),
(7, '2018-03-13', 7, 17, 1, 8, '', '116', '26'),
(8, '2018-04-14', 8, 17, 1, 8, '', '14', '12'),
(9, '2018-04-16', 9, 17, 1, 8, '', '2', '10'),
(10, '2018-04-24', 10, 17, 1, 8, '', '4', '6'),
(11, '2018-05-15', 11, 17, 1, 8, '', '6', '0'),
(12, '2018-05-21', 0, 17, 1, 8, '130', '', '130'),
(13, '2018-05-21', 13, 17, 1, 8, '', '121', '9'),
(14, '2018-05-21', 14, 17, 1, 8, '', '9', '0'),
(15, '2018-02-09', 0, 15, 1, 8, '118', '', '118'),
(16, '2018-02-09', 0, 14, 1, 8, '157', '', '157'),
(17, '2018-02-16', 16, 15, 1, 8, '', '8', '110'),
(18, '2018-02-16', 16, 14, 1, 8, '', '21', '136'),
(19, '2018-03-13', 17, 15, 1, 8, '', '42', '68'),
(20, '2018-03-13', 17, 14, 1, 8, '', '51', '85'),
(21, '2018-04-04', 18, 15, 1, 8, '', '15', '53'),
(22, '2018-04-04', 18, 14, 1, 8, '', '20', '65'),
(23, '2018-04-14', 19, 15, 1, 8, '', '26', '27'),
(24, '2018-05-14', 20, 15, 1, 8, '', '3', '24'),
(25, '2018-05-15', 21, 15, 1, 8, '', '24', '0'),
(26, '2018-06-06', 0, 13, 2, 8, '200', '', '200'),
(27, '2018-06-06', 24, 13, 2, 8, '', '100', '100'),
(28, '2018-06-06', 25, 13, 2, 8, '', '100', '0'),
(29, '2018-06-08', 26, 14, 1, 8, '', '10', '55'),
(30, '2018-06-08', 0, 13, 1, 8, '10', '', '10'),
(31, '2018-06-08', 28, 13, 1, 8, '', '5', '5'),
(32, '2018-06-08', 29, 14, 1, 8, '', '12', '43'),
(33, '2018-06-11', 30, 14, 1, 8, '', '10', '33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete`
--

CREATE TABLE `paquete` (
  `id_paquete` int(11) NOT NULL,
  `no_factura` varchar(100) NOT NULL,
  `factura_doc` varchar(100) NOT NULL,
  `paquin_list` varchar(100) NOT NULL,
  `peso_total` varchar(100) NOT NULL,
  `fecha_tope_pago_fact` date NOT NULL,
  `via_transporte` varchar(10) NOT NULL,
  `fecha_llegadaAd` date NOT NULL,
  `fecha_salidaAd` date NOT NULL,
  `fecha_key` date NOT NULL,
  `no_factura_traext` varchar(50) NOT NULL,
  `costo_transp_ext` varchar(20) NOT NULL,
  `factura_transporte_ext` text NOT NULL,
  `costo_aduana_ext` varchar(20) NOT NULL,
  `no_recibo_adext` varchar(100) NOT NULL,
  `no_poliza` varchar(100) NOT NULL,
  `respaldo_poliza` text NOT NULL,
  `monto_poliza` int(11) NOT NULL,
  `dui` text NOT NULL,
  `costo_aereo` varchar(20) NOT NULL,
  `respaldo_costoaereo` text NOT NULL,
  `no_factura_traint` varchar(50) NOT NULL,
  `costo_transporte_bol` varchar(20) NOT NULL,
  `otros_gastos` varchar(100) NOT NULL,
  `factura_transporte_int` text NOT NULL,
  `estado_pac_entransito` char(1) NOT NULL DEFAULT '0',
  `estado_entregado` varchar(1) NOT NULL,
  `fecha_pago_fact` date NOT NULL,
  `observacion` text NOT NULL,
  `estado_pagado` int(1) NOT NULL DEFAULT '0',
  `costos_aprobados` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paquete`
--

INSERT INTO `paquete` (`id_paquete`, `no_factura`, `factura_doc`, `paquin_list`, `peso_total`, `fecha_tope_pago_fact`, `via_transporte`, `fecha_llegadaAd`, `fecha_salidaAd`, `fecha_key`, `no_factura_traext`, `costo_transp_ext`, `factura_transporte_ext`, `costo_aduana_ext`, `no_recibo_adext`, `no_poliza`, `respaldo_poliza`, `monto_poliza`, `dui`, `costo_aereo`, `respaldo_costoaereo`, `no_factura_traint`, `costo_transporte_bol`, `otros_gastos`, `factura_transporte_int`, `estado_pac_entransito`, `estado_entregado`, `fecha_pago_fact`, `observacion`, `estado_pagado`, `costos_aprobados`) VALUES
(1, 'rotapel-0305', '', '', '1705.358', '2018-06-16', 'terrestre', '2018-05-02', '2018-05-07', '2018-05-05', '', '', '', '100', 'aduana-peru', 'ploliza05', 'e3368-fassil_fondo01.jpg', 300, 'bfb04-fassil_fondo01.jpg', '', '', 'Bolivianexpress-045', '230', '', 'dade4-fassil_fondo01.jpg', '2', '1', '2018-05-10', 'dfeerfaf', 1, 1),
(2, 'rotapel-2018-05-03', 'd37a2-extracto-4-.pdf', '', '796', '2018-06-07', 'terrestre', '2018-05-02', '2018-05-07', '2018-05-10', '', '', '', '100', 'recibo-aduana10', 'ploliza10', '', 250, '', '', '', 'bolivanexp10', '120', '', '', '2', '1', '2018-05-08', 'siii', 1, 0),
(3, 'enotria-2018', 'cdc15-extracto-5-.pdf', '', '11.7', '2018-06-22', 'terrestre', '2018-05-02', '2018-05-07', '2018-05-10', '', '', '', '100', 'reci-peru10', 'plis10', '', 50, '', '', '', 'bolivian10', '120', '', '', '2', '1', '0000-00-00', '', 0, 1),
(4, 'enotria-tarjfat-05', 'ecfcf-extracto-4-.pdf', '', '0.4', '2018-06-23', 'aereo', '2018-05-04', '2018-05-11', '2018-05-07', '', '', '', '', '', 'aduana-05', '', 150, '', '200', '', '', '', '', '', '2', '1', '2018-05-09', 'RDYDR', 1, 1),
(5, 'enotria-00125', '07de2-ci-reinier.jpg', '11a49-croquis-reinier.png', '4', '2018-07-27', 'terrestre', '2018-06-14', '2018-06-15', '2018-06-15', '', '', '', '100', '48484', 'polza-185', '', 256, '', '', '', 'bolvian-exp148', '60', '', '', '2', '1', '0000-00-00', '', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete_trans_ext`
--

CREATE TABLE `paquete_trans_ext` (
  `id_paquete` int(11) NOT NULL,
  `id_transporte_ext` int(11) NOT NULL,
  `prioridad` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paquete_trans_ext`
--

INSERT INTO `paquete_trans_ext` (`id_paquete`, `id_transporte_ext`, `prioridad`) VALUES
(3, 1, 0),
(1, 1, 0),
(2, 1, 0),
(5, 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paq_ped_prov`
--

CREATE TABLE `paq_ped_prov` (
  `id_paquete` int(11) NOT NULL,
  `id_pedido_prov` int(11) NOT NULL,
  `prioridad` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paq_ped_prov`
--

INSERT INTO `paq_ped_prov` (`id_paquete`, `id_pedido_prov`, `prioridad`) VALUES
(1, 1, 0),
(1, 2, 1),
(2, 3, 0),
(2, 4, 1),
(3, 5, 0),
(4, 7, 0),
(5, 9, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_proveedor`
--

CREATE TABLE `pedido_proveedor` (
  `id_pedido_prov` int(11) NOT NULL,
  `no_pedido` varchar(11) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `id_proveedor` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `cantidad_solicitada` int(15) NOT NULL,
  `precio_unitario` varchar(20) NOT NULL,
  `costo_total` varchar(100) NOT NULL,
  `observacion` text NOT NULL,
  `orden_prod` text NOT NULL,
  `orden_compra` text NOT NULL,
  `estado_solicitado` int(1) NOT NULL DEFAULT '1',
  `estado_transito` int(1) NOT NULL DEFAULT '0',
  `estado_enaduana` int(1) NOT NULL DEFAULT '0',
  `estado_entregado` int(1) NOT NULL DEFAULT '0',
  `id_almacen` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido_proveedor`
--

INSERT INTO `pedido_proveedor` (`id_pedido_prov`, `no_pedido`, `fecha_pedido`, `fecha_entrega`, `id_proveedor`, `id_producto`, `nombre_producto`, `cantidad_solicitada`, `precio_unitario`, `costo_total`, `observacion`, `orden_prod`, `orden_compra`, `estado_solicitado`, `estado_transito`, `estado_enaduana`, `estado_entregado`, `id_almacen`) VALUES
(1, '00000048', '2018-04-02', '2018-05-02', 1, 17, 'FORMATO CAJA', 900000, '0.00719', '6471.00', '', '3e773-2018-04-05_114944.png', '', 0, 2, 2, 1, '2'),
(2, '00000048', '2018-04-02', '2018-05-02', 1, 21, 'PINES ATC', 26000, '0.04072', '1058.72', '', '230c2-2018-04-05_115220.png', '', 0, 2, 2, 1, '2'),
(3, '00000049', '2018-05-01', '2018-05-08', 4, 13, 'ROLLOS 80X80', 1500, '0.85', '1275.00', '', 'caa7e-2018-04-05_115220.png', '', 0, 2, 2, 1, '2'),
(4, '00000049', '2018-05-01', '2018-05-08', 4, 14, 'ROLLO FASSIL ATM CHICO ', 160, '5.2', '832.00', '', '90b85-2018-04-05_115220.png', '', 0, 2, 2, 1, '2'),
(5, '00000049', '2018-05-01', '2018-05-08', 1, 22, 'Tarjeta PVC Banco Sol', 3000, '0.09857', '295.71', '', '2fec1-2018-04-05_114944.png', '', 0, 2, 2, 1, '2'),
(6, '00000050', '2018-04-30', '2018-05-04', 5, 25, 'MUEBLE METALICO', 6, '130', '780.00', '', 'c7cb7-mio.xlsx', '', 1, 0, 0, 0, '2'),
(7, '00000051', '2018-05-02', '2018-05-09', 1, 1, 'TARJETAS COOPERATIVA FATIMA\r\n', 100, '1.45', '145.00', '', 'a168c-mio.xlsx', '', 0, 2, 2, 1, '2'),
(8, '00000052', '2018-05-01', '2018-05-08', 1, 2, 'TARJETAS VISA CREDITO - BCO ECONOMICO\r\n', 23000, '1.9', '43700.00', '', '7997e-fassil_fondo01.jpg', '', 1, 0, 0, 0, '2'),
(9, '00000053', '2018-06-05', '2018-06-12', 1, 1, 'TARJETAS COOPERATIVA FATIMA\r\n', 1000, '1.45', '1450', '', '05f5e-ci-reinier.jpg', '', 0, 2, 2, 1, '2'),
(10, '00000053', '2018-06-05', '2018-06-12', 1, 1, 'TARJETAS COOPERATIVA FATIMA\r\n', 24000, '1.45', '34800', '', '', '', 1, 0, 0, 0, '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precio_cliente`
--

CREATE TABLE `precio_cliente` (
  `id_precli` int(11) NOT NULL,
  `id_propuesta` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `precio_cli` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `precio_cliente`
--

INSERT INTO `precio_cliente` (`id_precli`, `id_propuesta`, `id_cliente`, `id_producto`, `precio_cli`) VALUES
(1, 0, 8, 17, '810.144'),
(2, 0, 8, 15, '139.20'),
(3, 0, 8, 14, '107.88'),
(4, 0, 5, 22, '0.60'),
(5, 0, 8, 13, '15'),
(6, 0, 5, 13, '15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `items` varchar(100) NOT NULL,
  `nombre_producto` varchar(250) NOT NULL,
  `precio_unitario` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `peso_neto` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_proveedor`, `id_categoria`, `items`, `nombre_producto`, `precio_unitario`, `description`, `peso_neto`) VALUES
(1, 1, 3, 'COOP-FAT-001\r\n\r\n', 'TARJETAS COOPERATIVA FATIMA\r\n', '1.45', '', '0.004'),
(2, 1, 3, 'TAR-CRED-ECO\r\n', 'TARJETAS VISA CREDITO - BCO ECONOMICO\r\n', '1.90', '', '0.004'),
(16, 1, 3, 'COOP-NAZ-001\r\n\r\n', 'TARJETAS COOPERATIVA JESUS NAZARENO\r\n', '1.45', '', '0.004'),
(5, 2, 3, 'T-DEB-MC-CHIP-CONAZ', 'TARJETAS DEBITO MASTERCARD COOP NAZARENO', '1.41', '', '0.004'),
(6, 2, 3, '', 'TARJETAS CON CHIP BNB', '1.41', '', '0.004'),
(7, 2, 3, '', 'TARJETAS DE DEBITO VISA - BANCO UNION', '1.0078', '', '0.004'),
(8, 2, 3, '', 'TARJETAS PROPIETARIAS CON CHIP', '3.20', '', '0.004'),
(9, 2, 3, 'T-BU-CRED-PRE', 'TARJETAS  BCO UNION CREDITO PREPAGO', '1.07', '', '0.004'),
(10, 2, 3, 'T-CRE-MC-BCO-PRODEM', 'TARJETAS DE CREDITO MC BCO PRODEM', '1.61', '', '0.004'),
(11, 1, 4, '', 'TARJETAS DE COORDENADAS BNB', '0.2072', '', '0.002'),
(13, 4, 1, 'R-80X80', 'ROLLOS 80X80', '0.85', '', '0.36'),
(14, 4, 1, 'ATM-CHI-001', 'ROLLO FASSIL ATM CHICO ', '5.20', '', '1.6'),
(15, 4, 1, 'ATM-G-002', 'ROLLO  FASSIL ATM GRANDE', '9', '', '2.85'),
(17, 1, 5, 'FC-001', 'FORMATO CAJA', '0.00719', '', '0.0018'),
(19, 2, 3, 'TARJ-DEB-MAST-BCO-FORT', 'TARJETAS DEBITO MASTERCARD Bco. Fortaleza', '1.646', '', '0.004'),
(20, 2, 3, 'CREDITO-VISA-PLATINUM BCO UNION', 'TARJETA  DE CRÉDITO VISA PLATINUM BCO UNION', '0.90', '', '0.004'),
(21, 1, 2, '', 'PINES ATC', '0.04072', '', '0.003283'),
(22, 1, 3, '', 'Tarjeta PVC Banco Sol', '0.09857', '', '0.0039'),
(23, 1, 2, '', 'Pines Fassil', '0.26556', '', '0.003833'),
(24, 4, 1, 'Rollo 80x75', 'Rollo 80x75 ', '0.78', '', '0.28'),
(25, 5, 6, 'MSF', 'MUEBLE METALICO', '130', '', '18'),
(26, 2, 3, 'Tarj.cred.master chip - ECO', 'Tarj. Mastecard Chip JMV Ecofuturo', '1.72', '', '0.004'),
(27, 2, 3, 'Tarjetas Mastercard con Chip - SAFI', 'Tarjetas Mastercard con Chip - Safi', '1.35', '', '0.004'),
(28, 2, 3, 'Tarj.Credito.Master con Chip - ECO', 'Tarj. Credito Mastercard con Chip - Ecofuturo', '0.9', '', '0.004'),
(29, 2, 3, 'Bco Union - NO ODA', 'Tarj chip Visa No Oda - BCO UNION', '1.278', '', '0.004'),
(30, 2, 3, 'BNB - Debito Global', 'Tarj Global. Visa Chip NO ODA - BNB', '0.62', '', '0.004'),
(31, 2, 3, 'Tarj CBN - BNB', 'Tarj visa Chip CBN - BNB', '0.74', '', '0.004'),
(32, 1, 4, 'TARJETA DE COORDENADAS BANCO BISA', 'TARJETA DE COORDENADAS BANCO BISA', '0.10325', '', '0.002'),
(33, 1, 3, 'TARJETAS PVC - DISMAC CLUB', 'TARJETAS PVC - DISMAC CLUB', '0.15216', '', '0.030'),
(34, 6, 3, 'TARJ-BLANCA', 'TARJETAS BLANCAS CODIGO VISTO', '0.12', '', '0.004'),
(35, 7, 7, 'NCR 7156', 'CINTAS NCR 7156', '6.30', 'dfaffa', '0.104'),
(36, 1, 1, '912', 'ROLLOS 57X70X13', '6.30', 'dffaf', '0.6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_stock`
--

CREATE TABLE `productos_stock` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `codigo` varchar(45) NOT NULL,
  `precio_almacen` varchar(100) NOT NULL,
  `precio_venta` varchar(45) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_almacen` int(11) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos_stock`
--

INSERT INTO `productos_stock` (`id`, `id_producto`, `nombre`, `codigo`, `precio_almacen`, `precio_venta`, `stock`, `id_categoria`, `id_almacen`, `estado`) VALUES
(1, 17, 'FORMATO CAJA', 'FC-001', '', NULL, 0, 5, 1, 1),
(2, 15, 'ROLLO  FASSIL ATM GRANDE', 'ATM-G-002', '', NULL, 0, 1, 1, 1),
(3, 14, 'ROLLO FASSIL ATM CHICO ', 'ATM-CHI-001', '', NULL, 0, 1, 1, 1),
(4, 22, 'Tarjeta PVC Banco Sol', '', '0', NULL, 0, 3, 2, 1),
(5, 1, 'TARJETAS COOPERATIVA FATIMA\r\n', 'COOP-FAT-001\r\n\r\n', '0', NULL, 1000, 3, 2, 1),
(6, 13, 'ROLLOS 80X80', 'R-80X80', '', NULL, 590, 1, 1, 1),
(7, 13, 'ROLLOS 80X80', 'R-80X80', '', NULL, 100, 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propuesta`
--

CREATE TABLE `propuesta` (
  `id_propuesta` int(11) NOT NULL,
  `fecha_propuesta` date NOT NULL,
  `total` varchar(100) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `no_propuesta` varchar(50) NOT NULL,
  `comentarios` text NOT NULL,
  `duracion` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `propuesta`
--

INSERT INTO `propuesta` (`id_propuesta`, `fecha_propuesta`, `total`, `id_cliente`, `no_propuesta`, `comentarios`, `duracion`) VALUES
(1, '2018-05-24', '30000.00', 15, '00000012', '', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_prove` varchar(80) DEFAULT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion_prove` text,
  `tiemp_pag_facts` varchar(20) DEFAULT NULL,
  `comentario` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre_prove`, `telefono`, `direccion_prove`, `tiemp_pag_facts`, `comentario`) VALUES
(1, 'ENOTRIA S.A', '78787', '<p>\r\n	Lima, Peru</p>\r\n', '45', '<p>\r\n	Somos una empresa dedicada a brindar soluciones integrales de comunicaci&oacute;n personalizada, fidelizaci&oacute;n, seguridad, loter&iacute;a, etiquetas y empaques digitales, haci&eacute;ndonos cargo de todas las etapas del proceso.</p>\r\n'),
(2, 'MORPHO CARD', '78787', '<p>\r\n	Colombia</p>\r\n', '30', '<p>\r\n	87878</p>\r\n'),
(3, 'NOVATRONIC SAC', '(511) 224-9099 ', '<p>\r\n	Av. Jos&eacute; Galvez Barrenechea No 1094 Lima 27 Per&uacute;</p>\r\n<p>\r\n	&nbsp;</p>\r\n', '45', '<p style=\"margin-left:36.0pt;\">\r\n	<strong><em>Empresa peruana dedicada exclusivamente a este rubro (www.novatronic.com.pe).</em></strong></p>\r\n<p style=\"margin-left:36.0pt;\">\r\n	&nbsp;</p>\r\n'),
(4, 'ROTAPEL', '787878', '<p>\r\n	LIMA PERU</p>\r\n', '30', '<p>\r\n	PROVEEDOR DE PAPEL</p>\r\n'),
(5, 'PUGA SRL', '77653438 -3422227', '<p>\r\n	Calle Sof&iacute;a Rodr&iacute;guez #13 Zona/Barrio: Los M&aacute;ngales UV 066 MZA 002</p>\r\n', '7', '<p>\r\n	PROVEEDOR DE MUEBLES PARA SISTEMA DE FILAS</p>\r\n'),
(6, 'KAWAY', '85281914158', '<p>\r\n	Sanlian Industrial Zone, Shiyan Town, Baoan District, Shenzhen China Contact Address: RM2105 SH2822 Trend Centre, 29-31 Cheung Lee Street, Chai an, Hong Kong</p>\r\n', '1', '<p>\r\n	Email: tulio@kawaygroup.com - Website:www.kawaygroup.com</p>\r\n'),
(7, 'Universal Ribbon Corp', '73103638', 'Miami Florida, USA', '7', 'proveedor de cintas epson'),
(8, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cliente`
--

CREATE TABLE `tipo_cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_cliente`
--

INSERT INTO `tipo_cliente` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Publico General', NULL),
(2, 'Empresa', NULL),
(3, 'BANCO', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_comprobante`
--

CREATE TABLE `tipo_comprobante` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `igv` int(11) DEFAULT NULL,
  `serie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_comprobante`
--

INSERT INTO `tipo_comprobante` (`id`, `nombre`, `cantidad`, `igv`, `serie`) VALUES
(1, 'Factura', 7, 0, 2018),
(2, 'Guia Remision', 22, 0, 2018),
(3, 'Factura', 2, 0, 2018);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id`, `nombre`, `cantidad`) VALUES
(1, 'DNI', 1),
(3, 'NIT', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transporte_externo`
--

CREATE TABLE `transporte_externo` (
  `id_transporte_ext` int(11) NOT NULL,
  `fecha_salida_transporte` date NOT NULL,
  `fecha_llegada_aduana` date NOT NULL,
  `nombre_chofer` varchar(100) NOT NULL,
  `telefono_chofer` varchar(12) NOT NULL,
  `no_placa` varchar(10) NOT NULL,
  `no_licencia` varchar(50) NOT NULL,
  `contrato_transporte_ext` text NOT NULL,
  `factura_transporte_ext` text NOT NULL,
  `estado_pagado` int(11) NOT NULL DEFAULT '0',
  `estado_transito` int(1) NOT NULL DEFAULT '1',
  `estado_enaduana` int(1) NOT NULL DEFAULT '0',
  `estado_entregado` int(1) NOT NULL DEFAULT '0',
  `observacion_aduana` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transporte_externo`
--

INSERT INTO `transporte_externo` (`id_transporte_ext`, `fecha_salida_transporte`, `fecha_llegada_aduana`, `nombre_chofer`, `telefono_chofer`, `no_placa`, `no_licencia`, `contrato_transporte_ext`, `factura_transporte_ext`, `estado_pagado`, `estado_transito`, `estado_enaduana`, `estado_entregado`, `observacion_aduana`) VALUES
(1, '2018-04-27', '2018-05-02', 'JULIO VENTURA RAMIREZ', '00000000', 'C8X-739', 'Q-40658351', '16e36-014-contrato-transporte-universal-enotria-victor-calla.pdf', '', 0, 0, 0, 1, ''),
(2, '2018-06-12', '2018-06-14', 'papo', '1234456487', 'chp-4578', '45467489', '', '', 0, 0, 0, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `direccion` text NOT NULL,
  `pass` varchar(100) NOT NULL,
  `perfil` varchar(30) NOT NULL,
  `id_almacen` int(11) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `nombre`, `email`, `description`, `direccion`, `pass`, `perfil`, `id_almacen`, `img`) VALUES
(2, 'dagner87', 'Dagner Alena Guerra', 'dalena@keysolutions.com.bo', 'Web Developer  ', '<p>\r\n	Barasea 414, barrio Urbar&iacute;</p>\r\n', '69018bcc689a7e2fb14e7d9b35512e38', 'administrador', 1, 'b9b7c-dagner.jpg'),
(3, 'gpestana', 'Gustavo Pestana Delgado', 'gpestana@keysolutions.com.bo', 'Gerente General', '<p>\r\n	Barasea 414&nbsp;</p>\r\n', 'c8b1c3573cb05148ab0f592b2e904499', 'comprador', 0, '11a49-gustavo.png'),
(4, 'rpestana', 'Roberto Pestana', 'rpestana@keysolutions.com.bo', 'Gerente General', '<p>\r\n	Barrio Las Palmas, Dpto #2</p>\r\n', '99f85d005bf116ad3dbb629d60ddb7c4', 'gerencia', 0, '5a5c5-roberto.png'),
(5, 'alfredo', 'Alfredo Luque', 'dalena@keysolutions.com.bo', 'Vendedor de La Paz', 'Achumani\r\n', '69018bcc689a7e2fb14e7d9b35512e38', 'ventas', 2, '69051-alfre2.png'),
(7, 'santacruz', 'Almacenero Santa Cruz', 'almacen@keysolutions.com.bo', 'Encargado de Almacen', '', '3998cd271eebcc436fa5c23a66a839e8', 'ventas', 1, 'becd3-dagner1.jpg'),
(9, 'aracely', 'Aracely', 'aracely', 'Encargada de Adquisiciones', 'uruguay', 'e10adc3949ba59abbe56e057f20f883e', 'cliente', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `tipo_comprobante_id` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `num_documento` varchar(45) DEFAULT NULL,
  `serie` varchar(45) DEFAULT NULL,
  `id_almacen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `total`, `tipo_comprobante_id`, `id_cliente`, `num_documento`, `serie`, `id_almacen`) VALUES
(1, '2018-01-15', '149876.64', 1, 8, '000001', '2018', 1),
(2, '2018-01-16', NULL, 2, 8, '000001', '2018', 1),
(3, '2018-02-16', NULL, 2, 8, '000002', '2018', 1),
(4, '2018-03-05', NULL, 2, 8, '000003', '2018', 1),
(5, '2018-03-05', NULL, 2, 8, '000004', '2018', 1),
(6, '2018-03-13', '81014.40', 1, 8, '000002', '2018', 1),
(7, '2018-03-13', NULL, 2, 8, '000005', '2018', 0),
(8, '2018-04-14', NULL, 2, 8, '000006', '2018', 0),
(9, '2018-04-16', NULL, 2, 8, '000007', '2018', 0),
(10, '2018-04-24', NULL, 2, 8, '000008', '2018', 0),
(11, '2018-05-15', NULL, 2, 8, '000009', '2018', 0),
(12, '2018-05-21', '105318.72', 1, 8, '000003', '2018', 2),
(13, '2018-05-21', NULL, 2, 8, '000010', '2018', 0),
(14, '2018-05-21', NULL, 2, 8, '000011', '2018', 0),
(15, '2018-02-09', '33362.76', 1, 8, '000004', '2018', 0),
(16, '2018-02-16', NULL, 2, 8, '000012', '2018', 0),
(17, '2018-03-13', NULL, 2, 8, '000013', '2018', 0),
(18, '2018-04-04', NULL, 2, 8, '000014', '2018', 0),
(19, '2018-04-14', NULL, 2, 8, '000015', '2018', 0),
(20, '2018-05-14', NULL, 2, 8, '000016', '2018', 0),
(21, '2018-05-15', NULL, 2, 8, '000017', '2018', 0),
(22, '2018-04-10', '1800.00', 3, 5, '000001', '2018', 0),
(23, '2018-06-06', '3000.00', 3, 8, '000002', '2018', 0),
(24, '2018-06-06', NULL, 2, 8, '000018', '2018', 2),
(25, '2018-06-06', NULL, 2, 8, '000019', '2018', 2),
(26, '2018-06-08', NULL, 2, 8, '000020', '2018', 1),
(27, '2018-06-08', '150.00', 1, 8, '000005', '2018', 0),
(28, '2018-06-08', NULL, 1, 8, '000006', '2018', 1),
(29, '2018-06-08', NULL, 2, 8, '000021', '2018', 1),
(30, '2018-06-11', NULL, 2, 8, '000022', '2018', 1),
(31, '2018-06-11', '1500.00', 1, 5, '000007', '2018', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agencias`
--
ALTER TABLE `agencias`
  ADD PRIMARY KEY (`id_agencia`);

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`id_almacen`);

--
-- Indices de la tabla `almacen_clientes`
--
ALTER TABLE `almacen_clientes`
  ADD PRIMARY KEY (`id_alcli`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id_conf`);

--
-- Indices de la tabla `detalle_propuesta`
--
ALTER TABLE `detalle_propuesta`
  ADD PRIMARY KEY (`id_deta_pro`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_venta_detalle_idx` (`venta_id`),
  ADD KEY `fk_producto_detalle_idx` (`producto_id`);

--
-- Indices de la tabla `distribucion_guia`
--
ALTER TABLE `distribucion_guia`
  ADD PRIMARY KEY (`id_dis_guia`);

--
-- Indices de la tabla `entrada_productos`
--
ALTER TABLE `entrada_productos`
  ADD PRIMARY KEY (`id_entrada`);

--
-- Indices de la tabla `merca_aduanabol`
--
ALTER TABLE `merca_aduanabol`
  ADD PRIMARY KEY (`id_mercaduanabol`);

--
-- Indices de la tabla `merca_aduanaperu`
--
ALTER TABLE `merca_aduanaperu`
  ADD PRIMARY KEY (`id_mercperu`);

--
-- Indices de la tabla `merca_transpoext`
--
ALTER TABLE `merca_transpoext`
  ADD PRIMARY KEY (`id_mercatrans`);

--
-- Indices de la tabla `merca_trans_bol`
--
ALTER TABLE `merca_trans_bol`
  ADD PRIMARY KEY (`id_mercatransbol`);

--
-- Indices de la tabla `movi_al_cli`
--
ALTER TABLE `movi_al_cli`
  ADD PRIMARY KEY (`idmov_alcli`);

--
-- Indices de la tabla `paquete`
--
ALTER TABLE `paquete`
  ADD PRIMARY KEY (`id_paquete`);

--
-- Indices de la tabla `pedido_proveedor`
--
ALTER TABLE `pedido_proveedor`
  ADD PRIMARY KEY (`id_pedido_prov`);

--
-- Indices de la tabla `precio_cliente`
--
ALTER TABLE `precio_cliente`
  ADD PRIMARY KEY (`id_precli`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `productos_stock`
--
ALTER TABLE `productos_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categoria_producto_idx` (`id_categoria`);

--
-- Indices de la tabla `propuesta`
--
ALTER TABLE `propuesta`
  ADD PRIMARY KEY (`id_propuesta`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `tipo_comprobante`
--
ALTER TABLE `tipo_comprobante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `transporte_externo`
--
ALTER TABLE `transporte_externo`
  ADD PRIMARY KEY (`id_transporte_ext`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cliente_venta_idx` (`id_cliente`),
  ADD KEY `fk_tipo_comprobante_venta_idx` (`tipo_comprobante_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agencias`
--
ALTER TABLE `agencias`
  MODIFY `id_agencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `almacen`
--
ALTER TABLE `almacen`
  MODIFY `id_almacen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `almacen_clientes`
--
ALTER TABLE `almacen_clientes`
  MODIFY `id_alcli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id_conf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `detalle_propuesta`
--
ALTER TABLE `detalle_propuesta`
  MODIFY `id_deta_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `distribucion_guia`
--
ALTER TABLE `distribucion_guia`
  MODIFY `id_dis_guia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `entrada_productos`
--
ALTER TABLE `entrada_productos`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `merca_aduanabol`
--
ALTER TABLE `merca_aduanabol`
  MODIFY `id_mercaduanabol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `merca_aduanaperu`
--
ALTER TABLE `merca_aduanaperu`
  MODIFY `id_mercperu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `merca_transpoext`
--
ALTER TABLE `merca_transpoext`
  MODIFY `id_mercatrans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `merca_trans_bol`
--
ALTER TABLE `merca_trans_bol`
  MODIFY `id_mercatransbol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `movi_al_cli`
--
ALTER TABLE `movi_al_cli`
  MODIFY `idmov_alcli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `paquete`
--
ALTER TABLE `paquete`
  MODIFY `id_paquete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `pedido_proveedor`
--
ALTER TABLE `pedido_proveedor`
  MODIFY `id_pedido_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `precio_cliente`
--
ALTER TABLE `precio_cliente`
  MODIFY `id_precli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `productos_stock`
--
ALTER TABLE `productos_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `propuesta`
--
ALTER TABLE `propuesta`
  MODIFY `id_propuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo_comprobante`
--
ALTER TABLE `tipo_comprobante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `transporte_externo`
--
ALTER TABLE `transporte_externo`
  MODIFY `id_transporte_ext` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
