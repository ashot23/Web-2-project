-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Խնամորդը՝ 127.0.0.1
-- Generation Time: Մրտ 05, 2020թ. ժ. 13:07
-- Սպասարկչի տարբերակը՝ 10.1.37-MariaDB
-- PHP-ի տարբերակը՝ 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Տվյալների բազան՝ `shop`
--

-- --------------------------------------------------------

--
-- Աղյուսակի կառուցվածքը `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `description`, `data`) VALUES
(1, 'Windows 7 ', 80, './Img/windws 7 x32jpg.jpg', 'Windows 7 also includes several new multimedia features. One example is Play To,\" a program that allows you to stream audio and video to different computers or devices within your house. The HomeGroup feature makes it easy to share media files and other data between', '2020-03-05 10:54:15'),
(2, 'Windows 7 Home premium', 85, './Img/windows 7.jpg', 'Windows 7 Home premium several new multimedia features. One example is Play To,\" a program that allows you to stream audio and video to different computers or devices within your house. The HomeGroup feature makes it easy to share media files and other data', '2020-03-05 10:55:09'),
(3, 'Windows 10', 130, './Img/Windows 10.jpg', 'Windows 10 also includes several new multimedia features. One example is Play To,\" a program that allows you to stream audio and video to different computers or devices within your house. The HomeGroup feature makes it easy to share media files and other data', '2020-03-05 10:59:39'),
(4, 'Windows 8.1', 90, './Img/Windows 8.1.jpg', 'Windows 8.1  also includes several new multimedia features. One example is Play To,\" a program that allows you to stream audio and video to different computers or devices within your house. The HomeGroup feature makes it easy to share media files and other data', '2020-03-05 11:00:41'),
(9, 'Windows 7 Ultimate', 125, './Img/Windows Ultimate.jpg', 'Windows 7 Ultimate several new multimedia features. One example is Play To,\" a program that allows you to stream audio and video to different computers or devices within your house. The HomeGroup feature makes it easy to share media files and other data between', '2020-03-05 11:54:29'),
(10, 'Windows 95', 75, './Img/Windows 95.jpg', 'Windows 95 includes several new multimedia features. One example is Play To,\" a program that allows you to stream audio and video to different computers or devices within your house. The HomeGroup feature makes it easy to share media files and other data between', '2020-03-05 11:55:01'),
(11, 'Windows xp', 70, './Img/Windows xp.jpg', 'Windows xp includes several new multimedia features. One example is Play To,\" a program that allows you to stream audio and video to different computers or devices within your house. The HomeGroup feature makes it easy to share media files and other data between', '2020-03-05 11:55:19'),
(12, 'Windows vista', 79, './Img/Windows vista.jpg', 'Windows vista includes several new multimedia features. One example is Play To,\" a program that allows you to stream audio and video to different computers or devices within your house. The HomeGroup feature makes it easy to share media files and other data between', '2020-03-05 11:55:53');

--
-- Պահպանված աղյուսակների ցուցակագրերը
--

--
-- Աղյուսակի ցուցակագրերը `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT՝ պահպանված աղյուսակների համար
--

--
-- AUTO_INCREMENT՝ աղյուսակի համար `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
