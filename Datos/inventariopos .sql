-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2020 a las 19:13:49
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventariopos`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_ActualizarAgenteOb` (IN `Id` INT(11), IN `Nombre` TINYTEXT, IN `Apellido` TINYTEXT, IN `Correo` VARCHAR(50), IN `Salario` INT(10), IN `Antiguedad` INT(10))  BEGIN
update agenteonboarding
set AgtoNombre= Nombre , AgtoApellido= Apellido , AgtoCorreo= Correo,  AgtoSueldo= Salario, AgtoAntiguedad=Antiguedad
where IdAgente=Id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_ActualizarPos` (IN `Id` INT(11), `Imei` VARCHAR(20), IN `Simcard` INT(10) UNSIGNED, IN `Estado` ENUM('activo','inactivo'))  BEGIN
update pos
set PosImei= imei, PosSimcard = Simcard, PosEstado = Estado
where IdPos= Id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_ActualizarRestaurante` (IN `Codigo_Restaurante` INT(11), IN `Nombre` VARCHAR(80), IN `Especialidad` VARCHAR(50))  BEGIN
update restaurante
set 
RestNombre= Nombre,
RestEspecialidad= Especialidad
where IdRestaurante = Codigo_Restaurante;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_CasosAgente` (`AgenteId` INT(11))  BEGIN
select OnbCodigo,OnbIdAgenteOb,OnbEstadoCaso,OnbRestaurante from onboarding
where  OnbIdAgenteOb = AgenteId;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_CrearAgenteOnboarding` (`Nombre` TINYTEXT, `Apellido` TINYTEXT, `Correo` VARCHAR(50), `Salario` INT(10), `Antiguedad` INT(10))  BEGIN
insert into agenteonboarding (AgtoNombre,AgtoApellido,AgtoCorreo,AgtoSueldo,AgtoAntiguedad) value (Nombre,Apellido,Correo,Salario,Antiguedad);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_CrearComercial` (IN `Nombre` VARCHAR(50))  BEGIN
insert into comercial (ComNombre) value (Nombre);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_CrearRestaurante` (IN `Nombre` VARCHAR(80), `Especialidad` VARCHAR(50), `Comercial` INT(10), `Pos` INT(10))  BEGIN
insert into restaurante (RestNombre,RestEspecialidad,RestComercial,RestPos) value (Nombre,Especialidad,Comercial,Pos);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_GestionarOnboarding` (IN `Agente` INT(11), `Estado` ENUM('cerrado','pendiente'), `Restaurante` INT(11))  BEGIN
insert into onboarding (OnbIdAgenteOb,OnbEstadoCaso,OnbRestaurante) values (Agente,Estado,Restaurante)
;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_InsertarPos` (IN `Imei` VARCHAR(20), `Simcard` INT(10) UNSIGNED, `Estado` ENUM('activo','inactivo'))  BEGIN
insert into pos (PosImei, PosSimcard, PosEstado) value (Imei, Simcard, Estado);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_ListaAgente` ()  BEGIN
select * from agenteonboarding;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_ListaComercial` ()  BEGIN
select * from comercial;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_ListaOnboarding` ()  BEGIN select * from onboarding;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_ListaPos` ()  BEGIN
select * from  pos;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_ListaRestaurante` ()  BEGIN
select * from  restaurante;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_PosActivos` ()  BEGIN
select IdPos,PosImei,PosSimcard,PosEstado from pos
where PosEstado='activo';
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Pro_PosInactivos` ()  BEGIN
select IdPos,PosImei,PosSimcard,PosEstado from pos
where PosEstado='inactivo';
END$$

--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `AGENTESACTIVOS` () RETURNS INT(11) BEGIN
DECLARE contagente int;
SELECT COUNT(*) INTO contagente FROM agenteonboarding;
RETURN contagente;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `AGENTESCONMASDEDOSAÑOSDEANTIGUEDAD` () RETURNS INT(11) BEGIN
DECLARE contagente int;
SELECT COUNT(*) INTO contagente
FROM agenteonboarding WHERE AgtoAntiguedad >= 2;
RETURN contagente;
end$$

CREATE DEFINER=`root`@`localhost` FUNCTION `CORREOAGENTE` (`v_id` INT) RETURNS VARCHAR(50) CHARSET utf8mb4 BEGIN
DECLARE CORREOAGENT varchar(50);
SET CORREOAGENT = (SELECT concat(AgtoNombre, "_ ", AgtoCorreo)from agenteonboarding WHERE IdAgente=v_id);
RETURN CORREOAGENT;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `NETOSUELDOAGENTES` () RETURNS INT(11) BEGIN
DECLARE contagente int;
SELECT SUM(AgtoSueldo) INTO contagente
FROM agenteonboarding; 
RETURN contagente;
end$$

CREATE DEFINER=`root`@`localhost` FUNCTION `POSACTIVOSENRESTAURANTES` () RETURNS INT(11) BEGIN
DECLARE contador int;
SELECT COUNT(*) INTO CONTADOR
FROM pos 
WHERE  PosEstado = 'ACTIVO';
RETURN contador;
end$$

CREATE DEFINER=`root`@`localhost` FUNCTION `POSDISPONIBLES` () RETURNS INT(11) BEGIN
DECLARE contador int;
SELECT COUNT(*) INTO CONTADOR
FROM pos 
WHERE  PosEstado = 'INACTIVO';
RETURN contador;
end$$

CREATE DEFINER=`root`@`localhost` FUNCTION `PRIORIDADRESTAURANTE` (`REST_PRIORIDAD` VARCHAR(5)) RETURNS VARCHAR(20) CHARSET utf8mb4 BEGIN 
	CASE REST_PRIORIDAD
    WHEN '1' THEN
    RETURN 'ALTO';
     WHEN '2' THEN
    RETURN 'MEDIO';
     WHEN '3' THEN
    RETURN 'BAJO';
    RETURN 'MEDIO';
     WHEN '4' THEN
    RETURN 'ALTO';
     WHEN '5' THEN
    RETURN 'MEDIO';
    ELSE 
    RETURN 'N/A';
    END CASE;

END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `RESTAURANTE_ESPECIALIDAD` (`v_id` INT) RETURNS VARCHAR(50) CHARSET utf8mb4 BEGIN
DECLARE posrestaurante varchar(50);
SET posrestaurante = (SELECT concat(RestNombre, "_", RestEspecialidad)from restaurante WHERE IdRestaurante=v_id);
RETURN posrestaurante;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `SUELDOAGENTE` (`v_id` INT) RETURNS VARCHAR(50) CHARSET utf8mb4 BEGIN
DECLARE SUELDOAGENT varchar(50);
SET SUELDOAGENT = (SELECT concat(AgtoNombre, " ", AgtoSueldo)from agenteonboarding WHERE IdAgente=v_id);
RETURN SUELDOAGENT;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `TOTALPOS` () RETURNS INT(11) BEGIN
DECLARE contador int;
SELECT COUNT(*) INTO contador FROM pos;
RETURN contador;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenteonboarding`
--

CREATE TABLE `agenteonboarding` (
  `IdAgente` int(11) NOT NULL,
  `AgtoNombre` tinytext NOT NULL,
  `AgtoApellido` tinytext NOT NULL,
  `AgtoCorreo` varchar(50) NOT NULL,
  `AgtoSueldo` int(10) NOT NULL,
  `AgtoAntiguedad` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agenteonboarding`
--

INSERT INTO `agenteonboarding` (`IdAgente`, `AgtoNombre`, `AgtoApellido`, `AgtoCorreo`, `AgtoSueldo`, `AgtoAntiguedad`) VALUES
(1, 'Javier ', 'Nuñez', 'javi89@hotmail.com', 900000, 2),
(5, 'Carla', 'Luligo', 'cartyu@gmail.com', 8000000, 9);

--
-- Disparadores `agenteonboarding`
--
DELIMITER $$
CREATE TRIGGER `agenteonboarding_BEFORE_INSERT` BEFORE INSERT ON `agenteonboarding` FOR EACH ROW BEGIN
set new.AgtoNombre = concat(upper(substring(new.AgtoNombre,1,1)), substring(new.AgtoNombre,2));
set new.AgtoApellido = concat(upper(substring(new.AgtoApellido,1,1)), substring(new.AgtoApellido,2));
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `agenteonboarding_BEFORE_UPDATE` BEFORE UPDATE ON `agenteonboarding` FOR EACH ROW BEGIN
IF new.AgtoSueldo < 0 THEN
set new.AgtoSueldo = 0;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comercial`
--

CREATE TABLE `comercial` (
  `IdComercial` int(11) NOT NULL,
  `ComNombre` varchar(50) NOT NULL,
  `ComApellido` varchar(20) NOT NULL,
  `ComCedula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comercial`
--

INSERT INTO `comercial` (`IdComercial`, `ComNombre`, `ComApellido`, `ComCedula`) VALUES
(1, 'carlos', 'torres', 8963325),
(2, 'Carlos', 'buritica', 11568963),
(4, 'canuki', 'luligo', 67890008);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `onboarding`
--

CREATE TABLE `onboarding` (
  `OnbCodigo` int(11) NOT NULL,
  `OnbIdAgenteOb` int(11) NOT NULL,
  `OnbPos` int(11) NOT NULL,
  `OnbRestaurante` int(11) NOT NULL,
  `OnbObservaciones` text DEFAULT NULL,
  `OnbEstadoCaso` enum('asignado','pendiente','indagacion') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `onboarding`
--

INSERT INTO `onboarding` (`OnbCodigo`, `OnbIdAgenteOb`, `OnbPos`, `OnbRestaurante`, `OnbObservaciones`, `OnbEstadoCaso`) VALUES
(9, 1, 2, 1, ' ksedfinggrebrewgewrfgbqgfregvfrebfbefgew', 'asignado'),
(10, 1, 1, 2, ' bccv dsvhefvgegVYDFGVGVVF', 'asignado'),
(24, 5, 0, 5, ' por 3 asociasdo', 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pos`
--

CREATE TABLE `pos` (
  `IdPos` int(11) NOT NULL,
  `PosImei` varchar(20) NOT NULL,
  `PosSimcard` int(10) UNSIGNED NOT NULL,
  `PosEstado` enum('activo','inactivo','inhabilitado') NOT NULL DEFAULT 'inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pos`
--

INSERT INTO `pos` (`IdPos`, `PosImei`, `PosSimcard`, `PosEstado`) VALUES
(1, '789456', 31869036, 'inactivo'),
(2, '8527411PÑ6', 3108906719, 'inhabilitado'),
(3, '8965312IK', 3173226653, 'inactivo'),
(4, '65659891', 3145698785, 'inactivo'),
(5, '678900ioo9', 3145678909, 'inactivo'),
(6, '45678jnj', 2134567876, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurante`
--

CREATE TABLE `restaurante` (
  `IdRestaurante` int(11) NOT NULL,
  `RestNombre` varchar(50) NOT NULL,
  `RestEspecialidad` varchar(50) NOT NULL,
  `RestComercial` int(11) NOT NULL,
  `RestPos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `restaurante`
--

INSERT INTO `restaurante` (`IdRestaurante`, `RestNombre`, `RestEspecialidad`, `RestComercial`, `RestPos`) VALUES
(1, 'LAS DELICIAS DE LA QUINTA', 'MAR ', 1, 1),
(2, 'EL AJIACO', 'TIPICA', 2, 4),
(5, 'la farsa', 'mar', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `CcUsuario` int(11) NOT NULL,
  `UsuarioNombre` varchar(45) NOT NULL,
  `UsuarioClave` varchar(45) NOT NULL,
  `UsuarioEmail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `CcUsuario`, `UsuarioNombre`, `UsuarioClave`, `UsuarioEmail`) VALUES
(1, 1143863107, 'luisa fernanda riascos', 'luligo9508', 'luisaluligo@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenteonboarding`
--
ALTER TABLE `agenteonboarding`
  ADD PRIMARY KEY (`IdAgente`);

--
-- Indices de la tabla `comercial`
--
ALTER TABLE `comercial`
  ADD PRIMARY KEY (`IdComercial`);

--
-- Indices de la tabla `onboarding`
--
ALTER TABLE `onboarding`
  ADD PRIMARY KEY (`OnbCodigo`),
  ADD UNIQUE KEY `uc_onboarding` (`OnbRestaurante`),
  ADD UNIQUE KEY `OnbRestaurante` (`OnbRestaurante`),
  ADD KEY `OnbIdAgenteOb` (`OnbIdAgenteOb`);

--
-- Indices de la tabla `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`IdPos`),
  ADD UNIQUE KEY `Uc_pos` (`PosImei`),
  ADD UNIQUE KEY `Uc_posS` (`PosSimcard`);

--
-- Indices de la tabla `restaurante`
--
ALTER TABLE `restaurante`
  ADD PRIMARY KEY (`IdRestaurante`),
  ADD UNIQUE KEY `uc_restaurante` (`RestPos`),
  ADD KEY `restaurante_ibfk_1` (`RestComercial`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenteonboarding`
--
ALTER TABLE `agenteonboarding`
  MODIFY `IdAgente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `comercial`
--
ALTER TABLE `comercial`
  MODIFY `IdComercial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `onboarding`
--
ALTER TABLE `onboarding`
  MODIFY `OnbCodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `pos`
--
ALTER TABLE `pos`
  MODIFY `IdPos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `restaurante`
--
ALTER TABLE `restaurante`
  MODIFY `IdRestaurante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `onboarding`
--
ALTER TABLE `onboarding`
  ADD CONSTRAINT `onboarding_ibfk_1` FOREIGN KEY (`OnbIdAgenteOb`) REFERENCES `agenteonboarding` (`IdAgente`),
  ADD CONSTRAINT `onboarding_ibfk_2` FOREIGN KEY (`OnbRestaurante`) REFERENCES `restaurante` (`IdRestaurante`);

--
-- Filtros para la tabla `restaurante`
--
ALTER TABLE `restaurante`
  ADD CONSTRAINT `restaurante_ibfk_1` FOREIGN KEY (`RestComercial`) REFERENCES `comercial` (`IdComercial`),
  ADD CONSTRAINT `restaurante_ibfk_2` FOREIGN KEY (`RestPos`) REFERENCES `pos` (`IdPos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
