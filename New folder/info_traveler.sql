-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 15 Μάη 2021 στις 17:44:39
-- Έκδοση διακομιστή: 10.4.14-MariaDB
-- Έκδοση PHP: 7.4.11

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
  `uidUsers` text NOT NULL,
  `password` longtext NOT NULL,
  `email` longtext NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `hobby` varchar(255) DEFAULT NULL,
  `session` varchar(200) CHARACTER SET utf8 NOT NULL,
  `avatar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

-- INSERT INTO `users` (`id`, `uidUsers`, `pwdUsers`, `emailUsers`, `full_name`, `gender`, `age`, `address`, `hobby`) VALUES
-- (1, 'petros', '123', 'asdasda@gmail.com', NULL, NULL, NULL, NULL, NULL),
-- (2, 'eleni', '123123', 'asdasda@gmail.com', NULL, NULL, NULL, NULL, NULL),
-- (3, 'ka', '123214', 'asdasdas$gmail.com', NULL, NULL, NULL, NULL, NULL),
-- (4, 'kyrkos', '$2y$10$JzPh/Z9gQTpvJ0k5eG8P5u4XeLqi3rUERIIfF/LXxgtV5Pl0uemwi', 'petr@gasdas.com', NULL, NULL, NULL, NULL, NULL),
-- (5, 'petros1', '$2y$10$cOW6NRAGG.PsY6ODGuk03.h5dBgs3JVSM7AwvOpWyJV6MzcRykb3W', 'petros@gmail.com', NULL, NULL, NULL, NULL, NULL),
-- (6, 'petros12', '$2y$10$C6YEoehY.Q4ZTF2f1u0jteUQIlDmUslot5n5zonPghtmZ9fpY84Xm', 'petros1@gmail.com', NULL, NULL, NULL, NULL, NULL),
-- (7, 'asd', '$2y$10$m6Ke2oN8WXCW1kD2obHjdOV5JO5zT665NGYAvKy5Hhl6kG3PiITDS', 'asda@gmail.com', NULL, NULL, NULL, NULL, NULL),
-- (8, 'elenhka98', '$2y$10$OJ0mvllPhIRMfUot0lhA0.u71raNfcFTpKjSIOhjd.I9dVRolrynG', 'elenhka98@gmail.com', NULL, NULL, NULL, NULL, NULL),
-- (9, 'rwrwrw', '$2y$10$9QeAypTBfNaIL5NY9RUYwOmcelXA73YiNWFfo/QUTloLrPKlkmEKm', 'rwerw8@gmail.com', NULL, NULL, NULL, NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`H_id`) REFERENCES `hotels` (`Hotel_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
