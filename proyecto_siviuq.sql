-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2015 a las 07:41:48
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto_siviuq`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoria`
--

CREATE TABLE IF NOT EXISTS `convocatoria` (
`NUMERO` int(11) NOT NULL,
  `DESCRIPCION` varchar(80) NOT NULL,
  `FECHA_INI` date NOT NULL,
  `FECHA_FIN` date NOT NULL,
  `DOCUMENTO` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `convocatoria`
--

INSERT INTO `convocatoria` (`NUMERO`, `DESCRIPCION`, `FECHA_INI`, `FECHA_FIN`, `DOCUMENTO`) VALUES
(1, 'convocatoria numero 2', '2015-04-25', '2015-05-03', 'application/documentos/formatos/CONVOCATORIA_INT._No._02_PROYECTOS_2015.pdf'),
(2, 'Convocatoria 3', '2015-04-27', '2015-04-30', 'application/documentos/formatos/CONVOCATORIA_INT._No._02_PROYECTOS_2015.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoria_proyecto`
--

CREATE TABLE IF NOT EXISTS `convocatoria_proyecto` (
  `FK_CONVOCATORIA` varchar(30) NOT NULL,
  `FK_PROYECTO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `convocatoria_proyecto`
--

INSERT INTO `convocatoria_proyecto` (`FK_CONVOCATORIA`, `FK_PROYECTO`) VALUES
('1', '45'),
('1', '47'),
('2', '99');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_semillero`
--

CREATE TABLE IF NOT EXISTS `estudiante_semillero` (
  `SEMESTRE_SEMILLERO` varchar(30) NOT NULL,
  `FACULTAD` varchar(30) NOT NULL,
  `PROGRAMA` varchar(30) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `IDENTIFICACION` varchar(20) NOT NULL,
  `SEMESTRE` varchar(2) NOT NULL,
  `CORREO` varchar(40) NOT NULL,
  `CELULAR` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante_semillero`
--

INSERT INTO `estudiante_semillero` (`SEMESTRE_SEMILLERO`, `FACULTAD`, `PROGRAMA`, `NOMBRE`, `IDENTIFICACION`, `SEMESTRE`, `CORREO`, `CELULAR`) VALUES
('semestre 2015-1', 'Ingenieria', 'Sistemas y Computación', 'Juan Sebastian Florez', '15464', '9', 'efess', 'ffeafea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formatos`
--

CREATE TABLE IF NOT EXISTS `formatos` (
  `NAME_FORMATO` varchar(30) NOT NULL,
  `FORMATO_PROYECTO` mediumtext NOT NULL,
  `NAME_CUADRO` varchar(30) NOT NULL,
  `CUADRO_PRESUPUESTO` mediumtext NOT NULL,
  `NAME_CONVOCATORIA` varchar(30) NOT NULL,
  `CONVOCATORIA` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formatos`
--

INSERT INTO `formatos` (`NAME_FORMATO`, `FORMATO_PROYECTO`, `NAME_CUADRO`, `CUADRO_PRESUPUESTO`, `NAME_CONVOCATORIA`, `CONVOCATORIA`) VALUES
('present_proyec.doc', 'application/documentos/formatos/present_proyec.doc', 'cuadros_presu.xls', 'application/documentos/formatos/cuadros_presu.xls', 'CONVOCATORIA_INT._No._02.pdf', 'application/documentos/formatos/CONVOCATORIA_INT._No._02_PROYECTOS_2015.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_investigacion`
--

CREATE TABLE IF NOT EXISTS `grupo_investigacion` (
  `NOMBRE` varchar(30) NOT NULL,
  `IDENTIFICACION` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo_investigacion`
--

INSERT INTO `grupo_investigacion` (`NOMBRE`, `IDENTIFICACION`) VALUES
('sinfoci', '1'),
('geo', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigador`
--

CREATE TABLE IF NOT EXISTS `investigador` (
  `PROGRAMA` varchar(30) NOT NULL,
  `FACULTAD` varchar(30) NOT NULL,
  `GRUPO_INVESTIGACION` varchar(30) NOT NULL,
  `TIPO_VINCULACION` varchar(30) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `DOCUMENTO` varchar(20) NOT NULL,
  `CELULAR` varchar(20) NOT NULL,
  `CORREO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `investigador`
--

INSERT INTO `investigador` (`PROGRAMA`, `FACULTAD`, `GRUPO_INVESTIGACION`, `TIPO_VINCULACION`, `NOMBRE`, `DOCUMENTO`, `CELULAR`, `CORREO`) VALUES
('Sistemas y Computación', 'Ingenieria', 'sinfoci', 'planta', 'faber', '123', '122', 'faber@'),
('Sistemas y Computación', 'Ingenieria', 'sinfoci', 'planta', 'wiliam', '1234', 'qqqw', 'william@'),
('Civil', 'Ingenieria', 'geo', 'planta', 'fabian', '145', '22222', 'joseob');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigadores_grupo_invest`
--

CREATE TABLE IF NOT EXISTS `investigadores_grupo_invest` (
  `FK_GRUPO` varchar(30) NOT NULL,
  `FK_INVESTIGADOR` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `investigadores_grupo_invest`
--

INSERT INTO `investigadores_grupo_invest` (`FK_GRUPO`, `FK_INVESTIGADOR`) VALUES
('1', '123'),
('1', '1234'),
('2', '145');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `FACULTAD` varchar(30) NOT NULL,
  `PROGRAMA` varchar(30) NOT NULL,
  `ANIO_INICIO` varchar(30) NOT NULL,
  `TITULO` varchar(30) NOT NULL,
  `NUMERO` varchar(30) NOT NULL,
  `DURACION` varchar(20) NOT NULL,
  `GRUPO_INVESTIGACION` varchar(30) NOT NULL,
  `LINEA_INVESTIGACION` varchar(30) NOT NULL,
  `INVESTIGADOR_PRINCIPAL` varchar(30) NOT NULL,
  `ESTADO` varchar(30) NOT NULL,
  `DETALLES` varchar(80) NOT NULL,
  `FORMATO_PROYECTO` text NOT NULL,
  `CUADRO_PRESUPUESTO` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`FACULTAD`, `PROGRAMA`, `ANIO_INICIO`, `TITULO`, `NUMERO`, `DURACION`, `GRUPO_INVESTIGACION`, `LINEA_INVESTIGACION`, `INVESTIGADOR_PRINCIPAL`, `ESTADO`, `DETALLES`, `FORMATO_PROYECTO`, `CUADRO_PRESUPUESTO`) VALUES
('Ingenieria', 'Sistemas y Computación', '2015', 'palabras', '45', '12 meses', 'sinfoci', 'usabilidad', '123', 'activo', 'palabras', '', ''),
('Ingenieria', 'Sistemas y Computación', '2015', 'letras', '47', '12 meses', 'sinfoci', 'usabilidad', '123', 'activo', 'letras', '', ''),
('Ciencias de la Salud', 'Medicina', '2015', 'Cancer', '99', '24 meses', 'geo', 'enfermedad', '145', 'activo', 'info cancer', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_grupo_invest`
--

CREATE TABLE IF NOT EXISTS `proyecto_grupo_invest` (
  `FK_GRUPO` varchar(30) NOT NULL,
  `FK_PROYECTO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto_grupo_invest`
--

INSERT INTO `proyecto_grupo_invest` (`FK_GRUPO`, `FK_PROYECTO`) VALUES
('1', '45'),
('1', '47'),
('2', '99');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_investigador`
--

CREATE TABLE IF NOT EXISTS `proyecto_investigador` (
  `FK_INVESTIGADOR` varchar(30) NOT NULL,
  `FK_PROYECTO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto_investigador`
--

INSERT INTO `proyecto_investigador` (`FK_INVESTIGADOR`, `FK_PROYECTO`) VALUES
('123', '45'),
('123', '47'),
('145', '99');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `convocatoria`
--
ALTER TABLE `convocatoria`
 ADD PRIMARY KEY (`NUMERO`);

--
-- Indices de la tabla `estudiante_semillero`
--
ALTER TABLE `estudiante_semillero`
 ADD PRIMARY KEY (`IDENTIFICACION`), ADD UNIQUE KEY `IDENTIFICACION` (`IDENTIFICACION`);

--
-- Indices de la tabla `grupo_investigacion`
--
ALTER TABLE `grupo_investigacion`
 ADD PRIMARY KEY (`IDENTIFICACION`), ADD UNIQUE KEY `IDENTIFICACION` (`IDENTIFICACION`);

--
-- Indices de la tabla `investigador`
--
ALTER TABLE `investigador`
 ADD PRIMARY KEY (`DOCUMENTO`), ADD UNIQUE KEY `DOCUMENTO` (`DOCUMENTO`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
 ADD PRIMARY KEY (`NUMERO`), ADD UNIQUE KEY `IDENTIFICACION` (`NUMERO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `convocatoria`
--
ALTER TABLE `convocatoria`
MODIFY `NUMERO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
