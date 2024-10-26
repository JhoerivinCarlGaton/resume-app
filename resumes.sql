-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2024 at 10:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `education` varchar(255) NOT NULL,
  `experience_title` varchar(255) NOT NULL,
  `experience_date` date NOT NULL,
  `experience_details` text NOT NULL,
  `skills` text NOT NULL,
  `projects` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `name`, `email`, `phone`, `summary`, `education`, `experience_title`, `experience_date`, `experience_details`, `skills`, `projects`, `created_at`, `updated_at`) VALUES
(1, 'Jhoerivin Carl Gaton', 'jcgatonrivera@gmail.com', '0921-723-7225', 'Detail-oriented web developer with expertise in HTML, PHP, JavaScript, and SQL. Passionate about building responsive and user-friendly applications that enhance user experience. Proven ability to collaborate effectively within teams to deliver high-quality projects on time. Seeking opportunities to leverage my skills in dynamic web development environments.', 'Bachelor of Science in Information Technology, Baliwag Politechnic College, 2025', 'Non - Voice Data Annotator', '2021-10-01', 'Completed the CC101 Call Center seminar...', 'English Literate, Computer Literate, Proficient in HTML, CSS, PHP, JavaScript, and SQL, with experience in building responsive web applications and managing databases.', 'Developed a web-based attendance monitoring system utilizing QR code technology and SMS notifications to streamline attendance tracking. Employed HTML, CSS, PHP, JavaScript, and SQL for development. Served as the UI/UX designer, focusing on creating an intuitive and user-friendly interface.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
