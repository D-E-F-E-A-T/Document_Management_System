SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE `dms_settings` (
  `id` int(11) NOT NULL,
  `s_key` varchar(255) NOT NULL,
  `s_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `dms_log_signin` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `useragent` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `dt_last` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `dms_note` (
  `id` int(255) NOT NULL,
  `title` longtext NOT NULL,
  `content` longtext NOT NULL,
  `dt_created` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `dt_last_edit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `archive` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `dms_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `dt_created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `dms_users` (`id`, `username`, `password`, `email`, `firstname`, `surname`, `dt_created`) VALUES
(1, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 'admin@yourmail.com', 'Administrator', 'of the System', 'null');

INSERT INTO `dms_settings` (`id`, `s_key`, `s_value`) VALUES
(1, 'color', '0c3866');

ALTER TABLE `dms_settings`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `dms_log_signin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `dms_note`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `dms_users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `dms_log_signin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `dms_note`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

ALTER TABLE `dms_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `dms_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
