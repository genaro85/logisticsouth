<?php
require(__META_CONTROLS_GEN__ . '/DocumentosFaseMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * DocumentosFase class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single DocumentosFase object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a DocumentosFaseMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class DocumentosFaseMetaControl extends DocumentosFaseMetaControlGen {
    // Initialize fields with default values from database definition
    /*
		public function __construct($objParentObject, DocumentosFase $objDocumentosFase) {
			parent::__construct($objParentObject,$objDocumentosFase);
			if ( !$this->blnEditMode ){
				$this->objDocumentosFase->Initialize();
			}
		}
 *
 *
    */
    public function lstDOCUMENTOIdDOCUMENTOObject_Create($strControlId = null) {
        $this->lstDOCUMENTOIdDOCUMENTOObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstDOCUMENTOIdDOCUMENTOObject->Name = QApplication::Translate('Documento');
        $this->lstDOCUMENTOIdDOCUMENTOObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstDOCUMENTOIdDOCUMENTOObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objDOCUMENTOIdDOCUMENTOObjectArray = Documento::LoadAll();
        if ($objDOCUMENTOIdDOCUMENTOObjectArray) foreach ($objDOCUMENTOIdDOCUMENTOObjectArray as $objDOCUMENTOIdDOCUMENTOObject) {
                $objListItem = new QListItem($objDOCUMENTOIdDOCUMENTOObject->__toString(), $objDOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO);
                if (($this->objDocumentosFase->DOCUMENTOIdDOCUMENTOObject) && ($this->objDocumentosFase->DOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO == $objDOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO))
                    $objListItem->Selected = true;
                $this->lstDOCUMENTOIdDOCUMENTOObject->AddItem($objListItem);
            }
        return $this->lstDOCUMENTOIdDOCUMENTOObject;
    }

    public function lstFASEIdFASEObject_Create($strControlId = null) {
        $this->lstFASEIdFASEObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstFASEIdFASEObject->Name = QApplication::Translate('Fase');
        $this->lstFASEIdFASEObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objFASEIdFASEObjectArray = Fase::LoadAll();
        if ($objFASEIdFASEObjectArray) foreach ($objFASEIdFASEObjectArray as $objFASEIdFASEObject) {
                $objListItem = new QListItem($objFASEIdFASEObject->__toString(), $objFASEIdFASEObject->IdFASE);
                if (($this->objDocumentosFase->FASEIdFASEObject) && ($this->objDocumentosFase->FASEIdFASEObject->IdFASE == $objFASEIdFASEObject->IdFASE))
                    $objListItem->Selected = true;
                $this->lstFASEIdFASEObject->AddItem($objListItem);
            }
        return $this->lstFASEIdFASEObject;
    }

}
?>