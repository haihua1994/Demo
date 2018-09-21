/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50722
 Source Host           : localhost:3306
 Source Schema         : demo

 Target Server Type    : MySQL
 Target Server Version : 50722
 File Encoding         : 65001

 Date: 21/09/2018 00:15:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for d_access
-- ----------------------------
DROP TABLE IF EXISTS `d_access`;
CREATE TABLE `d_access`  (
  `role_id` smallint(6) UNSIGNED NOT NULL,
  `node_id` smallint(6) UNSIGNED NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  INDEX `groupId`(`role_id`) USING BTREE,
  INDEX `nodeId`(`node_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of d_access
-- ----------------------------
INSERT INTO `d_access` VALUES (2, 1, 0, NULL);
INSERT INTO `d_access` VALUES (2, 2, 0, NULL);
INSERT INTO `d_access` VALUES (2, 3, 0, NULL);

-- ----------------------------
-- Table structure for d_admin
-- ----------------------------
DROP TABLE IF EXISTS `d_admin`;
CREATE TABLE `d_admin`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户UID',
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '用户昵称',
  `email` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '用户邮箱',
  `password` char(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `is_active` tinyint(4) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1 屏蔽用户',
  `remark` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '用户备注',
  `current_login_ip` char(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '本次登录IP',
  `current_login_time` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '本次登录时间',
  `prev_login_ip` char(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '上次登录IP',
  `prev_login_time` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '上次登录时间',
  `m_count` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '月登陆次数',
  `session` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '用户的session_id',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1003 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '后台用户表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of d_admin
-- ----------------------------
INSERT INTO `d_admin` VALUES (1, 'admin', 'admin@admin.com', '5e5e412ba149f7dd7f1119f04addc7c7', 0, 'super admin', '::1', 1537368644, '::1', 1537281800, 10, '8pcdv5fsmgn0m567iom79huftj');
INSERT INTO `d_admin` VALUES (1002, 'demo', 'demo@demo.com', '002981eb56280c90ef4d956e201d5d5e', 0, '', '::1', 1537281455, '0', 0, 1, 'brf249con494ffmah4g78e7841');

-- ----------------------------
-- Table structure for d_news
-- ----------------------------
DROP TABLE IF EXISTS `d_news`;
CREATE TABLE `d_news`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `remark` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `status` tinyint(4) UNSIGNED NOT NULL DEFAULT 0,
  `create_time` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `update_time` int(10) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1011 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of d_news
-- ----------------------------
INSERT INTO `d_news` VALUES (1010, '蜀道难-李白', '噫吁嚱，危乎高哉！蜀道之难，难于上青天！蚕丛及鱼凫，开国何茫然！尔来四万八千岁，不与秦塞通人烟。西当太白有鸟道，可以横绝峨眉巅。地崩山摧壮士死，然后天梯石栈相钩连。上有六龙回日之高标，下有冲波逆折之回川。黄鹤之飞尚不得过，猿猱欲度愁攀援。青泥何盘盘，百步九折萦岩峦。扪参历井仰胁息，以手抚膺坐长叹。', '/Uploads/news/20180920/5ba3c008a4f08.jpg', '&lt;p class=&quot;poem-detail-main-text&quot; id=&quot;body_p&quot; style=&quot;font-size: 15px; line-height: 25px; font-family: Arial, sans-serif; text-align: start; white-space: normal;&quot;&gt;&lt;span id=&quot;body_1_0&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;噫吁嚱&lt;/span&gt;，&lt;/span&gt;&lt;span id=&quot;body_1_1&quot;&gt;危乎高哉！&lt;/span&gt;&lt;span id=&quot;body_1_2&quot;&gt;蜀道之难，&lt;/span&gt;&lt;span id=&quot;body_1_3&quot;&gt;难于上青天！&lt;/span&gt;&lt;span id=&quot;body_1_4&quot;&gt;蚕丛及鱼凫，&lt;/span&gt;&lt;span id=&quot;body_1_5&quot;&gt;开国&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;何茫然&lt;/span&gt;！&lt;/span&gt;&lt;span id=&quot;body_1_6&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;尔&lt;/span&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;来&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;四万八千岁&lt;/span&gt;，&lt;/span&gt;&lt;span id=&quot;body_1_7&quot;&gt;不与&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;秦塞&lt;/span&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;通人烟&lt;/span&gt;。&lt;/span&gt;&lt;span id=&quot;body_1_8&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;西&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;当&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;太白&lt;/span&gt;有&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;鸟道&lt;/span&gt;，&lt;/span&gt;&lt;span id=&quot;body_1_9&quot;&gt;可以&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;横绝&lt;/span&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;峨眉巅&lt;/span&gt;。&lt;/span&gt;&lt;span id=&quot;body_1_10&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;地崩山摧壮士死&lt;/span&gt;，&lt;/span&gt;&lt;span id=&quot;body_1_11&quot;&gt;然后天梯&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;石栈&lt;/span&gt;相钩连。&lt;/span&gt;&lt;span id=&quot;body_1_12&quot;&gt;上有&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;六龙回日&lt;/span&gt;之&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;高标&lt;/span&gt;，&lt;/span&gt;&lt;span id=&quot;body_1_13&quot;&gt;下有&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;冲波&lt;/span&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;逆折&lt;/span&gt;之&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;回川&lt;/span&gt;。&lt;/span&gt;&lt;span id=&quot;body_1_14&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;黄鹤&lt;/span&gt;之飞&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;尚&lt;/span&gt;不&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;得&lt;/span&gt;过，&lt;/span&gt;&lt;span id=&quot;body_1_15&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;猿猱&lt;/span&gt;欲度愁攀援。&lt;/span&gt;&lt;span id=&quot;body_1_16&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;青泥&lt;/span&gt;何&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;盘盘&lt;/span&gt;，&lt;/span&gt;&lt;span id=&quot;body_1_17&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;百步九折&lt;/span&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;萦&lt;/span&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;岩峦&lt;/span&gt;。&lt;/span&gt;&lt;span id=&quot;body_1_18&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;扪参&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;历&lt;/span&gt;井&lt;/span&gt;仰&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;胁息&lt;/span&gt;，&lt;/span&gt;&lt;span id=&quot;body_1_19&quot;&gt;以手抚&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;膺&lt;/span&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;坐&lt;/span&gt;长叹。&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;poem-detail-main-text&quot; id=&quot;body_p&quot; style=&quot;font-size: 15px; line-height: 25px; font-family: Arial, sans-serif; text-align: start; white-space: normal;&quot;&gt;&lt;span id=&quot;body_2_0&quot;&gt;问&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;君&lt;/span&gt;西游何时还？&lt;/span&gt;&lt;span id=&quot;body_2_1&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;畏途&lt;/span&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;巉岩&lt;/span&gt;不可攀。&lt;/span&gt;&lt;span id=&quot;body_2_2&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;但见&lt;/span&gt;悲鸟&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;号古木&lt;/span&gt;，&lt;/span&gt;&lt;span id=&quot;body_2_3&quot;&gt;雄飞雌&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;从&lt;/span&gt;绕林间。&lt;/span&gt;&lt;span id=&quot;body_2_4&quot;&gt;又闻&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;子规&lt;/span&gt;啼夜月，&lt;/span&gt;&lt;span id=&quot;body_2_5&quot;&gt;愁空山。&lt;/span&gt;&lt;span id=&quot;body_2_6&quot;&gt;蜀道之难，&lt;/span&gt;&lt;span id=&quot;body_2_7&quot;&gt;难于上青天，&lt;/span&gt;&lt;span id=&quot;body_2_8&quot;&gt;使人听此&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;凋朱颜&lt;/span&gt;！&lt;/span&gt;&lt;span id=&quot;body_2_9&quot;&gt;连峰&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;去&lt;/span&gt;天不&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;盈&lt;/span&gt;尺，&lt;/span&gt;&lt;span id=&quot;body_2_10&quot;&gt;枯松倒挂倚绝壁。&lt;/span&gt;&lt;span id=&quot;body_2_11&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;飞湍&lt;/span&gt;瀑流争&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;喧豗&lt;/span&gt;，&lt;/span&gt;&lt;span id=&quot;body_2_12&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;砯崖&lt;/span&gt;转石万&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;壑&lt;/span&gt;雷。&lt;/span&gt;&lt;span id=&quot;body_2_13&quot;&gt;其险也如此，&lt;/span&gt;&lt;span id=&quot;body_2_14&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;嗟&lt;/span&gt;尔远道之人&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;胡为&lt;/span&gt;乎来哉！&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;poem-detail-main-text&quot; id=&quot;body_p&quot; style=&quot;font-size: 15px; line-height: 25px; font-family: Arial, sans-serif; text-align: start; white-space: normal;&quot;&gt;&lt;span id=&quot;body_3_0&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;剑阁&lt;/span&gt;峥嵘而崔嵬，&lt;/span&gt;&lt;span id=&quot;body_3_1&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;一夫&lt;/span&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;当关&lt;/span&gt;，&lt;/span&gt;&lt;span id=&quot;body_3_2&quot;&gt;万夫&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;莫开&lt;/span&gt;。&lt;/span&gt;&lt;span id=&quot;body_3_3&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;所守&lt;/span&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;或匪亲&lt;/span&gt;，&lt;/span&gt;&lt;span id=&quot;body_3_4&quot;&gt;化为狼与豺。&lt;/span&gt;&lt;span id=&quot;body_3_5&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;朝&lt;/span&gt;避猛虎，&lt;/span&gt;&lt;span id=&quot;body_3_6&quot;&gt;夕避长蛇；&lt;/span&gt;&lt;span id=&quot;body_3_7&quot;&gt;磨牙&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;吮&lt;/span&gt;血，&lt;/span&gt;&lt;span id=&quot;body_3_8&quot;&gt;杀人如麻。&lt;/span&gt;&lt;span id=&quot;body_3_9&quot;&gt;&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;锦城&lt;/span&gt;虽云乐，&lt;/span&gt;&lt;span id=&quot;body_3_10&quot;&gt;不如早还家。&lt;/span&gt;&lt;span id=&quot;body_3_11&quot;&gt;蜀道之难，&lt;/span&gt;&lt;span id=&quot;body_3_12&quot;&gt;难于上青天，&lt;/span&gt;&lt;span id=&quot;body_3_13&quot;&gt;侧身西望长&lt;span class=&quot;body-zhushi-span&quot; style=&quot;border-bottom: 1px solid rgb(38, 115, 219); cursor: pointer;&quot;&gt;咨嗟&lt;/span&gt;！&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-family: Arial, sans-serif; font-size: 13px; white-space: normal;&quot;&gt;啊！何其高竣，何其峭险！蜀道太难走呵，简直难于上青天；传说中蚕丛和鱼凫建立了蜀国，开国的年代实在久远无法详谈。自从那时至今约有四万八千年，秦蜀被秦岭所阻从不沟通往返。西边太白山有飞鸟能过的小道。从那小路走可横渡峨眉山顶端。山崩地裂蜀国五壮士被压死了，两地才有天梯栈道开始相通连。上有挡住太阳神六龙车的山巅，下有激浪排空迂回曲折的大川。善于高飞的黄鹤尚且无法飞过，即使猢狲要想翻过也愁于攀援。青泥岭多么曲折绕着山峦盘旋，百步之内萦绕岩峦转九个弯弯。屏住呼吸仰头过参井皆可触摸，用手抚胸惊恐不已徒长吁短叹。好朋友呵请问你西游何时回还？可怕的岩山栈道实在难以登攀！只见那悲鸟在古树上哀鸣啼叫；雄雌相随飞翔在原始森林之间。又听见月夜里杜鹃声声哀鸣，悲声回荡在空山中愁情更添。蜀道太难走呵，简直难于上青天；叫人听到这些怎么不脸色突变？山峰座座相连离天还不到一尺；枯松老枝倒挂倚贴在绝壁之间。漩涡飞转瀑布飞泻争相喧闹着；水石相击转动像万壑鸣雷一般。那去处恶劣艰险到了这种地步；唉呀呀你这个远方而来的客人，为了什么而来到这险要的地方？剑阁那地方崇峻巍峨高入云端，只要一人把守，千军万马难攻占。驻守的官员若不是自己的近亲；难免要变为豺狼踞此为非造反。清晨你要提心吊胆地躲避猛虎；傍晚你要警觉防范长蛇的灾难。豺狼虎豹磨牙吮血真叫人不安；毒蛇猛兽杀人如麻即令你胆寒。锦官城虽然说是个快乐的所在；如此险恶还不如早早地把家还。蜀道太难走呵，简直难于上青天；侧身西望令人不免感慨与长叹！&lt;/span&gt;&lt;/p&gt;', 1, 1537458187, 1537458187);

-- ----------------------------
-- Table structure for d_node
-- ----------------------------
DROP TABLE IF EXISTS `d_node`;
CREATE TABLE `d_node`  (
  `id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT 0,
  `remark` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sort` smallint(6) UNSIGNED NULL DEFAULT NULL,
  `pid` smallint(6) UNSIGNED NOT NULL,
  `level` tinyint(1) UNSIGNED NOT NULL,
  `show` tinyint(1) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `level`(`level`) USING BTREE,
  INDEX `pid`(`pid`) USING BTREE,
  INDEX `status`(`status`) USING BTREE,
  INDEX `name`(`name`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of d_node
-- ----------------------------
INSERT INTO `d_node` VALUES (1, 'Admin', '系统', 1, '', NULL, 0, 1, 0);
INSERT INTO `d_node` VALUES (2, 'Index', '用户管理', 1, '', NULL, 1, 2, 0);
INSERT INTO `d_node` VALUES (3, 'index', '账户设置', 1, '', NULL, 2, 3, 0);
INSERT INTO `d_node` VALUES (4, 'News', '新闻管理', 0, '', NULL, 1, 2, 1);
INSERT INTO `d_node` VALUES (5, 'newslist', '新闻列表', 0, '', NULL, 4, 3, 1);

-- ----------------------------
-- Table structure for d_role
-- ----------------------------
DROP TABLE IF EXISTS `d_role`;
CREATE TABLE `d_role`  (
  `id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pid` smallint(6) NULL DEFAULT NULL,
  `status` tinyint(1) UNSIGNED NULL DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pid`(`pid`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of d_role
-- ----------------------------
INSERT INTO `d_role` VALUES (2, '管理员', NULL, 1, '');

-- ----------------------------
-- Table structure for d_role_user
-- ----------------------------
DROP TABLE IF EXISTS `d_role_user`;
CREATE TABLE `d_role_user`  (
  `role_id` mediumint(9) UNSIGNED NULL DEFAULT NULL,
  `user_id` char(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  INDEX `group_id`(`role_id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of d_role_user
-- ----------------------------
INSERT INTO `d_role_user` VALUES (2, '1002');

SET FOREIGN_KEY_CHECKS = 1;
