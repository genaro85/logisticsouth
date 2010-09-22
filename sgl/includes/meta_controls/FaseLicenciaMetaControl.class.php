<?php
require(__META_CONTROLS_GEN__ . '/FaseLicenciaMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * FaseLicencia class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single FaseLicencia object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a FaseLicenciaMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class FaseLicenciaMetaControl extends FaseLicenciaMetaControlGen {
    // Initialize fields with default values from database definition
    /*
		public function __construct($objParentObject, FaseLicencia $objFaseLicencia) {
			parent::__construct($objParentObject,$objFaseLicencia);
			if ( !$this->blnEditMode ){
				$this->objFaseLicencia->Initialize();
			}
		}
    */
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
                if (($this->objFaseLicencia->LICENCIAIdLICENCIAObject) && ($this->objFaseLicencia->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
                    $objListItem->Selected = true;
                $this->lstLICENCIAIdLICENCIAObject->AddItem($objListItem);
            }
        return $this->lstLICENCIAIdLICENCIAObject;
    }


    /**
     * Create and setup QDateTimePicker calFASEFechaInicio
     * @param string $strControlId optional ControlId to use
     * @return QDateTimePicker
     */
    public function calFASEFechaInicio_Create($strControlId = null) {
        $this->calFASEFechaInicio = new QDateTimeTextBox($this->objParentObject, $strControlId);			//Cambias el tipo de QDateTimePicker a QDateTimeTextBox
        $this->calFASEFechaInicio->Name = QApplication::Translate('Fecha Inicio');						//Nombre del campo
        if ($this->objFaseLicencia->FASEFechaInicio)
            $this->calFASEFechaInicio->Text = $this->objFaseLicencia->FASEFechaInicio->__toString();
        //$this->calFASEFechaInicio->Required = true;
        return $this->calFASEFechaInicio;
    }

    /**
     * Create and setup QDateTimePicker calFASEFechaFin
     * @param string $strControlId optional ControlId to use
     * @return QDateTimePicker
     */
    public function calFASEFechaFin_Create($strControlId = null) {
        $this->calFASEFechaFin = new QDateTimeTextBox($this->objParentObject, $strControlId);			//Cambias el tipo de QDateTimePicker a QDateTimeTextBox
        $this->calFASEFechaFin->Name = QApplication::Translate('Fecha Fin');						//Nombre del campo
        if ($this->objFaseLicencia->FASEFechaFin)
            $this->calFASEFechaFin->Text = $this->objFaseLicencia->FASEFechaFin->__toString();
        //$this->calFASEFechaInicio->Required = true;
        return $this->calFASEFechaFin;
    }

    /**
     * Create and setup QListBox lstFASEIdFASEObject
     * @param string $strControlId optional ControlId to use
     * @return QListBox
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
                if (($this->objFaseLicencia->FASEIdFASEObject) && ($this->objFaseLicencia->FASEIdFASEObject->IdFASE == $objFASEIdFASEObject->IdFASE))
                    $objListItem->Selected = true;
                $this->lstFASEIdFASEObject->AddItem($objListItem);
            }
        return $this->lstFASEIdFASEObject;
    }

}
?>