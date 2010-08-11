/*
 Navicat Premium Data Transfer

 Source Server         : sglbd
 Source Server Type    : MySQL
 Source Server Version : 50144
 Source Host           : localhost
 Source Database       : sglbd

 Target Server Type    : MySQL
 Target Server Version : 50144
 File Encoding         : utf-8

 Date: 08/11/2010 00:02:58 AM
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
  PRIMARY KEY (`idADMINISTRADOR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `CODIGO_PAGO`
-- ----------------------------
DROP TABLE IF EXISTS `CODIGO_PAGO`;
CREATE TABLE `CODIGO_PAGO` (
  `LICENCIA_idLICENCIA` int(11) NOT NULL,
  `TIPO_DE_PAGO_idTIPO_DE_PAGO` int(11) NOT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`LICENCIA_idLICENCIA`,`TIPO_DE_PAGO_idTIPO_DE_PAGO`),
  KEY `fk_LICENCIA_has_TIPO DE PAGO_LICENCIA1` (`LICENCIA_idLICENCIA`),
  KEY `fk_LICENCIA_has_TIPO DE PAGO_TIPO DE PAGO1` (`TIPO_DE_PAGO_idTIPO_DE_PAGO`),
  CONSTRAINT `fk_LICENCIA_has_TIPO DE PAGO_LICENCIA1` FOREIGN KEY (`LICENCIA_idLICENCIA`) REFERENCES `licencia` (`idLICENCIA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_has_TIPO DE PAGO_TIPO DE PAGO1` FOREIGN KEY (`TIPO_DE_PAGO_idTIPO_DE_PAGO`) REFERENCES `tipo_de_pago` (`idTIPO_DE_PAGO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `CODIGO_PAGO`
-- ----------------------------
BEGIN;
INSERT INTO `CODIGO_PAGO` VALUES ('3', '1', 'AAD');
COMMIT;

-- ----------------------------
--  Table structure for `DOCUMENTO`
-- ----------------------------
DROP TABLE IF EXISTS `DOCUMENTO`;
CREATE TABLE `DOCUMENTO` (
  `idDOCUMENTO` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) NOT NULL,
  `duracion` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDOCUMENTO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `DOCUMENTO`
-- ----------------------------
BEGIN;
INSERT INTO `DOCUMENTO` VALUES ('1', 'CNP', '6'), ('2', 'S.W.I.F.T', '2');
COMMIT;

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
  PRIMARY KEY (`idEMPLEADO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `EMPRESA`
-- ----------------------------
BEGIN;
INSERT INTO `EMPRESA` VALUES ('1', 'Polar', '123123', 'Los Ruices', '', '', 'polar', 'polar');
COMMIT;

-- ----------------------------
--  Table structure for `ETAPA`
-- ----------------------------
DROP TABLE IF EXISTS `ETAPA`;
CREATE TABLE `ETAPA` (
  `idETAPA` int(11) NOT NULL AUTO_INCREMENT,
  `FASE_idFASE` int(11) NOT NULL,
  `PROCESO_idPROCESO` int(11) NOT NULL,
  PRIMARY KEY (`idETAPA`),
  KEY `fk_FASE_has_PROCESO_FASE1` (`FASE_idFASE`),
  KEY `fk_FASE_has_PROCESO_PROCESO1` (`PROCESO_idPROCESO`),
  CONSTRAINT `fk_FASE_has_PROCESO_FASE1` FOREIGN KEY (`FASE_idFASE`) REFERENCES `fase` (`idFASE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_FASE_has_PROCESO_PROCESO1` FOREIGN KEY (`PROCESO_idPROCESO`) REFERENCES `proceso` (`idPROCESO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `ETAPA`
-- ----------------------------
BEGIN;
INSERT INTO `ETAPA` VALUES ('1', '1', '2'), ('2', '2', '2'), ('3', '3', '2'), ('4', '4', '2'), ('5', '5', '2'), ('6', '6', '2');
COMMIT;

-- ----------------------------
--  Table structure for `ETAPA_LICENCIA`
-- ----------------------------
DROP TABLE IF EXISTS `ETAPA_LICENCIA`;
CREATE TABLE `ETAPA_LICENCIA` (
  `LICENCIA_idLICENCIA` int(11) NOT NULL,
  `ETAPA_idETAPA` int(11) NOT NULL,
  `ETAPA_fechaInicio` date DEFAULT NULL,
  `ETAPA_fechaFin` date DEFAULT NULL,
  PRIMARY KEY (`LICENCIA_idLICENCIA`,`ETAPA_idETAPA`),
  KEY `fk_LICENCIA_has_ETAPA_LICENCIA1` (`LICENCIA_idLICENCIA`),
  KEY `fk_ETAPA_LICENCIA_ETAPA1` (`ETAPA_idETAPA`),
  CONSTRAINT `fk_ETAPA_LICENCIA_ETAPA1` FOREIGN KEY (`ETAPA_idETAPA`) REFERENCES `etapa` (`idETAPA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_has_ETAPA_LICENCIA1` FOREIGN KEY (`LICENCIA_idLICENCIA`) REFERENCES `licencia` (`idLICENCIA`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `FASE`
-- ----------------------------
DROP TABLE IF EXISTS `FASE`;
CREATE TABLE `FASE` (
  `idFASE` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `duracion` int(11) DEFAULT NULL,
  `icono` blob NOT NULL,
  PRIMARY KEY (`idFASE`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `FASE`
-- ----------------------------
BEGIN;
INSERT INTO `FASE` VALUES ('1', 'Otorgamiento CNP', '6', 0x61), ('2', 'Preparacion Embarque (CC)', '2', 0x62), ('3', 'Salida FOB', '2', 0x63), ('4', 'Llegada CIF', '2', 0x64), ('5', 'Proceso de Nacionalizacion', '2', 0x65), ('6', 'Carta de Credito', '30', 0x67);
COMMIT;

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

-- ----------------------------
--  Records of `LICENCIA`
-- ----------------------------
BEGIN;
INSERT INTO `LICENCIA` VALUES ('3', '1', '1', '2010-07-19', '2011-01-19', null, '1', '1', '2011-01-19', 'En Proceso', 'Sucre', 'Alimentos', '87687573', 'Cobertura Amplia', '2');
COMMIT;

-- ----------------------------
--  Table structure for `LISTA_DE_DOCUMENTO`
-- ----------------------------
DROP TABLE IF EXISTS `LISTA_DE_DOCUMENTO`;
CREATE TABLE `LISTA_DE_DOCUMENTO` (
  `DOCUMENTO_idDOCUMENTO` int(11) NOT NULL,
  `PROCESO_idPROCESO` int(11) DEFAULT NULL,
  `FASE_idFASE` int(11) DEFAULT NULL,
  PRIMARY KEY (`DOCUMENTO_idDOCUMENTO`),
  KEY `fk_LICENCIA_has_FASE_has_DOCUMENTO_DOCUMENTO1` (`DOCUMENTO_idDOCUMENTO`),
  KEY `fk_LISTA_DE_DOCUMENTO_PROCESO1` (`PROCESO_idPROCESO`),
  KEY `fk_LISTA_DE_DOCUMENTO_FASE1` (`FASE_idFASE`),
  CONSTRAINT `fk_LICENCIA_has_FASE_has_DOCUMENTO_DOCUMENTO1` FOREIGN KEY (`DOCUMENTO_idDOCUMENTO`) REFERENCES `documento` (`idDOCUMENTO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_LISTA_DE_DOCUMENTO_FASE1` FOREIGN KEY (`FASE_idFASE`) REFERENCES `fase` (`idFASE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_LISTA_DE_DOCUMENTO_PROCESO1` FOREIGN KEY (`PROCESO_idPROCESO`) REFERENCES `proceso` (`idPROCESO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `LISTA_DE_DOCUMENTO`
-- ----------------------------
BEGIN;
INSERT INTO `LISTA_DE_DOCUMENTO` VALUES ('1', '2', null), ('2', null, '2');
COMMIT;

-- ----------------------------
--  Table structure for `LISTA_PRODUCTO`
-- ----------------------------
DROP TABLE IF EXISTS `LISTA_PRODUCTO`;
CREATE TABLE `LISTA_PRODUCTO` (
  `LICENCIA_idLICENCIA` int(11) NOT NULL,
  `PRODUCTO_idPRODUCTO` int(11) NOT NULL,
  `PRODUCTO_cantidad` varchar(45) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `PAIS`
-- ----------------------------
BEGIN;
INSERT INTO `PAIS` VALUES ('1', 'Brasil');
COMMIT;

-- ----------------------------
--  Table structure for `PROCESO`
-- ----------------------------
DROP TABLE IF EXISTS `PROCESO`;
CREATE TABLE `PROCESO` (
  `idPROCESO` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(90) NOT NULL,
  `duracion` int(11) NOT NULL,
  PRIMARY KEY (`idPROCESO`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `PROCESO`
-- ----------------------------
BEGIN;
INSERT INTO `PROCESO` VALUES ('2', 'Alimentos', '6'), ('3', 'Bienes de Capital', '200');
COMMIT;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `PROVEEDOR`
-- ----------------------------
BEGIN;
INSERT INTO `PROVEEDOR` VALUES ('1', 'Brasileiro', 'Sao Paolo', '', '', '1');
COMMIT;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `TIPO_DE_PAGO`
-- ----------------------------
BEGIN;
INSERT INTO `TIPO_DE_PAGO` VALUES ('1', 'Sucre');
COMMIT;

-- ----------------------------
--  Table structure for `VIGENCIA_DOCUMENTO`
-- ----------------------------
DROP TABLE IF EXISTS `VIGENCIA_DOCUMENTO`;
CREATE TABLE `VIGENCIA_DOCUMENTO` (
  `LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO` int(11) NOT NULL,
  `LICENCIA_idLICENCIA` int(11) NOT NULL,
  `fechaOtorgado` date DEFAULT NULL,
  `fechaVencimieto` date DEFAULT NULL,
  PRIMARY KEY (`LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO`,`LICENCIA_idLICENCIA`),
  KEY `fk_LISTA_DE_DOCUMENTO_has_LICENCIA_LISTA_DE_DOCUMENTO1` (`LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO`),
  KEY `fk_LISTA_DE_DOCUMENTO_has_LICENCIA_LICENCIA1` (`LICENCIA_idLICENCIA`),
  CONSTRAINT `fk_LISTA_DE_DOCUMENTO_has_LICENCIA_LICENCIA1` FOREIGN KEY (`LICENCIA_idLICENCIA`) REFERENCES `licencia` (`idLICENCIA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_LISTA_DE_DOCUMENTO_has_LICENCIA_LISTA_DE_DOCUMENTO1` FOREIGN KEY (`LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO`) REFERENCES `lista_de_documento` (`DOCUMENTO_idDOCUMENTO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

