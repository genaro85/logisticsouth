
-- ----------------------------
--  Records of `ADMINISTRADOR`
-- ----------------------------
INSERT INTO `ADMINISTRADOR` VALUES ('1', 'Alexander', 'Newski', '', 'admin', '123', '');
INSERT INTO `ADMINISTRADOR` VALUES ('2', 'Genaro', 'Aguero', '', 'admin1', '123', '');
INSERT INTO `ADMINISTRADOR` VALUES ('3', 'Patricia', 'Ayuso', '', 'admin2', '123', '');

-- ----------------------------
--  Records of `DOCUMENTO`
-- ----------------------------
INSERT INTO `DOCUMENTO` VALUES ('1', 'Factura Proforma', null, null);
INSERT INTO `DOCUMENTO` VALUES ('2', 'CNP Permiso Sanitario de Importación', null, '1');
INSERT INTO `DOCUMENTO` VALUES ('3', 'CNP Exoneración de impuestos de importación', null, '1');
INSERT INTO `DOCUMENTO` VALUES ('4', 'CNP Exención de IVA', null, '1');
INSERT INTO `DOCUMENTO` VALUES ('5', 'CNP Cadivi', '180', '1');
INSERT INTO `DOCUMENTO` VALUES ('6', 'Permiso Sanitario de Importación', null, '2');
INSERT INTO `DOCUMENTO` VALUES ('7', 'AAD', '180', '5');
INSERT INTO `DOCUMENTO` VALUES ('8', 'Exoneración de IVA', null, '4');
INSERT INTO `DOCUMENTO` VALUES ('9', 'Exoneración de impuesto de Importación', null, '3');
INSERT INTO `DOCUMENTO` VALUES ('10', 'Carta de Crédito', null, '7');
INSERT INTO `DOCUMENTO` VALUES ('11', 'Documento de Embarque (BL)', null, '10');
INSERT INTO `DOCUMENTO` VALUES ('12', 'Documentos de Nacionalización', null, '8');
INSERT INTO `DOCUMENTO` VALUES ('13', 'Documentos de Nacionalización', null, '9');
INSERT INTO `DOCUMENTO` VALUES ('14', 'Documentos de Nacionalización', null, '6');
INSERT INTO `DOCUMENTO` VALUES ('15', 'Documentos de Nacionalización', null, '11');

-- ----------------------------
--  Records of `PROCESO`
-- ----------------------------
INSERT INTO `PROCESO` VALUES ('1', 'Alimentos 2010', '180');
INSERT INTO `PROCESO` VALUES ('2', 'Bienes de Capital 2010', '180');

-- ----------------------------
--  Records of `FASE`
-- ----------------------------
INSERT INTO `FASE` VALUES ('1', 'Solicitud CNP', null, 0x2f706870366e73505348333932342e706e67, '1', null);
INSERT INTO `FASE` VALUES ('2', 'CNP - Minal', null, 0x2f706870645352303938343832312e6a7067, '1', null);
INSERT INTO `FASE` VALUES ('3', 'Cadivi', null, null, '1', null);
INSERT INTO `FASE` VALUES ('4', 'Banco', null, null, '1', null);
INSERT INTO `FASE` VALUES ('5', 'Transporte', null, null, '1', null);
INSERT INTO `FASE` VALUES ('6', 'Aduana', null, null, '1', null);
INSERT INTO `FASE` VALUES ('7', 'Proforma', null, null, '2', null);
INSERT INTO `FASE` VALUES ('8', 'CNP - Milco', null, null, '2', null);
INSERT INTO `FASE` VALUES ('9', 'Cadivi', null, null, '2', null);
INSERT INTO `FASE` VALUES ('10', 'Banco', null, null, '2', null);
INSERT INTO `FASE` VALUES ('11', 'Transporte', null, null, '2', null);
INSERT INTO `FASE` VALUES ('12', 'Aduana', null, null, '2', null);

-- ----------------------------
--  Records of `DOCUMENTOS_FASE`
-- ----------------------------
INSERT INTO `DOCUMENTOS_FASE` VALUES ('1', '1');
INSERT INTO `DOCUMENTOS_FASE` VALUES ('2', '2');
INSERT INTO `DOCUMENTOS_FASE` VALUES ('5', '2');
INSERT INTO `DOCUMENTOS_FASE` VALUES ('7', '3');
INSERT INTO `DOCUMENTOS_FASE` VALUES ('11', '5');

-- ----------------------------
--  Records of `EMPLEADO`
-- ----------------------------
INSERT INTO `EMPLEADO` VALUES ('1', 'Moraima', 'Rodriguez', '548325', 'emp', '1234', '');
INSERT INTO `EMPLEADO` VALUES ('2', 'Adolfredo', 'Pacheco', '5544325', 'emp2', '4321', '');

-- ----------------------------
--  Records of `EMPRESA`
-- ----------------------------
INSERT INTO `EMPRESA` VALUES ('1', 'Corporación Acuario C.A', 'J-25141693-4', 'Calle 24, C.C El sol, Local 56, Maracay, Edo. Aragua', '0241- 659-8485', 'usuario@acuario.com', 'acuario', '1234');
INSERT INTO `EMPRESA` VALUES ('2', 'Aroma de Venezuela C.A.', 'J-30550386-3', 'Avenida Carabobo, Zona industrial de Guacara, GalpÃ³n 3, Edo. Carabobo', '(0251) 456-8943', 'aroma@gmail.com', 'aroma', '1234');
INSERT INTO `EMPRESA` VALUES ('3', 'Alimentos Caribe C.A', 'J-23454378-8', 'Avenida PPL Chavez Candanga, Calle Rosa InÃ©s, Galpon Imperialista, EDO. Barinas', '(0414) 555-5543', 'alimentoscaribes@gmail.com', 'caribes', '1234');
INSERT INTO `EMPRESA` VALUES ('4', 'Frigorifico Zulia C.A', 'J-45497569-4', 'Calle urdaneta, Zona Industrial San Francisco, Edo. Zulia', '0261 345-3456', '', 'frigorificozulia', '1234');
INSERT INTO `EMPRESA` VALUES ('5', 'Frisca C.A', 'J-5438659-4', 'Avenida Urdaneta, NÂº 55, La CandelarÃ­a, Caracas', '', '', 'frisca', '1234');
INSERT INTO `EMPRESA` VALUES ('6', 'MLC Ingenieros C.A', 'J-32466745-6', 'Avenida circunvalaciÃ³n del Sol, Santa Paula, Caracas', '', '', 'mlc', '1234');

-- ----------------------------
--  Records of `PAIS`
-- ----------------------------
INSERT INTO `PAIS` VALUES ('1', 'Uruguay');
INSERT INTO `PAIS` VALUES ('2', 'Argentina');
INSERT INTO `PAIS` VALUES ('3', 'Ecuador');
INSERT INTO `PAIS` VALUES ('4', 'Brazil');
INSERT INTO `PAIS` VALUES ('5', 'Colombia');
INSERT INTO `PAIS` VALUES ('6', 'Bolivia');

-- ----------------------------
--  Records of `PROVEEDOR`
-- ----------------------------
INSERT INTO `PROVEEDOR` VALUES ('1', 'Aprimex S.A', 'Ruta 1, KM49, predio A2 A4', '598-98-120050', 'aprimex@gmail.com', '1');
INSERT INTO `PROVEEDOR` VALUES ('2', 'Grupo Mapear S.A', 'Carrera 24 zona industrial, Buenos Aires', '123-456-6545', '', '2');
INSERT INTO `PROVEEDOR` VALUES ('3', 'Exportadora de Granos S.A', 'Bogotá', '57 234 5423 086', '', '5');
INSERT INTO `PROVEEDOR` VALUES ('4', 'Especies y Colorantes S.A', 'Quito', '324-546-6789', '', '3');

-- ----------------------------
--  Records of `LICENCIA`
-- ----------------------------
INSERT INTO `LICENCIA` VALUES ('1', '5', '1', '2010-09-21', '2011-03-21', null, 'A-0428', '226893', '2011-03-20', 'En Proceso', 'Carta de Credito', '', '13600', '3895', '1');
INSERT INTO `LICENCIA` VALUES ('2', '1', '2', '2010-10-21', '2011-04-21', null, 'A-0842', '324555', '2011-04-20', 'En Proceso', 'Carta de Credito', '', '15600', '6595', '1');
INSERT INTO `LICENCIA` VALUES ('3', '6', '3', '2010-11-21', '2011-05-21', null, 'A-0435', '563454', '2011-05-20', 'En Proceso', 'Carta de Credito', '', '34600', '8795', '1');
-- ----------------------------
--  Records of `FASE_LICENCIA`
-- ----------------------------
INSERT INTO `FASE_LICENCIA` VALUES ('1', '2010-08-18', '2010-09-17', '1');
INSERT INTO `FASE_LICENCIA` VALUES ('1', '2010-09-01', null, '2');
INSERT INTO `FASE_LICENCIA` VALUES ('1', null, null, '3');
INSERT INTO `FASE_LICENCIA` VALUES ('1', '2010-09-17', null, '4');
INSERT INTO `FASE_LICENCIA` VALUES ('1', null, null, '5');
INSERT INTO `FASE_LICENCIA` VALUES ('1', null, null, '6');
INSERT INTO `FASE_LICENCIA` VALUES ('2', null, null, '7');
INSERT INTO `FASE_LICENCIA` VALUES ('2', null, null, '8');
INSERT INTO `FASE_LICENCIA` VALUES ('2', null, null, '9');
INSERT INTO `FASE_LICENCIA` VALUES ('2', null, null, '10');
INSERT INTO `FASE_LICENCIA` VALUES ('2', null, null, '11');
INSERT INTO `FASE_LICENCIA` VALUES ('2', null, null, '12');
INSERT INTO `FASE_LICENCIA` VALUES ('3', null, null, '1');
INSERT INTO `FASE_LICENCIA` VALUES ('3', null, null, '2');
INSERT INTO `FASE_LICENCIA` VALUES ('3', null, null, '3');
INSERT INTO `FASE_LICENCIA` VALUES ('3', null, null, '4');
INSERT INTO `FASE_LICENCIA` VALUES ('3', null, null, '5');
INSERT INTO `FASE_LICENCIA` VALUES ('3', null, null, '6');

-- ----------------------------
--  Records of `PRODUCTO`
-- ----------------------------
INSERT INTO `PRODUCTO` VALUES ('1', '7689.78.65', 'Pollo Entero Congelado', '', null, null);
INSERT INTO `PRODUCTO` VALUES ('2', '3425.56.23', 'Especies Saborizantes ', '', null, null);
INSERT INTO `PRODUCTO` VALUES ('3', '3455.54.32', 'Caraotas Negras', '', null, null);
INSERT INTO `PRODUCTO` VALUES ('4', '5434.56.43', 'Carnes de Bovino en cortes congelados ', '', null, null);
INSERT INTO `PRODUCTO` VALUES ('5', '6543.56.23', 'Atún en lata en aceite Vegetal', '', null, null);
INSERT INTO `PRODUCTO` VALUES ('6', '5643.76.43', 'Salmón ahumado congelado', '', null, null);
INSERT INTO `PRODUCTO` VALUES ('7', '4765.43.89', 'Aceitunas Negras', '', null, null);
INSERT INTO `PRODUCTO` VALUES ('8', '5678.43.56', 'Manzanas', '', null, null);
INSERT INTO `PRODUCTO` VALUES ('9', '5687.54.76', 'Peras', '', null, null);

-- ----------------------------
--  Records of `LISTA_PRODUCTO`
-- ----------------------------
INSERT INTO `LISTA_PRODUCTO` VALUES ('1', '1', '100', '100', 'Toneladas', '100');
INSERT INTO `LISTA_PRODUCTO` VALUES ('1', '4', '200', '200', 'Toneladas', '200');
INSERT INTO `LISTA_PRODUCTO` VALUES ('3', '1', '150', '150', 'Toneladas', '150');