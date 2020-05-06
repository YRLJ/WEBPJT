-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 04:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
(1, 'Explication du principe de Mole', 'Cours de Physique Chimie sur les moles', 'Dans ce cours nous allons vous expliquer ce qu\'est une mole', 'c\'est un url', 'oui'),
(2, 'test', 'test', 'test', 'test', 'oui'),
(4, 'uyvhjbn ', 'ygbhjn ', 'uhijkn', 'uhjkn', 'oui'),
(5, 'football', 'espn', 'The last dance 77124', './uploads/Cor_Maths 8.pdf', 'oui'),
(6, 'Beaute', 'Le Plus Beau', 't\'as vu c\'est trop bien et tout ', './uploads/V-espaces-vectoriels.pdf', 'oui'),
(7, 'Netflix', 'Outer Banks', 'Ce cours traite de outer banks', './uploads/Cor_Maths 8.pdf', 'oui'),
(8, 'Fatmi', 'Yanis Fatmi en y', 'Yanis fatmi en y suer son scoobite a l aide des maths 8', './uploads/95830675_182654589541706_9006524356465000448_n.jpg', 'oui'),
(9, 'C\'est un test', 'Test', 'ceci est un test', './uploads/95830675_182654589541706_9006524356465000448_n.jpg', 'oui'),
(10, 'Fatmi', 'Yanis en Z', 'ceci est un test', './uploads/95830675_182654589541706_9006524356465000448_n.jpg', 'oui'),
(11, 'UI', 'UIUI', 'CONTENU', './uploads/95883664_570465457179845_7540078215004422144_n.jpg', 'non'),
(12, 'UI', 'UIUI', 'CONTENU', './uploads/95883664_570465457179845_7540078215004422144_n.jpg', 'non'),
(13, 'UI', 'UIUI', 'CONTENU', './uploads/', 'non'),
(14, 'ceci est une video lourde', 'Video Lourde 101', 'oui oui ', './uploads/test.mp4', 'oui');

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
(1, '../quiz/klbcohsjf3.json', 1),
(3, 'test', 7),
(4, '../quiz/c2unj32ibe.json', 2),
(5, '../quiz/ti2ngasa85.json', 10),
(6, '../quiz/mg5cwmi9ha.json', 11),
(7, '../quiz/ap8qma8m3c.json', 14);

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
(1, 2, 'LemuelFalret', 1),
(2, 1, 'LemuelFalret', 2),
(5, NULL, 'YanisFatmi', 4),
(6, NULL, 'LemuelFalret', 4),
(11, NULL, 'YanisFatmi', 1),
(12, NULL, 'YanisFatmi', 2),
(13, 100, 'Jerome', 1),
(14, NULL, 'Jerome', 2),
(15, NULL, 'Jerome', 4),
(16, 10, 'JeremyDain', 10);

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
('iygv', 'ezf', 'uyfg', 'iyv', 'user'),
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
  MODIFY `courseid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `idquiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usercourses`
--
ALTER TABLE `usercourses`
  MODIFY `idusercourses` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
