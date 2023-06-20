-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 12:28 PM
-- Server version: 10.4.28-MariaDB-log
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalppw`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `nama` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`nama`, `comment`) VALUES
('Askar', 'keren verr'),
('tanto', 'mantap ver, nnt sore joging'),
('andro pulkam', 'AKu meh balik solo e per\r\n'),
('nadia', 'Keren beut dah verr'),
('Nadien hasan', 'Semangat verr'),
('araa', 'Ihh keren banget gini'),
('a sda', 'adsad');

-- --------------------------------------------------------

--
-- Table structure for table `data_web`
--

CREATE TABLE `data_web` (
  `img` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_web`
--

INSERT INTO `data_web` (`img`, `heading`, `description`) VALUES
('src/police information system.png', 'Sistem Informasi Polisi', 'Sistem informasi yang dapat digunakan oleh pihak kepolisian untuk mendata berbagai kasus yang masuk.'),
('src/jalaku.png', 'JalaKu', 'Aplikasi yang digunakan untuk sebuah perusahaan fiksi bernama Jalaku yang digunakan untuk operasional perusahaan.'),
('src/web porto.png', 'Web Portofolio', 'Website buatan sendiri yang digunakan sebagai portofolio untuk mencari pekerjaan di masa depan.'),
('src/web calcu.png', 'Web Calculator', 'Membuat sebuah website calculator dengan menggunakan HTML, CSS, dan juga JavaScript didalam pembuatannya.'),
('src/web company.png', 'Website Company', 'Sebuah website untuk sebuah perusahaan bernama Segitiga Sama Sisi yang bergerak dalam bidang teknologi.'),
('src/bmi-resize.png', 'BMI Calculator', 'Aplikasi ini digunakan untuk menghitun Body Mass Index seseorang dengan menerima 2 input yaitu BB dan TB seseorang yang nantinya dihitung dan memunculkan sebuah result berupa kategori dari BMI.');

-- --------------------------------------------------------

--
-- Table structure for table `skill_data`
--

CREATE TABLE `skill_data` (
  `img` varchar(255) NOT NULL,
  `languages` varchar(255) NOT NULL,
  `skill` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill_data`
--

INSERT INTO `skill_data` (`img`, `languages`, `skill`) VALUES
('src/Python.png', 'Python', 'Intermediate'),
('src/HTML5.png', 'HTML', 'Intermediate'),
('src/CSS3.png', 'CSS', 'Beginner'),
('src/Java.png', 'Java', 'Intermediate'),
('src/JavaScript.png', 'JavaScript', 'Beginner'),
('src/Bootstrap.png', 'Bootstrap', 'Intermediate'),
('src/Kotlin.png', 'Kotlin', 'Beginner'),
('src/MySQL.png', 'MySql', 'Intermediate'),
('src/PHP.png', 'PHP', 'Beginner'),
('src/flask.svg', 'Flask', 'Beginner');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
