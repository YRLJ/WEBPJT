-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 07, 2020 at 10:00 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `webpjt`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseid` int(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `url` varchar(2000) NOT NULL,
  `valide` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseid`, `subject`, `title`, `content`, `url`, `valide`) VALUES
(15, 'Espagnol ', 'Présent indicatif - Espagnol - C1', 'Verbes se terminant par -AR comme CANTAR:\r\nles  terminaisons sont : -o,-as,-a,-amos,-áis,-an\r\n\r\n\r\nVerbes se terminant par -ER comme Comer: \r\nles  terminaisons sont :-o,-es,-e,-emos,-éis,-en\r\n\r\n\r\nVerbes se terminant par -IR comme VIVIR\r\n les  terminaisons sont :-o,-es,-e,-imos,-ís,-en\r\n\r\n\r\nAttention !\r\n\r\n\r\nTrois verbes irréguliers :\r\n\r\nPoder=> pouvoir\r\n\r\nyo puedo, tú puedes, él (ella) puede, nosotros podemos, vosotros podéis, ellos (ellas) pueden\r\n\r\nQuerer=> aimer, vouloir\r\n\r\nyo quiero, tú quieres, él (ella) quiere, nosotros queremos, vosotros queréis, ellos (ellas) quieren\r\n\r\nTener=> avoir\r\n\r\nyo tengo, tú tienes, él (ella) tiene, nosotros tenemos, vosotros tenéis, ellos (ellas) tienen', './uploads/Espagnol_presentindicatif.pdf', 'oui'),
(16, 'React JS', 'Introduction React JS', 'React.js est devenu une référence incontournable pour le développement d\'expériences utilisateurs riches dans le navigateur web, y compris sur mobiles.\r\n\r\nCe cours vise à donner de solides bases sur React.js en explorant l\'ensemble de ses concepts et possibilités, pour faciliter ensuite l\'exploration du très vaste écosystème qui gravite autour.\r\n\r\nNous allons commencer par découvrir les concepts-clés de React.js et par mettre en place un environnement de travail performant. Pas à pas, nous explorerons les fondamentaux du framework avant d\'en dégager les subtilités et la puissance.\r\n\r\nCe cours vise particulièrement à démonter les pièges classiques que rencontrent les débutants - et même certains confirmés - sur React.js, et à mettre en lumière les meilleures pratiques établies chaque fois que possible. C\'est la raison pour laquelle un volet entier sera consacré à la mise en place de tests automatisés des composants React.js.\r\n\r\nPensez à utiliser un IDE pour la réalisation de ce cours, par exemple Visual Studio Code.\r\n', './uploads/React js.pdf', 'oui'),
(17, 'Cooking', 'Cuisiner comme un chef', 'Dans ce cours vous allez apprendre les temps de cuisson nécessaire pour la cuisson de nombreux aliments de la cuisine française a.k.a la barbac.', './uploads/Cours de cuisson.pdf', 'oui'),
(18, 'Maîtrise d\'Adobe Creative Cloud', 'Créer un paysage sous Illustrator et Photoshop', 'Aujourd’hui, on va apprendre à créer un joli paysage sur Illustrator pour impressionner la galerie. Quand je dis « paysage », j’entends tout ce que vous voulez : les chutes du Niagara, l’espace, un champ de mines, peu importe. N’oubliez pas qu’en termes de créativité, la seule chose capable de vous limiter est votre imagination. Parmi les outils qui peuvent vous être utiles, on peut notamment compter l’outil Plume, dont je rappelle les commandes juste ici :\r\n-	Maintenir et Tirer pour orienter la courbe\r\n-	Alt et Click en dehors de la courbe pendant un tracé pour arrêter le tracé\r\n-	Click pour passer d’une courbe à un tracé rectiligne\r\n-	Alt et Click pour interagir avec un tracé\r\n-	Delete pour supprimer un point d’ancrage\r\n\r\nSoyez intelligents et jouez avec vos calques : bloquez ceux dont vous êtes sûrs que vous êtes satisfaits, et dupliquez-en pour jouer avec l’opacité des copies.\r\n\r\nEnfin, pour donner un effet Glow à des objets, vous pouvez aussi aller dans le menu Objet > Tracé > Décalage, vous créez plusieurs décalages de l’objet initial, vous sélectionnez le tout, puis vous appliquez à tout les objets le même dégradé. Enfin, vous modifiez l’opacité des décalages et le tour est joué ! C’est notamment comme ça que j’ai créé les petites lunes de ma planète de verre sur le PDF ci-joint.\r\n', './uploads/Universe.jpg', 'oui'),
(19, 'Test matière', 'Test titre', 'Test contenu', './uploads/coronavirus.pdf', 'non'),
(20, 'Test2 matière', 'Test2 Titre', 'Test2 contenu', './uploads/coronavirus.pdf', 'non');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `idquiz` int(11) NOT NULL,
  `quiz_url` varchar(2000) NOT NULL,
  `courseid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`idquiz`, `quiz_url`, `courseid`) VALUES
(8, '../quiz/opzioqnwn5.json', 15),
(9, '../quiz/uwch0sz9n9.json', 16),
(10, '../quiz/nrs1xz7bi1.json', 17),
(11, '../quiz/7ayzea5a34.json', 18),
(12, '../quiz/bd6qqvm0h5.json', 19),
(13, '../quiz/6qki8o8rpu.json', 20);

-- --------------------------------------------------------

--
-- Table structure for table `usercourses`
--

CREATE TABLE `usercourses` (
  `idusercourses` int(255) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `courseid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usercourses`
--

INSERT INTO `usercourses` (`idusercourses`, `score`, `username`, `courseid`) VALUES
(17, NULL, 'Hugomorray', 15),
(18, 40, 'LemuelFalret', 15),
(19, 100, 'LemuelFalret', 17),
(20, NULL, 'Jerome', 15),
(21, NULL, 'Jerome', 16);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `firstname` varchar(1000) NOT NULL,
  `lastname` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `firstname`, `lastname`, `password`, `type`) VALUES
('Hugomorray', 'Hugo', 'Honore', 'Hugo', 'user'),
('JeremyDain', 'Jeremy', 'Dain', 'Jeremy', 'admin'),
('Jerome', 'Jerome', 'Jerome', 'Jerome', 'user'),
('LemuelFalret', 'Lemuel', 'Falret', 'Lemuel', 'admin'),
('YanisFatmi', 'Yanis', 'Fatmi', 'Yanis', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`idquiz`),
  ADD UNIQUE KEY `quiz_courses_AK` (`courseid`);

--
-- Indexes for table `usercourses`
--
ALTER TABLE `usercourses`
  ADD PRIMARY KEY (`idusercourses`),
  ADD KEY `usercourses_users_FK` (`username`),
  ADD KEY `usercourses_courses_FK` (`courseid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `idquiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usercourses`
--
ALTER TABLE `usercourses`
  MODIFY `idusercourses` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_courses_FK` FOREIGN KEY (`courseid`) REFERENCES `courses` (`courseid`);

--
-- Constraints for table `usercourses`
--
ALTER TABLE `usercourses`
  ADD CONSTRAINT `usercourses_courses_FK` FOREIGN KEY (`courseid`) REFERENCES `courses` (`courseid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usercourses_users_FK` FOREIGN KEY (`username`) REFERENCES `users` (`username`);