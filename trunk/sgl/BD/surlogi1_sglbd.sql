-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2011 at 10:52 AM
-- Server version: 5.0.91
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `surlogi1_sglbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `ADMINISTRADOR`
--

DROP TABLE IF EXISTS `ADMINISTRADOR`;
CREATE TABLE IF NOT EXISTS `ADMINISTRADOR` (
  `idADMINISTRADOR` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `cedula` varchar(45) default NULL,
  `login` varchar(45) NOT NULL,
  `password` varchar(18) NOT NULL,
  `email` varchar(45) default NULL,
  PRIMARY KEY  (`idADMINISTRADOR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ADMINISTRADOR`
--

INSERT INTO `ADMINISTRADOR` (`idADMINISTRADOR`, `nombre`, `apellido`, `cedula`, `login`, `password`, `email`) VALUES
(1, 'Genaro', 'Aguero', NULL, 'admin', '123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `CODIGO_PAGO`
--

DROP TABLE IF EXISTS `CODIGO_PAGO`;
CREATE TABLE IF NOT EXISTS `CODIGO_PAGO` (
  `LICENCIA_idLICENCIA` int(11) NOT NULL,
  `TIPO_DE_PAGO_idTIPO_DE_PAGO` int(11) NOT NULL,
  `numRef` varchar(45) default NULL,
  `fecha` varchar(45) default NULL,
  `divisa` varchar(45) default NULL,
  `monto` varchar(45) default NULL,
  PRIMARY KEY  (`LICENCIA_idLICENCIA`,`TIPO_DE_PAGO_idTIPO_DE_PAGO`),
  KEY `fk_LICENCIA_has_TIPO DE PAGO_LICENCIA1` (`LICENCIA_idLICENCIA`),
  KEY `fk_LICENCIA_has_TIPO DE PAGO_TIPO DE PAGO1` (`TIPO_DE_PAGO_idTIPO_DE_PAGO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CODIGO_PAGO`
--


-- --------------------------------------------------------

--
-- Table structure for table `DOCUMENTO`
--

DROP TABLE IF EXISTS `DOCUMENTO`;
CREATE TABLE IF NOT EXISTS `DOCUMENTO` (
  `idDOCUMENTO` int(11) NOT NULL auto_increment,
  `nombre` varchar(70) NOT NULL,
  `duracion` int(11) default NULL,
  `DOCUMENTO_idDOCUMENTO` int(11) default NULL,
  PRIMARY KEY  (`idDOCUMENTO`),
  KEY `fk_DOCUMENTO_DOCUMENTO1` (`DOCUMENTO_idDOCUMENTO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `DOCUMENTO`
--


-- --------------------------------------------------------

--
-- Table structure for table `DOCUMENTOS_FASE`
--

DROP TABLE IF EXISTS `DOCUMENTOS_FASE`;
CREATE TABLE IF NOT EXISTS `DOCUMENTOS_FASE` (
  `DOCUMENTO_idDOCUMENTO` int(11) NOT NULL,
  `FASE_idFASE` int(11) default NULL,
  PRIMARY KEY  (`DOCUMENTO_idDOCUMENTO`),
  KEY `fk_LICENCIA_has_FASE_has_DOCUMENTO_DOCUMENTO1` (`DOCUMENTO_idDOCUMENTO`),
  KEY `fk_LISTA_DE_DOCUMENTO_FASE1` (`FASE_idFASE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DOCUMENTOS_FASE`
--


-- --------------------------------------------------------

--
-- Table structure for table `EMPLEADO`
--

DROP TABLE IF EXISTS `EMPLEADO`;
CREATE TABLE IF NOT EXISTS `EMPLEADO` (
  `idEMPLEADO` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `cedula` varchar(45) default NULL,
  `login` varchar(45) NOT NULL,
  `password` varchar(18) NOT NULL,
  `email` varchar(45) default NULL,
  PRIMARY KEY  (`idEMPLEADO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `EMPLEADO`
--


-- --------------------------------------------------------

--
-- Table structure for table `EMPRESA`
--

DROP TABLE IF EXISTS `EMPRESA`;
CREATE TABLE IF NOT EXISTS `EMPRESA` (
  `idEMPRESA` int(11) NOT NULL auto_increment,
  `nombre` varchar(70) NOT NULL,
  `rif` varchar(45) NOT NULL,
  `direccion` text NOT NULL,
  `telefono` varchar(15) default NULL,
  `email` varchar(70) default NULL,
  `login` varchar(45) default NULL,
  `password` varchar(45) default NULL,
  PRIMARY KEY  (`idEMPRESA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `EMPRESA`
--


-- --------------------------------------------------------

--
-- Table structure for table `FASE`
--

DROP TABLE IF EXISTS `FASE`;
CREATE TABLE IF NOT EXISTS `FASE` (
  `idFASE` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL,
  `duracion` int(11) default NULL,
  `icono` blob,
  `PROCESO_idPROCESO` int(11) NOT NULL,
  `FASE_idFASE` int(11) default NULL,
  PRIMARY KEY  (`idFASE`),
  KEY `fk_FASE_PROCESO1` (`PROCESO_idPROCESO`),
  KEY `fk_FASE_FASE1` (`FASE_idFASE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `FASE`
--


-- --------------------------------------------------------

--
-- Table structure for table `FASE_LICENCIA`
--

DROP TABLE IF EXISTS `FASE_LICENCIA`;
CREATE TABLE IF NOT EXISTS `FASE_LICENCIA` (
  `LICENCIA_idLICENCIA` int(11) NOT NULL,
  `FASE_fechaInicio` date default NULL,
  `FASE_fechaFin` date default NULL,
  `FASE_idFASE` int(11) NOT NULL,
  PRIMARY KEY  (`LICENCIA_idLICENCIA`,`FASE_idFASE`),
  KEY `fk_LICENCIA_has_ETAPA_LICENCIA1` (`LICENCIA_idLICENCIA`),
  KEY `fk_FASE_LICENCIA_FASE1` (`FASE_idFASE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FASE_LICENCIA`
--


-- --------------------------------------------------------

--
-- Table structure for table `IMPORTACION`
--

DROP TABLE IF EXISTS `IMPORTACION`;
CREATE TABLE IF NOT EXISTS `IMPORTACION` (
  `TRANSPORTE_idTRANSPORTE` int(11) NOT NULL,
  `LICENCIA_idLICENCIA` int(11) NOT NULL,
  `fechaDeSalida` date default NULL,
  `fechaLlegada` date default NULL,
  `tipo` varchar(45) NOT NULL,
  `PAIS_Origen` int(11) NOT NULL,
  `PAIS_Destino` int(11) NOT NULL,
  PRIMARY KEY  (`TRANSPORTE_idTRANSPORTE`,`LICENCIA_idLICENCIA`),
  KEY `fk_TRANSPORTE_has_LICENCIA_TRANSPORTE1` (`TRANSPORTE_idTRANSPORTE`),
  KEY `fk_TRANSPORTE_has_LICENCIA_LICENCIA1` (`LICENCIA_idLICENCIA`),
  KEY `fk_IMPORTACION_PAIS1` (`PAIS_Origen`),
  KEY `fk_IMPORTACION_PAIS2` (`PAIS_Destino`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IMPORTACION`
--


-- --------------------------------------------------------

--
-- Table structure for table `LICENCIA`
--

DROP TABLE IF EXISTS `LICENCIA`;
CREATE TABLE IF NOT EXISTS `LICENCIA` (
  `idLICENCIA` int(11) NOT NULL auto_increment,
  `EMPRESA_idEMPRESA` int(11) NOT NULL,
  `PROVEEDOR_idPROVEEDOR` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date default NULL,
  `fechaFinEstimada` date default NULL,
  `numeroProforma` varchar(45) character set latin1 default NULL,
  `numeroCNP` varchar(45) character set latin1 default NULL,
  `vencimientoCNP` date default NULL,
  `status` varchar(45) character set latin1 NOT NULL,
  `formaPago` varchar(45) character set latin1 default NULL,
  `tipo` varchar(45) character set latin1 default NULL,
  `flete` decimal(20,0) default NULL,
  `seguro` varchar(45) character set latin1 default NULL,
  `PROCESO_idPROCESO` int(11) NOT NULL,
  PRIMARY KEY  (`idLICENCIA`),
  KEY `fk_LICENCIA_EMPRESA` (`EMPRESA_idEMPRESA`),
  KEY `fk_LICENCIA_PROVEEDOR1` (`PROVEEDOR_idPROVEEDOR`),
  KEY `fk_LICENCIA_PROCESO1` (`PROCESO_idPROCESO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `LICENCIA`
--


-- --------------------------------------------------------

--
-- Table structure for table `LISTA_PRODUCTO`
--

DROP TABLE IF EXISTS `LISTA_PRODUCTO`;
CREATE TABLE IF NOT EXISTS `LISTA_PRODUCTO` (
  `LICENCIA_idLICENCIA` int(11) NOT NULL,
  `PRODUCTO_idPRODUCTO` int(11) NOT NULL,
  `PRODUCTO_cantidad` int(11) NOT NULL,
  `PRODUCTO_volumen` int(11) default NULL,
  `PRODUCTO_unidad` varchar(45) NOT NULL,
  `PRODUCTO_costoUnitario` varchar(45) default NULL,
  PRIMARY KEY  (`LICENCIA_idLICENCIA`,`PRODUCTO_idPRODUCTO`),
  KEY `fk_LICENCIA_has_PRODUCTO_LICENCIA1` (`LICENCIA_idLICENCIA`),
  KEY `fk_LICENCIA_has_PRODUCTO_PRODUCTO1` (`PRODUCTO_idPRODUCTO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `LISTA_PRODUCTO`
--


-- --------------------------------------------------------

--
-- Table structure for table `PAIS`
--

DROP TABLE IF EXISTS `PAIS`;
CREATE TABLE IF NOT EXISTS `PAIS` (
  `idPAIS` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) default NULL,
  PRIMARY KEY  (`idPAIS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `PAIS`
--


-- --------------------------------------------------------

--
-- Table structure for table `PROCESO`
--

DROP TABLE IF EXISTS `PROCESO`;
CREATE TABLE IF NOT EXISTS `PROCESO` (
  `idPROCESO` int(11) NOT NULL auto_increment,
  `nombre` varchar(90) NOT NULL,
  `duracion` int(11) NOT NULL,
  PRIMARY KEY  (`idPROCESO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `PROCESO`
--


-- --------------------------------------------------------

--
-- Table structure for table `PRODUCTO`
--

DROP TABLE IF EXISTS `PRODUCTO`;
CREATE TABLE IF NOT EXISTS `PRODUCTO` (
  `idPRODUCTO` int(11) NOT NULL auto_increment,
  `codigoArancelario` varchar(45) NOT NULL,
  `descripcion` text NOT NULL,
  `numeroRegSanitario` varchar(45) default NULL,
  `volumen` int(11) default NULL,
  `unidad` varchar(45) default NULL,
  PRIMARY KEY  (`idPRODUCTO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `PRODUCTO`
--


-- --------------------------------------------------------

--
-- Table structure for table `PROVEEDOR`
--

DROP TABLE IF EXISTS `PROVEEDOR`;
CREATE TABLE IF NOT EXISTS `PROVEEDOR` (
  `idPROVEEDOR` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL,
  `direccion` text NOT NULL,
  `telefono` varchar(15) default NULL,
  `email` varchar(70) default NULL,
  `PAIS_idPAIS` int(11) NOT NULL,
  PRIMARY KEY  (`idPROVEEDOR`),
  KEY `fk_PROVEEDOR_PAIS1` (`PAIS_idPAIS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `PROVEEDOR`
--


-- --------------------------------------------------------

--
-- Table structure for table `RESPONSABLE`
--

DROP TABLE IF EXISTS `RESPONSABLE`;
CREATE TABLE IF NOT EXISTS `RESPONSABLE` (
  `EMPLEADO_idEMPLEADO` int(11) NOT NULL,
  `LICENCIA_idLICENCIA` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date default NULL,
  PRIMARY KEY  (`EMPLEADO_idEMPLEADO`,`LICENCIA_idLICENCIA`),
  KEY `fk_EMPLEADO_has_LICENCIA_EMPLEADO1` (`EMPLEADO_idEMPLEADO`),
  KEY `fk_EMPLEADO_has_LICENCIA_LICENCIA1` (`LICENCIA_idLICENCIA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RESPONSABLE`
--


-- --------------------------------------------------------

--
-- Table structure for table `TIPO_DE_PAGO`
--

DROP TABLE IF EXISTS `TIPO_DE_PAGO`;
CREATE TABLE IF NOT EXISTS `TIPO_DE_PAGO` (
  `idTIPO_DE_PAGO` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY  (`idTIPO_DE_PAGO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `TIPO_DE_PAGO`
--


-- --------------------------------------------------------

--
-- Table structure for table `TRANSPORTE`
--

DROP TABLE IF EXISTS `TRANSPORTE`;
CREATE TABLE IF NOT EXISTS `TRANSPORTE` (
  `idTRANSPORTE` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) default NULL,
  `telefono` varchar(45) default NULL,
  `PAIS_idPAIS` int(11) NOT NULL,
  PRIMARY KEY  (`idTRANSPORTE`),
  KEY `fk_TRANSPORTE_PAIS1` (`PAIS_idPAIS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `TRANSPORTE`
--


-- --------------------------------------------------------

--
-- Table structure for table `VIGENCIA_DOCUMENTO`
--

DROP TABLE IF EXISTS `VIGENCIA_DOCUMENTO`;
CREATE TABLE IF NOT EXISTS `VIGENCIA_DOCUMENTO` (
  `LICENCIA_idLICENCIA` int(11) NOT NULL,
  `DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO` int(11) NOT NULL,
  `fechaOtorgado` date default NULL,
  `fechaVencimieto` date default NULL,
  `numRef` varchar(45) default NULL,
  PRIMARY KEY  (`LICENCIA_idLICENCIA`,`DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO`),
  KEY `fk_LISTA_DE_DOCUMENTO_has_LICENCIA_LICENCIA1` (`LICENCIA_idLICENCIA`),
  KEY `fk_VIGENCIA_DOCUMENTO_DOCUMENTOS_FASE1` (`DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `VIGENCIA_DOCUMENTO`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `CODIGO_PAGO`
--
ALTER TABLE `CODIGO_PAGO`
  ADD CONSTRAINT `fk_LICENCIA_has_TIPO DE PAGO_LICENCIA1` FOREIGN KEY (`LICENCIA_idLICENCIA`) REFERENCES `licencia` (`idLICENCIA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LICENCIA_has_TIPO DE PAGO_TIPO DE PAGO1` FOREIGN KEY (`TIPO_DE_PAGO_idTIPO_DE_PAGO`) REFERENCES `tipo_de_pago` (`idTIPO_DE_PAGO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `DOCUMENTO`
--
ALTER TABLE `DOCUMENTO`
  ADD CONSTRAINT `fk_DOCUMENTO_DOCUMENTO1` FOREIGN KEY (`DOCUMENTO_idDOCUMENTO`) REFERENCES `documento` (`idDOCUMENTO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `DOCUMENTOS_FASE`
--
ALTER TABLE `DOCUMENTOS_FASE`
  ADD CONSTRAINT `fk_LICENCIA_has_FASE_has_DOCUMENTO_DOCUMENTO1` FOREIGN KEY (`DOCUMENTO_idDOCUMENTO`) REFERENCES `documento` (`idDOCUMENTO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LISTA_DE_DOCUMENTO_FASE1` FOREIGN KEY (`FASE_idFASE`) REFERENCES `fase` (`idFASE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `FASE`
--
ALTER TABLE `FASE`
  ADD CONSTRAINT `fk_FASE_FASE1` FOREIGN KEY (`FASE_idFASE`) REFERENCES `fase` (`idFASE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_FASE_PROCESO1` FOREIGN KEY (`PROCESO_idPROCESO`) REFERENCES `proceso` (`idPROCESO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `FASE_LICENCIA`
--
ALTER TABLE `FASE_LICENCIA`
  ADD CONSTRAINT `fk_FASE_LICENCIA_FASE1` FOREIGN KEY (`FASE_idFASE`) REFERENCES `fase` (`idFASE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LICENCIA_has_ETAPA_LICENCIA1` FOREIGN KEY (`LICENCIA_idLICENCIA`) REFERENCES `licencia` (`idLICENCIA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `IMPORTACION`
--
ALTER TABLE `IMPORTACION`
  ADD CONSTRAINT `fk_IMPORTACION_PAIS1` FOREIGN KEY (`PAIS_Origen`) REFERENCES `pais` (`idPAIS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_IMPORTACION_PAIS2` FOREIGN KEY (`PAIS_Destino`) REFERENCES `pais` (`idPAIS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TRANSPORTE_has_LICENCIA_LICENCIA1` FOREIGN KEY (`LICENCIA_idLICENCIA`) REFERENCES `licencia` (`idLICENCIA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TRANSPORTE_has_LICENCIA_TRANSPORTE1` FOREIGN KEY (`TRANSPORTE_idTRANSPORTE`) REFERENCES `transporte` (`idTRANSPORTE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `LICENCIA`
--
ALTER TABLE `LICENCIA`
  ADD CONSTRAINT `fk_LICENCIA_EMPRESA` FOREIGN KEY (`EMPRESA_idEMPRESA`) REFERENCES `empresa` (`idEMPRESA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LICENCIA_PROCESO1` FOREIGN KEY (`PROCESO_idPROCESO`) REFERENCES `proceso` (`idPROCESO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LICENCIA_PROVEEDOR1` FOREIGN KEY (`PROVEEDOR_idPROVEEDOR`) REFERENCES `proveedor` (`idPROVEEDOR`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `LISTA_PRODUCTO`
--
ALTER TABLE `LISTA_PRODUCTO`
  ADD CONSTRAINT `fk_LICENCIA_has_PRODUCTO_LICENCIA1` FOREIGN KEY (`LICENCIA_idLICENCIA`) REFERENCES `licencia` (`idLICENCIA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LICENCIA_has_PRODUCTO_PRODUCTO1` FOREIGN KEY (`PRODUCTO_idPRODUCTO`) REFERENCES `producto` (`idPRODUCTO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `PROVEEDOR`
--
ALTER TABLE `PROVEEDOR`
  ADD CONSTRAINT `fk_PROVEEDOR_PAIS1` FOREIGN KEY (`PAIS_idPAIS`) REFERENCES `pais` (`idPAIS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `RESPONSABLE`
--
ALTER TABLE `RESPONSABLE`
  ADD CONSTRAINT `fk_EMPLEADO_has_LICENCIA_EMPLEADO1` FOREIGN KEY (`EMPLEADO_idEMPLEADO`) REFERENCES `empleado` (`idEMPLEADO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_EMPLEADO_has_LICENCIA_LICENCIA1` FOREIGN KEY (`LICENCIA_idLICENCIA`) REFERENCES `licencia` (`idLICENCIA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `TRANSPORTE`
--
ALTER TABLE `TRANSPORTE`
  ADD CONSTRAINT `fk_TRANSPORTE_PAIS1` FOREIGN KEY (`PAIS_idPAIS`) REFERENCES `pais` (`idPAIS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `VIGENCIA_DOCUMENTO`
--
ALTER TABLE `VIGENCIA_DOCUMENTO`
  ADD CONSTRAINT `fk_LISTA_DE_DOCUMENTO_has_LICENCIA_LICENCIA1` FOREIGN KEY (`LICENCIA_idLICENCIA`) REFERENCES `licencia` (`idLICENCIA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_VIGENCIA_DOCUMENTO_DOCUMENTOS_FASE1` FOREIGN KEY (`DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO`) REFERENCES `documentos_fase` (`DOCUMENTO_idDOCUMENTO`) ON DELETE NO ACTION ON UPDATE NO ACTION;
