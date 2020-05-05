Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseid` varchar(60) NOT NULL,
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
('1', 'Explication du principe de Mole', 'Cours de Physique Chimie sur les moles', 'Dans ce cours nous allons vous expliquer ce qu\'est une mole', 'c\'est un url', 'oui'),
('2', 'test', 'test', 'test', 'test', 'oui'),
('3', 'vyjhb ,kjhg', 'uiogyhbkjy', 'iuykgujhvbn yguhjkbn uyhjb,n', 'uihjkbniuhjkn', 'delete'),
('4', 'uyvhjbn ', 'ygbhjn ', 'uhijkn', 'uhjkn', 'oui');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `idquiz` int(11) NOT NULL,
  `quiz_url` varchar(2000) NOT NULL,
  `courseid` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usercourses`
--

CREATE TABLE `usercourses` (
  `idusercourses` int(255) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `courseid` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usercourses`
--

INSERT INTO `usercourses` (`idusercourses`, `score`, `username`, `courseid`) VALUES
(1, 2, 'LemuelFalret', '1'),
(2, 1, 'LemuelFalret', '2'),
(3, NULL, 'YanisFatmi', '3'),
(5, NULL, 'YanisFatmi', '4'),
(6, NULL, 'LemuelFalret', '4');

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
('JeremyDain', 'Jeremy', 'Dain', 'Jeremy', 'user'),
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
  ADD KEY `usercourses_courses0_FK` (`courseid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usercourses`
--
ALTER TABLE `usercourses`
  MODIFY `idusercourses` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `usercourses_courses0_FK` FOREIGN KEY (`courseid`) REFERENCES `courses` (`courseid`),
  ADD CONSTRAINT `usercourses_users_FK` FOREIGN KEY (`username`) REFERENCES `users` (`username`);