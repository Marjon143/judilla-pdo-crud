-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 08:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it28-ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `PaymentID` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `ZipCode` varchar(20) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `PaymentMode` varchar(50) DEFAULT NULL,
  `PaymentDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`PaymentID`, `FullName`, `Email`, `Address`, `City`, `ZipCode`, `Country`, `PaymentMode`, `PaymentDate`, `Amount`) VALUES
(1, '', '', '', '', '', '', 'Credit Card', '2024-05-29 23:58:26', 0.00),
(2, '', '', '', '', '', '', 'Credit Card', '2024-05-29 23:58:29', 0.00),
(3, '', '', '', '', '', '', 'Credit Card', '2024-05-29 23:58:29', 0.00),
(1211, 'Marjon Incarnacion Judilla', 'marjonjudilla143@gmail.com', 'Sto Nino', 'Manolo Fortich', '8703', 'Philippines', 'Credit Card', '2024-05-29 23:58:52', 600.00),
(1212, '', '', '', '', '', '', 'Credit Card', '2024-05-29 23:59:00', 0.00),
(1213, '', '', '', '', '', '', 'Credit Card', '2024-05-29 23:59:02', 0.00),
(1214, '', '', '', '', '', '', 'Credit Card', '2024-05-29 23:59:02', 0.00),
(1215, '', '', '', '', '', '', 'Credit Card', '2024-05-29 23:59:02', 0.00),
(1216, '', '', '', '', '', '', 'Credit Card', '2024-05-29 23:59:03', 0.00),
(1217, '', '', '', '', '', '', 'Credit Card', '2024-05-29 23:59:44', 0.00),
(1218, '', '', '', '', '', '', 'Credit Card', '2024-05-30 00:04:26', 0.00),
(1219, '', '', '', '', '', '', 'Credit Card', '2024-05-30 00:07:25', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `rrp` decimal(10,0) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(8, 'Nike', 'Strategically placed reflective details enhance visibility in low-light conditions, keeping you safe during early morning or evening runs.\r\nSpecifications:', 4000, 9000, 12, 'https://tse1.mm.bing.net/th?id=OIP.e1hXV9nipfQVAylL25rkZwHaHa&pid=Api&P=0&h=220', '2024-05-30 09:37:15'),
(9, 'Adidas', 'Warm days, cool soles\r\nBeat the heat in style', 3000, 4000, 12, 'https://tse4.mm.bing.net/th?id=OIP.LlNANWP3-ZINaCCOZnT2AwHaHa&pid=Api&P=0&h=220', '2024-05-30 14:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `PurchaseID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `TotalPrice` decimal(10,2) NOT NULL,
  `PurchaseDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `PaymentMode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$kGp4g1TjBK4XwLIwRbBHSeZ4W5FpPbYoB1ap5NfFUjUPAcE3KR5QG', '2024-04-29 16:39:58'),
(0, 'www', '$2y$10$nVDdKFXpZ9gK6qELPb.VTOoxLNjUfK4UZa9aIu6IxVrqMcFooETDW', '2024-05-27 17:02:58'),
(0, 'ppp', '$2y$10$iiEE/JcS7rZcLeSQvoHtbeIY9uT7Yea/vAfKRc9vjMU8AeS.a58oi', '2024-05-30 09:34:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`PurchaseID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1220;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `PurchaseID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
