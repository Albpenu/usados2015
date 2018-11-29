-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2017 a las 18:04:26
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `id_usuario`) VALUES
(16, 22);

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

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `id_usuario`, `nombre`, `apellidos`, `direccion`, `telefono`) VALUES
(8, 4, '177dacb14b34103960ec27ba29bd686b', '0d9e0475d41bf9b44e07121aea8a0585', 'bb87c9d50fe0d224db862b642ab9afe4', '2ace3fb1f0a7ffa0d75745087f4cad95'),
(10, 5, '177dacb14b34103960ec27ba29bd686b', 'bff149a0b87f5b0e00d9dd364e9ddaa0', 'bb87c9d50fe0d224db862b642ab9afe4', '556fbc11ec7761afdea7cf344bad77aa');

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
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` text COLLATE utf8_unicode_ci NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_producto`, `precio`) VALUES
(1, 'Atenas', 2),
(2, 'Beijing', 2),
(3, 'Gran Muralla', 2),
(4, 'Capri', 2),
(5, 'Costa Azul', 2),
(6, 'Delhi, Agra y Jaipur (La India)', 2),
(7, 'Edimburgo', 2),
(8, 'Estambul', 2),
(9, 'Valle de los Reyes (Egipto)', 2),
(10, 'Florencia', 2),
(11, 'Finlandia', 2),
(12, 'Jordania', 2),
(13, 'Londres', 2),
(14, 'Todo Londres', 2),
(15, 'Nueva York', 2),
(16, 'Oxford', 2),
(17, 'Todo París', 2),
(18, 'San Petersburgo y alrededores', 2),
(19, 'Descubriendo Perú', 2),
(20, 'Pompeya', 2),
(21, 'Todo Portugal', 2),
(22, 'Praga', 2),
(23, 'Roma y Vaticano', 2),
(24, 'Roma', 2),
(25, 'Ciudad del Vaticano', 2),
(26, 'Tallín', 2),
(27, 'Toda Venecia', 2),
(28, 'Viena / Palacio Schönbrunn', 2),
(29, 'Guías pequeñas: Amsterdam', 1),
(30, 'Guías pequeñas: Berlín', 1),
(31, 'Guías pequeñas: Berlín con Potsdam', 1),
(32, 'Guías pequeñas: Colonia', 1),
(33, 'Guías pequeñas: Egipto', 1),
(34, 'Guías pequeñas: Egipto mini', 1),
(35, 'Guías pequeñas: La Habana', 1),
(36, 'Guías pequeñas: Italia', 1),
(37, 'Las Alpujarras', 1),
(38, 'Todo Córdoba', 2),
(39, 'Toledo', 2),
(40, 'Todo Madrid', 2),
(41, 'Todo Salamanca', 2),
(42, 'Todo Santiago', 2),
(43, 'Castillos y Paisajes', 2),
(44, 'Viajeros ingleses por Extremadura', 2),
(45, 'Salud y Viajes (manual de consejos prácticos)', 2),
(46, 'Castillos con encanto', 2),
(47, 'Pueblos pescadores con encanto', 2),
(48, 'Turismo natural', 2),
(49, 'Guía de casas rurales (mapa de carretera de España y Portugal)', 2),
(50, 'Alojamientos rurales', 2),
(51, 'Guía de hoteles, campings y restaurantes de Extremadura', 2),
(52, 'Guía del viajero (España y Portugal)', 2),
(53, 'Cantábrico y océano Atlántico (el viajero inteligente)', 2),
(54, 'Excursiones en otoño con su mejor amigo', 2),
(55, 'El médico viajando por España', 2),
(56, 'Anuario de turismo rural (2003)', 2),
(57, 'Guía Normon del viajero', 2),
(58, 'Rusticae (guía rural)', 2),
(59, 'Zalamea de la Serena', 2),
(60, 'Viaje por España', 2),
(61, 'Sierra de Gredos', 2),
(62, 'Hacia lo más alto. Expedición al Everest', 2),
(63, 'Conocer y vivir Monfragüe', 2),
(64, 'Guía de costas y restaurantes', 2),
(65, '17 guías sobre la geografía, turismo, arte y gastronomía de las comunidades de España', 2),
(66, 'Restaurantes de España', 2),
(67, 'El jorobado de Notre Dame', 1),
(68, 'Bambi', 1),
(69, 'El Rey León', 1),
(70, 'La bella y la bestia', 1),
(71, 'La dama y el vagabundo', 1),
(72, 'Blancanieves', 1),
(73, 'Hércules', 1),
(74, 'La bella durmiente', 1),
(75, 'El pato Donald', 1),
(76, 'El Rey León', 2),
(77, 'El maravilloso mundo de los animales', 2),
(78, 'El jorobado de Notre Dame', 2),
(79, 'Hänsel y Gretel', 2),
(80, 'El gato con botas', 2),
(81, 'Dinosaurios', 2),
(82, 'Kika superbruja y la momia', 2),
(83, 'Gatitos', 2),
(84, 'Travesuras de Guillermo', 2),
(85, 'El cerdito Menta (colección \'El Barco de Vapor\')', 2),
(86, 'Mr Pum (colección \'El Barco de Vapor\')', 2),
(87, 'Jeruso quiere ser gente', 2),
(88, 'Harry Potter y el caliz de fuego', 10),
(89, 'Harry Potter y la orden del fénix', 10),
(90, 'El diccionario del mago', 10),
(91, 'La magia del Grial', 5),
(92, 'Las crónicas de Narnia. El León, la bruja y el armario', 5),
(93, 'Las crónicas de Narnia. La silla de plata', 5),
(94, 'El niño con el pijama de rayas', 5),
(95, 'El pequeño Nicolás', 2),
(96, 'Los recreos del pequeño Nicolás', 2),
(97, 'Los amiguetes del pequeño Nicolás', 2),
(98, 'Querido hijo, estás despedido', 2),
(99, 'Cuentos para jugar', 2),
(100, 'Un monstruo en el armario (colección \'El Barco de Vapor\')', 2),
(101, 'Los hijos del vidriero (colección \'El Barco de Vapor\')', 2),
(102, 'Una casa con 7 habitaciones', 2),
(103, 'Kiatoski y el caso del tío vivo azul', 2),
(104, 'El viaje de Doble-P', 2),
(105, 'El regreso de Doble-P', 2),
(106, 'Las alas del sol (colección \'El Barco de Vapor\')', 2),
(107, 'El lugar más bonito del mundo', 2),
(108, 'Brumas de octubre', 2),
(109, 'Billy Elliot (colección \'El Barco de Vapor\')', 2),
(110, 'Konrad o el niño que salió de una lata de conservas', 2),
(111, 'Charlie y el gran ascensor de cristal', 2),
(112, 'Las tormentas del mar embotellado', 2),
(113, 'Colibrí-Colibrá', 2),
(114, 'El principito', 2),
(115, 'La dama del alba', 2),
(116, 'Mande a su hijo a Marte', 2),
(117, 'El secreto del ordenador', 2),
(118, 'El Cid', 2),
(119, 'La expedición perdida', 2),
(120, 'Lanzarote y los caballeros de la tabla redonda', 2),
(121, 'Eloisa está debajo de un almendro', 2),
(122, 'Los caballos de mi tío', 2),
(123, 'Las chicas de alambre', 2),
(124, 'Las aventuras de Ulises (clásicos adaptados)', 2),
(125, 'Cantar del Mio Cid (clásicos adaptados)', 2),
(126, 'Novelas ejemplares', 2),
(127, 'El príncipe de la niebla', 2),
(128, 'Alicia en el País de las Maravillas', 2),
(129, 'El extraño caso del Dr. Jekyll y Mr. Hyde (en español)', 2),
(130, 'El extraño caso del Dr. Jekyll y Mr. Hyde (en inglés)', 2),
(131, 'El misterio de la cripta embrujada', 2),
(132, 'El fantasma de Canterville (en español)', 2),
(133, 'El fantasma de Canterville (en inglés)', 2),
(134, 'El alumno', 2),
(135, 'The Queen and I (en inglés)', 2),
(136, 'El Mundo Perdido', 2),
(137, 'A tale of two cities (en inglés)', 5),
(138, 'Huckleberry Finn', 5),
(139, 'Saga Crepúsculo: Crepúsculo', 5),
(140, 'Saga Crepúsculo: Luna Nueva', 10),
(141, 'Saga Crepúsculo: Eclipse', 10),
(142, 'Saga Crepúsculo: Amanecer', 10),
(143, 'Mini Larousse (diccionario enciclopédico juvenil ilustrado; 12 tomos)', 10),
(144, 'Spiderman', 2),
(145, 'Batman (1 y 2)', 2),
(146, 'Patrulla X (1, 2 y 3)', 2),
(147, 'Superman (1, 2 y 3)', 2),
(148, 'El increíble Hulk (1, 2 y 3)', 2),
(149, 'Iron Man (1, 2 y 3)', 2),
(150, 'Corto Maltés (1, 2 y 3)', 2),
(151, 'Conan el bárbaro (1, 2 y 3)', 2),
(152, 'Daredevil. Dan el defensor  (1, 2 y 3)', 2),
(153, 'The Spirit (1, 2 y 3)', 2),
(154, 'Los 4 fantásticos (1, 2 y 3)', 2),
(155, 'Los vengadores (1, 2 y 3)', 2),
(156, 'El poderoso Thor (1, 2 y 3)', 2),
(157, 'Blueberry (1, 2 y 3)', 2),
(158, 'Mortadelo y Filemón. El sulfato atómico', 2),
(159, 'Cocina vegetariana', 5),
(160, 'Carlos Arguiñano. El menú de cada día', 10),
(161, 'Comida sana (Drs. Roselló y Torreiglesias)', 10),
(162, 'Cocina española baja en grasa y colesterol', 10),
(163, 'Prevenir la anemia. Comer sano (recetas de K. Arguiñano)', 10),
(164, 'Cocina natural', 3),
(165, 'Cocinar con patatas', 2),
(166, 'Pimientos, guindillas y pimentón', 2),
(167, 'Cocinar a presión', 2),
(168, 'Cocinar para diabéticos en invierno', 1),
(169, 'Cocinar para diabéticos en otoño', 1),
(170, 'Comer bien', 1),
(171, 'Guía de quesos españoles', 2),
(172, 'Guía de tapas para soñar', 2),
(173, 'Guía de platos tradicionales de España', 2),
(174, 'Guías de legumbres, pizzas, galletas y verduras', 2),
(175, 'Guía Café', 1),
(176, 'Omega 3. Salud en la cocina', 5),
(177, 'Omega 3. Las grasas diferentes', 5),
(178, 'Inés y Simone Ortega. Rebozados, barbacoas y parrillas', 5),
(179, 'Inés y Simón Ortega. Menús todo el año', 5),
(180, 'Inés y Simón Ortega. Tartas saladas, suflés y huevos', 5),
(181, 'Inés y Simón Ortega. Guisos, estofados y calderetas', 5),
(182, 'Cocina vegetariana saludable', 5),
(183, 'Cocina sana. Pescado y marisco, aves y caza, carne', 5),
(184, 'Microondas (\'Círculo de Lectores\')', 5),
(185, 'La traición de Roma (Santiago Posterguillo)', 15),
(186, 'La legión perdida (Santiago Posterguillo)', 15),
(187, 'Circo Máximo (Santiago Posterguillo)', 15),
(188, 'Las legiones Perdidas (Santiago Posterguillo)', 15),
(189, 'Los asesinos del emperador (Santiago Posterguillo)', 15),
(190, 'Africanus (Santiago Posterguillo)', 15),
(191, 'El ladrón de tumbas (Antonio Cabanas)', 15),
(192, 'El hijo del desierto (Antonio Cabanas)', 15),
(193, 'El cautivo (Jesús Sánchez Adaliz)', 15),
(194, 'El camino Mozárabe (Jesús Sánchez Adaliz)', 15),
(195, 'Los pilares de la Tierra (Ken Follet)', 15),
(196, 'La caída de los gigantes (Ken Follet)', 15),
(197, 'El invierno del mundo (Ken Follet)', 15),
(198, 'El umbral de la eternidad (Ken Follet)', 15),
(199, 'Un mundo sin fin (Ken Follet)', 15),
(200, 'Los herederos de la Tierra (Ildefonso Falcones)', 15),
(201, 'La catedral del Mar (Ildefonso Falcones)', 15),
(202, 'El secreto del Nilo (Antonio Cabanas)', 15),
(203, 'El Mozárabe (Jesús Sánchez Adaliz)', 10),
(204, 'El constructor de pirámides (Santiago Morata)', 10),
(205, 'Águilas y cuervos (P. Gedre)', 10),
(206, 'El juramento de los cruzados (R. Jordan)', 10),
(207, 'La estrella de sangre (N. Guila)', 10),
(208, 'Martyrium (S. Castellanos)', 10),
(209, 'El enviado de Roma', 10),
(210, 'Los Hijos del Senador (Olga Romay)', 15),
(211, 'El águila en la nieve (W. Bqeem)', 15),
(212, 'La hija del Nilo (Javier Negrete)', 15),
(213, 'El ejército perdido (Masimo Manfredi)', 15),
(214, 'El Asirio (N. Guild)', 10),
(215, 'Camino a Roma (Ben Kane)', 15),
(216, 'Salamina (Javier Negrete)', 15),
(217, 'Imperio (Steven Saylor)', 15),
(218, 'Sinué el Egipcio (Mika Waltari)', 15),
(219, 'El primer hombre de Roma (Colleen McCullongh)', 5),
(220, 'La corona de hierba (Colleen McCullongh)', 5),
(221, 'Favoritos de la fortuna (Colleen McCullongh)', 5),
(222, 'Las mujeres del César (Colleen McCullongh)', 5),
(223, 'El caballo del César (Colleen McCullongh)', 5),
(224, 'El juez de Egipto (Cristian Jaco)', 5),
(225, 'La reina Sol (Cristian Jaco)', 5),
(226, 'Azteca (G. Jennings)', 5),
(227, 'Aníbal (David A. Durhan)', 5),
(228, 'Chamán (Noah Gordon)', 5),
(229, 'Antonio y Cleopatra (Colleen McCullongh)', 5),
(230, 'César (Colleen McCullongh)', 5),
(231, 'La canción de Troya (Colleen McCullongh)', 5),
(232, 'Yo, Moctezuma (H. Thomas)', 5),
(233, 'Lucrecia Borgia (John Faunce)', 5),
(234, 'La legión de los inmortales (Massimiliano Colombo)', 5),
(235, 'Puertas de Fuego (S. Pressfield)', 5),
(236, 'Médico de cuerpos y almas (T. Caldwell)', 5),
(237, 'Invictus (Simone Sarasso)', 5),
(238, 'Yo, Claudio (Robert Graves)', 5),
(239, 'Claudio el dios y su esposa Mesalina', 5),
(240, 'Aníbal (Gisbert Haefs)', 5),
(241, 'Juliano, el apóstata (Gore Vidal)', 5),
(242, 'La legión olvidada (Ben Kane)', 5),
(243, 'El águila de plata (Ben Kane)', 5),
(244, 'El escriba del barro (L. Mediano)', 5),
(245, 'Gladiador (Gordon Russell)', 5),
(246, 'El águila del imperio (S. Scarrow)', 5),
(247, 'Roma vincit (S. Scarrow)', 5),
(248, 'Las garras del águila (S. Scarrow)', 5),
(249, 'El druida (M. Llywelyn)', 5),
(250, 'La conjura del faraón (Antonio Cabanas)', 5),
(251, 'Roma (S. Saylor)', 5),
(252, 'Alejandro Magno (Robin Lanefox)', 5),
(253, 'Calígula (Franceschini y P. Lunel)', 5),
(254, 'César imperial (Rex Waner)', 5),
(255, 'Guerra y Paz (Leon Tolstoi)', 5),
(256, 'El faraón negro (Cristian Jacq)', 5),
(257, 'Tutancamón (Cristian Jacq)', 5),
(258, 'Los secretos de Osiris (Antonio Cabanas)', 5),
(259, 'Faraón (Francis Févre)', 5),
(260, 'La ciudad prohibida (A. Min)', 5),
(261, 'Malinche (Laura Esquivel)', 5),
(262, 'La ciudad de los muertos (A. Gill)', 5),
(263, 'El médico (Noah Gordon)', 5),
(264, 'Sherezade, las mil y una noches', 5),
(265, 'Akhenatón (N. Hahfuz)', 5),
(266, 'Inca, la princesa del sol (H. B. Daniel)', 5),
(267, 'El macedonio (Nicolas Guild)', 5),
(268, 'Millennium: Los hombres que no amaban a las mujeres (Stieg Larsson)', 10),
(269, 'Millennium: La chica que soñaba con una cerilla y un bidón de gasolina (Stieg Larsson)', 10),
(270, 'Millennium: La reina en el palacio de las corrientes de aire  (Stieg Larsson)', 10),
(271, 'Millennium: Lo que no te mata te hace más fuerte (David Lagercrantz)', 5),
(272, 'El código DaVinci (Dan Brown)', 10),
(273, 'Ángeles y demonios (Dan Brown)', 10),
(274, 'Inferno (Dan Brown) (Dan Brown)', 10),
(275, 'Un milagro en equilibrio (Lucía Etxebarría)', 10),
(276, 'La hermandad de la buena suerte (Fernando Sabater)', 10),
(277, 'Riña de gatos (Eduardo Mendoza)', 10),
(278, 'No digas que fué un sueño (Terenci Moix)', 10),
(279, 'El arpista ciego (Terenci Moix)', 10),
(280, 'El negociador (F. Forsyth)', 10),
(281, 'Op-center (Tom Clancy)', 10),
(282, 'Un arcoiris en la noche (D. Lapierre)', 10),
(283, 'El quinto jinete (D. Lapierre)', 10),
(284, 'Cuarenta maneras de decir dolor (Gilis Blunt)', 10),
(285, 'El médico de Ifni (Javier Reverte)', 10),
(286, 'Caballo de Troya 2 (J. J. Benítez)', 10),
(287, 'Caballo de Troya 3 (J. J. Benítez)', 10),
(288, 'Intrigas y deseo (P. D. James)', 10),
(289, 'Lázaro (Morris West)', 10),
(290, 'Yo, Claudio (Robert Graves)', 10),
(291, 'Cabeza de turco (Wallraff)', 10),
(292, 'El Mundo Perdido', 10),
(293, 'Leon el africano (Amin Madlouf)', 10),
(294, 'El séptimo secreto (Irving Wallace)', 10),
(295, 'Invitado de honor (Irving Wallace)', 10),
(296, 'El cordero (Francois Mauriac)', 10),
(297, '¡Oh, es él! (Maruja Torres)', 10),
(298, '¡Ánimo Wilt! (Tom Sharpe)', 10),
(299, 'Las cortes de Coguaya (Ángel García Roldán)', 10),
(300, 'Relato de un naúfrago (G. Márquez)', 10),
(301, 'Paralelo 42 (John Dos Passos)', 5),
(302, 'Los sótanos del Vaticano (Andrés Gide)', 5),
(303, 'La puerta estrecha (Andrés Gide)', 5),
(304, 'Una relación inconveniente (Anita Brookner)', 5),
(305, 'La que queda del día (K. Ishiguro)', 5),
(306, 'Amor conyugal (Alberto Moravia)', 5),
(307, 'El crimen del cine Oriente (Javier Tomeo)', 5),
(308, 'Brasil (John Updike)', 5),
(309, 'Buenos días, tristeza (Francoise Sagan)', 5),
(310, 'La sombra del viento (Carlos Ruíz Zafón)', 10),
(311, 'Las luces de septiembre (Carlos Ruíz Zafón)', 5),
(312, 'Dime quién soy (Julia Navarro)', 10),
(313, 'La hermandad de la sábana santa (Julia Navarro)', 10),
(314, 'Nada (Carmen Laforet)', 10),
(315, 'La voz dormida (Dulce Chacón)', 10),
(316, 'Lituma en los Andes (Varga Llosa)', 5),
(317, 'La casa de los espírutos (Isabel Allende)', 5),
(318, 'Ardor guerrero (Antonio  Muñoz Molina)', 5),
(319, 'Cabo Trafalgar (Arturo Pérez Reverte)', 2),
(320, 'Con flores a María (Alfonso Groso)', 2),
(321, 'El crimen de Cuenca (Salvador Maldonado)', 2),
(322, 'La ambición del César. Retrato político y humano de Felipe González', 2),
(323, '... Los cuarenta ladrones (Fernando V. Casas)', 2),
(324, 'El Giocondo (F. Umbral)', 2),
(325, 'La mujer como elemento indispensable para la respiración (Enrique J. Poncela)', 1),
(326, 'Mala índole (Javier Marías)', 1),
(327, 'Sodoma y Gomorra (C. Malaparte)', 1),
(328, 'Animal farm (George Orwell)', 1),
(329, 'Abismo (P. Benchley)', 1),
(330, 'El viejo y el mar (Ernest Hemingway)', 2),
(331, 'Un mundo feliz (Aldous Huxley)', 2),
(332, 'El ocho (Katherine Neville)', 5),
(333, '¡Oh, Jerusalén! (D. Lapierre Y L. Colling)', 5),
(334, 'La lista de Schindler (T. Keneally)', 5),
(335, 'Fuego en tus manos (N. Jordan)', 5),
(336, 'Peligro inminente (Tom Clancy)', 5),
(337, 'Iceberg (Clive Cussler)', 5),
(338, 'El emperador (F. Forsyth)', 5),
(339, '\'La saga\' y \'Fuga de J. B.\' (Torrente Ballester)', 10),
(340, 'La guerra del fin del mundo (Varga Llosa)', 5),
(341, 'Cumbres borrascosas (Emily Bronte)', 10),
(342, '\'La camisa\' y \'El cuarto poder\' (L. Olmo)', 5),
(343, 'Niebla (Miguel de Unamuno)', 5),
(344, 'Antes y después del guerra (F. Bleu)', 5),
(345, 'La máquina de leer pensamientos (André Maurois)', 1),
(346, 'Monte Sinaí (Luis Sampedro)', 1),
(347, 'La egiptología (S. Saunerón)', 1),
(348, 'El misterioso caso de Styles', 3),
(349, 'El asesinato de Rogelio Ackroyd', 3),
(350, 'Asesinato en el Orient Express', 3),
(351, 'Maldad bajo el sol', 3),
(352, 'Poirot en Egipto', 3),
(353, 'El caso de los anónimos', 1),
(354, 'El diamante de Jerusalén (Noah Gordon)', 3),
(355, 'El dragón rojo (Thomas Harris)', 3),
(356, 'La clave está en Rebeca (Ken Follet)', 3),
(357, 'El último Don (Mario Puzo)', 3),
(358, 'Eclipse total (Stephen King)', 3),
(359, 'La amenaza de Andrómeda (Michael Crichton)', 3),
(360, 'El infiltrado (John Le Carré)', 3),
(361, 'La momia (Anne Rice)', 3),
(362, 'El jurado (John Crisman)', 3),
(363, 'El emperador (F. Forsyth)', 3),
(364, 'Marie Curie (Robert Reid)', 3),
(365, 'Einstein (Banesh Hoffmann)', 3),
(366, 'Gandhi (Heimo Rau)', 3),
(367, 'Miguel Angel (Heinrich Koch)', 3),
(368, 'Napoleón (André Maurois)', 3),
(369, 'Cleopatra (E. Bradford)', 5),
(370, 'Picasso (Roland Penrose)', 5),
(371, 'Winston Churchill', 5),
(372, 'Buda (R. Allen Mitchell)', 5),
(373, '100 mujeres de rompe y rasga', 2),
(374, 'Colección  Villalar: Alfonso X el Sabio (Julio Valdeón)', 2),
(375, 'Colección  Villalar: Claudio Sanchez-Albornoz (J. L. Martín)', 2),
(376, 'Colección  Villalar: Jorge Guillén (Antonio Piedra)', 2),
(377, 'Colección  Villalar: Miguel Delibes (Emilio Salcedo)', 2),
(378, 'Colección  Villalar: León Felipe (García de la Concha)', 2),
(379, 'Colección  Villalar: Emiliano Barral (J. Manuel Santamaría)', 2),
(380, 'Vientos del Pueblo (Miguel Hernández)', 1),
(381, 'Caminante (Antonio Machado)', 1),
(382, 'Desnudo (Jorge Guillén)', 1),
(383, 'Rimas (Gustavo Adolfo Bécquer)', 1),
(384, 'Don Álvaro o la fuerza del sino (Duque de Rivas)', 1),
(385, 'Entremeses (Miguel de Cervantes)', 1),
(386, 'Bibliotecas populares (Miguel de Cervantes)', 1),
(387, 'Antología poética (Federico García Lorca)', 1),
(388, 'Poemas escogidos (Rafael Alberti)', 1),
(389, 'Poesía (Pablo Neruda)', 1),
(390, 'Veinte poemas de amor y una canción desesperada (Pablo Neruda)', 1),
(391, 'Un sueño de la noche de San Juan (William Shakespeare)', 2),
(392, '\'La gaviota\' y \'El jardín de los cerezos\' (Antón Paulovich Chéjov)', 2),
(393, 'Fuente ovejuna (Lope de Vega)', 2),
(394, 'Vida de Rancé (Francoise-René de Chateau Briand)', 2),
(395, 'Los sufrimientos del joven Werther (Johan Goethe)', 2),
(396, '\'Romeo y Julieta\', y \'Julio César\' (William Shakespeare)', 2),
(397, 'La vida es sueño (Calderón de la Barca)', 2),
(398, '\'Don Juan\' y \'Tartufo\' (Moliére)', 2),
(399, '\'La doma de la furia\' y \'El mercader de Venecia\' (William Shakespeare)', 2),
(400, 'El caballero de Olmedo (Lope de Vega)', 2),
(401, '\'El banquete\' y \'Fedón\' (Platón)', 2),
(402, '\'Andrómaca\' y \'Fedra\' (J. Racine)', 2),
(403, 'Adolfo (B. Constant)', 2),
(404, 'Los milagros de nuestra señora (Gonzalo de Berceo)', 2),
(405, 'El retrato de Dorian Gray (Óscar Wilde)', 2),
(406, 'La princesa de Cléves (Madame de La Fallette)', 2),
(407, 'Rojo y Negro (Stendhal)', 2),
(408, 'Guillermo Tell (F. Bonschiller)', 2),
(409, 'La vida del buscón (Francisco de Quevedo)', 2),
(410, 'Obras completas (Garcilaso de la Vega)', 2),
(411, 'Manón Lescaut (Abate Prévost)', 2),
(412, '\'Atala\' y \'René\' (Chateau Briand)', 2),
(413, 'El libro de Apolonio', 2),
(414, '\'La comedia nueva\' y \'El sí de las niñas\' (Leandro Fernández de Moratín)', 2),
(415, 'El buscón (Francisco de Quevedo)', 2),
(416, 'San Camilo 1936 (Camilo José Cela)', 2),
(417, 'Cajón desastre (Camilo José Cela)', 2),
(418, 'Conversaciones españolas (Camilo José Cela)', 5),
(419, 'Episodios nacionales (Benito Pérez Galdós): 1', 5),
(420, 'Episodios nacionales (Benito Pérez Galdós): 2', 5),
(421, 'Yo, Alexis, biznieto del Zar', 3),
(422, 'Buen humor para hipertensos', 5),
(423, 'El mantenimiento del cuerpo', 5),
(424, 'El mono obeso', 5),
(425, 'Palabras como bálsamo', 5),
(426, 'Planeta encantado', 5),
(427, 'El sendero de la mano izquierda (Sánchez Dragó)', 5),
(428, 'Ayuda a tu hijo a entrenar su inteligencia', 5),
(429, 'Guía práctica para superar el estrés', 5),
(430, 'No existe la muerte', 5),
(431, 'Sabiduría esencial (Bernabé Tierno)', 5),
(432, 'El lenguaje del cuerpo', 5),
(433, 'Cómo no ser una madre perfecta', 5),
(434, 'La vida es bella, disfrútela', 3),
(435, 'Vivir con la enfermedad de Alzheimer', 3),
(436, 'De muerte natural (Antonio Mingote)', 5),
(437, 'Relatos', 5),
(438, 'La puerta de la esperanza', 5),
(439, 'El siguiente, por favor. La vida vista por un psiquiatra', 5),
(440, 'Preguntas básicas sobre la ciencia (Isaac Asimov)', 1),
(441, 'La ley de Murphy para médicos', 2),
(442, 'Alcohol y alcoholismo', 2),
(443, 'Los 100 mejores consejos de saber vivir (Manuel Torreiglesias)', 3),
(444, 'La meditación (Ramiro Calle)', 3),
(445, 'El anticipador y otros cuentos de mente', 3),
(446, 'Diga 33', 3),
(447, 'Cómo hacer bien el amor a una mujer', 3),
(448, 'Hombres fenómenos y personajes de excepción', 3),
(449, 'Más allá de la supervivencia', 1),
(450, 'Historias curiosas de la medicina', 1),
(451, 'Relatos (Valhondo)', 5),
(452, 'Cuentos, adivinanzas y refranes populares', 1),
(453, 'Los mejores cuentos policiales', 2),
(454, '\'Pasión de Cristo\' y \'Pasión del mundo\'', 2),
(455, 'En la cabecera de los protagonistas de la historia', 5),
(456, 'Sexo en piedra', 10),
(457, 'Quinoterapia (Quino)', 5),
(458, 'Por qué son escasas las fieras', 5),
(459, 'El libro de la sexualidad', 10),
(460, 'Europa y América (1492-1992)', 10),
(461, 'Ciudades del mundo', 15),
(462, 'Historia del Felipismo: Tomo 1', 10),
(463, 'Historia del Felipismo: Tomo 2', 10),
(464, 'Crónica del siglo XX', 25),
(465, 'Patrimonio de la humanidad (España y Portugal)', 15),
(466, 'Diccionario enciclopédico de los premios Novel de Medicina', 10),
(467, 'Los discursos de la corona en las cortes', 5),
(468, 'Extremadura, todo un descubrimiento (monumentos)', 10),
(469, 'Raíces (folklore extremeño)', 10),
(470, 'Raíces (Extremadura festiva)', 10),
(471, 'Extremadura: Tomo 1', 10),
(472, 'Extremadura: Tomo 2', 10),
(473, 'Cultura pastoril en la baja Extremadura', 5),
(474, 'Extremadura, el último paraíso', 10),
(475, 'Grandes músicos (sus vidas y sus enfermedades)', 10),
(476, 'Maestros de la música I (Planeta DeAgostini)', 10),
(477, 'Maestros de la música II (Planeta DeAgostini)', 10),
(478, 'Neoclasicismo y romanticismo (arquitectura, pintura, escultura y dibujo)', 25),
(479, 'Museo delVaticano', 20),
(480, 'National gallery. Londres', 20),
(481, 'Medicina en la pintura I', 15),
(482, 'Medicina en la pintura II', 15),
(483, 'La obra completa de Leonardo', 10),
(484, 'La obra completa de Picasso', 10),
(485, 'Goya. Los caprichos', 15),
(486, 'Hermoso', 20),
(487, 'Juan Roldán', 10),
(488, 'Museo Británico', 5),
(489, 'El Hermitage', 5),
(490, 'Arte en la piel (fascículos 1, 2 y 3)', 5),
(491, 'Velázquez', 10),
(492, 'El arte egipcio en Berlín', 5),
(493, 'El maestro del Prado (Javier Sierra)', 5),
(494, 'Pequeñas guías de pintores (\'Zurbarán\', \'Goya\', \'Romero de Torres\', \'Picasso\')/cada una', 1),
(495, 'Arte románico', 2),
(496, 'Atlas del mundo (El País)', 15),
(497, 'Geografía universal (Salvat)', 15),
(498, 'Parques naturales de España (Salvat)', 15),
(499, 'Castillos y palacios de España (Salvat)', 15),
(500, 'Atlas enciclopédico (El Mundo)', 15),
(501, 'La ventana siniestra (Raymond Chandler)', 2),
(502, 'El largo adios (Raymond Chandler)', 2),
(503, 'La dama del lago (Raymond Chandler)', 2),
(504, 'Peces de colores (Raymond Chandler)', 2),
(505, 'El gran sueño de oro (Chester Himes)', 2),
(506, 'Empieza el calor (Chester Himes)', 2),
(507, 'Por amor a Imabelle (Chester Himes)', 2),
(508, 'El escalofrío (Ross Macdonald)', 2),
(509, 'La bella durmiente (Ross Macdonald)', 2),
(510, 'Aguas profundas (Patricia Highsmith)', 2),
(511, 'Arma mortal (Walde Miller)', 2),
(512, 'El ángel triste (Carlos Pérez Merinero)', 2),
(513, 'Por amor al arte (Andreu Martín)', 2),
(514, 'Tarde, sesión continua (Jaume Fuster)', 2),
(515, 'Historia de Ada (Carlo Cassola)', 2),
(516, '\'El Libro\' y \'La inmortalidad\' (Jorge Luis Borges)', 2),
(517, 'Tres novelas ejemplares (Manuel Vázquez Montalbán)', 2),
(518, 'La aventura equinoccial de Lope de Aguirre (Ramón J. Sender)', 2),
(519, 'La muerte de Artemio Cruz (Carlos Fuentes)', 2),
(520, 'Elejías andaluzas (Juan Ramón Jiménez)', 2),
(521, 'Abel Sánchez (Miguel de Unamuno)', 2),
(522, 'Cuentos morales (Leopoldo Alas Clarín)', 2),
(523, 'Su único hijo (Leopoldo Alas Clarín)', 2),
(524, 'Lo que canté y dije de Picasso (Rafael Alberti)', 2),
(525, 'Barrabás y otros cuentos (Arturo Uslar Pietri)', 2),
(526, 'Las lanzas coloradas (Arturo Uslar Pietri)', 2),
(527, 'Oppiano Licario (José Lezama Lima)', 2),
(528, 'Paradiso (José Lezama Lima)', 2),
(529, 'El gran momento de Mary Tribune (Juan García Hortelano)', 2),
(530, 'Hombres de a caballo (David Viñas)', 2),
(531, 'El Astillero (J. C. Onetti)', 2),
(532, 'La orgía perpetua (Mario Vargas Llosa)', 2),
(533, 'Cien años de soledad (Gabriel García Márquez)', 2),
(534, 'El otoño del patriarca (Gabriel García Márquez)', 2),
(535, 'Los funerales de la mama grande (Gabriel García Márquez)', 2),
(536, 'Ojos de perro azul (Gabriel García Márquez)', 2),
(537, 'El coronel no tiene quien le escriba (Gabriel García Márquez)', 2),
(538, 'La mala hora (Gabriel García Márquez)', 2),
(539, 'Obra periodística de Europa y América (1955-1960)', 2),
(540, 'La verdad sobre el caso Savolta (Eduardo Mendoza Garriga)', 2),
(541, 'Luces de bohemia (Ramón María del Valle-Inclán)', 2),
(542, 'Sonata de primavera (Ramón María del Valle-Inclán)', 2),
(543, 'Réquiem por un campesino español (Ramón J. Sender)', 2),
(544, 'La muerte de una dama (Llorenç Villalonga)', 2),
(545, 'Bearn o la sala de las muñecas (Llorenç Villalonga)', 2),
(546, 'Isla de la simpatía (Juan Ramón Jiménez)', 2),
(547, 'Cartas literarias (Juan Ramón Jiménez)', 2),
(548, 'Poesía-prosa (Vicente Aleixandre)', 2),
(549, 'Don Segundo Sombra (Ricardo Güiraldes)', 2),
(550, 'Viaje por la Europa roja (Fernando Díaz Plaja)', 2),
(551, 'Mi credo (Hermann Hesse)', 2),
(552, 'El caminante (Hermann Hesse)', 2),
(553, 'En el balneario (Hermann Hesse)', 2),
(554, 'El topo (John le Carré)', 2),
(555, 'Manhattan Transfer (John Dos Passos)', 2),
(556, 'Las alas de la paloma (Henry James)', 2),
(557, 'Otra vuelta de tuerca (Henry James)', 2),
(558, 'Los pasos perdidos (Alejo Carpentier)', 2),
(559, 'Ecue-Yamba-O (Alejo Carpentier)', 2),
(560, 'El siglo de las luces (Alejo Carpentier)', 2),
(561, 'El americano impasible (Graham Green)', 2),
(562, 'Manon Lescaut (Abate Prévost)', 2),
(563, 'Diarios de las estrellas (Stanislaw Lem)', 2),
(564, 'Ultramarina (Malcolm Lowry)', 2),
(565, 'La edad de la inocencia (Edith Wharton)', 2),
(566, 'Relatos (G. Tomasi Di Lampedusa)', 2),
(567, 'La nave de los locos (K. Anne Potter)', 2),
(568, 'Las máscaras (Jorge Edwards)', 2),
(569, 'Cuando ella era buena (Philip Roth)', 2),
(570, 'El lamento de Portnoy (Phillip Roth)', 2),
(571, 'El tambor de hojalata (Günter Grass)', 2),
(572, 'El contexto (Leonardo Sciascia)', 2),
(573, 'Los tíos de Sicilia (Leonardo Sciascia)', 2),
(574, 'En tierra de infieles (Leonardo Sciascia)', 2),
(575, 'Las Parroquias de Regalpetra (Leonardo Sciascia)', 2),
(576, 'Lord Jim (Joseph Conrad)', 2),
(577, 'El mundo antiguo (John A.Garraty y Peter Gay)', 2),
(578, 'El mundo medieval (John A.Garraty y Peter Gay)', 2),
(579, 'La reliquia (Eça de Queiroz)', 2),
(580, 'El misterio de la carretera de Sintra (Eça de Queiroz)', 2),
(581, 'Los náufragos del Jonathan (Julio Verne y Michel Verne)', 2),
(582, 'Cuentos de la infancia y del hogar (Hermanos Grimm)', 2),
(583, 'Fuertes como la muerte (Guy de Maupassant)', 2),
(584, 'Pigmalión (musical de George Bernard Shaw)', 2),
(585, 'Anäis Nin (diario II; 1934-1939)', 2),
(586, 'Anäis Nin (diario III; 1939-1944)', 2),
(587, 'Vathek (William Beckford)', 2),
(588, 'Santuario (William Faulkner)', 2),
(589, 'La amenaza de Andrómeda (Michael Chrichton)', 2),
(590, 'El que susurra en la oscuridad (H. P. Lovecraft)', 2),
(591, 'Drácula (Bram Stoker)', 2),
(592, 'El proceso (Frank Kafka)', 2),
(593, 'Yonqui (William Burroughs)', 2),
(594, 'Peces sin escondite (J. Hadley Chase)', 2),
(595, 'Vanina Vanini y otros relatos (Stendhal)', 2),
(596, 'Reloj sin manecillas (Carson McCullers)', 2),
(597, '\'La playa\' y \'Fiesta de agosto\' (C. Pavese)', 2),
(598, 'Papá Goriot (H. de Balzac)', 2),
(599, 'Ilusiones perdidas (H. de Balzac)', 2),
(600, 'Infancia, adolescencia, juventud (León Tolstói)', 2),
(601, 'Sexus (Henry Miller)', 2),
(602, 'El Crack-Up (F. Scott Fitzgerald)', 2),
(603, 'Historia de la columna infame (Alessandro Manzoni)', 2),
(604, 'Madame Bovary (Gustave Flanbert)', 2),
(605, 'El súbdito (Heinrich Mann)', 2),
(606, 'Candidato o un sueño siciliano (Leonardo Sciascia)', 2),
(607, 'Teatro contemporáneo (August Strindberg)', 2),
(608, 'Eugenia Grandet (Honoré de Balzac)', 2),
(609, 'Robinson Crusoe (Daniel Defoe)', 2),
(610, 'Historias de piratas (Daniel Defoe)', 2),
(611, 'Diario del año de la peste (Daniel Defoe)', 2),
(612, 'Acuéstate sobre lirios (James Hadley Chase)', 2),
(613, 'Un loto para Miss Quoni (James Hadley Chase)', 2),
(614, 'Una radiante mañana estival (James Hadley Chase)', 2),
(615, 'Los demonios (Fiódor Dostoyevski)', 2),
(616, '\'Cuentos de Odessa\' y \'Relatos\' (Isaak E. Babel)', 2),
(617, 'La princesa de Clèves (Madame de La Fayette)', 2),
(618, '\'El diablo en las colinas\' y \'Entre mujeres solas\' (Cesare Pavese)', 2),
(619, 'El sonido y la furia (William Faulkner)', 2),
(620, 'Oscuro como la tumba donde yace mi amigo (Malcolm Lowry)', 2),
(621, 'Una guerra de Sahibs (Rudyard Kipling)', 2),
(622, 'Moby Dick (Herman Melville)', 2),
(623, 'Melmoth el errabundo (Charles Maturin)', 2),
(624, 'Aventuras de un cadáver (Robert Louis Stevenson)', 2),
(625, 'Fausto (Johann Wolfgang von Goethe)', 2),
(626, 'El Mueble. Especial cuartos de baño', 1),
(627, 'El Mueble. Vestidores y armarios', 1),
(628, 'El Mueble. Sofá y parqué', 1),
(629, 'El Mueble. Cocina y cortinas de salón', 1),
(630, 'El Mueble. Iluminación y telas de dormitorio', 1),
(631, 'El Mueble. Especial pocos metros', 1),
(632, 'El Mueble. Especial 40 aniversario', 1),
(633, 'El Mueble. Salones y guías de pintura', 1),
(634, 'Chalét Decó. Especial offices', 1),
(635, 'Chalét Decó. Jardines y armarios', 1),
(636, 'Chalét Decó. 8 casas bien decoradas', 1),
(637, 'Chalét Decó. 12 vestidores con muchas ideas', 1),
(638, 'Chalét Decó. 9 cuartos de baño', 1),
(639, 'Chalét Decó. 6 salones', 1),
(640, 'Chalét Decó. 6 buhardillas con mucho estilo', 1),
(641, 'Chalét Decó. 9 buhardillas bien aprovechadas', 1),
(642, 'Casa y jardín. Cuartos de baño, pavimentos', 1),
(643, 'Elle Decoración. Librerías y telas', 1),
(644, 'Mi Casa. Lámparas y apliques', 1),
(645, 'Casas de Siempre. Recibidor, comprar antiguedades', 1),
(646, 'Nuevo Estilo. Comedor, iluminación del baño', 1),
(647, 'Habitania. Mesa centro, muebles cocina', 1),
(648, 'Modelo Generation, color negro', 100),
(649, 'Modelo Meistertuck, color negro', 150),
(650, 'Modelo Generation, color azul', 100),
(651, 'Fino, color negro', 80),
(652, 'Modelo Noblesse Obligue, color azul', 150),
(653, 'Color oro viejo', 100),
(654, 'Color dorado', 30),
(655, 'Un portaminas y un bolígrafo de acero', 60),
(656, 'Modelo Pure Class, color gris tierra', 50),
(657, 'Waterman Paris. Modelo Hemisphere acero', 50),
(658, 'Mechero Dupont de oro', 250);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `id` int(11) NOT NULL,
  `nombre_seccion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id`, `nombre_seccion`) VALUES
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
  `id` int(11) NOT NULL,
  `id_seccion` int(11) NOT NULL,
  `nombre_subseccion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `subseccion`
--

INSERT INTO `subseccion` (`id`, `id_seccion`, `nombre_subseccion`) VALUES
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
  `id` int(11) NOT NULL,
  `correo` text COLLATE utf8_unicode_ci NOT NULL,
  `contrasenia` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `correo`, `contrasenia`) VALUES
(1, '75ee668e25f1ce8df7093525f22675ef', 'baabef592da4b8dd5ca4fae6cd85a79c'),
(2, 'cb63d025bc50084de70939b5ee223a4d', '912ec803b2ce49e4a541068d495ab570'),
(3, '842b3d5ac084f80fb4d2106b63563f22', 'a57e8915461b83adefb011530b711704'),
(4, '02c78a5940ec27adb5fe7485e8eefcd2', '7403319a4b5cb98e3c64a2e743b7e056'),
(5, '86a2954b1f491b117f484791f194ede7', '7403319a4b5cb98e3c64a2e743b7e056'),
(22, 'nenanu2015@gmail.com', '2901');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id_usuario`);

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
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subseccion`
--
ALTER TABLE `subseccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id_seccion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `subseccion`
--
ALTER TABLE `subseccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
