<?php
require_once('config.php');
class Model
{

  protected $db;
  
  public function __construct()
  {
    // 1. Conexión al servidor, sin elegir base
    $pdo = new PDO("mysql:host=" . DB_HOST . ";charset=utf8", DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `" . DB_NAME . "` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");

    // 2. Conexión a la base ya existente
    $this->db = new PDO(
      "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8",
      DB_USER,
      DB_PASSWORD
    );
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->_deploy();
  }

  private function _deploy()
  {
    $query = $this->db->query('SHOW TABLES');
    $tables = $query->fetchAll();
    if (count($tables) == 0) {
      $sql = <<<'END'
            -- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-10-2026 a las 21:40:28
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

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
(5, 'Club Atlético San Lorenzo de Almagro', '1908-04-01', 'Argentina', 'https://assets.football-logos.cc/logos/argentina/1500x1500/san-lorenzo-de-almagro.a0e4e931.png'),
(13, 'Lionel Messi', '1902-01-20', 'Messi', 'imagen/6ad14e27885eb8.85160350.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id_jugador` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `sueldo` int(11) NOT NULL,
  `posicion` varchar(20) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`id_jugador`, `id_equipo`, `fecha_nacimiento`, `nombre`, `apellido`, `sueldo`, `posicion`, `imagen`) VALUES
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
(34, 5, '1997-10-23', 'Matías', 'Reali', 500000, 'Delantero', 'https://sanlorenzo.com.ar/img/plantel/futbol/2026/g/03-15_1773567081.jpg'),
(50, 1, '1111-11-11', 'fgfdfsadfds', 'fkasdjfksd', 41234132, 'fklañdsjkf', 'imagen/6add3e2bc523c7.38484898.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `role`) VALUES
(1, 'webadmin', '$2y$10$UGrge7PNv88lKr3YIToWG.145odlbThRKGvdm.AGSBRbCSjYWTFQ6', 'administrador'),
(4, 'prueba', '$2y$10$iAXQMk9RcmGy/sc0yz7vCOgqbGRfpKhtldE5P6MygYVjIuOjR.nVe', 'user');

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
  ADD PRIMARY KEY (`id_jugador`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `jugador`
--
ALTER TABLE `jugador`
  MODIFY `id_jugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
END;
      $this->db->exec($sql);
    }
  }
}
