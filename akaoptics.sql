-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2017 at 07:17 PM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.25-1+0~20160829102648.9+jessie~1.gbpbb5cad

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akaoptics`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `subtitle` varchar(80) NOT NULL,
  `image` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `title`, `subtitle`, `image`, `feedback`) VALUES
(1, 'Solar Telescope', 'Kitt Peak National Observatory, AZ, USA', '../public/assets/img/solarTelescope.jpg', 'Very large deformable mirror in use at the Kitt Peak National Observatory'),
(2, 'PW laser', 'JAEA, Nara, Japan', '../public/assets/img/pwLaser.jpg', 'PW laser in action at the Japan Atomic Energy Agency'),
(3, 'Sapphire laser system ALLS', 'INRS - institute national de la recherche scientifique, Quebec, Canada', '../public/assets/img/allsLaser.jpg', 'Sapphire ALLS laser system at the INRS'),
(4, 'Sapphire laser system ATLAS', 'Max-Plank-Institute fur Quantenoptic, Garhing, Germany', '../public/assets/img/atlasLaser.gif', 'Sapphire ATLAS system at the Max-Plank-Institute facilities'),
(5, 'Glass laser', 'LILU, Ecole Polytechnique, France', '../public/assets/img/glassLaser.jpeg', 'Glass laser at LILU');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `date` datetime NOT NULL,
  `place` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `place`, `description`, `link`) VALUES
(1, 'Photonics West', '2017-01-31 00:00:00', 'San Francisco', 'Moscone Center', 'http://spie.org//photonics-west.xml'),
(2, 'Laser World of Photonics', '2017-06-26 00:00:00', 'Munich', 'Messe München', 'http://www.enova-event.com/presentation');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subtitle` varchar(80) NOT NULL,
  `tagline` varchar(500) NOT NULL,
  `description` mediumtext NOT NULL,
  `picture_url` varchar(80) NOT NULL,
  `thumb_url` varchar(80) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `subtitle`, `tagline`, `description`, `picture_url`, `thumb_url`, `created_at`) VALUES
(1, 'Stack actuators deformable mirrors', 'for high order aberrations correction', 'Stack actuators deformable mirrors are the bestsellersfor high resolution imagingand in general for high order aberrations correction in laser & imaging (Zernike coefficient > 24).', 'Stack actuators deformable mirrors are made by gluing Piezoceramic columns – called actuators - to a thin sheet of glass, covered with a reflective coating. The mirror is bended when the actuators are polarized, the orientation of the bending depending on the voltage polarity. ', 'uploads/Stack_actuator_deformable_mirrors.png', '', '2017-01-13 15:46:08'),
(2, 'Wavefront sensors ', 'a very effective technology', 'Shack-Hartman wavefront sensors are the bestsellers for any wavefront application.', 'Shack-Hartman wavefront sensors are made by placing a lenslet array between a refracting telescope and a digital camera. The image is transferred to a software which is able to analyze the wavefront and to measure its aberration. ', 'uploads/Wavefront_sensor.png', '', '2016-12-29 19:24:43'),
(3, 'Very large deformable mirrors', '', 'Adaptive Optics is a key enabling technology for most High Power Lasers and Astronomical Telescopesand in general for all optical systems affected by wavefront aberration.', 'Adaptive optics closed loop systems are made by assembling our deformable mirrors, our wavefront sensors and our software.', 'uploads/Very_large_deformable_mirrors.png', '', '2016-12-29 18:57:18'),
(4, 'Bimorph deformable mirrors', 'a proven technology', 'Bimorph deformable mirrors are the bestsellers for high power lasersand in general for low order aberrations correction in laser & imaging (Zernike coefficient up to 24).', 'Bimorph Deformable Mirrors are made by gluing Piezoceramic Disks with Patterned Electrodes to a Thin Sheet of Glass, covered with a Reflective Coating. The mirror is bended when the electrodes are polarized, the orientation of the bending depending on the voltage polarity.', 'uploads/Bimorph_deformable_mirrors.png', '', '2016-12-29 18:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` int(11) NOT NULL,
  `item` tinyint(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `item`, `title`, `year`) VALUES
(1, 1, '(in RUS) A.V. Kudryashov, I.V.Galaktionov, \"Solid-State Lasers Aberrations\" - \"Аберрации в твердотельных лазерах\", New Technologies, 1, pp. 5-7, 2013.', '2013'),
(2, 1, 'A. Kudryashov, \"Adaptive Optics for Extremely High Power Lasers\", Proc. of 4th International Conference \"Smart materials, structures and systems\", Session Adaptive Optics, p.108, 2012.', '2012'),
(3, 2, 'A.Kudryashov, A.Rukosuev, V.Samarkin, \"Real-time high-speed adaptive optical system with atmospheric turbulence\", Proc. of 15th International Conference on Laser Optics, p.47, 2012.', '2012'),
(4, 3, '(in RUS) A.V.Kudryashov, V.V.Samarkin, Yu.V.Sheldakova, A.G.Alexandrov, \"Analys of wavefront correction method while use of Shack-Hartmann wavefront sensor as an element of adaptive optical system\" - \"Анализ способа компенсации волнового фронта при исполь', '2012');

-- --------------------------------------------------------

--
-- Table structure for table `specifications`
--

CREATE TABLE `specifications` (
  `id` int(11) NOT NULL,
  `type` varchar(80) NOT NULL,
  `title` varchar(255) NOT NULL,
  `data` text NOT NULL,
  `icon` varchar(80) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specifications`
--

INSERT INTO `specifications` (`id`, `type`, `title`, `data`, `icon`, `product_id`, `date`) VALUES
(1, 'basic', 'HIGH ORDER CORRECTION', 'Stack actuator deformable mirrors can have a high density of actuators with a small inter-actuator space, so they are well adapted to high order aberration corrections (Z >>24).', 'cogs', 1, '0000-00-00 00:00:00'),
(2, 'basic', 'LARGE STROKE', 'Piezoelectric actuators have the largest stroke – standard is 10 µm and the largest inter-actuator stroke – standard is 2 µm.', 'cogs', 1, '0000-00-00 00:00:00'),
(3, 'basic', 'HIGH SPEED', 'Stack actuator deformable mirrors can operate at the highest speed - up to 1 kHz and have a large 1st resonance frequency - up to 15 kHz.', 'cogs', 1, '0000-00-00 00:00:00'),
(4, 'basic', 'VERSATILE', 'The technology can use any kind of substrate with any kind of coating, so it can cover the full spectral range from X-Rays to far IR.', 'cogs', 1, '0000-00-00 00:00:00'),
(5, 'details', 'Active diameter', '10 - 100 mm', '', 1, '0000-00-00 00:00:00'),
(6, 'details', 'Number of actuators', 'Up to 100', '', 1, '0000-00-00 00:00:00'),
(7, 'details', 'Actuator size', 'Up to 10 mm', '', 1, '0000-00-00 00:00:00'),
(8, 'details', 'Inter actuator stroke', 'Up to 2 µm', '', 1, '0000-00-00 00:00:00'),
(9, 'details', 'Frequency', 'Up to 1 kHz (1st resonance @ 15 kHz)', '', 1, '0000-00-00 00:00:00'),
(10, 'details', 'Mirror Substrate', 'Glass, Silicon, Copper, Piezoceramic…', '', 1, '0000-00-00 00:00:00'),
(11, 'details', 'Coating', 'Metallic, Dielectric, Laser Damage up to 20 J/cm2 (ns pulses)', '', 1, '0000-00-00 00:00:00'),
(12, 'details', 'Spectral range', '122 nm (Far UV) to 10.6 µm (far IR)', '', 1, '0000-00-00 00:00:00'),
(13, 'basic', 'THE HIGHEST SENSITIVITY', 'Our Shack-Hartman wavefront sensors are equipped with the best digital cameras available on the market, to fit perfectly your application.', 'cogs', 2, '0000-00-00 00:00:00'),
(14, 'basic', 'WIDE SPECTRAL RANGE', 'By using the proper digital camera and adapted optics, our Shack-Hartman wavefront sensors can cover a wide spectral range.', 'cogs', 2, '0000-00-00 00:00:00'),
(15, 'basic', 'HIGH SPEED', 'A Shack-Hartman wavefront sensor equipped with a good camera and good software is able to operate at very high speeds.', 'cogs', 2, '0000-00-00 00:00:00'),
(16, 'details', 'Spectral range', '122 nm (Far UV) to 10.6 µm (far IR)', '', 2, '0000-00-00 00:00:00'),
(17, 'details', 'Aperture Diameter', '4 – 600 mm', '', 2, '0000-00-00 00:00:00'),
(18, 'details', 'Microlens diameter', 'Down to 150 µm', '', 2, '0000-00-00 00:00:00'),
(19, 'details', 'Dynamic range', 'Up to 50 lambda', '', 2, '0000-00-00 00:00:00'),
(20, 'details', 'Sensitivity', 'Down to lambda/150 rms', '', 2, '0000-00-00 00:00:00'),
(21, 'details', 'Frequency', 'Up to 2 kHz', '', 2, '0000-00-00 00:00:00'),
(22, 'details', 'Interface', 'USB, IEEE1394, GIG-E', '', 2, '0000-00-00 00:00:00'),
(23, 'title', '', 'We have an experience with a large range of stack actuator deformable mirrors', '', 1, '2016-12-20 10:33:48'),
(24, 'title', '', 'Shack-Hartman wavefront sensors are the bestsellers for any wavefront application.', '', 2, '2016-12-20 13:59:04'),
(25, 'details', 'SPECTRAL RANGE', '122 nm (Far UV) to 10.6 µm (far IR)', '', 5, '2016-12-20 15:59:27'),
(26, 'details', 'Aperture Diameter', '10-50 mm', '', 5, '2016-12-20 16:02:36'),
(27, 'details', 'Frequency', 'Up to 30 Hz', '', 5, '2016-12-20 16:03:06'),
(28, 'details', 'Interface', 'USB, IEEE1394, GIG-E', '', 5, '2016-12-20 16:03:42'),
(29, 'basic', 'Designed for the most challenging applications', 'High Power Lasers - Standard Lasers - Synchrotron Light Beams - Telescopes for Astronomy & Surveillance - Microscopes for Life Science', 'cogs', 3, '2016-12-20 16:10:29'),
(30, 'basic', 'Manufactured by us', 'We manufacture our adaptive optics ourselves and we have more than 160 systems operating worldwide.', 'cogs', 3, '2016-12-20 16:14:12'),
(31, 'basic', 'Tailored to meet your needs', 'Our systems will be designed by our engineers to meet your needs both in terms of specifications and budget.', 'cogs', 3, '2016-12-20 16:14:41'),
(32, 'basic', 'Thermal-Expansion-Proof', 'Bimorph deformable mirrors are bulky devices, so thermal expansion can only produce low order aberrations, which are easily compensated when the mirror operates.', 'cogs', 4, '2016-12-20 16:17:22'),
(33, 'basic', 'Water Cooled', 'One of our unique features: our bimorph deformable mirrors can be water cooled when used with very high power lasers, to eliminate the risk of thermal damage up to 50 kW/cm2.', 'cogs', 4, '2016-12-20 16:17:51'),
(34, 'basic', 'Robust', 'Bimorph deformable mirrors will continue to correct perfectly the aberrations even if up to 10% of their electrodes are lost. \r\nYet we have never experience such a loss …', 'cogs', 4, '2016-12-20 16:18:21'),
(35, 'basic', 'Competitive', 'The manufacturing process is very simple, so the price of bimorph deformable mirrors is low.', 'cogs', 4, '2016-12-20 16:18:50'),
(36, 'basic', 'Versatile', 'The technology can use any kind of substrate with any kind of coating, so it can cover the full spectral range from X-Rays to far IR.', 'cogs', 4, '2016-12-20 16:19:22'),
(37, 'details', 'Active Diameter', '10 – 600 mm', '', 4, '2016-12-20 16:21:43'),
(38, 'details', 'Number of electrodes', 'Up to 500', '', 4, '2016-12-20 16:22:40'),
(39, 'details', 'Electrode size', 'Down to 10 mm', '', 4, '2016-12-20 16:23:05'),
(40, 'details', 'Stroke', 'Up to +/- 40 µm or +/- 2 m curvature', '', 4, '2016-12-20 16:23:36'),
(41, 'details', 'Frequency', 'Up to 500 Hz (1st resonance @ 5 kHz)', '', 4, '2016-12-20 16:24:01'),
(42, 'details', 'Electrode pattern', 'Any design', '', 4, '2016-12-20 16:24:35'),
(43, 'details', 'Mirror Substrate', 'Glass, Silicon, Copper, Piezoceramic…', '', 4, '2016-12-20 16:25:00'),
(44, 'details', 'Coating', 'Metallic, Dielectric, Laser Damage up to 20 J/cm2 (ns pulses)', '', 4, '2016-12-20 16:25:30'),
(45, 'details', 'Spectral range', '122 nm (Far UV) to 10.6 µm (far IR)', '', 4, '2016-12-20 16:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(80) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role`, `created_at`, `username`) VALUES
(1, 'Lionel', '', 'lionel@test.com', '$2y$10$5mTdACuXXbQ5RLjEgjyBTOyNUPsO76HU8IATm9GZtykzk6AW2kWZG', 'admin', '2017-03-13 13:30:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `website_name` varchar(255) NOT NULL,
  `website_contact_email` varchar(255) NOT NULL,
  `website_contact_phone` varchar(80) NOT NULL,
  `website_contact_fax` varchar(80) NOT NULL,
  `website_contact_street` varchar(80) NOT NULL,
  `website_contact_zip` varchar(80) NOT NULL,
  `website_contact_city` varchar(80) NOT NULL,
  `website_contact_country` varchar(80) NOT NULL,
  `website_company_siren` varchar(80) NOT NULL,
  `website_logo` varchar(80) NOT NULL,
  `website_description` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `website_name`, `website_contact_email`, `website_contact_phone`, `website_contact_fax`, `website_contact_street`, `website_contact_zip`, `website_contact_city`, `website_contact_country`, `website_company_siren`, `website_logo`, `website_description`) VALUES
(1, 'Aka Optics', 'contact@akaoptics.com', '+33 4 91 05 50 86', '+33 4 91 05 50 87', '2 rue Marc Donadille', '13013', 'Marseille', 'France', '790 049 985 RCS Marseille', 'uploads/img0.jpg', 'Mirror deformable website best of the best in the world');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specifications`
--
ALTER TABLE `specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `specifications`
--
ALTER TABLE `specifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
