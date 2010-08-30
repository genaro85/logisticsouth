-- ----------------------------
-- Records of proceso
-- ----------------------------
INSERT INTO `proceso` VALUES ('1', 'P1', '3');
INSERT INTO `proceso` VALUES ('2', 'P2', '4');
-- ----------------------------
-- Records of fase
-- ----------------------------
INSERT INTO `fase` VALUES ('1', 'F1', null, 0x41, '1');
INSERT INTO `fase` VALUES ('2', 'F2', null, 0x42, '1');
INSERT INTO `fase` VALUES ('3', 'F3', null, 0x43, '1');
INSERT INTO `fase` VALUES ('4', 'F1', null, 0x44, '2');

-- ----------------------------
-- Records of empresa
-- ----------------------------
INSERT INTO `empresa` VALUES ('1', 'POLAR', '333', 'LOS RUICES', '', '', '', '');

-- ----------------------------
-- Records of pais
-- ----------------------------
INSERT INTO `pais` VALUES ('1', 'BRASIL');

-- ---------------------------
-- Records of proveedor
-- ----------------------------
INSERT INTO `proveedor` VALUES ('1', 'BRASILEAN', 'SAO PAULO', '', '', '1');

-- ----------------------------
--  Records of `DOCUMENTO`
-- ----------------------------
INSERT INTO `DOCUMENTO` VALUES ('1', 'CNP Cadivi', '180', null), ('2', 'CNP Seniat', '180', null), ('3', 'AAD', '180', '1'), ('4', 'Carta de Credito', null, '3');

-- ----------------------------
--  Records of `DOCUMENTOS_FASE`
-- ----------------------------
INSERT INTO `DOCUMENTOS_FASE` VALUES ('1', '1'), ('3', '1'), ('4', '1'), ('2', '2');
