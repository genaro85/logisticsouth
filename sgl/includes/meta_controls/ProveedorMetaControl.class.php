<?php

require(__META_CONTROLS_GEN__ . '/ProveedorMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * Proveedor class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single Proveedor object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a ProveedorMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class ProveedorMetaControl extends ProveedorMetaControlGen {

    // Initialize fields with default values from database definition
    /*
      public function __construct($objParentObject, Proveedor $objProveedor) {
      parent::__construct($objParentObject,$objProveedor);
      if ( !$this->blnEditMode ){
      $this->objProveedor->Initialize();
      }
      }
    */
    public function txtNombre_Create($strControlId = null) {
        $this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
        $this->txtNombre->Name = QApplication::Translate('Nombre');
        $this->txtNombre->Text = $this->objProveedor->Nombre;
        $this->txtNombre->Required = true;
        $this->txtNombre->MaxLength = Proveedor::NombreMaxLength;
        return $this->txtNombre;
    }

    public function txtDireccion_Create($strControlId = null) {
        $this->txtDireccion = new QTextBox($this->objParentObject, $strControlId);
        $this->txtDireccion->Name = QApplication::Translate('Dirección');
        $this->txtDireccion->Text = $this->objProveedor->Direccion;
        $this->txtDireccion->Required = true;
        $this->txtDireccion->TextMode = QTextMode::MultiLine;
        return $this->txtDireccion;
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
                if (($this->objProveedor->PAISIdPAISObject) && ($this->objProveedor->PAISIdPAISObject->IdPAIS == $objPAISIdPAISObject->IdPAIS))
                    $objListItem->Selected = true;
                $this->lstPAISIdPAISObject->AddItem($objListItem);
            }
        return $this->lstPAISIdPAISObject;
    }

    public function txtTelefono_Create($strControlId = null) {
        $this->txtTelefono = new QTextBox($this->objParentObject, $strControlId);
        $this->txtTelefono->Name = QApplication::Translate('Telefono');
        $this->txtTelefono->Text = $this->objProveedor->Telefono;
        $this->txtTelefono->MaxLength = Proveedor::TelefonoMaxLength;
        return $this->txtTelefono;
    }

    public function txtEmail_Create($strControlId = null) {
        $this->txtEmail = new QEmailTextBox($this->objParentObject, $strControlId);
        $this->txtEmail->Name = QApplication::Translate('Email');
        $this->txtEmail->Text = $this->objProveedor->Email;
        $this->txtEmail->MaxLength = Proveedor::EmailMaxLength;
        return $this->txtEmail;
    }
}

?>