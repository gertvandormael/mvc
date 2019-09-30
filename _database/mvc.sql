-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2019 at 11:46 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `article` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `img_store` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `img_page` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `description_header` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `description` text COLLATE utf8mb4_bin NOT NULL,
  `description2` text COLLATE utf8mb4_bin NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `article`, `brand`, `product`, `category`, `img_store`, `img_page`, `description_header`, `description`, `description2`, `price`) VALUES
(1, '0149912372', 'Fender', 'Vintera \'50s Stratocaster', 'electric', '/public/img/guitar/electric/1_Fender_Vintera_Stratocaster_blue_1.jpg', '/public/img/guitar/electric/1_Fender_Vintera_Stratocaster_blue_2.jpg', 'Vintage style for the modern era', 'For players who want the style and sound of Fender\'s golden era, we created the Vintera \'50s Stratocaster. Equipped with the coveted features that defined the decade (including period-accurate neck profile and hardware, along with re-voiced pickups) this guitar has all of the chime and articulation that made the Stratocaster a legend.', 'For authentic, vintage-style tone we recreated the trio of single-coil Stratocaster pickups to sound more like the originals. Crystalline and bell-like, they have the crisp, articulate tone that put Fender on the musical map. The updated \"Soft V\"-shaped neck has a 7.25\"-radius maple fingerboard with 21 vintage-style frets for classic playing feel. A vintage-style, six-point synchronized tremolo and vintage-style tuning machines provide original-era aesthetics, rock-solid performance and tuning stability. Other features include vintage-style strap buttons, 5-way pickup switching and the traditional Strat control layout. Includes deluxe gig bag.', '859'),
(2, '0149852340', 'Fender', 'Vintera \'50s Telecaster', 'electric', '/public/img/guitar/electric/2_Fender_Vintera_Telecaster_red_1.jpg', '/public/img/guitar/electric/2_Fender_Vintera_Telecaster_red_2.jpg', 'Vintage style for the modern era\r\n\r\n', 'For players who want the style and sound of Fender\'s golden era, we created the Vintera \'50s Telecaster. Equipped with the coveted features that defined the decade (including period-accurate neck profile and playing feel, along with re-voiced pickups) this guitar has all of the bite and twang that made the Telecaster a legend.', 'For authentic, vintage-style tone we recreated our favorite set of \'50s Telecaster pickups. Twangy and articulate, they have the crisp, snarling sound that put Fender on the musical map. The thick, fat-shouldered \"Early 50s U\"-shaped neck has a 7.25\"-radius maple fingerboard with 21 vintage-style frets for classic playing feel. A vintage-style Tele bridge with three brass barrel saddles gives this Telecaster it\'s characteristic twang, while vintage-style tuning machines provide original-era aesthetics, rock-solid performance and tuning stability. Other features include vintage-style strap buttons, chrome hardware and four-bolt neck plate. Includes deluxe gig bag.', '859'),
(3, '0149633304', 'Fender', 'Vintera \'60s Jazz Bass', 'bass', '/public/img/bass/3_Fender_Vintera_Jazz_1.jpg', '/public/img/bass/3_Fender_Vintera_Jazz_2.jpg', 'Vintage style for the modern era\r\n\r\n', 'For players who want the style and sound of Fender\'s golden era, we created the Vintera \'60s Jazz Bass. Equipped with the coveted features that defined the decade (including period-accurate neck profile and playing feel, along with recreated \'60s pickups) this bass has all of the growl that made the J Bass famous.', 'For authentic, original-era tone we re-voiced the pair of single-coil Jazz Bass pickups to sound more like the originals. Gritty and growling, they have the tone that made the J Bass popular. The \"Mid \'60s C\"-shaped neck has a 7.25\"-radius fingerboard with 20 vintage-style frets for classic playing feel. A vintage-style, 4-saddle bridge with threaded saddles and reverse, open-gear tuning machines provide original-era aesthetics, rock-solid performance and tuning stability. Other features include 34\" scale length, chrome hardware and 4-bolt neck plate. Includes a deluxe gig bag.', '999'),
(4, '0110120800', 'Fender', 'American Original \'60s Stratocaster', 'electric', '/public/img/guitar/electric/4_Fender_American_Original_1.jpg', '/public/img/guitar/electric/4_Fender_American_Original_2.jpg', '', 'A period of change, both for Fender and for pop culture as a whole, the 1960s saw the Strat mellow slightly as it grew up. The white pickguard was updated to mint green, and the fingerboard was switched from the original maple to rosewood, adding a smoother note to the Strat\'s clear, articulate voice. The American Original \'60s Stratocaster keeps these refinements intact while adding modern feel and pickup switching to the iconic instrument that helped birth guitar rock as we know it.', '', '1899'),
(5, '0149742328', 'Fender', 'Vintera \'70s Telecaster Thinline', 'electric', '/public/img/guitar/electric/5_Fender_Vintera_Telecaster_1.jpg', '/public/img/guitar/electric/5_Fender_Vintera_Telecaster_2.jpg', 'Vintage style for the modern era', 'For players who want the style and sound of Fender\'s classic years, we created the Vintera \'70s Telecaster Thinline. Equipped with the coveted features that defined the decade (including period-accurate neck profile and playing feel, along with re-voiced pickups) this guitar has all of the growl and twang that made the Telecaster a legend.', 'For authentic, original-era tone we re-voiced the pair of single-coil Jazz Bass pickups to sound more like the originals. Gritty and growling, they have the tone that made the J Bass popular. The \"Mid \'60s C\"-shaped neck has a 7.25\"-radius fingerboard with 20 vintage-style frets for classic playing feel. A vintage-style, 4-saddle bridge with threaded saddles and reverse, open-gear tuning machines provide original-era aesthetics, rock-solid performance and tuning stability. Other features include 34\" scale length, chrome hardware and 4-bolt neck plate. Includes a deluxe gig bag.', '1149');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
