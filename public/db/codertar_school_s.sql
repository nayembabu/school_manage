-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2025 at 12:14 PM
-- Server version: 8.0.39-cll-lve
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codertar_school_s`
--

-- --------------------------------------------------------

--
-- Table structure for table `bluck_student_info`
--

CREATE TABLE `bluck_student_info` (
  `student_info_sets_at_iddddds` int NOT NULL,
  `student_info_bn_names` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `student_info_names_en` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `birth_date_dob` varchar(30) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `birth_registration_nos` varchar(20) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `student_info_addresss` longtext CHARACTER SET utf16 COLLATE utf16_unicode_ci,
  `student_info_father_name_en` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `student_info_bn_father_name` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `student_info_mother_en` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `student_info_bn_mother` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `student_info_gradian_phone1` varchar(20) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL DEFAULT '0',
  `student_info_gradian_phone2nd` varchar(20) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL DEFAULT '0',
  `gardian_name` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `gardian_relationss` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `class_iddddd` varchar(10) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `online_admission_auto_idddiiid` varchar(10) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_group_sets`
--

CREATE TABLE `class_group_sets` (
  `class_group_set_auto_pr_iddd_s` int NOT NULL,
  `class_group_names` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `class_atpr_id` varchar(20) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_name`
--

CREATE TABLE `class_name` (
  `class_name_auto_id` int NOT NULL,
  `class_name_s` varchar(150) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `class_roman` varchar(20) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `numerical` varchar(4) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `create_time` varchar(50) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `create_date` varchar(50) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `create_user_id` varchar(10) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `class_name`
--

INSERT INTO `class_name` (`class_name_auto_id`, `class_name_s`, `class_roman`, `numerical`, `create_time`, `create_date`, `create_user_id`) VALUES
(1, '\0F\0i\0r\0s\0t\0 \0C\0l\0a\0s\0s', '\0i', '\01', NULL, '\02\00\02\05\0-\00\03\0-\01\03', NULL),
(2, 'Second Class', 'ii', '2', '1744136568', '2025-04-08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `front_slidersss`
--

CREATE TABLE `front_slidersss` (
  `front_sliders_id_autoprrr` int NOT NULL,
  `slider_img_paths` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `slider_titless` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `slider_description` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `groups_auto_iddddiiiiss` int NOT NULL,
  `group_name` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `group_descriptionsss` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_infos_attemps`
--

CREATE TABLE `login_infos_attemps` (
  `login_infos_attemps_iddddi` int NOT NULL,
  `usr_auto_pr_iddsss` varchar(10) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `login_time_stamp_ss` varchar(30) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `logout_timming` varchar(30) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `login_devicessss` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `login_attemp_full` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `login_ips` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `login_browser_infos` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_events`
--

CREATE TABLE `school_events` (
  `school_events_auto_iiiid` int NOT NULL,
  `event_titles` varchar(200) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `event_full_description` longtext CHARACTER SET utf16 COLLATE utf16_unicode_ci,
  `event_shedule_dates_ing` varchar(60) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `event_insert_timming` varchar(50) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `event_shedule_timming` varchar(50) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section_s`
--

CREATE TABLE `section_s` (
  `section_pr_iddds` int NOT NULL,
  `section_namesss` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `class_pr_id_set` varchar(20) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `setting_auto_pr_iddd` int NOT NULL,
  `school_name_bn_ss` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `school_addresssss_bn` longtext CHARACTER SET utf16 COLLATE utf16_unicode_ci,
  `school_email_nos` varchar(200) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `school_phone_1` varchar(20) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `school_phone_2nd` varchar(20) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `school_logo_img_pathss` longtext CHARACTER SET utf16 COLLATE utf16_unicode_ci,
  `school_name_en` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `school_addres_en` longtext CHARACTER SET utf16 COLLATE utf16_unicode_ci,
  `school_domain_url_ling` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting_access_s`
--

CREATE TABLE `setting_access_s` (
  `setting_access_auto_iddds` int NOT NULL,
  `set_domains_links` varchar(150) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `set_time_stamp_starts` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL DEFAULT '0',
  `set_end_timestampss` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL DEFAULT '0',
  `set_starts_date_sssssss` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL DEFAULT '0',
  `set_end_dates_s` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_gallery`
--

CREATE TABLE `student_gallery` (
  `student_gallery_auto-idd` int NOT NULL,
  `gallery_titles` varchar(200) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `gallery_path_names` longtext CHARACTER SET utf16 COLLATE utf16_unicode_ci,
  `gallery_descriptionssss` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `insert_timming` varchar(30) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_info_sets_at_iddddds` int NOT NULL,
  `student_info_bn_names` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `student_info_names_en` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `birth_date_dob` varchar(30) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `birth_registration_nos` varchar(20) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `student_info_addresss` longtext CHARACTER SET utf16 COLLATE utf16_unicode_ci,
  `student_info_father_name_en` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `student_info_bn_father_name` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `student_info_mother_en` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `student_info_bn_mother` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `student_info_gradian_phone1` varchar(20) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL DEFAULT '0',
  `student_info_gradian_phone2nd` varchar(20) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL DEFAULT '0',
  `gardian_name` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `gardian_relationss` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `class_iddddd` varchar(10) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `online_admission_auto_idddiiid` varchar(10) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_auto_pr_idddsds` int NOT NULL,
  `subject_bn_names` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `subject_names_en` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `class_att_prr_idddd` varchar(20) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `class_id_sets` varchar(20) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_infos`
--

CREATE TABLE `users_infos` (
  `user_info_aat_iiiddd` int NOT NULL,
  `user_namesss` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `user_emailss` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `user_passwordss` longtext CHARACTER SET utf16 COLLATE utf16_unicode_ci,
  `user_visible_passwordss` varchar(250) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `user_activity` varchar(2) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL DEFAULT '1',
  `std_id_id` int DEFAULT NULL,
  `teacher_aaaaaauto_idididid` varchar(10) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `emp_iddd_auto_ss` varchar(10) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `director_s_autoooo_idddddi` varchar(10) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `create_users_by` varchar(10) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `insert_timming` varchar(30) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `last_login` varchar(30) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `user_group_idddsd` int NOT NULL,
  `grp_idda` varchar(10) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `usr_iddda` varchar(10) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bluck_student_info`
--
ALTER TABLE `bluck_student_info`
  ADD PRIMARY KEY (`student_info_sets_at_iddddds`);

--
-- Indexes for table `class_group_sets`
--
ALTER TABLE `class_group_sets`
  ADD PRIMARY KEY (`class_group_set_auto_pr_iddd_s`);

--
-- Indexes for table `class_name`
--
ALTER TABLE `class_name`
  ADD PRIMARY KEY (`class_name_auto_id`);

--
-- Indexes for table `front_slidersss`
--
ALTER TABLE `front_slidersss`
  ADD PRIMARY KEY (`front_sliders_id_autoprrr`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`groups_auto_iddddiiiiss`);

--
-- Indexes for table `login_infos_attemps`
--
ALTER TABLE `login_infos_attemps`
  ADD PRIMARY KEY (`login_infos_attemps_iddddi`);

--
-- Indexes for table `school_events`
--
ALTER TABLE `school_events`
  ADD PRIMARY KEY (`school_events_auto_iiiid`);

--
-- Indexes for table `section_s`
--
ALTER TABLE `section_s`
  ADD PRIMARY KEY (`section_pr_iddds`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`setting_auto_pr_iddd`);

--
-- Indexes for table `setting_access_s`
--
ALTER TABLE `setting_access_s`
  ADD PRIMARY KEY (`setting_access_auto_iddds`);

--
-- Indexes for table `student_gallery`
--
ALTER TABLE `student_gallery`
  ADD PRIMARY KEY (`student_gallery_auto-idd`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_info_sets_at_iddddds`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_auto_pr_idddsds`);

--
-- Indexes for table `users_infos`
--
ALTER TABLE `users_infos`
  ADD PRIMARY KEY (`user_info_aat_iiiddd`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`user_group_idddsd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bluck_student_info`
--
ALTER TABLE `bluck_student_info`
  MODIFY `student_info_sets_at_iddddds` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_group_sets`
--
ALTER TABLE `class_group_sets`
  MODIFY `class_group_set_auto_pr_iddd_s` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_name`
--
ALTER TABLE `class_name`
  MODIFY `class_name_auto_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `front_slidersss`
--
ALTER TABLE `front_slidersss`
  MODIFY `front_sliders_id_autoprrr` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `groups_auto_iddddiiiiss` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_infos_attemps`
--
ALTER TABLE `login_infos_attemps`
  MODIFY `login_infos_attemps_iddddi` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_events`
--
ALTER TABLE `school_events`
  MODIFY `school_events_auto_iiiid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section_s`
--
ALTER TABLE `section_s`
  MODIFY `section_pr_iddds` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `setting_auto_pr_iddd` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting_access_s`
--
ALTER TABLE `setting_access_s`
  MODIFY `setting_access_auto_iddds` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_gallery`
--
ALTER TABLE `student_gallery`
  MODIFY `student_gallery_auto-idd` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `student_info_sets_at_iddddds` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_auto_pr_idddsds` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_infos`
--
ALTER TABLE `users_infos`
  MODIFY `user_info_aat_iiiddd` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `user_group_idddsd` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
