/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : test1

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-02-06 11:50:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employee_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of employee
-- ----------------------------
INSERT INTO `employee` VALUES ('1', 'john', 'doe', 'my@email.com', 'admin', '$2y$10$3XyIsy3h0sbBWRhrtVWjtunLBs/kaaNqXQdSbl28WqOomMOOHJB12', 'E4BzO6LlkStCwKFv0fJmDSqNqbmhRvANOpQQwAFM4Ucm0b0dsCfMY4VCqxWj', '2018-02-04 07:03:12', '2018-02-05 06:45:02');
INSERT INTO `employee` VALUES ('8', 'merlinda', 'collado', '', '', '$2y$10$yeUWduf1YK8/y59BGIRsCeF29pqeoZnzgtr0Owm/9EWlLlcx68an.', null, '2018-02-05 15:18:30', '2018-02-05 15:18:30');

-- ----------------------------
-- Table structure for logs
-- ----------------------------
DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) DEFAULT NULL,
  `time_in` time DEFAULT NULL,
  `time_out` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`l_id`),
  KEY `id` (`id`),
  CONSTRAINT `logs_ibfk_2` FOREIGN KEY (`id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of logs
-- ----------------------------
INSERT INTO `logs` VALUES ('62', '1/1/2018', null, null, '2018-02-05 18:55:34', '2018-02-05 18:55:34', '8');
INSERT INTO `logs` VALUES ('63', '1/2/2018', null, null, '2018-02-05 18:55:34', '2018-02-05 18:55:34', '8');
INSERT INTO `logs` VALUES ('64', '1/3/2018', '07:39:00', '05:51:00', '2018-02-05 18:55:34', '2018-02-05 18:55:34', '8');
INSERT INTO `logs` VALUES ('65', '1/4/2018', '08:10:00', '06:03:00', '2018-02-05 18:55:34', '2018-02-05 18:55:34', '8');
INSERT INTO `logs` VALUES ('66', '1/5/2018', '08:05:00', '06:42:00', '2018-02-05 18:55:34', '2018-02-05 18:55:34', '8');
INSERT INTO `logs` VALUES ('67', '1/6/2018', '09:27:00', '05:50:00', '2018-02-05 18:55:34', '2018-02-05 18:55:34', '8');
INSERT INTO `logs` VALUES ('68', '1/7/2018', null, null, '2018-02-05 18:55:34', '2018-02-05 18:55:34', '8');
INSERT INTO `logs` VALUES ('69', '1/1/2018', null, null, '2018-02-05 18:56:37', '2018-02-05 18:56:37', '8');
INSERT INTO `logs` VALUES ('70', '1/2/2018', null, null, '2018-02-05 18:56:37', '2018-02-05 18:56:37', '8');
INSERT INTO `logs` VALUES ('71', '1/3/2018', '07:39:00', '05:51:00', '2018-02-05 18:56:37', '2018-02-05 18:56:37', '8');
INSERT INTO `logs` VALUES ('72', '1/4/2018', '08:10:00', '06:03:00', '2018-02-05 18:56:38', '2018-02-05 18:56:38', '8');
INSERT INTO `logs` VALUES ('73', '1/5/2018', '08:05:00', '06:42:00', '2018-02-05 18:56:38', '2018-02-05 18:56:38', '8');
INSERT INTO `logs` VALUES ('74', '1/6/2018', '09:27:00', '05:50:00', '2018-02-05 18:56:38', '2018-02-05 18:56:38', '8');
INSERT INTO `logs` VALUES ('75', '1/7/2018', null, null, '2018-02-05 18:56:38', '2018-02-05 18:56:38', '8');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');

-- ----------------------------
-- Table structure for month
-- ----------------------------
DROP TABLE IF EXISTS `month`;
CREATE TABLE `month` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of month
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for year
-- ----------------------------
DROP TABLE IF EXISTS `year`;
CREATE TABLE `year` (
  `y_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`y_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of year
-- ----------------------------
