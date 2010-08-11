<?php
require(__META_CONTROLS_GEN__ . '/ListaDeDocumentoMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * ListaDeDocumento class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single ListaDeDocumento object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a ListaDeDocumentoMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class ListaDeDocumentoMetaControl extends ListaDeDocumentoMetaControlGen {
    // Initialize fields with default values from database definition
    /*
		public function __construct($objParentObject, ListaDeDocumento $objListaDeDocumento) {
			parent::__construct($objParentObject,$objListaDeDocumento);
			if ( !$this->blnEditMode ){
				$this->objListaDeDocumento->Initialize();
			}
		}
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
                if (($this->objListaDeDocumento->DOCUMENTOIdDOCUMENTOObject) && ($this->objListaDeDocumento->DOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO == $objDOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO))
                    $objListItem->Selected = true;
                $this->lstDOCUMENTOIdDOCUMENTOObject->AddItem($objListItem);
            }
        return $this->lstDOCUMENTOIdDOCUMENTOObject;
    }

    /**
     * Create and setup QLabel lblDOCUMENTOIdDOCUMENTO
     * @param string $strControlId optional ControlId to use
     * @return QLabel
     */


    /**
     * Create and setup QListBox lstPROCESOIdPROCESOObject
     * @param string $strControlId optional ControlId to use
     * @return QListBox
     */
    public function lstPROCESOIdPROCESOObject_Create($strControlId = null) {
        $this->lstPROCESOIdPROCESOObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstPROCESOIdPROCESOObject->Name = QApplication::Translate('Proceso');
        $this->lstPROCESOIdPROCESOObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objPROCESOIdPROCESOObjectArray = Proceso::LoadAll();
        if ($objPROCESOIdPROCESOObjectArray) foreach ($objPROCESOIdPROCESOObjectArray as $objPROCESOIdPROCESOObject) {
                $objListItem = new QListItem($objPROCESOIdPROCESOObject->__toString(), $objPROCESOIdPROCESOObject->IdPROCESO);
                if (($this->objListaDeDocumento->PROCESOIdPROCESOObject) && ($this->objListaDeDocumento->PROCESOIdPROCESOObject->IdPROCESO == $objPROCESOIdPROCESOObject->IdPROCESO))
                    $objListItem->Selected = true;
                $this->lstPROCESOIdPROCESOObject->AddItem($objListItem);
            }
        return $this->lstPROCESOIdPROCESOObject;
    }



    /**
     * Create and setup QListBox lstFASEIdFASEObject
     * @param string $strControlId optional ControlId to use
     * @return QListBox
     */
    public function lstFASEIdFASEObject_Create($strControlId = null) {
        $this->lstFASEIdFASEObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstFASEIdFASEObject->Name = QApplication::Translate('Fase');
        $this->lstFASEIdFASEObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objFASEIdFASEObjectArray = Fase::LoadAll();
        if ($objFASEIdFASEObjectArray) foreach ($objFASEIdFASEObjectArray as $objFASEIdFASEObject) {
                $objListItem = new QListItem($objFASEIdFASEObject->__toString(), $objFASEIdFASEObject->IdFASE);
                if (($this->objListaDeDocumento->FASEIdFASEObject) && ($this->objListaDeDocumento->FASEIdFASEObject->IdFASE == $objFASEIdFASEObject->IdFASE))
                    $objListItem->Selected = true;
                $this->lstFASEIdFASEObject->AddItem($objListItem);
            }
        return $this->lstFASEIdFASEObject;
    }
}
?>