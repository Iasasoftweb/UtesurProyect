-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-06-2022 a las 18:15:58
-- Versión del servidor: 5.7.37
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rootesur_DB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombrebanner` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'SI',
  `imagen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `posicion` int(11) DEFAULT NULL,
  `links` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`id`, `nombrebanner`, `estado`, `imagen`, `created_at`, `updated_at`, `posicion`, `links`) VALUES
(1, 'reinscripcion', 'SI', 'banner1.jpg', NULL, NULL, 1, ''),
(2, 'educacion', 'SI', 'banner2.jpeg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bonoestudios`
--

CREATE TABLE `bonoestudios` (
  `MATRICULA` varchar(9) CHARACTER SET utf16 COLLATE utf16_spanish_ci DEFAULT NULL,
  `NOMBRES` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish_ci DEFAULT NULL,
  `CEDULA` varchar(15) CHARACTER SET utf16 COLLATE utf16_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Volcado de datos para la tabla `bonoestudios`
--

INSERT INTO `bonoestudios` (`MATRICULA`, `NOMBRES`, `CEDULA`) VALUES
('2018-0002', 'STEPHANY PEREZ', '40212801704'),
('2018-0004', 'MARIANNY CESPEDES', '01000969459'),
('2018-0005', 'YENDYS ALEXIANNA FELIZ', '01800660852'),
('2018-0014', 'ORIANA CLARIBEL MATOS', '40228081580'),
('2018-0024', 'JORDANIS GERALDO', '40239742246'),
('2018-0036', 'ANA ANTONIA TEJEDA', '40209404033'),
('2018-0040', 'YUSERGI PAOLA LOPEZ', '40213131572'),
('2018-0045', 'GRACIELA DE LEON', '01000842110'),
('2018-0056', 'SORILEIDY VALENZUELA', '40215329463'),
('2018-0057', 'MARLENY DE LEON', '40212029587'),
('2018-0058', 'WANDY MADELEY DIAZ', '01001079068'),
('2018-0069', 'IBELKA PEREZ', '40213513167'),
('2018-0071', 'ANNLLY PAOLA FELIZ', '40241403597'),
('2018-0079', 'YUDERKAGUZMAN', '40214243616'),
('2018-0088', 'ROSA MARIA DE LA CRUZ', '01001156163'),
('2018-0095', 'CRISELDA FELIZ', '01000969038'),
('2018-0106', 'JENNY ESTHER TAPIA', '40227705163'),
('2018-0108', 'YILDA MARIA CABRERA', '15400020192'),
('2018-0108', 'CHARINA DE LA CRUZ', '40238929240'),
('2018-0116', 'MILIANNY RAMIREZ', '40234061915'),
('2018-0118', 'DIANA CAROLINA REYES', '01001174026'),
('2018-0129', 'ESMALIN CESARINADIAZ', '40238194548'),
('2018-0137', 'CRUZ YOMAIRA SANCHEZ', '00116978859'),
('2018-0140', 'SCARLIN MARGARITA MATOS', '01001136058'),
('2018-0142', 'DORELIS MACIEL CUEVAS', '40215161247'),
('2018-0147', 'PELLERANO SANCHEZ', '40237764457'),
('2018-0153', 'ENMANUEL AURELIO VENEGAS', '40236529745'),
('2018-0154', 'GIRALDIN BELTRE', '40227360472'),
('2018-0170', 'LERINSON RAMIREZ', '40228223117'),
('2018-0174', 'YONATTAN DE LOS SANTOS', '10900073718'),
('2018-0186', 'RUD ESTHER ESCALANTE', '01001044781'),
('2018-0187', 'LINDOWER MIKEL DE LA PAZ', '40214163988'),
('2018-0191', 'CARLOS MANUEL RAMIREZ', '01001136199'),
('2018-0193', 'RAFAEL ANDRES RAMIREZ', '40236491185'),
('2018-0195', 'JOSE ARMANDO ABREU', '40213388289'),
('2018-0203', 'JUNIOR MICHAEL DEL JESUS', '40225771993'),
('2018-0215', 'AMBAR NICELCRIS BARCENA', '40213246347'),
('2018-0221', 'SUJENDI MARIA MATOS', '40240170601'),
('2018-0239', 'DANIEL GERALDO', '40215207537'),
('2018-0245', 'JEFERSON LISANDRO LOUIS', '40235485113'),
('2018-0260', 'WANDA DE LEON', '40235715105'),
('2018-0262', 'KARINA GONZALEZ', '40237905258'),
('2018-0285', 'DIANA ODALINA PUJOLS', '40242146856'),
('2018-0289', 'JOSE LUIS SISA', '40214079804'),
('2018-0297', 'CATHERINE ARLET LEBRON', '40226636401'),
('2018-0301', 'JENIFER STEPHANIASANTANA', '01001112125'),
('2018-0303', 'YACAIRA ELIZABETHREYES', '01000916674'),
('2018-0307', 'ARIELDE LA PAZ', '01001144433'),
('2018-0315', 'JOHAN DE JESUSJIMENEZ', '40227568892'),
('2018-0325', 'MELIZADE LOS SANTOS', '40240161501'),
('2018-0339', 'MICELISVARGAS', '40210439150'),
('2018-0361', 'FRANCIS ADALGISADE LA ROSA', '40223681798'),
('2018-0367', 'MARISOLMORILLO', '10500001333'),
('2018-0368', 'LUIS ALBERTOMENDEZ', '40236212441'),
('2018-0369', 'CRISTINADE OLEO', '01001138518'),
('2018-0370', 'NEYDY JOSEFINAGALAN', '01001177706'),
('2018-0372', 'DAMILSYCORCINO', '01001190162'),
('2018-0374', 'FRANCISCOBRIOSO', '01000960078'),
('2018-0375', 'CLARIBELROSARIO', '10500002216'),
('2018-0378', 'MARGARITARAMIREZ', '40223636214'),
('2018-0379', 'EVANGELINALEBRON', '00119190270'),
('2018-0381', 'CORPUS DEL JESUSBELTRE', '01050000548'),
('2018-0386', 'YANDERYS FATIMASRAMIREZ', '40222200699'),
('2018-0393', 'ARIOTYALCANTARA', '10500001820'),
('2018-0398', 'RUDDY ESTANLEYFAMILIA', '40208877338'),
('2018-0399', 'HORALISHERRERA', '01700085549'),
('2018-0400', 'INEIDA JOCKANNYDIAZ', '010600075963'),
('2018-0403', 'MAXIMOS STAWALROMERO', '01700225459'),
('2018-0407', 'LOISY CRIS CONTRERAS', '40239325570'),
('2018-0408', 'YILDA LEMOS', '40208959219'),
('2018-0413', 'ARISONNY VARGAS', '40213907351'),
('2018-0414', 'ADAISY MARIELYS MOJICA', '40212360677'),
('2018-0423', 'ANICELYS DE LEON', '40209867932'),
('2018-0430', 'DAYANA LISSELOTT VILLAR', '01001173697'),
('2018-0439', 'ALEJANDRA MELISSA GARCIA', '40237908302'),
('2018-0442', 'DARILYN SORIANO', '40221600121'),
('2018-0444', 'ANGELADEL ROSARIO', '40227026313'),
('2018-0451', 'MARIA FERNANDA PINEDA', '40213869304'),
('2018-0460', 'ROSELINA REYES', '40210258071'),
('2018-0461', 'JUAN LUIS DE LA CRUZ', '40221511823'),
('2018-0463', 'GLORIA GABRIELA PEREZ', '40222120145'),
('2018-0464', 'KAROLAN NAZARET ANDUJAR', '40239089838'),
('2018-0466', 'MANUELA GREDILEYCI REYES', '40237644634'),
('2018-0468', 'MANUEL RAMON PEREZ', '01001009529'),
('2018-0470', 'MARIA ELENA MELENDEZ', '40238631747'),
('2018-0473', 'JHOHANDY BRITO', '40215407962'),
('2018-0474', 'RONNY JEIFRY ALCANTARA', '40235720345'),
('2018-0482', 'EVANGELINA VARGAS', '40220105726'),
('2018-0490', 'STEPHANI ENCARNACION', '40241186077'),
('2018-0494', 'ANA GLORIBEL VELOZ', '12500044511'),
('2018-0497', 'NERSY AGRAMONTES', '01001157146'),
('2018-0501', 'RUTH FERRERAS', '10700010365'),
('2018-0502', 'JEIDY VALDEZ', '01001192630'),
('2018-0503', 'MAYELIN MIGUELINA ALVINO', '01001132453'),
('2018-0507', 'MANUEL FELIZ', '01001094323'),
('2018-0510', 'JHOEL ADRIAN JIMENEZ', '40223977642'),
('2018-0511', 'OSCAR ADRIAN JIMENEZ', '01001159522'),
('2018-0513', 'SHELSIE ANA YRIS LORENZO', '40209568506'),
('2018-0514', 'ROSSI SELA DIAZ', '40239596741'),
('2018-0517', 'ANA DE LA CRUZ DE LA CRUZ', '01700269267'),
('2018-0519', 'INOELIA FURCA', '01700255407'),
('2018-0521', 'DIGNORA RAMIREZ', '40221530799'),
('2018-0522', 'URSULA EDECIAVICENTE', '01700203142'),
('2018-0528', 'FELIBERTOMORILLO', '01700194382'),
('2018-0530', 'LUISANDY ARIAS', '10500005581'),
('2018-0534', 'PACIANO SEGURA', '10500000582'),
('2018-0535', 'JOSE JAVIER BELTRE', '40214040111'),
('2018-0548', 'JIRBERTO ENRIQUE DE LEON', '40235364714'),
('2018-0551', 'DANIELA VARGAS SANTANA', '40225685391'),
('2018-0556', 'YENCIS DAURIS VICENTE', '12500011874'),
('2018-0559', 'FERNANDOBELTRE', '01700268830'),
('2018-0567', 'NURYS VARGAS', '07900055968'),
('2018-0578', 'JOSE ISMAEL HERRERA', '40236209348'),
('2018-0589', 'LISBANIA MENDEZ', '40209244199'),
('2018-0595', 'DANIEL EMILIO AGRAMONTE', '40213690908'),
('2018-0599', 'JOSE ANTONIO MENDEZ', '40237019332'),
('2018-0603', 'KATHERINE BELTRE', '01001212115'),
('2018-0614', 'MARIA LAURAMONTILLA', '01001202314'),
('2018-0625', 'MELINAPANIAGUA', '40241844295'),
('2018-0626', 'LUIS  GUILLERMOLEBRON', '01700251265'),
('2018-0627', 'YAJAIRA MIGUELINAMATOS', '01001148632'),
('2018-0629', 'FRANNOLYGALVAN', '01700255498'),
('2018-0630', 'RAQUELGARABITO', '40223925443'),
('2018-0634', 'RAYCIS YASELMARRERO', '15400014211'),
('2018-0644', 'TEANNY VARGAS', '40209325139'),
('2018-0646', 'ANAIKA REYES', '40208754016'),
('2018-0647', 'LISA MELIA CUEVAS', '40238296103'),
('2018-0655', 'LAURA LISSETT NOVA', '40235806532'),
('2018-0656', 'YANERYSAMATEO', '40241004809'),
('2018-0658', 'MAYELINGUZMAN', '12500039289'),
('2018-0663', 'JUANA FRANCISCA GERALDO', '40240008934'),
('2018-0676', 'IRAS IVETTE URRACA', '40222507218'),
('2018-0685', 'MIGUEL ANGEL MINYETTY', '01000712271'),
('2018-0687', 'IVELISSE GARCIA', '01000925600'),
('2018-0688', 'DANIELA RAMIREZ', '40200386015'),
('2018-0696', 'MIRLA GREGORINA MONTERO', '40236931552'),
('2018-0700', 'MIRELLA CUEVAS', '40228363129'),
('2018-0713', 'MASSIEL RODRIGUEZ', '40211237777'),
('2018-0714', 'MARITZA RODRIGUEZ', '01700265000'),
('2018-0716', 'CAROLIN MONTILLA', '01001201845'),
('2018-0727', 'CARMEN  LEIDY MORILLO', '40236905457'),
('2018-0728', 'YUDERKY GUANCE', '40222381267'),
('2018-0734', 'AMBAR YINESKA TAPIA', '40211051939'),
('2018-0737', 'DALIS GELINSON AGRAMONTE', '40212470997'),
('2018-0741', 'DANIEL RODRIGUEZ', '10500005052'),
('2018-0742', 'FRANDI TAVERAS', '40242786859'),
('2018-0744', 'PEDRO JULIO VICENTE', '01700263641'),
('2018-0745', 'MARLENE SANCHEZ', '10900089136'),
('2018-0747', 'JANCER ROSADO', '40212499954'),
('2018-0753', 'JOSE AMAURIS ARIAS', '40214315612'),
('2018-0770', 'OSVALDO PATRICIO', '40236313223'),
('2018-0782', 'YODENNYS FULCAR', '40235835929'),
('2018-0803', 'YDAISI YANUARIS FERRERAS', '40221434661'),
('2018-0810', 'NAYROBI MELO', '40239748730'),
('2018-0823', 'MIGUEL ANGEL VALENZUELA', '01001186129'),
('2018-0832', 'MARIELA ENCARNACION', '01001066487'),
('2018-0847', 'FATIMA SANTANA', '40215268349'),
('2018-0852', 'ANGELA CRISMEIRYS PINEDA', '01001202439'),
('2018-0856', 'SOBEYDA FULCAR', '40235873318'),
('2018-0893', 'LUIS ENRIQUE DE LOS SANTOS', '01000126191'),
('2018-0895', 'YULEIKA PUJOLS', '40242044572'),
('2018-0933', 'AGUEDA BELTRE', '01000768125'),
('2019-0022', 'MARIA REMEDIO RAMIREZ', '40213566843'),
('2019-0032', 'CARLA HINDIRA PEREZ', '40209430871'),
('2019-0034', 'SIFREISI RAMIREZ', '40234944607'),
('2019-0042', 'JOHANNA GUZMAN', '40232751459'),
('2019-0053', 'ANA VIRGINIA DE LA PAZ', '40234157895'),
('2019-0059', 'MIQUELIS LEDESMA', '22400508085'),
('2019-0063', 'EDALISAFIGUEREO', '40215134707'),
('2019-0070', 'DAYANARA CABRAL', '01001090099'),
('2019-0072', 'YAJAIRA MARGARITA PEREZ', '01001172202'),
('2019-0076', 'ELAINY MATOS', '01001191541'),
('2019-0096', 'YORDY ALEJANDRO DE LA CRUZ', '01001193190'),
('2019-0107', 'KEIDY ISAMAR RAMIREZ', '40233930714'),
('2019-0110', 'ALEJANDRA DISMEILYN FELIZ', '40214037505'),
('2019-0114', 'ESTEFANY ESTHER PEGUERO', '40228451007'),
('2019-0121', 'ANA RAFAELINAGUZMAN', '40212640821'),
('2019-0122', 'ALENNY ENCARNACION', '40215627411'),
('2019-0124', 'ANGELA MARIELABRITO', '40222072809'),
('2019-0131', 'ROSA DENNYS CUEVAS', '01001013794'),
('2019-0135', 'LUIS ALBERTO FIGUEREO', '40200666796'),
('2019-0144', 'ANGEL LUIS VICENTE', '40222988772'),
('2019-0147', 'YOHAN MANUEL ADAMES', '40226639421'),
('2019-0162', 'WALKINS PIMENTEL', '40212201749'),
('2019-0169', 'LUIS ANGELBRITO', '40239401348'),
('2019-0174', 'YARIANNY SANCHEZ', '40228958175'),
('2019-0176', 'DELIVEL SOTO', '40240571303'),
('2019-0220', 'MARIA VICTORIA PEREZ', '01000920098'),
('2019-0224', 'RICARDO YUNIOR GALAN', '40215449196'),
('2019-0226', 'SALVADOR ANTONIO MONTAS', '00201305125'),
('2019-0229', 'MARIANNY SORIANO', '10600090277'),
('2019-0240', 'ARIANNI ELIZABETH CALDERON', '40212664706'),
('2019-0241', 'SOMEIRIN SIOMARA MINLLETTY', '01001109733'),
('2019-0248', 'YELISA JIMENEZ', '12600034404'),
('2019-0252', 'YAIRY ELIZABETH RAMIREZ', '40212603241'),
('2019-0267', 'FRANCHESCA NOEMI MENDEZ', '40215700440'),
('2019-0270', 'RAMON RAMIREZ', '01000037323'),
('2019-0273', 'GABRIEL DE JESUS GARCIA', '15400000145'),
('2019-0295', 'DANIELA MEDRANO', '01001201282'),
('2019-0296', 'ROSAILINVARGAS', '15400015085'),
('2019-0307', 'ESCALIN JOSEFINA PEREZ', '12600018647'),
('2019-0321', 'DANNI DARIELA DE LOS SANTOS', '01001177763'),
('2019-0324', 'KEYLA INFANTE', '40215618600'),
('2019-0325', 'JOSEFINA DE LEON', '12600026574'),
('2019-0334', 'ROBERT ADONIS FELIZ', '40213128362'),
('2019-0341', 'JULIAN FELIZ', '01001107950'),
('2019-0343', 'AMGEL LUIS FIGUEREO', '40235179492'),
('2019-0344', 'EUNICE MIGUELINA GARCIA', '40228222176'),
('2019-0345', 'PATRICK EHWING MATOS', '40231270758'),
('2019-0348', 'ALEJANDRA JOSEFINA MATOS', '40234081087'),
('2019-0371', 'ELITZA RAFAELA RODRIGUEZ', '10600090640'),
('2019-0380', 'IDELSA CAROLINA MARTINEZ', '40214976108'),
('2019-0383', 'DAYRA CESPEDES', '12600018605'),
('2019-0404', 'GREGORY NOVA', '40212885905'),
('2019-0405', 'MAIKA JAVIELINA NAUT', '01001153228'),
('2019-0406', 'ANA MARY DIAZ', '40242674410'),
('2019-0413', 'REYSI TIFANNY MATOS', '01001158839'),
('2019-0429', 'ROSA MARIAFELIZ', '01001067188'),
('2019-0433', 'CESARINA MILAGROSDIAZ', '01000940617'),
('2019-0453', 'CESARINA MESA', '40214488203'),
('2019-0459', 'CRISTHOPHER ANTONIO BELTRE', '40240015368'),
('2019-0467', 'VERONA ROMERO', '40215828175'),
('2019-0470', 'YISEL RODRIGUEZ', '12600001510'),
('2019-0471', 'RAQUEL RAMIREZ', '40240705141'),
('2019-0472', 'UNISE ELIZABETH MANCEBO', '40225975495'),
('2019-0484', 'FABIOLA PEREZ', '01001123486'),
('2019-0490', 'JOSE REYES', '01001049426'),
('2019-0506', 'SONIA RAMIREZ', '01000935138'),
('2019-0525', 'ROXANNA MATEO', '00115692311'),
('2019-0526', 'FIOR YANELYS DE LA CRUZ', '07900000360'),
('2019-0533', 'RUBENNY EMILIAN GONZALEZ', '40228272122'),
('2019-0543', 'ANA JOSELINA ANDUJAR', '01001095783'),
('2019-0546', 'ELAYNE MARALDA ENCARNACION', '40243016553'),
('2019-0554', 'SANITA VARGAS', '15400007132'),
('2019-0573', 'ERIKA CLARIBEL MINYETY', '40237336793'),
('2019-0592', 'ROSA GISBEL MENDEZ', '40228188039'),
('2019-0594', 'GUILLERMO AYBAR', '40234985790'),
('2019-0600', 'MIGUEL GARCIA', '05300472999'),
('2019-0609', 'REINIER RODRIGUEZ', '40234925515'),
('2019-0623', 'DIOMEDES ALEXIS SORIANO', '40212766253'),
('2019-0669', 'JEFRI ANTONIO ENCARNACION', '40209467964'),
('2019-0680', 'MARIA DEL CARMEN VICENTE', '01700214131'),
('2019-0683', 'EURI FERNANDA REYES', '12600001171'),
('2020-0006', 'ZULLY YOSELIN MONTERO', '40222762235'),
('2020-0014', 'MADELIN PEREZ', '01001183886'),
('2020-0015', 'ADRIANA CRISTINAVALDEZ', '40234148217'),
('2020-0021', 'WENDY MONTERO', '01001203189'),
('2020-0028', 'FRANCIA RAMIREZ', '40212281774'),
('2020-0031', 'YARISEL VARGAS', '15400008080'),
('2020-0035', 'ANTONIA VAZQUEZ', '15400003453'),
('2020-0039', 'DAULIFERRERAS', '01001151248'),
('2020-0042', 'FRANCISCA VARGAS', '15400011191'),
('2020-0049', 'YARIBELSANTANA', '40240637666'),
('2020-0059', 'BRANYELINA ALTAGRACIA RAMIREZ', '40201056864'),
('2020-0061', 'BRENDA ANTONIA PEREZ', '40234065940'),
('2020-0064', 'BRENDY BERSANIA LEMOS', '40211724345'),
('2020-0065', 'GENESIS DEYARINRAMIREZ', '01001124195'),
('2020-0083', 'DELYS  MABELRAMIREZ', '40215712122'),
('2020-0094', 'JESUS FERNANDO MONTERO', '40213853654'),
('2020-0097', 'WANER ORTIZ', '40215415346'),
('2020-0098', 'AIDA LUZ GIL', '40225150966'),
('2020-0107', 'NAURU AGUSTINPUJOLS', '40209052113'),
('2020-0211', 'DIANNY TIFANI REYES', '01000918019'),
('2020-0213', 'MADELIN ENCARNACION', '40235361090'),
('2020-0214', 'YHOHANNA ALEXANDRA DIAZ', '01001166428'),
('2020-0216', 'DARIANA RAMIREZ', '40240261434'),
('2020-0222', 'GENOVA FARAELA MATOS', '01001103074'),
('2020-0227', 'RUTH DEL CARMEN FELIZ', '40213361658'),
('2020-0228', 'DAUCENI GARCIA', '40212788661'),
('2020-0229', 'MARIA OVIDIA GONZALEZ', '40236355836'),
('2020-0233', 'FRAYCI LEMOS', '15400014187'),
('2020-0234', 'ENYEL RAFAEL RAMIREZ', '01001148517'),
('2020-0245', 'RUDILAINE ANGELINA MORILLO', '40239040617'),
('2020-0252', 'YORDYN ESMAILIN DIAZ', '40243181019'),
('2020-0255', 'LUIS ALFREDO BELTRE', '40214584936'),
('2020-0259', 'JUANA ESTHER FABIAN', '01001118866'),
('2020-0260', 'JULIO CESAR ORTIZ', '01700266594'),
('2020-0296', 'JORGE EMMANUEL VICENTE', '40211448200'),
('2020-0313', 'JUAN ALEXANDER PEREZ', '40209475850'),
('2020-0330', 'KATERY MAURELISRODRIGUEZ', '10700018384'),
('2020-0334', 'RAYMUNDO ALEXIS PAULA', '40213452309'),
('2020-0359', 'JHASSELISMORA', '40228225740'),
('2020-0391', 'MANUELAGARCIA', '40212089383'),
('2020-0400', 'SIGFREDO MATOS', '40220894469'),
('2020-0416', 'PEDRO AMBIORIX FELIZ', '40200429559'),
('2020-0441', 'ONERISONBELTRE', '40235817224'),
('2020-0442', 'EDUARDO GILMATOS', '40233449657'),
('2020-0457', 'YAQUELIN YAJAIRADIAZ', '40241345582'),
('2020-0502', 'PAULA RAQUELBELTRE', '40237419979'),
('2020-0508', 'ANGELICA CESARINABATISTA', '40208754529');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendarioacademico`
--

CREATE TABLE `calendarioacademico` (
  `id` int(11) NOT NULL,
  `cuatrimestre` varchar(15) NOT NULL,
  `tdia` int(11) NOT NULL,
  `tmes` varchar(12) NOT NULL,
  `tano` int(11) NOT NULL,
  `actividad` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario_reinscripcion`
--

CREATE TABLE `calendario_reinscripcion` (
  `id` int(11) NOT NULL,
  `cuatrimestre` varchar(15) NOT NULL,
  `tdia` int(11) NOT NULL,
  `tmes` varchar(12) NOT NULL,
  `tano` int(11) NOT NULL,
  `actividad` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carreras` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'activo',
  `pdf_pensum_01` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf_pensum02` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_credito` int(11) NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dir` int(11) NOT NULL,
  `duracion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fimagen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen_top` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `carreras`, `estatus`, `pdf_pensum_01`, `pdf_pensum02`, `t_credito`, `descripcion`, `id_dir`, `duracion`, `fimagen`, `imagen_top`, `created_at`, `updated_at`) VALUES
(11, 'INFORMATICA', 'activo', '', '', 255, '', 1, '', '', '', NULL, NULL),
(12, 'ENFERMERIA', 'activo', '', '', 255, '', 1, '', '', '', NULL, NULL),
(13, 'AGRONOMIA', 'activo', '', '', 255, '', 1, '', '', '', NULL, NULL),
(14, 'ADMINISTRACION DE EMPRESAS', 'activo', '', '', 255, '', 1, '', '', '', NULL, NULL),
(15, 'BIOANALISIS', 'activo', '', '', 255, '', 1, '', '', '', NULL, NULL),
(16, 'DERECHO', 'activo', '', '', 255, '', 1, '', '', '', NULL, NULL),
(17, 'CONTABILIDAD', 'activo', '', '', 255, '', 1, '', '', '', NULL, NULL),
(18, 'MERCADEO', 'activo', '', '', 255, '', 1, '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_20_120857_create_usuario_table', 1),
(4, '2019_12_20_123436_create_banner_table', 1),
(5, '2019_12_20_124548_create_noticia_table', 1),
(6, '2019_12_20_151431_create_ncategorias_table', 1),
(7, '2019_12_20_152502_create_noticias_table', 1),
(8, '2019_12_20_152941_create_carreras_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ncategorias`
--

CREATE TABLE `ncategorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Activo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ncategorias`
--

INSERT INTO `ncategorias` (`id`, `descripcion`, `estatus`, `created_at`, `updated_at`) VALUES
(1, 'TOP', 'Activo', NULL, NULL),
(2, 'NOTICIAS', 'Activo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorias_id` bigint(20) UNSIGNED NOT NULL,
  `estatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'activo',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `imagen`, `categorias_id`, `estatus`, `slug`, `created_at`, `updated_at`) VALUES
(1, '-UTESUR-, da apertura al proceso de Evaluación Quinquenal 2019-2024.', 'El ministro de Educación Superior, Ciencia y Tecnología – MESCYT- Dr. Franklin García Fermín,  hizo una visita a la Universidad Tecnológica del Sur –UTESUR- por instrucciones del Presidente de la República Luis Abinader para conocer la realidad de esta institución, principalmente de sus estudiantes,  en medio de la pandemia del coronavirus COVID-19 que afecta a todo el país.\\r\\nEl Dr. García Fermín, expresó que el ministerio que dirige se está reuniendo con directivos de las asociaciones de Universidades ADOU y ADRU y están llegando a acuerdos para beneficiar con bonos a estudiantes que han desertado por situación económica durante este periodo de emergencia sanitaria. Además, anunció el aumento de las becas que ofrece el gobierno para beneficiar a los estudiantes más desfavorecidos de la región.\\r\\nEn el acto realizado tomaron la palabra el presidente del Consejo de Directores, Ricardo Vílchez Chevalier, el rector Virgilio López Féliz, la vicerrectora Mtra. María del Rosario Melo de Jiménez y el ministro del MESCYT, Dr. Franklin García Fermín, al cual junto a su comitiva fueron declarados como huéspedes distinguidos.\\r\\nDentro de las personalidades participantes en la actividad, figuraron: la Gobernadora Civil de la Provincia de Azua, periodista Ángela Pérez Díaz; la Dra. Lía Díaz de Díaz, senadora y su esposo el exsenador Dr. César Augusto Díaz Filpo. También, el alcalde de Azua el Licdo. Ruddy González; los diputados por Azua, Dr. Carlos Ramírez y Brenda Ogando; la Dra. Fabiola Céspedes, miembro del Consejo de Directores; Otto Alexis Marte, Director provincial de INESPRE; Félix Beltré Díaz, Sub Director del INDESUR; miembros del Consejo Académico de UTESUR, funcionarios e invitados especiales.', 'noticia1.jpg', 1, 'activo', 'Con la asistencia de la mayor parte de los sectores de comunidad el Rector Ing. Virgilio López Azuán pronunció un discurso de motivación asegurando que la UTESUR ha generado importantes cambios en la presente gestión y seguirá.', '2019-12-22 13:38:35', '2019-12-22 13:38:36'),
(2, 'Dr. Franklin García Fermín, Ministro Mescyt, visita Universidad UTESUR.', 'El ministro de Educación Superior, Ciencia y Tecnología – MESCYT- Dr. Franklin García Fermín,  hizo una visita a la Universidad Tecnológica del Sur –UTESUR- por instrucciones del Presidente de la República Luis Abinader para conocer la realidad de esta institución, principalmente de sus estudiantes,  en medio de la pandemia del coronavirus COVID-19 que afecta a todo el país. \r\nEl Dr. García Fermín, expresó que el ministerio que dirige se está reuniendo con directivos de las asociaciones de Universidades ADOU y ADRU y están llegando a acuerdos para beneficiar con bonos a estudiantes que han desertado por situación económica durante este periodo de emergencia sanitaria. Además, anunció el aumento de las becas que ofrece el gobierno para beneficiar a los estudiantes más desfavorecidos de la región.\r\n\r\nEn el acto realizado tomaron la palabra el presidente del Consejo de Directores, Ricardo Vílchez Chevalier, el rector Virgilio López Féliz, la vicerrectora Mtra. María del Rosario Melo de Jiménez y el ministro del MESCYT, Dr. Franklin García Fermín, al cual junto a su comitiva fueron declarados como huéspedes distinguidos.\r\nDentro de las personalidades participantes en la actividad, figuraron: la Gobernadora Civil de la Provincia de Azua, periodista Ángela Pérez Díaz; la Dra. Lía Díaz de Díaz, senadora y su esposo el exsenador Dr. César Augusto Díaz Filpo. También, el alcalde de Azua el Licdo. Ruddy González; los diputados por Azua, Dr. Carlos Ramírez y Brenda Ogando; la Dra. Fabiola Céspedes, miembro del Consejo de Directores; Otto Alexis Marte, Director provincial de INESPRE; Félix Beltré Díaz, Sub Director del INDESUR; miembros del Consejo Académico de UTESUR, funcionarios e invitados especiales.', 'noticia2.jpg', 1, 'activo', 'El ministro de Educación Superior, Ciencia y Tecnología – MESCYT- Dr. Franklin García Fermín,  hizo una visita a la Universidad Tecnológica del Sur –UTESUR- por instrucciones del Presidente de la República Luis Abinader ...', '2020-09-21 08:02:32', '2020-09-21 08:03:25'),
(3, '-UTESUR-, da apertura al proceso de Evaluación Quinquenal 2019-2024.', 'El ministro de Educación Superior, Ciencia y Tecnología – MESCYT- Dr. Franklin García Fermín,  hizo una visita a la Universidad Tecnológica del Sur –UTESUR- por instrucciones del Presidente de la República Luis Abinader para conocer la realidad de esta institución, principalmente de sus estudiantes,  en medio de la pandemia del coronavirus COVID-19 que afecta a todo el país. \r\nEl Dr. García Fermín, expresó que el ministerio que dirige se está reuniendo con directivos de las asociaciones de Universidades ADOU y ADRU y están llegando a acuerdos para beneficiar con bonos a estudiantes que han desertado por situación económica durante este periodo de emergencia sanitaria. Además, anunció el aumento de las becas que ofrece el gobierno para beneficiar a los estudiantes más desfavorecidos de la región.\r\n\r\nEn el acto realizado tomaron la palabra el presidente del Consejo de Directores, Ricardo Vílchez Chevalier, el rector Virgilio López Féliz, la vicerrectora Mtra. María del Rosario Melo de Jiménez y el ministro del MESCYT, Dr. Franklin García Fermín, al cual junto a su comitiva fueron declarados como huéspedes distinguidos.\r\nDentro de las personalidades participantes en la actividad, figuraron: la Gobernadora Civil de la Provincia de Azua, periodista Ángela Pérez Díaz; la Dra. Lía Díaz de Díaz, senadora y su esposo el exsenador Dr. César Augusto Díaz Filpo. También, el alcalde de Azua el Licdo. Ruddy González; los diputados por Azua, Dr. Carlos Ramírez y Brenda Ogando; la Dra. Fabiola Céspedes, miembro del Consejo de Directores; Otto Alexis Marte, Director provincial de INESPRE; Félix Beltré Díaz, Sub Director del INDESUR; miembros del Consejo Académico de UTESUR, funcionarios e invitados especiales.', 'noticia3.jpg', 1, 'activo', 'El ministro de Educación Superior, Ciencia y Tecnología – MESCYT- Dr. Franklin García Fermín,  hizo una visita a la Universidad Tecnológica del Sur –UTESUR- por instrucciones del Presidente de la República Luis Abinader ...', '2022-04-08 02:46:16', '2022-04-15 02:46:16'),
(4, '-UTESUR-, da apertura al proceso de Evaluación Quinquenal 2019-2024.', 'El ministro de Educación Superior, Ciencia y Tecnología – MESCYT- Dr. Franklin García Fermín,  hizo una visita a la Universidad Tecnológica del Sur –UTESUR- por instrucciones del Presidente de la República Luis Abinader para conocer la realidad de esta institución, principalmente de sus estudiantes,  en medio de la pandemia del coronavirus COVID-19 que afecta a todo el país. \r\nEl Dr. García Fermín, expresó que el ministerio que dirige se está reuniendo con directivos de las asociaciones de Universidades ADOU y ADRU y están llegando a acuerdos para beneficiar con bonos a estudiantes que han desertado por situación económica durante este periodo de emergencia sanitaria. Además, anunció el aumento de las becas que ofrece el gobierno para beneficiar a los estudiantes más desfavorecidos de la región.\r\n\r\nEn el acto realizado tomaron la palabra el presidente del Consejo de Directores, Ricardo Vílchez Chevalier, el rector Virgilio López Féliz, la vicerrectora Mtra. María del Rosario Melo de Jiménez y el ministro del MESCYT, Dr. Franklin García Fermín, al cual junto a su comitiva fueron declarados como huéspedes distinguidos.\r\nDentro de las personalidades participantes en la actividad, figuraron: la Gobernadora Civil de la Provincia de Azua, periodista Ángela Pérez Díaz; la Dra. Lía Díaz de Díaz, senadora y su esposo el exsenador Dr. César Augusto Díaz Filpo. También, el alcalde de Azua el Licdo. Ruddy González; los diputados por Azua, Dr. Carlos Ramírez y Brenda Ogando; la Dra. Fabiola Céspedes, miembro del Consejo de Directores; Otto Alexis Marte, Director provincial de INESPRE; Félix Beltré Díaz, Sub Director del INDESUR; miembros del Consejo Académico de UTESUR, funcionarios e invitados especiales.', 'noticia4.jpg', 1, 'activo', 'El ministro de Educación Superior, Ciencia y Tecnología – MESCYT- Dr. Franklin García Fermín,  hizo una visita a la Universidad Tecnológica del Sur –UTESUR- por instrucciones del Presidente de la República Luis Abinader ...', '2022-04-15 02:46:50', '2022-04-15 02:46:50'),
(5, '-UTESUR-, da apertura al proceso de Evaluación Quinquenal 2019-2024.', 'asdasdasdasdasd', 'noticia4.jpg', 1, 'activo', 'El ministro de Educación Superior, Ciencia y Tecnología – MESCYT- Dr. Franklin García Fermín,  hizo una visita a la Universidad Tecnológica del Sur –UTESUR- por instrucciones del Presidente de la República Luis Abinader ...', '2022-04-15 02:46:50', '2022-04-15 02:46:50'),
(6, '-UTESUR-, da apertura al proceso de Evaluación Quinquenal 2019-2024.', 'asdasdasdasdasd', 'noticia4.jpg', 1, 'activo', 'El ministro de Educación Superior, Ciencia y Tecnología – MESCYT- Dr. Franklin García Fermín,  hizo una visita a la Universidad Tecnológica del Sur –UTESUR- por instrucciones del Presidente de la República Luis Abinader ...', '2022-04-15 02:46:50', '2022-04-15 02:46:50'),
(7, '-UTESUR-, da apertura al proceso de Evaluación Quinquenal 2019-2024.', 'Con la asistencia de la mayor parte de los sectores de comunidad el Rector Ing. Virgilio López Azuán pronunció un discurso de motivación asegurando que la UTESUR ha generado importantes cambios en la presente gestión y seguirá.', 'noticia1.jpg', 1, 'activo', 'Con la asistencia de la mayor parte de los sectores de comunidad el Rector Ing. Virgilio López Azuán pronunció un discurso de motivación asegurando que la UTESUR ha generado importantes cambios en la presente gestión y seguirá.', '2019-12-22 13:38:35', '2019-12-22 13:38:36'),
(8, '-UTESUR-, da apertura al proceso de Evaluación Quinquenal 2019-2024.', 'Con la asistencia de la mayor parte de los sectores de comunidad el Rector Ing. Virgilio López Azuán pronunció un discurso de motivación asegurando que la UTESUR ha generado importantes cambios en la presente gestión y seguirá.', 'noticia1.jpg', 1, 'activo', 'Con la asistencia de la mayor parte de los sectores de comunidad el Rector Ing. Virgilio López Azuán pronunció un discurso de motivación asegurando que la UTESUR ha generado importantes cambios en la presente gestión y seguirá.', '2019-12-22 13:38:35', '2019-12-22 13:38:36'),
(9, '-UTESUR-, da apertura al proceso de Evaluación Quinquenal 2019-2024.', 'Con la asistencia de la mayor parte de los sectores de comunidad el Rector Ing. Virgilio López Azuán pronunció un discurso de motivación asegurando que la UTESUR ha generado importantes cambios en la presente gestión y seguirá.', 'noticia1.jpg', 1, 'activo', 'Con la asistencia de la mayor parte de los sectores de comunidad el Rector Ing. Virgilio López Azuán pronunció un discurso de motivación asegurando que la UTESUR ha generado importantes cambios en la presente gestión y seguirá.', '2019-12-22 13:38:35', '2019-12-22 13:38:36'),
(10, '-UTESUR-, da apertura al proceso de Evaluación Quinquenal 2019-2024.', 'Con la asistencia de la mayor parte de los sectores de comunidad el Rector Ing. Virgilio López Azuán pronunció un discurso de motivación asegurando que la UTESUR ha generado importantes cambios en la presente gestión y seguirá.', 'noticia1.jpg', 1, 'activo', 'Con la asistencia de la mayor parte de los sectores de comunidad el Rector Ing. Virgilio López Azuán pronunció un discurso de motivación asegurando que la UTESUR ha generado importantes cambios en la presente gestión y seguirá.', '2019-12-22 13:38:35', '2019-12-22 13:38:36'),
(11, '-UTESUR-, da apertura al proceso de Evaluación Quinquenal 2019-2024.', 'Con la asistencia de la mayor parte de los sectores de comunidad el Rector Ing. Virgilio López Azuán pronunció un discurso de motivación asegurando que la UTESUR ha generado importantes cambios en la presente gestión y seguirá.', 'noticia1.jpg', 1, 'activo', 'Con la asistencia de la mayor parte de los sectores de comunidad el Rector Ing. Virgilio López Azuán pronunció un discurso de motivación asegurando que la UTESUR ha generado importantes cambios en la presente gestión y seguirá.', '2019-12-22 13:38:35', '2019-12-22 13:38:36'),
(12, '-UTESUR-, da apertura al proceso de Evaluación Quinquenal 2019-2024.', 'Con la asistencia de la mayor parte de los sectores de comunidad el Rector Ing. Virgilio López Azuán pronunció un discurso de motivación asegurando que la UTESUR ha generado importantes cambios en la presente gestión y seguirá.', 'noticia1.jpg', 1, 'activo', 'Con la asistencia de la mayor parte de los sectores de comunidad el Rector Ing. Virgilio López Azuán pronunció un discurso de motivación asegurando que la UTESUR ha generado importantes cambios en la presente gestión y seguirá.', '2019-12-22 13:38:35', '2019-12-22 13:38:36'),
(13, '-UTESUR-, da apertura al proceso de Evaluación Quinquenal 2019-2024.', 'Con la asistencia de la mayor parte de los sectores de comunidad el Rector Ing. Virgilio López Azuán pronunció un discurso de motivación asegurando que la UTESUR ha generado importantes cambios en la presente gestión y seguirá.', 'noticia1.jpg', 1, 'activo', 'Con la asistencia de la mayor parte de los sectores de comunidad el Rector Ing. Virgilio López Azuán pronunció un discurso de motivación asegurando que la UTESUR ha generado importantes cambios en la presente gestión y seguirá.', '2019-12-22 13:38:35', '2019-12-22 13:38:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbdocentes`
--

CREATE TABLE `tbdocentes` (
  `id` int(11) NOT NULL,
  `imagen` varchar(250) COLLATE utf16_spanish_ci NOT NULL DEFAULT '0',
  `nombres` varchar(100) COLLATE utf16_spanish_ci NOT NULL DEFAULT '0',
  `telefono` varchar(13) COLLATE utf16_spanish_ci NOT NULL DEFAULT '0',
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calendarioacademico`
--
ALTER TABLE `calendarioacademico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calendario_reinscripcion`
--
ALTER TABLE `calendario_reinscripcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ncategorias`
--
ALTER TABLE `ncategorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ncategorias_descripcion_unique` (`descripcion`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `noticias_categorias_id_foreign` (`categorias_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tbdocentes`
--
ALTER TABLE `tbdocentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `IDX_fe0bb3f6520ee0469504521e71` (`username`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `calendarioacademico`
--
ALTER TABLE `calendarioacademico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calendario_reinscripcion`
--
ALTER TABLE `calendario_reinscripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ncategorias`
--
ALTER TABLE `ncategorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tbdocentes`
--
ALTER TABLE `tbdocentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_categorias_id_foreign` FOREIGN KEY (`categorias_id`) REFERENCES `ncategorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
