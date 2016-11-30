-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2016 a las 13:20:39
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tripgus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_11_14_000000_create_users_table', 2),
('2016_11_14_100000_create_users_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `birthdate`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'Daniel Hernando', 'Becerra Ocampo', 'daniel-3223@hotmail.com', '$2y$10$1IBfDRSNfvV2y3WM7zWrcehqbkpToJR2fFKKhOT.1/Nf4jOsg5dD.', '1990-01-14', NULL, '2016-11-23 03:24:31', '2016-11-23 03:24:31'),
(2, 'Juan', 'Cerón', 'j.ceron@hotmail.com', '$2y$10$XX1xF10yFper2/fIe/BHhet7hNgHrv5UMuy4EwZ5wiPJAQQW6Deca', '1966-03-09', NULL, '2016-11-14 16:47:04', '2016-11-14 16:47:04'),
(3, 'Juan Esteban', 'Ceron', 'juanes@hotmail.com', '$2y$10$Hp//9dwalUuQ2MbFY72RhOC3jsbSRImQ/AXY02KTxwm0clVH60bMu', '1996-06-04', NULL, '2016-11-14 16:57:25', '2016-11-14 16:57:25'),
(4, 'Carlos', 'Ocampo', 'carlos@hotmail.com', '$2y$10$BXFPuB04yMUOK9owx6VtXOgTqMeetaShk.9XXqT6ykBbpjRYkroK.', '2013-03-07', NULL, '2016-11-14 17:19:33', '2016-11-14 17:19:33'),
(5, 'albeiro', 'pepe', 'pepe@hh.cp.com', '$2y$10$isfYWZ2uh7RSblGH73k2ue/EuX1aiKhDlvlmi/qSlsbz.47nELHY.', '2017-10-31', NULL, '2016-11-14 17:21:46', '2016-11-14 17:21:46'),
(6, 'Diana Maria', 'Cerón Buitrago', 'dimaceb07@hotmail.com', '$2y$10$mo/I4O/ICEjIwjM5Y.wDEeddW8naehXrn/1SvbqVqJ2lDu5347wUW', '1983-06-16', NULL, '2016-11-14 19:28:01', '2016-11-14 19:28:01'),
(7, 'Juan Esteban', 'Berrio Pineda', 'jues0317@gmail.com', '$2y$10$CYyp9GJQKQ4OVCfCrHTSBOySLgzdhTaYlHsm3m6tZs3Tu3l8p5PkC', '1988-03-17', NULL, '2016-11-15 15:03:48', '2016-11-15 15:03:48'),
(8, 'Yeison Farid', 'Arroyave Varela', 'yeisonarroyave@gmail.com', '$2y$10$qosOyXD5rBNZuIoP4d9gJu0/ISC5sDdXuU2gDgdMaV7Ct41zzlHny', '1994-10-07', NULL, '2016-11-15 19:47:19', '2016-11-15 19:47:19'),
(9, 'Leonardo', 'Valdes Arias', 'leovaldesarias@gmail.com', '$2y$10$/zIuKAyJ61lZue/rksDEuuuOuHV0mcYwAiAcLyB/HhrTcowmg66Fi', '1972-08-18', NULL, '2016-11-19 03:12:25', '2016-11-19 03:12:25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
