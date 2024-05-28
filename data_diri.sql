-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2024 at 01:44 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_diri`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--

CREATE TABLE `about_me` (
  `nim` int NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_numb` varchar(25) NOT NULL,
  `Kota/kab` varchar(40) NOT NULL,
  `affliate` varchar(20) NOT NULL,
  `age` int NOT NULL,
  `birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about_me`
--

INSERT INTO `about_me` (`nim`, `nama`, `alamat`, `email`, `phone_numb`, `Kota/kab`, `affliate`, `age`, `birth`) VALUES
(2130511023, 'Faiz Akhmad Daulay', 'Perum Mangkalaya', 'faizakhmad29@gmail.com', '62895365072965', 'Sukabumi', 'Web Developer', 21, '2003-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_numb` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `email`, `phone_numb`) VALUES
(1, 'Perum Mangkalaya, Blok. H-5, RT/RW 06/02, No. 2', 'faizakhmad29@gmail.com', '62895365072965');

-- --------------------------------------------------------

--
-- Table structure for table `edu_fact`
--

CREATE TABLE `edu_fact` (
  `name` varchar(50) NOT NULL,
  `timelapse` varchar(25) NOT NULL,
  `edu_level` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `desc` text NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `edu_fact`
--

INSERT INTO `edu_fact` (`name`, `timelapse`, `edu_level`, `desc`, `id`) VALUES
('SD Negeri Benteng 1 Gentra Masekdas Kota Sukabumi', '2009-2015', 'Sekolah Dasar', 'Saya mengampu pendidikan pertama saya di sekolah SDN Benteng 1 Gentra Maskedas yang berada di Kec. Warudoyong, Kel/Des Benteng.', 0),
('SMP Negeri 1 Kota Sukabumi', '2015-2018', 'Sekolah Menengah Pertama', 'Saya melanjutkan pendidikan dengan mendaftar ke SMP Negeri 1 Kota Sukabumi. Pembelajaran dan edukasi yang saya dapatkan cukup memuaskan dan menjamin pemahaman yang saya dapatkan untuk jenjang selanjutnya', 1),
('SMA Negeri 1 Cisaat', '2018-2021', 'Sekolah Menengah Atas', 'Saya mengampu pendidikan selanjutnya dengan mendaftar ke SMA Negeri 1 Cisaat. Disana saya diajarkan pemahaman yang sedikit lebih mendalam dari pembelajaran yang telah saya alami di SMP. Pemahaman dasar ini adalah bekal yang bisa saya gunakan untuk dunia perkuliahan.', 2),
('Universitas Muhammadiyah Sukabumi', '2021-Present', 'Sarjana', 'Disini saya mendapatkan pendidikan yang lebih kompleks dan berkelanjutan. Dengan Roadmap yang sudah saya tentukan yaitu Web Developer.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `project_name`, `link`) VALUES
(1, 'Ren\'t O Rental Website', 'https://github.com/Rent-O-Dicoding-Cycle-5/Front-end-Web-Development'),
(2, 'Dicoding Project AkaRestaurant', 'https://akarestaurant.netlify.app/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edu_fact`
--
ALTER TABLE `edu_fact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
