-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 10:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `phone` int(5) NOT NULL,
  `code` char(2) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `phone`, `code`, `name`) VALUES
(1, 93, 'AF', 'Afghanistan'),
(2, 358, 'AX', 'Aland Islands'),
(3, 355, 'AL', 'Albania'),
(4, 213, 'DZ', 'Algeria'),
(5, 1684, 'AS', 'American Samoa'),
(6, 376, 'AD', 'Andorra'),
(7, 244, 'AO', 'Angola'),
(8, 1264, 'AI', 'Anguilla'),
(9, 672, 'AQ', 'Antarctica'),
(10, 1268, 'AG', 'Antigua and Barbuda'),
(11, 54, 'AR', 'Argentina'),
(12, 374, 'AM', 'Armenia'),
(13, 297, 'AW', 'Aruba'),
(14, 61, 'AU', 'Australia'),
(15, 43, 'AT', 'Austria'),
(16, 994, 'AZ', 'Azerbaijan'),
(17, 1242, 'BS', 'Bahamas'),
(18, 973, 'BH', 'Bahrain'),
(19, 880, 'BD', 'Bangladesh'),
(20, 1246, 'BB', 'Barbados'),
(21, 375, 'BY', 'Belarus'),
(22, 32, 'BE', 'Belgium'),
(23, 501, 'BZ', 'Belize'),
(24, 229, 'BJ', 'Benin'),
(25, 1441, 'BM', 'Bermuda'),
(26, 975, 'BT', 'Bhutan'),
(27, 591, 'BO', 'Bolivia'),
(28, 599, 'BQ', 'Bonaire, Sint Eustatius and Saba'),
(29, 387, 'BA', 'Bosnia and Herzegovina'),
(30, 267, 'BW', 'Botswana'),
(31, 55, 'BV', 'Bouvet Island'),
(32, 55, 'BR', 'Brazil'),
(33, 246, 'IO', 'British Indian Ocean Territory'),
(34, 673, 'BN', 'Brunei Darussalam'),
(35, 359, 'BG', 'Bulgaria'),
(36, 226, 'BF', 'Burkina Faso'),
(37, 257, 'BI', 'Burundi'),
(38, 855, 'KH', 'Cambodia'),
(39, 237, 'CM', 'Cameroon'),
(40, 1, 'CA', 'Canada'),
(41, 238, 'CV', 'Cape Verde'),
(42, 1345, 'KY', 'Cayman Islands'),
(43, 236, 'CF', 'Central African Republic'),
(44, 235, 'TD', 'Chad'),
(45, 56, 'CL', 'Chile'),
(46, 86, 'CN', 'China'),
(47, 61, 'CX', 'Christmas Island'),
(48, 672, 'CC', 'Cocos (Keeling) Islands'),
(49, 57, 'CO', 'Colombia'),
(50, 269, 'KM', 'Comoros'),
(51, 242, 'CG', 'Congo'),
(52, 242, 'CD', 'Congo, Democratic Republic of the Congo'),
(53, 682, 'CK', 'Cook Islands'),
(54, 506, 'CR', 'Costa Rica'),
(55, 225, 'CI', 'Cote D\'Ivoire'),
(56, 385, 'HR', 'Croatia'),
(57, 53, 'CU', 'Cuba'),
(58, 599, 'CW', 'Curacao'),
(59, 357, 'CY', 'Cyprus'),
(60, 420, 'CZ', 'Czech Republic'),
(61, 45, 'DK', 'Denmark'),
(62, 253, 'DJ', 'Djibouti'),
(63, 1767, 'DM', 'Dominica'),
(64, 1809, 'DO', 'Dominican Republic'),
(65, 593, 'EC', 'Ecuador'),
(66, 20, 'EG', 'Egypt'),
(67, 503, 'SV', 'El Salvador'),
(68, 240, 'GQ', 'Equatorial Guinea'),
(69, 291, 'ER', 'Eritrea'),
(70, 372, 'EE', 'Estonia'),
(71, 251, 'ET', 'Ethiopia'),
(72, 500, 'FK', 'Falkland Islands (Malvinas)'),
(73, 298, 'FO', 'Faroe Islands'),
(74, 679, 'FJ', 'Fiji'),
(75, 358, 'FI', 'Finland'),
(76, 33, 'FR', 'France'),
(77, 594, 'GF', 'French Guiana'),
(78, 689, 'PF', 'French Polynesia'),
(79, 262, 'TF', 'French Southern Territories'),
(80, 241, 'GA', 'Gabon'),
(81, 220, 'GM', 'Gambia'),
(82, 995, 'GE', 'Georgia'),
(83, 49, 'DE', 'Germany'),
(84, 233, 'GH', 'Ghana'),
(85, 350, 'GI', 'Gibraltar'),
(86, 30, 'GR', 'Greece'),
(87, 299, 'GL', 'Greenland'),
(88, 1473, 'GD', 'Grenada'),
(89, 590, 'GP', 'Guadeloupe'),
(90, 1671, 'GU', 'Guam'),
(91, 502, 'GT', 'Guatemala'),
(92, 44, 'GG', 'Guernsey'),
(93, 224, 'GN', 'Guinea'),
(94, 245, 'GW', 'Guinea-Bissau'),
(95, 592, 'GY', 'Guyana'),
(96, 509, 'HT', 'Haiti'),
(97, 0, 'HM', 'Heard Island and Mcdonald Islands'),
(98, 39, 'VA', 'Holy See (Vatican City State)'),
(99, 504, 'HN', 'Honduras'),
(100, 852, 'HK', 'Hong Kong'),
(101, 36, 'HU', 'Hungary'),
(102, 354, 'IS', 'Iceland'),
(103, 91, 'IN', 'India'),
(104, 62, 'ID', 'Indonesia'),
(105, 98, 'IR', 'Iran, Islamic Republic of'),
(106, 964, 'IQ', 'Iraq'),
(107, 353, 'IE', 'Ireland'),
(108, 44, 'IM', 'Isle of Man'),
(109, 39, 'IT', 'Italy'),
(110, 1876, 'JM', 'Jamaica'),
(111, 81, 'JP', 'Japan'),
(112, 44, 'JE', 'Jersey'),
(113, 962, 'JO', 'Jordan'),
(114, 7, 'KZ', 'Kazakhstan'),
(115, 254, 'KE', 'Kenya'),
(116, 686, 'KI', 'Kiribati'),
(117, 850, 'KP', 'Korea, Democratic People\'s Republic of'),
(118, 82, 'KR', 'Korea, Republic of'),
(119, 381, 'XK', 'Kosovo'),
(120, 965, 'KW', 'Kuwait'),
(121, 996, 'KG', 'Kyrgyzstan'),
(122, 856, 'LA', 'Lao People\'s Democratic Republic'),
(123, 371, 'LV', 'Latvia'),
(124, 961, 'LB', 'Lebanon'),
(125, 266, 'LS', 'Lesotho'),
(126, 231, 'LR', 'Liberia'),
(127, 218, 'LY', 'Libyan Arab Jamahiriya'),
(128, 423, 'LI', 'Liechtenstein'),
(129, 370, 'LT', 'Lithuania'),
(130, 352, 'LU', 'Luxembourg'),
(131, 853, 'MO', 'Macao'),
(132, 389, 'MK', 'Macedonia, the Former Yugoslav Republic of'),
(133, 261, 'MG', 'Madagascar'),
(134, 265, 'MW', 'Malawi'),
(135, 60, 'MY', 'Malaysia'),
(136, 960, 'MV', 'Maldives'),
(137, 223, 'ML', 'Mali'),
(138, 356, 'MT', 'Malta'),
(139, 692, 'MH', 'Marshall Islands'),
(140, 596, 'MQ', 'Martinique'),
(141, 222, 'MR', 'Mauritania'),
(142, 230, 'MU', 'Mauritius'),
(143, 262, 'YT', 'Mayotte'),
(144, 52, 'MX', 'Mexico'),
(145, 691, 'FM', 'Micronesia, Federated States of'),
(146, 373, 'MD', 'Moldova, Republic of'),
(147, 377, 'MC', 'Monaco'),
(148, 976, 'MN', 'Mongolia'),
(149, 382, 'ME', 'Montenegro'),
(150, 1664, 'MS', 'Montserrat'),
(151, 212, 'MA', 'Morocco'),
(152, 258, 'MZ', 'Mozambique'),
(153, 95, 'MM', 'Myanmar'),
(154, 264, 'NA', 'Namibia'),
(155, 674, 'NR', 'Nauru'),
(156, 977, 'NP', 'Nepal'),
(157, 31, 'NL', 'Netherlands'),
(158, 599, 'AN', 'Netherlands Antilles'),
(159, 687, 'NC', 'New Caledonia'),
(160, 64, 'NZ', 'New Zealand'),
(161, 505, 'NI', 'Nicaragua'),
(162, 227, 'NE', 'Niger'),
(163, 234, 'NG', 'Nigeria'),
(164, 683, 'NU', 'Niue'),
(165, 672, 'NF', 'Norfolk Island'),
(166, 1670, 'MP', 'Northern Mariana Islands'),
(167, 47, 'NO', 'Norway'),
(168, 968, 'OM', 'Oman'),
(169, 92, 'PK', 'Pakistan'),
(170, 680, 'PW', 'Palau'),
(171, 970, 'PS', 'Palestinian'),
(172, 507, 'PA', 'Panama'),
(173, 675, 'PG', 'Papua New Guinea'),
(174, 595, 'PY', 'Paraguay'),
(175, 51, 'PE', 'Peru'),
(176, 63, 'PH', 'Philippines'),
(177, 64, 'PN', 'Pitcairn'),
(178, 48, 'PL', 'Poland'),
(179, 351, 'PT', 'Portugal'),
(180, 1787, 'PR', 'Puerto Rico'),
(181, 974, 'QA', 'Qatar'),
(182, 262, 'RE', 'Reunion'),
(183, 40, 'RO', 'Romania'),
(184, 70, 'RU', 'Russian Federation'),
(185, 250, 'RW', 'Rwanda'),
(186, 590, 'BL', 'Saint Barthelemy'),
(187, 290, 'SH', 'Saint Helena'),
(188, 1869, 'KN', 'Saint Kitts and Nevis'),
(189, 1758, 'LC', 'Saint Lucia'),
(190, 590, 'MF', 'Saint Martin'),
(191, 508, 'PM', 'Saint Pierre and Miquelon'),
(192, 1784, 'VC', 'Saint Vincent and the Grenadines'),
(193, 684, 'WS', 'Samoa'),
(194, 378, 'SM', 'San Marino'),
(195, 239, 'ST', 'Sao Tome and Principe'),
(196, 966, 'SA', 'Saudi Arabia'),
(197, 221, 'SN', 'Senegal'),
(198, 381, 'RS', 'Serbia'),
(199, 381, 'CS', 'Serbia and Montenegro'),
(200, 248, 'SC', 'Seychelles'),
(201, 232, 'SL', 'Sierra Leone'),
(202, 65, 'SG', 'Singapore'),
(203, 1, 'SX', 'Sint Maarten'),
(204, 421, 'SK', 'Slovakia'),
(205, 386, 'SI', 'Slovenia'),
(206, 677, 'SB', 'Solomon Islands'),
(207, 252, 'SO', 'Somalia'),
(208, 27, 'ZA', 'South Africa'),
(209, 500, 'GS', 'South Georgia and the South Sandwich Islands'),
(210, 211, 'SS', 'South Sudan'),
(211, 34, 'ES', 'Spain'),
(212, 94, 'LK', 'Sri Lanka'),
(213, 249, 'SD', 'Sudan'),
(214, 597, 'SR', 'Suriname'),
(215, 47, 'SJ', 'Svalbard and Jan Mayen'),
(216, 268, 'SZ', 'Swaziland'),
(217, 46, 'SE', 'Sweden'),
(218, 41, 'CH', 'Switzerland'),
(219, 963, 'SY', 'Syrian Arab Republic'),
(220, 886, 'TW', 'Taiwan, Province of China'),
(221, 992, 'TJ', 'Tajikistan'),
(222, 255, 'TZ', 'Tanzania, United Republic of'),
(223, 66, 'TH', 'Thailand'),
(224, 670, 'TL', 'Timor-Leste'),
(225, 228, 'TG', 'Togo'),
(226, 690, 'TK', 'Tokelau'),
(227, 676, 'TO', 'Tonga'),
(228, 1868, 'TT', 'Trinidad and Tobago'),
(229, 216, 'TN', 'Tunisia'),
(230, 90, 'TR', 'Turkey'),
(231, 7370, 'TM', 'Turkmenistan'),
(232, 1649, 'TC', 'Turks and Caicos Islands'),
(233, 688, 'TV', 'Tuvalu'),
(234, 256, 'UG', 'Uganda'),
(235, 380, 'UA', 'Ukraine'),
(236, 971, 'AE', 'United Arab Emirates'),
(237, 44, 'GB', 'United Kingdom'),
(238, 1, 'US', 'United States'),
(239, 1, 'UM', 'United States Minor Outlying Islands'),
(240, 598, 'UY', 'Uruguay'),
(241, 998, 'UZ', 'Uzbekistan'),
(242, 678, 'VU', 'Vanuatu'),
(243, 58, 'VE', 'Venezuela'),
(244, 84, 'VN', 'Viet Nam'),
(245, 1284, 'VG', 'Virgin Islands, British'),
(246, 1340, 'VI', 'Virgin Islands, U.s.'),
(247, 681, 'WF', 'Wallis and Futuna'),
(248, 212, 'EH', 'Western Sahara'),
(249, 967, 'YE', 'Yemen'),
(250, 260, 'ZM', 'Zambia'),
(251, 263, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Country` varchar(300) NOT NULL,
  `Phone` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Image` varchar(300) NOT NULL,
  `Birthdate` varchar(300) NOT NULL,
  `Gender` varchar(300) NOT NULL,
  `Status` varchar(300) NOT NULL,
  `Salary` varchar(300) NOT NULL,
  `Department` varchar(300) NOT NULL,
  `JobTitle` varchar(300) NOT NULL,
  `PostalCode` varchar(300) NOT NULL,
  `date` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `msgtext` text NOT NULL,
  `empid` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empid` (`empid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`empid`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
