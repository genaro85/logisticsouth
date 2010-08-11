<?php
require(__META_CONTROLS_GEN__ . '/EtapaMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * Etapa class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single Etapa object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a EtapaMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class EtapaMetaControl extends EtapaMetaControlGen {
    // Initialize fields with default values from database definition
    /*
		public function __construct($objParentObject, Etapa $objEtapa) {
			parent::__construct($objParentObject,$objEtapa);
			if ( !$this->blnEditMode ){
				$this->objEtapa->Initialize();
			}
		}
    */

    public function lstFASEIdFASEObject_Create($strControlId = null) {
        $this->lstFASEIdFASEObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstFASEIdFASEObject->Name = QApplication::Translate('Fase');
        $this->lstFASEIdFASEObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstFASEIdFASEObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objFASEIdFASEObjectArray = Fase::LoadAll();
        if ($objFASEIdFASEObjectArray) foreach ($objFASEIdFASEObjectArray as $objFASEIdFASEObject) {
                $objListItem = new QListItem($objFASEIdFASEObject->__toString(), $objFASEIdFASEObject->IdFASE);
                if (($this->objEtapa->FASEIdFASEObject) && ($this->objEtapa->FASEIdFASEObject->IdFASE == $objFASEIdFASEObject->IdFASE))
                    $objListItem->Selected = true;
                $this->lstFASEIdFASEObject->AddItem($objListItem);
            }
        return $this->lstFASEIdFASEObject;
    }

    public function lstPROCESOIdPROCESOObject_Create($strControlId = null) {
        $this->lstPROCESOIdPROCESOObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstPROCESOIdPROCESOObject->Name = QApplication::Translate('Proceso');
        $this->lstPROCESOIdPROCESOObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstPROCESOIdPROCESOObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objPROCESOIdPROCESOObjectArray = Proceso::LoadAll();
        if ($objPROCESOIdPROCESOObjectArray) foreach ($objPROCESOIdPROCESOObjectArray as $objPROCESOIdPROCESOObject) {
                $objListItem = new QListItem($objPROCESOIdPROCESOObject->__toString(), $objPROCESOIdPROCESOObject->IdPROCESO);
                if (($this->objEtapa->PROCESOIdPROCESOObject) && ($this->objEtapa->PROCESOIdPROCESOObject->IdPROCESO == $objPROCESOIdPROCESOObject->IdPROCESO))
                    $objListItem->Selected = true;
                $this->lstPROCESOIdPROCESOObject->AddItem($objListItem);
            }
        return $this->lstPROCESOIdPROCESOObject;
    }

}
?>