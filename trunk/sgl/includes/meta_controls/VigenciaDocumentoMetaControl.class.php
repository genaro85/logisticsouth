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

    /**
     * Create and setup QListBox lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject
     * @param string $strControlId optional ControlId to use
     * @return QListBox
     */
    public function lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject_Create($strControlId = null) {
        $this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->Name = QApplication::Translate('Documentos de la Fase');
        $this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObjectArray = ListaDeDocumento::LoadAll();
        if ($objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObjectArray) foreach ($objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObjectArray as $objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject) {
                $objListItem = new QListItem($objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->__toString(), $objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTO);
                if (($this->objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject) && ($this->objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTO == $objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTO))
                    $objListItem->Selected = true;
                $this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->AddItem($objListItem);
            }
        return $this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject;
    }
    /**
     * Create and setup QListBox lstLICENCIAIdLICENCIAObject
     * @param string $strControlId optional ControlId to use
     * @return QListBox
     */
    public function lstLICENCIAIdLICENCIAObject_Create($strControlId = null) {
        $this->lstLICENCIAIdLICENCIAObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstLICENCIAIdLICENCIAObject->Name = QApplication::Translate('Licencia');
        $this->lstLICENCIAIdLICENCIAObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstLICENCIAIdLICENCIAObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objLICENCIAIdLICENCIAObjectArray = Licencia::LoadAll();
        if ($objLICENCIAIdLICENCIAObjectArray) foreach ($objLICENCIAIdLICENCIAObjectArray as $objLICENCIAIdLICENCIAObject) {
                $objListItem = new QListItem($objLICENCIAIdLICENCIAObject->__toString(), $objLICENCIAIdLICENCIAObject->IdLICENCIA);
                if (($this->objVigenciaDocumento->LICENCIAIdLICENCIAObject) && ($this->objVigenciaDocumento->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
                    $objListItem->Selected = true;
                $this->lstLICENCIAIdLICENCIAObject->AddItem($objListItem);
            }
        return $this->lstLICENCIAIdLICENCIAObject;
    }


    /**
     * Create and setup QDateTimePicker calFechaOtorgado
     * @param string $strControlId optional ControlId to use
     * @return QDateTimePicker
     */
    public function calFechaOtorgado_Create($strControlId = null) {
        $this->calFechaOtorgado = new QDateTimeTextBox($this->objParentObject, $strControlId);
        $this->calFechaOtorgado->Name = QApplication::Translate('Fecha Otorgado');
        if ($this->objVigenciaDocumento->FechaOtorgado)
            $this->calFechaOtorgado->Text = $this->objVigenciaDocumento->FechaOtorgado->__toString();
        return $this->calFechaOtorgado;
    }

    /**
     * Create and setup QDateTimePicker calFechaVencimieto
     * @param string $strControlId optional ControlId to use
     * @return QDateTimePicker
     */
    public function calFechaVencimieto_Create($strControlId = null) {
        $this->calFechaVencimieto = new QDateTimeTextBox($this->objParentObject, $strControlId);
        $this->calFechaVencimieto->Name = QApplication::Translate('Fecha Vencimieto');
        if ($this->objVigenciaDocumento->FechaVencimieto)
            $this->calFechaVencimieto->Text = $this->objVigenciaDocumento->FechaVencimiento->__toString();
        return $this->calFechaVencimieto;
    }

    /*
      public function __construct($objParentObject, VigenciaDocumento $objVigenciaDocumento) {
      parent::__construct($objParentObject,$objVigenciaDocumento);
      if ( !$this->blnEditMode ){
      $this->objVigenciaDocumento->Initialize();
      }
      }
    */
}
?>