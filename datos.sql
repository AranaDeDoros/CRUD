--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE IF NOT EXISTS `datos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genero` char(1) CHARACTER SET latin1 NOT NULL,
  `opinion` char(1) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=266 ;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `genero`, `opinion`) VALUES
(1, 'H', '3'),
(2, 'M', '3'),
(3, 'H', '1'),
(4, 'H', '3'),
(5, 'H', '3'),
(6, 'M', '3'),
(7, 'M', '1'),
(8, 'H', '3'),
(9, 'H', '4'),
(10, 'M', '3'),
(11, 'H', '3'),
(12, 'H', '3'),
(13, 'H', '3'),
(14, 'H', '3'),
(15, 'H', '3'),
(16, 'M', '3'),
(17, 'M', '3'),
(18, 'H', '3'),
(19, 'H', '3'),
(20, 'M', '3'),
(21, 'M', '3'),
(22, 'H', '1'),
(23, 'H', '1'),
(24, 'H', '3'),
(25, 'M', '1'),
(26, 'H', '1'),
(27, 'H', '1'),
(28, 'H', '3'),
(29, 'H', '1'),
(30, 'H', '1'),
(31, 'H', '1'),
(32, 'H', '1'),
(33, 'H', '1'),
(34, 'M', '1'),
(35, 'H', '1'),
(36, 'H', '1'),
(37, 'H', '3'),
(38, 'H', '3'),
(39, 'H', '3'),
(40, 'H', '3'),
(41, 'H', '3'),
(42, 'M', '3'),
(43, 'M', '3'),
(44, 'H', '3'),
(45, 'H', '3'),
(46, 'M', '3'),
(47, 'H', '3'),
(48, 'H', '3'),
(49, 'H', '3'),
(50, 'H', '3'),
(51, 'H', '3'),
(52, 'H', '3'),
(53, 'H', '3'),
(54, 'H', '3'),
(55, 'M', '3'),
(56, 'M', '3'),
(57, 'M', '3'),
(58, 'H', '3'),
(59, 'M', '3'),
(60, 'H', '3'),
(61, 'M', '3'),
(62, 'H', '3'),
(63, 'H', '3'),
(64, 'M', '2'),
(65, 'H', '3'),
(66, 'M', '3'),
(67, 'H', '3'),
(68, 'M', '3'),
(69, 'H', '3'),
(70, 'H', '3'),
(71, 'M', '3'),
(72, 'M', '3'),
(73, 'M', '3'),
(74, 'H', '3'),
(75, 'H', '3'),
(76, 'M', '3'),
(77, 'M', '3'),
(78, 'H', '3'),
(79, 'H', '3'),
(80, 'H', '3'),
(81, 'H', '3'),
(82, 'H', '3'),
(83, 'M', '3'),
(84, 'H', '3'),
(85, 'H', '3'),
(86, 'H', '3'),
(87, 'M', '3'),
(88, 'M', '3'),
(89, 'H', '3'),
(90, 'H', '3'),
(91, 'H', '3'),
(92, 'H', '3'),
(93, 'H', '3'),
(94, 'H', '3'),
(95, 'H', '3'),
(96, 'H', '3'),
(97, 'H', '3'),
(98, 'H', '3'),
(99, 'H', '3'),
(100, 'M', '3'),
(101, 'H', '3'),
(102, 'H', '3'),
(103, 'H', '3'),
(104, 'M', '3'),
(105, 'H', '3'),
(106, 'H', '3'),
(107, 'H', '3'),
(108, 'H', '3'),
(109, 'H', '3'),
(110, 'H', '3'),
(111, 'H', '3'),
(112, 'H', '2'),
(113, 'H', '3'),
(114, 'H', '3'),
(115, 'H', '3'),
(116, 'H', '3'),
(117, 'H', '3'),
(118, 'H', '3'),
(119, 'H', '3'),
(120, 'M', '3'),
(121, 'M', '1'),
(122, 'H', '3'),
(123, 'H', '3'),
(124, 'H', '3'),
(125, 'H', '3'),
(126, 'M', '3'),
(127, 'H', '3'),
(128, 'H', '3'),
(129, 'H', '3'),
(130, 'H', '3'),
(131, 'H', '3'),
(132, 'M', '3'),
(133, 'H', '3'),
(134, 'H', '3'),
(135, 'H', '3'),
(136, 'M', '3'),
(137, 'M', '3'),
(138, 'M', '1'),
(139, 'M', '3'),
(140, 'H', '3'),
(141, 'M', '3'),
(142, 'H', '3'),
(143, 'H', '3'),
(144, 'M', '3'),
(145, 'M', '3'),
(146, 'H', '3'),
(147, 'M', '3'),
(148, 'M', '3'),
(149, 'M', '3'),
(150, 'H', '3'),
(151, 'M', '3'),
(152, 'M', '3'),
(153, 'M', '3'),
(154, 'M', '3'),
(155, 'M', '3'),
(156, 'H', '3'),
(157, 'H', '3'),
(158, 'M', '3'),
(159, 'H', '3'),
(160, 'M', '3'),
(161, 'H', '3'),
(162, 'H', '3'),
(163, 'H', '3'),
(164, 'M', '3'),
(165, 'H', '3'),
(166, 'M', '3'),
(167, 'H', '3'),
(168, 'M', '3'),
(169, 'H', '3'),
(170, 'M', '3'),
(171, 'H', '3'),
(172, 'H', '3'),
(173, 'M', '3'),
(174, 'M', '3'),
(175, 'H', '3'),
(176, 'M', '3'),
(177, 'M', '3'),
(178, 'H', '3'),
(179, 'H', '3'),
(180, 'H', '3'),
(181, 'H', '3'),
(182, 'H', '3'),
(183, 'M', '3'),
(184, 'H', '3'),
(185, 'H', '3'),
(186, 'H', '3'),
(187, 'H', '3'),
(188, 'H', '3'),
(189, 'H', '3'),
(190, 'M', '3'),
(191, 'M', '3'),
(192, 'H', '3'),
(193, 'M', '3'),
(194, 'H', '3'),
(195, 'H', '3'),
(196, 'M', '3'),
(197, 'H', '3'),
(198, 'M', '3'),
(199, 'M', '3'),
(200, 'M', '3'),
(201, 'H', '3'),
(202, 'H', '3'),
(203, 'H', '3'),
(204, 'H', '3'),
(205, 'M', '3'),
(206, 'H', '3'),
(207, 'M', '3'),
(208, 'H', '3'),
(209, 'H', '3'),
(210, 'M', '3'),
(211, 'H', '3'),
(212, 'H', '3'),
(213, 'H', '3'),
(214, 'H', '3'),
(215, 'M', '3'),
(216, 'H', '3'),
(217, 'M', '3'),
(218, 'M', '3'),
(219, 'M', '3'),
(220, 'M', '3'),
(221, 'H', '3'),
(222, 'H', '3'),
(223, 'M', '3'),
(224, 'M', '3'),
(225, 'M', '3'),
(226, 'M', '3'),
(227, 'M', '3'),
(228, 'M', '3'),
(229, 'H', '3'),
(230, 'M', '3'),
(231, 'H', '3'),
(232, 'M', '3'),
(233, 'M', '3'),
(234, 'H', '3'),
(235, 'M', '3'),
(236, 'M', '3'),
(237, 'H', '3'),
(238, 'M', '3'),
(239, 'M', '3'),
(240, 'M', '3'),
(241, 'M', '3'),
(242, 'M', '3'),
(243, 'H', '1'),
(244, 'H', '3'),
(245, 'M', '3'),
(246, 'H', '3'),
(247, 'M', '3'),
(248, 'M', '3'),
(249, 'H', '3'),
(250, 'H', '3'),
(251, 'M', '3'),
(252, 'M', '3'),
(253, 'H', '3'),
(254, 'H', '3'),
(255, 'H', '3'),
(256, 'H', '3'),
(257, 'M', '3'),
(258, 'M', '3'),
(259, 'H', '3'),
(260, 'H', '3'),
(261, 'M', '3'),
(262, 'M', '3'),
(263, 'M', '3'),
(264, 'M', '3'),
(265, 'M', '3');
