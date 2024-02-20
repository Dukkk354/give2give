/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50532
 Source Host           : localhost:3306
 Source Schema         : shopy_db

 Target Server Type    : MySQL
 Target Server Version : 50532
 File Encoding         : 65001

 Date: 12/02/2024 21:27:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `id_kategori` int(10) NULL DEFAULT NULL,
  `nm_kategori` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (1, 'Elektronik');
INSERT INTO `kategori` VALUES (2, 'Makanan');
INSERT INTO `kategori` VALUES (3, 'Minuman');
INSERT INTO `kategori` VALUES (4, 'Mobil');
INSERT INTO `kategori` VALUES (5, 'Motor');
INSERT INTO `kategori` VALUES (6, 'Peralatan Mandi');
INSERT INTO `kategori` VALUES (7, 'Rumah Tangga');
INSERT INTO `kategori` VALUES (8, 'Alat Masak');
INSERT INTO `kategori` VALUES (9, 'Pakaian');
INSERT INTO `kategori` VALUES (10, 'Komputer & Aksesoris');
INSERT INTO `kategori` VALUES (11, 'Buku / Majalah');
INSERT INTO `kategori` VALUES (12, 'Handphone');
INSERT INTO `kategori` VALUES (13, 'Tas');
INSERT INTO `kategori` VALUES (14, 'Sepatu');

-- ----------------------------
-- Table structure for muser
-- ----------------------------
DROP TABLE IF EXISTS `muser`;
CREATE TABLE `muser`  (
  `iduser` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `oto` int(2) NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sektor` int(1) NULL DEFAULT NULL,
  `no_telp` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`iduser`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of muser
-- ----------------------------
INSERT INTO `muser` VALUES (1, 'admin', 'admin', 1, 'Jidan Hafidz Fauzi', 'Klaten', 1, '6285232388630');
INSERT INTO `muser` VALUES (2, 'hafidz', 'hafidz123', 2, 'Si Penjual 2', 'Jakarta', 2, '6285727896216');
INSERT INTO `muser` VALUES (3, 'jidan', 'jidan123', 2, 'Penjual 3', 'Bekasi', 1, '0852575830303');

-- ----------------------------
-- Table structure for t_product
-- ----------------------------
DROP TABLE IF EXISTS `t_product`;
CREATE TABLE `t_product`  (
  `id_product` int(5) NOT NULL AUTO_INCREMENT,
  `nama_product` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `harga` int(11) NULL DEFAULT NULL,
  `kategori` int(10) NULL DEFAULT NULL,
  `kondisi` int(1) NULL DEFAULT 0,
  `keterangan` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `spesifikasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `iduser` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `verif` int(1) NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  `gambar0` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gambar1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gambar2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gambar3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_time` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_product`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_product
-- ----------------------------
INSERT INTO `t_product` VALUES (1, 'Handuk', 40000, 6, 0, '', 'Mudah menyerap', '1', 1, 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_product` VALUES (2, 'Sunsilk', 10000, 6, 0, '', 'Anti Ketombe', '2', 1, 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_product` VALUES (3, 'Gunting', 15000, 7, 1, '', 'Tidak mudah berkarat', '1', 0, 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_product` VALUES (13, 'Tas', 1212, 9, 1, '', 'Tidak mudah berkarat', '1', 0, 1, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `t_product` VALUES (14, 'Aqua', 10000, 3, 1, 'Dari sumber mata air pilihan', 'Kaya ada manis manisnya', '1', 1, 0, '', NULL, NULL, NULL, NULL);
INSERT INTO `t_product` VALUES (19, 'Iphone 11', 11000000, 1, 1, 'Kondisi mulus, pemakaian wajar, kondisi 98%', 'Ram 8 gb\r\ninternal 256 gb\r\nkamera 48 mp', '1', 1, 0, 'iduser1_index1_1707718159.jpg', 'iduser1_index2_1707718159.jpg', 'iduser1_index3_1707718159.jpg', 'iduser1_index4_1707718159.jpg', '2024-02-12 13:08:00');

SET FOREIGN_KEY_CHECKS = 1;
