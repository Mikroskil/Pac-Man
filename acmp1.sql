-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2013 at 10:50 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `acmp1`
--

-- --------------------------------------------------------

--
-- Table structure for table `sarankritik`
--

CREATE TABLE IF NOT EXISTS `sarankritik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `sarankritik` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `visitortbl`
--

CREATE TABLE IF NOT EXISTS `visitortbl` (
  `ip` int(11) NOT NULL,
  `time` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`time`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1386078683 ;


CREATE TABLE IF NOT EXISTS `foo_bans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `expire` int(10) unsigned DEFAULT NULL,
  `ban_creator` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `foo_categories`
--

CREATE TABLE IF NOT EXISTS `foo_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(80) NOT NULL DEFAULT 'New Category',
  `disp_position` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `foo_categories`
--

INSERT INTO `foo_categories` (`id`, `cat_name`, `disp_position`) VALUES
(1, 'Test category', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foo_censoring`
--

CREATE TABLE IF NOT EXISTS `foo_censoring` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `search_for` varchar(60) NOT NULL DEFAULT '',
  `replace_with` varchar(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `foo_config`
--

CREATE TABLE IF NOT EXISTS `foo_config` (
  `conf_name` varchar(255) NOT NULL DEFAULT '',
  `conf_value` text,
  PRIMARY KEY (`conf_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foo_config`
--

INSERT INTO `foo_config` (`conf_name`, `conf_value`) VALUES
('o_cur_version', '1.4.2'),
('o_database_revision', '5'),
('o_board_title', 'My PunBB forum'),
('o_board_desc', 'Unfortunately no one can be told what PunBB is — you have to see it for yourself'),
('o_default_timezone', '0'),
('o_time_format', 'H:i:s'),
('o_date_format', 'Y-m-d'),
('o_check_for_updates', '1'),
('o_check_for_versions', '1'),
('o_timeout_visit', '5400'),
('o_timeout_online', '300'),
('o_redirect_delay', '0'),
('o_show_version', '0'),
('o_show_user_info', '1'),
('o_show_post_count', '1'),
('o_signatures', '1'),
('o_smilies', '1'),
('o_smilies_sig', '1'),
('o_make_links', '1'),
('o_default_lang', 'English'),
('o_default_style', 'Oxygen'),
('o_default_user_group', '3'),
('o_topic_review', '15'),
('o_disp_topics_default', '30'),
('o_disp_posts_default', '25'),
('o_indent_num_spaces', '4'),
('o_quote_depth', '3'),
('o_quickpost', '1'),
('o_users_online', '1'),
('o_censoring', '0'),
('o_ranks', '1'),
('o_show_dot', '0'),
('o_topic_views', '1'),
('o_quickjump', '1'),
('o_gzip', '0'),
('o_additional_navlinks', ''),
('o_report_method', '0'),
('o_regs_report', '0'),
('o_default_email_setting', '1'),
('o_mailing_list', 'admin@yahoo.com'),
('o_avatars', '1'),
('o_avatars_dir', 'img/avatars'),
('o_avatars_width', '60'),
('o_avatars_height', '60'),
('o_avatars_size', '15360'),
('o_search_all_forums', '1'),
('o_sef', 'Default'),
('o_admin_email', 'admin@yahoo.com'),
('o_webmaster_email', 'admin@yahoo.com'),
('o_subscriptions', '1'),
('o_smtp_host', NULL),
('o_smtp_user', NULL),
('o_smtp_pass', NULL),
('o_smtp_ssl', '0'),
('o_regs_allow', '1'),
('o_regs_verify', '0'),
('o_announcement', '0'),
('o_announcement_heading', 'Sample announcement'),
('o_announcement_message', '<p>Enter your announcement here.</p>'),
('o_rules', '0'),
('o_rules_message', 'Enter your rules here.'),
('o_maintenance', '0'),
('o_maintenance_message', 'The forums are temporarily down for maintenance. Please try again in a few minutes.<br /><br />Administrator'),
('o_default_dst', '0'),
('p_message_bbcode', '1'),
('p_message_img_tag', '1'),
('p_message_all_caps', '1'),
('p_subject_all_caps', '1'),
('p_sig_all_caps', '1'),
('p_sig_bbcode', '1'),
('p_sig_img_tag', '0'),
('p_sig_length', '400'),
('p_sig_lines', '4'),
('p_allow_banned_email', '1'),
('p_allow_dupe_email', '0'),
('p_force_guest_email', '1'),
('o_show_moderators', '0'),
('o_mask_passwords', '1');

-- --------------------------------------------------------

--
-- Table structure for table `foo_extensions`
--

CREATE TABLE IF NOT EXISTS `foo_extensions` (
  `id` varchar(150) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `version` varchar(25) NOT NULL DEFAULT '',
  `description` text,
  `author` varchar(50) NOT NULL DEFAULT '',
  `uninstall` text,
  `uninstall_note` text,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  `dependencies` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `foo_extension_hooks`
--

CREATE TABLE IF NOT EXISTS `foo_extension_hooks` (
  `id` varchar(150) NOT NULL DEFAULT '',
  `extension_id` varchar(50) NOT NULL DEFAULT '',
  `code` text,
  `installed` int(10) unsigned NOT NULL DEFAULT '0',
  `priority` tinyint(1) unsigned NOT NULL DEFAULT '5',
  PRIMARY KEY (`id`,`extension_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `foo_forums`
--

CREATE TABLE IF NOT EXISTS `foo_forums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `forum_name` varchar(80) NOT NULL DEFAULT 'New forum',
  `forum_desc` text,
  `redirect_url` varchar(100) DEFAULT NULL,
  `moderators` text,
  `num_topics` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `num_posts` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `last_post` int(10) unsigned DEFAULT NULL,
  `last_post_id` int(10) unsigned DEFAULT NULL,
  `last_poster` varchar(200) DEFAULT NULL,
  `sort_by` tinyint(1) NOT NULL DEFAULT '0',
  `disp_position` int(10) NOT NULL DEFAULT '0',
  `cat_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `foo_forums`
--

INSERT INTO `foo_forums` (`id`, `forum_name`, `forum_desc`, `redirect_url`, `moderators`, `num_topics`, `num_posts`, `last_post`, `last_post_id`, `last_poster`, `sort_by`, `disp_position`, `cat_id`) VALUES
(1, 'Diskusi', 'Diskusi umum semua hal tentang UKM Indonesia', NULL, NULL, 2, 3, 1388462190, 3, 'HelloWorld', 0, 2, 1),
(2, 'Perkembangan Fitur', 'Silahkan berdiskusi untuk menambah fitur web kami ', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 3, 1),
(3, 'Berita', 'Berita seputar UKM Indonesia', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `foo_forum_perms`
--

CREATE TABLE IF NOT EXISTS `foo_forum_perms` (
  `group_id` int(10) NOT NULL DEFAULT '0',
  `forum_id` int(10) NOT NULL DEFAULT '0',
  `read_forum` tinyint(1) NOT NULL DEFAULT '1',
  `post_replies` tinyint(1) NOT NULL DEFAULT '1',
  `post_topics` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`group_id`,`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `foo_forum_subscriptions`
--

CREATE TABLE IF NOT EXISTS `foo_forum_subscriptions` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `forum_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `foo_groups`
--

CREATE TABLE IF NOT EXISTS `foo_groups` (
  `g_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `g_title` varchar(50) NOT NULL DEFAULT '',
  `g_user_title` varchar(50) DEFAULT NULL,
  `g_moderator` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_edit_users` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_rename_users` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_change_passwords` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_ban_users` tinyint(1) NOT NULL DEFAULT '0',
  `g_read_board` tinyint(1) NOT NULL DEFAULT '1',
  `g_view_users` tinyint(1) NOT NULL DEFAULT '1',
  `g_post_replies` tinyint(1) NOT NULL DEFAULT '1',
  `g_post_topics` tinyint(1) NOT NULL DEFAULT '1',
  `g_edit_posts` tinyint(1) NOT NULL DEFAULT '1',
  `g_delete_posts` tinyint(1) NOT NULL DEFAULT '1',
  `g_delete_topics` tinyint(1) NOT NULL DEFAULT '1',
  `g_set_title` tinyint(1) NOT NULL DEFAULT '1',
  `g_search` tinyint(1) NOT NULL DEFAULT '1',
  `g_search_users` tinyint(1) NOT NULL DEFAULT '1',
  `g_send_email` tinyint(1) NOT NULL DEFAULT '1',
  `g_post_flood` smallint(6) NOT NULL DEFAULT '30',
  `g_search_flood` smallint(6) NOT NULL DEFAULT '30',
  `g_email_flood` smallint(6) NOT NULL DEFAULT '60',
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `foo_groups`
--

INSERT INTO `foo_groups` (`g_id`, `g_title`, `g_user_title`, `g_moderator`, `g_mod_edit_users`, `g_mod_rename_users`, `g_mod_change_passwords`, `g_mod_ban_users`, `g_read_board`, `g_view_users`, `g_post_replies`, `g_post_topics`, `g_edit_posts`, `g_delete_posts`, `g_delete_topics`, `g_set_title`, `g_search`, `g_search_users`, `g_send_email`, `g_post_flood`, `g_search_flood`, `g_email_flood`) VALUES
(1, 'Administrators', 'Administrator', 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0),
(2, 'Guest', NULL, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 60, 30, 0),
(3, 'Members', NULL, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 60, 30, 60),
(4, 'Moderators', 'Moderator', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `foo_online`
--

CREATE TABLE IF NOT EXISTS `foo_online` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `ident` varchar(200) NOT NULL DEFAULT '',
  `logged` int(10) unsigned NOT NULL DEFAULT '0',
  `idle` tinyint(1) NOT NULL DEFAULT '0',
  `csrf_token` varchar(40) NOT NULL DEFAULT '',
  `prev_url` varchar(255) DEFAULT NULL,
  `last_post` int(10) unsigned DEFAULT NULL,
  `last_search` int(10) unsigned DEFAULT NULL,
  UNIQUE KEY `foo_online_user_id_ident_idx` (`user_id`,`ident`(25)),
  KEY `foo_online_ident_idx` (`ident`(25)),
  KEY `foo_online_logged_idx` (`logged`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foo_online`
--

INSERT INTO `foo_online` (`user_id`, `ident`, `logged`, `idle`, `csrf_token`, `prev_url`, `last_post`, `last_search`) VALUES
(1, '::1', 1388767909, 0, '38394a03f036900ed68984e2c0f57b722532dd0a', 'http://localhost/punbb-1.4.2/register.php?action=register', NULL, NULL),
(4, 'asd', 1388767909, 0, 'd95c4ff980dd070f647994edd6e26444b1dd9266', 'http://localhost/punbb-1.4.2/index.php', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `foo_posts`
--

CREATE TABLE IF NOT EXISTS `foo_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `poster` varchar(200) NOT NULL DEFAULT '',
  `poster_id` int(10) unsigned NOT NULL DEFAULT '1',
  `poster_ip` varchar(39) DEFAULT NULL,
  `poster_email` varchar(80) DEFAULT NULL,
  `message` text,
  `hide_smilies` tinyint(1) NOT NULL DEFAULT '0',
  `posted` int(10) unsigned NOT NULL DEFAULT '0',
  `edited` int(10) unsigned DEFAULT NULL,
  `edited_by` varchar(200) DEFAULT NULL,
  `topic_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `foo_posts_topic_id_idx` (`topic_id`),
  KEY `foo_posts_multi_idx` (`poster_id`,`topic_id`),
  KEY `foo_posts_posted_idx` (`posted`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `foo_posts`
--

INSERT INTO `foo_posts` (`id`, `poster`, `poster_id`, `poster_ip`, `poster_email`, `message`, `hide_smilies`, `posted`, `edited`, `edited_by`, `topic_id`) VALUES
(1, 'admin', 2, '127.0.0.1', NULL, 'If you are looking at this (which I guess you are), the install of PunBB appears to have worked! Now log in and head over to the administration control panel to configure your forum.', 0, 1388461733, NULL, NULL, 1),
(2, 'admin', 2, '::1', NULL, 'HelloWorld', 0, 1388462122, NULL, NULL, 2),
(3, 'HelloWorld', 3, '::1', NULL, 'HelloWorld', 0, 1388462190, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `foo_ranks`
--

CREATE TABLE IF NOT EXISTS `foo_ranks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rank` varchar(50) NOT NULL DEFAULT '',
  `min_posts` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `foo_ranks`
--

INSERT INTO `foo_ranks` (`id`, `rank`, `min_posts`) VALUES
(1, 'New member', 0),
(2, 'Member', 10);

-- --------------------------------------------------------

--
-- Table structure for table `foo_reports`
--

CREATE TABLE IF NOT EXISTS `foo_reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL DEFAULT '0',
  `topic_id` int(10) unsigned NOT NULL DEFAULT '0',
  `forum_id` int(10) unsigned NOT NULL DEFAULT '0',
  `reported_by` int(10) unsigned NOT NULL DEFAULT '0',
  `created` int(10) unsigned NOT NULL DEFAULT '0',
  `message` text,
  `zapped` int(10) unsigned DEFAULT NULL,
  `zapped_by` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `foo_reports_zapped_idx` (`zapped`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `foo_search_cache`
--

CREATE TABLE IF NOT EXISTS `foo_search_cache` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `ident` varchar(200) NOT NULL DEFAULT '',
  `search_data` text,
  PRIMARY KEY (`id`),
  KEY `foo_search_cache_ident_idx` (`ident`(8))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `foo_search_matches`
--

CREATE TABLE IF NOT EXISTS `foo_search_matches` (
  `post_id` int(10) unsigned NOT NULL DEFAULT '0',
  `word_id` int(10) unsigned NOT NULL DEFAULT '0',
  `subject_match` tinyint(1) NOT NULL DEFAULT '0',
  KEY `foo_search_matches_word_id_idx` (`word_id`),
  KEY `foo_search_matches_post_id_idx` (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foo_search_matches`
--

INSERT INTO `foo_search_matches` (`post_id`, `word_id`, `subject_match`) VALUES
(1, 1, 0),
(1, 2, 0),
(1, 3, 0),
(1, 4, 0),
(1, 5, 0),
(1, 6, 0),
(1, 7, 0),
(1, 8, 0),
(1, 9, 0),
(1, 10, 0),
(1, 11, 0),
(1, 12, 0),
(1, 13, 0),
(1, 14, 0),
(1, 15, 0),
(1, 16, 0),
(1, 17, 0),
(1, 18, 0),
(1, 19, 0),
(1, 20, 0),
(1, 21, 0),
(1, 22, 0),
(1, 23, 0),
(1, 25, 1),
(1, 24, 1),
(2, 26, 0),
(2, 26, 1),
(3, 26, 0);

-- --------------------------------------------------------

--
-- Table structure for table `foo_search_words`
--

CREATE TABLE IF NOT EXISTS `foo_search_words` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `word` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`word`),
  KEY `foo_search_words_id_idx` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `foo_search_words`
--

INSERT INTO `foo_search_words` (`id`, `word`) VALUES
(1, 'you'),
(2, 'are'),
(3, 'looking'),
(4, 'this'),
(5, 'which'),
(6, 'guess'),
(7, 'the'),
(8, 'install'),
(9, 'punbb'),
(10, 'appears'),
(11, 'have'),
(12, 'worked'),
(13, 'now'),
(14, 'log'),
(15, 'and'),
(16, 'head'),
(17, 'over'),
(18, 'administration'),
(19, 'control'),
(20, 'panel'),
(21, 'configure'),
(22, 'your'),
(23, 'forum'),
(24, 'test'),
(25, 'post'),
(26, 'helloworld');

-- --------------------------------------------------------

--
-- Table structure for table `foo_subscriptions`
--

CREATE TABLE IF NOT EXISTS `foo_subscriptions` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `topic_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`topic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `foo_topics`
--

CREATE TABLE IF NOT EXISTS `foo_topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `poster` varchar(200) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `posted` int(10) unsigned NOT NULL DEFAULT '0',
  `first_post_id` int(10) unsigned NOT NULL DEFAULT '0',
  `last_post` int(10) unsigned NOT NULL DEFAULT '0',
  `last_post_id` int(10) unsigned NOT NULL DEFAULT '0',
  `last_poster` varchar(200) DEFAULT NULL,
  `num_views` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `num_replies` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `closed` tinyint(1) NOT NULL DEFAULT '0',
  `sticky` tinyint(1) NOT NULL DEFAULT '0',
  `moved_to` int(10) unsigned DEFAULT NULL,
  `forum_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `foo_topics_forum_id_idx` (`forum_id`),
  KEY `foo_topics_moved_to_idx` (`moved_to`),
  KEY `foo_topics_last_post_idx` (`last_post`),
  KEY `foo_topics_first_post_id_idx` (`first_post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `foo_topics`
--

INSERT INTO `foo_topics` (`id`, `poster`, `subject`, `posted`, `first_post_id`, `last_post`, `last_post_id`, `last_poster`, `num_views`, `num_replies`, `closed`, `sticky`, `moved_to`, `forum_id`) VALUES
(1, 'admin', 'Test post', 1388461733, 1, 1388461733, 1, 'admin', 2, 0, 0, 0, NULL, 1),
(2, 'admin', 'HelloWorld', 1388462122, 2, 1388462190, 3, 'HelloWorld', 4, 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `foo_users`
--

CREATE TABLE IF NOT EXISTS `foo_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL DEFAULT '3',
  `username` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `salt` varchar(12) DEFAULT NULL,
  `email` varchar(80) NOT NULL DEFAULT '',
  `title` varchar(50) DEFAULT NULL,
  `realname` varchar(40) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `skype` varchar(100) DEFAULT NULL,
  `jabber` varchar(80) DEFAULT NULL,
  `icq` varchar(12) DEFAULT NULL,
  `msn` varchar(80) DEFAULT NULL,
  `aim` varchar(30) DEFAULT NULL,
  `yahoo` varchar(30) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `signature` text,
  `disp_topics` tinyint(3) unsigned DEFAULT NULL,
  `disp_posts` tinyint(3) unsigned DEFAULT NULL,
  `email_setting` tinyint(1) NOT NULL DEFAULT '1',
  `notify_with_post` tinyint(1) NOT NULL DEFAULT '0',
  `auto_notify` tinyint(1) NOT NULL DEFAULT '0',
  `show_smilies` tinyint(1) NOT NULL DEFAULT '1',
  `show_img` tinyint(1) NOT NULL DEFAULT '1',
  `show_img_sig` tinyint(1) NOT NULL DEFAULT '1',
  `show_avatars` tinyint(1) NOT NULL DEFAULT '1',
  `show_sig` tinyint(1) NOT NULL DEFAULT '1',
  `access_keys` tinyint(1) NOT NULL DEFAULT '0',
  `timezone` float NOT NULL DEFAULT '0',
  `dst` tinyint(1) NOT NULL DEFAULT '0',
  `time_format` int(10) unsigned NOT NULL DEFAULT '0',
  `date_format` int(10) unsigned NOT NULL DEFAULT '0',
  `language` varchar(25) NOT NULL DEFAULT 'English',
  `style` varchar(25) NOT NULL DEFAULT 'Oxygen',
  `num_posts` int(10) unsigned NOT NULL DEFAULT '0',
  `last_post` int(10) unsigned DEFAULT NULL,
  `last_search` int(10) unsigned DEFAULT NULL,
  `last_email_sent` int(10) unsigned DEFAULT NULL,
  `registered` int(10) unsigned NOT NULL DEFAULT '0',
  `registration_ip` varchar(39) NOT NULL DEFAULT '0.0.0.0',
  `last_visit` int(10) unsigned NOT NULL DEFAULT '0',
  `admin_note` varchar(30) DEFAULT NULL,
  `activate_string` varchar(80) DEFAULT NULL,
  `activate_key` varchar(8) DEFAULT NULL,
  `avatar` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `avatar_width` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `avatar_height` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `foo_users_registered_idx` (`registered`),
  KEY `foo_users_username_idx` (`username`(8))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `foo_users`
--

INSERT INTO `foo_users` (`id`, `group_id`, `username`, `password`, `salt`, `email`, `title`, `realname`, `url`, `facebook`, `twitter`, `linkedin`, `skype`, `jabber`, `icq`, `msn`, `aim`, `yahoo`, `location`, `signature`, `disp_topics`, `disp_posts`, `email_setting`, `notify_with_post`, `auto_notify`, `show_smilies`, `show_img`, `show_img_sig`, `show_avatars`, `show_sig`, `access_keys`, `timezone`, `dst`, `time_format`, `date_format`, `language`, `style`, `num_posts`, `last_post`, `last_search`, `last_email_sent`, `registered`, `registration_ip`, `last_visit`, `admin_note`, `activate_string`, `activate_key`, `avatar`, `avatar_width`, `avatar_height`) VALUES
(1, 2, 'Guest', 'Guest', NULL, 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 'English', 'Oxygen', 0, NULL, NULL, NULL, 0, '0.0.0.0', 0, NULL, NULL, NULL, 0, 0, 0),
(2, 1, 'admin', '1d90f2c3c1763494a4285d588b1750bf8d1db089', '-F+]<eh,W\\Da', 'admin@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 'English', 'Oxygen', 2, 1388462122, NULL, NULL, 1388461733, '127.0.0.1', 1388464276, NULL, NULL, NULL, 0, 0, 0),
(3, 3, 'HelloWorld', '355fe372a5724700f9450278f2c472afaba5079a', 'nwyYwgb[:IPr', 'landchuckz@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, 1, 0, 7, 0, 0, 0, 'English', 'Oxygen', 1, 1388462190, NULL, NULL, 1388461826, '::1', 1388462620, NULL, NULL, NULL, 0, 0, 0),
(4, 3, 'asd', 'b41be81570cd839111e3898bbfc7b30b1ce396cb', ')PYre?n[;$nI', 'asd@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, 1, 0, 7, 0, 0, 0, 'English', 'Oxygen', 0, NULL, NULL, NULL, 1388767909, '::1', 1388767909, NULL, NULL, NULL, 0, 0, 0);

--
-- Dumping data for table `visitortbl`
--

INSERT INTO `visitortbl` (`ip`, `time`) VALUES
(1, 1386150577);

--
-- Table structure for table `bagian`
--

CREATE TABLE IF NOT EXISTS `bagian` (
  `id_bag` varchar(4) NOT NULL,
  `n_bag` varchar(25) NOT NULL,
  `NomorId` int(8) NOT NULL,
  PRIMARY KEY  (`id_bag`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id_bag`, `n_bag`) VALUES
('B001', 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `h_jabatan`
--

CREATE TABLE IF NOT EXISTS `h_jabatan` (
  `idh` int(11) NOT NULL auto_increment,
  `idkjb` varchar(4) NOT NULL,
  `jab_old` varchar(20) NOT NULL,
  `tgl_ajb` date NOT NULL,
  `jabatan_baru` varchar(20) NOT NULL,
  `tgl_kjb` date NOT NULL,
  PRIMARY KEY  (`idh`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `h_jabatan`
--

INSERT INTO `h_jabatan` (`idh`, `idkjb`, `jab_old`, `tgl_ajb`, `jabatan_baru`, `tgl_kjb`) VALUES
(10, 'KJ01', 'Rekom', '2009-01-16', 'Kepala Rekom', '2013-01-16'),
(11, 'KJ01', 'Kepala Rekom', '2009-01-16', 'Mgr.Rekom', '2013-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jab` varchar(4) NOT NULL,
  `n_jab` varchar(20) NOT NULL,
  `NomorId` int(8) NOT NULL,
  PRIMARY KEY  (`id_jab`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jab`, `n_jab`) VALUES
('J001', 'Rekom'),
('J002', 'Kepala Rekom'),
('J003', 'Mgr.Rekom');

-- --------------------------------------------------------

--
-- Table structure for table `k_jabatan`
--

CREATE TABLE IF NOT EXISTS `k_jabatan` (
  `idkjb` varchar(4) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `masa_kerja` int(10) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY  (`idkjb`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `k_jabatan`
--

INSERT INTO `k_jabatan` (`idkjb`, `nip`, `masa_kerja`, `keterangan`) VALUES
('KJ01', '1234', 4, 'dsda');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `nip` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `NomorId` int(8) NOT NULL,
  `namaperusahaan` varchar(60) NOT NULL,
  `tmpt_lahir` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `id_bag` varchar(4) NOT NULL,
  `id_jab` varchar(4) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY  (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `tmpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `tgl_masuk`, `id_bag`, `id_jab`, `foto`) VALUES
('1234', 'Sinta Purnamasari', 'Palembang', '1987-03-04', 'P', 'Jl. Plaju', '2009-01-16', 'B001', 'J003', '3787531.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE IF NOT EXISTS `pelatihan` (
  `id_pelatihan` int(4) NOT NULL auto_increment,
  `nip` varchar(10) NOT NULL,
  `tgl_pelatihan` date NOT NULL,
  `topik_pelatihan` varchar(100) NOT NULL,
  `penyelenggara` text NOT NULL,
  `hasil_pelatihan` int(10) NOT NULL,
  PRIMARY KEY  (`id_pelatihan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pelatihan`
--


-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
  `idp` int(4) NOT NULL auto_increment,
  `nip` varchar(10) NOT NULL,
  `t_pdk` varchar(20) NOT NULL,
  `d_pdk` text NOT NULL,
  PRIMARY KEY  (`idp`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`idp`, `nip`, `t_pdk`, `d_pdk`) VALUES
(1, '1234', '2000 - 2006', 'SD Negeri 2 Palembang'),
(2, '1234', '2006 - 2007', 'SMP Negeri 3 Palembang'),
(3, '1234', '2007 - 2010', 'SMA 1 Negeri Palembang');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman_kerja`
--

CREATE TABLE IF NOT EXISTS `pengalaman_kerja` (
  `id_peker` int(4) NOT NULL auto_increment,
  `nip` varchar(10) NOT NULL,
  `nm_pekerjaan` varchar(50) NOT NULL,
  `d_pekerjaan` text NOT NULL,
  PRIMARY KEY  (`id_peker`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pengalaman_kerja`
--

INSERT INTO `pengalaman_kerja` (`id_peker`, `nip`, `nm_pekerjaan`, `d_pekerjaan`) VALUES
(1, '1234', 'Freelance Networking ', 'Rancang bangun jaringan untuk warnet.'),
(2, '1234', 'Freelance Web Programmer', '- Merancang Aplikasi Berbasis Web untuk keperluan TA/Skripsi mahasiswa.\r\n- Merancang dan membangun website toko online, Personal, Akademik dan Company profile.\r\n'),
(5, 'admin', 'gvfdg', 'gdfg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` varchar(50) NOT NULL,
  `passid` varchar(50) NOT NULL,
  `level_user` int(2) NOT NULL,
  `NomorId` int(8) NOT NULL,
  `Theme` varchar(30) NOT NULL,
  `nama` varchar(45),
  `email` varchar(45),
  `alamat` varchar(45),
  `Provinsi` varchar(20),
  `Daerah` varchar(45),
  `NoTelepon` varchar(15),
  `NoKTP` varchar(15),
  `NamaPerusahaan` varchar(45),
  `AlamatPerusahaan` varchar(45),
  `JenisPerusahaan` varchar(25),
  `TahunBerdiri` varchar(4),
  `Bulan` varchar(15),
  `Tanggal` varchar(2),
  `Status` varchar(45) ,
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `s155_items` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) default '',
  `when` int(11) NOT NULL default '0',
  `rate` float NOT NULL,
  `rate_count` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `s155_items_vote_track` (
  `item_id` int(11) unsigned NOT NULL default '0',
  `ip` varchar(20) default NULL,
  `date` datetime default NULL,
  KEY `med_ip` (`ip`,`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `passid`, `level_user`,`NomorId`,`nama`,`email`,`alamat`,`Provinsi`,`Daerah`,`NoTelepon`,`NoKTP`,`NamaPerusahaan`,`AlamatPerusahaan`,`JenisPerusahaan`,`TahunBerdiri`,`Bulan`,`Tanggal`,`Status`) VALUES
('admin', 'admin', 1,1,'abc','qwe@asd.com','qwe','JawaBarat','Surabaya',213,123,'asd','asd','asd','1990','1','1','KantorTunggal'),
('pimpinan', 'pimpinan', 2,1,'abc','qwe@asd.com','qwe','JawaBarat','Surabaya',213,123,'asd','asd','asd','1990','1','1','KantorTunggal'),
('1234', '123456', 3,1,'abc','qwe@asd.com','qwe','JawaBarat','Surabaya',213,123,'asd','asd','asd','1990','1','1','KantorTunggal');
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
