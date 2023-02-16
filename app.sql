/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 50736
 Source Host           : localhost:3306
 Source Schema         : app

 Target Server Type    : MySQL
 Target Server Version : 50736
 File Encoding         : 65001

 Date: 16/02/2023 00:28:17
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for klanten
-- ----------------------------
DROP TABLE IF EXISTS `klanten`;
CREATE TABLE `klanten`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `achternaam` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `geslacht` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `adres` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `district` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telefoonnummer` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of klanten
-- ----------------------------
INSERT INTO `klanten` VALUES (1, 'Denzel', 'Rasidin', 'man', 'Roekoenweg 18', 'Commewijne', '8659521', 'denzelrasidin@gmail.com', '2023-02-15 20:53:32', NULL, '2023-02-16 03:22:16');
INSERT INTO `klanten` VALUES (3, 'Denz', 'Rasidin', 'man', 'Leiding 5 #783', 'Commewijne', '445555', 'denzelrasidin@gmail.com', '2023-02-16 03:26:21', '2023-02-16 03:26:30', '2023-02-16 03:26:30');

-- ----------------------------
-- Table structure for leveranciers
-- ----------------------------
DROP TABLE IF EXISTS `leveranciers`;
CREATE TABLE `leveranciers`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bedrijfsnaam` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `adres` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `district` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `directeur` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telefoonnummer` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `website` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  `deleted_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of leveranciers
-- ----------------------------
INSERT INTO `leveranciers` VALUES (1, 'Creative Designs', 'Roekoenweg 18', 'Paramaribo', 'Denz', '8659521', NULL, '2023-02-15 17:59:04', '2023-02-16 00:49:31', '2023-02-16 00:49:31', NULL);
INSERT INTO `leveranciers` VALUES (2, 'Creative Designs', 'Roekoenweg 18', 'Paramaribo', 'Denz', '8659521', NULL, '2023-02-16 00:55:05', '2023-02-16 00:55:05', NULL, NULL);
INSERT INTO `leveranciers` VALUES (3, 'super u', 'Roekoenweg 18', 'Commewijne', 'test', '112', NULL, '2023-02-16 01:53:18', '2023-02-16 02:36:39', NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Developer', 'admin@admin.com', 'admin', NULL, '$2y$10$FdvYiVA2eLmIyfqWukQkkOkn5xZCV4wZSNs6qcFgZXczKjJBPblzG', NULL, '2023-02-15 00:22:57', '2023-02-16 00:00:27', NULL);
INSERT INTO `users` VALUES (3, 'Denzel Rasidin', 'denzelrasidin@gmail.com', 'admin', NULL, '$2y$10$pDK8SCeoZK5C8BVn25eUsexuo46jlkMX3gt1VUaaRX7m8aRMulQcq', NULL, '2023-02-15 21:03:01', '2023-02-16 00:01:58', NULL);

SET FOREIGN_KEY_CHECKS = 1;
