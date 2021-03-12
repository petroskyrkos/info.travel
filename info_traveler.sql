-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 12 Μαρ 2021 στις 12:44:38
-- Έκδοση διακομιστή: 10.4.17-MariaDB
-- Έκδοση PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `info.traveler`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `booking`
--

CREATE TABLE `booking` (
  `B_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `User_Fname` text NOT NULL,
  `User_Lname` text NOT NULL,
  `H_id` int(11) NOT NULL,
  `Check_in` date NOT NULL,
  `Check_out` date NOT NULL,
  `sum` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `country`
--

CREATE TABLE `country` (
  `C_id` int(11) NOT NULL,
  `C_Name` text NOT NULL,
  `C_Language` longtext NOT NULL,
  `C_Covid-19` tinyint(1) NOT NULL,
  `C_Phones_Numb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hotels`
--

CREATE TABLE `hotels` (
  `Hotel_id` int(11) NOT NULL,
  `Hotel_Name` text NOT NULL,
  `Country` longtext NOT NULL,
  `Stars` int(5) NOT NULL,
  `Services` int(10) NOT NULL,
  `Price` double NOT NULL,
  `Rooms` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `User_name` text NOT NULL,
  `password` longtext NOT NULL,
  `email` longtext NOT NULL,
  `Last_Name` text NOT NULL,
  `First_Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `User_name`, `password`, `email`, `Last_Name`, `First_Name`) VALUES
(1, 'petros', '123', 'asdasda@gmail.com', '', ''),
(2, 'eleni', '123123', 'asdasda@gmail.com', '', ''),
(3, 'ka', '123214', 'asdasdas$gmail.com', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Age` int(11) NOT NULL,
  `Location` text NOT NULL,
  `Hobby` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `user_profile`
--

INSERT INTO `user_profile` (`id`, `Gender`, `Age`, `Location`, `Hobby`) VALUES
(1, 'm', 26, '8ess', 'sex');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`B_id`),
  ADD KEY `H_id` (`H_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Ευρετήρια για πίνακα `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`C_id`);

--
-- Ευρετήρια για πίνακα `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`Hotel_id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `booking`
--
ALTER TABLE `booking`
  MODIFY `B_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `country`
--
ALTER TABLE `country`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `hotels`
--
ALTER TABLE `hotels`
  MODIFY `Hotel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT για πίνακα `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`H_id`) REFERENCES `hotels` (`Hotel_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `users` (`id`);

--
-- Περιορισμοί για πίνακα `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
