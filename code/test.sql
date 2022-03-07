-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 16 août 2020 à 23:49
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_Articles` int(11) NOT NULL,
  `Article_code` varchar(10) DEFAULT NULL,
  `Article_designation` varchar(100) DEFAULT NULL,
  `Article_PUHT` float(10,2) DEFAULT NULL,
  `date_mfg` date DEFAULT NULL,
  `date_exp` date DEFAULT NULL,
  `Article_Qte` int(11) DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_Articles`, `Article_code`, `Article_designation`, `Article_PUHT`, `date_mfg`, `date_exp`, `Article_Qte`, `categorie`, `image`) VALUES
(14, 'b1', 'HerbesanAcérola Premium', 2850.00, '2019-04-16', '2021-08-19', 300, 'bien-etre', 'herbesan.jpg'),
(19, 'b4', 'Nuxe Bio', 2850.50, '2018-04-18', '2020-10-15', 256, 'beaute', 'nuxe.jpg'),
(20, 'b5', 'Masques chirurgicaux', 100.00, '2019-10-09', '2022-06-16', 0, 'hygiene', 'masques.jpg'),
(21, 'b6', 'Gel Hydroalcoolique', 475.00, '2019-08-05', '2021-01-14', 0, 'hygiene', 'gel.jpg'),
(23, 'b8', 'Aderma Exomega', 2945.00, '2019-07-15', '2022-08-19', 0, 'bebe', 'aderma.jpg'),
(24, 'b9', 'BOP Bouleau Olivier', 760.00, '2019-09-19', '2021-05-26', 0, 'bio', 'bop.jpg'),
(25, 'b10', 'Spasmine', 950.00, '2019-09-09', '2021-04-22', 0, 'bio', 'spasmine.jpg'),
(26, 'b11', 'Gants médicaux', 20.00, '2020-08-13', '2023-04-14', 0, 'matmedical', 'gants.jpg'),
(27, 'b12', 'Exacto Thermomètre', 950.00, '2020-07-13', '2021-06-18', 0, 'matmedical', 'exacto.jpg'),
(28, 'b13', 'Anthelmin Vermifuge Chat', 900.00, '2020-03-11', '2021-05-20', 0, 'vetrinaire', 'anthelmin.jpg'),
(29, 'b14', 'Milbemaxtab Vermifuge Chiens', 2700.00, '2020-04-15', '2021-09-08', 0, 'vetrinaire', 'milbemaxtab.jpg'),
(30, 'b15', 'Doliprane 1000 mg comprimé', 380.00, '2020-01-08', '2021-03-17', 0, 'sente', 'doliprane.jpg'),
(31, 'b16', 'Maxilase Maux de gorge Sirop 200 ml', 570.00, '2020-01-15', '2021-01-14', 0, 'sente', 'maxilase.jpg'),
(32, 'b17', 'Anaca3 Ventre Plat', 3800.00, '2019-09-10', '2021-08-19', 0, 'sente', 'anaca3.jpg'),
(33, 'b18', 'Bion 3 Défense Adultes', 2800.00, '2020-02-11', '2021-10-14', 0, 'bien-etre', 'Bion.jpg'),
(34, 'b5', 'Masques chirurgicaux', 100.00, '2019-10-09', '2022-06-16', 0, 'hygiene', 'masques.jpg'),
(35, 'b6', 'Gel Hydroalcoolique', 475.00, '2019-08-05', '2021-01-14', 0, 'hygiene', 'gel.jpg'),
(36, 'b7', 'Mustela Liniment Toilette du Siège', 1235.00, '2019-09-26', '2021-12-14', 0, 'bebe', 'mustela.jpg'),
(37, 'b8', 'Aderma Exomega', 2945.00, '2019-07-15', '2022-08-19', 0, 'bebe', 'aderma.jpg'),
(38, 'b9', 'BOP Bouleau Olivier', 760.00, '2019-09-19', '2021-05-26', 0, 'bio', 'bop.jpg'),
(39, 'b10', 'Spasmine', 950.00, '2019-09-09', '2021-04-22', 0, 'bio', 'spasmine.jpg'),
(40, 'b11', 'Gants médicaux', 20.00, '2020-08-13', '2023-04-14', 0, 'matmedical', 'gants.jpg'),
(41, 'b12', 'Exacto Thermomètre', 950.00, '2020-07-13', '2021-06-18', 0, 'matmedical', 'exacto.jpg'),
(42, 'b13', 'Anthelmin Vermifuge Chat', 900.00, '2020-03-11', '2021-05-20', 0, 'vetrinaire', 'anthelmin.jpg'),
(43, 'b14', 'Milbemaxtab Vermifuge Chiens', 2700.00, '2020-04-15', '2021-09-08', 0, 'vetrinaire', 'milbemaxtab.jpg'),
(44, 'b15', 'Doliprane 1000 mg comprimé', 380.00, '2020-01-08', '2021-03-17', 0, 'sente', 'doliprane.jpg'),
(45, 'b16', 'Maxilase Maux de gorge Sirop 200 ml', 570.00, '2020-01-15', '2021-01-14', 0, 'sente', 'maxilase.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `categorie`) VALUES
(37, 'vetrinaire'),
(38, 'sente'),
(39, 'matmedical'),
(40, 'hygiene'),
(41, 'bio'),
(42, 'bien-etre'),
(43, 'bebe'),
(44, 'beaute');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `Client_nom` varchar(50) DEFAULT NULL,
  `Client_prenom` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mot_de_passe` varchar(50) DEFAULT NULL,
  `Client_civilite` varchar(50) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `Client_nom`, `Client_prenom`, `email`, `mot_de_passe`, `Client_civilite`, `telephone`) VALUES
(11, 'Maybery', 'Gérald', 'mmayberya@yelp.com', 'EdgQjCyC', 'M', '896-875-8528'),
(12, 'McClymond', 'Célia', 'cmcclymondb@shutterfly.com', 'rzrFLew', 'F', '780-922-9712'),
(13, 'Woolmer', 'Aurélie', 'awoolmerc@engadget.com', 'KZlI6jxkK', 'M', '300-217-3101'),
(14, 'Hellcat', 'Eléa', 'ghellcatd@adobe.com', 'ftliSL', 'F', '908-980-3604'),
(15, 'Everall', 'Célestine', 'aeveralle@google.de', 'opzAPuarC', 'M', '602-539-7578'),
(16, 'Maken', 'Maïlis', 'tmakenf@godaddy.com', '8SWuZrAINWlq', 'M', '611-780-0288'),
(17, 'Biford', 'Loïs', 'rbifordg@blog.com', 'WzWG4G7zL', 'F', '773-812-2197'),
(18, 'Desborough', 'Clémentine', 'kdesboroughh@disqus.com', 'UKaD8FZ4s', 'M', '182-661-2741'),
(19, 'Davidwitz', 'Cécile', 'ndavidwitzi@eepurl.com', 'DvxwXRd8K5tT', 'M', '287-986-1287'),
(20, 'Philippet', 'Naëlle', 'nphilippetj@hatena.ne.jp', 'MUKS6LEM', 'M', '829-551-0899'),
(21, 'Newarte', 'Zoé', 'tnewartek@dmoz.org', 'vCSUqIUsW', 'F', '320-655-0214'),
(22, 'Haggas', 'Camélia', 'ghaggasl@ameblo.jp', 'IDcxXv', 'M', '870-882-1790'),
(23, 'Rooney', 'Mélina', 'crooneym@cyberchimps.com', 'Afj6kCVtt', 'F', '372-369-0549'),
(24, 'Maruska', 'Maïlis', 'amaruskan@oakley.com', 'J2P5ptjfBAMT', 'M', '385-896-5336'),
(25, 'Plunkett', 'Gaétane', 'aplunketto@house.gov', 'xIDHNX4O', 'M', '315-631-9465'),
(26, 'Blaschek', 'Andrée', 'mblaschekp@pcworld.com', 'jXANaftYjZFw', 'F', '371-992-3167'),
(27, 'Anstead', 'Clémence', 'mansteadq@prnewswire.com', '4ipyiirT', 'M', '414-717-6121'),
(28, 'Zahor', 'Valérie', 'gzahorr@indiatimes.com', '0LHUNcsC', 'M', '574-299-1562'),
(29, 'Starmore', 'Renée', 'rstarmores@qq.com', 'XQbaOvEDgkcq', 'M', '409-721-9973'),
(30, 'Gino', 'Anaël', 'vginot@nbcnews.com', 'XiRmi7V6', 'M', '814-902-0952'),
(31, 'Vaune', 'Kuí', 'rvauneu@thetimes.co.uk', 'aZ2eGewDw', 'M', '920-829-7176'),
(32, 'Plain', 'Léane', 'splainv@microsoft.com', 'qVjL4WqsQ', 'M', '206-863-1534'),
(33, 'Gallgher', 'Maëline', 'rgallgherw@berkeley.edu', '7I5uDPRFIi', 'M', '689-272-3523'),
(34, 'Karslake', 'Maëlys', 'rkarslakex@newsvine.com', 'jrcNA3zlGrs', 'M', '666-459-8198'),
(35, 'Evenden', 'Lén', 'gevendeny@1688.com', 'ODj0QSpx3', 'M', '304-209-3296'),
(36, 'MacArd', 'Véronique', 'dmacardz@google.com.br', 'VsUKXbD', 'F', '768-856-6208'),
(37, 'Annesley', 'Marie-ève', 'bannesley10@wordpress.org', 'n0tnnu', 'M', '379-633-3009'),
(38, 'Vasyunin', 'Ruò', 'bvasyunin11@squidoo.com', 'Md8Q6JoBH', 'F', '461-658-4695'),
(39, 'Brislawn', 'Anaé', 'bbrislawn12@sphinn.com', '1PUj1UNw2p', 'F', '640-246-0941'),
(40, 'Langtry', 'Salomé', 'alangtry13@psu.edu', 'wlbj4LhbY1W', 'F', '321-522-7932'),
(42, 'Longmuir', 'Ruì', 'clongmuir15@mayoclinic.com', 'SrZVkl', 'M', '439-907-4137'),
(43, 'Denyukhin', 'Dorothée', 'ldenyukhin16@dailymotion.com', 'lCWGD0NIxhY', 'M', '433-207-0675'),
(44, 'Simla', 'Aí', 'asimla17@sfgate.com', 'EhRog4', 'F', '228-552-4345'),
(45, 'Shorter', 'Mårten', 'cshorter18@google.com', 'tegxbKXOJ656', 'F', '626-590-0880'),
(46, 'Briton', 'Réjane', 'ubriton19@aboutads.info', 'uWlY6ecu', 'M', '280-440-4361'),
(47, 'Pasquale', 'Yú', 'bpasquale1a@umn.edu', 'kr9cgH2O1', 'F', '122-135-2330'),
(48, 'Blackaller', 'Yóu', 'pblackaller1b@sbwire.com', 'cUQYnw', 'M', '293-408-0594'),
(49, 'Taggerty', 'Josée', 'rtaggerty1c@studiopress.com', 'Kqmg4tPbW', 'M', '945-265-8640'),
(50, 'Sein', 'Naëlle', 'esein1d@cam.ac.uk', '1rFowRoId', 'F', '421-651-3111'),
(51, 'yanis', 'lagab', 'yanispro555@gmail.com', '123', 'Monsieur', '0555472356'),
(52, 'kroun', 'arezki', 'krounarezki308@gmail.com', '159', 'Monsieur', '05');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id_com` int(11) NOT NULL,
  `Com_client` int(11) NOT NULL,
  `Com_montant` float NOT NULL,
  `Com_date` date NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id_com`, `Com_client`, `Com_montant`, `Com_date`, `email`) VALUES
(47, 11, 600, '2020-08-16', 'hello@n.com'),
(48, 11, 600, '2020-08-16', 'mmayberya@yelp.com');

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `id_liv` int(11) NOT NULL,
  `num_com` int(11) NOT NULL,
  `modelivraison` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codepostal` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `NumMsg` int(11) NOT NULL,
  `dateMsg` date NOT NULL,
  `contenuMsg` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`NumMsg`, `dateMsg`, `contenuMsg`, `email`) VALUES
(12, '2020-06-26', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\n\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', 'yreameb@bloglovin.com'),
(13, '2020-07-10', 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 'jmearingc@amazon.co.uk'),
(14, '2020-07-20', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\n\nIn congue. Etiam justo. Etiam pretium iaculis justo.', 'kmaccallisterd@netvibes.com'),
(15, '2020-05-10', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 'ngrishukove@sun.com'),
(16, '2019-08-12', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', 'izamoranof@google.it'),
(17, '2020-07-06', 'Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.', 'mknightg@theguardian.com'),
(18, '2019-11-08', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 'jbertholinh@usda.gov'),
(19, '2020-02-02', 'Fusce consequat. Nulla nisl. Nunc nisl.', 'rdudmarshi@google.co.uk'),
(20, '2020-04-20', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin risus. Praesent lectus.', 'dperingj@netvibes.com'),
(21, '2020-05-30', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'rmussallik@purevolume.com'),
(22, '2020-01-30', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\n\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 'hallgoodl@tmall.com'),
(23, '2020-01-04', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 'aetonm@scientificamerican.com'),
(24, '2020-03-31', 'Fusce consequat. Nulla nisl. Nunc nisl.', 'kgeramn@hatena.ne.jp'),
(25, '2019-11-02', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 'dmaccurlyeo@jalbum.net'),
(26, '2020-03-03', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'ecostleyp@wunderground.com'),
(27, '2019-08-30', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\n\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 'rcheversq@pagesperso-orange.fr'),
(28, '2020-07-28', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 'mrosenbargr@dailymail.co.uk'),
(29, '2020-05-16', 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\n\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', 'wwillattss@whitehouse.gov'),
(30, '2020-04-04', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 'echateaut@ebay.co.uk'),
(31, '2020-03-28', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\n\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 'kscandrettu@java.com'),
(32, '2019-12-29', 'In congue. Etiam justo. Etiam pretium iaculis justo.\n\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 'bpoolmanv@themeforest.net'),
(33, '2019-08-16', 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 'shailyw@uol.com.br'),
(34, '2020-05-26', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\n\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'bmccreadyx@java.com'),
(35, '2020-02-21', 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\n\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 'aiorizziy@trellian.com'),
(36, '2019-12-02', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\n\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'rdumelowz@1688.com'),
(37, '2019-10-16', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\n\nIn congue. Etiam justo. Etiam pretium iaculis justo.', 'tcollcutt10@moonfruit.com'),
(38, '2020-03-27', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\n\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 'mpetruskevich11@arizona.edu'),
(39, '2020-03-27', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\n\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'fcrummie12@reddit.com'),
(40, '2020-04-03', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 'tschimaschke13@cam.ac.uk'),
(41, '2019-09-22', 'Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\n\nNam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.', 'tanand14@prnewswire.com'),
(42, '2020-03-07', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 'gganders15@businessinsider.com'),
(43, '2019-12-27', 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.', 'jbladge16@printfriendly.com'),
(44, '2020-03-27', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'jstare17@friendfeed.com'),
(45, '2020-02-13', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 'wcuell18@admin.ch'),
(46, '2019-09-14', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\n\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', 'mavraam19@example.com'),
(47, '2020-05-30', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\n\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'rwhitloe1a@vk.com'),
(48, '2020-01-13', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'uologhlen1b@joomla.org'),
(49, '2019-11-01', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'yduckwith1c@nih.gov'),
(51, '2020-08-10', 'Hey boii how are you , ummm so i just wanted to say hi bcs its a test message', 'wvscaelkarmnwunvhf@awdrt.net'),
(53, '2020-08-10', 'Its a message Test ', 'yanispro555@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `ordonnance`
--

CREATE TABLE `ordonnance` (
  `id_ordonnance` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ordonnance`
--

INSERT INTO `ordonnance` (`id_ordonnance`, `email`, `image`) VALUES
(13, 'yanispro555@gmail.com', 'perscription.jpg'),
(14, 'krounarezki308@gmail.com', 'images1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `id_pai` int(11) NOT NULL,
  `num_com` int(11) NOT NULL,
  `modepaiement` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id_Articles` int(11) NOT NULL,
  `Article_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Article_designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Article_PUHT` float NOT NULL,
  `date_mfg` date NOT NULL,
  `date_exp` date NOT NULL,
  `Article_Qte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Article_ancp` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id_Articles`, `Article_code`, `Article_designation`, `Article_PUHT`, `date_mfg`, `date_exp`, `Article_Qte`, `categorie`, `image`, `Article_ancp`) VALUES
(7, 'b23', 'Actisoufre 100 ml', 1200, '2019-10-16', '2021-11-18', '60', 'bio', 'actisoufre.jpg', 1250),
(8, 'b24', 'Capstar 11,4 mg Chat', 2600, '2020-01-15', '2021-06-10', '39', 'vetrinaire', 'capstar.jpg', 3000);

-- --------------------------------------------------------

--
-- Structure de la table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `numero_tel` varchar(50) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `numero_tel`, `picture`) VALUES
(1, 'Yassmine HadjAli', 'yassmine@gmail.com', 'yassmine', '0555555555', 'Susano.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_Articles`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id_com`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`id_liv`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`NumMsg`);

--
-- Index pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  ADD PRIMARY KEY (`id_ordonnance`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id_pai`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id_Articles`);

--
-- Index pour la table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_Articles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `id_liv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `NumMsg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  MODIFY `id_ordonnance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `id_pai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id_Articles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
