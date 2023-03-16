-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-03-2023 a las 09:44:04
-- Versión del servidor: 5.7.41-0ubuntu0.18.04.1
-- Versión de PHP: 8.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `path_photo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `title` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `text` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `about`
--

INSERT INTO `about` (`id`, `path_photo`, `title`, `text`) VALUES
(1, 'images/team.png', '¿Quiénes Somos?', '<p>Nosotros SomoSong una tienda dedicada exclusivamente a productos exclusivos, nos centramos en reunir estos poductos de todo el mundo e intentamos ser la unica tienda la cual venda estos productos.</p>\r\n\r\n<p class=pt-2>Todos los precios son totalmente negociables hasta ciertos limites, no existe una tienda fisica, almenos no de manera publica, todos los envios y pagos se haran atraves de la pagina.</p>\r\n\r\n<p class=pt-2>La creacion de esta Idea empezo hace varios años por un simple proyecto en una FP de informatica, no fue hasta años despues que la ejecutamos realmente.</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `business_info`
--

CREATE TABLE `business_info` (
  `id` int(11) NOT NULL,
  `address` varchar(35) COLLATE utf8mb4_spanish_ci NOT NULL,
  `phone` char(13) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `gps` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `business_info`
--

INSERT INTO `business_info` (`id`, `address`, `phone`, `email`, `gps`) VALUES
(1, 'Nevada', '+34 884883432', 'somosong_comp@gmail.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6394626.610239592!2d-117.02306039999998!3d38.50203200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80990aa1f8deb471%3A0xcf47038aaafc95b3!2sNevada%2C%20EE.%20UU.!5e0!3m2!1ses!2ses!4v1678930922604!5m2!1ses!2ses\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE `contact` (
  `id` int(1) NOT NULL,
  `name` varchar(28) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `phone` char(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `text` varchar(256) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` tinyint(3) NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `path_photo` char(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `description` varchar(253) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `path_photo`, `description`) VALUES
(1, 'Caja Misteriosa', 'images/normal_mysterybox.png', 'La caja misteriosa de tier mas bajo, no por ello lo que puede contener en su interior deja de tener valor, ya que gratas sorpresas uno se podrá encontrar.'),
(2, 'Caja Super Misteriosa', 'images/super_mysterybox.png', 'Bastante mejor que la caja misteriosa común, grandes sorpresas te esperan aquí, ya que se asoma algo que proviene de la mejor caja como premio aquí, una posibilidad puede haber.'),
(3, 'La Caja Negra', 'images/the_black_box.png', '¿Se podría considerar esta la caja mas misteriosa de todas? Se dice que cosas perturbadoras, ficticias o hasta paranormales se encuentran aquí dentro, o que hasta suceden anomalías. ¿Te atreves?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` smallint(100) NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(110) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `business_info`
--
ALTER TABLE `business_info`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `business_info`
--
ALTER TABLE `business_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` smallint(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
