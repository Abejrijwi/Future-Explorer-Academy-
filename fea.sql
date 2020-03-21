-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 08:59 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fea`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `browser` varchar(60) NOT NULL,
  `browser_version` varchar(60) NOT NULL,
  `os` varchar(60) NOT NULL,
  `ip_address` varchar(60) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobi_no` varchar(12) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`browser`, `browser_version`, `os`, `ip_address`, `id`, `name`, `email`, `mobi_no`, `subject`, `message`, `date`) VALUES
('', '', '', '', 89, NULL, 'pathakujjwal783@gmail.com', NULL, NULL, NULL, '2019-08-21 11:39:21'),
('', '', '', '', 91, 'Kavi kumar', 'narayansharan18092000@gmail.com', '6203205545', 'Admission', 'I want to join your class', '2019-08-21 11:39:21'),
('', '', '', '', 94, NULL, 'sanukumarkarn5@gmail.com', NULL, NULL, NULL, '2019-08-21 11:39:21'),
('', '', '', '', 95, NULL, 'payush.arp@gmail.com', NULL, NULL, NULL, '2019-08-21 11:39:21'),
('', '', '', '', 104, NULL, 'Cool.kushal.7@gmail.com', NULL, NULL, NULL, '2019-08-22 12:53:18'),
('', '', '', '', 105, NULL, 'jhavishwajeet669@gmail.com', NULL, NULL, NULL, '2019-08-22 12:53:31'),
('', '', '', '', 106, NULL, 'sriniwash58@gmail.com', NULL, NULL, NULL, '2019-08-22 12:59:15'),
('', '', '', '', 107, NULL, 'himanshu04072000@gmail.com', NULL, NULL, NULL, '2019-08-22 12:59:48'),
('', '', '', '', 108, NULL, 'sriniwash58@gmail.com', NULL, NULL, NULL, '2019-08-22 13:00:17'),
('', '', '', '', 109, NULL, 'mrityunjaykr18@gmail.com', NULL, NULL, NULL, '2019-08-22 13:00:35'),
('', '', '', '', 124, NULL, 'aditya.suman.singh@gmail.com', NULL, NULL, NULL, '2019-08-23 07:53:09'),
('', '', '', '', 125, NULL, 'bittusharmapat123@gmail.com', NULL, NULL, NULL, '2019-08-24 03:16:47'),
('', '', '', '', 126, NULL, 'snand053000@gmail.com', NULL, NULL, NULL, '2019-08-24 03:18:01'),
('', '', '', '', 128, NULL, 'siaasingh58@gmail.com', NULL, NULL, NULL, '2019-08-24 03:19:10'),
('', '', '', '', 129, NULL, 'deepakprakash1998@gmail.com', NULL, NULL, NULL, '2019-08-24 03:22:46'),
('', '', '', '', 139, 'Gaurav kumar', 'gauravkumarsjs@gmail.com', '7004748411', 'About class', 'I wanna to join your classes. Kindly tell me schedule', '2019-08-28 14:15:14'),
('Chrome', '76.0.3809.111', 'Android', '47.29.10.223', 161, NULL, 'shobhitraj306@gmail.com', NULL, NULL, NULL, '2019-09-16 17:17:36'),
('Chrome', '77.0.3865.92', 'Android', '223.230.151.78', 162, 'RAVINDRA KUMAR', 'sonuaryan93@gmail.com', '9771022787', 'Page Don\'t Redirect', 'Page Don\'t Redirect after the payment', '2019-09-27 02:53:15'),
('Firefox', '69.0', 'Linux', '103.206.8.132', 163, NULL, 'dev.vinit@outlook.com', NULL, NULL, NULL, '2019-10-16 10:14:55'),
('Mozilla', '5.0', 'Unknown Platform', '46.229.168.144', 165, NULL, NULL, NULL, NULL, NULL, '2019-11-11 17:32:16'),
('Mozilla', '5.0', 'Unknown Platform', '46.229.168.150', 166, NULL, NULL, NULL, NULL, NULL, '2019-11-30 02:44:55'),
('Chrome', '64.0.3282.137', 'Android', '157.42.96.12', 167, NULL, 'narayansharan18092000@gmail.com', NULL, NULL, NULL, '2019-12-02 14:46:15'),
('Chrome', '64.0.3282.137', 'Android', '157.42.96.12', 168, NULL, 'kumarkavi@gmail.com', NULL, NULL, NULL, '2019-12-02 14:48:49'),
('Chrome', '78.0.3904.108', 'Android', '157.42.81.45', 169, NULL, 'pathakgunjan014@gmail.com', NULL, NULL, NULL, '2019-12-02 14:52:26'),
('Chrome', '57.0.2987.108', 'Android', '157.42.81.45', 170, NULL, NULL, NULL, NULL, NULL, '2019-12-02 14:54:05'),
('Chrome', '57.0.2987.108', 'Android', '157.42.81.45', 171, NULL, 'pathakgunjan014@gmail.com', NULL, NULL, NULL, '2019-12-02 14:54:05'),
('Chrome', '78.0.3904.62', 'Android', '47.9.218.170', 172, NULL, 'krsaket7277@gmail.com', NULL, NULL, NULL, '2019-12-02 15:23:05'),
('Chrome', '78.0.3904.62', 'Android', '47.9.218.170', 173, NULL, 'asaket18@gmail.com', NULL, NULL, NULL, '2019-12-02 15:23:20'),
('Chrome', '78.0.3904.62', 'Android', '47.9.218.170', 174, NULL, 'aryansaket220@gmail.com', NULL, NULL, NULL, '2019-12-02 15:23:39'),
('Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', 175, NULL, 'panditvinit01@gmail.com', NULL, NULL, NULL, '2019-12-02 15:25:46'),
('Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', 176, NULL, 'dev.vinit@outlook.com', NULL, NULL, NULL, '2019-12-02 15:26:17'),
('Chrome', '78.0.3904.62', 'Android', '47.9.218.170', 177, 'Saket Kumar', 'asaket18@gmail.com', '7277830828', 'Java', '---', '2019-12-02 15:28:37'),
('Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', 178, 'Narayan Sharan', 'narayansharan18092000@gmail.com', '6203205545', 'Java', 'plz suggest fee', '2019-12-02 15:29:14'),
('Mozilla', '5.0', 'Unknown Platform', '46.229.168.154', 179, NULL, NULL, NULL, NULL, NULL, '2019-12-05 13:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `s_date` date NOT NULL DEFAULT current_timestamp(),
  `c_duration` int(10) NOT NULL,
  `c_level` varchar(15) NOT NULL,
  `s_cmps` varchar(20) NOT NULL,
  `fee` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `c_name`, `s_date`, `c_duration`, `c_level`, `s_cmps`, `fee`) VALUES
(17, 'PYTHON', '2019-10-25', 1, 'Beginners', 'Kankarbag', 3500.00),
(18, 'PHP', '2019-10-05', 1, 'Beginners', 'Kankarbag', 4000.00),
(19, 'JAVA', '2019-10-14', 1, 'beginners', 'Kankarbag', 3000.00);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `message`, `date`) VALUES
(28, 'Ranjan Mishra', 'It was great experience for me. I learned a lot and I had an opportunity to improve myself about teaching. Thank you for everything.', '2019-08-19 11:34:15'),
(29, 'Ravi Kumar', 'I was pleased with everything. All members in this staff are very intelligent. I am so lucky that I met them, and learned from them. Thank you for lovely atmosphere :)', '2019-08-19 11:34:52'),
(30, 'Sujit Kumar', 'It was a great experience and I enjoyed and learned a lot during the course. Thank you all! :)', '2019-08-19 11:35:27'),
(31, 'Deepak Prakash', 'It is a great experience. I m so lucky that i meet them and learn something new from them... Thank you sir...', '2019-08-24 03:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `uplode_file` varchar(200) NOT NULL,
  `event` varchar(50) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `uplode_file`, `event`, `descrip`, `date`) VALUES
(5, 'eb30a01dfd2373e559385c0459081eab.JPG', 'Teachers Day', 'Teachers Day celebration Moment', '2019-09-11 10:29:07'),
(6, '8fe693061030e460e4f0f0666050d67b.JPG', 'Teachers Day', 'Teachers Day celebration Moment', '2019-09-11 10:30:55'),
(7, 'a6b6997a309146a2f73807e6ea48e86c.JPG', 'Teachers Day', 'Teachers Day celebration Moment', '2019-09-11 10:31:15'),
(8, 'a5918f82d4c75e1e587009ea9c996c3f.jpeg', 'Teachers Day', 'Teachers Day celebration Moment', '2019-09-11 10:31:30'),
(13, '9c29b2dc1f013818d0ddc84d08efe486.jpeg', 'Teachers Day', 'Teachers Day celebration Moment', '2019-09-11 11:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `hit_info`
--

CREATE TABLE `hit_info` (
  `id` int(10) NOT NULL,
  `browser` varchar(50) NOT NULL,
  `browser_version` varchar(60) NOT NULL,
  `os` varchar(60) NOT NULL,
  `ip_address` varchar(60) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hit_info`
--

INSERT INTO `hit_info` (`id`, `browser`, `browser_version`, `os`, `ip_address`, `time`) VALUES
(1402, 'Firefox', '69.0', 'Linux', '103.206.8.132', '2019-10-14 11:51:52'),
(1403, 'Firefox', '69.0', 'Linux', '103.206.8.132', '2019-10-14 11:52:33'),
(1404, 'Firefox', '69.0', 'Linux', '103.206.8.132', '2019-10-14 11:52:40'),
(1405, 'Firefox', '69.0', 'Linux', '103.206.8.132', '2019-10-14 11:53:27'),
(1406, 'Firefox', '69.0', 'Linux', '103.206.8.132', '2019-10-14 11:54:19'),
(1407, 'Firefox', '69.0', 'Linux', '103.206.8.132', '2019-10-14 11:54:54'),
(1408, 'Firefox', '69.0', 'Linux', '103.206.8.132', '2019-10-14 12:07:32'),
(1409, 'Firefox', '69.0', 'Linux', '103.206.8.132', '2019-10-16 10:16:41'),
(1410, 'Firefox', '69.0', 'Linux', '103.206.8.132', '2019-10-24 07:21:03'),
(1411, 'Firefox', '70.0', 'Linux', '103.206.8.132', '2019-11-08 09:44:33'),
(1412, 'Firefox', '70.0', 'Linux', '103.206.8.132', '2019-11-08 09:44:49'),
(1413, 'Firefox', '70.0', 'Linux', '103.206.8.132', '2019-11-08 09:45:27'),
(1414, 'Firefox', '70.0', 'Linux', '103.206.8.132', '2019-11-08 10:48:56'),
(1415, 'Firefox', '70.0', 'Linux', '103.206.8.132', '2019-11-08 10:49:00'),
(1416, 'Firefox', '70.0', 'Linux', '103.206.8.132', '2019-11-08 10:51:17'),
(1417, 'Firefox', '70.0', 'Linux', '103.206.8.132', '2019-11-08 10:53:58'),
(1418, 'Firefox', '70.0', 'Linux', '103.206.8.132', '2019-11-08 11:00:15'),
(1419, 'Firefox', '70.0', 'Linux', '103.206.8.132', '2019-11-08 11:00:20'),
(1420, 'Firefox', '70.0', 'Linux', '103.206.8.132', '2019-11-08 11:01:19'),
(1421, 'Firefox', '70.0', 'Linux', '103.206.8.132', '2019-11-08 11:03:49'),
(1422, 'Firefox', '70.0', 'Linux', '103.206.8.132', '2019-11-08 11:04:15'),
(1423, 'Firefox', '70.0', 'Linux', '103.206.8.132', '2019-11-08 11:04:51'),
(1424, 'Firefox', '70.0', 'Linux', '103.206.8.132', '2019-11-08 11:04:58'),
(1425, 'Firefox', '70.0', 'Linux', '103.206.8.132', '2019-11-08 11:10:20'),
(1426, 'Chrome', '78.0.3904.96', 'Android', '47.29.102.55', '2019-11-10 09:05:40'),
(1427, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 14:42:22'),
(1428, 'Chrome', '64.0.3282.137', 'Android', '157.42.96.12', '2019-12-02 14:48:49'),
(1429, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 14:51:48'),
(1430, 'Chrome', '78.0.3904.108', 'Android', '2409:4064:2399:9d43:a566:6e5d:b3a7:6515', '2019-12-02 14:51:52'),
(1431, 'Chrome', '78.0.3904.108', 'Android', '157.42.81.45', '2019-12-02 14:52:27'),
(1432, 'Chrome', '78.0.3904.108', 'Android', '157.42.81.45', '2019-12-02 14:53:05'),
(1433, 'Chrome', '57.0.2987.108', 'Android', '157.42.81.45', '2019-12-02 14:53:23'),
(1434, 'Chrome', '57.0.2987.108', 'Android', '157.42.81.45', '2019-12-02 14:54:06'),
(1435, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 14:59:29'),
(1436, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:01:36'),
(1437, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:03:29'),
(1438, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:03:35'),
(1439, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:03:48'),
(1440, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:04:00'),
(1441, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:08:35'),
(1442, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:08:42'),
(1443, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:08:44'),
(1444, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:08:46'),
(1445, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:08:49'),
(1446, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:08:59'),
(1447, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:09:01'),
(1448, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:09:03'),
(1449, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:09:05'),
(1450, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:09:06'),
(1451, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:09:08'),
(1452, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:09:10'),
(1453, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:09:23'),
(1454, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:09:25'),
(1455, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:09:27'),
(1456, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:09:29'),
(1457, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:09:32'),
(1458, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:09:35'),
(1459, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:09:38'),
(1460, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:09:41'),
(1461, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:09:48'),
(1462, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:09:55'),
(1463, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:11:09'),
(1464, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:13:19'),
(1465, 'Chrome', '78.0.3904.62', 'Android', '2409:4064:28a:192c:40a5:359d:9ed7:3ebb', '2019-12-02 15:20:39'),
(1466, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:20:52'),
(1467, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:20:55'),
(1468, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:21:31'),
(1469, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:22:08'),
(1470, 'Chrome', '78.0.3904.62', 'Android', '47.9.218.170', '2019-12-02 15:22:38'),
(1471, 'Chrome', '64.0.3282.137', 'Android', '157.42.77.16', '2019-12-02 15:22:57'),
(1472, 'Chrome', '78.0.3904.62', 'Android', '47.9.218.170', '2019-12-02 15:23:05'),
(1473, 'Chrome', '78.0.3904.62', 'Android', '47.9.218.170', '2019-12-02 15:23:20'),
(1474, 'Chrome', '78.0.3904.62', 'Android', '47.9.218.170', '2019-12-02 15:23:39'),
(1475, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:25:46'),
(1476, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-02 15:26:18'),
(1477, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.147', '2019-12-02 16:10:27'),
(1478, 'Chrome', '78.0.3904.108', 'Android', '157.42.29.133', '2019-12-02 17:07:39'),
(1479, 'Chrome', '64.0.3282.137', 'Android', '157.42.98.166', '2019-12-02 17:15:23'),
(1480, '', '', 'Unknown Platform', '157.55.39.22', '2019-12-02 22:46:36'),
(1481, 'Mozilla', '5.0', 'Unknown Platform', '54.36.148.114', '2019-12-03 00:40:12'),
(1482, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.131', '2019-12-03 02:31:53'),
(1483, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.133', '2019-12-03 04:17:45'),
(1484, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.149', '2019-12-03 04:17:46'),
(1485, 'Chrome', '38.0.1025.166', 'Android', '2409:4066:209:2eac::5cd:98a4', '2019-12-03 04:58:15'),
(1486, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.29.133', '2019-12-03 05:05:26'),
(1487, 'Chrome', '77.0.3865.120', 'Mac OS X', '104.132.181.92', '2019-12-03 05:17:35'),
(1488, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.141', '2019-12-03 05:58:53'),
(1489, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.139', '2019-12-03 10:49:39'),
(1490, 'Mozilla', '5.0', 'Linux', '95.163.255.153', '2019-12-03 10:50:35'),
(1491, 'Mozilla', '5.0', 'Unknown Platform', '45.55.33.40', '2019-12-03 10:56:08'),
(1492, '', '', 'Unknown Platform', '157.55.39.0', '2019-12-03 11:03:46'),
(1493, '', '', 'Unknown Platform', '157.55.39.22', '2019-12-03 11:03:48'),
(1494, '', '', 'Unknown Platform', '157.55.39.42', '2019-12-03 13:21:28'),
(1495, '', '', 'Unknown Platform', '157.55.39.42', '2019-12-03 13:21:29'),
(1496, '', '', 'Unknown Platform', '40.77.167.108', '2019-12-03 13:21:29'),
(1497, 'Chrome', '78.0.3904.108', 'Windows 10', '47.29.102.85', '2019-12-03 14:06:12'),
(1498, 'Chrome', '69.0.3497.100', 'Android', '47.29.73.179', '2019-12-03 14:38:09'),
(1499, 'Chrome', '69.0.3497.100', 'Android', '47.29.73.179', '2019-12-03 14:39:08'),
(1500, 'Chrome', '69.0.3497.100', 'Android', '47.29.73.179', '2019-12-03 14:39:22'),
(1501, 'Chrome', '69.0.3497.100', 'Android', '47.29.73.179', '2019-12-03 14:40:07'),
(1502, 'Chrome', '69.0.3497.100', 'Android', '47.29.73.179', '2019-12-03 14:40:53'),
(1503, 'Chrome', '69.0.3497.100', 'Android', '47.29.73.179', '2019-12-03 14:41:13'),
(1504, 'Chrome', '69.0.3497.100', 'Android', '47.29.73.179', '2019-12-03 14:41:40'),
(1505, 'Chrome', '69.0.3497.100', 'Android', '47.29.73.179', '2019-12-03 14:42:06'),
(1506, 'Chrome', '69.0.3497.100', 'Android', '47.29.73.179', '2019-12-03 14:42:43'),
(1507, 'Chrome', '69.0.3497.100', 'Android', '47.29.73.179', '2019-12-03 14:42:44'),
(1508, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.151', '2019-12-03 22:23:24'),
(1509, 'Chrome', '78.0.3904.108', 'Android', '47.29.74.11', '2019-12-04 03:49:49'),
(1510, 'Mozilla', '5.0', 'Unknown Platform', '54.36.149.57', '2019-12-04 09:41:08'),
(1511, 'Chrome', '78.0.3904.108', 'Android', '2409:4064:703:28fd::708:60a4', '2019-12-04 12:14:02'),
(1512, 'Chrome', '78.0.3904.108', 'Android', '2409:4064:703:28fd::708:60a4', '2019-12-04 12:14:02'),
(1513, 'Chrome', '77.0.3865.120', 'Windows 7', '43.242.211.5', '2019-12-04 18:57:41'),
(1514, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.141', '2019-12-04 21:12:24'),
(1515, '', '', 'Android', '66.249.64.143', '2019-12-05 03:57:57'),
(1516, '', '', 'Unknown Platform', '66.249.64.147', '2019-12-05 04:08:09'),
(1517, '', '', 'Unknown Platform', '66.249.64.23', '2019-12-05 04:08:15'),
(1518, '', '', 'Android', '66.249.64.21', '2019-12-05 04:09:22'),
(1519, '', '', 'Android', '66.249.64.21', '2019-12-05 04:09:51'),
(1520, 'Chrome', '64.0.3282.137', 'Android', '157.42.108.174', '2019-12-05 06:09:57'),
(1521, 'Chrome', '78.0.3904.108', 'Windows 10', '103.206.8.132', '2019-12-05 07:27:26'),
(1522, 'Chrome', '78.0.3904.108', 'Windows 10', '103.206.8.132', '2019-12-05 07:28:11'),
(1523, 'Chrome', '78.0.3904.108', 'Windows 7', '103.206.8.132', '2019-12-05 07:29:38'),
(1524, 'Chrome', '78.0.3904.108', 'Windows 7', '103.206.8.132', '2019-12-05 07:30:37'),
(1525, 'Chrome', '78.0.3904.108', 'Windows 7', '103.206.8.132', '2019-12-05 07:30:55'),
(1526, 'Chrome', '78.0.3904.108', 'Windows 7', '103.206.8.132', '2019-12-05 07:31:14'),
(1527, 'Mozilla', '5.0', 'Unknown Platform', '167.71.95.199', '2019-12-05 09:16:17'),
(1528, 'Mozilla', '5.0', 'Unknown Platform', '167.172.251.8', '2019-12-05 09:29:53'),
(1529, '', '', 'Android', '66.249.64.147', '2019-12-05 12:39:30'),
(1530, '', '', 'Unknown Platform', '66.249.64.21', '2019-12-05 12:40:51'),
(1531, '', '', 'Android', '66.249.64.21', '2019-12-05 12:40:51'),
(1532, '', '', 'Unknown Platform', '66.249.64.145', '2019-12-05 12:54:37'),
(1533, '', '', 'Android', '66.249.64.23', '2019-12-05 13:10:49'),
(1534, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.149', '2019-12-05 13:28:43'),
(1535, 'Firefox', '62.0', 'Linux', '89.238.186.228', '2019-12-05 18:51:58'),
(1536, 'Firefox', '62.0', 'Linux', '89.238.186.228', '2019-12-05 18:52:04'),
(1537, 'Firefox', '62.0', 'Linux', '89.238.186.228', '2019-12-05 18:52:04'),
(1538, 'Firefox', '62.0', 'Linux', '89.238.186.228', '2019-12-05 18:52:04'),
(1539, 'Firefox', '62.0', 'Linux', '89.238.186.228', '2019-12-05 18:52:05'),
(1540, 'Firefox', '62.0', 'Linux', '89.238.186.228', '2019-12-05 18:52:05'),
(1541, 'Chrome', '64.0.3282.137', 'Android', '157.42.124.168', '2019-12-05 19:49:30'),
(1542, '', '', 'Unknown Platform', '157.55.39.16', '2019-12-05 20:40:49'),
(1543, '', '', 'Unknown Platform', '40.77.167.112', '2019-12-05 20:41:31'),
(1544, '', '', 'Android', '66.249.64.143', '2019-12-05 21:35:49'),
(1545, '', '', 'Unknown Platform', '66.249.64.23', '2019-12-05 21:41:04'),
(1546, '', '', 'Android', '66.249.64.23', '2019-12-05 21:41:05'),
(1547, '', '', 'Unknown Platform', '66.249.64.143', '2019-12-05 21:45:06'),
(1548, '', '', 'Android', '66.249.64.21', '2019-12-05 22:10:28'),
(1549, '', '', 'Android', '66.249.64.147', '2019-12-06 06:26:08'),
(1550, '', '', 'Unknown Platform', '66.249.64.22', '2019-12-06 06:27:34'),
(1551, '', '', 'Android', '66.249.64.22', '2019-12-06 06:27:34'),
(1552, '', '', 'Unknown Platform', '66.249.64.145', '2019-12-06 06:29:41'),
(1553, '', '', 'Android', '66.249.64.22', '2019-12-06 06:56:00'),
(1554, 'Chrome', '78.0.3904.108', 'Windows 10', '103.206.8.132', '2019-12-06 07:43:21'),
(1555, 'Chrome', '78.0.3904.108', 'Windows 10', '103.206.8.132', '2019-12-06 07:43:47'),
(1556, 'Chrome', '78.0.3904.108', 'Windows 10', '103.206.8.132', '2019-12-06 08:40:04'),
(1557, '', '', 'Unknown Platform', '157.55.39.180', '2019-12-06 08:53:29'),
(1558, 'Mozilla', '5.0', 'Unknown Platform', '54.36.149.98', '2019-12-06 11:25:12'),
(1559, '', '', 'Android', '66.249.64.147', '2019-12-06 15:33:37'),
(1560, '', '', 'Unknown Platform', '66.249.64.21', '2019-12-06 15:33:42'),
(1561, '', '', 'Android', '66.249.64.23', '2019-12-06 15:41:01'),
(1562, '', '', 'Unknown Platform', '66.249.64.147', '2019-12-06 15:43:22'),
(1563, '', '', 'Android', '66.249.64.22', '2019-12-06 16:00:16'),
(1564, '', '', 'Unknown Platform', '66.249.64.21', '2019-12-06 21:11:36'),
(1565, '', '', 'Android', '66.249.64.23', '2019-12-06 21:11:36'),
(1566, '', '', 'Unknown Platform', '157.55.39.16', '2019-12-07 00:43:24'),
(1567, '', '', 'Android', '66.249.64.143', '2019-12-07 00:47:47'),
(1568, '', '', 'Unknown Platform', '66.249.64.22', '2019-12-07 00:50:29'),
(1569, '', '', 'Android', '66.249.64.22', '2019-12-07 00:50:29'),
(1570, '', '', 'Unknown Platform', '66.249.64.147', '2019-12-07 00:59:55'),
(1571, '', '', 'Android', '66.249.64.22', '2019-12-07 01:16:35'),
(1572, '', '', 'Unknown Platform', '66.249.64.23', '2019-12-07 07:06:30'),
(1573, '', '', 'Android', '66.249.64.22', '2019-12-07 07:06:33'),
(1574, '', '', 'Android', '66.249.64.145', '2019-12-07 09:56:12'),
(1575, '', '', 'Unknown Platform', '66.249.64.21', '2019-12-07 09:57:38'),
(1576, '', '', 'Android', '66.249.64.22', '2019-12-07 09:57:38'),
(1577, '', '', 'Unknown Platform', '66.249.64.147', '2019-12-07 09:58:57'),
(1578, '', '', 'Android', '66.249.64.22', '2019-12-07 11:02:33'),
(1579, '', '', 'Unknown Platform', '66.249.64.21', '2019-12-07 11:02:33'),
(1580, '', '', 'Unknown Platform', '66.249.64.23', '2019-12-07 15:50:12'),
(1581, '', '', 'Android', '66.249.64.22', '2019-12-07 15:50:14'),
(1582, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.139', '2019-12-07 17:21:47'),
(1583, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.110.251', '2019-12-07 18:04:58'),
(1584, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.110.251', '2019-12-07 18:04:58'),
(1585, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.110.251', '2019-12-07 18:05:22'),
(1586, '', '', 'Android', '66.249.64.145', '2019-12-07 18:47:01'),
(1587, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.110.251', '2019-12-07 18:52:16'),
(1588, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.110.251', '2019-12-07 18:52:47'),
(1589, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.110.251', '2019-12-07 18:52:48'),
(1590, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.110.251', '2019-12-07 18:53:00'),
(1591, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.110.251', '2019-12-07 18:53:32'),
(1592, '', '', 'Unknown Platform', '66.249.64.147', '2019-12-07 18:53:38'),
(1593, '', '', 'Unknown Platform', '66.249.64.23', '2019-12-07 18:56:06'),
(1594, '', '', 'Android', '66.249.64.22', '2019-12-07 18:56:07'),
(1595, 'Chrome', '78.0.3904.108', 'Windows 10', '157.42.110.251', '2019-12-07 18:56:16'),
(1596, '', '', 'Android', '66.249.64.22', '2019-12-07 19:23:56'),
(1597, 'Mozilla', '5.0', 'Unknown Platform', '54.36.149.89', '2019-12-07 19:45:49'),
(1598, 'Mozilla', '5.0', 'Unknown Platform', '54.36.148.23', '2019-12-07 19:45:50'),
(1599, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.136', '2019-12-07 21:45:45'),
(1600, '', '', 'Unknown Platform', '66.249.64.23', '2019-12-08 00:36:30'),
(1601, '', '', 'Unknown Platform', '66.249.64.21', '2019-12-08 01:39:24'),
(1602, '', '', 'Android', '66.249.64.23', '2019-12-08 01:49:21'),
(1603, '', '', 'Unknown Platform', '157.55.39.16', '2019-12-08 03:19:29'),
(1604, '', '', 'Unknown Platform', '157.55.39.16', '2019-12-08 03:19:30'),
(1605, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.151', '2019-12-08 03:49:58'),
(1606, '', '', 'Android', '66.249.64.143', '2019-12-08 03:51:45'),
(1607, '', '', 'Unknown Platform', '66.249.64.21', '2019-12-08 03:54:24'),
(1608, '', '', 'Android', '66.249.64.21', '2019-12-08 03:54:24'),
(1609, '', '', 'Unknown Platform', '66.249.64.145', '2019-12-08 03:54:26'),
(1610, '', '', 'Android', '66.249.64.23', '2019-12-08 04:18:50'),
(1611, '', '', 'Unknown Platform', '36.250.183.205', '2019-12-08 05:46:06'),
(1612, '', '', 'Unknown Platform', '36.250.183.205', '2019-12-08 05:46:15'),
(1613, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.146', '2019-12-08 06:26:34'),
(1614, '', '', 'Unknown Platform', '66.249.64.23', '2019-12-08 08:00:49'),
(1615, 'Chrome', '78.0.3904.108', 'Windows 10', '157.35.242.232', '2019-12-08 08:05:27'),
(1616, '', '', 'Unknown Platform', '66.249.64.21', '2019-12-08 10:00:21'),
(1617, '', '', 'Unknown Platform', '66.249.64.22', '2019-12-08 11:27:13'),
(1618, '', '', 'Android', '66.249.64.147', '2019-12-08 12:46:19'),
(1619, '', '', 'Unknown Platform', '66.249.64.22', '2019-12-08 12:51:19'),
(1620, '', '', 'Android', '66.249.64.22', '2019-12-08 12:51:19'),
(1621, '', '', 'Unknown Platform', '66.249.64.143', '2019-12-08 12:52:46'),
(1622, '', '', 'Android', '66.249.64.23', '2019-12-08 13:01:14'),
(1623, '', '', 'Android', '66.249.68.11', '2019-12-08 13:01:15'),
(1624, 'Chrome', '74.0.3729.131', 'Windows 10', '100.25.183.163', '2019-12-08 14:56:55'),
(1625, 'Chrome', '60.0.3112.50', 'Linux', '100.25.183.163', '2019-12-08 14:57:43'),
(1626, '', '', 'Unknown Platform', '66.249.64.21', '2019-12-08 16:11:32'),
(1627, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.143', '2019-12-08 18:20:01'),
(1628, '', '', 'Unknown Platform', '66.249.64.21', '2019-12-08 18:36:18'),
(1629, '', '', 'Unknown Platform', '66.249.64.23', '2019-12-08 19:42:53'),
(1630, '', '', 'Android', '66.249.64.147', '2019-12-08 21:46:37'),
(1631, '', '', 'Unknown Platform', '66.249.64.22', '2019-12-08 21:52:42'),
(1632, '', '', 'Android', '66.249.64.21', '2019-12-08 21:52:42'),
(1633, '', '', 'Unknown Platform', '66.249.64.145', '2019-12-08 21:54:32'),
(1634, '', '', 'Android', '66.249.64.24', '2019-12-08 22:13:13'),
(1635, '', '', 'Android', '66.249.64.23', '2019-12-08 22:25:28'),
(1636, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.150', '2019-12-08 23:48:38'),
(1637, '', '', 'Unknown Platform', '66.249.64.21', '2019-12-09 01:24:32'),
(1638, '', '', 'Unknown Platform', '66.249.64.23', '2019-12-09 03:56:45'),
(1639, 'Firefox', '60.0', 'Linux', '163.172.71.49', '2019-12-09 04:10:05'),
(1640, '', '', 'Android', '66.249.64.147', '2019-12-09 06:46:41'),
(1641, '', '', 'Unknown Platform', '66.249.64.145', '2019-12-09 06:48:49'),
(1642, '', '', 'Unknown Platform', '66.249.64.21', '2019-12-09 06:56:34'),
(1643, '', '', 'Android', '66.249.64.23', '2019-12-09 06:56:34'),
(1644, '', '', 'Android', '66.249.64.23', '2019-12-09 07:16:12'),
(1645, 'Chrome', '78.0.3904.108', 'Windows 10', '103.206.8.132', '2019-12-09 07:34:32'),
(1646, '', '', 'Unknown Platform', '66.249.64.23', '2019-12-09 08:16:32'),
(1647, '', '', 'Android', '66.249.64.22', '2019-12-09 08:16:33'),
(1648, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.131', '2019-12-09 09:45:35'),
(1649, '', '', 'Unknown Platform', '66.249.64.23', '2019-12-09 10:54:07'),
(1650, '', '', 'Unknown Platform', '66.249.64.22', '2019-12-09 12:55:02'),
(1651, '', '', 'Android', '66.249.64.147', '2019-12-09 15:49:36'),
(1652, '', '', 'Unknown Platform', '66.249.64.23', '2019-12-09 15:53:39'),
(1653, '', '', 'Android', '66.249.64.22', '2019-12-09 15:53:40'),
(1654, '', '', 'Unknown Platform', '66.249.64.145', '2019-12-09 16:00:44'),
(1655, '', '', 'Android', '66.249.64.21', '2019-12-09 16:03:36'),
(1656, 'Firefox', '60.0', 'Linux', '62.210.36.170', '2019-12-09 17:35:40'),
(1657, '', '', 'Unknown Platform', '66.249.64.23', '2019-12-09 20:29:36'),
(1658, '', '', 'Android', '66.249.64.22', '2019-12-09 20:29:36'),
(1659, '', '', 'Unknown Platform', '66.249.64.23', '2019-12-09 21:56:06'),
(1660, 'Mozilla', '5.0', 'Unknown Platform', '46.229.168.142', '2019-12-09 23:30:50'),
(1661, '', '', 'Unknown Platform', '66.249.64.23', '2019-12-10 00:06:44'),
(1662, 'Mozilla', '5.0', 'Unknown Platform', '54.36.148.111', '2019-12-10 01:06:38'),
(1663, 'Mozilla', '5.0', 'Unknown Platform', '151.80.39.78', '2019-12-10 01:06:50'),
(1664, '', '', 'Android', '66.249.64.143', '2019-12-10 01:56:38'),
(1665, '', '', 'Unknown Platform', '66.249.64.21', '2019-12-10 02:16:38'),
(1666, '', '', 'Android', '66.249.64.22', '2019-12-10 02:16:38'),
(1667, '', '', 'Unknown Platform', '66.249.64.147', '2019-12-10 02:22:52'),
(1668, 'Mozilla', '5.0', 'Unknown Platform', '54.36.149.62', '2019-12-10 04:36:16'),
(1669, 'Mozilla', '5.0', 'Unknown Platform', '5.196.87.100', '2019-12-10 04:36:27'),
(1670, 'Mozilla', '5.0', 'Unknown Platform', '54.36.148.84', '2019-12-10 06:04:57'),
(1671, 'Mozilla', '5.0', 'Unknown Platform', '151.80.39.224', '2019-12-10 06:05:29'),
(1672, 'Mozilla', '5.0', 'Unknown Platform', '54.36.149.45', '2019-12-10 06:09:33'),
(1673, 'Mozilla', '5.0', 'Unknown Platform', '5.196.87.100', '2019-12-10 06:09:45'),
(1674, 'Chrome', '64.0.3282.137', 'Android', '157.35.228.94', '2019-12-10 07:53:13'),
(1675, 'Mozilla', '5.0', 'Unknown Platform', '54.36.148.156', '2019-12-10 08:09:50'),
(1676, '', '', 'Unknown Platform', '66.249.64.23', '2019-12-10 17:50:36'),
(1677, 'Chrome', '79.0.3945.130', 'Windows 7', '::1', '2020-01-29 18:03:24'),
(1678, 'Chrome', '79.0.3945.130', 'Windows 7', '::1', '2020-02-05 20:05:36'),
(1679, 'Chrome', '79.0.3945.130', 'Windows 7', '::1', '2020-02-05 20:16:31'),
(1680, 'Chrome', '79.0.3945.130', 'Windows 7', '::1', '2020-02-05 20:16:35'),
(1681, 'Chrome', '79.0.3945.130', 'Windows 7', '::1', '2020-02-05 20:17:17'),
(1682, 'Chrome', '79.0.3945.130', 'Windows 7', '::1', '2020-02-05 20:17:34'),
(1683, 'Chrome', '79.0.3945.130', 'Windows 7', '::1', '2020-02-05 20:17:46'),
(1684, 'Chrome', '79.0.3945.130', 'Windows 7', '::1', '2020-02-05 20:18:02'),
(1685, 'Chrome', '79.0.3945.130', 'Windows 7', '::1', '2020-02-05 20:18:05'),
(1686, 'Chrome', '79.0.3945.130', 'Windows 7', '::1', '2020-02-05 20:18:59'),
(1687, 'Chrome', '79.0.3945.130', 'Windows 7', '::1', '2020-02-05 20:19:06'),
(1688, 'Chrome', '79.0.3945.130', 'Windows 7', '::1', '2020-02-05 20:19:12'),
(1689, 'Chrome', '79.0.3945.130', 'Windows 7', '::1', '2020-02-06 15:07:42'),
(1690, 'Chrome', '79.0.3945.130', 'Windows 7', '::1', '2020-02-06 15:08:32'),
(1691, 'Chrome', '80.0.3987.100', 'Windows 7', '::1', '2020-02-15 16:21:16'),
(1692, 'Chrome', '80.0.3987.100', 'Windows 7', '::1', '2020-02-15 16:21:48'),
(1693, 'Chrome', '80.0.3987.100', 'Windows 7', '::1', '2020-02-15 16:22:02'),
(1694, 'Chrome', '80.0.3987.100', 'Windows 7', '::1', '2020-02-15 16:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `notise`
--

CREATE TABLE `notise` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL,
  `descripvartion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notise`
--

INSERT INTO `notise` (`id`, `title`, `link`, `descripvartion`) VALUES
(3, 'Special title treatment', 'http://localhost/phpmyadmin/tbl_change.php?db=fea&table=notise&token=21790a4e06db7c5e962d1c1df7f33697', ''),
(4, 'Special title treatment', 'http://localhost/phpmyadmin/tbl_change.php?db=fea&table=notise&token=21790a4e06db7c5e962d1c1df7f33697', ''),
(5, 'Table: notise', 'http://localhost/phpmyadmin/tbl_change.php?db=fea&table=notise&token=21790a4e06db7c5e962d1c1df7f33697', ''),
(6, 'Special title treatment', 'http://localhost/phpmyadmin/tbl_change.php?db=fea&table=notise&token=21790a4e06db7c5e962d1c1df7f33697', ''),
(7, 'Special title treatment', 'http://localhost/phpmyadmin/tbl_change.php?db=fea&table=notise&token=21790a4e06db7c5e962d1c1df7f33697', ''),
(8, 'Special title treatment', 'http://localhost/phpmyadmin/tbl_change.php?db=fea&table=notise&token=21790a4e06db7c5e962d1c1df7f33697', ''),
(9, 'Special title treatment', 'http://localhost/phpmyadmin/tbl_change.php?db=fea&table=notise&token=21790a4e06db7c5e962d1c1df7f33697', ''),
(10, 'Special title treatment', 'http://localhost/phpmyadmin/tbl_change.php?db=fea&table=notise&token=21790a4e06db7c5e962d1c1df7f33697', ''),
(11, 'Special title treatment', 'http://localhost/phpmyadmin/tbl_change.php?db=fea&table=notise&token=21790a4e06db7c5e962d1c1df7f33697', '');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `technology` varchar(50) NOT NULL,
  `backend` varchar(50) NOT NULL,
  `frontend` varchar(50) NOT NULL,
  `uplode_file` varchar(50) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `technology`, `backend`, `frontend`, `uplode_file`, `price`) VALUES
(1, 'ASP.NET MVC Application Using Entity Framework', '.Net', 'MySql', 'HTML, CSS, JS', '02beef83864325567ae1affbb34c88d7.zip', 0),
(2, 'Library Managemet System', 'Java', 'Spring, MySql', 'HTML, CSS, JS', 'fe34ec36743f6e0b6a69fb7c59e189c2.zip', 0),
(3, 'INVENTORY SYSTEM', 'C#', 'MySQL', 'Visual Studio', 'f36b82eec37d84aab99621b060f6ce45.zip', 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `course` varchar(11) NOT NULL,
  `uplode_file` varchar(500) NOT NULL,
  `course_year` varchar(500) NOT NULL,
  `course_part` varchar(500) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `course`, `uplode_file`, `course_year`, `course_part`, `upload_date`) VALUES
(10, 'mca', 'baec7664f4e21f98fb19ac4a03b5c693.pdf', '2007', 'S-1.1', '2019-08-24 10:15:24'),
(11, 'bca', 'a1a4f8bb7d81cd1c056e331a9e5e610a.pdf', '2015', '1', '2019-09-11 08:31:18'),
(12, 'bca', 'd18539e0e63e972c66dc0f3535f85f7b.pdf', '2014', '1', '2019-09-11 08:32:37'),
(13, 'bca', '8334975377b4013eaa163abcdbdb2a70.pdf', '2015', '3', '2019-09-11 08:33:24'),
(14, 'bca', 'c114683153c899ad31fbca3011183db9.pdf', '2015', '3', '2019-09-11 08:33:49'),
(15, 'bca', '5882510fd239a016554887b724caa5fd.pdf', '2015', '2', '2019-09-11 08:34:29'),
(16, 'bca', '4ba73e116d896d26354af932c84dc4ff.pdf', '2015', '2', '2019-09-11 08:34:46'),
(17, 'bca', '4caa05c703163254cfc7ca2719038028.pdf', '2015', '3', '2019-09-11 08:35:15'),
(18, 'bca', '31a3000d5bb44bc0fdfe065e0a78a0b2.pdf', '2014', '1', '2019-09-11 08:35:36'),
(19, 'bca', '8da740dd613ce325bf6e787979b307c3.pdf', '2015', '2', '2019-09-11 08:36:02'),
(20, 'bca', '7942befbe8d648cd159b7bd418c6bb4a.pdf', '2015', '1', '2019-09-11 08:36:24'),
(21, 'bca', '8536d73153edb7cef9340a5a5e47fe8e.pdf', '2015', '3', '2019-09-11 08:37:01'),
(22, 'bca', '8c1c0bc421723d1bcfa4645651e40e39.pdf', '2015', '2', '2019-09-11 08:38:11'),
(23, 'bca', '2a18598b6615758eba9111abebf5a6e7.pdf', '2014', '1', '2019-09-11 08:38:35'),
(24, 'bca', '2b398f8b3e01e3d874405b46a9d3864d.pdf', '2015', '2', '2019-09-11 08:38:55'),
(25, 'bca', '77d1986e5520d6e61c1fcdf9874e009f.pdf', '2015', '1', '2019-09-11 08:39:16'),
(26, 'bca', '5c868e5951aa71ab48e314f927f4fe4a.pdf', '2015', '1', '2019-09-11 08:39:52'),
(27, 'bca', '65c5c52ec30a5f3c43a8a6b65ab5f7bc.pdf', '2015', '3', '2019-09-11 08:40:16'),
(28, 'bca', '627a4cd6a2ebd34daf7e69adceb2b0b0.pdf', '2014', '1', '2019-09-11 08:40:34'),
(29, 'bca', '8cfb9626ed28750a0cc033cb3c7614ea.pdf', '2015', '3', '2019-09-11 08:41:21'),
(30, 'bca', '1783526d7f672600991c38bd37886965.pdf', '2014', '1', '2019-09-11 08:41:51'),
(31, 'bca', '380831d8c7c890c7588ca6243ac4b136.pdf', '2014', '1', '2019-09-11 08:42:10'),
(32, 'bca', '790a87a1ad233a11f9dc71cabf2cac68.pdf', '2015', '1', '2019-09-11 08:42:33'),
(33, 'bca', 'c9eab7ff268cb364fa3046b2a3218a16.pdf', '2015', '1', '2019-09-11 08:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `attemps` int(250) NOT NULL,
  `status` int(5) NOT NULL,
  `utype` int(11) NOT NULL,
  `locked` int(11) NOT NULL DEFAULT 0,
  `last_login` varchar(200) NOT NULL,
  `ip_address` varchar(200) NOT NULL,
  `browser` varchar(50) NOT NULL,
  `browser_version` varchar(50) NOT NULL,
  `os` varchar(50) NOT NULL,
  `location` varchar(200) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `gender`, `image`, `mobile`, `email`, `address`, `dob`, `password`, `attemps`, `status`, `utype`, `locked`, `last_login`, `ip_address`, `browser`, `browser_version`, `os`, `location`, `created_date`) VALUES
(4, 'Aditya', 'Suman', 'male', 'f9f68615c909d2a94e7ff17811c9dc68.jpg', '', 'kumaradityamanu@gmail.com', 'Patna', '20.08.1995', '21232f297a57a5a743894a0e4a801fc3', 0, 0, 2, 0, '2020-02-06 01:47:17 am', '', '', '', '', '', '2019-08-02 11:10:59'),
(16, 'Vinit', 'Kumar', 'Male', 'f9f68615c909d2a94e7ff17811c9dc79.jpeg', '7250770084', 'dev.vinit@outlook.com', 'Patna', '1995-08-20', '21232f297a57a5a743894a0e4a801fc3', 0, 1, 1, 0, '2020-02-15 09:51:16 pm', '103.206.8.132', 'Firefox', '69.0', 'Linux', '', '2019-09-24 08:28:21'),
(39, 'Ranjan Kumar ', 'Mishra', 'Male', '1ed80ffe16ae26a85aeb09617f8bc499.jpg', '9097254693', 'ranjanmishra727@gmail.com', 'Hyderabad india', '1999-01-10', 'abca25fec1c45815be12a73390b0205e', 0, 0, 2, 0, '2019-09-25 03:11:55 pm', '183.83.174.186', 'Chrome', '77.0.3865.90', 'Windows 10', '', '2019-09-25 09:37:14');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `add` varchar(20) NOT NULL,
  `content` varchar(500) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `add`, `content`, `image`) VALUES
(1, 'Navneet  Kumar', 'BCA, Patna, Bihar', 'I wish I’d come here earlier. This is by far the best decision I’ve made. It gave me the platform to learn so much, to meet new people, and most importantly to develop the approach one needs while coding. The healthy environment here is the best I’ve seen.', ''),
(2, 'Ranjan Kumar', 'Patna, Bihar', 'If you want to become a brilliant programmer, and are willing to put in the hours and dedicate yourself to acquiring great skills, then there is no better place for you than Coding Blocks. The teaching assistants, Naman and Athar, were also brilliant and very helpful, who ensured we never felt like any problem was too hard.', ''),
(3, 'Abhi  Kumar', 'Patna, Bihar', 'If I were to describe my experience in one word, I would simply say PERFECT. Observing myself before & after doing this course with Deepak bhaiya, Now I am very confident. Now I know how exactly to proceed with a given problem. I would seriously recommend you to join the course.', ''),
(5, 'Rahul  Kumar', 'Patna, Bihar', 'Its not an institute to learn just “Programming” , But much more. Its a Bond with our mentors , TAs ; just like being part of a family. Infrastructure is good , smart learning , helpful mentors. Online assignments are given , rankings to compete among peers , Most importantly Slack : a platform to ask our Doubts , Sir’s', ''),
(6, 'Navneet SIngh', 'BCA, Patna, Bihar', 'I wish I’d come here earlier. This is by far the best decision I’ve made. It gave me the platform to learn so much, to meet new people, and most importantly to develop the approach one needs while coding. The healthy environment here is the best I’ve seen.', '');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `name`, `qualification`, `bio`, `image`) VALUES
(16, 'Priyanshu Agrawal', 'MCA', 'Priyanshu did his bachelors in Computer Science and is a MBA graduate from MDI, Gurgaon. He has experience of working in Management & Consulting domain with Boston Analytics & Novozymes. He has also worked for Vidyamandir Classes and Nagarro in the past.', 'adsfdfg'),
(17, 'Brij Mohan', 'MCA', 'Brij Mohan or Bade bhaiya, as everyone calls him, is always full of energy and keeps everyone on feet with his motivation. He has vast experience of teaching and is the founder of Vidyamandir Classes.\r\nBade Bhaiya, through his personal and professional growth helps in motivating and mentoring students at Coding Blocks. He is an IIT Delhi alumnus.', 'Asfdfg'),
(18, 'Manmohan Gupta', 'MCA', 'Manmohan Gupta (Munna Bhaiya), an IIT-Delhi graduate, is an ace programmer, technocrat, an entrepreneurial doyen and a mathematician. He has co-founded Software giant, Nagarro and Vidyamandir Classes(VMC). Having seen both the industries from up close, he could identify a key gap between college education ', 'ddf'),
(19, 'Arnav Gupta', 'MCA', 'Arnav Gupta, also popular as @ChampionSwimmer, is an acclaimed Android developer and two timer GSoC-er. He has presented at large conferences like JSFOO, DroidCon, FOSSASIA and OSDConf. He has also worked with Sony, Micromax, Cyanogen and the likes. Arnav has also active contributed int the development of ', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `tran_programs`
--

CREATE TABLE `tran_programs` (
  `id` int(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tran_programs`
--

INSERT INTO `tran_programs` (`id`, `image`, `title`, `description`) VALUES
(6, 'Hardware Sensors', 'Hardware Sensors', 'Sensors help us build context-aware apps. You\'ll learn how to use GPS location, orientation, speed sensors, and perform actions on gestures such as flip and shake.'),
(7, 'Network & Databases', 'Network & Databases', 'Most apps are connected in nature. You\'ll learn how to connect your apps to a backend to create an ecosystem of users and their data.'),
(8, 'Most apps are connected in nature. You\'ll learn how to connect your apps to a backend to create an ecosystem of users and their data.', 'Summar Trainfinf', 'Most apps are connected in nature. You\'ll learn how to connect your apps to a backend to create an ecosystem of users and their data.');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `ip_address` varchar(200) NOT NULL,
  `os` varchar(200) NOT NULL,
  `browser_version` varchar(100) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `courses` varchar(20) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `name`, `gender`, `image`, `mobile`, `email`, `dob`, `ip_address`, `os`, `browser_version`, `browser`, `courses`, `date_time`) VALUES
(60, 'md Aquib hussain', '', '0ad24eacb703c1d6e951b502a8676cd5.png', '9128943330', 'hussainaquib043@gmail.com', '', '', '', '', '', 'BCA', '2019-08-20 10:24:49'),
(82, 'MRITYUNJAY', '', '097121fdfa32c63c210f323a2e8982b3.jpg', '9117734481 ', 'mrityunjaykr18@gmail.com', '', '157.42.31.73', 'Android', '63.0.3239.111', 'Chrome', 'C', '2019-08-22 12:59:08'),
(90, 'Alok', '', '48afcc1ee616f0df6b637f81d66a676a.jpg', '9473236526', 'singhalok8055@gmail.cim', '', '47.29.56.145', 'Android', '71.0.3578.141', 'Chrome', 'Hacking', '2019-09-09 14:16:04'),
(92, 'Shobhit raj', '', 'c5827501718d2c6af60f1a568517f899.jpg', '6206893845', 'shobhitraj306@gmail.com', '', '47.29.10.223', 'Android', '76.0.3809.111', 'Chrome', 'Phython', '2019-09-16 17:20:40'),
(93, 'Saket Kumar', '', 'b17a28eb927b7436615ca67725473ad5.jpg', '7277830828', 'asaket18@gmail.com', '', '47.9.218.170', 'Android', '78.0.3904.62', 'Chrome', 'Java', '2019-12-02 15:22:31'),
(94, 'Narayan Sharan', '', 'd0add74824991e99e8e3503297ed1d3f.jpg', '6203205545', 'narayansharan18092000@gmail.com', '', '157.42.77.16', 'Android', '64.0.3282.137', 'Chrome', 'B.sc (it)', '2019-12-02 15:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `video_tur`
--

CREATE TABLE `video_tur` (
  `id` int(10) NOT NULL,
  `link` varchar(256) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hit_info`
--
ALTER TABLE `hit_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notise`
--
ALTER TABLE `notise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tran_programs`
--
ALTER TABLE `tran_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_tur`
--
ALTER TABLE `video_tur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hit_info`
--
ALTER TABLE `hit_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1695;

--
-- AUTO_INCREMENT for table `notise`
--
ALTER TABLE `notise`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tran_programs`
--
ALTER TABLE `tran_programs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `video_tur`
--
ALTER TABLE `video_tur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
