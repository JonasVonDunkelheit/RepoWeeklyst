SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `weeklystbd` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `weeklystbd`;

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `num_tel` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `fichas` (
  `id_ficha` int(11) NOT NULL,
  `nombre_programa` varchar(200) NOT NULL,
  `num_ficha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `fichas` (`id_ficha`, `nombre_programa`, `num_ficha`) VALUES
(9, 'Electricidad', '2405987'),
(13, 'Análisis y Desarrollo de Sistemas de Información', '756984'),
(14, 'Análisis y Desarrollo de Sistemas de Información', '589765'),
(15, 'Electricidad', '75486'),
(17, 'Análisis y Desarrollo de Sistemas de Información', '214598');

CREATE TABLE `lista` (
  `id_lista` int(11) NOT NULL,
  `id_ficha` int(11) DEFAULT NULL,
  `id_aprendiz` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id_registro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `registros` (
  `id_registros` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `registros` (`id_registros`, `descripcion`) VALUES
(1, 'Asiste'),
(2, 'Falla');

CREATE TABLE `rol` (
  `id_user` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `rol` (`id_user`, `descripcion`) VALUES
(1, 'Instructor'),
(2, 'Aprendiz');

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `tipo_docu` varchar(50) NOT NULL,
  `num_docu` varchar(50) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_ficha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `tipo_docu`, `num_docu`, `id_rol`, `correo`, `password`, `id_ficha`) VALUES
(6, 'Pepito', 'Perez', 'Cédula de Ciudadanía.', '1034654876', 2, 'pepito@misena.edu.co', 'asdasd', 14),
(8, 'Mario', 'Torres', 'C.C.', '22213132112', 1, 'marioqejemplo.com', 'asdasd', NULL),
(9, 'Pedro', 'Mendoza', 'T.I.', '1587496322', 2, 'pedro@ejemplo.com', '123456789', NULL),
(10, 'Jorge Alberto', 'Hurtado Cortes', 'Cédula de Ciudadanía', '1000692594', 2, 'jahurtado495@misena.edu.co', 'asd', 9);


ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

ALTER TABLE `fichas`
  ADD PRIMARY KEY (`id_ficha`);

ALTER TABLE `lista`
  ADD PRIMARY KEY (`id_lista`),
  ADD KEY `id_aprendiz` (`id_aprendiz`),
  ADD KEY `id_aprendiz_2` (`id_aprendiz`),
  ADD KEY `id_registro` (`id_registro`),
  ADD KEY `id_ficha` (`id_ficha`);

ALTER TABLE `registros`
  ADD PRIMARY KEY (`id_registros`);

ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_user`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_ficha` (`id_ficha`);


ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `fichas`
  MODIFY `id_ficha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

ALTER TABLE `lista`
  MODIFY `id_lista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `registros`
  MODIFY `id_registros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `rol`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;


ALTER TABLE `lista`
  ADD CONSTRAINT `lista_ibfk_1` FOREIGN KEY (`id_registro`) REFERENCES `registros` (`id_registros`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lista_ibfk_2` FOREIGN KEY (`id_aprendiz`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lista_ibfk_3` FOREIGN KEY (`id_ficha`) REFERENCES `fichas` (`id_ficha`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_ficha`) REFERENCES `fichas` (`id_ficha`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
