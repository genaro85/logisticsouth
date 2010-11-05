<?php

require(__META_CONTROLS_GEN__ . '/LicenciaMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * Licencia class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single Licencia object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a LicenciaMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class LicenciaMetaControl extends LicenciaMetaControlGen {

    // Initialize fields with default values from database definition
    /*
      public function __construct($objParentObject, Licencia $objLicencia) {
      parent::__construct($objParentObject,$objLicencia);
      if ( !$this->blnEditMode ){
      $this->objLicencia->Initialize();
      }
      }
    */

    public function lstEMPRESAIdEMPRESAObject_Create($strControlId = null) {
        $this->lstEMPRESAIdEMPRESAObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstEMPRESAIdEMPRESAObject->Name = QApplication::Translate('Empresa');
        $this->lstEMPRESAIdEMPRESAObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstEMPRESAIdEMPRESAObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objEMPRESAIdEMPRESAObjectArray = Empresa::LoadAll();
        if ($objEMPRESAIdEMPRESAObjectArray)
            foreach ($objEMPRESAIdEMPRESAObjectArray as $objEMPRESAIdEMPRESAObject) {
                $objListItem = new QListItem($objEMPRESAIdEMPRESAObject->__toString(), $objEMPRESAIdEMPRESAObject->IdEMPRESA);
                if (($this->objLicencia->EMPRESAIdEMPRESAObject) && ($this->objLicencia->EMPRESAIdEMPRESAObject->IdEMPRESA == $objEMPRESAIdEMPRESAObject->IdEMPRESA))
                    $objListItem->Selected = true;
                $this->lstEMPRESAIdEMPRESAObject->AddItem($objListItem);
            }
        return $this->lstEMPRESAIdEMPRESAObject;
    }

    public function lstPROVEEDORIdPROVEEDORObject_Create($strControlId = null) {
        $this->lstPROVEEDORIdPROVEEDORObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstPROVEEDORIdPROVEEDORObject->Name = QApplication::Translate('Proveedor');
        $this->lstPROVEEDORIdPROVEEDORObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstPROVEEDORIdPROVEEDORObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objPROVEEDORIdPROVEEDORObjectArray = Proveedor::LoadAll();
        if ($objPROVEEDORIdPROVEEDORObjectArray)
            foreach ($objPROVEEDORIdPROVEEDORObjectArray as $objPROVEEDORIdPROVEEDORObject) {
                $objListItem = new QListItem($objPROVEEDORIdPROVEEDORObject->__toString(), $objPROVEEDORIdPROVEEDORObject->IdPROVEEDOR);
                if (($this->objLicencia->PROVEEDORIdPROVEEDORObject) && ($this->objLicencia->PROVEEDORIdPROVEEDORObject->IdPROVEEDOR == $objPROVEEDORIdPROVEEDORObject->IdPROVEEDOR))
                    $objListItem->Selected = true;
                $this->lstPROVEEDORIdPROVEEDORObject->AddItem($objListItem);
            }
        return $this->lstPROVEEDORIdPROVEEDORObject;
    }

    public function calFechaInicio_Create($strControlId = null) {

        $this->calFechaInicio = new QDateTimeTextBox($this->objParentObject, $strControlId);   //Cambias el tipo de QDateTimePicker a QDateTimeTextBox
        $this->calFechaInicio->Name = QApplication::Translate('Fecha Inicio');      //Nombre del campo
        if ($this->objLicencia->FechaInicio)
            $this->calFechaInicio->Text = $this->objLicencia->FechaInicio->__toString();
        $this->calFechaInicio->Required = true;
        return $this->calFechaInicio;
    }

    public function calFechaFin_Create($strControlId = null) {
        $this->calFechaFin = new QDateTimeTextBox($this->objParentObject, $strControlId);
        $this->calFechaFin->Name = QApplication::Translate('Fecha Fin');
        //TODO QUE HACE ESTE IF?
        if ($this->objLicencia->FechaFin)
            $this->calFechaFin->Text = $this->objLicencia->FechaFin->__toString();

        return $this->calFechaFin;
    }

    public function txtNumeroProforma_Create($strControlId = null) {
        $this->txtNumeroProforma = new QTextBox($this->objParentObject, $strControlId);
        $this->txtNumeroProforma->Name = QApplication::Translate('Número de Proforma');
        $this->txtNumeroProforma->Text = $this->objLicencia->NumeroProforma;
        $this->txtNumeroProforma->MaxLength = Licencia::NumeroProformaMaxLength;
        return $this->txtNumeroProforma;
    }

    public function txtNumeroCNP_Create($strControlId = null) {
        $this->txtNumeroCNP = new QTextBox($this->objParentObject, $strControlId);
        $this->txtNumeroCNP->Name = QApplication::Translate('Número de C.N.P');
        $this->txtNumeroCNP->Text = $this->objLicencia->NumeroCNP;
        $this->txtNumeroCNP->MaxLength = Licencia::NumeroCNPMaxLength;
        $this->txtNumeroCNP->Required = true;
        //$this->txtNumeroCNP->FontBold = true;
        //$this->txtNumeroCNP->FontItalic = true;
        return $this->txtNumeroCNP;
    }

    public function calVencimientoCNP_Create($strControlId = null) {
        $this->calVencimientoCNP = new QDateTimeTextBox($this->objParentObject, $strControlId);
        $this->calVencimientoCNP->Name = QApplication::Translate('Prorroga C.N.P');
        if ($this->objLicencia->VencimientoCNP)
            $this->calVencimientoCNP->Text = $this->objLicencia->VencimientoCNP->__toString();
        $this->calVencimientoCNP->Required = false;
        return $this->calVencimientoCNP;
    }

    public function txtStatus_Create($strControlId = null) {
        $this->txtStatus = new QListBox($this->objParentObject, $strControlId);
        $this->txtStatus->Name = QApplication::Translate('Estado del C.N.P.');
        $this->txtStatus->AddItem(QApplication::Translate('- Select One -'), null);  //Campo Null Seleccionar Uno
        $ListaEstatus = array(1 => 'Interna', 2 => 'Externa', 3 => 'Nacionalizada');                //Lista de Estatus
        if ($ListaEstatus)
            foreach ($ListaEstatus as $objMat) {
                $objListItem = new QListItem($objMat, $objMat);
                if ($this->objLicencia->Status == $objMat)     //Comparacion con el campo de la BD
                    $objListItem->Selected = true;
                $this->txtStatus->AddItem($objListItem);
            }
        $this->txtStatus->Required = true;
        return $this->txtStatus;
    }

    public function txtFormaPago_Create($strControlId = null) {
        $this->txtFormaPago = new QListBox($this->objParentObject, $strControlId);
        $this->txtFormaPago->Name = QApplication::Translate('Forma de Pago');
        $this->txtFormaPago->AddItem(QApplication::Translate('- Select One -'), null);  //Campo Null Seleccionar Uno
        $ListaEstatus = array(1 => 'ALADI', 2 => 'Carta de Crédito', 3 => 'Contado (Pago a la Vista)', 4 => 'Otra Forma de Pago');                //Lista de Estatus
        if ($ListaEstatus)
            foreach ($ListaEstatus as $objMat) {
                $objListItem = new QListItem($objMat, $objMat);
                if ($this->objLicencia->FormaPago == $objMat)     //Comparacion con el campo de la BD
                    $objListItem->Selected = true;
                $this->txtFormaPago->AddItem($objListItem);
            }
        return $this->txtFormaPago;
    }

    public function txtTipo_Create($strControlId = null) {
        $this->txtTipo = new QTextBox($this->objParentObject, $strControlId);
        $this->txtTipo->Name = QApplication::Translate('Registro Sanitario');
        $this->txtTipo->Text = $this->objLicencia->Tipo;
        $this->txtTipo->MaxLength = Licencia::TipoMaxLength;
        return $this->txtTipo;
    }

    public function txtFlete_Create($strControlId = null) {
        $this->txtFlete = new QFloatTextBox($this->objParentObject, $strControlId);
        $this->txtFlete->Name = QApplication::Translate('Flete (US $)');
        $this->txtFlete->Text = $this->objLicencia->Flete;
        return $this->txtFlete;
    }

    public function txtSeguro_Create($strControlId = null) {
        $this->txtSeguro = new QTextBox($this->objParentObject, $strControlId);
        $this->txtSeguro->Name = QApplication::Translate('Seguro de Mercancia (US $)');
        $this->txtSeguro->Text = $this->objLicencia->Seguro;
        $this->txtSeguro->MaxLength = Licencia::SeguroMaxLength;
        return $this->txtSeguro;
    }

    public function lstPROCESOIdPROCESOObject_Create($strControlId = null) {
        $this->lstPROCESOIdPROCESOObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstPROCESOIdPROCESOObject->Name = QApplication::Translate('Proceso a Utilizar');
        $this->lstPROCESOIdPROCESOObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstPROCESOIdPROCESOObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objPROCESOIdPROCESOObjectArray = Proceso::LoadAll();
        if ($objPROCESOIdPROCESOObjectArray) foreach ($objPROCESOIdPROCESOObjectArray as $objPROCESOIdPROCESOObject) {
                $objListItem = new QListItem($objPROCESOIdPROCESOObject->__toString(), $objPROCESOIdPROCESOObject->IdPROCESO);
                if (($this->objLicencia->PROCESOIdPROCESOObject) && ($this->objLicencia->PROCESOIdPROCESOObject->IdPROCESO == $objPROCESOIdPROCESOObject->IdPROCESO))
                    $objListItem->Selected = true;
                $this->lstPROCESOIdPROCESOObject->AddItem($objListItem);
            }
        return $this->lstPROCESOIdPROCESOObject;
    }

}
?>