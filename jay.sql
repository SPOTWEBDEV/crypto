-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2025 at 12:55 PM
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
-- Database: `jay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`, `status`) VALUES
(1, 'admin@admin', 'admin11', '');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wallet_addr` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `snapshot` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `date_deposited` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `user_id`, `wallet_addr`, `amount`, `snapshot`, `method`, `date_deposited`, `status`) VALUES
(1, 6, '--', '500', '--', 'USDT(Trc20)', '2025-01-21 20:30:43', 0),
(2, 6, '--', '88', '--', 'USDT(Trc20)', '2025-01-21 20:30:52', 0),
(3, 2, '--', '400', '--', 'Ethereum', '2025-01-21 20:33:07', 0),
(4, 2, '--', '400', '--', 'USDT(Trc20)', '2025-01-21 20:33:16', 0),
(5, 2, '--', '90', '--', 'USDT(Trc20)', '2025-01-21 20:52:13', 0),
(6, 6, '--', '1303', '--', 'Bank', '2025-01-25 07:32:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `id` int(255) NOT NULL,
  `expert_name` varchar(255) NOT NULL,
  `expert_image` varchar(255) NOT NULL,
  `return` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `max_drawdown` varchar(255) NOT NULL,
  `win_rates` varchar(255) NOT NULL,
  `trades` varchar(255) NOT NULL,
  `ratio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`id`, `expert_name`, `expert_image`, `return`, `amount`, `max_drawdown`, `win_rates`, `trades`, `ratio`) VALUES
(6, 'John Doe', 'jiiiui', '3000', '1000', '3', '70', '45', '1:3');

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

CREATE TABLE `investments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profit` decimal(10,2) NOT NULL,
  `number_of_day` int(11) NOT NULL,
  `total` varchar(255) NOT NULL,
  `date_invested` varchar(100) NOT NULL,
  `date_to_mature` varchar(100) NOT NULL,
  `ends_on` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `investments`
--

INSERT INTO `investments` (`id`, `user_id`, `plan`, `amount`, `email`, `profit`, `number_of_day`, `total`, `date_invested`, `date_to_mature`, `ends_on`, `status`) VALUES
(1, 6, 'Basic Plan', '100', 'spotwebdev.com@gmail.com', 5.20, 0, '26', '2025-01-25 07:38:12', '2025-01-26 07:38:12', '2025-01-30 07:38:12', 0),
(2, 2, 'Starter Plan', '400', 'firstclass@gmail.com', 40.00, 0, '200', '2025-03-24 13:15:44', '2025-03-25 13:15:44', '2025-03-29 13:15:44', 0),
(3, 2, 'Starter Plan', '300', 'firstclass@gmail.com', 30.00, 0, '150', '2025-03-24 13:17:34', '2025-03-25 13:17:34', '2025-03-29 13:17:34', 0),
(4, 2, 'Starter Plan', '300', 'firstclass@gmail.com', 30.00, 0, '150', '2025-03-24 13:18:57', '2025-03-25 13:18:57', '2025-03-29 13:18:57', 0),
(5, 2, 'Starter Plan', '300', 'firstclass@gmail.com', 30.00, 0, '150', '2025-03-24 13:19:02', '2025-03-25 13:19:02', '2025-03-29 13:19:02', 0),
(6, 2, 'Starter Plan', '300', 'firstclass@gmail.com', 30.00, 0, '150', '2025-03-24 13:20:21', '2025-03-25 13:20:21', '2025-03-29 13:20:21', 0),
(7, 2, 'Starter Plan', '367', 'firstclass@gmail.com', 36.70, 0, '183.5', '2025-03-24 13:21:15', '2025-03-25 13:21:15', '2025-03-29 13:21:15', 0),
(8, 2, 'Starter Plan', '300', 'firstclass@gmail.com', 30.00, 0, '150', '2025-03-24 13:26:31', '2025-03-25 13:26:31', '2025-03-29 13:26:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kyc`
--

CREATE TABLE `kyc` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `datebirth` varchar(255) NOT NULL,
  `drivinglincense` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `status` enum('pending','approved','declined') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_accounts`
--

CREATE TABLE `payment_accounts` (
  `id` int(11) NOT NULL,
  `payment_type` enum('Bank','Wallet','Western Union') NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) NOT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `routing_number` varchar(255) DEFAULT NULL,
  `wallet_provider` varchar(255) DEFAULT NULL,
  `wu_name` varchar(255) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_accounts`
--

INSERT INTO `payment_accounts` (`id`, `payment_type`, `bank_name`, `account_number`, `account_name`, `routing_number`, `wallet_provider`, `wu_name`, `date_added`) VALUES
(1, 'Bank', 'SPOT BANK', '224884848484', 'micheal eze', '988573', '', '', '2025-01-24 21:44:39'),
(3, 'Wallet', '', '0xxxhfnnnnnnnnnnnnnnnnrRR', '', '', 'Bitccoin', '', '2025-01-25 05:33:13'),
(6, 'Western Union', '', '9387474834', 'John Doe', '', '', NULL, '2025-01-25 06:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL,
  `network` varchar(100) NOT NULL,
  `wallet_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `ref_bal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `ref_bal`) VALUES
(1, '10');

-- --------------------------------------------------------

--
-- Table structure for table `testcron`
--

CREATE TABLE `testcron` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trade`
--

CREATE TABLE `trade` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pair` varchar(50) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `order_type` enum('buy','sell') NOT NULL,
  `stop_loss` decimal(10,5) NOT NULL,
  `take_profit` decimal(10,5) NOT NULL,
  `entry_price` decimal(10,5) NOT NULL,
  `risk_reward` varchar(20) DEFAULT NULL,
  `type` enum('self_trade','copy_trade') DEFAULT 'self_trade',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('pending','running','completed','stoploss','takeprofit') NOT NULL,
  `pip_value` varchar(255) NOT NULL,
  `total_profit` varchar(255) NOT NULL,
  `current_price_made` varchar(255) NOT NULL,
  `expert_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trade`
--

INSERT INTO `trade` (`id`, `user_id`, `pair`, `amount`, `order_type`, `stop_loss`, `take_profit`, `entry_price`, `risk_reward`, `type`, `created_at`, `updated_at`, `status`, `pip_value`, `total_profit`, `current_price_made`, `expert_id`) VALUES
(5, 6, 'BTC-USDT', '10', 'sell', 83774.05000, 83217.21000, 83663.69000, '1:4.05', 'self_trade', '2025-03-17 09:56:23', '2025-03-17 17:25:25', 'stoploss', '0.00011952616481535', '40.5', '-40.5', 0),
(6, 6, 'BTC-USDT', '20', 'buy', 82400.00000, 84200.00000, 83043.35000, '1:1.8', 'self_trade', '2025-03-17 16:59:40', '2025-03-17 17:39:12', 'takeprofit', '0.00024083806831011', '36', '36', 0),
(7, 6, 'BTC-USDT', '100', 'sell', 84814.55000, 82505.30000, 84251.93000, '1:3.1', 'self_trade', '2025-03-17 20:06:53', '2025-03-18 04:48:16', 'running', '0.0011869164302824', '310', '222.07020508701', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `profile_image` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `wallet` varchar(100) NOT NULL,
  `ref_wallet` varchar(100) NOT NULL,
  `gain_wallet` varchar(100) NOT NULL,
  `total_deposit` float NOT NULL,
  `total_withdrawal` float NOT NULL,
  `trading_commission` int(11) NOT NULL,
  `pending_investment` int(11) NOT NULL,
  `referral_balance` int(11) NOT NULL,
  `referral` int(11) NOT NULL,
  `account_warning` enum('no','yes') NOT NULL,
  `restriction` enum('no','yes') NOT NULL,
  `promo_won` varchar(100) NOT NULL,
  `ref_id` varchar(100) NOT NULL,
  `referree` varchar(100) NOT NULL,
  `date_registered` varchar(100) NOT NULL,
  `paid_ref` varchar(11) NOT NULL,
  `dn_with` int(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `kycstatus` enum('null','pending','declined','approved') NOT NULL,
  `copy_balance` varchar(255) NOT NULL DEFAULT '0',
  `copy_expert` int(11) NOT NULL,
  `btc` varchar(255) NOT NULL DEFAULT '0',
  `gold` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `name`, `email`, `phone`, `profile_image`, `password`, `country`, `wallet`, `ref_wallet`, `gain_wallet`, `total_deposit`, `total_withdrawal`, `trading_commission`, `pending_investment`, `referral_balance`, `referral`, `account_warning`, `restriction`, `promo_won`, `ref_id`, `referree`, `date_registered`, `paid_ref`, `dn_with`, `status`, `kycstatus`, `copy_balance`, `copy_expert`, `btc`, `gold`) VALUES
(2, 'firstclass', 'firstclass', 'firstclass@gmail.com', '949494', '--', 'firstclass123', 'Afghanistan', '99997733', '0', '0', 0, 0, 0, 0, 10, 0, 'no', 'no', '', '1115504554', '', '2025-01-21 19:19:55', '0', 0, '0', 'null', '0', 0, '0', '0'),
(6, 'thebest', 'thebest', 'spotwebdev.com@gmail.com', '07080879952', '--', 'thebest', 'Albania', '1003', '0', '0', 1303, 0, 0, 0, 0, 0, 'no', 'no', '', '228706318', '1115504554', '2025-01-21 19:47:40', '1', 0, '0', 'null', '0', 0, '0', '0'),
(7, 'aypvkhag', 'jfjf', 'festus@gmail.com', 'fff', '1739257269.jpg', 'repented', 'Afghanistan', '200', '0', '0', 0, 0, 0, 0, 100, 0, 'no', 'no', '', '173257284', '', '2025-01-24 19:49:29', '0', 0, '0', 'null', '0', 0, '0', '0'),
(8, 'rtyuiop', 'ertyuio', 'festus@gmail.com', '', '', '1234', '', '', '', '', 0, 0, 0, 0, 0, 0, 'no', 'no', '', '', '', '', '', 0, '', 'null', '0', 0, '0', '0'),
(9, 'ertyuio', 'duio', 'festus@gmail.com', '', '', '12345', '', '', '', '', 0, 0, 0, 0, 0, 0, 'no', 'no', '', '', '', '', '', 0, '', 'null', '0', 0, '0', '0'),
(10, 'ertyuio', 'duio', 'festus@gmail.com', '', '', '12345', '', '', '', '', 0, 0, 0, 0, 0, 0, 'no', 'no', '', '', '', '', '', 0, '', 'null', '0', 0, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `from_wallet` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `wallet_addr` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `date_withdrawn` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investments`
--
ALTER TABLE `investments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `kyc`
--
ALTER TABLE `kyc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_accounts`
--
ALTER TABLE `payment_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testcron`
--
ALTER TABLE `testcron`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trade`
--
ALTER TABLE `trade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `investments`
--
ALTER TABLE `investments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kyc`
--
ALTER TABLE `kyc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_accounts`
--
ALTER TABLE `payment_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testcron`
--
ALTER TABLE `testcron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trade`
--
ALTER TABLE `trade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trade`
--
ALTER TABLE `trade`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
