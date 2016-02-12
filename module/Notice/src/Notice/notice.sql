-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Lut 2016, 08:24
-- Wersja serwera: 5.6.21
-- Wersja PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `notice`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `buildingmaterial`
--

CREATE TABLE IF NOT EXISTS `buildingmaterial` (
`id` int(11) NOT NULL,
  `material` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `buildingmaterial`
--

INSERT INTO `buildingmaterial` (`id`, `material`) VALUES
(1, 'drewno'),
(2, 'pustak'),
(3, 'keramzyt'),
(4, 'wielka płyta'),
(5, 'beton'),
(6, 'inne'),
(7, 'silikat'),
(8, 'beton komórkowy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `buildingtype`
--

CREATE TABLE IF NOT EXISTS `buildingtype` (
`id` int(11) NOT NULL,
  `type` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `buildingtype`
--

INSERT INTO `buildingtype` (`id`, `type`) VALUES
(1, 'kamienica'),
(2, 'dom wolnostojący'),
(3, 'plomba'),
(4, 'szeregowiec'),
(5, 'apartamentowiec'),
(6, 'loft');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categoryotodom`
--

CREATE TABLE IF NOT EXISTS `categoryotodom` (
`id` int(11) NOT NULL,
  `categoryName` longtext COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `categoryotodom`
--

INSERT INTO `categoryotodom` (`id`, `categoryName`, `category`) VALUES
(1, 'Sprzedam dom', 9073);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `country`
--

CREATE TABLE IF NOT EXISTS `country` (
`id` int(11) NOT NULL,
  `countryName` longtext NOT NULL,
  `Otodom` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=248 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `country`
--

INSERT INTO `country` (`id`, `countryName`, `Otodom`) VALUES
(1, 'Afganistan', 35),
(2, 'Albania', 38),
(3, 'Algieria', 84),
(4, 'Andora', 34),
(5, 'Angola', 41),
(6, 'Anguilla', 37),
(7, 'Antarktyka', 42),
(8, 'Antigua i Barbuda', 36),
(9, 'Antyle Holenderskie', 40),
(10, 'Arabia Saudyjska', 198),
(11, 'Argentyna', 43),
(12, 'Armenia', 39),
(13, 'Aruba', 46),
(14, 'Australia', 45),
(15, 'Austria', 13),
(16, 'Azerbejd?an', 48),
(17, 'Bahamy', 60),
(18, 'Bahrajn', 53),
(19, 'Bangladesz', 51),
(20, 'Barbados', 50),
(21, 'Belgia', 5),
(22, 'Belize', 65),
(23, 'Benin', 55),
(24, 'Bermudy', 57),
(25, 'Bhutan', 61),
(26, 'Bia?oru?', 64),
(27, 'Birma', 156),
(28, 'Boliwia', 59),
(29, 'Bo?nia i Hercegowina', 49),
(30, 'Botswana', 63),
(31, 'Brazylia', 30),
(32, 'Brunei Darussalam', 58),
(33, 'Brytyjskie Wyspy Dziewicze', 238),
(34, 'Bu?garia', 17),
(35, 'Burkina Faso', 52),
(36, 'Burundi', 54),
(37, 'Chile', 72),
(38, 'Chiny', 74),
(39, 'Chorwacja', 15),
(40, 'Cypr', 25),
(41, 'Czad', 217),
(42, 'Czarnogóra', 21),
(43, 'Czechy', 3),
(44, 'Dalekie Wyspy Mniejsze Stanów Zjednoczonych', 232),
(45, 'Dania', 32),
(46, 'Demokratyczna Republika Konga', 67),
(47, 'Dominika', 82),
(48, 'D?ibuti', 81),
(49, 'Egipt', 27),
(50, 'Ekwador', 85),
(51, 'Erytrea', 88),
(52, 'Estonia', 86),
(53, 'Etiopia', 89),
(54, 'Falklandy', 92),
(55, 'Fid?i', 91),
(56, 'Filipiny', 186),
(57, 'Finlandia', 90),
(58, 'Francja', 4),
(59, 'Francuskie Terytoria Po?udniowe', 218),
(60, 'Gabon', 95),
(61, 'Gambia', 103),
(62, 'Georgia Po?udniowa i Sandwich Po?udniowy', 107),
(63, 'Ghana', 100),
(64, 'Gibraltar', 101),
(65, 'Grecja', 19),
(66, 'Grenada', 96),
(67, 'Grenlandia', 102),
(68, 'Gruzja', 97),
(69, 'Guam', 109),
(70, 'Gujana', 111),
(71, 'Gujana Francuska', 98),
(72, 'Gwadelupa', 105),
(73, 'Gwatemala', 108),
(74, 'Gwinea', 104),
(75, 'Gwinea Bissau', 110),
(76, 'Gwinea Równikowa', 106),
(77, 'Haiti', 115),
(78, 'Hiszpania', 6),
(79, 'Holandia', 7),
(80, 'Honduras', 114),
(81, 'Hongkong', 112),
(82, 'Indie', 119),
(83, 'Indonezja', 116),
(84, 'Irak', 121),
(85, 'Iran', 122),
(86, 'Irlandia', 18),
(87, 'Islandia', 123),
(88, 'Izrael', 117),
(89, 'Jamajka', 125),
(90, 'Japonia', 127),
(91, 'Jemen', 244),
(92, 'Jordania', 126),
(93, 'Kajmany', 137),
(94, 'Kambod?a', 130),
(95, 'Kamerun', 73),
(96, 'Kanada', 12),
(97, 'Katar', 194),
(98, 'Kazachstan', 138),
(99, 'Kenia', 128),
(100, 'Kirgistan', 129),
(101, 'Kiribati', 131),
(102, 'Kolumbia', 75),
(103, 'Komory', 132),
(104, 'Kongo', 69),
(105, 'Korea Po?udniowa', 135),
(106, 'Korea Pó?nocna', 134),
(107, 'Kostaryka', 76),
(108, 'Kuba', 78),
(109, 'Kuwejt', 136),
(110, 'Laos', 139),
(111, 'Lesotho', 145),
(112, 'Liban', 140),
(113, 'Liberia', 144),
(114, 'Libia', 147),
(115, 'Liechtenstein', 142),
(116, 'Litwa', 31),
(117, 'Luksemburg', 8),
(118, '?otwa', 146),
(119, 'Macedonia', 154),
(120, 'Madagaskar', 152),
(121, 'Majotta', 245),
(122, 'Makau', 158),
(123, 'Malawi', 166),
(124, 'Malediwy', 165),
(125, 'Malezja', 168),
(126, 'Mali', 155),
(127, 'Malta', 163),
(128, 'Mariany Pó?nocne', 159),
(129, 'Maroko', 148),
(130, 'Martynika', 160),
(131, 'Mauretania', 161),
(132, 'Mauritius', 164),
(133, 'Meksyk', 167),
(134, 'Mikronezja', 93),
(135, 'Mo?dawia', 150),
(136, 'Monako', 149),
(137, 'Mongolia', 157),
(138, 'Montserrat', 162),
(139, 'Mozambik', 169),
(140, 'Namibia', 170),
(141, 'Nauru', 178),
(142, 'Nepal', 177),
(143, 'Niemcy', 20),
(144, 'Niger', 172),
(145, 'Nigeria', 174),
(146, 'Nikaragua', 175),
(147, 'Niue', 179),
(148, 'Norwegia', 176),
(149, 'Nowa Kaledonia', 171),
(150, 'Nowa Zelandia', 180),
(151, 'Oman', 181),
(152, 'Pakistan', 187),
(153, 'Palau', 192),
(154, 'Panama', 182),
(155, 'Papua Nowa Gwinea', 185),
(156, 'Paragwaj', 193),
(157, 'Peru', 183),
(158, 'Pitcairn', 189),
(159, 'Polinezja Francuska', 184),
(160, 'Polska', 1),
(161, 'Portoryko', 190),
(162, 'Portugalia', 14),
(163, 'Republika Dominika?ska', 83),
(164, 'Republika Po?udniowej Afryki', 246),
(165, 'Republika ?rodkowej Afryki', 68),
(166, 'Reunion', 195),
(167, 'Rosja', 22),
(168, 'Rumunia', 16),
(169, 'Rwanda', 197),
(170, 'Sahara Zachodnia', 87),
(171, 'Saint Barthélemy', 56),
(172, 'Saint Kitts i Nevis', 133),
(173, 'Saint Lucia', 141),
(174, 'Saint Vincent i Grenadyny', 236),
(175, 'Saint-Pierre i Miquelon', 188),
(176, 'Salwador', 213),
(177, 'Samoa', 243),
(178, 'Samoa Ameryka?skie', 44),
(179, 'San Marino', 208),
(180, 'Senegal', 209),
(181, 'Serbia', 196),
(182, 'Serbia i Czarnogóra', 77),
(183, 'Seszele', 200),
(184, 'Sierra Leone', 207),
(185, 'Singapur', 203),
(186, 'Sint Maarten', 151),
(187, 'S?owacja', 2),
(188, 'S?owenia', 205),
(189, 'Somalia', 210),
(190, 'Sri Lanka', 143),
(191, 'Stany Zjednoczone', 11),
(192, 'Suazi', 215),
(193, 'Sudan', 201),
(194, 'Surinam', 211),
(195, 'Svalbard i Jan Mayen', 206),
(196, 'Syria', 214),
(197, 'Szwajcaria', 33),
(198, 'Szwecja', 202),
(199, 'Tad?ykistan', 221),
(200, 'Tajlandia', 220),
(201, 'Tajwan', 229),
(202, 'Tanzania', 230),
(203, 'Terytoria Palesty?skie', 191),
(204, 'Terytorium Brytyjskie Oceanu Indyjskiego', 120),
(205, 'Timor Wschodni', 223),
(206, 'Togo', 219),
(207, 'Tokelau', 222),
(208, 'Tonga', 226),
(209, 'Trynidad i Tobago', 227),
(210, 'Tunezja', 225),
(211, 'Turcja', 24),
(212, 'Turkmenistan', 224),
(213, 'Turks i Caicos', 216),
(214, 'Tuvalu', 228),
(215, 'Uganda', 231),
(216, 'Ukraina', 23),
(217, 'Urugwaj', 233),
(218, 'Uzbekistan', 234),
(219, 'Vanuatu', 241),
(220, 'Wallis i Futuna', 242),
(221, 'Watykan', 235),
(222, 'Wenezuela', 237),
(223, 'W?gry', 28),
(224, 'Wielka Brytania', 9),
(225, 'Wietnam', 240),
(226, 'W?ochy', 10),
(227, 'Wybrze?e Ko?ci S?oniowej', 70),
(228, 'Wyspa Bouveta', 62),
(229, 'Wyspa Bo?ego Narodzenia', 80),
(230, 'Wyspa Guernsey', 99),
(231, 'Wyspa Jersey', 124),
(232, 'Wyspa Man', 118),
(233, 'Wyspa Norfolk', 173),
(234, 'Wyspa ?wi?tej Heleny', 204),
(235, 'Wyspy Alandzkie', 47),
(236, 'Wyspy Cooka', 71),
(237, 'Wyspy Dziewicze Stanów Zjednoczonych', 239),
(238, 'Wyspy Heard i McDonalda', 113),
(239, 'Wyspy Kokosowe', 66),
(240, 'Wyspy Marshalla', 153),
(241, 'Wyspy Owcze', 94),
(242, 'Wyspy Salomona', 199),
(243, 'Wyspy ?wi?tego Tomasza i Ksi???ca', 212),
(244, 'Wyspy Zielonego Przyl?dka', 79),
(245, 'Zambia', 247),
(246, 'Zimbabwe', 248),
(247, 'Zjednoczone Emiraty Arabskie', 26);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `district`
--

CREATE TABLE IF NOT EXISTS `district` (
`id` int(11) NOT NULL,
  `districtName` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nameOtodom` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nameDomiporta` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=381 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `district`
--

INSERT INTO `district` (`id`, `districtName`, `nameOtodom`, `nameDomiporta`) VALUES
(1, 'aleksandrowski', '62', ''),
(2, 'augustowski', '245', ''),
(3, 'bartoszycki', '331', ''),
(4, 'beÅ‚chatowski', '122', ''),
(5, 'bÄ™dziÅ„ski', '281', ''),
(6, 'bialski', '390', ''),
(7, 'BiaÅ‚a Podlaska', '394', ''),
(8, 'biaÅ‚obrzeski', '167', ''),
(9, 'biaÅ‚ogardzki', '351', ''),
(10, 'biaÅ‚ostocki', '431', ''),
(11, 'BiaÅ‚ystok', '434', ''),
(12, 'bielski', '441', ''),
(13, 'bielski', '247', ''),
(14, 'Bielsko-BiaÅ‚a', '445', ''),
(15, 'bieruÅ„sko-lÄ™dziÅ„ski', '376', ''),
(16, 'bieszczadzki', '221', ''),
(17, 'biÅ‚gorajski', '86', ''),
(18, 'bocheÅ„ski', '145', ''),
(19, 'bolesÅ‚awiecki', '32', ''),
(20, 'braniewski', '332', ''),
(21, 'brodnicki', '63', ''),
(22, 'brzeski', '146', ''),
(23, 'brzeski', '209', ''),
(24, 'brzeziÅ„ski', '404', ''),
(25, 'brzozowski', '222', ''),
(26, 'buski', '317', ''),
(27, 'bydgoski', '382', ''),
(28, 'Bydgoszcz', '386', ''),
(29, 'Bytom', '299', ''),
(30, 'bytowski', '262', ''),
(31, 'CheÅ‚m', '395', ''),
(32, 'cheÅ‚miÅ„ski', '65', ''),
(33, 'cheÅ‚mski', '391', ''),
(34, 'chodzieski', '1', ''),
(35, 'chojnicki', '263', ''),
(36, 'ChorzÃ³w', '300', ''),
(37, 'choszczeÅ„ski', '352', ''),
(38, 'chrzanowski', '147', ''),
(39, 'ciechanowski', '168', ''),
(40, 'cieszyÅ„ski', '283', ''),
(41, 'czarnkowsko-trzcianecki', '2', ''),
(42, 'CzÄ™stochowa', '446', ''),
(43, 'czÄ™stochowski', '442', ''),
(44, 'czÅ‚uchowski', '264', ''),
(45, 'DÄ…browa GÃ³rnicza', '302', ''),
(46, 'dÄ…browski', '148', ''),
(47, 'dÄ™bicki', '223', ''),
(48, 'drawski', '353', ''),
(49, 'dziaÅ‚dowski', '333', ''),
(50, 'dzierÅ¼oniowski', '33', ''),
(51, 'ElblÄ…g', '453', ''),
(52, 'elblÄ…ski', '451', ''),
(53, 'eÅ‚cki', '335', ''),
(54, 'garwoliÅ„ski', '169', ''),
(55, 'GdaÅ„sk', '439', ''),
(56, 'gdaÅ„ski', '437', ''),
(57, 'Gdynia', '278', ''),
(58, 'giÅ¼ycki', '336', ''),
(59, 'Gliwice', '447', ''),
(60, 'gliwicki', '443', ''),
(61, 'gÅ‚ogowski', '34', ''),
(62, 'gÅ‚ubczycki', '210', ''),
(63, 'gnieÅºnieÅ„ski', '3', ''),
(64, 'goleniowski', '354', ''),
(65, 'golubsko-dobrzyÅ„ski', '66', ''),
(66, 'goÅ‚dapski', '375', ''),
(67, 'gorlicki', '149', ''),
(68, 'gorzowski', '398', ''),
(69, 'GorzÃ³w Wielkopolski', '400', ''),
(70, 'gostyniÅ„ski', '170', ''),
(71, 'gostyÅ„ski', '4', ''),
(72, 'gÃ³rowski', '35', ''),
(73, 'grajewski', '248', ''),
(74, 'grodziski', '5', ''),
(75, 'grodziski', '171', ''),
(76, 'grÃ³jecki', '172', ''),
(77, 'GrudziÄ…dz', '387', ''),
(78, 'grudziÄ…dzki', '383', ''),
(79, 'gryficki', '355', ''),
(80, 'gryfiÅ„ski', '356', ''),
(81, 'hajnowski', '249', ''),
(82, 'hrubieszowski', '88', ''),
(83, 'iÅ‚awski', '337', ''),
(84, 'inowrocÅ‚awski', '68', ''),
(85, 'janowski', '89', ''),
(86, 'jarociÅ„ski', '6', ''),
(87, 'jarosÅ‚awski', '224', ''),
(88, 'jasielski', '225', ''),
(89, 'JastrzÄ™bie-ZdrÃ³j', '304', ''),
(90, 'jaworski', '36', ''),
(91, 'Jaworzno', '305', ''),
(92, 'Jelenia GÃ³ra', '58', ''),
(93, 'jeleniogÃ³rski', '37', ''),
(94, 'jÄ™drzejowski', '318', ''),
(95, 'kaliski', '455', ''),
(96, 'Kalisz', '459', ''),
(97, 'kamiennogÃ³rski', '38', ''),
(98, 'kamieÅ„ski', '357', ''),
(99, 'kartuski', '266', ''),
(100, 'Katowice', '306', ''),
(101, 'kazimierski', '319', ''),
(102, 'kÄ™dzierzyÅ„sko-kozielski', '211', ''),
(103, 'kÄ™piÅ„ski', '8', ''),
(104, 'kÄ™trzyÅ„ski', '338', ''),
(105, 'Kielce', '450', ''),
(106, 'kielecki', '449', ''),
(107, 'kluczborski', '212', ''),
(108, 'kÅ‚obucki', '286', ''),
(109, 'kÅ‚odzki', '39', ''),
(110, 'kolbuszowski', '226', ''),
(111, 'kolneÅ„ski', '250', ''),
(112, 'kolski', '9', ''),
(113, 'koÅ‚obrzeski', '358', ''),
(114, 'konecki', '321', ''),
(115, 'Konin', '460', ''),
(116, 'koniÅ„ski', '456', ''),
(117, 'Koszalin', '464', ''),
(118, 'koszaliÅ„ski', '463', ''),
(119, 'koÅ›ciaÅ„ski', '11', ''),
(120, 'koÅ›cierski', '267', ''),
(121, 'kozienicki', '173', ''),
(122, 'krakowski', '407', ''),
(123, 'KrakÃ³w', '410', ''),
(124, 'krapkowicki', '213', ''),
(125, 'krasnostawski', '90', ''),
(126, 'kraÅ›nicki', '91', ''),
(127, 'Krosno', '427', ''),
(128, 'kroÅ›nieÅ„ski', '110', ''),
(129, 'kroÅ›nieÅ„ski', '423', ''),
(130, 'krotoszyÅ„ski', '12', ''),
(131, 'kutnowski', '123', ''),
(132, 'kwidzyÅ„ski', '268', ''),
(133, 'legionowski', '174', ''),
(134, 'Legnica', '380', ''),
(135, 'legnicki', '378', ''),
(136, 'leski', '372', ''),
(137, 'leszczyÅ„ski', '457', ''),
(138, 'Leszno', '461', ''),
(139, 'leÅ¼ajski', '228', ''),
(140, 'lÄ™borski', '269', ''),
(141, 'lidzbarski', '339', ''),
(142, 'limanowski', '151', ''),
(143, 'lipnowski', '69', ''),
(144, 'lipski', '175', ''),
(145, 'lubaczowski', '229', ''),
(146, 'lubaÅ„ski', '41', ''),
(147, 'lubartowski', '92', ''),
(148, 'lubelski', '392', ''),
(149, 'lubiÅ„ski', '42', ''),
(150, 'Lublin', '396', ''),
(151, 'lubliniecki', '287', ''),
(152, 'lwÃ³wecki', '43', ''),
(153, 'Å‚aÅ„cucki', '230', ''),
(154, 'Å‚aski', '124', ''),
(155, 'Å‚Ä™czycki', '125', ''),
(156, 'Å‚Ä™czyÅ„ski', '94', ''),
(157, 'Å‚obeski', '374', ''),
(158, 'ÅomÅ¼a', '435', ''),
(159, 'Å‚omÅ¼yÅ„ski', '432', ''),
(160, 'Å‚osicki', '176', ''),
(161, 'Å‚owicki', '126', ''),
(162, 'Å‚Ã³dzki wschodni', '142', ''),
(163, 'ÅÃ³dÅº', '127', ''),
(164, 'Å‚ukowski', '95', ''),
(165, 'makowski', '177', ''),
(166, 'malborski', '270', ''),
(167, 'miechowski', '152', ''),
(168, 'mielecki', '231', ''),
(169, 'miÄ™dzychodzki', '14', ''),
(170, 'miÄ™dzyrzecki', '111', ''),
(171, 'mikoÅ‚owski', '288', ''),
(172, 'milicki', '44', ''),
(173, 'miÅ„ski', '178', ''),
(174, 'mÅ‚awski', '179', ''),
(175, 'mogileÅ„ski', '70', ''),
(176, 'moniecki', '252', ''),
(177, 'mrÄ…gowski', '340', ''),
(178, 'MysÅ‚owice', '307', ''),
(179, 'myszkowski', '289', ''),
(180, 'myÅ›lenicki', '153', ''),
(181, 'myÅ›liborski', '360', ''),
(182, 'nakielski', '71', ''),
(183, 'namysÅ‚owski', '214', ''),
(184, 'nidzicki', '341', ''),
(185, 'niÅ¼aÅ„ski', '232', ''),
(186, 'nowodworski', '271', ''),
(187, 'nowodworski', '180', ''),
(188, 'nowomiejski', '342', ''),
(189, 'nowosÄ…decki', '408', ''),
(190, 'nowosolski', '112', ''),
(191, 'nowotarski', '155', ''),
(192, 'nowotomyski', '15', ''),
(193, 'Nowy SÄ…cz', '411', ''),
(194, 'nyski', '215', ''),
(195, 'obornicki', '16', ''),
(196, 'olecki', '343', ''),
(197, 'oleski', '216', ''),
(198, 'oleÅ›nicki', '45', ''),
(199, 'olkuski', '156', ''),
(200, 'Olsztyn', '454', ''),
(201, 'olsztyÅ„ski', '452', ''),
(202, 'oÅ‚awski', '46', ''),
(203, 'opatowski', '322', ''),
(204, 'opoczyÅ„ski', '128', ''),
(205, 'Opole', '422', ''),
(206, 'opolski', '96', ''),
(207, 'opolski', '421', ''),
(208, 'ostroÅ‚Ä™cki', '413', ''),
(209, 'OstroÅ‚Ä™ka', '417', ''),
(210, 'ostrowiecki', '323', ''),
(211, 'ostrowski', '17', ''),
(212, 'ostrowski', '182', ''),
(213, 'ostrÃ³dzki', '346', ''),
(214, 'ostrzeszowski', '18', ''),
(215, 'oÅ›wiÄ™cimski', '157', ''),
(216, 'otwocki', '183', ''),
(217, 'pabianicki', '129', ''),
(218, 'pajÄ™czaÅ„ski', '130', ''),
(219, 'parczewski', '97', ''),
(220, 'piaseczyÅ„ski', '184', ''),
(221, 'Piekary ÅšlÄ…skie', '308', ''),
(222, 'pilski', '19', ''),
(223, 'piÅ„czowski', '324', ''),
(224, 'piotrkowski', '402', ''),
(225, 'PiotrkÃ³w Trybunalski', '405', ''),
(226, 'piski', '347', ''),
(227, 'pleszewski', '20', ''),
(228, 'PÅ‚ock', '418', ''),
(229, 'pÅ‚ocki', '414', ''),
(230, 'pÅ‚oÅ„ski', '186', ''),
(231, 'poddÄ™bicki', '132', ''),
(232, 'policki', '361', ''),
(233, 'polkowicki', '47', ''),
(234, 'PoznaÅ„', '462', ''),
(235, 'poznaÅ„ski', '458', ''),
(236, 'proszowicki', '158', ''),
(237, 'prudnicki', '218', ''),
(238, 'pruszkowski', '187', ''),
(239, 'przasnyski', '188', ''),
(240, 'przemyski', '424', ''),
(241, 'PrzemyÅ›l', '428', ''),
(242, 'przeworski', '234', ''),
(243, 'przysuski', '189', ''),
(244, 'pszczyÅ„ski', '290', ''),
(245, 'pucki', '272', ''),
(246, 'puÅ‚awski', '98', ''),
(247, 'puÅ‚tuski', '190', ''),
(248, 'pyrzycki', '362', ''),
(249, 'raciborski', '291', ''),
(250, 'Radom', '419', ''),
(251, 'radomski', '415', ''),
(252, 'radomszczaÅ„ski', '133', ''),
(253, 'radziejowski', '72', ''),
(254, 'radzyÅ„ski', '99', ''),
(255, 'rawicki', '22', ''),
(256, 'rawski', '134', ''),
(257, 'ropczycko-sÄ™dziszowski', '235', ''),
(258, 'Ruda ÅšlÄ…ska', '309', ''),
(259, 'rybnicki', '444', ''),
(260, 'Rybnik', '448', ''),
(261, 'rycki', '100', ''),
(262, 'rypiÅ„ski', '73', ''),
(263, 'rzeszowski', '425', ''),
(264, 'RzeszÃ³w', '429', ''),
(265, 'sandomierski', '325', ''),
(266, 'sanocki', '237', ''),
(267, 'sejneÅ„ski', '253', ''),
(268, 'sÄ™poleÅ„ski', '74', ''),
(269, 'Siedlce', '420', ''),
(270, 'siedlecki', '416', ''),
(271, 'Siemianowice ÅšlÄ…skie', '311', ''),
(272, 'siemiatycki', '254', ''),
(273, 'sieradzki', '135', ''),
(274, 'sierpecki', '193', ''),
(275, 'skarÅ¼yski', '326', ''),
(276, 'Skierniewice', '406', ''),
(277, 'skierniewicki', '403', ''),
(278, 'sÅ‚awieÅ„ski', '363', ''),
(279, 'sÅ‚ubicki', '113', ''),
(280, 'sÅ‚upecki', '23', ''),
(281, 'SÅ‚upsk', '440', ''),
(282, 'sÅ‚upski', '438', ''),
(283, 'sochaczewski', '194', ''),
(284, 'sokoÅ‚owski', '195', ''),
(285, 'sokÃ³lski', '255', ''),
(286, 'Sopot', '280', ''),
(287, 'Sosnowiec', '312', ''),
(288, 'stalowowolski', '238', ''),
(289, 'starachowicki', '327', ''),
(290, 'stargardzki', '364', ''),
(291, 'starogardzki', '274', ''),
(292, 'staszowski', '328', ''),
(293, 'strzelecki', '219', ''),
(294, 'strzelecko-drezdenecki', '114', ''),
(295, 'strzeliÅ„ski', '48', ''),
(296, 'strzyÅ¼owski', '239', ''),
(297, 'sulÄ™ciÅ„ski', '115', ''),
(298, 'suski', '159', ''),
(299, 'suwalski', '433', ''),
(300, 'SuwaÅ‚ki', '436', ''),
(301, 'szamotulski', '24', ''),
(302, 'Szczecin', '371', ''),
(303, 'szczecinecki', '365', ''),
(304, 'szczycieÅ„ski', '348', ''),
(305, 'sztumski', '373', ''),
(306, 'szydÅ‚owiecki', '196', ''),
(307, 'Å›redzki', '25', ''),
(308, 'Å›redzki', '49', ''),
(309, 'Å›remski', '26', ''),
(310, 'Å›widnicki', '50', ''),
(311, 'Å›widnicki', '101', ''),
(312, 'Å›widwiÅ„ski', '366', ''),
(313, 'Å›wiebodziÅ„ski', '116', ''),
(314, 'Å›wiecki', '75', ''),
(315, 'ÅšwiÄ™tochÅ‚owice', '313', ''),
(316, 'ÅšwinoujÅ›cie', '370', ''),
(317, 'Tarnobrzeg', '430', ''),
(318, 'tarnobrzeski', '426', ''),
(319, 'tarnogÃ³rski', '293', ''),
(320, 'tarnowski', '409', ''),
(321, 'TarnÃ³w', '412', ''),
(322, 'tatrzaÅ„ski', '161', ''),
(323, 'tczewski', '275', ''),
(324, 'tomaszowski', '102', ''),
(325, 'tomaszowski', '137', ''),
(326, 'ToruÅ„', '388', ''),
(327, 'toruÅ„ski', '384', ''),
(328, 'trzebnicki', '51', ''),
(329, 'tucholski', '77', ''),
(330, 'turecki', '27', ''),
(331, 'Tychy', '294', ''),
(332, 'wadowicki', '162', ''),
(333, 'WaÅ‚brzych', '465', ''),
(334, 'waÅ‚brzyski', '52', ''),
(335, 'waÅ‚ecki', '367', ''),
(336, 'Warszawa', '197', ''),
(337, 'warszawski zachodni', '198', ''),
(338, 'wÄ…brzeski', '78', ''),
(339, 'wÄ…growiecki', '28', ''),
(340, 'wejherowski', '276', ''),
(341, 'wÄ™gorzewski', '344', ''),
(342, 'wÄ™growski', '199', ''),
(343, 'wielicki', '163', ''),
(344, 'wieluÅ„ski', '138', ''),
(345, 'wieruszowski', '139', ''),
(346, 'WÅ‚ocÅ‚awek', '389', ''),
(347, 'wÅ‚ocÅ‚awski', '385', ''),
(348, 'wÅ‚odawski', '103', ''),
(349, 'wÅ‚oszczowski', '329', ''),
(350, 'wodzisÅ‚awski', '295', ''),
(351, 'wolsztyÅ„ski', '29', ''),
(352, 'woÅ‚omiÅ„ski', '200', ''),
(353, 'woÅ‚owski', '53', ''),
(354, 'WrocÅ‚aw', '381', ''),
(355, 'wrocÅ‚awski', '379', ''),
(356, 'wrzesiÅ„ski', '30', ''),
(357, 'wschowski', '377', ''),
(358, 'wysokomazowiecki', '257', ''),
(359, 'wyszkowski', '201', ''),
(360, 'Zabrze', '315', ''),
(361, 'zambrowski', '258', ''),
(362, 'zamojski', '393', ''),
(363, 'ZamoÅ›Ä‡', '397', ''),
(364, 'zawierciaÅ„ski', '296', ''),
(365, 'zÄ…bkowicki', '55', ''),
(366, 'zduÅ„skowolski', '140', ''),
(367, 'zgierski', '141', ''),
(368, 'zgorzelecki', '56', ''),
(369, 'Zielona GÃ³ra', '401', ''),
(370, 'zielonogÃ³rski', '399', ''),
(371, 'zÅ‚otoryjski', '57', ''),
(372, 'zÅ‚otowski', '31', ''),
(373, 'zwoleÅ„ski', '202', ''),
(374, 'Å¼agaÅ„ski', '118', ''),
(375, 'Å¼arski', '119', ''),
(376, 'Å¼niÅ„ski', '80', ''),
(377, 'Å»ory', '316', ''),
(378, 'Å¼uromiÅ„ski', '203', ''),
(379, 'Å¼yrardowski', '204', ''),
(380, 'Å¼ywiecki', '297', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `districtprovince`
--

CREATE TABLE IF NOT EXISTS `districtprovince` (
  `provice` int(11) DEFAULT NULL,
  `district` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `districtprovince`
--

INSERT INTO `districtprovince` (`provice`, `district`) VALUES
(2, 62),
(10, 245),
(14, 331),
(5, 122),
(12, 281),
(3, 390),
(3, 394),
(7, 167),
(16, 351),
(10, 431),
(10, 434),
(12, 441),
(10, 247),
(12, 445),
(12, 376),
(9, 221),
(3, 86),
(6, 145),
(1, 32),
(14, 332),
(2, 63),
(6, 146),
(8, 209),
(5, 404),
(9, 222),
(13, 317),
(2, 382),
(2, 386),
(12, 299),
(11, 262),
(3, 395),
(2, 65),
(3, 391),
(15, 1),
(11, 263),
(12, 300),
(16, 352),
(6, 147),
(7, 168),
(12, 283),
(15, 2),
(12, 446),
(12, 442),
(11, 264),
(12, 302),
(6, 148),
(9, 223),
(16, 353),
(14, 333),
(1, 33),
(14, 453),
(14, 451),
(14, 335),
(7, 169),
(11, 439),
(11, 437),
(11, 278),
(14, 336),
(12, 447),
(12, 443),
(1, 34),
(8, 210),
(15, 3),
(16, 354),
(2, 66),
(14, 375),
(6, 149),
(4, 398),
(4, 400),
(7, 170),
(15, 4),
(1, 35),
(10, 248),
(15, 5),
(7, 171),
(7, 172),
(2, 387),
(2, 383),
(16, 355),
(16, 356),
(10, 249),
(3, 88),
(14, 337),
(2, 68),
(3, 89),
(15, 6),
(9, 224),
(9, 225),
(12, 304),
(1, 36),
(12, 305),
(1, 58),
(1, 37),
(13, 318),
(15, 455),
(15, 459),
(1, 38),
(16, 357),
(11, 266),
(12, 306),
(13, 319),
(8, 211),
(15, 8),
(14, 338),
(13, 450),
(13, 449),
(8, 212),
(12, 286),
(1, 39),
(9, 226),
(10, 250),
(15, 9),
(16, 358),
(13, 321),
(15, 460),
(15, 456),
(16, 464),
(16, 463),
(15, 11),
(11, 267),
(7, 173),
(6, 407),
(6, 410),
(8, 213),
(3, 90),
(3, 91),
(9, 427),
(4, 110),
(9, 423),
(15, 12),
(5, 123),
(11, 268),
(7, 174),
(1, 380),
(1, 378),
(9, 372),
(15, 457),
(15, 461),
(9, 228),
(11, 269),
(14, 339),
(6, 151),
(2, 69),
(7, 175),
(9, 229),
(1, 41),
(3, 92),
(3, 392),
(1, 42),
(3, 396),
(12, 287),
(1, 43),
(9, 230),
(5, 124),
(5, 125),
(3, 94),
(16, 374),
(10, 435),
(10, 432),
(7, 176),
(5, 126),
(5, 142),
(5, 127),
(3, 95),
(7, 177),
(11, 270),
(6, 152),
(9, 231),
(15, 14),
(4, 111),
(12, 288),
(1, 44),
(7, 178),
(7, 179),
(2, 70),
(10, 252),
(14, 340),
(12, 307),
(12, 289),
(6, 153),
(16, 360),
(2, 71),
(8, 214),
(14, 341),
(9, 232),
(11, 271),
(7, 180),
(14, 342),
(6, 408),
(4, 112),
(6, 155),
(15, 15),
(6, 411),
(8, 215),
(15, 16),
(14, 343),
(8, 216),
(1, 45),
(6, 156),
(14, 454),
(14, 452),
(1, 46),
(13, 322),
(5, 128),
(8, 422),
(3, 96),
(8, 421),
(7, 413),
(7, 417),
(13, 323),
(15, 17),
(7, 182),
(14, 346),
(15, 18),
(6, 157),
(7, 183),
(5, 129),
(5, 130),
(3, 97),
(7, 184),
(12, 308),
(15, 19),
(13, 324),
(5, 402),
(5, 405),
(14, 347),
(15, 20),
(7, 418),
(7, 414),
(7, 186),
(5, 132),
(16, 361),
(1, 47),
(15, 462),
(15, 458),
(6, 158),
(8, 218),
(7, 187),
(7, 188),
(9, 424),
(9, 428),
(9, 234),
(7, 189),
(12, 290),
(11, 272),
(3, 98),
(7, 190),
(16, 362),
(12, 291),
(7, 419),
(7, 415),
(5, 133),
(2, 72),
(3, 99),
(15, 22),
(5, 134),
(9, 235),
(12, 309),
(12, 444),
(12, 448),
(3, 100),
(2, 73),
(9, 425),
(9, 429),
(13, 325),
(9, 237),
(10, 253),
(2, 74),
(7, 420),
(7, 416),
(12, 311),
(10, 254),
(5, 135),
(7, 193),
(13, 326),
(5, 406),
(5, 403),
(16, 363),
(4, 113),
(15, 23),
(11, 440),
(11, 438),
(7, 194),
(7, 195),
(10, 255),
(11, 280),
(12, 312),
(9, 238),
(13, 327),
(16, 364),
(11, 274),
(13, 328),
(8, 219),
(4, 114),
(1, 48),
(9, 239),
(4, 115),
(6, 159),
(10, 433),
(10, 436),
(15, 24),
(16, 371),
(16, 365),
(14, 348),
(11, 373),
(7, 196),
(15, 25),
(1, 49),
(15, 26),
(1, 50),
(3, 101),
(16, 366),
(4, 116),
(2, 75),
(12, 313),
(16, 370),
(9, 430),
(9, 426),
(12, 293),
(6, 409),
(6, 412),
(6, 161),
(11, 275),
(3, 102),
(5, 137),
(2, 388),
(2, 384),
(1, 51),
(2, 77),
(15, 27),
(12, 294),
(6, 162),
(1, 465),
(1, 52),
(16, 367),
(7, 197),
(7, 198),
(2, 78),
(15, 28),
(11, 276),
(14, 344),
(7, 199),
(6, 163),
(5, 138),
(5, 139),
(2, 389),
(2, 385),
(3, 103),
(13, 329),
(12, 295),
(15, 29),
(7, 200),
(1, 53),
(1, 381),
(1, 379),
(15, 30),
(4, 377),
(10, 257),
(7, 201),
(12, 315),
(10, 258),
(3, 393),
(3, 397),
(12, 296),
(1, 55),
(5, 140),
(5, 141),
(1, 56),
(4, 401),
(4, 399),
(1, 57),
(15, 31),
(7, 202),
(4, 118),
(4, 119),
(2, 80),
(12, 316),
(7, 203),
(7, 204),
(12, 297);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `extras`
--

CREATE TABLE IF NOT EXISTS `extras` (
`id` int(11) NOT NULL,
  `extras` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `extras`
--

INSERT INTO `extras` (`id`, `extras`) VALUES
(1, 'piwnica'),
(2, 'strych'),
(3, 'gara?'),
(4, 'basen'),
(5, 'Internet'),
(6, 'telewizja kablowa'),
(7, 'klimatyzacja'),
(8, 'umeblowane'),
(9, ''),
(10, ''),
(11, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fence`
--

CREATE TABLE IF NOT EXISTS `fence` (
`id` int(11) NOT NULL,
  `fenceName` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `fence`
--

INSERT INTO `fence` (`id`, `fenceName`) VALUES
(1, 'murowane'),
(2, 'siatka'),
(3, 'metalowe'),
(4, 'drewniane'),
(5, 'betonowe');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `floor`
--

CREATE TABLE IF NOT EXISTS `floor` (
`id` int(11) NOT NULL,
  `floor` longtext NOT NULL,
  `floorOtodom` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `floor`
--

INSERT INTO `floor` (`id`, `floor`, `floorOtodom`) VALUES
(1, 'suterena', 0),
(2, 'parter', 1),
(3, '1', 2),
(4, '2', 3),
(5, '3', 4),
(6, '4', 5),
(7, '5', 6),
(8, '6', 7),
(9, '7', 8),
(10, '8', 9),
(11, '9', 10),
(12, '10', 11),
(13, '11', 12),
(14, '12', 13),
(15, '13', 14);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `heating`
--

CREATE TABLE IF NOT EXISTS `heating` (
`id` int(11) NOT NULL,
  `heatingName` longtext NOT NULL,
  `Otodom` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `heating`
--

INSERT INTO `heating` (`id`, `heatingName`, `Otodom`) VALUES
(1, 'gazowe', ''),
(2, 'w?glowe', ''),
(3, 'biomasa', ''),
(4, 'pompa ciep?a', ''),
(5, 'kolektor s?oneczny', ''),
(6, 'geotermika', ''),
(7, 'olejowe', ''),
(8, 'elektryczne', ''),
(9, 'miejskie', ''),
(10, 'kominkowe', ''),
(11, 'piece kaflowe', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `locationotodom`
--

CREATE TABLE IF NOT EXISTS `locationotodom` (
`id` int(11) NOT NULL,
  `locationName` longtext COLLATE utf8_unicode_ci NOT NULL,
  `location` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `locationotodom`
--

INSERT INTO `locationotodom` (`id`, `locationName`, `location`) VALUES
(1, 'Smardzewska', '225588'),
(2, 'Bohaterów', '778899'),
(3, 'AK', '1258');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mediamask`
--

CREATE TABLE IF NOT EXISTS `mediamask` (
`id` int(11) NOT NULL,
  `mediaName` longtext COLLATE utf8_unicode_ci NOT NULL,
  `otodom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mediasalesunit`
--

CREATE TABLE IF NOT EXISTS `mediasalesunit` (
`id` int(11) NOT NULL,
  `mediaName` longtext NOT NULL,
  `otodom` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `mediasalesunit`
--

INSERT INTO `mediasalesunit` (`id`, `mediaName`, `otodom`) VALUES
(1, 'pr?d', 0),
(2, 'woda', 1),
(3, 'gaz', 2),
(4, 'telefon', 3),
(5, 'kanalizacja', 4),
(6, 'szambo', 5),
(7, 'oczyszczalnia', 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mediasite`
--

CREATE TABLE IF NOT EXISTS `mediasite` (
`id` int(11) NOT NULL,
  `mediaName` longtext NOT NULL,
  `otodom` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `mediasite`
--

INSERT INTO `mediasite` (`id`, `mediaName`, `otodom`) VALUES
(1, 'pr?d', 0),
(2, 'woda', 1),
(3, 'gaz', 2),
(4, 'telefon', 3),
(5, 'kanalizacja', 4),
(6, 'szambo', 5),
(7, 'oczyszczalnia', 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
`id` int(11) NOT NULL,
  `isChanged` tinyint(1) NOT NULL,
  `isPublishedOnOtodom` tinyint(1) NOT NULL,
  `isPublishedOnDomiporta` tinyint(1) NOT NULL,
  `isPublishedOnGumtree` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `province`
--

CREATE TABLE IF NOT EXISTS `province` (
`id` int(11) NOT NULL,
  `provinceName` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nameOtodom` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nameDomiporta` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `province`
--

INSERT INTO `province` (`id`, `provinceName`, `nameOtodom`, `nameDomiporta`) VALUES
(1, 'wielkopolskie', 'wielkopolskie', '28');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roofmaterial`
--

CREATE TABLE IF NOT EXISTS `roofmaterial` (
`id` int(11) NOT NULL,
  `roofMaterialName` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `roofmaterial`
--

INSERT INTO `roofmaterial` (`id`, `roofMaterialName`) VALUES
(1, 'dachówka'),
(2, 'eternit'),
(3, 'gont'),
(4, 'blacha'),
(5, 'papa'),
(6, 'strzecha'),
(7, 'inne'),
(8, 'blacha');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `salesunit`
--

CREATE TABLE IF NOT EXISTS `salesunit` (
`id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `area` double NOT NULL,
  `noOfRooms` smallint(6) NOT NULL,
  `noOfBathrooms` smallint(6) NOT NULL,
  `isNew` tinyint(1) NOT NULL,
  `noticeTitle` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `floor` smallint(6) NOT NULL,
  `availableFrom` date NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `salesunit`
--

INSERT INTO `salesunit` (`id`, `user_id`, `site_id`, `type`, `area`, `noOfRooms`, `noOfBathrooms`, `isNew`, `noticeTitle`, `description`, `floor`, `availableFrom`, `title`) VALUES
(1, 1, 3, NULL, 110, 2, 1, 0, 'test 13.46', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 4, '2015-01-01', 'Dacia'),
(2, 1, 4, NULL, 122, 3, 1, 0, 'nowe ogłoszenie', 'ładny opis nieruchomości', 5, '2016-02-01', 'Test: mieszkanie 2');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `salesunits_medias`
--

CREATE TABLE IF NOT EXISTS `salesunits_medias` (
  `salesunit_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `securitymask`
--

CREATE TABLE IF NOT EXISTS `securitymask` (
`id` int(11) NOT NULL,
  `Otodom` int(11) NOT NULL,
  `securityName` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `securitymask`
--

INSERT INTO `securitymask` (`id`, `Otodom`, `securityName`) VALUES
(1, 0, 'rolety antyw?amaniowe'),
(2, 1, 'drzwi/ okna antyw?amaniowe'),
(3, 2, 'domofon/ wideodomofon'),
(4, 3, 'monitoring/ ochrona'),
(5, 4, 'system alarmowy'),
(6, 5, 'teren zamkni?ty');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `site`
--

CREATE TABLE IF NOT EXISTS `site` (
`id` int(11) NOT NULL,
  `province` int(11) DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `city` longtext COLLATE utf8_unicode_ci NOT NULL,
  `quarter` longtext COLLATE utf8_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `roofMaterial` longtext COLLATE utf8_unicode_ci NOT NULL,
  `buildingMaterial` longtext COLLATE utf8_unicode_ci NOT NULL,
  `locationOtodom` int(11) DEFAULT NULL,
  `categoryOtodom` int(11) DEFAULT NULL,
  `siteName` longtext COLLATE utf8_unicode_ci NOT NULL,
  `street` longtext COLLATE utf8_unicode_ci NOT NULL,
  `constructionYear` int(11) NOT NULL,
  `heating` int(11) DEFAULT NULL,
  `fence` int(11) DEFAULT NULL,
  `numberOfFloors` int(11) DEFAULT NULL,
  `country` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `site`
--

INSERT INTO `site` (`id`, `province`, `district`, `city`, `quarter`, `latitude`, `longitude`, `roofMaterial`, `buildingMaterial`, `locationOtodom`, `categoryOtodom`, `siteName`, `street`, `constructionYear`, `heating`, `fence`, `numberOfFloors`, `country`) VALUES
(1, 1, NULL, 'Swarzędz', 'Nowa Wieś', 1, 2, '3', '3', NULL, NULL, 'Lokalizacja', 'Parkowa 4', 6, NULL, NULL, 4, 1),
(2, 1, NULL, 'Poznań', 'Nowe Miasto', 0, 0, '1', '3', NULL, NULL, 'Zalasewo', 'Nowa 4', 2015, NULL, NULL, 4, 160),
(3, 1, NULL, 'Swarzędz', 'N', 0, 0, '1', '4', NULL, NULL, 'Test 12.55', 'testowa', 2000, NULL, NULL, 1, 160),
(4, 1, NULL, 'Swarzędz', 'Nowa Wieś', 0, 0, '1', '4', NULL, NULL, 'Test 13.07', 'Prosta', 1999, NULL, NULL, 1, 160);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sites_extras`
--

CREATE TABLE IF NOT EXISTS `sites_extras` (
  `extras_id` int(11) NOT NULL,
  `salesUnit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sites_medias`
--

CREATE TABLE IF NOT EXISTS `sites_medias` (
  `site_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sites_securities`
--

CREATE TABLE IF NOT EXISTS `sites_securities` (
  `site_id` int(11) NOT NULL,
  `security_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `type`
--

CREATE TABLE IF NOT EXISTS `type` (
`id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nameOtodom` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nameDomiporta` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `userName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `licence` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `userName`, `phone`, `email`, `licence`) VALUES
(1, 'Marek Mikusek', '600/075041', 'marek@thtg.pl', '11111122'),
(2, 'Jan Kowalski', '600/075041', 'jan@thtg.pl', '111111');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `buildingmaterial`
--
ALTER TABLE `buildingmaterial`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buildingtype`
--
ALTER TABLE `buildingtype`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoryotodom`
--
ALTER TABLE `categoryotodom`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extras`
--
ALTER TABLE `extras`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fence`
--
ALTER TABLE `fence`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floor`
--
ALTER TABLE `floor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heating`
--
ALTER TABLE `heating`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locationotodom`
--
ALTER TABLE `locationotodom`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mediamask`
--
ALTER TABLE `mediamask`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mediasalesunit`
--
ALTER TABLE `mediasalesunit`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mediasite`
--
ALTER TABLE `mediasite`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roofmaterial`
--
ALTER TABLE `roofmaterial`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesunit`
--
ALTER TABLE `salesunit`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_4607972EA76ED395` (`user_id`), ADD KEY `IDX_4607972EF6BD1646` (`site_id`), ADD KEY `IDX_4607972E8CDE5729` (`type`);

--
-- Indexes for table `salesunits_medias`
--
ALTER TABLE `salesunits_medias`
 ADD PRIMARY KEY (`salesunit_id`,`media_id`), ADD KEY `IDX_BC792E3237AC586` (`salesunit_id`), ADD KEY `IDX_BC792E3EA9FDD75` (`media_id`);

--
-- Indexes for table `securitymask`
--
ALTER TABLE `securitymask`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_C971A6DA4ADAD40B` (`province`), ADD KEY `IDX_C971A6DA42071888` (`locationOtodom`), ADD KEY `IDX_C971A6DADC6812E4` (`categoryOtodom`), ADD KEY `IDX_C971A6DA52AD685E` (`heating`), ADD KEY `IDX_C971A6DAEDE93958` (`fence`), ADD KEY `IDX_C971A6DA31C15487` (`district`), ADD KEY `IDX_C971A6DAF2B8098` (`numberOfFloors`), ADD KEY `IDX_C971A6DA5373C966` (`country`);

--
-- Indexes for table `sites_extras`
--
ALTER TABLE `sites_extras`
 ADD PRIMARY KEY (`salesUnit_id`,`extras_id`), ADD KEY `IDX_8AD51780ECC7FC1A` (`salesUnit_id`), ADD KEY `IDX_8AD51780955D4F3F` (`extras_id`);

--
-- Indexes for table `sites_medias`
--
ALTER TABLE `sites_medias`
 ADD PRIMARY KEY (`site_id`,`media_id`), ADD KEY `IDX_BE9CDDD0F6BD1646` (`site_id`), ADD KEY `IDX_BE9CDDD0EA9FDD75` (`media_id`);

--
-- Indexes for table `sites_securities`
--
ALTER TABLE `sites_securities`
 ADD PRIMARY KEY (`site_id`,`security_id`), ADD KEY `IDX_3D7F5295F6BD1646` (`site_id`), ADD KEY `IDX_3D7F52956DBE4214` (`security_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `buildingmaterial`
--
ALTER TABLE `buildingmaterial`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT dla tabeli `buildingtype`
--
ALTER TABLE `buildingtype`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `categoryotodom`
--
ALTER TABLE `categoryotodom`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `country`
--
ALTER TABLE `country`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=248;
--
-- AUTO_INCREMENT dla tabeli `district`
--
ALTER TABLE `district`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=381;
--
-- AUTO_INCREMENT dla tabeli `extras`
--
ALTER TABLE `extras`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT dla tabeli `fence`
--
ALTER TABLE `fence`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `floor`
--
ALTER TABLE `floor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT dla tabeli `heating`
--
ALTER TABLE `heating`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT dla tabeli `locationotodom`
--
ALTER TABLE `locationotodom`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `mediamask`
--
ALTER TABLE `mediamask`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `mediasalesunit`
--
ALTER TABLE `mediasalesunit`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `mediasite`
--
ALTER TABLE `mediasite`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `notice`
--
ALTER TABLE `notice`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `province`
--
ALTER TABLE `province`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `roofmaterial`
--
ALTER TABLE `roofmaterial`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT dla tabeli `salesunit`
--
ALTER TABLE `salesunit`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `securitymask`
--
ALTER TABLE `securitymask`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `site`
--
ALTER TABLE `site`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `type`
--
ALTER TABLE `type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `salesunit`
--
ALTER TABLE `salesunit`
ADD CONSTRAINT `FK_4607972E8CDE5729` FOREIGN KEY (`type`) REFERENCES `type` (`id`),
ADD CONSTRAINT `FK_4607972EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
ADD CONSTRAINT `FK_4607972EF6BD1646` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`);

--
-- Ograniczenia dla tabeli `salesunits_medias`
--
ALTER TABLE `salesunits_medias`
ADD CONSTRAINT `FK_BC792E3237AC586` FOREIGN KEY (`salesunit_id`) REFERENCES `salesunit` (`id`),
ADD CONSTRAINT `FK_BC792E3EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `mediasalesunit` (`id`);

--
-- Ograniczenia dla tabeli `site`
--
ALTER TABLE `site`
ADD CONSTRAINT `FK_C971A6DA31C15487` FOREIGN KEY (`district`) REFERENCES `district` (`id`),
ADD CONSTRAINT `FK_C971A6DA42071888` FOREIGN KEY (`locationOtodom`) REFERENCES `locationotodom` (`id`),
ADD CONSTRAINT `FK_C971A6DA4ADAD40B` FOREIGN KEY (`province`) REFERENCES `province` (`id`),
ADD CONSTRAINT `FK_C971A6DA52AD685E` FOREIGN KEY (`heating`) REFERENCES `heating` (`id`),
ADD CONSTRAINT `FK_C971A6DA5373C966` FOREIGN KEY (`country`) REFERENCES `country` (`id`),
ADD CONSTRAINT `FK_C971A6DADC6812E4` FOREIGN KEY (`categoryOtodom`) REFERENCES `categoryotodom` (`id`),
ADD CONSTRAINT `FK_C971A6DAEDE93958` FOREIGN KEY (`fence`) REFERENCES `fence` (`id`),
ADD CONSTRAINT `FK_C971A6DAF2B8098` FOREIGN KEY (`numberOfFloors`) REFERENCES `floor` (`id`);

--
-- Ograniczenia dla tabeli `sites_extras`
--
ALTER TABLE `sites_extras`
ADD CONSTRAINT `FK_8AD51780955D4F3F` FOREIGN KEY (`extras_id`) REFERENCES `extras` (`id`),
ADD CONSTRAINT `FK_8AD51780ECC7FC1A` FOREIGN KEY (`salesUnit_id`) REFERENCES `salesunit` (`id`);

--
-- Ograniczenia dla tabeli `sites_medias`
--
ALTER TABLE `sites_medias`
ADD CONSTRAINT `FK_BE9CDDD0EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `mediasite` (`id`),
ADD CONSTRAINT `FK_BE9CDDD0F6BD1646` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`);

--
-- Ograniczenia dla tabeli `sites_securities`
--
ALTER TABLE `sites_securities`
ADD CONSTRAINT `FK_3D7F52956DBE4214` FOREIGN KEY (`security_id`) REFERENCES `securitymask` (`id`),
ADD CONSTRAINT `FK_3D7F5295F6BD1646` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
