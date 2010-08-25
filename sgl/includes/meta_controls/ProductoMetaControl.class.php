<?php

require(__META_CONTROLS_GEN__ . '/ProductoMetaControlGen.class.php');

/**
 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
 * and QControls to perform the Create, Edit, and Delete functionality of the
 * Producto class.  This code-generated class extends from
 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
 * display an HTML form that can manipulate a single Producto object.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create a new QForm or QPanel which instantiates a ProductoMetaControl
 * class.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 * 
 * @package My QCubed Application
 * @subpackage MetaControls
 */
class ProductoMetaControl extends ProductoMetaControlGen {
    // Initialize fields with default values from database definition
    /*
      public function __construct($objParentObject, Producto $objProducto) {
      parent::__construct($objParentObject,$objProducto);
      if ( !$this->blnEditMode ){
      $this->objProducto->Initialize();
      }
      }
     */

    /**
     * Create and setup QTextBox txtUnidad
     * @param string $strControlId optional ControlId to use
     * @return QTextBox
     */
    public function txtUnidad_Create($strControlId = null) {
        $this->txtUnidad = new QListBox($this->objParentObject, $strControlId);
        $this->txtUnidad->Name = QApplication::Translate('Unidad');
        $this->txtUnidad->AddItem(QApplication::Translate('- Select One -'), null);
        $ListaUnidades = array(1 => 'Toneladas', 2 => 'Cm3', 3 => 'Kg');
        if ($ListaUnidades)
            foreach ($ListaUnidades as $objMat) {
                $objListItem = new QListItem($objMat, $objMat);
                if ($this->objProducto->Unidad == $objMat)
                    $objListItem->Selected = true;
                $this->txtUnidad->AddItem($objListItem);
            }
        return $this->txtUnidad;
    }

}

?>