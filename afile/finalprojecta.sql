-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 08:40 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalprojecta`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

CREATE TABLE `adminlogin_tb` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminlogin_tb`
--

INSERT INTO `adminlogin_tb` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(3, 'admin', 'hs@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tb`
--

CREATE TABLE `contact_tb` (
  `cname` text COLLATE utf8_bin NOT NULL,
  `csubject` varchar(150) COLLATE utf8_bin NOT NULL,
  `cemail` varchar(150) COLLATE utf8_bin NOT NULL,
  `cmessage` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `contact_tb`
--

INSERT INTO `contact_tb` (`cname`, `csubject`, `cemail`, `cmessage`) VALUES
('tipos', 'salon', 'tipos@gmail.com', 'scammas.');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(11, 'gagawa', '2021-12-20 08:00:00', '2021-12-20 13:00:00'),
(14, 'approved', '2022-01-03 15:00:00', '2022-01-03 16:00:00'),
(15, 'Appointment for Alvin Salvacion', '2022-01-11 16:00:00', '2022-01-11 17:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `requesterlogin_tb`
--

CREATE TABLE `requesterlogin_tb` (
  `r_login_id` int(11) NOT NULL,
  `r_fname` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_lname` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_birthday` date NOT NULL,
  `r_gender` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_municipality` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_number` varchar(11) COLLATE utf8_bin NOT NULL,
  `r_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_password` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_image` varchar(300) COLLATE utf8_bin NOT NULL,
  `r_status` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `requesterlogin_tb`
--

INSERT INTO `requesterlogin_tb` (`r_login_id`, `r_fname`, `r_lname`, `r_birthday`, `r_gender`, `r_municipality`, `r_number`, `r_email`, `r_password`, `r_image`, `r_status`) VALUES
(58, 'Daniel', 'Manalo', '1996-10-16', 'male', 'Lucban', '09268498571', 'daniel@gmail.com', 'daniel', 'butas.jpg', 'approved'),
(59, 'Patrick', 'Resureccion', '1999-02-16', 'male', 'Sariaya', '09157875263', 'patrick@gmail.com', 'patrick', 'saloning.jpg', 'pending'),
(60, 'Justin', 'Lasmorias', '1998-07-07', 'male', 'Lucena', '09158956415', 'justin@gmail.com', 'justin', 'lens.jfif', 'pending'),
(61, 'Immanuel', 'Monje', '2000-06-14', 'male', 'Lucena', '09151454849', 'immanuel@gmail.com', 'immanuel', 'hammering.jpg', 'approved'),
(69, 'Alvin', 'Salvacion', '1999-11-10', 'male', 'Lucban', '09123456789', 'alvinsalvacion06@gmail.com', 'alvin', '1631606398775.jpg', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `srequest_tb`
--

CREATE TABLE `srequest_tb` (
  `req_id` int(11) NOT NULL,
  `worker_id` varchar(60) COLLATE utf8_bin NOT NULL,
  `req_name` text COLLATE utf8_bin NOT NULL,
  `req_add` text COLLATE utf8_bin NOT NULL,
  `req_email` text COLLATE utf8_bin NOT NULL,
  `req_mobile` bigint(20) NOT NULL,
  `req_method` text COLLATE utf8_bin NOT NULL,
  `req_radio` varchar(50) COLLATE utf8_bin NOT NULL,
  `req_msg` text COLLATE utf8_bin NOT NULL,
  `req_date` datetime NOT NULL,
  `req_pic` varchar(100) COLLATE utf8_bin NOT NULL,
  `id` varchar(60) COLLATE utf8_bin NOT NULL,
  `req_status` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'pending',
  `req_tnum` varchar(50) COLLATE utf8_bin NOT NULL,
  `s_result` varchar(100) COLLATE utf8_bin NOT NULL,
  `req_partialpay` varchar(100) COLLATE utf8_bin NOT NULL,
  `req_service1` varchar(100) COLLATE utf8_bin NOT NULL,
  `req_service2` varchar(100) COLLATE utf8_bin NOT NULL,
  `req_service3` varchar(100) COLLATE utf8_bin NOT NULL,
  `req_service4` varchar(100) COLLATE utf8_bin NOT NULL,
  `req_service5` varchar(100) COLLATE utf8_bin NOT NULL,
  `req_book` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'pending',
  `req_request` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'pending',
  `req_done` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'pending',
  `req_withdrawal` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'pending',
  `req_rate` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `srequest_tb`
--

INSERT INTO `srequest_tb` (`req_id`, `worker_id`, `req_name`, `req_add`, `req_email`, `req_mobile`, `req_method`, `req_radio`, `req_msg`, `req_date`, `req_pic`, `id`, `req_status`, `req_tnum`, `s_result`, `req_partialpay`, `req_service1`, `req_service2`, `req_service3`, `req_service4`, `req_service5`, `req_book`, `req_request`, `req_done`, `req_withdrawal`, `req_rate`) VALUES
(226, 'dharlynaquitania20@gmail.com', 'Alvin', 'Lucban', 'alvinsalvacion06@gmail.com', 9123456789, 'Phone', 'Full Payment', 'tulong', '2022-01-11 04:16:00', '5fd4216576464c001c6e21bc.jpg', '', 'Booked', '', '1250', '', 'Hair Treatment', 'None', 'None', 'Make Up Services', 'None', 'pending', 'pending', 'finish', 'pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `workerslogin_tb`
--

CREATE TABLE `workerslogin_tb` (
  `w_login_id` int(11) NOT NULL,
  `w_fname` varchar(60) COLLATE utf8_bin NOT NULL,
  `w_lname` varchar(60) COLLATE utf8_bin NOT NULL,
  `w_birthday` date NOT NULL,
  `w_gender` varchar(60) COLLATE utf8_bin NOT NULL,
  `w_municipality` varchar(60) COLLATE utf8_bin NOT NULL,
  `w_number` varchar(60) COLLATE utf8_bin NOT NULL,
  `w_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `w_password` varchar(60) COLLATE utf8_bin NOT NULL,
  `w_role` varchar(60) COLLATE utf8_bin NOT NULL,
  `w_file` varchar(60) COLLATE utf8_bin NOT NULL,
  `w_status` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'pending',
  `w_haircutprice` varchar(11) COLLATE utf8_bin NOT NULL,
  `w_hair_color_price` varchar(11) COLLATE utf8_bin NOT NULL,
  `w_manicure_price` varchar(11) COLLATE utf8_bin NOT NULL,
  `w_pedicure_price` varchar(11) COLLATE utf8_bin NOT NULL,
  `w_make_up_price` varchar(11) COLLATE utf8_bin NOT NULL,
  `w_haircut` varchar(60) COLLATE utf8_bin NOT NULL,
  `w_haircolor` varchar(60) COLLATE utf8_bin NOT NULL,
  `w_manicure` varchar(60) COLLATE utf8_bin NOT NULL,
  `w_pedicure` varchar(60) COLLATE utf8_bin NOT NULL,
  `w_makeup` varchar(60) COLLATE utf8_bin NOT NULL,
  `w_img` varchar(60) COLLATE utf8_bin NOT NULL,
  `w_withdraw` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `workerslogin_tb`
--

INSERT INTO `workerslogin_tb` (`w_login_id`, `w_fname`, `w_lname`, `w_birthday`, `w_gender`, `w_municipality`, `w_number`, `w_email`, `w_password`, `w_role`, `w_file`, `w_status`, `w_haircutprice`, `w_hair_color_price`, `w_manicure_price`, `w_pedicure_price`, `w_make_up_price`, `w_haircut`, `w_haircolor`, `w_manicure`, `w_pedicure`, `w_makeup`, `w_img`, `w_withdraw`) VALUES
(119, 'Janel', 'Co', '0000-00-00', 'female', 'Lucena', '09296478966', 'janelco@gmail.com', 'janel', 'Salon Worker', 'lens.jfif', 'approved', '600', '0', '700', '650', '0', 'Hair Treatment', 'None', 'SkinCare Services', 'Make Up Services', 'None', '', 'pending'),
(120, 'Darrie', 'Escritor', '0000-00-00', 'female', 'Lucena', '09873728674', 'darrie@gmail.com', 'darrie', 'Salon Worker', 'zac.jpg', 'pending', '', '', '', '', '', '', '', '', '', '', '', 'pending'),
(121, 'Joyce', 'Gaelon', '0000-00-00', 'female', 'Lucban', '09298387561', 'joyce@gmail.com', 'joyce', 'Salon Worker', 'a1.png', 'approved', '600', '600', '600', '0', '0', 'Hair Treatment', 'Nail Treatment', 'SkinCare Services', 'None', 'None', '', 'pending'),
(122, 'Michelle', 'Aurellana', '0000-00-00', 'female', 'Lucena', '09998376472', 'michelle@gmail.com', 'michelle', 'Salon Worker', 'a2.png', 'pending', '', '', '', '', '', '', '', '', '', '', '', 'pending'),
(123, 'Keenan', 'Delantar', '0000-00-00', 'male', 'Sariaya', '09360197378', 'keenan@gmail.com', 'keenan', 'Handyman Worker', 'butas.jpg', 'pending', '', '', '', '', '', '', '', '', '', '', '', 'pending'),
(125, 'Ian', 'Pardo', '0000-00-00', 'male', 'Pagbilao', '09357091511', 'ian@gmail.com', 'Ian', 'Handyman Worker', 'w2.jpg', 'approved', '500', '500', '0', '600', '0', 'Plumbing', 'Carpentry', 'None', 'Electrical', 'None', '', 'pending'),
(126, 'Ronnel', 'Principe', '0000-00-00', 'male', 'Lucban', '09998723652', 'ronnel@gmail.com', 'ronnel', 'Handyman Worker', 'w2.jpg', 'approved', '550', '0', '0', '500', '550', 'Plumbing', 'None', 'None', 'Electrical', 'Maintenance & Repair', '', 'pending'),
(127, 'Chairo', 'Dacpano', '0000-00-00', 'male', 'Sariaya', '09266636871', 'chairo@gmail.com', 'chairo', 'Handyman Worker', '39204.jpg', 'approved', '550', '550', '550', '0', '0', 'Plumbing', 'Carpentry', 'Painting', 'None', 'None', '', 'pending'),
(135, 'Dharlyn', 'Aquitania', '0000-00-00', 'female', 'Tayabas', '09124568745', 'dharlynaquitania20@gmail.com', 'dharlyn', 'Salon Worker', '1619955958875.jpg', 'approved', '550', '0', '600', '700', '0', 'Hair Treatment', 'None', 'SkinCare Services', 'Make Up Services', 'None', '', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  ADD PRIMARY KEY (`a_login_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  ADD PRIMARY KEY (`r_login_id`);

--
-- Indexes for table `srequest_tb`
--
ALTER TABLE `srequest_tb`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `workerslogin_tb`
--
ALTER TABLE `workerslogin_tb`
  ADD PRIMARY KEY (`w_login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  MODIFY `a_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  MODIFY `r_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `srequest_tb`
--
ALTER TABLE `srequest_tb`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT for table `workerslogin_tb`
--
ALTER TABLE `workerslogin_tb`
  MODIFY `w_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
