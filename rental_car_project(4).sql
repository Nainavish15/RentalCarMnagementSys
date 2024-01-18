-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 06:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_car_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_master`
--

CREATE TABLE `booking_master` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `owner_id` int(10) NOT NULL,
  `vehicle_id` int(10) NOT NULL,
  `pick_up_loc` text NOT NULL,
  `drop_off_loc` text NOT NULL,
  `pick_up_date` date NOT NULL,
  `drop_off_date` date NOT NULL,
  `total_days` int(10) NOT NULL,
  `pick_up_time` time NOT NULL,
  `optional_contact` varchar(10) NOT NULL,
  `payable_amount` int(10) NOT NULL,
  `payment_status` varchar(10) NOT NULL DEFAULT 'panding',
  `booking_status` varchar(50) NOT NULL DEFAULT 'panding',
  `Create_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Update_At` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_master`
--

INSERT INTO `booking_master` (`booking_id`, `user_id`, `owner_id`, `vehicle_id`, `pick_up_loc`, `drop_off_loc`, `pick_up_date`, `drop_off_date`, `total_days`, `pick_up_time`, `optional_contact`, `payable_amount`, `payment_status`, `booking_status`, `Create_At`, `Update_At`) VALUES
(1, 3, 1, 3, 'Sadar', 'Tilwara', '0000-00-00', '0000-00-00', 3, '00:00:00', '1234567890', 6000, 'panding', 'confirm', '2023-10-03 18:54:42', '2023-10-04 15:04:47'),
(2, 3, 1, 3, '', '', '2023-10-05', '2023-10-07', 3, '15:00:00', '1234567890', 6000, 'panding', 'confirm', '2023-10-03 18:59:39', '2023-10-04 15:04:05'),
(3, 3, 1, 2, 'Civil Lines', 'Sadar', '2023-10-06', '2023-10-10', 5, '12:30:00', '1234567890', 4000, 'confirm', 'confirm', '2023-10-04 11:59:59', '2023-10-04 17:29:25'),
(4, 3, 1, 5, 'GWARIGHAT ROAD', 'MADAN MEHAL', '2023-10-05', '2023-10-07', 3, '09:00:00', '8989898900', 3600, 'panding', 'confirm', '2023-10-04 15:27:45', '2023-10-04 15:29:07'),
(5, 3, 1, 3, 'Laxmi Nagar', 'Chandni Chowk', '2023-10-08', '2023-10-10', 3, '10:00:00', '8989898900', 6000, 'panding', 'panding', '2023-10-04 15:57:45', '2023-10-04 15:57:45'),
(6, 3, 1, 2, 'Dahmonaka', 'vijay Nagar', '2023-10-05', '2023-10-06', 2, '10:00:00', '8989898900', 1600, 'panding', 'panding', '2023-10-04 16:17:32', '2023-10-04 16:17:32'),
(7, 3, 1, 3, 'GWARIGHAT ROAD', 'Tilwara', '2023-10-06', '2023-10-07', 2, '13:20:00', '1234567890', 4000, 'panding', 'panding', '2023-10-04 16:48:06', '2023-10-04 16:48:06'),
(8, 3, 1, 3, 'GWARIGHAT ROAD', 'Tilwara', '2023-10-06', '2023-10-07', 2, '13:20:00', '1234567890', 4000, 'panding', 'panding', '2023-10-04 16:48:56', '2023-10-04 16:48:56'),
(9, 3, 1, 3, 'Laxmi Nagar', 'Chandni Chowk', '2023-10-06', '2023-10-07', 2, '12:21:00', '8989898900', 4000, 'panding', 'panding', '2023-10-04 16:49:51', '2023-10-04 16:49:51'),
(10, 3, 1, 3, 'Civil Lines', 'Tilwara', '2023-10-05', '2023-10-07', 0, '11:00:00', '1234567890', 0, 'panding', 'panding', '2023-10-04 16:58:50', '2023-10-04 16:58:50'),
(11, 3, 1, 3, 'Sadar', 'Sadar', '2023-10-05', '2023-10-06', 2, '11:34:00', '8989898900', 4000, 'panding', 'panding', '2023-10-04 17:02:29', '2023-10-04 17:02:29'),
(12, 3, 1, 2, 'Sadar', 'Tilwara', '2023-10-05', '2023-10-06', 2, '10:42:00', '1234567890', 1600, 'panding', 'panding', '2023-10-04 17:12:56', '2023-10-04 17:12:56'),
(13, 3, 1, 3, 'GWARIGHAT ROAD', 'Tilwara', '2023-10-06', '2023-10-08', 3, '10:00:00', '1234567890', 6000, 'confirm', 'confirm', '2023-10-04 17:24:23', '2023-10-04 17:42:23'),
(14, 5, 4, 6, 'Damoh Naka', 'Sadar', '2023-10-07', '2023-10-09', 3, '12:20:00', '8989898900', 6000, 'confirm', 'confirm', '2023-10-05 04:50:40', '2023-10-05 04:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_image` varchar(256) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '0 for Active user\r\n1 for Inactive user',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_name`, `email`, `contact`, `password`, `profile_image`, `role`, `status`, `create_at`, `update_at`) VALUES
(1, 'Naina', 'naina@gmail.com', '7771841091', '123456', 'WhatsApp Image 2023-10-01 at 20.41.29.jpeg', 'car_owner', 0, '2023-10-02 09:01:03', '2023-10-02 09:01:03'),
(2, 'Pradyum Jaiswal', 'pradyum123@gmail.com', '8877458800', '1234567', 'WhatsApp Image 2023-05-13 at 14.14.28.jpeg', 'user', 0, '2023-10-02 09:15:37', '2023-10-03 09:20:07'),
(3, 'Abhishek Sharma', 'abhi22@gmail.com', '9090998867', 'user', 'WhatsApp Image 2023-05-13 at 14.09.27.jpeg', 'user', 0, '2023-10-03 13:36:46', '2023-10-03 13:36:46'),
(4, 'admin', 'admin@gmail.com', '8877458888', 'admin', 'WhatsApp Image 2023-05-13 at 14.10.49 - Copy.jpeg', 'car_owner', 0, '2023-10-05 04:39:58', '2023-10-05 04:39:58'),
(5, 'user', 'user@gmail.com', '9090668800', 'user', 'WhatsApp Image 2023-05-13 at 14.14.28.jpeg', 'user', 0, '2023-10-05 04:47:41', '2023-10-05 04:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_info`
--

CREATE TABLE `vehicle_info` (
  `v_id` int(10) NOT NULL,
  `owner_id` int(10) NOT NULL,
  `vehicle_model` varchar(256) NOT NULL,
  `vehicle_number` varchar(256) NOT NULL,
  `seating_capacity` varchar(256) NOT NULL,
  `vehicle_image` varchar(256) NOT NULL,
  `vehicle_details` longtext NOT NULL,
  `rent_per_day` int(10) NOT NULL,
  `v_status` int(1) NOT NULL DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_info`
--

INSERT INTO `vehicle_info` (`v_id`, `owner_id`, `vehicle_model`, `vehicle_number`, `seating_capacity`, `vehicle_image`, `vehicle_details`, `rent_per_day`, `v_status`, `create_at`, `update_at`) VALUES
(2, 1, 'Maruti Suzuki Swift', 'MP20NP4590', 'Seven Seater', 'wagon-r-2022.webp', 'This is the first major update for the Wagon R since this generation was launched in 2019 and sees it get cosmetic updates as well as new engine options.', 800, 0, '2023-10-02 13:41:05', '2023-10-02 17:40:50'),
(3, 1, 'Toyota Fortuner Specs', ' MP20kN2398', 'Seven Seater', 'Fortuner1.jpeg', 'This Toyota Fortuner Legender model isn\'t a world apart from the standard version, and yet gets a more premium looking face and more features on the inside. Sure, the price of this new top-spec trim has shot up and isn\'t available with a 4x4 set-up. However, it suffices he/she who wouldn\'t take it off-road, and prefer a hassle-free after-sales experience. And while other rivals are downsizing on the engine capacity, it\'s a good step taken forward by Toyota by introducing a more powerful engine. Gives more reasons for prospective buyers to consider it, apart from its little unique look to the Fortuner, which already commands a good demand in our country.', 2000, 0, '2023-10-02 13:49:42', '2023-10-02 13:55:10'),
(4, 1, 'Maruti Dzire', 'MP20NP9960', 'Six Seater', 'dzire-exterior.webp', 'The Dzire gets beige upholstery, a push start/stop button, reverse parking sensors, keyless entry, rear aircon vents, a seven-inch touchscreen infotainment system, a flat-bottom steering wheel, and cruise control.', 1500, 0, '2023-10-02 13:54:16', '2023-10-02 13:54:16'),
(5, 1, 'Maruti Fronx', 'MP20CS3456', 'Seven Seater', 'dzire-exterior.webp', 'Designed to plug the gap between the Baleno and Brezza, the new Fronx has quite a lot going for it. Namely the stance, a long list of features, a mature ride and a refined set of capable motors. Yet another winner from Maruti!', 1200, 0, '2023-10-02 14:01:20', '2023-10-02 14:01:20'),
(6, 4, 'Maruti Jimny', 'MP20NP4545', 'Five Seater', 'jimny.webp', 'Maruti Jimny is a 4 seater SUV car in a price range of Rs. 12.74 Lakh to 15.05 Lakh in India. Jimny is off Jimny mileage is 16.94kmpl. The boot space of the Jimny is 211 litres while it ground clearance is 210 mm. There are six different variants of the Jimny and it comes in eight different colours.', 2000, 0, '2023-10-05 04:43:10', '2023-10-05 04:53:34'),
(7, 4, 'Maruti Ertiga Tour ', 'MP20kP4567', 'nine Seater', 'ertiga-tour.webp', ' The petrol engine of Ertiga Tour has a displacement of 1462cc and produces 103.25bhp of power and a torque of 138nm. Ertiga Tour mileage varies from 18.04 Kmpl on petrol to 26.08km/kg on cng. The boot space of the Ertiga Tour is 209 litres. There are two different variants of the Ertiga Tour and it comes in three different colours.', 2500, 0, '2023-10-05 04:46:20', '2023-10-05 04:46:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_master`
--
ALTER TABLE `booking_master`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `ref_booking_user` (`user_id`),
  ADD KEY `ref_vehicle_id` (`vehicle_id`),
  ADD KEY `ref_owner__vehicle_id` (`owner_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_master`
--
ALTER TABLE `booking_master`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  MODIFY `v_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_master`
--
ALTER TABLE `booking_master`
  ADD CONSTRAINT `ref_booking_user` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`),
  ADD CONSTRAINT `ref_owner__vehicle_id` FOREIGN KEY (`owner_id`) REFERENCES `vehicle_info` (`owner_id`),
  ADD CONSTRAINT `ref_vehicle_id` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle_info` (`v_id`);

--
-- Constraints for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  ADD CONSTRAINT `owner_id` FOREIGN KEY (`owner_id`) REFERENCES `user_table` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
