<?php
require(__META_CONTROLS_GEN__ . '/PaisMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * Pais class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single Pais object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a PaisMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class PaisMetaControl extends PaisMetaControlGen {


    public function lblIdPAIS_Create($strControlId = null) {
        $this->lblIdPAIS = new QLabel($this->objParentObject, $strControlId);
        $this->lblIdPAIS->Name = QApplication::Translate('Id P A I S');
        if ($this->blnEditMode)
            $this->lblIdPAIS->Text = $this->objPais->IdPAIS;
        else
            $this->lblIdPAIS->Text = 'N/A';
        return $this->lblIdPAIS;
    }

    /**
     * Create and setup QTextBox txtNombre
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtNombre_Create($strControlId = null) {
        $this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
        $this->txtNombre->Name = QApplication::Translate('Nombre:');
        $this->txtNombre->Text = $this->objPais->Nombre;
        $this->txtNombre->MaxLength = Pais::NombreMaxLength;
        return $this->txtNombre;
    }
    // Initialize fields with default values from database definition
    /*
		public function __construct($objParentObject, Pais $objPais) {
			parent::__construct($objParentObject,$objPais);
			if ( !$this->blnEditMode ){
				$this->objPais->Initialize();
			}
		}
    */

}
?>