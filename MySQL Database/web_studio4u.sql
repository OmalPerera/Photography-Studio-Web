-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 29, 2016 at 07:28 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_studio4u`
--

-- --------------------------------------------------------

--
-- Table structure for table `cus_details`
--

CREATE TABLE `cus_details` (
  `cus_id` varchar(45) NOT NULL,
  `wed_date` date DEFAULT NULL,
  `hom_date` date DEFAULT NULL,
  `hom_D_N` tinyint(1) DEFAULT NULL,
  `name_groom` varchar(45) DEFAULT NULL,
  `adres` varchar(145) DEFAULT NULL,
  `g_con_num` int(11) DEFAULT NULL,
  `name_bride` varchar(45) DEFAULT NULL,
  `b_con_num` int(11) DEFAULT NULL,
  `fix_line` int(11) DEFAULT NULL,
  `reg_time` time DEFAULT NULL,
  `poru_s_time` time DEFAULT NULL,
  `poru_e_time` time DEFAULT NULL,
  `goin_dress` tinyint(1) DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `fun_start_time` time DEFAULT NULL,
  `pre_sht_date` date DEFAULT NULL,
  `spcial_evnt` varchar(450) DEFAULT NULL,
  `special_need` varchar(450) DEFAULT NULL,
  `description` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cus_details`
--

INSERT INTO `cus_details` (`cus_id`, `wed_date`, `hom_date`, `hom_D_N`, `name_groom`, `adres`, `g_con_num`, `name_bride`, `b_con_num`, `fix_line`, `reg_time`, `poru_s_time`, `poru_e_time`, `goin_dress`, `end_time`, `fun_start_time`, `pre_sht_date`, `spcial_evnt`, `special_need`, `description`) VALUES
('omalperera8@gmail.com', '2016-04-21', '2016-04-15', NULL, 'Omal', '1181, rajamalwatta rd Bttaramulla', NULL, 'Dinii', 1234567890, 2147483647, '03:57:00', '20:09:00', NULL, NULL, '07:10:00', '04:05:00', '2016-04-08', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `cus_id` varchar(45) NOT NULL,
  `paid` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pay_details`
--

CREATE TABLE `pay_details` (
  `cus_id` varchar(45) NOT NULL,
  `p_pack_id` tinyint(4) DEFAULT NULL,
  `v_pack_id` tinyint(4) DEFAULT NULL,
  `pre_shot_id` tinyint(4) DEFAULT NULL,
  `trans_port_km` double DEFAULT NULL,
  `tot_amoun` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `p_package`
--

CREATE TABLE `p_package` (
  `pack_id` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `p_pack_details`
--

CREATE TABLE `p_pack_details` (
  `id` int(11) NOT NULL,
  `pack_id` int(11) NOT NULL,
  `item` varchar(45) DEFAULT NULL,
  `qty` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `gmail` varchar(45) NOT NULL,
  `name` varchar(75) DEFAULT NULL,
  `con_num` int(11) DEFAULT NULL,
  `pasword` varchar(45) DEFAULT NULL,
  `privlg` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`gmail`, `name`, `con_num`, `pasword`, `privlg`) VALUES
('', '', 0, '', NULL),
('asd@sdf.com', 'asd', 1234567890, '123456', NULL),
('omalperera812@gmail.com', 'fgh', 123456789, '123456', NULL),
('omalperera866@gmail.com', 'dfg', 0, '123456', NULL),
('omalperera88@gmail.com', 'Omal Perera', 717074638, '123456', NULL),
('omalperera8@gmail.com', 'Omal', 717074638, '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cus_details`
--
ALTER TABLE `cus_details`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_payment_pay_details1` (`cus_id`);

--
-- Indexes for table `pay_details`
--
ALTER TABLE `pay_details`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `p_package`
--
ALTER TABLE `p_package`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `p_pack_details`
--
ALTER TABLE `p_pack_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`gmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `p_pack_details`
--
ALTER TABLE `p_pack_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_payment_pay_details1` FOREIGN KEY (`cus_id`) REFERENCES `pay_details` (`cus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pay_details`
--
ALTER TABLE `pay_details`
  ADD CONSTRAINT `pay_details_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `cus_details` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
