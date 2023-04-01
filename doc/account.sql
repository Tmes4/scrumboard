SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `account`
--
DROP DATABASE IF EXISTS `account`;
CREATE DATABASE IF NOT EXISTS `account` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `account`;

--
-- Tabel: `users`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`username` varchar(255) NOT NULL,
`password` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;


INSERT INTO `user` (`username`, `password`, `name`) VALUES
('user1', '$2y$10$0tOrk80PfP5UUOXvF5iDzO.36e.7IWJv2YxTX0Zme94RbnK4TBrre', '3mo user1');


DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`title` varchar(255) NOT NULL,
`gebruiker` varchar(255) NOT NULL,
`beschrijving` text NOT NULL,
`afdeling` varchar(255) NOT NULL,
`status` varchar(255) NOT NULL DEFAULT 'todo',
`tijd` date DEFAULT NULL,
`deadline` date DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
