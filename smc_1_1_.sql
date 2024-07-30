-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2024 at 02:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smc_1(1)`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `email` varchar(300) NOT NULL,
  `sentdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `message`, `email`, `sentdate`) VALUES
(165, 'Hello, I have a few questions about your online safety resources. Could you provide more information on the types of materials available for parents? Thank you!', 'may@gmail.com', '2024-07-29 18:10:45'),
(166, 'Hi there, I recently visited your website and found it very informative. However, I think it would be helpful to add a section specifically for tips on managing screen time. Just a suggestion. Thanks!', 'techwizard01@gmail.com', '2024-07-30 09:56:27'),
(167, 'Hello, I need assistance with understanding how to use the online safety tools provided on your site. Could someone provide a walkthrough or additional resources? I appreciate your help.', 'booklover22@gmail.com', '2024-07-30 09:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `howparenthelp`
--

CREATE TABLE `howparenthelp` (
  `id` int(11) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `messaging` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `howparenthelp`
--

INSERT INTO `howparenthelp` (`id`, `heading`, `messaging`, `date`, `image1`, `image2`) VALUES
(9, ' Empowering Your Child to Navigate the Digital World Safely', 'As children explore the online world, parents play a crucial role in guiding them toward safe and responsible internet use. Open communication is key—encourage your child to share their online experiences and concerns without fear of judgment. Setting clear boundaries and rules about screen time and acceptable online behavior helps establish a healthy digital routine. Parents should also educate themselves about the platforms their children use, ensuring they understand privacy settings and potential risks. By regularly discussing online safety topics, such as cyberbullying and protecting personal information, parents can empower their children to make informed decisions. Monitoring their digital activity, while respecting privacy, allows for early intervention if issues arise. By staying engaged and informed, parents can help their children build a positive and secure online presence.', '2024-07-29 16:58:42', 'parent-computer-1.jpg', 'parent-computer-2.avif'),
(10, 'Building Trust Through Open Conversations', 'Creating a safe online environment for children begins with trust and open communication. Encourage your child to talk about their online interactions and listen actively to their experiences. Discuss the importance of critical thinking when encountering new information or interacting with others online. By sharing your own online experiences and concerns, you can model positive behavior and create a space where your child feels comfortable seeking advice. This dialogue helps children understand the benefits and risks of digital interactions and empowers them to make safe choices. Building a foundation of trust ensures that your child knows they can rely on you for guidance and support.', '2024-07-29 16:59:08', 'parent-2-1.jpg', 'parent-2-2.jpg'),
(11, 'Staying Informed and Setting Boundaries', 'In the rapidly evolving digital landscape, staying informed about the latest apps and trends is essential for parents. Take the time to research and understand the platforms your child uses, including their features and potential safety concerns. Set clear, age-appropriate boundaries regarding screen time and acceptable content. Encourage a balanced lifestyle that includes offline activities and social interactions. Establish rules for sharing personal information and interacting with strangers online. Regularly review and update these guidelines as your child grows and digital environments change. By setting boundaries and staying informed, parents can create a safe framework for their child\'s online experiences.', '2024-07-29 17:01:59', 'parent-3-1.jpg', 'parent-3-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(8) NOT NULL,
  `city` varchar(200) NOT NULL,
  `subscription` int(11) NOT NULL,
  `profileImg` varchar(500) NOT NULL,
  `usertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `password`, `city`, `subscription`, `profileImg`, `usertype`) VALUES
(2, 'Admin', 'admin@smc.com', '12345', 'Yangon', 1, 'woman-1.png', 1),
(4, 'May Thu', 'may@gmail.com', '12345', 'Mandalay', 1, 'woman-2.jpg', 0),
(6, 'Shan', 'Shan@gmail.com', '12345', 'Yangon', 0, 'men.jpg', 1),
(24, 'techwizard01', 'techwizard01@gmail.com', '55115', 'San Francisco', 1, 'human-1.jpg', 0),
(25, 'booklover22', 'booklover22@gmail.com', '12345', 'New York', 0, 'woman-3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `newsimg` varchar(200) NOT NULL,
  `publishdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `title`, `content`, `newsimg`, `publishdate`) VALUES
(25, ' Innovative Parental Control Apps Gaining Popularity', 'As digital environments continue to evolve, innovative parental control apps are becoming essential tools for families. These apps provide a comprehensive suite of features designed to help parents monitor and manage their children\'s online activities. With capabilities like app blocking, location tracking, and screen time management, parents can customize settings to suit their family\'s needs. Additionally, many apps now offer insights into children\'s app usage patterns, allowing for more informed discussions about digital habits. By leveraging these tools, families can create a safer and more balanced online experience for their children.', 'parental-control.jpg', '2024-07-29 16:33:32'),
(26, ' Teen Social Media Trends: What Parents Should Know', 'A recent analysis of teen social media use has uncovered several emerging trends that parents should be aware of. Among these is the growing popularity of ephemeral content, where photos and videos disappear after a short period. This trend can pose challenges in monitoring interactions and understanding the context of communications. Additionally, anonymous messaging apps are on the rise, offering both privacy and potential risks of misuse. Parents are encouraged to engage in open dialogues with their teens about these platforms, discussing both their appeal and potential dangers. By staying informed, parents can better support their children in navigating these digital landscapes responsibly.', 'social-media.jpg', '2024-07-29 16:34:40'),
(27, ' Virtual Reality and Online Safety: Emerging Concerns', 'The increasing popularity of virtual reality (VR) technology brings with it a unique set of online safety challenges. Unlike traditional screens, VR immerses users in interactive environments that can blur the lines between reality and the virtual world. Concerns are growing around privacy, as VR systems often collect extensive data about users\' movements and interactions. Moreover, the immersive nature of VR can expose children to inappropriate content or encounters in virtual spaces. Experts recommend setting clear boundaries for VR use and educating children on how to recognize and respond to potential risks. By fostering awareness and establishing guidelines, families can enjoy the benefits of VR while minimizing its dangers.', 'virual.jpg', '2024-07-29 16:35:04'),
(28, 'Rise in Online Gaming Addiction Among Teens', 'Recent studies have highlighted a growing concern regarding online gaming addiction among teenagers. The immersive nature of modern games, combined with social and competitive elements, can lead to excessive screen time and potentially harmful behaviors. Signs of gaming addiction include neglect of responsibilities, withdrawal from social interactions, and an increased preoccupation with gaming. To address this issue, experts recommend setting clear gaming limits, encouraging a balanced lifestyle with diverse activities, and fostering open communication about the potential risks of excessive gaming. By implementing these strategies, parents can help their teens enjoy gaming responsibly while maintaining a healthy balance in their lives.\r\n', 'livestreaming.jpg', '2024-07-29 16:35:44'),
(29, 'New Privacy Regulations for Social Media Platforms', 'In response to increasing concerns about user privacy, new regulations have been introduced for social media platforms. These regulations mandate stricter controls on data collection and usage, requiring platforms to provide clearer privacy policies and more robust user consent mechanisms. Social media companies are now obligated to enhance transparency regarding how user data is handled and to offer more comprehensive privacy settings. For parents, this means that social media platforms are becoming more accountable for safeguarding their children\'s personal information. Staying updated on these changes can help you better understand and manage your child\'s privacy settings, ensuring a safer online experience.', 'law.jpg', '2024-07-29 16:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `serviceImg` varchar(1000) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `info`, `serviceImg`, `createdate`) VALUES
(18, 'Workshops and Webinars', 'Join our interactive workshops and webinars designed to empower families with the knowledge to navigate the digital world safely.', 'Our live sessions bring parents and children together to learn about internet safety, covering essential topics like privacy, cyberbullying, and digital citizenship. These engaging workshops provide practical strategies to stay safe online. Additionally, our interactive Q&A sessions allow participants to ask questions and receive personalized advice from industry experts, fostering an environment of open discussion and learning.', 'event-1.jpg', '2024-07-29 16:18:52'),
(19, 'Newsletter Subscriptions', 'Stay informed and ahead of online threats with our comprehensive newsletters tailored for your family\'s online safety.', 'Receive regular updates packed with the latest tips and trends on protecting your family online. Our newsletters deliver practical advice and insights into emerging threats, ensuring you are well-prepared for any digital challenges. Additionally, feature alerts keep you informed about new social media app developments or concerns, allowing you to adapt quickly to changes in the digital landscape.', 'latest-news.jpg', '2024-07-29 16:26:36'),
(20, 'Consultations', 'Access personalized guidance with our consultation services, offering expert advice tailored to your family\'s needs.\r\n', 'Book personalized advice sessions with our online safety experts, who provide tailored strategies to manage your child\'s online presence effectively. Our consultations offer detailed assessments of your family\'s social media use, highlighting areas for improvement and ensuring a safer online experience. By understanding your unique needs, we deliver actionable solutions to enhance your family\'s digital safety.', 'consultation.jpg', '2024-07-29 16:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `socialmediaapps`
--

CREATE TABLE `socialmediaapps` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `logo` varchar(1000) NOT NULL,
  `link` varchar(500) NOT NULL,
  `privacylink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `socialmediaapps`
--

INSERT INTO `socialmediaapps` (`id`, `name`, `logo`, `link`, `privacylink`) VALUES
(17, 'Facebook', 'Facebook_Logo_2023.png', 'https://www.facebook.com/', 'https://www.facebook.com/privacy/policy/'),
(18, 'Instagram', 'instragram.png', 'https://www.instagram.com/', 'https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fhelp.instagram.com%2F155833707900388'),
(19, 'SnapChat', 'snapchat.png', 'https://www.snapchat.com/', 'https://values.snap.com/privacy/privacy-policy'),
(21, 'Twitter', 'twitter.png', 'https://www.twitter.com/', ' https://support.twitter.com/forms/privacy'),
(22, 'Whatsapp', 'whatsapp.png', 'https://web.whatsapp.com/', 'https://www.whatsapp.com/legal/privacy-policy'),
(23, 'You-Tube', 'you-tube.png', 'https://www.youtube.com/hashtag/youtubelink', 'https://www.youtube.com/howyoutubeworks/user-settings/privacy/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `howparenthelp`
--
ALTER TABLE `howparenthelp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmediaapps`
--
ALTER TABLE `socialmediaapps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `howparenthelp`
--
ALTER TABLE `howparenthelp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `socialmediaapps`
--
ALTER TABLE `socialmediaapps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
