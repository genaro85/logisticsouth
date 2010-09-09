/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 50144
 Source Host           : localhost
 Source Database       : sglbd

 Target Server Type    : MySQL
 Target Server Version : 50144
 File Encoding         : utf-8

 Date: 09/07/2010 15:46:28 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `ADMINISTRADOR`
-- ----------------------------
DROP TABLE IF EXISTS `ADMINISTRADOR`;
CREATE TABLE `ADMINISTRADOR` (
  `idADMINISTRADOR` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `login` varchar(45) NOT NULL,
  `password` varchar(18) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idADMINISTRADOR`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `ADMINISTRADOR`
-- ----------------------------
INSERT INTO `ADMINISTRADOR` VALUES ('1', 'Alexander', 'Newski', '', 'admin', '123', ''), ('2', 'Genaro', 'Aguero', '', 'admin1', '123', '');

-- ----------------------------
--  Table structure for `CODIGO_PAGO`
-- ----------------------------
DROP TABLE IF EXISTS `CODIGO_PAGO`;
CREATE TABLE `CODIGO_PAGO` (
  `LICENCIA_idLICENCIA` int(11) NOT NULL,
  `TIPO_DE_PAGO_idTIPO_DE_PAGO` int(11) NOT NULL,
  `numRef` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `divisa` varchar(45) DEFAULT NULL,
  `monto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`LICENCIA_idLICENCIA`,`TIPO_DE_PAGO_idTIPO_DE_PAGO`),
  KEY `fk_LICENCIA_has_TIPO DE PAGO_LICENCIA1` (`LICENCIA_idLICENCIA`),
  KEY `fk_LICENCIA_has_TIPO DE PAGO_TIPO DE PAGO1` (`TIPO_DE_PAGO_idTIPO_DE_PAGO`),
  CONSTRAINT `fk_LICENCIA_has_TIPO DE PAGO_LICENCIA1` FOREIGN KEY (`LICENCIA_idLICENCIA`) REFERENCES `licencia` (`idLICENCIA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_has_TIPO DE PAGO_TIPO DE PAGO1` FOREIGN KEY (`TIPO_DE_PAGO_idTIPO_DE_PAGO`) REFERENCES `tipo_de_pago` (`idTIPO_DE_PAGO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `DOCUMENTO`
-- ----------------------------
DROP TABLE IF EXISTS `DOCUMENTO`;
CREATE TABLE `DOCUMENTO` (
  `idDOCUMENTO` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) NOT NULL,
  `duracion` int(11) DEFAULT NULL,
  `DOCUMENTO_idDOCUMENTO` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDOCUMENTO`),
  KEY `fk_DOCUMENTO_DOCUMENTO1` (`DOCUMENTO_idDOCUMENTO`),
  CONSTRAINT `fk_DOCUMENTO_DOCUMENTO1` FOREIGN KEY (`DOCUMENTO_idDOCUMENTO`) REFERENCES `documento` (`idDOCUMENTO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `DOCUMENTO`
-- ----------------------------
INSERT INTO `DOCUMENTO` VALUES ('1', 'Factura Proforma', null, null), ('2', 'CNP Permiso Sanitario de ImportaciÃ³n', null, '1'), ('3', 'CNP ExoneraciÃ³n de impuestos de importaciÃ³n', null, '1'), ('4', 'CNP ExenciÃ³n de IVA', null, '1'), ('5', 'CNP Cadivi', '180', '1'), ('6', 'Permiso Sanitario de ImportaciÃ³n', null, '2'), ('7', 'AAD', '180', '5'), ('8', 'ExoneraciÃ³n de IVA', null, '4'), ('9', 'ExoneraciÃ³n de impuesto de ImportaciÃ³n', null, '3'), ('10', 'Carta de CrÃ©dito', null, '7'), ('11', 'Bill of Lading', null, '10'), ('12', 'Documentos de NacionalizaciÃ³n', null, '8'), ('13', 'Documentos de NacionalizaciÃ³n', null, '9'), ('14', 'Documentos de NacionalizaciÃ³n', null, '6'), ('15', 'Documentos de NacionalizaciÃ³n', null, '11');

-- ----------------------------
--  Table structure for `DOCUMENTOS_FASE`
-- ----------------------------
DROP TABLE IF EXISTS `DOCUMENTOS_FASE`;
CREATE TABLE `DOCUMENTOS_FASE` (
  `DOCUMENTO_idDOCUMENTO` int(11) NOT NULL,
  `FASE_idFASE` int(11) DEFAULT NULL,
  PRIMARY KEY (`DOCUMENTO_idDOCUMENTO`),
  KEY `fk_LICENCIA_has_FASE_has_DOCUMENTO_DOCUMENTO1` (`DOCUMENTO_idDOCUMENTO`),
  KEY `fk_LISTA_DE_DOCUMENTO_FASE1` (`FASE_idFASE`),
  CONSTRAINT `fk_LICENCIA_has_FASE_has_DOCUMENTO_DOCUMENTO1` FOREIGN KEY (`DOCUMENTO_idDOCUMENTO`) REFERENCES `documento` (`idDOCUMENTO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_LISTA_DE_DOCUMENTO_FASE1` FOREIGN KEY (`FASE_idFASE`) REFERENCES `fase` (`idFASE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `DOCUMENTOS_FASE`
-- ----------------------------
INSERT INTO `DOCUMENTOS_FASE` VALUES ('1', '1'), ('2', '2');

-- ----------------------------
--  Table structure for `EMPLEADO`
-- ----------------------------
DROP TABLE IF EXISTS `EMPLEADO`;
CREATE TABLE `EMPLEADO` (
  `idEMPLEADO` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `login` varchar(45) NOT NULL,
  `password` varchar(18) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEMPLEADO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `EMPLEADO`
-- ----------------------------
INSERT INTO `EMPLEADO` VALUES ('1', 'Moraima', 'Rodriguez', '548325', 'emp', '1234', ''), ('2', 'Adolfredo', 'Pacheco', '5544325', 'emp2', '4321', '');

-- ----------------------------
--  Table structure for `EMPRESA`
-- ----------------------------
DROP TABLE IF EXISTS `EMPRESA`;
CREATE TABLE `EMPRESA` (
  `idEMPRESA` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) NOT NULL,
  `rif` varchar(45) NOT NULL,
  `direccion` text NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEMPRESA`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `EMPRESA`
-- ----------------------------
INSERT INTO `EMPRESA` VALUES ('1', 'CorporaciÃ³n Acuario C.A', 'J-25141693-4', 'Calle 24, C.C El sol, Local 56, Maracay, Edo. Aragua', '0241- 659-8485', 'usuario@acuario.com', 'acuario', '1234'), ('2', 'Aroma de Venezuela C.A.', 'J-30550386-3', 'Avenida Carabobo, Zona industrial de Guacara, GalpÃ³n 3, Edo. Carabobo', '(0251) 456-8943', 'aroma@gmail.com', 'aroma', '1234'), ('3', 'Alimentos Caribe C.A', 'J-23454378-8', 'Avenida PPL Chavez Candanga, Calle Rosa InÃ©s, Galpon Imperialista, EDO. Barinas', '(0414) 555-5543', 'alimentoscaribes@gmail.com', 'caribes', '1234'), ('4', 'Frigorifico Zulia C.A', 'J-45497569-4', 'Calle urdaneta, Zona Industrial San Francisco, Edo. Zulia', '0261 345-3456', '', 'frigorificozulia', '1234'), ('5', 'Frisca C.A', 'J-5438659-4', 'Avenida Urdaneta, NÂº 55, La CandelarÃ­a, Caracas', '', '', 'frisca', '1234'), ('6', 'MLC Ingenieros C.A', 'J-32466745-6', 'Avenida circunvalaciÃ³n del Sol, Santa Paula, Caracas', '', '', 'mlc', '1234');

-- ----------------------------
--  Table structure for `FASE`
-- ----------------------------
DROP TABLE IF EXISTS `FASE`;
CREATE TABLE `FASE` (
  `idFASE` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `duracion` int(11) DEFAULT NULL,
  `icono` blob NOT NULL,
  `PROCESO_idPROCESO` int(11) NOT NULL,
  PRIMARY KEY (`idFASE`),
  KEY `fk_FASE_PROCESO1` (`PROCESO_idPROCESO`),
  CONSTRAINT `fk_FASE_PROCESO1` FOREIGN KEY (`PROCESO_idPROCESO`) REFERENCES `proceso` (`idPROCESO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `FASE`
-- ----------------------------
INSERT INTO `FASE` VALUES ('1', 'Proforma', null, 0x50, '1'), ('2', 'CNP - Minal', null, 0x43, '1'), ('3', 'Cadivi', null, 0x24, '1'), ('4', 'Banco', null, 0x4273, '1'), ('5', 'Transporte', null, 0x54, '1'), ('6', 'Aduana', null, 0x41, '1'), ('7', 'Proforma', null, 0x50, '2'), ('8', 'CNP - Milco', null, 0x43, '2'), ('9', 'Cadivi', null, 0x24, '2'), ('10', 'Banco', null, 0x4273, '2'), ('11', 'Transporte', null, 0x54, '2'), ('12', 'Aduana', null, 0x41, '2');

-- ----------------------------
--  Table structure for `FASE_LICENCIA`
-- ----------------------------
DROP TABLE IF EXISTS `FASE_LICENCIA`;
CREATE TABLE `FASE_LICENCIA` (
  `LICENCIA_idLICENCIA` int(11) NOT NULL,
  `FASE_fechaInicio` date DEFAULT NULL,
  `FASE_fechaFin` date DEFAULT NULL,
  `FASE_idFASE` int(11) NOT NULL,
  PRIMARY KEY (`LICENCIA_idLICENCIA`,`FASE_idFASE`),
  KEY `fk_LICENCIA_has_ETAPA_LICENCIA1` (`LICENCIA_idLICENCIA`),
  KEY `fk_FASE_LICENCIA_FASE1` (`FASE_idFASE`),
  CONSTRAINT `fk_FASE_LICENCIA_FASE1` FOREIGN KEY (`FASE_idFASE`) REFERENCES `fase` (`idFASE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_has_ETAPA_LICENCIA1` FOREIGN KEY (`LICENCIA_idLICENCIA`) REFERENCES `licencia` (`idLICENCIA`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `FASE_LICENCIA`
-- ----------------------------
INSERT INTO `FASE_LICENCIA` VALUES ('1', null, null, '1'), ('1', null, null, '2'), ('1', null, null, '3'), ('1', null, null, '4'), ('1', null, null, '5'), ('1', null, null, '6'), ('2', null, null, '7'), ('2', null, null, '8'), ('2', null, null, '9'), ('2', null, null, '10'), ('2', null, null, '11'), ('2', null, null, '12'), ('3', null, null, '1'), ('3', null, null, '2'), ('3', null, null, '3'), ('3', null, null, '4'), ('3', null, null, '5'), ('3', null, null, '6');

-- ----------------------------
--  Table structure for `IMPORTACION`
-- ----------------------------
DROP TABLE IF EXISTS `IMPORTACION`;
CREATE TABLE `IMPORTACION` (
  `TRANSPORTE_idTRANSPORTE` int(11) NOT NULL,
  `LICENCIA_idLICENCIA` int(11) NOT NULL,
  `fechaDeSalida` date DEFAULT NULL,
  `fechaLlegada` date DEFAULT NULL,
  `tipo` varchar(45) NOT NULL,
  `PAIS_Origen` int(11) NOT NULL,
  `PAIS_Destino` int(11) NOT NULL,
  PRIMARY KEY (`TRANSPORTE_idTRANSPORTE`,`LICENCIA_idLICENCIA`),
  KEY `fk_TRANSPORTE_has_LICENCIA_TRANSPORTE1` (`TRANSPORTE_idTRANSPORTE`),
  KEY `fk_TRANSPORTE_has_LICENCIA_LICENCIA1` (`LICENCIA_idLICENCIA`),
  KEY `fk_IMPORTACION_PAIS1` (`PAIS_Origen`),
  KEY `fk_IMPORTACION_PAIS2` (`PAIS_Destino`),
  CONSTRAINT `fk_IMPORTACION_PAIS1` FOREIGN KEY (`PAIS_Origen`) REFERENCES `pais` (`idPAIS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_IMPORTACION_PAIS2` FOREIGN KEY (`PAIS_Destino`) REFERENCES `pais` (`idPAIS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_TRANSPORTE_has_LICENCIA_LICENCIA1` FOREIGN KEY (`LICENCIA_idLICENCIA`) REFERENCES `licencia` (`idLICENCIA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_TRANSPORTE_has_LICENCIA_TRANSPORTE1` FOREIGN KEY (`TRANSPORTE_idTRANSPORTE`) REFERENCES `transporte` (`idTRANSPORTE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `LICENCIA`
-- ----------------------------
DROP TABLE IF EXISTS `LICENCIA`;
CREATE TABLE `LICENCIA` (
  `idLICENCIA` int(11) NOT NULL AUTO_INCREMENT,
  `EMPRESA_idEMPRESA` int(11) NOT NULL,
  `PROVEEDOR_idPROVEEDOR` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date DEFAULT NULL,
  `fechaFinEstimada` date DEFAULT NULL,
  `numeroProforma` varchar(45) NOT NULL,
  `numeroCNP` varchar(45) DEFAULT NULL,
  `vencimientoCNP` date DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  `formaPago` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `flete` decimal(20,0) DEFAULT NULL,
  `seguro` varchar(45) DEFAULT NULL,
  `PROCESO_idPROCESO` int(11) NOT NULL,
  PRIMARY KEY (`idLICENCIA`),
  KEY `fk_LICENCIA_EMPRESA` (`EMPRESA_idEMPRESA`),
  KEY `fk_LICENCIA_PROVEEDOR1` (`PROVEEDOR_idPROVEEDOR`),
  KEY `fk_LICENCIA_PROCESO1` (`PROCESO_idPROCESO`),
  CONSTRAINT `fk_LICENCIA_EMPRESA` FOREIGN KEY (`EMPRESA_idEMPRESA`) REFERENCES `empresa` (`idEMPRESA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_PROCESO1` FOREIGN KEY (`PROCESO_idPROCESO`) REFERENCES `proceso` (`idPROCESO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_PROVEEDOR1` FOREIGN KEY (`PROVEEDOR_idPROVEEDOR`) REFERENCES `proveedor` (`idPROVEEDOR`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
delimiter ;;
CREATE TRIGGER `INSERTAR_FL` AFTER INSERT ON `LICENCIA` FOR EACH ROW BEGIN

    DECLARE done INT DEFAULT 0;
    DECLARE f INT;
    DECLARE d INT;
    DECLARE cur1
        CURSOR FOR
	SELECT idFASE from FASE,PROCESO where PROCESO.idPROCESO = FASE.PROCESO_idPROCESO and PROCESO.idPROCESO = NEW.PROCESO_idPROCESO;
    DECLARE cur2
        CURSOR FOR
	SELECT DOCUMENTOS_FASE.DOCUMENTO_idDOCUMENTO from FASE,PROCESO,DOCUMENTOS_FASE where PROCESO.idPROCESO = FASE.PROCESO_idPROCESO and DOCUMENTOS_FASE.FASE_idFASE=FASE.idFASE and PROCESO.idPROCESO = NEW.PROCESO_idPROCESO;
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
    OPEN cur1;
    OPEN cur2;

    REPEAT
        FETCH cur1 INTO f;
        IF NOT done THEN
            INSERT
            INTO  FASE_LICENCIA(LICENCIA_idLICENCIA, FASE_fechaInicio, FASE_fechaFin, FASE_idFASE) VALUES (NEW.idLICENCIA,null,null,f);
        END IF;
    UNTIL
        done
    END REPEAT;
CLOSE cur1;

SET done=0;

REPEAT
        FETCH cur2 INTO d;
        IF NOT done THEN
            INSERT
            INTO  VIGENCIA_DOCUMENTO(LICENCIA_idLICENCIA,DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO,fechaOtorgado,fechaVencimieto,numRef) VALUES (NEW.idLICENCIA,d,null,null,null);
        END IF;
    UNTIL
        done
    END REPEAT;

    CLOSE cur2;

END;
 ;;
delimiter ;

-- ----------------------------
--  Records of `LICENCIA`
-- ----------------------------
INSERT INTO `LICENCIA` VALUES ('1', '5', '1', '2010-09-03', '2011-03-02', null, 'A-0428', '226893', null, 'En Proceso', 'Carta de Credito', '', '13600', '3895', '1'), ('2', '6', '2', '2009-01-05', '2009-07-04', null, '1824-35', '', '2009-07-04', 'Cerrada', 'Carta de CrÃ©dito', '', '10000', '3400', '2'), ('3', '1', '1', '2010-09-03', '2011-03-02', null, '123', '', '2011-03-02', 'En Proceso', '', '', null, '', '1');

-- ----------------------------
--  Table structure for `LISTA_PRODUCTO`
-- ----------------------------
DROP TABLE IF EXISTS `LISTA_PRODUCTO`;
CREATE TABLE `LISTA_PRODUCTO` (
  `LICENCIA_idLICENCIA` int(11) NOT NULL,
  `PRODUCTO_idPRODUCTO` int(11) NOT NULL,
  `PRODUCTO_cantidad` int(11) NOT NULL,
  `PRODUCTO_volumen` int(11) NOT NULL,
  `PRODUCTO_unidad` varchar(45) NOT NULL,
  `PRODUCTO_costoUnitario` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`LICENCIA_idLICENCIA`,`PRODUCTO_idPRODUCTO`),
  KEY `fk_LICENCIA_has_PRODUCTO_LICENCIA1` (`LICENCIA_idLICENCIA`),
  KEY `fk_LICENCIA_has_PRODUCTO_PRODUCTO1` (`PRODUCTO_idPRODUCTO`),
  CONSTRAINT `fk_LICENCIA_has_PRODUCTO_LICENCIA1` FOREIGN KEY (`LICENCIA_idLICENCIA`) REFERENCES `licencia` (`idLICENCIA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_has_PRODUCTO_PRODUCTO1` FOREIGN KEY (`PRODUCTO_idPRODUCTO`) REFERENCES `producto` (`idPRODUCTO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `PAIS`
-- ----------------------------
DROP TABLE IF EXISTS `PAIS`;
CREATE TABLE `PAIS` (
  `idPAIS` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPAIS`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `PAIS`
-- ----------------------------
INSERT INTO `PAIS` VALUES ('1', 'Uruguay'), ('2', 'Argentina'), ('3', 'Ecuador'), ('4', 'Brazil'), ('5', 'Colombia'), ('6', 'Bolivia');

-- ----------------------------
--  Table structure for `PROCESO`
-- ----------------------------
DROP TABLE IF EXISTS `PROCESO`;
CREATE TABLE `PROCESO` (
  `idPROCESO` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(90) NOT NULL,
  `duracion` int(11) NOT NULL,
  PRIMARY KEY (`idPROCESO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `PROCESO`
-- ----------------------------
INSERT INTO `PROCESO` VALUES ('1', 'Alimentos 2010', '180'), ('2', 'Bienes de Capital 2010', '180');

-- ----------------------------
--  Table structure for `PRODUCTO`
-- ----------------------------
DROP TABLE IF EXISTS `PRODUCTO`;
CREATE TABLE `PRODUCTO` (
  `idPRODUCTO` int(11) NOT NULL AUTO_INCREMENT,
  `codigoArancelario` varchar(45) NOT NULL,
  `descripcion` text NOT NULL,
  `numeroRegSanitario` varchar(45) DEFAULT NULL,
  `volumen` int(11) DEFAULT NULL,
  `unidad` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPRODUCTO`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `PRODUCTO`
-- ----------------------------
INSERT INTO `PRODUCTO` VALUES ('1', '7689.78.65', 'Pollo Entero Congelado', '', null, null), ('2', '3425.56.23', 'Especies Saborizantes ', '', null, null), ('3', '3455.54.32', 'Caraotas Negras', '', null, null), ('4', '5434.56.43', 'Carnes de Bovino en cortes congelados ', '', null, null), ('5', '6543.56.23', 'AtÃºn en lata en aceite Vegetal', '', null, null), ('6', '5643.76.43', 'SalmÃ³n ahumado congelado', '', null, null), ('7', '4765.43.89', 'Aceitunas Negras', '', null, null), ('8', '5678.43.56', 'Manzanas', '', null, null), ('9', '5687.54.76', 'Peras', '', null, null);

-- ----------------------------
--  Table structure for `PROVEEDOR`
-- ----------------------------
DROP TABLE IF EXISTS `PROVEEDOR`;
CREATE TABLE `PROVEEDOR` (
  `idPROVEEDOR` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `direccion` text NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `PAIS_idPAIS` int(11) NOT NULL,
  PRIMARY KEY (`idPROVEEDOR`),
  KEY `fk_PROVEEDOR_PAIS1` (`PAIS_idPAIS`),
  CONSTRAINT `fk_PROVEEDOR_PAIS1` FOREIGN KEY (`PAIS_idPAIS`) REFERENCES `pais` (`idPAIS`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `PROVEEDOR`
-- ----------------------------
INSERT INTO `PROVEEDOR` VALUES ('1', 'Aprimex S.A', 'Ruta 1, KM49, predio A2 A4', '598-98-120050', 'aprimex@gmail.com', '1'), ('2', 'Grupo Mapear S.A', 'Carrera 24 zona industrial, Buenos Aires', '123-456-6545', '', '2'), ('3', 'Exportadora de Granos S.A', 'BogotÃ¡', '57 234 5423 086', '', '5'), ('4', 'Especies y Colorantes S.A', 'Quito', '324-546-6789', '', '3');

-- ----------------------------
--  Table structure for `RESPONSABLE`
-- ----------------------------
DROP TABLE IF EXISTS `RESPONSABLE`;
CREATE TABLE `RESPONSABLE` (
  `EMPLEADO_idEMPLEADO` int(11) NOT NULL,
  `LICENCIA_idLICENCIA` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date DEFAULT NULL,
  PRIMARY KEY (`EMPLEADO_idEMPLEADO`,`LICENCIA_idLICENCIA`),
  KEY `fk_EMPLEADO_has_LICENCIA_EMPLEADO1` (`EMPLEADO_idEMPLEADO`),
  KEY `fk_EMPLEADO_has_LICENCIA_LICENCIA1` (`LICENCIA_idLICENCIA`),
  CONSTRAINT `fk_EMPLEADO_has_LICENCIA_EMPLEADO1` FOREIGN KEY (`EMPLEADO_idEMPLEADO`) REFERENCES `empleado` (`idEMPLEADO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_EMPLEADO_has_LICENCIA_LICENCIA1` FOREIGN KEY (`LICENCIA_idLICENCIA`) REFERENCES `licencia` (`idLICENCIA`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `TIPO_DE_PAGO`
-- ----------------------------
DROP TABLE IF EXISTS `TIPO_DE_PAGO`;
CREATE TABLE `TIPO_DE_PAGO` (
  `idTIPO_DE_PAGO` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idTIPO_DE_PAGO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `TRANSPORTE`
-- ----------------------------
DROP TABLE IF EXISTS `TRANSPORTE`;
CREATE TABLE `TRANSPORTE` (
  `idTRANSPORTE` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `PAIS_idPAIS` int(11) NOT NULL,
  PRIMARY KEY (`idTRANSPORTE`),
  KEY `fk_TRANSPORTE_PAIS1` (`PAIS_idPAIS`),
  CONSTRAINT `fk_TRANSPORTE_PAIS1` FOREIGN KEY (`PAIS_idPAIS`) REFERENCES `pais` (`idPAIS`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `VIGENCIA_DOCUMENTO`
-- ----------------------------
DROP TABLE IF EXISTS `VIGENCIA_DOCUMENTO`;
CREATE TABLE `VIGENCIA_DOCUMENTO` (
  `LICENCIA_idLICENCIA` int(11) NOT NULL,
  `DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO` int(11) NOT NULL,
  `fechaOtorgado` date DEFAULT NULL,
  `fechaVencimieto` date DEFAULT NULL,
  `numRef` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`LICENCIA_idLICENCIA`,`DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO`),
  KEY `fk_LISTA_DE_DOCUMENTO_has_LICENCIA_LICENCIA1` (`LICENCIA_idLICENCIA`),
  KEY `fk_VIGENCIA_DOCUMENTO_DOCUMENTOS_FASE1` (`DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO`),
  CONSTRAINT `fk_LISTA_DE_DOCUMENTO_has_LICENCIA_LICENCIA1` FOREIGN KEY (`LICENCIA_idLICENCIA`) REFERENCES `licencia` (`idLICENCIA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_VIGENCIA_DOCUMENTO_DOCUMENTOS_FASE1` FOREIGN KEY (`DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO`) REFERENCES `documentos_fase` (`DOCUMENTO_idDOCUMENTO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `VIGENCIA_DOCUMENTO`
-- ----------------------------
INSERT INTO `VIGENCIA_DOCUMENTO` VALUES ('3', '1', null, null, null), ('3', '2', null, null, null);

