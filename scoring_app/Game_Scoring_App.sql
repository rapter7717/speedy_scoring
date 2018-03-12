-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2018 at 03:42 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `game_scoring_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `game_categories`
--

CREATE TABLE `game_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `game_count` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `description` text NOT NULL COMMENT 'Description ofthe mechanics of the category'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game_categories`
--

INSERT INTO `game_categories` (`id`, `name`, `game_count`, `created`, `modified`, `description`) VALUES
(1, 'Bluffing', 1, '2018-03-06 20:01:00', '2018-03-07 17:54:28', 'Players attempt to bluff or confuse their opponents to gain an advantage'),
(2, 'Drafting', 1, '2018-03-06 20:01:59', '2018-03-06 20:01:59', 'Hands are passed around the table and each player selects a card as the hands move. '),
(3, 'Hand Managment', 0, '0000-00-00 00:00:00', '2018-03-08 01:10:00', 'Unknown');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game_categories`
--
ALTER TABLE `game_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game_categories`
--
ALTER TABLE `game_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
