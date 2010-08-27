<?php

require(__META_CONTROLS_GEN__ . '/VigenciaDocumentoMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * VigenciaDocumento class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single VigenciaDocumento object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a VigenciaDocumentoMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class VigenciaDocumentoMetaControl extends VigenciaDocumentoMetaControlGen {

    // Initialize fields with default values from database definition

    public function lstLICENCIAIdLICENCIAObject_Create($strControlId = null) {
        $this->lstLICENCIAIdLICENCIAObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstLICENCIAIdLICENCIAObject->Name = QApplication::Translate('Licencia');
        $this->lstLICENCIAIdLICENCIAObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstLICENCIAIdLICENCIAObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objLICENCIAIdLICENCIAObjectArray = Licencia::LoadAll();
        if ($objLICENCIAIdLICENCIAObjectArray)
            foreach ($objLICENCIAIdLICENCIAObjectArray as $objLICENCIAIdLICENCIAObject) {
                $objListItem = new QListItem($objLICENCIAIdLICENCIAObject->__toString(), $objLICENCIAIdLICENCIAObject->IdLICENCIA);
                if (($this->objVigenciaDocumento->LICENCIAIdLICENCIAObject) && ($this->objVigenciaDocumento->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
                    $objListItem->Selected = true;
                $this->lstLICENCIAIdLICENCIAObject->AddItem($objListItem);
            }
        return $this->lstLICENCIAIdLICENCIAObject;
    }

    public function lstDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject_Create($strControlId = null) {
        $this->lstDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject->Name = QApplication::Translate('Documento de fase');
        $this->lstDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObjectArray = DocumentosFase::LoadAll();
        if ($objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObjectArray)
            foreach ($objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObjectArray as $objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject) {
                $objListItem = new QListItem($objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject->__toString(), $objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTO);
                if (($this->objVigenciaDocumento->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject) && ($this->objVigenciaDocumento->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTO == $objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTO))
                    $objListItem->Selected = true;
                $this->lstDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject->AddItem($objListItem);
            }
        return $this->lstDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject;
    }

    public function calFechaOtorgado_Create($strControlId = null) {
        $this->calFechaOtorgado = new QDateTimeTextBox($this->objParentObject, $strControlId);
        $this->calFechaOtorgado->Name = QApplication::Translate('Fecha Otorgado');
        if ($this->objVigenciaDocumento->FechaOtorgado)
            $this->calFechaOtorgado->Text = $this->objVigenciaDocumento->FechaOtorgado->__toString();
        return $this->calFechaOtorgado;
    }

    public function calFechaVencimieto_Create($strControlId = null) {
        $this->calFechaVencimieto = new QDateTimeTextBox($this->objParentObject, $strControlId);
        $this->calFechaVencimieto->Name = QApplication::Translate('Fecha Vencimieto');
        if ($this->objVigenciaDocumento->FechaVencimieto)
            $this->calFechaVencimieto->Text = $this->objVigenciaDocumento->FechaVencimiento->__toString();
        return $this->calFechaVencimieto;
    }

    public function txtNumRef_Create($strControlId = null) {
        $this->txtNumRef = new QTextBox($this->objParentObject, $strControlId);
        $this->txtNumRef->Name = QApplication::Translate('Número de Referencia');
        $this->txtNumRef->Text = $this->objVigenciaDocumento->NumRef;
        $this->txtNumRef->MaxLength = VigenciaDocumento::NumRefMaxLength;
        return $this->txtNumRef;
    }

}

?>