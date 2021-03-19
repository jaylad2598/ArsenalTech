-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 05:19 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment`, `post_id`, `user_id`) VALUES
(1, 'Nice Blog to Understand', 3, 1),
(2, 'Easy to Understand', 3, 1),
(6, 'Topic is Interesting', 3, 2),
(9, 'Much more Info is require', 3, 3),
(18, 'gygikhiu', 2, 1),
(19, 'helolo jau', 3, 1),
(20, 'nice blog form reading', 3, 5),
(21, 'Hello', 8, 5),
(22, 'Hello Parth', 5, 1),
(23, 'your blog is easy to under stand', 5, 3),
(24, 'nkufhdvck ,', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_summary` varchar(255) NOT NULL,
  `post_description` mediumtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `create_date`, `post_title`, `post_summary`, `post_description`, `status`, `image`, `updated_date`, `user_id`) VALUES
(2, '2021-02-19', 'PHP', 'PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.', 'PHP is an open-source, interpreted, and object-oriented scripting language that can be executed at the server-side. PHP is well suited for web development. Therefore, it is used to develop web applications (an application that executes on the server and generates the dynamic page.\r\nPHP is an open-source, interpreted, and object-oriented scripting language that can be executed at the server-side. PHP is well suited for web development. Therefore, it is used to develop web applications (an application that executes on the server and generates the dynamic page.\r\nPHP is an open-source, interpreted, and object-oriented scripting language that can be executed at the server-side. PHP is well suited for web development. Therefore, it is used to develop web applications (an application that executes on the server and generates the dynamic page.', 'Active', 'download.jpg', '2021-02-19', 1),
(3, '2021-02-19', 'Ajax', 'It is easy to learn', 'AJAX tutorial covers concepts and examples of AJAX technology for beginners and professionals.\r\nAJAX is an acronym for Asynchronous JavaScript and XML. It is a group of inter-related technologies like JavaScript, DOM, XML, HTML/XHTML, CSS, XMLHttpRequest etc.\r\nAJAX allows you to send and receive data asynchronously without reloading the web page. So it is fast.\r\nAJAX allows you to send only important information to the server not the entire page. So only valuable data from the client side is routed to the server side. It makes your application interactive and faster.\r\nA synchronous request blocks the client until operation completes i.e. browser is unresponsive. In such case, javascript engine of the browser is blocked.\r\nAn asynchronous request doesn’t block the client i.e. browser is responsive. At that time, user can perform another operations also. In such case, javascript engine of the browser is not blocked.', 'Active', '1.jpg', '2021-02-23', 1),
(5, '2021-02-22', 'JAVA', 'Java is an object-oriented programming language. Everything in Java is associated with classes and objects, along with its attributes and methods.', 'Java is an object-oriented programming language.\r\nEverything in Java is associated with classes and objects, along with its attributes and methods. For example: in real life, a car is an object. The car has attributes, such as weight and color, and methods, such as drive and brake.\r\nA Class is like an object constructor, or a \"blueprint\" for creating objects.\r\nIn this page, we will learn about Java objects and classes. In object-oriented programming technique, we design a program using objects and classes.\r\nAn object in Java is the physical as well as a logical entity, whereas, a class in Java is a logical entity only.\r\nAn entity that has state and behavior is known as an object e.g., chair, bike, marker, pen, table, car, etc. It can be physical or logical (tangible and intangible). The example of an intangible object is the banking system.', 'Active', 'images.jpg', '2021-02-23', 2),
(8, '2021-02-23', 'Jquery', 'Jquery toggle function', 'jQuery toggle() Method, A function to execute every even time the element is clicked. The .toggle() method binds a handler for the click event, so the rules outlined for the triggering of  The .toggle() method animates the width, height, and opacity of the matched elements simultaneously. When these properties reach 0 after a hiding animation, the display style property is set to none to ensure that the element no longer affects the layout of the page.\r\n\r\n.toggle(), As of jQuery 1.4.3, an optional string naming an easing function may be used. Easing functions specify the speed at which the animation progresses at different​  The toggle() method toggles between hide() and show() for the selected elements. This method checks the selected elements for visibility. show() is run if an element is hidden. hide() is run if an element is visible - This creates a toggle effect.\r\njQuery click / toggle between two functions, jQuery has two methods called .toggle() . The other one does exactly what you want for click events. Note: It seems that at least since jQuery 1.7, this version of  The toggle() method was deprecated in jQuery version 1.8, and removed in version 1.9. The toggle() method attaches two or more functions to toggle between for the click event for the selected elements. When clicking on an element, the first specified function fires, when clicking again, the second function fires, and so on.', 'Active', 'download.jpg', '2021-02-23', 5);

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `like_id` int(11) NOT NULL,
  `like_post` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_like`
--

INSERT INTO `post_like` (`like_id`, `like_post`, `user_id`, `post_id`) VALUES
(7, 1, 1, 3),
(10, 1, 5, 8),
(11, 1, 3, 5),
(18, 1, 1, 8),
(21, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `replycomment`
--

CREATE TABLE `replycomment` (
  `reply_id` int(11) NOT NULL,
  `reply_comment` varchar(255) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `create_date` date NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` char(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `create_date`, `first_name`, `last_name`, `username`, `email`, `passwd`, `mobile`) VALUES
(1, '2021-02-19', 'Jay', 'Lad', 'jaylad5904', 'jaylad432@gmail.com', '$2y$10$NQ8Ghb1So98NhQz.lMhOHuK9fexIzHJpaRIBdei1T4ODMdGk8v/iG', '9601825142'),
(2, '2021-02-19', 'hitang', 'patel', 'hipatel', 'hitang@gmail.com', '$2y$10$NQ8Ghb1So98NhQz.lMhOHuK9fexIzHJpaRIBdei1T4ODMdGk8v/iG', '9865320147'),
(3, '2021-02-22', 'parth', 'patel', 'parth123', 'parth@gmail.com', '$2y$10$jIc.urIxs6vs0vaFK0jWweHYAkiziNUsmC37kWqMTAMNvJHCkNuci', '9587420158'),
(5, '2021-02-23', 'milind', 'solanki', 'msolanki', 'msolanki@gmail.com', '$2y$10$nmIG4YFTXSOQnQFCspV7HOGcH99JNU2qWTPpgXZ5DKoiQUuXaFAp2', '98653201475');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_like`
--
ALTER TABLE `post_like`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `replycomment`
--
ALTER TABLE `replycomment`
  ADD PRIMARY KEY (`reply_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post_like`
--
ALTER TABLE `post_like`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `replycomment`
--
ALTER TABLE `replycomment`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `post_like`
--
ALTER TABLE `post_like`
  ADD CONSTRAINT `post_like_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_like_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `replycomment`
--
ALTER TABLE `replycomment`
  ADD CONSTRAINT `replycomment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`),
  ADD CONSTRAINT `replycomment_ibfk_2` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`comment_id`),
  ADD CONSTRAINT `replycomment_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
