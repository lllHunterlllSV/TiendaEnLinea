-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2023 a las 19:06:59
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
-- Base de datos: `tiendaenlinea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_unitario` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE `detalle_compra` (
  `id` int(11) NOT NULL,
  `compra_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_unitario` decimal(10,2) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_informe_venta`
--

CREATE TABLE `detalle_informe_venta` (
  `id` int(11) NOT NULL,
  `informe_ventas_id` int(11) DEFAULT NULL,
  `compra_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_unitario` decimal(10,2) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_venta`
--

CREATE TABLE `informe_venta` (
  `id` int(11) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `total_ventas` decimal(10,2) DEFAULT NULL,
  `total_productos_vendidos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `sucursal_id` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_10_24_221159_create_carrito_table', 0),
(2, '2023_10_24_221159_create_compra_table', 0),
(3, '2023_10_24_221159_create_detalle_compra_table', 0),
(4, '2023_10_24_221159_create_detalle_informe_venta_table', 0),
(5, '2023_10_24_221159_create_informe_venta_table', 0),
(6, '2023_10_24_221159_create_inventario_table', 0),
(7, '2023_10_24_221159_create_producto_table', 0),
(8, '2023_10_24_221159_create_proveedores_table', 0),
(9, '2023_10_24_221159_create_sucursal_table', 0),
(10, '2023_10_24_221159_create_tipo_producto_table', 0),
(11, '2023_10_24_221159_create_usuario_table', 0),
(12, '2023_10_24_221202_add_foreign_keys_to_carrito_table', 0),
(13, '2023_10_24_221202_add_foreign_keys_to_compra_table', 0),
(14, '2023_10_24_221202_add_foreign_keys_to_detalle_compra_table', 0),
(15, '2023_10_24_221202_add_foreign_keys_to_detalle_informe_venta_table', 0),
(16, '2023_10_24_221202_add_foreign_keys_to_inventario_table', 0),
(17, '2023_10_24_221202_add_foreign_keys_to_producto_table', 0),
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `tipo` int(11) NOT NULL,
  `proveedor` int(11) NOT NULL,
  `talla` varchar(150) NOT NULL,
  `existencias` int(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `precio` float DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `tipo`, `proveedor`, `talla`, `existencias`, `foto`, `fecha_ingreso`, `activo`, `precio`, `descripcion`) VALUES
(2, 'camisa blanca', 1, 6, '12', 20, '2-camisa.jpg', '2023-10-02', 1, 22, 'camisa de color blanco suave'),
(3, 'camisa de arboles', 1, 2, '14', 20, '3-camisa.jpg', '2023-10-10', 1, 21.5, 'camisa de una campaña de arboles'),
(4, 'pantalones azules', 2, 3, '12', 23, '4-pantalon.jpg', '2023-10-10', 1, 19, 'jeans de color azul'),
(5, 'zapatos negros', 3, 4, '10', 14, '5-zapatos.jpg', '2023-10-03', 1, 24.6, 'zapatos negros de vestir'),
(6, 'sombrero de playa', 4, 2, '22', 21, '6-sombrero.jpg', '2023-10-03', 1, 12.5, 'sobrero sencillo de playa'),
(7, 'chaqueta de prueba', 5, 2, '15', 30, 'chaquetaFormal3.jpg', '2023-10-10', 1, 34.5, 'chaqueta nueva'),
(8, 'Camiseta \"Boston\"', 1, 3, '24', 20, 'camisetaHombre1.jpg', '2023-10-11', 1, 20, 'Camiseta \"Oversize\" verde Hombre'),
(9, 'Camiseta Roseville', 1, 3, '24', 20, 'camisetaHombre2.jpg', '2023-10-11', 1, 20, 'Camiseta \"Oversize\" Gris Hombre'),
(10, 'Camisa IMPRESSION', 1, 3, '24', 20, 'camisetaHombre3.jpg', '2023-10-11', 1, 20, 'Camisa de botones Amarilla Hombre'),
(11, 'Camiseta Cuello de Tortuga \"H&M\"', 1, 3, '24', 20, 'camisaFormalHombre1.jpg', '2023-10-11', 1, 20, 'Camisa negra, manga corta cuello de tortuga elegante Hombre'),
(12, 'Camisa Manga larga \"H&M\"', 1, 3, '24', 20, 'camisaFormalHombre2.jpg', '2023-10-11', 1, 20, 'Camisa Cafe, manga Larga Semi abierta Hombre'),
(13, 'Camisa Manga Larga \"HGA\"', 1, 3, '24', 20, 'camisaFormalHombre3.jpg', '2023-10-11', 1, 20, 'Camisa Azul Navi, Manga larga, Cuello italiano Hombre'),
(14, 'Camiseta \"BIY\"', 1, 3, '24', 20, 'camisetaMujer1.jpg', '2023-10-11', 1, 20, 'Camiseta \"Oversize\", Cafe \"RelaxXtreme Mujer\"'),
(15, 'Camiseta \"Sunset Glow\"', 1, 3, '24', 20, 'camisetaMujer2.jpeg', '2023-10-11', 1, 23, 'Camiseta \"Crop-top\", diseño Aesthetic Muejer'),
(16, 'Camiseta \"OversizeVogue\"', 1, 3, '24', 20, 'camisetaMujer3.jpg', '2023-10-11', 1, 20, 'Camiseta oversize \"OversizeVogue\", Verde Bosque Mujer'),
(17, 'Camisa de seda \"Majestic Drapes\"', 1, 3, '24', 20, 'camisaMujerFormal1.jpg', '2023-10-11', 1, 20, 'Camisa Formal, Cafe, Seda \"Majestic Drapes\" Mujer'),
(18, 'Camisa \"Majestic Drapes\"', 1, 3, '24', 20, 'camisaMujerFormal2.jpg', '2023-10-11', 1, 20, 'Camisa \"Majestic Drapes\", Rallas verticales Mujer'),
(19, 'Camisa Formal, \"Elegance Ample\"', 1, 3, '24', 20, 'camisaMujerFormal3.jpg', '2023-10-11', 1, 20, 'Camisa formal, seda, \"Elegance Ample\" Mujer'),
(20, 'Chaqueta \"Lakbi perfectly\"', 5, 5, '12', 30, 'chaquetaHombreInformal1.jpg', '2023-10-15', 1, 19, 'Camiseta \"Oversize\" verde Hombre'),
(21, 'Chaqueta \"H&M\"', 5, 5, '12', 30, 'chaquetaHombreInformal2.jpg', '2023-10-15', 1, 19, 'Camiseta \"Oversize\" Gris Hombre'),
(22, 'Chaqueta \"EMPEROR\"', 5, 5, '12', 30, 'chaquetaHombreInformal3.jpg', '2023-10-15', 1, 19, 'Chaqueta de Poliester \"Gamuza\", Cafe'),
(23, 'Blazer \"H&M\"', 5, 5, '12', 30, 'chaquetaFormal1.jpg', '2023-10-15', 1, 19, 'Camisa negra, manga corta cuello de tortuga elegante Hombre\", Cafe'),
(24, 'Blazer \"American Post\"', 5, 5, '12', 30, 'chaquetaFormal2.jpg', '2023-10-15', 1, 19, 'Camisa Cafe, manga Larga Semi abierta Hombre'),
(25, 'Chaqueta \"K&N\"', 5, 5, '12', 30, 'chaquetaFormal3.jpg', '2023-10-15', 1, 19, 'Chaqueta de Lana \"Gris\", Formal'),
(26, 'Chaqueta Vertz \"H&M\"', 5, 5, '12', 30, 'chaquetaMujer1.jpg', '2023-10-15', 1, 19, 'Camiseta \"Oversize\", Cafe \"RelaxXtreme Mujer\"'),
(27, 'Chaqueta \"Sunset Glow\"', 5, 5, '12', 30, 'chaquetaMujer2.jpg', '2023-10-15', 1, 19, 'Chaqueta \"Sunset Glow\" Poliester \"Gamuza\", Cafe'),
(28, 'Chaqueta \"OversizeVogue\"', 5, 5, '12', 30, 'chaquetaMujer3.jpg', '2023-10-15', 1, 19, 'Chaqueta \"OversizeVogue\", Nilon \"Gamuza\"'),
(29, 'Blazer \"Majestic Drapes\"', 5, 5, '12', 30, 'chaquetaMujerFormal1.jpg', '2023-10-15', 1, 19, 'Blazer Formal, Cream, Seda \"Majestic Drapes\" Mujer'),
(30, 'Blazer \"Sunset Glow\"', 5, 5, '12', 30, 'chaquetaMujerFormal2.jpg', '2023-10-15', 1, 19, 'Blazer \"Majestic Drapes\", Blazer Negro Mujer'),
(31, 'Blazer Formal, \"Elegance Ample', 5, 5, '12', 30, 'chaquetaMujerFormal3.jpg', '2023-10-15', 1, 19, 'Blazer Elegante, seda, \"Elegance Ample\" Mujer'),
(32, 'Pantalones \"Manfinity LEGND\"', 2, 6, '25', 30, 'pantalonInformalHombre1.jpg', '2023-10-04', 1, 25, 'Pantalones Cargo \"Manfinity LEGND\", Color Caqui'),
(33, 'Jeans \"Manfinity EMRG', 2, 6, '25', 30, 'pantalonInformalHombre2.jpg', '2023-10-04', 1, 25, 'Pantalones Jeans \"Manfinity EMRG\", Negro con puntadas de constraste blancas'),
(34, 'Jeans Classic', 2, 6, '25', 30, 'pantalonInformalHombre3.jpg', '2023-10-04', 1, 25, 'Jeans de corte ancho clasico'),
(35, 'Pantalon \"H&M\"', 2, 6, '25', 30, 'pantalonFormal1.jpg', '2023-10-04', 1, 25, 'Pantalon \"H&M, Formal tiro alto, Color Miel\"'),
(36, 'Pantalon \"H&M\" Treah', 2, 6, '25', 30, 'pantalonFormal2.jpg', '2023-10-04', 1, 25, 'Pantalon \"H&M, Formal tiro alto, Color blanco pastel\"'),
(37, 'Pantalon \"LNA\" Daim', 2, 6, '25', 30, 'pantalonFormal3.jpg', '2023-10-04', 1, 25, 'Pantalon \"LNA\", Daim Formal color cafe'),
(38, 'Jeans \"RelaxXtreme\"', 2, 6, '25', 30, 'pantalonesMujer1.jpg', '2023-10-04', 1, 25, 'Pantalon \"Oversize\", Jeans \"RelaxXtreme Mujer'),
(39, 'Pantalon Cargo \"aDa\"', 2, 6, '25', 30, 'pantalonesMujer2.jpg', '2023-10-04', 1, 25, 'Pantalon Cargo \"aDa\", Cintura small, Blanco pastel'),
(40, 'Pantalon Cargo \"aDa\"', 2, 6, '25', 30, 'pantalonesMujer3.jpg', '2023-10-04', 1, 25, 'Pantalon Cargo \"aDa\", Cintura small Verde Bosque'),
(41, 'Camisa de seda \"Majestic Drapes\"', 2, 6, '25', 30, 'pantalonFormalMujer1.jpg', '2023-10-04', 1, 25, 'Pantalon Formal Tiro alto, Gris, Nilon \"Majestic Drapes\" Mujer'),
(42, 'Pantalon \"Majestic Drapes\"', 2, 6, '25', 30, 'pantalonFormalMujer2.jpg', '2023-10-04', 1, 25, 'Pantalon Formal Tiro alto, Brown, Nilon \"Majestic Drapes\" Mujer'),
(43, 'Pantalon Formal \"Elegance Ample\"', 2, 6, '25', 30, 'pantalonFormalMujer3.jpg', '2023-10-04', 1, 25, 'Pantalon formal, seda, negro, \"Elegance Ample\" Mujer'),
(44, 'NIKE Jordan 4 \"Snorlax Edition\"', 3, 4, '9', 30, 'zapatosHombreinformal1.jpg', '2023-10-02', 1, 27, 'Nike Jordan 4, Colaboracion con POKEMON \"Snorlax Edition\"'),
(45, 'Addidas \"Forum\"', 3, 4, '9', 30, 'zapatosHombreinformal2.jpg', '2023-10-02', 1, 27, 'Addidas \"Forum, Gris clasico\"'),
(46, 'NEW BALANCE 550', 3, 4, '9', 30, 'zapatosHombreinformal3.jpg', '2023-10-02', 1, 27, 'NEW BALANCE 550, WhiteGray'),
(47, 'Oxford Lisos \"Johnston & Murphy\"', 3, 4, '9', 30, 'ZapatosFormales1.jpg', '2023-10-02', 1, 27, 'Zapatos Oxford Lisos \"Johnston & Murphy\", Elegantes Cafes'),
(48, 'Botines \"CELINE PARIS\"', 3, 4, '9', 30, 'ZapatosFormales2.jpg', '2023-10-02', 1, 27, 'Zapatos Botines de cuero \"CELINE PARIS\", Negros'),
(49, 'Botines \"CELINE PARIS\"', 3, 4, '9', 30, 'ZapatosFormales3.jpg', '2023-10-02', 1, 27, 'Zapatos Botines de cuero \"CELINE PARIS\", Mocha'),
(50, 'Adidas Gazelle Bold Cream White', 3, 4, '9', 30, 'ZapatosInformales1.jpg', '2023-10-02', 1, 27, 'Camiseta \"Oversize\", Cafe \"RelaxXtreme Mujer\"'),
(51, 'New Balance® 327 women\'s', 3, 4, '9', 30, 'ZapatosInformales2.jpg', '2023-10-02', 1, 27, 'Camiseta \"Crop-top\", diseño Aesthetic Muejer'),
(52, 'Grey White Canvas Women\'s Sports', 3, 4, '9', 30, 'ZapatosInformales3.jpg', '2023-10-02', 1, 27, 'Camiseta oversize \"OversizeVogue\", Verde Bosque Mujer'),
(53, '\"MOORE\" lady Loafers, Black', 3, 4, '9', 30, 'ZapatosFormalesMujer1.jpg', '2023-10-02', 1, 27, 'Camisa Formal, Cafe, Seda \"Majestic Drapes\" Mujer'),
(54, 'Zapatos \"Majestic Drapes\"', 3, 4, '9', 30, 'ZapatosFormalesMujer2.jpg', '2023-10-02', 1, 27, 'Zapatos \"Majestic Drapes\", WitheCream Mujer'),
(55, 'Zapatos de tacon \"Elegance Ample\"', 3, 4, '9', 30, 'ZapatosFormalesMujer3.jpg', '2023-10-02', 1, 27, 'Zapatos formal, Tacon, \"Elegance Ample\" Mujer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(9) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `Nombre`, `Activo`) VALUES
(1, 'manuel', 1),
(2, 'diego', 1),
(3, 'rafael', 1),
(4, 'edwin', 1),
(5, 'pedro', 1),
(6, 'juan', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`id`, `descripcion`, `activo`) VALUES
(1, 'camisa', 1),
(2, 'pantalon', 1),
(3, 'zapatos', 1),
(4, 'sombrero', 1),
(5, 'chaqueta', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `rol` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `activo`, `rol`) VALUES
(1, 'a', '1', 1, 1),
(2, 'rafael', '123', 1, 1),
(3, 'romel', 'si', 1, 1),
(4, '$usuario', '$password', 1, 1),
(5, 'diego', '321', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compra_id` (`compra_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `detalle_informe_venta`
--
ALTER TABLE `detalle_informe_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `informe_ventas_id` (`informe_ventas_id`),
  ADD KEY `compra_id` (`compra_id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `informe_venta`
--
ALTER TABLE `informe_venta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_id` (`producto_id`),
  ADD KEY `sucursal_id` (`sucursal_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo` (`tipo`),
  ADD KEY `proveedor` (`proveedor`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_informe_venta`
--
ALTER TABLE `detalle_informe_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informe_venta`
--
ALTER TABLE `informe_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD CONSTRAINT `detalle_compra_ibfk_1` FOREIGN KEY (`compra_id`) REFERENCES `compra` (`id`),
  ADD CONSTRAINT `detalle_compra_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `detalle_informe_venta`
--
ALTER TABLE `detalle_informe_venta`
  ADD CONSTRAINT `detalle_informe_venta_ibfk_1` FOREIGN KEY (`informe_ventas_id`) REFERENCES `informe_venta` (`id`),
  ADD CONSTRAINT `detalle_informe_venta_ibfk_2` FOREIGN KEY (`compra_id`) REFERENCES `compra` (`id`),
  ADD CONSTRAINT `detalle_informe_venta_ibfk_3` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `detalle_informe_venta_ibfk_4` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `inventario_ibfk_2` FOREIGN KEY (`sucursal_id`) REFERENCES `sucursal` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipo_producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`proveedor`) REFERENCES `proveedores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
