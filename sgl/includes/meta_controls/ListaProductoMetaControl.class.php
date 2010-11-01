<?php

require(__META_CONTROLS_GEN__ . '/ListaProductoMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * ListaProducto class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single ListaProducto object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a ListaProductoMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 * 
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class ListaProductoMetaControl extends ListaProductoMetaControlGen {
    // Initialize fields with default values from database definition
    /*
      public function __construct($objParentObject, ListaProducto $objListaProducto) {
      parent::__construct($objParentObject,$objListaProducto);
      if ( !$this->blnEditMode ){
      $this->objListaProducto->Initialize();
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
        if ($objLICENCIAIdLICENCIAObjectArray)
            foreach ($objLICENCIAIdLICENCIAObjectArray as $objLICENCIAIdLICENCIAObject) {
                $objListItem = new QListItem($objLICENCIAIdLICENCIAObject->__toString().' - '.$objLICENCIAIdLICENCIAObject->NumeroCNP, $objLICENCIAIdLICENCIAObject->IdLICENCIA);
                if (($this->objListaProducto->LICENCIAIdLICENCIAObject) && ($this->objListaProducto->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
                    $objListItem->Selected = true;
                $this->lstLICENCIAIdLICENCIAObject->AddItem($objListItem);
            }
        return $this->lstLICENCIAIdLICENCIAObject;
    }

    /**
     * Create and setup QListBox lstPRODUCTOIdPRODUCTOObject
     * @param string $strControlId optional ControlId to use
     * @return QListBox
     */
    public function lstPRODUCTOIdPRODUCTOObject_Create($strControlId = null) {
        $this->lstPRODUCTOIdPRODUCTOObject = new QListBox($this->objParentObject, $strControlId);
        $this->lstPRODUCTOIdPRODUCTOObject->Name = QApplication::Translate('Producto');
        $this->lstPRODUCTOIdPRODUCTOObject->Required = true;
        if (!$this->blnEditMode)
            $this->lstPRODUCTOIdPRODUCTOObject->AddItem(QApplication::Translate('- Select One -'), null);
        $objPRODUCTOIdPRODUCTOObjectArray = Producto::LoadAll();
        if ($objPRODUCTOIdPRODUCTOObjectArray)
            foreach ($objPRODUCTOIdPRODUCTOObjectArray as $objPRODUCTOIdPRODUCTOObject) {
                $objListItem = new QListItem($objPRODUCTOIdPRODUCTOObject->__toString(), $objPRODUCTOIdPRODUCTOObject->IdPRODUCTO);
                if (($this->objListaProducto->PRODUCTOIdPRODUCTOObject) && ($this->objListaProducto->PRODUCTOIdPRODUCTOObject->IdPRODUCTO == $objPRODUCTOIdPRODUCTOObject->IdPRODUCTO))
                    $objListItem->Selected = true;
                $this->lstPRODUCTOIdPRODUCTOObject->AddItem($objListItem);
            }
        return $this->lstPRODUCTOIdPRODUCTOObject;
    }

    /**
     * Create and setup QTextBox txtPRODUCTOCantidad
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtPRODUCTOCantidad_Create($strControlId = null) {
        $this->txtPRODUCTOCantidad = new QTextBox($this->objParentObject, $strControlId);
        $this->txtPRODUCTOCantidad->Name = QApplication::Translate('Cantidad');
        $this->txtPRODUCTOCantidad->Text = $this->objListaProducto->PRODUCTOCantidad;
        $this->txtPRODUCTOCantidad->Required = true;
        return $this->txtPRODUCTOCantidad;
    }

    /**
     * Create and setup QIntegerTextBox txtPRODUCTOVolumen
     * @param string $strControlId optional ControlId to use
     * @return QIntegerTextBox
     */
    public function txtPRODUCTOVolumen_Create($strControlId = null) {
        $this->txtPRODUCTOVolumen = new QIntegerTextBox($this->objParentObject, $strControlId);
        $this->txtPRODUCTOVolumen->Name = QApplication::Translate('Volumen');
        $this->txtPRODUCTOVolumen->Text = $this->objListaProducto->PRODUCTOVolumen;
        $this->txtPRODUCTOVolumen->Required = true;
        return $this->txtPRODUCTOVolumen;
    }

    /**
     * Create and setup QTextBox txtPRODUCTOUnidad
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtPRODUCTOUnidad_Create($strControlId = null) {
        $this->txtPRODUCTOUnidad = new QListBox($this->objParentObject, $strControlId);
        $this->txtPRODUCTOUnidad->Name = QApplication::Translate('Unidad');
        $this->txtPRODUCTOUnidad->AddItem(QApplication::Translate('- Select One -'), null);
        $ListaEstatus = array(1 => 'Toneladas', 2 => 'Cm3', 3 => 'Kg');
        if ($ListaEstatus)
            foreach ($ListaEstatus as $objMat) {
                $objListItem = new QListItem($objMat, $objMat);
                if ($this->objListaProducto->PRODUCTOUnidad == $objMat)
                    $objListItem->Selected = true;
                $this->txtPRODUCTOUnidad->AddItem($objListItem);
            }
        return $this->txtPRODUCTOUnidad;
    }

    /**
     * Create and setup QTextBox txtPRODUCTOCostoUnitario
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtPRODUCTOCostoUnitario_Create($strControlId = null) {
        $this->txtPRODUCTOCostoUnitario = new QTextBox($this->objParentObject, $strControlId);
        $this->txtPRODUCTOCostoUnitario->Name = QApplication::Translate('Costo Unitario');
        $this->txtPRODUCTOCostoUnitario->Text = $this->objListaProducto->PRODUCTOCostoUnitario;
        $this->txtPRODUCTOCostoUnitario->MaxLength = ListaProducto::PRODUCTOCostoUnitarioMaxLength;
        return $this->txtPRODUCTOCostoUnitario;
    }

}

?>