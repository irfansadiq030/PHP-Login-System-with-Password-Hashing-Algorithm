-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 07:59 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `mobile`, `password`, `confirm_password`) VALUES
(2, 'Irfan Sadiq', 'irfansadiq030@gmail.com', '03087884179', '$2y$10$YuvurLs2JHyPDTWN.asngu0HgaTqI3X95gdEoChYyOZROIISlIkBG', '$2y$10$qDBiskja.V6AUivDo015cO61bNrNjhMSXOjc1Yvzd3v72c7ruBNNi'),
(3, 'Irfan Sadiq', 'irfansadiq@gmail.com', '0308 788 4179', '$2y$10$7IFkU5lduWVkM20xdDL3TeebwtBwJcWogfxyLcx9QFsvnH/kpMLgW', '$2y$10$.Ob0SA4szDpCj017lueZ4.9T3hFv5Znm7sUJbZzIRKhaVVQtyj.Ba'),
(4, 'Irfan Sadiq', 'irfansadiq0300@gmail.com', '0308 788 4179', '$2y$10$wBwl4BOoiIV7e64tPEPcPOKL/phuAsttOQ3iBOglaLwrhVRPH9s9u', '$2y$10$HxBRvaTgjT.23PUiK0xK8.U9L7XZtERJ1sttKRG4872UnedYvtLem'),
(5, 'Irfan Sadiq', 'irfansadiq0304@gmail.com', '0308 788 4179', '$2y$10$iVb94TJc7Smr6kMN4C2ECe/xneyWACgNBAV0Rugtl6Z.dWvBuSFPO', '$2y$10$.RaJM48COESiIHgaIiQmgei70khIH.Kc1N0cdDJAUoKk9wVIsVZ8O'),
(6, 'irfan', 'irfanssa@gmail.com', '12345577', '$2y$10$lEhMefwvp3s03nkiQjcQjuLYQJf32j52dYU/jfhylVG2TB7VAlXCG', '$2y$10$OX4bGhnod3OxNdqxnyw8U.BLvpn4/lugEjUBD9ENO/igutpjeONZa'),
(7, 'irfan', 'irfannsadiq@gmail.com', '12345577', '$2y$10$s.5LPfnJ0QzhO1vu2l.UnOKVkST6Ylm.LzT3iPdF2Y4F7vqWKmiKO', '$2y$10$/4oxU4Q12lt6FYg/ZoxhJeg4uIYr8kzDZ91QaiaWsb6sLzga/MFxK'),
(8, '', '', '', '$2y$10$abQfWg4FBOwFB2jpkxAVieLarJnqK9ab6jCuPbfSKLcaa1l/2LWde', '$2y$10$.uhgwZXPt8VhpgJ5Z5aVSONvMGY3fP0Fdw5Wr5U19N7a3hi4uCjwm'),
(9, 'irfansadiq', 'irfan123@gmail.com', '123456789', '$2y$10$R7FdllbtCLjLUxQVtnmTZO7iULlAUe8KdDPuoBUhemJCVr0nNVhYe', '$2y$10$4lTW5mVpD6arxs1AHqOhxe.KZ4M4h7vBDw5Ni973yoP797Q5.ruVS'),
(10, 'Irfan Sadiq', 'irfansadiq1256@gmail.com', '0308 788 4179', '$2y$10$L0nMuELtuRYdffEgIVGZLub1Ez/kGxh4EjWgTCVzyOUzenkyqkgti', '$2y$10$csfZ0nKfrTc.MiyP6QgvTODWB8fs4yZZbVXq/s8SCUAEjaBm5WXpi'),
(11, 'fani', 'fani@gmail.com', '0308 788 4179', '$2y$10$9/MUmbWfIoNxbgkuzLqG1uTezhgq1LWOACX1AJq299MImFN1TjIIG', '$2y$10$6oFdmgdiRHQ28fbwJVahZuL7kqwU86jgNRmF23SbPjWk16ItPgoLm'),
(12, 'ff', 'ff@gmail.com', '123456', '$2y$10$e0D.GyoiCHkP7WS6o8vkZecmcBcJhEdIaODOhwLNTsXZZRG8tcy72', '$2y$10$YYK/C4QAiSacHpZQW3vM.eq5cXd/NOFLOuBdbMJTMfodCchXppufK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
