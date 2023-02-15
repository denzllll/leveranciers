/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50734
 Source Host           : localhost:3306
 Source Schema         : app

 Target Server Type    : MySQL
 Target Server Version : 50734
 File Encoding         : 65001

 Date: 15/02/2023 15:27:15
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for klanten
-- ----------------------------
DROP TABLE IF EXISTS `klanten`;
CREATE TABLE `klanten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `geslacht` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `telefoonnummer` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of klanten
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for leveranciers
-- ----------------------------
DROP TABLE IF EXISTS `leveranciers`;
CREATE TABLE `leveranciers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bedrijfsnaam` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `directeur` varchar(255) NOT NULL,
  `telefoonnummer` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of leveranciers
-- ----------------------------
BEGIN;
INSERT INTO `leveranciers` VALUES (1, 'Creative Designs', 'Roekoenweg 18', 'Paramaribo', 'Denz', '8659521', NULL, '2023-02-15 17:59:04', '2023-02-15 17:59:04', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'Developer', 'admin@admin.com', 'admin', NULL, '$2y$10$FdvYiVA2eLmIyfqWukQkkOkn5xZCV4wZSNs6qcFgZXczKjJBPblzG', NULL, '2023-02-15 00:22:57', '2023-02-15 00:22:57', NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
