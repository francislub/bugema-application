-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2023 at 06:04 PM
-- Server version: 8.0.33-0ubuntu0.22.04.4
-- PHP Version: 8.1.2-1ubuntu2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bugerifg_apply`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `application_form`
--

CREATE TABLE `application_form` (
  `id` int UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` enum('Male','Female','Others') COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `id_type` enum('None','National ID','Passport') COLLATE utf8mb4_general_ci NOT NULL,
  `id_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `location` enum('Main Campus','Kampala Campus','Arua Campus','Mbale Campus','Kasese Campus') COLLATE utf8mb4_general_ci NOT NULL,
  `time` enum('Regular','In-Service') COLLATE utf8mb4_general_ci NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bu` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kabu` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `app_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application_form`
--

INSERT INTO `application_form` (`id`, `full_name`, `date_of_birth`, `email`, `mobile_number`, `gender`, `country`, `id_type`, `id_number`, `religion`, `location`, `time`, `school`, `level`, `course`, `type`, `document`, `bu`, `kabu`, `app_id`, `status`, `created_at`) VALUES
(14, 'Leek Gak Goi', '1990-03-23', 'nobleleekgoi@gmail.com', '+211916782524', 'Male', '', 'National ID', '000514415', 'Christian ', 'Main Campus', 'In-Service', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS', 'Masters', 'Masters in Public Health (Environmental & Occupational Heaalth)', 'degree', '../uploads/64a671d1c3f12.pdf', 'internet', '', '23/APP/BU/0010', 2, '2023-07-06 07:48:33'),
(21, 'Fungo Salim Johnford', '1987-04-03', 'salimfungo@mail.com', '+255753363800', 'Male', 'Tanzania, United Republic of', 'National ID', '', 'SDA', 'Main Campus', 'Regular', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS', 'Masters', 'Master of Arts in Education (Education Management)', 'degree', '../uploads/64b10c0e220cf.pdf', 'friend', 'friend', '23/APP/BU/0011', 1, '2023-07-14 08:49:18'),
(22, 'Onach Patrick', '1977-12-23', 'onachpatrick@gmail.com', '+256782791580', 'Male', 'Uganda', 'National ID', 'CM77001101217L', 'Seventh Day Adventist', 'Kampala Campus', 'Regular', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS', 'Masters', 'Master of Arts in Education (Education Management)', 'degree', '../uploads/64b805f08d097.pdf', 'social_media', 'Social Media', '23/APP/BU/0012', 2, '2023-07-19 15:49:04'),
(24, 'Nkasiima Daglas', '2002-12-17', 'nkdaglas@gmail.com', '0770776876', 'Male', 'Uganda', '', '', 'Catholic ', 'Kampala Campus', 'Regular', 'AGRICULTURE & APPLIED SCIENCES', 'Degree', 'Bachelor of Science in Agribusiness Innovation and Management', 'uce_uace', '../uploads/64bc1e45a3ade.pdf', 'friend', 'Sharif ', '23/APP/BU/0014', 0, '2023-07-22 18:21:57'),
(25, 'Ejus', '1983-04-17', 'ejusdenis@gmail.com', '+256777774111', 'Male', 'Uganda', 'National ID', 'CM83039109NUCF', 'CATHOLIC', 'Main Campus', 'Regular', 'AGRICULTURE & APPLIED SCIENCES', 'Degree', 'Bachelor of Science in Environmental Science', 'uace', '../uploads/64be78893af2f.jpg', '', 'Website', '23/APP/BU/0015', 2, '2023-07-24 13:11:37'),
(27, 'Lillian Asiimwe', '1983-07-21', 'lillianasiimwe2005@gmail.com', '+256776712167', 'Female', 'Uganda', 'National ID', 'CF8301010FCMCL', 'Catholic', 'Main Campus', 'Regular', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS', 'Masters', 'Masters in Public Health (MPH General)', 'degree', '../uploads/64c0e76a562eb.docx', 'friend', 'Emily Lamwaka', '23/APP/BU/0017', 2, '2023-07-26 09:29:14'),
(28, 'OWOR EMMANUEL', '2002-03-01', 'oketchoyoronimo@gmail.com', '0779469839', 'Male', 'Uganda', '', '', 'Catholic', 'Main Campus', 'Regular', 'AGRICULTURE & APPLIED SCIENCES', 'Certificate', 'Certificate in Agriculture', 'uce', '../uploads/64c371ae43de1.pdf', 'internet', 'internet', '23/APP/BU/0017', 1, '2023-07-28 07:43:42'),
(29, 'OWOR EMMANUEL', '2002-03-01', 'oketchoyoronimo@gmail.com', '0779469839', 'Male', 'Uganda', '', '', 'Catholic', 'Main Campus', 'Regular', 'AGRICULTURE & APPLIED SCIENCES', 'Certificate', 'Certificate in Agriculture', 'uce', '../uploads/64c371fb7d789.pdf', 'internet', 'internet', '23/APP/BU/0018', 1, '2023-07-28 07:44:59'),
(30, 'Ezra Migwa', '2004-12-05', 'ezraouko096@gmail.com', '+254704205248', 'Male', 'Kenya', 'National ID', '27432328', 'Christian', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'uace', '../uploads/64c3789ac6e64.pdf', 'friend', 'Pastor Cyrus Nyakundi', '23/APP/BU/0019', 1, '2023-07-28 08:13:14'),
(31, 'Clement KIVURA', '1980-04-07', 'kclement061@yahoo.com', '+257 79902554', 'Male', 'Burundi', 'Passport', '', 'Pentecost', 'Main Campus', 'In-Service', '', '', '', 'diploma', '../uploads/64c3797c82442.PDF', 'friend', 'Friend', '23/APP/BU/0020', 0, '2023-07-28 08:17:00'),
(32, 'Adrian Alberto', '1994-09-05', 'adrianalberto174@gmail.com', '768575290', 'Male', '', 'National ID', '19940905371040000325', 'Seventh day adventist', 'Kampala Campus', 'Regular', 'BUSINESS', 'Degree', 'Bachelor of Arts in Economics', 'diploma', '../uploads/64c37e6756a1c.pdf', 'friend', 'Nathaniel Jonathan', '23/APP/BU/0021', 1, '2023-07-28 08:37:59'),
(33, 'Adrian Alberto Msigwa', '1994-09-05', 'adrianalberto174@gmail.com', '768575290', 'Male', 'Tanzania, United Republic of', 'National ID', '19940905371040000325', 'Seventh day adventist', 'Main Campus', 'Regular', 'BUSINESS', 'Degree', 'Bachelor of Arts in Economics', '', '../uploads/64c38031672af.pdf', 'friend', 'Nathaniel Jonathan', '23/APP/BU/0022', 1, '2023-07-28 08:45:37'),
(35, 'Yiga Jonathan ', '2002-10-14', 'siremress01@gmail.com', '+256700223794', 'Male', 'Uganda', 'National ID', 'CM02024108CACE', 'Born Again ', 'Kampala Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Software Engineering', 'uce_uace', '../uploads/64c4359f880d4.JPG', 'friend', 'Kalema Lawrence ', '23/APP/BU/0024', 0, '2023-07-28 21:39:43'),
(36, 'Mayele BIRINDWA Elie', '2000-06-28', 'mayelegerard002@gmail.com', '0784157522', 'Male', '', 'None', '', 'Protestant Pentecostal', 'Kampala Campus', 'Regular', 'HEALTH AND ALLIED SCIENCES', 'Diploma', '', 'diploma', '../uploads/64c4cb3d4a153.pdf', 'friend', 'Kikalage Joel', '23/APP/BU/0025', 1, '2023-07-29 08:18:05'),
(37, 'Mayele BIRINDWA Elie', '2000-06-28', 'mayelegerard002@gmail.com', '0784157522', 'Male', '', 'None', '', 'Protestant Pentecostal', 'Kampala Campus', 'Regular', 'HEALTH AND ALLIED SCIENCES', 'Diploma', '', 'diploma', '../uploads/64c4cb69ad8af.pdf', 'friend', 'Kikalage Joel', '23/APP/BU/0026', 1, '2023-07-29 08:18:49'),
(41, 'Wayi Isaac', '1980-02-20', 'wayiisaac20@gmail.com', '+256772847059', 'Male', 'Uganda', 'National ID', 'CM80047101ZHKE', 'Protestant', 'Main Campus', 'In-Service', 'BUSINESS', 'Degree', 'Bachelor of Business Administration in Management', 'diploma', '../uploads/64c615ab37759.pdf', 'internet', 'Internet', '23/APP/BU/0030', 1, '2023-07-30 07:47:55'),
(44, 'KULEBELA MALIMA ', '1986-08-01', 'malimae4@gmail.com', '+255766490963', 'Male', 'Tanzania, United Republic of', 'None', '', 'CHRISTIAN- SDA', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'diploma', '../uploads/64c6abcb15201.jpg', 'internet', '', '23/APP/BU/0033', 0, '2023-07-30 18:28:27'),
(45, 'ATHUMANI HAMIS WAMBURA', '1999-05-22', 'athmankhamis37@gmail.com', '+255656713781', 'Male', '', 'Passport', '19990522141280000227', 'Dar es salaam', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'a_level', '../uploads/64c6b8438ee9b.jpg', 'friend', 'Pastor Reuben Mgunda', '23/APP/BU/0034', 0, '2023-07-30 19:21:39'),
(46, 'Asiimwe Nicholas', '1992-12-31', 'tyarjoe@gmail.com', '+256788298898', 'Male', 'Uganda', 'National ID', 'cm92037102mlce', 'sda', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'uce', '../uploads/64c742eee3739.jpg', 'friend', 'ssali Ronald', '23/APP/BU/0035', 0, '2023-07-31 05:13:18'),
(48, 'Robinson Prashid', '2000-01-16', 'robinsonprashid@gmail.com', '+255764370704', 'Male', '', 'National ID', '20000116251130000329', 'Seventh day adventist', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', '', '', 'o_level', '../uploads/64c75e85e2a91.pdf', 'internet', 'Internet', '23/APP/BU/0037', 0, '2023-07-31 07:11:01'),
(49, 'Aluel Mawut Maker Ater', '2003-01-01', 'cholabiarayom@gmail.com', '+211929416120', 'Female', 'Sudan', 'Passport', 'R00433752', 'SDA', 'Main Campus', 'Regular', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES', 'Degree', '', 'o_level', '../uploads/64c76c52b7b36.pdf', 'family', 'Husband', '23/APP/BU/0038', 1, '2023-07-31 08:09:54'),
(50, 'Ankunda Shillah ', '2001-12-18', 'shillahankunda07@gmail.com', '+256785001064', 'Female', 'Uganda', 'National ID', 'CF0103410DRH9D', 'Christian ', 'Main Campus', 'Regular', 'HEALTH AND ALLIED SCIENCES', 'Degree', 'Bachelor of Nursing Science', 'uce_uace', '../uploads/64c76eb002260.pdf', 'family', 'Nabyaama Charity ', '23/APP/BU/0039', 1, '2023-07-31 08:20:00'),
(52, 'Aniku Gift Mary', '1995-08-16', 'writetoaniku@gmail.com', '+256773523817', 'Female', 'Sudan', 'National ID', '000496484', 'Christian/SDA', 'Main Campus', 'Regular', 'HEALTH AND ALLIED SCIENCES', 'Degree', 'Bachelor of Science in Food Technology and Human Nutrition', '', '../uploads/64c778976e74f.pdf', 'social_media', 'Facebook/Twitter', '23/APP/BU/0040', 1, '2023-07-31 09:02:15'),
(53, 'ekwang haggai', '1998-07-15', 'haggaiekwang@gmail.com', '+256774728152 ', 'Male', 'Uganda', 'National ID', 'CM980151039C3G ', 'Anglican ', 'Main Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Information Technology', 'uce_uace', '../uploads/64c7aaeb9db1b.pdf', 'family', 'Otim junior ', '23/APP/BU/0040', 1, '2023-07-31 12:36:59'),
(54, 'Galimu Fred', '2001-11-27', 'Fred.velfords@gmail.com', '+256756932949', 'Male', 'Uganda', 'National ID', 'CM01035108E2XL', 'Seventh Day adventist', 'Main Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Statistics', 'uce_uace', '../uploads/64c80330470a0.docx', 'family', 'Parents ', '23/APP/BU/0041', 0, '2023-07-31 18:53:36'),
(56, 'MPANYA ABDUL', '1998-10-02', 'handsdats@gmail.com', '0779809485', 'Male', 'Uganda', 'Passport', 'B1662254', 'Islam', 'Mbale Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Certificate', '', 'uce_uace', '../uploads/64c8f9aabcf42.jpg', 'friend', '', '23/APP/BU/0042', 0, '2023-08-01 12:25:14'),
(57, 'Dickson kawovela ', '1985-06-03', 'kawovelad@gmail.com', '+225757573462', 'Male', 'Tanzania, United Republic of', 'National ID', '198506034120000120', 'Christian ', 'Main Campus', 'In-Service', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES', 'Degree', '', 'degree', '../uploads/64c9760aa88ad.pdf', 'internet', 'Anita Mlay', '23/APP/BU/0043', 0, '2023-08-01 21:15:54'),
(58, 'Arkam Juma Ali', '1990-01-14', 'arsafdhar@gmail.com', '+25579028556', 'Male', 'Tanzania, United Republic of', 'Passport', 'TAE307672', 'Zanzibar', 'Main Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Diploma', 'Diploma in Science Laboratory Technology', 'certificate', '../uploads/64c9dc672ac49.pdf', 'friend', 'Website ', '23/APP/BU/0044', 0, '2023-08-02 04:32:39'),
(59, 'NAMIREMBE RACHEAL MARY ', '2002-02-19', 'namiremberachealm@gmail.com', '+256779614744', 'Female', 'Uganda', 'National ID', 'CF020451057CTH', 'Catholic ', 'Kampala Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Diploma', 'Diploma in Biomedical Engineering and Technology', 'certificate', '../uploads/64c9e30a976b5.pdf', 'social_media', 'Google ', '23/APP/BU/0045', 1, '2023-08-02 05:00:58'),
(60, 'Beatus Ason Manyama ', '1989-02-17', 'beamanyama@gmail.com', '+255689334262', 'Male', 'Tanzania, United Republic of', 'National ID', '', 'SEVENTH DAY ADVENTIST CHURCH ', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', '', 'a_level', '../uploads/64ca05d6cdeeb.jpg', 'friend', 'BEATUS ', '23/APP/BU/0046', 0, '2023-08-02 07:29:26'),
(61, 'Maranda Evans ', '1995-07-09', 'marandaevans995@gmail.com', '+254717856971', 'Male', 'Kenya', 'National ID', '33325691', 'Christian ', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'degree', '../uploads/64ca2751b3205.pdf', 'friend', 'Through the seventh day Adventist church ', '23/APP/BU/0047', 2, '2023-08-02 09:52:17'),
(64, 'Adrian Alberto Msigwa', '1994-09-05', 'adrianalberto174@gmail.com', '+255768575290', 'Male', 'Tanzania, United Republic of', 'National ID', '19940905371040000325', 'Seventh day adventist', 'Main Campus', 'Regular', 'BUSINESS', 'Degree', 'Bachelor of Arts in Economics', 'diploma', '../uploads/64cc4e9cab01c.pdf', 'friend', 'Nathaniel Jonathan', '23/APP/BU/0036', 0, '2023-08-04 01:04:28'),
(66, 'Kigemuzi Hamidu Mugerwa ', '1997-09-28', 'kigemuzimugerwa@gmail.com', '0707556123', 'Male', '', 'National ID', 'CM970471059YGD', 'Moslem ', 'Main Campus', 'Regular', 'AGRICULTURE & APPLIED SCIENCES', 'Degree', 'Bachelor of Science in Agriculture (Soil Science)', '', '../uploads/64cccee0dd3c7.pdf', 'friend', 'Volleyball coach', '23/APP/BU/0038', 2, '2023-08-04 10:11:44'),
(71, 'ENOS KIPCHIRCHIR LANGAT', '1997-05-08', 'enoslangat97@gmail.com', '+254725522816', 'Male', 'Kenya', 'National ID', '37014878', 'christian', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'diploma', '../uploads/64ce87446fe14.pdf', 'friend', 'PR OBED TANUI', '23/APP/BU/0039', 0, '2023-08-05 17:30:44'),
(73, 'MUHINDO BISHIKWABO ARSENE', '1994-05-14', 'arsenebishikwabo4@gmail.com', '+256783442707', 'Male', 'Uganda', 'None', '', 'Catholic', 'Main Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Business Computing', 'degree', '../uploads/64cffec52acd7.pdf', 'friend', 'CHRISTIAN NYAKASANE', '23/APP/BU/0040', 0, '2023-08-06 20:12:53'),
(74, 'Faustine Girishon Mjalifu', '1999-06-24', 'faustinemjalifu@gmail.com', '+255622281026', 'Male', 'Tanzania, United Republic of', 'National ID', '19990624301070000128', 'Christian', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'a_level', '../uploads/6418e3e69b371.pdf', 'friend', 'Zacharia  M. Zakayo', '23/APP/BU/0039', 1, '2023-03-20 22:53:26'),
(75, 'KIPLETING EMMANUEL', '1994-05-05', 'manuelkogo1@gmail.com', '+254715090804', 'Male', 'Kenya', 'National ID', '30895636', 'Christian', 'Main Campus', 'In-Service', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES', 'Degree', 'Bachelor of Arts or Science with Education-Secondary (with subject combinations)', 'certificate', '../uploads/6418f81a040e7.pdf', 'social_media', 'Facebook', '23/APP/BU/0040', 0, '2023-03-21 00:19:38'),
(76, 'kenedi juma otyende', '1995-01-15', 'kenedi95otyende@gmail.com', '+255744899078', 'Male', 'Tanzania, United Republic of', 'National ID', '19950115511140000120', 'christian', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'a_level', '../uploads/641904e613136.pdf', '', '', '23/APP/BU/0041', 1, '2023-03-21 01:14:14'),
(77, 'Derrick Chinyama', '2004-08-15', 'www.derrickchinyama24@gmail.com', '+260970358130', 'Male', 'Zambia', 'National ID', '145295/14/1', 'Christian ', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'certificate', '../uploads/6419f84221d97.', 'internet', 'Facebook', '23/APP/BU/0042', 0, '2023-03-21 18:32:34'),
(78, 'JOSEPHAT MASANJA LUKENZA', '1994-08-08', 'mjlukenza@gmail.com', '0767949538', 'Male', 'Tanzania, United Republic of', 'Passport', 'TAE382676', 'CHRISTIAN', 'Main Campus', 'In-Service', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Biochemistry', 'diploma', '../uploads/641a1908799c5.pdf', 'internet', 'Bugema university website', '23/APP/BU/0043', 1, '2023-03-21 20:52:24'),
(79, 'JOSEPHAT MASANJA LUKENZA', '1994-08-08', 'mjlukenza@gmail.com', '0767949538', 'Male', 'Tanzania, United Republic of', 'Passport', 'TAE382676', 'CHRISTIAN', 'Main Campus', 'In-Service', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Biochemistry', 'diploma', '../uploads/641a19c0699c2.pdf', 'internet', 'Bugema university website', '23/APP/BU/0044', 1, '2023-03-21 20:55:28'),
(81, 'TANDULA KIJA SILI', '2003-02-02', 'luckejphat76@gmail.com', '0614992013', 'Male', '', 'None', '', 'CHRISTIAN', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'a_level', '../uploads/641df0f7c53d5.pdf', 'internet', 'Bugema website', '23/APP/BU/0045', 0, '2023-03-24 18:50:31'),
(82, 'Muhwezi Ronald', '1985-12-06', 'muhwezikronald@gmail.com', '+256704720616', 'Male', 'Uganda', 'None', '', 'Christian', 'Kampala Campus', 'In-Service', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Network Systems Administration', 'uce_uace', '../uploads/641e3b3d20173.docx', 'friend', '', '23/APP/BU/0046', 0, '2023-03-25 00:07:25'),
(83, 'Justine Olweny', '1990-11-20', 'justinolweny@gmail.com', '+256787718600', 'Male', 'Uganda', 'National ID', 'CM90050100904D', 'Catholic', 'Kampala Campus', 'In-Service', 'AGRICULTURE & APPLIED SCIENCES', 'Degree', 'Bachelor of Science in Environmental Science', 'certificate', '../uploads/641f8001c584f.pdf', 'family', '', '23/APP/BU/0047', 0, '2023-03-25 23:13:05'),
(84, 'VENANCE SAMWELY', '1992-07-13', 'samwelvenance067@gmail.com', '+255766809704', 'Male', 'Tanzania, United Republic of', 'National ID', '19930713304040000320', 'CHRISTIAN', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Diploma', 'Diploma in Theology', '', '../uploads/642097211d7f6.pdf', 'social_media', '', '23/APP/BU/0048', 0, '2023-03-26 19:04:01'),
(85, 'VENANCE SAMWELY', '1992-07-13', 'samwelvenance067@gmail.com', '+255766809704', 'Male', 'Tanzania, United Republic of', 'National ID', '19930713304040000320', 'CHRISTIAN', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Diploma', 'Diploma in Theology', '', '../uploads/642097c811321.pdf', 'social_media', '', '23/APP/BU/0049', 0, '2023-03-26 19:06:48'),
(86, 'Kelvin Kasigwa Nagabona ', '1997-05-01', 'kelvinnagabona564@gmail.com', '+255627192286', 'Male', '', 'National ID', '19970501611040000220', 'Seventh day Adventist church ', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Certificate', 'Certificate in Theology', 'o_level', '../uploads/641936ff98783.pdf', 'family', 'Sospeter Nyagabona ', '23/APP/BU/0050', 1, '2023-03-21 04:47:59'),
(87, 'Kelvin Kasigwa Nagabona ', '1997-05-01', 'kelvinnagabona564@gmail.com', '+255627192286', 'Male', '', 'National ID', '19970501611040000220', 'Seventh day Adventist church ', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Certificate', 'Certificate in Theology', 'o_level', '../uploads/6419370211461.pdf', 'family', 'Sospeter Nyagabona ', '23/APP/BU/0051', 0, '2023-03-21 04:48:02'),
(88, 'Kelvin Kasigwa Nagabona ', '1997-05-01', 'kelvinnagabona564@gmail.com', '+255627192286', 'Male', '', 'National ID', '19970501611040000220', 'Seventh day Adventist church ', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Certificate', 'Certificate in Theology', 'o_level', '../uploads/64193702db1c9.pdf', 'family', 'Sospeter Nyagabona ', '23/APP/BU/0052', 0, '2023-03-21 04:48:02'),
(89, 'Kelvin Kasigwa Nagabona ', '1997-05-01', 'kelvinnagabona564@gmail.com', '+255627192286', 'Male', '', 'National ID', '19970501611040000220', 'Seventh day Adventist church ', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Certificate', 'Certificate in Theology', 'o_level', '../uploads/6419376d45cb2.pdf', 'family', 'Sospeter Nyagabona ', '23/APP/BU/0053', 0, '2023-03-21 04:49:49'),
(90, 'PASCHAL JORAM METHUSELA', '1994-04-04', 'pjorum20@gmail.com', '+255656344754', 'Male', 'Tanzania, United Republic of', 'Passport', 'TAE455402 ', 'Roman catholic ', 'Kampala Campus', 'Regular', 'HEALTH AND ALLIED SCIENCES', 'Degree', 'Bachelor of Nursing Science', 'diploma', '../uploads/64187b7eeffd5.pdf', 'friend', 'JACKDEBORA', '23/APP/BU/0054', 0, '2023-03-20 15:27:58'),
(91, 'PASCHAL JORAM', '1994-04-04', 'pjorum20@gmail.com', '+255657344754', 'Male', 'Tanzania, United Republic of', 'Passport', 'TAE455402 ', 'Roman catholic ', 'Kampala Campus', 'Regular', 'HEALTH AND ALLIED SCIENCES', 'Degree', 'Bachelor of Nursing Science', 'o_level', '../uploads/6418811e866fe.pdf', 'friend', 'JACKDEBORA', '23/APP/BU/0055', 0, '2023-03-20 15:51:58'),
(92, 'Oceng Oscar', '1988-08-17', 'ocengoscar11@gmail.com', '+256773882774', 'Male', 'Uganda', 'National ID', 'CM88001105102H', 'Catholic', 'Main Campus', 'Regular', 'AGRICULTURE & APPLIED SCIENCES', 'Degree', 'Bachelor of Science in Environmental Science', 'uce', '../uploads/64188bd8c3db5.pdf', 'friend', 'Prof. Daudi Mutekanga', '23/APP/BU/0055', 1, '2023-03-20 16:37:44'),
(93, 'Oceng Oscar', '1988-08-17', 'ocengoscar11@gmail.com', '+undefined', 'Male', 'Uganda', 'National ID', 'CM88001105102H', 'Catholic', 'Main Campus', 'Regular', 'AGRICULTURE & APPLIED SCIENCES', 'Degree', 'Bachelor of Science in Environmental Science', 'uce', '../uploads/64188e5d0f947.pdf', 'friend', 'Prof. Daudi Mutekanga', '23/APP/BU/0056', 1, '2023-03-20 16:48:29'),
(94, 'Paul Otieno Juma', '1978-09-17', 'paul78juma@yahoo.com', '+undefined', 'Male', 'Kenya', 'Passport', 'AK0200199', 'CHRISTIAN', 'Kampala Campus', 'In-Service', 'AGRICULTURE & APPLIED SCIENCES', 'Degree', 'Bachelor of Science in Environmental Science', 'o_level', '../uploads/64189124c5f92.pdf', 'internet', 'INTERNET', '23/APP/BU/0057', 0, '2023-03-20 17:00:20'),
(95, 'Opige Kenneth', '1987-05-12', 'kennethopige377@gmail.com', '+256777196333', 'Male', 'Uganda', 'National ID', 'CM87085102TK2K', 'Protestant', 'Main Campus', 'In-Service', 'AGRICULTURE & APPLIED SCIENCES', 'Degree', 'Bachelor of Science in Agriculture (Soil Science)', 'diploma', '../uploads/6418a42cb61cb.pdf', 'social_media', 'Friends', '23/APP/BU/0058', 1, '2023-03-20 18:21:32'),
(96, 'Olina Norman', '1994-02-02', 'olupotnorman21@gmail.com', '+256 778776538', 'Male', 'Uganda', 'National ID', 'CM94035101CG1F', 'Catholic', 'Kampala Campus', 'In-Service', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS', 'Masters', 'Master of Science in Information Technology (Information Systems)', 'degree', '../uploads/6418fb0c2ef2a.pdf', 'social_media', 'Twitter', '23/APP/BU/0058', 0, '2023-03-21 00:32:12'),
(97, 'Okello Robson ', '1994-11-14', 'robsongira22@gmail.com', '+256777930015', 'Male', 'Uganda', 'National ID', 'Cm94076102gg8e', 'Christian ', 'Main Campus', 'In-Service', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS', 'Masters', 'Master of Science in Counseling Psychology', 'degree', '../uploads/6418a64f23bee.pdf', 'social_media', 'Tumusiime Margaret ', '23/APP/BU/0059', 0, '2023-03-20 18:30:39'),
(99, 'OKELLO ROGERS', '1995-09-15', 'okellorogers27@gmail.com', '+undefined', 'Male', 'Uganda', 'National ID', 'CM95001109NTEE', 'SDA', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'uce_uace', '../uploads/6423098f0cd1b.pdf', 'family', 'We are SDA at home', '23/APP/BU/0059', 2, '2023-03-28 15:36:47'),
(100, 'Biira Delina', '2000-03-22', 'delinabiira@gmail.com', '+256786263597', 'Female', 'Uganda', 'None', '', 'Seventh Day Adventist', 'Kampala Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Information Technology', 'uace', '../uploads/642309fac3530.pdf', 'family', '', '23/APP/BU/0060', 2, '2023-03-28 15:38:34'),
(101, 'OKELLO ROGERS', '1995-09-15', 'okellorogers27@gmail.com', '+undefined', 'Male', 'Uganda', 'National ID', 'CM95001109NTEE', 'SDA', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'uce_uace', '../uploads/64230a7e01100.pdf', 'family', 'We are SDA at home', '23/APP/BU/0061', 0, '2023-03-28 15:40:46'),
(102, 'Biira Delina', '2000-03-22', 'delinabiira@gmail.com', '+256786263597', 'Female', 'Uganda', 'None', '', 'Seventh Day Adventist', 'Kampala Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Information Technology', 'uace', '../uploads/64230c90901ca.pdf', 'family', '', '23/APP/BU/0062', 0, '2023-03-28 15:49:36'),
(104, 'Orieko Olal Elisha', '1989-05-21', 'elishaorieko97@gmail.com', '+254797279689', 'Male', '', 'National ID', '26685596', 'Christian', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Diploma', 'Diploma in Theology', 'diploma', '../uploads/6419b4a77c762.pdf', 'social_media', 'WhatsApp Messenger', '23/APP/BU/0064', 1, '2023-03-21 13:44:07'),
(105, 'John Mugo Muriithi', '1993-03-06', 'johnmugo377@gmail.com', '+254707605599', 'Male', 'Kenya', 'National ID', '29823231', 'SEVENTH-DAY ADVENTIST', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'o_level', '../uploads/641ac72049151.pdf', 'friend', 'Pastor Kiragu', '23/APP/BU/0065', 1, '2023-03-22 09:15:12'),
(106, 'PETER OURU', '2003-11-25', 'peterouru745@gmail.com', '+254700303226', 'Male', 'Kenya', 'National ID', '40892137', 'CHRISTIAN', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'o_level', '../uploads/6418d20d9a168.pdf', 'friend', 'PASTOR-BENARD OKOKO', '23/APP/BU/0066', 2, '2023-03-20 21:37:17'),
(107, 'PETER OURU', '2003-11-25', 'peterouru745@gmail.com', '+254700303226', 'Male', 'Kenya', 'National ID', '40892137', 'CHRISTIAN', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'o_level', '../uploads/6418d3cc3bf84.pdf', 'friend', 'PASTOR-BENARD OKOKO', '23/APP/BU/0067', 0, '2023-03-20 21:44:44'),
(108, 'PETER OURU', '2003-11-25', 'peterouru745@gmail.com', '+254700303226', 'Male', 'Kenya', 'National ID', '40892137', 'CHRISTIAN', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'o_level', '../uploads/6418d9f3ebb75.pdf', 'friend', 'PASTOR-BENARD OKOKO', '23/APP/BU/0068', 0, '2023-03-20 22:10:59'),
(109, 'PETER OURU', '2003-11-25', 'peterouru745@gmail.com', '+254700303226', 'Male', 'Kenya', 'National ID', '40892137', 'CHRISTIAN', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'o_level', '../uploads/6418daaccd7bd.pdf', 'friend', 'PASTOR-BENARD OKOKO', '23/APP/BU/0069', 0, '2023-03-20 22:14:04'),
(110, 'PETER OURU', '2003-11-25', 'peterouru745@gmail.com', '+254700303226', 'Male', 'Kenya', 'National ID', '40892137', 'CHRISTIAN', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'o_level', '../uploads/6418e51a4aaf8.pdf', 'friend', 'PASTOR-BENARD OKOKO', '23/APP/BU/0070', 0, '2023-03-20 22:58:34'),
(111, 'PETER OURU', '2003-11-25', 'peterouru745@gmail.com', '+254700303226', 'Male', '', 'National ID', '40892137', 'CHRISTIAN', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'o_level', '../uploads/6418ed9187b2a.pdf', 'friend', 'PASTOR-BENARD OKOKO', '23/APP/BU/0071', 0, '2023-03-20 23:34:41'),
(112, 'ANGELINA MUOTI MUTISO', '1978-01-07', 'angelinamutiso2017@gmail.com', '+254724980046', 'Female', 'Kenya', 'National ID', '21062117', 'CHRISTIAN (SEVENTH-DAY ADVENTIST)', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'diploma', '../uploads/6418fd0257460.pdf', 'family', 'Patrick Muema-+254728610517-Email: pmuema177@gmail.com', '23/APP/BU/0072', 1, '2023-03-21 00:40:34'),
(114, 'KENNEYH ATURIKAU', '1988-06-16', 'kenneth.aturikau@gmail.com', '+undefined', 'Male', 'Uganda', 'None', '', 'AGLICAN', 'Main Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Information Technology', 'diploma', '../uploads/6419144ad9f4a.JPG', '', '', '23/APP/BU/0074', 0, '2023-03-21 02:19:54'),
(115, 'Zibula Dladla', '1996-12-22', 'dladlazibu@gmail.com', '+27603959206', 'Male', 'South Africa', 'Passport', 'A06356369', 'Seventh day Adventist Christian', 'Kampala Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'degree', '../uploads/641920c6f0820.pdf', 'friend', '', '23/APP/BU/0075', 2, '2023-03-21 03:13:10'),
(116, 'Victoria Edmund Hyera', '1988-04-04', 'victoriahyera@gmail.com', '+255744149066', 'Female', '', 'National ID', '19880404', 'Christian', 'Main Campus', 'Regular', 'HEALTH AND ALLIED SCIENCES', 'Degree', 'Bachelor of Nursing Science', 'diploma', '../uploads/641988fbe9709.pdf', 'friend', 'Felister Assengs', '23/APP/BU/0074', 0, '2023-03-21 10:37:47'),
(117, 'kennedy akuno', '1986-02-02', 'KENNEDYAKUNO@GMAIL.COM', '+254720620237', 'Male', 'Kenya', 'National ID', '25938739', 'christian', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'o_level', '../uploads/6419a55475c3b.pdf', 'internet', 'INTERNET', '23/APP/BU/0075', 1, '2023-03-21 12:38:44'),
(118, 'Tekalign Sorato', '1995-07-14', 'tekalignsorato@gmail.com', '+251913070430', 'Male', 'Ethiopia', 'Passport', 'EP6501472', 'Adventist ', 'Kampala Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Software Engineering', 'degree', '../uploads/6419ce9aba8f8.jpeg', 'internet', 'Internet ', '23/APP/BU/0076', 0, '2023-03-21 15:34:50'),
(119, 'Tekalign Sorato', '1995-07-14', 'tekalignsorato@gmail.com', '+251913070430', 'Male', 'Ethiopia', 'Passport', 'EP6501472', 'Adventist ', 'Kampala Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Software Engineering', 'degree', '../uploads/6419cf2a6056a.jpeg', 'internet', 'Internet ', '23/APP/BU/0077', 0, '2023-03-21 15:37:14'),
(120, 'Tekalign Sorato', '1995-07-14', 'tekalignsorato@gmail.com', '+251913070430', 'Male', 'Ethiopia', 'Passport', 'EP6501472', 'Adventist ', 'Kampala Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Software Engineering', 'degree', '../uploads/6419d0cf802ad.jpeg', 'internet', 'Internet ', '23/APP/BU/0078', 0, '2023-03-21 15:44:15'),
(121, 'Tekalign Sorato', '1995-07-14', 'tekalignsorato@gmail.com', '+251913070430', 'Male', 'Ethiopia', 'Passport', 'EP6501472', 'Adventist ', 'Kampala Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Software Engineering', 'degree', '../uploads/641a1b563bfaf.jpeg', 'internet', 'Internet ', '23/APP/BU/0079', 0, '2023-03-21 21:02:14'),
(122, 'JONATHAN MACHOKA ISABOKE', '2002-04-17', 'isabokejona298@gmail.com', '+254794765188', 'Male', '', 'National ID', '39307768', 'Christian', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Certificate', 'Certificate in Theology', 'o_level', '../uploads/641a62800503b.jpg', 'family', '', '23/APP/BU/0080', 1, '2023-03-22 02:05:52'),
(123, 'Byarugaba Yonah', '1995-11-13', 'jonabyaru@gmail.com', '+256753508750', 'Male', 'Uganda', 'National ID', 'CM95017100REXE', 'Born again', 'Main Campus', 'In-Service', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES', 'Degree', 'Bachelor of Arts or Science with Education – Primary (with subject combinations)', 'a_level', '../uploads/641b31ebb9dcf.jpeg', 'friend', 'Michael Otogo', '23/APP/BU/0081', 2, '2023-03-22 16:50:51'),
(124, 'LAUREEN AWUOR', '2001-08-02', 'awuorlaureen3@gmail.com', '716494426', 'Female', '', 'National ID', '40666679', 'CHRISTIAN', 'Main Campus', 'Regular', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES', 'Diploma', 'Diploma in Social Work and Social Administration', 'certificate', '../uploads/641c602c6673a.pdf', 'friend', '', '23/APP/BU/0082', 1, '2023-03-23 14:20:28'),
(125, 'Abubakar uba isah', '1997-02-28', 'abubakaruba901@gmail.com', '08030886125', 'Male', 'Nigeria', 'Passport', 'A11640965', 'Nigeria', 'Main Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Business Computing', '', '../uploads/641d047d0f6aa.jpg', 'friend', 'Auwal adam', '23/APP/BU/0083', 1, '2023-03-24 02:01:33'),
(126, 'Charles Ekellot', '1996-06-04', 'charlesekellot75@gmail.com', '+256782635484', 'Male', 'Uganda', 'National ID', 'CM960431024YGC', 'Catholic', 'Kampala Campus', 'In-Service', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES', 'Degree', 'Bachelor of Arts or Science with Education – Primary (with subject combinations)', 'certificate', '../uploads/641fc72fea3db.docx', 'internet', 'Google', '23/APP/BU/0084', 0, '2023-03-26 04:16:47'),
(127, 'Enock kipkirui langat', '1996-11-01', 'enocklangt96@gmail.com', '+254729480209', 'Male', '', 'National ID', '33524414', 'Christian', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', '', '', 'degree', '../uploads/641a15c3b74f3.pdf', 'friend', 'Pastor Jefferson musyoki', '23/APP/BU/0085', 0, '2023-03-21 20:38:27'),
(129, 'Josphat Branco Makani', '1994-07-05', 'josphatmakani576@gmail.com', '+undefined', 'Male', 'Zimbabwe', 'Passport', 'AE287781', 'Christianity', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'uce', '../uploads/6419bde6569f0.pdf', 'friend', 'Knowledge Magiya', '23/APP/BU/0087', 1, '2023-03-21 14:23:34'),
(130, 'ORIEKO OLAL ELISHA', '1989-05-21', 'elishaorieko97@gmail.com', '+254797279689', 'Male', 'Kenya', 'National ID', '26685596', 'christian', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Diploma', 'Diploma in Theology', 'diploma', '../uploads/6419d06077054.pdf', 'friend', 'Friend', '23/APP/BU/0088', 1, '2023-03-21 15:42:24'),
(131, 'Josphat Branco Makani', '1994-07-05', 'josphatmakani576@gmail.com', '+27813433861', 'Male', 'Zimbabwe', 'Passport', 'AE287781', 'Christianity', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'uce', '../uploads/6419fa2ce05ba.jpg', 'friend', 'Knowledge Magiya', '23/APP/BU/0089', 1, '2023-03-21 18:40:44'),
(132, 'Robert Ombogo Bosire ', '1976-08-04', 'robertbosire07@gmail.com', '+254706042471', 'Male', 'Kenya', 'National ID', '21569656', 'Christian ', 'Main Campus', 'In-Service', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES', 'Degree', 'Bachelor of Arts or Science with Education-Secondary (with subject combinations)', 'diploma', '../uploads/641adf469d809.pdf', 'friend', 'Mr Bosire ', '23/APP/BU/0090', 0, '2023-03-22 10:58:14'),
(133, 'Cliveland Ochieng Owiti', '1998-12-18', 'ochiengclivland@gmail.com', '+254103069191', 'Male', 'Kenya', 'National ID', '36393560', 'Christian-Seventh Day Adventist', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'a_level', '../uploads/641e4f97a8ce8.pdf', 'friend', 'Pst John Rabongo and Lec Oloo', '23/APP/BU/0091', 1, '2023-03-25 01:34:15'),
(134, 'MUSA MGETA', '1980-12-08', 'mmgeta22@gmail.com', '+255786637846', 'Male', 'Tanzania, United Republic of', 'National ID', '19801208275220000126', 'christian', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'diploma', '../uploads/641f44b7685c7.pdf', 'friend', 'CHURCH', '23/APP/BU/0092', 2, '2023-03-25 19:00:07'),
(135, 'RAHELI MUSSA RAIMOND', '2003-12-16', 'raimondraheli@gmail.com', '0699562870', 'Female', 'Tanzania, United Republic of', 'None', '', 'Christian', 'Arua Campus', 'Regular', 'BUSINESS', 'Diploma', 'Diploma in Human Resource Management', 'o_level', '../uploads/641f647bcaa19.pdf', 'internet', 'CHURCH', '23/APP/BU/0093', 0, '2023-03-25 21:15:39'),
(136, 'Augustine Ndubuisi Maxwell ', '1993-08-26', 'austinemaxwell21@gmail.com', '+2348181173816', 'Male', 'Nigeria', 'National ID', '40572149362', 'Christianity', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'o_level', '../uploads/641f94256b055.jpg', 'friend', 'Karen', '23/APP/BU/0094', 0, '2023-03-26 00:39:01'),
(137, 'Osward Mundongo ', '2002-01-20', 'oswardmundongo@gmail.com', '+undefined0765210420', 'Male', 'Zambia', 'National ID', '383743/64/1', 'SDA ', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', '', '', 'degree', '../uploads/6420a953bd206.jpg', 'internet', 'Through media', '23/APP/BU/0095', 0, '2023-03-26 20:21:39'),
(138, 'Perez Taabu Odhiambo', '2003-07-02', 'odhiamboperez54@gmail.com', '+25414365200', 'Female', 'Kenya', 'Passport', 'B225548', 'christian', 'Main Campus', 'Regular', 'HEALTH AND ALLIED SCIENCES', 'Degree', 'Bachelor of Nursing Science', 'o_level', '../uploads/6425af47cb5c6.pdf', 'internet', 'Parents and relatives who studied there', '23/APP/BU/0095', 0, '2023-03-30 15:48:23'),
(139, 'Harry Kanyama II ', '2004-03-28', 'harrykanyama228@gmail.com', '+260 975716963', 'Male', 'Zambia', 'National ID', '369809/17/1', 'Christian ', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'o_level', '../uploads/6426e3a51a33d.pdf', 'social_media', 'Northern Zambia Union Conference Facebook page ', '23/APP/BU/0096', 0, '2023-03-31 13:44:05'),
(140, 'Meshaki', '2000-07-12', 'meshakishibanda2@gmail.com', '+255754852966', 'Male', 'Tanzania, United Republic of', 'National ID', '20000712531030000129', 'Seventh day Adventist', 'Kampala Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'a_level', '../uploads/6418b6acbb0f9.pdf', 'family', 'Lake Tanganyika Field', '23/APP/BU/0097', 0, '2023-03-20 19:40:28'),
(141, 'Ahmed Dafaalla ', '1995-09-12', 'Ahmed_dafalla@hotmail.com', '+971562799418', 'Male', 'Sudan', 'Passport', 'P06696907', 'Muslim', 'Kampala Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Certificate', 'Certificate in Information Technology', 'diploma', '../uploads/6418d96db8f23.pdf', 'internet', 'Internet search', '23/APP/BU/0098', 0, '2023-03-20 22:08:45'),
(142, 'DONALD Dama', '1979-02-28', 'ddamaalabi@yoo.com', '+256782325724', 'Male', 'Uganda', 'National ID', 'CM79029100E7TA', 'Catholic', 'Kampala Campus', 'In-Service', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS', 'Masters', 'Master of Business Administration (Finance)', 'degree', '../uploads/641a03ea9ff5a.pdf', 'family', 'Enid Ayesiga', '23/APP/BU/0099', 0, '2023-03-21 19:22:18'),
(143, 'Damas Chrispin Nyanduku ', '2001-03-11', 'damaschrispin268@gmail.com', '+255 693 438 389', 'Male', 'Tanzania, United Republic of', 'None', '', 'Dar es salaam ', 'Arua Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Certificate', 'Certificate in Theology', 'o_level', '../uploads/6419f2cf18ee1.jpg', 'family', '', '23/APP/BU/0100', 0, '2023-03-21 18:09:19'),
(144, 'Damas Chrispin Nyanduku ', '2001-03-11', 'damaschrispin268@gmail.com', '+255 693 438 389', 'Male', 'Tanzania, United Republic of', 'None', '', 'Dar es salaam ', 'Arua Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Certificate', 'Certificate in Theology', 'o_level', '../uploads/6419f2ef33613.jpg', 'family', '', '23/APP/BU/0101', 0, '2023-03-21 18:09:51'),
(145, 'Damas Chrispin Nyanduku ', '2001-03-11', 'damaschrispin268@gmail.com', '+255 693 438 389', 'Male', 'Tanzania, United Republic of', 'None', '', 'Dar es salaam ', 'Arua Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Certificate', 'Certificate in Theology', 'o_level', '../uploads/6419f3f647cf0.jpg', 'family', '', '23/APP/BU/0102', 0, '2023-03-21 18:14:14'),
(146, 'Damas Chrispin Nyanduku ', '2001-03-11', 'damaschrispin268@gmail.com', '+255 693 438 389', 'Male', 'Tanzania, United Republic of', 'None', '', 'Dar es salaam ', 'Arua Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Certificate', 'Certificate in Theology', 'o_level', '../uploads/6419f4762a220.jpg', 'family', '', '23/APP/BU/0103', 0, '2023-03-21 18:16:22'),
(147, 'Annington Ngai', '1987-08-04', 'gitongangai@gmail.com', '0711894799', 'Male', 'Kenya', 'National ID', '27542933', 'Christianity', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'degree', '../uploads/6418ed16efbf4.pdf', 'family', 'Church', '23/APP/BU/0104', 0, '2023-03-20 23:32:38'),
(148, 'IVO VALEUR BAVUMIRAGIYE ', '2004-11-23', 'ibavumiragiye@gmail.com', '+25776557535', 'Male', 'Burundi', 'National ID', '531.0702/4702/2022', 'Catholic ', 'Kampala Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Diploma', 'Diploma in Biomedical Engineering and Technology', 'diploma', '../uploads/641bda4d8ae37.pdf', 'social_media', 'Google ', '23/APP/BU/0105', 0, '2023-03-23 04:49:17'),
(149, 'JOACKIM E. MWANKENJA', '1986-05-25', 'gwamungupu@gmail.com', '+undefined', 'Male', '', 'National ID', '19860525355210000428', 'CHRISTIAN(SDA)', 'Kampala Campus', 'Regular', 'HEALTH AND ALLIED SCIENCES', '', '', '', '../uploads/6418b92ce17aa.pdf', 'family', 'MY PASTOR SHADRACK MASUMBUKO', '23/APP/BU/0106', 0, '2023-03-20 19:51:08'),
(150, 'JOACKIM E. MWANKENJA', '1986-05-25', 'gwamungupu@gmail.com', '+undefined', 'Male', '', 'National ID', '19860525355210000428', 'CHRISTIAN(SDA)', 'Kampala Campus', 'Regular', 'HEALTH AND ALLIED SCIENCES', '', '', '', '../uploads/6418b9b47b5e2.pdf', 'family', 'MY PASTOR SHADRACK MASUMBUKO', '23/APP/BU/0107', 0, '2023-03-20 19:53:24'),
(151, 'DANIEL MIURIKI MAORE', '2003-12-22', 'murikidaniel81@gmail.com', '+254797081566', 'Male', 'Kenya', 'National ID', '41877759', 'christian', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'certificate', '../uploads/64188ecb964d6.pdf', 'friend', 'friend', '23/APP/BU/0108', 1, '2023-03-20 16:50:19'),
(152, 'LAUREEN AWUOR OTUGA', '2001-08-02', 'awuorlaureen3@gmail.com', '+254716494426', 'Female', 'Kenya', 'National ID', '40666679', 'christian', 'Main Campus', 'Regular', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES', 'Diploma', 'Diploma in Social Work and Social Administration', 'certificate', '../uploads/64189ac4bd675.pdf', 'social_media', 'social media', '23/APP/BU/0109', 0, '2023-03-20 17:41:24'),
(153, 'DANIEL MIURIKI MAORE', '2003-12-22', 'murikidaniel81@gmail.com', '+254797081566', 'Male', '', 'National ID', '41877759', 'christian', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'certificate', '../uploads/64189be504219.pdf', 'friend', 'friend', '23/APP/BU/0110', 0, '2023-03-20 17:46:13'),
(154, 'Rogers Waniala ROGERS', '1991-09-28', 'Rogers.waniala@ahf.org', '0707780788', 'Male', 'Uganda', 'National ID', '18543663UND61852', 'Angelican', 'Kampala Campus', 'In-Service', 'BUSINESS', 'Degree', 'Bachelor of Business Administration in Management', 'uace', '../uploads/6418dbc883981.pdf', 'social_media', 'Good University', '23/APP/BU/0111', 1, '2023-03-20 22:18:48'),
(155, 'SAMUEL ISABOKE O. OMOKE', '1982-04-01', 'samyisahh@gmail.com', '+254728051033', 'Male', 'Kenya', 'National ID', '22625703', 'CHRISTIAN', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Arts in Religious Studies n Chaplaincy', 'diploma', '../uploads/641b16a49f0c3.pdf', 'friend', 'PASTOR SAMMY MAROKO ONDARI', '23/APP/BU/0112', 1, '2023-03-22 14:54:28'),
(156, 'SAMUEL ISABOKE O. OMOKE', '1982-04-01', 'samyisahh@gmail.com', '+254728051033', 'Male', 'Kenya', 'National ID', '22625703', 'CHRISTIAN', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Arts in Religious Studies n Chaplaincy', 'diploma', '../uploads/641b1f0e89bc8.pdf', 'friend', 'PASTOR SAMMY MAROKO ONDARI', '23/APP/BU/0113', 0, '2023-03-22 15:30:22'),
(157, 'LAUREEN AWUOR OTUGA', '2001-08-02', 'awuorlaureen3@gmail.com', '+254716494426', 'Female', 'Kenya', 'National ID', '40666679', 'christian', 'Main Campus', 'Regular', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES', 'Degree', 'Bachelor of Social Work and Social Administration', 'certificate', '../uploads/641b2cd6dac84.pdf', 'friend', 'Justus Bollo', '23/APP/BU/0114', 1, '2023-03-22 16:29:10'),
(158, 'JOSEPH SIEBERI NYAMARI ', '1995-04-18', 'nyamarij6@gmail.com', '+254725074425', 'Male', 'Kenya', 'National ID', '32033103', 'SDA', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'a_level', '../uploads/641b326cd9304.jpg', 'friend', 'GEORGE MUTUKU a student pursuing Theology (in service)', '23/APP/BU/0115', 1, '2023-03-22 16:53:00'),
(160, 'Sammy', '1999-07-08', 'ochiengsammy36@gmail.com', '+254 794330836', 'Male', 'Kenya', 'National ID', '38914089', 'Christian ', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'a_level', '../uploads/641b65bd94c25.pdf', 'social_media', 'Facebook', '23/APP/BU/0117', 0, '2023-03-22 20:31:57'),
(161, 'Sammy', '1999-07-08', 'ochiengsammy36@gmail.com', '+254 794330836', 'Male', 'Kenya', 'National ID', '38914089', 'Christian ', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'a_level', '../uploads/641b696e4cac2.pdf', 'social_media', 'Facebook', '23/APP/BU/0118', 0, '2023-03-22 20:47:42'),
(162, 'Iga Isaac', '1989-03-11', 'igaisaac@gmail.com', '0787426970', 'Male', 'Uganda', 'National ID', 'CM89012102X33H', 'Christian', 'Kampala Campus', 'In-Service', 'HEALTH AND ALLIED SCIENCES', 'Degree', 'Bachelor of Nursing Science', 'uce_uace', '../uploads/641b79b9f1323.pdf', 'internet', '', '23/APP/BU/0119', 1, '2023-03-22 21:57:13'),
(163, 'LAUREEN AWUOR OTUGA', '2001-02-08', 'awuorlaureen3@gmail.com', '+254716494426', 'Female', 'Kenya', 'National ID', '40666679', 'christian', 'Main Campus', 'Regular', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES', 'Degree', 'Bachelor of Social Work and Social Administration', 'certificate', '../uploads/6420998911afc.pdf', 'friend', 'Justus Bollo', '23/APP/BU/0120', 0, '2023-03-26 19:14:17'),
(164, 'Ajoh Kuol Bior Keech ', '1997-08-16', 'ajohkuol777@gmail.com', '+211925665565', 'Male', 'Sudan', 'Passport', 'R00567787', 'Seventh day Adventist ', 'Main Campus', 'In-Service', 'BUSINESS', 'Degree', 'Bachelor of Arts in Economics', 'certificate', '../uploads/64209f5c1d17e.pdf', 'friend', 'Ruth Muka', '23/APP/BU/0121', 1, '2023-03-26 19:39:08'),
(165, 'Nakiwala Jemimah Kuteesa ', '2000-01-10', 'jemimahnkuteesa@gmail.com', '+256782615707', 'Female', 'Uganda', 'National ID', 'CF0002310DAHMJ', 'Seventh Day Adventist ', 'Kampala Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Software Engineering', 'uce_uace', '../uploads/6420f89b7838e.jpeg', 'family', 'Family ', '23/APP/BU/0122', 0, '2023-03-27 01:59:55'),
(166, 'Nakiwala Jemimah Kuteesa ', '2000-01-10', 'jemimahnkuteesa@gmail.com', '+256782615707', 'Female', 'Uganda', 'National ID', 'CF0002310DAHMJ', 'Seventh Day Adventist ', 'Kampala Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Software Engineering', 'uce_uace', '../uploads/6420f89d6b8e7.jpeg', 'family', 'Family ', '23/APP/BU/0123', 0, '2023-03-27 01:59:57'),
(167, 'Nakiwala Jemimah Kuteesa ', '2000-01-10', 'jemimahnkuteesa@gmail.com', '+256782615707', 'Female', 'Uganda', 'National ID', 'CF0002310DAHMJ', 'Seventh Day Adventist ', 'Kampala Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Software Engineering', 'uce_uace', '../uploads/6420f8c92d206.jpeg', 'family', 'Family ', '23/APP/BU/0124', 0, '2023-03-27 02:00:41'),
(168, 'Nakiwala Jemimah Kuteesa ', '2000-01-10', 'jemimahnkuteesa@gmail.com', '+256782615707', 'Female', 'Uganda', 'National ID', 'CF0002310DAHMJ', 'Seventh Day Adventist ', 'Kampala Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Software Engineering', 'uce_uace', '../uploads/6420f8dcecd36.jpeg', 'family', 'Family ', '23/APP/BU/0125', 0, '2023-03-27 02:01:00'),
(169, 'Nakiwala Jemimah Kuteesa ', '2000-01-10', 'jemimahnkuteesa@gmail.com', '+256782615707', 'Female', 'Uganda', 'National ID', 'CF0002310DAHMJ', 'Seventh Day Adventist ', 'Kampala Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Software Engineering', 'uce_uace', '../uploads/6420f90a2ea73.jpeg', 'family', 'Family ', '23/APP/BU/0126', 1, '2023-03-27 02:01:46'),
(170, 'Elizabeth Lucas Nganji', '1985-01-01', 'elinganji@gmail.com', '0758219345', 'Female', 'Uganda', 'Passport', 'TAE537535', 'Christian', 'Kampala Campus', 'Regular', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES', 'Diploma', 'Diploma in Early Childhood Development (ECD)', 'diploma', '../uploads/6421eb4eb4aa7.pdf', 'friend', 'Dauda Bakari', '23/APP/BU/0126', 0, '2023-03-27 19:15:26'),
(171, 'Abdul Agoyi', '1979-12-04', 'abdul.agoyi79@gmail.com', '+256772792528', 'Male', 'Uganda', 'National ID', 'CM790661035PFJ', 'Islam', 'Kampala Campus', 'In-Service', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS', 'Postgraduate Diploma', 'Postgraduate Diploma in Public Health', 'degree', '../uploads/6423403be5a5f.pdf', 'internet', 'university website', '23/APP/BU/0127', 0, '2023-03-28 19:30:03'),
(172, 'Lameck nkuba', '1994-06-30', 'lamenkuba@gmail.com', '0788022795', 'Male', 'Tanzania, United Republic of', 'National ID', '19940630233150000121', 'Christianity', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'degree', '../uploads/6424e6113d731.pdf', 'internet', 'Internet', '23/APP/BU/0128', 0, '2023-03-30 01:29:53'),
(173, 'Lameck nkuba', '1994-06-30', 'lamenkuba@gmail.com', '0788022795', 'Male', 'Tanzania, United Republic of', 'National ID', '19940630233150000121', 'Christianity', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'degree', '../uploads/6424e71f83676.pdf', 'internet', 'Internet', '23/APP/BU/0129', 0, '2023-03-30 01:34:23'),
(174, 'Lameck nkuba', '1994-06-30', 'lamenkuba@gmail.com', '0788022795', 'Male', 'Tanzania, United Republic of', 'National ID', '19940630233150000121', 'Christianity', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'degree', '../uploads/6424eb041ee90.pdf', 'internet', 'Internet', '23/APP/BU/0130', 0, '2023-03-30 01:51:00'),
(175, 'JOSHUA SEBOHA YOHANA', '1999-05-20', 'jmchamungo@gmail.com', '+255 746347178', 'Male', 'Tanzania, United Republic of', 'National ID', '19990520231230000129', 'SEVENTH DAY ADVENTIST CHURCH', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'a_level', '../uploads/6425cb8259043.pdf', 'friend', 'PR FADHILI MBWAMBO', '23/APP/BU/0131', 0, '2023-03-30 17:48:50'),
(176, 'JOSHUA SEBOHA YOHANA', '1999-05-20', 'jmchamungo@gmail.com', '+255 746347178', 'Male', 'Tanzania, United Republic of', 'National ID', '19990520231230000129', 'SEVENTH DAY ADVENTIST CHURCH', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'a_level', '../uploads/6425cb8ca2887.pdf', 'friend', 'PR FADHILI MBWAMBO', '23/APP/BU/0132', 0, '2023-03-30 17:49:00'),
(177, 'MELI ONESMO NYALALI', '1997-02-03', 'Yusuphonesmo@gmail.com', '+225754516410', 'Male', 'Tanzania, United Republic of', 'National ID', '19970203411070000323', 'Christian ', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'a_level', '../uploads/6419486898293.pdf', 'friend', 'Hangira Josephat lyamola', '23/APP/BU/0133', 0, '2023-03-21 06:02:16'),
(178, 'WILLIAM BENARD FIKIRI', '1999-03-08', 'williamfikiri99@gmail.com', '+255657528489', 'Male', 'Tanzania, United Republic of', 'National ID', '19990308332140000228', 'CHRISTIAN', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'certificate', '../uploads/641aa2ae3f822.pdf', 'friend', 'PASTORS ', '23/APP/BU/0134', 0, '2023-03-22 06:39:42'),
(179, 'LOKODO AGUSTINE MORRIS', '1988-05-17', 'alokodo@yahoo.com', '+256788881415', 'Male', 'Sudan', 'Passport', 'M8800001654987', 'CHRISTIAN', 'Kampala Campus', 'In-Service', 'BUSINESS', 'Degree', 'Bachelor of Business Administration in Management', 'certificate', '../uploads/6418f8ae4b622.pdf', 'internet', 'WEBSITE', '23/APP/BU/0135', 0, '2023-03-21 00:22:06');
INSERT INTO `application_form` (`id`, `full_name`, `date_of_birth`, `email`, `mobile_number`, `gender`, `country`, `id_type`, `id_number`, `religion`, `location`, `time`, `school`, `level`, `course`, `type`, `document`, `bu`, `kabu`, `app_id`, `status`, `created_at`) VALUES
(180, 'LOKODO AGUSTINE MORRIS', '1988-05-17', 'alokodo@yahoo.com', '+256788881415', 'Male', 'Sudan', 'Passport', 'M8800001654987', 'CHRISTIAN', 'Kampala Campus', 'In-Service', 'BUSINESS', 'Degree', 'Bachelor of Business Administration in Management', 'certificate', '../uploads/6418f928273b3.pdf', 'internet', 'WEBSITE', '23/APP/BU/0136', 0, '2023-03-21 00:24:08'),
(181, 'Charles Ekellot', '1996-06-04', 'charlesekellot75@gmail.com', '+256782635484', 'Male', 'Uganda', 'National ID', 'CM960431024YGC', 'Catholic', 'Kampala Campus', 'In-Service', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES', 'Diploma', 'Diploma in Education – Primary ', 'certificate', '../uploads/6419bbc371496.pdf', 'internet', 'Facebook', '23/APP/BU/0137', 0, '2023-03-21 14:14:27'),
(182, 'Kasujja Gideon Raymond', '1993-02-10', 'rgkasujja@gmail.com', '+256757197462', 'Male', 'Uganda', 'National ID', 'CM9305210DMELA', 'SDA', 'Kampala Campus', 'In-Service', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS', 'Masters', 'Master of Science in Information Technology (Information Systems)', 'degree', '../uploads/641dc10033dc8.pdf', 'family', '', '23/APP/BU/0138', 0, '2023-03-24 15:25:52'),
(183, 'BARAKA SOSPETER SEKA', '1989-01-10', 'barseka1985@gmaily.com', '+255768358577', 'Male', 'Tanzania, United Republic of', 'National ID', '19890110141150000328', 'Christian', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', '', '../uploads/641dcb9d88f94.pdf', 'family', 'Family', '23/APP/BU/0139', 0, '2023-03-24 16:11:09'),
(184, 'Samuel Baker Luka', '1994-08-12', 'bakerlukasamuel@gmail.com', '+211928691865', 'Male', 'Sudan', 'None', '', 'Catholic ', 'Arua Campus', 'In-Service', 'BUSINESS', 'Degree', 'Bachelor of Business Administration (Accounting) ', 'diploma', '../uploads/6422f5705c4a6.pdf', 'social_media', 'Facebook', '23/APP/BU/0140', 0, '2023-03-28 14:10:56'),
(185, 'Samuel Baker Luka', '1994-08-12', 'bakerlukasamuel@gmail.com', '+211928691865', 'Male', 'Sudan', 'None', '', 'Catholic ', 'Arua Campus', 'In-Service', 'BUSINESS', 'Degree', 'Bachelor of Business Administration (Accounting) ', 'diploma', '../uploads/6419dc23e5f9f.pdf', 'social_media', 'Facebook', '23/APP/BU/0141', 0, '2023-03-21 16:32:35'),
(186, 'OKELLO BENJAMIN', '1999-12-27', 'okellobenjamin4@gmail.com', '0771082353', 'Male', 'Uganda', 'National ID', '', 'Catholic', 'Main Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Network Systems Administration', 'uace', '../uploads/641b188b89f5e.pdf', 'internet', '', '23/APP/BU/0142', 0, '2023-03-22 15:02:35'),
(187, 'Barigye Adrian ', '1989-12-01', 'adrianbarigye1@gmail.com', '+256787590605', 'Male', 'Uganda', 'National ID', '', 'Christian ', 'Kampala Campus', 'In-Service', 'BUSINESS', 'Degree', 'Bachelor of Science in Accounting', 'uce_uace', '../uploads/64189ecae1c19.jpg', 'internet', '', '23/APP/BU/0143', 0, '2023-03-20 17:58:34'),
(188, 'Moses Olara', '1996-06-16', 'molarag21996@gmail.com', '0781637392', 'Male', 'Uganda', 'National ID', 'CM96005101R33C', 'SDA', 'Main Campus', 'In-Service', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Software Engineering', 'uace', '../uploads/6418fb7752475.pdf', 'family', 'Church', '23/APP/BU/0144', 0, '2023-03-21 00:33:59'),
(189, 'Moses Olara', '1996-06-16', 'molarag21996@gmail.com', '0781637392', 'Male', 'Uganda', 'National ID', 'CM96005101R33C', 'SDA', 'Main Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Software Engineering', 'uace', '../uploads/6418fec41e246.pdf', 'family', 'Church', '23/APP/BU/0145', 0, '2023-03-21 00:48:04'),
(190, 'Moses Olara', '1996-06-16', 'molarag21996@gmail.com', '0781637392', 'Male', 'Uganda', 'National ID', 'CM96005101R33C', 'SDA', 'Main Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Software Engineering', 'uace', '../uploads/6419005f3abaa.pdf', 'family', 'Church', '23/APP/BU/0146', 0, '2023-03-21 00:54:55'),
(191, 'New stone s Mkiramweni', '1999-10-09', 'newstonemkiramweni@gmail.com', '0626630162', 'Male', 'Tanzania, United Republic of', 'None', '', 'Christian', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'o_level', '../uploads/64194199bfe19.pdf', '', '', '23/APP/BU/0147', 0, '2023-03-21 05:33:13'),
(192, 'LONGBENY KEDIENDE MAPUOR AKEC', '2006-12-15', 'longbenyked@gmail.com', '+undefined', 'Male', 'Sudan', 'Passport', 'R00526444', 'Christian', 'Main Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Biochemistry', 'o_level', '../uploads/6418e0c87fb8b.pdf', 'internet', 'facebook', '23/APP/BU/0148', 0, '2023-03-20 22:40:08'),
(193, 'LONGBENY KEDIENDE MAPUOR AKEC', '2006-12-15', 'longbenyked@gmail.com', '+undefined', 'Male', 'Sudan', 'Passport', 'R00526444', 'Christian', 'Main Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Biochemistry', 'o_level', '../uploads/6418ea8d1f4e1.pdf', 'internet', 'facebook', '23/APP/BU/0149', 0, '2023-03-20 23:21:49'),
(194, 'Nakiwala Jemimah Kuteesa ', '2000-01-10', 'jemimahnkuteesa@gmail.com', '+256782615707', 'Female', 'Uganda', 'National ID', 'CF0002310DAHMJ', 'SDA', 'Kampala Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Degree', 'Bachelor of Science in Software Engineering', 'uce_uace', '../uploads/641a8181316d5.pdf', 'family', '', '23/APP/BU/0150', 0, '2023-03-22 04:18:09'),
(195, 'JACKSON M MRINDE', '2001-01-18', 'jacksonmrinde@gmail.com', '+225715392316', 'Male', 'Tanzania, United Republic of', 'None', '', 'MTWARA', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Certificate', 'Certificate in Theology', 'certificate', '../uploads/641888448b706.pdf', 'internet', 'Through Google search', '23/APP/BU/0151', 0, '2023-03-20 16:22:28'),
(196, 'DANIEL NYAKWANA KARANI', '1990-01-01', 'dkarani378@gmail.com', '+254718362539', 'Male', 'Kenya', 'National ID', '27916192', 'SEVENTY DAY ADVENTIST', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'diploma', '../uploads/641d8ab471e0f.pdf', 'social_media', 'ANDREW ORINA', '23/APP/BU/0152', 0, '2023-03-24 11:34:12'),
(197, 'mbabazi enos', '1998-05-08', 'enosmbabazi@gmail.com', '+256774821571', 'Male', 'Uganda', 'None', '', 'sda', 'Main Campus', 'Regular', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES', 'Degree', 'Bachelor of Journalism and Mass Communication ', 'o_level', '../uploads/64187f3d85ea4.pdf', 'social_media', 'facebook', '23/APP/BU/0153', 1, '2023-03-20 15:43:57'),
(198, 'FRANCIS LUBANJWA', '2001-05-05', 'lubanjwafrancis@gmail.com', '0741789121', 'Male', 'Uganda', 'National ID', 'A00', 'catholic', 'Main Campus', 'Regular', 'SCIENCE & TECHNOLOGY', '', '', 'a_level', '../uploads/6419c3287d69e.jpg', 'internet', 'ggg', '23/APP/BU/0154', 0, '2023-03-21 14:46:00'),
(199, 'FRANCIS LUBANJWA', '2001-05-05', 'lubanjwafrancis@gmail.com', '0741789121', 'Male', 'Uganda', 'National ID', 'A00', 'catholic', 'Main Campus', 'Regular', 'SCIENCE & TECHNOLOGY', '', '', 'a_level', '../uploads/6419c38b46d29.jpg', 'internet', 'ggg', '23/APP/BU/0155', 0, '2023-03-21 14:47:39'),
(200, 'Brian Ngala Tumaini', '2004-12-24', 'Charoperis96@gmail.com', '+254746260433', 'Male', 'Kenya', 'National ID', '23799721', 'Christian', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Certificate', 'Certificate in Theology', 'o_level', '../uploads/641b66f73efa1.png', 'family', 'Shadrack charo', '23/APP/BU/0156', 0, '2023-03-22 20:37:11'),
(201, 'Brian Ngala Tumaini', '2004-12-24', 'Charoperis96@gmail.com', '+254746260433', 'Male', 'Kenya', 'National ID', '23799721', 'Christian', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Certificate', 'Certificate in Theology', 'o_level', '../uploads/641cd41edb66c.png', 'family', 'Shadrack charo', '23/APP/BU/0157', 0, '2023-03-23 22:35:10'),
(202, 'Leo', '2001-02-14', 'eltonqueensen@yahoo.com', '+123456789', 'Male', 'United States', 'None', '', 'SDA', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'uace', '../uploads/641f091a07e86.pdf', 'friend', 'fb', '23/APP/BU/0158', 0, '2023-03-25 14:45:46'),
(203, 'Enock kipkirui langat ', '1996-11-01', 'enocklangat96@gmail.com', '+254729480209', 'Male', 'Kenya', 'National ID', '33524414', 'Christian ', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', '', 'degree', '../uploads/641f3d4b6ecae.pdf', 'friend', 'Jephason musyoki', '23/APP/BU/0159', 0, '2023-03-25 18:28:27'),
(204, 'Kosira', '1992-12-12', 'mugsjsp21@gmail.com', '0775058319', 'Male', 'Uganda', 'None', '', 'SDA', 'Main Campus', 'Regular', 'BUSINESS', 'Degree', 'Bachelor of Arts in Economics', 'uce', '../uploads/6421c1bb6c66f.jpeg', 'social_media', 'instagram', '23/APP/BU/0160', 0, '2023-03-27 16:18:03'),
(205, 'Joseph Tame Mugerwa', '2000-12-11', 'test1@gmail.com', '775058319', 'Male', 'Uganda', 'None', '', 'SDA', 'Main Campus', 'Regular', 'BUSINESS', 'Degree', 'Bachelor of Arts in Economics', 'uce_uace', '../uploads/641873d5b5f16.jpeg', 'social_media', 'X.com', '23/APP/BU/0161', 0, '2023-03-20 14:55:17'),
(206, 'Leo', '1998-04-08', 'chilengelton@gmail.com', '+123456789', 'Male', 'United States', 'None', '', 'SDA', 'Main Campus', 'Regular', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Arts in Religious Studies n Chaplaincy', 'uce', '../uploads/6418fd6bbdca0.pdf', 'social_media', 'fb', '23/APP/BU/0162', 0, '2023-03-21 00:42:19'),
(207, 'Sylivan Tata Charles', '1984-01-01', 'sylivantata@gmail.com', '+211921652358', 'Male', 'Sudan', 'National ID', '000587989', 'Christian ', 'Arua Campus', 'In-Service', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES', 'Degree', 'Bachelor of Arts in Development Studies', 'degree', '../uploads/6419a67f8418e.jpeg', 'internet', 'Internet', '23/APP/BU/0163', 0, '2023-03-21 12:43:43'),
(208, 'Omondi Joshua ', '1989-12-31', 'joshuaomondio@gmail.com', '0715361298', 'Male', '', 'National ID', '27911376', 'Christian ', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', '', '', 'o_level', '../uploads/6418f500184a6.pdf', 'friend', 'In our church.....SDA.', '23/APP/BU/0164', 0, '2023-03-21 00:06:24'),
(209, 'Omondi Joshua ', '1989-12-31', 'joshuaomondio@gmail.com', '0715361298', 'Male', '', 'National ID', '27911376', 'Christian ', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', '', '', 'o_level', '../uploads/6418f50422bcd.pdf', 'friend', 'In our church.....SDA.', '23/APP/BU/0165', 0, '2023-03-21 00:06:28'),
(210, 'Omondi Joshua ', '1989-12-31', 'joshuaomondio@gmail.com', '0715361298', 'Male', '', 'National ID', '27911376', 'Christian ', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', '', '', 'o_level', '../uploads/6418f52d2bc73.pdf', 'friend', 'In our church.....SDA.', '23/APP/BU/0166', 0, '2023-03-21 00:07:09'),
(211, 'AMANA MWANYASI', '2000-11-30', 'amanaalenimwanyasi01@gmail.com', '+undefined', 'Male', 'Tanzania, United Republic of', 'None', '', 'seventh-day Adventist ', 'Main Campus', 'Regular', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES', 'Degree', 'Bachelor of Arts in Community Development', 'diploma', '../uploads/6418a9ab903ad.pdf', 'social_media', 'Adventists universities websites ', '23/APP/BU/0167', 0, '2023-03-20 18:44:59'),
(212, 'WITONZE MAZI KALIMANZIRA', '1990-01-15', 'witonze@gmail.com', '+255746617896', 'Male', 'Tanzania, United Republic of', 'National ID', '19900115334020000121', 'Christian ', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'diploma', '../uploads/641cf3ea4e8cb.pdf', 'social_media', '', '23/APP/BU/0168', 0, '2023-03-24 00:50:50'),
(213, 'Nvule James ', '1990-08-06', 'nvulejames2015@gmail.com', '0753287770', 'Male', 'Uganda', 'National ID', 'CM9005210FQMXJ', 'Catholic ', 'Main Campus', 'Regular', 'SCIENCE & TECHNOLOGY', 'Certificate', 'Certificate in Information Technology', 'degree', '../uploads/641d42a4199b9.pdf', 'family', 'Muganda Ronald', '23/APP/BU/0169', 0, '2023-03-24 06:26:44'),
(214, 'APOLLO PAUL KASIRYE', '1981-02-28', 'apollokasirye123@gmail.com', '+255654746174', 'Male', 'Tanzania, United Republic of', 'National ID', '19810228256160000122', 'CHRISTIAN', 'Main Campus', 'In-Service', 'THEOLOGY AND RELIGIOUS STUDIES', 'Degree', 'Bachelor of Theology', 'degree', '../uploads/64188f4408a19.pdf', 'friend', 'ANGELISTA EDWARD', '23/APP/BU/0170', 0, '2023-03-20 16:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int NOT NULL,
  `course` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `school` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course`, `level`, `school`) VALUES
(1, 'Bachelor of Humanitarian Emergency and Disaster Management', 'Degree', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(2, 'Bachelor of Arts in Development Studies', 'Degree', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(3, 'Bachelor of Arts in Community Development', 'Degree', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(4, 'Bachelor of Arts in Peace and Conflict Management', 'Degree', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(5, 'Bachelor of Journalism and Mass Communication ', 'Degree', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(6, 'Bachelor of Public Administration and Management', 'Degree', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(7, 'Bachelor of Social Work and Social Administration', 'Degree', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(8, 'Bachelor of Science in Psychology and Counselling', 'Degree', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(9, 'Diploma in Journalism and Mass Communication', 'Diploma', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(10, 'Diploma in Development Studies', 'Diploma', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(11, 'Diploma in Social Work and Social Administration', 'Diploma', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(12, 'Diploma in Public Administration and Management', 'Diploma', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(13, 'Diploma in Counselling ', 'Diploma', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(14, 'Certificate in Counselling', 'Certificate', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(15, 'Bachelor of Arts or Science with Education-Secondary (with subject combinations)', 'Degree', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(16, 'Bachelor of Arts or Science with Education – Primary (with subject combinations)', 'Degree', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(17, 'Bachelor in Early Childhood Development (ECD)', 'Degree', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(18, 'Diploma in Education – Primary ', 'Diploma', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(19, 'Diploma in Early Childhood Development (ECD)', 'Diploma', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(20, 'Intensive English (One year proficiency certificate)', 'Certificate', 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(21, 'Bachelor of Theology', 'Degree', 'THEOLOGY AND RELIGIOUS STUDIES'),
(22, 'Diploma in Theology', 'Diploma', 'THEOLOGY AND RELIGIOUS STUDIES'),
(23, 'Certificate in Theology', 'Certificate', 'THEOLOGY AND RELIGIOUS STUDIES'),
(24, 'Bachelor of Arts in Religious Studies n Chaplaincy', 'Degree', 'THEOLOGY AND RELIGIOUS STUDIES'),
(25, 'Bachelor of Arts in Religious Studies n Development Ministry', 'Degree', 'THEOLOGY AND RELIGIOUS STUDIES'),
(26, 'Bachelor of Arts in Religious Studies n Evangelism and Church Growth', 'Degree', 'THEOLOGY AND RELIGIOUS STUDIES'),
(27, 'Bachelor of Arts in Religious Studies n Urban Ministry', 'Degree', 'THEOLOGY AND RELIGIOUS STUDIES'),
(28, 'Bachelor of Business Administration (Accounting) ', 'Degree', 'BUSINESS'),
(29, 'Bachelor of Science in Finance and Banking', 'Degree', 'BUSINESS'),
(30, 'Bachelor of Science in Accounting', 'Degree', 'BUSINESS'),
(31, 'Bachelor of Business Administration in Insurance', 'Degree', 'BUSINESS'),
(32, 'Diploma in Accounting', 'Diploma', 'BUSINESS'),
(33, 'Bachelor of Secretarial Science and Office Administration', 'Degree', 'BUSINESS'),
(34, 'Bachelor of Business Administration in Marketing', 'Degree', 'BUSINESS'),
(35, 'Bachelor of Business Administration in Management', 'Degree', 'BUSINESS'),
(36, 'Bachelor of Arts in Economics', 'Degree', 'BUSINESS'),
(37, 'Bachelor of Entrepreneurship', 'Degree', 'BUSINESS'),
(38, 'Bachelor of Procurement & Supply Chain Management', 'Degree', 'BUSINESS'),
(39, 'BBA in Project Planning & Grant Management', 'Degree', 'BUSINESS'),
(40, 'Bachelor of Human Resource Management', 'Degree', 'BUSINESS'),
(41, 'Diploma in Management', 'Diploma', 'BUSINESS'),
(42, 'Diploma in Office Administration', 'Diploma', 'BUSINESS'),
(43, 'Diploma in Human Resource Management', 'Diploma', 'BUSINESS'),
(44, 'Diploma in Procurement and Supply Chain Management', 'Diploma', 'BUSINESS'),
(45, 'Bachelor of Business Computing', 'Degree', 'SCIENCE & TECHNOLOGY'),
(46, 'Bachelor of Information Technology', 'Degree', 'SCIENCE & TECHNOLOGY'),
(47, 'Bachelor of Library and Information Science', 'Degree', 'SCIENCE & TECHNOLOGY'),
(48, 'Bachelor of Science in Software Engineering', 'Degree', 'SCIENCE & TECHNOLOGY'),
(49, 'Bachelor of Science in Network Systems Administration', 'Degree', 'SCIENCE & TECHNOLOGY'),
(50, 'Bachelor of Science in Computer Engineering', 'Degree', 'SCIENCE & TECHNOLOGY'),
(51, 'Diploma in Information Technology', 'Diploma', 'SCIENCE & TECHNOLOGY'),
(52, 'Diploma in Computer Forensics', 'Diploma', 'SCIENCE & TECHNOLOGY'),
(53, 'Certificate in Information Technology', 'Certificate', 'SCIENCE & TECHNOLOGY'),
(54, 'Bachelor of Science in Biochemistry', 'Degree', 'SCIENCE & TECHNOLOGY'),
(55, 'Bachelor of Science in Statistics', 'Degree', 'SCIENCE & TECHNOLOGY'),
(56, 'Diploma in Science Laboratory Technology', 'Diploma', 'SCIENCE & TECHNOLOGY'),
(57, 'Diploma in Biomedical Engineering and Technology', 'Diploma', 'SCIENCE & TECHNOLOGY'),
(58, 'Bachelor of Science in Agriculture (Crop Science)', 'Degree', 'HEALTH AND ALLIED SCIENCES'),
(59, 'Bachelor of Science in Agriculture (Animal Science)', 'Degree', 'AGRICULTURE & APPLIED SCIENCES'),
(60, 'Bachelor of Science in Agriculture (Soil Science)', 'Degree', 'AGRICULTURE & APPLIED SCIENCES'),
(61, 'Bachelor of Science in Agriculture (Biotechnology and Plant Breeding)', 'Degree', 'AGRICULTURE & APPLIED SCIENCES'),
(62, 'Bachelor of Science in Agribusiness Innovation and Management', 'Degree', 'AGRICULTURE & APPLIED SCIENCES'),
(63, 'Diploma in Crop Science & Management', 'Diploma', 'AGRICULTURE & APPLIED SCIENCES'),
(64, 'Diploma in Animal Production & Management', 'Diploma', 'AGRICULTURE & APPLIED SCIENCES'),
(65, 'Certificate in Agriculture', 'Certificate', 'AGRICULTURE & APPLIED SCIENCES'),
(66, 'Bachelor of Science in Environmental Science', 'Degree', 'AGRICULTURE & APPLIED SCIENCES'),
(67, 'Bachelor of Nursing Science', 'Degree', 'HEALTH AND ALLIED SCIENCES'),
(68, 'Diploma in Nursing Science', 'Diploma', 'HEALTH AND ALLIED SCIENCES'),
(69, 'Diploma in Nursing Science – Extension', 'Diploma', 'HEALTH AND ALLIED SCIENCES'),
(70, 'Certificate in Nursing', 'Certificate', 'HEALTH AND ALLIED SCIENCES'),
(71, 'Bachelor of Science in Food Technology and Human Nutrition', 'Degree', 'HEALTH AND ALLIED SCIENCES'),
(72, 'Diploma in Food Science and Processing Technology', 'Diploma', 'HEALTH AND ALLIED SCIENCES'),
(73, 'PhD in Rural Development', 'PHD', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(74, 'PhD in Education Management', 'PHD', ''),
(75, 'PhD in Environmental Management', 'PHD', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(76, 'Master of Arts in Development Studies', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(77, 'Master of Science in Counseling Psychology', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(78, 'Master in Social Work', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(79, 'Masters in Public Administration & Management (Public Administration)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(80, 'Masters in Public Administration & Management (Local Governement & Administration)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(81, 'Masters in Public Administration & Management (Social Services)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(82, 'Masters in Public Health (MPH General)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(83, 'Masters in Public Health (Health Promotion)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(84, 'Masters in Public Health (Environmental & Occupational Heaalth)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(85, 'Masters in Public Health (Nutrition)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(86, 'Master of Arts in Education (Education Management)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(87, 'Master of Arts in Education (Curriculum and Instruction)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(88, 'Master of Procurement and Logistics', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(89, 'Master of Project Planning and Management', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(90, 'Master of Business Administration (Finance)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(91, 'Master of Business Administration (Accounting)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(92, 'Master of Business Administration (Human Resource Management)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(93, 'Master of Business Administration (Entreprenuership)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(94, 'Master of Business Administration (Marketing)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(95, 'Master of Science in Information Technology (Network Security)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(96, 'Master of Science in Information Technology (Software Engineering)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(97, 'Master of Science in Information Technology (Information Systems)', 'Masters', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(98, 'Postgraduate Diploma in Business Management', 'Postgraduate Diploma', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(99, 'Postgraduate Diploma in Education', 'Postgraduate Diploma', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(100, 'Postgraduate Diploma in Information Technology', 'Postgraduate Diploma', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(101, 'Postgraduate Diploma in Public Administration and Management', 'Postgraduate Diploma', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(102, 'Postgraduate Diploma in Public Health', 'Postgraduate Diploma', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(103, 'Postgraduate Diploma in Counselling Psychology', 'Postgraduate Diploma', 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level`) VALUES
(1, 'Certificate'),
(2, 'Diploma'),
(3, 'Degree'),
(4, 'Masters'),
(5, 'PHD'),
(6, 'Postgraduate Diploma');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `school`) VALUES
(1, 'GRADUATE STUDIES, RESEARCH &  PUBLICATIONS'),
(2, 'EDUCATION, HUMANITIES & SOCIAL SCIENCES'),
(3, 'THEOLOGY AND RELIGIOUS STUDIES'),
(4, 'BUSINESS'),
(6, 'SCIENCE & TECHNOLOGY'),
(7, 'AGRICULTURE & APPLIED SCIENCES'),
(8, 'HEALTH AND ALLIED SCIENCES');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_form`
--
ALTER TABLE `application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application_form`
--
ALTER TABLE `application_form`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
