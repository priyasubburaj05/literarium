-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 02:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--
-- Creation: Oct 29, 2020 at 08:12 AM
--

CREATE TABLE `bookdetails` (
  `bookID` int(100) NOT NULL,
  `Bookname` varchar(100) NOT NULL,
  `Author` text NOT NULL,
  `Booklink` varchar(1000) NOT NULL,
  `Category` enum('Arts','Fantasy','biography','Science','Medicine','Plays','History','Law','commerce','textbooks') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `bookdetails`:
--

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`bookID`, `Bookname`, `Author`, `Booklink`, `Category`) VALUES
(4, 'Journey To the center of the Earth', 'Jules Verne', 'http://www.gutenberg.org/ebooks/18857', 'Fantasy'),
(5, 'General Knowledge 2020', 'Arihant publication', 'https://examtrix.com/arihant-general-knowledge-2020-pdf-free-download-in-english/', 'Law'),
(6, 'Engineering Mathematics', 'B.S.Grewal', 'https://www.pdfdrive.com/higher-engineering-mathematics-e194256784.html', 'Science'),
(7, 'Hillbilly Elegy: A Memoir of a Family and Culture in Crisis', 'J.D. Vance', 'https://www.pdfdrive.com/hillbilly-elegy-a-memoir-of-a-family-and-culture-in-crisis-e60737093.html', 'biography'),
(8, 'Just Mercy: A story of Justice and Redemption', 'Bryan Stevenson', 'https://www.pdfdrive.com/just-mercy-a-story-of-justice-and-redemption-e60737094.html', 'biography'),
(9, 'Napoleon: A Biography', 'Frank Mclynn', 'https://www.pdfdrive.com/napoleon-a-biography-e21619766.html', 'biography'),
(10, 'Mother Teresa - A Biography', 'Meg Greene', 'https://www.pdfdrive.com/mother-teresa-a-biography-e13873700.html', 'biography'),
(11, 'Textbook of Engineering Drawing', 'K Venkata Reddy', 'https://www.pdfdrive.com/textbook-of-engineering-drawing-e28918244.html', 'Arts'),
(12, 'Drawing the Head and Hands', 'Andrew Loomis', 'https://www.pdfdrive.com/drawing-the-head-and-hands-by-andrew-loomis-e10182633.html', 'Arts'),
(13, 'The art of teaching art', 'Deborah A. Rockman', 'https://www.pdfdrive.com/the-art-of-teaching-art-a-guide-for-teaching-and-learning-the-foundations-of-drawing-based-art-e158006619.html', 'Arts'),
(14, 'The Mathematics Of Financial Modeling And Investment Management', 'Sergio M. focardi & Frank', 'https://www.pdfdrive.com/the-mathematics-of-financial-modeling-and-investment-management-e23545854.html', 'Science'),
(15, 'Encyclopedia of Biology', 'Don Rittner & Timothi L. Mccabe', 'https://www.pdfdrive.com/encyclopedia-of-biology-e228531.html', 'Medicine'),
(16, ' Braiding Sweetgrass: Indigenous Wisdom, Scientific Knowledge and the Teachings of Plants', 'Robin Wall Kimerer', 'https://www.pdfdrive.com/braiding-sweetgrass-indigenous-wisdom-scientific-knowledge-and-the-teachings-of-plants-e60737077.html', 'Science'),
(17, 'Networking for Dummies--For Dummies; 7th Ed.', 'Doug Lowe', 'https://www.pdfdrive.com/networking-for-dummies-for-dummies-7th-ed-e9679716.html', 'Science'),
(18, 'political science', 'Unknown', 'https://www.pdfdrive.com/political-science-e20253839.html', 'Law'),
(19, 'Financial Accounting', 'Duchac/Reeve/Warren', 'https://www.pdfdrive.com/financial-accounting-e26877213.html', 'commerce'),
(20, 'The Rules of Work: A Definitive Code for Personal Success', 'Richard Templar', 'https://www.pdfdrive.com/the-rules-of-work-a-definitive-code-for-personal-success-e18626200.html', 'commerce'),
(21, 'Stock investing for Dummies.pdf', 'Paul Mladjanovic', 'https://www.pdfdrive.com/stock-investing-for-dummiespdf-e33414088.html', 'commerce'),
(22, 'How to Write a Business Plan', 'Mike Mckarwer', 'https://www.pdfdrive.com/how-to-write-a-business-plan-e18824346.html', 'commerce'),
(23, 'Wings of fire', 'A.P.J. Abdul Kalam', 'https://www.pdfdrive.com/wings-of-fire-e33405285.html', 'Plays'),
(24, 'The Great Gatsby', 'E. Scott Fitzgerald', 'https://www.pdfdrive.com/the-great-gatsby-e144535.html', 'Plays'),
(25, 'The Picture of Dorian Gray', 'Oscar Wilde', 'https://www.pdfdrive.com/the-picture-of-dorian-gray-e733501.html', 'Plays'),
(26, 'The Adventures of Huckleberry Finn', 'Mark Twain', 'https://www.pdfdrive.com/the-adventures-of-huckleberry-finn-e34463652.html', 'Plays'),
(27, 'Gulliver’s Travels', 'Jonathan Swift', 'https://www.pdfdrive.com/gullivers-travels-e5096047.html', 'Plays'),
(28, 'Anne of Green Gables', 'Lucy Maud Montgomey', 'https://www.pdfdrive.com/anne-of-green-gables-e580469.html', 'Plays'),
(33, 'If there is No tomorrow', 'Jennifer ', 'hagsdfjaskfhgklfg', 'Fantasy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookdetails`
--
ALTER TABLE `bookdetails`
  ADD PRIMARY KEY (`bookID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookdetails`
--
ALTER TABLE `bookdetails`
  MODIFY `bookID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
