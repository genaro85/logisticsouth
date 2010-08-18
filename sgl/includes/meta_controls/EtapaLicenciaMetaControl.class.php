<?php
require(__META_CONTROLS_GEN__ . '/EtapaLicenciaMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * EtapaLicencia class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single EtapaLicencia object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a EtapaLicenciaMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class EtapaLicenciaMetaControl extends EtapaLicenciaMetaControlGen {
    // Initialize fields with default values from database definition
    /*
		public function __construct($objParentObject, EtapaLicencia $objEtapaLicencia) {
			parent::__construct($objParentObject,$objEtapaLicencia);
			if ( !$this->blnEditMode ){
				$this->objEtapaLicencia->Initialize();
			}
		}
 *
 *
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
                if (($this->objEtapaLicencia->LICENCIAIdLICENCIAObject) && ($this->objEtapaLicencia->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
                    $objListItem->Selected = true;
                $this->lstLICENCIAIdLICENCIAObject->AddItem($objListItem);
            }
        return $this->lstLICENCIAIdLICENCIAObject;
    }

    public function lstETAPAIdETAPAObject_Create($strControlId = null) {
        $this->lstETAPAIdETAPAObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstETAPAIdETAPAObject->Name = QApplication::Translate('Fase');
        $this->lstETAPAIdETAPAObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstETAPAIdETAPAObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objETAPAIdETAPAObjectArray = Etapa::LoadAll();
        if ($objETAPAIdETAPAObjectArray) foreach ($objETAPAIdETAPAObjectArray as $objETAPAIdETAPAObject) {
                $objListItem = new QListItem($objETAPAIdETAPAObject->__toString(), $objETAPAIdETAPAObject->IdETAPA);
                if (($this->objEtapaLicencia->ETAPAIdETAPAObject) && ($this->objEtapaLicencia->ETAPAIdETAPAObject->IdETAPA == $objETAPAIdETAPAObject->IdETAPA))
                    $objListItem->Selected = true;
                $this->lstETAPAIdETAPAObject->AddItem($objListItem);
            }
        return $this->lstETAPAIdETAPAObject;
    }

    public function calETAPAFechaInicio_Create($strControlId = null) {
        $this->calETAPAFechaInicio = new QDateTimeTextBox($this->objParentObject, $strControlId);
        $this->calETAPAFechaInicio->Name = QApplication::Translate('Fecha Inicio');
        if ($this->objEtapaLicencia->ETAPAFechaInicio)
            $this->calETAPAFechaInicio->Text = $this->objEtapaLicencia->calETAPAFechaInicio->__toString();
        return $this->calETAPAFechaInicio;
    }

    public function calETAPAFechaFin_Create($strControlId = null) {
        $this->calETAPAFechaFin = new QDateTimeTextBox($this->objParentObject, $strControlId);
        $this->calETAPAFechaFin->Name = QApplication::Translate('Fecha Fin');
        if ($this->objEtapaLicencia->ETAPAFechaFin)
            $this->calETAPAFechaFin->Text = $this->objEtapaLicencia->calETAPAFechaFin->__toString();
        return $this->calETAPAFechaFin;
    }

}
?>
