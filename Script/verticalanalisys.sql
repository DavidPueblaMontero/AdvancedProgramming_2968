/*
Navicat MySQL Data Transfer

Source Server         : remote
Source Server Version : 50505
Source Host           : vpndavid.sytes.net:3306
Source Database       : verticalanalisys

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-04-23 20:05:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for company
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `id_company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_company` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `address_company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for financialdata
-- ----------------------------
DROP TABLE IF EXISTS `financialdata`;
CREATE TABLE `financialdata` (
  `id_financialData` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `sales` decimal(10,0) DEFAULT NULL,
  `salesCost` decimal(10,0) DEFAULT NULL,
  `grossProfit` decimal(10,0) DEFAULT NULL,
  `expemsesAdmiSales` decimal(10,0) DEFAULT NULL,
  `depreciations` decimal(10,0) DEFAULT NULL,
  `interestPaid` decimal(10,0) DEFAULT NULL,
  `profitBeforeTaxes` decimal(10,0) DEFAULT NULL,
  `taxes` decimal(10,0) DEFAULT NULL,
  `excersiseUtility` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id_financialData`),
  KEY `fk_company2` (`id_company`),
  CONSTRAINT `fk_company2` FOREIGN KEY (`id_company`) REFERENCES `company` (`id_company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass_user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `fk_company` (`id_company`),
  CONSTRAINT `fk_company` FOREIGN KEY (`id_company`) REFERENCES `company` (`id_company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
