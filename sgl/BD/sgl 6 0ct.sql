SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `sglbd` DEFAULT CHARACTER SET latin1 ;
USE `sglbd` ;

-- -----------------------------------------------------
-- Table `sglbd`.`ADMINISTRADOR`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`ADMINISTRADOR` (
  `idADMINISTRADOR` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `apellido` VARCHAR(45) NOT NULL ,
  `cedula` VARCHAR(45) NULL DEFAULT NULL ,
  `login` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(18) NOT NULL ,
  `email` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idADMINISTRADOR`) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`licencia`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`LICENCIA` (
  `idLICENCIA` INT(11) NOT NULL AUTO_INCREMENT ,
  `EMPRESA_idEMPRESA` INT(11) NOT NULL ,
  `PROVEEDOR_idPROVEEDOR` INT(11) NOT NULL ,
  `fechaInicio` DATE NOT NULL ,
  `fechaFin` DATE NULL DEFAULT NULL ,
  `fechaFinEstimada` DATE NULL DEFAULT NULL ,
  `numeroProforma` VARCHAR(45) NOT NULL ,
  `numeroCNP` VARCHAR(45) NULL DEFAULT NULL ,
  `vencimientoCNP` DATE NULL DEFAULT NULL ,
  `status` VARCHAR(45) NOT NULL ,
  `formaPago` VARCHAR(45) NULL DEFAULT NULL ,
  `tipo` VARCHAR(45) NULL DEFAULT NULL ,
  `flete` DECIMAL(20,0) NULL DEFAULT NULL ,
  `seguro` VARCHAR(45) NULL DEFAULT NULL ,
  `PROCESO_idPROCESO` INT(11) NOT NULL ,
  PRIMARY KEY (`idLICENCIA`) ,
  INDEX `fk_LICENCIA_EMPRESA` (`EMPRESA_idEMPRESA` ASC) ,
  INDEX `fk_LICENCIA_PROVEEDOR1` (`PROVEEDOR_idPROVEEDOR` ASC) ,
  INDEX `fk_LICENCIA_PROCESO1` (`PROCESO_idPROCESO` ASC) ,
  CONSTRAINT `fk_LICENCIA_EMPRESA`
    FOREIGN KEY (`EMPRESA_idEMPRESA` )
    REFERENCES `sglbd`.`empresa` (`idEMPRESA` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_PROCESO1`
    FOREIGN KEY (`PROCESO_idPROCESO` )
    REFERENCES `sglbd`.`proceso` (`idPROCESO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_PROVEEDOR1`
    FOREIGN KEY (`PROVEEDOR_idPROVEEDOR` )
    REFERENCES `sglbd`.`proveedor` (`idPROVEEDOR` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`tipo_de_pago`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`TIPO_DE_PAGO` (
  `idTIPO_DE_PAGO` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idTIPO_DE_PAGO`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`CODIGO_PAGO`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`CODIGO_PAGO` (
  `LICENCIA_idLICENCIA` INT(11) NOT NULL ,
  `TIPO_DE_PAGO_idTIPO_DE_PAGO` INT(11) NOT NULL ,
  `numRef` VARCHAR(45) NULL DEFAULT NULL ,
  `fecha` VARCHAR(45) NULL DEFAULT NULL ,
  `divisa` VARCHAR(45) NULL DEFAULT NULL ,
  `monto` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`LICENCIA_idLICENCIA`, `TIPO_DE_PAGO_idTIPO_DE_PAGO`) ,
  INDEX `fk_LICENCIA_has_TIPO DE PAGO_LICENCIA1` (`LICENCIA_idLICENCIA` ASC) ,
  INDEX `fk_LICENCIA_has_TIPO DE PAGO_TIPO DE PAGO1` (`TIPO_DE_PAGO_idTIPO_DE_PAGO` ASC) ,
  CONSTRAINT `fk_LICENCIA_has_TIPO DE PAGO_LICENCIA1`
    FOREIGN KEY (`LICENCIA_idLICENCIA` )
    REFERENCES `sglbd`.`licencia` (`idLICENCIA` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_has_TIPO DE PAGO_TIPO DE PAGO1`
    FOREIGN KEY (`TIPO_DE_PAGO_idTIPO_DE_PAGO` )
    REFERENCES `sglbd`.`tipo_de_pago` (`idTIPO_DE_PAGO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`documento`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`DOCUMENTO` (
  `idDOCUMENTO` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(70) NOT NULL ,
  `duracion` INT(11) NULL DEFAULT NULL ,
  `DOCUMENTO_idDOCUMENTO` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`idDOCUMENTO`) ,
  INDEX `fk_DOCUMENTO_DOCUMENTO1` (`DOCUMENTO_idDOCUMENTO` ASC) ,
  CONSTRAINT `fk_DOCUMENTO_DOCUMENTO1`
    FOREIGN KEY (`DOCUMENTO_idDOCUMENTO` )
    REFERENCES `sglbd`.`documento` (`idDOCUMENTO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`DOCUMENTO`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`DOCUMENTO` (
  `idDOCUMENTO` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(70) NOT NULL ,
  `duracion` INT(11) NULL DEFAULT NULL ,
  `DOCUMENTO_idDOCUMENTO` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`idDOCUMENTO`) ,
  INDEX `fk_DOCUMENTO_DOCUMENTO1` (`DOCUMENTO_idDOCUMENTO` ASC) ,
  CONSTRAINT `fk_DOCUMENTO_DOCUMENTO1`
    FOREIGN KEY (`DOCUMENTO_idDOCUMENTO` )
    REFERENCES `sglbd`.`documento` (`idDOCUMENTO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`fase`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`FASE` (
  `idFASE` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `duracion` INT(11) NULL DEFAULT NULL ,
  `icono` BLOB NULL DEFAULT NULL ,
  `PROCESO_idPROCESO` INT(11) NOT NULL ,
  PRIMARY KEY (`idFASE`) ,
  INDEX `fk_FASE_PROCESO1` (`PROCESO_idPROCESO` ASC) ,
  CONSTRAINT `fk_FASE_PROCESO1`
    FOREIGN KEY (`PROCESO_idPROCESO` )
    REFERENCES `sglbd`.`proceso` (`idPROCESO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`DOCUMENTOS_FASE`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`DOCUMENTOS_FASE` (
  `DOCUMENTO_idDOCUMENTO` INT(11) NOT NULL ,
  `FASE_idFASE` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`DOCUMENTO_idDOCUMENTO`) ,
  INDEX `fk_LICENCIA_has_FASE_has_DOCUMENTO_DOCUMENTO1` (`DOCUMENTO_idDOCUMENTO` ASC) ,
  INDEX `fk_LISTA_DE_DOCUMENTO_FASE1` (`FASE_idFASE` ASC) ,
  CONSTRAINT `fk_LICENCIA_has_FASE_has_DOCUMENTO_DOCUMENTO1`
    FOREIGN KEY (`DOCUMENTO_idDOCUMENTO` )
    REFERENCES `sglbd`.`documento` (`idDOCUMENTO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LISTA_DE_DOCUMENTO_FASE1`
    FOREIGN KEY (`FASE_idFASE` )
    REFERENCES `sglbd`.`fase` (`idFASE` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`EMPLEADO`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`EMPLEADO` (
  `idEMPLEADO` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `apellido` VARCHAR(45) NOT NULL ,
  `cedula` VARCHAR(45) NULL DEFAULT NULL ,
  `login` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(18) NOT NULL ,
  `email` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idEMPLEADO`) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`EMPRESA`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`EMPRESA` (
  `idEMPRESA` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(70) NOT NULL ,
  `rif` VARCHAR(45) NOT NULL ,
  `direccion` TEXT NOT NULL ,
  `telefono` VARCHAR(15) NULL DEFAULT NULL ,
  `email` VARCHAR(70) NULL DEFAULT NULL ,
  `login` VARCHAR(45) NULL DEFAULT NULL ,
  `password` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idEMPRESA`) )
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`proceso`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`PROCESO` (
  `idPROCESO` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(90) NOT NULL ,
  `duracion` INT(11) NOT NULL ,
  PRIMARY KEY (`idPROCESO`) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`FASE`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`FASE` (
  `idFASE` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `duracion` INT(11) NULL DEFAULT NULL ,
  `icono` BLOB NULL DEFAULT NULL ,
  `PROCESO_idPROCESO` INT(11) NOT NULL ,
  PRIMARY KEY (`idFASE`) ,
  INDEX `fk_FASE_PROCESO1` (`PROCESO_idPROCESO` ASC) ,
  CONSTRAINT `fk_FASE_PROCESO1`
    FOREIGN KEY (`PROCESO_idPROCESO` )
    REFERENCES `sglbd`.`proceso` (`idPROCESO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`FASE_LICENCIA`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`FASE_LICENCIA` (
  `LICENCIA_idLICENCIA` INT(11) NOT NULL ,
  `FASE_fechaInicio` DATE NULL DEFAULT NULL ,
  `FASE_fechaFin` DATE NULL DEFAULT NULL ,
  `FASE_idFASE` INT(11) NOT NULL ,
  PRIMARY KEY (`LICENCIA_idLICENCIA`, `FASE_idFASE`) ,
  INDEX `fk_LICENCIA_has_ETAPA_LICENCIA1` (`LICENCIA_idLICENCIA` ASC) ,
  INDEX `fk_FASE_LICENCIA_FASE1` (`FASE_idFASE` ASC) ,
  CONSTRAINT `fk_FASE_LICENCIA_FASE1`
    FOREIGN KEY (`FASE_idFASE` )
    REFERENCES `sglbd`.`fase` (`idFASE` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_has_ETAPA_LICENCIA1`
    FOREIGN KEY (`LICENCIA_idLICENCIA` )
    REFERENCES `sglbd`.`licencia` (`idLICENCIA` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`pais`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`PAIS` (
  `idPAIS` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idPAIS`) )
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`transporte`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`TRANSPORTE` (
  `idTRANSPORTE` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `direccion` VARCHAR(45) NULL DEFAULT NULL ,
  `telefono` VARCHAR(45) NULL DEFAULT NULL ,
  `PAIS_idPAIS` INT(11) NOT NULL ,
  PRIMARY KEY (`idTRANSPORTE`) ,
  INDEX `fk_TRANSPORTE_PAIS1` (`PAIS_idPAIS` ASC) ,
  CONSTRAINT `fk_TRANSPORTE_PAIS1`
    FOREIGN KEY (`PAIS_idPAIS` )
    REFERENCES `sglbd`.`pais` (`idPAIS` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`IMPORTACION`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`IMPORTACION` (
  `TRANSPORTE_idTRANSPORTE` INT(11) NOT NULL ,
  `LICENCIA_idLICENCIA` INT(11) NOT NULL ,
  `fechaDeSalida` DATE NULL DEFAULT NULL ,
  `fechaLlegada` DATE NULL DEFAULT NULL ,
  `tipo` VARCHAR(45) NOT NULL ,
  `PAIS_Origen` INT(11) NOT NULL ,
  `PAIS_Destino` INT(11) NOT NULL ,
  PRIMARY KEY (`TRANSPORTE_idTRANSPORTE`, `LICENCIA_idLICENCIA`) ,
  INDEX `fk_TRANSPORTE_has_LICENCIA_TRANSPORTE1` (`TRANSPORTE_idTRANSPORTE` ASC) ,
  INDEX `fk_TRANSPORTE_has_LICENCIA_LICENCIA1` (`LICENCIA_idLICENCIA` ASC) ,
  INDEX `fk_IMPORTACION_PAIS1` (`PAIS_Origen` ASC) ,
  INDEX `fk_IMPORTACION_PAIS2` (`PAIS_Destino` ASC) ,
  CONSTRAINT `fk_IMPORTACION_PAIS1`
    FOREIGN KEY (`PAIS_Origen` )
    REFERENCES `sglbd`.`pais` (`idPAIS` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_IMPORTACION_PAIS2`
    FOREIGN KEY (`PAIS_Destino` )
    REFERENCES `sglbd`.`pais` (`idPAIS` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TRANSPORTE_has_LICENCIA_LICENCIA1`
    FOREIGN KEY (`LICENCIA_idLICENCIA` )
    REFERENCES `sglbd`.`licencia` (`idLICENCIA` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TRANSPORTE_has_LICENCIA_TRANSPORTE1`
    FOREIGN KEY (`TRANSPORTE_idTRANSPORTE` )
    REFERENCES `sglbd`.`transporte` (`idTRANSPORTE` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`empresa`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`EMPRESA` (
  `idEMPRESA` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(70) NOT NULL ,
  `rif` VARCHAR(45) NOT NULL ,
  `direccion` TEXT NOT NULL ,
  `telefono` VARCHAR(15) NULL DEFAULT NULL ,
  `email` VARCHAR(70) NULL DEFAULT NULL ,
  `login` VARCHAR(45) NULL DEFAULT NULL ,
  `password` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idEMPRESA`) )
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`proveedor`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`PROVEEDOR` (
  `idPROVEEDOR` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `direccion` TEXT NOT NULL ,
  `telefono` VARCHAR(15) NULL DEFAULT NULL ,
  `email` VARCHAR(70) NULL DEFAULT NULL ,
  `PAIS_idPAIS` INT(11) NOT NULL ,
  PRIMARY KEY (`idPROVEEDOR`) ,
  INDEX `fk_PROVEEDOR_PAIS1` (`PAIS_idPAIS` ASC) ,
  CONSTRAINT `fk_PROVEEDOR_PAIS1`
    FOREIGN KEY (`PAIS_idPAIS` )
    REFERENCES `sglbd`.`pais` (`idPAIS` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`LICENCIA`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`LICENCIA` (
  `idLICENCIA` INT(11) NOT NULL AUTO_INCREMENT ,
  `EMPRESA_idEMPRESA` INT(11) NOT NULL ,
  `PROVEEDOR_idPROVEEDOR` INT(11) NOT NULL ,
  `fechaInicio` DATE NOT NULL ,
  `fechaFin` DATE NULL DEFAULT NULL ,
  `fechaFinEstimada` DATE NULL DEFAULT NULL ,
  `numeroProforma` VARCHAR(45) NOT NULL ,
  `numeroCNP` VARCHAR(45) NULL DEFAULT NULL ,
  `vencimientoCNP` DATE NULL DEFAULT NULL ,
  `status` VARCHAR(45) NOT NULL ,
  `formaPago` VARCHAR(45) NULL DEFAULT NULL ,
  `tipo` VARCHAR(45) NULL DEFAULT NULL ,
  `flete` DECIMAL(20,0) NULL DEFAULT NULL ,
  `seguro` VARCHAR(45) NULL DEFAULT NULL ,
  `PROCESO_idPROCESO` INT(11) NOT NULL ,
  PRIMARY KEY (`idLICENCIA`) ,
  INDEX `fk_LICENCIA_EMPRESA` (`EMPRESA_idEMPRESA` ASC) ,
  INDEX `fk_LICENCIA_PROVEEDOR1` (`PROVEEDOR_idPROVEEDOR` ASC) ,
  INDEX `fk_LICENCIA_PROCESO1` (`PROCESO_idPROCESO` ASC) ,
  CONSTRAINT `fk_LICENCIA_EMPRESA`
    FOREIGN KEY (`EMPRESA_idEMPRESA` )
    REFERENCES `sglbd`.`empresa` (`idEMPRESA` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_PROCESO1`
    FOREIGN KEY (`PROCESO_idPROCESO` )
    REFERENCES `sglbd`.`proceso` (`idPROCESO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_PROVEEDOR1`
    FOREIGN KEY (`PROVEEDOR_idPROVEEDOR` )
    REFERENCES `sglbd`.`proveedor` (`idPROVEEDOR` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`producto`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`PRODUCTO` (
  `idPRODUCTO` INT(11) NOT NULL AUTO_INCREMENT ,
  `codigoArancelario` VARCHAR(45) NOT NULL ,
  `descripcion` TEXT NOT NULL ,
  `numeroRegSanitario` VARCHAR(45) NULL DEFAULT NULL ,
  `volumen` INT(11) NULL DEFAULT NULL ,
  `unidad` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idPRODUCTO`) )
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`LISTA_PRODUCTO`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`LISTA_PRODUCTO` (
  `LICENCIA_idLICENCIA` INT(11) NOT NULL ,
  `PRODUCTO_idPRODUCTO` INT(11) NOT NULL ,
  `PRODUCTO_cantidad` INT(11) NOT NULL ,
  `PRODUCTO_volumen` INT(11) NOT NULL ,
  `PRODUCTO_unidad` VARCHAR(45) NOT NULL ,
  `PRODUCTO_costoUnitario` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`LICENCIA_idLICENCIA`, `PRODUCTO_idPRODUCTO`) ,
  INDEX `fk_LICENCIA_has_PRODUCTO_LICENCIA1` (`LICENCIA_idLICENCIA` ASC) ,
  INDEX `fk_LICENCIA_has_PRODUCTO_PRODUCTO1` (`PRODUCTO_idPRODUCTO` ASC) ,
  CONSTRAINT `fk_LICENCIA_has_PRODUCTO_LICENCIA1`
    FOREIGN KEY (`LICENCIA_idLICENCIA` )
    REFERENCES `sglbd`.`licencia` (`idLICENCIA` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_has_PRODUCTO_PRODUCTO1`
    FOREIGN KEY (`PRODUCTO_idPRODUCTO` )
    REFERENCES `sglbd`.`producto` (`idPRODUCTO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`PAIS`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`PAIS` (
  `idPAIS` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idPAIS`) )
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`PROCESO`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`PROCESO` (
  `idPROCESO` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(90) NOT NULL ,
  `duracion` INT(11) NOT NULL ,
  PRIMARY KEY (`idPROCESO`) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`PRODUCTO`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`PRODUCTO` (
  `idPRODUCTO` INT(11) NOT NULL AUTO_INCREMENT ,
  `codigoArancelario` VARCHAR(45) NOT NULL ,
  `descripcion` TEXT NOT NULL ,
  `numeroRegSanitario` VARCHAR(45) NULL DEFAULT NULL ,
  `volumen` INT(11) NULL DEFAULT NULL ,
  `unidad` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idPRODUCTO`) )
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`PROVEEDOR`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`PROVEEDOR` (
  `idPROVEEDOR` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `direccion` TEXT NOT NULL ,
  `telefono` VARCHAR(15) NULL DEFAULT NULL ,
  `email` VARCHAR(70) NULL DEFAULT NULL ,
  `PAIS_idPAIS` INT(11) NOT NULL ,
  PRIMARY KEY (`idPROVEEDOR`) ,
  INDEX `fk_PROVEEDOR_PAIS1` (`PAIS_idPAIS` ASC) ,
  CONSTRAINT `fk_PROVEEDOR_PAIS1`
    FOREIGN KEY (`PAIS_idPAIS` )
    REFERENCES `sglbd`.`pais` (`idPAIS` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`empleado`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`EMPLEADO` (
  `idEMPLEADO` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `apellido` VARCHAR(45) NOT NULL ,
  `cedula` VARCHAR(45) NULL DEFAULT NULL ,
  `login` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(18) NOT NULL ,
  `email` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idEMPLEADO`) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`RESPONSABLE`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`RESPONSABLE` (
  `EMPLEADO_idEMPLEADO` INT(11) NOT NULL ,
  `LICENCIA_idLICENCIA` INT(11) NOT NULL ,
  `fechaInicio` DATE NOT NULL ,
  `fechaFin` DATE NULL DEFAULT NULL ,
  PRIMARY KEY (`EMPLEADO_idEMPLEADO`, `LICENCIA_idLICENCIA`) ,
  INDEX `fk_EMPLEADO_has_LICENCIA_EMPLEADO1` (`EMPLEADO_idEMPLEADO` ASC) ,
  INDEX `fk_EMPLEADO_has_LICENCIA_LICENCIA1` (`LICENCIA_idLICENCIA` ASC) ,
  CONSTRAINT `fk_EMPLEADO_has_LICENCIA_EMPLEADO1`
    FOREIGN KEY (`EMPLEADO_idEMPLEADO` )
    REFERENCES `sglbd`.`empleado` (`idEMPLEADO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EMPLEADO_has_LICENCIA_LICENCIA1`
    FOREIGN KEY (`LICENCIA_idLICENCIA` )
    REFERENCES `sglbd`.`licencia` (`idLICENCIA` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`TIPO_DE_PAGO`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`TIPO_DE_PAGO` (
  `idTIPO_DE_PAGO` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idTIPO_DE_PAGO`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`TRANSPORTE`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`TRANSPORTE` (
  `idTRANSPORTE` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `direccion` VARCHAR(45) NULL DEFAULT NULL ,
  `telefono` VARCHAR(45) NULL DEFAULT NULL ,
  `PAIS_idPAIS` INT(11) NOT NULL ,
  PRIMARY KEY (`idTRANSPORTE`) ,
  INDEX `fk_TRANSPORTE_PAIS1` (`PAIS_idPAIS` ASC) ,
  CONSTRAINT `fk_TRANSPORTE_PAIS1`
    FOREIGN KEY (`PAIS_idPAIS` )
    REFERENCES `sglbd`.`pais` (`idPAIS` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`documentos_fase`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`DOCUMENTOS_FASE` (
  `DOCUMENTO_idDOCUMENTO` INT(11) NOT NULL ,
  `FASE_idFASE` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`DOCUMENTO_idDOCUMENTO`) ,
  INDEX `fk_LICENCIA_has_FASE_has_DOCUMENTO_DOCUMENTO1` (`DOCUMENTO_idDOCUMENTO` ASC) ,
  INDEX `fk_LISTA_DE_DOCUMENTO_FASE1` (`FASE_idFASE` ASC) ,
  CONSTRAINT `fk_LICENCIA_has_FASE_has_DOCUMENTO_DOCUMENTO1`
    FOREIGN KEY (`DOCUMENTO_idDOCUMENTO` )
    REFERENCES `sglbd`.`documento` (`idDOCUMENTO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LISTA_DE_DOCUMENTO_FASE1`
    FOREIGN KEY (`FASE_idFASE` )
    REFERENCES `sglbd`.`fase` (`idFASE` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sglbd`.`VIGENCIA_DOCUMENTO`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sglbd`.`VIGENCIA_DOCUMENTO` (
  `LICENCIA_idLICENCIA` INT(11) NOT NULL ,
  `DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO` INT(11) NOT NULL ,
  `fechaOtorgado` DATE NULL DEFAULT NULL ,
  `fechaVencimieto` DATE NULL DEFAULT NULL ,
  `numRef` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`LICENCIA_idLICENCIA`, `DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO`) ,
  INDEX `fk_LISTA_DE_DOCUMENTO_has_LICENCIA_LICENCIA1` (`LICENCIA_idLICENCIA` ASC) ,
  INDEX `fk_VIGENCIA_DOCUMENTO_DOCUMENTOS_FASE1` (`DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO` ASC) ,
  CONSTRAINT `fk_LISTA_DE_DOCUMENTO_has_LICENCIA_LICENCIA1`
    FOREIGN KEY (`LICENCIA_idLICENCIA` )
    REFERENCES `sglbd`.`licencia` (`idLICENCIA` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_VIGENCIA_DOCUMENTO_DOCUMENTOS_FASE1`
    FOREIGN KEY (`DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO` )
    REFERENCES `sglbd`.`documentos_fase` (`DOCUMENTO_idDOCUMENTO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

USE `sglbd`;

DELIMITER $$
USE `sglbd`$$
CREATE
DEFINER=`root`@`localhost`
TRIGGER `sglbd`.`INSERTAR_FL`
AFTER INSERT ON `sglbd`.`LICENCIA`
FOR EACH ROW
BEGIN

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

END$$


DELIMITER ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
