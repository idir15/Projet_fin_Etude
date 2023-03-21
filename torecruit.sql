-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 21 Mars 2023 à 10:10
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `torecruit`
--

-- --------------------------------------------------------

--
-- Structure de la table `autre_competence`
--

CREATE TABLE `autre_competence` (
  `code_competence` int(11) NOT NULL,
  `nom_competence` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `autre_competence`
--

INSERT INTO `autre_competence` (`code_competence`, `nom_competence`) VALUES
(1, 'leadership'),
(2, 'Gestion'),
(3, 'Esprit d\'équipe');

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

CREATE TABLE `candidat` (
  `id_candidat` int(11) NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `prenom` varchar(25) DEFAULT NULL,
  `date_naissance` varchar(15) DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `adresse` text,
  `num_daira` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `num_tel` varchar(15) DEFAULT NULL,
  `imagee` varchar(100) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL,
  `token` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `candidat`
--

INSERT INTO `candidat` (`id_candidat`, `nom`, `prenom`, `date_naissance`, `sexe`, `adresse`, `num_daira`, `email`, `num_tel`, `imagee`, `mdp`, `token`) VALUES
(1, 'NECHAB', 'Idir', '1996-11-19', 'male', 'DEMI', 1510, 'idir@gmail.com', '1234567890', NULL, '$2y$12$7jqFcJl3vq5RreToYZcILuC1eI0GMlqa4YY2K8Ac..ur32jIqh206', NULL),
(2, 'ferhat', 'Ferhat', '1997-03-12', 'male', 'DEMI', 1510, 'ferhat@gmail.com', '1234567898', NULL, '$2y$12$LTGxZsDGjZnCeLWC26n8qe1clSykiX20G.omy1u77SpAR1uViHp8y', NULL),
(3, 'idir', 'Idir', '1993-01-01', 'male', 'mkira', 307, 'idiridir@gmail.com', '1234567844', NULL, '$2y$12$KgEtyloutg6IAg4x08.wN.CbLz6GHdnPYp.8NmNpm9TyxNcgTFL0G', NULL),
(4, 'azwaw', 'Azwaw', '1991-11-03', 'male', 'boumahni', 1510, 'azw@gmail.Com', '1234567890', NULL, '$2y$12$RlU9i5A9mO12wKWiAiJiS.KFXJQ1BDk52Z8CRlgo/pm9aN15C.ix2', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

CREATE TABLE `candidature` (
  `id_candidat` int(11) NOT NULL,
  `code_offre` int(11) NOT NULL,
  `etat` varchar(100) DEFAULT NULL,
  `reponse` varchar(60) DEFAULT NULL,
  `date_candidature` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `candidature`
--

INSERT INTO `candidature` (`id_candidat`, `code_offre`, `etat`, `reponse`, `date_candidature`) VALUES
(1, 17, 'Conditions requises satisfaites', NULL, '2023-03-19 19:46:12'),
(3, 10, 'Manque de compétences', NULL, '2020-12-07 00:41:17');

-- --------------------------------------------------------

--
-- Structure de la table `competence_aquise`
--

CREATE TABLE `competence_aquise` (
  `id_candidat` int(11) NOT NULL,
  `code_competence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `competence_aquise`
--

INSERT INTO `competence_aquise` (`id_candidat`, `code_competence`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `competence_demandee`
--

CREATE TABLE `competence_demandee` (
  `code_offre` int(11) NOT NULL,
  `code_competence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `competence_demandee`
--

INSERT INTO `competence_demandee` (`code_offre`, `code_competence`) VALUES
(8, 1);

-- --------------------------------------------------------

--
-- Structure de la table `competence_linguistique`
--

CREATE TABLE `competence_linguistique` (
  `code_langue` varchar(5) NOT NULL,
  `nom_langue` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `competence_linguistique`
--

INSERT INTO `competence_linguistique` (`code_langue`, `nom_langue`) VALUES
('ANG', 'Anglais'),
('ARA', 'Arabe'),
('ESP', 'Espagnol'),
('FR', 'Français'),
('RUS', 'Russe');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom_prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  `messagee` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `daira`
--

CREATE TABLE `daira` (
  `num_daira` int(11) NOT NULL,
  `num_wilaya` int(11) NOT NULL,
  `nom_daira` varchar(40) NOT NULL,
  `nom_ar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `daira`
--

INSERT INTO `daira` (`num_daira`, `num_wilaya`, `nom_daira`, `nom_ar`) VALUES
(101, 1, 'Adrar', 'أدرار'),
(103, 1, 'Charouine', 'شروين'),
(104, 1, 'Reggane', 'رقان'),
(108, 1, 'Tsabit', 'تسابيت'),
(109, 1, 'Timimoun  ', 'تيميمون'),
(111, 1, 'Zaouiat Kounta', 'زاوية كنتة'),
(112, 1, 'Aoulef', 'أولف'),
(115, 1, 'Fenoughil', 'فنوغيل'),
(116, 1, 'Tinerkouk', 'تنركوك'),
(123, 1, 'Aougrout', 'أوقروت'),
(125, 1, 'Bordj Badji Mokhtar', 'برج باجي مختار'),
(201, 2, 'Chlef', 'الشلف'),
(202, 2, 'Tenes', 'تنس'),
(204, 2, 'El Karimia', 'الكريمية'),
(206, 2, 'Taougrit', 'تاوقريت'),
(207, 2, 'Beni Haoua', 'بني حواء'),
(210, 2, 'Ouled Fares', 'أولاد فارس'),
(212, 2, 'Boukadir', 'بوقادير'),
(220, 2, 'Zeboudja', 'الزبوجة'),
(222, 2, 'Abou El Hassane', 'أبو الحسن'),
(223, 2, 'El Marsa', 'المرسى'),
(229, 2, 'Oued Fodda', 'وادي الفضة'),
(230, 2, 'Ouled Ben Abdelkader', 'أولاد بن عبد القادر'),
(232, 2, 'Ain Merane', 'عين مران'),
(301, 3, 'Laghouat', 'الأغواط'),
(302, 3, 'Ksar El Hirane', 'قصر الحيران'),
(304, 3, 'Sidi Makhlouf', 'سيدي مخلوف'),
(306, 3, 'Hassi R\'mel', 'حاسي الرمل'),
(307, 3, 'Ain Madhi', 'عين ماضي'),
(310, 3, 'Gueltat Sidi Saad', 'قتلة سيدي سعيد'),
(313, 3, 'Brida', 'بريدة'),
(314, 3, 'El Ghicha', 'الغيشة'),
(319, 3, 'Aflou', 'أفلو'),
(321, 3, 'Oued Morra', 'وادي مرة'),
(401, 4, 'Oum El Bouaghi', 'أم البواقي'),
(402, 4, 'Ain Beida', 'عين البيضاء'),
(403, 4, 'Ain M\'lila', 'عين مليلة'),
(406, 4, 'Sigus', 'سيقوس'),
(408, 4, 'Ain Babouche', 'عين ببوش'),
(411, 4, 'Dhalaa', 'الضلعة'),
(412, 4, 'Ain Kercha', 'عين كرشة'),
(416, 4, 'F\'kirina', 'فكيرينة'),
(417, 4, 'Souk Naamane', 'سوق نعمان'),
(422, 4, 'Ksar Sbahi', 'قصر الصباحي'),
(424, 4, 'Meskiana', 'مسكيانة'),
(425, 4, 'Ain Fekroun', 'عين فكرون'),
(501, 5, 'Batna', 'باتنة'),
(504, 5, 'Merouana', 'مروانة'),
(505, 5, 'Seriana', 'سريانة'),
(506, 5, 'Menaa', 'منعة'),
(507, 5, 'El Madher', 'المعذر'),
(508, 5, 'Tazoult', 'تازولت'),
(509, 5, 'N\'gaous', 'نقاوس'),
(516, 5, 'Arris', 'أريس'),
(519, 5, 'Ain Djasser', 'عين جاسر'),
(529, 5, 'Seggana', 'سقانة'),
(530, 5, 'Ichemoul', 'إشمول'),
(535, 5, 'Bouzina', 'بوزينة'),
(536, 5, 'Chemora', 'الشمرة'),
(542, 5, 'Barika', 'بريكة'),
(543, 5, 'Djezzar', 'الجزار'),
(544, 5, 'Tkout', 'تكوت'),
(545, 5, 'Ain Touta', 'عين التوتة'),
(547, 5, 'Theniet El Abed', 'ثنية العابد'),
(550, 5, 'Timgad', 'تيمقاد'),
(551, 5, 'Ras El Aioun', 'رأس العيون'),
(553, 5, 'Ouled Si Slimane', 'أولاد سي سليمان'),
(601, 6, 'Bejaia', 'بجاية'),
(602, 6, 'Amizour', 'أميزور'),
(607, 6, 'Timezrit', 'تيمزريت'),
(608, 6, 'Souk El Tenine', 'سوق الإثنين'),
(611, 6, 'Tichy', 'تيشي'),
(617, 6, 'Ighil Ali', 'إغيل علي'),
(620, 6, 'Darguina', 'درقينة'),
(622, 6, 'Aokas', 'أوقاس'),
(624, 6, 'Adekar', 'أدكار'),
(625, 6, 'Akbou', 'أقبو'),
(626, 6, 'Seddouk', 'صدوق'),
(627, 6, 'Tazmalt', 'تازملت'),
(629, 6, 'Chemini', 'شميني'),
(634, 6, 'Barbacha', 'برباشة'),
(636, 6, 'Ifri Ouzellaguene', 'إفري أوزلاقن'),
(639, 6, 'Sidi Aich', 'سيدي عيش'),
(640, 6, 'El Kseur', 'القصر'),
(644, 6, 'Kherrata', 'خراطة'),
(650, 6, 'Beni Maouche', 'بني معوش'),
(701, 7, 'Biskra', 'بسكرة'),
(705, 7, 'Ouled Djellal', 'أولاد جلال'),
(708, 7, 'Sidi Khaled', 'سيدي  خالد'),
(711, 7, 'Sidi Okba', 'سيدي عقبة'),
(712, 7, 'Mechouneche', 'مشونش'),
(715, 7, 'Zeribet El Oued', 'زريبة الوادي'),
(717, 7, 'El Kantara', 'القنطرة'),
(719, 7, 'El Outaya', 'الوطاية'),
(720, 7, 'Djemorah', 'جمورة'),
(721, 7, 'Tolga', 'طولقة'),
(724, 7, 'Ourlal', 'أورلال'),
(726, 7, 'Foughala', 'فوغالة'),
(801, 8, 'Bechar', 'بشار'),
(803, 8, 'Ouled Khodeir', 'أولاد خضير'),
(806, 8, 'Lahmar', 'لحمر'),
(807, 8, 'Beni Abbes', 'بني عباس'),
(810, 8, 'Kenadsa', 'القنادسة'),
(811, 8, 'Igli', 'إقلي'),
(812, 8, 'Tabelbala', 'تبلبالة'),
(813, 8, 'Taghit', 'تاغيت'),
(814, 8, 'El Ouata', 'الواتة'),
(817, 8, 'Abadla', 'العبادلة'),
(818, 8, 'Kerzaz', 'كرزاز'),
(821, 8, 'Beni Ounif', 'بني ونيف'),
(901, 9, 'Blida', 'البليدة'),
(903, 9, 'Bouinan', 'بوعينان'),
(904, 9, 'Oued El Alleug', 'وادي العلايق'),
(905, 9, 'Ouled Yaich', 'أولاد يعيش'),
(907, 9, 'El Affroun', 'العفرون'),
(912, 9, 'Mouzaia', 'موزاية'),
(914, 9, 'Meftah', 'مفتاح'),
(916, 9, 'Boufarik', 'بوفاريك'),
(917, 9, 'Larbaa', 'الأربعاء'),
(922, 9, 'Bougara', 'بوقرة'),
(1001, 10, 'Bouira', 'البويرة'),
(1004, 10, 'Souk El Khemis', 'سوق الخميس'),
(1005, 10, 'Kadiria', 'القادرية'),
(1012, 10, 'Haizer', 'الحيزر'),
(1013, 10, 'Lakhdaria', 'الأخضرية'),
(1015, 10, 'El Hachimia', 'الهاشمية'),
(1018, 10, 'Bordj Okhriss', 'برج أوخريص'),
(1033, 10, 'Bechloul', 'بشلول'),
(1035, 10, 'Ain Bessem', 'عين بسام'),
(1036, 10, 'Bir Ghbalou', 'بئر غبالو'),
(1037, 10, 'M\'chedallah', 'مشد الله'),
(1038, 10, 'Sour El Ghozlane', 'سور الغزلان'),
(1101, 11, 'Tamanrasset', 'تمنراست'),
(1102, 11, 'Silet', 'سيلت'),
(1103, 11, 'In Ghar', 'إينغر'),
(1104, 11, 'In Guezzam', 'عين قزام'),
(1106, 11, 'Tazrouk', 'تاظروك'),
(1107, 11, 'Tin Zouatine', 'تين زواتين'),
(1108, 11, 'In Salah', 'عين صالح'),
(1201, 12, 'Tebessa', 'تبسة'),
(1202, 12, 'Bir El Ater', 'بئر العاتر'),
(1203, 12, 'Cheria', 'الشريعة'),
(1205, 12, 'El Aouinet', 'العوينات'),
(1209, 12, 'Negrine', 'نقرين'),
(1210, 12, 'Bir Mokadem', 'بئر مقدم'),
(1211, 12, 'El Kouif', 'الكويف'),
(1212, 12, 'Morsott', 'مرسط'),
(1213, 12, 'El Ogla', 'العقلة'),
(1219, 12, 'Ouenza', 'الونزة'),
(1220, 12, 'El Malabiod', 'الماء الابيض'),
(1221, 12, 'Oum Ali', 'أم علي'),
(1301, 13, 'Tlemcen', 'تلمسان'),
(1303, 13, 'Ain Tellout', 'عين تالوت'),
(1304, 13, 'Remchi', 'الرمشي'),
(1306, 13, 'Sabra', 'صبرة'),
(1307, 13, 'Ghazaouet', 'الغزوات'),
(1313, 13, 'Ouled Mimoun', 'أولاد ميمون'),
(1317, 13, 'Beni Snous', 'بني سنوس'),
(1318, 13, 'Bab El Assa', 'باب العسة'),
(1320, 13, 'Fellaoucene', 'فلاوسن'),
(1324, 13, 'Bensekrane', 'بن سكران'),
(1326, 13, 'Hennaya', 'الحناية'),
(1327, 13, 'Maghnia', 'مغنية'),
(1335, 13, 'Sebdou', 'سبدو'),
(1338, 13, 'Beni Boussaid', 'بني بوسعيد'),
(1339, 13, 'Marsa Ben Mehdi', 'مرسى بن مهيدي'),
(1340, 13, 'Nedroma', 'ندرومة'),
(1341, 13, 'Sidi Djillali', 'سيدي الجيلالي'),
(1344, 13, 'Honnaine', 'هنين'),
(1350, 13, 'Chetouane', 'شتوان'),
(1351, 13, 'Mansourah', 'منصورة'),
(1401, 14, 'Tiaret', 'تيارت'),
(1402, 14, 'Medroussa', 'مدروسة'),
(1406, 14, 'Ain Deheb', 'عين الذهب'),
(1413, 14, 'Dahmouni', 'دحموني'),
(1414, 14, 'Rahouia', 'رحوية'),
(1415, 14, 'Mahdia', 'مهدية'),
(1416, 14, 'Sougueur', 'السوقر'),
(1421, 14, 'Meghila', 'مغيلة'),
(1427, 14, 'Frenda', 'فرندة'),
(1428, 14, 'Ain Kermes', 'عين كرمس'),
(1429, 14, 'Ksar Chellala', 'قصر الشلالة'),
(1433, 14, 'Oued Lili', 'وادي ليلي'),
(1434, 14, 'Mechraa Sfa', 'مشرع الصفا'),
(1435, 14, 'Hamadia', 'حمادية'),
(1501, 15, 'Tizi Ouzou', 'تيزي وزو'),
(1502, 15, 'Ain El Hammam', 'عين الحمام'),
(1509, 15, 'Makouda', 'ماكودة'),
(1510, 15, 'Draa El Mizan', 'ذراع الميزان'),
(1511, 15, 'Tizi-Ghenif', 'تيزي غنيف'),
(1517, 15, 'Iferhounene', 'إفرحونان'),
(1518, 15, 'Azazga', 'عزازقة'),
(1521, 15, 'Larbaa Nath Iraten', 'الأربعاء ناث إيراثن'),
(1522, 15, 'Tizi Rached', 'تيزي راشد'),
(1524, 15, 'Ouaguenoun', 'واقنون'),
(1529, 15, 'Maatkas', 'معاتقة'),
(1532, 15, 'Beni Douala', 'بني دوالة'),
(1534, 15, 'Bouzeguene', 'بوزقن'),
(1536, 15, 'Ouadhias', 'واضية'),
(1537, 15, 'Azeffoun', 'أزفون'),
(1538, 15, 'Tigzirt', 'تيقزيرت'),
(1540, 15, 'Boghni', 'بوغني'),
(1547, 15, 'Draa Ben Khedda', 'ذراع بن خدة'),
(1548, 15, 'Ouacif', 'واسيف'),
(1550, 15, 'Mekla', 'مقلع'),
(1552, 15, 'Benni Yenni', 'بني يني'),
(1602, 16, 'Sidi M\'hamed', 'سيدي امحمد'),
(1605, 16, 'Bab El Oued', 'باب الوادي'),
(1609, 16, 'Bir Mourad Rais', 'بئر مراد رايس'),
(1611, 16, 'Bouzareah', 'بوزريعة'),
(1613, 16, 'El Harrach', 'الحراش'),
(1614, 16, 'Baraki', 'براقي'),
(1617, 16, 'Hussein Dey', 'حسين داي'),
(1620, 16, 'Dar El Beida', 'الدار البيضاء'),
(1636, 16, 'Birtouta', 'بئر توتة'),
(1638, 16, 'Rouiba', 'الرويبة'),
(1644, 16, 'Zeralda', 'زرالدة'),
(1649, 16, 'Draria', 'الدرارية'),
(1652, 16, 'Cheraga', 'الشراقة'),
(1701, 17, 'Djelfa', 'الجلفة'),
(1704, 17, 'Hassi Bahbah', 'حاسي بحبح'),
(1707, 17, 'Faidh El Botma', 'فيض البطمة'),
(1708, 17, 'Birine', 'بيرين'),
(1714, 17, 'El Idrissia', 'الادريسية'),
(1717, 17, 'Messaad', 'مسعد'),
(1719, 17, 'Sidi Laadjel', 'سيدي لعجال'),
(1720, 17, 'Had Sahary', 'حد الصحاري'),
(1725, 17, 'Dar Chioukh', 'دار الشيوخ'),
(1726, 17, 'Charef', 'الشارف'),
(1730, 17, 'Ain El Ibel', 'عين الإبل'),
(1731, 17, 'Ain Oussera', 'عين وسارة'),
(1801, 18, 'Jijel', 'جيجل'),
(1803, 18, 'El Aouana', 'العوانة'),
(1804, 18, 'Ziamah Mansouriah', 'زيامة منصورية'),
(1805, 18, 'Taher', 'الطاهير'),
(1807, 18, 'Chekfa', 'الشقفة'),
(1809, 18, 'El Milia', 'الميلية'),
(1810, 18, 'Sidi Marouf', 'سيدي معروف'),
(1811, 18, 'Settara', 'السطارة'),
(1812, 18, 'El Ancer', 'العنصر'),
(1817, 18, 'Djimla', 'جيملة'),
(1824, 18, 'Texenna', 'تاكسنة'),
(1901, 19, 'Setif', 'سطيف'),
(1902, 19, 'Ain El Kebira', 'عين الكبيرة'),
(1903, 19, 'Beni Aziz', 'بني عزيز'),
(1908, 19, 'Bir El Arch', 'بئر العرش'),
(1916, 19, 'Babor', 'بابور'),
(1917, 19, 'Guidjel', 'قجال'),
(1920, 19, 'El Eulma', 'العلمة'),
(1921, 19, 'Djemila', 'جميلة'),
(1922, 19, 'Beni Ourtilane', 'بني ورتيلان'),
(1926, 19, 'Ain Arnat', 'عين أرنات'),
(1927, 19, 'Amoucha', 'عموشة'),
(1928, 19, 'Ain Oulmene', 'عين ولمان'),
(1930, 19, 'Bouandas', 'بوعنداس'),
(1932, 19, 'Hammam Sokhna', 'حمام السخنة'),
(1939, 19, 'Salah Bey', 'صالح باي'),
(1940, 19, 'Ain Azel', 'عين أزال'),
(1941, 19, 'Guenzet', 'قنزات'),
(1943, 19, 'Bougaa', 'بوقاعة'),
(1950, 19, 'Hammam Guergour', 'حمام قرقور'),
(1955, 19, 'Maoklane', 'ماوكلان'),
(2001, 20, 'Saida', 'سعيدة'),
(2003, 20, 'Ain El Hadjar', 'عين الحجر'),
(2006, 20, 'Youb', 'يوب'),
(2009, 20, 'Sidi Boubekeur', 'سيدي بوبكر'),
(2010, 20, 'El Hassasna', 'الحساسنة'),
(2014, 20, 'Ouled Brahim', 'أولاد ابراهيم'),
(2101, 21, 'Skikda', 'سكيكدة'),
(2103, 21, 'El Hadaiek', 'الحدائق'),
(2104, 21, 'Azzaba', 'عزابة'),
(2108, 21, 'Ben Azzouz', 'بن عزوز'),
(2110, 21, 'Collo', 'القل'),
(2113, 21, 'Ouled Attia', 'أولاد عطية'),
(2115, 21, 'Zitouna', 'الزيتونة'),
(2116, 21, 'El Harrouch', 'الحروش'),
(2119, 21, 'Sidi Mezghiche', 'سيدي مزغيش'),
(2123, 21, 'Ramdane Djamel', 'رمضان جمال'),
(2126, 21, 'Tamalous', 'تمالوس'),
(2127, 21, 'Ain Kechra', 'عين قشرة'),
(2128, 21, 'Oum Toub', 'أم الطوب'),
(2201, 22, 'Sidi Bel Abbes', 'سيدي بلعباس'),
(2202, 22, 'Tessala', 'تسالة'),
(2204, 22, 'Mostefa  Ben Brahim', 'مصطفى بن ابراهيم'),
(2205, 22, 'Telagh', 'تلاغ'),
(2208, 22, 'Sidi Ali Boussidi', 'سيدي علي بوسيدي'),
(2210, 22, 'Marhoum', 'مرحوم'),
(2214, 22, 'Sidi Lahcene', 'سيدي لحسن'),
(2217, 22, 'Tenira', 'تنيرة'),
(2218, 22, 'Moulay Slissen', 'مولاي سليسن'),
(2222, 22, 'Merine', 'مرين'),
(2223, 22, 'Ras El Ma', 'راس الماء'),
(2228, 22, 'Ain El Berd', 'عين البرد'),
(2229, 22, 'Sfisef', 'سفيزف'),
(2245, 22, 'Ben Badis', 'بن باديس'),
(2246, 22, 'Sidi Ali Ben Youb', 'سيدي علي بن يوب'),
(2301, 23, 'Annaba', 'عنابة'),
(2302, 23, 'Berrahal', 'برحال'),
(2303, 23, 'El Hadjar', 'الحجار'),
(2305, 23, 'El Bouni', 'البوني'),
(2309, 23, 'Ain El Berda', 'عين الباردة'),
(2310, 23, 'Chetaibi', 'شطايبي'),
(2401, 24, 'Guelma', 'قالمة'),
(2404, 24, 'Oued Zenati', 'وادي الزناتي'),
(2413, 24, 'Ain Makhlouf', 'عين مخلوف'),
(2415, 24, 'Khezaras', 'خزارة'),
(2418, 24, 'Guelaat Bousbaa', 'قلعة بوصبع'),
(2419, 24, 'Hammam Debagh', 'حمام دباغ'),
(2422, 24, 'Hammam N\'bails', 'حمام النبايل'),
(2425, 24, 'Bouchegouf', 'بوشقوف'),
(2426, 24, 'Heliopolis', 'هيليوبوليس'),
(2427, 24, 'Ain Hessainia', 'عين حساينية'),
(2501, 25, 'Constantine', 'قسنطينة'),
(2502, 25, 'Hamma Bouziane', 'حامة بوزيان'),
(2504, 25, 'Zighoud Youcef', 'زيغود يوسف'),
(2506, 25, 'El Khroub', 'الخروب'),
(2507, 25, 'Ain Abid', 'عين عبيد'),
(2512, 25, 'Ibn Ziad', 'ابن زياد'),
(2601, 26, 'Medea', 'المدية'),
(2602, 26, 'Ouzera', 'وزرة'),
(2604, 26, 'Ain Boucif', 'عين بوسيف'),
(2607, 26, 'El Omaria', 'العمارية'),
(2609, 26, 'Guelb El Kebir', 'القلب الكبير'),
(2618, 26, 'Chellalat El Adhaoura', 'شلالة العذاورة'),
(2626, 26, 'Sidi Naamane', 'سيدي نعمان'),
(2632, 26, 'Aziz', 'عزيز'),
(2633, 26, 'Souaghi', 'السواقي'),
(2635, 26, 'Ksar El Boukhari', 'قصر البخاري'),
(2636, 26, 'El Azizia', 'العزيزية'),
(2638, 26, 'Chahbounia', 'الشهبونية'),
(2643, 26, 'Ouamri', 'عوامري'),
(2644, 26, 'Si Mahdjoub', 'سي المحجوب'),
(2646, 26, 'Beni Slimane', 'بني سليمان'),
(2647, 26, 'Berrouaghia', 'البرواقية'),
(2648, 26, 'Seghouane', 'سغوان'),
(2652, 26, 'Tablat', 'تابلاط'),
(2658, 26, 'Ouled Antar', 'أولاد عنتر'),
(2701, 27, 'Mostaganem', 'مستغانم'),
(2705, 27, 'Ain Nouicy', 'عين نويسي'),
(2706, 27, 'Hassi Mameche', 'حاسي ماماش'),
(2707, 27, 'Ain Tedeles', 'عين تادلس'),
(2711, 27, 'Kheir Eddine', 'خير الدين'),
(2712, 27, 'Sidi Ali', 'سيدي علي'),
(2716, 27, 'Sidi Lakhdar', 'سيدي لخضر'),
(2717, 27, 'Achaacha', 'عشعاشة'),
(2719, 27, 'Bouguirat', 'بوقيراط'),
(2722, 27, 'Mesra', 'ماسرة'),
(2801, 28, 'M\'sila', 'المسيلة'),
(2803, 28, 'Hammam Dalaa', 'حمام الضلعة'),
(2804, 28, 'Ouled Derradj', 'أولاد دراج'),
(2807, 28, 'Khoubana', 'خبانة'),
(2809, 28, 'Chellal', 'شلال'),
(2811, 28, 'Magra', 'مقرة'),
(2816, 28, 'Sidi Aissa', 'سيدي عيسى'),
(2817, 28, 'Ain El Hadjel', 'عين الحجل'),
(2820, 28, 'Bousaada', 'بوسعادة'),
(2821, 28, 'Ouled Sidi Brahim', 'أولاد سيدي ابراهيم'),
(2822, 28, 'Sidi Ameur', 'سيدي عامر'),
(2824, 28, 'Ben Srour', 'بن سرور'),
(2841, 28, 'Ain El Melh', 'عين الملح'),
(2842, 28, 'Medjedel', 'امجدل'),
(2847, 28, 'Djebel Messaad', 'جبل مساعد'),
(2901, 29, 'Mascara', 'معسكر'),
(2902, 29, 'Bouhanifia', 'بوحنيفية'),
(2903, 29, 'Tizi', 'تيزي'),
(2906, 29, 'Tighennif', 'تيغنيف'),
(2907, 29, 'Hachem', 'الحشم'),
(2910, 29, 'Oued El Abtal', 'وادي الأبطال'),
(2912, 29, 'Ghriss', 'غريس'),
(2917, 29, 'El Bordj', 'البرج'),
(2918, 29, 'Ain Fekan', 'عين فكان'),
(2922, 29, 'Oued Taria', 'وادي التاغية'),
(2923, 29, 'Aouf', 'عوف'),
(2924, 29, 'Ain Fares', 'عين فارس'),
(2926, 29, 'Sig', 'سيق'),
(2927, 29, 'Oggaz', 'عقاز'),
(2930, 29, 'Zahana', 'زهانة'),
(2931, 29, 'Mohammadia', 'المحمدية'),
(3001, 30, 'Ouargla', 'ورقلة'),
(3003, 30, 'N\'goussa', 'انقوسة'),
(3004, 30, 'Hassi Messaoud', 'حاسي مسعود'),
(3011, 30, 'Sidi Khouiled', 'سيدي خويلد'),
(3013, 30, 'Touggourt', 'تقرت'),
(3014, 30, 'El-Hadjira', 'الحجيرة'),
(3015, 30, 'Taibet', 'الطيبات'),
(3016, 30, 'Temacine', 'تماسين'),
(3019, 30, 'Megarine', 'المقارين'),
(3021, 30, 'El Borma', 'البرمة'),
(3101, 31, 'Oran', 'وهران'),
(3102, 31, 'Gdyel', 'قديل'),
(3103, 31, 'Bir El Djir', 'بئر الجير'),
(3105, 31, 'Es Senia', 'السانية'),
(3106, 31, 'Arzew', 'أرزيو'),
(3107, 31, 'Bethioua', 'بطيوة'),
(3109, 31, 'Ain Turk', 'عين الترك'),
(3111, 31, 'Oued Tlelat', 'وادي تليلات'),
(3124, 31, 'Boutlelis', 'بوتليليس'),
(3201, 32, 'El Bayadh', 'البيض'),
(3202, 32, 'Rogassa', 'رقاصة'),
(3203, 32, 'Brezina', 'بريزينة'),
(3204, 32, 'Boualem', 'بوعلام'),
(3205, 32, 'Labiodh Sidi Cheikh', 'الأبيض سيدي الشيخ'),
(3206, 32, 'Bougtob', 'بوقطب'),
(3207, 32, 'Boussemghoun', 'بوسمغون'),
(3208, 32, 'Chellala', 'شلالة'),
(3301, 33, 'Illizi', 'إيليزي'),
(3302, 33, 'Djanet', 'جانت'),
(3306, 33, 'In Amenas', 'إن أمناس'),
(3401, 34, 'Bordj Bou Arreridj', 'برج بوعريريج'),
(3402, 34, 'Ras El Oued', 'رأس الوادي'),
(3403, 34, 'Bordj Zemmoura', 'برج زمورة'),
(3404, 34, 'Mansourah', 'المنصورة'),
(3408, 34, 'Ain Taghrout', 'عين تاغروت'),
(3409, 34, 'Bordj Ghedir', 'برج الغدير'),
(3411, 34, 'El Hamadia', 'الحمادية'),
(3413, 34, 'Medjana', 'مجانة'),
(3415, 34, 'Djaafra', 'جعافرة'),
(3431, 34, 'Bir Kasdali', 'بئر قاصد علي'),
(3501, 35, 'Boumerdes', 'بومرداس'),
(3502, 35, 'Boudouaou', 'بودواو'),
(3504, 35, 'Bordj Menaiel', 'برج منايل'),
(3505, 35, 'Baghlia', 'بغلية'),
(3507, 35, 'Naciria', 'الناصرية'),
(3509, 35, 'Isser', 'يسر'),
(3514, 35, 'Thenia', 'الثنية'),
(3523, 35, 'Dellys', 'دلس'),
(3531, 35, 'Khemis El Khechna', 'خميس الخشنة'),
(3601, 36, 'El Tarf', 'الطارف'),
(3602, 36, 'Bouhadjar', 'بوحجار'),
(3603, 36, 'Ben M\'hidi', 'بن مهيدي'),
(3605, 36, 'El Kala', 'القالة'),
(3608, 36, 'Bouteldja', 'بوثلجة'),
(3613, 36, 'Drean', 'الذرعان'),
(3616, 36, 'Besbes', 'البسباس'),
(3701, 37, 'Tindouf', 'تندوف'),
(3801, 38, 'Tissemsilt', 'تيسمسيلت'),
(3802, 38, 'Bordj Bounaama', 'برج بونعامة'),
(3803, 38, 'Theniet El Had', 'ثنية الاحد'),
(3804, 38, 'Lazharia', 'الأزهرية'),
(3806, 38, 'Lardjem', 'لرجام'),
(3809, 38, 'Bordj Emir Abdelkader', 'برج الأمير عبد القادر'),
(3811, 38, 'Khemisti', 'خميستي'),
(3813, 38, 'Ammari', 'عماري'),
(3901, 39, 'El Oued', 'الوادي'),
(3902, 39, 'Robbah', 'الرباح'),
(3904, 39, 'Bayadha', 'البياضة'),
(3906, 39, 'Guemar', 'قمار'),
(3908, 39, 'Reguiba', 'الرقيبة'),
(3911, 39, 'Debila', 'الدبيلة'),
(3913, 39, 'Hassi Khalifa', 'حاسي خليفة'),
(3914, 39, 'Taleb Larbi', 'الطالب العربي'),
(3918, 39, 'Magrane', 'المقرن'),
(3926, 39, 'Mih Ouensa', 'اميه وانسة'),
(3927, 39, 'El Meghaier', 'المغير'),
(3928, 39, 'Djamaa', 'جامعة'),
(4001, 40, 'Khenchela', 'خنشلة'),
(4003, 40, 'Kais', 'قايس'),
(4005, 40, 'El Hamma', 'الحامة'),
(4006, 40, 'Ain Touila', 'عين الطويلة'),
(4008, 40, 'Bouhmama', 'بوحمامة'),
(4011, 40, 'Chechar', 'ششار'),
(4013, 40, 'Babar', 'بابار'),
(4016, 40, 'Ouled Rechache', 'أولاد رشاش'),
(4101, 41, 'Souk Ahras', 'سوق أهراس'),
(4102, 41, 'Sedrata', 'سدراتة'),
(4104, 41, 'Mechroha', 'المشروحة'),
(4105, 41, 'Ouled Driss', 'أولاد إدريس'),
(4108, 41, 'Taoura', 'تاورة'),
(4110, 41, 'Haddada', 'الحدادة'),
(4112, 41, 'Merahna', 'المراهنة'),
(4114, 41, 'Bir Bouhouche', 'بئر بوحوش'),
(4115, 41, 'M\'daourouche', 'مداوروش'),
(4116, 41, 'Oum El Adhaim', 'أم العظايم'),
(4201, 42, 'Tipaza', 'تيبازة'),
(4208, 42, 'Hadjout', 'حجوط'),
(4209, 42, 'Sidi Amar', 'سيدي أعمر'),
(4210, 42, 'Gouraya', 'قوراية'),
(4214, 42, 'Cherchell', 'شرشال'),
(4215, 42, 'Damous', 'الداموس'),
(4217, 42, 'Fouka', 'فوكة'),
(4218, 42, 'Bou Ismail', 'بواسماعيل'),
(4219, 42, 'Ahmar El Ain', 'أحمر العين'),
(4224, 42, 'Kolea', 'القليعة'),
(4301, 43, 'Mila', 'ميلة'),
(4302, 43, 'Ferdjioua', 'فرجيوة'),
(4303, 43, 'Chelghoum Laid', 'شلغوم العيد'),
(4306, 43, 'Teleghma', 'التلاغمة'),
(4308, 43, 'Tadjenanet', 'تاجنانت'),
(4310, 43, 'Oued Endja', 'وادي النجاء'),
(4314, 43, 'Bouhatem', 'بوحاتم'),
(4315, 43, 'Rouached', 'الرواشد'),
(4317, 43, 'Grarem Gouga', 'القرارم قوقة'),
(4318, 43, 'Sidi Merouane', 'سيدي مروان'),
(4319, 43, 'Tassadane Haddada', 'تسدان حدادة'),
(4323, 43, 'Terrai Bainen', 'ترعي باينان'),
(4330, 43, 'Ain Beida Harriche', 'عين البيضاء أحريش'),
(4401, 44, 'Ain Defla', 'عين الدفلى'),
(4402, 44, 'Miliana', 'مليانة'),
(4403, 44, 'Boumedfaa', 'بومدفع'),
(4404, 44, 'Khemis', 'خميس'),
(4405, 44, 'Hammam Righa', 'حمام ريغة'),
(4407, 44, 'Djelida', 'جليدة'),
(4408, 44, 'El Amra', 'العامرة'),
(4410, 44, 'El Attaf', 'العطاف'),
(4411, 44, 'El Abadia', 'العبادية'),
(4412, 44, 'Djendel', 'جندل'),
(4414, 44, 'Ain Lechiakh', 'عين الاشياخ'),
(4416, 44, 'Rouina', 'الروينة'),
(4422, 44, 'Bordj El Emir Khaled', 'برج الأمير خالد'),
(4431, 44, 'Bathia', 'بطحية'),
(4501, 45, 'Naama', 'النعامة'),
(4502, 45, 'Mecheria', 'المشرية'),
(4503, 45, 'Ain Sefra', 'عين الصفراء'),
(4505, 45, 'Sfissifa', 'سفيسيفة'),
(4506, 45, 'Moghrar', 'مغرار'),
(4507, 45, 'Asla', 'عسلة'),
(4510, 45, 'Mekmen Ben Amar', 'مكمن بن عمار'),
(4601, 46, 'Ain Temouchent', 'عين تموشنت'),
(4604, 46, 'Hammam Bou Hadjar', 'حمام بوحجر'),
(4609, 46, 'Ain Larbaa', 'عين الأربعاء'),
(4614, 46, 'El Maleh', 'المالح'),
(4619, 46, 'El Amria', 'العامرية'),
(4622, 46, 'Ain Kihel', 'عين الكيحل'),
(4623, 46, 'Beni Saf', 'بني صاف'),
(4625, 46, 'Oulhassa Gheraba', 'ولهاصة الغرابة'),
(4701, 47, 'Ghardaia', 'غرداية'),
(4702, 47, 'El Menia', 'المنيعة'),
(4703, 47, 'Dhayet Ben Dhahoua', 'ضاية بن ضحوة'),
(4704, 47, 'Berriane', 'بريان'),
(4705, 47, 'Metlili', 'متليلي'),
(4706, 47, 'El Guerrara', 'القرارة'),
(4708, 47, 'Zelfana', 'زلفانة'),
(4710, 47, 'Bounoura', 'بونورة'),
(4713, 47, 'Mansourah', 'المنصورة'),
(4801, 48, 'Relizane', 'غليزان'),
(4802, 48, 'Oued Rhiou', 'وادي رهيو'),
(4807, 48, 'El H\'madna', 'الحمادنة'),
(4808, 48, 'Sidi M\'hamed Ben Ali', 'سيدي أمحمد بن علي'),
(4811, 48, 'Ammi Moussa', 'عمي موسى'),
(4812, 48, 'Zemmoura', 'زمورة'),
(4814, 48, 'Djidiouia', 'جديوية'),
(4817, 48, 'El Matmar', 'المطمر'),
(4819, 48, 'Ain Tarek', 'عين طارق'),
(4822, 48, 'Mazouna', 'مازونة'),
(4825, 48, 'Yellel', 'يلل'),
(4827, 48, 'Ramka', 'الرمكة'),
(4828, 48, 'Mendes', 'منداس');

-- --------------------------------------------------------

--
-- Structure de la table `experience_aquise`
--

CREATE TABLE `experience_aquise` (
  `id_candidat` int(11) NOT NULL,
  `ref_experience` int(11) NOT NULL,
  `entreprise` varchar(50) DEFAULT NULL,
  `date_debut` varchar(15) DEFAULT NULL,
  `date_fin` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `experience_aquise`
--

INSERT INTO `experience_aquise` (`id_candidat`, `ref_experience`, `entreprise`, `date_debut`, `date_fin`) VALUES
(1, 5, 'lagainfo', '2017-12-12', '2020-03-02'),
(1, 9, 'YALI', '2015-10-15', '2022-01-01'),
(2, 4, 'UNISOFT', '2015-12-01', '2020-12-01'),
(3, 5, 'AZULNET', '2013-01-01', '2020-09-02'),
(4, 5, 'Eniem', '2015-01-01', '2019-01-01');

-- --------------------------------------------------------

--
-- Structure de la table `experience_professionnele`
--

CREATE TABLE `experience_professionnele` (
  `ref_experience` int(11) NOT NULL,
  `poste` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `experience_professionnele`
--

INSERT INTO `experience_professionnele` (`ref_experience`, `poste`) VALUES
(1, 'Planificateur'),
(2, 'Maintenance'),
(3, 'Agent de sécurité'),
(4, 'Manager'),
(5, 'Ingénieur des systèmes d\'information'),
(6, 'Analyste'),
(7, 'marketing'),
(8, 'Electricien'),
(9, 'DEVELOPPEUR'),
(10, 'DEVELOPPEUR web');

-- --------------------------------------------------------

--
-- Structure de la table `experience_requise`
--

CREATE TABLE `experience_requise` (
  `code_offre` int(11) NOT NULL,
  `ref_experience` int(11) NOT NULL,
  `nombre_annee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `experience_requise`
--

INSERT INTO `experience_requise` (`code_offre`, `ref_experience`, `nombre_annee`) VALUES
(4, 1, 1),
(5, 2, 0),
(6, 3, 1),
(7, 4, 3),
(9, 4, 1),
(10, 5, 0),
(12, 6, 2),
(14, 7, 4),
(15, 8, 3);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `ref_formation` int(11) NOT NULL,
  `nom_formation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`ref_formation`, `nom_formation`) VALUES
(1, 'Informatique'),
(2, 'Santé'),
(3, 'Tourisme'),
(4, 'Marketing'),
(5, 'Management'),
(6, 'Droit'),
(7, 'Logistique'),
(8, 'Méchanique'),
(9, 'Electricité'),
(10, 'Sécurité');

-- --------------------------------------------------------

--
-- Structure de la table `langue_demandee`
--

CREATE TABLE `langue_demandee` (
  `code_offre` int(11) NOT NULL,
  `code_langue` varchar(5) NOT NULL,
  `niveau` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `langue_demandee`
--

INSERT INTO `langue_demandee` (`code_offre`, `code_langue`, `niveau`) VALUES
(4, 'ANG', 'Elevé'),
(5, 'FR', 'Elevé'),
(6, 'ARA', 'Elevé'),
(7, 'ESP', 'Moyen'),
(8, 'ESP', 'Faible'),
(9, 'FR', 'Elevé'),
(10, 'ANG', 'Moyen'),
(11, 'ANG', 'Elevé'),
(12, 'ESP', 'Moyen'),
(13, 'ANG', 'Elevé'),
(14, 'ESP', 'Moyen'),
(15, 'FR', 'Moyen'),
(16, 'ANG', 'Moyen'),
(17, 'ESP', '2');

-- --------------------------------------------------------

--
-- Structure de la table `langue_maitrisee`
--

CREATE TABLE `langue_maitrisee` (
  `id_candidat` int(11) NOT NULL,
  `code_langue` varchar(5) NOT NULL,
  `niveau` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `langue_maitrisee`
--

INSERT INTO `langue_maitrisee` (`id_candidat`, `code_langue`, `niveau`) VALUES
(1, 'ANG', 'Elevé'),
(1, 'FR', '3'),
(2, 'ANG', 'Faible'),
(3, 'ANG', 'Elevé'),
(4, 'ANG', 'b');

-- --------------------------------------------------------

--
-- Structure de la table `note_candidat`
--

CREATE TABLE `note_candidat` (
  `id_candidat` int(11) NOT NULL,
  `code_offre` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `offre_emploi`
--

CREATE TABLE `offre_emploi` (
  `code_offre` int(11) NOT NULL,
  `date_d` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_f` varchar(50) DEFAULT NULL,
  `poste` varchar(60) DEFAULT NULL,
  `typeTravail` varchar(15) NOT NULL,
  `detail` text,
  `adresse` varchar(150) NOT NULL,
  `id_recruteur` int(11) NOT NULL,
  `num_daira` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `offre_emploi`
--

INSERT INTO `offre_emploi` (`code_offre`, `date_d`, `date_f`, `poste`, `typeTravail`, `detail`, `adresse`, `id_recruteur`, `num_daira`) VALUES
(1, '2020-12-06 22:31:19', '2020-12-15', 'Chef catégorie manager sauces & condiments', 'Temps plein', 'Définir et s’assurer la mise en place de la stratégie de vente de la catégorie sauces et condiments (sur l\'ensemble des canaux Gros, Détail et Horeca) ;\nDécliner la stratégie de vente de la catégorie en plans d’actions pour leur mise en œuvre par le front office pour l’atteinte des objectifs quantitatifs et qualitatifs.\nDéfinir les moyens nécessaires au développement de l’offre commerciale de la catégorie ;\nApporter le support (outils…) nécessaire à la direction des opérations commerciales pour l’exécution des plans d’actions définis\nContribuer avec le chef de produit marketing à l’élaboration des plans des marques de la catégorie ;\nCoordonner avec Front Office (direction des opérations commerciales) l\'exécution des plans d\'actions ventes ;\nSuivre les performances de ventes de la catégorie au quotidien, analyser les données et recommander des actions spécifiques ;\nIdentifier, concevoir et aligner les priorités des différents canaux (DD, Horeca, Gros…etc.) canaux locaux conformément aux orientations de la DCM direction commerciale & marketing ', 'rue didouche mourad', 3, 1602),
(4, '2020-12-06 23:33:30', '2020-12-18', 'Planificateur Production / Ressources', 'Temps partiel', 'Etablir, suivre, adapter et communiquer  les plans  Directeur de Production, Directeur d’approvisionnement, en considérant les paramètres de planification industrielle internes et externes aux structures concernées.\nAssurer l’optimisation des stocks de composants en matières premières /Intrants/ Packaging relevant de son périmètre.\nAssurer la disponibilité des stocks de produits finis (calcul des stocks de sécurité du mix SKU’s, couvertures de stocks internes et externes…).\nSuperviser et abriter la cohérence entre le plan de production et appro et déploiement (orientation des priorités de production, cas de rupture de stocks ou arbitrage produit survenu en  cour du mois\nSuivre, contrôler et piloter l’activité de production influant sur sa planification (retard d’ordonnancement des OF’s, arrêts non programmés, capacités des lignes, les charges d’atelier et les tailles de lots.…) et effectuer les lissages correspondants.\nAssurer la fluidité de l’information entre les structures (Distribution, Production, Approvisionnements et Sous-traitants logistiques).\nAssurer l’interface avec la Supply chain / Production /Commerciale /Marketing/commodités\nCoordonner et  animer  les réunions d’analyse des plannings avec le DG et les managers de structures\nKey Users ERP (suivi des procédures établies et de l’ERP mis en place).', 'rue abane remdane', 3, 601),
(5, '2020-12-06 23:39:49', '2020-12-24', 'Maintenancier Industriel en Electromécanique', 'Temps partiel', 'Appliquer  les plans de maintenance préventive et curative selon les gammes.\nProcéder au  diagnostic des pannes et anomalies\nRédiger les rapports techniques et renseigne les différents documents et les passations de consignes.\nAssurer l’enlèvement de la PDR du Magasin\nVeiller à la propreté et rangement de son lieu de travail\nContrôler  les équipements en marche ou à l’arrêt pour détecter et résoudre toutes anomalies y compris en dehors de sa discipline  et en aviser la hiérarchie\nProposer des améliorations et suggère des solutions de maintenance pour la bonne performance des équipements\nCollaborer étroitement avec les méthodistes et les services de production\nParticiper aux différentes activités en dehors de sa spécialité et discipline.\nContribue à la formation et intégration des nouvelles recrues\nVeiller à l’application des consignes de sécurité, d’hygiène et d’environnement.', 'rue yalaoui', 3, 639),
(6, '2020-12-06 23:44:18', '2021-01-08', 'Responsable Sureté Interne Etablissement', 'Temps partiel', 'Assurer les prestations lies à la sûreté interne (superviser l’équipe sous-traitante)\n Mettre en œuvre le dispositif de protection du patrimoine de l’entreprise, arrêté dans le PSI notamment l’intervention en cas d’incendie ;\nprendre les dispositions d’urgences en matière d’alerte et de secours ainsi que les mesures de sûreté visant la neutralisation des personnes en effraction a l’intérieur de l’entreprise;\n Coordonner et assurer le bon fonctionnement des brigades SIE (« équipe de gardiennages) de l’entreprise en veillant la vigilance et la surveillance au niveau de tous les accès.\nVeiller à la préservation des investissements de l’entreprise en matière d’équipement de sûreté et de lutte anti incendie ;\n Gérer et assurer le bon fonctionnement du matériel de sécurité (Télésurveillance, lutte anti incendie, contrôle d’accès, etc.)\n Assurer la Coordination en situation d’urgence (collaboration cevital et les autorités locales « protection civile, et différents services de sécurité »).\n Veiller à l’efficacité des mesures de contrôles contre toutes tentatives de vols, destruction, intrusion, sabotage…etc.\nMettre les dispositifs nécessaires pour assurer le bon déroulement des activités et événements organisés par l’entreprise.\nAssurer l’interface avec l’ensemble des structures interne et les organismes externes concernés par l’activité de sa structure ', 'zone industrielle', 3, 625),
(7, '2020-12-06 23:46:55', '2021-01-07', ' Chef de Zone', 'Temps plein', 'Optimiser  ses Volumes  SKU.\nContrôler régulièrement sur son périmètre les mouvements des stocks pour anticiper les commandes clients\nPlanifier, communiquer et suivre  le programme de visite des clients\nProspecter et négocier avec les nouveaux clients\nContrôler régulièrement le suivi  des besoins et attentes exprimés des  clients par des visites périodiques\nAnalyser et répondre à toute demande commerciale ou technique des clients\nÉtablir les Analyses  ventes et communiquer  les reportings HORECA/PRO à sa hiérarchie.\nEffectué une veille et analyse concurrentielle\n Veiller à la distribution rapide des nouveaux produits commercialisés dans sa zone d’affectation\n Veiller à l’application et au respect des  règles d’hygiène , de sécurité alimentaire et qualité\nManager et Animer son Équipé.', 'Nouvelle ville', 3, 1501),
(8, '2020-12-06 23:50:12', '2021-01-12', 'Maintenancier Industriel Automatique', 'Temps partiel', 'Appliquer les plans de maintenance préventive et curative selon les gammes.\nProcéder au diagnostic des pannes et anomalies\nRédiger les rapports techniques et renseigne les différents documents et les passations de consignes.\nAssurer l’enlèvement de la PDR du Magasin\nVeiller à la propreté et rangement de son lieu de travail\nContrôler les équipements en marche ou à l’arrêt pour détecter et résoudre toutes anomalies y compris en dehors de sa discipline et en aviser la hiérarchie\nProposer des améliorations et suggère des solutions de maintenance pour la bonne performance des équipements \nCollaborer étroitement avec les méthodistes et les services de production\nParticiper aux différentes activités en dehors de sa spécialité et discipline.\nContribue à la formation et intégration des nouvelles recrues\nVeiller à l’application des consignes de sécurité, d’hygiène et d’environnement.', 'zone tahracht', 3, 625),
(9, '2020-12-06 23:53:35', '2020-12-27', ' BRAND MANAGER', 'A distance', 'Gestion du portefeuille huiles commercialisées marques Elio, Fridor et Fleurial ainsi que toutes autres marques s\'intégrant dans la catégorie.\nSuivi du marché lié à la catégorie sur l\'ensemble des éléments du marketing mix,\nDéfinir la stratégie de chaque marque en rapport avec le marché, besoins, concurrence, réglementation.\nSuivi de la rentabilité du portefeuille de la catégorie,\nMise en place des plans marketing annuels du portefeuille en coordination avec les parties prenantes, commerciales, trade marketing, industrie, supply, qualité, contrôle de gestion, R&D.\nAssurer les innovations sur le portefeuille  marques et catégorie en évolution avec les besoins du marché et du consommateur.\nAssurer avec le département études et marchés, le suivi des sondages, enquêtes, statistiques et recommander les adaptations stratégiques de la catégorie et des marques.', 'rue 05 mai', 3, 1609),
(10, '2020-12-07 00:01:51', '2021-01-18', 'Responsable de la sécurité des systèmes d’information', 'A distance', '     Sous l’autorité du Directeur des Systèmes d’information , le responsable de la sécurité des systèmes d’information aura pour mission de définir, mettre en œuvre, animer, contrôler et maintenir les politiques et procédures de sécurité de l’information, en conformité avec les lois en vigueurs.\nIl assure le contrôle permanent de l’activité et définit les exigences de sécurité associées.\nIl définit la politique de gestion des risques de l’information dans l’entreprise, du déploiement et de l’animation du dispositif y afférent,\nIl rend compte au directeur des Systèmes d’information et est force de propositions dans l’optimisation des activités et moyens dont il est responsable,\nIl est garant de la stricte application de la réglementation et procédures applicables, parmi lesquelles la réglementation d’hygiène et sécurité SMQ et bonnes pratiques', 'rue de lune', 10, 1638),
(11, '2020-12-07 00:06:47', '2021-01-16', 'Contrôleur de gestion', 'Temps plein', 'Sous l’autorité du chef de département Contrôle de gestion , le contrôleur de gestion à pour mission de suivre les factures fournisseurs \nIl assure le suivi des indicateurs de gestion de la direction des ressources humaines;\nIl participe à l’élaboration du Plan moyen terme de la direction, du budget, l’audit et méthodes en comptabilité analytique ; \nIl assure le suivi économique;\nIl applique la réglementation QHSE (Qualité, Hygiène, Sécurité et Environnement)', 'rue 1er Novembre', 10, 1605),
(12, '2020-12-07 00:08:50', '2020-12-31', 'Analyste Laboratoire process', 'Temps plein', 'Appliquer les protocoles opératoires dans le respect des normes;\nEffectuer le Reporting des résultats à des fins d’exploitation et /ou de correction (Enregistrement des données sous support informatique); \nAssurer une assistance technique auprès des clients internes;\nRédiger des comptes rendus et de rapports relatifs aux analyses effectuées et nouvelles méthodes introduites; \nAssurer le maintien des équipements de mesure (métrologie);\nParticiper à la vie du laboratoire (polyvalence, remplacement);\nAppliquer les bonnes pratiques en matière de qualité;\nAppliquer et respecter les règles d’hygiène et de sécurité;\nRéaliser les analyses de mesure au labo (étalonnage, analyse, mesure et interprétation);\nEffectuer des prélèvements et des analyses in situ. \nAssurer la fonction de tuteur (stagiaires, apprentis, nouveau recruté),\nProfil', 'Nouvelle ville Ali Mendjeli', 10, 2501),
(13, '2020-12-07 00:11:21', '2021-01-29', 'Ingénieur Exploitation', 'Temps partiel', 'Suivre le processus d’épuration des eaux usées.\nÉtalonnage et entretien des appareils de contrôle .\nIdentifier les causes des non conformités et proposer des actions correctives.\nPiloter le fonctionnement et la performance du site par des indicateurs, tableau…\nIdentifier les actions de renouvellement sur les ouvrages et proposer l’amélioration du système\nAssurer le reporting de toute l’activité (enregistrements, analyses, bilans et rapports d’activité,...). \nParticiper à la recherche des conditions et des moyens d’amélioration de l’épuration et du traitement des boues. \nContribuer à la rédaction des procédures liées aux activités spécifiques (bonnes pratiques professionnelles) et les faire appliquer. \nAssurer le suivi et l’approvisionnement de la station en produit de traitement .\nCoordonner et faciliter les opérations de maintenance.\nParticiper aux projets transverses.\nAssurer une veille technologique de l’évolution des procédés de traitement.\nTenir à jour les registres d’exploitation avec consignes ainsi les tableaux des relevés.\nAssurer les vérifications des relevés de fonctionnement des équipements du site .\nRemonter toutes les informations (dysfonctionnement) à son supérieur hiérarchique .\nAssurer l’intégrité des informations transmises au supérieur hiérarchique .\nAssurer la fonction de tuteur (stagiaires, apprentis, nouveau recruté).\nIdentifier les points de dysfonctionnement et participer à la levée de ces anomalies.\nAlerter en cas de difficulté ou d’événements majeurs, le supérieur hiérarchique ou toute autre personne\npouvant apporter de l’aide ou solutionner le problème ou devant être informée', 'rue de la liberte', 10, 1617),
(14, '2020-12-07 00:13:40', '2021-01-03', 'Spécialiste marchés "Chargé des publications"', 'Temps plein', 'Sous l’autorité du chef de départements marchés le spécialiste marchés en charge des publication a pour missions d’assurer l’interface avec l’ANEP - Agence Nationale de communication d‘Edition et de Publicité pour assurer les publications des placards publicitaires liés aux Appels d’offres tels que :\n-Les avis d’Appels d’Offres\n-Les avis d’Attribution Provisoire\n-Les avis d’infructuosité\n-Les avis de prolongation de délais de préparation des offres\n-Les avis rectificatifs\n-Les avis de mise en demeure\n-Les avis d’annulation des procédures ;\nIl applique la réglementation QHSE (Qualité, Hygiène, Sécurité et Environnement).\n\n', 'rue des martyrs', 10, 1638),
(15, '2020-12-07 00:15:49', '2020-12-29', 'Technicien Maintenance', 'Temps plein', 'Recenser les informations sur l\'équipement en panne (notice constructeur, historique des interventions, ...) et diagnostiquer les éléments défectueux (usure, déformation, surchauffe, bruit,...).\nLocaliser les dysfonctionnements et réaliser une analyse des causes.\nEffectuer la réparation selon le diagnostic de la panne (nettoyage, remplacement de pièces,graissage, ...).\n Réaliser les réglages de mise au point et contrôler l\'état de fonctionnement de l\'équipement.\nModifier ou adapter les équipements selon les impératifs de production (cadences, nouveaux produits) ou les évolutions réglementaires.\nrenseigner le bon de travaux.\n Maintenir les fiches historiques & techniques des équipements à jour.\nActualiser les schémas électriques.\nRespecter les règles HS et les procédures (modes opératoires des consignations) lors des interventions.\nGarantir les mesures nécessaires sur les équipements (tension, courant, débit…).', 'el hamma', 10, 1649),
(16, '2020-12-07 00:19:47', '2021-01-10', 'Chef de projets études assainissement', 'Temps plein', '  Collecte et actualisation de données.\n  Analyse des anomalies et dysfonctionnements au niveau des réseaux et des ouvrages d’assainissement.\n  Élaboration des notes de calcul et notes techniques.\n  Élaboration des plans (tracé en plan, profil en long, profil en travers, plan détails, plan-coupe, détails de raccordement, …)\n  Analyse de faisabilité d’un projet et étude technico économique.\n  Sorties fréquentes (terrains, chantiers, centres d’exploitations, DRE, …etc) ;\n  Participation à des réunions de travail ;\n  Rédaction de compte-rendu, cahier des charges, …\n  Suivi technique et administratif des études sous-traitées\n  Participation à la mise en œuvre des schémas directeurs d’Alger et Tipasa', 'rue 5 juillet', 10, 1636),
(17, '2020-12-07 02:32:54', '2020-12-07', 'aaaaaaaa', 'Temps plein', 'aaaaaaaa', 'aaaaaaaaaaa', 3, 601);

-- --------------------------------------------------------

--
-- Structure de la table `recruteur`
--

CREATE TABLE `recruteur` (
  `id_recruteur` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `nom_entreprise` varchar(50) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL,
  `adresse` text,
  `token` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `recruteur`
--

INSERT INTO `recruteur` (`id_recruteur`, `nom`, `prenom`, `nom_entreprise`, `email`, `mdp`, `adresse`, `token`) VALUES
(3, 'samir', 'Samir', 'Cevital', 'samir@gamil.Com', '$2y$12$7jqFcJl3vq5RreToYZcILuC1eI0GMlqa4YY2K8Ac..ur32jIqh206', NULL, NULL),
(10, 'hakim', 'Hakim', 'SEAAL', 'hakim@gmail.com', '$2y$12$7jqFcJl3vq5RreToYZcILuC1eI0GMlqa4YY2K8Ac..ur32jIqh206', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `code_specialite` int(11) NOT NULL,
  `nom_specialite` varchar(50) NOT NULL,
  `ref_formation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `specialite`
--

INSERT INTO `specialite` (`code_specialite`, `nom_specialite`, `ref_formation`) VALUES
(1, 'Management', 5),
(2, 'Logistique', 7),
(3, 'Electromechanique', 8),
(4, 'Sécurité', 10),
(5, 'Manager', 5),
(6, 'Electricien', 9),
(7, 'Manger', 5),
(8, 'Ingénieur des systèmes d\'information', 1),
(9, 'gerant', 5),
(10, 'Analyste', 2),
(11, 'controlleur', 2),
(12, 'publicité', 4),
(13, 'santé', 2);

-- --------------------------------------------------------

--
-- Structure de la table `specialite_aquise`
--

CREATE TABLE `specialite_aquise` (
  `id_candidat` int(11) NOT NULL,
  `code_specialite` int(11) NOT NULL,
  `etablissement` varchar(50) NOT NULL,
  `date_debut_formation` varchar(11) NOT NULL,
  `date_fin_formation` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `specialite_aquise`
--

INSERT INTO `specialite_aquise` (`id_candidat`, `code_specialite`, `etablissement`, `date_debut_formation`, `date_fin_formation`) VALUES
(1, 8, 'UMMTO', '2000-01-01', '2000-01-30'),
(2, 5, 'UMMTO', '2015-11-05', '2020-05-03'),
(3, 8, 'UMMTO', '2010-10-01', '2015-12-03'),
(4, 8, 'BLIDA', '2013-01-01', '2018-01-01');

-- --------------------------------------------------------

--
-- Structure de la table `specialite_requise`
--

CREATE TABLE `specialite_requise` (
  `code_offre` int(11) NOT NULL,
  `code_specialite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `specialite_requise`
--

INSERT INTO `specialite_requise` (`code_offre`, `code_specialite`) VALUES
(4, 2),
(5, 3),
(6, 4),
(7, 5),
(8, 6),
(15, 6),
(9, 7),
(10, 8),
(17, 8),
(11, 9),
(12, 10),
(13, 11),
(14, 12),
(16, 13);

-- --------------------------------------------------------

--
-- Structure de la table `wilaya`
--

CREATE TABLE `wilaya` (
  `num_wilaya` int(11) NOT NULL,
  `nom_wilaya` varchar(25) NOT NULL,
  `nom_ar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `wilaya`
--

INSERT INTO `wilaya` (`num_wilaya`, `nom_wilaya`, `nom_ar`) VALUES
(1, 'Adrar', 'أدرار'),
(2, 'Chlef', ' الشلف'),
(3, 'Laghouat', 'الأغواط'),
(4, 'Oum El Bouaghi', 'أم البواقي'),
(5, 'Batna', 'باتنة'),
(6, 'Béjaïa', ' بجاية'),
(7, 'Biskra', 'بسكرة'),
(8, 'Béchar', 'بشار'),
(9, 'Blida', 'البليدة'),
(10, 'Bouira', 'البويرة'),
(11, 'Tamanrasset', 'تمنراست'),
(12, 'Tébessa', 'تبسة'),
(13, 'Tlemcen', 'تلمسان'),
(14, 'Tiaret', 'تيارت'),
(15, 'Tizi Ouzou', 'تيزي وزو'),
(16, 'Alger', 'الجزائر'),
(17, 'Djelfa', 'الجلفة'),
(18, 'Jijel', 'جيجل'),
(19, 'Sétif', 'سطيف'),
(20, 'Saïda', 'سعيدة'),
(21, 'Skikda', 'سكيكدة'),
(22, 'Sidi Bel Abbès', 'سيدي بلعباس'),
(23, 'Annaba', 'عنابة'),
(24, 'Guelma', 'قالمة'),
(25, 'Constantine', 'قسنطينة'),
(26, 'Médéa', 'المدية'),
(27, 'Mostaganem', 'مستغانم'),
(28, 'M\'Sila', 'المسيلة'),
(29, 'Mascara', 'معسكر'),
(30, 'Ouargla', 'ورقلة'),
(31, 'Oran', 'وهران'),
(32, 'El Bayadh', 'البيض'),
(33, 'Illizi', 'إليزي'),
(34, 'Bordj Bou Arreridj', 'برج بوعريريج'),
(35, 'Boumerdès', 'بومرداس'),
(36, 'El Tarf', 'الطارف'),
(37, 'Tindouf', 'تندوف'),
(38, 'Tissemsilt', 'تيسمسيلت'),
(39, 'El Oued', 'الوادي'),
(40, 'Khenchela', 'خنشلة'),
(41, 'Souk Ahras', 'سوق أهراس'),
(42, 'Tipaza', 'تيبازة'),
(43, 'Mila', 'ميلة'),
(44, 'Aïn Defla', 'عين الدفلة'),
(45, 'Naâma', 'النعامة'),
(46, 'Aïn Témouchent', 'عين تيموشنت'),
(47, 'Ghardaïa', 'غرداية'),
(48, 'Relizane', 'غليزان');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `autre_competence`
--
ALTER TABLE `autre_competence`
  ADD PRIMARY KEY (`code_competence`);

--
-- Index pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD PRIMARY KEY (`id_candidat`),
  ADD KEY `num_daira` (`num_daira`);

--
-- Index pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD PRIMARY KEY (`id_candidat`,`code_offre`),
  ADD KEY `code_offre` (`code_offre`);

--
-- Index pour la table `competence_aquise`
--
ALTER TABLE `competence_aquise`
  ADD PRIMARY KEY (`id_candidat`,`code_competence`),
  ADD KEY `codecomppp` (`code_competence`);

--
-- Index pour la table `competence_demandee`
--
ALTER TABLE `competence_demandee`
  ADD PRIMARY KEY (`code_offre`,`code_competence`),
  ADD KEY `code_comp` (`code_competence`);

--
-- Index pour la table `competence_linguistique`
--
ALTER TABLE `competence_linguistique`
  ADD PRIMARY KEY (`code_langue`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `daira`
--
ALTER TABLE `daira`
  ADD PRIMARY KEY (`num_daira`),
  ADD KEY `num_wilaya` (`num_wilaya`);

--
-- Index pour la table `experience_aquise`
--
ALTER TABLE `experience_aquise`
  ADD PRIMARY KEY (`id_candidat`,`ref_experience`),
  ADD KEY `ref_exp` (`ref_experience`);

--
-- Index pour la table `experience_professionnele`
--
ALTER TABLE `experience_professionnele`
  ADD PRIMARY KEY (`ref_experience`);

--
-- Index pour la table `experience_requise`
--
ALTER TABLE `experience_requise`
  ADD PRIMARY KEY (`code_offre`,`ref_experience`),
  ADD KEY `refexp` (`ref_experience`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`ref_formation`),
  ADD KEY `ref_formation` (`ref_formation`),
  ADD KEY `ref_formation_2` (`ref_formation`);

--
-- Index pour la table `langue_demandee`
--
ALTER TABLE `langue_demandee`
  ADD PRIMARY KEY (`code_offre`,`code_langue`),
  ADD KEY `code_lanngue` (`code_langue`);

--
-- Index pour la table `langue_maitrisee`
--
ALTER TABLE `langue_maitrisee`
  ADD PRIMARY KEY (`id_candidat`,`code_langue`),
  ADD KEY `code_langue` (`code_langue`);

--
-- Index pour la table `note_candidat`
--
ALTER TABLE `note_candidat`
  ADD PRIMARY KEY (`id_candidat`,`code_offre`),
  ADD KEY `codeeoffre` (`code_offre`);

--
-- Index pour la table `offre_emploi`
--
ALTER TABLE `offre_emploi`
  ADD PRIMARY KEY (`code_offre`),
  ADD KEY `id_recruteur` (`id_recruteur`),
  ADD KEY `num_daira` (`num_daira`);

--
-- Index pour la table `recruteur`
--
ALTER TABLE `recruteur`
  ADD PRIMARY KEY (`id_recruteur`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`code_specialite`),
  ADD KEY `ref_formation` (`ref_formation`),
  ADD KEY `ref_formation_2` (`ref_formation`);

--
-- Index pour la table `specialite_aquise`
--
ALTER TABLE `specialite_aquise`
  ADD PRIMARY KEY (`id_candidat`,`code_specialite`),
  ADD KEY `code_spee` (`code_specialite`),
  ADD KEY `code_specialite` (`code_specialite`);

--
-- Index pour la table `specialite_requise`
--
ALTER TABLE `specialite_requise`
  ADD PRIMARY KEY (`code_offre`,`code_specialite`),
  ADD KEY `code_spec` (`code_specialite`),
  ADD KEY `code_specialite` (`code_specialite`);

--
-- Index pour la table `wilaya`
--
ALTER TABLE `wilaya`
  ADD PRIMARY KEY (`num_wilaya`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `autre_competence`
--
ALTER TABLE `autre_competence`
  MODIFY `code_competence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `candidat`
--
ALTER TABLE `candidat`
  MODIFY `id_candidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `experience_professionnele`
--
ALTER TABLE `experience_professionnele`
  MODIFY `ref_experience` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `ref_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `offre_emploi`
--
ALTER TABLE `offre_emploi`
  MODIFY `code_offre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `recruteur`
--
ALTER TABLE `recruteur`
  MODIFY `id_recruteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `code_specialite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD CONSTRAINT `numdairra` FOREIGN KEY (`num_daira`) REFERENCES `daira` (`num_daira`);

--
-- Contraintes pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD CONSTRAINT `codeofffff` FOREIGN KEY (`code_offre`) REFERENCES `offre_emploi` (`code_offre`),
  ADD CONSTRAINT `id_candiatt` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id_candidat`);

--
-- Contraintes pour la table `competence_aquise`
--
ALTER TABLE `competence_aquise`
  ADD CONSTRAINT `code_cccccc` FOREIGN KEY (`code_competence`) REFERENCES `autre_competence` (`code_competence`),
  ADD CONSTRAINT `id_cand` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id_candidat`);

--
-- Contraintes pour la table `competence_demandee`
--
ALTER TABLE `competence_demandee`
  ADD CONSTRAINT `codecccccccc` FOREIGN KEY (`code_competence`) REFERENCES `autre_competence` (`code_competence`),
  ADD CONSTRAINT `codeoffffff` FOREIGN KEY (`code_offre`) REFERENCES `offre_emploi` (`code_offre`);

--
-- Contraintes pour la table `daira`
--
ALTER TABLE `daira`
  ADD CONSTRAINT `num_wilyyya` FOREIGN KEY (`num_wilaya`) REFERENCES `wilaya` (`num_wilaya`);

--
-- Contraintes pour la table `experience_aquise`
--
ALTER TABLE `experience_aquise`
  ADD CONSTRAINT `idcandd` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id_candidat`),
  ADD CONSTRAINT `reff_exp` FOREIGN KEY (`ref_experience`) REFERENCES `experience_professionnele` (`ref_experience`);

--
-- Contraintes pour la table `experience_requise`
--
ALTER TABLE `experience_requise`
  ADD CONSTRAINT `codeofre` FOREIGN KEY (`code_offre`) REFERENCES `offre_emploi` (`code_offre`),
  ADD CONSTRAINT `reffffffff` FOREIGN KEY (`ref_experience`) REFERENCES `experience_professionnele` (`ref_experience`);

--
-- Contraintes pour la table `langue_demandee`
--
ALTER TABLE `langue_demandee`
  ADD CONSTRAINT `code_lanngue` FOREIGN KEY (`code_langue`) REFERENCES `competence_linguistique` (`code_langue`),
  ADD CONSTRAINT `codeofreee` FOREIGN KEY (`code_offre`) REFERENCES `offre_emploi` (`code_offre`);

--
-- Contraintes pour la table `langue_maitrisee`
--
ALTER TABLE `langue_maitrisee`
  ADD CONSTRAINT `code_langue` FOREIGN KEY (`code_langue`) REFERENCES `competence_linguistique` (`code_langue`),
  ADD CONSTRAINT `idcanddd` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id_candidat`);

--
-- Contraintes pour la table `note_candidat`
--
ALTER TABLE `note_candidat`
  ADD CONSTRAINT `codeoffreee` FOREIGN KEY (`code_offre`) REFERENCES `offre_emploi` (`code_offre`),
  ADD CONSTRAINT `idcandidat` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id_candidat`);

--
-- Contraintes pour la table `offre_emploi`
--
ALTER TABLE `offre_emploi`
  ADD CONSTRAINT `id_recruteur` FOREIGN KEY (`id_recruteur`) REFERENCES `recruteur` (`id_recruteur`),
  ADD CONSTRAINT `num_daira` FOREIGN KEY (`num_daira`) REFERENCES `daira` (`num_daira`);

--
-- Contraintes pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD CONSTRAINT `forrr` FOREIGN KEY (`ref_formation`) REFERENCES `formation` (`ref_formation`);

--
-- Contraintes pour la table `specialite_aquise`
--
ALTER TABLE `specialite_aquise`
  ADD CONSTRAINT `codespec` FOREIGN KEY (`code_specialite`) REFERENCES `specialite` (`code_specialite`),
  ADD CONSTRAINT `id_ccoo` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id_candidat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
