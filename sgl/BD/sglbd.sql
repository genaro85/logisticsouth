SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `sglbd` ;
CREATE SCHEMA IF NOT EXISTS `sglbd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `sglbd` ;

-- -----------------------------------------------------
-- Table `sglbd`.`EMPRESA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`EMPRESA` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`EMPRESA` (
  `idEMPRESA` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(70) NOT NULL ,
  `rif` VARCHAR(45) NOT NULL ,
  `direccion` TEXT NOT NULL ,
  `telefono` VARCHAR(15) NULL ,
  `email` VARCHAR(70) NULL ,
  `login` VARCHAR(45) NULL ,
  `password` VARCHAR(45) NULL ,
  PRIMARY KEY (`idEMPRESA`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`PAIS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`PAIS` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`PAIS` (
  `idPAIS` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  PRIMARY KEY (`idPAIS`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`PROVEEDOR`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`PROVEEDOR` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`PROVEEDOR` (
  `idPROVEEDOR` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `direccion` TEXT NOT NULL ,
  `telefono` VARCHAR(15) NULL ,
  `email` VARCHAR(70) NULL ,
  `PAIS_idPAIS` INT NOT NULL ,
  PRIMARY KEY (`idPROVEEDOR`) ,
  INDEX `fk_PROVEEDOR_PAIS1` (`PAIS_idPAIS` ASC) ,
  CONSTRAINT `fk_PROVEEDOR_PAIS1`
    FOREIGN KEY (`PAIS_idPAIS` )
    REFERENCES `sglbd`.`PAIS` (`idPAIS` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`PROCESO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`PROCESO` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`PROCESO` (
  `idPROCESO` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(90) NOT NULL ,
  `duracion` INT NOT NULL ,
  PRIMARY KEY (`idPROCESO`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`LICENCIA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`LICENCIA` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`LICENCIA` (
  `idLICENCIA` INT NOT NULL AUTO_INCREMENT ,
  `EMPRESA_idEMPRESA` INT NOT NULL ,
  `PROVEEDOR_idPROVEEDOR` INT NOT NULL ,
  `fechaInicio` DATE NOT NULL ,
  `fechaFin` DATE NULL ,
  `fechaFinEstimada` DATE NULL ,
  `numeroProforma` VARCHAR(45) NOT NULL ,
  `numeroCNP` VARCHAR(45) NULL ,
  `vencimientoCNP` DATE NULL ,
  `status` VARCHAR(45) NOT NULL ,
  `formaPago` VARCHAR(45) NULL ,
  `tipo` VARCHAR(45) NULL ,
  `flete` DECIMAL(20) NULL ,
  `seguro` VARCHAR(45) NULL ,
  `PROCESO_idPROCESO` INT NOT NULL ,
  PRIMARY KEY (`idLICENCIA`) ,
  INDEX `fk_LICENCIA_EMPRESA` (`EMPRESA_idEMPRESA` ASC) ,
  INDEX `fk_LICENCIA_PROVEEDOR1` (`PROVEEDOR_idPROVEEDOR` ASC) ,
  INDEX `fk_LICENCIA_PROCESO1` (`PROCESO_idPROCESO` ASC) ,
  CONSTRAINT `fk_LICENCIA_EMPRESA`
    FOREIGN KEY (`EMPRESA_idEMPRESA` )
    REFERENCES `sglbd`.`EMPRESA` (`idEMPRESA` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_PROVEEDOR1`
    FOREIGN KEY (`PROVEEDOR_idPROVEEDOR` )
    REFERENCES `sglbd`.`PROVEEDOR` (`idPROVEEDOR` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_PROCESO1`
    FOREIGN KEY (`PROCESO_idPROCESO` )
    REFERENCES `sglbd`.`PROCESO` (`idPROCESO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`PRODUCTO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`PRODUCTO` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`PRODUCTO` (
  `idPRODUCTO` INT NOT NULL AUTO_INCREMENT ,
  `codigoArancelario` VARCHAR(45) NOT NULL ,
  `descripcion` TEXT NOT NULL ,
  `numeroRegSanitario` VARCHAR(45) NULL ,
  `volumen` INT NULL ,
  `unidad` VARCHAR(45) NULL ,
  PRIMARY KEY (`idPRODUCTO`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`EMPLEADO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`EMPLEADO` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`EMPLEADO` (
  `idEMPLEADO` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `apellido` VARCHAR(45) NOT NULL ,
  `cedula` VARCHAR(45) NULL ,
  `login` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(18) NOT NULL ,
  PRIMARY KEY (`idEMPLEADO`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`FASE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`FASE` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`FASE` (
  `idFASE` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `duracion` INT NULL ,
  `icono` BLOB NOT NULL ,
  `PROCESO_idPROCESO` INT NOT NULL ,
  PRIMARY KEY (`idFASE`) ,
  INDEX `fk_FASE_PROCESO1` (`PROCESO_idPROCESO` ASC) ,
  CONSTRAINT `fk_FASE_PROCESO1`
    FOREIGN KEY (`PROCESO_idPROCESO` )
    REFERENCES `sglbd`.`PROCESO` (`idPROCESO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`DOCUMENTO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`DOCUMENTO` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`DOCUMENTO` (
  `idDOCUMENTO` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(70) NOT NULL ,
  `duracion` INT NULL ,
  PRIMARY KEY (`idDOCUMENTO`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`LISTA_PRODUCTO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`LISTA_PRODUCTO` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`LISTA_PRODUCTO` (
  `LICENCIA_idLICENCIA` INT NOT NULL ,
  `PRODUCTO_idPRODUCTO` INT NOT NULL ,
  `PRODUCTO_cantidad` VARCHAR(45) NOT NULL ,
  `PRODUCTO_volumen` INT NOT NULL ,
  `PRODUCTO_unidad` VARCHAR(45) NOT NULL ,
  `PRODUCTO_costoUnitario` VARCHAR(45) NULL ,
  PRIMARY KEY (`LICENCIA_idLICENCIA`, `PRODUCTO_idPRODUCTO`) ,
  INDEX `fk_LICENCIA_has_PRODUCTO_LICENCIA1` (`LICENCIA_idLICENCIA` ASC) ,
  INDEX `fk_LICENCIA_has_PRODUCTO_PRODUCTO1` (`PRODUCTO_idPRODUCTO` ASC) ,
  CONSTRAINT `fk_LICENCIA_has_PRODUCTO_LICENCIA1`
    FOREIGN KEY (`LICENCIA_idLICENCIA` )
    REFERENCES `sglbd`.`LICENCIA` (`idLICENCIA` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_has_PRODUCTO_PRODUCTO1`
    FOREIGN KEY (`PRODUCTO_idPRODUCTO` )
    REFERENCES `sglbd`.`PRODUCTO` (`idPRODUCTO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`DOCUMENTOS_FASE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`DOCUMENTOS_FASE` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`DOCUMENTOS_FASE` (
  `DOCUMENTO_idDOCUMENTO` INT NOT NULL ,
  `FASE_idFASE` INT NULL ,
  PRIMARY KEY (`DOCUMENTO_idDOCUMENTO`) ,
  INDEX `fk_LICENCIA_has_FASE_has_DOCUMENTO_DOCUMENTO1` (`DOCUMENTO_idDOCUMENTO` ASC) ,
  INDEX `fk_LISTA_DE_DOCUMENTO_FASE1` (`FASE_idFASE` ASC) ,
  CONSTRAINT `fk_LICENCIA_has_FASE_has_DOCUMENTO_DOCUMENTO1`
    FOREIGN KEY (`DOCUMENTO_idDOCUMENTO` )
    REFERENCES `sglbd`.`DOCUMENTO` (`idDOCUMENTO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LISTA_DE_DOCUMENTO_FASE1`
    FOREIGN KEY (`FASE_idFASE` )
    REFERENCES `sglbd`.`FASE` (`idFASE` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`FASE_LICENCIA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`FASE_LICENCIA` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`FASE_LICENCIA` (
  `LICENCIA_idLICENCIA` INT NOT NULL ,
  `FASE_fechaInicio` DATE NULL ,
  `FASE_fechaFin` DATE NULL ,
  `FASE_idFASE` INT NOT NULL ,
  PRIMARY KEY (`LICENCIA_idLICENCIA`, `FASE_idFASE`) ,
  INDEX `fk_LICENCIA_has_ETAPA_LICENCIA1` (`LICENCIA_idLICENCIA` ASC) ,
  INDEX `fk_FASE_LICENCIA_FASE1` (`FASE_idFASE` ASC) ,
  CONSTRAINT `fk_LICENCIA_has_ETAPA_LICENCIA1`
    FOREIGN KEY (`LICENCIA_idLICENCIA` )
    REFERENCES `sglbd`.`LICENCIA` (`idLICENCIA` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_FASE_LICENCIA_FASE1`
    FOREIGN KEY (`FASE_idFASE` )
    REFERENCES `sglbd`.`FASE` (`idFASE` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`VIGENCIA_DOCUMENTO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`VIGENCIA_DOCUMENTO` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`VIGENCIA_DOCUMENTO` (
  `LICENCIA_idLICENCIA` INT NOT NULL ,
  `DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO` INT NOT NULL ,
  `fechaOtorgado` DATE NULL ,
  `fechaVencimieto` DATE NULL ,
  `numRef` VARCHAR(45) NULL ,
  PRIMARY KEY (`LICENCIA_idLICENCIA`, `DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO`) ,
  INDEX `fk_LISTA_DE_DOCUMENTO_has_LICENCIA_LICENCIA1` (`LICENCIA_idLICENCIA` ASC) ,
  INDEX `fk_VIGENCIA_DOCUMENTO_DOCUMENTOS_FASE1` (`DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO` ASC) ,
  CONSTRAINT `fk_LISTA_DE_DOCUMENTO_has_LICENCIA_LICENCIA1`
    FOREIGN KEY (`LICENCIA_idLICENCIA` )
    REFERENCES `sglbd`.`LICENCIA` (`idLICENCIA` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_VIGENCIA_DOCUMENTO_DOCUMENTOS_FASE1`
    FOREIGN KEY (`DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO` )
    REFERENCES `sglbd`.`DOCUMENTOS_FASE` (`DOCUMENTO_idDOCUMENTO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`ADMINISTRADOR`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`ADMINISTRADOR` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`ADMINISTRADOR` (
  `idADMINISTRADOR` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `apellido` VARCHAR(45) NOT NULL ,
  `cedula` VARCHAR(45) NULL ,
  `login` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(18) NOT NULL ,
  PRIMARY KEY (`idADMINISTRADOR`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`RESPONSABLE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`RESPONSABLE` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`RESPONSABLE` (
  `EMPLEADO_idEMPLEADO` INT NOT NULL ,
  `LICENCIA_idLICENCIA` INT NOT NULL ,
  `fechaInicio` DATE NOT NULL ,
  `fechaFin` DATE NULL ,
  PRIMARY KEY (`EMPLEADO_idEMPLEADO`, `LICENCIA_idLICENCIA`) ,
  INDEX `fk_EMPLEADO_has_LICENCIA_EMPLEADO1` (`EMPLEADO_idEMPLEADO` ASC) ,
  INDEX `fk_EMPLEADO_has_LICENCIA_LICENCIA1` (`LICENCIA_idLICENCIA` ASC) ,
  CONSTRAINT `fk_EMPLEADO_has_LICENCIA_EMPLEADO1`
    FOREIGN KEY (`EMPLEADO_idEMPLEADO` )
    REFERENCES `sglbd`.`EMPLEADO` (`idEMPLEADO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EMPLEADO_has_LICENCIA_LICENCIA1`
    FOREIGN KEY (`LICENCIA_idLICENCIA` )
    REFERENCES `sglbd`.`LICENCIA` (`idLICENCIA` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`TIPO_DE_PAGO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`TIPO_DE_PAGO` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`TIPO_DE_PAGO` (
  `idTIPO_DE_PAGO` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idTIPO_DE_PAGO`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`CODIGO_PAGO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`CODIGO_PAGO` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`CODIGO_PAGO` (
  `LICENCIA_idLICENCIA` INT NOT NULL ,
  `TIPO_DE_PAGO_idTIPO_DE_PAGO` INT NOT NULL ,
  `numRef` VARCHAR(45) NULL ,
  `fecha` VARCHAR(45) NULL ,
  `divisa` VARCHAR(45) NULL ,
  `monto` VARCHAR(45) NULL ,
  PRIMARY KEY (`LICENCIA_idLICENCIA`, `TIPO_DE_PAGO_idTIPO_DE_PAGO`) ,
  INDEX `fk_LICENCIA_has_TIPO DE PAGO_LICENCIA1` (`LICENCIA_idLICENCIA` ASC) ,
  INDEX `fk_LICENCIA_has_TIPO DE PAGO_TIPO DE PAGO1` (`TIPO_DE_PAGO_idTIPO_DE_PAGO` ASC) ,
  CONSTRAINT `fk_LICENCIA_has_TIPO DE PAGO_LICENCIA1`
    FOREIGN KEY (`LICENCIA_idLICENCIA` )
    REFERENCES `sglbd`.`LICENCIA` (`idLICENCIA` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_LICENCIA_has_TIPO DE PAGO_TIPO DE PAGO1`
    FOREIGN KEY (`TIPO_DE_PAGO_idTIPO_DE_PAGO` )
    REFERENCES `sglbd`.`TIPO_DE_PAGO` (`idTIPO_DE_PAGO` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`TRANSPORTE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`TRANSPORTE` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`TRANSPORTE` (
  `idTRANSPORTE` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `direccion` VARCHAR(45) NULL ,
  `telefono` VARCHAR(45) NULL ,
  `PAIS_idPAIS` INT NOT NULL ,
  PRIMARY KEY (`idTRANSPORTE`) ,
  INDEX `fk_TRANSPORTE_PAIS1` (`PAIS_idPAIS` ASC) ,
  CONSTRAINT `fk_TRANSPORTE_PAIS1`
    FOREIGN KEY (`PAIS_idPAIS` )
    REFERENCES `sglbd`.`PAIS` (`idPAIS` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sglbd`.`IMPORTACION`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sglbd`.`IMPORTACION` ;

CREATE  TABLE IF NOT EXISTS `sglbd`.`IMPORTACION` (
  `TRANSPORTE_idTRANSPORTE` INT NOT NULL ,
  `LICENCIA_idLICENCIA` INT NOT NULL ,
  `fechaDeSalida` DATE NULL ,
  `fechaLlegada` DATE NULL ,
  `tipo` VARCHAR(45) NOT NULL ,
  `PAIS_Origen` INT NOT NULL ,
  `PAIS_Destino` INT NOT NULL ,
  PRIMARY KEY (`TRANSPORTE_idTRANSPORTE`, `LICENCIA_idLICENCIA`) ,
  INDEX `fk_TRANSPORTE_has_LICENCIA_TRANSPORTE1` (`TRANSPORTE_idTRANSPORTE` ASC) ,
  INDEX `fk_TRANSPORTE_has_LICENCIA_LICENCIA1` (`LICENCIA_idLICENCIA` ASC) ,
  INDEX `fk_IMPORTACION_PAIS1` (`PAIS_Origen` ASC) ,
  INDEX `fk_IMPORTACION_PAIS2` (`PAIS_Destino` ASC) ,
  CONSTRAINT `fk_TRANSPORTE_has_LICENCIA_TRANSPORTE1`
    FOREIGN KEY (`TRANSPORTE_idTRANSPORTE` )
    REFERENCES `sglbd`.`TRANSPORTE` (`idTRANSPORTE` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TRANSPORTE_has_LICENCIA_LICENCIA1`
    FOREIGN KEY (`LICENCIA_idLICENCIA` )
    REFERENCES `sglbd`.`LICENCIA` (`idLICENCIA` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_IMPORTACION_PAIS1`
    FOREIGN KEY (`PAIS_Origen` )
    REFERENCES `sglbd`.`PAIS` (`idPAIS` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_IMPORTACION_PAIS2`
    FOREIGN KEY (`PAIS_Destino` )
    REFERENCES `sglbd`.`PAIS` (`idPAIS` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
