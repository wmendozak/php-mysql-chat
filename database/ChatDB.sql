-- Database: `ChatDB`

-- Tables

CREATE TABLE IF NOT EXISTS `Chat` (
  `Id` int(10) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Message` text,
  `CreatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `Account` (
  `Id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` int(100) NOT NULL,
  `PhoneNumber` varchar(100) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Indexes

ALTER TABLE `Chat` ADD PRIMARY KEY (`Id`);

ALTER TABLE `Account` ADD PRIMARY KEY (`Id`);

-- AUTO_INCREMENT

ALTER TABLE `Chat` MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Account` MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;
