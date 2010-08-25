<?php

require(__META_CONTROLS_GEN__ . '/EmpresaMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * Empresa class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single Empresa object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a EmpresaMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 * 
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class EmpresaMetaControl extends EmpresaMetaControlGen {

    // Initialize fields with default values from database definition
    /*
      public function __construct($objParentObject, Empresa $objEmpresa) {
      parent::__construct($objParentObject,$objEmpresa);
      if ( !$this->blnEditMode ){
      $this->objEmpresa->Initialize();
      }
      }
     */
    public function txtNombre_Create($strControlId = null) {
        $this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
        $this->txtNombre->Name = QApplication::Translate('Nombre*');
        $this->txtNombre->Text = $this->objEmpresa->Nombre;
        $this->txtNombre->Required = true;
        $this->txtNombre->MaxLength = Empresa::NombreMaxLength;
        return $this->txtNombre;
    }

    public function txtRif_Create($strControlId = null) {
        $this->txtRif = new QTextBox($this->objParentObject, $strControlId);
        $this->txtRif->Name = QApplication::Translate('R.I.F.*');
        $this->txtRif->Text = $this->objEmpresa->Rif;
        $this->txtRif->Required = true;
        $this->txtRif->MaxLength = Empresa::RifMaxLength;
        return $this->txtRif;
    }

    public function txtDireccion_Create($strControlId = null) {
        $this->txtDireccion = new QTextBox($this->objParentObject, $strControlId);
        $this->txtDireccion->Name = QApplication::Translate('Dirección*');
        $this->txtDireccion->Text = $this->objEmpresa->Direccion;
        $this->txtDireccion->Required = true;
        $this->txtDireccion->TextMode = QTextMode::MultiLine;
        return $this->txtDireccion;
    }

    public function txtTelefono_Create($strControlId = null) {
        $this->txtTelefono = new QTextBox($this->objParentObject, 58, $strControlId);
        $this->txtTelefono->Name = QApplication::Translate('Teléfono');
        $this->txtTelefono->Text = $this->objEmpresa->Telefono;
        $this->txtTelefono->MaxLength = Empresa::TelefonoMaxLength;
        return $this->txtTelefono;
    }

    public function txtLogin_Create($strControlId = null) {
        $this->txtLogin = new QTextBox($this->objParentObject, $strControlId);
        $this->txtLogin->Name = QApplication::Translate('Nombre de Usuario');
        $this->txtLogin->Text = $this->objEmpresa->Login;
        $this->txtLogin->MaxLength = Empresa::LoginMaxLength;
        return $this->txtLogin;
    }

    public function txtPassword_Create($strControlId = null) {
        $this->txtPassword = new QTextBox($this->objParentObject, $strControlId);
        $this->txtPassword->Name = QApplication::Translate('Contraseña');
        $this->txtPassword->Text = $this->objEmpresa->Password;
        $this->txtPassword->MaxLength = Empresa::PasswordMaxLength;
        $this->txtPassword->TextMode = QTextMode::Password;
        return $this->txtPassword;
    }
}
?>