<?php
require(__META_CONTROLS_GEN__ . '/ImportacionMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * Importacion class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single Importacion object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a ImportacionMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class ImportacionMetaControl extends ImportacionMetaControlGen {
    // Initialize fields with default values from database definition
    /*
		public function __construct($objParentObject, Importacion $objImportacion) {
			parent::__construct($objParentObject,$objImportacion);
			if ( !$this->blnEditMode ){
				$this->objImportacion->Initialize();
			}
		}
    */
    public function lstTRANSPORTEIdTRANSPORTEObject_Create($strControlId = null) {
        $this->lstTRANSPORTEIdTRANSPORTEObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstTRANSPORTEIdTRANSPORTEObject->Name = QApplication::Translate('Transporte');

        $this->lstTRANSPORTEIdTRANSPORTEObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstTRANSPORTEIdTRANSPORTEObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objTRANSPORTEIdTRANSPORTEObjectArray = Transporte::LoadAll();
        if ($objTRANSPORTEIdTRANSPORTEObjectArray) foreach ($objTRANSPORTEIdTRANSPORTEObjectArray as $objTRANSPORTEIdTRANSPORTEObject) {
                $objListItem = new QListItem($objTRANSPORTEIdTRANSPORTEObject->__toString(), $objTRANSPORTEIdTRANSPORTEObject->IdTRANSPORTE);
                if (($this->objImportacion->TRANSPORTEIdTRANSPORTEObject) && ($this->objImportacion->TRANSPORTEIdTRANSPORTEObject->IdTRANSPORTE == $objTRANSPORTEIdTRANSPORTEObject->IdTRANSPORTE))
                    $objListItem->Selected = true;
                $this->lstTRANSPORTEIdTRANSPORTEObject->AddItem($objListItem);
            }
        return $this->lstTRANSPORTEIdTRANSPORTEObject;
    }
    public function lstLICENCIAIdLICENCIAObject_Create($strControlId = null) {
        $this->lstLICENCIAIdLICENCIAObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstLICENCIAIdLICENCIAObject->Name = QApplication::Translate('Licencia');
        $this->lstLICENCIAIdLICENCIAObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstLICENCIAIdLICENCIAObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objLICENCIAIdLICENCIAObjectArray = Licencia::LoadAll();
        if ($objLICENCIAIdLICENCIAObjectArray) foreach ($objLICENCIAIdLICENCIAObjectArray as $objLICENCIAIdLICENCIAObject) {
                $objListItem = new QListItem($objLICENCIAIdLICENCIAObject->__toString(), $objLICENCIAIdLICENCIAObject->IdLICENCIA);
                if (($this->objImportacion->LICENCIAIdLICENCIAObject) && ($this->objImportacion->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
                    $objListItem->Selected = true;
                $this->lstLICENCIAIdLICENCIAObject->AddItem($objListItem);
            }
        return $this->lstLICENCIAIdLICENCIAObject;
    }
    public function calFechaDeSalida_Create($strControlId = null) {
        $this->calFechaDeSalida = new QDateTimeTextBox($this->objParentObject, $strControlId);
        $this->calFechaDeSalida->Name = QApplication::Translate('Fecha De Salida');
        if ($this->objImportacion->FechaDeSalida)
            $this->calFechaDeSalida->Text = $this->objImportacion->FechaDeSalida->__toString();
        return $this->calFechaDeSalida;
    }
    public function calFechaLlegada_Create($strControlId = null) {
        $this->calFechaLlegada = new QDateTimeTextBox($this->objParentObject, $strControlId);
        $this->calFechaLlegada->Name = QApplication::Translate('Fecha De Llegada');
        if ($this->objImportacion->FechaLlegada)
            $this->calFechaLlegada->Text = $this->objImportacion->FechaLlegada->__toString();
        return $this->calFechaLlegada;
    }
    public function txtTipo_Create($strControlId = null) {
        $this->txtTipo = new QTextBox($this->objParentObject, $strControlId);
        $this->txtTipo->Name = QApplication::Translate('Tipo');
        $this->txtTipo->Text = $this->objImportacion->Tipo;
        $this->txtTipo->Required = true;
        $this->txtTipo->MaxLength = Importacion::TipoMaxLength;
        return $this->txtTipo;
    }
    public function lstPAISOrigenObject_Create($strControlId = null) {
        $this->lstPAISOrigenObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstPAISOrigenObject->Name = QApplication::Translate('Pais de Origen');
        $this->lstPAISOrigenObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstPAISOrigenObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objPAISOrigenObjectArray = Pais::LoadAll();
        if ($objPAISOrigenObjectArray) foreach ($objPAISOrigenObjectArray as $objPAISOrigenObject) {
                $objListItem = new QListItem($objPAISOrigenObject->__toString(), $objPAISOrigenObject->IdPAIS);
                if (($this->objImportacion->PAISOrigenObject) && ($this->objImportacion->PAISOrigenObject->IdPAIS == $objPAISOrigenObject->IdPAIS))
                    $objListItem->Selected = true;
                $this->lstPAISOrigenObject->AddItem($objListItem);
            }
        return $this->lstPAISOrigenObject;
    }
    public function lstPAISDestinoObject_Create($strControlId = null) {
        $this->lstPAISDestinoObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstPAISDestinoObject->Name = QApplication::Translate('Pais de Destino');
        $this->lstPAISDestinoObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstPAISDestinoObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objPAISDestinoObjectArray = Pais::LoadAll();
        if ($objPAISDestinoObjectArray) foreach ($objPAISDestinoObjectArray as $objPAISDestinoObject) {
                $objListItem = new QListItem($objPAISDestinoObject->__toString(), $objPAISDestinoObject->IdPAIS);
                if (($this->objImportacion->PAISDestinoObject) && ($this->objImportacion->PAISDestinoObject->IdPAIS == $objPAISDestinoObject->IdPAIS))
                    $objListItem->Selected = true;
                $this->lstPAISDestinoObject->AddItem($objListItem);
            }
        return $this->lstPAISDestinoObject;
    }


}
?>