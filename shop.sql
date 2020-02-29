-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Խնամորդը՝ 127.0.0.1
-- Generation Time: Փտվ 29, 2020թ. ժ. 22:33
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
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `description`, `data`) VALUES
(33, 'Windows 7 ', 130, './Img/windws 7 x32jpg.jpg', 'your computer on Windows 7 or 8, and if so it might be time to buy Windows 10. This isnt just a performance update, Windows 10 brings new features and security settings to your machine that are crucial to getting your work done in todays operating systems. From the ease of the', '2020-02-29 18:34:17'),
(34, 'Windows 10', 170, './Img/120-1206207_windows-10-pro-build-10240-iso-32-64.png.jpg', 'your computer on Windows 7 or 8, and if so it might be time to buy Windows 10. This isnt just a performance update, Windows 10 brings new features and security settings to your machine that are crucial to getting your work done in todays operating systems. From the ease of the', '2020-02-29 18:35:01'),
(35, 'Windows 7 Ultimate', 140, './Img/41l7nBP0gRL.jpg', 'your computer on Windows 7 or 8, and if so it might be time to buy Windows 10. This isnt just a performance update, Windows 10 brings new features and security settings to your machine that are crucial to getting your work done in todays operating systems. From the ease of the', '2020-02-29 18:36:15'),
(36, 'Windows 7 Home Premium', 120, './Img/windws 7.jpg', 'your computer on Windows 7 or 8, and if so it might be time to buy Windows 10. This isnt just a performance update, Windows 10 brings new features and security settings to your machine that are crucial to getting your work done in todays operating systems. From the ease of the', '2020-02-29 18:37:43'),
(37, 'Windows 8.1', 150, './Img/windows 8.1.jpg', 'your computer on Windows 7 or 8, and if so it might be time to buy Windows 10. This isnt just a performance update, Windows 10 brings new features and security settings to your machine that are crucial to getting your work done in todays operating systems. From the ease of the', '2020-02-29 20:04:54'),
(38, 'Windows xp', 25, './Img/windows xp.jpg', 'your computer on Windows 7 or 8, and if so it might be time to buy Windows 10. This isnt just a performance update, Windows 10 brings new features and security settings to your machine that are crucial to getting your work done in todays operating systems. From the ease of the', '2020-02-29 20:17:33'),
(39, 'Windows vista', 90, './Img/windows vista.jpg', 'your computer on Windows 7 or 8, and if so it might be time to buy Windows 10. This isnt just a performance update, Windows 10 brings new features and security settings to your machine that are crucial to getting your work done in todays operating systems. From the ease of the', '2020-02-29 20:33:56'),
(40, 'Windows 95', 35, './Img/windows 95.jpg', 'your computer on Windows 7 or 8, and if so it might be time to buy Windows 10. This isnt just a performance update, Windows 10 brings new features and security settings to your machine that are crucial to getting your work done in todays operating systems. From the ease of the', '2020-02-29 20:35:18');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
