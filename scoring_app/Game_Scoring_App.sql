-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2018 at 04:44 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `game_scoring_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL COMMENT 'Game Title',
  `description` text NOT NULL COMMENT 'Description of game and gameplay',
  `category_id` int(11) NOT NULL COMMENT 'Linked to category table',
  `status` varchar(50) NOT NULL COMMENT 'Is code for this game finished or not?',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `player_max` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `title`, `description`, `category_id`, `status`, `created`, `modified`, `player_max`) VALUES
(1, 'Sheriff of Nottingham', 'A 3-5 player bluffing game, where players take turns trying to sneak illegal goods past the sheriff. ', 1, 'In Progress', '2018-02-28 16:33:16', '2018-02-28 19:28:15', 5),
(2, '7 Wonders ', 'A 2-7 Card Drafting Game. ', 2, 'Not Started ', '2018-03-01 02:00:46', '2018-03-01 02:00:46', 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `sheriff_scores`
--

CREATE TABLE `sheriff_scores` (
  `id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `points` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sheriff_scores`
--

INSERT INTO `sheriff_scores` (`id`, `item`, `points`, `created`, `modified`) VALUES
(1, 'apples', 2, '0000-00-00 00:00:00', '2018-02-28 18:00:48'),
(2, 'bread', 3, '0000-00-00 00:00:00', '2018-02-28 18:01:00'),
(3, 'cheese', 3, '0000-00-00 00:00:00', '2018-02-28 18:01:49'),
(4, 'chickens', 4, '0000-00-00 00:00:00', '2018-02-28 18:02:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_categories`
--
ALTER TABLE `game_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sheriff_scores`
--
ALTER TABLE `sheriff_scores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `game_categories`
--
ALTER TABLE `game_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sheriff_scores`
--
ALTER TABLE `sheriff_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
