-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2014 at 11:25 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.18-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sampath_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=241 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`) VALUES
(1, 'Australia'),
(2, 'New Zealand'),
(3, 'UK'),
(4, 'USA'),
(5, 'Canada'),
(7, 'Ireland'),
(13, 'Afghanistan'),
(14, 'Albania'),
(15, 'Algeria'),
(16, 'American Samoa'),
(17, 'Andorra'),
(18, 'Angola'),
(19, 'Anguilla'),
(20, 'Antigua and Barbuda'),
(21, 'Argentina'),
(22, 'Armenia'),
(23, 'Aruba'),
(25, 'Azerbaijan'),
(26, 'Bahamas'),
(27, 'Bahrain'),
(28, 'Bangladesh'),
(29, 'Barbados'),
(30, 'Belarus'),
(31, 'Belgium'),
(32, 'Belize'),
(33, 'Benin'),
(34, 'Bermuda'),
(35, 'Bhutan'),
(36, 'Bolivia'),
(37, 'Bosnia-Herzegovina'),
(38, 'Botswana'),
(39, 'Bouvet Island'),
(40, 'Brazil'),
(41, 'Brunei'),
(42, 'Bulgaria'),
(43, 'Burkina Faso'),
(44, 'Burundi'),
(45, 'Cambodia'),
(46, 'Cameroon'),
(47, 'Cape Verde'),
(48, 'Cayman Islands'),
(49, 'Central African Republic'),
(50, 'Chad'),
(51, 'Chile'),
(52, 'China'),
(53, 'Christmas Island'),
(54, 'Cocos (Keeling) Islands'),
(55, 'Colombia'),
(56, 'Comoros'),
(57, 'Congo, Democratic Republic of the (Zaire)'),
(58, 'Congo, Republic of'),
(59, 'Cook Islands'),
(60, 'Costa Rica'),
(61, 'Croatia'),
(62, 'Cuba'),
(63, 'Cyprus'),
(64, 'Czech Republic'),
(65, 'Denmark'),
(66, 'Djibouti'),
(67, 'Dominica'),
(68, 'Dominican Republic'),
(69, 'Ecuador'),
(70, 'Egypt'),
(71, 'El Salvador'),
(72, 'Equatorial Guinea'),
(73, 'Eritrea'),
(74, 'Estonia'),
(75, 'Ethiopia'),
(76, 'Falkland Islands'),
(77, 'Faroe Islands'),
(78, 'Fiji'),
(79, 'Finland'),
(80, 'France'),
(81, 'French Guiana'),
(82, 'Gabon'),
(83, 'Gambia'),
(84, 'Georgia'),
(85, 'Germany'),
(86, 'Ghana'),
(87, 'Gibraltar'),
(88, 'Greece'),
(89, 'Greenland'),
(90, 'Grenada'),
(91, 'Guadeloupe (French)'),
(92, 'Guam (USA)'),
(93, 'Guatemala'),
(94, 'Guinea'),
(95, 'Guinea Bissau'),
(96, 'Guyana'),
(97, 'Haiti'),
(98, 'Holy See'),
(99, 'Honduras'),
(100, 'Hong Kong'),
(101, 'Hungary'),
(102, 'Iceland'),
(103, 'India'),
(104, 'Indonesia'),
(105, 'Iran'),
(106, 'Iraq'),
(107, 'Israel'),
(108, 'Italy'),
(109, 'Ivory Coast (Cote D`Ivoire)'),
(110, 'Jamaica'),
(111, 'Japan'),
(112, 'Jordan'),
(113, 'Kazakhstan'),
(114, 'Kenya'),
(115, 'Kiribati'),
(116, 'Kuwait'),
(117, 'Kyrgyzstan'),
(118, 'Laos'),
(119, 'Latvia'),
(120, 'Lebanon'),
(121, 'Lesotho'),
(122, 'Liberia'),
(123, 'Libya'),
(124, 'Liechtenstein'),
(125, 'Lithuania'),
(126, 'Luxembourg'),
(127, 'Macau'),
(128, 'Macedonia'),
(129, 'Madagascar'),
(130, 'Malawi'),
(131, 'Malaysia'),
(132, 'Maldives'),
(133, 'Mali'),
(134, 'Malta'),
(135, 'Marshall Islands'),
(136, 'Martinique (French)'),
(137, 'Mauritania'),
(138, 'Mauritius'),
(139, 'Mayotte'),
(140, 'Mexico'),
(141, 'Micronesia'),
(142, 'Moldova'),
(143, 'Monaco'),
(144, 'Mongolia'),
(145, 'Montenegro'),
(146, 'Montserrat'),
(147, 'Morocco'),
(148, 'Mozambique'),
(149, 'Myanmar'),
(150, 'Namibia'),
(151, 'Nauru'),
(152, 'Nepal'),
(153, 'Netherlands'),
(154, 'Netherlands Antilles'),
(155, 'New Caledonia (French)'),
(156, 'Nicaragua'),
(157, 'Niger'),
(158, 'Nigeria'),
(159, 'Niue'),
(160, 'Norfolk Island'),
(161, 'North Korea'),
(162, 'Northern Mariana Islands'),
(163, 'Norway'),
(164, 'Oman'),
(165, 'Pakistan'),
(166, 'Palau'),
(167, 'Panama'),
(168, 'Papua New Guinea'),
(169, 'Paraguay'),
(170, 'Peru'),
(171, 'Philippines'),
(172, 'Pitcairn Island'),
(173, 'Poland'),
(174, 'Polynesia (French)'),
(175, 'Portugal'),
(176, 'Puerto Rico'),
(177, 'Qatar'),
(178, 'Reunion'),
(179, 'Romania'),
(180, 'Russia'),
(181, 'Rwanda'),
(182, 'Saint Helena'),
(183, 'Saint Kitts and Nevis'),
(184, 'Saint Lucia'),
(185, 'Saint Pierre and Miquelon'),
(186, 'Saint Vincent and Grenadines'),
(187, 'Samoa'),
(188, 'San Marino'),
(189, 'Sao Tome and Principe'),
(190, 'Saudi Arabia'),
(191, 'Senegal'),
(192, 'Serbia'),
(193, 'Seychelles'),
(194, 'Sierra Leone'),
(195, 'Singapore'),
(196, 'Slovakia'),
(197, 'Slovenia'),
(198, 'Solomon Islands'),
(199, 'Somalia'),
(200, 'South Africa'),
(201, 'South Georgia and South Sandwich Islands'),
(202, 'South Korea'),
(203, 'Spain'),
(204, 'Sri Lanka'),
(205, 'Sudan'),
(206, 'Suriname'),
(207, 'Svalbard and Jan Mayen Islands'),
(208, 'Swaziland'),
(209, 'Sweden'),
(210, 'Switzerland'),
(211, 'Syria'),
(212, 'Taiwan'),
(213, 'Tajikistan'),
(214, 'Tanzania'),
(215, 'Thailand'),
(216, 'Timor-Leste (East Timor)'),
(217, 'Togo'),
(218, 'Tokelau'),
(219, 'Tonga'),
(220, 'Trinidad and Tobago'),
(221, 'Tunisia'),
(222, 'Turkey'),
(223, 'Turkmenistan'),
(224, 'Turks and Caicos Islands'),
(225, 'Tuvalu'),
(226, 'Uganda'),
(227, 'Ukraine'),
(228, 'United Arab Emirates'),
(229, 'Uruguay'),
(230, 'Uzbekistan'),
(231, 'Vanuatu'),
(232, 'Venezuela'),
(233, 'Vietnam'),
(234, 'Virgin Islands'),
(235, 'Wallis and Futuna Islands'),
(236, 'Yemen'),
(237, 'Zambia'),
(238, 'Zimbabwe'),
(239, 'Austria'),
(240, 'Palestinian Territory');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE IF NOT EXISTS `tokens` (
  `token` varchar(50) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1=Activate, 2=Reste Pswd',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=live, 0=expired',
  `created_at` int(10) unsigned NOT NULL,
  `updated_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`token`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`token`, `user_id`, `type`, `status`, `created_at`, `updated_at`) VALUES
('38b8ecbeeca23fa87b7591a7205ae81e', 1, 1, 0, 1416419461, 1416419643);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=draft, 1=active, 2=dissabled',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `password` char(60) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country_id` int(3) unsigned NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `remember_token` char(100) DEFAULT NULL,
  `created_at` int(10) unsigned NOT NULL,
  `updated_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `remember_token` (`remember_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `status`, `is_admin`, `password`, `first_name`, `last_name`, `email`, `phone_number`, `address`, `city`, `country_id`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SAM', 1, 1, '$2y$10$T0789h4jT8neuuJBYXrnZ.1in3GQaELArhRF8KSUT5rAvRRfiqURe', 'Sampath', 'Perera', 'sampathperera@hotmail.com', '+94777836296', 'LC MAwatha', 'Panadura', 204, 'profile_546cd882ed7204.40876458jpg', 'kbjRxRylHIIrcv54qGrqikcWMrMkuaHBmXnzHj3cgsPHsevIJxcWDwsimttH', 1416419461, 1416419670);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT `tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
