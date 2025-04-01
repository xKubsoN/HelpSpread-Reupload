-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Wersja serwera:               10.4.18-MariaDB - mariadb.org binary distribution
-- Serwer OS:                    Win64
-- HeidiSQL Wersja:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Zrzucanie danych dla tabeli helpspread.helpspread_wolontariat: ~4 rows (około)
/*!40000 ALTER TABLE `helpspread_wolontariat` DISABLE KEYS */;
INSERT INTO `helpspread_wolontariat` (`id`, `letterid`, `wolontariat_firma`, `wolontariat_opisk`, `wolontariat_opisd`, `wolontariat_wiek`, `wolontariat_miejsca`, `wolontariat_datap`, `wolontariat_datak`, `wolontariat_adresn`, `wolontariat_adresu`, `wolontariat_adresk`, `wolontariat_adresm`, `wolontariat_godzk`, `wolontariat_godzp`, `status`, `reason`) VALUES
	(1, 'a', 'Szerocy S.A.', 'halohalohalohalohalohalohaloha', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Molestie at elementum eu facilisis sed odio morbi quis commodo. Eros in cursus turpis massa tincidunt dui ut ornare lectus. Tristique nulla aliquet enim tortor at auctor urna nunc. Commodo elit at imperdiet dui accumsan sit. At tempor commodo ullamcorper a lacus. Convallis a cras semper auctor neque vitae tempus. Consequat semper viverra nam libero justo laoreet. Lectus arcu bibendum at varius vel pharetra vel turpis nunc. Vitae tortor condimentum lacinia quis vel eros donec. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor.', 14, '5', '2022-10-21', '2022-10-21', 23, 'Strzelecka', '44-200', 'Rybnik', '15:00:00', '24:00:00', 'pending', NULL),
	(2, 'b', 'ZST Rybnik', 'testtesttest', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Molestie at elementum eu facilisis sed odio morbi quis commodo. Eros in cursus turpis massa tincidunt dui ut ornare lectus. Tristique nulla aliquet enim tortor at auctor urna nunc. Commodo elit at imperdiet dui accumsan sit. At tempor commodo ullamcorper a lacus. Convallis a cras semper auctor neque vitae tempus. Consequat semper viverra nam libero justo laoreet. Lectus arcu bibendum at varius vel pharetra vel turpis nunc. Vitae tortor condimentum lacinia quis vel eros donec. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor.', 18, '12', '2023-05-21', '2023-05-28', 5, 'Tadeusza Kościuszki ', '44-200', 'Rybnik', '18:00:00', '21:00:00', 'active', NULL),
	(3, 'c', 'Firma', 'siusiusiu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Molestie at elementum eu facilisis sed odio morbi quis commodo. Eros in cursus turpis massa tincidunt dui ut ornare lectus. Tristique nulla aliquet enim tortor at auctor urna nunc. Commodo elit at imperdiet dui accumsan sit. At tempor commodo ullamcorper a lacus. Convallis a cras semper auctor neque vitae tempus. Consequat semper viverra nam libero justo laoreet. Lectus arcu bibendum at varius vel pharetra vel turpis nunc. Vitae tortor condimentum lacinia quis vel eros donec. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor.', 15, '4', '2023-12-06', '2023-12-06', 18, 'Gliwicka', '44-200', 'Rybnik', '11:00:00', '16:00:00', 'denied', 'kurwa jebac zydopw'),
	(4, 'd', 'Test', 'nigganigganigga', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Molestie at elementum eu facilisis sed odio morbi quis commodo. Eros in cursus turpis massa tincidunt dui ut ornare lectus. Tristique nulla aliquet enim tortor at auctor urna nunc. Commodo elit at imperdiet dui accumsan sit. At tempor commodo ullamcorper a lacus. Convallis a cras semper auctor neque vitae tempus. Consequat semper viverra nam libero justo laoreet. Lectus arcu bibendum at varius vel pharetra vel turpis nunc. Vitae tortor condimentum lacinia quis vel eros donec. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor.', 12, '33', '2023-12-06', '2023-12-06', 19, 'Wyzwolenia', '44-200', 'Rybnik', '11:00:00', '16:00:00', 'expired', NULL);
/*!40000 ALTER TABLE `helpspread_wolontariat` ENABLE KEYS */;

-- Zrzucanie danych dla tabeli helpspread.users: ~2 rows (około)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `letterid`, `users_nazwisko`, `users_imie`, `users_dataur`) VALUES
	(1, 'a', 'kuba', 'szczesny', '2022-11-10'),
	(2, 'b', 'jakub', 'wysluch', '2022-11-10');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
