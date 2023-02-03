-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2023 at 07:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berken_nl`
--

-- --------------------------------------------------------

--
-- Table structure for table `accurates`
--

CREATE TABLE `accurates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accurates`
--

INSERT INTO `accurates` (`id`, `title`, `short_description`, `images`, `created_at`, `updated_at`) VALUES
(2, 'Clear information Provided', 'Always clear explanations, for products and advice', 'images/accurates/1754545235766462.svg', NULL, NULL),
(3, 'The best choice is at the top', 'Compare and choose from a wide range', 'images/accurates/1754545383930089.svg', NULL, NULL),
(4, 'Answers to all your questions', 'Our experts are at your service every day', 'images/accurates/1754545506269434.svg', NULL, NULL),
(5, 'Access to smart tools', 'Useful in making the right choice', 'images/accurates/1754548835754134.svg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bmis`
--

CREATE TABLE `bmis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender_label` varchar(255) NOT NULL,
  `gender_caption` text NOT NULL,
  `age_label` varchar(255) NOT NULL,
  `age_caption` text NOT NULL,
  `weight_label` varchar(255) NOT NULL,
  `height_label` varchar(255) NOT NULL,
  `height_caption` text NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `button_details` text NOT NULL,
  `content` text NOT NULL,
  `result_content` text NOT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_keywords` text DEFAULT NULL,
  `seo_meta` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bmis`
--

INSERT INTO `bmis` (`id`, `gender_label`, `gender_caption`, `age_label`, `age_caption`, `weight_label`, `height_label`, `height_caption`, `button_text`, `button_details`, `content`, `result_content`, `seo_title`, `seo_keywords`, `seo_meta`, `created_at`, `updated_at`) VALUES
(1, 'Gender', '<p>asdasd</p>', 'Age', '<p>asdasd</p>', 'weight', 'Height', '<h1>asdasd</h1>', 'Calculate Bmi', 'The body mass index (BMI) calculator estimates the amount of body fat a person has in relation to age, height, and weight.', '<h2><strong>WHAT IS MY BMI?</strong></h2>\r\n\r\n<p>calculate BMI? You can easily do this online, we calculate the formula based on your height and weight. This has never been easier.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><em><strong>HOW DO YOU CALCULATE YOUR BMI?</strong></em></h2>\r\n\r\n<ol>\r\n	<li>Enter your gender, age, weight and height to get the most accurate BMI possible.</li>\r\n	<li>Check whether your BMI is a healthy BMI or whether you are under or overweight. Your ideal weight based on your age and height is also indicated.</li>\r\n	<li>Don&#39;t have a healthy BMI? Then take action to lose weight, gain weight or just go for a healthier lifestyle!</li>\r\n</ol>\r\n\r\n<p>It is important to indicate your gender because of course different BMI values ​​apply for adults than for children and there is also a difference between men and women.</p>\r\n\r\n<p><a href=\"#\">- Calculate BMI woman</a><a href=\"#\">- Calculate BMI man</a><a href=\"#\">- Calculate BMI child</a></p>\r\n\r\n<p>BMI stands for Body Mass Index, it is an alternative name for the quetelet index (QI). It is about the ratio between your height and your weight, on the basis of which you can determine whether you are overweight or underweight. Of course, with a few kilos too much you do not immediately suffer from obesity and being underweight does not immediately lead to annorexia, although it is important to keep an eye on the limits.</p>\r\n\r\n<p>Curious about your BMI when you are pregnant or do you want to regularly make sure that you can make a calculation based on the formula? Your BMI is a snapshot, it is important to interpret it based on, for example, your current stage of life. Are you seriously overweight or severely underweight? In those cases, it is wise to inform a doctor or a specialist in the field of nutrition and/or sports about your weight and height. There is a chance that you will have to take immediate action to do something about this and to bring your health to safety.</p>\r\n\r\n<h2><strong>UNDERWEIHT OR OVERWEIGHT (ANNOREXIA OR OBESITY)</strong></h2>\r\n\r\n<p>Do you have a BMI much lower than 18 and do you not immediately see opportunities to do something about it? In that case, you are seriously underweight, it is important to seek help immediately. A weight that is too low is just as unhealthy as a weight that is too high. In addition, there is a chance that someone with a body mass index much lower than 18 will suffer from psychological and physical complaints. You can help someone by discussing it, in the end we all want to arrive at a healthy weight.</p>\r\n\r\n<p>Do you have a BMI over 40? A BMI higher than 40 means sickly overweight, so it is important to contact a doctor immediately. Only in this way is it possible to take action in time and do something about it. Such a degree of overweight can indicate morbid obesity, which goes one step further than if someone has a BMI between 30 and 40. Would you even reach a BMI of 50 or higher? Then there is super obesity and the weight can have direct harmful effects on health.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>BMI WHEN YOU ARE PREGNANT</strong></h2>\r\n\r\n<p>Calculate your BMI during your pregnancy? Of course you will gain weight during pregnancy, something that you should take into account when calculating your BMI. However, some women gain weight much more than others, which is why it is definitely worth calculating your BMI when you are pregnant. You can then continue to fill in your height and weight, just like the weight you had before you became pregnant. Therefore, calculate it regularly, so that you can fall back on that data before you become pregnant and you gain more weight.</p>\r\n\r\n<p>Do you want to calculate your index while you are pregnant? Then it is also important to indicate when you are due. Based on this, it is possible to apply the Rosso curve, on the basis of which you can clearly see where the weight gain during pregnancy comes from. In this way you can also calculate your BMI during pregnancy and you are well aware of your weight in relation to your height.</p>\r\n\r\n<h2>BMI FORMULA</h2>\r\n\r\n<p>Curious about the formula? It is originally the QI formula, which we have come to know as the formula for calculating BMI. We calculate the Quetelet Index in kilograms divided by the height squared. The formula is not difficult in that regard:</p>\r\n\r\n<p>BMI = mass in kilograms / height in meters squared</p>\r\n\r\n<p>Suppose you want to calculate the BMI of someone who weighs 90 kilograms and is 175 centimeters tall. In that case you can fill in the formula as follows: BMI = 90 kilograms / (1.75m x 1.75m) = 90 kilograms / 3.0625 = 29.39</p>\r\n\r\n<p>As you can see from the calculation, this person is actually overweight. The calculation yields a BMI of 29, which puts the person close to being seriously overweight. There is still only talk of &#39;overweight&#39;, but in this case it is important to be careful.</p>\r\n\r\n<p>Do you regularly want to know the BMI and are you curious how this changes based on your height or weight? As you get taller you can gain weight, which is no problem for your body mass index. The moment your weight would remain the same and you increase in height, you ensure that your BMI will decrease. Do you want to calculate the BMI when your height has remained the same and you have gained weight? You then divide your higher weight by a height that has remained the same, so that you will notice that a higher score comes out.</p>\r\n\r\n<p>You can determine your BMI to see how you are currently doing, by doing this regularly you can map a trend and see how your weight and height are developing over time. That&#39;s especially interesting when you start to grow, just like when your body stops. You can calculate your BMI before you hit the growth spurt, then calculate your BMI during the growth spurt, and finally calculate your BMI when you reach your final height. From that moment on, based on your index, it is important to maintain a healthy weight for your height.</p>', 'result', 'Bmi Calculator', 'asdasd', 'asdasdasd', NULL, '2022-12-23 08:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `bmi_results`
--

CREATE TABLE `bmi_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `result_title` varchar(255) NOT NULL,
  `result_content` text NOT NULL,
  `bmi_from` varchar(255) NOT NULL,
  `bmi_to` varchar(255) NOT NULL,
  `most_read` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bmi_results`
--

INSERT INTO `bmi_results` (`id`, `result_title`, `result_content`, `bmi_from`, `bmi_to`, `most_read`, `created_at`, `updated_at`) VALUES
(1, 'You are normal for your height', '<p>With a lower, healthy weight, you have a smaller chance of certain diseases. In any case, make sure that you do not gain any further weight and try to lose some weight. Do you also have too much belly fat?. Then it is extra important to lose weight because with a large belly size your risk of certain diseases is increased. Adjusting your eating habits is now an important step. Contact the dietitian or general practitioner. They will help you with this. With a lower, healthy weight, you have a smaller chance of certain diseases. In any case, make sure that you do not gain any further weight and try to lose some weight. Do you also have too much belly fat?. Then it is extra important to lose weight because with a large belly size your risk of certain diseases is increased. Adjusting your eating habits is now an important step. Contact the dietitian or general practitioner.</p>', '18', '25', '1', '2022-12-23 01:14:21', NULL),
(2, 'You are too light for your height', '<p>With a lower, healthy weight, you have a smaller chance of certain diseases. In any case, make sure that you do not gain any further weight and try to lose some weight. Do you also have too much belly fat?. Then it is extra important to lose weight because with a large belly size your risk of certain diseases is increased. Adjusting your eating habits is now an important step. Contact the dietitian or general practitioner. They will help you with this. With a lower, healthy weight, you have a smaller chance of certain diseases. In any case, make sure that you do not gain any further weight and try to lose some weight. Do you also have too much belly fat?. Then it is extra important to lose weight because with a large belly size your risk of certain diseases is increased. Adjusting your eating habits is now an important step. Contact the dietitian or general practitioner.</p>', '10', '16', '1', '2022-12-23 01:14:21', NULL),
(3, 'You are too heavy for your height', '<p>With a lower, healthy weight, you have a smaller chance of certain diseases. In any case, make sure that you do not gain any further weight and try to lose some weight. Do you also have too much belly fat?. Then it is extra important to lose weight because with a large belly size your risk of certain diseases is increased. Adjusting your eating habits is now an important step. Contact the dietitian or general practitioner. They will help you with this. With a lower, healthy weight, you have a smaller chance of certain diseases. In any case, make sure that you do not gain any further weight and try to lose some weight. Do you also have too much belly fat?. Then it is extra important to lose weight because with a large belly size your risk of certain diseases is increased. Adjusting your eating habits is now an important step. Contact the dietitian or general practitioner.</p>', '25', '35', '1', '2022-12-23 01:14:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `calculator_details`
--

CREATE TABLE `calculator_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender_label` varchar(255) NOT NULL,
  `gender_caption` text NOT NULL,
  `age_label` varchar(255) NOT NULL,
  `age_caption` text NOT NULL,
  `weight_label` varchar(255) NOT NULL,
  `height_label` varchar(255) NOT NULL,
  `height_caption` text NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `button_details` text NOT NULL,
  `content` text NOT NULL,
  `calculator_id` int(11) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_meta` text NOT NULL,
  `seo_keywords` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calculator_lists`
--

CREATE TABLE `calculator_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `calculator_name` varchar(255) NOT NULL,
  `link` varchar(500) NOT NULL,
  `icon` varchar(1500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calculator_lists`
--

INSERT INTO `calculator_lists` (`id`, `calculator_name`, `link`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Bmi Calculator', '/bmi-calculator', 'https://svgshare.com/i/paf.svg', NULL, NULL),
(2, 'Vat calculator', '/vat-calculator', 'https://svgshare.com/i/paJ.svg', NULL, NULL),
(6, 'work-income', '/work-income', 'https://svgshare.com/i/pbs.svg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'BMI', 'bmi', '2022-12-22 05:39:56', NULL),
(2, 'VAT', 'vat', '2022-12-22 05:40:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salutation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `question` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `salutation`, `email`, `name`, `company`, `question`, `created_at`, `updated_at`) VALUES
(5, 'lord', 'admin@admin.com', 'riad', 'sdfsdf', 'sdfsdfs', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_infos`
--

CREATE TABLE `contact_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_infos`
--

INSERT INTO `contact_infos` (`id`, `content`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, 'We are best reached via WhatsApp and chat Feel free to contact us if you want to know more. We are there today until 18:00.', 'images/contact-image/1755368709501898.svg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dropdown_categories`
--

CREATE TABLE `dropdown_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `status` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dropdown_categories`
--

INSERT INTO `dropdown_categories` (`id`, `name`, `status`) VALUES
(1, 'Background Information', '1'),
(2, 'What cost', '1'),
(3, 'News Blog', '1'),
(4, 'Business/B2B information', '1'),
(5, 'Current Calculations', '1'),
(6, 'Service Pages', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dropdown_menus`
--

CREATE TABLE `dropdown_menus` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `url` varchar(1500) NOT NULL,
  `display_order` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dropdown_menus`
--

INSERT INTO `dropdown_menus` (`id`, `cat_id`, `name`, `url`, `display_order`) VALUES
(29, 1, 'menu1', '/', '0'),
(30, 2, 'menu2', '/', '0'),
(31, 3, 'menu3', '/', '0'),
(32, 4, 'menu 4', '/', '0'),
(33, 5, 'menu', '/', '0'),
(34, 6, 'Home', '/', '0'),
(35, 1, 'menu2', '/', '0');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `calculator_id` bigint(20) UNSIGNED NOT NULL,
  `sort_order` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `content`, `calculator_id`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'How to calculate BMI', 'by weight and height', 1, '0', '2022-12-22 05:45:09', '2022-12-22 05:45:16'),
(2, 'Overweight BMI of 27', 'Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.\r\n\r\nCheck out the Figma design system based on the utility classes from Tailwind CSS and components from Flowbite.', 1, '0', '2022-12-23 08:41:21', NULL),
(3, 'Vat calculator importance', 'Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.\r\n\r\nCheck out the Figma design system based on the utility classes from Tailwind CSS and components from Flowbite.', 2, '0', '2022-12-23 08:41:21', NULL),
(4, 'How to calculate VAT', 'by weight and height', 2, '0', '2022-12-22 05:45:09', '2022-12-22 05:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `featured_calculators`
--

CREATE TABLE `featured_calculators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_calculator` bigint(20) UNSIGNED NOT NULL,
  `featured_calculator` varchar(255) NOT NULL,
  `sort_order` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featured_calculators`
--

INSERT INTO `featured_calculators` (`id`, `main_calculator`, `featured_calculator`, `sort_order`, `created_at`, `updated_at`) VALUES
(3, 2, '1', '0', NULL, NULL),
(7, 2, '5', '1', NULL, NULL),
(9, 1, '5', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_reviews`
--

CREATE TABLE `home_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `review_title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `ratings` varchar(255) NOT NULL,
  `active_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_reviews`
--

INSERT INTO `home_reviews` (`id`, `review_title`, `short_description`, `ratings`, `active_status`, `created_at`, `updated_at`) VALUES
(2, 'Clear, transparent and affordable for more than 20 years', 'With your support and that of our 1 million customers per year, we continue to find the best deals for you. And we keep the market sharp.', '9.5', '1', '2023-01-10 01:18:21', '2023-01-10 01:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `knowledges`
--

CREATE TABLE `knowledges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnill_image` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `table_of_contents` text NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `seo_keywords` text NOT NULL,
  `seo_meta` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `knowledges`
--

INSERT INTO `knowledges` (`id`, `title`, `short_description`, `content`, `slug`, `thumbnill_image`, `category_id`, `table_of_contents`, `banner_image`, `seo_keywords`, `seo_meta`, `created_at`, `updated_at`) VALUES
(4, 'Pulbic lease can become a man', 'Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?', '<p>Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?</p>', 'pulbic-lease-can-become-a-man-1', 'images/knowledge/1754187063516452.jpg', '4', 'dfg', 'images/knowledge-banner/1754183948581870.jpg', '', '', '2023-01-05 06:02:58', '2023-01-05 06:52:28'),
(5, 'A better BMI via Youtube: channels with sporting', 'Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?', '<p>Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?</p>\r\n\r\n<p>Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?</p>', 'a-better-bmi-via-youtube-channels-with-sporting', 'images/knowledge/1754184052107508.jpg', '5', 'ddfg', 'images/knowledge-banner/1754184052107979.jpg', '', '', '2023-01-05 06:04:36', NULL),
(6, 'Stoptober:young people have started smoking more in corona crisis', 'Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?', '<p>Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?</p>', 'stoptoberyoung-people-have-started-smoking-more-in-corona-crisis', 'images/knowledge/1754187020122872.jpg', '4', 'sdfsdf', 'images/knowledge-banner/1754187020123679.jpg', '', '', '2023-01-05 06:51:47', NULL),
(7, 'Private lease can become a child of the bill in case of rising fixed costs', 'Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?', '<p>Many people suffer from corona kilos, with the cookie jar and a filled candy cabinet within reach, the temptation to snack quickly is very great. There are several reasons why people are snacking more during this time. One of those reasons is that people start eating boredom or lack of regularity. This is because people believe that snacks should be eaten when watching television. Another reason is that people are going to reward themselves by being forced to sit at home. They are having a hard time, want to make it cozy and also think that they have earned something delicious after another long day of working at home.</p>', 'private-lease-can-become-a-child-of-the-bill-in-case-of-rising-fixed-costs', 'images/knowledge/1754187141515060.jpg', '4', 'asda', 'images/knowledge-banner/1754187141515235.jpg', '', '', '2023-01-05 06:53:43', NULL),
(8, 'Playtober: old people have started smoking more in corona', 'Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?', '<p>Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?</p>', 'playtober-old-people-have-started-smoking-more-in-corona', 'images/knowledge/1754187222802422.jpg', '4', 'dfdg', 'images/knowledge-banner/1754187222802676.jpg', '', '', '2023-01-05 06:55:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_categories`
--

CREATE TABLE `knowledge_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `knowledge_categories`
--

INSERT INTO `knowledge_categories` (`id`, `category_name`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'Insurance', 'insurance', '2023-01-05 04:01:24', NULL),
(5, 'Health Care', 'health-care', '2023-01-05 04:01:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(58, '2014_10_12_000000_create_users_table', 1),
(59, '2014_10_12_100000_create_password_resets_table', 1),
(60, '2019_08_19_000000_create_failed_jobs_table', 1),
(61, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(62, '2022_12_06_100801_create_tags_table', 1),
(63, '2022_12_06_111020_create_categories_table', 1),
(64, '2022_12_06_140106_create_social_links_table', 1),
(66, '2022_12_07_113848_create_seo_data_tables', 1),
(67, '2022_12_07_124943_create_faqs_table', 1),
(69, '2022_12_13_060835_create_calculator_details_table', 1),
(71, '2022_12_22_103143_create_featured_calculators_table', 1),
(72, '2022_12_22_110755_create_calculator_lists_table', 1),
(73, '2022_12_08_082514_create_bmis_table', 2),
(75, '2022_12_22_130137_create_bmi_results_table', 3),
(77, '2022_12_07_061404_create_news_table', 4),
(78, '2022_12_13_131014_create_vats_table', 5),
(79, '2023_01_05_094049_create_knowledge_categories_table', 6),
(82, '2023_01_05_101441_create_knowledges_table', 7),
(84, '2023_01_09_103836_crate_strategic_table', 8),
(85, '2023_01_09_103904_crate_strategics_table', 8),
(86, '2023_01_09_105132_create_accurates_table', 8),
(88, '2023_01_10_064435_create_home_reviews_table', 9),
(89, '2023_01_10_104325_create_jobs_table', 10),
(91, '2023_01_10_111011_create_contact_table', 11),
(92, '2023_01_10_111730_create_contacts_table', 12),
(94, '2023_01_11_080841_create_ratings_table', 13),
(95, '2023_01_18_132517_create_contact_infos_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnill_image` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `tag_id` varchar(255) NOT NULL,
  `table_of_contents` text NOT NULL,
  `hot_article` tinyint(4) NOT NULL,
  `highlights` tinyint(4) NOT NULL,
  `seo_keywords` text DEFAULT NULL,
  `seo_meta` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `short_description`, `content`, `slug`, `thumbnill_image`, `banner_image`, `category_id`, `tag_id`, `table_of_contents`, `hot_article`, `highlights`, `seo_keywords`, `seo_meta`, `created_at`, `updated_at`) VALUES
(2, 'A better BMI via Youtube: channels with sporting', 'Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?', '<h2>CORONA KILOS</h2>\r\n\r\n<p>Many people suffer from corona kilos, with the cookie jar and a filled candy cabinet within reach, the temptation to snack quickly is very great. There are several reasons why people are snacking more during this time. One of those reasons is that people start eating boredom or lack of regularity. This is because people believe that snacks should be eaten when watching television. Another reason is that people are going to reward themselves by being forced to sit at home. They are having a hard time, want to make it cozy and also think that they have earned something delicious after another long day of working at home.</p>\r\n\r\n<p>In addition, stress can play a major role. There are people who feel stressed by combining working from home and home schooling, or because they are insecure about the situation. Many people eat less due to stress. There are also people who try to reduce their tension by eating more. All that food is of course not good for your body and certainly affects your BMI, are you curious what your BMI is? Calculate it here.</p>', 'a-better-bmi-via-youtube-channels-with-sporting-1', 'images/news/1754089310673164.jpg', 'images/news-banner/1754089310673389.jpg', '1,2', '1,2', '<ul class=\"flex flex-col\">\n                                    <li class=\"\" x-data=\"accordion(1)\">\n                                        <h4 @click=\"handleClick()\" class=\"flex items-center justify-between w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer\">\n                                            <span>Table of contents</span>\n\n                                            <svg :class=\"handleRotate()\" class=\"fill-current text-[#2B313B] h-7 w-7 md:h-7 md:w-7 transform transition-transform duration-500 rotate-90 rotate-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">\n                                                <path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>\n                                            </svg>\n                                        </h4>\n                                        <div x-ref=\"tab\" :style=\"handleToggle()\" class=\"font-normal text-xs border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all\" style=\"max-height: 61px\">\n                                            <p class=\"mb-2 font-normal text-xs text-[#6C7A93]\">\n                                            </p><ul>\n\n\n\n                                                <li><a href=\"#\" class=\"block w-full font-normal text-sm text-[#2B313B] hover:text-[#0052fe] transition-all border-b border-[#F5F8FF] p-4\">Dynamic Content</a></li>\n\n                                            </ul>\n\n\n                                            <p></p>\n                                        </div>\n                                    </li>\n                                </ul>', 0, 1, '', '', '2023-01-04 04:20:30', '2023-01-04 05:11:04'),
(4, 'Stoptober:young people have started smoking more in corona crisis', 'Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?', '<p>Many people suffer from corona kilos, with the cookie jar and a filled candy cabinet within reach, the temptation to snack quickly is very great. There are several reasons why people are snacking more during this time. One of those reasons is that people start eating boredom or lack of regularity. This is because people believe that snacks should be eaten when watching television. Another reason is that people are going to reward themselves by being forced to sit at home. They are having a hard time, want to make it cozy and also think that they have earned something delicious after another long day of working at home.</p>', 'stoptoberyoung-people-have-started-smoking-more-in-corona-crisis', 'images/news/1754091735588558.jpg', 'images/news-banner/1754091735589315.jpg', '1,2', '1,2', '<ul class=\"flex flex-col\">\n                                    <li class=\"\" x-data=\"accordion(1)\">\n                                        <h4 @click=\"handleClick()\" class=\"flex items-center justify-between w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer\">\n                                            <span>Table of contents</span>\n\n                                            <svg :class=\"handleRotate()\" class=\"fill-current text-[#2B313B] h-7 w-7 md:h-7 md:w-7 transform transition-transform duration-500 rotate-90 rotate-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">\n                                                <path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>\n                                            </svg>\n                                        </h4>\n                                        <div x-ref=\"tab\" :style=\"handleToggle()\" class=\"font-normal text-xs border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all\" style=\"max-height: 61px\">\n                                            <p class=\"mb-2 font-normal text-xs text-[#6C7A93]\">\n                                            </p><ul>\n\n\n\n                                                <li><a href=\"#\" class=\"block w-full font-normal text-sm text-[#2B313B] hover:text-[#0052fe] transition-all border-b border-[#F5F8FF] p-4\">Dynamic Content</a></li>\n\n                                            </ul>\n\n\n                                            <p></p>\n                                        </div>\n                                    </li>\n                                </ul>', 1, 1, '', '', '2023-01-04 05:37:16', NULL),
(5, 'Private lease can become a child of the bill in case of rising fixed costs', 'Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?', '<p>Many people suffer from corona kilos, with the cookie jar and a filled candy cabinet within reach, the temptation to snack quickly is very great. There are several reasons why people are snacking more during this time. One of those reasons is that people start eating boredom or lack of regularity. This is because people believe that snacks should be eaten when watching television. Another reason is that people are going to reward themselves by being forced to sit at home. They are having a hard time, want to make it cozy and also think that they have earned something delicious after another long day of working at home.</p>', 'private-lease-can-become-a-child-of-the-bill-in-case-of-rising-fixed-costs', 'images/news/1754091922814719.jpg', 'images/news-banner/1754091922815369.jpg', '2', '1', '<ul class=\"flex flex-col\">\n                                    <li class=\"\" x-data=\"accordion(1)\">\n                                        <h4 @click=\"handleClick()\" class=\"flex items-center justify-between w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer\">\n                                            <span>Table of contents</span>\n\n                                            <svg :class=\"handleRotate()\" class=\"fill-current text-[#2B313B] h-7 w-7 md:h-7 md:w-7 transform transition-transform duration-500 rotate-90 rotate-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">\n                                                <path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>\n                                            </svg>\n                                        </h4>\n                                        <div x-ref=\"tab\" :style=\"handleToggle()\" class=\"font-normal text-xs border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all\" style=\"max-height: 61px\">\n                                            <p class=\"mb-2 font-normal text-xs text-[#6C7A93]\">\n                                            </p><ul>\n\n\n\n                                                <li><a href=\"#\" class=\"block w-full font-normal text-sm text-[#2B313B] hover:text-[#0052fe] transition-all border-b border-[#F5F8FF] p-4\">Dynamic Content</a></li>\n\n                                            </ul>\n\n\n                                            <p></p>\n                                        </div>\n                                    </li>\n                                </ul>', 0, 0, '', '', '2023-01-04 05:40:15', NULL),
(6, 'independer at Radar:joris krekhof', 'Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?', '<p>Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?</p>', 'independer-at-radarjoris-krekhof', 'images/news/1754092213122694.jpg', 'images/news-banner/1754092213123104.jpg', '2', '1', '<ul class=\"flex flex-col\">\n                                    <li class=\"\" x-data=\"accordion(1)\">\n                                        <h4 @click=\"handleClick()\" class=\"flex items-center justify-between w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer\">\n                                            <span>Table of contents</span>\n\n                                            <svg :class=\"handleRotate()\" class=\"fill-current text-[#2B313B] h-7 w-7 md:h-7 md:w-7 transform transition-transform duration-500 rotate-90 rotate-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">\n                                                <path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>\n                                            </svg>\n                                        </h4>\n                                        <div x-ref=\"tab\" :style=\"handleToggle()\" class=\"font-normal text-xs border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all\" style=\"max-height: 61px\">\n                                            <p class=\"mb-2 font-normal text-xs text-[#6C7A93]\">\n                                            </p><ul>\n\n\n\n                                                <li><a href=\"#\" class=\"block w-full font-normal text-sm text-[#2B313B] hover:text-[#0052fe] transition-all border-b border-[#F5F8FF] p-4\">Dynamic Content</a></li>\n\n                                            </ul>\n\n\n                                            <p></p>\n                                        </div>\n                                    </li>\n                                </ul>', 0, 0, '', '', '2023-01-04 05:44:52', NULL),
(7, 'A healty Bmi Leads to a healthy Heart', 'Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?', '<p>Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?</p>', 'a-healty-bmi-leads-to-a-healthy-heart', 'images/news/1754092316492051.jpg', 'images/news-banner/1754092316492810.jpg', '1', '2', '<ul class=\"flex flex-col\">\n                                    <li class=\"\" x-data=\"accordion(1)\">\n                                        <h4 @click=\"handleClick()\" class=\"flex items-center justify-between w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer\">\n                                            <span>Table of contents</span>\n\n                                            <svg :class=\"handleRotate()\" class=\"fill-current text-[#2B313B] h-7 w-7 md:h-7 md:w-7 transform transition-transform duration-500 rotate-90 rotate-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">\n                                                <path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>\n                                            </svg>\n                                        </h4>\n                                        <div x-ref=\"tab\" :style=\"handleToggle()\" class=\"font-normal text-xs border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all\" style=\"max-height: 61px\">\n                                            <p class=\"mb-2 font-normal text-xs text-[#6C7A93]\">\n                                            </p><ul>\n\n\n\n                                                <li><a href=\"#\" class=\"block w-full font-normal text-sm text-[#2B313B] hover:text-[#0052fe] transition-all border-b border-[#F5F8FF] p-4\">Dynamic Content</a></li>\n\n                                            </ul>\n\n\n                                            <p></p>\n                                        </div>\n                                    </li>\n                                </ul>', 0, 0, '', '', '2023-01-04 05:46:30', NULL),
(8, 'Avoid Junk Food to stay healthy', 'Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?', '<p>Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?</p>', 'avoid-junk-food-to-stay-healthy', 'images/news/1754092515441087.jpg', 'images/news-banner/1754092515441459.jpg', '1', '1', '<ul class=\"flex flex-col\">\n                                    <li class=\"\" x-data=\"accordion(1)\">\n                                        <h4 @click=\"handleClick()\" class=\"flex items-center justify-between w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer\">\n                                            <span>Table of contents</span>\n\n                                            <svg :class=\"handleRotate()\" class=\"fill-current text-[#2B313B] h-7 w-7 md:h-7 md:w-7 transform transition-transform duration-500 rotate-90 rotate-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">\n                                                <path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>\n                                            </svg>\n                                        </h4>\n                                        <div x-ref=\"tab\" :style=\"handleToggle()\" class=\"font-normal text-xs border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all\" style=\"max-height: 61px\">\n                                            <p class=\"mb-2 font-normal text-xs text-[#6C7A93]\">\n                                            </p><ul>\n\n\n\n                                                <li><a href=\"#\" class=\"block w-full font-normal text-sm text-[#2B313B] hover:text-[#0052fe] transition-all border-b border-[#F5F8FF] p-4\">Dynamic Content</a></li>\n\n                                            </ul>\n\n\n                                            <p></p>\n                                        </div>\n                                    </li>\n                                </ul>', 0, 0, '', '', '2023-01-04 05:49:40', NULL),
(9, 'Pulbic lease can become a man', 'Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?', '<p>Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?</p>', 'pulbic-lease-can-become-a-man', 'images/news/1754092691959930.jpg', 'images/news-banner/1754092691960494.jpg', '2', '1', '<ul class=\"flex flex-col\">\n                                    <li class=\"\" x-data=\"accordion(1)\">\n                                        <h4 @click=\"handleClick()\" class=\"flex items-center justify-between w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer\">\n                                            <span>Table of contents</span>\n\n                                            <svg :class=\"handleRotate()\" class=\"fill-current text-[#2B313B] h-7 w-7 md:h-7 md:w-7 transform transition-transform duration-500 rotate-90 rotate-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">\n                                                <path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>\n                                            </svg>\n                                        </h4>\n                                        <div x-ref=\"tab\" :style=\"handleToggle()\" class=\"font-normal text-xs border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all\" style=\"max-height: 61px\">\n                                            <p class=\"mb-2 font-normal text-xs text-[#6C7A93]\">\n                                            </p><ul>\n\n\n\n                                                <li><a href=\"#\" class=\"block w-full font-normal text-sm text-[#2B313B] hover:text-[#0052fe] transition-all border-b border-[#F5F8FF] p-4\">Dynamic Content</a></li>\n\n                                            </ul>\n\n\n                                            <p></p>\n                                        </div>\n                                    </li>\n                                </ul>', 0, 0, '', '', '2023-01-04 05:52:28', NULL),
(10, 'Playtober: old people have started smoking more in corona', 'Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?', '<p>Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?Due to the corona virus, has everyone at some point been introduced to the advantages and disadvantages of working from home? But nobody really knows what it does to your health. Is it positive or negative?</p>', 'playtober-old-people-have-started-smoking-more-in-corona-1', 'images/news/1754093333457390.jpg', 'images/news-banner/1754093333458127.jpg', '2', '1', '<ul class=\"flex flex-col\">\n                                    <li class=\"\" x-data=\"accordion(1)\">\n                                        <h4 @click=\"handleClick()\" class=\"flex items-center justify-between w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer\">\n                                            <span>Table of contents</span>\n\n                                            <svg :class=\"handleRotate()\" class=\"fill-current text-[#2B313B] h-7 w-7 md:h-7 md:w-7 transform transition-transform duration-500 rotate-90 rotate-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">\n                                                <path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>\n                                            </svg>\n                                        </h4>\n                                        <div x-ref=\"tab\" :style=\"handleToggle()\" class=\"font-normal text-xs border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all\" style=\"max-height: 61px\">\n                                            <p class=\"mb-2 font-normal text-xs text-[#6C7A93]\">\n                                            </p><ul>\n\n\n\n                                                <li><a href=\"#\" class=\"block w-full font-normal text-sm text-[#2B313B] hover:text-[#0052fe] transition-all border-b border-[#F5F8FF] p-4\">Dynamic Content</a></li>\n\n                                            </ul>\n\n\n                                            <p></p>\n                                        </div>\n                                    </li>\n                                </ul>', 1, 1, '', '', '2023-01-04 06:02:40', '2023-01-09 08:25:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `populer_calculators`
--

CREATE TABLE `populer_calculators` (
  `id` int(11) NOT NULL,
  `calculator_id` int(11) NOT NULL,
  `display_order` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `populer_calculators`
--

INSERT INTO `populer_calculators` (`id`, `calculator_id`, `display_order`) VALUES
(12, 1, '4'),
(13, 2, '5'),
(14, 6, '3');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `calculator_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ratings` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `user_ip` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `calculator_id`, `name`, `email`, `ratings`, `message`, `user_ip`, `created_at`, `updated_at`) VALUES
(10, '2', 'riad', 'admin@admin.com', '5', 'nice vat one', '103.151.61.129', '2023-01-11 06:33:16', NULL),
(11, '1', 'riad', 'admin@admin.com', '5', 'nice vat one', '103.151.61.129', '2023-01-11 06:33:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_data_tables`
--

CREATE TABLE `seo_data_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `seo_keywords` text NOT NULL,
  `seo_meta` text NOT NULL,
  `structured_data` text DEFAULT NULL,
  `page` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_data_tables`
--

INSERT INTO `seo_data_tables` (`id`, `title`, `seo_keywords`, `seo_meta`, `structured_data`, `page`, `created_at`, `updated_at`) VALUES
(1, 'Compares | Bereken.nl', 'compares,keywords', 'seo_meta', NULL, 'compares', NULL, NULL),
(2, 'Knowledge - Bereken.nl', 'asda', 'asdasd', 'asdasd', 'knowledge', '2023-01-10 07:22:41', '2023-01-10 07:22:41'),
(3, 'Calculations - Bereken.nl', 'keywords', 'seo_meta', NULL, 'calculations', '2023-01-10 07:29:05', '2023-01-10 07:29:05'),
(4, 'Contact - Bereken.nl', 'seo,keywords', 'seo,meta', NULL, 'contacts', '2023-01-10 07:53:14', '2023-01-10 07:53:14');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `links` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `links`, `platform`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com', 'facebook', '2023-01-09 04:05:43', '2023-01-09 04:05:43'),
(2, 'https://www.twitter.com', 'twitter', '2023-01-09 04:07:36', '2023-01-09 04:07:36'),
(3, 'https://www.youtube.com', 'youtube', '2023-01-09 04:16:44', '2023-01-09 04:16:44'),
(4, 'https://www.instagram.com', 'instagram', '2023-01-09 04:16:59', '2023-01-09 04:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'News', 'news', '2022-12-22 05:39:49', NULL),
(2, 'BMI', 'bmi', '2022-12-24 04:37:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$Kr8qNYtdZqy5dSyD1jLYrOrSuogOjtCvJS6hvcw2V.jgpvap0DBHK', NULL, '2022-12-22 05:39:40', '2022-12-22 05:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `vats`
--

CREATE TABLE `vats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount_label` varchar(255) NOT NULL,
  `amount_tooltip` text NOT NULL,
  `convert_label` varchar(255) NOT NULL,
  `convert_tooltip` text NOT NULL,
  `rate_label` varchar(255) NOT NULL,
  `rate_tooltip` text NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `result_content` text NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_meta` text NOT NULL,
  `seo_keywords` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vats`
--

INSERT INTO `vats` (`id`, `amount_label`, `amount_tooltip`, `convert_label`, `convert_tooltip`, `rate_label`, `rate_tooltip`, `button_text`, `content`, `result_content`, `seo_title`, `seo_meta`, `seo_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Amount', '<p>Keep track of follow ups</p>\r\n\r\n<p>Reach out to more prospects at the right moment.</p>\r\n\r\n<p>&nbsp;</p>', 'Convert to', '<p>Keep track of follow ups</p>\r\n\r\n<p>Reach out to more prospects at the right moment.</p>', 'Vat Rate', '<p>Keep track of follow ups</p>\r\n\r\n<p>Reach out to more prospects at the right moment.</p>', 'Calculate Vat now', '<h2 class=\"text-[#2B313B] text-base font-semibold mb-3\">HOW DO YOU CALCULATE YOUR BMI?</h2>\r\n\r\n<ol class=\"mt-2 ml-3 space-y-1 leading-6 list-decimal text-[#6C7A93] font-normal text-xs\">\r\n	<li>Enter your gender, age, weight and height to get the most accurate BMI possible.</li>\r\n	<li>Check whether your BMI is a healthy BMI or whether you are under or overweight. Your ideal weight based on your age and height is also indicated.</li>\r\n	<li>Don&#39;t have a healthy BMI? Then take action to lose weight, gain weight or just go for a healthier lifestyle!</li>\r\n</ol>\r\n\r\n<p class=\"text-[#6C7A93] font-normal text-xs mb-6 leading-6 \">It is important to indicate your gender because of course different BMI values ​​apply for adults than for children and there is also a difference between men and women.</p>\r\n\r\n<p><a class=\"text-[#0052FE] font-normal text-xs block mb-2 underline\" href=\"#\">- Calculate BMI woman</a> <a class=\"text-[#0052FE] font-normal text-xs block mb-2 underline\" href=\"#\"> - Calculate BMI man</a> <a class=\"text-[#0052FE] font-normal text-xs block mb-2 underline\" href=\"#\"> - Calculate BMI child</a></p>\r\n\r\n<p class=\"text-[#6C7A93] font-normal text-xs my-6 leading-6 \">BMI stands for Body Mass Index, it is an alternative name for the quetelet index (QI). It is about the ratio between your height and your weight, on the basis of which you can determine whether you are overweight or underweight. Of course, with a few kilos too much you do not immediately suffer from obesity and being underweight does not immediately lead to annorexia, although it is important to keep an eye on the limits.</p>\r\n\r\n<p class=\"text-[#6C7A93] font-normal text-xs mb-6 leading-6 \">Curious about your BMI when you are pregnant or do you want to regularly make sure that you can make a calculation based on the formula? Your BMI is a snapshot, it is important to interpret it based on, for example, your current stage of life. Are you seriously overweight or severely underweight? In those cases, it is wise to inform a doctor or a specialist in the field of nutrition and/or sports about your weight and height. There is a chance that you will have to take immediate action to do something about this and to bring your health to safety.</p>', '<!-- info area start -->\r\n<h2>WHAT IS VAT?</h2>\r\n\r\n<p>Do you want to calculate the VAT to check what a purchase costs you as a consumer, or do you want to determine as an entrepreneur what prices you should use to be able to make a good margin? Calculate the VAT preferably in both directions, to build in your own control. You can do this in the following steps.</p>\r\n\r\n<p>1. Determine in advance whether you have to make the VAT amount inclusive or exclusive. 2. With exclusive you take the VAT off, with including you add the VAT. 3. If you want to calculate the amount incl. VAT, multiply the &quot;net&quot; amount by 1.21 in the case of 21% VAT. You can calculate the day excluding VAT by dividing the amount by 1.21.</p>\r\n\r\n<h2>HIGH AND LOW RATE</h2>\r\n\r\n<p>You can calculate the VAT on the basis of the high and low rate. The high VAT rate has been 21% since October 2012, the low rate is 9%. The low VAT rate applies to basic necessities of life, such as certain food. Almost everything else is eligible for the high VAT rate, so you can best count with it.</p>\r\n\r\n<p><a href=\"#\">- Calculate 9% VAT</a> <a href=\"#\"> - Calculate 21% VAT. </a></p>', 'Vat Calculator', '', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accurates`
--
ALTER TABLE `accurates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmis`
--
ALTER TABLE `bmis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmi_results`
--
ALTER TABLE `bmi_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calculator_details`
--
ALTER TABLE `calculator_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calculator_lists`
--
ALTER TABLE `calculator_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_name_unique` (`category_name`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_infos`
--
ALTER TABLE `contact_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dropdown_categories`
--
ALTER TABLE `dropdown_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dropdown_menus`
--
ALTER TABLE `dropdown_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_calculators`
--
ALTER TABLE `featured_calculators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_reviews`
--
ALTER TABLE `home_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `knowledges`
--
ALTER TABLE `knowledges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knowledge_categories`
--
ALTER TABLE `knowledge_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `populer_calculators`
--
ALTER TABLE `populer_calculators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_data_tables`
--
ALTER TABLE `seo_data_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vats`
--
ALTER TABLE `vats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accurates`
--
ALTER TABLE `accurates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bmis`
--
ALTER TABLE `bmis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bmi_results`
--
ALTER TABLE `bmi_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `calculator_details`
--
ALTER TABLE `calculator_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `calculator_lists`
--
ALTER TABLE `calculator_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_infos`
--
ALTER TABLE `contact_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dropdown_categories`
--
ALTER TABLE `dropdown_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dropdown_menus`
--
ALTER TABLE `dropdown_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `featured_calculators`
--
ALTER TABLE `featured_calculators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `home_reviews`
--
ALTER TABLE `home_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `knowledges`
--
ALTER TABLE `knowledges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `knowledge_categories`
--
ALTER TABLE `knowledge_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `populer_calculators`
--
ALTER TABLE `populer_calculators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seo_data_tables`
--
ALTER TABLE `seo_data_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vats`
--
ALTER TABLE `vats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
