-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2017 a las 20:41:02
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `segundamano_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `id_usuario`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` text COLLATE utf8_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8_unicode_ci NOT NULL,
  `telefono` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `fecha_pedido` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha_envio` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha_entrega` text COLLATE utf8_unicode_ci NOT NULL,
  `coste_total` float NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_subseccion` int(11) NOT NULL,
  `nombre_producto` text COLLATE utf8_unicode_ci NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_pedido`, `id_subseccion`, `nombre_producto`, `precio`) VALUES
(1, 0, 0, 'Atenas', 2),
(2, 0, 0, 'Beijing', 2),
(3, 0, 0, 'Gran Muralla', 2),
(4, 0, 0, 'Capri', 2),
(5, 0, 0, 'Costa Azul', 2),
(6, 0, 0, 'Delhi, Agra y Jaipur (La India)', 2),
(7, 0, 0, 'Edimburgo', 2),
(8, 0, 0, 'Estambul', 2),
(9, 0, 0, 'Valle de los Reyes (Egipto)', 2),
(10, 0, 0, 'Florencia', 2),
(11, 0, 0, 'Finlandia', 2),
(12, 0, 0, 'Jordania', 2),
(13, 0, 0, 'Londres', 2),
(14, 0, 0, 'Todo Londres', 2),
(15, 0, 0, 'Nueva York', 2),
(16, 0, 0, 'Oxford', 2),
(17, 0, 0, 'Todo París', 2),
(18, 0, 0, 'San Petersburgo y alrededores', 2),
(19, 0, 0, 'Descubriendo Perú', 2),
(20, 0, 0, 'Pompeya', 2),
(21, 0, 0, 'Todo Portugal', 2),
(22, 0, 0, 'Praga', 2),
(23, 0, 0, 'Roma y Vaticano', 2),
(24, 0, 0, 'Roma', 2),
(25, 0, 0, 'Ciudad del Vaticano', 2),
(26, 0, 0, 'Tallín', 2),
(27, 0, 0, 'Toda Venecia', 2),
(28, 0, 0, 'Viena / Palacio Schönbrunn', 2),
(29, 0, 0, 'Guías pequeñas: Amsterdam', 1),
(30, 0, 0, 'Guías pequeñas: Berlín', 1),
(31, 0, 0, 'Guías pequeñas: Berlín con Potsdam', 1),
(32, 0, 0, 'Guías pequeñas: Colonia', 1),
(33, 0, 0, 'Guías pequeñas: Egipto', 1),
(34, 0, 0, 'Guías pequeñas: Egipto mini', 1),
(35, 0, 0, 'Guías pequeñas: La Habana', 1),
(36, 0, 0, 'Guías pequeñas: Italia', 1),
(37, 0, 0, 'Las Alpujarras', 1),
(38, 0, 0, 'Todo Córdoba', 2),
(39, 0, 0, 'Toledo', 2),
(40, 0, 0, 'Todo Madrid', 2),
(41, 0, 0, 'Todo Salamanca', 2),
(42, 0, 0, 'Todo Santiago', 2),
(43, 0, 0, 'Castillos y Paisajes', 2),
(44, 0, 0, 'Viajeros ingleses por Extremadura', 2),
(45, 0, 0, 'Salud y Viajes (manual de consejos prácticos)', 2),
(46, 0, 0, 'Castillos con encanto', 2),
(47, 0, 0, 'Pueblos pescadores con encanto', 2),
(48, 0, 0, 'Turismo natural', 2),
(49, 0, 0, 'Guía de casas rurales (mapa de carretera de España y Portugal)', 2),
(50, 0, 0, 'Alojamientos rurales', 2),
(51, 0, 0, 'Guía de hoteles, campings y restaurantes de Extremadura', 2),
(52, 0, 0, 'Guía del viajero (España y Portugal)', 2),
(53, 0, 0, 'Cantábrico y océano Atlántico (el viajero inteligente)', 2),
(54, 0, 0, 'Excursiones en otoño con su mejor amigo', 2),
(55, 0, 0, 'El médico viajando por España', 2),
(56, 0, 0, 'Anuario de turismo rural (2003)', 2),
(57, 0, 0, 'Guía Normon del viajero', 2),
(58, 0, 0, 'Rusticae (guía rural)', 2),
(59, 0, 0, 'Zalamea de la Serena', 2),
(60, 0, 0, 'Viaje por España', 2),
(61, 0, 0, 'Sierra de Gredos', 2),
(62, 0, 0, 'Hacia lo más alto. Expedición al Everest', 2),
(63, 0, 0, 'Conocer y vivir Monfragüe', 2),
(64, 0, 0, 'Guía de costas y restaurantes', 2),
(65, 0, 0, '17 guías sobre la geografía, turismo, arte y gastronomía de las comunidades de España', 2),
(66, 0, 0, 'Restaurantes de España', 2),
(67, 0, 0, 'El jorobado de Notre Dame', 1),
(68, 0, 0, 'Bambi', 1),
(69, 0, 0, 'El Rey León', 1),
(70, 0, 0, 'La bella y la bestia', 1),
(71, 0, 0, 'La dama y el vagabundo', 1),
(72, 0, 0, 'Blancanieves', 1),
(73, 0, 0, 'Hércules', 1),
(74, 0, 0, 'La bella durmiente', 1),
(75, 0, 0, 'El pato Donald', 1),
(76, 0, 0, 'El Rey León', 2),
(77, 0, 0, 'El maravilloso mundo de los animales', 2),
(78, 0, 0, 'El jorobado de Notre Dame', 2),
(79, 0, 0, 'Hänsel y Gretel', 2),
(80, 0, 0, 'El gato con botas', 2),
(81, 0, 0, 'Dinosaurios', 2),
(82, 0, 0, 'Kika superbruja y la momia', 2),
(83, 0, 0, 'Gatitos', 2),
(84, 0, 0, 'Travesuras de Guillermo', 2),
(85, 0, 0, 'El cerdito Menta (colección \'El Barco de Vapor\')', 2),
(86, 0, 0, 'Mr Pum (colección \'El Barco de Vapor\')', 2),
(87, 0, 0, 'Jeruso quiere ser gente', 2),
(88, 0, 0, 'Harry Potter y el caliz de fuego', 10),
(89, 0, 0, 'Harry Potter y la orden del fénix', 10),
(90, 0, 0, 'El diccionario del mago', 10),
(91, 0, 0, 'La magia del Grial', 5),
(92, 0, 0, 'Las crónicas de Narnia. El León, la bruja y el armario', 5),
(93, 0, 0, 'Las crónicas de Narnia. La silla de plata', 5),
(94, 0, 0, 'El niño con el pijama de rayas', 5),
(95, 0, 0, 'El pequeño Nicolás', 2),
(96, 0, 0, 'Los recreos del pequeño Nicolás', 2),
(97, 0, 0, 'Los amiguetes del pequeño Nicolás', 2),
(98, 0, 0, 'Querido hijo, estás despedido', 2),
(99, 0, 0, 'Cuentos para jugar', 2),
(100, 0, 0, 'Un monstruo en el armario (colección \'El Barco de Vapor\')', 2),
(101, 0, 0, 'Los hijos del vidriero (colección \'El Barco de Vapor\')', 2),
(102, 0, 0, 'Una casa con 7 habitaciones', 2),
(103, 0, 0, 'Kiatoski y el caso del tío vivo azul', 2),
(104, 0, 0, 'El viaje de Doble-P', 2),
(105, 0, 0, 'El regreso de Doble-P', 2),
(106, 0, 0, 'Las alas del sol (colección \'El Barco de Vapor\')', 2),
(107, 0, 0, 'El lugar más bonito del mundo', 2),
(108, 0, 0, 'Brumas de octubre', 2),
(109, 0, 0, 'Billy Elliot (colección \'El Barco de Vapor\')', 2),
(110, 0, 0, 'Konrad o el niño que salió de una lata de conservas', 2),
(111, 0, 0, 'Charlie y el gran ascensor de cristal', 2),
(112, 0, 0, 'Las tormentas del mar embotellado', 2),
(113, 0, 0, 'Colibrí-Colibrá', 2),
(114, 0, 0, 'El principito', 2),
(115, 0, 0, 'La dama del alba', 2),
(116, 0, 0, 'Mande a su hijo a Marte', 2),
(117, 0, 0, 'El secreto del ordenador', 2),
(118, 0, 0, 'El Cid', 2),
(119, 0, 0, 'La expedición perdida', 2),
(120, 0, 0, 'Lanzarote y los caballeros de la tabla redonda', 2),
(121, 0, 0, 'Eloisa está debajo de un almendro', 2),
(122, 0, 0, 'Los caballos de mi tío', 2),
(123, 0, 0, 'Las chicas de alambre', 2),
(124, 0, 0, 'Las aventuras de Ulises (clásicos adaptados)', 2),
(125, 0, 0, 'Cantar del Mio Cid (clásicos adaptados)', 2),
(126, 0, 0, 'Novelas ejemplares', 2),
(127, 0, 0, 'El príncipe de la niebla', 2),
(128, 0, 0, 'Alicia en el País de las Maravillas', 2),
(129, 0, 0, 'El extraño caso del Dr. Jekyll y Mr. Hyde (en español)', 2),
(130, 0, 0, 'El extraño caso del Dr. Jekyll y Mr. Hyde (en inglés)', 2),
(131, 0, 0, 'El misterio de la cripta embrujada', 2),
(132, 0, 0, 'El fantasma de Canterville (en español)', 2),
(133, 0, 0, 'El fantasma de Canterville (en inglés)', 2),
(134, 0, 0, 'El alumno', 2),
(135, 0, 0, 'The Queen and I (en inglés)', 2),
(136, 0, 0, 'El Mundo Perdido', 2),
(137, 0, 0, 'A tale of two cities (en inglés)', 5),
(138, 0, 0, 'Huckleberry Finn', 5),
(139, 0, 0, 'Saga Crepúsculo: Crepúsculo', 5),
(140, 0, 0, 'Saga Crepúsculo: Luna Nueva', 10),
(141, 0, 0, 'Saga Crepúsculo: Eclipse', 10),
(142, 0, 0, 'Saga Crepúsculo: Amanecer', 10),
(143, 0, 0, 'Mini Larousse (diccionario enciclopédico juvenil ilustrado; 12 tomos)', 10),
(144, 0, 0, 'Spiderman', 2),
(145, 0, 0, 'Batman (1 y 2)', 2),
(146, 0, 0, 'Patrulla X (1, 2 y 3)', 2),
(147, 0, 0, 'Superman (1, 2 y 3)', 2),
(148, 0, 0, 'El increíble Hulk (1, 2 y 3)', 2),
(149, 0, 0, 'Iron Man (1, 2 y 3)', 2),
(150, 0, 0, 'Corto Maltés (1, 2 y 3)', 2),
(151, 0, 0, 'Conan el bárbaro (1, 2 y 3)', 2),
(152, 0, 0, 'Daredevil. Dan el defensor  (1, 2 y 3)', 2),
(153, 0, 0, 'The Spirit (1, 2 y 3)', 2),
(154, 0, 0, 'Los 4 fantásticos (1, 2 y 3)', 2),
(155, 0, 0, 'Los vengadores (1, 2 y 3)', 2),
(156, 0, 0, 'El poderoso Thor (1, 2 y 3)', 2),
(157, 0, 0, 'Blueberry (1, 2 y 3)', 2),
(158, 0, 0, 'Mortadelo y Filemón. El sulfato atómico', 2),
(159, 0, 0, 'Cocina vegetariana', 5),
(160, 0, 0, 'Carlos Arguiñano. El menú de cada día', 10),
(161, 0, 0, 'Comida sana (Drs. Roselló y Torreiglesias)', 10),
(162, 0, 0, 'Cocina española baja en grasa y colesterol', 10),
(163, 0, 0, 'Prevenir la anemia. Comer sano (recetas de K. Arguiñano)', 10),
(164, 0, 0, 'Cocina natural', 3),
(165, 0, 0, 'Cocinar con patatas', 2),
(166, 0, 0, 'Pimientos, guindillas y pimentón', 2),
(167, 0, 0, 'Cocinar a presión', 2),
(168, 0, 0, 'Cocinar para diabéticos en invierno', 1),
(169, 0, 0, 'Cocinar para diabéticos en otoño', 1),
(170, 0, 0, 'Comer bien', 1),
(171, 0, 0, 'Guía de quesos españoles', 2),
(172, 0, 0, 'Guía de tapas para soñar', 2),
(173, 0, 0, 'Guía de platos tradicionales de España', 2),
(174, 0, 0, 'Guías de legumbres, pizzas, galletas y verduras', 2),
(175, 0, 0, 'Guía Café', 1),
(176, 0, 0, 'Omega 3. Salud en la cocina', 5),
(177, 0, 0, 'Omega 3. Las grasas diferentes', 5),
(178, 0, 0, 'Inés y Simone Ortega. Rebozados, barbacoas y parrillas', 5),
(179, 0, 0, 'Inés y Simón Ortega. Menús todo el año', 5),
(180, 0, 0, 'Inés y Simón Ortega. Tartas saladas, suflés y huevos', 5),
(181, 0, 0, 'Inés y Simón Ortega. Guisos, estofados y calderetas', 5),
(182, 0, 0, 'Cocina vegetariana saludable', 5),
(183, 0, 0, 'Cocina sana. Pescado y marisco, aves y caza, carne', 5),
(184, 0, 0, 'Microondas (\'Círculo de Lectores\')', 5),
(185, 0, 0, 'La traición de Roma (Santiago Posterguillo)', 15),
(186, 0, 0, 'La legión perdida (Santiago Posterguillo)', 15),
(187, 0, 0, 'Circo Máximo (Santiago Posterguillo)', 15),
(188, 0, 0, 'Las legiones Perdidas (Santiago Posterguillo)', 15),
(189, 0, 0, 'Los asesinos del emperador (Santiago Posterguillo)', 15),
(190, 0, 0, 'Africanus (Santiago Posterguillo)', 15),
(191, 0, 0, 'El ladrón de tumbas (Antonio Cabanas)', 15),
(192, 0, 0, 'El hijo del desierto (Antonio Cabanas)', 15),
(193, 0, 0, 'El cautivo (Jesús Sánchez Adaliz)', 15),
(194, 0, 0, 'El camino Mozárabe (Jesús Sánchez Adaliz)', 15),
(195, 0, 0, 'Los pilares de la Tierra (Ken Follet)', 15),
(196, 0, 0, 'La caída de los gigantes (Ken Follet)', 15),
(197, 0, 0, 'El invierno del mundo (Ken Follet)', 15),
(198, 0, 0, 'El umbral de la eternidad (Ken Follet)', 15),
(199, 0, 0, 'Un mundo sin fin (Ken Follet)', 15),
(200, 0, 0, 'Los herederos de la Tierra (Ildefonso Falcones)', 15),
(201, 0, 0, 'La catedral del Mar (Ildefonso Falcones)', 15),
(202, 0, 0, 'El secreto del Nilo (Antonio Cabanas)', 15),
(203, 0, 0, 'El Mozárabe (Jesús Sánchez Adaliz)', 10),
(204, 0, 0, 'El constructor de pirámides (Santiago Morata)', 10),
(205, 0, 0, 'Águilas y cuervos (P. Gedre)', 10),
(206, 0, 0, 'El juramento de los cruzados (R. Jordan)', 10),
(207, 0, 0, 'La estrella de sangre (N. Guila)', 10),
(208, 0, 0, 'Martyrium (S. Castellanos)', 10),
(209, 0, 0, 'El enviado de Roma', 10),
(210, 0, 0, 'Los Hijos del Senador (Olga Romay)', 15),
(211, 0, 0, 'El águila en la nieve (W. Bqeem)', 15),
(212, 0, 0, 'La hija del Nilo (Javier Negrete)', 15),
(213, 0, 0, 'El ejército perdido (Masimo Manfredi)', 15),
(214, 0, 0, 'El Asirio (N. Guild)', 10),
(215, 0, 0, 'Camino a Roma (Ben Kane)', 15),
(216, 0, 0, 'Salamina (Javier Negrete)', 15),
(217, 0, 0, 'Imperio (Steven Saylor)', 15),
(218, 0, 0, 'Sinué el Egipcio (Mika Waltari)', 15),
(219, 0, 0, 'El primer hombre de Roma (Colleen McCullongh)', 5),
(220, 0, 0, 'La corona de hierba (Colleen McCullongh)', 5),
(221, 0, 0, 'Favoritos de la fortuna (Colleen McCullongh)', 5),
(222, 0, 0, 'Las mujeres del César (Colleen McCullongh)', 5),
(223, 0, 0, 'El caballo del César (Colleen McCullongh)', 5),
(224, 0, 0, 'El juez de Egipto (Cristian Jaco)', 5),
(225, 0, 0, 'La reina Sol (Cristian Jaco)', 5),
(226, 0, 0, 'Azteca (G. Jennings)', 5),
(227, 0, 0, 'Aníbal (David A. Durhan)', 5),
(228, 0, 0, 'Chamán (Noah Gordon)', 5),
(229, 0, 0, 'Antonio y Cleopatra (Colleen McCullongh)', 5),
(230, 0, 0, 'César (Colleen McCullongh)', 5),
(231, 0, 0, 'La canción de Troya (Colleen McCullongh)', 5),
(232, 0, 0, 'Yo, Moctezuma (H. Thomas)', 5),
(233, 0, 0, 'Lucrecia Borgia (John Faunce)', 5),
(234, 0, 0, 'La legión de los inmortales (Massimiliano Colombo)', 5),
(235, 0, 0, 'Puertas de Fuego (S. Pressfield)', 5),
(236, 0, 0, 'Médico de cuerpos y almas (T. Caldwell)', 5),
(237, 0, 0, 'Invictus (Simone Sarasso)', 5),
(238, 0, 0, 'Yo, Claudio (Robert Graves)', 5),
(239, 0, 0, 'Claudio el dios y su esposa Mesalina', 5),
(240, 0, 0, 'Aníbal (Gisbert Haefs)', 5),
(241, 0, 0, 'Juliano, el apóstata (Gore Vidal)', 5),
(242, 0, 0, 'La legión olvidada (Ben Kane)', 5),
(243, 0, 0, 'El águila de plata (Ben Kane)', 5),
(244, 0, 0, 'El escriba del barro (L. Mediano)', 5),
(245, 0, 0, 'Gladiador (Gordon Russell)', 5),
(246, 0, 0, 'El águila del imperio (S. Scarrow)', 5),
(247, 0, 0, 'Roma vincit (S. Scarrow)', 5),
(248, 0, 0, 'Las garras del águila (S. Scarrow)', 5),
(249, 0, 0, 'El druida (M. Llywelyn)', 5),
(250, 0, 0, 'La conjura del faraón (Antonio Cabanas)', 5),
(251, 0, 0, 'Roma (S. Saylor)', 5),
(252, 0, 0, 'Alejandro Magno (Robin Lanefox)', 5),
(253, 0, 0, 'Calígula (Franceschini y P. Lunel)', 5),
(254, 0, 0, 'César imperial (Rex Waner)', 5),
(255, 0, 0, 'Guerra y Paz (Leon Tolstoi)', 5),
(256, 0, 0, 'El faraón negro (Cristian Jacq)', 5),
(257, 0, 0, 'Tutancamón (Cristian Jacq)', 5),
(258, 0, 0, 'Los secretos de Osiris (Antonio Cabanas)', 5),
(259, 0, 0, 'Faraón (Francis Févre)', 5),
(260, 0, 0, 'La ciudad prohibida (A. Min)', 5),
(261, 0, 0, 'Malinche (Laura Esquivel)', 5),
(262, 0, 0, 'La ciudad de los muertos (A. Gill)', 5),
(263, 0, 0, 'El médico (Noah Gordon)', 5),
(264, 0, 0, 'Sherezade, las mil y una noches', 5),
(265, 0, 0, 'Akhenatón (N. Hahfuz)', 5),
(266, 0, 0, 'Inca, la princesa del sol (H. B. Daniel)', 5),
(267, 0, 0, 'El macedonio (Nicolas Guild)', 5),
(268, 0, 0, 'Millennium: Los hombres que no amaban a las mujeres (Stieg Larsson)', 10),
(269, 0, 0, 'Millennium: La chica que soñaba con una cerilla y un bidón de gasolina (Stieg Larsson)', 10),
(270, 0, 0, 'Millennium: La reina en el palacio de las corrientes de aire  (Stieg Larsson)', 10),
(271, 0, 0, 'Millennium: Lo que no te mata te hace más fuerte (David Lagercrantz)', 5),
(272, 0, 0, 'El código DaVinci (Dan Brown)', 10),
(273, 0, 0, 'Ángeles y demonios (Dan Brown)', 10),
(274, 0, 0, 'Inferno (Dan Brown) (Dan Brown)', 10),
(275, 0, 0, 'Un milagro en equilibrio (Lucía Etxebarría)', 10),
(276, 0, 0, 'La hermandad de la buena suerte (Fernando Sabater)', 10),
(277, 0, 0, 'Riña de gatos (Eduardo Mendoza)', 10),
(278, 0, 0, 'No digas que fué un sueño (Terenci Moix)', 10),
(279, 0, 0, 'El arpista ciego (Terenci Moix)', 10),
(280, 0, 0, 'El negociador (F. Forsyth)', 10),
(281, 0, 0, 'Op-center (Tom Clancy)', 10),
(282, 0, 0, 'Un arcoiris en la noche (D. Lapierre)', 10),
(283, 0, 0, 'El quinto jinete (D. Lapierre)', 10),
(284, 0, 0, 'Cuarenta maneras de decir dolor (Gilis Blunt)', 10),
(285, 0, 0, 'El médico de Ifni (Javier Reverte)', 10),
(286, 0, 0, 'Caballo de Troya 2 (J. J. Benítez)', 10),
(287, 0, 0, 'Caballo de Troya 3 (J. J. Benítez)', 10),
(288, 0, 0, 'Intrigas y deseo (P. D. James)', 10),
(289, 0, 0, 'Lázaro (Morris West)', 10),
(290, 0, 0, 'Yo, Claudio (Robert Graves)', 10),
(291, 0, 0, 'Cabeza de turco (Wallraff)', 10),
(292, 0, 0, 'El Mundo Perdido', 10),
(293, 0, 0, 'Leon el africano (Amin Madlouf)', 10),
(294, 0, 0, 'El séptimo secreto (Irving Wallace)', 10),
(295, 0, 0, 'Invitado de honor (Irving Wallace)', 10),
(296, 0, 0, 'El cordero (Francois Mauriac)', 10),
(297, 0, 0, '¡Oh, es él! (Maruja Torres)', 10),
(298, 0, 0, '¡Ánimo Wilt! (Tom Sharpe)', 10),
(299, 0, 0, 'Las cortes de Coguaya (Ángel García Roldán)', 10),
(300, 0, 0, 'Relato de un naúfrago (G. Márquez)', 10),
(301, 0, 0, 'Paralelo 42 (John Dos Passos)', 5),
(302, 0, 0, 'Los sótanos del Vaticano (Andrés Gide)', 5),
(303, 0, 0, 'La puerta estrecha (Andrés Gide)', 5),
(304, 0, 0, 'Una relación inconveniente (Anita Brookner)', 5),
(305, 0, 0, 'La que queda del día (K. Ishiguro)', 5),
(306, 0, 0, 'Amor conyugal (Alberto Moravia)', 5),
(307, 0, 0, 'El crimen del cine Oriente (Javier Tomeo)', 5),
(308, 0, 0, 'Brasil (John Updike)', 5),
(309, 0, 0, 'Buenos días, tristeza (Francoise Sagan)', 5),
(310, 0, 0, 'La sombra del viento (Carlos Ruíz Zafón)', 10),
(311, 0, 0, 'Las luces de septiembre (Carlos Ruíz Zafón)', 5),
(312, 0, 0, 'Dime quién soy (Julia Navarro)', 10),
(313, 0, 0, 'La hermandad de la sábana santa (Julia Navarro)', 10),
(314, 0, 0, 'Nada (Carmen Laforet)', 10),
(315, 0, 0, 'La voz dormida (Dulce Chacón)', 10),
(316, 0, 0, 'Lituma en los Andes (Varga Llosa)', 5),
(317, 0, 0, 'La casa de los espírutos (Isabel Allende)', 5),
(318, 0, 0, 'Ardor guerrero (Antonio  Muñoz Molina)', 5),
(319, 0, 0, 'Cabo Trafalgar (Arturo Pérez Reverte)', 2),
(320, 0, 0, 'Con flores a María (Alfonso Groso)', 2),
(321, 0, 0, 'El crimen de Cuenca (Salvador Maldonado)', 2),
(322, 0, 0, 'La ambición del César. Retrato político y humano de Felipe González', 2),
(323, 0, 0, '... Los cuarenta ladrones (Fernando V. Casas)', 2),
(324, 0, 0, 'El Giocondo (F. Umbral)', 2),
(325, 0, 0, 'La mujer como elemento indispensable para la respiración (Enrique J. Poncela)', 1),
(326, 0, 0, 'Mala índole (Javier Marías)', 1),
(327, 0, 0, 'Sodoma y Gomorra (C. Malaparte)', 1),
(328, 0, 0, 'Animal farm (George Orwell)', 1),
(329, 0, 0, 'Abismo (P. Benchley)', 1),
(330, 0, 0, 'El viejo y el mar (Ernest Hemingway)', 2),
(331, 0, 0, 'Un mundo feliz (Aldous Huxley)', 2),
(332, 0, 0, 'El ocho (Katherine Neville)', 5),
(333, 0, 0, '¡Oh, Jerusalén! (D. Lapierre Y L. Colling)', 5),
(334, 0, 0, 'La lista de Schindler (T. Keneally)', 5),
(335, 0, 0, 'Fuego en tus manos (N. Jordan)', 5),
(336, 0, 0, 'Peligro inminente (Tom Clancy)', 5),
(337, 0, 0, 'Iceberg (Clive Cussler)', 5),
(338, 0, 0, 'El emperador (F. Forsyth)', 5),
(339, 0, 0, '\'La saga\' y \'Fuga de J. B.\' (Torrente Ballester)', 10),
(340, 0, 0, 'La guerra del fin del mundo (Varga Llosa)', 5),
(341, 0, 0, 'Cumbres borrascosas (Emily Bronte)', 10),
(342, 0, 0, '\'La camisa\' y \'El cuarto poder\' (L. Olmo)', 5),
(343, 0, 0, 'Niebla (Miguel de Unamuno)', 5),
(344, 0, 0, 'Antes y después del guerra (F. Bleu)', 5),
(345, 0, 0, 'La máquina de leer pensamientos (André Maurois)', 1),
(346, 0, 0, 'Monte Sinaí (Luis Sampedro)', 1),
(347, 0, 0, 'La egiptología (S. Saunerón)', 1),
(348, 0, 0, 'El misterioso caso de Styles', 3),
(349, 0, 0, 'El asesinato de Rogelio Ackroyd', 3),
(350, 0, 0, 'Asesinato en el Orient Express', 3),
(351, 0, 0, 'Maldad bajo el sol', 3),
(352, 0, 0, 'Poirot en Egipto', 3),
(353, 0, 0, 'El caso de los anónimos', 1),
(354, 0, 0, 'El diamante de Jerusalén (Noah Gordon)', 3),
(355, 0, 0, 'El dragón rojo (Thomas Harris)', 3),
(356, 0, 0, 'La clave está en Rebeca (Ken Follet)', 3),
(357, 0, 0, 'El último Don (Mario Puzo)', 3),
(358, 0, 0, 'Eclipse total (Stephen King)', 3),
(359, 0, 0, 'La amenaza de Andrómeda (Michael Crichton)', 3),
(360, 0, 0, 'El infiltrado (John Le Carré)', 3),
(361, 0, 0, 'La momia (Anne Rice)', 3),
(362, 0, 0, 'El jurado (John Crisman)', 3),
(363, 0, 0, 'El emperador (F. Forsyth)', 3),
(364, 0, 0, 'Marie Curie (Robert Reid)', 3),
(365, 0, 0, 'Einstein (Banesh Hoffmann)', 3),
(366, 0, 0, 'Gandhi (Heimo Rau)', 3),
(367, 0, 0, 'Miguel Angel (Heinrich Koch)', 3),
(368, 0, 0, 'Napoleón (André Maurois)', 3),
(369, 0, 0, 'Cleopatra (E. Bradford)', 5),
(370, 0, 0, 'Picasso (Roland Penrose)', 5),
(371, 0, 0, 'Winston Churchill', 5),
(372, 0, 0, 'Buda (R. Allen Mitchell)', 5),
(373, 0, 0, '100 mujeres de rompe y rasga', 2),
(374, 0, 0, 'Colección  Villalar: Alfonso X el Sabio (Julio Valdeón)', 2),
(375, 0, 0, 'Colección  Villalar: Claudio Sanchez-Albornoz (J. L. Martín)', 2),
(376, 0, 0, 'Colección  Villalar: Jorge Guillén (Antonio Piedra)', 2),
(377, 0, 0, 'Colección  Villalar: Miguel Delibes (Emilio Salcedo)', 2),
(378, 0, 0, 'Colección  Villalar: León Felipe (García de la Concha)', 2),
(379, 0, 0, 'Colección  Villalar: Emiliano Barral (J. Manuel Santamaría)', 2),
(380, 0, 0, 'Vientos del Pueblo (Miguel Hernández)', 1),
(381, 0, 0, 'Caminante (Antonio Machado)', 1),
(382, 0, 0, 'Desnudo (Jorge Guillén)', 1),
(383, 0, 0, 'Rimas (Gustavo Adolfo Bécquer)', 1),
(384, 0, 0, 'Don Álvaro o la fuerza del sino (Duque de Rivas)', 1),
(385, 0, 0, 'Entremeses (Miguel de Cervantes)', 1),
(386, 0, 0, 'Bibliotecas populares (Miguel de Cervantes)', 1),
(387, 0, 0, 'Antología poética (Federico García Lorca)', 1),
(388, 0, 0, 'Poemas escogidos (Rafael Alberti)', 1),
(389, 0, 0, 'Poesía (Pablo Neruda)', 1),
(390, 0, 0, 'Veinte poemas de amor y una canción desesperada (Pablo Neruda)', 1),
(391, 0, 0, 'Un sueño de la noche de San Juan (William Shakespeare)', 2),
(392, 0, 0, '\'La gaviota\' y \'El jardín de los cerezos\' (Antón Paulovich Chéjov)', 2),
(393, 0, 0, 'Fuente ovejuna (Lope de Vega)', 2),
(394, 0, 0, 'Vida de Rancé (Francoise-René de Chateau Briand)', 2),
(395, 0, 0, 'Los sufrimientos del joven Werther (Johan Goethe)', 2),
(396, 0, 0, '\'Romeo y Julieta\', y \'Julio César\' (William Shakespeare)', 2),
(397, 0, 0, 'La vida es sueño (Calderón de la Barca)', 2),
(398, 0, 0, '\'Don Juan\' y \'Tartufo\' (Moliére)', 2),
(399, 0, 0, '\'La doma de la furia\' y \'El mercader de Venecia\' (William Shakespeare)', 2),
(400, 0, 0, 'El caballero de Olmedo (Lope de Vega)', 2),
(401, 0, 0, '\'El banquete\' y \'Fedón\' (Platón)', 2),
(402, 0, 0, '\'Andrómaca\' y \'Fedra\' (J. Racine)', 2),
(403, 0, 0, 'Adolfo (B. Constant)', 2),
(404, 0, 0, 'Los milagros de nuestra señora (Gonzalo de Berceo)', 2),
(405, 0, 0, 'El retrato de Dorian Gray (Óscar Wilde)', 2),
(406, 0, 0, 'La princesa de Cléves (Madame de La Fallette)', 2),
(407, 0, 0, 'Rojo y Negro (Stendhal)', 2),
(408, 0, 0, 'Guillermo Tell (F. Bonschiller)', 2),
(409, 0, 0, 'La vida del buscón (Francisco de Quevedo)', 2),
(410, 0, 0, 'Obras completas (Garcilaso de la Vega)', 2),
(411, 0, 0, 'Manón Lescaut (Abate Prévost)', 2),
(412, 0, 0, '\'Atala\' y \'René\' (Chateau Briand)', 2),
(413, 0, 0, 'El libro de Apolonio', 2),
(414, 0, 0, '\'La comedia nueva\' y \'El sí de las niñas\' (Leandro Fernández de Moratín)', 2),
(415, 0, 0, 'El buscón (Francisco de Quevedo)', 2),
(416, 0, 0, 'San Camilo 1936 (Camilo José Cela)', 2),
(417, 0, 0, 'Cajón desastre (Camilo José Cela)', 2),
(418, 0, 0, 'Conversaciones españolas (Camilo José Cela)', 5),
(419, 0, 0, 'Episodios nacionales (Benito Pérez Galdós): 1', 5),
(420, 0, 0, 'Episodios nacionales (Benito Pérez Galdós): 2', 5),
(421, 0, 0, 'Yo, Alexis, biznieto del Zar', 3),
(422, 0, 0, 'Buen humor para hipertensos', 5),
(423, 0, 0, 'El mantenimiento del cuerpo', 5),
(424, 0, 0, 'El mono obeso', 5),
(425, 0, 0, 'Palabras como bálsamo', 5),
(426, 0, 0, 'Planeta encantado', 5),
(427, 0, 0, 'El sendero de la mano izquierda (Sánchez Dragó)', 5),
(428, 0, 0, 'Ayuda a tu hijo a entrenar su inteligencia', 5),
(429, 0, 0, 'Guía práctica para superar el estrés', 5),
(430, 0, 0, 'No existe la muerte', 5),
(431, 0, 0, 'Sabiduría esencial (Bernabé Tierno)', 5),
(432, 0, 0, 'El lenguaje del cuerpo', 5),
(433, 0, 0, 'Cómo no ser una madre perfecta', 5),
(434, 0, 0, 'La vida es bella, disfrútela', 3),
(435, 0, 0, 'Vivir con la enfermedad de Alzheimer', 3),
(436, 0, 0, 'De muerte natural (Antonio Mingote)', 5),
(437, 0, 0, 'Relatos', 5),
(438, 0, 0, 'La puerta de la esperanza', 5),
(439, 0, 0, 'El siguiente, por favor. La vida vista por un psiquiatra', 5),
(440, 0, 0, 'Preguntas básicas sobre la ciencia (Isaac Asimov)', 1),
(441, 0, 0, 'La ley de Murphy para médicos', 2),
(442, 0, 0, 'Alcohol y alcoholismo', 2),
(443, 0, 0, 'Los 100 mejores consejos de saber vivir (Manuel Torreiglesias)', 3),
(444, 0, 0, 'La meditación (Ramiro Calle)', 3),
(445, 0, 0, 'El anticipador y otros cuentos de mente', 3),
(446, 0, 0, 'Diga 33', 3),
(447, 0, 0, 'Cómo hacer bien el amor a una mujer', 3),
(448, 0, 0, 'Hombres fenómenos y personajes de excepción', 3),
(449, 0, 0, 'Más allá de la supervivencia', 1),
(450, 0, 0, 'Historias curiosas de la medicina', 1),
(451, 0, 0, 'Relatos (Valhondo)', 5),
(452, 0, 0, 'Cuentos, adivinanzas y refranes populares', 1),
(453, 0, 0, 'Los mejores cuentos policiales', 2),
(454, 0, 0, '\'Pasión de Cristo\' y \'Pasión del mundo\'', 2),
(455, 0, 0, 'En la cabecera de los protagonistas de la historia', 5),
(456, 0, 0, 'Sexo en piedra', 10),
(457, 0, 0, 'Quinoterapia (Quino)', 5),
(458, 0, 0, 'Por qué son escasas las fieras', 5),
(459, 0, 0, 'El libro de la sexualidad', 10),
(460, 0, 0, 'Europa y América (1492-1992)', 10),
(461, 0, 0, 'Ciudades del mundo', 15),
(462, 0, 0, 'Historia del Felipismo: Tomo 1', 10),
(463, 0, 0, 'Historia del Felipismo: Tomo 2', 10),
(464, 0, 0, 'Crónica del siglo XX', 25),
(465, 0, 0, 'Patrimonio de la humanidad (España y Portugal)', 15),
(466, 0, 0, 'Diccionario enciclopédico de los premios Novel de Medicina', 10),
(467, 0, 0, 'Los discursos de la corona en las cortes', 5),
(468, 0, 0, 'Extremadura, todo un descubrimiento (monumentos)', 10),
(469, 0, 0, 'Raíces (folklore extremeño)', 10),
(470, 0, 0, 'Raíces (Extremadura festiva)', 10),
(471, 0, 0, 'Extremadura: Tomo 1', 10),
(472, 0, 0, 'Extremadura: Tomo 2', 10),
(473, 0, 0, 'Cultura pastoril en la baja Extremadura', 5),
(474, 0, 0, 'Extremadura, el último paraíso', 10),
(475, 0, 0, 'Grandes músicos (sus vidas y sus enfermedades)', 10),
(476, 0, 0, 'Maestros de la música I (Planeta DeAgostini)', 10),
(477, 0, 0, 'Maestros de la música II (Planeta DeAgostini)', 10),
(478, 0, 0, 'Neoclasicismo y romanticismo (arquitectura, pintura, escultura y dibujo)', 25),
(479, 0, 0, 'Museo delVaticano', 20),
(480, 0, 0, 'National gallery. Londres', 20),
(481, 0, 0, 'Medicina en la pintura I', 15),
(482, 0, 0, 'Medicina en la pintura II', 15),
(483, 0, 0, 'La obra completa de Leonardo', 10),
(484, 0, 0, 'La obra completa de Picasso', 10),
(485, 0, 0, 'Goya. Los caprichos', 15),
(486, 0, 0, 'Hermoso', 20),
(487, 0, 0, 'Juan Roldán', 10),
(488, 0, 0, 'Museo Británico', 5),
(489, 0, 0, 'El Hermitage', 5),
(490, 0, 0, 'Arte en la piel (fascículos 1, 2 y 3)', 5),
(491, 0, 0, 'Velázquez', 10),
(492, 0, 0, 'El arte egipcio en Berlín', 5),
(493, 0, 0, 'El maestro del Prado (Javier Sierra)', 5),
(494, 0, 0, 'Pequeñas guías de pintores (\'Zurbarán\', \'Goya\', \'Romero de Torres\', \'Picasso\')/cada una', 1),
(495, 0, 0, 'Arte románico', 2),
(496, 0, 0, 'Atlas del mundo (El País)', 15),
(497, 0, 0, 'Geografía universal (Salvat)', 15),
(498, 0, 0, 'Parques naturales de España (Salvat)', 15),
(499, 0, 0, 'Castillos y palacios de España (Salvat)', 15),
(500, 0, 0, 'Atlas enciclopédico (El Mundo)', 15),
(501, 0, 0, 'La ventana siniestra (Raymond Chandler)', 2),
(502, 0, 0, 'El largo adios (Raymond Chandler)', 2),
(503, 0, 0, 'La dama del lago (Raymond Chandler)', 2),
(504, 0, 0, 'Peces de colores (Raymond Chandler)', 2),
(505, 0, 0, 'El gran sueño de oro (Chester Himes)', 2),
(506, 0, 0, 'Empieza el calor (Chester Himes)', 2),
(507, 0, 0, 'Por amor a Imabelle (Chester Himes)', 2),
(508, 0, 0, 'El escalofrío (Ross Macdonald)', 2),
(509, 0, 0, 'La bella durmiente (Ross Macdonald)', 2),
(510, 0, 0, 'Aguas profundas (Patricia Highsmith)', 2),
(511, 0, 0, 'Arma mortal (Walde Miller)', 2),
(512, 0, 0, 'El ángel triste (Carlos Pérez Merinero)', 2),
(513, 0, 0, 'Por amor al arte (Andreu Martín)', 2),
(514, 0, 0, 'Tarde, sesión continua (Jaume Fuster)', 2),
(515, 0, 0, 'Historia de Ada (Carlo Cassola)', 2),
(516, 0, 0, '\'El Libro\' y \'La inmortalidad\' (Jorge Luis Borges)', 2),
(517, 0, 0, 'Tres novelas ejemplares (Manuel Vázquez Montalbán)', 2),
(518, 0, 0, 'La aventura equinoccial de Lope de Aguirre (Ramón J. Sender)', 2),
(519, 0, 0, 'La muerte de Artemio Cruz (Carlos Fuentes)', 2),
(520, 0, 0, 'Elejías andaluzas (Juan Ramón Jiménez)', 2),
(521, 0, 0, 'Abel Sánchez (Miguel de Unamuno)', 2),
(522, 0, 0, 'Cuentos morales (Leopoldo Alas Clarín)', 2),
(523, 0, 0, 'Su único hijo (Leopoldo Alas Clarín)', 2),
(524, 0, 0, 'Lo que canté y dije de Picasso (Rafael Alberti)', 2),
(525, 0, 0, 'Barrabás y otros cuentos (Arturo Uslar Pietri)', 2),
(526, 0, 0, 'Las lanzas coloradas (Arturo Uslar Pietri)', 2),
(527, 0, 0, 'Oppiano Licario (José Lezama Lima)', 2),
(528, 0, 0, 'Paradiso (José Lezama Lima)', 2),
(529, 0, 0, 'El gran momento de Mary Tribune (Juan García Hortelano)', 2),
(530, 0, 0, 'Hombres de a caballo (David Viñas)', 2),
(531, 0, 0, 'El Astillero (J. C. Onetti)', 2),
(532, 0, 0, 'La orgía perpetua (Mario Vargas Llosa)', 2),
(533, 0, 0, 'Cien años de soledad (Gabriel García Márquez)', 2),
(534, 0, 0, 'El otoño del patriarca (Gabriel García Márquez)', 2),
(535, 0, 0, 'Los funerales de la mama grande (Gabriel García Márquez)', 2),
(536, 0, 0, 'Ojos de perro azul (Gabriel García Márquez)', 2),
(537, 0, 0, 'El coronel no tiene quien le escriba (Gabriel García Márquez)', 2),
(538, 0, 0, 'La mala hora (Gabriel García Márquez)', 2),
(539, 0, 0, 'Obra periodística de Europa y América (1955-1960)', 2),
(540, 0, 0, 'La verdad sobre el caso Savolta (Eduardo Mendoza Garriga)', 2),
(541, 0, 0, 'Luces de bohemia (Ramón María del Valle-Inclán)', 2),
(542, 0, 0, 'Sonata de primavera (Ramón María del Valle-Inclán)', 2),
(543, 0, 0, 'Réquiem por un campesino español (Ramón J. Sender)', 2),
(544, 0, 0, 'La muerte de una dama (Llorenç Villalonga)', 2),
(545, 0, 0, 'Bearn o la sala de las muñecas (Llorenç Villalonga)', 2),
(546, 0, 0, 'Isla de la simpatía (Juan Ramón Jiménez)', 2),
(547, 0, 0, 'Cartas literarias (Juan Ramón Jiménez)', 2),
(548, 0, 0, 'Poesía-prosa (Vicente Aleixandre)', 2),
(549, 0, 0, 'Don Segundo Sombra (Ricardo Güiraldes)', 2),
(550, 0, 0, 'Viaje por la Europa roja (Fernando Díaz Plaja)', 2),
(551, 0, 0, 'Mi credo (Hermann Hesse)', 2),
(552, 0, 0, 'El caminante (Hermann Hesse)', 2),
(553, 0, 0, 'En el balneario (Hermann Hesse)', 2),
(554, 0, 0, 'El topo (John le Carré)', 2),
(555, 0, 0, 'Manhattan Transfer (John Dos Passos)', 2),
(556, 0, 0, 'Las alas de la paloma (Henry James)', 2),
(557, 0, 0, 'Otra vuelta de tuerca (Henry James)', 2),
(558, 0, 0, 'Los pasos perdidos (Alejo Carpentier)', 2),
(559, 0, 0, 'Ecue-Yamba-O (Alejo Carpentier)', 2),
(560, 0, 0, 'El siglo de las luces (Alejo Carpentier)', 2),
(561, 0, 0, 'El americano impasible (Graham Green)', 2),
(562, 0, 0, 'Manon Lescaut (Abate Prévost)', 2),
(563, 0, 0, 'Diarios de las estrellas (Stanislaw Lem)', 2),
(564, 0, 0, 'Ultramarina (Malcolm Lowry)', 2),
(565, 0, 0, 'La edad de la inocencia (Edith Wharton)', 2),
(566, 0, 0, 'Relatos (G. Tomasi Di Lampedusa)', 2),
(567, 0, 0, 'La nave de los locos (K. Anne Potter)', 2),
(568, 0, 0, 'Las máscaras (Jorge Edwards)', 2),
(569, 0, 0, 'Cuando ella era buena (Philip Roth)', 2),
(570, 0, 0, 'El lamento de Portnoy (Phillip Roth)', 2),
(571, 0, 0, 'El tambor de hojalata (Günter Grass)', 2),
(572, 0, 0, 'El contexto (Leonardo Sciascia)', 2),
(573, 0, 0, 'Los tíos de Sicilia (Leonardo Sciascia)', 2),
(574, 0, 0, 'En tierra de infieles (Leonardo Sciascia)', 2),
(575, 0, 0, 'Las Parroquias de Regalpetra (Leonardo Sciascia)', 2),
(576, 0, 0, 'Lord Jim (Joseph Conrad)', 2),
(577, 0, 0, 'El mundo antiguo (John A.Garraty y Peter Gay)', 2),
(578, 0, 0, 'El mundo medieval (John A.Garraty y Peter Gay)', 2),
(579, 0, 0, 'La reliquia (Eça de Queiroz)', 2),
(580, 0, 0, 'El misterio de la carretera de Sintra (Eça de Queiroz)', 2),
(581, 0, 0, 'Los náufragos del Jonathan (Julio Verne y Michel Verne)', 2),
(582, 0, 0, 'Cuentos de la infancia y del hogar (Hermanos Grimm)', 2),
(583, 0, 0, 'Fuertes como la muerte (Guy de Maupassant)', 2),
(584, 0, 0, 'Pigmalión (musical de George Bernard Shaw)', 2),
(585, 0, 0, 'Anäis Nin (diario II; 1934-1939)', 2),
(586, 0, 0, 'Anäis Nin (diario III; 1939-1944)', 2),
(587, 0, 0, 'Vathek (William Beckford)', 2),
(588, 0, 0, 'Santuario (William Faulkner)', 2),
(589, 0, 0, 'La amenaza de Andrómeda (Michael Chrichton)', 2),
(590, 0, 0, 'El que susurra en la oscuridad (H. P. Lovecraft)', 2),
(591, 0, 0, 'Drácula (Bram Stoker)', 2),
(592, 0, 0, 'El proceso (Frank Kafka)', 2),
(593, 0, 0, 'Yonqui (William Burroughs)', 2),
(594, 0, 0, 'Peces sin escondite (J. Hadley Chase)', 2),
(595, 0, 0, 'Vanina Vanini y otros relatos (Stendhal)', 2),
(596, 0, 0, 'Reloj sin manecillas (Carson McCullers)', 2),
(597, 0, 0, '\'La playa\' y \'Fiesta de agosto\' (C. Pavese)', 2),
(598, 0, 0, 'Papá Goriot (H. de Balzac)', 2),
(599, 0, 0, 'Ilusiones perdidas (H. de Balzac)', 2),
(600, 0, 0, 'Infancia, adolescencia, juventud (León Tolstói)', 2),
(601, 0, 0, 'Sexus (Henry Miller)', 2),
(602, 0, 0, 'El Crack-Up (F. Scott Fitzgerald)', 2),
(603, 0, 0, 'Historia de la columna infame (Alessandro Manzoni)', 2),
(604, 0, 0, 'Madame Bovary (Gustave Flanbert)', 2),
(605, 0, 0, 'El súbdito (Heinrich Mann)', 2),
(606, 0, 0, 'Candidato o un sueño siciliano (Leonardo Sciascia)', 2),
(607, 0, 0, 'Teatro contemporáneo (August Strindberg)', 2),
(608, 0, 0, 'Eugenia Grandet (Honoré de Balzac)', 2),
(609, 0, 0, 'Robinson Crusoe (Daniel Defoe)', 2),
(610, 0, 0, 'Historias de piratas (Daniel Defoe)', 2),
(611, 0, 0, 'Diario del año de la peste (Daniel Defoe)', 2),
(612, 0, 0, 'Acuéstate sobre lirios (James Hadley Chase)', 2),
(613, 0, 0, 'Un loto para Miss Quoni (James Hadley Chase)', 2),
(614, 0, 0, 'Una radiante mañana estival (James Hadley Chase)', 2),
(615, 0, 0, 'Los demonios (Fiódor Dostoyevski)', 2),
(616, 0, 0, '\'Cuentos de Odessa\' y \'Relatos\' (Isaak E. Babel)', 2),
(617, 0, 0, 'La princesa de Clèves (Madame de La Fayette)', 2),
(618, 0, 0, '\'El diablo en las colinas\' y \'Entre mujeres solas\' (Cesare Pavese)', 2),
(619, 0, 0, 'El sonido y la furia (William Faulkner)', 2),
(620, 0, 0, 'Oscuro como la tumba donde yace mi amigo (Malcolm Lowry)', 2),
(621, 0, 0, 'Una guerra de Sahibs (Rudyard Kipling)', 2),
(622, 0, 0, 'Moby Dick (Herman Melville)', 2),
(623, 0, 0, 'Melmoth el errabundo (Charles Maturin)', 2),
(624, 0, 0, 'Aventuras de un cadáver (Robert Louis Stevenson)', 2),
(625, 0, 0, 'Fausto (Johann Wolfgang von Goethe)', 2),
(626, 0, 0, 'El Mueble. Especial cuartos de baño', 1),
(627, 0, 0, 'El Mueble. Vestidores y armarios', 1),
(628, 0, 0, 'El Mueble. Sofá y parqué', 1),
(629, 0, 0, 'El Mueble. Cocina y cortinas de salón', 1),
(630, 0, 0, 'El Mueble. Iluminación y telas de dormitorio', 1),
(631, 0, 0, 'El Mueble. Especial pocos metros', 1),
(632, 0, 0, 'El Mueble. Especial 40 aniversario', 1),
(633, 0, 0, 'El Mueble. Salones y guías de pintura', 1),
(634, 0, 0, 'Chalét Decó. Especial offices', 1),
(635, 0, 0, 'Chalét Decó. Jardines y armarios', 1),
(636, 0, 0, 'Chalét Decó. 8 casas bien decoradas', 1),
(637, 0, 0, 'Chalét Decó. 12 vestidores con muchas ideas', 1),
(638, 0, 0, 'Chalét Decó. 9 cuartos de baño', 1),
(639, 0, 0, 'Chalét Decó. 6 salones', 1),
(640, 0, 0, 'Chalét Decó. 6 buhardillas con mucho estilo', 1),
(641, 0, 0, 'Chalét Decó. 9 buhardillas bien aprovechadas', 1),
(642, 0, 0, 'Casa y jardín. Cuartos de baño, pavimentos', 1),
(643, 0, 0, 'Elle Decoración. Librerías y telas', 1),
(644, 0, 0, 'Mi Casa. Lámparas y apliques', 1),
(645, 0, 0, 'Casas de Siempre. Recibidor, comprar antiguedades', 1),
(646, 0, 0, 'Nuevo Estilo. Comedor, iluminación del baño', 1),
(647, 0, 0, 'Habitania. Mesa centro, muebles cocina', 1),
(648, 0, 0, 'Modelo Generation, color negro', 100),
(649, 0, 0, 'Modelo Meistertuck, color negro', 150),
(650, 0, 0, 'Modelo Generation, color azul', 100),
(651, 0, 0, 'Fino, color negro', 80),
(652, 0, 0, 'Modelo Noblesse Obligue, color azul', 150),
(653, 0, 0, 'Color oro viejo', 100),
(654, 0, 0, 'Color dorado', 30),
(655, 0, 0, 'Un portaminas y un bolígrafo de acero', 60),
(656, 0, 0, 'Modelo Pure Class, color gris tierra', 50),
(657, 0, 0, 'Waterman Paris. Modelo Hemisphere acero', 50),
(658, 0, 0, 'Mechero Dupont de oro', 250);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `id_seccion` int(11) NOT NULL,
  `nombre_seccion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id_seccion`, `nombre_seccion`) VALUES
(1, 'Guías del mundo'),
(2, 'Libros y cuentos infantiles'),
(3, 'Literatura juvenil'),
(4, 'Libros de cocina'),
(5, 'Novela'),
(6, 'Novelas de Agatha Christie'),
(7, 'Genios de la narrativa actual'),
(8, 'Grandes biografías'),
(9, 'Poesía'),
(10, 'Clásicos universales'),
(11, 'Varios (libros prácticos)'),
(12, 'Extremadura'),
(13, 'Música'),
(14, 'Museos y pinturas'),
(15, 'Atlas'),
(16, 'Club bruguera - Libro amigo (edición de bolsillo)'),
(17, 'Revistas de decoración');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subseccion`
--

CREATE TABLE `subseccion` (
  `id_subseccion` int(11) NOT NULL,
  `id_seccion` int(11) NOT NULL,
  `nombre_subseccion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `subseccion`
--

INSERT INTO `subseccion` (`id_subseccion`, `id_seccion`, `nombre_subseccion`) VALUES
(1, 0, 'Guías de España'),
(2, 0, 'Guías con encanto'),
(3, 0, '9 libros móviles Disney'),
(4, 0, 'Cuentos infantiles'),
(5, 0, 'Novelas juveniles'),
(6, 0, 'Comics'),
(7, 0, 'Libros de cocina'),
(8, 0, 'Novela histórica'),
(9, 0, 'Novela actual'),
(10, 0, 'Novela negra'),
(11, 0, 'Autores de habla castellana'),
(12, 0, 'Autores extranjeros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `correo` text COLLATE utf8_unicode_ci NOT NULL,
  `contraseña` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `correo`, `contraseña`) VALUES
(1, 'asdf3110@yopmail.com', '311093');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_subseccion` (`id_subseccion`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id_seccion`);

--
-- Indices de la tabla `subseccion`
--
ALTER TABLE `subseccion`
  ADD PRIMARY KEY (`id_subseccion`),
  ADD KEY `id_seccion` (`id_seccion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=659;
--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `id_seccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `subseccion`
--
ALTER TABLE `subseccion`
  MODIFY `id_subseccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
