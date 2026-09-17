-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2026 a las 01:55:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `equipo_jugadores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `fundacion` date NOT NULL,
  `pais` varchar(30) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `nombre`, `fundacion`, `pais`, `imagen`) VALUES
(1, 'Club Atletico Boca Juniors', '1905-04-03', 'Argentina', 'https://assets.football-logos.cc/logos/argentina/1500x1500/boca-juniors.009a4e59.png'),
(2, 'Club Atlético River Plate', '1901-05-25', 'Argentina', 'https://assets.football-logos.cc/logos/argentina/1500x1500/river-plate.1ac01d84.png'),
(3, 'Club Atlético Independiente', '1905-01-01', 'Argentina', 'https://assets.football-logos.cc/logos/argentina/1500x1500/independiente.fe207eca.png'),
(4, 'Racing Club', '1903-03-25', 'Argentina', 'https://assets.football-logos.cc/logos/argentina/1500x1500/racing-club.2e7a0fc0.png'),
(5, 'Club Atlético San Lorenzo de Almagro', '1908-04-01', 'Argentina', 'https://assets.football-logos.cc/logos/argentina/1500x1500/san-lorenzo-de-almagro.a0e4e931.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id_jugador` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `fecha_nacimieto` date NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `sueldo` int(11) NOT NULL,
  `posicion` varchar(20) NOT NULL,
  `IMAGEN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`id_jugador`, `id_equipo`, `fecha_nacimieto`, `nombre`, `apellido`, `sueldo`, `posicion`, `IMAGEN`) VALUES
(1, 1, '1994-06-29', 'Leandro', 'Paredes', 850000, 'Mediocampista', 'https://bocastats.com/assets/players/leandro-paredes.webp'),
(2, 1, '1996-02-24', 'Miguel', 'Merentiel', 600000, 'Delantero', 'https://bocastats.com/assets/players/miguel-merentiel.webp'),
(3, 1, '1996-05-19', 'Sebastián', 'Villa', 500000, 'Delantero', 'https://bocastats.com/assets/players/sebastian-villa.webp'),
(4, 1, '1997-02-25', 'Santiago', 'Ascacíbar', 550000, 'Mediocampista', 'https://bocastats.com/assets/players/santiago-ascacibar.webp'),
(5, 2, '1988-02-12', 'Nicolás', 'Otamendi', 800000, 'Defensor', 'https://sitiooficialstorageprod.blob.core.windows.net/imagenes-sitio/imagenes-plantel/futbol/2026/07/30-Nicol_s_Otamendi_e04b1ecf99a1_82427cd4.png'),
(6, 2, '2001-04-26', 'Thiago', 'Almada', 950000, 'Mediocampista', 'https://sitiooficialstorageprod.blob.core.windows.net/imagenes-sitio/imagenes-plantel/futbol/2026/08/Thiago_Almada_c9e9971039ab_ddcb1089.png'),
(7, 2, '1995-03-09', 'Ángel', 'Correa', 850000, 'Delantero', 'https://sitiooficialstorageprod.blob.core.windows.net/imagenes-sitio/imagenes-plantel/futbol/2026/07/10-Angel_Correa_3bdc609f6279_7e774bbe.png'),
(8, 2, '1997-01-01', 'Gonzalo', 'Montiel', 650000, 'Defensor', 'https://sitiooficialstorageprod.blob.core.windows.net/imagenes-sitio/imagenes-plantel/futbol/2026/07/29-Gonzalo_Montiel_acc3e65084e3_33db76d6.png'),
(9, 2, '1991-10-28', 'Marcos', 'Acuña', 700000, 'Defensor', 'https://sitiooficialstorageprod.blob.core.windows.net/imagenes-sitio/imagenes-plantel/futbol/2026/07/21-Marcos_Acu_a_5c4bdfea9d7a_99fce46e.png'),
(10, 3, '1991-03-08', 'Rodrigo', 'Rey', 600000, 'Arquero', 'https://clubaindependiente.com.ar/cache/plantel/33_rey_rodrigo.jpg'),
(11, 3, '1990-06-03', 'Iván', 'Marcone', 550000, 'Mediocampista', 'https://clubaindependiente.com.ar/cache/plantel/23_marcone_ivan.jpg'),
(12, 3, '1995-04-26', 'Luciano', 'Cabral', 700000, 'Mediocampista', 'https://clubaindependiente.com.ar/cache/plantel/10_cabral_luciano.jpg'),
(13, 3, '2000-11-22', 'Santiago', 'Montiel', 650000, 'Delantero', 'https://clubaindependiente.com.ar/cache/plantel/07_montiel_santiago.jpg'),
(14, 3, '1994-02-06', 'Ezequiel', 'Ávila', 800000, 'Delantero', 'https://clubaindependiente.com.ar/cache/plantel/avila-web.jpg.jpeg'),
(15, 4, '1990-03-20', 'Marcos', 'Rojo', 750000, 'Defensor', 'https://www.racingclub.com.ar/img/futbol/plantel/thumbs/1950_rojo.webp?v=2.3'),
(16, 4, '1996-09-09', 'Duván', 'Vergara', 600000, 'Delantero', 'https://www.racingclub.com.ar/img/futbol/plantel/thumbs/1894_vergara.webp?v=2.3'),
(17, 4, '1998-03-10', 'Matías', 'Zaracho', 700000, 'Mediocampista', 'https://www.racingclub.com.ar/img/futbol/plantel/thumbs/668_zaracho.webp?v=2.3'),
(18, 4, '1992-07-07', 'Adrián', 'Martínez', 800000, 'Delantero', 'https://www.racingclub.com.ar/img/futbol/plantel/thumbs/1586_martinez.webp?v=2.3'),
(19, 4, '1993-05-21', 'Matías', 'Kranevitter', 550000, 'Mediocampista', 'https://www.racingclub.com.ar/img/futbol/plantel/thumbs/2113_kraneviter.webp?v=2.3'),
(20, 5, '1998-05-07', 'Nahuel', 'Barrios', 450000, 'Mediocampista', 'https://sanlorenzo.com.ar/img/plantel/futbol/2026/g/03-15_1773567869.jpg'),
(21, 5, '2002-08-28', 'Facundo', 'Farías', 750000, 'Delantero', 'https://sanlorenzo.com.ar/img/plantel/futbol/2026/g/08-31_1788208335.jpg'),
(22, 5, '1992-01-17', 'Ezequiel', 'Cerutti', 400000, 'Delantero', 'https://sanlorenzo.com.ar/img/plantel/futbol/2026/g/03-15_1773566857.jpg'),
(23, 5, '2000-02-18', 'Alexis', 'Cuello', 550000, 'Delantero', 'https://sanlorenzo.com.ar/img/plantel/futbol/2026/g/03-15_1773566979.jpg'),
(24, 5, '1997-10-23', 'Matías', 'Reali', 500000, 'Delantero', 'https://sanlorenzo.com.ar/img/plantel/futbol/2026/g/03-15_1773567081.jpg'),
(25, 5, '1998-05-07', 'Nahuel', 'Barrios', 450000, 'Mediocampista', 'https://sanlorenzo.com.ar/img/plantel/futbol/2026/g/03-15_1773567869.jpg'),
(26, 5, '2002-08-28', 'Facundo', 'Farías', 750000, 'Delantero', 'https://sanlorenzo.com.ar/img/plantel/futbol/2026/g/08-31_1788208335.jpg'),
(27, 5, '1992-01-17', 'Ezequiel', 'Cerutti', 400000, 'Delantero', 'https://sanlorenzo.com.ar/img/plantel/futbol/2026/g/03-15_1773566857.jpg'),
(28, 5, '2000-02-18', 'Alexis', 'Cuello', 550000, 'Delantero', 'https://sanlorenzo.com.ar/img/plantel/futbol/2026/g/03-15_1773566979.jpg'),
(29, 5, '1997-10-23', 'Matías', 'Reali', 500000, 'Delantero', 'https://sanlorenzo.com.ar/img/plantel/futbol/2026/g/03-15_1773567081.jpg'),
(30, 5, '1998-05-07', 'Nahuel', 'Barrios', 450000, 'Mediocampista', 'https://sanlorenzo.com.ar/img/plantel/futbol/2026/g/03-15_1773567869.jpg'),
(31, 5, '2002-08-28', 'Facundo', 'Farías', 750000, 'Delantero', 'https://sanlorenzo.com.ar/img/plantel/futbol/2026/g/08-31_1788208335.jpg'),
(32, 5, '1992-01-17', 'Ezequiel', 'Cerutti', 400000, 'Delantero', 'https://sanlorenzo.com.ar/img/plantel/futbol/2026/g/03-15_1773566857.jpg'),
(33, 5, '2000-02-18', 'Alexis', 'Cuello', 550000, 'Delantero', 'https://sanlorenzo.com.ar/img/plantel/futbol/2026/g/03-15_1773566979.jpg'),
(34, 5, '1997-10-23', 'Matías', 'Reali', 500000, 'Delantero', 'https://sanlorenzo.com.ar/img/plantel/futbol/2026/g/03-15_1773567081.jpg');
(35, 1, '1986-06-24', 'Lionel ', 'Messi', '120000', 'Toda la cancha', 'https://i.pinimg.com/1200x/ce/6b/b7/ce6bb7b6fe0276e2ce3450b101ce5530.jpg');
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`id_jugador`),
  ADD KEY `FK_JUGADOR_EQUIPO` (`id_equipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `jugador`
--
ALTER TABLE `jugador`
  MODIFY `id_jugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `FK_JUGADOR_EQUIPO` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`id_equipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
