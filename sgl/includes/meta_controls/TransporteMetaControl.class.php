<?php

require(__META_CONTROLS_GEN__ . '/TransporteMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * Transporte class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single Transporte object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a TransporteMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 * 
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class TransporteMetaControl extends TransporteMetaControlGen {

    // Initialize fields with default values from database definition
    /*
      public function __construct($objParentObject, Transporte $objTransporte) {
      parent::__construct($objParentObject,$objTransporte);
      if ( !$this->blnEditMode ){
      $this->objTransporte->Initialize();
      }
      }
     */
    public function txtDireccion_Create($strControlId = null) {
        $this->txtDireccion = new QTextBox($this->objParentObject, $strControlId);
        $this->txtDireccion->Name = QApplication::Translate('Dirección');
        $this->txtDireccion->Text = $this->objTransporte->Direccion;
        $this->txtDireccion->MaxLength = Transporte::DireccionMaxLength;
        return $this->txtDireccion;
    }

    public function txtTelefono_Create($strControlId = null) {
        $this->txtTelefono = new QPhoneTextBox($this->objParentObject, $strControlId);
        $this->txtTelefono->Name = QApplication::Translate('Teléfono');
        $this->txtTelefono->Text = $this->objTransporte->Telefono;
        $this->txtTelefono->MaxLength = Transporte::TelefonoMaxLength;
        return $this->txtTelefono;
    }

    public function lstPAISIdPAISObject_Create($strControlId = null) {
        $this->lstPAISIdPAISObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstPAISIdPAISObject->Name = QApplication::Translate('Pais');
        $this->lstPAISIdPAISObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstPAISIdPAISObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objPAISIdPAISObjectArray = Pais::LoadAll();
        if ($objPAISIdPAISObjectArray)
            foreach ($objPAISIdPAISObjectArray as $objPAISIdPAISObject) {
                $objListItem = new QListItem($objPAISIdPAISObject->__toString(), $objPAISIdPAISObject->IdPAIS);
                if (($this->objTransporte->PAISIdPAISObject) && ($this->objTransporte->PAISIdPAISObject->IdPAIS == $objPAISIdPAISObject->IdPAIS))
                    $objListItem->Selected = true;
                $this->lstPAISIdPAISObject->AddItem($objListItem);
            }
        return $this->lstPAISIdPAISObject;
    }

}

?>