<?php

require(__META_CONTROLS_GEN__ . '/AdministradorMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * Administrador class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single Administrador object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a AdministradorMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 * 
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class AdministradorMetaControl extends AdministradorMetaControlGen {
    // Initialize fields with default values from database definition
    /*
      public function __construct($objParentObject, Administrador $objAdministrador) {
      parent::__construct($objParentObject,$objAdministrador);
      if ( !$this->blnEditMode ){
      $this->objAdministrador->Initialize();
      }
      }
     */

    /**
     * Create and setup QTextBox txtPassword
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtPassword_Create($strControlId = null) {
        $this->txtPassword = new QTextBox($this->objParentObject, $strControlId);
        $this->txtPassword->Name = QApplication::Translate('Password');
        $this->txtPassword->Text = $this->objAdministrador->Password;
        $this->txtPassword->Required = true;
        $this->txtPassword->MaxLength = Administrador::PasswordMaxLength;
        $this->txtPassword->TextMode = QTextMode::Password;
        return $this->txtPassword;
    }

    public function txtEmail_Create($strControlId = null) {
        $this->txtEmail = new QEmailTextBox($this->objParentObject, $strControlId);
        $this->txtEmail->Name = QApplication::Translate('Email');
        $this->txtEmail->Text = $this->objAdministrador->Email;
        $this->txtEmail->MaxLength = Administrador::EmailMaxLength;
        return $this->txtEmail;
    }

}

?>