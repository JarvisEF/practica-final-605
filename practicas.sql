-- Volcado SQL de phpMyAdmin
-- versión 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anfitrión: localhost
-- Tiempo de generación: 23 de marzo de 2023 a las 21:51
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

ESTABLECER SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
INICIAR LA TRANSACCIÓN;
SET time_zone = "+00:00";


/*! 40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*! 40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*! 40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*! 40101 NOMBRES DE CONJUNTOS utf8mb4 */;

--
-- Base de datos: `prácticas`
--

-- --------------------------------------------------------

--
-- Estructura de la mesa para la mesa `lugar`
--

CREAR TABLA `lugar` (
  `id_lugar` int(11) NO NULO,
  `nombreLugar` varchar(255) NOT NULL,
  El texto `descripcionLugar` NO ES NULO,
  `telefono` varchar(255) NOT NULL,
  `emailLugar` varchar(255) NO NULL,
  `facebookLugar` varchar(255) NOT NULL,
  `horarioLugar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Datos de dumping para la tabla `lugar`
--

INSERTAR EN LOS VALORES DE `lugar` (`id_lugar`, `nombreLugar`, `descripcionLugar`, `telefono`, `emailLugar`, `facebookLugar`, `horarioLugar`)
(1, 'Ejemplo', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam, vel. Maiores voluptate eos provident minima nam perferendis non voluptatem ut?', '5520058150', 'ejemplo@example.com', 'lugar_ejemplo', '12 ');

-- --------------------------------------------------------

--
-- Estructura de la mesa para la mesa `plantel`
--

CREAR TABLA `plantel` (
  `id_plantel` int(11) NO NULL,
  `nombrePlantel` varchar(255) NOT NULL,
  `clavePlantel` varchar(255) NOT NULL,
  `direccionPlantel` texto NO NULO,
  `telefonoPlantel` varchar(55) NOT NULL,
  `responsablePlantel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping de datos para la tabla `plantel`
--

INSERT INTO `plantel` (`id_plantel`, `nombrePlantel`, `clavePlantel`, `direccionPlantel`, `telefonoPlantel`, `responsablePlantel`) VALUES
(1, 'Naucalpan', '1234', 'Calle 12', '5512301292', 'Elias');

-- --------------------------------------------------------

--
-- Estructura de la tabla para la tabla `usuarios`
--

CREAR TABLA `usuarios` (
  `id_user` int(11) NO NULL,
  `nombre` varchar(55) NOT NULL,
  `apellidoP` varchar(55) NOT NULL,
  `apellidoM` varchar(55) NOT NULL,
  `nombre de usuario` varchar(55) NO NULL,
  El texto `dirección` NO ES NULO,
  `telefono` varchar(55) NOT NULL,
  `fecha` fecha NO NULA,
  `correo electrónico` varchar(255) NO NULO,
  `contraseña` varchar(255) NO NULO
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping de datos para la tabla `usuarios`
--

INSERTAR EN `usuarios` (`id_user`, `nombre`, `apellidoP`, `apellidoM`, `nombre de usuario`, `direccion`, `telefono`, `fecha`, `correo electrónico`, `contraseña`) VALORES
(1, 'Emanuel', 'Ortiz', 'Garcia', 'Emanuel', 'Francisco I. Madero 9 San Rafael Chamapa 2da seccion', '5520058150', '2004-12-20', 'ejemplo@ejemplo.com', '12345'),
(2, 'a', 'a', 'a', 'a', 'a', '123', '2009-12-02', 'a@ejemplo.com', 'a');

--
-- Índices para tablas descargadas
--

--
-- Índices para la tabla `lugar`
--
ALTER TABLE `lugar`
AÑADIR CLAVE PRIMARIA (`id_lugar`);

--
-- Índices para la tabla `plantel`
--
TABLA ALTER `plantel`
AÑADIR CLAVE PRIMARIA (`id_plantel`);

--
-- Índices para la tabla `usuarios`
--
ALTER TABLE `usuarios`
AÑADIR CLAVE PRIMARIA (`id_user`);

--
-- AUTO_INCREMENT para tablas descargadas
--

--
-- AUTO_INCREMENT para la tabla `lugar`
--
ALTER TABLE `lugar`
MODIFICAR `id_lugar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT para la tabla `plantel`
--
TABLA ALTER `plantel`
MODIFY `id_plantel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT para la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFICAR `id_user` int(11) NO NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMPROMETERSE;

/*! 40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*! 40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*! 40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
