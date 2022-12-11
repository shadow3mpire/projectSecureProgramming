-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 04:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secprogkelompok`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Email`, `Password`) VALUES
('admin', '', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
('test', '', 'c54622126293d35390acd4d5e8d8b1a498bb5543'),
('admin', '', 'admin'),
('sdasd', 'asdasdsa@hjshdasd.com', '$2y$10$KJcGqW69KYc5ehrZF.ki8OnOJuHvilCAJaT0qbv9iSyVgJ5KSFmiS'),
('asdasdsa', 'asdasd@sdfsdf.com', '$2y$10$4NMN5gvY7EPQK9wOpUrQHu9Pd3YaThSU6Zlm6sjjg8PocDGpLDWYa'),
('aaaa', 'rafael.kurniawan@gmail.com', '$2y$10$40njt/dwV2hhaNEgbhrvyulgj8e8CFL1Fuv836AZGdb.L1npVmG3u'),
('aaaa', 'rafael.kurniawan@gmail.com', '$2y$10$W4LZrR9MTXrR7CD2O4WnbOHG2A3GQwyPFKTNoTnn0WK8QA7chGFBC'),
('aaaa', 'rafael.kurniawan@gmail.com', '$2y$10$p/xQIchQVXtNh6kIT0ZvnOyeT7J311v5Oj0E7ZyD6unB8XY/qMtme'),
('asdf', 'rafael.kurniawan@gmail.com', 'aaa'),
('asdf', 'rafael.kurniawan@gmail.com', 'aaa'),
('iop', 'rafael.kurniawan@gmail.com', 'iop'),
('asdfg', 'rafael.kurniawan@gmail.com', 'asd'),
('aaaaa', 'rafael.kurniawan@gmail.com', '$2y$10$JEUpbgUrDj3EXjl51jMSw.oJVr8fPomewep0AZtWrb8iOu8FZpQW2'),
('budi', 'rafael.kurniawan@gmail.com', '$2y$10$q4Il9W.wXDcc7L3kWRfOH.PrK5yT2yWIj4NuQC7VSVy/A5h27JsEu'),
('budi', 'rafael.kurniawan@gmail.com', '$2y$10$AMdRdtmpOw/qlrIdgZ.imeUnN2ZLHq9xRsLkPzTFLuO2jFpoDofbm'),
('jaja', 'example@123.com', '$2y$10$D4gAMN7Ze7tUMRP1pBu1s.P0q8Q.U59Rvva2EBqBfGnxYBeDFcQLe'),
('andi', 'example@345.com', '$2y$10$hqS8.V6YYkOxb8QTHhsRdup1qKmCj8lfPJ1Xb/h5q230HdGCdhQJa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
