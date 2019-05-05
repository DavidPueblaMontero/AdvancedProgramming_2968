/*
Navicat MySQL Data Transfer

Source Server         : localhost-SQL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : restnet

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-05-05 13:58:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` varchar(255) NOT NULL,
  `name_user` varchar(255) DEFAULT NULL,
  `age_user` varchar(255) DEFAULT NULL,
  `phone_user` varchar(255) DEFAULT NULL,
  `address_user` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
