-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 10:08 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `major_proj`
--

-- --------------------------------------------------------




-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `pid` int(5) NOT NULL,
  `mail_id` varchar(25) NOT NULL,
  `data` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`pid`, `mail_id`, `data`) VALUES
(1, 'varsha@gmail.com', 'In home-based elderly care service, how to precisely recognize activities is a key issue in the design and implementation of context-aware service for elderly people. Existing research works reveal that those approaches ignore the characteristics of activity diversity, and similarity and the features of activities of elderly people at home, so recognition accuracy of those approaches are not high enough for real-life applications. Thus, in this paper, we first study the types of activities in home-based elderly care service. Then, we propose a two-stage elderly home activity recognition method based on random forest and activity similarity. The method uses improved random forest to obtain a preliminary result in the first stage. Then, the correlation between activity, location, and time is employed to judge the rationality of the result. The similarity of activities is further used to correct the results in the second stage. We set up a series of experiments to evaluate the effectivene'),
(2, 'varsha@gmail.com', 'In home-based elderly care service, how to precisely recognize activities is a key issue in the design and implementation of context-aware service for elderly people. Existing research works reveal that those approaches ignore the characteristics of activity diversity, and similarity and the features of activities of elderly people at home, so recognition accuracy of those approaches are not high enough for real-life applications. Thus, in this paper, we first study the types of activities in home-based elderly care service. Then, we propose a two-stage elderly home activity recognition method based on random forest and activity similarity. The method uses improved random forest to obtain a preliminary result in the first stage. Then, the correlation between activity, location, and time is employed to judge the rationality of the result. The similarity of activities is further used to correct the results in the second stage. We set up a series of experiments to evaluate the effectivene');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `mail_id` varchar(25) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `upass` varchar(10) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`mail_id`, `uname`, `upass`, `phone`) VALUES
('harsha@gmail.com', 'harsha', '1234', 9099090990),
('varsha@gmail.com', 'varsha', '1234', 9999999999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `mail_id` (`mail_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`mail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `pid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`mail_id`) REFERENCES `user` (`mail_id`),
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`mail_id`) REFERENCES `user` (`mail_id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`mail_id`) REFERENCES `user` (`mail_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
