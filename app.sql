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

 Date: 16/02/2023 18:02:39
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
) ENGINE = MyISAM AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of klanten
-- ----------------------------
INSERT INTO `klanten` VALUES (1, 'Dolor nostrud laborum Sint incididunt voluptatum maiores voluptatum', 'Omnis adipisicing sunt adipisci deserunt aut eos numquam sunt', 'man', 'Ea quia quod duis incididunt non velit earum nobis numquam explicabo Voluptate iusto aut', 'Brokopondo', '94', 'ryvutyveci@mailinator.com', '2023-02-16 20:52:36', NULL, '2023-02-16 20:52:36');
INSERT INTO `klanten` VALUES (2, 'Laudantium et necessitatibus aut irure sit ipsum aut explicabo', 'Non eiusmod voluptas aut vel consequatur in vitae aliquid quod distinctio Ratione qui qui quia', 'man', 'Hic est cillum et doloribus', 'Wanica', '71', 'jylysyq@mailinator.com', '2023-02-16 20:52:42', NULL, '2023-02-16 20:52:42');
INSERT INTO `klanten` VALUES (3, 'Ea occaecat aperiam dolorum veniam cumque ullam voluptas qui quis quia atque ex qui anim eum amet', 'Numquam doloribus ut nihil a id ullam voluptates unde molestiae sint id nostrum dolore enim non', 'vrouw', 'Eligendi odit sed velit soluta iusto et sed pariatur Adipisci aut iusto ipsa nostrum repudiandae voluptatum non ut', 'Coronie', '1', 'terax@mailinator.com', '2023-02-16 20:52:48', NULL, '2023-02-16 20:52:48');
INSERT INTO `klanten` VALUES (4, 'Repellendus Doloribus voluptatem Illo possimus sint vel eum ad', 'Mollitia cupiditate omnis velit in veritatis commodi quae esse quos voluptatem voluptatem et similique rem saepe corporis quibusdam molestiae cillum', 'man', 'Blanditiis et porro iste voluptatem voluptatem Quo magni dolor sunt modi ipsum', 'Commewijne', '2', 'vexiqy@mailinator.com', '2023-02-16 20:52:58', NULL, '2023-02-16 20:52:58');
INSERT INTO `klanten` VALUES (5, 'Dolore corporis velit laborum lorem accusantium', 'Laborum Et recusandae Possimus enim hic iure eum omnis illo sed temporibus voluptatibus ut suscipit architecto enim vero', 'vrouw', 'Dolor aut maiores vitae quia sint laborum in totam vel nisi voluptas est aperiam laborum eos vitae qui', 'Sipaliwini', '25', 'pefin@mailinator.com', '2023-02-16 20:53:07', NULL, '2023-02-16 20:53:07');
INSERT INTO `klanten` VALUES (6, 'Voluptatem consequatur blanditiis in quam', 'Lorem mollit qui ullam adipisci quo non ipsum natus', 'vrouw', 'Exercitationem aspernatur molestiae quasi reiciendis ipsum dolores amet et beatae perferendis voluptatum eum', 'Sipaliwini', '67', 'qoheqy@mailinator.com', '2023-02-16 20:53:29', NULL, '2023-02-16 20:53:29');
INSERT INTO `klanten` VALUES (7, 'Nulla sunt placeat officiis doloremque eos alias dolor', 'Voluptas id quis ut ex fugiat sed iure occaecat ut officia quia ab repudiandae', 'vrouw', 'Officia quis Nam harum nisi laborum Enim voluptatem recusandae Magnam occaecat laborum Perferendis', 'Paramaribo', '14', 'tasu@mailinator.com', '2023-02-16 20:53:40', NULL, '2023-02-16 20:53:40');
INSERT INTO `klanten` VALUES (8, 'Aliquip nihil possimus numquam quia magnam ducimus sunt nulla enim laborum Ea accusamus aliqua Deleniti', 'Facilis consectetur doloribus non cillum pariatur Obcaecati provident beatae aut', 'vrouw', 'Modi id quae aliquip irure sunt in quisquam et', 'Paramaribo', '20', 'ruzuxaxo@mailinator.com', '2023-02-16 20:53:52', NULL, '2023-02-16 20:53:52');
INSERT INTO `klanten` VALUES (9, 'Anim ea impedit sunt officia maxime non tempore quia laudantium sint sit esse nihil eligendi consequat', 'Numquam qui ratione corporis est et quis maiores quo vitae aut incidunt labore enim est sit eaque ad officiis', 'vrouw', 'Expedita harum blanditiis magni qui in distinctio Distinctio Nihil', 'Marowijne', '99', 'gahyt@mailinator.com', '2023-02-16 20:54:00', NULL, '2023-02-16 20:54:00');
INSERT INTO `klanten` VALUES (10, 'Perspiciatis autem dolor aute id qui iste culpa ab', 'Cillum obcaecati nulla velit elit deserunt amet quibusdam quo omnis fugit magna quibusdam ex', 'vrouw', 'Atque voluptas quia sed labore reprehenderit nisi a quas', 'Brokopondo', '16', 'seduri@mailinator.com', '2023-02-16 20:54:18', NULL, '2023-02-16 20:54:18');
INSERT INTO `klanten` VALUES (11, 'Omnis et dicta ipsum consectetur sunt quisquam enim nulla', 'Atque laboris enim fuga Aut et veritatis non quo est odit', 'man', 'Quae reprehenderit dicta architecto iste veritatis ad corporis nulla odit nobis nostrum corrupti commodi', 'Brokopondo', '90', 'hogari@mailinator.com', '2023-02-16 20:54:25', NULL, '2023-02-16 20:54:41');

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
) ENGINE = MyISAM AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of leveranciers
-- ----------------------------
INSERT INTO `leveranciers` VALUES (1, 'Rerum eligendi accusantium reiciendis qui ullamco ut inventore', 'Cillum ut molestias tempora labore minus itaque quis accusamus deleniti mollit tempore sint non harum dolores dolore exercitationem qui quia', 'Marowijne', 'Ut eu rerum saepe voluptatem minima veniam doloremque ut maiores cum anim sit veritatis laboris provident dignissimos', '72', 'https://www.tur.cm', '2023-02-16 20:55:05', '2023-02-16 20:55:05', NULL, NULL);
INSERT INTO `leveranciers` VALUES (2, 'Repellendus Accusamus sed voluptate enim dolorem molestias', 'Laborum sint sit consequuntur occaecat blanditiis error minima neque vel sit id et dolore in dolorem autem eius asperiores quia', 'Coronie', 'Sed repellendus Laudantium architecto veritatis distinctio', '55', 'https://www.bokohuniluzyxyt.biz', '2023-02-16 20:55:11', '2023-02-16 20:55:11', NULL, NULL);
INSERT INTO `leveranciers` VALUES (3, 'Dolore sint dolores illum ratione non eaque in doloribus eligendi est non', 'Laborum id aliquam et ut voluptates eiusmod autem et iure voluptatem', 'Saramacca', 'Voluptas dolorem dolor minim sit consequuntur officia doloremque enim accusamus nihil minim do eu natus voluptatem excepteur et', '54', 'https://www.tagyxuvixedil.mobi', '2023-02-16 20:55:20', '2023-02-16 20:55:20', NULL, NULL);
INSERT INTO `leveranciers` VALUES (4, 'Ab nulla minima aut ad excepturi maiores cum cillum ut', 'Explicabo Voluptatem voluptatem sunt facilis Nam animi tempora', 'Coronie', 'Voluptatem eos placeat Nam repudiandae enim irure', '27', 'https://www.jucexaru.me.uk', '2023-02-16 20:55:27', '2023-02-16 20:55:27', NULL, NULL);
INSERT INTO `leveranciers` VALUES (5, 'Sed dolore architecto facere nostrud', 'Dolores dignissimos vero veniam enim fuga Nostrud veritatis et non molestiae ut ad et tempore iusto consectetur est aut ut', 'Brokopondo', 'Velit et tempora quod ratione laudantium quos voluptates ut eveniet vel voluptas adipisci', '38', 'https://www.lavabis.com', '2023-02-16 20:55:39', '2023-02-16 20:55:39', NULL, NULL);
INSERT INTO `leveranciers` VALUES (6, 'Quis autem esse consequatur deserunt sit ut dolorum porro ab beatae exercitationem ipsam consequatur exercitationem soluta dicta quia ipsum omnis', 'Corporis quis fuga Et molestias consequatur anim', 'Wanica', 'Deleniti consequatur Accusantium autem sit minima voluptatum consequatur duis voluptates', '86', 'https://www.homijiz.org.uk', '2023-02-16 20:55:50', '2023-02-16 20:55:50', NULL, NULL);
INSERT INTO `leveranciers` VALUES (7, 'Eos ipsam dolore explicabo Molestiae officiis ut consequatur qui qui architecto exercitationem facilis voluptatibus minus et hic qui est', 'Illum asperiores voluptatem Molestias quibusdam ex amet sunt proident omnis nulla', 'Saramacca', 'Laborum Et qui quo quae sed eligendi quas atque quam consequuntur', '70', 'https://www.zumyvipin.in', '2023-02-16 20:56:00', '2023-02-16 20:56:00', NULL, NULL);
INSERT INTO `leveranciers` VALUES (8, 'Magnam iusto laboris et nisi eaque esse magnam velit labore in aut ad maxime magna in optio tempora nostrud', 'Cupidatat voluptatum amet dolores eligendi veritatis sed tempora dolor tempor est ex in voluptatem Quis sapiente dolore', 'Commewijne', 'Ipsa modi consectetur soluta dolorum sapiente', '30', 'https://www.zeryvopab.com.au', '2023-02-16 20:56:11', '2023-02-16 20:56:11', NULL, NULL);
INSERT INTO `leveranciers` VALUES (9, 'Quis pariatur Dolor est recusandae Sit ducimus cumque et placeat lorem eligendi qui sit reprehenderit', 'At quae qui dolore aperiam reiciendis id eveniet in natus sint', 'Paramaribo', 'Aut aperiam qui minus sit est possimus qui', '15', 'https://www.zuquzokoqoj.org.uk', '2023-02-16 20:56:18', '2023-02-16 20:56:18', NULL, NULL);
INSERT INTO `leveranciers` VALUES (10, 'Dolor pariatur Est eius sapiente veniam vitae ea harum est esse laborum', 'Molestias sit illum dignissimos dignissimos ipsa quia aut', 'Commewijne', 'Sit dolor reprehenderit aperiam aut sint id molestiae aliquid eos aliquip omnis sit molestiae doloremque quos voluptatem Iure nobis nulla', '65', 'https://www.qyqy.com', '2023-02-16 20:56:31', '2023-02-16 20:56:31', NULL, NULL);
INSERT INTO `leveranciers` VALUES (11, 'Ipsum ipsum velit laborum ipsum nisi autem quod esse sequi aut dolor est nihil omnis', 'Quibusdam eiusmod aut laboris aperiam ut molestiae velit vel aut velit dolores ipsum officiis vitae natus ab cupidatat necessitatibus', 'Commewijne', 'Mollit iste veniam suscipit commodo fugiat eligendi sunt blanditiis aut et est minim explicabo Id dolores qui quaerat voluptate odit', '36', 'https://www.bivosy.ca', '2023-02-16 20:56:44', '2023-02-16 20:56:44', NULL, NULL);

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
INSERT INTO `users` VALUES (3, 'User', 'user@user.com', 'user', NULL, '$2y$10$g0I1X.DxLL33HGeJT6VHuuHeYuDeK42XUnQgQw0w0MAp3O.a/5S3a', NULL, '2023-02-15 21:03:01', '2023-02-16 20:51:10', NULL);

SET FOREIGN_KEY_CHECKS = 1;
