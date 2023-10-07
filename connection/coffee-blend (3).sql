-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 04:45 PM
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
-- Database: `coffee-blend`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `availibility` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `first_name`, `last_name`, `date`, `time`, `phone`, `message`, `availibility`, `user_id`) VALUES
(1, 'Zahid', 'Khan', '10/1/2023', '12:30am', 321178748, 'Please book a window seat', 'Yes', 9),
(2, 'Usama', 'Riaz', '10/4/2023', '12:30am', 321178748, 'Hello', 'Yes', 1),
(3, 'Adil', 'Nawaz', '10/18/2023', '1:30am', 321178748, 'wala', 'Yes', 1),
(4, 'Asif', 'Asfar', '10/18/2023', '1:30am', 321178748, 'hey', 'Yes', 3),
(5, 'Zahid', 'Khan', '10/4/2023', '1:00am', 321178748, 'fsadfasd', 'Yes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `prod_name` varchar(200) NOT NULL,
  `prod_price` float NOT NULL,
  `prod_description` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(200) NOT NULL,
  `prod_image` varchar(200) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(200) NOT NULL,
  `prod_description` text NOT NULL,
  `prod_price` float NOT NULL,
  `prod_image` varchar(200) NOT NULL,
  `prod_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_description`, `prod_price`, `prod_image`, `prod_type`) VALUES
(1, 'Velvet Mocha', 'A smooth blend of rich espresso, steamed milk, and velvety chocolate syrup, topped with whipped cream and a sprinkle of cocoa powder.', 4.5, 'menu-1.jpg', ' Espresso'),
(2, 'Caramel Dream Latte', 'A heavenly combination of espresso, frothy milk, and sweet caramel syrup, finished with a drizzle of caramel and a pinch of sea salt for a delightful balance of flavors.', 4.75, 'menu-2.jpg', 'Cappuccino'),
(3, 'Vanilla Bean Bliss', 'A comforting mix of espresso, creamy milk, and aromatic vanilla bean syrup, garnished with a dusting of cinnamon. Perfect for vanilla lovers seeking a subtle and soothing coffee experience.', 4.25, 'menu-3.jpg', ' Espresso'),
(4, 'Hazelnut Heaven', 'Indulge in the nutty goodness of hazelnut-infused espresso, paired with steamed milk and a touch of hazelnut syrup. Topped with whipped cream and crushed hazelnuts for a delightful crunch.', 4.6, 'menu-4.jpg', 'Cappuccino'),
(5, 'Iced Caramel Macchiato', 'A refreshing iced coffee treat featuring espresso shots poured over chilled milk and vanilla syrup. Finished with a drizzle of caramel for sweetness and a beautiful caramel macchiato art.', 5, 'menu-1.jpg', ' Espresso'),
(6, 'Espresso Con Panna', 'For those who appreciate the boldness of espresso, this drink features a shot of rich, dark espresso crowned with a dollop of fresh whipped cream. A simple yet indulgent choice.', 3.75, 'menu-2.jpg', 'Coffea arabica'),
(7, 'Coconut Delight', 'Experience the tropical flavors with this coconut-infused coffee delight. Freshly brewed coffee blended with coconut milk and coconut syrup, garnished with toasted coconut flakes for a delightful crunch.', 4.85, 'menu-3.jpg', 'Coffea arabica'),
(8, 'Cinnamon Spice Latte', 'Warm up your senses with this aromatic blend of espresso, steamed milk, and a hint of cinnamon spice syrup. Topped with a sprinkle of cinnamon for a cozy and comforting coffee experience.', 4.4, 'menu-4.jpg', 'Cappuccino'),
(9, 'Double Chocolate Espresso', 'A chocolate lover’s dream! Double shots of espresso combined with velvety chocolate sauce and steamed milk, finished with whipped cream and chocolate shavings for the ultimate chocolate indulgence.', 5.25, 'menu-1.jpg', 'Coffea arabica'),
(10, 'Maple Pecan Delight', 'Embrace the flavors of fall with this delightful blend of espresso, warm milk, and sweet maple pecan syrup. Garnished with crushed pecans and a drizzle of maple syrup, creating a cozy and comforting coffee sensation.', 4.9, 'menu-2.jpg', 'Coffea arabica');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`user_id`, `user_name`, `user_email`, `user_password`, `created_at`) VALUES
(1, 'Usama', 'usama@gmail.com', '$2y$10$HmTCc2Y8bFCBe4X0H.a/y.M/lHgYEF6GVWJxq.0CihuKn2u5foT6y', '2023-09-26 15:17:41'),
(3, 'Ayaan', 'ayaan@gmail.com', '$2y$10$YoxLNXwdzwj3zk6fKF3m1OXuabAJjGlWNrDs53Z6LtNdTSUkCUM1e', '2023-09-26 15:53:09'),
(6, 'Talib', 'talib@gmail.com', '$2y$10$LLvZD/TIXg7JBqLZ5s033u6N5Aqjp6n1CD6KCsdcWt23VSSRKWd9.', '2023-09-28 15:33:33'),
(8, 'Asfar', 'asfar@gmail.com', '$2y$10$UxYC7U1yU/ut7jWkPC4NnuXJW0dX/y2t69m/br5/rsiNzRze9y05i', '2023-09-30 09:47:13'),
(9, 'Zahid', 'zahid@gmail.com', '$2y$10$lYF/cCEw67cWqGm0anlzA.elNGkNmjbVLV1VjKBbDaP0LbjQpyTbC', '2023-09-30 10:47:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register_user` (`user_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `register_user` (`user_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`prod_id`) REFERENCES `products` (`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
