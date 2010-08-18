<?php

require(__META_CONTROLS_GEN__ . '/ResponsableMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * Responsable class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single Responsable object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a ResponsableMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class ResponsableMetaControl extends ResponsableMetaControlGen {
    // Initialize fields with default values from database definition


    /**
     * Create and setup QListBox lstEMPLEADOIdEMPLEADOObject
     * @param string $strControlId optional ControlId to use
     * @return QListBox
     */
    public function lstEMPLEADOIdEMPLEADOObject_Create($strControlId = null) {
        $this->lstEMPLEADOIdEMPLEADOObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstEMPLEADOIdEMPLEADOObject->Name = QApplication::Translate('Empleado');
        $this->lstEMPLEADOIdEMPLEADOObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstEMPLEADOIdEMPLEADOObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objEMPLEADOIdEMPLEADOObjectArray = Empleado::LoadAll();
        if ($objEMPLEADOIdEMPLEADOObjectArray) foreach ($objEMPLEADOIdEMPLEADOObjectArray as $objEMPLEADOIdEMPLEADOObject) {
                $objListItem = new QListItem($objEMPLEADOIdEMPLEADOObject->__toString(), $objEMPLEADOIdEMPLEADOObject->IdEMPLEADO);
                if (($this->objResponsable->EMPLEADOIdEMPLEADOObject) && ($this->objResponsable->EMPLEADOIdEMPLEADOObject->IdEMPLEADO == $objEMPLEADOIdEMPLEADOObject->IdEMPLEADO))
                    $objListItem->Selected = true;
                $this->lstEMPLEADOIdEMPLEADOObject->AddItem($objListItem);
            }
        return $this->lstEMPLEADOIdEMPLEADOObject;
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
                if (($this->objResponsable->LICENCIAIdLICENCIAObject) && ($this->objResponsable->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
                    $objListItem->Selected = true;
                $this->lstLICENCIAIdLICENCIAObject->AddItem($objListItem);
            }
        return $this->lstLICENCIAIdLICENCIAObject;
    }


    /**
     * Create and setup QDateTimePicker calFechaInicio
     * @param string $strControlId optional ControlId to use
     * @return QDateTimePicker
     */
    public function calFechaInicio_Create($strControlId = null) {
        $this->calFechaInicio = new QDateTimeTextBox($this->objParentObject, $strControlId);
        $this->calFechaInicio->Name = QApplication::Translate('Fecha Inicio');
        if ($this->objResponsable->FechaInicio)
            $this->calFechaInicio->Text = $this->objResponsable->FechaInicio->__toString();
        $this->calFechaInicio->Required = true;
        return $this->calFechaInicio;
    }

    /**
     * Create and setup QDateTimePicker calFechaFin
     * @param string $strControlId optional ControlId to use
     * @return QDateTimePicker
     */
    public function calFechaFin_Create($strControlId = null) {
        $this->calFechaFin = new QDateTimeTextBox($this->objParentObject, $strControlId);
        $this->calFechaFin->Name = QApplication::Translate('Fecha Fin');
        if ($this->objResponsable->FechaFin)
            $this->calFechaFin->Text = $this->objResponsable->FechaFin->__toString();
        //$this->calFechaFin->Required = true;
        return $this->calFechaFin;
    }

    /*
      public function __construct($objParentObject, Responsable $objResponsable) {
      parent::__construct($objParentObject,$objResponsable);
      if ( !$this->blnEditMode ){
      $this->objResponsable->Initialize();
      }
      }
    */
}
?>