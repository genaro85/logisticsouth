<?php

require(__META_CONTROLS_GEN__ . '/CodigoPagoMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * CodigoPago class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single CodigoPago object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a CodigoPagoMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 * 
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class CodigoPagoMetaControl extends CodigoPagoMetaControlGen {

    // Initialize fields with default values from database definition
    /*
      public function __construct($objParentObject, CodigoPago $objCodigoPago) {
      parent::__construct($objParentObject,$objCodigoPago);
      if ( !$this->blnEditMode ){
      $this->objCodigoPago->Initialize();
      }
      }
     */
    public function lstLICENCIAIdLICENCIAObject_Create($strControlId = null) {
        $this->lstLICENCIAIdLICENCIAObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstLICENCIAIdLICENCIAObject->Name = QApplication::Translate('Licencia De*');
        $this->lstLICENCIAIdLICENCIAObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstLICENCIAIdLICENCIAObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objLICENCIAIdLICENCIAObjectArray = Licencia::LoadAll();
        if ($objLICENCIAIdLICENCIAObjectArray)
            foreach ($objLICENCIAIdLICENCIAObjectArray as $objLICENCIAIdLICENCIAObject) {
                $objListItem = new QListItem($objLICENCIAIdLICENCIAObject->__toString(), $objLICENCIAIdLICENCIAObject->IdLICENCIA);
                if (($this->objCodigoPago->LICENCIAIdLICENCIAObject) && ($this->objCodigoPago->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
                    $objListItem->Selected = true;
                $this->lstLICENCIAIdLICENCIAObject->AddItem($objListItem);
            }
        return $this->lstLICENCIAIdLICENCIAObject;
    }

    public function lstTIPODEPAGOIdTIPODEPAGOObject_Create($strControlId = null) {
        $this->lstTIPODEPAGOIdTIPODEPAGOObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstTIPODEPAGOIdTIPODEPAGOObject->Name = QApplication::Translate('Modalidad de Pago*');
        $this->lstTIPODEPAGOIdTIPODEPAGOObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstTIPODEPAGOIdTIPODEPAGOObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objTIPODEPAGOIdTIPODEPAGOObjectArray = TipoDePago::LoadAll();
        if ($objTIPODEPAGOIdTIPODEPAGOObjectArray)
            foreach ($objTIPODEPAGOIdTIPODEPAGOObjectArray as $objTIPODEPAGOIdTIPODEPAGOObject) {
                $objListItem = new QListItem($objTIPODEPAGOIdTIPODEPAGOObject->__toString(), $objTIPODEPAGOIdTIPODEPAGOObject->IdTIPODEPAGO);
                if (($this->objCodigoPago->TIPODEPAGOIdTIPODEPAGOObject) && ($this->objCodigoPago->TIPODEPAGOIdTIPODEPAGOObject->IdTIPODEPAGO == $objTIPODEPAGOIdTIPODEPAGOObject->IdTIPODEPAGO))
                    $objListItem->Selected = true;
                $this->lstTIPODEPAGOIdTIPODEPAGOObject->AddItem($objListItem);
            }
        return $this->lstTIPODEPAGOIdTIPODEPAGOObject;
    }

    public function txtDivisa_Create($strControlId = null) {
        $this->txtDivisa = new QListBox($this->objParentObject, $strControlId);
        $this->txtDivisa->Name = QApplication::Translate('Divisa');
        $this->txtDivisa->AddItem(QApplication::Translate('- Select One -'), null);
        $ListaEstatus = array(1 => 'Bolívar', 2 => 'Dolar', 3 => 'Euro');
        if ($ListaEstatus)
            foreach ($ListaEstatus as $objMat) {
                $objListItem = new QListItem($objMat, $objMat);
                if ($this->objCodigoPago->Divisa == $objMat)
                    $objListItem->Selected = true;
                $this->txtDivisa->AddItem($objListItem);
            }
        return $this->txtDivisa;
    }

}

?>